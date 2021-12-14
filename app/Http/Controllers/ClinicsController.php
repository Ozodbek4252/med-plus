<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Address;
use App\Models\Clinic;
use App\Models\ClinicLink;
use App\Models\ClinicAddress;
use App\Models\ClinicWorkDay;

use Illuminate\Support\Facades\DB;

class ClinicsController extends Controller
{
    public function addrole(Request $request, $id)
    {
        $clinic = new clinic;
        $links = new ClinicLink;
        $cl_address = new ClinicAddress;



        $clinic->user_id = $id;
        $clinic->name = $request->name;
        $clinic->phone = $request->phone;
        $clinic->logo = $request->logo;
        $clinic->save();

        $links->clinic_id = $clinic->id;
        $links->fb = $request->fb;
        $links->email = $request->email;
        $links->tg = $request->tg;
        $links->insta = $request->insta;
        $links->save();

        $cl_address->clinic_id = $clinic->id;
        if($request->state != "Choose...") {
            $cl_address->state = $request->state;
        } else {
            $cl_address->state = null;
        }
        $cl_address->street = $request->street;
        $cl_address->city = $request->city;
        $cl_address->apartment = $request->apartment;
        $cl_address->zip = $request->zip;
        $cl_address->save();


        if($request->mon == 'check' || $request->tue == 'check' || $request->wed == 'check'
             || $request->thu == 'check' || $request->fri == 'check' || $request->sat == 'check' || $request->sun == 'check'){
            $work_day = new ClinicWorkDay;
            $work_day->clinic_id = $clinic->id;
        }

        if($request->monstart != null && $request->monend != null)
        {
            $mon = $request->monstart.' - '.$request->monend;
            $work_day->mon = $mon;
        }
        if($request->tuestart != null && $request->tueend != null)
        {
            $tue = $request->tuestart.' - '.$request->tueend;
            $work_day->tue = $tue;
        }
        if($request->wedstart != null && $request->wedend != null)
        {
            $wed = $request->wedstart.' - '.$request->wedend;
            $work_day->wed = $wed;
        }
        if($request->thustart != null && $request->thuend != null)
        {
            $thu = $request->thustart.' - '.$request->thuend;
            $work_day->thu = $thu;
        }
        if($request->fristart != null && $request->friend != null)
        {
            $fri = $request->fristart.' - '.$request->friend;
            $work_day->fri = $fri;
        }
        if($request->satstart != null && $request->satend != null)
        {
            $sat = $request->satstart.' - '.$request->satend;
            $work_day->sat = $sat;
        }
        if($request->sunstart != null && $request->sunend != null)
        {
            $sun = $request->sunstart.' - '.$request->sunend;
            $work_day->sun = $sun;
        }
        if($request->mon == 'check' || $request->tue == 'check' || $request->wed == 'check'
             || $request->thu == 'check' || $request->fri == 'check' || $request->sat == 'check' || $request->sun == 'check'){

            $work_day->save();
        $clinic->work_days = $work_day->id;
        }

        $clinic->address = $cl_address->id;
        $clinic->links = $links->id;
        $clinic->save();


        return redirect('/users');
    }



    public function searchclinics()
    {
    	$search_text = $_GET['clinics-search'];

    	// temporary getting users
    	$data = user::where('first_name', 'LIKE', '%'.$search_text.'%')->get();
    	
    	$num = 1;
    	return view("clinics", compact("data", "num"));
    }

    public function clinicTable(){
        $num = 1;
        $clinic = clinic::all();
        $clinicLink = clinicLink::all();
        $clinicAddress = clinicAddress::all();
        $clinicWorkDay = clinicWorkDay::all();

        
                

        // $data = User::all();
        // $address = address::all();

        // $users = DB::table('clinics')
        //     ->join('clinic_work_days', 'clinics.work_days', 'clinic_work_days.id')
        //     ->join('clinic_links', 'clinics.links', 'clinic_links.id')
        //     ->join('clinic_addresses', 'clinics.address', 'clinic_addresses.id')
        //     ->select('clinics.*', 'clinic_work_days.*', 'clinic_links.*', 'clinic_addresses.*')
        //     ->get();




        return view("admin.clinicTable", compact("clinic", "num", "clinicLink", "clinicAddress", "clinicWorkDay"));
    }
}
