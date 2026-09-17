```php
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Beranda - Pengaduan Sarana Prasarana</title>

    <style>

        * {
            box-sizing: border-box;
        }

        body {
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #fce8ec, #f7d4dc);
            color: #4a0e17;
            margin: 0;
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
            align-items: center;
            justify-content: center;

            font-size: 24px;
        }

        .user-info {
            display: flex;
            align-items: center;
            gap: 16px;

            font-size: 14px;
        }

        .user-info .role-name {
            font-weight: 700;
        }

        .btn-logout {
            background: #a02030;
            color: white;

            padding: 8px 16px;
            border-radius: 8px;

            font-weight: bold;
            text-decoration: none;

            transition: 0.2s;
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
            background: white;

            border-radius: 16px;
            padding: 12px 16px;
            margin-bottom: 16px;

            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 14px;

            box-shadow: 0 10px 30px rgba(128, 0, 0, 0.1);
        }

        .admin-nav .menu {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .admin-nav .menu a {
            text-decoration: none;

            background: #fdf4f5;
            color: #6b1d2f;

            font-weight: 700;

            padding: 10px 16px;
            border-radius: 12px;

            border: 1px solid #f3cbd3;

            transition: 0.2s;
        }

        .admin-nav .menu a.active,
        .admin-nav .menu a:hover {
            background: #800000;
            color: white;
        }

        .logo-link {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .card {
            background: white;

            padding: 24px;
            border-radius: 14px;

            border-top: 6px solid #800000;

            box-shadow: 0 10px 30px rgba(128, 0, 0, 0.1);
        }

        .card h3 {
            margin: 0 0 20px;

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
            padding: 7px 12px;

            border-radius: 8px;

            background: #800000;
            color: white;

            border: none;

            font-weight: bold;
            cursor: pointer;

            transition: 0.2s;
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
    $isAdmin = (($_SESSION['role'] ?? 'siswa') === 'admin');
    $page = $_GET['page'] ?? ($isAdmin ? 'histori' : 'form');
    ?>

    <div class="navbar">

        <div class="brand">
            <img class="logo" src="../assets/logo_sekolah.png" alt="Logo Sekolah">
            <span>Aplikasi Pengaduan Sarpras</span>
        </div>

        <div class="user-info">

            <?php if ($isAdmin): ?>

                <span class="role-name">
                    Admin:
                    <?= htmlspecialchars($nama_siswa) ?>
                </span>

                <small>
                    (<?= htmlspecialchars($kelas) ?>)
                </small>

            <?php else: ?>

                <span class="role-name">
                    Siswa:
                    <?= htmlspecialchars($nama_siswa) ?>
                </span>

                <small>
                    (<?= htmlspecialchars($kelas) ?>)
                </small>

            <?php endif; ?>

            <a
                class="btn-logout"
                href="../CONTROLLERS/c_logout.php"
            >
                Logout
            </a>

        </div>

    </div>

    <div class="container">

        <?php if ($isAdmin): ?>

            <div class="admin-nav">

                <div class="menu">

                    <a
                        class="logo-link"
                        href="../CONTROLLERS/c_beranda.php?page=histori"
                    >
                        <img
                            class="logo"
                            src="../assets/logo_sekolah.png"
                            alt="Logo Sekolah"
                            style="width:34px;height:34px;object-fit:contain;display:block;"
                        >
                    </a>

                    <a
                        class="<?= $page === 'histori' ? 'active' : '' ?>"
                        href="../CONTROLLERS/c_beranda.php?page=histori"
                    >
                        Histori Aspirasi
                    </a>

                    <a
                        class="<?= $page === 'siswa' ? 'active' : '' ?>"
                        href="../CONTROLLERS/c_beranda.php?page=siswa"
                    >
                        CRUD Siswa
                    </a>

                </div>

                <small>Admin Panel</small>

            </div>

            <?php if ($page === 'siswa'): ?>

                <div class="card">

                    <h3>CRUD Siswa</h3>

                    <div class="grid-layout">

                        <div
                            class="card"
                            style="border-top:0; box-shadow:none;"
                        >

                            <h3>
                                Tambah Siswa
                            </h3>

                            <form
                                action="../CONTROLLERS/c_siswa.php?aksi=tambah"
                                method="POST"
                                autocomplete="off"
                            >

                                <div class="form-group">

                                    <label>NIS</label>

                                    <input
                                        type="number"
                                        name="nis"
                                        placeholder="NIS"
                                        required
                                    >

                                </div>


                                <div class="form-group">

                                    <label>Nama Siswa</label>

                                    <input
                                        type="text"
                                        name="nama_siswa"
                                        placeholder="Nama Siswa"
                                        required
                                    >

                                </div>


                                <div class="form-group">

                                    <label>Kelas</label>

                                    <input
                                        type="text"
                                        name="kelas"
                                        placeholder="Kelas"
                                        required
                                    >

                                </div>


                                <div class="form-group">

                                    <label>Jurusan</label>

                                    <input
                                        type="text"
                                        name="jurusan"
                                        placeholder="Jurusan"
                                        required
                                    >

                                </div>


                                <div class="form-group">

                                    <label>Jenis Kelamin</label>

                                    <select
                                        name="jenis_kelamin"
                                        required
                                    >

                                        <option value="L">L</option>
                                        <option value="P">P</option>

                                    </select>

                                </div>


                                <div class="form-group">

                                    <label>Password</label>

                                    <input
                                        type="password"
                                        name="password"
                                        placeholder="Password"
                                        required
                                    >

                                </div>


                                <button
                                    type="submit"
                                    class="btn-submit"
                                >
                                    Tambah Siswa
                                </button>

                            </form>

                        </div>

                        <div class="card">

                            <h3>Daftar Siswa</h3>

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
                                                        >
                                                            Edit
                                                        </a>

                                                        |

                                                        <a
                                                            href="../CONTROLLERS/c_siswa.php?aksi=hapus&nis=<?= urlencode($s['nis']) ?>"
                                                            onclick="return confirm('Hapus siswa ini?')"
                                                        >
                                                            Hapus
                                                        </a>

                                                    </td>

                                                </tr>

                                            <?php endforeach; ?>

                                        <?php endif; ?>

                                    </tbody>

                                </table>

                            </div>

                        </div>

                    </div>

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


                                            <!-- STATUS -->

                                            <td>

                                                <span class="badge <?= $badgeClass ?>">
                                                    <?= htmlspecialchars(
                                                        $row['status'] ?? 'Menunggu'
                                                    ) ?>
                                                </span>

                                            </td>


                                            <!-- FEEDBACK -->

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
                                                    >
                                                        Save
                                                    </button>

                                                </form>

                                            </td>


                                            <!-- AKSI -->

                                            <td></td>

                                        </tr>

                                    <?php endforeach; ?>

                                <?php endif; ?>

                            </tbody>

                        </table>

                    </div>

                </div>

            <?php endif; ?>


        <?php else: ?>

            <!-- =================================================
                 HALAMAN SISWA
            ================================================== -->

            <div class="card" style="margin-bottom:16px;">
                <h3>Selamat datang di Aplikasi Pengaduan Sarana dan Prasarana</h3>
                <p style="margin-top:8px;color:#6b1d2f;">
                    Silakan pilih menu di bawah untuk mengajukan pengaduan atau melihat histori pengaduan Anda.
                </p>

                <div class="admin-nav" style="margin-top:14px;">
                    <div class="menu">
                        <a class="<?= ($page ?? 'form') === 'form' ? 'active' : '' ?>" href="../CONTROLLERS/c_beranda.php?page=form">
                            Lakukan Pengaduan
                        </a>
                        <a class="<?= ($page ?? 'form') === 'histori' ? 'active' : '' ?>" href="../CONTROLLERS/c_beranda.php?page=histori">
                            Histori Pengaduan
                        </a>
                    </div>
                </div>
            </div>

            <?php if (($page ?? 'form') === 'form'): ?>

                <div class="grid-layout">

                    <!-- FORM PENGADUAN -->

                    <div class="card">

                        <h3>Form Pengaduan</h3>

                        <form
                            action="../CONTROLLERS/c_aspirasi.php?aksi=tambah"
                            method="POST"
                            autocomplete="off"
                        >

                            <div class="form-group">

                                <label>Kategori Sarpras</label>

                                <select
                                    name="id_kategori"
                                    required
                                >

                                    <option value="">
                                        -- Pilih Kategori --
                                    </option>

                                    <?php foreach ($list_kategori as $kat): ?>

                                        <option
                                            value="<?= $kat['id_kategori'] ?>"
                                        >
                                            <?= htmlspecialchars($kat['ket_kategori']) ?>
                                        </option>

                                    <?php endforeach; ?>

                                </select>

                            </div>


                            <div class="form-group">

                                <label>Lokasi Sarpras</label>

                                <input
                                    type="text"
                                    name="lokasi"
                                    placeholder="Contoh: Ruang XII RPL 1, Lab Komputer"
                                    required
                                >

                            </div>


                            <div class="form-group">

                                <label>Keterangan Pengaduan</label>

                                <textarea
                                    name="ket"
                                    rows="4"
                                    placeholder="Jelaskan detail kerusakan/masalah..."
                                    required
                                ></textarea>

                            </div>


                            <button
                                type="submit"
                                class="btn-submit"
                            >
                                Kirim Pengaduan
                            </button>

                        </form>

                    </div>

                    <div class="card">
                        <h3>Catatan</h3>
                        <p style="color:#6b1d2f;">
                            Gunakan form pengaduan ini untuk mengirim laporan kerusakan atau kebutuhan sarana prasarana.
                        </p>
                    </div>

                </div>

            <?php else: ?>

                <div class="card">

                    <h3>Histori Pengaduan Anda</h3>

                    <div class="table-responsive">

                        <table class="table">

                            <thead>

                                <tr>
                                    <th>Tgl / Kategori</th>
                                    <th>Lokasi & Detail</th>
                                    <th>Status</th>
                                    <th>Umpan Balik (Feedback)</th>
                                </tr>

                            </thead>

                            <tbody>

                                <?php if (empty($list_aspirasi)): ?>

                                    <tr>

                                        <td
                                            colspan="4"
                                            style="text-align:center;color:#888;padding:20px;"
                                        >
                                            Belum ada pengaduan yang disampaikan.
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

                                            <!-- TANGGAL & KATEGORI -->

                                            <td>

                                                <small
                                                    style="color:#800000;font-weight:600;"
                                                >
                                                    <?= date(
                                                        'd/m/Y H:i',
                                                        strtotime($row['tgl_pelaporan'])
                                                    ) ?>
                                                </small>

                                                <br>

                                                <strong>
                                                    <?= htmlspecialchars(
                                                        $row['ket_kategori']
                                                    ) ?>
                                                </strong>

                                            </td>


                                            <!-- LOKASI & KETERANGAN -->

                                            <td>

                                                <strong>
                                                    <?= htmlspecialchars(
                                                        $row['lokasi']
                                                    ) ?>
                                                </strong>

                                                <br>

                                                <span
                                                    style="color:#666;font-size:13px;"
                                                >
                                                    <?= htmlspecialchars(
                                                        $row['ket']
                                                    ) ?>
                                                </span>

                                            </td>

                                            <td>

                                                <span class="badge <?= $badgeClass ?>">
                                                    <?= htmlspecialchars(
                                                        $row['status'] ?? 'Menunggu'
                                                    ) ?>
                                                </span>

                                            </td>

                                            <td>

                                                <?php if (!empty($row['feedback'])): ?>

                                                    <?= htmlspecialchars($row['feedback']) ?>

                                                <?php else: ?>

                                                    <em style="color:#aaa;">
                                                        Belum ada tanggapan
                                                    </em>

                                                <?php endif; ?>

                                            </td>

                                        </tr>

                                    <?php endforeach; ?>

                                <?php endif; ?>

                            </tbody>

                        </table>

                    </div>

                </div>

            <?php endif; ?>

        <?php endif; ?>

    </div>

</body>

</html>