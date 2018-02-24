<?php
header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Headers: Content-Type, application/json');
header('Access-Control-Allow-Headers: Content-Type, x-xsrf-token');
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
    return view('dashboard-home');
});
Route::get('/degree-verf-request', function () {
    return view('dashboard-degreeverification');
});


Route::get('/students', 'StudentController@allStudents');
Route::get('/student/register', 'StudentController@registerStudentView');
Route::post('/student/register', 'StudentController@registerStudent');


Route::get('/cources', 'CourceController@allCources');
Route::get('/cource/register', 'CourceController@registerCourceView');
Route::post('/cource/register', 'CourceController@registerCource');



Route::get('/departments', 'DepartmentController@allDepartments');
Route::get('/department/register', 'DepartmentController@registerDepartmentView');
Route::post('/department/register', 'DepartmentController@registerDepartment');



Route::get('/results', 'ResultController@allResults');
Route::get('/result/announce', 'ResultController@announceResultView');
Route::post('/result/announce', 'ResultController@announceResult');






/**
 * API interface, connects
 * Backend with the Client side
 * written in Angular
 */


Route::post('/api/student/login','StudentController@apiLogin');