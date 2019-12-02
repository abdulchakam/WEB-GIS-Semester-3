-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2019 at 09:52 AM
-- Server version: 10.1.39-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_surakarta`
--

-- --------------------------------------------------------

--
-- Table structure for table `spbu`
--

CREATE TABLE `spbu` (
  `Id` int(3) NOT NULL,
  `Kategori` varchar(20) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Alamat` text NOT NULL,
  `Lattitude` varchar(20) NOT NULL,
  `Longitude` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `spbu`
--

INSERT INTO `spbu` (`Id`, `Kategori`, `Nama`, `Alamat`, `Lattitude`, `Longitude`) VALUES
(1, 'SPBU', 'SPBU 43.571.01 Manahan', 'Jl. Adi Sucipto, Kerten, Kec. Laweyan, Kota Surakarta, Jawa Tengah 57139', '-7.554053', '110.798655'),
(2, 'SPBU', 'Pom Bensin Laweyan', 'Jl. Dr. Rajiman, Bumi, Kec. Laweyan, Kota Surakarta, Jawa Tengah 57149', '-7.570968', '110.801162'),
(3, 'SPBU', 'SPBU Bhayangkara', 'Jl. Bhayangkara No.18, Panularan, Kec. Laweyan, Kota Surakarta, Jawa Tengah 57149', '-7.573713', '110.810101'),
(4, 'SPBU', 'Pertamina SPBU 44.571.08', 'Jl. Veteran, Kratonan, Kec. Serengan, Kota Surakarta, Jawa Tengah 57153', '-7.580279', '110.815213'),
(5, 'SPBU', 'SPBU 4457117 Pasar Kliwon', 'Jl. Kapten Mulyadi, Joyosuran, Kec. Ps. Kliwon, Kota Surakarta, Jawa Tengah 57118', '-7.578865', '110.831085'),
(6, 'SPBU', 'SPBU 4457125 Semanggi', 'Jl. Kyai Mojo No.62, Semanggi, Kec. Ps. Kliwon, Kota Surakarta, Jawa Tengah 57191', '-7.586069', '110.834055'),
(7, 'SPBU', 'SPBU Pucang Sawit', 'Jl. Ir. Juanda No.189b, Jagalan, Kec. Jebres, Kota Surakarta, Jawa Tengah 57162', '-7.569506', '110.852135'),
(8, 'SPBU', 'SPBU Pertamina 44.571.09', 'Jebres, Kec. Jebres, Kota Surakarta, Jawa Tengah 57126', '-7.564804', '110.857884'),
(9, 'SPBU', 'SPBU Sekar Pace', 'Jl. Ir. Sutami No.11, Jebres, Kec. Jebres, Kota Surakarta, Jawa Tengah 57126', '-7.559282', '110.848670'),
(10, 'SPBU', 'SPBU Gilingan', 'Jl. A. Yani No.191, Gilingan, Kec. Banjarsari, Kota Surakarta, Jawa Tengah 57134', '-7.554619', '110.827487'),
(11, 'SPBU', 'S.P.B.U PERTAMINA 44.571.26', 'Jl. Letjen Sutoyo, Nusukan, Kec. Banjarsari, Kota Surakarta, Jawa Tengah 57135', '-7.550816', '110.829630'),
(12, 'SPBU', 'SPBU Mojosongo', 'Jl. Sumpah Pemuda, Mojosongo, Kec. Jebres, Kota Surakarta, Jawa Tengah 57127', '-7.544116', '110.840033'),
(13, 'SPBU', 'Banyuagung SPBU', 'Jl. Ki Mangun Sarkoro No.42, Kadipiro, Kec. Banjarsari, Kota Surakarta, Jawa Tengah 57136', '-7.541760', '110.815812'),
(14, 'SPBU', 'SPBU Pertamina Manahan', 'Jl. MT Haryono No.31, Manahan, Kec. Banjarsari, Kota Surakarta, Jawa Tengah 57139', '-7.554758', '110.811592'),
(15, 'SPBU', 'Pertamina SPBU 44 571 20', 'Jl. Ki Mangun Sarkoro No.57139, Sumber, Kec. Banjarsari, Kota Surakarta, Jawa Tengah 57138', '-7.545507', '110.807253'),
(16, 'SPBU', 'SPBU Banyuanyar 44.571.03', 'Jl. Adi Sumarmo No.168, Banyuanyar, Kec. Banjarsari, Kota Surakarta, Jawa Tengah 57137', '-7.540363', '110.806534'),
(17, 'POM-MINI', 'POM MINI Pajang Luwes Gentan', 'Jl. Parangkusumo Gentan Baki, Gentan, Kec. Baki, Kabupaten Sukoharjo, Jawa Tengah 57146', '-7.575855', '110.783399'),
(18, 'POM-MINI', 'Pom Bensin Rahmat', 'Jl. Taruma Negara, Banyuanyar, Kec. Banjarsari, Kota Surakarta, Jawa Tengah 57137', '-7.534903', '110.801932'),
(19, 'POM-MINI', 'Pom Mini', 'Jl. Basuki Rahmat No.64, Jajar, Kec. Laweyan, Kota Surakarta, Jawa Tengah 57144', '-7.556171', '110.787976'),
(20, 'POM-MINI', 'Pom Mini Joko Tingkir', 'Jl. Joko Tingkir No.27, Pajang, Kec. Laweyan, Kota Surakarta, Jawa Tengah 57161', '-7.573356', '110.783606'),
(21, 'POM-MINI', 'Pom Mini Pattimura', 'Jl. Kapten Pattimura No.171, Tipes, Kec. Serengan, Kota Surakarta, Jawa Tengah 57155', '-7.582650', '110.811614'),
(22, 'POM-MINI', 'Pom Mini Bu Sri', 'Semanggi, Kec. Ps. Kliwon, Kota Surakarta, Jawa Tengah 57191', '-7.583522', '110.838845'),
(23, 'POM-MINI', 'Pom Mini Arifin', 'Jl. Arifin No.15, Kp. Baru, Kec. Ps. Kliwon, Kota Surakarta, Jawa Tengah 57133', '-7.567311', '110.829943'),
(24, 'POM-MINI', 'Pom Bensin Mini Ayub Purwanto', 'Jl. Jenggolo Selatan II No.3, Nusukan, Kec. Banjarsari, Kota Surakarta, Jawa Tengah 57135', '-7.547967', '110.816396'),
(25, 'POM-MINI', 'Pom Mini Merah Putih', 'Jl. Agung Timur, Mojosongo, Kec. Jebres, Kota Surakarta, Jawa Tengah 57127', '-7.553123', '110.849047'),
(26, 'POM-MINI', 'Mini Pom Budhi Sangkar', 'Jl. Sindoro Raya, Mojosongo, Kec. Jebres, Kota Surakarta, Jawa Tengah 57127', '-7.545524', '110.846360'),
(27, 'POM-MINI', 'Pom Mini Nurjanah Takaran Pas', 'Mojorejo, Sawahan, Kec. Ngemplak, Kabupaten Boyolali, Jawa Tengah', '-7.529787', '110.817375'),
(28, 'SPBU', 'SPBU COBA', 'Jl. Jenggolo Selatan II No.3, Nusukan, Kec. Banjarsari, Kota Surakarta, Jawa Tengah 57135', '-7.547315', '110.771410');

