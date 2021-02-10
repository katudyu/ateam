<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//ログイン画面
Route::get('companylogin', 'App\Http\controllers\CompanyController@index');
Route::post('companylogin', 'App\Http\controllers\CompanyController@index');

//トップ画面
Route::get('top', 'App\Http\controllers\CompanyController2@index');

//グッズ編集画面
Route::get('company3', 'App\Http\controllers\CompanyController3@index')->middleware('auth:company');
Route::post('company/find', 'App\Http\controllers\CompanyController3@find');
Route::get('company/add', 'App\Http\controllers\CompanyController3@add');
Route::post('company/create', 'App\Http\controllers\CompanyController3@create');
Route::post('company/confirm', 'App\Http\controllers\CompanyController3@confirm');
Route::get('company/edit', 'App\Http\controllers\CompanyController3@edit');
Route::post('company/update', 'App\Http\controllers\CompanyController3@update');
Route::get('company/del', 'App\Http\controllers\CompanyController3@del');
Route::post('company/remove', 'App\Http\controllers\CompanyController3@remove');
//確認画面
//Route::post('company/confirm', 'CompanyController3@create');

//お問合せ画面(古い)はりぼて
Route::get('contact', 'App\Http\controllers\CompanyContactController@index');
Route::get('done', 'App\Http\controllers\CompanyContactController@create');
Route::get('confirm1', 'App\Http\controllers\CompanyContactController@done');

//お問い合わせ(新しい)未完成
//Route::get('form', 'ContactController5@form');
//Route::post('form/confirm', 'ContactController5@confirm');
//Route::post('form/process', 'ContactController5@process');

//パスワード変更画面
Route::get('accountedit', 'App\Http\controllers\AccountEditController@index');

Route::get('company', 'App\Http\controllers\CompanyContactController@logout');

//管理者
Route::get('Kanri7_2', 'App\Http\controllers\Kanri7_2Controller@index');

Route::get('Kanri7_3', 'App\Http\controllers\Kanri7_3Controller@index');
Route::get('Kanri7_3/edit', 'App\Http\controllers\Kanri7_3Controller@edit');
Route::post('Kanri7_3/update', 'App\Http\controllers\Kanri7_3Controller@update');
Route::get('Kanri7_3/del', 'App\Http\controllers\Kanri7_3Controller@del');
Route::post('Kanri7_3/remove', 'App\Http\controllers\Kanri7_3Controller@remove');

Route::get('Kanri7_4', 'App\Http\controllers\Kanri7_4Controller@index');
Route::get('Kanri7_4/input', 'App\Http\controllers\Kanri7_4Controller@input');
Route::get('Kanri7_4/output', 'App\Http\controllers\Kanri7_4Controller@output');
Route::post('Kanri7_4/reply', 'App\Http\controllers\Kanri7_4Controller@reply');

Route::get('Kanri7_5', 'App\Http\controllers\Kanri7_5Controlle@index');
Route::get('Kanri7_5/edit', 'App\Http\controllers\Kanri7_5Controlle@edit');
Route::post('Kanri7_5/update', 'App\Http\controllers\Kanri7_5Controlle@update');

Route::get('Kanri7_6', 'App\Http\controllers\Kanri7_6Controller@index');
Route::get('Kanri7_6/edit', 'App\Http\controllers\kanri7_6Controller@edit');
Route::post('Kanri7_6/update', 'App\Http\controllers\Kanri7_6Controller@update');
Route::get('Kanri7_6/del', 'App\Http\controllers\Kanri7_6Controller@del');
Route::post('Kanri7_6/remove', 'App\Http\controllers\Kanri7_6Controller@remove');

Route::get('Kanri7_7', 'App\Http\controllers\Kanri7_7Controller@index');
Route::get('Kanri7_7/edit', 'App\Http\controllers\Kanri7_7Controller@edit');
Route::post('Kanri7_7/update', 'App\Http\controllers\Kanri7_7Controller@update');

Route::get('Kanri7_8', 'App\Http\controllers\Kanri7_8Controller@index');
Route::get('Kanri7_8/edit', 'App\Http\controllers\Kanri7_8Controller@edit');
Route::post('Kanri7_8/update', 'App\Http\controllers\Kanri7_8Controller@update');
Route::get('Kanri7_9', 'App\Http\controllers\Kanri7_9Controller@index');
//Route::get('ajax/Kanri7_9', 'Ajax\Kanri7_9Controller@index'); // 👈 売上データ取得
//Route::get('ajax/Kanri7_9/years', 'Ajax\Kanri7_9Controller@years'); // 👈 年データ取得（セレクトボックス用）

