@extends('layouts.app')

@section('content')
<div class="dashboard-wrapper">
    <!-- Header Section -->
    <div class="dashboard-header">
        <div class="header-content">
            <h1 class="dashboard-title">Dashboard</h1>
            <p class="dashboard-subtitle">Selamat datang di Sistem Peminjaman Alat</p>
        </div>
        <div class="header-actions">
            <div class="date-display" id="currentDate"></div>
        </div>
    </div>

    <!-- KPI Cards Section - 4 in 1 line -->
    <div class="kpi-section">
        <div class="kpi-card kpi-total">
            <div class="kpi-icon">📊</div>
            <div class="kpi-content">
                <div class="kpi-label">Total Alat</div>
                <div class="kpi-value">145</div>
                <div class="kpi-meta">↑ 12% dari bulan lalu</div>
            </div>
        </div>

        <div class="kpi-card kpi-available">
            <div class="kpi-icon">✓</div>
            <div class="kpi-content">
                <div class="kpi-label">Alat Tersedia</div>
                <div class="kpi-value">98</div>
                <div class="kpi-meta">↑ Siap digunakan</div>
            </div>
        </div>

        <div class="kpi-card kpi-borrowed">
            <div class="kpi-icon">🕐</div>
            <div class="kpi-content">
                <div class="kpi-label">Alat Dipinjam</div>
                <div class="kpi-value">35</div>
                <div class="kpi-meta">→ Sedang digunakan</div>
            </div>
        </div>

        <div class="kpi-card kpi-late">
            <div class="kpi-icon">⚠</div>
            <div class="kpi-content">
                <div class="kpi-label">Terlambat</div>
                <div class="kpi-value">5</div>
                <div class="kpi-meta">↓ Segera kembalikan</div>
            </div>
        </div>
    </div>

    <!-- Charts Grid - 2 in 1 line -->
    <div class="charts-grid">
        <div class="chart-container">
            <div class="chart-header">
                <h3>Statistik Peminjaman 30 Hari</h3>
                <div class="chart-actions">
                    <button class="btn-chart-action">⋮</button>
                </div>
            </div>
            <div class="chart-body">
                <div class="chart-placeholder">
                    📊 Grafik statistik peminjaman akan ditampilkan di sini
                </div>
            </div>
        </div>

        <div class="chart-container">
            <div class="chart-header">
                <h3>Top Kategori Alat Dipinjam</h3>
                <div class="chart-actions">
                    <button class="btn-chart-action">⋮</button>
                </div>
            </div>
            <div class="chart-body">
                <div class="chart-placeholder">
                    📈 Grafik kategori alat akan ditampilkan di sini
                </div>
            </div>
        </div>
    </div>

    <!-- Tables Section -->
    <div class="tables-section">
        <!-- Recent Borrowings Table -->
        <div class="table-container">
            <div class="table-header">
                <h3>Peminjaman Terbaru</h3>
                <a href="#" class="link-view-more">Lihat Semua →</a>
            </div>
            <div class="table-body">
                <table class="data-table">
                    <thead>
                        <tr>
                            <th>ID Transaksi</th>
                            <th>Nama Alat</th>
                            <th>Peminjam</th>
                            <th>Tanggal Pinjam</th>
                            <th>Jatuh Tempo</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><span class="text-code">#PJM001</span></td>
                            <td><span class="font-bold">Laptop Dell XPS 13</span></td>
                            <td>Ahmad Rizki</td>
                            <td>25-01-2026</td>
                            <td>27-01-2026</td>
                            <td><span class="badge badge-warning">Dipinjam</span></td>
                            <td>
                                <div class="action-buttons">
                                    <button class="btn-action btn-view" title="Lihat">👁</button>
                                    <button class="btn-action btn-edit" title="Edit">✏</button>
                                    <button class="btn-action btn-delete" title="Hapus">🗑</button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><span class="text-code">#PJM002</span></td>
                            <td><span class="font-bold">Proyektor Epson EB-2250U</span></td>
                            <td>Siti Nurhaliza</td>
                            <td>22-01-2026</td>
                            <td>24-01-2026</td>
                            <td><span class="badge badge-success">Dikembalikan</span></td>
                            <td>
                                <div class="action-buttons">
                                    <button class="btn-action btn-view" title="Lihat">👁</button>
                                    <button class="btn-action btn-edit" title="Edit">✏</button>
                                    <button class="btn-action btn-delete" title="Hapus">🗑</button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><span class="text-code">#PJM003</span></td>
                            <td><span class="font-bold">Kamera Canon EOS R5</span></td>
                            <td>Budi Santoso</td>
                            <td>26-01-2026</td>
                            <td>28-01-2026</td>
                            <td><span class="badge badge-info">Proses</span></td>
                            <td>
                                <div class="action-buttons">
                                    <button class="btn-action btn-view" title="Lihat">👁</button>
                                    <button class="btn-action btn-edit" title="Edit">✏</button>
                                    <button class="btn-action btn-delete" title="Hapus">🗑</button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><span class="text-code">#PJM004</span></td>
                            <td><span class="font-bold">Microphone Rode Wireless</span></td>
                            <td>Eka Putri</td>
                            <td>20-01-2026</td>
                            <td>22-01-2026</td>
                            <td><span class="badge badge-danger">Terlambat</span></td>
                            <td>
                                <div class="action-buttons">
                                    <button class="btn-action btn-view" title="Lihat">👁</button>
                                    <button class="btn-action btn-edit" title="Edit">✏</button>
                                    <button class="btn-action btn-delete" title="Hapus">🗑</button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
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