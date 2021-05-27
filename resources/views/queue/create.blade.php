@extends('layouts.dashboard')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card-box" style="margin-top: 30px;">
                <div class="row">
                    <div class="col-lg-6 mt-4">
                        <h4 class="header-title">Set up your Rating Queue</h4>
                        <form>
                            <div class="form-group">
                                <label for="Organization">Rating Queue</label>
                                <input type="text" class="form-control" id="Organization">
                                <span class="sub-header"></span>
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea class="form-control" id="description"></textarea>
                                <span class="sub-header">Describe something about your organization</span>
                            </div>
                            <div class="form-group">
                                <label>Rating Queue Type</label>
                                <br>
                                <div class="form-check  form-check-inline">
                                    <input class="form-check-input" type="radio" name="Radios" id="Radios1"
                                        value="option1" checked>
                                    <label class="form-check-label" for="Radios1">
                                        Star Rating
                                    </label>
                                </div>
                                <div class="form-check  form-check-inline">
                                    <input class="form-check-input" type="radio" name="Radios" id="Radios2"
                                        value="option2">
                                    <label class="form-check-label" for="Radios2">
                                        Emoji Rating
                                    </label>
                                </div>
                                <div class="form-check  form-check-inline">
                                    <input class="form-check-input" type="radio" name="Radios" id="Radios3"
                                        value="option2">
                                    <label class="form-check-label" for="Radios3">
                                        Slider Rating
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

                    </div>
                </div>


            </div>
        </div>
    </div>
@stop
