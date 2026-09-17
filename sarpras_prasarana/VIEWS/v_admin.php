<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin - Pengaduan Sarana Prasarana</title>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #fce8ec, #f7d4dc);
            color: #4a0e17;
            min-height: 100vh;
        }

        .navbar {
            background: linear-gradient(135deg, #4a0e17, #3a090f);
            color: white;
            padding: 12px 30px;

            display: flex;
            justify-content: space-between;
            align-items: center;

            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 10px;

            font-size: 20px;
            font-weight: bold;
        }

        .logo {
            width: 42px;
            height: 42px;

            border-radius: 50%;
            background: white;
            color: #800000;

            display: flex;
            justify-content: center;
            align-items: center;

            font-size: 24px;
        }

        .user-info {
            display: flex;
            align-items: center;
            gap: 16px;

            font-size: 14px;
        }

        .role-name {
            font-weight: 700;
        }

        .btn-logout {
            background: #a02030;
            color: white;

            width: 40px;
            height: 40px;
            padding: 0;
            border-radius: 10px;

            display: inline-flex;
            align-items: center;
            justify-content: center;

            font-weight: bold;
            text-decoration: none;

            transition: 0.2s;
        }

        .btn-logout img {
            width: 20px;
            height: 20px;
            object-fit: contain;
            display: block;
            filter: brightness(0) invert(1);
        }

        .pagination .btn-logout {
            width: auto;
            height: auto;
            padding: 8px 12px;
            border-radius: 8px;
            display: inline-block;
            line-height: 1.2;
        }

        .btn-logout:hover {
            background: #800000;
        }

        .container {
            max-width: 1180px;
            margin: 30px auto;
            padding: 0 20px;
        }

        .admin-nav {
            background: linear-gradient(135deg, #f9edf0, #f3e2e6);

            border-radius: 16px;
            padding: 12px 16px;
            margin-bottom: 16px;

            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 14px;

            box-shadow: 0 10px 30px rgba(128, 0, 0, 0.08);
            border: 1px solid #edd5db;
        }

        .admin-nav .menu {
            display: flex;
            align-items: center;
            gap: 12px;
            flex-wrap: wrap;
        }

        .admin-nav .menu a {
            text-decoration: none;

            background: #fff8f9;
            color: #6b1d2f;

            width: 48px;
            height: 48px;
            min-width: 48px;

            display: inline-flex;
            align-items: center;
            justify-content: center;

            border-radius: 12px;
            border: 1px solid #f0d7dd;

            transition: 0.2s;
            box-shadow: 0 4px 12px rgba(128, 0, 0, 0.05);
        }

        .admin-nav .menu a img {
            width: 24px;
            height: 24px;
            object-fit: contain;
            display: block;
        }

        .admin-nav .menu a.active,
        .admin-nav .menu a:hover {
            background: #800000;
            border-color: #800000;
            transform: translateY(-1px);
        }

        .admin-nav .menu a.active img,
        .admin-nav .menu a:hover img {
            filter: brightness(0) invert(1);
        }

        .logo-link {
            display: flex !important;
            align-items: center;
            gap: 8px;
        }

        .dashboard-hero {
            background: linear-gradient(135deg, #fffdfd 0%, #f7e6eb 100%);
            border: 1px solid rgba(128, 0, 0, 0.08);
            border-radius: 24px;
            box-shadow: 0 18px 30px rgba(128, 0, 0, 0.08);
            padding: 36px 30px;
            margin-bottom: 24px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .dashboard-hero::before {
            content: "";
            position: absolute;
            inset: -20% auto auto -10%;
            width: 220px;
            height: 220px;
            background: rgba(128, 0, 0, 0.04);
            border-radius: 50%;
            animation: floatGlow 6s ease-in-out infinite;
        }

        .dashboard-hero-content {
            position: relative;
            z-index: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 16px;
        }

        .dashboard-hero-logo {
            width: 88px;
            height: 88px;
            object-fit: contain;
            border-radius: 50%;
            background: white;
            padding: 10px;
            box-shadow: 0 10px 22px rgba(128, 0, 0, 0.12);
            animation: pulse 2.5s infinite ease-in-out;
        }

        .dashboard-hero h2 {
            font-size: clamp(24px, 3vw, 36px);
            line-height: 1.4;
            color: #4a0e17;
            margin: 0;
        }

        .dashboard-name {
            font-size: clamp(20px, 2vw, 28px);
            color: #800000;
            font-weight: 800;
            animation: slideUp 1.2s ease;
        }

        .dashboard-nav-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(220px, 1fr));
            gap: 18px;
            margin-top: 20px;
        }

        .dashboard-link {
            text-decoration: none;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 14px;
            background: linear-gradient(135deg, #ffffff, #f8ebef);
            border: 1px solid rgba(128, 0, 0, 0.08);
            border-radius: 18px;
            padding: 18px 20px;
            color: #4a0e17;
            font-weight: 700;
            box-shadow: 0 12px 22px rgba(128, 0, 0, 0.08);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .dashboard-link:hover {
            transform: translateY(-2px);
            box-shadow: 0 16px 26px rgba(128, 0, 0, 0.12);
        }

        .dashboard-link img {
            width: 32px;
            height: 32px;
            object-fit: contain;
            display: block;
        }

        @keyframes pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.08); }
        }

        @keyframes floatGlow {
            0%, 100% { transform: translateX(0) translateY(0); }
            50% { transform: translateX(10px) translateY(6px); }
        }

        @keyframes slideUp {
            from { opacity: 0; transform: translateY(12px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .card {
            background: white;

            padding: 24px;
            border-radius: 14px;

            border-top: 6px solid #800000;

            box-shadow: 0 10px 30px rgba(128, 0, 0, 0.1);
        }

        .card h3 {
            margin-bottom: 20px;

            color: #5c1320;

            border-bottom: 2px solid #fce8ec;
            padding-bottom: 8px;
        }

        .grid-layout {
            display: grid;
            grid-template-columns: 1fr 1.8fr;

            gap: 20px;
            align-items: start;
        }

        .form-group {
            margin-bottom: 14px;
        }

        label {
            display: block;

            margin-bottom: 6px;

            font-weight: 700;
            color: #6b1d2f;

            font-size: 14px;
        }

        input,
        select,
        textarea {
            width: 100%;

            padding: 10px 12px;

            border-radius: 10px;
            border: 1.5px solid #f3cbd3;

            background: #fdf4f5;

            font-size: 14px;
            color: #5c1320;

            font-family: inherit;
        }

        input:focus,
        select:focus,
        textarea:focus {
            outline: none;

            background: white;
            border-color: #800000;

            box-shadow: 0 0 0 3px rgba(128, 0, 0, 0.15);
        }

        textarea {
            min-height: 80px;
            resize: vertical;
        }

        /* =========================
           BUTTON
        ========================= */

        .btn-submit {
            width: 100%;

            padding: 12px;

            background: linear-gradient(135deg, #800000, #a02030);

            color: white;
            border: none;
            border-radius: 10px;

            cursor: pointer;

            font-weight: bold;
            font-size: 14px;

            transition: 0.2s;
        }

        .btn-submit:hover {
            background: linear-gradient(135deg, #5e121f, #800000);
        }

        .save-btn {
            padding: 0;
            width: 36px;
            height: 36px;
            border-radius: 8px;

            background: #800000;
            color: white;

            border: none;

            display: inline-flex;
            align-items: center;
            justify-content: center;

            font-weight: bold;
            cursor: pointer;

            transition: 0.2s;
        }

        .save-btn img {
            width: 20px;
            height: 20px;
            object-fit: contain;
            display: block;
            filter: brightness(0) invert(1);
        }

        .save-btn:hover {
            background: #5e121f;
        }

        .table-responsive {
            overflow-x: auto;
        }

        .table {
            width: 100%;
            border-collapse: collapse;

            font-size: 14px;
        }

        .table th,
        .table td {
            padding: 11px 12px;

            border-bottom: 1px solid #f3cbd3;

            text-align: left;
            vertical-align: top;
        }

        .table th {
            background: #fdf4f5;
            color: #6b1d2f;
        }

        .table tr:hover {
            background: #fff9fa;
        }

        .badge {
            display: inline-block;

            padding: 4px 12px;

            border-radius: 20px;

            font-weight: 700;
            font-size: 12px;
        }

        .badge-menunggu {
            background: #ffeeba;
            color: #856404;
        }

        .badge-proses {
            background: #b8daff;
            color: #004085;
        }

        .badge-selesai {
            background: #c3e6cb;
            color: #155724;
        }

        .status-select {
            width: auto;
            min-width: 120px;
            margin-bottom: 6px;
        }

        .feedback-text {
            width: 180px;
            min-height: 45px;
            margin-bottom: 6px;
        }

        @media (max-width: 850px) {
            .grid-layout {
                grid-template-columns: 1fr;
            }

            .admin-nav {
                flex-wrap: wrap;
            }

            .navbar {
                flex-direction: column;
                gap: 12px;
                text-align: center;
            }

            .user-info {
                flex-wrap: wrap;
                justify-content: center;
            }
        }
    </style>
</head>

<body>

    <?php
    $page = $_GET['page'] ?? 'dashboard';
    ?>

    <div class="navbar">

        <div class="brand">
            <img class="logo" src="../assets/logo_sekolah.png" alt="Logo Sekolah">
            <span>Aplikasi Pengaduan Sarana Prasarana SMK Hunter x Hunter</span>
        </div>

        <div class="user-info">

            <span class="role-name">
                Admin:
                <?= htmlspecialchars($nama_admin) ?>
            </span>

            <small>
                (<?= htmlspecialchars($role_admin) ?>)
            </small>

            <a
                class="btn-logout"
                href="../CONTROLLERS/c_logout.php"
                title="Logout"
            >
                <img src="../assets/logout.png" alt="Logout">
            </a>

        </div>

    </div>

    <!-- =========================
         CONTENT
    ========================= -->

    <div class="container">

        <?php if ($page !== 'edit_siswa' && $page !== 'dashboard'): ?>
            <!-- ADMIN NAVIGATION -->

            <div class="admin-nav">

                <div class="menu">

                    <a
                        class="<?= $page === 'dashboard' ? 'active' : '' ?>"
                        href="../CONTROLLERS/c_admin.php?page=dashboard"
                        title="Dashboard"
                        style="padding:8px 12px; font-weight:700; color:#4a0e17;"
                    >
                        <img src="../assets/logo_dashboard.png" alt="Dashboard" style="width:24px;height:24px;object-fit:contain;display:block;">
                    </a>

                    <a
                        class="<?= $page === 'histori' ? 'active' : '' ?>"
                        href="../CONTROLLERS/c_admin.php?page=histori"
                        title="Histori Aspirasi"
                    >
                        <img src="../assets/historiaspirasi.png" alt="Histori Aspirasi">
                    </a>

                    <a
                        class="<?= $page === 'siswa' ? 'active' : '' ?>"
                        href="../CONTROLLERS/c_admin.php?page=siswa"
                        title="List Siswa"
                    >
                        <img src="../assets/datasiswa.png" alt="List Siswa">
                    </a>

                </div>

                <small>Admin Panel</small>

            </div>
        <?php endif; ?>

        <?php if ($page === 'dashboard'): ?>

            <div class="dashboard-hero">
                <div class="dashboard-hero-content">
                    <img class="dashboard-hero-logo" src="../assets/logo_sekolah.png" alt="Logo Sekolah">
                    <h2>Selamat datang di Pengaduan Sarana Prasarana</h2>
                    <h2>SMK Hunter x Hunter</h2>
                    <div class="dashboard-name">
                        <?= htmlspecialchars($_SESSION['nama_admin'] ?? 'Admin') ?>
                    </div>
                    <h3>Kelola data siswa dan pantau histori aspirasi secara mudah dan terorganisir</h3>
                </div>
            </div>

            <div class="dashboard-nav-grid">
                <a class="dashboard-link" href="../CONTROLLERS/c_admin.php?page=histori">
                    <img src="../assets/historiaspirasi.png" alt="Histori Aspirasi">
                    <span>Histori Aspirasi</span>
                </a>

                <a class="dashboard-link" href="../CONTROLLERS/c_admin.php?page=siswa">
                    <img src="../assets/datasiswa.png" alt="List Siswa">
                    <span>List Siswa</span>
                </a>
            </div>

        <?php elseif ($page === 'siswa' && $showAddForm): ?>

            <div class="card">
                <h3>Tambah Siswa</h3>

                <form action="../CONTROLLERS/c_siswa.php?aksi=tambah" method="POST" autocomplete="off">
                    <div class="form-group">
                        <label>NIS</label>
                        <input type="number" name="nis" placeholder="NIS" required autocomplete="off">
                    </div>

                    <div class="form-group">
                        <label>Nama Siswa</label>
                        <input type="text" name="nama_siswa" placeholder="Nama Siswa" required autocomplete="off">
                    </div>

                    <div class="form-group">
                        <label>Kelas</label>
                        <input type="text" name="kelas" placeholder="Kelas" required autocomplete="off">
                    </div>

                    <div class="form-group">
                        <label>Jurusan</label>
                        <input type="text" name="jurusan" placeholder="Jurusan" required autocomplete="off">
                    </div>

                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <select name="jenis_kelamin" required autocomplete="off">
                            <option value="L">L</option>
                            <option value="P">P</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" placeholder="Password" required autocomplete="new-password">
                    </div>

                    <div style="display:flex;gap:10px;align-items:center;flex-wrap:wrap;">
                        <button type="submit" class="btn-submit" style="width:auto;min-width:180px;">Tambah Siswa</button>
                        <a href="../CONTROLLERS/c_admin.php?page=siswa" class="btn-logout" style="display:inline-flex;align-items:center;justify-content:center;width:120px;height:40px;padding:0;">Batal</a>
                    </div>
                </form>
            </div>

        <?php elseif ($page === 'siswa'): ?>

            <div class="card">

                <h3>List Siswa</h3>

                <div style="margin-bottom:16px;">
                    <a href="../CONTROLLERS/c_admin.php?page=siswa&show_add=1" class="btn-logout" title="Tambah Siswa" style="display:inline-flex;align-items:center;justify-content:center;width:48px;height:48px;padding:0;">
                        <img src="../assets/tambah_datasiswa.png" alt="Tambah Siswa" style="width:24px;height:24px;object-fit:contain;display:block;filter:brightness(0) invert(1);">
                    </a>
                </div>

                <form method="GET" action="../CONTROLLERS/c_admin.php" style="margin-bottom:16px;">
                    <input type="hidden" name="page" value="siswa">
                    <div style="display:flex;gap:10px;align-items:center;flex-wrap:wrap;">
                        <input
                            type="text"
                            name="siswa_keyword"
                            value="<?= htmlspecialchars($siswaKeyword ?? '') ?>"
                            placeholder="Cari NIS, nama, kelas, jurusan..."
                            style="max-width:420px;"
                            autocomplete="off"
                        >
                        <button type="submit" class="btn-submit" title="Cari" style="width:auto;padding:10px 16px;display:inline-flex;align-items:center;justify-content:center;">
                            <img src="../assets/search_aspirasi.png" alt="Cari" style="width:24px;height:24px;object-fit:contain;display:block;filter:brightness(0) invert(1);">
                        </button>
                        <?php if (($siswaKeyword ?? '') !== ''): ?>
                            <a href="../CONTROLLERS/c_admin.php?page=siswa" class="btn-logout" style="display:inline-block;">Reset</a>
                        <?php endif; ?>
                    </div>
                </form>

                <div class="table-responsive">

                    <table class="table">

                        <thead>
                            <tr>
                                <th>NIS</th>
                                <th>Nama</th>
                                <th>Kelas</th>
                                <th>Jurusan</th>
                                <th>JK</th>
                                <th>Password</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>

                        <tbody>

                            <?php if (empty($list_siswa)): ?>

                                <tr>
                                    <td
                                        colspan="7"
                                        style="text-align:center;color:#888;padding:20px;"
                                    >
                                        Belum ada data siswa.
                                    </td>
                                </tr>

                            <?php else: ?>

                                <?php foreach ($list_siswa as $s): ?>

                                    <tr>

                                        <td>
                                            <?= htmlspecialchars($s['nis']) ?>
                                        </td>

                                        <td>
                                            <?= htmlspecialchars($s['nama_siswa']) ?>
                                        </td>

                                        <td>
                                            <?= htmlspecialchars($s['kelas']) ?>
                                        </td>

                                        <td>
                                            <?= htmlspecialchars($s['jurusan']) ?>
                                        </td>

                                        <td>
                                            <?= htmlspecialchars($s['jenis_kelamin']) ?>
                                        </td>

                                        <td>
                                            <?= htmlspecialchars($s['password']) ?>
                                        </td>

                                        <td>

                                            <a
                                                href="../CONTROLLERS/c_siswa.php?aksi=edit&nis=<?= urlencode($s['nis']) ?>"
                                                title="Edit Siswa"
                                                style="display:inline-flex;align-items:center;justify-content:center;width:28px;height:28px;border-radius:8px;background:#fdf4f5;border:1px solid #f0d7dd;"
                                            >
                                                <img src="../assets/edit_datasiswa.png" alt="Edit Siswa" style="width:18px;height:18px;object-fit:contain;display:block;">
                                            </a>

                                            <a
                                                href="../CONTROLLERS/c_siswa.php?aksi=hapus&nis=<?= urlencode($s['nis']) ?>"
                                                onclick="return confirm('Hapus siswa ini?')"
                                                title="Hapus Siswa"
                                                style="display:inline-flex;align-items:center;justify-content:center;width:28px;height:28px;border-radius:8px;background:#fdf4f5;border:1px solid #f0d7dd;"
                                            >
                                                <img src="../assets/hapus_datasiswa.png" alt="Hapus Siswa" style="width:18px;height:18px;object-fit:contain;display:block;">
                                            </a>

                                        </td>

                                    </tr>

                                <?php endforeach; ?>

                            <?php endif; ?>

                        </tbody>

                    </table>

                </div>

                <div class="pagination" style="margin-top:14px;display:flex;gap:8px;align-items:center;flex-wrap:wrap;">
                    <?php if ($siswaPage > 1): ?>
                        <a class="btn-logout" href="../CONTROLLERS/c_admin.php?page=siswa&siswa_page=<?= (int)($siswaPage - 1) ?>">Sebelumnya</a>
                    <?php endif; ?>

                    <?php for ($i = 1; $i <= $totalSiswaPages; $i++): ?>
                        <a class="btn-logout" style="<?= $i === $siswaPage ? 'background:#6b1d2f;color:#fff;' : '' ?>" href="../CONTROLLERS/c_admin.php?page=siswa&siswa_page=<?= $i ?>"><?= $i ?></a>
                    <?php endfor; ?>

                    <?php if ($siswaPage < $totalSiswaPages): ?>
                        <a class="btn-logout" href="../CONTROLLERS/c_admin.php?page=siswa&siswa_page=<?= (int)($siswaPage + 1) ?>">Berikutnya</a>
                    <?php endif; ?>
                </div>

            </div>

        <?php elseif ($page === 'edit_siswa'): ?>

            <div class="card">

                <h3>Edit Siswa</h3>

                <form
                    action="../CONTROLLERS/c_siswa.php?aksi=update"
                    method="POST"
                    autocomplete="off"
                >

                    <?php if ($page === 'edit_siswa' && !empty($editing_siswa)): ?>
                        <input type="hidden" name="nis_lama" value="<?= htmlspecialchars($editing_siswa['nis'] ?? '') ?>">
                    <?php endif; ?>

                    <div class="form-group">
                        <label>NIS</label>

                        <input
                            type="number"
                            name="nis"
                            placeholder="NIS"
                            value="<?= htmlspecialchars($editing_siswa['nis'] ?? '') ?>"
                            required
                            autocomplete="off"
                        >
                    </div>

                    <div class="form-group">
                        <label>Nama Siswa</label>

                        <input
                            type="text"
                            name="nama_siswa"
                            placeholder="Nama Siswa"
                            value="<?= htmlspecialchars($editing_siswa['nama_siswa'] ?? '') ?>"
                            required
                            autocomplete="off"
                        >
                    </div>

                    <div class="form-group">
                        <label>Kelas</label>

                        <input
                            type="text"
                            name="kelas"
                            placeholder="Kelas"
                            value="<?= htmlspecialchars($editing_siswa['kelas'] ?? '') ?>"
                            required
                            autocomplete="off"
                        >
                    </div>

                    <div class="form-group">
                        <label>Jurusan</label>

                        <input
                            type="text"
                            name="jurusan"
                            placeholder="Jurusan"
                            value="<?= htmlspecialchars($editing_siswa['jurusan'] ?? '') ?>"
                            required
                            autocomplete="off"
                        >
                    </div>

                    <div class="form-group">
                        <label>Jenis Kelamin</label>

                        <select
                            name="jenis_kelamin"
                            required
                            autocomplete="off"
                        >
                            <option value="L" <?= ($page === 'edit_siswa' && ($editing_siswa['jenis_kelamin'] ?? '') === 'L') ? 'selected' : '' ?>>L</option>
                            <option value="P" <?= ($page === 'edit_siswa' && ($editing_siswa['jenis_kelamin'] ?? '') === 'P') ? 'selected' : '' ?>>P</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Password</label>

                        <input
                            type="password"
                            name="password"
                            placeholder="Password"
                            value="<?= htmlspecialchars($editing_siswa['password'] ?? '') ?>"
                            required
                            autocomplete="new-password"
                        >
                    </div>

                    <button type="submit" class="btn-submit">
                        Simpan Perubahan
                    </button>

                </form>

            </div>

        <?php else: ?>

            <div class="card">

                <h3>Histori Aspirasi Siswa</h3>

                <div class="table-responsive">

                    <table class="table">

                        <thead>

                            <tr>
                                <th>Tanggal</th>
                                <th>Siswa</th>
                                <th>Kategori</th>
                                <th>Lokasi</th>
                                <th>Keterangan</th>
                                <th>Status</th>
                                <th>Feedback</th>
                                <th>Aksi</th>
                            </tr>

                        </thead>

                        <tbody>

                            <?php if (empty($list_aspirasi)): ?>

                                <tr>

                                    <td
                                        colspan="8"
                                        style="text-align:center;color:#888;padding:20px;"
                                    >
                                        Belum ada pengaduan.
                                    </td>

                                </tr>

                            <?php else: ?>

                                <?php foreach ($list_aspirasi as $row): ?>

                                    <?php
                                    $badgeClass = 'badge-menunggu';

                                    if (($row['status'] ?? '') === 'Proses') {
                                        $badgeClass = 'badge-proses';
                                    }

                                    if (($row['status'] ?? '') === 'Selesai') {
                                        $badgeClass = 'badge-selesai';
                                    }
                                    ?>

                                    <tr>

                                        <td>
                                            <small>
                                                <?= date(
                                                    'd/m/Y H:i',
                                                    strtotime($row['tgl_pelaporan'])
                                                ) ?>
                                            </small>
                                        </td>

                                        <td>

                                            <strong>
                                                <?= htmlspecialchars(
                                                    $row['nama_siswa'] ?? '-'
                                                ) ?>
                                            </strong>

                                            <br>

                                            <small>
                                                <?= htmlspecialchars(
                                                    $row['kelas'] ?? '-'
                                                ) ?>
                                            </small>

                                        </td>

                                        <td>
                                            <?= htmlspecialchars(
                                                $row['ket_kategori'] ?? '-'
                                            ) ?>
                                        </td>

                                        <td>
                                            <?= htmlspecialchars(
                                                $row['lokasi'] ?? '-'
                                            ) ?>
                                        </td>

                                        <td>
                                            <?= htmlspecialchars(
                                                $row['ket'] ?? '-'
                                            ) ?>
                                        </td>

                                        <td>

                                            <span class="badge <?= $badgeClass ?>">
                                                <?= htmlspecialchars(
                                                    $row['status'] ?? 'Menunggu'
                                                ) ?>
                                            </span>

                                        </td>

                                        <td>

                                            <form
                                                action="../CONTROLLERS/c_aspirasi.php?aksi=update_status_feedback"
                                                method="POST"
                                            >

                                                <input
                                                    type="hidden"
                                                    name="id_input"
                                                    value="<?= htmlspecialchars($row['id_input']) ?>"
                                                >


                                                <select
                                                    class="status-select"
                                                    name="status"
                                                    required
                                                >

                                                    <option
                                                        value="Menunggu"
                                                        <?= (($row['status'] ?? 'Menunggu') === 'Menunggu')
                                                            ? 'selected'
                                                            : '' ?>
                                                    >
                                                        Menunggu
                                                    </option>

                                                    <option
                                                        value="Proses"
                                                        <?= (($row['status'] ?? '') === 'Proses')
                                                            ? 'selected'
                                                            : '' ?>
                                                    >
                                                        Proses
                                                    </option>

                                                    <option
                                                        value="Selesai"
                                                        <?= (($row['status'] ?? '') === 'Selesai')
                                                            ? 'selected'
                                                            : '' ?>
                                                    >
                                                        Selesai
                                                    </option>

                                                </select>


                                                <textarea
                                                    class="feedback-text"
                                                    name="feedback"
                                                    placeholder="Feedback admin"
                                                ><?= htmlspecialchars($row['feedback'] ?? '') ?></textarea>


                                                <button
                                                    class="save-btn"
                                                    type="submit"
                                                    title="Simpan"
                                                >
                                                    <img src="../assets/save_historiaspirasi.png" alt="Simpan">
                                                </button>

                                            </form>

                                        </td>

                                        <td></td>

                                    </tr>

                                <?php endforeach; ?>

                            <?php endif; ?>

                        </tbody>

                    </table>

                </div>

                <div class="pagination" style="margin-top:14px;display:flex;gap:8px;align-items:center;flex-wrap:wrap;">
                    <?php if ($aspirasiPage > 1): ?>
                        <a class="btn-logout" href="../CONTROLLERS/c_admin.php?page=histori&aspirasi_page=<?= (int)($aspirasiPage - 1) ?>">Sebelumnya</a>
                    <?php endif; ?>

                    <?php for ($i = 1; $i <= $totalAspirasiPages; $i++): ?>
                        <a class="btn-logout" style="<?= $i === $aspirasiPage ? 'background:#6b1d2f;color:#fff;' : '' ?>" href="../CONTROLLERS/c_admin.php?page=histori&aspirasi_page=<?= $i ?>"><?= $i ?></a>
                    <?php endfor; ?>

                    <?php if ($aspirasiPage < $totalAspirasiPages): ?>
                        <a class="btn-logout" href="../CONTROLLERS/c_admin.php?page=histori&aspirasi_page=<?= (int)($aspirasiPage + 1) ?>">Berikutnya</a>
                    <?php endif; ?>
                </div>

            </div>

        <?php endif; ?>

    </div>

</body>

</html>