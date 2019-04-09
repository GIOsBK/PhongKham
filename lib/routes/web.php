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
    return view('frontend.home');
});
Route::group(['namespace'=>'Admin'],function(){
	Route::group(['prefix'=>'login', 'middleware'=>'CheckLogedIn'],function(){
		Route::get('/','LoginController@getLogin');
		Route::post('/','LoginController@postLogin');
	});

	Route::get('logout','HomeController@getLogout');

	Route::group(['prefix'=>'admin', 'middleware'=>'CheckLogedOut'],function(){
		Route::get('home','HomeController@getHome');

		Route::group(['prefix'=>'specialist'], function(){
			Route::get('/','SpecialistController@getSpec');
			Route::post('/','SpecialistController@postSpec');

			Route::get('edit/{id}','SpecialistController@getEditSpec');
			Route::post('edit/{id}','SpecialistController@postEditSpec');

			Route::get('delete/{id}','SpecialistController@getDeleteSpec');
		});

		Route::group(['prefix'=>'diploma'],function(){
			Route::get('/','DiplomaController@getDipl');
			Route::post('/','DiplomaController@postDipl');

			Route::get('edit/{id}','DiplomaController@getEditDipl');
			Route::post('edit/{id}','DiplomaController@postEditDipl');

			Route::get('delete/{id}','DiplomaController@getDeleteDipl');
		});

		Route::group(['prefix'=>'statusshift'],function(){
			Route::get('/','StatusShiftController@getStat');
			Route::post('/','StatusShiftController@postStat');

			Route::get('edit/{id}','StatusShiftController@getEditStat');
			Route::post('edit/{id}','StatusShiftController@postEditStat');

			Route::get('delete/{id}','StatusShiftController@getDeleteStat');
		});

		Route::group(['prefix'=>'assignedshifts'],function(){
			Route::get('/','AssignedShiftsController@getAssi');
			Route::post('/','AssignedShiftsController@postAssi');

			Route::get('edit/{id}','AssignedShiftsController@getEditAssi');
			Route::post('edit/{id}','AssignedShiftsController@postEditAssi');

			Route::get('delete/{id}','AssignedShiftsController@getDeleteAssi');
		});

		Route::group(['prefix'=>'doctor'],function(){
			Route::get('/','UDoctorController@getDoctor');

			Route::get('add','UDoctorController@getAddDoctor');
			Route::post('add','UDoctorController@postAddDoctor');

			Route::get('edit/{id}','UDoctorController@getEditDoctor');
			Route::post('edit/{id}','UDoctorController@postEditDoctor');

			Route::get('delete/{id}','UDoctorController@getDeleteDoctor');
		});


	});
});

Route::group(['namespace'=>'doctor'],function(){
	Route::group(['prefix'=>'doctor'], function(){
			Route::get('/','DoctorController@getHome');

			Route::get('specialist','DoctorController@getSpecialist');
			/*Route::post('/','SpecialistController@postSpec');

			Route::get('edit/{id}','SpecialistController@getEditSpec');
			Route::post('edit/{id}','SpecialistController@postEditSpec');

			Route::get('delete/{id}','SpecialistController@getDeleteSpec');*/
		});
});