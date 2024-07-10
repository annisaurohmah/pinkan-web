@extends('layouts.admin')

@section('main-content')

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">{{ __('Permainan 1') }}</h1>

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
            <button type="button" class="list-group-item d-flex justify-content-between align-items-start list-group-item-action">
                <div class="ms-2 me-auto">
                    <div class="font-weight-bold text-primary">Bentuk permainan: Menggambar huruf A </div>
                    <div class="badge text-bg-primary rounded-pill">Jawaban pengguna:</div><br>
                    <div class="badge text-bg-primary rounded-pill">Jawaban yang benar:</div>

                </div>
                <div class="badge text-bg-primary rounded-pill">Benar</div>
            </button>
        </ol>

    </div>

    
</div>
@endsection