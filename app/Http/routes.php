<?php

Route::get('/', [
    'as' => 'home',
    'uses' => 'PagesController@getHome'
]);

Route::get('posts/{id}', [
    'as' => 'posts.show',
    'uses' => 'PagesController@getPost'
])->where('id', '[0-9]+');
