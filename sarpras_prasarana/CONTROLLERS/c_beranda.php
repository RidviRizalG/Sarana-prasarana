<?php
session_start();
require_once '../MODELS/m_koneksi.php';
require_once '../MODELS/m_aspirasi.php';

if (!isset($_SESSION['nis'])) {
    header("Location: ../VIEWS/v_login.php");
    exit();
}

$modelAspirasi = new M_Aspirasi($conn);
$list_kategori = $modelAspirasi->getKategori();

$nis = $_SESSION['nis'];
$nama_siswa = $_SESSION['nama_siswa'] ?? 'Siswa';
$kelas = $_SESSION['kelas'] ?? '-';
$list_aspirasi = $modelAspirasi->getAspirasiByNis($nis);

require_once '../VIEWS/v_beranda.php';
?>