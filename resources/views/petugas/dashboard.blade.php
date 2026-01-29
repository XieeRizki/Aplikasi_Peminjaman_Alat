@extends('layouts.app')

@section('content')
<div class="dashboard-wrapper">
    <!-- Header Section -->
    <div class="dashboard-header">
        <div class="header-content">
            <h1 class="dashboard-title">Dashboard Petugas</h1>
            <p class="dashboard-subtitle">Kelola peminjaman dan pengembalian alat</p>
        </div>
        <div class="header-actions">
            <div class="date-display" id="currentDate"></div>
        </div>
    </div>

    <!-- KPI Cards Section - 4 in 1 line -->
    <div class="kpi-section">
        <div class="kpi-card kpi-pending">
            <div class="kpi-icon">📥</div>
            <div class="kpi-content">
                <div class="kpi-label">Peminjaman Hari Ini</div>
                <div class="kpi-value">8</div>
                <div class="kpi-meta">→ Menunggu konfirmasi</div>
            </div>
        </div>

        <div class="kpi-card kpi-returned">
            <div class="kpi-icon">📤</div>
            <div class="kpi-content">
                <div class="kpi-label">Pengembalian Hari Ini</div>
                <div class="kpi-value">5</div>
                <div class="kpi-meta">→ Sudah diproses</div>
            </div>
        </div>

        <div class="kpi-card kpi-verify">
            <div class="kpi-icon">⏳</div>
            <div class="kpi-content">
                <div class="kpi-label">Verifikasi Pending</div>
                <div class="kpi-value">12</div>
                <div class="kpi-meta">→ Perlu pengecekan</div>
            </div>
        </div>

        <div class="kpi-card kpi-monthly">
            <div class="kpi-icon">📊</div>
            <div class="kpi-content">
                <div class="kpi-label">Total Bulan Ini</div>
                <div class="kpi-value">156</div>
                <div class="kpi-meta">→ Transaksi</div>
            </div>
        </div>
    </div>

    <!-- Action Buttons -->
    <div class="action-buttons-bar">
        <button class="btn btn-large btn-primary">+ Peminjaman Baru</button>
        <button class="btn btn-large btn-success">+ Pengembalian</button>
        <button class="btn btn-large btn-secondary">📋 Laporan</button>
    </div>

    <!-- Dual Tables Section -->
    <div class="dual-tables">
        <div class="table-container">
            <div class="table-header">
                <h3>Permintaan Menunggu</h3>
                <a href="#" class="link-view-more">Lihat →</a>
            </div>
            <div class="table-body">
                <table class="data-table data-table-compact">
                    <thead>
                        <tr>
                            <th>Peminjam</th>
                            <th>Alat</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><span class="font-bold">Mahasiswa A</span></td>
                            <td>Laptop</td>
                            <td><span class="badge badge-warning">Menunggu</span></td>
                            <td>
                                <div class="action-buttons-compact">
                                    <button class="btn-action btn-approve">✓</button>
                                    <button class="btn-action btn-reject">✕</button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><span class="font-bold">Mahasiswa B</span></td>
                            <td>Kamera</td>
                            <td><span class="badge badge-warning">Menunggu</span></td>
                            <td>
                                <div class="action-buttons-compact">
                                    <button class="btn-action btn-approve">✓</button>
                                    <button class="btn-action btn-reject">✕</button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><span class="font-bold">Mahasiswa C</span></td>
                            <td>Proyektor</td>
                            <td><span class="badge badge-warning">Menunggu</span></td>
                            <td>
                                <div class="action-buttons-compact">
                                    <button class="btn-action btn-approve">✓</button>
                                    <button class="btn-action btn-reject">✕</button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="table-container">
            <div class="table-header">
                <h3>Peminjaman Aktif</h3>
                <a href="#" class="link-view-more">Lihat →</a>
            </div>
            <div class="table-body">
                <table class="data-table data-table-compact">
                    <thead>
                        <tr>
                            <th>Peminjam</th>
                            <th>Alat</th>
                            <th>Jatuh Tempo</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><span class="font-bold">Andi Wijaya</span></td>
                            <td>Laptop</td>
                            <td>27-01-2026</td>
                            <td><span class="badge badge-warning">Dipinjam</span></td>
                        </tr>
                        <tr>
                            <td><span class="font-bold">Sinta Kusuma</span></td>
                            <td>Proyektor</td>
                            <td>29-01-2026</td>
                            <td><span class="badge badge-success">Tepat</span></td>
                        </tr>
                        <tr>
                            <td><span class="font-bold">Budi Santoso</span></td>
                            <td>Kamera</td>
                            <td>28-01-2026</td>
                            <td><span class="badge badge-danger">Terlambat</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- All Transactions Table -->
    <div class="table-container">
        <div class="table-header">
            <h3>Semua Transaksi Hari Ini</h3>
            <a href="#" class="link-view-more">Lihat Semua →</a>
        </div>
        <div class="table-body">
            <table class="data-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Peminjam</th>
                        <th>Alat</th>
                        <th>Tipe</th>
                        <th>Waktu</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><span class="text-code">#PJM001</span></td>
                        <td>Andi Wijaya</td>
                        <td><span class="font-bold">Laptop</span></td>
                        <td><span class="badge badge-primary">Peminjaman</span></td>
                        <td>09:30</td>
                        <td><span class="badge badge-warning">Dipinjam</span></td>
                        <td>
                            <div class="action-buttons">
                                <button class="btn-action btn-edit">✏</button>
                                <button class="btn-action btn-delete">🗑</button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><span class="text-code">#PJM002</span></td>
                        <td>Sinta Kusuma</td>
                        <td><span class="font-bold">Proyektor</span></td>
                        <td><span class="badge badge-success">Pengembalian</span></td>
                        <td>10:15</td>
                        <td><span class="badge badge-success">Selesai</span></td>
                        <td>
                            <div class="action-buttons">
                                <button class="btn-action btn-edit">✏</button>
                                <button class="btn-action btn-delete">🗑</button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><span class="text-code">#PJM003</span></td>
                        <td>Budi Santoso</td>
                        <td><span class="font-bold">Kamera</span></td>
                        <td><span class="badge badge-primary">Peminjaman</span></td>
                        <td>11:45</td>
                        <td><span class="badge badge-warning">Dipinjam</span></td>
                        <td>
                            <div class="action-buttons">
                                <button class="btn-action btn-edit">✏</button>
                                <button class="btn-action btn-delete">🗑</button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
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