<?php

use Illuminate\Http\Request;

Route::post('/messages', 'MessageController@store'); //(1)
