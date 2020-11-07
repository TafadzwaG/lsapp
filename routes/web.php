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


/*
Route::get('/hello', function () {
    // return view('welcome');
    return '<h1>Hello World</h1>';
});
Route::get('/users/{id}/{name}', function($id, $name){
    return 'This is user '.$name.' with id  '.$id;
});

*/

use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;

Route::get('/', [PagesController::class, 'index']);

Route::get('/about', [PagesController::class, 'about']);

Route::get('/services', [PagesController::class, 'services']);

Route::resource('posts', PostsController::class);

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
