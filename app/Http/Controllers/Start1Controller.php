<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\User;

class Start1Controller extends Controller
{

/*    public function __construct()
{
  $this->middleware('auth');
}
*/
    public function Start1(Request $request){

        return view('start.Start1');
    }

    public function Start2(Request $request){
        //ログイン者の情報を取得
        $login = Auth::user();
        $param = request::all();
        $loginId = $login->id;
        $run = $param['run'];
        $time = $param['time'];
        $kcal = $param['kcal'];
        $date = $param['date'];

        $data = [
            'user_id' => $loginId,
            'run'=> $run,
            'time' => $time,
            'kcal' => $kcal,
            'day' => $date,
        ];

        DB::table('grades')->insert($data);
        return redirect('/start');
    }

    public function Start3(Request $request){
        $km = 10;  //仮の数値
        $weight = 50; //仮の数値
        $time = 60; //仮の数値
         //1時間走った場合のカロリー
         $kcal = 1.05 * 8.3  * $weight ; //消費エネルギー（kcal) ＝1.05×エクササイズ（METs・時）×体重(kg)
         $date = date("y-m-d");

        $result = ['kcal' => $kcal,
                   'km' => $km,
                   'time' => $time,
                   'date' => $date,
                ];

        return view('start.Start3', ['item' => $result]);
    }
}