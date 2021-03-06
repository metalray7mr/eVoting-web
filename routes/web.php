<?php

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

Route::get('/info', function () {
	//$info = DB::table('info')->get();
	$info = App\Info::all();

    return view('info.index',compact('info'));
});


Route::get('/info/{inf}', function ($id) {
$info= App\Info::find($id);

//dd($info);
return view('/info.show',compact('info'));
});

Route::get('/tests','TestsController@index');
Route::get('/tests/{tst}','TestsController@show');
Route::get('/party','PartyController@index');

Route::get('/blogview',function(){

	return view('blog.blogcontent');
});
Route::post('/voted', 'UserController@vote');
Route::get('/profile','UserController@profile');
Route::post('/profile','UserController@update_avatar');
Route::post('/authorized','AdminController@authorized');
Route::get('/result','AdminController@results');
Route::get('admin/dashboard', 'AdminController@dashboard');


Route::get('/regsuccess','UserController@regsuccess');

Route::get('/', function () {
    return view('welcome');
});
/*
<<<<<<< HEAD
*/


/*Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/', function () {
    return view('login');
});
*/
/*Route::get('/customer',function(){
	$customer = App\customer::find(1);
	echo "<pre>";
	print_r($customer);
});
*/


Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/help', 'HomeController@help');
Route::get('/about','HomeController@about');
Route::get('/logout','Auth\LoginController@logout');
Route::get('/info', 'AdminController@info');
Route::get('/admin','AdminController@dashboard');
Route::get('/adminau','AdminController@adminau');

//Route::get('/demo', function() {
	//$users = DB::table('users')->get();
	//echo {{$users[0]->id}};


//});


Route::get('/home', 'HomeController@index');
Route::post('/party/save', 'HomeController@save');

