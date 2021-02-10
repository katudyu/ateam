<?php

namespace App\Http\Controllers;
use App\Contact;
use Illuminate\Http\Request;

class Kanri7_4Controller extends Controller
{
    public function index(Request $request)
    {
        $sort = $request->sort;
        $items = Contact::orderBy($sort,'asc')->paginate(5);
        $param = ['input' => '','items' => $items, 'sort' => $sort];
        return view('Kanri7_4.index', $param);
    }
    public function input(Request $request)
    {
        return view('kanri7_4.input',['msg' => '送信内容を入力']);
    }
    public function output(Request $request)
    {
        return view('kanri7_4.output');
    }
    public function reply(Request $request)
    {
        return redirect('/Kanri7_4');
    }
}