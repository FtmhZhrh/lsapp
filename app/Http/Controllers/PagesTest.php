<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesTest extends Controller
{
     public function test(){
    	return view('pages.index');
    }
}
