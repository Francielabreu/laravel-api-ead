<?php

use App\Http\Controllers\Api\{
    CourseController
};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/Courses',[CourseController::class,'index']);
Route::get('/Courses/{id}',[CourseController::class,'show']);

Route::get('/',function(){
    return response()->json([
         'success' => true,
    ]);
});