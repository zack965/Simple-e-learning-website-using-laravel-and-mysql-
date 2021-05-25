<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProfileUserController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\StudentSpaceController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\CommunicationController;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//userspace
Route::get('Student_details',[ProfileUserController::class,'Student_details_get'])->name('Student_details_get')->middleware('auth');
Route::post('Student_details',[ProfileUserController::class,'Student_details_post'])->name('Student_details_post')->middleware('auth');

Route::get('Teatcher_details',[ProfileUserController::class,'Teatcher_details_get'])->name('Teatcher_details_get')->middleware('auth');
Route::post('Teatcher_details',[ProfileUserController::class,'Teatcher_details_post'])->name('Teatcher_details_post')->middleware('auth');


//courses
Route::get('courses',[CourseController::class,'get_Courses'])->name('get_Courses')->middleware('auth');
Route::get('all_courses',[CourseController::class,'all_courses'])->name('all_courses')->middleware('auth');
Route::get('Add_Courses_Get',[CourseController::class,'Add_Courses_Get'])->name('Add_Courses_Get')->middleware('auth');
Route::post('Add_Courses_Post',[CourseController::class,'Add_Courses_Post'])->name('Add_Courses_Post')->middleware('auth');
Route::get('DeleteCourse/{id}',[CourseController::class,'DeleteCourse'])->name('DeleteCourse')->middleware('auth');



// -- skills - student
Route::get('GetUserSkills/{id}',[StudentSpaceController::class,'GetUserSkills'])->name('GetUserSkills')->middleware('auth');
Route::get('AddSkill_Get',[StudentSpaceController::class,'AddSkill_Get'])->name('AddSkill_Get')->middleware('auth');
Route::post('AddSkillsStudent_post',[StudentSpaceController::class,'AddSkillsStudent_post'])->name('AddSkillsStudent_post')->middleware('auth');
Route::get('DeleteSkill/{id_skill}',[StudentSpaceController::class,'DeleteSkill'])->name('DeleteSkill')->middleware('auth');


// video -course Space
Route::get('GetVideosOfCourse/{id}',[VideoController::class,'GetVideosOfCourse'])->name('GetVideosOfCourse')->middleware('auth');
Route::get('Add_Video_Get/{id}',[VideoController::class,'Add_Video_Get'])->name('Add_Video_Get')->middleware('auth');
Route::post('Add_Video_post',[VideoController::class,'Add_Video_post'])->name('Add_Video_post')->middleware('auth');
Route::get('ChangeVideo/{id}/{course_id}',[VideoController::class,'ChangeVideo'])->name('ChangeVideo')->middleware('auth');
Route::get('DeleteVideoOfCourse/{id}/{course_id}',[VideoController::class,'DeleteVideoOfCourse'])->name('DeleteVideoOfCourse')->middleware('auth');

// resources space
Route::get('Add_Resources_Videos/{id}',[VideoController::class,'Add_Resources_Videos'])->name('Add_Resources_Videos')->middleware('auth');
Route::post('Add_Resources_Videos_post',[VideoController::class,'Add_Resources_Videos_post'])->name('Add_Resources_Videos_post')->middleware('auth');
Route::get('Delete_Resources_Videos/{id}',[VideoController::class,'Delete_Resources_Videos'])->name('Delete_Resources_Videos')->middleware('auth');


// Quiz Spaces
Route::get('All_Quizes',[QuizController::class,'All_Quizes'])->name('All_Quizes')->middleware('auth');
Route::get('Teatcher_Quizes',[QuizController::class,'Teatcher_Quizes'])->name('Teatcher_Quizes')->middleware('auth');
Route::get('Add_Quiz_Get',[QuizController::class,'Add_Quiz_Get'])->name('Add_Quiz_Get')->middleware('auth');
Route::post('Add_Quiz_Post',[QuizController::class,'Add_Quiz_Post'])->name('Add_Quiz_Post')->middleware('auth');
Route::get('Delete_Quiz/{quiz_id}',[QuizController::class,'Delete_Quiz'])->name('Delete_Quiz')->middleware('auth');

// Questions Spaces
Route::get('quize_data_user/{id_u}',[QuizController::class,'quize_data_user'])->name('quize_data_user')->middleware('auth');
Route::get('delete_quize_data_user/{id_ud}',[QuizController::class,'delete_quize_data_user'])->name('delete_quize_data_user')->middleware('auth');
Route::get('See_Questions/{id_q}',[QuizController::class,'See_Questions'])->name('See_Questions')->middleware('auth');
Route::get('See_Questions_teatcher/{id_q}',[QuizController::class,'See_Questions_teatcher'])->name('See_Questions_teatcher')->middleware('auth');
Route::get('Add_Questions_Get/{id_qq}',[QuizController::class,'Add_Questions_Get'])->name('Add_Questions_Get')->middleware('auth');
Route::post('Add_Questions_Post',[QuizController::class,'Add_Questions_Post'])->name('Add_Questions_Post')->middleware('auth');
Route::get('Delete_Question/{id_q}',[QuizController::class,'Delete_Question'])->name('Delete_Question')->middleware('auth');
Route::post('Answer',[QuizController::class,'Answer'])->name('Answer')->middleware('auth');
Route::get('Next/{id_q}',[QuizController::class,'Next'])->name('Next')->middleware('auth');
Route::get('CalcScore/{id_quize}',[QuizController::class,'CalcScore'])->name('CalcScore')->middleware('auth');


// questions messages from student side
Route::get('get_all_taatcher',[CommunicationController::class,'get_all_taatcher'])->name('get_all_taatcher')->middleware('auth');
Route::get('Send_message_get/{id_s}',[CommunicationController::class,'Send_message_get'])->name('Send_message_get')->middleware('auth');
Route::post('Send_message_post',[CommunicationController::class,'Send_message_post'])->name('Send_message_post')->middleware('auth');
Route::get('get_student_message/{std_id}',[CommunicationController::class,'get_student_message'])->name('get_student_message')->middleware('auth');

//questions messages from teatcher side
Route::get('get_teatcher_message',[CommunicationController::class,'get_teatcher_message'])->name('get_teatcher_message')->middleware('auth');
Route::get('Send_Answer_Get/{id_mess}',[CommunicationController::class,'Send_Answer_Get'])->name('Send_Answer_Get')->middleware('auth');
Route::post('Send_Answer_Post',[CommunicationController::class,'Send_Answer_Post'])->name('Send_Answer_Post')->middleware('auth');