//ここまで管理者

//ここからストア

/*　おすすめ商品 */
Route::get('reco', 'App\Http\controllers\StoreController@reco');
/*　おすすめ(トップス)商品 */
Route::get('recotops', 'App\Http\controllers\StoreController@recotops');
/*　おすすめ(トップス(タンクトップ))商品 */
Route::get('recotopstanktop', 'App\Http\controllers\StoreController@recotopstanktop');
/*　おすすめ(トップス(シャツ))商品 */
Route::get('recotopsshirt', 'App\Http\controllers\StoreController@recotopsshirt');
/*　おすすめ(トップス(パーカー))商品 */
Route::get('recotopshoodie', 'App\Http\controllers\StoreController@recotopshoodie');


/*　おすすめ(ボトムス)商品 */
Route::get('recobottoms', 'App\Http\controllers\StoreController@recobottoms');
/*　おすすめ(ボトムス(パンツ))商品 */
Route::get('recobottomspants', 'App\Http\controllers\StoreController@recobottomspants');


/*　おすすめ(アクセサリ)商品 */
Route::get('recoacce', 'App\Http\controllers\StoreController@recoacce');
/*　おすすめ(アクセサリ(シューズ))商品 */
Route::get('recoacceshoes', 'App\Http\controllers\StoreController@recoacceshoes');
/*　おすすめ(アクセサリ(キャップ))商品 */
Route::get('recoaccecap', 'App\Http\controllers\StoreController@recoaccecap');



/*　メンズ商品 */
Route::get('mens', 'App\Http\controllers\StoreController@mens');
/*　メンズ(トップス)商品 */
Route::get('menstops', 'App\Http\controllers\StoreController@menstops');
/*  メンズ(トップス(タンクトップ))商品 */
Route::get('menstopstanktop', 'App\Http\controllers\StoreController@menstopstanktop');
/*  メンズ(トップス(シャツ))商品 */
Route::get('menstopsshirt', 'App\Http\controllers\StoreController@menstopsshirt');
/*　メンズ(トップス(パーカー))商品 */
Route::get('menstopshoodie', 'App\Http\controllers\StoreController@menstopshoodie');


/*　メンズ(ボトムス)商品 */
Route::get('mensbottoms', 'App\Http\controllers\StoreController@mensbottoms');
/*　メンズ(ボトムス(パンツ))商品 */
Route::get('mensbottomspants', 'App\Http\controllers\StoreController@mensbottomspants');


/*　メンズ(アクセサリー)商品 */
Route::get('mensacce', 'App\Http\controllers\StoreController@mensacce');
/*　メンズ(アクセサリ(シューズ))商品 */
Route::get('mensacceshoes', 'App\Http\controllers\StoreController@mensacceshoes');
/*　メンズ(アクセサリ(キャップ))商品 */
Route::get('mensaccecap', 'App\Http\controllers\StoreController@mensaccecap');



/*　レディース商品 */
Route::get('ladies', 'App\Http\controllers\StoreController@ladies');
/*　レディース(トップス)商品 */
Route::get('ladiestops', 'App\Http\controllers\StoreController@ladiestops');
/*  レディース(トップス(タンクトップ))商品 */
Route::get('ladiestopstanktop', 'App\Http\controllers\StoreController@ladiestopstanktop');
/*  レディース(トップス(シャツ))商品 */
Route::get('ladiestopsshirt', 'App\Http\controllers\StoreController@ladiestopsshirt');
/*  レディース(トップス(パーカー))商品 */
Route::get('ladiestopshoodie', 'App\Http\controllers\StoreController@ladiestopshoodie');


/*　レディース(ボトムス)商品 */
Route::get('ladiesbottoms', 'App\Http\controllers\StoreController@ladiesbottoms');
/*  レディース(ボトムス(パンツ))商品 */
Route::get('ladiesbottomspants', 'App\Http\controllers\StoreController@ladiesbottomspants');


/*　レディース(アクセサリー)商品 */
Route::get('ladiesacce', 'App\Http\controllers\StoreController@ladiesacce');
/*　レディース(アクセサリ(シューズ))商品 */
Route::get('ladiesacceshoes', 'App\Http\controllers\StoreController@ladiesacceshoes');
/*　レディース(アクセサリ(キャップ))商品 */
Route::get('ladiesaccecap', 'App\Http\controllers\StoreController@ladiesaccecap');

//ここまでストア

//ここからマイページ

