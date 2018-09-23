<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Accommodation;
use App\StaffVolunteer;
use App\Volunteer;

use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Input;
use Session;

class ExcelCOntroller extends Controller{

     public function __construct(){

        	$this->middleware('auth');
    }
    public function downloadExcel($database,$type){

    		if($database=="accommodations"){
    		$data = Accommodation::get()->toArray();
    		return Excel::create('AccommodationMIHU', function($excel) use ($data) {
    			$excel->sheet('mySheet', function($sheet) use ($data)
    	        {
    				$sheet->fromArray($data);
    	        });
    		})->download($type);
            }

            if($database=="transport"){
    		$data = Transportation::get()->toArray();
    		return Excel::create('TransportationMIHU', function($excel) use ($data) {
    			$excel->sheet('mySheet', function($sheet) use ($data)
    	        {
    				$sheet->fromArray($data);
    	        });
    		})->download($type);
            }
            if($database=="seva"){
    		$data = Seva::get()->toArray();
    		return Excel::create('TransportationMIHU', function($excel) use ($data) {
    			$excel->sheet('mySheet', function($sheet) use ($data)
    	        {
    				$sheet->fromArray($data);
    	        });
    		})->download($type);
            }
            if($database=="darshan"){
    		$data = Darshan::get()->toArray();
    		return Excel::create('DarshanMIHU', function($excel) use ($data) {
    			$excel->sheet('mySheet', function($sheet) use ($data)
    	        {
    				$sheet->fromArray($data);
    	        });
    		})->download($type);
            }
            if($database=="security"){
    		$data = Security::get()->toArray();
    		return Excel::create('SecurityMIHU', function($excel) use ($data) {
    			$excel->sheet('mySheet', function($sheet) use ($data)
    	        {
    				$sheet->fromArray($data);
    	        });
    		})->download($type);
            }
            if($database=="specialevent"){
            $data = SpecialEvent::get()->toArray();
            return Excel::create('SpecialeventsMIHU', function($excel) use ($data) {
                $excel->sheet('mySheet', function($sheet) use ($data)
                {
                    $sheet->fromArray($data);
                });
            })->download($type);
            }
            if($database=="food"){
            $data = Food::get()->toArray();
            return Excel::create('FoodMIHU', function($excel) use ($data) {
                $excel->sheet('mySheet', function($sheet) use ($data)
                {
                    $sheet->fromArray($data);
                });
            })->download($type);
            }
            if($database=="coordinator"){
            $data = Coordinator::get()->toArray();
            return Excel::create('CoordinatorsMIHU', function($excel) use ($data) {
                $excel->sheet('mySheet', function($sheet) use ($data)
                {
                    $sheet->fromArray($data);
                });
            })->download($type);
            }
            if($database=="volunteer"){
            $data = Volunteer::get()->toArray();
            return Excel::create('VolunteersMIHU', function($excel) use ($data) {
                $excel->sheet('mySheet', function($sheet) use ($data)
                {
                    $sheet->fromArray($data);
                });
            })->download($type);
            }
            if($database=="staff"){
            $data = StaffVolunteer::get()->toArray();
            return Excel::create('StaffMIHU', function($excel) use ($data) {
                $excel->sheet('mySheet', function($sheet) use ($data)
                {
                    $sheet->fromArray($data);
                });
            })->download($type);
            }
    }

    public function importExcel($database){
            //Accommodations
            if($database =='accommodations'){
    		if(Input::hasFile('import_file')){
    			$path = Input::file('import_file')->getRealPath();
    			$data = Excel::load($path, function($reader) {
    			})->get();
    			if(!empty($data) && $data->count()){
    				foreach ($data as $key => $value) {
    					Accommodation::create([
                        'gender' => $value->gender,
                        'areaName' => $value->areaname,
                        'locationofAcc' => $value->locationofacc,
                        'category' => $value->category,
                        'coord' => $value->coord,
                        'isFull' => $value->isfull,
                        'contact' => $value->contact
                    ]);
    				}
                        Session::flash('success', 'Accommodation Details successfully uploaded!');
       					return redirect()->route('admin.index');
    			}
    		}
        }
        else{
            return view('admin.index');
        }
    	return back();
    }
}
