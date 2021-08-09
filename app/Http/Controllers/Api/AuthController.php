<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    //Login Function 

    public function login(){
        echo "Logiin End point requested";
    }

    //Login Function 

    public function signup(){
        echo 'Signup End point requested';
    }

    public function index(){
        echo 'Hellow World';
    }
}
