<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/resumes', 'CurriculumController@index');

Route::get('/resumes/create-step1', 'CurriculumController@createStep1');
Route::post('/resumes/create-step1', 'CurriculumController@postCreateStep1');

Route::get('/resumes/create-step2', 'CurriculumController@createStep2');
Route::post('/resumes/create-step2', 'CurriculumController@postCreateStep2');

Route::post('/resumes/remove-image', 'CurriculumController@removeImage');

Route::get('/resumes/create-step3', 'CurriculumController@createStep3');
Route::post('/resumes/create-step3', 'CurriculumController@postCreateStep3');

Route::get('/resumes/create-step4', 'CurriculumController@createStep4');
Route::post('/resumes/create-step4', 'CurriculumController@postCreateStep4');

Route::get('/resumes/create-step5', 'CurriculumController@createStep5');
Route::post('/resumes/create-step5', 'CurriculumController@postCreateStep5');

Route::get('/resumes/create-step6', 'CurriculumController@createStep6');
Route::post('/resumes/create-step6', 'CurriculumController@postCreateStep6');

Route::get('/resumes/create-step7', 'CurriculumController@createStep7');
Route::post('/resumes/create-step7', 'CurriculumController@postCreateStep7');

Route::get('/resumes/uploadFiles', 'UploadFilesController@uploadFiles');
Route::post('/resumes/store', 'CurriculumController@store');

#Route::post('/upload', 'UploadFilesController@process');

/* 
Route::get('/curriculum/acquiredSkills', 'AcquiredSkillsController@acquiredSkills');
Route::post('/curriculum/acquiredSkills', 'AcquiredSkillsController@postAcquiredSkills');
 */

Route::get('/curriculum/acquiredSkills', 'AcquiredSkillsController@acquiredSkills');
Route::post('/curriculum', 'AcquiredSkillsController@storeAcquiredSkills');

Route::get('/curriculum/formalEducation', 'FormalEducationController@formalEducation');
Route::post('/curriculum', 'FormalEducationController@store');

Route::get('/curriculum/languages', 'LanguagesController@languages');
Route::post('/curriculum', 'LanguagesController@storeLanguages'); 

Route::get('/curriculum/personalInfo', 'PersonalInfoController@personalInfo');
Route::post('/curriculum', 'PersonalInfoController@storePersonalInfo');
 
Route::get('/curriculum/principalFunctions', 'PrincipalFunctionsController@principalFunctions');
Route::post('/curriculum', 'PrincipalFunctionsController@storePrincipalFunctions');

Route::get('/curriculum/workExperience', 'WorkExperienceController@workExperience');
Route::post('/curriculum', 'WorkExperienceController@storeWorkExperience');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

