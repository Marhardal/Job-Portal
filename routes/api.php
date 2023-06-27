<?php

use App\Http\Controllers\EducationController;
use App\Http\Controllers\ReferralController;
use App\Http\Controllers\ResumeController;
use App\Http\Controllers\SeekerController;
use App\Http\Controllers\SeekerDutiesController;
use App\Http\Controllers\SkillController;
use App\Models\Resume;
use App\Models\Seeker_Duties;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('jobs', [VacancyController::class, 'index']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('duties', [SeekerDutiesController::class, 'index']);


Route::get('education', [EducationController::class, 'index']);

Route::get('referral', [ReferralController::class, 'index']);

Route::get('skill', [SkillController::class, 'index']);

Route::get('resume', [ResumeController::class, 'index']);

Route::post('seeker/store', [SeekerController::class, 'store']);
