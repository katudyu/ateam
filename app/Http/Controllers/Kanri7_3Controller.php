<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB; 
//use App\User;
use Illuminate\Http\Request;
use Validator;
class Kanri7_3Controller extends Controller
{
    public function index(Request $request)
    {
        $sort = $request->sort;
        $items = DB::table('users')->orderBy($sort,'asc')->paginate(5);
        $param = ['input' => '','items' => $items, 'sort' => $sort];
        return view('Kanri7_3.index', $param);
    }
    public function find(Request $request)
    {
        $item = DB::table('users')->where('name',$request->input)->first();
        return view('Kanri7_3.find', ['item' => $item]);
    }

    public function show(Request $request)
    {
        $id = $request->id;
        $item = DB::table('users')->where('id',$id)->first();
        $items = DB::table('postal')->where('id', $id)->first();
        return view('Kanri7_3.show', ['item' => $item],['items' => $items]);
    }

    public function add(Request $request){
        return view('Kanri7_3.add2');
    }
    public function create(Request $request){
        $param1 = [
            'name' => $request->name,
            'sex' => $request->sex,
            'weight' => $request->weight,
            'birthday' => $request->birthday,
            'addr11' => $request->addr11,
            'email' => $request->email,
            'password' => $request->password,
            'community_id' => $request->community_id,
        ];
        DB::table('users')->insert($param1);
        $param2 = [
            'zip11' => $request->zip11,
        ];
        DB::table('postal')->insert($param2);
        return redirect('/Kanri7_3');
    }
    public function edit(Request $request)
    {
        $item = DB::table('users')->where('id',$request->id)->first();
        $items = DB::table('postal')->where('id', $request->id)->first();
        return view('Kanri7_3.edit2', ['item' => $item],['items' => $items]);
    }

    public function update(Request $request)
    {
        $param1 = [
            'name' => $request->name,
            'sex' => $request->sex,
            'weight' => $request->weight,
            'birthday' => $request->birthday,
            'addr11' => $request->addr11,
            'email' => $request->email,
            'password' => $request->password,
            'community_id' => $request->community_id,
        ];
        DB::table('users')->where('id',$request->id)->update($param1);
        $param2 = [
            'zip11' => $request->zip11,
        ];
        DB::table('postal')->where('id',$request->id)->update($param2);
        return redirect('/Kanri7_3');
    }



    public function del(Request $request)
    {
        $item = DB::table('users')->where('id',$request->id)->first();
        return view('Kanri7_3.del', ['item' => $item]);
    }

    public function remove(Request $request)
    {
        DB::table('users')->where('id',$request->id)->delete();
        return redirect('/Kanri7_3');
    }
}