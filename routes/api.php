<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\HomeworkController;
use App\Http\Controllers\ExamEventController;
use App\Http\Controllers\StudentAbsenceController;
//use App\Http\Middleware\AdminAuthenticated;
//use App\Http\Middleware\TeacherAuthenticated;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

// Protected routes
Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::post('/logout', [AuthController::class, 'logout']);
});

//Route::middleware([AdminAuthenticated::class])->group(function(){
Route::prefix('admin')->group(function () {
    Route::prefix('/student')->group(function (){
        Route::get('/{id}',[StudentController::class, 'index']);
        Route::get('/',[StudentController::class, 'getStudents']);
        Route::put('/update/{id}', [StudentController::class, 'update']);
        Route::post('/store/{id}', [StudentController::class, 'store']);
        Route::post('/delete/{id}', [StudentController::class, 'destroy']);
        Route::get('/search', [StudentController::class, 'search']);
        Route::get('/filter',[StudentController::class,'filter'])->name('student.filter');

        Route::prefix('/absence')->group(function (){
        
            Route::post('/{id}',[StudentAbsenceController::class,'index']);
            Route::post('/store/{id}',[StudentAbsenceController::class,'store']);
            Route::post('/delete/{id}',[StudentAbsenceController::class,'destroy']);
            Route::post('/update/{id}',[StudentAbsenceController::class,'update']);
        });
    });
    Route::prefix('/teacher')->group(function (){
        Route::get('/{id}',[TeacherController::class, 'index']);
        Route::get('/',[TeacherController::class, 'getTeachers']);
        Route::put('/update/{id}', [TeacherController::class, 'update']);
        Route::post('/store', [TeacherController::class, 'store']);
        });
    Route::prefix('/event')->group(function (){
        Route::get('/exam_event',[ExamEventController::class,'index']);
        Route::post('/exam_event/create',[ExamEventController::class,'create']);
        Route::post('/exam_event/update',[ExamEventController::class,'update']);
        Route::post('/exam_event/delete',[ExamEventController::class,'destroy']);
        });
    });

//});
//Route::middleware([TeacherAuthenticated::class])->group(function(){
Route::prefix('teacher')->group(function() {
    Route::prefix('/exam')->group(function () {
        Route::post('/create/{id}', [ExamController::class, 'store']);
        Route::post('/delete/{id}', [ExamController::class, 'destroy']);        
        Route::post('/store_answer/{id}', [ExamAnswerController::class, 'store']);        
        Route::post('/delete_answer/{id}', [ExamAnswerController::class, 'destory']);        
        Route::post('/store_question/{id}', [ExamQuestionController::class, 'store']);        
        Route::post('/delete_question/{id}', [ExamQuestionController::class, 'destroy']);        
        });
    Route::prefix('/homework')->group(function(){
        Route::post('/create', [HomeworkController::class, 'store']);
        });
    });
//});