<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessegeController extends Controller
{
  public function hello()
  {
    return view('message.hello');
  }
}
