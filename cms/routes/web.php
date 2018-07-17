<?php
use App\Post;
use App\User;

/*
//|--------------------------------------------------------------------------
//| Web Routes
//|--------------------------------------------------------------------------
//|
//| Here is where you can register web routes for your application. These
//| routes are loaded by the RouteServiceProvider within a group which
//| contains the "web" middleware group. Now create something great!
//|
//*/
///*
//|--------------------------------------------------------------------------
//| Raw sql inserting data to a database
//|--------------------------------------------------------------------------
//*/
////Route::get('/insert', function () {
////
////   DB::insert('insert into members(name,email,password) values(?,?,?)',['Claire','clairewama@gmail.com','123112']);
////   return "WOW! YOU MADE IT";
////
////});
///*
//|--------------------------------------------------------------------------
//| Raw sql reading data from a database
//|--------------------------------------------------------------------------
//*/
//Route::get('/read', function () {
//
//    $results=DB::select('select * from members where tid=?',[2]);
//foreach ($results as $post){
//    return $post->email;
//
//}
//
//});
///*
//|--------------------------------------------------------------------------
//| Raw sql updating data to a database
//|--------------------------------------------------------------------------
//*/
//Route::get('/update', function () {
//
//    $updated=DB::update('update members set name="Kamau" where id=?',[1]);
//    //$updated returns the number of affected rows or colums
//    return $updated;
//
//
//});
///*
//|--------------------------------------------------------------------------
//| Raw sql deleting data from a database
//|--------------------------------------------------------------------------
//*/
//Route::get('/delete', function () {
//    $deleted=DB::delete('delete from members where id=?',[1]);
//    //$deleted returns the number of affected rows or colums
//    return $deleted;
//});
///*
//|--------------------------------------------------------------------------
//| inserting data using eloquent
//|--------------------------------------------------------------------------
//*/
//Route::get('/basicinsert', function (){
//    $post = new User;
//    $post->name='Nimrod';
//    $post->email='nimrod@gmail.com';
//    $post->password='5r4782';
//    $post->save();
//    return "WELL DONE !!";
//
//});
///*
//|--------------------------------------------------------------------------
//| Eloquent mass assignment insert data into a database (make sure to add the protected fillable property in the model)
//|--------------------------------------------------------------------------
//*/
//Route::get('/createnew', function (){
//    Post::create(['user_id'=>1,'title'=>'PHP Post 1','body'=>'never mind @gmail.com']);
//});
///*
//|--------------------------------------------------------------------------
//|Eloquent update  and save data under a condition exm where id = 1
//|--------------------------------------------------------------------------
//*/
//Route::get('/elupdate',function (){
//    Post::where('tid',3)->update(['name'=>'Kamau','password'=>'123235864']);
//    return "Done !!";
//});
///*
//|--------------------------------------------------------------------------
//|Eloquent delete data from db option 1
//|--------------------------------------------------------------------------
//*/
//Route::get('/eldel', function (){
//    //deleting from a database by first finding the id (option one)
//    $posts=Post::find(3);
//    $posts->delete();
//    return "DELETED !!!";
//});
//
///*
//|--------------------------------------------------------------------------
//|Eloquent delete data from db option 2
//|--------------------------------------------------------------------------
//*/
//Route::get('/eldel2', function (){
//    //deleting from a database
//
//    Post::destroy(2);
//    return "DELETED !!!";
//});
///*
//|--------------------------------------------------------------------------
//|Eloquent delete data from db option 3
//|--------------------------------------------------------------------------
//*/
//Route::get('/eldel3', function (){
//    //Deleting multiple records  from a database using the id
//    Post::destroy([1,4]);
//    return "DELETED !!!";
//});
///*
//|--------------------------------------------------------------------------
//|Eloquent delete data from db option 4
//|--------------------------------------------------------------------------
//*/
//Route::get('/eldel4', function (){
//    //Deleting multiple records  from a database using the id
//    Post::where('tid',1)->delete();
//    return "DELETED !!!";
//});
///*
//|--------------------------------------------------------------------------
//|Eloquent delete data from db option 5 (soft deletes)
//|--------------------------------------------------------------------------
//*/
//Route::get('/softdelete', function (){
//
//    Post::find(4)->delete();
//    return "DELETED !!!";
//});
///*
//|--------------------------------------------------------------------------
//|Eloquent view  soft deleted records
//returns all records together with those that are not soft deleted
//|--------------------------------------------------------------------------
//*/
//Route::get('/viewdeleted', function (){
//
//    $post=Post::withTrashed()->where('is_admin',0)->get();
//    return $post;
//});
///*
//|--------------------------------------------------------------------------
//|Eloquent view  soft deleted records
//returns only records that are  soft deleted
//|--------------------------------------------------------------------------
//*/
//Route::get('/viewonlydeleted', function (){
//
//    $post=Post::onlyTrashed()->where('is_admin',0)->get();
//    return $post;
//});
///*
//|--------------------------------------------------------------------------
//|Eloquent restore  soft deleted records
//|--------------------------------------------------------------------------
//*/
//Route::get('/restore', function (){
//
//    Post::withTrashed()->where('tid',5)->restore();
//
//});
//
///*
//|--------------------------------------------------------------------------
//|Eloquent permanent delete soft deleted records
//|--------------------------------------------------------------------------
//*/
//Route::get('/forcedelete', function (){
//
//    Post::onlyTrashed()->where('is_admin',0)->forceDelete();
//
//});
//Route::get('/contact', function () {
//    return view('contact');
//
//});
////Route::get('/post', function () {
////    $tasks=[
////        'Visit a friend'
////        ,'Finish assignment',
////        'Play games'
////    ];
////    return view('posts',compact('tasks'));
////
////});
//
////Route::resource('/co','PostController');
///*
//|--------------------------------------------------------------------------
//|view db records
//|--------------------------------------------------------------------------
//*/
//Route::get('/view', function (){
//    $posts=Post::all();
//    foreach ($posts as $post){
//        return $post->email;
//    }
//});
///*
//|--------------------------------------------------------------------------
//|View db records option 2 finding specific records by id
//|--------------------------------------------------------------------------
//*/
//Route::get('/find', function (){
//    $posts=Post::find(3);
//   return $posts->name;
//});
///*
//|--------------------------------------------------------------------------
//|Eloquent relationships one to one
//|--------------------------------------------------------------------------
//*/
//Route::get('/user/{id}/post','PostController@newpost');
///*
//|--------------------------------------------------------------------------
//|Eloquent relationships inverse relation
//|--------------------------------------------------------------------------
//*/
//Route::get('user_id/{id}/user','PostController@getuser');
///*
//|--------------------------------------------------------------------------
//|Eloquent relationships one to many
//|--------------------------------------------------------------------------
//*/
//Route::get('/getposts','PostController@getposts');
///*
//|--------------------------------------------------------------------------
//|Eloquent relationships  many to many
//|--------------------------------------------------------------------------
//*/
//Route::get('/getrole','PostController@getroles');
//
//Route::get("/contact","PostController@contact");
//Route::get("/posts","PostController@create");
//Route::get('/insert','AdminsController@index');
 /*
|--------------------------------------------------------------------------
|forms
|--------------------------------------------------------------------------
*/
Route::resource('/posts','PostController');