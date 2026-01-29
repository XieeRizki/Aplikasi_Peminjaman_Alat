@extends('layouts.app')

@section('content')
<div class="page-header">
    <div>
        <h2 class="page-title">Dashboard Administrator</h2>
        <p class="page-subtitle">Manajemen sistem peminjaman alat secara menyeluruh</p>
    </div>
    <div class="header-actions">
        <div class="date-display">
            <span id="currentDate"></span>
        </div>
        <div class="quick-actions">
            <button class="btn btn-outline-primary btn-sm"><i class="icon-calendar"></i> Laporan Harian</button>
            <button class="btn btn-primary btn-sm"><i class="icon-plus"></i> Tambah Alat</button>
        </div>
    </div>
</div>

<!-- Key Metrics -->
<div class="metrics-grid">
    <div class="metric-card primary">
        <div class="metric-header">
            <div class="metric-icon bg-primary">
                <i class="icon-tools"></i>
            </div>
            <div class="metric-info">
                <p class="metric-label">Total Alat</p>
                <h3 class="metric-value">145</h3>
            </div>
        </div>
        <div class="metric-trend positive">
            <i class="icon-arrow-up"></i> 12% dari bulan lalu
        </div>
    </div>

    <div class="metric-card success">
        <div class="metric-header">
            <div class="metric-icon bg-success">
                <i class="icon-check-circle"></i>
            </div>
            <div class="metric-info">
                <p class="metric-label">Alat Tersedia</p>
                <h3 class="metric-value">98</h3>
            </div>
        </div>
        <div class="metric-trend positive">
            <i class="icon-check"></i> Siap digunakan
        </div>
    </div>

    <div class="metric-card warning">
        <div class="metric-header">
            <div class="metric-icon bg-warning">
                <i class="icon-clock"></i>
            </div>
            <div class="metric-info">
                <p class="metric-label">Alat Dipinjam</p>
                <h3 class="metric-value">35</h3>
            </div>
        </div>
        <div class="metric-trend neutral">
            <i class="icon-user"></i> Sedang digunakan
        </div>
    </div>

    <div class="metric-card danger">
        <div class="metric-header">
            <div class="metric-icon bg-danger">
                <i class="icon-alert"></i>
            </div>
            <div class="metric-info">
                <p class="metric-label">Terlambat</p>
                <h3 class="metric-value">5</h3>
            </div>
        </div>
        <div class="metric-trend negative">
            <i class="icon-warning"></i> Perlu segera ditindak
        </div>
    </div>
</div>

<!-- Charts and Analytics Section -->
<div class="analytics-section">
    <div class="chart-container">
        <div class="chart-header">
            <h3>Statistik Peminjaman 30 Hari Terakhir</h3>
            <div class="chart-controls">
                <button class="btn btn-outline-secondary btn-sm">Hari</button>
                <button class="btn btn-outline-secondary btn-sm active">Minggu</button>
                <button class="btn btn-outline-secondary btn-sm">Bulan</button>
            </div>
        </div>
        <div class="chart-placeholder">
            <div class="chart-visual">
                <!-- Simulated chart visualization -->
                <div class="chart-bar-container">
                    <div class="chart-bar" style="height: 60%;"></div>
                    <div class="chart-bar" style="height: 80%;"></div>
                    <div class="chart-bar" style="height: 70%;"></div>
                    <div class="chart-bar" style="height: 90%;"></div>
                    <div class="chart-bar" style="height: 65%;"></div>
                    <div class="chart-bar" style="height: 85%;"></div>
                    <div class="chart-bar" style="height: 75%;"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="chart-container">
        <div class="chart-header">
            <h3>Kategori Alat Paling Banyak Dipinjam</h3>
            <div class="chart-controls">
                <button class="btn btn-outline-secondary btn-sm">Lihat Detail</button>
            </div>
        </div>
        <div class="chart-placeholder">
            <div class="chart-visual">
                <!-- Simulated pie chart visualization -->
                <div class="pie-chart-sim">
                    <div class="pie-segment segment-1"></div>
                    <div class="pie-segment segment-2"></div>
                    <div class="pie-segment segment-3"></div>
                    <div class="pie-segment segment-4"></div>
                </div>
                <div class="chart-legend">
                    <div class="legend-item">
                        <div class="legend-color primary"></div>
                        <span>Elektronik (45%)</span>
                    </div>
                    <div class="legend-item">
                        <div class="legend-color success"></div>
                        <span>Audio (25%)</span>
                    </div>
                    <div class="legend-item">
                        <div class="legend-color warning"></div>
                        <span>Visual (20%)</span>
                    </div>
                    <div class="legend-item">
                        <div class="legend-color danger"></div>
                        <span>Lainnya (10%)</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Recent Activity and Transactions -->
