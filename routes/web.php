<?php

use Illuminate\Support\Facades\Route;


Route::view('/', 'landing')->name('landing');
Route::view('/landing2', 'landing2')->name('landing2');
Route::view('/home', 'home')->name('home');
Route::view('/skills', 'skills')->name('skills');
Route::view('/projects', 'projects')->name('projects');
Route::view('/about', 'about')->name('about');