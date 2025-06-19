@extends('master')
@section('content')
<h2>Tambah User</h2>
<form action="{{ route('admin.users.store') }}" method="POST">
    @csrf
    <label>Nama:</label><br>
    <input type="text" name="name" value="{{ old('name') }}" required><br>
    <label>Email:</label><br>
    <input type="email" name="email" value="{{ old('email') }}" required><br>
    <label>Password:</label><br>
    <input type="password" name="password" required><br>
    <label>Konfirmasi Password:</label><br>
    <input type="password" name="password_confirmation" required><br>
    <label>Role:</label><br>
    <select name="role" required>
        <option value="">--Pilih--</option>
        <option value="admin">Admin</option>
        <option value="teknisi">Teknisi</option>
        <option value="customer">Customer</option>
    </select><br><br>
    <button type="submit">Simpan</button>
</form>
@endsection