<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::apiResource('specialists', 'SpecialistController');
Route::apiResource('doctors', 'DoctorController');