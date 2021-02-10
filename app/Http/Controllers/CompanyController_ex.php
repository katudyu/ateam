<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\person;
use Illuminate\Http\Request;

class CompanyController2 extends Controller
{
    public function index(Request $request)
    {
        return view('company.index2');
    }

    public function goods(Request $request)
    {
        $items = DB::table('people');
        return view('company.goods', ['items' => $items]);
    }
}