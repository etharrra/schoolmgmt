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
    return view('frontendtemplate');
});

// Route::get('/', function () {
//     return view('frontendtemplate');
// });


Route::group([
	//'name' => 'backend.',
	'middleware' => 'auth',
	'prefix' => 'backend'
	//'namespace' => 'Backend'

], function() {
	Route::get('dashboard','BackendController@dashboard');

	Route::resource('academicyear','AcademicyearController');

	Route::resource('grade','GradeController');

	Route::resource('room','RoomController');

	Route::resource('timetable','TimetableController');

	Route::resource('subject','SubjectController');

	Route::resource('teacher','TeacherController');

	Route::resource('guardian','GuardianController');

	Route::resource('student','StudentController');

	Route::resource('mark','MarkController');

	Route::resource('attendance','AttendanceController');
	
	//Route::resource('contact','ContactController');


	
});

Route::get('/','FrontendController@index')->name('index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/getroom/{id}','AjaxController@getroom')->name('getroom');

Route::get('/getstudent/{id}','AjaxController@getstudent')->name('getstudent');

Route::get('/getguardian/{email}','AjaxController@getguardian')->name('getguardian');

Route::get('/gradestudent/{id}','AjaxController@gradestudent')->name('gradestudent');

Route::get('/getsubject/{id}','AjaxController@getsubject')->name('getsubject');

Route::get('/roomdetail/{id}','AjaxController@roomdetail')->name('roomdetail');

Route::get('studentcount','FrontendController@studentcount')->name('studentcount');

Route::get('teachercount','FrontendController@teachercount')->name('teachercount');

Route::get('allteacher','FrontendController@allteacher')->name('allteacher');

Route::resource('contact','ContactController');

Route::get('/parents','ParentController@index');

// Route::get('/dateAttendance/{roomid}/{date}','AjaxController@dateAttendance')->name('dateAttendance');

