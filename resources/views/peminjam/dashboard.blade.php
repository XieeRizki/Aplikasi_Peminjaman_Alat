@extends('layouts.app')

@section('content')
<div class="page-header">
    <div>
        <h2 class="page-title">Riwayat Peminjaman</h2>
        <p class="page-subtitle">Kelola peminjaman alat anda</p>
    </div>
    <div class="header-date">
        <span id="currentDate"></span>
    </div>
</div>

<!-- User Stats -->
<div class="stats-grid">
    <div class="stat-card stat-primary">
        <div class="stat-icon">
            <i class="icon-borrowed"></i>
        </div>
        <div class="stat-content">
            <p class="stat-label">Sedang Dipinjam</p>
            <h3 class="stat-value">2</h3>
            <span class="stat-change">→ Alat aktif</span>
        </div>
    </div>

    <div class="stat-card stat-success">
        <div class="stat-icon">
            <i class="icon-history"></i>
        </div>
        <div class="stat-content">
            <p class="stat-label">Total Peminjaman</p>
            <h3 class="stat-value">15</h3>
            <span class="stat-change">→ Seumur hidup</span>
        </div>
    </div>

    <div class="stat-card stat-warning">
        <div class="stat-icon">
            <i class="icon-deadline"></i>
        </div>
        <div class="stat-content">
            <p class="stat-label">Segera Dikembalikan</p>
            <h3 class="stat-value">1</h3>
            <span class="stat-change">→ Dalam 2 hari</span>
        </div>
    </div>

    <div class="stat-card stat-info">
        <div class="stat-icon">
            <i class="icon-rating"></i>
        </div>
        <div class="stat-content">
            <p class="stat-label">Rating Anda</p>
            <h3 class="stat-value">⭐ 4.8</h3>
            <span class="stat-change">→ Peminjam terpercaya</span>
        </div>
    </div>
</div>

<!-- Action Button -->
<div class="action-bar">
    <button class="btn btn-primary">+ Ajukan Peminjaman Baru</button>
</div>

<!-- Active Borrowings -->
<div class="recent-section">
    <div class="section-header">
        <h3>Alat yang Sedang Dipinjam</h3>
    </div>

    <div class="borrow-cards">
        <div class="borrow-card">
            <div class="card-status status-active">Sedang Dipinjam</div>
            <h4 class="card-title">Laptop Dell XPS 13</h4>
            <div class="card-details">
                <div class="detail-row">
                    <span class="label">Tanggal Pinjam:</span>
                    <span class="value">25-01-2026</span>
                </div>
                <div class="detail-row">
                    <span class="label">Jatuh Tempo:</span>
                    <span class="value">27-01-2026</span>
                </div>
                <div class="detail-row">
                    <span class="label">Sisa Waktu:</span>
                    <span class="value highlight">2 hari</span>
                </div>
            </div>
            <button class="btn btn-small btn-primary">Kembalikan</button>
        </div>

        <div class="borrow-card">
            <div class="card-status status-active">Sedang Dipinjam</div>
            <h4 class="card-title">Proyektor Epson EB-2250U</h4>
            <div class="card-details">
                <div class="detail-row">
                    <span class="label">Tanggal Pinjam:</span>
                    <span class="value">26-01-2026</span>
                </div>
                <div class="detail-row">
                    <span class="label">Jatuh Tempo:</span>
                    <span class="value">30-01-2026</span>
                </div>
                <div class="detail-row">
                    <span class="label">Sisa Waktu:</span>
                    <span class="value">4 hari</span>
                </div>
            </div>
            <button class="btn btn-small btn-primary">Kembalikan</button>
        </div>
    </div>
</div>

<!-- Borrowing History -->
<div class="recent-section">
    <div class="section-header">
        <h3>Riwayat Peminjaman</h3>
        <a href="#" class="link-view-all">Lihat Semua →</a>
    </div>

    <div class="table-wrapper">
        <table class="data-table">
            <thead>
                <tr>
                    <th>Alat</th>
                    <th>Tanggal Pinjam</th>
                    <th>Tanggal Kembali</th>
                    <th>Durasi</th>
                    <th>Kondisi</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><span class="font-medium">Kamera Canon EOS</span></td>
                    <td>10-01-2026</td>
                    <td>12-01-2026</td>
                    <td>2 hari</td>
                    <td><span class="badge badge-success">Baik</span></td>
                    <td><span class="badge badge-success">Selesai</span></td>
                </tr>
                <tr>
                    <td><span class="font-medium">Microphone Condenser</span></td>
                    <td>05-01-2026</td>
                    <td>07-01-2026</td>
                    <td>2 hari</td>
                    <td><span class="badge badge-success">Baik</span></td>
                    <td><span class="badge badge-success">Selesai</span></td>
                </tr>
                <tr>
                    <td><span class="font-medium">Speaker JBL</span></td>
                    <td>01-01-2026</td>
                    <td>03-01-2026</td>
                    <td>2 hari</td>
                    <td><span class="badge badge-success">Baik</span></td>
                    <td><span class="badge badge-success">Selesai</span></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<script>
    document.getElementById('currentDate').textContent = new Date().toLocaleDateString('id-ID', {
        weekday: 'long',
        year: 'numeric',
        month: 'long',
        day: 'numeric'
    });
</script>
@endsection