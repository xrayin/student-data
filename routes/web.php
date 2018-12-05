<?php

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
    return view('welcome');
});

Route::get('/students', 'StudentController@allStudents');

Route::get('/students/{id}', 'StudentController@getStudent');

Route::get('/students/{id}/groups', 'StudentController@getGroupsByStudent');

Route::get('/students/{id}/groups/classes', 'StudentController@getClassesByStudentGroups');

Route::get('/students/{id}/subjects', 'StudentController@getSubjectsByStudent');

Route::get('/students/{id}/subjects/classes', 'StudentController@getClassesByStudentSubjects');

Route::get('/groups', 'GroupController@allGroups');

Route::get('/groups/{id}', 'GroupController@getGroup');

Route::get('/groups/{id}/students', 'GroupController@getStudentsByGroup');

Route::get('/subjects', 'SubjectController@allSubjects');

Route::get('/subjects/{id}', 'SubjectController@getSubject');

Route::get('/classes', 'ClassesController@allClasses');

Route::get('/classes/{id}', 'ClassesController@getClass');
