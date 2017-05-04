<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobs = DB::table('jobs')
                ->join('sellers', 'jobs.seller_id', '=', 'sellers.id')
                ->orderBy('id','desc')
                ->select('jobs.*', 'sellers.company_name')
                ->get();
//        echo '<pre>';
//        print_r($jobs);
//        exit();
        return view('welcome')->with('jobs', $jobs);
//        return view('home');
    }
    public function job_apply($id){
        $user_id= Auth::user()->id;
//        echo'<pre>';
//        print_r($user_id);
//        exit();
        DB::table('job_applications')->insert([
            'job_id' => $id,
            'user_id' => $user_id,
        ]);
        return redirect('/home')->with('message', 'Job Application Send Successfully');
        
    }
}
