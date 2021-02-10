<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\HelloRequest;
use Validator;
use Illuminate\Support\Facades\DB;
use App\Person;
use Illuminate\Support\Facades\Auth;

class MypageController extends Controller
{

    public function index(Request $request)
    {
        return view('mypage.mypage1');
    }


    public function post(Request $request)
    {
        return view('mypage.index', ['items' => $items]);
    }

    public function mypage1(Request $request)
    {
        return view('mypage.mypage1');
    }
    public function mypage2(Request $request)
    {
        return view('mypage.mypage2');
    }
    public function mypage3(Request $request)
    {
        return view('mypage.mypage3');
    }
    public function mypage4(Request $request)
    {
        return view('mypage.mypage4');
    }
    public function mypage5(Request $request)
    {
        return view('mypage.mypage5');
    }
    public function mypage6(Request $request)
    {
        return view('mypage.mypage6');
    }
    public function mypage7(Request $request)
    {
        return view('mypage.mypage7');
    }
    public function mypage8(Request $request)
    {
        return view('mypage.mypage8');
    }
    public function mypage9(Request $request)
    {
        $user_id = $request->user_id;
        $opinioncontent = $request->opinioncontent;

        $data = [
            'user_id' => $user_id,
            'opinioncontent' => $opinioncontent,
        ];
        DB::table('contact')->insert($data);
        return view('mypage.mypage9', $data);
    }
    public function mypage10(Request $request)
    {
        return view('mypage.mypage10');
    }
    public function mypage11(Request $request)
    {
        return view('mypage.mypage11');
    }
    public function mypage12(Request $request)
    {
        return view('mypage.mypage12');
    }
    public function mypage13(Request $request)
    {
        return view('mypage.mypage13');
    }

    public function mypage14(Request $request)
    {
        return view('mypage.mypage14');
    }

    public function create(Request $request)
    {
        return redirect('/mypage');
    }

    public function edit(Request $request)
    {
        return view('mypage.edit');
    }
    public function update(Request $request)
    {
        return redirect('/mypage');
    }

    public function del(Request $request)
    {
        return view('mypage.del');
    }
    public function remove(Request $request)
    {
        return redirect('/mypage');
    }

    public function rest(Request $request)
    {
        return view('mypage.rest');
    }

    public function ses_get(Request $request)
    {
        return view('mypage.session');
    }
    public function ses_put(Request $request)
    {
        return redirect('mypage/session');
    }

    public function getAuth(Request $request)
    {
        return view('mypage.auth');
    }
    public function postAuth(Request $request)
    {
        return view('mypage.auth');
    }
    
}
