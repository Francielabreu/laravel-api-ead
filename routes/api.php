<?php

use App\Http\Controllers\Api\{
    CourseController,
    ModuleController,
    LessonController,
    SupportController,
    ReplySupportController
};

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/courses', [CourseController::class, 'index']);
Route::get('/courses/{id}', [CourseController::class, 'show']);

Route::get('/courses/{id}/modules', [ModuleController::class, 'index']);

Route::get('/modules/{id}/lessons', [LessonController::class, 'index']);
Route::get('/lessons/{id}', [LessonController::class, 'show']);

Route::get('/supports', [SupportController::class, 'index']);
Route::post('/supports', [SupportController::class, 'store']);

Route::post('/replies', [ReplySupportController::class, 'createReply']);


Route::get('/', function(){
    return response()->json(['success' => true]);
});
