<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class deleteController extends Controller
{
    public function delete($id)
    {
        $delete =DB::table('contact')-> where('id',$id)-> delete();
        $notification=array(
            'message'=>'Successfully deleted contact',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);
    }
}
