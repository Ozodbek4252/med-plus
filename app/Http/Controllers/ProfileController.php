<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\Models\User;

class ProfileController extends Controller
{
    public function completeaccount(Request $request)
    {
    	$user_id = Auth::user();

    	return view("profile.completeaccount"); 
    }

    public function updatecompleteaccount(Request $request, $id)
    {
    	$user = Auth::user();

    	$user->first_name = $request->first_name;
    	$user->last_name = $request->last_name;
    	$user->phone = $request->phone;
    	$user->email = $request->email;
    	$user->gender = $request->gender;
    	$user->date_of_birth = $request->date_of_birth;

    	$user->save();

    	return view("profile.show");

    	return view("profile.completeaccount"); 
    }

    
}
