<?php

namespace App\Http\Controllers\Cookies;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Route;
use App\Models\User;

class SetCookies extends Controller
{
    public function checkAcceptCookie(){

        if(isset($_COOKIE['AcceptUserCookie'])){
            echo 0;
            setcookie('WaitingAcceptCookie',true, time() - 60*60,"/");
        }else if(!isset($_COOKIE['WaitingAcceptCookie'])){
            echo 1;
            $this->WaitingAcceptCookie();
        }else{
            $this->WaitingAcceptCookie();
            echo 0;
        }
    }
    public function WaitingAcceptCookie(){
        setcookie("WaitingAcceptCookie",true,time() +60*60,"/");
    }
    public function AcceptUserCookie(){
        setcookie("AcceptCookie" , true, time() + 60*60*12 , "/");
    }

}
