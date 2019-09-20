<?php
namespace App\Http\Controllers;

use DB;
use App\Post;

class PostsController{
  public function show($slug){
    // test the db connection
    // if(\DB::connection()->getDatabaseName())
    // {
    //   echo "conncted sucessfully to database ".\DB::connection()->getDatabaseName();
    // }

    // Laravel Query Builder style query
    // $post = DB::table('posts')->where('slug', $slug)->first();

    // use dd to log out the result
    // dd($post);

    return view('post',['post'=> Post::where('slug', $slug)->firstOrFail()]);
  }

  public function index(){
    return 'index';
  }

}
