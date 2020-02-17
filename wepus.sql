-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2019 at 06:02 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wepus`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_pegawai` int(11) NOT NULL,
  `jabatan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `kode_buku` varchar(20) NOT NULL,
  `isbn` varchar(10) NOT NULL,
  `judul_buku` varchar(50) NOT NULL,
  `tahun_terbit` date NOT NULL,
  `pengarang` varchar(50) NOT NULL,
  `penerbit` varchar(15) NOT NULL,
  `jenis_buku` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`kode_buku`, `isbn`, `judul_buku`, `tahun_terbit`, `pengarang`, `penerbit`, `jenis_buku`) VALUES
('1233', '123', '   edeeef', '0000-00-00', 'dcwcd', 'dcdcd', 'ecdcdc'),
('kode1233', 'def', '   dvvd', '0000-00-00', 'vdved', 'dvdv', 'vdvefe'),
('dfewf', 'vdfvrd', '   rbrge', '0000-00-00', 'berbr', 'begvew', 'dvbdvd'),
('', '', '   dgvdgbfbfbffASDSC', '0000-00-00', '', '', ''),
('12345678', '33333', '   dira cantik', '0000-00-00', 'berbi', 'telkom', 'horror');

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `nama_lengkap` varchar(200) NOT NULL,
  `nim` int(50) NOT NULL,
  `judul_buku` varchar(50) NOT NULL,
  `tanggal_peminjaman` date NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`nama_lengkap`, `nim`, `judul_buku`, `tanggal_peminjaman`, `status`) VALUES
('theriana', 132546455, 'dgdgsgfhfb', '0000-00-00', 'PEMINJAMANA');

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE `person` (
  `nama` varchar(50) NOT NULL,
  `ttl` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_tlp` int(15) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `nim` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `nama_lengkap` varchar(200) NOT NULL,
  `nama_institusi` varchar(200) NOT NULL,
  `nohp` int(15) NOT NULL,
  `level` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`nama_lengkap`, `nama_institusi`, `nohp`, `level`, `email`, `pass`) VALUES
('dw', 'dw', 123, 'THEANCIENTONE', 'dw', 'dw'),
('theriana', 'telkom', 98876627, 'admin', 'theri1', 'theri'),
('jb', 'jb', 98876627, 'mahasiswa', 'de', 'jb'),
('wafa', 'telkom', 2147483647, 'admin', 'wafzahi', 'wafa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`nim`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `nim` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132546456;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
