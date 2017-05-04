<?php
//echo'<pre>';
//print_r($job_categories);
//exit();
?>

@extends('layouts.app')

@section('content')
<div class="banner-job">
    <div class="banner-overlay"></div>
    <div class="container text-center">
        <h1 class="title">The Easiest Way to Get Your New Job</h1>
        <h3>We offer 12000 jobs vacation right now</h3>
        <div class="banner-form">
            <form action="#">
                <input type="text" class="form-control" placeholder="Type your key word">

                <button type="submit" class="btn btn-primary" value="Search">Search</button>
            </form>
        </div><!-- banner-form -->

        <ul class="banner-socail list-inline">
            <li><a href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#" title="Twitter"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#" title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="#" title="Youtube"><i class="fa fa-youtube"></i></a></li>
        </ul><!-- banner-socail -->
    </div><!-- container -->
</div><!-- banner-section -->

<div class="page">
    <div class="container">
        <div class="section category-items job-category-items  text-center">
            <ul class="category-list">
                @foreach($job_categories as $job_category)
                <li class="category-item">
                    <a href="{{ url('/job_category/'.$job_category->id) }}">
                        <div class="category-icon"><img src="{{ asset('public/template/'.$job_category->category_image) }}" alt="images" class="img-responsive"></div>
                        <span class="category-title">{{$job_category->category_name}}</span>
                        <span class="category-quantity">(1298)</span>
                    </a>
                </li><!-- category-item -->
                @endforeach

