<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\userModel;

class crudController extends Controller
{
    public function Select(){
            $result = userModel::get();
            return $result;
    }

    public function Insert(Request $request){
            $name = $request->input('name');
            $email = $request->input('email');
            $mobile = $request->input('mobile');
             
            $result = userModel::insert(["name"=>$name, "email"=> $email, "mobile"=>$mobile]);
            if($result){return "Data Inserted Successfully";}
            else{return "Data Failed To Insert";}
    }


    public function Delete(Request $request){
            $id = $request->input('id');
            $result = userModel::where('id',$id) -> delete();

            if($result){return "Data Deleted Successfully";}
            else{return "Data Failed To Delete";}
    }

    public function Update(Request $request){     
            $id = $request->input('id');
            $name = $request->input('name');

            $result= userModel::where('id',$id) -> update(['name' => $name]);
            if($result){return "Data Updated Successfully";}
            else{return "Data Failed To Update";}
    }
}