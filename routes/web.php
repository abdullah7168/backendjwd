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

Route::get('/', 'DegreevarifyController@showAllRequests');
Route::get('/degree-verf-request/{id}', 'DegreevarifyController@processRequest');
Route::post('process/request','DegreevarifyController@postRequest');

Route::get('/students', 'StudentController@allStudents');
Route::get('/student/register', 'StudentController@registerStudentView');
Route::post('/student/register', 'StudentController@registerStudent');

Route::get('/enrollments', 'EnrollmentController@allEnrollments');
Route::get('/enrollment/register', 'EnrollmentController@registerEnrollmentView');
Route::post('/enrollment/register', 'EnrollmentController@registerEnrollment');


Route::get('/cources', 'CourceController@allCources');
Route::get('/cource/register', 'CourceController@registerCourceView');
Route::post('/cource/register', 'CourceController@registerCource');



Route::get('/departments', 'DepartmentController@allDepartments');
Route::get('/department/register', 'DepartmentController@registerDepartmentView');
Route::post('/department/register', 'DepartmentController@registerDepartment');



Route::get('/results', 'ResultController@allResults');
Route::get('/result/announce', 'ResultController@announceResultView');
Route::post('/result/announce', 'ResultController@announceResult');


Route::get('/cource-results', 'CourceresultController@allResults');
Route::get('/cource-result/announce', 'CourceresultController@announceResultView');
Route::post('/cource-result/announce', 'CourceresultController@announceResult');



/**
 * Notification generation
 * is handled by these routes
 * 
 */
Route::post('/watch/degree-vf-reqs','DegreevarifyController@ReqWatcher');
Route::post('/watch/degree-vf-reply','DegreevarifyController@ReplyWatcher');

Route::post('get-reply-for','DegreevarifyController@getReply');
Route::post('api/change/notify','DegreevarifyController@editReply');



/**
 * API interface, connects
 * Backend with the Client side
 * written in Angular
 */


Route::post('/api/student/login','StudentController@apiLogin');
Route::post('/api/degree-verification','StudentController@initiateRequest');