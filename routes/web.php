<?php

use App\Http\Controllers\AddressController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DocumentsController;
use App\Http\Controllers\DutyexperienceController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\LetterController;
use App\Http\Controllers\OrganisationController;
use App\Http\Controllers\ReferralController;
use App\Http\Controllers\ResumeController;
use App\Http\Controllers\ResumeSkillController;
use App\Http\Controllers\TemplatesController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VacancyDutiesController;
use App\Http\Controllers\VacancyController;
use App\Models\Education;

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

// Route::get('/email/verify', function (){
//     return view
// })

Route::get('/', function () {
    return view('seeker.home');
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

    Route::get('organisation/register', [OrganisationController::class, 'create']);

    Route::post('organisation/register', [OrganisationController::class, 'store']);

});

Route::middleware('can:seeker')->group(function ()
{
    Route::get('resume', [ResumeController::class, 'index']);

    Route::get('resume/show', [TemplatesController::class, 'show']);

    Route::get('resume/create', [ResumeController::class, 'create']);

    Route::get('resume/{resume:id}/edit', [ResumeController::class, 'edit']);

    Route::patch('resume/{resume:id}/update', [ResumeController::class, 'update']);

    Route::post('resume', [ResumeController::class, 'store']);

    Route::resource('resume/experience', ExperienceController::class)->except(['show', 'index']);

    Route::get('resume/experience/{resume:id}/show', [ExperienceController::class, 'show']);

    Route::resource('resume/duties', ExperienceController::class)->only(['create', 'store']);

    Route::resource('resume/skill', ResumeSkillController::class)->only(['create', 'store', 'destroy']);

    Route::resource('resume/referral', ReferralController::class)->except(['show', 'index']);

    Route::get('resume/referral/{resume:id}/show', [ReferralController::class, 'show']);

    Route::resource('resume/education', EducationController::class)->except(['show', 'index']);

    Route::get('resume/education/{resume:id}/show', [EducationController::class, 'show']);

    Route::get('download/resume', [DocumentsController::class, 'resume']);

    Route::resource('letter/address', AddressController::class);

    Route::resource('letter', LetterController::class);

    Route::get('download/letter', [DocumentsController::class, 'letter']);
});

Route::middleware(['can:recruiter'])->group(function () {

    Route::resource('vacancy', VacancyController::class)->except(['index', 'show']);

    // Route::resource('vacancies/duties', VacancyDutiesController::class);
});

Route::resource('jobs', VacancyController::class)->only(['index', 'show']);

