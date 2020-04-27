<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class postController extends Controller
{
    public function posts(Request $request)
    {
        $data=array();
        $data['First_name']=$request->First_name;
        $data['Last_name']=$request->Last_name;
        $data['BirthDate']=$request->BirthDate;
        $data['email']=$request->email;
        $data['Address']=$request->inputAddress;
        $data['phone']=$request->phone;
        $posts=DB::table('contact')->insert($data);
        if($posts){
            return Redirect()->back();
        }
        else{
            return Redirect()->back();
        }
    }
    public function destroy(Request $request,$id){
        $delete=DB::table('contact')->find($id)->delete();
        if ($delete){
            return response('Deleted Successfully');
        }
    }
}
