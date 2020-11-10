<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OfferController extends Controller
{
     function index()
   {
      return view('offer.offer');
   }
}
