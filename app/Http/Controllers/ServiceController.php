<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;

class ServiceController extends Controller
{
   public function services () {
      $title = 'Services';
      $services = Service::all();
      
      return view('service', compact('title','services'));
   }
}
