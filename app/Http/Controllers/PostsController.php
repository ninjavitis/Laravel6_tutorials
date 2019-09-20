<?php
namespace App\Http\Controllers;

class PostsController{
  public function show($post){
          $posts = [
              'first_post' => 'blah blah blah',
              'second_post' => 'blah2 blah2 blah2'
          ];

          if(!array_key_exists($post, $posts)){
              abort(404, 'Post Not found');
          }

          return view('post',['post'=> $posts[$post]]);
  }

  public function index(){
    return 'index';
  }

}
