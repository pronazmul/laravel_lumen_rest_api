<?php

namespace App\Http\Controllers;
use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\DB;

class RestController extends Controller
{
    public function Catch(){
        $result = DB::select("SELECT * FROM user");
        return $result;
    }
}