<!--                <li class="category-item">
                    <a href="{{ url('/job_category/Education/Training') }}">
                        <div class="category-icon"><img src="{{ asset('public/template') }}/images/icon/2.png" alt="images" class="img-responsive"></div>
                        <span class="category-title">Education/Training</span>
                        <span class="category-quantity">(76212)</span>
                    </a>
                </li> category-item 

                <li class="category-item">
                    <a href="{{ url('/job_category/Engineer/Architects') }}">
                        <div class="category-icon"><img src="{{ asset('public/template') }}/images/icon/3.png" alt="images" class="img-responsive"></div>
                        <span class="category-title">Engineer/Architects</span>
                        <span class="category-quantity">(212)</span>
                    </a>
                </li> category-item 

                <li class="category-item">
                    <a href="{{ url('/job_category/Garments/Textile') }}">
                        <div class="category-icon"><img src="{{ asset('public/template') }}/images/icon/4.png" alt="images" class="img-responsive"></div>
                        <span class="category-title">Garments/Textile</span>
                        <span class="category-quantity">(972)</span>
                    </a>
                </li> category-item 

                <li class="category-item">
                    <a href="{{ url('/job_category/HR/Org. Development') }}">
                        <div class="category-icon"><img src="{{ asset('public/template') }}/images/icon/5.png" alt="images" class="img-responsive"></div>
                        <span class="category-title">HR/Org. Development</span>
                        <span class="category-quantity">(1298)</span>
                    </a>
                </li> category-item 

                <li class="category-item">
                    <a href="{{ url('/job_category/Design/Creative') }}">
                        <div class="category-icon"><img src="{{ asset('public/template') }}/images/icon/6.png" alt="images" class="img-responsive"></div>
                        <span class="category-title">Design/Creative</span>
                        <span class="category-quantity">(76212)</span>
                    </a>
                </li> category-item 

                <li class="category-item">
                    <a href="{{ url('/job_category/Research/Consultancy') }}">
                        <div class="category-icon"><img src="{{ asset('public/template') }}/images/icon/7.png" alt="images" class="img-responsive"></div>
                        <span class="category-title">Research/Consultancy</span>
                        <span class="category-quantity">(1298)</span>
                    </a>
                </li> category-item 

                <li class="category-item">
                    <a href="{{ url('/job_category/Medical/Pharma') }}">
                        <div class="category-icon"><img src="{{ asset('public/template') }}/images/icon/8.png" alt="images" class="img-responsive"></div>
                        <span class="category-title">Medical/Pharma</span>
                        <span class="category-quantity">(76212)</span>
                    </a>
                </li> category-item 

                <li class="category-item">
                    <a href="{{ url('/job_category/Music & Arts') }}">
                        <div class="category-icon"><img src="{{ asset('public/template') }}/images/icon/9.png" alt="images" class="img-responsive"></div>
                        <span class="category-title">Music & Arts</span>
                        <span class="category-quantity">(212)</span>
                    </a>
                </li> category-item 

                <li class="category-item">
                    <a href="{{ url('/job_category/Marketing/Sales') }}">
                        <div class="category-icon"><img src="{{ asset('public/template') }}/images/icon/10.png" alt="images" class="img-responsive"></div>
                        <span class="category-title">Marketing/Sales</span>
                        <span class="category-quantity">(1298)</span>
                    </a>
                </li> category-item 

                <li class="category-item">
                    <a href="{{ url('/job_category/Production/Operation') }}">
                        <div class="category-icon"><img src="{{ asset('public/template') }}/images/icon/11.png" alt="images" class="img-responsive"></div>
                        <span class="category-title">Production/Operation</span>
                        <span class="category-quantity">(124)</span>
                    </a>
                </li> category-item 

                <li class="category-item">
                    <a href="{{ url('/job_category/Miscellaneous') }}">
                        <div class="category-icon"><img src="{{ asset('public/template') }}/images/icon/12.png" alt="images" class="img-responsive"></div>
                        <span class="category-title">Miscellaneous</span>
                        <span class="category-quantity">(972)</span>
                    </a>
                </li> category-item 					-->
            </ul>				
        </div><!-- category ad -->			

        <div class="section latest-jobs-ads">
            <div class="section-title tab-manu">
                <h4>Latest Jobs</h4>
                <!-- Nav tabs -->      
                <ul class="nav nav-tabs" role="tablist">
                    <!--<li role="presentation"><a href="#hot-jobs" data-toggle="tab">Hot Jobs</a></li>-->
                    <li role="presentation" class="active"><a href="#recent-jobs" data-toggle="tab">Recent Jobs</a></li>
                    <!--<li role="presentation" class="active"><a href="#popular-jobs" data-toggle="tab">Popular Jobs</a></li>-->
                </ul>
            </div>

            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active" id="recent-jobs">
                    
                    @foreach($jobs as $job)
                    <div class="job-ad-item">
                        <div class="item-info">
                            <div class="item-image-box">
                                <div class="item-image">
                                    <a href="job-details.html"><img src="{{ asset('public/template') }}/images/job/2.png" alt="Image" class="img-responsive"></a>
                                </div><!-- item-image -->
                            </div>

                            <div class="ad-info">
                                <span><a href="#" class=title>{{$job->job_post}}</a> @ <a href="#">{{$job->company_name}}</a></span>
                                <div class="ad-meta">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>{{$job->job_location}} </a></li>
                                        <li><a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i>{{$job->job_type}}</a></li>
                                        <li><a href="#"><i class="fa fa-money" aria-hidden="true"></i>BDT {{$job->salary_range_min}} - BDT {{$job->salary_range_max}}</a></li>
                                        <li><a href="#"><i class="fa fa-tags" aria-hidden="true"></i>{{$job->company_name}}</a></li>
                                    </ul>
                                </div><!-- ad-meta -->									
                            </div><!-- ad-info -->
                            <div class="button">
                                <a href="{{ url('/job_apply/'.$job->id) }}" class="btn btn-primary">Apply Now</a>
                            </div>
                        </div><!-- item-info -->
                    </div><!-- ad-item -->
                    @endforeach

