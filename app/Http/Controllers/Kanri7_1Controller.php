<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Validator;
use Illuminate\Support\Facades\DB;
use App\Model\Administrator;
use Illuminate\Support\Facades\Auth;
class Kanri7_1Controller extends Controller
{
    public function index(Request $request)
    {
        return view('Kanri7_1.index');
    }
    public function getAuth(Request $request)
    {
        return view('Kanri.auth');
    }
    public function postAuth(Request $request)
    {
        return view('kanri.auth');
    }
}