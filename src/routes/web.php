<?php

use Illuminate\Support\Facades\Route;
use eyupinann\Quote\Index;

Route::get('/posts/{$slug}', [Index::class, 'page'])->name('posts.index');
