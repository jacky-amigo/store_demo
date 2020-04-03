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
//回傳字串
Route::get('/hello',function(){
    return "Hello,World!";
});

//回傳視圖
Route::get('/', function () {
    return view('shop');
});

//Match，符合多種請求方法
Route::match(['get', 'post'], '/match', function() {
    return "Match Method";
});

//符合所有請求方法
Route::any('/any', function() {
    return "Any";
});

//指派給控制器的某個Action
Route::get('/home','HomeController@index');

Route::get('/demo','HomeController@demo');

//指派給控制器的某個Action，限定登入才能訪問
//Route::get('/home','HomeController@index')->middleware('auth');

//傳送單一參數
// Route::get('/items/{id}',function($id){
//     return "你購買的是第" . $id . "個商品";
// });

// //傳送多個參數
// Route::get('/items/{id}/{qty}', function ($id,$qty) {
//  return "你購買的是第" . $id . "個商品，共買了" . $qty . "個";
// });

// //參數非必填
// Route::get('/items/{id?}', function ($id = 1) {
//  return "你購買的是第" . $id . "個商品";
// });

//Route Model Binding
Route::get('/users/{user}',function(\App\User $user){
    return $user;
});


Route::resource('items', 'ItemController');

