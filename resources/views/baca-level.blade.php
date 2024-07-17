@extends('layouts.admin')

@section('main-content')

<!-- Page Heading -->
<a href="{{ url()->previous() }}"><i class="fa fa-fw fa-arrow-left"></i> Kembali</a>
<h1 class="h3 my-4 text-gray-800">{{ $chapter_name }}</h1>

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
{{ session('user')['first_name'] }}
@endsection

@section('initial')
{{ session('user')['first_name'][0] }}
@endsection


<div class="row">

    <!-- Content Column -->
    <div class="col-lg-12 mb-6">

        <ol class="list-group list-group-numbered">
            @foreach($levels as $level)
            <button type="button" data-url="{{ route('baca-session', [ $level['level_name'], $level['id'] ]) }}"  onclick="window.location.href = this.getAttribute('data-url');" class="list-group-item d-flex justify-content-between align-items-start list-group-item-action">
                <div class="ms-2 me-auto">
                    <div class="font-weight-bold text-primary">{{ $level['level_name'] }}</span></div>
                </div>
            </button>
            @endforeach
        </ol>

    </div>

    
</div>
@endsection