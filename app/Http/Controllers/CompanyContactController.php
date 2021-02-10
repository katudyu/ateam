<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
class CompanyContactController extends Controller
{
    public function index()
    {
        return view('company.contact');
    }
 
    public function create()
    {
        return view('company.done');
    }

    public function done()
    {
        return view('company.confirm1');
    }
}