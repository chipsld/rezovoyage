<?php

Route::view('/', 'accueil')->name('accueil');
Route::view('/a_propos', 'a_propos')->name('about');
Route::view('/voyages', 'voyages')->name('voyages');
Route::view('admin/voyages', 'voyages', ['admin' => 1]);

Route::redirect('voyages/{id_voyage?}', '/voyages');


Route::get('voyages/{id_voyage?}', function ($id_voyage) {
    return view('welcome');
})->name('oneVoyage');

	
// ROUTE ACCUEIL PANEL ADMIN :
Route::get('admin/accueil', function () {
    return view('admin/admin_accueil');
})->name('admin_accueil');


// ROUTE CRUD VOYAGES :


Route::get('admin/voyages', function () {
    return view('admin/admin_voyages');
})->name('admin_voyages');

Route::get('admin/voyages/list', function () {
    return view('admin/admin_voyages');
})->name('admin_voyages');

Route::get('admin/voyages/create', function () {
    return view('admin/admin_voyages');
})->name('admin_voyages');



// ROUTE USERS :

Route::get('admin/users', function () {
    return view('admin/admin_users');
})->name('admin_users');

