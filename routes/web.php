<?php

use App\Livewire\Partner;
use App\Livewire\Product;
use App\Livewire\Contact;
use Illuminate\Support\Facades\Route;
use App\Livewire\Welcome;

Route::get('/', Welcome::class)->name('home');


Route::get('/partner', Partner::class)->name('partner');

Route::get('/product', Product::class)->name('product');

Route::get('/contact', Contact::class)->name('contact');

// Route::get('/', function () {
//     return view('welcome');
// });
