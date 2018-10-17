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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('employee', 'EmployeesController');

Route::get('salary_sheet', 'EmployeesController@SalarySheet');

Route::get('create_salary_sheet', 'EmployeesController@CreateSalarySheet');

Route::get('emp_info', 'EmployeesController@EmpInfo');

Route::post('salary_store', 'EmployeesController@salaryStore');
