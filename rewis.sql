-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 17, 2020 at 06:40 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rewis`
--

-- --------------------------------------------------------

--
-- Stand-in structure for view `data_klu`
-- (See below for the actual view)
--
CREATE TABLE `data_klu` (
`id` int(11)
,`nama_tempat` text
,`foto` varchar(191)
,`jarak` double
,`biaya` double
,`fasilitas` double
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `data_lobar`
-- (See below for the actual view)
--
CREATE TABLE `data_lobar` (
`id` int(11)
,`nama_tempat` text
,`foto` varchar(191)
,`jarak` double
,`biaya` double
,`fasilitas` double
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `data_loteng`
-- (See below for the actual view)
--
CREATE TABLE `data_loteng` (
`id` int(11)
,`nama_tempat` text
,`foto` varchar(191)
,`jarak` double
,`biaya` double
,`fasilitas` double
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `data_lotim`
-- (See below for the actual view)
--
CREATE TABLE `data_lotim` (
`id` int(11)
,`nama_tempat` text
,`foto` varchar(191)
,`jarak` double
,`biaya` double
,`fasilitas` double
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `data_mtr`
-- (See below for the actual view)
--
CREATE TABLE `data_mtr` (
`id` int(11)
,`nama_tempat` text
,`foto` varchar(191)
,`jarak` double
,`biaya` double
,`fasilitas` double
);

-- --------------------------------------------------------

--
-- Table structure for table `jarak`
--

CREATE TABLE `jarak` (
  `id` int(11) NOT NULL,
  `mataram` double NOT NULL,
  `lobar` double NOT NULL,
  `lotim` double NOT NULL,
  `loteng` double NOT NULL,
  `klu` double NOT NULL,
  `id_tw` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jarak`
--

INSERT INTO `jarak` (`id`, `mataram`, `lobar`, `lotim`, `loteng`, `klu`, `id_tw`) VALUES
(1, 46, 41, 54, 29, 82, 1),
(2, 49, 45, 67, 33, 86, 2),
(3, 47, 51, 64, 39, 92, 3),
(4, 18, 34, 71, 53, 18, 4),
(5, 32, 48, 82, 59, 10, 5),
(6, 13, 23, 42, 20, 41, 6),
(7, 63, 51, 113, 78, 100, 7),
(8, 85, 101, 99, 104, 64, 8),
(9, 3.3, 18, 61, 37, 35, 9),
(10, 47, 62, 97, 73, 25, 10),
(11, 6.5, 15, 50, 26, 33, 11),
(12, 2.6, 18, 54, 30, 35, 12),
(13, 80, 76, 46, 47, 105, 13),
(14, 93, 104, 53, 76, 85, 14),
(15, 40, 36, 49, 17, 77, 15);

-- --------------------------------------------------------

--
-- Table structure for table `tempat_wisata`
--

