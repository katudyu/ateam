<?php

namespace App\Http\Controllers;
use App\Trophy;
use App\Weight_log;
use App\Grades;
use App\Event;
use App\Models\WeightLog;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class ActivityController extends Controller
{
    //トロフィー画面
   
    //トロフィー画面ここまで



    //レビュー画面
    public function rev(Request $request)
    {
        $items = DB::table('trophy')->get();
        return view('activity.rev', ['items' => $items]);
    }
    //レビュー画面ここまで



//ハンバーガーメニューの画面
    public function toro(Request $request)
    {
        return view('activity.toro');
    }

    public function ren(Request $request)
    {
        return view('activity.ren');
    }

    public function kon(Request $request)
    {
        return view('activity.kon');
    }

    public function kozin(Request $request)
    {
        return view('activity.kozin');
    }
//ハンバーガーメニューの画面ここまで

public function syousai(Request $request)
    {
        return view('activity.syousai');
    }
 function show(Request $request){
		$avg_weihgt_log = [];
		$max_weihgt_log = [];
		$min_weihgt_log = [];
	
		//取り出す対象
		$target_day = [
			"202007",
			"202008",
			"202009",
			"202010",
			"202011",
			"202012",
		];
	
		foreach($target_day as $date_key){
			list($avg, $max, $min) = $this->getWeightLogData($date_key);
			$avg_weihgt_log[] = $avg;
			$max_weihgt_log[] = $max;
			$min_weihgt_log[] = $min;
		}
	
		return view("activity.activity",[
			"label" => [
				"2021年7月",
				"2021年8月",
				"2021年9月",
				"2021年10月",
				"2021年11月",
				"2021年12月",
			],

			"avg_weight_log" => $avg_weihgt_log,
			"max_weight_log" => $max_weihgt_log,
			"min_weight_log" => $min_weihgt_log,
        ]);
        
	}
	function getWeightLogData($date_key){
		$sum = 0;
		$max = 0;
		$min = 500;
		$logs = WeightLog::where("date_key","like",$date_key . "%")->get();
	
		foreach($logs as $log){
			$weight = $log->weight;
			$sum += $weight;
			$max = max($max, $weight);
			$min = min($min, $weight);
		}
	
		$avg = ($logs->count() > 0) ? $sum / $logs->count() : 0;
		
		return [
			$avg,
			$max,
			$min
		];
		}
		






























		function show2(Request $request){
			$avg_weihgt_log = [];
			$max_weihgt_log = [];
			$min_weihgt_log = [];
		
			//取り出す対象
			$target_day = [
				"202007",
				"202008",
				"202009",
				"202010",
				"202011",
				"202012",
			];
		
			foreach($target_day as $date_key){
				list($avg, $max, $min) = $this->getWeightLogData($date_key);
				$avg_weihgt_log[] = $avg;
				$max_weihgt_log[] = $max;
				$min_weihgt_log[] = $min;
			}
		
			return view("activity.rev",[
				"label" => [
					"2021年7月",
					"2021年8月",
					"2021年9月",
					"2021年10月",
					"2021年11月",
					"2021年12月",
				],
	
				"avg_weight_log" => $avg_weihgt_log,
				"max_weight_log" => $max_weihgt_log,
				"min_weight_log" => $min_weihgt_log,
					]);
					
		}
		function getWeightLogData1($date_key){
			$sum = 0;
			$max = 0;
			$min = 500;
			$logs = WeightLog::where("date_key","like",$date_key . "%")->get();
		
			foreach($logs as $log){
				$weight = $log->weight;
				$sum += $weight;
				$max = max($max, $weight);
				$min = min($min, $weight);
			}
		
			$avg = ($logs->count() > 0) ? $sum / $logs->count() : 0;
			
			return [
				$avg,
				$max,
				$min
			];
			}
    
    
} 