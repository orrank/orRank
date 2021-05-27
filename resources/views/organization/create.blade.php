@extends('layouts.dashboard')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card-box" style="margin-top: 30px;">
                <div class="row">
                    <div class="col-lg-6 mt-4">
                        <h4 class="header-title">Set up your organization</h4>
                        <p class="sub-header">
                            Tell us about your organization
                        </p>

                        <form>
                            <div class="form-group">
                                <label for="Organization">Organization account name</label>
                                <input type="text" class="form-control" id="Organization">
                                <span class="sub-header">This will be the name of your account on RatingLand</span>
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea class="form-control" id="description"></textarea>
                                <span class="sub-header">Describe something about your organization</span>
                            </div>
                            <div class="form-group">
                                <label for="orgdisplay">Organization display name</label>
                                <input type="text" class="form-control" id="orgdisplay">
                            </div>
                            <p class="sub-header">
                                By creating an <strong>organization</strong>, you agree to the Terms of Service. For more
                                information
                                about RatingLand privacy practices, see the RatingLand Privacy Statement. We'll occasionally
                                send you
                                <strong>account-related emails.</strong>
                            </p>

                            <button type="submit" class="btn btn-dark waves-effect waves-light">Submit</button>
                        </form>
                    </div>

                    <div class="col-lg-6 mt-4">
                        <center>
                            <img width="200" class="rounded-circle"
                                src="https://avatar.tobi.sh/tobiaslins.svg?size=180&text=Org">
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

                <!-- end row -->

                <!-- end row -->

            </div>
        </div>
    </div>
@stop
