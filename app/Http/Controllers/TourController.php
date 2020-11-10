<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TourController extends Controller
{
     function index()
   {
      return view('tour.tour');
   }
}
