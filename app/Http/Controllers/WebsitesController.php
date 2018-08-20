<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Website;

class WebsitesController extends Controller
{
    public function index(){
        $websites = Website::all();

        return view('website.index', compact('websites'));
    }
}
