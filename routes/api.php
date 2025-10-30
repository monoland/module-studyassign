<?php

use Illuminate\Support\Facades\Route;
use Module\Studyassign\Http\Controllers\DashboardController;

Route::get('dashboard', [DashboardController::class, 'index']);
