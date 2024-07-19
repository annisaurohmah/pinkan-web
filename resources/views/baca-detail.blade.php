@extends('layouts.admin')

@section('main-content')

<?php
    use Carbon\Carbon;
    $start = Carbon::parse($start)->format('d-m-Y H:i:s');
    $end = Carbon::parse($end)->format('d-m-Y H:i:s');
?>


<!-- Page Heading -->
<a href="{{ url()->previous() }}"><i class="fa fa-fw fa-arrow-left"></i> Kembali</a>
<h1 class="h3 mt-4 text-gray-800">Permainan {{ $count }}</h1>
<p class="mb-0">Waktu Mulai : {{ $start }}</p>
<p>Waktu Selesai : {{ $end }}</p>

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

            @foreach($session as $summary)
            <button type="button" class="list-group-item d-flex justify-content-between align-items-start list-group-item-action">
                <div class="ms-2 me-auto">
                    <div class="font-weight-bold text-primary"> <span class="text-gray-800">Bentuk permainan:</span> {{ $summary['question'] }} </div>
                    <?php
                        $time = Carbon::parse($summary['created_at'])->format('d-m-Y H:i:s');
                    ?>
                    
                    <p>Dikerjakan pada : {{ $time }}</p>
                </div>
                <div class="badge text-bg-primary rounded-pill">

                    @if($summary['user_answer'] == 1)
                    <h6 class="text-success">Benar</h6>
                    @else
                    <h6 class="text-danger">Salah</h6>
                    @endif
                </div>
            </button>
            @endforeach
        </ol>

    </div>


</div>
@endsection