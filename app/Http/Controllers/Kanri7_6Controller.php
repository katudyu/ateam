<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
//use App\Company;
use Illuminate\Http\Request;

class Kanri7_6Controller extends Controller
{
    public function index(Request $request)
    {
        $sort = $request->sort;
        $items = DB::table('company')->orderBy($sort,'asc')->paginate(5);
        $param = ['input' => '','items' => $items, 'sort' => $sort];
        return view('Kanri7_6.index', $param);
    }
    public function find(Request $request)
    {
        $item = DB::table('company')->where('company_name',$request->input)->first();
        return view('Kanri7_6.find', ['item' => $item]);
    }
    public function show(Request $request)
    {
        $id = $request->id;
        $item = DB::table('company')->where('id',$id)->first();
        return view('Kanri7_6.show', ['item' => $item]);
    }

    public function add(Request $request){
        return view('Kanri7_6.add');
    }
    public function create(Request $request){
        $param = [
            'company_name' => $request->company_name,
            'name' => $request->name,
            'phone_number' => $request->phone_number,
            'email' => $request->email,
            'password' => $request->password,
        ];
        DB::table('company')->insert($param);
        return redirect('/Kanri7_6');
    }
    public function edit(Request $request)
    {
        $item = DB::table('company')->where('id',$request->id)->first();
        return view('Kanri7_6.edit', ['item' => $item]);
    }

    public function update(Request $request)
    {
        $param = [
            'company_name' => $request->company_name,
            'name' => $request->name,
            'phone_number' => $request->phone_number,
            'email' => $request->email,
            'password' => $request->password,
        ];
        DB::table('company')->where('id',$request->id)->update($param);
        return redirect('/Kanri7_6');
    }



    public function del(Request $request)
    {
        $item = DB::table('company')->where('id',$request->id)->first();
        return view('Kanri7_6.del', ['item' => $item]);
    }

    public function remove(Request $request)
    {
        DB::table('company')->where('id',$request->id)->delete();
        return redirect('/Kanri7_6');
    }
}
