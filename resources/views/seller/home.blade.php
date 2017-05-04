@extends('seller.layouts')

@section('content')
<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th>Applicant Name</th>
                <th>Job Post</th>
                <th>Job Title</th>
                <th>Mobile No</th>

            </tr>
        </thead>
        @foreach($job_applications as $job_application)
        <tr>
            <td>{{$job_application->name}}</td>
            <td>{{$job_application->job_post}}</td>
            <td>{{$job_application->job_title}}</td>
            <td>{{$job_application->mobile}}</td>
            
        </tr>
        @endforeach
    </table>
</div>
@endsection