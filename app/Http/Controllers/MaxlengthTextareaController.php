<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MaxlengthTextareaController extends Controller
{
    public function getText(){
        return view('FormFeatureTopics.textarea_max_length_count');
    }
}
