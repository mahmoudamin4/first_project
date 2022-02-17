<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix=>users'],function(){
  Route::get('show',function(){
return 'amin hi';
  });
});
