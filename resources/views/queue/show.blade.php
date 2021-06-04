@extends('layouts.dashboard')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="/">RatinQ</a></li>
                        <li class="breadcrumb-item"><a href="/{{ $user->username }}">~{{ $user->username }}</a></li>
                        <li class="breadcrumb-item active">Queue</li>
                    </ol>
                </div>
                <h4 class="page-title">Rating Queue</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card-box">
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
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                            Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus
                            mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa
                            quis enim.</p>
                        <p class="mb-0">Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo,
                            rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.
                            Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus.
                            Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
                    </div>
                    <div class="tab-pane" id="profile-b1" role="tabpanel" aria-labelledby="profile-b1-tab">
                        @livewire('components.qr-code', ['uniqueid' => $queue->identifier])
                    </div>
                    <div class="tab-pane" id="setting-b1" role="tabpanel" aria-labelledby="setting-b1-tab">
                        <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut,
                            imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer
                            tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean
                            leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget
                            dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur
                            ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla
                            consequat massa quis enim.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
