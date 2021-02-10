<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class StoreController extends Controller
{
    /*　おすすめのビューを見に行く */
    public function reco(Request $request)
    {
        $items = DB::select('select * from goods limit 5');
        return view('store.reco',['items' => $items]);
    }

    /*　おすすめのトップスのビューを見に行く */
    public function recotops(Request $request)
    {
        return view('store.recotops');
    }

    /*　おすすめのトップスのタンクトップを見に行く */
    public function recotopstanktop(Request $request)
    {
        return view('store.recotopstanktop');
    }

    /*　おすすめのトップスのシャツを見に行く */
    public function recotopsshirt(Request $request)
    {
        return view('store.recotopsshirt');
    }

    /*　おすすめのトップスのパーカーを見に行く */
    public function recotopshoodie(Request $request)
    {
        return view('store.recotopshoodie');
    }

    /*　おすすめのボトムスのビューを見に行く */
    public function recobottoms(Request $request)
    {
        return view('store.recobottoms');
    }

    /*　おすすめのボトムスのパンツを見に行く */
    public function recobottomspants(Request $request)
    {
        return view('store.recobottomspants');
    }

    /*　おすすめのアクセサリのビューを見に行く */
    public function recoacce(Request $request)
    {
        return view('store.recoacce');
    }

    /*　おすすめのアクセサリのシューズを見に行く */
    public function recoacceshoes(Request $request)
    {
        return view('store.recoacceshoes');
    }

    /*　おすすめのアクセサリのキャップを見に行く */
    public function recoaccecap(Request $request)
    {
        return view('store.recoaccecap');
    }
    
    /*　メンズの全体を見に行く */
    public function mens(Request $request)
    {
        return view('store.mens');
    }

    /*　メンズのトップスを見に行く */
    public function menstops(Request $request)
    {
        return view('store.menstops');
    }

    /*　メンズのトップスのタンクトップを見に行く */
    public function menstopstanktop(Request $request)
    {
        return view('store.menstopstanktop');
    }

    /*　メンズのトップスのシャツを見に行く */
    public function menstopsshirt(Request $request)
    {
        return view('store.menstopsshirt');
    }

    /*　メンズのトップスのパーカーを見に行く */
    public function menstopshoodie(Request $request)
    {
        return view('store.menstopshoodie');
    }

    /*　メンズのボトムスを見に行く */
    public function mensbottoms(Request $request)
    {
        return view('store.mensbottoms');
    }

    /*　メンズのボトムスのパンツを見に行く */
    public function mensbottomspants(Request $request)
    {
        return view('store.mensbottomspants');
    }

    /*　メンズのアクセサリーを見に行く */
    public function mensacce(Request $request)
    {
        return view('store.mensacce');
    }

    /*　メンズのアクセサリのシューズを見に行く */
    public function mensacceshoes(Request $request)
    {
        return view('store.mensacceshoes');
    }

    /*　メンズのアクセサリのキャップを見に行く */
    public function mensaccecap(Request $request)
    {
        return view('store.mensaccecap');
    }

    /*　レディースの全体を見に行く */
    public function ladies(Request $request)
    {
        return view('store.ladies');
    }

    /*　レディースのトップスを見に行く */
    public function ladiestops(Request $request)
    {
        return view('store.ladiestops');
    }

    /*　レディースのトップスのタンクトップを見に行く */
    public function ladiestopstanktop(Request $request)
    {
        return view('store.ladiestopstanktop');
    }

    /*　レディースのトップスのシャツを見に行く */
    public function ladiestopsshirt(Request $request)
    {
        return view('store.ladiestopsshirt');
    }

    /*　レディースのトップスのパーカーを見に行く */
    public function ladiestopshoodie(Request $request)
    {
        return view('store.ladiestopshoodie');
    }

    /*　レディースのボトムスを見に行く */
    public function ladiesbottoms(Request $request)
    {
        return view('store.ladiesbottoms');
    }

    /*　レディースのボトムスのパンツを見に行く */
    public function ladiesbottomspants(Request $request)
    {
        return view('store.ladiesbottomspants');
    }

    /*　レディースのアクセサリーを見に行く */
    public function ladiesacce(Request $request)
    {
        return view('store.ladiesacce');
    }

    /*　レディースのアクセサリのシューズを見に行く */
    public function ladiesacceshoes(Request $request)
    {
        return view('store.ladiesacceshoes');
    }

    /*　レディースのアクセサリのキャップを見に行く */
    public function ladiesaccecap(Request $request)
    {
        return view('store.ladiesaccecap');
    }
}

