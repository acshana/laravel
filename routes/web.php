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

// from php storm

Route::get('/', function () {
    return view('welcome');
});

//【demo】
Route::group(['middleware'=>['web']],function (){
    Route::get('al/index','DemoController@index');
    Route::get('al/index/{sort}/{flag}','DemoController@index');
    Route::any('al/create','DemoController@create');
    Route::any('al/save','DemoController@save');
    Route::any('al/update/{id}','DemoController@update');
    Route::any('al/detail/{id}','DemoController@detail');
    Route::any('al/delete/{id}','DemoController@delete');
});
Route::get('al/insert','DemoController@insert');//临时插入数据
Route::get('blhx','DemoController@show');//临时插入数据
Route::get('blhx/{sort}/{flag}','DemoController@show');//临时插入数据
//【demo】

//Route::get('acone', function () {
//    return 'Arroy,I love you-,what is our dinner tonight?<br>-Acone';
//});

Route::match(['get', 'post'], 'multi', function () {
    return 'Arroy,I love you-,what is our dinner tonight?<br>-Acone';
});

Route::any('all', function () {
    return 'all request';
});

//Route::get('user/{id}', function ($id) {
//    return 'User:' . $id;
//});
//
//Route::get('user/{name?}', function ($name = null) {
//    return 'Username:' . $name;
//});

Route::get('multi/{id}/{name?}', function ($id, $name = 'alex') {
    return 'id:' . $id . '---name:' . $name;
})->where(['id' => '[0-9]+', 'name' => '[A-Za-z]+']);

Route::get('user/center', ['as' => 'center', function ($name = null) {
    return route('center');
}]);

Route::group(['prefix' => 'member'], function () {

    Route::get('group1', function () {
        return 'group1';
    });
    Route::get('mygirl', ['uses'=>'MemberController@love']);
});

Route::get('acone', function () {
    return view('arroy');
});


Route::get('mygirl', 'MemberController@love');
Route::get('test', 'StudentController@test1');
Route::get('query1', 'StudentController@query1');
Route::get('query2', 'StudentController@query2');
Route::get('query3', 'StudentController@query3');
Route::get('query4', 'StudentController@query4');
Route::get('orm1', 'StudentController@orm1');
Route::get('orm2', 'StudentController@orm2');
Route::get('orm3', 'StudentController@orm3');
Route::get('orm4', 'StudentController@orm4');
Route::get('section1', 'StudentController@section1');
Route::get('response', 'StudentController@response');
Route::get('student/request1', 'StudentController@request1');
Route::get('url1', 'StudentController@url1')->name('haha');
Route::get('weibo', 'UserController@show');

Route::group(['middleware'=>['web']],function (){
    Route::get('session1', 'StudentController@session1');
    Route::get('session2', 'StudentController@session2');
});

Route::group(['middleware'=>['active']],function(){
    Route::get('active1', 'StudentController@active1');
    Route::get('active2', 'StudentController@active2');
});
Route::get('conduct', 'StudentController@conduct');


Route::get('user/profile', function () {
    return route('profile');
})->name('profile');