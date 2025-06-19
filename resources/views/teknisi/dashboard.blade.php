@extends('master1')
@section('content')
<div class="container py-5">
    <h2 class="mb-4">Dashboard Teknisi</h2>
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <div class="card-header">
                    <h5>Data Booking</h5>
                </div>
                <div class="card-body">
                    @include('teknisi.booking', ['riwayatBooking' => $riwayatBooking])

                </div>
            </div>
        </div>
    </div>

    @endsection