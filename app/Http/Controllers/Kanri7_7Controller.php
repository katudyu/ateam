<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class Kanri7_7Controller extends Controller
{
    public function index(Request $request)
    {
        $sort = $request->sort;
        $items = DB::table('event')->orderBy($sort,'asc')->paginate(5);
        $param = ['input' => '','items' => $items, 'sort' => $sort];
        return view('kanri7_7.index', $param);
    }
    public function show(Request $request)
    {
        $event_id = $request->event_id;
        $item = DB::table('event')->where('event_id',$event_id)->first();
        return view('Kanri7_7.show', ['item' => $item]);
    }

    public function add(Request $request){
        return view('Kanri7_7.add');
    }
    public function create(Request $request){
        $param = [
            'event' => $request->event,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'create_day' => $request->create_day,
        ];
        DB::table('event')->insert($param);
        return redirect('/Kanri7_7');
    }
    public function edit(Request $request)
    {
        $item = DB::table('event')->where('event_id',$request->event_id)->first();
        return view('Kanri7_7.edit', ['item' => $item]);
    }

    public function update(Request $request)
    {
        $param = [
            'event' => $request->event,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
        ];
        DB::table('event')->where('event_id',$request->event_id)->update($param);
        return redirect('/Kanri7_7');
    }
    public function del(Request $request)
    {
        $item = DB::table('event')->where('event_id',$request->event_id)->first();
        return view('Kanri7_7.del', ['item' => $item]);
    }

    public function remove(Request $request)
    {
        DB::table('event')->where('event_id',$request->event_id)->delete();
        return redirect('/Kanri7_7');
    }
}
