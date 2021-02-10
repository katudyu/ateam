<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB; 
//use App\Site;
use Illuminate\Http\Request;
use Validator; 

class Kanri7_5Controlle extends Controller
{
    public function index(Request $request)
    {
        $sort = $request->sort;
        $items = DB::table('site')->orderBy($sort,'asc')->paginate(5);
        $param = ['input' => '','items' => $items, 'sort' => $sort];
        return view('Kanri7_5.index', $param);
    }
    public function show(Request $request)
    {
        $site_id = $request->site_id;
        $item = DB::table('site')->where('site_id',$site_id)->first();
        return view('Kanri7_5.show', ['item' => $item]);
    }

    public function add(Request $request){
        return view('Kanri7_5.add');
    }
    public function create(Request $request){
        $param = [
            'site_name' => $request->site_name,
            'site_ig' => $request->site_ig,
            'site_url' => $request->site_url,
        ];
        DB::table('site')->insert($param);
        return redirect('/Kanri7_5');
    }
    public function edit(Request $request)
    {
        $item = DB::table('site')->where('site_id',$request->site_id)->first();
        return view('Kanri7_5.edit', ['item' => $item]);
    }

    public function update(Request $request)
    {
        $param = [
            'site_name' => $request->site_name,
            'site_ig' => $request->site_ig,
            'site_url' => $request->site_url,
        ];
        DB::table('site')->where('id',$request->site_id)->update($param);
        return redirect('/Kanri7_5');
    }



    public function del(Request $request)
    {
        $item = DB::table('site')->where('site_id',$request->site_id)->first();
        return view('Kanri7_5.del', ['item' => $item]);
    }

    public function remove(Request $request)
    {
        DB::table('site')->where('site_id',$request->site_id)->delete();
        return redirect('/Kanri7_5');
    }
}
