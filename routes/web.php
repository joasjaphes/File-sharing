<?php
Route::get('/', 'PagesController@Home');
Route::get('/Home', 'PagesController@Home');
Route::get('/about','PagesController@About');
Route::get('/Service','PagesController@Service');
Route::get('/Register','PagesController@Register');
//Route::post('/Account','RegistrationController@Login');
Auth::routes();
Route::get('/Account', 'AccountController@index');
Route::get('/admin','UsersController@Registered_Users');
Route::post('/Account','UsersController@UploadFile');
Route::post('/upload','PagesController@Upload');
Route::get('/files','UsersController@viewReceivedFiles');
Route::get('/upload', 'UsersController@Download');
Route::get('/files/{filename}','UsersController@remove')->name('delete');
?>
