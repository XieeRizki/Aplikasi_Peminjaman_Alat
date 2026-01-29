@extends('layouts.app')

@section('content')
<div class="page-header">
    <div>
        <h2 class="page-title">Dashboard</h2>
        <p class="page-subtitle">Selamat datang di Sistem Peminjaman Alat</p>
    </div>
    <div class="header-date">
        <span id="currentDate"></span>
    </div>
</div>

<!-- Statistics Cards - 4 Columns Compact -->
<div class="stats-grid">
    <div class="stat-card stat-primary">
        <div class="stat-icon">📊</div>
        <div class="stat-content">
            <p class="stat-label">Total Alat</p>
            <h3 class="stat-value">145</h3>
            <span class="stat-change positive">↑ 12 dari bulan lalu</span>
        </div>
    </div>

    <div class="stat-card stat-success">
        <div class="stat-icon">✓</div>
        <div class="stat-content">
            <p class="stat-label">Alat Tersedia</p>
            <h3 class="stat-value">98</h3>
            <span class="stat-change positive">↑ Siap dipinjam</span>
        </div>
    </div>

    <div class="stat-card stat-warning">
        <div class="stat-icon">🕐</div>
        <div class="stat-content">
            <p class="stat-label">Alat Dipinjam</p>
            <h3 class="stat-value">35</h3>
            <span class="stat-change neutral">→ Sedang digunakan</span>
        </div>
    </div>

    <div class="stat-card stat-danger">
        <div class="stat-icon">⚠</div>
        <div class="stat-content">
            <p class="stat-label">Terlambat</p>
            <h3 class="stat-value">5</h3>
            <span class="stat-change negative">↓ Segera kembalikan</span>
        </div>
    </div>
</div>

<!-- Charts Section -->
<div class="charts-section">
    <div class="chart-card">
        <div class="card-header">
            <h3>Statistik Peminjaman 30 Hari Terakhir</h3>
            <div class="card-actions">
                <button class="btn-icon" title="More options">⋮</button>
            </div>
        </div>
        <div class="chart-placeholder">
            📊 Grafik statistik akan ditampilkan di sini
        </div>
    </div>

    <div class="chart-card">
        <div class="card-header">
            <h3>Kategori Alat Paling Banyak Dipinjam</h3>
            <div class="card-actions">
                <button class="btn-icon" title="More options">⋮</button>
            </div>
        </div>
        <div class="chart-placeholder">
            📈 Statistik kategori akan ditampilkan di sini
        </div>
    </div>
</div>

<!-- Recent Transactions -->
<div class="recent-section">
    <div class="section-header">
        <h3>Peminjaman Terbaru</h3>
        <a href="#" class="link-view-all">Lihat Semua →</a>
    </div>

    <div class="table-wrapper">
        <table class="data-table">
            <thead>
                <tr>
                    <th>ID Peminjaman</th>
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
                    <td><span class="text-muted">#PJM001</span></td>
                    <td><span class="font-medium">Laptop Dell XPS 13</span></td>
                    <td>Ahmad Rizki</td>
                    <td>25-01-2026</td>
                    <td>27-01-2026</td>
                    <td><span class="badge badge-warning">Dipinjam</span></td>
                    <td>
                        <div class="action-menu">
                            <button class="btn-action btn-view" title="Lihat">👁</button>
                            <button class="btn-action btn-edit" title="Edit">✏</button>
                            <button class="btn-action btn-delete" title="Hapus">🗑</button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td><span class="text-muted">#PJM002</span></td>
                    <td><span class="font-medium">Proyektor Epson</span></td>
                    <td>Siti Nurhaliza</td>
                    <td>22-01-2026</td>
                    <td>24-01-2026</td>
                    <td><span class="badge badge-success">Dikembalikan</span></td>
                    <td>
                        <div class="action-menu">
                            <button class="btn-action btn-view" title="Lihat">👁</button>
                            <button class="btn-action btn-edit" title="Edit">✏</button>
                            <button class="btn-action btn-delete" title="Hapus">🗑</button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td><span class="text-muted">#PJM003</span></td>
                    <td><span class="font-medium">Kamera Canon EOS</span></td>
                    <td>Budi Santoso</td>
                    <td>26-01-2026</td>
                    <td>28-01-2026</td>
                    <td><span class="badge badge-info">Proses</span></td>
                    <td>
                        <div class="action-menu">
                            <button class="btn-action btn-view" title="Lihat">👁</button>
                            <button class="btn-action btn-edit" title="Edit">✏</button>
                            <button class="btn-action btn-delete" title="Hapus">🗑</button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td><span class="text-muted">#PJM004</span></td>
                    <td><span class="font-medium">Microphone Condenser</span></td>
                    <td>Eka Putri</td>
                    <td>20-01-2026</td>
                    <td>22-01-2026</td>
                    <td><span class="badge badge-danger">Terlambat</span></td>
                    <td>
                        <div class="action-menu">
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

<script>
    document.getElementById('currentDate').textContent = new Date().toLocaleDateString('id-ID', {
        weekday: 'long',
        year: 'numeric',
        month: 'long',
        day: 'numeric'
    });
</script>
@endsection