<?php

namespace App\Http\Controllers;

use App\Notifications\AddNewAdmin;
use GuzzleHttp\Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Password;
use Illuminate\Mail\Message;
use App\Models\Products;
use App\Models\Contact;
use App\Models\Admin;
use App\Models\favourite;
use App\Models\Appointments;
use App\Models\Subscription;
use App\Models\Rating;
use App\Models\User;
use App\Models\UserData;
use App\Models\Notifications;
use Dirape\Token\Token;
use App\Notifications\postNewNotifications;
use Illuminate\Support\Facades\Notification;
use App\Http\Controllers\sendEmail;


class UserController extends Controller
{
    public function __construct()
    {
        if(Auth::check()) {
            $this->middleware(['verified']);
        }
        
    }
    public function userSession(){
        $userId=Auth::user()->id;
        $user = DB::select( DB::raw("SELECT users.id as id,users.name as name, users.email as email, users.password as password, users.created_at as created_at, personal_data_of_users.image_path as image,personal_data_of_users.about_user as about_user ,personal_data_of_users.last_login as last_login ,personal_data_of_users.save_login as save_login,personal_data_of_users.use_cookie as use_cookie FROM users INNER JOIN personal_data_of_users ON users.id=personal_data_of_users.user_id where users.id=".$userId."") );
        return $user;
    }
    public function welcome_view(){
    $products= Products::get();
    if(!Auth::check()) 
    {
        return view('welcome')->with("products",$products);;
    }else{
        $user=$this->userSession();
        return view("welcome")->with("user",$user)->with("products",$products);
    }
    }
    public function my_favourites(){
        if(Auth::check()) 
        {
            $user=$this->userSession();
            $productsIds=array();;
            $favourites= favourite::where("user_id",Auth::user()->id)->get();
            if(isset($favourites[0]->user_id)){
                foreach ($favourites as $favourite) {
                    array_push($productsIds,$favourite->product_id);
                }
                $products = Products::whereIn('id', $productsIds)->get();
         
                return view('myFavourites')->with("products",$products)->with("user",$user);;
            }else{
                $empty=true;
                $products = Products::whereIn('id', $productsIds)->get();
         
                return view('myFavourites')->with("products",$products)->with("user",$user)->with("empty",$empty);;
            }
           
        }else{
            abort("404");
        }
        }
    public function addToFav(Request $request){
        $this->middleware('auth');
        if(Auth::check()) 
        {
            $check=favourite::where("user_id",$request->user_id)->where("product_id",$request->product_id)->get();
    
            if(!isset($check[0]->user_id)){
             
                favourite::create([
                    "user_id" => $request->user_id,
                    "product_id"=> $request->product_id,
                    "is_favourite" =>1
                ]);
                print_r(json_encode(["success"=>true]));
            }else{
                print_r(json_encode(["success"=>false]));
            }
            
        }else{
            abort("404");
        }
     }
     public function removeFromFav(Request $request){
        $this->middleware('auth');
        if(Auth::check()) 
        {
            favourite::where("user_id",$request->user_id)->where("product_id",$request->product_id)->delete();
            print_r(json_encode(["success"=>true]));
        }else{
            abort("404");
        }
     }
    public function my_profile(){
        $this->middleware('auth');
        if(Auth::check()) 
        {
            $user=$this->userSession();
            return view("my_profile")->with("user",$user);
        }else{
            abort("404");
        }
     }
     public function about_view(){
        if(!Auth::check()) 
        {
            return view('about');
        }else{
            $user=$this->userSession();
            return view("about")->with("user",$user);
        }
     }
     public function services_view(){
        if(!Auth::check()) 
        {
            return view('services');
        }else{
            $user=$this->userSession();
            return view("services")->with("user",$user);
        }
     }
     public function faqs_view(){
        if(!Auth::check()) 
        {
            return view('faqs');
        }else{
            $user=$this->userSession();
            return view("faqs")->with("user",$user);
        }
     }
     public function contact_view(){
        if(!Auth::check()) 
        {
            return view('contact');
        }else{
            $user=$this->userSession();
            return view("contact")->with("user",$user);
        }
     }
     
