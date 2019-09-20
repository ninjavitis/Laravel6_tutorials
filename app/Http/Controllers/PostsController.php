<?php
namespace App\Http\Controllers;

class PostsController{
  public function show($slug){
    // test the db connection
    // if(\DB::connection()->getDatabaseName())
    // {
    //   echo "conncted sucessfully to database ".\DB::connection()->getDatabaseName();
    // }

    $post = \DB::table('posts')->where('slug', $slug)->first();
    // use dd to log out the result
    // dd($post);
    return view('post',['post'=> $post]);
  }

  public function index(){
    return 'index';
  }

}
