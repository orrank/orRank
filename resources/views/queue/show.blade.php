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
                        <li class="breadcrumb-item active">Rating Queue</li>
                    </ol>
                </div>
                <h4 class="page-title">Rating Queue</h4>
            </div>
        </div>
    </div>

@stop
