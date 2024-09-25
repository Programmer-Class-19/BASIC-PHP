-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 01 Jul 2020 pada 04.58
-- Versi Server: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbujianonline`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id` int(11) NOT NULL,
  `nama_user` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `nama_user`, `username`, `password`) VALUES
(1, 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_guru`
--

CREATE TABLE `tb_guru` (
  `id_guru` int(11) NOT NULL,
  `nama_guru` varchar(50) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_guru`
--

INSERT INTO `tb_guru` (`id_guru`, `nama_guru`, `username`, `password`) VALUES
(123678459, 'ismail soleh', 'mail', '123456'),
(1234567890, 'Dede Iwan Hermawan', 'dede', '123456'),
(2147483647, 'Fajar Hikmal', 'jayous', '123456');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jawaban`
--

CREATE TABLE `tb_jawaban` (
  `id_jawaban` int(5) NOT NULL,
  `id_peserta` int(5) NOT NULL,
  `id_soal_ujian` int(5) NOT NULL,
  `jawaban` varchar(15) NOT NULL,
  `skor` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_jawaban`
--

INSERT INTO `tb_jawaban` (`id_jawaban`, `id_peserta`, `id_soal_ujian`, `jawaban`, `skor`) VALUES
(1, 2, 1, 'A', '1'),
(2, 2, 1, 'A', '1'),
(3, 2, 1, 'A', '1'),
(4, 7, 1, 'A', '1'),
(5, 7, 2, 'B', '0'),
(6, 9, 1, 'D', '0'),
(7, 10, 1, 'C', '1'),
(8, 10, 2, 'A', '1'),
(9, 13, 7, 'A', '1'),
(10, 13, 6, 'B', '0'),
(11, 15, 7, 'A', '1'),
(12, 15, 8, 'D', '1'),
(13, 15, 6, 'A', '1'),
(14, 17, 9, 'A', '1'),
(15, 17, 8, 'D', '1'),
(16, 17, 7, 'A', '1'),
(17, 17, 6, 'E', '0'),
(18, 14, 8, 'E', '0'),
(19, 14, 6, 'E', '0'),
(20, 14, 7, 'A', '1'),
(21, 14, 9, 'E', '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jenis_ujian`
--

CREATE TABLE `tb_jenis_ujian` (
  `id_jenis_ujian` int(11) NOT NULL,
  `jenis_ujian` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_jenis_ujian`
--

INSERT INTO `tb_jenis_ujian` (`id_jenis_ujian`, `jenis_ujian`) VALUES
(1, 'UTS Ganjil '),
(3, 'UAS Genap');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kelas`
--

CREATE TABLE `tb_kelas` (
  `id_kelas` int(11) NOT NULL,
  `nama_kelas` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kelas`
--

INSERT INTO `tb_kelas` (`id_kelas`, `nama_kelas`) VALUES
(1, '7A'),
(2, '7B'),
(3, '8A'),
(4, '8B'),
(5, '9A'),
(6, '9B');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_matapelajaran`
--

CREATE TABLE `tb_matapelajaran` (
  `id_matapelajaran` int(11) NOT NULL,
  `kode_matapelajaran` varchar(10) NOT NULL,
  `nama_matapelajaran` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_matapelajaran`
--

INSERT INTO `tb_matapelajaran` (`id_matapelajaran`, `kode_matapelajaran`, `nama_matapelajaran`) VALUES
(17, '071', 'Bahasa Indonesia'),
(18, '072', 'Matematika'),
(19, '073', 'Bahasa Inggris'),
(20, '081', 'Bahasa Indonesia'),
(21, '082', 'Matematika'),
(22, '083', 'Matematika'),
(23, '091', 'Bahasa Indonesia'),
(24, '092', 'Matematika'),
(25, '093', 'Bahasa Inggris');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_peserta`
--

CREATE TABLE `tb_peserta` (
  `id_peserta` int(11) NOT NULL,
  `id_matapelajaran` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `id_jenis_ujian` int(11) NOT NULL,
  `tanggal_ujian` date NOT NULL,
  `jam_ujian` time NOT NULL,
  `durasi_ujian` int(11) NOT NULL,
  `timer_ujian` int(11) NOT NULL,
  `status_ujian` tinyint(1) NOT NULL,
  `status_ujian_ujian` int(11) NOT NULL,
  `benar` varchar(20) NOT NULL,
  `salah` varchar(20) NOT NULL,
  `nilai` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_peserta`
--

INSERT INTO `tb_peserta` (`id_peserta`, `id_matapelajaran`, `id_siswa`, `id_jenis_ujian`, `tanggal_ujian`, `jam_ujian`, `durasi_ujian`, `timer_ujian`, `status_ujian`, `status_ujian_ujian`, `benar`, `salah`, `nilai`) VALUES
(2, 6, 39, 1, '2020-05-02', '09:05:00', 10, 600, 2, 2, '3', '0', '100'),
(4, 6, 40, 1, '2020-05-03', '16:30:00', 5, 300, 1, 0, '', '', ''),
(5, 6, 41, 1, '2020-05-03', '17:45:00', 2, 120, 1, 0, '', '', ''),
(7, 6, 38, 1, '2020-05-05', '06:30:00', 2, 120, 2, 2, '1', '1', '50'),
(8, 6, 2, 1, '2020-06-13', '15:46:00', 5, 300, 2, 2, '0', '0', '0'),
(9, 6, 3, 1, '2020-06-13', '15:49:00', 5, 300, 2, 2, '0', '1', '0'),
(10, 6, 5, 1, '2020-06-17', '21:30:00', 10, 600, 2, 2, '2', '0', '100'),
(11, 6, 6, 1, '2020-06-23', '21:45:00', 3, 180, 1, 0, '', '', ''),
(12, 8, 7, 3, '2020-06-24', '07:15:00', 10, 600, 1, 0, '', '', ''),
(13, 8, 8, 1, '2020-06-27', '15:15:00', 10, 600, 2, 2, '1', '1', '50'),
(14, 8, 5, 1, '2020-06-29', '09:30:00', 10, 600, 2, 2, '1', '3', '25'),
(15, 8, 9, 1, '2020-06-28', '17:30:00', 10, 600, 2, 2, '3', '0', '100'),
(16, 8, 7, 3, '2020-06-28', '20:20:00', 10, 600, 1, 0, '', '', ''),
(17, 8, 10, 3, '2020-06-28', '20:20:00', 10, 600, 2, 2, '3', '1', '75'),
(18, 8, 5, 1, '2020-06-29', '09:30:00', 10, 600, 1, 0, '', '', ''),
(19, 10, 5, 1, '2020-06-30', '23:30:00', 10, 600, 2, 2, '0', '0', '0'),
(20, 10, 4, 1, '2020-07-31', '07:30:00', 2, 120, 1, 0, '', '', ''),
(21, 18, 4, 1, '2020-08-01', '16:00:00', 10, 600, 1, 0, '', '', ''),
(22, 18, 5, 1, '2020-08-01', '16:00:00', 10, 600, 1, 0, '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `id_siswa` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `nama_siswa` varchar(50) NOT NULL,
  `nis` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_siswa`
--

INSERT INTO `tb_siswa` (`id_siswa`, `id_kelas`, `nama_siswa`, `nis`, `username`, `password`) VALUES
(4, 1, 'Nadia', 987654321, 'nadia', '123456'),
(5, 2, 'Sasa', 876543219, 'sasa', '123456'),
(11, 3, 'Fajar', 889912346, 'fajar', '123456'),
(12, 4, 'Syahira', 879124321, 'syahira', '123456'),
(13, 5, 'Aisyah', 981287345, 'aisyah', '123456'),
(14, 6, 'Kania', 923789453, 'kania', '123456');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_soal_ujian`
--

CREATE TABLE `tb_soal_ujian` (
  `id_soal_ujian` int(11) NOT NULL,
  `id_matapelajaran` int(11) NOT NULL,
  `pertanyaan` text NOT NULL,
  `a` text NOT NULL,
  `b` text NOT NULL,
  `c` text NOT NULL,
  `d` text NOT NULL,
  `e` text NOT NULL,
  `kunci_jawaban` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_soal_ujian`
--

INSERT INTO `tb_soal_ujian` (`id_soal_ujian`, `id_matapelajaran`, `pertanyaan`, `a`, `b`, `c`, `d`, `e`, `kunci_jawaban`) VALUES
(1, 6, '<p>1+1 =</p>\r\n', '0', '1', '2', '3', '4', 'C'),
(2, 6, '<p>2-1-1=</p>\r\n', '0', '1', '2', '3', '4', 'A'),
(3, 5, '<p>Penulisan kalimat yang benar adalah?</p>\r\n', 'kota bandung', 'KOTA BANDUNG', 'Kota Bandung', 'kota Bandung', 'Kota bandung', 'C'),
(4, 7, '<p>Me artinya?</p>\r\n', 'saya', 'kamu', 'dia', 'mereka', 'kita', 'A'),
(6, 8, '<p>Aku dalam bahasa sunda artinya</p>\r\n', 'abdi', 'maneh', 'naon', 'duka', 'teuing', 'A'),
(7, 8, '<p>sunda berasal dari suku</p>\r\n', 'sunda', 'jawa', 'batak', 'madura', 'cina', 'A'),
(8, 8, '<p>ngambek artinya</p>\r\n', 'naon', 'kulan', 'punteu', 'marah', 'duka', 'D'),
(9, 8, '<p>aing bahasa indonesia nya adalah</p>\r\n', 'aku', 'kamu', 'maneh', 'naon', 'dekah', 'A'),
(10, 6, '<p>1+1+1+</p>\r\n', '1', '2', '3', '4', '5', 'C'),
(11, 10, '<p>zdas</p>\r\n', '1', '2', '3', '4', '4', 'C'),
(12, 10, '<p>wefew</p>\r\n', 'rsr', 'dt', 'dt', 'd', 'td', 'B'),
(13, 24, '<p>1+1=</p>\r\n', '0', '2', '3', '4', '5', 'B'),
(14, 21, '<p>1-1=</p>\r\n', '0', '1', '2', '3', '4', 'A'),
(15, 24, '<p>1x1=</p>\r\n', '0', '1', '2', '3', '4', 'B');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_guru`
--
ALTER TABLE `tb_guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indexes for table `tb_jawaban`
--
ALTER TABLE `tb_jawaban`
  ADD PRIMARY KEY (`id_jawaban`),
  ADD KEY `id_soal_ujian` (`id_soal_ujian`),
  ADD KEY `id_peserta` (`id_peserta`);

--
-- Indexes for table `tb_jenis_ujian`
--
ALTER TABLE `tb_jenis_ujian`
  ADD PRIMARY KEY (`id_jenis_ujian`);

--
-- Indexes for table `tb_kelas`
--
ALTER TABLE `tb_kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `tb_matapelajaran`
--
ALTER TABLE `tb_matapelajaran`
  ADD PRIMARY KEY (`id_matapelajaran`);

--
-- Indexes for table `tb_peserta`
--
ALTER TABLE `tb_peserta`
  ADD PRIMARY KEY (`id_peserta`),
  ADD KEY `id_matakuliah` (`id_matapelajaran`),
  ADD KEY `id_mahasiswa` (`id_siswa`),
  ADD KEY `id_jenis_ujian` (`id_jenis_ujian`);

--
-- Indexes for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`id_siswa`),
  ADD UNIQUE KEY `nim` (`nis`),
  ADD KEY `id_kelas` (`id_kelas`);

--
-- Indexes for table `tb_soal_ujian`
--
ALTER TABLE `tb_soal_ujian`
  ADD PRIMARY KEY (`id_soal_ujian`),
  ADD KEY `id_matakuliah` (`id_matapelajaran`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_jawaban`
--
ALTER TABLE `tb_jawaban`
  MODIFY `id_jawaban` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `tb_jenis_ujian`
--
ALTER TABLE `tb_jenis_ujian`
  MODIFY `id_jenis_ujian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_kelas`
--
ALTER TABLE `tb_kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tb_matapelajaran`
--
ALTER TABLE `tb_matapelajaran`
  MODIFY `id_matapelajaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `tb_peserta`
--
ALTER TABLE `tb_peserta`
  MODIFY `id_peserta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `tb_soal_ujian`
--
ALTER TABLE `tb_soal_ujian`
  MODIFY `id_soal_ujian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
