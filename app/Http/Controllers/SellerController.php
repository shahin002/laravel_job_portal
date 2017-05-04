<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;

class SellerController extends Controller {

    public function index() {
        $employer = Auth::guard('web_seller')->user()->id;
        $job_applications = DB::table('job_applications')
                ->join('users', 'job_applications.user_id', '=', 'users.id')
                ->join('jobs', 'job_applications.job_id', '=', 'jobs.id')
                ->orderBy('id', 'desc')
                ->select('job_applications.*', 'users.name', 'users.mobile', 'jobs.seller_id', 'jobs.job_post','jobs.job_title')
                ->where('jobs.seller_id', $employer)
                ->get();
//        echo '<pre>';
//        print_r($job_applications);
//        exit();
        return view('seller.home')->with('job_applications', $job_applications);
    }

    public function seller() {
        return view('seller.home');
    }

}