<!--                    <div class="job-ad-item">
                        <div class="item-info">
                            <div class="item-image-box">
                                <div class="item-image">
                                    <a href="job-details.html"><img src="{{ asset('public/template') }}/images/job/1.png" alt="Image" class="img-responsive"></a>
                                </div> item-image 
                            </div>

                            <div class="ad-info">
                                <span><a href="job-details.html" class=title>Project Manager</a> @ <a href="#">Dominos Pizza</a></span>
                                <div class="ad-meta">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>San Francisco, CA, US </a></li>
                                        <li><a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i>Full Time</a></li>
                                        <li><a href="#"><i class="fa fa-money" aria-hidden="true"></i>$25,000 - $35,000</a></li>
                                        <li><a href="#"><i class="fa fa-tags" aria-hidden="true"></i>HR/Org. Development</a></li>
                                    </ul>
                                </div> ad-meta 									
                            </div> ad-info 
                            <div class="button">
                                <a href="#" class="btn btn-primary">Apply Now</a>
                            </div>
                        </div> item-info 
                    </div> ad-item 	

                    <div class="job-ad-item">
                        <div class="item-info">
                            <div class="item-image-box">
                                <div class="item-image">
                                    <a href="job-details.html"><img src="{{ asset('public/template') }}/images/job/4.png" alt="Image" class="img-responsive"></a>
                                </div> item-image 
                            </div>

                            <div class="ad-info">
                                <span><a href="job-details.html" class="title">Human Resource Manager</a> @ <a href="#">Dropbox Inc</a></span>
                                <div class="ad-meta">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>San Francisco, CA, US </a></li>
                                        <li><a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i>Full Time</a></li>
                                        <li><a href="#"><i class="fa fa-money" aria-hidden="true"></i>$25,000 - $35,000</a></li>
                                        <li><a href="#"><i class="fa fa-tags" aria-hidden="true"></i>HR/Org. Development</a></li>
                                    </ul>
                                </div> ad-meta 									
                            </div> ad-info 
                            <div class="button">
                                <a href="#" class="btn btn-primary">Apply Now</a>
                            </div>
                        </div> item-info 
                    </div> ad-item 						

                    <div class="job-ad-item">
                        <div class="item-info">
                            <div class="item-image-box">
                                <div class="item-image">
                                    <a href="job-details.html"><img src="{{ asset('public/template') }}/images/job/3.png" alt="Image" class="img-responsive"></a>
                                </div> item-image 
                            </div>

                            <div class="ad-info">
                                <span><a href="job-details.html" class="title">CTO</a> @ <a href="#">Volja Events & Entertainment</a></span>
                                <div class="ad-meta">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>San Francisco, CA, US </a></li>
                                        <li><a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i>Full Time</a></li>
                                        <li><a href="#"><i class="fa fa-money" aria-hidden="true"></i>$25,000 - $35,000</a></li>
                                        <li><a href="#"><i class="fa fa-tags" aria-hidden="true"></i>HR/Org. Development</a></li>
                                    </ul>
                                </div> ad-meta 									
                            </div> ad-info 
                            <div class="button">
                                <a href="#" class="btn btn-primary">Apply Now</a>
                            </div>
                        </div> item-info 
                    </div> ad-item 	-->
                </div><!-- tab-pane -->

