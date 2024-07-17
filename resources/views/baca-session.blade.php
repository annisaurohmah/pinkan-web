@extends('layouts.admin')

@section('main-content')

<!-- Page Heading -->
<a href="{{ url()->previous() }}"><i class="fa fa-fw fa-arrow-left"></i> Kembali</a>
<h1 class="h3 my-4 text-gray-800">{{ $level_name }}</h1>

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

        @if(!empty($sessions))

        <?php $count = 1 ?>

        <ol class="list-group list-group-numbered">
            @foreach($sessions as $s)
            <button type="button" data-url="{{ route('baca-detail', [$count, $s['id'], $level_id]) }}" onclick="window.location.href = this.getAttribute('data-url');" class="list-group-item d-flex justify-content-between align-items-start list-group-item-action">
                <div class="ms-2 me-auto">
                    <div class="font-weight-bold text-primary">Permainan {{ $count }}</div>
                </div>
                <span class="badge text-bg-primary rounded-pill">Skor: {{ $s['score'] }}</span>
            </button>
            <?php $count++ ?>
            @endforeach
        </ol>

        @else
        <div class="alert alert-warning border-left-warning" role="alert">
            Anda belum memainkan permainan apapun di level ini
        </div>
        @endif



    </div>


</div>
@endsection