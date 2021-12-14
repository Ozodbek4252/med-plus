<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Address;



use Illuminate\Support\Facades\DB;



class AdminController extends Controller
{
    public function users()
    {        
        // $posts = Post::latest()->with('user', 'likes')->paginate(10);
        // $data = User::latest()->paginate(3);
    	$data = User::all();
        $address = address::all();
    	$num = 1;

        $users = DB::table('users')
            ->join('addresses', 'users.address', 'addresses.id')
            ->select('users.*', 'addresses.*')
            ->get();

    	return view("admin.users", compact("data", "num", "address", "users"));
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
