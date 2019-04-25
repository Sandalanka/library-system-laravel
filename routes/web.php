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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/registation', function () {
    return view('registation');
});

Route::get('/bookdetails', [
    'uses'=>'bookController@showw'
]
    
);

Route::get('/mlogin', function () {
    return view('mlogin');
});

Route::get('/llogin', function () {
    return view('llogin');
});

Route::get('/feedback', function () {
    return view('feedback');
});

Route::get('/backend', [
    'uses'=>'book_issuController@backend'
]);

Route::get('/book', [
    'uses'=>'bookController@show'
]

    
);

Route::get('/mdetails', [
'uses'=>'UserController@show'
]);

Route::get('/ladd', function () {
    return view('ladd');
});

Route::get('/sfeedback', function () {
    return view('sfeedback');
});

Route::post('registation',[
    'uses'=>'UserController@registation',
    'as'=>'registation'
]);

Route::get('/addbook', function () {
    return view('addbook');
});

Route::post('bookadd',[
    'uses'=>'bookController@bookadd',
    'as'=>'bookadd'
]);

Route::get('/backbook', [
    'uses'=>'bookController@show'
]
    
);
Route::post('libraranadd',[
    'uses'=>'LibranController@libraranadd',
    'as'=>'libraranadd'
]);

Route::post('mlogin',[
    'uses'=>'UserController@mlogin',
    'as'=>'mlogin'
]);

Route::get('member', [
    'uses'=>'bookController@member',
    'as'=>'member'
]);

Route::get('/borrow', function () {
    return view('borrow');
});

Route::get('/back',[
    'uses'=>'bookController@member',
]);

Route::post('borrow',[
    'uses'=>'book_issuController@borrow',
    'as'=>'borrow'
]);


Route::post('feedback',[
    'uses'=>'book_feedbackController@feedback',
    'as'=>'feedback'
]);

Route::post('login',[
    'uses'=>'LibranController@login',
    'as'=>'login'
]);
Route::get('backend',[
    'uses'=>'book_issuController@backend',
    'as'=>'backend'
]);
Route::get('/logout',[
    'uses'=>'UserController@logout'
]);

Route::get('/edite{id}',[
    'uses'=>'bookController@edite'
]);

Route::post('update',[
    'uses'=>'bookController@update',
    'as'=>'update'
]);

Route::get('/deleted{id}',[
    'uses'=>'bookController@deleted'
]);