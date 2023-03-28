<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::view('/test','myapp',['name'=>'Davey']);

Route::get('/request-test', function(){ 
    return view('request-inputs',[
        'title'=>request('title'),
    ]);
});

Route::get('/posts/{post}',[PostsController::class,'show']);
//Route::get('/posts/{post}',function($post){
//    $posts =[
//        'first-post' => 'Hello hello sirius vagyok ez pedig az új redstone házam...',
//        'second-post' => "Sziasztok én ViccElek vagyok ez pedig az UVF, azaz unatkoztam,videoztam,feltettem..."
//    ];
//
//    return view('post',[
//        'post' => $posts[$post] ?? 'Nothing here yet.'
//    ]);
//});