-- --------------------------------------------------------

--
-- Table structure for table `transportasi`
--

CREATE TABLE `transportasi` (
  `Id` int(3) NOT NULL,
  `Kategori` varchar(11) DEFAULT NULL,
  `Alamat` text NOT NULL,
  `Nama` varchar(23) DEFAULT NULL,
  `Lat` varchar(20) DEFAULT NULL,
  `Lng` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `transportasi`
--

INSERT INTO `transportasi` (`Id`, `Kategori`, `Alamat`, `Nama`, `Lat`, `Lng`) VALUES
(1, 'Halte', 'Jl. Adi Sucipto No.198, Karangasem, Kec. Laweyan, Kota Surakarta, Jawa Tengah 57144', 'Halte Solopos', '-7.546836', '110.779144'),
(2, 'Halte-BST', 'Jl. Adi Sucipto No.129, Jajar, Kec. Laweyan, Kota Surakarta, Jawa Tengah 57139', 'Halte BST', '-7.549505', '110.785615'),
(3, 'Halte-BST', 'Jl. Adi Sucipto No.97, Jajar, Kec. Laweyan, Kota Surakarta, Jawa Tengah 57139', 'Halte BST', '-7.550102', '110.789418'),
(4, 'Halte-BST', 'Jl. Ir. Sutami, Pucangsawit, Kec. Jebres, Kota Surakarta, Jawa Tengah 57125', 'Halte BST', '-7.557548', '110.822978'),
(5, 'Halte-BST', 'Jl. Monginsidi, Kestalan, Kec. Banjarsari, Kota Surakarta, Jawa Tengah 57129', 'Halte BST', '-7.561032', '110.819494'),
(6, 'Halte', 'Jl. Slamet Riyadi No.550, Pajang, Kec. Laweyan, Kota Surakarta, Jawa Tengah 57143', 'Halte Tayo', '-7.560625', '110.789698'),
(7, 'Halte-BST', 'Orient, Jl. Slamet Riyadi No.397, Sondakan, Kec. Laweyan, Kota Surakarta, Jawa Tengah 57146', 'Halte BST Purwosari', '-7.562748', '110.798088'),
(8, 'Halte-BST', 'Jl. Slamet Riyadi No.408, Purwosari, Kec. Laweyan, Kota Surakarta, Jawa Tengah 57144', 'Halte BST RS Kasih Ibu', '-7.563855', '110.801748'),
(9, 'Halte-BST', 'Jl. Yosodipuro No.148, Mangkubumen, Kec. Banjarsari, Kota Surakarta, Jawa Tengah 57139', 'Halte BST Yosodipuro', '-7.560967', '110.809420'),
(10, 'Halte', 'Jl. Slamet Riyadi, Sriwedari, Kec. Laweyan, Kota Surakarta, Jawa Tengah 57141', 'Halte Sriwedari', '-7.567003', '110.811908'),
(11, 'Halte', 'Jl. Monginsidi, Kepatihan Kulon, Kec. Jebres, Kota Surakarta, Jawa Tengah 57129', 'Halte SMP Kristen 3', '-7.558937', '110.830251'),
(12, 'Halte', 'Purwodiningratan, Kec. Jebres, Kota Surakarta, Jawa Tengah', 'Halte Jebres I', '-7.561599', '110.836333'),
(13, 'Halte', 'Jl. Jend. Urip Sumoharjo No.207, Tegalharjo, Kec. Jebres, Kota Surakarta, Jawa Tengah 57129', 'Halte Jebres II', '-7.561690', '110.835996'),
(14, 'Halte', 'Jl. Dr. Rajiman, Panularan, Kec. Laweyan, Kota Surakarta, Jawa Tengah 57148', 'Halte Baron', '-7.571465', '110.806796'),
(15, 'Halte', 'Jl. Semarang - Surakarta, Jebres, Kec. Jebres, Kota Surakarta, Jawa Tengah 57126', 'Halte Panggung', '-7.559881', '110.838512'),
(16, 'Halte', 'Jl. Semarang - Surakarta, Jebres, Kec. Jebres, Kota Surakarta, Jawa Tengah 57126', 'Halte PMI Solo', '-7.559580', '110.842772'),
(17, 'Halte', 'Jl. Semarang - Surakarta, Jebres, Kec. Jebres, Kota Surakarta, Jawa Tengah 57126', 'Halte Thiong Ting', '-7.558221', '110.846345'),
(18, 'Halte', 'Jalan Ir. Sutami No.25, Jebres, Kec. Jebres, Kota Surakarta, Jawa Tengah 57126', 'Halte Sekarpace', '-7.561348', '110.849375'),
(19, 'Halte', 'Jebres, Kec. Jebres, Kota Surakarta, Jawa Tengah 57125', 'Halte UNS 1', '-7.564278', '110.855254'),
(20, 'Stasiun', 'Jalan Slamet Riyadi, Purwosari, Kecamatan Laweyan, Kota Surakarta, Jawa, Tengah 57142', 'Stasiun Purwosari', '-7.561625', '110.796505'),
(21, 'Stasiun', 'Jalan Wolter Monginsidi No.112, Kestalan, Surakarta, 57133, Kestalan, Banjarsari, Kestalan, Kec. Banjarsari, Kota Surakarta, Jawa Tengah', 'Stasiun Solobalapan', '-7.556955', '110.821407'),
(22, 'Stasiun', 'Jl. Ledoksari No.1, Purwodiningratan, Kec. Jebres, Kota Surakarta, Jawa Tengah 57128', 'Stasiun Solojebres', '-7.562138', '110.839515'),
(23, 'Terminal', 'Jl. A. Yani No.262, Manahan, Kec. Banjarsari, Kota Surakarta, Jawa Tengah 57134', 'Terminal Tirtonadi Solo', '-7.551944', '110.819510'),
(24, 'Stasiun', 'Jl.Hos Cokroaminoto', 'Stasiun Kota', '-7.525362', '110.815355');

-- --------------------------------------------------------

--
-- Table structure for table `umkm`
--

CREATE TABLE `umkm` (
  `Provinsi` varchar(30) NOT NULL,
  `Nama_Kota` varchar(35) NOT NULL,
  `Nama_Kec` varchar(20) NOT NULL,
  `Kode_Kec` varchar(10) NOT NULL,
  `data_Jml` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `umkm`
--

INSERT INTO `umkm` (`Provinsi`, `Nama_Kota`, `Nama_Kec`, `Kode_Kec`, `data_Jml`) VALUES
('Jawa Tengah', 'Surakarta', 'Laweyan', '3372010', 10011),
('Jawa Tengah', 'Surakarta', 'Serengan', '3372020', 4902),
('Jawa Tengah', 'Surakarta', 'Pasarkliwon', '3372030', 9196),
('Jawa Tengah', 'Surakarta', 'Jebres', '3372040', 10156),
('Jawa Tengah', 'Surakarta', 'Banjarsari', '3372050', 10372);

-- --------------------------------------------------------

--
-- Table structure for table `userlogin`
--

CREATE TABLE `userlogin` (
  `Username` varchar(10) NOT NULL,
  `Password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userlogin`
--

INSERT INTO `userlogin` (`Username`, `Password`) VALUES
('admin', 'e172dd95f4feb21412a692e73929961e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `spbu`
--
ALTER TABLE `spbu`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `transportasi`
--
ALTER TABLE `transportasi`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `umkm`
--
ALTER TABLE `umkm`
  ADD PRIMARY KEY (`Kode_Kec`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `spbu`
--
ALTER TABLE `spbu`
  MODIFY `Id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `transportasi`
--
ALTER TABLE `transportasi`
  MODIFY `Id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
