@extends('master')
@section('content')
<h2>Edit User</h2>
<form action="{{ route('admin.users.update', $user->id) }}" method="POST">
    @csrf @method('PUT')
    <label>Nama:</label><br>
    <input type="text" name="name" value="{{ old('name',$user->name) }}" required><br>
    <label>Email:</label><br>
    <input type="email" name="email" value="{{ old('email',$user->email) }}" required><br>
    <label>Password (kosongkan jika tidak diubah):</label><br>
    <input type="password" name="password"><br>
    <label>Konfirmasi Password:</label><br>
    <input type="password" name="password_confirmation"><br>
    <label>Role:</label><br>
    <select name="role" required>
        <option value="admin" {{ $user->role=='admin' ? 'selected':'' }}>Admin</option>
        <option value="teknisi" {{ $user->role=='teknisi'? 'selected':'' }}>Teknisi</option>
        <option value="customer" {{ $user->role=='customer'? 'selected':'' }}>Customer</option>
    </select><br><br>
    <button type="submit">Update</button>
</form>

@endsection