-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 30 Apr 2021 pada 09.03
-- Versi server: 10.3.28-MariaDB-cll-lve
-- Versi PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u1429031_sinergiom70`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_masterrequest`
--

CREATE TABLE `tbl_masterrequest` (
  `id` int(11) NOT NULL,
  `id_pengguna` int(11) NOT NULL,
  `name_of_ships` varchar(100) NOT NULL,
  `jetty` varchar(20) NOT NULL,
  `date_request` datetime NOT NULL,
  `nomination_mfo` int(11) NOT NULL,
  `nomination_mdo` int(11) NOT NULL,
  `nomination_fw` int(11) NOT NULL,
  `number_of_jetty` varchar(50) NOT NULL,
  `name_of_captain` varchar(50) NOT NULL,
  `ships_status` varchar(50) NOT NULL,
  `cost_center` varchar(50) NOT NULL,
  `company_owner` varchar(100) NOT NULL,
  `nomination` int(11) NOT NULL,
  `name_of_loading_master` varchar(50) NOT NULL,
  `date_respon` datetime NOT NULL,
  `no_document` varchar(100) NOT NULL,
  `reason` varchar(300) NOT NULL,
  `file_dokumen` varchar(100) NOT NULL,
  `file_bukti_bayar` varchar(100) NOT NULL,
  `status_bukti_bayar` varchar(5) NOT NULL,
  `approve` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_masterrequest`
--

INSERT INTO `tbl_masterrequest` (`id`, `id_pengguna`, `name_of_ships`, `jetty`, `date_request`, `nomination_mfo`, `nomination_mdo`, `nomination_fw`, `number_of_jetty`, `name_of_captain`, `ships_status`, `cost_center`, `company_owner`, `nomination`, `name_of_loading_master`, `date_respon`, `no_document`, `reason`, `file_dokumen`, `file_bukti_bayar`, `status_bukti_bayar`, `approve`) VALUES
(1, 11, 'Waruna Jaya', 'Jetty 1', '2021-04-12 00:00:00', 123, 123, 123, 'Q123T', 'Slamet Sukses', 'Owned', 'sukses terus', 'KOSONG', 0, 'cek', '2021-04-14 00:00:00', 'KOSONG', 'cek', '8abc806ee0e1dbf48b9216718dd67577.pdf', 'a507aa153900943fb8f89dc998f75122.pdf', 'YA', 'YA'),
(2, 11, 'Putri Jaya Makara', 'Jetty 1', '2021-04-12 00:00:00', 123, 123, 123, 'Q123T', 'Slamet Sukses', 'Owned', 'sukses terus', 'KOSONG', 123, 'Agung Hermawan', '2021-04-13 00:00:00', 'KOSONG', 'Lanjutkan kegiatan sampai selesai', 'KOSONG.pdf', 'KOSONG', '', 'YA'),
(3, 11, 'A', 'Jetty 1', '2021-04-14 00:00:00', 100, 100, 100, '1', 'Abe', 'Chartered', 'KOSONG', '', 50, 'XXX', '2021-04-17 00:00:00', 'KOSONG', 'KOSONG', 'KOSONG.pdf', 'KOSONG.pdf', 'YA', 'YA');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pengguna`
--

CREATE TABLE `tbl_pengguna` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jabatan` varchar(10) NOT NULL,
  `status` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_pengguna`
--

INSERT INTO `tbl_pengguna` (`id`, `username`, `password`, `nama`, `jabatan`, `status`) VALUES
(5, 'superadmin', '17c4520f6cfd1ab53d8745e84681eb49', 'Alan Merdeka', 'superadmin', 'YA'),
(6, 'supervisor', '09348c20a019be0318387c08df7a783d', 'Roberto Alam', 'supervisor', 'YA'),
(7, 'operator', '4b583376b2767b923c3e1da60d10de59', 'Tomi Kurniawan', 'operator', 'YA'),
(8, 'finance', '57336afd1f4b40dfd9f5731e35302fe5', 'Eris Mega', 'finance', 'YA'),
(9, 'agent', 'b33aed8f3134996703dc39f9a7c95783', 'Ambar Syamsiah', 'agent', 'YA'),
(11, 'ships', 'd2d529e9349f0a211539b8f72e8dc0a6', 'Agus Hermawan', 'ships', 'YA'),
(13, 'waruna@gmail.com', '9c24fc93f2422def34b2c0b9f4671cd7', 'Waruna Jaya', 'ships', 'TIDAK'),
(14, 'qwe@gm.com', '202cb962ac59075b964b07152d234b70', 'Abdul Aziz', 'ships', 'TIDAK'),
(15, 'wahyu@gmail.com', '202cb962ac59075b964b07152d234b70', 'Wahyu Pamuji', 'ships', 'TIDAK'),
(17, 'feri', 'd41d8cd98f00b204e9800998ecf8427e', 'Feri Nika', 'finance', 'YA');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_rekapitulasi`
--

CREATE TABLE `tbl_rekapitulasi` (
  `id` int(11) NOT NULL,
  `id_pengguna` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `keterangan` text NOT NULL,
  `file_dokumen` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_rekapitulasi`
--

INSERT INTO `tbl_rekapitulasi` (`id`, `id_pengguna`, `tanggal`, `keterangan`, `file_dokumen`) VALUES
(1, 8, '2021-04-12', 'Data rekap laporan keuangan bulan maret 2021', 'ccf0a791ec605cc66e2b11fcfcbb3b48.xlsx'),
(2, 5, '2021-04-14', 'datacek', 'e53beb3df4e821fb8ae52676f41442ce.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_tankticket`
--

CREATE TABLE `tbl_tankticket` (
  `id` int(11) NOT NULL,
  `id_pengguna` int(11) NOT NULL,
  `name_of_ships` varchar(50) NOT NULL,
  `jetty_no` varchar(50) NOT NULL,
  `name_fresh_water` varchar(50) NOT NULL,
  `no_of_tank` varchar(50) NOT NULL,
  `ukuran_stop` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `hours` time NOT NULL,
  `name_operator` varchar(50) NOT NULL,
  `name_supervisor` varchar(50) NOT NULL,
  `jenis` varchar(20) NOT NULL,
  `file_dokumen` varchar(100) NOT NULL,
  `approve` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_tankticket`
--

INSERT INTO `tbl_tankticket` (`id`, `id_pengguna`, `name_of_ships`, `jetty_no`, `name_fresh_water`, `no_of_tank`, `ukuran_stop`, `date`, `hours`, `name_operator`, `name_supervisor`, `jenis`, `file_dokumen`, `approve`) VALUES
(1, 7, 'Waruna Jaya', 'Jetty 1', '1', '70T-1', 'PD Meter', '2021-04-12', '00:00:00', 'Abdul Aziz', 'Bayu Agil', 'Opening', 'KOSONG.pdf', 'YA'),
(2, 7, 'Waruna Jaya', 'Jetty 1', 'Screening Water', '70T-1', 'PD Meter', '2021-04-12', '22:38:00', 'Abdul Aziz', 'KOSONG', 'Closing', 'KOSONG.pdf', 'PROSES'),
(3, 7, 'A', 'Jetty 1', '3', '70T-1', 'PD Meter', '2021-04-17', '08:45:00', 'Xx', 'Udin', 'Opening', 'KOSONG.pdf', 'YA'),
(4, 7, 'A', 'Jetty 1', '4', '', '', '2021-04-17', '00:00:00', '', 'KOSONG', 'Closing', 'KOSONG.pdf', 'YA');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_masterrequest`
--
ALTER TABLE `tbl_masterrequest`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_pengguna`
--
ALTER TABLE `tbl_pengguna`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_rekapitulasi`
--
ALTER TABLE `tbl_rekapitulasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_tankticket`
--
ALTER TABLE `tbl_tankticket`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_masterrequest`
--
ALTER TABLE `tbl_masterrequest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_pengguna`
--
ALTER TABLE `tbl_pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `tbl_rekapitulasi`
--
ALTER TABLE `tbl_rekapitulasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_tankticket`
--
ALTER TABLE `tbl_tankticket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
