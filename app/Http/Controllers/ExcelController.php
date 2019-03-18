<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ExcelCustomerSheet;
use Input;
use DB;
use Excel;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ExcelController extends Controller
{
    public function getCuntomer(){
    	$cusData = ExcelCustomerSheet::all();
    	return view('lar_excel_sheet.excel-data-list',compact('cusData'));
    }
    
    public function importCuntomerData(){
    	return view('lar_excel_sheet.import-cus-data');
    }

    public function cusDataImport(){
    	Excel::load(Input::file('cus_data'), function($reader){
    		$reader->each(function($sheet){
    			ExcelCustomerSheet::firstOrCreate($sheet->toArray());
    		});
    	});
    	return Redirect::to('excel-data-list');
    }

    public function cusDataExport(){
    	$customer=ExcelCustomerSheet::all();
    	Excel::create('Export Data', function($excel) use ($customer){
    		$excel->sheet('Sheet 1', function($sheet) use ($customer){
    			$sheet->fromArray($customer);
    		});
    	})->export('xlsx');
    }
    
    public function delCusData(){
    	DB::table('excel_customer_sheets')->delete();
    	return back();
    }

    public function getText(){
        return view('FormFeatureTopics.textarea_max_length_count');
    }
}
