@extends('master')

@section('content')
<div class="container py-5">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Detail User</h4>
        </div>
        <div class="card-body">
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><strong>Nama:</strong> {{ $user->name }}</li>
                <li class="list-group-item"><strong>Email:</strong> {{ $user->email }}</li>
                <li class="list-group-item">
                    <strong>Role:</strong>
                    <span class="badge bg-info text-dark">{{ ucfirst($user->role) }}</span>
                </li>
            </ul>
        </div>
        <div class="card-footer text-end">
            <a href="{{ route('admin.dashboard') }}" class="btn btn-secondary">
                ← Kembali
            </a>
        </div>
    </div>
</div>
@endsection