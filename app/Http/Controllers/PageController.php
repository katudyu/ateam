<?php

namespace App\Http\Controllers;
use App\infomation;
use App\Grades;
use App\Event;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
  public function index(Request $request)
  {
    $items = Infomation::orderBy('info_id', 'desc')->get();
    return view('homepage.homepage',['items' => $items]);
  }
  
  public function event(Request $request)
  {
    $data = Event::all();
    $items = DB::table('grades')->get();
    $sorts = DB::table('grades')->orderBy("run", 'desc')->paginate(5);
    $param = [
      'data' => $data,
      'items' => $items,
      'sorts' => $sorts,
    ];
    return view('event.Event', $param);
  }

  public function info(Request $request)
  {
    $info = Infomation::where('info_id',$request->id)->first();
    return view('infomation.info', ['info' => $info]);
  }

 
}