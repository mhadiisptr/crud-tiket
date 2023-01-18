    @extends('layouts.app')

    @section('title', 'Dashboard')

    @section('contents')
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                    Nama Pembuat</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">Muhamad Hadi Saputra</div>
                </div>
                <div class="col-auto">
                <i class="fas fa-user fa-2x text-gray-300"></i>
                </div>
            </div>
            </div>
        </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                    Asal Perguruan Tinggi</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">Institut Teknologi dan Bisnis Palcomtech</div>
                </div>
                <div class="col-auto">
                <i class="fas fa-university fa-2x text-gray-300"></i>
                </div>
            </div>
            </div>
        </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                    Github</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">
                <a target="_blank" rel="nofollow" href="https://github.com//mhadiisptr">check out my other projects &rarr;</a>
                </div>
                </div>
                <div class="col-auto">
                <i class="fas fa-link fa-2x text-gray-300"></i>
                </div>
            </div>
            </div>
        </div>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                    Kontak</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">0853-6862-0984</div>
                </div>
                <div class="col-auto">
                <i class="fas fa-phone fa-2x text-gray-300"></i>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>

    <!-- Content Row -->


    <!-- Content Row -->
    <div class="row">

        <!-- Content Column -->
        <div class="col-lg-6 mb-4">

        <!-- Project Card Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Jenis film yang banyak ditonton</h6>
            </div>
            <div class="card-body">
            <h4 class="small font-weight-bold">Action<span class="float-right">80%</span></h4>
            <div class="progress mb-4">
                <div class="progress-bar bg-success" role="progressbar" style="width: 80%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <h4 class="small font-weight-bold">Comedy <span class="float-right">90%</span></h4>
            <div class="progress mb-4">
                <div class="progress-bar bg-success" role="progressbar" style="width: 90%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <h4 class="small font-weight-bold">Drama <span class="float-right">75%</span></h4>
            <div class="progress mb-4">
                <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <h4 class="small font-weight-bold">Horror <span class="float-right">99%</span></h4>
            <div class="progress mb-4">
                <div class="progress-bar bg-success" role="progressbar" style="width: 99%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <h4 class="small font-weight-bold">Romantis <span class="float-right">80%</span></h4>
            <div class="progress">
                <div class="progress-bar bg-info" role="progressbar" style="width: 80%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            </div>
        </div>


        <div class="col-lg-6 mb-4">

        
    </div>
    @endsection
