<?php

use App\Models\Slip;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

Route::view('/home', 'slip-home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/slips', function () {

    return view("slots");
})->name('slip.form');

Route::post('/slip', function (Request $request) {
    $request->validate([ "content" => "required|min:5"]);
    if(Auth()->user()){
        $slip = new Slip();
        $slip->content = $request->content;
        $slip->user_id = Auth()->user()->id;
        $slip->save();
        
        return redirect()->route('slip.form')->with('status', 'Conselho criado!');
    }
})->name("slip.save");

require __DIR__.'/auth.php';