<div class="activity-section">
    <div class="section-card">
        <div class="section-header">
            <h3>Peminjaman Terbaru</h3>
            <a href="#" class="view-all-link">Lihat Semua <i class="icon-arrow-right"></i></a>
        </div>
        
        <div class="table-responsive">
            <table class="modern-table">
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
                        <td><div class="item-info">
                            <div class="item-name">Laptop Dell XPS 13</div>
                            <div class="item-category">Elektronik</div>
                        </div></td>
                        <td>Ahmad Rizki</td>
                        <td>25-01-2026</td>
                        <td>27-01-2026</td>
                        <td><span class="badge badge-warning">Dipinjam</span></td>
                        <td>
                            <div class="action-buttons">
                                <button class="btn-icon btn-view" title="Lihat detail"><i class="icon-eye"></i></button>
                                <button class="btn-icon btn-edit" title="Edit"><i class="icon-edit"></i></button>
                                <button class="btn-icon btn-delete" title="Hapus"><i class="icon-trash"></i></button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><span class="text-muted">#PJM002</span></td>
                        <td><div class="item-info">
                            <div class="item-name">Proyektor Epson</div>
                            <div class="item-category">Visual</div>
                        </div></td>
                        <td>Siti Nurhaliza</td>
                        <td>22-01-2026</td>
                        <td>24-01-2026</td>
                        <td><span class="badge badge-success">Dikembalikan</span></td>
                        <td>
                            <div class="action-buttons">
                                <button class="btn-icon btn-view" title="Lihat detail"><i class="icon-eye"></i></button>
                                <button class="btn-icon btn-edit" title="Edit"><i class="icon-edit"></i></button>
                                <button class="btn-icon btn-delete" title="Hapus"><i class="icon-trash"></i></button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><span class="text-muted">#PJM003</span></td>
                        <td><div class="item-info">
                            <div class="item-name">Kamera Canon EOS</div>
                            <div class="item-category">Visual</div>
                        </div></td>
                        <td>Budi Santoso</td>
                        <td>26-01-2026</td>
                        <td>28-01-2026</td>
                        <td><span class="badge badge-info">Proses</span></td>
                        <td>
                            <div class="action-buttons">
                                <button class="btn-icon btn-view" title="Lihat detail"><i class="icon-eye"></i></button>
                                <button class="btn-icon btn-edit" title="Edit"><i class="icon-edit"></i></button>
                                <button class="btn-icon btn-delete" title="Hapus"><i class="icon-trash"></i></button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><span class="text-muted">#PJM004</span></td>
                        <td><div class="item-info">
                            <div class="item-name">Microphone Condenser</div>
                            <div class="item-category">Audio</div>
                        </div></td>
                        <td>Eka Putri</td>
                        <td>20-01-2026</td>
                        <td>22-01-2026</td>
                        <td><span class="badge badge-danger">Terlambat</span></td>
                        <td>
                            <div class="action-buttons">
                                <button class="btn-icon btn-view" title="Lihat detail"><i class="icon-eye"></i></button>
                                <button class="btn-icon btn-edit" title="Edit"><i class="icon-edit"></i></button>
                                <button class="btn-icon btn-delete" title="Hapus"><i class="icon-trash"></i></button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="section-card">
        <div class="section-header">
            <h3>Statistik Pengguna</h3>
            <a href="#" class="view-all-link">Lihat Detail <i class="icon-arrow-right"></i></a>
        </div>
        
        <div class="stats-grid-vertical">
            <div class="stat-item">
                <div class="stat-progress">
                    <div class="progress-label">
                        <span>Peminjam Aktif</span>
                        <span class="progress-value">85%</span>
                    </div>
                    <div class="progress-bar">
                        <div class="progress-fill fill-success" style="width: 85%;"></div>
                    </div>
                </div>
            </div>
            
            <div class="stat-item">
                <div class="stat-progress">
                    <div class="progress-label">
                        <span>Alat Terpinjam</span>
                        <span class="progress-value">67%</span>
                    </div>
                    <div class="progress-bar">
                        <div class="progress-fill fill-warning" style="width: 67%;"></div>
                    </div>
                </div>
            </div>
            
            <div class="stat-item">
                <div class="stat-progress">
                    <div class="progress-label">
                        <span>Keberhasilan Pengembalian</span>
                        <span class="progress-value">94%</span>
                    </div>
                    <div class="progress-bar">
                        <div class="progress-fill fill-primary" style="width: 94%;"></div>
                    </div>
                </div>
            </div>
            
            <div class="stat-item">
                <div class="stat-progress">
                    <div class="progress-label">
                        <span>Penilaian Pengguna</span>
                        <span class="progress-value">4.8/5</span>
                    </div>
                    <div class="progress-bar">
                        <div class="progress-fill fill-info" style="width: 96%;"></div>
                    </div>
                </div>
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
    
    // Toggle active state for chart controls
    const chartControls = document.querySelectorAll('.chart-controls .btn');
    chartControls.forEach(control => {
        control.addEventListener('click', function() {
            chartControls.forEach(btn => btn.classList.remove('active'));
            this.classList.add('active');
        });
    });
</script>
@endsection