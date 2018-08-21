<?php
Route::get('/', 'ContactsController@index'); 
Route::resource('contacts', 'ContactsController');
