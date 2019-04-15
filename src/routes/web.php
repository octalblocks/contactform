<?php 

Route::group(['namespace'=>'Octalblocks\ContactForm\Http\Controllers', 'middleware'=>['web']], function(){
	Route::get('contact', 'ContactFormController@index')->name('show-contact');
	Route::post('contact', 'ContactFormController@sendMail')->name('contact');
});