<!--                <div role="tabpanel" class="tab-pane fade in active" id="popular-jobs">
                    <div class="job-ad-item">
                        <div class="item-info">
                            <div class="item-image-box">
                                <div class="item-image">
                                    <a href="job-details.html"><img src="{{ asset('public/template') }}/images/job/1.png" alt="Image" class="img-responsive"></a>
                                </div> item-image 
                            </div>

                            <div class="ad-info">
                                <span><a href="job-details.html" class="title">Project Manager</a> @ <a href="#">Dominos Pizza</a></span>
                                <div class="ad-meta">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>San Francisco, CA, US </a></li>
                                        <li><a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i>Full Time</a></li>
                                        <li><a href="#"><i class="fa fa-money" aria-hidden="true"></i>$25,000 - $35,000</a></li>
                                        <li><a href="#"><i class="fa fa-tags" aria-hidden="true"></i>HR/Org. Development</a></li>
                                    </ul>
                                </div> ad-meta 									
                            </div> ad-info 
                            <div class="button">
                                <a href="#" class="btn btn-primary">Apply Now</a>
                            </div>
                        </div> item-info 
                    </div> ad-item 	

                    <div class="job-ad-item">
                        <div class="item-info">
                            <div class="item-image-box">
                                <div class="item-image">
                                    <a href="job-details.html"><img src="{{ asset('public/template') }}/images/job/2.png" alt="Image" class="img-responsive"></a>
                                </div> item-image 
                            </div>

                            <div class="ad-info">
                                <span><a href="job-details.html" class="title">Graphics Designer</a> @ <a href="#">AOK Security</a></span>
                                <div class="ad-meta">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>San Francisco, CA, US </a></li>
                                        <li><a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i>Full Time</a></li>
                                        <li><a href="#"><i class="fa fa-money" aria-hidden="true"></i>$25,000 - $35,000</a></li>
                                        <li><a href="#"><i class="fa fa-tags" aria-hidden="true"></i>HR/Org. Development</a></li>
                                    </ul>
                                </div> ad-meta 									
                            </div> ad-info 
                            <div class="button">
                                <a href="#" class="btn btn-primary">Apply Now</a>
                            </div>
                        </div> item-info 
                    </div> ad-item 	

                    <div class="job-ad-item">
                        <div class="item-info">
                            <div class="item-image-box">
                                <div class="item-image">
                                    <a href="job-details.html"><img src="{{ asset('public/template') }}/images/job/3.png" alt="Image" class="img-responsive"></a>
                                </div> item-image 
                            </div>

                            <div class="ad-info">
                                <span><a href="job-details.html" class="title">CTO</a> @ <a href="#">Volja Events & Entertainment</a></span>
                                <div class="ad-meta">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>San Francisco, CA, US </a></li>
                                        <li><a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i>Full Time</a></li>
                                        <li><a href="#"><i class="fa fa-money" aria-hidden="true"></i>$25,000 - $35,000</a></li>
                                        <li><a href="#"><i class="fa fa-tags" aria-hidden="true"></i>HR/Org. Development</a></li>
                                    </ul>
                                </div> ad-meta 									
                            </div> ad-info 
                            <div class="button">
                                <a href="#" class="btn btn-primary">Apply Now</a>
                            </div>
                        </div> item-info 
                    </div> ad-item 	

                    <div class="job-ad-item">
                        <div class="item-info">
                            <div class="item-image-box">
                                <div class="item-image">
                                    <a href="job-details.html"><img src="{{ asset('public/template') }}/images/job/4.png" alt="Image" class="img-responsive"></a>
                                </div> item-image 
                            </div>

                            <div class="ad-info">
                                <span><a href="job-details.html" class="title">Human Resource Manager</a> @ <a href="#">Dropbox Inc</a></span>
                                <div class="ad-meta">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>San Francisco, CA, US </a></li>
                                        <li><a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i>Full Time</a></li>
                                        <li><a href="#"><i class="fa fa-money" aria-hidden="true"></i>$25,000 - $35,000</a></li>
                                        <li><a href="#"><i class="fa fa-tags" aria-hidden="true"></i>HR/Org. Development</a></li>
                                    </ul>
                                </div> ad-meta 									
                            </div> ad-info 
                            <div class="button">
                                <a href="#" class="btn btn-primary">Apply Now</a>
                            </div>
                        </div> item-info 
                    </div> ad-item 
                </div> tab-pane -->
            </div><!-- tab-content -->
        </div><!-- trending ads -->		



        <div class="section cta cta-two text-center">
            <div class="row">
                <div class="col-sm-4">
                    <div class="single-cta">
                        <div class="cta-icon icon-jobs">
                            <img src="{{ asset('public/template') }}/images/icon/31.png" alt="Icon" class="img-responsive">
                        </div><!-- cta-icon -->
                        <h3>3,412</h3>
                        <h4>Live Jobs</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                    </div>
                </div><!-- single-cta -->

                <div class="col-sm-4">
                    <div class="single-cta">
                        <!-- cta-icon -->
                        <div class="cta-icon icon-company">
                            <img src="{{ asset('public/template') }}/images/icon/32.png" alt="Icon" class="img-responsive">
                        </div><!-- cta-icon -->
                        <h3>12,043</h3>
                        <h4>Total Company</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                    </div>
                </div><!-- single-cta -->

                <div class="col-sm-4">
                    <div class="single-cta">
                        <div class="cta-icon icon-candidate">
                            <img src="{{ asset('public/template') }}/images/icon/33.png" alt="Icon" class="img-responsive">
                        </div><!-- cta-icon -->
                        <h3>5,798,298</h3>
                        <h4>Total Candidate</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                    </div>
                </div><!-- single-cta -->
            </div><!-- row -->
        </div><!-- cta -->			

    </div><!-- conainer -->
</div><!-- page -->


@endsection