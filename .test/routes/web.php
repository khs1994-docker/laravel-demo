<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test',function(){
   return 1;
});

Route::get('/testview',function(){
    return view('test');
});
