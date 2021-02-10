<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\contact;
 
class ContactController5 extends Controller
{
    public function form()
    {
        return view('company.form');
    }
 
    public function confirm(Request $request)
    {
        $contact = new Contact($request->all());
 
        return view('company.confirm', compact('contact'));
    }
    public function process(Request $request)
    {
        return view('company.process');
    }
}