<?php

use App\Http\Controllers\DutyexperienceController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\ReferralController;
use App\Http\Controllers\ResumeController;
use App\Http\Controllers\ResumeSkillController;
use App\Http\Controllers\SeekerDutiesController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\UserController;
use App\Models\Education;
use App\Models\Experience;
use Database\Factories\SeekerDutiesFactory;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('customers.home');
});

Route::middleware('guest')->group(function ()
{
    Route::get('choose', function(){
        return view('choose');
    });

    Route::get('login', function(){
        return view('users.login');
    });

    Route::get('register', [UserController::class, 'create']);

    Route::post('register', [UserController::class, 'store']);

    Route::post('login', [UserController::class, 'login']);
});

Route::middleware('can:seeker')->group(function ()
{
    Route::get('resume', [ResumeController::class, 'index']);

    Route::get('resume/create', [ResumeController::class, 'create']);

    Route::post('resume', [ResumeController::class, 'store']);

    Route::get('resume/experience', [ExperienceController::class, 'create']);

    Route::post('resume/experience', [ExperienceController::class, 'store']);

    Route::get('resume/jobduties', [DutyExperienceController::class, 'create']);

    Route::post('resume/jobduties', [DutyExperienceController::class, 'store']);

    Route::get('resume/skill', [ResumeSkillController::class, 'create']);

    Route::post('resume/skill', [ResumeSkillController::class, 'store']);

    Route::get('resume/referral', [ReferralController::class, 'create']);

    Route::post('resume/referral', [ReferralController::class, 'store']);

    Route::get('resume/education', [EducationController::class, 'create']);

    Route::post('resume/education', [EducationController::class, 'store']);

});

Route::get('vacancies', [JobController::class, 'index']);

