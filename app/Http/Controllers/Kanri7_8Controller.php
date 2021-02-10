<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
//use App\Administrator;
use Illuminate\Http\Request;

class Kanri7_8Controller extends Controller
{
    public function index(Request $request)
    {
        $sort = $request->sort;
        $items = DB::table('administrator')->orderBy($sort,'asc')->paginate(5);
        $param = ['input' => '','items' => $items, 'sort' => $sort];
        return view('kanri7_8.index', $param);
    }
    public function find(Request $request)
    {
        $item = DB::table('administrator')->where('name',$request->input)->first();
        return view('Kanri7_8.find', ['item' => $item]);
    }
    public function show(Request $request)
    {
        $id = $request->id;
        $item = DB::table('administrator')->where('id',$id)->first();
        return view('Kanri7_8.show', ['item' => $item]);
    }

    public function add(Request $request){
        return view('Kanri7_8.add');
    }
    public function create(Request $request){
        $param = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ];
        DB::table('administrator')->insert($param);
        return redirect('/Kanri7_8');
    }
    public function edit(Request $request)
    {
        $item = DB::table('administrator')->where('id',$request->id)->first();
        return view('Kanri7_8.edit', ['item' => $item]);
    }

    public function update(Request $request)
    {
        $param = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ];
        DB::table('administrator')->where('id',$request->id)->update($param);
        return redirect('/Kanri7_8');
    }
    public function del(Request $request)
    {
        $item = DB::table('administrator')->where('id',$request->id)->first();
        return view('Kanri7_8.del', ['item' => $item]);
    }

    public function remove(Request $request)
    {
        DB::table('administrator')->where('id',$request->id)->delete();
        return redirect('/Kanri7_8');
    }
}
