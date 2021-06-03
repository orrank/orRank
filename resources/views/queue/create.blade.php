@extends('layouts.dashboard')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="/">RatinQ</a></li>
                        <li class="breadcrumb-item"><a
                                href="/{{ Auth::user()->username }}">~{{ Auth::user()->username }}</a></li>
                        <li class="breadcrumb-item active">New Rating Queue</li>
                    </ol>
                </div>
                <h4 class="page-title">Create Rating Queue</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="card-box">
                <div class="row">
                    <div class="col-lg-6 mt-4">
                        <h4 class="header-title">Set up your Rating Queue</h4>
                        <form action="/queue/create" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="Organization"><i class=" mdi mdi-tag-multiple"></i> Rating Queue Name</label>
                                <input type="text" class="form-control" name="qname" id="Organization">
                                <span class="sub-header"></span>
                            </div>
                            <div class="form-group">
                                <label for="description"><i class="mdi mdi-white-balance-incandescent"></i>
                                    Description</label>
                                <textarea class="form-control" name="qdescription" id="description"></textarea>
                                <span class="sub-header">Describe something about your organization</span>
                            </div>
                            <div class="form-group">
                                <label>Rating Queue Type
                                    <a target="_blank" data-placement="right" data-toggle="tooltip" class="tooltips"
                                        data-original-title="Learn more about rating queue types" href="/docs/rating-types">
                                        <i class="mdi mdi-help-circle-outline mdi-24px"></i>
                                    </a>
                                </label>
                                <br>
                                <div class="form-check  form-check-inline">
                                    <input class="form-check-input" type="radio" name="Radios" id="Radios1" value="start"
                                        checked>
                                    <label class="form-check-label" for="Radios1">
                                        Star Rating
                                    </label>
                                </div>
                                <div class="form-check  form-check-inline">
                                    <input class="form-check-input" type="radio" name="Radios" id="Radios2" value="emoji">
                                    <label class="form-check-label" for="Radios2">
                                        Emoji Rating
                                    </label>
                                </div>
                                <div class="form-check  form-check-inline">
                                    <input class="form-check-input" type="radio" name="Radios" id="Radios3" value="ranger">
                                    <label class="form-check-label" for="Radios3">
                                        Range Rating
                                    </label>
                                </div>
                            </div>
                            <p class="sub-header">
                                By creating an <strong>Queue</strong>, you agree to the Terms of Service. For more
                                information
                                about RatingLand privacy practices, see the RatingLand Privacy Statement.
                            </p>

                            <button type="submit" class="btn btn-dark waves-effect waves-light">Submit</button>
                        </form>
                    </div>

                    <div class="col-lg-6 mt-4">
                        <center>
                            <img width="200" class="rounded-circle"
                                src="https://avatar.tobi.sh/tobiaslins.svg?size=180&text=Que">
                            <div class="btn-group show" style="margin-left: -25px;">
                                <button type="button" class="btn btn-secondary dropdown-toggle waves-effect"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> <i
                                        class="mdi mdi-lead-pencil"></i><i class="mdi mdi-chevron-down"></i></button>
                                <ul class="dropdown-menu">
                                    <li><a href="javascript:void(0)" data-toggle="modal" data-target="#card-image"
                                            class="dropdown-item">Upload a photo </a></li>
                                </ul>
                            </div>
                        </center>
                    </div>
                </div>


            </div>
        </div>
    </div>
@stop
