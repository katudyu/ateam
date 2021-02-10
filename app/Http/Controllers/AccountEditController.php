<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountEditController extends Controller
{
    public function index(Request $request)
    {
        return view('company.accountedit');
    }
}
