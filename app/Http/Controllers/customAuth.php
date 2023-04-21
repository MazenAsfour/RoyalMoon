<?php

namespace App\Http\Controllers;

use GuzzleHttp\Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\Models\Admin;
use App\Models\User;
use App\Models\UserData;
class customAuth extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function welcomeView(){
       
        $userId=Auth::user()->id;
        $user = DB::select( DB::raw("SELECT users.id as id,users.name as name, users.email as email, personal_data_of_users.image_path as image,personal_data_of_users.about_user as about_user ,personal_data_of_users.last_login as last_login ,personal_data_of_users.save_login as save_login,personal_data_of_users.use_cookie as use_cookie FROM users INNER JOIN personal_data_of_users ON users.id=personal_data_of_users.user_id where users.id=".$userId."") );
        $checkAdmin =Admin::where("user_id", $userId)->get();
        if(count($checkAdmin) == 1){
        // return view("welcome")->with("admin",true)->with("admin",$user);
        }else{
        }
        // return view("welcome")->with("admin",false)->with("user",$user);

    }
}
