<?php

use Illuminate\Support\Facades\Route;
use eyupinann\Quote\Index;

Route::get('/page', [Index::class, 'page'])->name('new');
