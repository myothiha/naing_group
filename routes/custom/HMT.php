<?php

namespace Routes;

use Route;

class HMT
{
    public static function routes()
    {
        Route::resource('/room-types', 'RoomTypeController');

        Route::resource('/room-features', 'RoomFeatureController');

        Route::resource('/project/{project}/room', 'RoomController');

        Route::get('/project/{project}/floor',	   'RoomController@floor');

        Route::get('/project/{project}/floor/{floor}',        'RoomController@index');
        Route::get('/project/{project}/floor/{floor}/create', 'RoomController@create');


    }
}