CREATE TABLE `tempat_wisata` (
  `id` int(11) NOT NULL,
  `nama_tempat` text NOT NULL,
  `kab` varchar(191) NOT NULL,
  `alamat` text NOT NULL,
  `deskripsi` text NOT NULL,
  `foto` varchar(191) NOT NULL,
  `biaya` double NOT NULL,
  `fasilitas` double NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tempat_wisata`
--

INSERT INTO `tempat_wisata` (`id`, `nama_tempat`, `kab`, `alamat`, `deskripsi`, `foto`, `biaya`, `fasilitas`, `id_user`) VALUES
(1, 'Kuta', 'Lombok Tengah', 'jl.pariwisata', 'Kuta adalah sebuah kota di pantai selatan pulau Lombok di provinsi Indonesia Nusa Tenggara Barat. Kuta dikenal karena banyak pantai yang indah dan tempat selancar yang dekat dan telah berkembang menjadi kota wisata utama di Lombok. Dalam beberapa tahun singkat, Kuta telah berubah dari desa tepi pantai yang sepi menjadi fokus utama pengembangan pariwisata di Lombok. Bandara internasional Lombok hanya berjarak 20 menit berkendara dari Kuta dan ini, ditambah dengan lebih banyak maskapai penerbangan yang menawarkan penerbangan langsung ke Lombok, telah menjadikan Kuta menyusul Senggigi sebagai tujuan wisata paling populer dan nyaman di Lombok. Kuta juga sangat beruntung untuk menghindari kerusakan yang meluluhlantakkan Lombok Utara dan merusak banyak properti dan hotel di Senggigi dan pulau-pulau Gili barat laut selama gempa bumi Lombok 2018.', '', 1000, 5, 1),
(2, 'Selong Belanak', 'Lombok Tengah', 'jl. Selong belanak', 'Selong Belanak adalah salah satu desa yang terletak di Kecamatan Praya Barat, Kabupaten Lombok Tengah, Provinsi Nusa Tenggara Barat, Indonesia. Desa ini sebagian besar penduduknya bersuku Sasak. Di desa ini terkenal dengan keindahan Pantai baik wisatawan domestik maupun wisatawan asing.', '', 2000, 4, 1),
(3, 'Pantai Mawun', 'Lombok Tengah', 'jl. Pantai mawun', 'memadai untuk menjadi tempat wisata pantai. Pantai di Pulau Lombok ini merupakan bagian dari teluk. Garis pantainya berbentuk seperti tapal kuda, dengan dua bukit yang berada di sebelah Timur dan Barat. Pantainya juga berpasir putih, serta bertekstur lembut di pantai bagian tengah. Sedangkan di bagian sisi Barat, pasirnya bertekstur lebih kasar dan bercampur dengan pecahan karang. Topografi garis pantai di bagian tengah cukup dalam dibanding sisi Barat dan Timur. Ombaknya juga relatif lebih besar. Karena bagian tengah berhadapan langsung dengan Samudera Hindia. Sedangkan di sisi Barat dan Timur terhalang oleh bukit. Sehingga di sisi ini memiliki ombak yang relatif tenang.', '', 1000, 4, 1),
(4, 'Pantai Senggigi', 'Lombok Barat', 'jl. Raya senggigi', 'Pantai Senggigi adalah tempat pariwisata yang terkenal di Lombok. Letaknya di sebelah barat pesisir Pulau Lombok. Pantai Senggigi memang tidak sebesar Pantai Kuta di Bali, tetapi seketika kita berada di sini akan merasa seperti berada di Pantai Kuta, Bali. Memasuki area pantai Senggigi, wisatawan seta merta disapa oleh lembutnya angin semilir yang menenangkan. Pesisir pantainya masih asri, walaupun masih ada sampah dedaunan yang masih berserakan karena jarang dibersihkan. Pemandangan bawah lautnya sangat indah, dan wisatawan bisa melakukan selam permukaan (snorkeling) sepuasnya karena ombaknya tidak terlalu besar. Terumbu karangnya menjulang ketengah menyebabkan ombak besarnya pecah di tengah. Tersedia juga hotel-hotel dengan harga yang bervariasi, dari yang mahal sampai hotel yang berharga ekonomis.', '', 1500, 5, 1),
(5, 'Pantai Sire', 'Lombok Utara', 'jl. Pantai sira', 'Pantai Sire terletak sekitar 43 Kilometer dari Kota Mataram, di wilayah pesisir Barat Pantai Lombok. Di Pantai Sire, Anda bisa melakukan berbagai aktivitas air seperti canoeing, snorkeling, atau berenang  dengan menggunakan pelampung. Jika Anda tidak membawa peralatan pribadi, Anda bisa menyewanya di persewaan peralatan snorkling di dekat pantai. Pada sore harinya Anda bisa memancing, atau menikmati pemandangan sore yang dihiasi dengan burung camar yang berterbangan.', '', 5000, 3, 1),
(6, 'Taman Narmada', 'Lombok Barat', 'jl. Raya narmada', 'Taman Narmada terletak di Desa Lembuak, Kecamatan Narmada, Kabupaten Lombok Barat atau sekitar 10 kilometer sebelah timur Kota Mataram, Provinsi Nusa Tenggara Barat, Indonesia. Taman yang luasnya sekitar 2 ha(hektar are) ini dibangun pada tahun 1727 oleh Raja Mataram Lombok, Anak Agung Ngurah Karang Asem, sebagai tempat upacara Pakelem yang diselenggarakan setiap purnama kelima tahun Caka(Oktober-November). Selain tempat upacara, Taman Narmada juga digunakan sebagai tempat peristirahatan keluarga raja pada saat musim kemarau.', '', 5000, 4, 1),
(7, 'Pantai Mekaki', 'Lombok Barat', 'jl. Raya mekaki', 'Kecamatan Sekotong Tengah, misalnya, Anda dapat menemukan pantai yang tenang yang disebut Mekaki. Lokasinya di Jalan Raya Memayi dan masih bagian Kabupaten Lombok Barat, Provinsi Nusa Tenggara Barat. Dalam hal nuansa, Pantai Mekaki memiliki pasir putih dan gelombang sedang. Bagian kanan dan kiri garis pantai juga memiliki perbukitan hijau. Sepanjang jalan menuju lokasi, wisatawan mungkin melihat formasi pertanian lokal, gili, dan laut biru! Apa selanjutnya? Ini adalah angin semilir dan hangat yang dapat meremajakan perasaan semua orang ketika menghabiskan liburan di pantai. Bahkan air laut terasa sangat nyaman selama cuaca baik. Dalam hal ini, pastikan untuk datang di musim panas atau waktu lain kecuali musim hujan.', '', 5000, 3, 1),
(8, 'Sendang Gile', 'Lombok Utara', 'jl. Pariwisata', 'Air terjun Sendang Gile adalah air terjun yang terletak di desa Senaru, kecamatan Bayan, kabupaten Lombok Utara, propinsi Nusa Tenggara Barat. Lebih tepatnya berada di kawasan desa Senaru, 2 kilometer dari desa Bayan. Objek wisata ini masih berada dalam kawasan Taman Nasional Gunung Rinjani. Ini disebabkan karena air terjun ini merupakan pintu masuk pendakian menuju gunung Rinjani. Selain itu, ternyata air di Sendang Gile berasal dari mata air di Gunung Rinjani yang sangat sejuk dan alami. Untuk menuju ke tempat ini, para pengunjung harus melalui dua ratusan anak tangga yang mencapai ketinggian 40 meter, dan jembatan berlubang melalui sebuah lembah yang membutuhkan waktu penjelajahan sekitar 15 menit. Perjalanan alternatif juga bisa dilakukan dengan cara menyelusuri pinggir lembah yang agak curam dan mengikuti saluran irigasi serta menyeberangi jembatan yang terbuat dari rotan.', '', 5000, 2, 1),
(9, 'Loang Balok', 'Lombok Barat', 'jl. Lingkar selatan, Tj. Karang', 'Masyarakat Lombok memiliki cara unik untuk menjaga warisan budaya. Terutama mengenalkan kepada anak dan cucu akan sosok penyebar agama Islam di Lombok. Makam tersebut kini menjadi tempat pariwisata. Fasilitas kini cukup memadai.  Wisatawan dapat membasuh muka dengan air yang telah disediakan. Tentunya agar mereka segar kembali setelah menempuh perjalanan jauh. ', '', 2000, 2, 1),
(10, 'Tiu Pupus', 'Lombok Utara', 'jl. Gotim', 'Air Terjun Tiu Pupus merupakan salah satu destinasi wisata yang ada di Kabupaten Lombok Utara. Destinasi ini menyajikan kesegaran bagi pengunjung yang datang. Ini menjadi salah satu pilihan destinasi wisata di KLU selain kawasan tiga gili. Air Terjun Tiu Pupus berada di Dusun Kerurak Desa Genggelang Kecamatan Gangga Kabupaten Lombok Utara. Air terjun ini selalu ramai dikunjungi wisatawan. Baik wisatawan dalam negeri maupun wisatawan dari luar negeri. Air terjun ini juga beberapa kali dijadikan sebagai lokasi pengambilan gambar bagi pasangan sebelum menikah.', '', 10000, 2, 1),
(11, 'Taman Mayura', 'Mataram', 'jl. Purbasari no.29, mayura', 'Taman Mayura merupakan taman yang dibangun pada masa Kerajaan Bali masih berkuasa di daerah Lombok pada tahun 1744 Masehi oleh Raja A.A. Made Karangasem. Taman ini pada mulanya mempunyai nama Taman Kelepug karena suara air dari mata air yang jatuh ke dalam kolam. Namun nama tersebut kemudian diganti oleh Raja A.A. Ngurah Karangasem yang merenovasi taman ini pada tahun 1866 Masehi.', '', 2500, 3, 1),
(12, 'Islamic Center', 'Mataram', 'jl. Udayana, gomong', 'Masjid Islamic Center Lombok memiliki keunikan tersendiri sehingga tidak salah jika tempat ibadah ini menjadi salah satu tujuan wisatawan muslim. Inilah hal yang perlu diketahui dari Masjid Islamic Center Lombok. Desain unik yang ditawarkan oleh Masjid Islamic Center Lombok ini membuat banyak wisatawan makin ramai berkunjung. Bahkan banyak turis mancanegara yang menempuh perjalanan jauh dengan tujuan hanya ingin melihat keelokan tempat ibadah ini dari dekat. ', '', 0, 4, 1),
(13, 'Tanjung Bloam', 'Lombok Timur', 'jl. Pantai bloam', 'Tanjung bloam merupakan salah satu objek wisata yang menawarkan keindahan alam yang unik dan cantik. Ketika Anda mengunjungi wisata ini, Anda bakal terkagum akan pesonanya. Tanjung bloam lebih dikenal sebagai wilayah konservasi penyu dengan habitatnya yang berada di sepanjang garis pantai lombok yang memanjang dari ujung selatan sampai ujung utara. Selain penyu, pantai tanjung bloam memiliki keindahan alam yang begitu alami dan hampir terlupakan oleh para wisatawan. Begitu tiba di pantai ini, Anda akan disuguhkan dengan hamparan pasir putih yang begitu lembut dan air laut yang jernih membiru. Panorama keindahan alam di tempat ini sesekali akan diselingi oleh hilir mudiknya para nelayan yang mencari ikan dengan perahu-perahu kecil mereka.', '', 150000, 3, 1),
(14, 'Sembalun', 'Lombok Timur', 'jl. Raya sembalun lawang', 'Sembalun adalah sebuah kecamatan di kabupaten Lombok Timur, Nusa Tenggara Barat, Indonesia. Kecamatan Sembalun memiliki luas wilayah 217,08 Km2. Kecamatan ini terdiri dari 6 desa yaitu Desa Sembalun Bumbung, Desa Sembalun Lawang, Desa Sajang, Desa Bilok Petung, Desa Sembalun, dan Desa Sembalun Timba Gading. Ibukota Kecamatan Sembalun berada di Desa Sembalun Lawang, yang berjarak sekitar 45 km dari ibukota Kabupaten Lombok Timur ( Selong ). Desa Sembalun Bumbung memiliki wilayah terluas yaitu 57,97 Km2 atau sekitar 26,70 % dari keseluruhan luas wilayah Kecamatan Sembalun, dan yang tekecil adalah Desa Sembalun Timba Gading dengan luas 15,76 Km2. Desa-desa yang berada di Kecamatan Sembalun memiliki ketinggian yang bervariasi antara 800 hingga 1.200 meter diatas permukaan laut. Jarak tempuh tiap desa ke ibukota kecamatan relatif dekat, jarak yang paling jauh yaitu dari Desa Sajang dan Desa Bilok Petung yang mencapai 6 km dan 15 km. Sedangkan jarak terdekat ke ibu kota kecamatan adalah Desa Sembalun yaitu 0.025 km (25 m), karena kantor kecamatan ada di dasa tersebut.', '', 5000, 3, 1),
(15, 'Desa Sade', 'Lombok Tengah', 'jl. Kuta lombok', 'Sade adalah salah satu dusun di desa Rembitan, Pujut, Lombok Tengah. Dusun ini dikenal sebagai dusun yang mempertahankan adat suku Sasak. Suku Sasak Sade sudah terkenal di telinga wisatawan yang datang ke Lombok. Ya, Dinas Pariwisata setempat memang menjadikan Sade sebagai desa wisata. Ini karena keunikan Desa Sade dan suku Sasak yang jadi penghuninya. Sebagai desa wisata, Sade punya keunikan tersendiri. Meski terletak persis di samping jalan raya aspal nan mulus, penduduk Desa Sade di Rembitan, Lombok Tengah masih berpegang teguh menjaga keaslian desa.', '', 0, 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `temp_calc`
--

CREATE TABLE `temp_calc` (
  `id` int(11) NOT NULL,
  `nama_tempat` varchar(191) NOT NULL,
  `foto` varchar(191) NOT NULL,
  `jarak` double NOT NULL,
  `biaya` double NOT NULL,
  `fasilitas` double NOT NULL,
  `vektor_s` double DEFAULT NULL,
  `vektor_v` double DEFAULT NULL,
  `id_tw` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `temp_calc`
--

INSERT INTO `temp_calc` (`id`, `nama_tempat`, `foto`, `jarak`, `biaya`, `fasilitas`, `vektor_s`, `vektor_v`, `id_tw`) VALUES
(131, 'Kuta', '', 29, 1000, 5, 0.020199926980273, 0, 1),
(132, 'Selong Belanak', '', 33, 2000, 4, 0.016659709643025, 0, 2),
(133, 'Pantai Mawun', '', 39, 1000, 4, 0.019184750688722, 0, 3),
(134, 'Pantai Senggigi', '', 53, 1500, 5, 0.014053072058142, 0, 4),
(135, 'Pantai Sire', '', 59, 5000, 3, 0.010935328090634, 0, 5),
(136, 'Taman Narmada', '', 20, 5000, 4, 0.01546247473555, 0, 6),
(137, 'Pantai Mekaki', '', 78, 5000, 3, 0.0097799082663214, 0, 7),
(138, 'Sendang Gile', '', 104, 5000, 2, 0.0098443413486256, 0, 8),
(139, 'Loang Balok', '', 37, 2000, 2, 0.019593016895153, 0, 9),
(140, 'Tiu Pupus', '', 73, 10000, 2, 0.0092121681647848, 0, 10),
(141, 'Taman Mayura', '', 26, 2500, 3, 0.018684964703672, 0, 11),
(142, 'Tanjung Bloam', '', 47, 150000, 3, 0.0043171496436315, 0, 13),
(143, 'Sembalun', '', 76, 5000, 3, 0.0098820531496769, 0, 14);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(191) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`) VALUES
(1, 'Agung Saputra', 'agungsptr', 'agungsptr000'),
(17, 'echa', 'echa', 'echa000'),
(18, 'dony', 'dony', 'dony000'),
(19, 'gafar', 'gafar', 'gafar000');

