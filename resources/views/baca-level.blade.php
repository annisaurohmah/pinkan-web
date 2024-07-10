@extends('layouts.admin')

@section('main-content')

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">{{ __('Merangkai Kata') }}</h1>

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


<div class="row">

    <!-- Content Column -->
    <div class="col-lg-12 mb-6">

        <ol class="list-group list-group-numbered">

            <button type="button" data-url="{{ route('baca-session') }}"  onclick="window.location.href = this.getAttribute('data-url');" class="list-group-item d-flex justify-content-between align-items-start list-group-item-action">
                <div class="ms-2 me-auto">
                    <div class="font-weight-bold text-primary">Huruf A-D</span></div>
                </div>
            </button>
        </ol>

    </div>

    
</div>
@endsection