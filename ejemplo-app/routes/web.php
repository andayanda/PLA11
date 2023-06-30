<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SaludarController;

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
Route::get('/holamundo',[SaludarController::class,'index']);

Route::get('/saludar/todos',function(){
    return 'Hola a todos';
});
Route::get('/saludar/{nombre}/{alias?}',[SaludarController::class, 'mostrar']);

Route::get('/posts/{postid}/comment/{commentid}',function($post,$comment){
    return "Este es el comentario $comment del post $post";
});