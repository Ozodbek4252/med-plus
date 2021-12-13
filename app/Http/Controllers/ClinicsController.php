<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Address;
use App\Models\Clinic;
use App\Models\ClinicLink;
use App\Models\ClinicAddress;
use App\Models\ClinicWorkDay;

class ClinicsController extends Controller
{
    public function addrole(Request $request, $id)
    {
        $clinic = new clinic;
        $links = new ClinicLink;
        $cl_address = new ClinicAddress;
        $work_day = new ClinicWorkDay;



        $clinic->user_id = $id;
        $clinic->name = $request->name;
        $clinic->phone = $request->phone;
        $clinic->logo = $request->logo;
        $clinic->save();

        // if($request->fb != null){
        //     dd('ok');
        // }
        $links->clinic_id = $clinic->id;
        $links->fb = $request->fb;
        $links->email = $request->email;
        $links->tg = $request->tg;
        $links->insta = $request->insta;
        $links->save();

        $cl_address->clinic_id = $clinic->id;
        $cl_address->state = $request->state;
        $cl_address->street = $request->street;
        $cl_address->city = $request->city;
        $cl_address->apartment = $request->apartment;
        $cl_address->zip = $request->zip;
        $cl_address->save();


        if($request->mon == 'check' || $request->tue == 'check'){
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
        $work_day->save();

        $clinic->work_days;
        $clinic->address = $cl_address->id;
        $clinic->links = $links->id;
        $clinic->save();


        return redirect()->back();
    }



    public function searchclinics()
    {
    	$search_text = $_GET['clinics-search'];

    	// temporary getting users
    	$data = user::where('first_name', 'LIKE', '%'.$search_text.'%')->get();
    	
    	// for($e=0; $e<count($data);$e++){
    	// 	if($data[$e]->name=='admin'){
    	// 		// unset($data[$e]);
    	// 		// \array_splice($data, $e-1, 1);
    	// 	}
    	// 	echo gettype($data);
    	// 	echo $data[$e]->name;
    	// }
    	$num = 1;
    	return view("clinics", compact("data", "num"));
    }
}
