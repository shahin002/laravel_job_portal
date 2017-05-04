<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $fillable = ['seller_id', 'job_category_id', 'job_post', 'job_type', 'job_title', 'job_description', 'job_location', 'salary_range_min', 'salary_range_max', 'salary_type', 'job_experience', 'job_function'];
}
