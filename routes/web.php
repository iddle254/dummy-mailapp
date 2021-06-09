<?php

use Illuminate\Support\Facades\Mail;
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

Route::get('/', function(){

    $data = [
        'title'=>'Hi, loving the course',
        'content'=>'The things I do for money'
    ];
    Mail::send('emails.test', $data, function($message){
        $message->to('charlesmotaroki@students.uonbi.ac.ke', 'Moss')->subject('Hey, what it do?');
    });

});