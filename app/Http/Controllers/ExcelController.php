<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Accommodation;
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
