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

Auth::routes();

Route::get('/home', 'MainController@home')->name('home');

Route::get('/', function () {
    return redirect('home');
});

//Route::get('/', 'MainController@home')->name('home');
Route::get('/about-me', 'MainController@aboutme')->name('about_me');
Route::get('/resume', 'MainController@resume')->name('resume');
Route::get('/services', 'MainController@services')->name('services');
Route::get('/portfolio', 'MainController@portfolio')->name('portfolio');
Route::get('/blog', 'MainController@blog')->name('blog');
Route::get('/contact', 'MainController@contact')->name('contact');
Route::get('/download-resume', 'MainController@download_resume')->name('download-resume');

Route::get('/info', 'NBController@index')->name('nb_index');
Route::get('/workspace', 'WorkSpaceController@index')->name('workspace');

Route::get('/knowledges', 'KnowledgeController@index')->name('knowledges.index');
Route::get('/companies', 'CompanyController@index')->name('companies.index');
