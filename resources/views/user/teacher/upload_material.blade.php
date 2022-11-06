@extends('user.teacher.layout')

@section('title', 'Upload Material')
@section('breadcrumbs')
    <div class="breadcrumb-bar">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-12 col-12">
                    <nav aria-label="breadcrumb" class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Courses</li>
                        </ol>
                    </nav>
                    <h2 class="breadcrumb-title">Upload material for {{ $teacherCourse->course->title }}</h2>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">

                    <div class="card">
                        <div class="card-body">
                            <form method="POST" action="{{ route('teacher.course.materials.upload.post', [$teacherCourse->id]) }}"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label>Course</label>
                                            <input class="form-control" value="{{ $teacherCourse->course->title }}" readonly />
                                        </div>
                                        <div class="form-group">
                                            <label>Material Type</label>
                                            <select class="form-control" name="type">
                                                <option value="1">Free</option>
                                                <option value="2">Paid</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Upload Content</label>
                                            <input type="file" class="form-control upload" name="file" />
                                        </div>
                                        <div class="form-group">
                                            <div class="submit-section proceed-btn">
                                                <button type="submit" class="btn btn-primary submit-btn">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
@endsection
