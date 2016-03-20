<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Client;

class ClientController extends Controller
{
    //
    public function index(){
      $clients = Client::all();
      return view('frontend.clients',[
        'clients' => $clients,
      ]);
    }
}
