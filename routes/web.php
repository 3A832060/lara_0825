<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;

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
    //return view('welcome');
//    $post = new Post();
//    $post->title = 'test title';
//    $post->content = 'test content';
//    $post->save();  //---2-5---
//    Post::create([
//        'title' => 'test title',
//        'content' => 'test content',
//    ]);   //---2-2---
//    $posts = Post::all();
//    dd($posts);  //---3-2---
//    $post = Post::find(1);
//    dd($post);  //---3-3---
//    $posts = Post::where('id','<',10)->orderBy('id','DESC')->get();
//    dd($posts);  //---3-4---
//    $post = Post::find(1);
//    $post->update([
//        'title' => 'updated title',
//        'content' => 'updated content',
//    ]);  //---4-1---
//    $post = Post::find(1);
//    $post->title = 'saved title';
//    $post->content = 'saved content';
//    $post->save();   //---4-3---
//    $post = Post::find(1);
//    $post->delete();  //---5-1---
//    Post::destroy(2);  //---5-3---
//    Post::destroy(3,5,7);  //---5-5---

//    $allPost = Post::all();
//    dd($allPost);  //---6-1---
//    $featuredPost = Post::where('is_feature',1)->get();
//    dd($featuredPost);  //---6-2---
//    $fourthPost = Post::find(4);
//    dd($fourthPost);  //---6-3---
    $lastPost = Post::orderBy('id','DESC')->first();
    dd($lastPost);
});

Route::get('posts',[\App\Http\Controllers\PostController::class,'index'])->name('post.index');
Route::get('post',[\App\Http\Controllers\PostController::class,'show'])->name('posts.show');
Route::get('about',[\App\Http\Controllers\PostController::class,'about'])->name('posts.about');
Route::get('contact',[\App\Http\Controllers\PostController::class,'contact'])->name('posts.contact');
