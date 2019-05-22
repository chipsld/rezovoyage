<?php

Route::view('/accueil', 'accueil')->name('accueil');


Route::get('/a_propos', 'StaticPageController@about')->name('about');
Route::get('/voyages', 'VoyageController@index' )->name('voyages');

Route::get('/voyages/{id_voyage?}','VoyageController@showVoyage')->name('oneVoyage');



	
// ROUTE ACCUEIL PANEL ADMIN :
Route::get('admin/accueil', function () {
    return view('admin/admin_accueil');
})->name('admin_accueil');


// ROUTE CRUD VOYAGES :


Route::get('admin/voyages','AdminController@index')->name('admin_voyages');

Route::get('admin/voyages/list', function () {
    return view('admin/admin_voyages');
})->name('admin_voyages_list');

Route::get('admin/voyages/add', function () {
	return view('admin/admin_voyages_create');
})->name('admin_voyages_add');

Route::get('admin/voyages/update/{id_voyage?}', 'AdminController@show')->name('goToUpdate');


Route::post('admin/voyages/create','AdminController@store')->name('addVoyage');
Route::post('admin/voyages/update{id_voyage?}','AdminController@update')->name('updateVoyage');
Route::get('admin/voyages/delete{id_voyage?}','AdminController@delete')->name('deleteVoyage');






// ROUTE USERS :

Route::get('admin/users', function () {
    return view('admin/admin_users');
})->name('admin_users');

Route::get('/test', function(){
    Artisan::call('migrate');
    // Artisan::call('db:seed');
});


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
