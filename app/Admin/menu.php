<?php

Admin::menu()->url('/')->label('Start page')->icon('fa-dashboard');
Admin::menu(\App\User::class)->label('Пользователи')->icon('fa-user');
Admin::menu(\App\Models\Post::class)->label('Блог')->icon('fa-book');
