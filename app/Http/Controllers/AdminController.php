<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Address;


class AdminController extends Controller
{
    public function users()
    {        
        // $posts = Post::latest()->with('user', 'likes')->paginate(10);
        // $data = User::latest()->paginate(3);
    	$data = User::all();
        $address = address::all();
    	$num = 1;

    	return view("admin.users", compact("data", "num", "address"));
    }

    public function deleteuser($id)
    {
    	$data = user::find($id);
    	$data->delete();

    	return redirect()->back();
    }

    public function role($id)
    {
        $data = user::find($id);

        return view('admin.role', compact("data"));
    }





    
}
