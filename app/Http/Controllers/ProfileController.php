<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Address;

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
    	
   		if(!count(address::all())){
   			$address = new address;
   		}

    	for($e=0; $e<count(address::all()); $e++){
    		$data = address::all()[$e]->user_id;
    		if($data == $id){
    			$address = address::all()[$e];
    		}
    	}

    	$address->state = $request->state;
		$address->city = $request->city;
		$address->user_id = $request->id;

    	$user->first_name = $request->first_name;
    	$user->last_name = $request->last_name;
    	$user->phone = $request->phone;
    	$user->email = $request->email;
    	$user->gender = $request->gender;
    	$user->date_of_birth = $request->date_of_birth;
		
    	$user->save();
    	$address->save();

    	return view("profile.show");
    	// return view("profile.completeaccount");
    }

}
