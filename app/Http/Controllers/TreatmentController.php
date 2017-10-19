<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Treatment;

class TreatmentController extends Controller
{
    public function show(Treatment $treatment)
    {
      return view('treatment.show', ['data' => $treatment]);
    }
}
