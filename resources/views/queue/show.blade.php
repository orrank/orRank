@extends('layouts.dashboard')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="/">OrRank</a></li>
                        <li class="breadcrumb-item"><a href="/{{ $user->username }}">~{{ $user->username }}</a></li>
                        <li class="breadcrumb-item"><a href="/{{ $user->username }}/queues">Queues</a></li>
                        <li class="breadcrumb-item active">{{ $queue->identifier }}</li>
                    </ol>
                </div>
                <h4 class="page-title">Rating Queue</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card-box">
                <h3>{{ $queue->name }}</h3>
                <hr>
                <ul class="nav nav-tabs tabs-bordered" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-b1-tab" data-toggle="tab" href="#home-b1" role="tab"
                            aria-controls="home-b1" aria-selected="false">
                            <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                            <span class="d-none d-sm-block">Summary</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-b1-tab" data-toggle="tab" href="#profile-b1" role="tab"
                            aria-controls="profile-b1" aria-selected="true">
                            <span class="d-block d-sm-none"><i id="tooltip-html" class="mdi mdi-qrcode-scan"></i></span>
                            <span class="d-none d-sm-block">Link Device</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="setting-b1-tab" data-toggle="tab" href="#setting-b1" role="tab"
                            aria-controls="setting-b1" aria-selected="false">
                            <span class="d-block d-sm-none"><i class="fas fa-cog"></i></span>
                            <span class="d-none d-sm-block">Settings</span>
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane  show active" id="home-b1" role="tabpanel" aria-labelledby="home-b1-tab">
                        <span class="sub-title text-muted">{{ $queue->description }}</span>


                    </div>
                    <div class="tab-pane" id="profile-b1" role="tabpanel" aria-labelledby="profile-b1-tab">
                        <div class="row">
                            <div class="col-xl-8 col-md-6">
                                <div class="input-group mt-3">
                                    <span class="input-group-prepend">
                                        <button type="button" class="btn waves-effect waves-light btn-primary"
                                            onclick="window.open('{{ url('/~/' . $queue->identifier) }}', '_blank', 'location=yes,height=770,width=1320,scrollbars=yes,status=yes');">Open
                                            Window</button>
                                    </span>
                                    <input type="text" disabled class="form-control"
                                        value="{{ url('/~/' . $queue->identifier) }}">
                                    <span class="input-group-append">
                                        <button onclick="copyToClipboard('{{ url('/~/' . $queue->identifier) }}')"
                                            type="button" class="btn waves-effect waves-light btn-primary"
                                            data-placement="bottom" data-toggle="tooltip" class="tooltips"
                                            data-original-title="Copy URL"><i class="fas fa-clipboard"></i></button>
                                    </span>
                                </div>

                            </div>
                            <div class="col-xl-4 col-md-6">
                                @livewire('components.qr-code', ['uniqueid' => $queue->identifier])
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="setting-b1" role="tabpanel" aria-labelledby="setting-b1-tab">
                        <h5>General Info</h5>
                        <hr>
                        <div class="row">
                            <div class="col-6">
                                <form action="">
                                    <div class="input-group mt-3">
                                        <input type="text" id="qname" name="qname" class="form-control"
                                            value="{{ $queue->name }}" placeholder="Queue Name" required>
                                        <span class="input-group-append">
                                            <button type="submit"
                                                class="btn waves-effect waves-light btn-dark">Rename</button>
                                        </span>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <h5>Danger Zone</h5>
                        <hr>
                        <div class="card widget-box-one border border-danger bg-soft-danger">
                            <div class="card-body">
                                <strong>Transfer ownership</strong>
                                <p>Transfer this queue to another user or to an organization where you have the ability to
                                    create repositories.</p>
                                <button class="btn btn-danger">Transfer</button>

                                <hr>
                                <strong>Delete this Queue</strong>
                                <p>Once you delete a queue, there is no going back. Please be certain.</p>
                                <button class="btn btn-danger">Delete this queue</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
