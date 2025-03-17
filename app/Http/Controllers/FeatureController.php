<?php

namespace App\Http\Controllers;

use App\Models\Features;
use Illuminate\Http\Request;

class FeatureController extends Controller
{
    public function index(){
            $feature = features::all();

        return view("features.index", ['feature' => $feature]); 
    }
    
}
