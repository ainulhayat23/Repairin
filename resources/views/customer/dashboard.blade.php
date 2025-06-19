@extends('master2')
@section('content')
<div id="daftarCabang" class="container py-5">
    @include('customer.show')
</div>
<div id="pemesanan" class="container py-5">
    @include('customer.bookingsaya')
</div>
<div id="riwayat" class="container py-5">
    <h2 class="mb-4">Riwayat Booking</h2>
    @include('customer.riwayatbooking')
</div>
@endsection