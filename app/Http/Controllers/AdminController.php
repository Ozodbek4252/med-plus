<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;


class AdminController extends Controller
{
    public function users()
    {
    	$data = user::all();
    	$num = 1;

    	return view("admin.users", compact("data", "num"));
    }

    public function deleteuser($id)
    {
    	$data = user::find($id);
    	$data->delete();

    	return redirect()->back();
    }







    
}
