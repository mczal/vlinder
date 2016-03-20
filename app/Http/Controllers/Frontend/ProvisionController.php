<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Provision;

class ProvisionController extends Controller
{
    //
    public function index(){
      $provisions = Provision::all();
      return view('frontend.provisions',[
        'provisions' => $provisions,
      ]);
    }
}