Route::get('mypage', 'App\Http\controllers\MypageController@mypage1');
Route::get('mypage/mypage2', 'App\Http\controllers\MypageController@mypage2');
Route::get('mypage/mypage3', 'App\Http\controllers\MypageController@mypage3');
Route::get('mypage/mypage4', 'App\Http\controllers\MypageController@mypage4');
Route::get('mypage/mypage5', 'App\Http\controllers\MypageController@mypage5');
Route::get('mypage/mypage6', function () {
    return view('mypage/mypage6');
});
Route::get('mypage/mypage7', 'App\Http\controllers\MypageController@mypage7');
Route::get('mypage/mypage8', 'App\Http\controllers\MypageController@mypage8');
Route::get('mypage/mypage9', 'App\Http\controllers\MypageController@mypage9');
Route::get('mypage/mypage10', 'App\Http\controllers\MypageController@mypage10');
Route::get('mypage/mypage11', 'App\Http\controllers\MypageController@mypage11');
Route::get('mypage/mypage12', 'App\Http\controllers\MypageController@mypage12');
Route::get('mypage/mypage13', 'App\Http\controllers\MypageController@mypage13');
Route::post('mypage/mypage14', 'App\Http\controllers\MypageController@mypage14');

Route::get('mypage/edit', 'App\Http\controllers\MypageController@edit');
Route::post('mypage/edit', 'App\Http\controllers\MypageController@update');

Route::get('mypage/del', 'App\Http\controllers\MypageController@del');
Route::post('mypage/del', 'App\Http\controllers\MypageController@remove');

Route::get('mypage/other', 'App\Http\controllers\MypageController@other');

//ここまでマイページ

//トロフィーの画面
Route::get('acti', 'App\Http\controllers\ActivityController@acti');

//レビューの画面
Route::get('activity/rev', 'App\Http\controllers\ActivityController@rev');


//ハンバーガーリストの四画面
Route::get('activity/toro', 'App\Http\controllers\ActivityController@toro');
Route::get('activity/ren', 'App\Http\controllers\ActivityController@ren');
Route::get('activity/kon', 'App\Http\controllers\ActivityController@kon');
Route::get('activity/kozin', 'App\Http\controllers\ActivityController@kozin');

//ここからホームページ
Route::get('HomePage','App\Http\controllers\PageController@index');
Route::get('HomePage/event','App\Http\controllers\pageController@event');
Route::get('homepage/info','App\Http\controllers\pageController@info');
//ここまでホームページ


//ここからスタート

//Route::get('start1', function () {
   // return view('start1.index');
//});

//Route::get('start1', 'Start1Controller@index');
Route::get('start', 'App\Http\controllers\Start1Controller@Start1');
//Route::get('start1', 'Start1Controller@Start2');
//Route::get('start1', 'Start1Controller@Start2');
Route::get('start2', 'App\Http\controllers\Start1Controller@Start3');

//ここまでスタート

Auth::routes();

Route::get('/index', 'App\Http\controllers\HomeController@index')->name('index');

//ログイン認証ルーティング
Auth::routes();

Route::get('/home', 'App\Http\controllers\HomeController@index')->name('home');

Route::get('/login/admin', 'App\Http\controllers\Auth\LoginController@showAdminLoginForm');
Route::get('/register/admin', 'App\Http\controllers\Auth\RegisterController@showAdminRegisterForm');

Route::post('/login/admin', 'App\Http\controllers\Auth\LoginController@adminLogin');
Route::post('/register/admin', 'App\Http\controllers\Auth\RegisterController@createAdmin')->name('admin-register');

Route::view('/admin', 'admin')->middleware('auth:admin')->name('admin-home');


Route::get('/login/company', 'App\Http\controllers\Auth\LoginController@showCompanyLoginForm');
Route::get('/register/company','App\Http\controllers\Auth\RegisterController@showCompanyRegisterForm');

Route::post('/login/company', 'App\Http\controllers\Auth\LoginController@companyLogin');
Route::post('/register/company', 'App\Http\controllers\Auth\RegisterController@createCompany')->name('company-register');

Route::view('/company', 'company')->middleware('auth:company')->name('company-home');


Route::get('hello/auth', 'App\Http\controllers\HelloController@getAuth');
Route::post('hello/auth', 'App\Http\controllers\HelloController@postAuth');

use App\Http\Controllers\ActivityController;
Route::get('/acti', [ActivityController::class,"show"])
   ->name("root");
Route::get('activity/rev', [ActivityController::class,"show2"])
   ->name("root");
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
