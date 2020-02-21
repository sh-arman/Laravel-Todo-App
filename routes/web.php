<?php


// Home 
Route::get('/','TodoController@index')->name('home');
// Todo 
Route::get('/todo','TodoController@todo')->name('todo');
// Add Todo
Route::POST('/add','TodoController@add')->name('add');
// Complete 
Route::get('/completed/{id}/','TodoController@complete')->name('complete');
// Completed Todos
Route::get('/completedtodos/','TodoController@completedtodos')->name('completedtodos');
// Edit
Route::get('/edit/{id}/','TodoController@edit')->name('edit');
// Update
Route::POST('/update/{id}/','TodoController@update')->name('update');
// Delete
Route::get('/delete/{id}/','TodoController@delete')->name('delete');
// Restore
Route::get('/restore/{id}/','TodoController@restore')->name('restore');
