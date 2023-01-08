<?php

// use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Name;

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
    // Post::all() problem n+1 , multiquery in @foreach loop when search data in second table related
    $posts = Post::with('category')->get();
    return view('posts', ['posts' => $posts]);
    // $data = ['foo' => 'barile'];
    // dd($data);
    // return $data;
});

Route::get(
    'posts/{post:slug}',
    function (Post $post) {
        // $post = Post::findOrFail($id);
        // dd(compact('post'));
        return view('post', compact('post'));
    }
);
Route::get(
    'categories/{category:slug}',
    function (Category $category) {
        // $post = Post::findOrFail($id);
        // dd(compact('post'));
        $posts = $category->posts;
        // ddd($posts);
        return view('posts', ['posts' => $posts]);

    }
);