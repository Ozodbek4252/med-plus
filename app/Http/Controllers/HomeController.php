<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Clinic;
use App\Models\ClinicAddress;
use App\Models\ClinicLink;
use App\Models\ClinicWorkDay;

class HomeController extends Controller
{
    public function index()
    {
    	return view("home");
    }

    public function redirects()
    {
    	$usertype = Auth::user()->usertype;

    	if($usertype=='1'){
    		return view('admin.adminhome');
    	} else {
	    	return view("home");
    	}
    }

    public function clinics()
    {
        $clinic = clinic::paginate(10);
        $clinicAddress = ClinicAddress::all();
        $clinicLink = ClinicLink::all();
        $clinicWorkDay = ClinicWorkDay::all();

        $num=0;

        return view("clinics", compact("clinic", "num", "clinicLink", "clinicAddress", "clinicWorkDay"));
    }

}
