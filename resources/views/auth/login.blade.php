@extends('layouts.auth')

@section('content')
<div class="login-card">
    <div class="login-header">
        <h1 class="login-title">Sistem Peminjaman Alat</h1>
        <p class="login-subtitle">Silakan login menggunakan akun yang diberikan admin</p>
    </div>

    <form class="login-form">
        <div class="form-group">
            <label for="username">Username / Email</label>
            <input type="text" id="username" name="username" placeholder="Masukkan username atau email" required>
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Masukkan password" required>
        </div>

        <div class="form-group form-checkbox">
            <input type="checkbox" id="remember" name="remember">
            <label for="remember">Ingat saya</label>
        </div>

        <button type="submit" class="btn-login">Login</button>
    </form>

    <div class="login-footer">
        <p>&copy; 2026 Sistem Peminjaman Alat</p>
    </div>
</div>
@endsection