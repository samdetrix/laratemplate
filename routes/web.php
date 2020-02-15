<?php

//we are loading the templatess from the controller, not directly from the blade templates

//indexcontroller
Route::get('/' , 'index@index');

//generic controller 
Route::get('/generic' , 'generic@index');