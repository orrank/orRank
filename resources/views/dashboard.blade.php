@extends('layouts.dashboard')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="/">OrRank</a></li>
                        <li class="breadcrumb-item"><a
                                href="/{{ Auth::user()->username }}">~{{ Auth::user()->username }}</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
                <h4 class="page-title">Dashboard</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-3 col-md-6">
            <div class="card widget-box-one border border-primary bg-soft-primary">
                <div class="card-body">
                    <div class="float-right avatar-lg rounded-circle mt-3">
                        <i
                            class="mdi mdi-chart-areaspline font-30 widget-icon rounded-circle avatar-title text-primary"></i>
                    </div>
                    <div class="wigdet-one-content">
                        <p class="m-0 text-uppercase font-weight-bold text-muted" title="Statistics">Queues</p>
                        <h2><span data-plugin="counterup">03</span> <i class="mdi mdi-arrow-up text-success font-24"></i>
                        </h2>
                        <p class="text-muted m-0"><span class="font-weight-medium">Last:</span> 30.4k</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- end col -->

        <div class="col-xl-3 col-md-6">
            <div class="card widget-box-one border border-warning bg-soft-warning">
                <div class="card-body">
                    <div class="float-right avatar-lg rounded-circle mt-3">
                        <i class="mdi mdi-layers font-30 widget-icon rounded-circle avatar-title text-warning"></i>
                    </div>
                    <div class="wigdet-one-content">
                        <p class="m-0 text-uppercase font-weight-bold text-muted" title="User This Month">Ratings
                        </p>
                        <h2><span data-plugin="counterup">2410</span> <i class="mdi mdi-arrow-up text-success font-24"></i>
                        </h2>
                        <p class="text-muted m-0"><span class="font-weight-medium">Last:</span> 10.33k</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- end col -->

        <div class="col-xl-3 col-md-6">
            <div class="card widget-box-one border border-danger bg-soft-danger">
                <div class="card-body">
                    <div class="float-right avatar-lg rounded-circle mt-3">
                        <i class="mdi mdi-av-timer font-30 widget-icon rounded-circle avatar-title text-danger"></i>
                    </div>
                    <div class="wigdet-one-content">
                        <p class="m-0 text-uppercase font-weight-bold text-muted" title="Statistics">To do</p>
                        <h2><span data-plugin="counterup">352</span> <i class="mdi mdi-arrow-up text-success font-24"></i>
                        </h2>
                        <p class="text-muted m-0"><span class="font-weight-medium">Last:</span> 956</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- end col -->

        <div class="col-xl-3 col-md-6">
            <div class="card widget-box-one border border-success bg-soft-success">
                <div class="card-body">
                    <div class="float-right avatar-lg rounded-circle mt-3">
                        <i class="mdi mdi-post-outline font-30 widget-icon rounded-circle avatar-title text-success"></i>
                    </div>
                    <div class="wigdet-one-content">
                        <p class="m-0 text-uppercase font-weight-bold text-muted" title="User Today">Posts</p>
                        <h2><span data-plugin="counterup">895</span> <i class="mdi mdi-arrow-down text-danger font-24"></i>
                        </h2>
                        <p class="text-muted m-0"><span class="font-weight-medium">Last:</span> 1250</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- end col -->
    </div>
    <div class="row">
        <div class="col-xl-12 col-md-12">
            <div class="card widget-box-one border border-dark">
                <div class="card-body">
                    @livewire('components.contribution-chart')
                </div>
            </div>
        </div>
    </div>
@stop
