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
        if(address::find($id) != null){
            $address = address::find($id);
        } else {
            $address = null;
        }

            
        return $return = view("profile.completeaccount", compact("address")); 
    }

    public function updatecompleteaccount(Request $request, $id)
    {
    	$user = Auth::user();
        $address = address::all();

        $temp = 0;
        foreach ($address as $manzil) {
            if($manzil->user_id == $id){
                $temp = 1;
                $address1 = $manzil;
                $manzil_id = $manzil->id;
            } else {
                $address = new address;
            }
        }
        if($temp==1) {
            // update
            $address = address::find($manzil_id);
            if($request->state != 'Select') {
                $address->state = $request->state;
                $address->user_id = $id;
            }
            if($request->city != null) {
                $address->city = $request->city;
                $address->user_id = $id;

            }
            $address->save();
            $user->address = $address->id;
        } else {
            // new
            if($request->state != 'Select' || $request->city != null) {
                $address->state = $request->state;
                $address->city = $request->city;
                $address->user_id = $id;
                $address->save();
            }
            $address->save();
            $user->$address = $address->$id;
        }




    	$user->first_name = $request->first_name;
    	$user->last_name = $request->last_name;
    	$user->phone = $request->phone;
        if($user->gender==null){
            $user->gender = $request->gender;
        } else {
            if($request->gender != null){
               $user->gender = $request->gender; 
            }
        }
    	$user->email = $request->email;
    	$user->date_of_birth = $request->date_of_birth;

    	$user->save();

    	return view("profile.show");
    	// return view("profile.completeaccount");
    }

    public function viewClinics($id)
    {

        return view();
    }

}
