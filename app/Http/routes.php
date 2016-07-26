<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/students', function () {
//     return App\Student::all();
// });
// Route::get('/students', function () {
//     return view('students');
//         //return App\Student::all();
// });
Route::get('/students', function () {
    return view('students',['students'=>App\Student::all()]);
 });
 Route::get('/students/add', function () {
    return view('new_student');
});
Route::post('/students/add', function () {
    return "student added";
});
// Route::post('/students/add', function () {
//     return Request::all();
// });
Route::post('/students/add', function () {
    //Create a new student object as we did in the tinker terminal
    $student = new App\Student();
    $student->name= Request::get('name');
    $student->email= Request::get('email');
    $student->course= Request::get('course');
    $student->save();
    //Once saved redirect back to all students table
    return Redirect::to('/students');
});
Route::get('/students/{id}/edit',function($id){
    $student=App\Student::findOrFail($id);
    return view('edit_student',['student'=>$student]);
});
Route::post('/students/{id}/edit',function($id){
    $student=App\Student::findOrFail($id);
    $student->name= Request::get('name');
    $student->email= Request::get('email');
    $student->course= Request::get('course');
    $student->save();
    return Redirect::to('/students');
});

// Route::get('/students/{id}/delete',function($id){
//     $student=App\Student::findOrFail($id);
//     return $student;
// });

Route::get('/students/{id}/delete',function($id){
    $student=App\Student::findOrFail($id);
    return view('delete_student',['student'=>$student]);
});

Route::post('/students/{id}/delete',function($id){
    $student=App\Student::findOrFail($id);
    $student->delete();
    return Redirect::to('/students');
});
