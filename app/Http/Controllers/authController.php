<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class authController extends Controller
{
    public function authMethod(){
        return "I am from Authenticated Router";
    }
}
