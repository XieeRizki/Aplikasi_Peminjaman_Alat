@extends('layouts.app')

@section('content')
<div class="page-header">
    <div>
        <h2 class="page-title">Dashboard Petugas</h2>
        <p class="page-subtitle">Kelola peminjaman dan pengembalian alat</p>
    </div>
    <div class="header-date">
        <span id="currentDate"></span>
    </div>
</div>

<!-- Quick Stats -->
<div class="stats-grid">
    <div class="stat-card stat-primary">
        <div class="stat-icon">
            <i class="icon-inbox"></i>
        </div>
        <div class="stat-content">
            <p class="stat-label">Peminjaman Hari Ini</p>
            <h3 class="stat-value">8</h3>
            <span class="stat-change">→ Menunggu konfirmasi</span>
        </div>
    </div>

    <div class="stat-card stat-success">
        <div class="stat-icon">
            <i class="icon-return"></i>
        </div>
        <div class="stat-content">
            <p class="stat-label">Pengembalian Hari Ini</p>
            <h3 class="stat-value">5</h3>
            <span class="stat-change">→ Sudah dikembalikan</span>
        </div>
    </div>

    <div class="stat-card stat-warning">
        <div class="stat-icon">
            <i class="icon-pending"></i>
        </div>
        <div class="stat-content">
            <p class="stat-label">Menunggu Verifikasi</p>
            <h3 class="stat-value">12</h3>
            <span class="stat-change">→ Perlu pengecekan</span>
        </div>
    </div>

    <div class="stat-card stat-info">
        <div class="stat-icon">
            <i class="icon-total"></i>
        </div>
        <div class="stat-content">
            <p class="stat-label">Total Peminjaman</p>
            <h3 class="stat-value">156</h3>
            <span class="stat-change">→ Bulan ini</span>
        </div>
    </div>
</div>

<!-- Action Buttons -->
<div class="action-bar">
    <button class="btn btn-primary">+ Peminjaman Baru</button>
    <button class="btn btn-success">+ Pengembalian</button>
    <button class="btn btn-secondary">Laporan</button>
</div>

<!-- Pending Requests -->
<div class="recent-section">
    <div class="section-header">
        <h3>Permintaan Peminjaman Menunggu</h3>
        <a href="#" class="link-view-all">Lihat Semua →</a>
    </div>

    <div class="table-wrapper">
        <table class="data-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Peminjam</th>
                    <th>Alat yang Diminta</th>
                    <th>Keperluan</th>
                    <th>Tanggal Diminta</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><span class="text-muted">#REQ001</span></td>
                    <td>Mahasiswa A</td>
                    <td>Laptop, Proyektor</td>
                    <td>Presentasi Tugas Akhir</td>
                    <td>29-01-2026</td>
                    <td><span class="badge badge-warning">Menunggu</span></td>
                    <td>
                        <button class="btn-small btn-approve">Terima</button>
                        <button class="btn-small btn-reject">Tolak</button>
                    </td>
                </tr>
                <tr>
                    <td><span class="text-muted">#REQ002</span></td>
                    <td>Mahasiswa B</td>
                    <td>Kamera</td>
                    <td>Dokumentasi Event</td>
                    <td>28-01-2026</td>
                    <td><span class="badge badge-warning">Menunggu</span></td>
                    <td>
                        <button class="btn-small btn-approve">Terima</button>
                        <button class="btn-small btn-reject">Tolak</button>
                    </td>
                </tr>
                <tr>
                    <td><span class="text-muted">#REQ003</span></td>
                    <td>Mahasiswa C</td>
                    <td>Sound System</td>
                    <td>Workshop Musik</td>
                    <td>27-01-2026</td>
                    <td><span class="badge badge-warning">Menunggu</span></td>
                    <td>
                        <button class="btn-small btn-approve">Terima</button>
                        <button class="btn-small btn-reject">Tolak</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<!-- Recent Transactions -->
<div class="recent-section">
    <div class="section-header">
        <h3>Transaksi Terakhir</h3>
        <a href="#" class="link-view-all">Lihat Semua →</a>
    </div>

    <div class="table-wrapper">
        <table class="data-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Peminjam</th>
                    <th>Alat</th>
                    <th>Pinjam</th>
                    <th>Kembali</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><span class="text-muted">#PJM001</span></td>
                    <td>Andi Wijaya</td>
                    <td>Laptop</td>
                    <td>25-01-2026</td>
                    <td>27-01-2026</td>
                    <td><span class="badge badge-warning">Dipinjam</span></td>
                    <td>
                        <button class="btn-action btn-edit">✏</button>
                    </td>
                </tr>
                <tr>
                    <td><span class="text-muted">#PJM002</span></td>
                    <td>Sinta Kusuma</td>
                    <td>Proyektor</td>
                    <td>22-01-2026</td>
                    <td>24-01-2026</td>
                    <td><span class="badge badge-success">Dikembalikan</span></td>
                    <td>
                        <button class="btn-action btn-edit">✏</button>
                    </td>
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