     public function shop_view(){
        $products= Products::get();

        if(!Auth::check()) 
        {
            return view('shop')->with("products",$products);
        }else{
            $user=$this->userSession();
            return view("shop")->with("user",$user)->with("products",$products);
        }
     }
     public function single_product_view(Request $request){
            $ratings =Rating::where("product_id",$request->id)->where("is_approved",1)->get();
            $product= Products::where("id",$request->id)->get();
            $disableDates=Appointments::where("is_approved",1)->where("product_id",$request->id)->get();
            $disableDatesToArray=[];
            foreach ($disableDates as $date) {
                $dates=$this->getBetweenDates($date->product_checkin_date,$date->product_checkout_date);
                foreach ($dates as $dateone) {
                    $disableDatesToArray[]=$dateone;

                }
               
            }
        if(!Auth::check()) 
        {
            return view('single_product')->with("product",$product)->with("ratings",$ratings )->with("hideConflict","true")->with("disabledDates",$disableDatesToArray);;
        }else{
            $user=$this->userSession();
            return view("single_product")->with("user",$user)->with("product",$product)->with("ratings",$ratings)->with("hideConflict","true")->with("disabledDates",$disableDatesToArray);;;
        }
     }
     function getBetweenDates($startDate, $endDate) {
        $rangArray = [];
     
        $startDate = strtotime($startDate);
        $endDate = strtotime($endDate);
     
        for ($currentDate = $startDate; $currentDate <= $endDate; $currentDate += (86400)) {
            $date = date('Y-m-d', $currentDate);
            $rangArray[] = $date;
        }
     
        return $rangArray;
    }
     public function getDisabledDate(Request $request){
        $disableDates=Appointments::where("is_approved",1)->where("product_id",$request->id)->get();
        $disableDatesToArray=[];
            foreach ($disableDates as $date) {
                $disableDatesToArray[]= str_replace("-","/",$date->product_checkin_date);
                $disableDatesToArray[]=str_replace("-","/",$date->product_checkout_date);

            }
        return(json_encode($disableDatesToArray));
     }
     public function send_appointment_user(Request $request){
        if(Auth::check()) 
        {           
            $checkin =explode("/",$request->checkin);
            $checkin=$checkin[2]."-".$checkin[0]."-".$checkin[1];
            $checkout =explode("/",$request->checkout);
            $chekout=$checkout[2]."-".$checkout[0]."-".$checkout[1];
            Appointments::create([
                "user_id" =>$request->user_id,
                "product_id"=>$request->product_id,
                "product_total_price"=>$request->price,
                "product_name"=>$request->product_name,
                "product_checkin_date"=> $checkin." 21:30:05", //2023-03-31 21:30:05
                "product_checkout_date"=> $chekout." 21:30:05",//'04-11-2023 21:30:05
                "is_verifiyed"=>0,
                "is_approved"=>0,
                "is_read"=>0,
            ]);
        }else{
            abort("404");
        }
     }
     public function add_rating_user(Request $request){
        if(Auth::check()) 
        {
            $name=Auth::user()->name;
            $email=Auth::user()->email;
        }else{
            $name=$request->name;
            $email=$request->email;
        }
        Rating::Create([
            "product_id"=>$request->product_id,
            "name"=>$name,
            "email"=>$email,
            "description"=>$request->description,
            "product_name"=>$request->product_name,
            "rating"=>$request->radio1,
            "is_approved"=>0,
            "is_read"=>0,
        ]);
     }
     
     public function my_profile_update_user(Request $request){
        if(Auth::check() && $request->id == Auth::user()->id) 
        {
            try {
                DB::beginTransaction();
                User::where("id",$request->id)->update([
                    "name" => $request->first_name." ".$request->second_name,
                    "email"=>$request->email,   
                ]);
                UserData::where("user_id",$request->id)->update([
                    "about_user" => $request->about
                ]);
                DB::commit();
                return json_encode(["success"=>true]);
            } catch (\Throwable $th) {
                //throw $th;
                DB::rollBack();
                return json_encode(["success"=>false ,"error"=>$th->getMessage()]);
            }
            
        }
     }
  
     public function contact_message(Request $request){
        
            try {
                DB::beginTransaction();
                Contact::create([
                    "user_name" => $request->first_name." ".$request->last_name,
                    "user_email"=>$request->email,   
                    "message" => $request->message,
                    "is_read"=>0,
                    "replayed"=>0,
                ]);
               
                DB::commit();
                return json_encode(["success"=>true]);
            } catch (\Throwable $th) {
                //throw $th;
                DB::rollBack();
                return json_encode(["success"=>false ,"error"=>$th->getMessage()]);
            }
            
        
     }
     public function new_subscription(Request $request){
        $check =Subscription::where("email",$request->email)->get();
        if(isset($check[0]->email)){
            Subscription::create(["email" => $request->email]);
            print_r(json_encode(["success"=>true]));
        }else{
            print_r(json_encode(["success"=>false]));
        }
    }
     public function update_user_password(Request $request){
        if(Auth::check() && $request->id == Auth::user()->id) 
        {
            try {
                $newPassword=$request->newPassword;
                $currentPassword=$request->currentPassword;
                $oldPassword=Auth::user()->password;
                if (Hash::check($currentPassword, $oldPassword)) {
                    $this->updatePassword($newPassword);
                    return json_encode(["error"=>false]);
                }else{
                    return json_encode(["error"=>true ,"oldPassword"=>$oldPassword ,"currentPassword"=>Hash::make($currentPassword)]);
    
                }
            } catch (\Throwable $th) {
                //throw $th;
                return json_encode(["success"=>false ,"error"=>$th->getMessage()]);
            }
            
        }
     }
    
    public function updatePassword($newPassword){
        User::where("id",Auth::user()->id)->update([
            'password'=>Hash::make($newPassword),
        ]);
    
     }
}

