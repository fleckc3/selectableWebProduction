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

Route::resource('contacts', 'App\Http\Controllers\ContactController');


// Route::get('send-email', function() {
//     $details = [
//         'title' => 'mail from selectable.ie',
//         'body' => 'this is for testing email using smtp'
//     ];

//     Mail::to('selectable.ie@gmail.com')->send(new \App\Mail\ContactMail($details));

//     dd("email is sent");
// });

Route::post('deploy', 'DeployController@deploy');
