<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Address;

class ProfileController extends Controller
{
    public function completeaccount(Request $request, $id)
    {
    	$user_id = Auth::user();
        $address = address::find($id);

    	return view("profile.completeaccount", compact("address")); 
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
                // dd($e);

    		}
    	}

        if($address->state==null){
            $address->state = $request->state;
        }
        if($address->state){
            $address->state = $request->state;
        }
        if($address->city==null){
            $address->city = $request->city;
        }
        if($address->city){
            $address->city = $request->city;
        }

		$address->user_id = $request->id;

    	$user->first_name = $request->first_name;
    	$user->last_name = $request->last_name;
    	$user->phone = $request->phone;
        if($user->gender==null){
            $user->gender = $request->gender;
        }        
    	$user->email = $request->email;
    	$user->date_of_birth = $request->date_of_birth;
		$user->address = $address->id;

    	$user->save();
    	$address->save();

    	return view("profile.show");
    	// return view("profile.completeaccount");
    }

}
