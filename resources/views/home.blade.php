@extends('layouts.admin')

@section('main-content')

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">{{ __('Dashboard') }}</h1>

@if (session('success'))
<div class="alert alert-success border-left-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif

@if (session('status'))
<div class="alert alert-success border-left-success" role="alert">
    {{ session('status') }}
</div>
@endif

@section('first_name')
{{ $user['first_name'] }}
@endsection

@section('initial')
{{ $user['first_name'][0] }}
@endsection

<div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-12 col-md-12 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary mb-1">Terakhir dimainkan</div>
                        @if($dashboard['last_played'])
                        <div class="h6 mb-1 font-weight-bold text-gray-800">{{ $dashboard['last_played']['level_name'] }}</div>
                        <div class="mb-0 text-gray-800">{{ $dashboard['last_played']['chapter_name'] }}</div>
                        @else
                        <div class="h6 mb-1 font-weight-bold text-gray-800">Belum ada</div>
                        <div class="mb-0 text-gray-800">Anda belum memainkan game apapun</div>
                        @endif
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>

<div class="row">

    <!-- Content Column -->
    <div class="col-lg-12 mb-4">

        <!-- Project Card Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Skor Tertinggi</h6>
            </div>
            <div class="card-body">
                <h4 class="small font-weight-bold">Game Membaca <span class="float-right">{{ $dashboard['high_score_baca'] }}</span></h4>
                <div class="progress mb-4">
                    <div class="progress-bar bg-info" role="progressbar" style="width: {{ $dashboard['high_score_baca'] }}%;" aria-valuenow="{{ $dashboard['high_score_baca'] }}" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <h4 class="small font-weight-bold">Game Berhitung<span class="float-right">{{ $dashboard['high_score_hitung'] }}</span></h4>
                <div class="progress mb-4">
                    <div class="progress-bar bg-info" role="progressbar" style="width: {{ $dashboard['high_score_hitung'] }}%;" aria-valuenow="{{ $dashboard['high_score_hitung'] }}" aria-valuemin="0" aria-valuemax="100"></div>
                </div>

            </div>
        </div>


    </div>

</div>
@endsection