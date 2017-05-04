@extends('seller.layouts')

@section('content')
<section class=" job-bg ad-details-page">
    <div class="container">
        <div class="breadcrumb-section">
            <!-- breadcrumb -->
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li>Job Post </li>
            </ol><!-- breadcrumb -->						
            <h2 class="title">Post Your Job</h2>
        </div><!-- banner -->

        <div class="job-postdetails">
            <div class="row">	
                <div class="col-md-8">
                    <form action="{{ url('/job_post') }}" method="POST">
                        {{ csrf_field() }}
                        <input type="hidden" name="seller_id" value="{{ Auth::guard('web_seller')->user()->id }}" >
                        <fieldset>
                            <div class="section postdetails">
                                <h5 class="text-center text-success">{{ Session::get('message') }}</h5>
                                <hr/>
                                <h4>Post Your Job<span class="pull-right">* Mandatory Fields</span></h4>
                                <div class="row form-group add-title">
                                    <label class="col-sm-3 label-title">Job Category<span class="required">*</span></label>
                                    <div class="col-sm-9">
                                        <div class="dropdown category-dropdown">
                                            <select required="" name="job_category_id">
                                                <option value="">Select a category</option>
                                                @foreach($job_categories as $job_category)
                                                <option value="{{$job_category->id}}">{{$job_category->category_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>			
                                <div class="row form-group">
                                    <label class="col-sm-3">Job Type<span class="required">*</span></label>
                                    <div class="col-sm-9 user-type">
                                        <input type="radio" name="job_type" value="full-time" id="full-time" required=""> <label for="full-time">Full Time</label>
                                        <input type="radio" name="job_type" value="part-time" id="part-time"> <label for="part-time">Part Time</label>
                                        <input type="radio" name="job_type" value="freelance" id="freelance"> <label for="freelance">Freelance</label>	
                                        <input type="radio" name="job_type" value="contract" id="contract"> <label for="contract">Contract</label>	
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <label class="col-sm-3 label-title">Job Post<span class="required">*</span></label>
                                    <div class="col-sm-9">
                                        <input type="text" name="job_post" class="form-control" placeholder="ex, Junior Programmer">
                                    </div>
                                </div>					
                                <div class="row form-group">
                                    <label class="col-sm-3 label-title">Title for your job<span class="required">*</span></label>
                                    <div class="col-sm-9">
                                        <input type="text" name="job_title" class="form-control" placeholder="ex, Human Resource Manager">
                                    </div>
                                </div>					
                                <div class="row form-group item-description">
                                    <label class="col-sm-3 label-title">Description<span class="required">*</span></label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" name="job_description" id="textarea" placeholder="Write few lines about your jobs" rows="8"></textarea>		
                                    </div>
                                </div>
                                <div class="row characters">
                                    <div class="col-sm-9 col-sm-offset-3">
                                        <p>5000 characters left</p>
                                    </div>
                                </div>	
                                <div class="row form-group add-title location">
                                    <label class="col-sm-3 label-title">Location<span class="required">*</span></label>
                                    <div class="col-sm-9">
                                        <div class="dropdown category-dropdown pull-left">
                                            <select required="" name="job_location">
                                                <option value="">Select a Location</option>
                                                <option value="Dhaka">Dhaka</option>
                                                <option value="Barisal">Barisal</option>
                                                <option value="Khulna">Khulna</option>
                                                <option value="Chittagong">Chittagong</option>
                                                <option value="Sylhet">Sylhet</option>
                                                <option value="Comilla">Rajshahi</option>
                                                <option value="Rajshahi">Rajshahi</option>
                                            </select>		
                                        </div>
                                    </div>
                                </div>
                                <div class="row form-group select-price">
                                    <label class="col-sm-3 label-title">Salary<span class="required">*</span></label>
                                    <div class="col-sm-9">
                                        <label>BDT</label>
                                        <input type="text" class="form-control" name="salary_range_min" placeholder="Min">
                                        <span>-</span>
                                        <input type="text" class="form-control" name="salary_range_max" placeholder="Max">
                                    </div>
                                </div>	
                                <div class="row form-group add-title">
                                    <label class="col-sm-3 label-title">Salary Type<span class="required">*</span></label>
                                    <div class="col-sm-9">
                                        <div class="dropdown category-dropdown">
                                            <select required="" name="salary_type">
                                                <option value="">Select a Option</option>
                                                <option value="Per Hour">Per Hour</option>
                                                <option value="Daily">Daily</option>
                                                <option value="Monthly">Monthly</option>
                                                <option value="Yearly">Yearly</option>
                                            </select>	
                                        </div>
                                    </div>
                                </div>	
                                <div class="row form-group add-title">
                                    <label class="col-sm-3 label-title">Exprience<span class="required">*</span></label>
                                    <div class="col-sm-9">
                                        <div class="dropdown category-dropdown">
                                            <select required="" name="job_experience">
                                                <option value="">Select a Option</option>
                                                <option value="Entry Level">Entry Level</option>
                                                <option value="Mid Level">Mid Level</option>
                                                <option value="Mid-Senior Level">Mid-Senior Level</option>
                                                <option value="Top Level">Top Level</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>	
                                <div class="row form-group brand-name">
                                    <label class="col-sm-3 label-title">Job Function<span class="required">*</span></label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="job_function" placeholder="human, reosurce, job, hrm">

                                    </div>
                                </div>											
                            </div><!-- postdetails -->
                            <div class="checkbox section agreement">
                                <button type="submit" class="btn btn-primary">Post Your Job</button>
                            </div> 
                        </fieldset>
                    </form><!-- form -->	
                </div>


                <!-- quick-rules -->	
                <div class="col-md-4">
                    <div class="section quick-rules">
                        <h4>Quick rules</h4>
                        <p class="lead">Posting an ad on <a href="#">jobs.com</a> is free! However, all ads must follow our rules:</p>

                        <ul>
                            <li>Make sure you post in the correct category.</li>
                            <li>Do not post the same ad more than once or repost an ad within 48 hours.</li>
                            <li>Do not upload pictures with watermarks.</li>
                            <li>Do not post ads containing multiple items unless it's a package deal.</li>
                            <li>Do not put your email or phone numbers in the title or description.</li>
                            <li>Make sure you post in the correct category.</li>
                            <li>Do not post the same ad more than once or repost an ad within 48 hours.</li>
                            <li>Do not upload pictures with watermarks.</li>
                            <li>Do not post ads containing multiple items unless it's a package deal.</li>
                        </ul>
                    </div>
                </div><!-- quick-rules -->	
            </div><!-- photos-ad -->				
        </div>	
    </div><!-- container -->
</section><!-- main -->
@endsection