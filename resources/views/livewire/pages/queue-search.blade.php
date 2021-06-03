<div class="row">
    <div class="col-xl-12">
        <div class="input-group">
            <span class="input-group-prepend">
                <button type="button" class="btn waves-effect waves-light btn-dark"><i
                        class="fas fa-search"></i></button>
            </span>
            <input type="text" wire:model="search" class="form-control" placeholder="Search">
            <span class="input-group-append">
                <a href="/queue/new" class="btn waves-effect waves-light btn-dark"><i
                        class="mdi mdi-shield-star-outline"></i> New Queue</a>
            </span>
        </div>
    </div><br><br><br>
    @forelse ($queues as $queue)
        <div class="col-xl-4 col-md-6">
            <div class="card widget-box-three">
                <div class="card-body">
                    <div class="bg-icon float-left avatar-lg text-center bg-light rounded-circle">
                        <i class="ti-star h2 text-muted m-0 avatar-title"></i>
                    </div>
                    <div class="text-right">
                        <p class="font-weight-medium text-truncate">{{ $queue->name }}</p>
                        <span class="sub-title">{{ $queue->description }}</span>
                    </div>
                </div>
            </div>
        </div>
    @empty
        <div class="col-xl-12 col-md-12">
            <div class="card widget-box-three">
                <div class="card-body">
                    <center>
                        <h6>~{{ Auth::user()->username }} doesn’t have any Queues that match. </h6>
                    </center>
                </div>
            </div>
        </div>
    @endforelse
</div>