-- --------------------------------------------------------

--
-- Structure for view `data_klu`
--
DROP TABLE IF EXISTS `data_klu`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `data_klu`  AS  select `tw`.`id` AS `id`,`tw`.`nama_tempat` AS `nama_tempat`,`tw`.`foto` AS `foto`,`j`.`klu` AS `jarak`,`tw`.`biaya` AS `biaya`,`tw`.`fasilitas` AS `fasilitas` from (`tempat_wisata` `tw` join `jarak` `j` on(`tw`.`id` = `j`.`id_tw`)) ;

-- --------------------------------------------------------

--
-- Structure for view `data_lobar`
--
DROP TABLE IF EXISTS `data_lobar`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `data_lobar`  AS  select `tw`.`id` AS `id`,`tw`.`nama_tempat` AS `nama_tempat`,`tw`.`foto` AS `foto`,`j`.`lobar` AS `jarak`,`tw`.`biaya` AS `biaya`,`tw`.`fasilitas` AS `fasilitas` from (`tempat_wisata` `tw` join `jarak` `j` on(`tw`.`id` = `j`.`id_tw`)) ;

-- --------------------------------------------------------

--
-- Structure for view `data_loteng`
--
DROP TABLE IF EXISTS `data_loteng`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `data_loteng`  AS  select `tw`.`id` AS `id`,`tw`.`nama_tempat` AS `nama_tempat`,`tw`.`foto` AS `foto`,`j`.`loteng` AS `jarak`,`tw`.`biaya` AS `biaya`,`tw`.`fasilitas` AS `fasilitas` from (`tempat_wisata` `tw` join `jarak` `j` on(`tw`.`id` = `j`.`id_tw`)) ;

