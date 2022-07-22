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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/about', function () {
//     return 'This is <b>ABOUT</b> Page';
// });

// Route::get('/contact', function () {
//     return 'This is <b>CONTACT</b> Page';
// });

// Route::get('/posts/{id}/{name}', function($id,$name){
//    return  "This is post number " . $id . " which is created by ".$name;
// });
// Route::get('admin/posts/example',array('as'=>'admin.home',function(){
//     $url = route('admin.home');

//     return "This URL is " . $url;
// }));

// Route::get('/post/{name}/{id}', [PostsController::class, 'index'])->name('index');
// Route::get('/about', [PostsController::class, 'about'])->name('about');
// Route::get('/show/{id}/{name}/{password}', [PostsController::class, 'showPosts'])->name('show');
// Route::get('/contact', [PostsController::class, 'contact'])->name('contact');

/*
------------------------
Database Raw SQL Queries
------------------------
 */

// Route::get('/insert', function () {
//     DB::insert('insert into posts (title, content) values (?, ?)', ['PHP', 'PHP is a Scripting language for web']);
// });

// Route::get('/read', function () {
//     $results = DB::select('select * from posts where id = ?', [1]);
//     return var_dump($results);

// //    foreach($results as $post){
// //     // return $post->title;
// //    }

// });

// Route::get('/update', function(){
    
//     $updated = DB::update('update posts set title = "PHP with Laravel" where id =?', [1]);

//     return $updated;
// });

Route::get('/delete', function(){
    $deleted = DB::delete('delete from posts where id = ?',[3]);
    return $deleted;
});

// Route::resource('post/{name}/{id}', PostsController::class);