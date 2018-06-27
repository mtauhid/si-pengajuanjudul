-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Jun 2018 pada 14.51
-- Versi server: 10.1.30-MariaDB
-- Versi PHP: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pengajuanjudulta`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_deadline`
--

CREATE TABLE `tb_deadline` (
  `id_deadline` int(11) NOT NULL,
  `nama_deadline` varchar(50) NOT NULL,
  `tanggal_awal` date NOT NULL,
  `tanggal_akhir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_deadline`
--

INSERT INTO `tb_deadline` (`id_deadline`, `nama_deadline`, `tanggal_awal`, `tanggal_akhir`) VALUES
(1, 'Pengajuan Judul Tugas Akhir', '2018-06-27', '2018-06-30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_dosen`
--

CREATE TABLE `tb_dosen` (
  `nip` varchar(30) NOT NULL,
  `id_user` varchar(30) NOT NULL,
  `nama_dosen` varchar(45) NOT NULL,
  `prodi_dosen` varchar(3) NOT NULL,
  `level_dosen` varchar(20) NOT NULL,
  `kuota` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_dosen`
--

INSERT INTO `tb_dosen` (`nip`, `id_user`, `nama_dosen`, `prodi_dosen`, `level_dosen`, `kuota`) VALUES
('197104082001121003', '197104082001121003', 'Wahyu Kurnia Dewanto, S.Kom, MT			', '', '', 7),
('197110092003121001', '197110092003121001', 'Denny Trias Utomo, S,Si, MT		', 'TKK', 'Dosen', 0),
('197111151998021001', '197111151998021001', 'Adi Heru Utomo, S.Kom, M.Kom			', 'MIF', 'Dosen', 0),
('197709292005011003', '', 'Didit Rahmat hartadi, S.Kom ,MT			', 'MIF', 'Dosen', 0),
('197808162005011002', '', 'Beni Widiawan, S.ST, MT		', 'TKK', 'Dosen', 0),
('197808172003121005', '', 'Agus Hariyanto ST, M.Kom		', 'TKK', 'Dosen', 0),
('197808192005022001', '', 'Ika Widiastuti, S.ST , MT		', 'MIF', 'Dosen', 0),
('197809082005011001', '', 'Denny Wijanarko, ST,MT		', 'TKK', 'Dosen', 0),
('197907032003121001', '', 'Surateno, S.Kom, M.Kom		', 'TKK', 'Dosen', 0),
('198005172008121002', '', 'Dwi Putro Sarwo S., S.Kom, M.Kom			', 'MIF', 'Reviewer', 0),
('198101152005011011', '', 'Nurul Zainal Fanani, S.ST, MT		', 'TKK', 'Dosen', 0),
('198106152006041002', '', 'Syamsul Arifin, S.Kom., M.Cs.		', 'MIF', 'Reviewer', 0),
('198301092017031001', '', 'Hermawan Arif S.T.,MT.		', 'MIF', 'Reviewer', 0),
('198302032006041003', '', 'Hendra Yufit Riskiawan, S.Kom, M.Cs			', 'MIF', 'Dosen', 0),
('198406252015041004', '', 'Bekti Maryuni S., S.Pd, M.Kom		', 'TKK', 'Dosen', 0),
('198511282008121002', '', 'Aji Seto Arfianto, S.ST, MT		', 'TIF', 'Dosen', 0),
('198603192014031001', '', 'Fendik Eko Purnomo, S.Pd , MT		', 'TKK', 'Dosen', 0),
('198606092008122004', '', 'Nanik Anita M., S.ST, MT		', 'MIF', 'Dosen', 0),
('198807022016101001', '', 'Husin, S.Kom., M.MT.		', 'MIF', 'Dosen', 0),
('198903292015031001', '', 'Taufiq Rizaldi S, ST,MT		', 'MIF', 'Koordinator', 0),
('198907102015091001', '', 'Ery Setiawan Julev Atmaji, S.Kom, M.Cs			', 'TKK', 'Dosen', 0),
('199002272015032001', '', 'Trismayanti Dwi P, S.Kom, M,Cs			', 'TIF', 'Dosen', 0),
('78787897', '', 'jkjj', 'TIF', 'REVIEWER', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_judul`
--

CREATE TABLE `tb_judul` (
  `id_judul` int(10) NOT NULL,
  `nip` varchar(10) NOT NULL,
  `nim` varchar(10) NOT NULL,
  `nama_judul` text NOT NULL,
  `ringkasan` text NOT NULL,
  `pembagian_tugas` text NOT NULL,
  `pengerjaan` varchar(10) NOT NULL,
  `status` varchar(15) NOT NULL,
  `komentar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_mahasiswa`
--

CREATE TABLE `tb_mahasiswa` (
  `nim` varchar(10) NOT NULL,
  `nama_mahasiswa` varchar(35) NOT NULL,
  `prodi_mahasiswa` varchar(5) NOT NULL,
  `gol_mahasiswa` varchar(1) NOT NULL,
  `semester` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_mahasiswa`
--

INSERT INTO `tb_mahasiswa` (`nim`, `nama_mahasiswa`, `prodi_mahasiswa`, `gol_mahasiswa`, `semester`) VALUES
('7676767', 'kk', 'MIF', 'A', '8'),
('76786786', 'jj', 'MIF', 'A', ''),
('E31160690', 'Zainal Abidin', 'MIF', 'B', '4');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_rekomendasijudul`
--

CREATE TABLE `tb_rekomendasijudul` (
  `id_judul` int(15) NOT NULL,
  `nip` int(20) NOT NULL,
  `nama_judul` text NOT NULL,
  `kuota` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_rekomendasijudul`
--

INSERT INTO `tb_rekomendasijudul` (`id_judul`, `nip`, `nama_judul`, `kuota`) VALUES
(1006, 2147483647, 'AUGMENED REALITY', '2'),
(1007, 2147483647, 'PERANCANGAN DRONE UNTUK PENYIRAMAN TANAMANA', '5'),
(1010, 2147483647, 'Sistem informasi', '2'),
(1011, 2147483647, 'Sistem informasi WEB', '3'),
(1012, 2147483647, 'PERANCANGAN DRONE UNTUK PENYIRAMAN TANAMANA', '3'),
(1013, 2147483647, 'Sistem informasi WEB', '3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_review`
--

CREATE TABLE `tb_review` (
  `id_review` varchar(10) NOT NULL,
  `id_dosen` varchar(10) NOT NULL,
  `id_mahasiswa` varchar(10) NOT NULL,
  `id_judul` varchar(10) NOT NULL,
  `catatan` text NOT NULL,
  `status` varchar(15) NOT NULL,
  `tgl_review` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_users`
--

CREATE TABLE `tb_users` (
  `id_user` varchar(30) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `prodi` varchar(5) NOT NULL,
  `golongan` varchar(5) NOT NULL,
  `semester` int(2) NOT NULL,
  `password` text,
  `level` varchar(20) DEFAULT NULL,
  `active` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_users`
--

INSERT INTO `tb_users` (`id_user`, `nama`, `prodi`, `golongan`, `semester`, `password`, `level`, `active`) VALUES
('197104082001121003', '', '', '', 0, 'ce28eed1511f631af6b2a7bb0a85d636', 'Dosen', 1),
('19778787121003', 'Taufik', 'MIF', 'B', 0, '6620a171fdf7ec04d322421994858c21', 'Mahasiswa', 1),
('198903292015031001', '', '', '', 0, 'ce28eed1511f631af6b2a7bb0a85d636', 'Koordinator', 1),
('admin', '3878', 'MIF', 'B', 0, 'd4305d7ed2ec97107cd6eb8dd4b6f6b7', 'Mahasiswa', 1),
('E31160690', 'Zainal Abidin', 'MIF', 'B', 4, '5486718b3496396344b004e2fb6eabda', 'Mahasiswa', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_deadline`
--
ALTER TABLE `tb_deadline`
  ADD PRIMARY KEY (`id_deadline`);

--
-- Indeks untuk tabel `tb_dosen`
--
ALTER TABLE `tb_dosen`
  ADD PRIMARY KEY (`nip`);

--
-- Indeks untuk tabel `tb_judul`
--
ALTER TABLE `tb_judul`
  ADD PRIMARY KEY (`id_judul`);

--
-- Indeks untuk tabel `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- Indeks untuk tabel `tb_rekomendasijudul`
--
ALTER TABLE `tb_rekomendasijudul`
  ADD PRIMARY KEY (`id_judul`);

--
-- Indeks untuk tabel `tb_review`
--
ALTER TABLE `tb_review`
  ADD PRIMARY KEY (`id_review`);

--
-- Indeks untuk tabel `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_judul`
--
ALTER TABLE `tb_judul`
  MODIFY `id_judul` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_rekomendasijudul`
--
ALTER TABLE `tb_rekomendasijudul`
  MODIFY `id_judul` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1014;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