-- --------------------------------------------------------

--
-- Structure for view `data_lotim`
--
DROP TABLE IF EXISTS `data_lotim`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `data_lotim`  AS  select `tw`.`id` AS `id`,`tw`.`nama_tempat` AS `nama_tempat`,`tw`.`foto` AS `foto`,`j`.`lotim` AS `jarak`,`tw`.`biaya` AS `biaya`,`tw`.`fasilitas` AS `fasilitas` from (`tempat_wisata` `tw` join `jarak` `j` on(`tw`.`id` = `j`.`id_tw`)) ;

-- --------------------------------------------------------

--
-- Structure for view `data_mtr`
--
DROP TABLE IF EXISTS `data_mtr`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `data_mtr`  AS  select `tw`.`id` AS `id`,`tw`.`nama_tempat` AS `nama_tempat`,`tw`.`foto` AS `foto`,`j`.`mataram` AS `jarak`,`tw`.`biaya` AS `biaya`,`tw`.`fasilitas` AS `fasilitas` from (`tempat_wisata` `tw` join `jarak` `j` on(`tw`.`id` = `j`.`id_tw`)) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jarak`
--
ALTER TABLE `jarak`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_tw` (`id_tw`);

--
-- Indexes for table `tempat_wisata`
--
ALTER TABLE `tempat_wisata`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`) USING BTREE;

--
-- Indexes for table `temp_calc`
--
ALTER TABLE `temp_calc`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_tw` (`id_tw`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jarak`
--
ALTER TABLE `jarak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `tempat_wisata`
--
ALTER TABLE `tempat_wisata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `temp_calc`
--
ALTER TABLE `temp_calc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=144;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jarak`
--
ALTER TABLE `jarak`
  ADD CONSTRAINT `jarak_ibfk_1` FOREIGN KEY (`id_tw`) REFERENCES `tempat_wisata` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tempat_wisata`
--
ALTER TABLE `tempat_wisata`
  ADD CONSTRAINT `tempat_wisata_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
