<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Home extends Controller
{
   public function Index(){
       return view('back-end.home');
    }
}
