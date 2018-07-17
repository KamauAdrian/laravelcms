<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use Illuminate\Http\Request;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
//            $tasks=[
//        'Visit a friend'
//        ,'Finish assignment',
//        'Play games'
//    ];
//    return view('posts',compact('tasks'));


        return view('posts.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
       return $request->all();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function contact(){
        return view('contact');

    }
    public function newpost($id){
//       return User::find($id)->post;
//       return User::find($id)->post->title;
       return User::find($id)->post->body;

    }
    public function getuser($id){
//
        return Post::find($id)->user->name;

    }
    public function getposts(){
//
         $posts=User::find(1)->posts;
         foreach ($posts as $post){
             echo $post->title."<br />";
         }
    }

    public function getroles(){
//$roles=User::find(2)->roles()->orderBy('id','desc')->get();
        //return $roles;
       $roles=User::find(2)->roles;
       foreach ($roles as $role){
           return $role->name;
       }

    }
}
