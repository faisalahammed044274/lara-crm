<?php

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
//     DB::insert('insert into posts (title, content) values (?, ?)', ['Eloquent ORM', 'firstOrFail() returns the first record found in the database. If no matching model exist, it throws an error.']);
// });

// Route::get('/read', function () {
//     $results = DB::select('select * from posts where id = ?', [4]);
//     return var_dump($results);
// });

// //    foreach($results as $post){
// //     // return $post->title;
// //    }

// });

// Route::get('/update', function(){

//     $updated = DB::update('update posts set title = "PHP with Laravel" where id =?', [1]);

//     return $updated;
// });

// Route::get('/delete', function(){
//     $deleted = DB::delete('delete from posts where id = ?',[3]);
//     return $deleted;
// });

// Route::resource('post/{name}/{id}', PostsController::class);

/*
===================
ELOQUENT ORM
===================
 */

// Route::get('/read', function () {

//     $posts = Post::all();

//     foreach ($posts as $post) {

//         return $post->title;
//     }

// });

// Route::get('/find', function () {

//     $posts = Post::find(1);

//     return $posts->title;

// });

// Route::get('/findwhere', function () {
//     $posts = Post::where('id', 1)->orderBy('id', 'desc')->take(1)->get();
//     return $posts;
// });

Route::get('/findmore', function () {
    // $posts = Post::findOrFail(1);
    // return $posts;

    $posts = Post::where('title', '<', 50)->firstOrFail();
    return $posts;
});