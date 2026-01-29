@extends('layouts.app')

@section('content')
<div class="dashboard-wrapper">
    <!-- Header Section -->
    <div class="dashboard-header">
        <div class="header-content">
            <h1 class="dashboard-title">Riwayat Peminjaman</h1>
            <p class="dashboard-subtitle">Kelola peminjaman alat anda</p>
        </div>
        <div class="header-actions">
            <div class="date-display" id="currentDate"></div>
        </div>
    </div>

    <!-- KPI Cards Section - 4 in 1 line -->
    <div class="kpi-section">
        <div class="kpi-card kpi-active">
            <div class="kpi-icon">📌</div>
            <div class="kpi-content">
                <div class="kpi-label">Sedang Dipinjam</div>
                <div class="kpi-value">2</div>
                <div class="kpi-meta">→ Alat aktif</div>
            </div>
        </div>

        <div class="kpi-card kpi-total">
            <div class="kpi-icon">📚</div>
            <div class="kpi-content">
                <div class="kpi-label">Total Peminjaman</div>
                <div class="kpi-value">15</div>
                <div class="kpi-meta">→ Seumur hidup</div>
            </div>
        </div>

        <div class="kpi-card kpi-soon">
            <div class="kpi-icon">⏰</div>
            <div class="kpi-content">
                <div class="kpi-label">Segera Dikembalikan</div>
                <div class="kpi-value">1</div>
                <div class="kpi-meta">→ Dalam 2 hari</div>
            </div>
        </div>

        <div class="kpi-card kpi-rating">
            <div class="kpi-icon">⭐</div>
            <div class="kpi-content">
                <div class="kpi-label">Rating Anda</div>
                <div class="kpi-value">4.8</div>
                <div class="kpi-meta">→ Terpercaya</div>
            </div>
        </div>
    </div>

    <!-- Action Button -->
    <div class="action-buttons-bar">
        <button class="btn btn-large btn-primary">+ Ajukan Peminjaman</button>
    </div>

    <!-- Active Borrowings Section -->
    <div class="section-title">Alat yang Sedang Dipinjam</div>
    <div class="borrow-cards-grid">
        <div class="borrow-card">
            <div class="borrow-status">Sedang Dipinjam</div>
            <h4 class="borrow-title">Laptop Dell XPS 13</h4>
            <div class="borrow-details">
                <div class="borrow-detail-row">
                    <span class="label">Tanggal Pinjam:</span>
                    <span class="value">25-01-2026</span>
                </div>
                <div class="borrow-detail-row">
                    <span class="label">Jatuh Tempo:</span>
                    <span class="value">27-01-2026</span>
                </div>
                <div class="borrow-detail-row">
                    <span class="label">Sisa Waktu:</span>
                    <span class="value value-highlight">2 hari</span>
                </div>
            </div>
            <button class="btn btn-medium btn-primary">Kembalikan</button>
        </div>

        <div class="borrow-card">
            <div class="borrow-status">Sedang Dipinjam</div>
            <h4 class="borrow-title">Proyektor Epson EB-2250U</h4>
            <div class="borrow-details">
                <div class="borrow-detail-row">
                    <span class="label">Tanggal Pinjam:</span>
                    <span class="value">26-01-2026</span>
                </div>
                <div class="borrow-detail-row">
                    <span class="label">Jatuh Tempo:</span>
                    <span class="value">30-01-2026</span>
                </div>
                <div class="borrow-detail-row">
                    <span class="label">Sisa Waktu:</span>
                    <span class="value">4 hari</span>
                </div>
            </div>
            <button class="btn btn-medium btn-primary">Kembalikan</button>
        </div>
    </div>

    <!-- Borrowing History Table -->
    <div class="table-container">
        <div class="table-header">
            <h3>Riwayat Peminjaman</h3>
            <a href="#" class="link-view-more">Lihat Semua →</a>
        </div>
        <div class="table-body">
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
                        <td><span class="font-bold">Kamera Canon EOS R5</span></td>
                        <td>10-01-2026</td>
                        <td>12-01-2026</td>
                        <td>2 hari</td>
                        <td><span class="badge badge-success">Baik</span></td>
                        <td><span class="badge badge-success">Selesai</span></td>
                    </tr>
                    <tr>
                        <td><span class="font-bold">Microphone Rode Wireless</span></td>
                        <td>05-01-2026</td>
                        <td>07-01-2026</td>
                        <td>2 hari</td>
                        <td><span class="badge badge-success">Baik</span></td>
                        <td><span class="badge badge-success">Selesai</span></td>
                    </tr>
                    <tr>
                        <td><span class="font-bold">Speaker JBL Professional</span></td>
                        <td>01-01-2026</td>
                        <td>03-01-2026</td>
                        <td>2 hari</td>
                        <td><span class="badge badge-success">Baik</span></td>
                        <td><span class="badge badge-success">Selesai</span></td>
                    </tr>
                    <tr>
                        <td><span class="font-bold">Tripod Profesional</span></td>
                        <td>15-12-2025</td>
                        <td>17-12-2025</td>
                        <td>2 hari</td>
                        <td><span class="badge badge-warning">Rusak Ringan</span></td>
                        <td><span class="badge badge-success">Selesai</span></td>
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