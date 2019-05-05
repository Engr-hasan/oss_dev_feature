<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\IndividualFIle;
use Carbon\Carbon;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AddrowController extends Controller
{
    public function getAddrow(){
    	return view('multiple_add_row.create_row');
    }
    public function storeAddrow(Request $request){
        $count=count($request->form_name);

        for ($i=0; $i <$count ; $i++) {
            $info= new IndividualFIle;
            $info->form_name=$request->form_name[$i];
            $image = $request->file('individual_file');
            if (isset($image)) {
                $imagename =$image[$i]->getClientOriginalExtension();
                if (!file_exists('uploads')) {
                    mkdir('uploads',0777,true);
                }
                $image[$i]->move('uploads',$imagename);
            }else{
                $imagename = 'default.png';
            }
            $info->individual_file = $imagename;
            $info->save();
        }
        return back();
    }
}
