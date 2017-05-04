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
    
    $jobs = DB::table('jobs')
                ->join('sellers', 'jobs.seller_id', '=', 'sellers.id')
                ->select('jobs.*', 'sellers.company_name')
                ->get();
    return view('welcome')->with('jobs', $jobs);
});
Route::get('/job_category/{id}', 'JobController@category_wise_job');


Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/job_apply/{id}', 'HomeController@job_apply');
//Route::get('/employer', 'SellerController@seller');
//Route::get('/admin', 'AdminController@admin');


// Seller admin auth
Route::group(['middleware' => 'seller_guest'], function() {

    Route::get('employer_register', 'SellerAuth\RegisterController@showRegistrationForm');
    Route::post('employer_register', 'SellerAuth\RegisterController@register');
    Route::get('employer_login', 'SellerAuth\LoginController@showLoginForm');
    Route::post('employer_login', 'SellerAuth\LoginController@login');
});


Route::group(['middleware' => 'seller_auth'], function() {

    Route::post('employer_logout', 'SellerAuth\LoginController@logout');
    Route::get('/employer_home', 'SellerController@index');
    Route::get('/job_post', 'JobController@job_post');
    Route::post('/job_post', 'JobController@job_post_submit');
    Route::get('/view_post', 'JobController@view_post');
});

//End Seller admin auth

