<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\StudentController;


// Route::get('/', function () {
//     return view('welcome');
// });

// Изменение корневого маршрута на показ списка групп
Route::get('/', [GroupController::class, 'index']);

// Регистрация ресурсных маршрутов для групп
Route::resource('groups', GroupController::class);

// Регистрация ресурсных маршрутов для студентов, исключая метод index
Route::resource('groups.students', StudentController::class, ['except' => ['index']]);