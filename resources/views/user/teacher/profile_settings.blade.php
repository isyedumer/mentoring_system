@extends('user.teacher.layout')

@section('title', $user->name . "'s profile")

@section('breadcrumbs')

    <div class="breadcrumb-bar">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-12 col-12">
                    <nav aria-label="breadcrumb" class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Profile Settings</li>
                        </ol>
                    </nav>
                    <h2 class="breadcrumb-title">Profile Settings</h2>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">

                <!-- Profile Sidebar -->
                <div class="col-md-5 col-lg-4 col-xl-3 theiaStickySidebar">

                    <!-- Sidebar -->
                    @include('user.teacher.sidebar')
                    <!-- /Sidebar -->

                </div>
                <!-- /Profile Sidebar -->

                <div class="col-md-7 col-lg-8 col-xl-9">
                    <div class="card">
                        <div class="card-body">

                            <!-- Profile Settings Form -->
                            <form method="POST" action="{{ route('teacher.profile.update', $user->id) }}" enctype="multipart/form-data">
                                @csrf
                                <div class="row form-row">
                                    <div class="col-12 col-md-12">
                                        <div class="form-group">
                                            <div class="change-avatar">
                                                <div class="profile-img">
                                                    <img src="{{ $user?->additional?->profile_image ? $user?->additional?->profile_image : 'https://upload.wikimedia.org/wikipedia/commons/8/89/Portrait_Placeholder.png' }}" width="100" height="100" />
                                                </div>
                                                <div class="upload-img">
                                                    <div class="change-photo-btn">
                                                        <span><i class="fa fa-upload"></i> Upload Photo</span>
                                                        <input type="file" name="image" class="upload"
                                                            accept="image/png, image/gif, image/jpeg">
                                                    </div>
                                                    <small class="form-text text-muted">Allowed JPG, GIF or PNG. Max size of
                                                        2MB</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label>First Name</label>
                                            <input type="text" class="form-control" name="first_name"
                                                value="{{ explode(' ', $user->name)[0] ?? '' }}">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label>Last Name</label>
                                            <input type="text" class="form-control" name="last_name"
                                                value="{{ explode(' ', $user->name)[1] ?? '' }}">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label>Date of Birth</label>
                                            <div class="cal-icon">
                                                <input type="text" class="form-control datetimepicker"
                                                    name="date_of_birth"
                                                    value="{{ $user?->additional?->date_of_birth ? \Carbon\Carbon::createFromFormat('Y-m-d', $user?->additional?->date_of_birth)->format('d/m/Y') : '' }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label>Blood Group</label>
                                            <select class="form-select" name="blood_group">
                                                <option value="A"
                                                    {{ $user?->additional?->blood_group == 'A-' ? 'selected' : '' }}>A-
                                                </option>
                                                <option value="A+"
                                                    {{ $user?->additional?->blood_group == 'A+' ? 'selected' : '' }}>A+
                                                </option>
                                                <option value="B-"
                                                    {{ $user?->additional?->blood_group == 'B-' ? 'selected' : '' }}>B-
                                                </option>
                                                <option value="B+"
                                                    {{ $user?->additional?->blood_group == 'B+' ? 'selected' : '' }}>B+
                                                </option>
                                                <option value="AB-"
                                                    {{ $user?->additional?->blood_group == 'AB-' ? 'selected' : '' }}>AB-
                                                </option>
                                                <option value="AB+"
                                                    {{ $user?->additional?->blood_group == 'AB+' ? 'selected' : '' }}>AB+
                                                </option>
                                                <option value="O-"
                                                    {{ $user?->additional?->blood_group == 'O-' ? 'selected' : '' }}>O-
                                                </option>
                                                <option value="O+"
                                                    {{ $user?->additional?->blood_group == 'O+' ? 'selected' : '' }}>O+
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label>Headline</label>
                                            <input type="text" class="form-control" name="headline"
                                                value="{{ $user?->additional?->headline }}">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label>Mobile</label>
                                            <input type="text" name="mobile" value="{{ $user?->additional?->mobile }}"
                                                class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label>Address</label>
                                            <input type="text" name="address" class="form-control"
                                                value="{{ $user?->additional?->address }}">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label>City</label>
                                            <input type="text" name="city" class="form-control"
                                                value="{{ $user?->additional?->city }}">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label>State</label>
                                            <input type="text" name="state" class="form-control"
                                                value="{{ $user?->additional?->state }}">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label>Zip Code</label>
                                            <input type="text" name="postal_code" class="form-control"
                                                value="{{ $user?->additional?->postal_code }}">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label>Country</label>
                                            <select class="form-select" name="country">
                                                <option value="USA" {{ $user?->additional?->country == 'USA' ? 'selected' :  ''}}>USA
                                                </option>
                                                <option value="UK" {{ $user?->additional?->country == 'UK' ? 'selected' :  '' }}>UK
                                                </option>
                                                <option value="India" {{ $user?->additional?->country == 'India' ? 'selected' :  '' }}>India
                                                </option>
                                                <option value="Pakistan" {{ $user?->additional?->country == 'Pakistan' ? 'selected' :  '' }}>
                                                    Pakistan</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label>Rate per hour</label>
                                            <input type="text" name="teacher_per_hour" class="form-control"
                                                value="{{ $user?->additional?->teacher_per_hour }}">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-12">
                                        <div class="form-group">
                                            <label>About me</label>
                                            <textarea class="form-control" cols="6" rows="4" name="about_me">{{ $user?->additional?->about_me }}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="submit-section">
                                    <button type="submit" class="btn btn-primary submit-btn">Save Changes</button>
                                </div>
                            </form>
                            <!-- /Profile Settings Form -->

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
