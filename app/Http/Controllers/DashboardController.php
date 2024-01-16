<?php

namespace App\Http\Controllers;

use App\Models\Ideas;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

 public function index()
 {

    $ideas = new Ideas();
    $ideas->content = "test";
    $ideas ->likes = 0;
    $ideas-> save();


    
    
    return view('dashboard');
 }
    
}
