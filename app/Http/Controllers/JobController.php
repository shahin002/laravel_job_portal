<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;
use Auth;
use DB;

class JobController extends Controller {

    public function job_post() {
        return view('seller.job_post');
    }

    public function job_post_submit(Request $request) {
//        echo '<pre>';
//        print_r($request->all());
//        exit();
        Job::create($request->all());
        return redirect('/job_post')->with('message', 'Job information save successfully');
    }

    public function view_post() {
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

    public function category_wise_job($id) {
        $jobs = DB::table('jobs')
                ->join('sellers', 'jobs.seller_id', '=', 'sellers.id')
                ->select('jobs.*', 'sellers.company_name')
                ->where('jobs.job_category_id', $id)
                ->get();
        return view('welcome')->with('jobs', $jobs);
    }

}
