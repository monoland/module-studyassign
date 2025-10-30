<?php

use Illuminate\Support\Facades\Route;
use Module\Studyassign\Http\Controllers\HistoryController;
use Module\Studyassign\Http\Controllers\DashboardController;
use Module\Studyassign\Http\Controllers\SubmissionController;

Route::get('dashboard', [DashboardController::class, 'index']);
Route::get('report', [DashboardController::class, 'report']);

Route::resource('history', HistoryController::class)
    ->parameters(['history' => 'studyassignHistory'])
    ->names([
    'index' => 'studysign.history.index',
    'create' => 'studysign.history.create',
    'store' => 'studysign.history.store',
    'show' => 'studysign.history.show',
    'edit' => 'studysign.history.edit',
    'update' => 'studysign.history.update',
    'destroy' => 'studysign.history.destroy',
]);

Route::resource('submission', SubmissionController::class)
    ->parameters(['submission' => 'studyassignSubmission'])
    ->names([
    'index' => 'studysign.submission.index',
    'create' => 'studysign.submission.create',
    'store' => 'studysign.submission.store',
    'show' => 'studysign.submission.show',
    'edit' => 'studysign.submission.edit',
    'update' => 'studysign.submission.update',
    'destroy' => 'studysign.submission.destroy',
]);
