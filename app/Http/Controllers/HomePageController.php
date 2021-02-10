<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homepageController extends Controller
{
  public function index(Request $request)
  {
    return view('homepage');
  }

  public function event()
  {
    return view('Event');
  }

  public function info()
  {
    $items = DB::select('select * from infomation');
    return view('info',['items' => $items]);
  }

}
