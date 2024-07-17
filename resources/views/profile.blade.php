@extends('layouts.admin')

@section('main-content')
<?php
use Carbon\Carbon;

$date_of_birth = $user['date_of_birth'] ?? null;
    if ($date_of_birth) {
        try {
            // Konversi dari format MM/DD/YYYY ke format YYYY-MM-DD untuk input date
            $date_of_birth = Carbon::parse($user['date_of_birth'])->format('d-m-Y');
        } catch (\Exception $e) {
            // Tangani kesalahan jika format tanggal tidak sesuai
            $date_of_birth = null;
        }
    }
?>
<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">{{ __('Profile') }}</h1>

@if (session('success'))
<div class="alert alert-success border-left-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif



@section('first_name')
{{ session('user')['first_name'] }}
@endsection

@section('initial')
{{ session('user')['first_name'][0] }}
@endsection

@if ($errors->any())
<div class="alert alert-danger border-left-danger" role="alert">
    <ul class="pl-4 my-2">
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<div class="row">

    <div class="col-lg-4 order-lg-2">

        <div class="card shadow mb-4">
            <div class="card-profile-image mt-4">
                <figure class="rounded-circle avatar avatar font-weight-bold" style="font-size: 60px; height: 180px; width: 180px;" data-initial="{{ $user['first_name'][0] }} "></figure>
            </div>
            <div class="card-body">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <h5 class="font-weight-bold">{{ $user['first_name'] . ' ' .  $user['last_name']  }}</h5>
                            <p>{{ $user['email'] }}</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>

    <div class="col-lg-8 order-lg-1">

        <div class="card shadow mb-4">

            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Informasi Akun</h6>
            </div>

            <div class="card-body">

                <form action="{{ route('profile.update') }}" method="POST" autocomplete="off">
                    @csrf
                <input type="hidden" name="_method" value="PUT">

                    <div class="pl-lg-4">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="name">Nama Depan<span class="small text-danger">*</span></label>
                                    <input type="text" id="first_name" class="form-control" name="name" placeholder="Name" value="{{ $user['first_name'] }}">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="last_name">Nama Belakang</label>
                                    <input type="text" id="last_name" class="form-control" name="last_name" placeholder="Last name" value="{{ $user['last_name'] }}">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="email">Email<span class="small text-danger">*</span></label>
                                    <input type="email" id="email" class="form-control" name="email" placeholder="example@example.com" value="{{ $user['email'] }}">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">

                                    <label class="form-control-label" for="date">Tanggal Lahir<span class="small text-danger">*</span></label>
                                    <input type="text" id="date" class="form-control" placeholder="dd/mm/yyyy" name="date_of_birth" value="{{ $date_of_birth }}">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="current_password">Current password</label>
                                    <input type="password" id="current_password" class="form-control" name="current_password" placeholder="Current password">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="new_password">New password</label>
                                    <input type="password" id="new_password" class="form-control" name="new_password" placeholder="New password">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="confirm_password">Confirm password</label>
                                    <input type="password" id="confirm_password" class="form-control" name="password_confirmation" placeholder="Confirm password">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Button -->
                    <div class="pl-lg-4">
                        <div class="row">
                            <div class="col text-center">
                                <button type="submit" class="btn btn-primary">Save Changes</button>
                            </div>
                        </div>
                    </div>
                </form>

            </div>

        </div>

    </div>

</div>

@endsection