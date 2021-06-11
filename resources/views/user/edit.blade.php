@extends('layouts.dashboard')
@section('content')

    <!-- Start Content-->
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="/">OrRank</a></li>
                            <li class="breadcrumb-item"><a
                                href="/{{ Auth::user()->username }}">~{{ Auth::user()->username }}</a></li>
                            <li class="breadcrumb-item active">Update Profile</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Update Profile</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-sm-12">
                <div class="card-box">
                    <h5>Personal Information</h5>
                    <hr>
                    <div class="row">
                        <div class="col-lg-5 col-md-6">
                            <form class="form-horizontal" method="POST" action="/user:profile:detail:update">
                                @csrf
                                <div class="form-group">
                                    <label class="control-label">First Name</label>
                                    <input type="text" placeholder="First Name" value="{{ Auth::user()->firstname }}"
                                        name="firstname" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Last Name</label>
                                    <input type="text" placeholder="Last Name" value="{{ Auth::user()->lastname }}"
                                        name="lastname" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Bio</label>
                                    <textarea name="bio" class="form-control"
                                        placeholder="Bio">{{ Auth::user()->bio }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Company</label>
                                    <input type="text" placeholder="Company" value="{{ Auth::user()->company }}"
                                        name="company" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Location</label>
                                    <input type="text" placeholder="Location" value="{{ Auth::user()->location }}"
                                        name="location" class="form-control">
                                </div>

                                <button type="submit" class="btn btn-dark btn-block">Update Profile</button>
                            </form>
                        </div>
                        <div class="col-lg-2"></div>
                        <div class="col-lg-4 col-md-6">
                            <h6>Profile picture 
                                <i class="mdi mdi-help-circle-outline" data-placement="right" data-toggle="tooltip" class="tooltips"
                                data-original-title="We've create your avatar using first letter from your first name and last name"></i></h6>
                            <center>
                                @if (Auth::user()->profile_image)
                                    <img class="rounded-circle" width="200"
                                        src="{{ asset('uploads/images/users/' . Auth::user()->profile_image) }}"
                                        alt="{{ Auth::user()->username }}">
                                @else
                                    <img width="200" class="rounded-circle"
                                        src="https://avatar.tobi.sh/tobiaslins.svg?size=180&text={{ substr(Auth::user()->firstname, 0, 1) }}{{ substr(Auth::user()->lastname, 0, 1) }}"
                                        alt="{{ Auth::user()->username }}">
                                @endif
                                <div class="btn-group show" style="margin-left: -25px;">
                                    <button type="button" class="btn btn-secondary dropdown-toggle waves-effect"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> <i
                                            class="mdi mdi-lead-pencil"></i><i class="mdi mdi-chevron-down"></i></button>
                                    <ul class="dropdown-menu">
                                        <li><a href="javascript:void(0)" data-toggle="modal" data-target="#card-image"
                                                class="dropdown-item">Upload a photo </a></li>
                                        <li><a href="/user:image:remove" class="dropdown-item">Remove photo</a></li>
                                    </ul>
                                </div>
                            </center>


                            <div id="card-image" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true"
                                style="display: none;">
                                <div class="modal-dialog">
                                    <div class="modal-content p-0 b-0">
                                        <div class="card mb-0">
                                            <div class="card-header bg-secondary">
                                                <h5 class="modal-title font-18 text-white float-left mt-0">Profile Photo
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="card-body">
                                                <form action="{{ url('/user:profile:image:upload') }}" method="post"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    <center>
                                                        @if (Auth::user()->profile_image)
                                                            <img id="imgTag" height="180" class="rounded-circle"
                                                                src="{{ asset('uploads/images/users/' . Auth::user()->profile_image) }}"
                                                                alt="{{ Auth::user()->username }}">
                                                        @else
                                                            <img id="imgTag" height="180" class="rounded-circle"
                                                                src="https://avatar.tobi.sh/tobiaslins.svg?size=180&text={{ substr(Auth::user()->firstname, 0, 1) }}{{ substr(Auth::user()->lastname, 0, 1) }}"
                                                                alt="{{ Auth::user()->username }}">
                                                        @endif
                                                        <button type="button" id="selectfileTag"
                                                            class="btn btn-warning btn-sm">Select photo from
                                                            computer</button>
                                                        <input type="file" style="display: none" id="inputImg"
                                                            name="profile_image" accept="image/x-png,image/gif,image/jpeg"
                                                            required />
                                                        <input type="hidden" name="userID"
                                                            value="{{ Auth::user()->id }}">
                                                    </center>
                                                    <br><br>
                                                    <button style="submit" class="btn btn-dark btn-block">Set new profile
                                                        picture</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop
