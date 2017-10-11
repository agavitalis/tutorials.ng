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

/*
this routes specifies what the guy will type and where he will be taken

*/
Route::get('/','GeneralController@index')->name('homepage');

Route::get('/contact','GeneralController@contactus')->name('contactus');

Route::post('/search','GeneralController@search')->name('search');

Route::get('/view/{id}','GeneralController@view')->name('view');

Auth::routes();






Route::get('/students', 'StudentController@profile')->name('stdprofile');

Route::post('/stdedit/{id}', 'StudentController@edit')->name('stdedit');

Route::post('/studentupload','StudentController@upload')->name('studentupload');









Route::get('/tutors', 'TutorController@profile')->name('tutprofile');

Route::post('/tutedit/{id}', 'TutorController@edit')->name('tutedit');

Route::post('/tutorupload','TutorController@upload')->name('tutorupload');

Route::get('/details/{id}','TutorController@details')->name('tutordetails');



//admincontroller begins

Route::get('/admin','AdminController@dashboard')->name('admindashboard');

Route::match(['get','post'],'/newcourse', 'AdminController@newcourse')->name('newcourse');

Route::match(['get','post'],'/managecourse', 'AdminController@managecourse')->name('managecourse');

Route::match(['get','post'],'/updatecourse/{id}', 'AdminController@updatecourse')->name('updatecourse');

Route::get('/deletecourse/{id}', 'AdminController@deletecourse')->name('deletecourse');

Route::match(['get','post'],'/newcategory', 'AdminController@newcategory')->name('newcategory');

Route::get('/managecategory/{id?}', 'AdminController@managecategory')->name('managecategory');

Route::match(['get','post'],'/newlocation', 'AdminController@newlocation')->name('newlocation');

Route::get('/managelocation/{id?}', 'AdminController@managelocation')->name('managelocation');
