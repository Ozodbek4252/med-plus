<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class ClinicsController extends Controller
{
    public function searchclinics()
    {
    	$search_text = $_GET['clinics-search'];

    	// temporary getting users
    	$data = user::where('name', 'LIKE', '%'.$search_text.'%')->get();
    	
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
