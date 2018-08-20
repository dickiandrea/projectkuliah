-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2017 at 10:53 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simpel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `kode_admin` int(11) NOT NULL,
  `nama_admin` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `kode_akses` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`kode_admin`, `nama_admin`, `username`, `password`, `email`, `no_hp`, `kode_akses`) VALUES
(2, 'Kimia', 'kimia', '$2y$10$rZ4UsYsl8BMwJJDfIchy1uo3O0PpoVZvE9LMFG5v5GDiPKBnc0mFO', 'kimia@gmail.com', '190283', 'LK'),
(3, 'Pelayanan Jasa', 'gatot', '$2y$10$rA8AISRCwyUIjXLeVn.Ef.di1LuHcBm6ki6hxMJLjdURjLi7eFOl.', 'gatot@gmail.com', '0283129213', 'PL'),
(4, 'Mineralogi', 'mineralogi', '$2y$10$Qma3vFxnb1xGfrRItBTvQ.TFd2wKvOr3xDgmFDFlCZMfVKfAYoRq6', 'tri@gmail.com', '9201312', 'LM'),
(5, 'Biologi', 'biologi', '$2y$10$li9u.RuH2f2XEnCBMxEFtOUt5Hm06oBq2Va6PEJscyyK8SmzshOZq', 'ghifary@gmail.com', '820193', 'LB'),
(6, 'Fisika', 'fisika', '$2y$10$BADu8nyHVYNiO09m9bRQVuXqRDw4/AE0tn6MNQ531w8DOy2zk8YsG', 'dicki123andrea@gmail.com', '9819023', 'LF');

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE `administrator` (
  `kode_admin` int(11) NOT NULL,
  `nama_admin` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`kode_admin`, `nama_admin`, `username`, `password`) VALUES
(1, 'Dicki Andrea', 'dickiandrea', '$2y$10$RVFRSLg2WoCc42PlWjDRF.F0eDkr45wkvg5CgDAoqZ0XsNmBkyRm6');

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id` int(4) NOT NULL,
  `username` varchar(50) NOT NULL,
  `instansi` text NOT NULL,
  `kode_user` int(3) NOT NULL,
  `isi` text NOT NULL,
  `tanggal` datetime NOT NULL,
  `tampil` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id`, `username`, `instansi`, `kode_user`, `isi`, `tanggal`, `tampil`) VALUES
(1, 'gia', 'Bews Code INC', 1, 'saya minta bantuan', '2017-09-20 10:47:40', 'ya'),
(2, 'gia', 'Bews Code INC', 1, '/././.', '2017-09-26 14:55:12', 'ya'),
(3, 'dicki', 'Andrea Liberation', 2, 'mas saya mau pesan bisa tidak?', '2017-09-27 09:57:55', 'ya'),
(4, 'dicki', 'Andrea Liberation', 2, 'boleh tidak mas?', '2017-09-27 09:58:10', 'ya'),
(5, 'dicki', 'Andrea Liberation', 2, 'Mas tolong respon?', '2017-09-27 09:58:21', 'ya'),
(13, 'admin', 'balittanah', 1, 'hei gif', '2017-09-27 15:43:30', 'ya'),
(14, 'admin', 'balittanah', 1, 'belajar yuk', '2017-09-27 15:47:32', 'ya'),
(15, 'admin', 'balittanah', 1, 'bung', '2017-09-27 15:57:10', 'ya'),
(16, 'admin', 'balittanah', 1, 'Kapan mau belajar bareng?Katanya mau', '2017-09-27 16:20:27', 'ya'),
(17, 'admin', 'balittanah', 1, 'belajar hayu', '2017-09-27 16:20:38', 'ya'),
(18, 'admin', 'balittanah', 1, 'sekolah dimaan kgi adsf aksdjhf asdkjfh askdjfh akdjfh adsfb', '2017-09-27 16:20:53', 'ya'),
(21, 'gia', 'Bews Code INC', 1, 'Selamat Malam', '2017-09-27 20:25:12', 'ya'),
(22, 'admin', 'balittanah', 1, 'Halo selamat malam', '2017-09-27 20:25:41', 'ya'),
(23, 'admin', 'balittanah', 1, 'coba', '2017-09-27 20:25:55', 'ya'),
(24, 'gia', 'Bews Code INC', 1, 'saya mau tanya,\r\nkenapa saya sedih?', '2017-09-27 20:26:01', 'ya'),
(25, 'gia', 'Bews Code INC', 1, 'BALES WOY', '2017-09-27 21:23:22', 'ya'),
(26, 'gia', 'Bews Code INC', 1, 'TEST', '2017-09-27 21:26:36', 'ya'),
(27, 'admin', 'balittanah', 1, 'cek ', '2017-09-27 21:26:58', 'ya'),
(28, 'gia', 'Bews Code INC', 1, 'Satu', '2017-09-27 21:43:39', 'ya'),
(29, 'gia', 'Bews Code INC', 1, 'Khial', '2017-09-27 21:44:54', 'ya'),
(30, 'gia', 'Bews Code INC', 1, 'asdkjf', '2017-09-27 21:52:03', 'ya'),
(31, 'admin', 'balittanah', 1, 'dasd', '2017-09-27 23:07:33', 'ya'),
(33, 'admin', 'balittanah', 1, 'Hei gif', '2017-10-02 14:13:56', 'ya'),
(34, 'gia', 'Bews Code INC', 1, 'MINTA BANTUAN', '2017-10-02 14:52:12', 'ya'),
(36, 'admin', 'balittanah', 1, 'hi', '2017-10-17 11:03:53', 'ya'),
(37, 'admin', 'balittanah', 1, 'apa', '2017-10-17 11:04:02', 'ya'),
(38, 'admin', 'balittanah', 1, 'Hai', '2017-10-21 07:22:50', 'ya'),
(39, 'dicki', 'Andrea Liberation', 2, 'min', '2017-10-21 08:11:03', 'ya'),
(40, 'admin', 'balittanah', 2, 'kenapa?', '2017-10-21 08:16:34', 'ya'),
(41, 'admin', 'balittanah', 2, 'Mau kesini?', '2017-10-21 08:16:42', 'ya'),
(42, 'dicki', 'Andrea Liberation', 2, 'Jaka', '2017-10-21 08:25:48', 'ya'),
(43, 'admin', 'balittanah', 1, 'Ghifary', '2017-10-21 08:34:14', 'ya'),
(44, 'admin', 'balittanah', 1, 'Apa kabar?', '2017-10-21 08:34:24', 'ya'),
(45, 'dicki', 'Andrea Liberation', 2, 'gif', '2017-10-21 08:37:21', 'ya'),
(46, 'dicki', 'Andrea Liberation', 2, 'coba', '2017-10-21 08:47:34', 'ya'),
(47, 'admin', 'balittanah', 2, 'apa kabar?', '2017-10-21 08:48:12', 'ya'),
(48, 'dicki', 'Andrea Liberation', 2, 'wo', '2017-10-21 08:48:48', 'ya'),
(49, 'dicki', 'Andrea Liberation', 2, 'ki', '2017-10-21 09:14:26', 'ya'),
(50, 'dicki', 'Andrea Liberation', 2, 'coba', '2017-10-21 09:17:21', 'ya'),
(51, 'dicki', 'Andrea Liberation', 2, 'dicki', '2017-10-21 09:22:01', 'ya'),
(52, 'admin', 'balittanah', 1, 'dicki?', '2017-10-22 16:12:29', 'ya'),
(53, 'admin', 'balittanah', 1, '', '2017-10-22 16:15:12', 'ya'),
(54, 'admin', 'balittanah', 1, 'admin?', '2017-10-22 16:15:17', 'ya'),
(55, 'admin', 'balittanah', 3, 'gatot?', '2017-10-22 16:17:26', 'ya'),
(56, 'admin', 'balittanah', 0, '', '2017-10-22 16:22:18', 'ya'),
(57, 'admin', 'balittanah', 0, '', '2017-10-22 16:36:37', 'ya'),
(58, 'admin', 'balittanah', 1, '', '2017-10-22 18:50:46', 'ya'),
(59, 'dicki', 'Andrea Liberation', 2, 'Min.. bantuin', '2017-10-22 18:56:41', 'ya'),
(60, 'admin', 'balittanah', 2, 'Kenapa?', '2017-10-22 18:56:57', 'ya'),
(61, 'dicki', 'Andrea Liberation', 2, 'Form penilaiai : Dicki Andrea\r\n\r\nHdusbaj', '2017-10-30 13:17:45', 'ya'),
(62, 'dicki', 'Andrea Liberation', 2, 'Test', '2017-10-30 13:18:34', 'ya'),
(63, 'dicki', 'Andrea Liberation', 2, 'Assalamualaikum', '2017-10-30 13:19:20', 'ya'),
(64, 'anggota1', 'fkmi', 4, '1). untuk Dicky :\r\nkritik : jangan memendam unek-unek sendirian, karena akan berdampak pada anggota semuanya.\r\nSaran: terbuka yah, kita keluarga dan akan terus jadi keluarga wahai saudaraku. jadi cerita\r\nkalo ada apa jangan dipendam sendiri.', '2017-10-30 19:33:48', 'ya'),
(65, 'anggota1', 'fkmi', 4, 'Dandi : Jangan jadi pribadi yang individualis. Kalo ada apa-apa koordinasikan dan komunikasikan dulu. Semoga ke depannya tidak menjadi pribadi yang individualis lagi. Semoga bisa menjadi pribadi yang lebih baik lagi', '2017-10-30 19:33:49', 'ya'),
(66, 'anggota1', 'fkmi', 4, 'untuk dicki : \r\ndicki itu tegas namun terkadang kurang bisa mengontrol emosialnya (EQ) sehingga pada saat forum diskusi mudah terpancing untuk terbawa suasana. Kurangnya koordinasi bahwasanya dia harus mempersiapkan angkatan 15 itu harus jadi pengisi namun tidak ada latihan untuk pengisi yang baru sehingga dia yang harus menjadi pengisi padahal jadwal dia itu terlalu sibuk.', '2017-10-30 19:34:32', 'ya'),
(67, 'anggota1', 'fkmi', 4, 'Untuk dandi :\r\nDandi itu orangnya hebat, minat bacanya bagus. Dan perhatian dengan masa depannya kedepan. Khususnya masa depan dakwah di FKMI. Makanya salut dia suka inisiatif bikin gambar dll. Jadi, mudah mudahan dandi bisa istiqomah.\r\n\r\nTapi kasian dandi itu, dandi orgnya yg gabisa nerima kesalahan dan itu kadang jadi beban berlebihan bg dia. \r\nKeep Istiqomah ya dan', '2017-10-30 19:35:48', 'ya'),
(68, 'anggota1', 'fkmi', 4, 'Untuk Reza : Coba tolong kondisikan ketika mood sedang tidak baik. Bila, mood ente lagi ga baik. Semua anggota kena imbasnya. Tolong, jika ada masalah dan sedang tidak mood tolong dikondisikan. Semoga kedepannya bisa menempatkan moodnya pada tempatnya..', '2017-10-30 19:37:54', 'ya'),
(69, 'anggota1', 'fkmi', 4, 'tri, \r\njangan kerjain sendiri ikhwan suratnya. sok mangga butuh bantuan kita bantu :-).\r\nsaran , terus semangat dan jangan lelah , jangan sungkan ketika minta bantuan. ', '2017-10-30 19:38:05', 'ya'),
(70, 'anggota1', 'fkmi', 4, 'untuk ghifari :\r\ntegas, bisa menjadi contoh untuk yang lain namun di sisi lain sering menyebarkan virus merah jambu pada saat bercanda entah itu hanya bercanda atau udah kebelet beneran. mungkin pada saat bercanda sesekali boleh saja namun jangan terlalu sering', '2017-10-30 19:40:33', 'ya'),
(71, 'anggota1', 'fkmi', 4, 'Untuk Rifqi : Bila tidak suka dengan anggota yang ada di fkmi omongkan saja, saya rasa ente tidak suka dengan ane. Jadi, serasa dibedakan saja dengan yang lain. Kedepannya anggap saya sebagai sodara anda, karena kita disini keluarga.', '2017-10-30 19:40:47', 'ya'),
(72, 'anggota1', 'fkmi', 4, 'Untuk Iqbal Ibrahim :\r\nKadang suka bingung apa yg dialami iqbal dirumahnya. Karena ngga habis fikir kalo bapak sampe bilang kasar ke anaknya gitu. Sebab bila kita berkomunikasi baik sama orang tua atau teman pasti semuanya pun baik ke kita.\r\n\r\nIqbal itu tipe orang yg nunggu perintah, jarang sekali inisiatifnya. Contohnya bila buat tulisan, kayak gamau eksplore diri buat nulis. Padahal nulis itu harus dipaksain biar terbiasa. Jangan cuma nunggu perintah upload aja... kan bukan babu', '2017-10-30 19:41:40', 'ya'),
(73, 'anggota1', 'fkmi', 4, 'untuk tri :\r\nharapannya jangan terlalu disibukan dengan duniawinya atau kampusnya saja, diharapkan saat menjadi sekertaris dijalankan dengan baik karena banyak dari kawan2 terkadang membuat surat sendiri', '2017-10-30 19:42:21', 'ya'),
(74, 'anggota1', 'fkmi', 4, 'ghifary, sungguh ada banyak perbedaan diantara kita. ngajinya pun lebih lama dari kita.\r\ndengan hal ini menjadi sebuah kewajaran kami berbeda jauh ketika disandingkan dengan antum. maka, kami mohon jangan terlalu kasar ketika berucap, hati manusia tidak ada yg tahu ketika ia menganis dan ketika ia bahagia. kami suka kritik dan saran tapi kami mohon jangan dengan bahasa yang tegas menyayat hati.\r\nsaran, rendahkan suara dan kata ketika berucap.', '2017-10-30 19:42:58', 'ya'),
(75, 'anggota1', 'fkmi', 4, 'Untuk Ahmad : Ahmad orang nya sopan, namun ahmad tidak bisa diajak mikir keras. Alias, kurang daya kritisnya, coba untuk banyak baca buku, agar tingkat ke kritisan ahmad bisa naik. Jangan banyakin main Mobile Legend mulu. Kurangi mainnya.', '2017-10-30 19:43:32', 'ya'),
(76, 'anggota1', 'fkmi', 4, 'Untuk Iqbal Lukman :\r\nBal, ente tuh udah gede jangan sampe nempel terus ke orang lain. Udah saatnya ente jadi sosok yang bisa jadi teladan. Kalo kajian pun, ngomong aja sampaikan ide dan gagasannya jangan cuma jadi penonton.\r\n\r\nDiinfokom pun gakeliatan geraknya. nongol gapernah dan apalagi kalo di minta buat kumpul dihari libur. susah minta ampun.', '2017-10-30 19:45:51', 'ya'),
(77, 'anggota1', 'fkmi', 4, 'Untuk Iqbal Lukman : Mohon lebih aktiv lagi dalam departemen nya, jangan nunggu perintah dulu, harus inisiatif.', '2017-10-30 19:46:12', 'ya'),
(78, 'anggota1', 'fkmi', 4, 'untuk ari :\r\ndia mempunyai kelebihan untuk menjadi ketua umum selanjutnya diharapkan sifat ketegasannya untuk mengkoordinasi dan membantu kawan2 yang lain agar pada saat dia menjadi ketum, kawan2 yang lain dapat segan dengan ketegasannya. dan agar merangkul anggota 15 karena anggota 15 lah yang akan memimpin selanjutnya dan menjadi musyrif untuk adik2 kelasnya', '2017-10-30 19:46:30', 'ya'),
(79, 'anggota1', 'fkmi', 4, 'Untuk aris : Jangan pundung bila di kritik, jangan marah. Kurangin main mobile legend nya.', '2017-10-30 19:47:35', 'ya'),
(80, 'anggota1', 'fkmi', 4, 'untuk ari : kritik : jangan suka nyuruh-nyuruh dengan suara yg tinggi dan nyindir karena jadi gak enak ngerjain tugasnya.\r\nsaran : nyuruh dengan penuh cinta jangan penuh dingin. \r\nsemangat yah , saya salut pada antum.', '2017-10-30 19:47:36', 'ya'),
(81, 'anggota1', 'fkmi', 4, 'Untuk Nugraha :\r\nJangan malu untuk ngobrol sama orang tua ya. Inget org tua itu bakal ngizinin kita untuk aktif di mana aja asalkan aktif kita bener. Nah biar org tua tau kita aktif di lingkungan yg bener cerita..', '2017-10-30 19:47:58', 'ya'),
(82, 'anggota1', 'fkmi', 4, 'untuk firman :\r\njangan terlalu sibuk dengan jualannya, jangan terlalu suka berbicara dengan nada yang tinggi seprti orang yang ssedang marah apalagi di tempat umum', '2017-10-30 19:48:05', 'ya'),
(83, 'anggota1', 'fkmi', 4, 'Untuk Hermawan : Karibku, kamu tau kan kita disini keluarga, tolong anggap saya keluarga, bila kajian dimohon untuk hadir terus kawanku, jangan mencari kepuasan akal saja.', '2017-10-30 19:48:32', 'ya'),
(84, 'anggota1', 'fkmi', 4, 'iqbal lukman ;\r\njangan menyepelekan untuk datang ke kampus karena dia sering telat dan tidur di kelas, jika libur harap tetap lost kontak dengan fkmi, karena pada saat di butuhkan waktu libur, dia malah pergi menghilang dan lupakan', '2017-10-30 19:49:48', 'ya'),
(85, 'anggota1', 'fkmi', 4, 'untuk firman :\r\nkritikan dari ane, jangan panik yah kalo ada masalah apapun, kita pasti bantu .\r\nsaran : jangan mudah panik karena kita tak berjuang sendiri.', '2017-10-30 19:50:04', 'ya'),
(86, 'anggota1', 'fkmi', 4, 'Untuk Firman : Jangan terlalu sibuk dengan dagangannya man, semoga kedepannya bisa memanage waktunya dengan baik lagi.', '2017-10-30 19:50:29', 'ya'),
(87, 'anggota1', 'fkmi', 4, 'Untuk Ari Rinaldi :\r\njangan jadi org yg gapercayaan sama temen yg lain. Harus percaya. \r\nJangan pandang temen yg lain itu sebelah mata, harus profesional dan kompak pada temen seangkatan.\r\nKalo curhat sm org jangan ditempat yg umum. Jangan sampe org lain seperti org yg gadipercaya sama ente dan kayak di kambing conge in', '2017-10-30 19:51:14', 'ya'),
(88, 'anggota1', 'fkmi', 4, 'Untuk Dicki : Saran : Semoga bisa lebih tegas lagi kepada anggotanya, agar si anggota nya bisa menjalankan amanahnya.', '2017-10-30 19:52:19', 'ya'),
(89, 'anggota1', 'fkmi', 4, 'iqbal ibrahim :\r\nharap jika ada permasalan langsung di bicarakan ke kawan2 agar tidak dipendam sendiri, karena jika seperti itu kawan2 yang lain pada husnuzhon jika dia bisa menyelesaikan masalahnya sendri', '2017-10-30 19:52:24', 'ya'),
(90, 'anggota1', 'fkmi', 4, 'iqbal .I : jangan bergerak sendiri dan jangan tinggalkan anggotanya sendiri.\r\nselalu kerja sama yah bal. tapi mantap deh bray ', '2017-10-30 19:53:40', 'ya'),
(91, 'anggota1', 'fkmi', 4, 'Untuk ari rinaldi : Kritik : Coba klo ngomong jangan tinggi2, nada rendah aja. Saran : Bila me-taklif seseorang harus dengan cara yang hasan.', '2017-10-30 19:53:47', 'ya'),
(92, 'anggota1', 'fkmi', 4, 'ashabal :\r\njangan malu2 untuk berbicara di depan kawan2, harus dipandu dulu agar bisa mencontohkan. jangan terlalu sering main mobile legend karena tidak akan dapet 7M dari aov', '2017-10-30 19:54:14', 'ya'),
(93, 'anggota1', 'fkmi', 4, 'Untuk Reza :\r\nStop ngeluh za. Ente harus percaya sama kemampuan ente. \r\n\r\nAntum tuh kadang kayak bos darling. Nyuruh-nyuruh terus. Dan nyuruhnya via chat tanpe bilang tolong lagi. Antum itu koordinator harus bisa merangkul yg lain dan harus percaya dan tegas sm lain', '2017-10-30 19:54:16', 'ya'),
(94, 'anggota1', 'fkmi', 4, 'Untuk Ghifary : Jangan nyebarin virus merah jambu terus, kan ane juga jadi ikut2an. Kedepannya semoga bisa di kurang2in nyebar virus merah jambunya.', '2017-10-30 19:55:11', 'ya'),
(95, 'anggota1', 'fkmi', 4, 'untuk Ashabal : yuk ahk jangan jangan sungkan untuk meminta bantuan. jangan dipendam sendirian. kita pasti bantu kok Mas.\r\njadi, jangan takut tugas tidak selelai karena pasti kita bantu', '2017-10-30 19:56:13', 'ya'),
(96, 'anggota1', 'fkmi', 4, 'ahmad :\r\njangan sering ngerem mulu di kosan sampai bertelur sehingga jarang ke sekret. bila ada amanah untuk mengajar tahsin jangan telat karena kasihan yang sudah menunggu lama', '2017-10-30 19:56:13', 'ya'),
(97, 'anggota1', 'fkmi', 4, 'Untuk Firman :\r\nFirman itu emosional. Hobinya dagang dan kalo belajar suka susah nangkep.\r\n\r\nFirman jgn suka nguping orang lagi ngomong. dan firman jangan suka stalking hp org lain tanpa izin. Ga sopan itu', '2017-10-30 19:56:16', 'ya'),
(98, 'anggota1', 'fkmi', 4, 'Untuk Nugraha : Jangan loyo jadi orang, jadi laki2 harus tegas.', '2017-10-30 19:56:21', 'ya'),
(99, 'anggota1', 'fkmi', 4, 'ahmad :\r\njangan terlalu sering main mobile legend, jangan terlalu sering menunggu nunggu intruksi mulu', '2017-10-30 19:57:14', 'ya'),
(100, 'anggota1', 'fkmi', 4, 'Untuk Aris :\r\nUdah kayak buntutnya awan, setiap kegiatan langsung weh pulang. Bukannya nongkrong dulu, ngobrol dulu.', '2017-10-30 19:57:37', 'ya'),
(101, 'anggota1', 'fkmi', 4, 'hermawan :\r\njangan di kosan mulu, main lah ke sekret. jika ada amanah untuk ngajar tahsin jangan telat', '2017-10-30 19:58:17', 'ya'),
(102, 'anggota1', 'fkmi', 4, 'Untuk Rizal :\r\nSetiap kegiatan suka ga datang tanpa konfirmasi. Bikin dosa mulu bagi yg lain, karena malah mancing anggota lain untuk suudzon.\r\nNongkrongnya jarang. Udah kayak kupu-kupu, padahal katanya aktivis dakwah islam.\r\n\r\nHarus lebih aktif kumpul zal, jangan sendirian mulu', '2017-10-30 19:59:19', 'ya'),
(103, 'anggota1', 'fkmi', 4, 'iqbal luqman, mantap pemahaman tentang logistik telah mempenghuni dan sudah bagus tapi kadang masih suka gak kekampus jadi gak bisa bantu divisi logistik yg berjumlah 2 orang', '2017-10-30 19:59:26', 'ya'),
(104, 'anggota1', 'fkmi', 4, 'reza :\r\njangan lupa dengan amanah tugas di kampus, terlalu sering mengingatkan amanah ke yang lain sehingga tugas di kampus jarang di kerjakan. ', '2017-10-30 19:59:45', 'ya'),
(105, 'anggota1', 'fkmi', 4, 'Untuk asep : Jangan baper kalo di kritik, karna dengan kritikan itu lah yang bisa membuat antum berubah dan menjadi pribadi yang lebih baik lagi.', '2017-10-30 19:59:46', 'ya'),
(106, 'anggota1', 'fkmi', 4, 'Untuk tri : Jangan menunda-nunda amanah, bila ada amanah dimohon langsung mengerjakan.', '2017-10-30 20:00:17', 'ya'),
(107, 'anggota1', 'fkmi', 4, 'nugraha :\r\njangan malu2 walaupun suka malu2in tapi untung aja ganteng, tingkatin terus tsaqomah karena dia akan menjadi pengisi untuk kawan2 angkatan2 yang baru masuk di fkmi', '2017-10-30 20:01:48', 'ya'),
(108, 'anggota1', 'fkmi', 4, 'Untuk Kak Ghifa :\r\nPembuat makar, ngomongnya akhwat wae.\r\nGa profesional, mentang-mentang senior susah banget di kasih taklif nya. Dan kayak nyepelein taklif', '2017-10-30 20:01:52', 'ya'),
(109, 'anggota1', 'fkmi', 4, 'Untuk Ilham : Semoga bisa memanage waktu dengan baik lagi ya. Kapan bisa dagang dan kapan bisa dakwah.', '2017-10-30 20:01:53', 'ya'),
(110, 'anggota1', 'fkmi', 4, 'untuk hermawan , memiliki skil dalam data yg akurat dalam pemahaman apapun tapi sifat individualnya masih kuat juga. jadi ayolah kita berkerja sama dalam membangun sukses acara FKMI. kita sama berjuangan wan dunia akhirat.', '2017-10-30 20:03:15', 'ya'),
(111, 'anggota1', 'fkmi', 4, 'Untuk Kak Tri Rahmat :\r\nPunya masalah tuh jangan di pendem, ceritain... Kalo gabisa itu, bilang minta bantuan ke yg lain, jangan maksain diri. ', '2017-10-30 20:03:22', 'ya'),
(112, 'anggota1', 'fkmi', 4, 'rizal :\r\ncoba untuk nongkrong di sekret agar bisa sharing2 dengan kawan2 yang lain jika ada permasalahan kan bisa di bantu memikirkannya oleh kawan2 yang lain. ok', '2017-10-30 20:03:28', 'ya'),
(113, 'anggota1', 'fkmi', 4, 'Untuk rizal : Semoga kedepannya bisa membagi waktu dengan keluarga, kuliah dan dakwah ya. Karena dari awal, dirimu sudah konsisten dengan jalan dakwah ini.', '2017-10-30 20:03:59', 'ya'),
(114, 'anggota1', 'fkmi', 4, 'Untuk Ahmad :\r\nAntum itu punya amanah dari orang tua untuk kuliah yg bener. Jangan males-malesan belajar. Dan jangan anggap sepele kuliah atau tugas yg lain.', '2017-10-30 20:04:16', 'ya'),
(115, 'anggota1', 'fkmi', 4, 'untuk Ahmad, jangan dipendam sendiri mad, antum punya anggota dan kawan pasti dibantuin yahhhh. tapi kinerja nya sudah mantap ahmad', '2017-10-30 20:05:01', 'ya'),
(116, 'anggota1', 'fkmi', 4, 'dandi :\r\npemahaman serta keahlian berbicara serta merangkai kata2nya bagus namun coba untuk mengkontak dosen2 ilkom dibimbing oleh kawan2 yang lainnya agar belajar untuk mengkontak dosen, jangan hanya mengkontak teman2 sebayanya saja', '2017-10-30 20:05:39', 'ya'),
(117, 'anggota1', 'fkmi', 4, 'Untuk Hermawan :\r\nAneh, pemahaman agamanya bagus tapi kayak yg ga sadar sama pemahamannya. Dakwah itu harus bisa berkorban. Dan jgn ngorbanin dakwahnya. Inget lalai dari amanah itu sama aja maksiat.\r\nBanyakin ngongkrong, bila perlu kerjain laporan pun di sekret. Jangan jadi kupu kupu mulu', '2017-10-30 20:06:42', 'ya'),
(118, 'anggota1', 'fkmi', 4, 'ilham :\r\nharap koordinasi dengan kawan2 yang lainnya, apa lagi infokom jangan diem aja atau nunggu intruksi sehingga kita tidak tau sejauh mana sudah berjalan amanah yang sudah di jalankan', '2017-10-30 20:07:01', 'ya'),
(119, 'anggota1', 'fkmi', 4, 'asep :\r\njangan males jika di kasih amanah, jangan mengharapkan atau di semprot dulu oleh yang lain baru mau gerak, ', '2017-10-30 20:08:27', 'ya'),
(120, 'anggota1', 'fkmi', 4, 'Untuk Asep :\r\nAntum itu susah diaturnya, dan ana bingung niatan antum masuk FKMI.\r\nJadi anggota itu harus samingna waatongna, kalo gamau yaudah keluar aja.\r\n\r\nJangan sampe FKMI jadi tempat pelarian dan numpang nama doang.\r\nDan antum tuh cengen, baperan. ', '2017-10-30 20:09:19', 'ya'),
(121, 'anggota1', 'fkmi', 4, 'reza : kritik : jangan suuzon  dengan pemikiran yg liar terhadap anggotamu. karena reza dan dicky itu berbeda. tak bisa disamakan , jadi kami bukan tidak menghormati reza tapi kami senang dengan reza yg mudah tertawa ketika diberi candaan.\r\npemimpin tak perlu meminta penghormatan karena kehormatan akan menghampiri dengan sendirinya. semangat , kami pasti samina wa,atona.', '2017-10-30 20:09:56', 'ya'),
(122, 'anggota1', 'fkmi', 4, 'rifqi :\r\nsering2 main2 ke sekret, jika ada tugas sharing2 aja ke kawan2 farmasi yang lain. tolong untuk on atau respon agar dapat dihubungi oleh kawan2 yang lain', '2017-10-30 20:10:10', 'ya'),
(123, 'anggota1', 'fkmi', 4, 'Untuk Rifqi :\r\nJangan abai  koordinasi di di grup. Kordinasi, komunikasi dan konsultasi itu ruhnya organisasi.', '2017-10-30 20:10:47', 'ya'),
(124, 'anggota1', 'fkmi', 4, 'untuk: Semua Anggota FKMI\r\njika ada anggota fkmi yang jarang terlihat atau tidak kelihatan. saran ane untuk teman2 jangan dulu mengambil stigma negatif kepada orang tersebut semisal "Dia mah males atau stigma negatif lainnya". Bisa saja orang tersebut mengalami "FUTUR" sehingga ia membutuhkan dorongan dari teman2 fkmi lain. Saran ane yang lain coba untuk tanya "kenapa jarang hadir" atau "Ada masalah apa" dengan melontarkan pertanyaan tersebut orang itu merasa dipedulikan oleh anggota lain karena ia butuh support dan dorongan dari teman2 lainnya.  \r\n', '2017-10-30 20:11:13', 'ya'),
(125, 'anggota1', 'fkmi', 4, 'untuk nunu, kerjanya cepat sekali di divisinya tapi kalo ada apa apa jangan dipendam sediri yah nu. semangat', '2017-10-30 20:12:13', 'ya'),
(126, 'anggota1', 'fkmi', 4, 'untuk dicki :\r\nkalo menyampaikan sesuatu kata-katanya kecepetan dan bahasanya sulit dimengerti', '2017-10-30 20:13:10', 'ya'),
(127, 'anggota1', 'fkmi', 4, 'Untuk Ilham :\r\nHam ente itu jangan menokohkan ka ghifary terus.. Antum itu kalo ditaklif sama yg lain suka ga respon sedang kalo ka ghifa weh lancar. Kudu profesional ham.', '2017-10-30 20:13:43', 'ya'),
(128, 'anggota1', 'fkmi', 4, 'Asep, alhamdulilah semua nya hampir selesai divisinya tapi  sayang sedikit dari asep terlalu pede. sehingga kadang tak sadar melukai orang lain dengan sikap pedenya. tpi mantap sep terus semangat.', '2017-10-30 20:16:35', 'ya'),
(129, 'anggota1', 'fkmi', 4, 'Untuk Tri Rahmat : \r\nkalo ngomong jangan suka ngegas ', '2017-10-30 20:16:52', 'ya'),
(130, 'anggota1', 'fkmi', 4, 'include\r\nvoid main\r\n{\r\ncoutendl;\r\n}', '2017-10-30 20:19:30', 'ya'),
(131, 'anggota1', 'fkmi', 4, 'Untukl Ghifary :\r\njadilah contoh yang baik untuk para juniornya', '2017-10-30 20:20:10', 'ya'),
(132, 'anggota1', 'fkmi', 4, 'si ahmad jeng kang iqbal nyontek parahhhhhhh :DDDDDD hahahahaha\r\n', '2017-10-30 20:20:19', 'ya'),
(133, 'anggota1', 'fkmi', 4, 'untuk hermawan: jangan jadi orang yang individualis, coba lebih dengarkan saran dari orang lain, coba dibiasakan menghargai orang lain', '2017-10-30 20:20:40', 'ya'),
(134, 'anggota1', 'fkmi', 4, 'urang tihelan ahk kaluar nya ', '2017-10-30 20:21:29', 'ya'),
(135, 'anggota1', 'fkmi', 4, 'untuk Ari rinaldi: coba lebih menghargai orang lain, jangan membedakan anggota yang lain yang kurang, coba lebih di bimbing lagi', '2017-10-30 20:22:48', 'ya'),
(136, 'anggota1', 'fkmi', 4, 'Untuk Ari Rinaldi :\r\nbecandanya gak lucu.......Jadilah caketum yang lebih baik ', '2017-10-30 20:23:53', 'ya'),
(137, 'anggota1', 'fkmi', 4, 'unyuk ahmad : jangan menggampangkan sesuatu, dan dikurangkan maen game nya', '2017-10-30 20:24:18', 'ya'),
(138, 'anggota1', 'fkmi', 4, 'untuk aris, ahmad dan kang reza jeng rifki ulah loba teing MABAR MOLEEE bisi jadi kos kumis kang GHIF hehehehe', '2017-10-30 20:25:01', 'ya'),
(139, 'anggota1', 'fkmi', 4, 'Dicki :\r\nJangan bosen ngebimbing anggotanya, walaupun masih banyak yang leha2\r\nkarena kamipun masih butuh bimbingan dari akang, kami pun minta maaf kalo misal kan masih kurang pengorbanan dalam hal dakwah ini, mungkin karena kami belum merasa punya tanggung jawab. jadi harus di tekankan lagi.', '2017-10-30 20:25:46', 'ya'),
(140, 'anggota1', 'fkmi', 4, 'untuk untuk asep: coba untuk asep jangan pernah menceritakan kejelekan orang lain', '2017-10-30 20:26:50', 'ya'),
(141, 'anggota1', 'fkmi', 4, 'untuk dandi: jangan sungkan kalo mau minta pertolongan anggota yang lain ', '2017-10-30 20:27:56', 'ya'),
(142, 'anggota1', 'fkmi', 4, 'Untuk Firman :\r\nSUSAH DIBILANGIN...coba jangan dibiasain makanin upil/daki dan kotoran lainya  apa lagi pas lagi sholat udah berapa kali kepergok sama saya..yang baca pesan ini tolong kita tegor si firman sama" kasih tau kalo itu gak baik', '2017-10-30 20:28:15', 'ya'),
(143, 'anggota1', 'fkmi', 4, 'untuk reza : mantap lanjutkan', '2017-10-30 20:28:31', 'ya'),
(144, 'anggota1', 'fkmi', 4, 'Tri:\r\nKeep Khusnudzon !!!', '2017-10-30 20:29:46', 'ya'),
(145, 'anggota1', 'fkmi', 4, 'Iqbal Ibrahim :\r\nkeep istiqomah ', '2017-10-30 20:30:00', 'ya'),
(146, 'anggota1', 'fkmi', 4, 'kang dicky : buat kang dicky sudah bagus penyampaian untuk mengkritisi dari kendala tinggal tingkatkan lagi.\r\n\r\nashabal : buat ashabal padahal kan aris biasanya ngingetin buat danus hari ini.\r\n\r\ndan lainya buat jadwal danus harusnya respon dong klau d group soalnya duit buat kebutuhan bilt.\r\n\r\nbukan buat danus aja departemen yg lain jgan ngehandel akang 2014 cobalah belajar untuk buat kedewasaan', '2017-10-30 20:30:09', 'ya'),
(147, 'anggota1', 'fkmi', 4, 'Untuk Ashabal :\r\nkalo kajian jangan suka tidur..\r\n', '2017-10-30 20:34:11', 'ya'),
(148, 'anggota1', 'fkmi', 4, 'untuk diki : menjadi seorang pemimpin memang tidak mudah, apalagi menjadi pemimpin di organisasi islam, karena kaki kirinya berada di neraka, dan kaki kanan nya di surga..\r\n\r\njangan sungkan2 untuk bercerita keluh kesah apapun ke keluarga2 mu disini, karena saya melihat antum seperti memendam masalah, entah bisa menyelesaikan mslah nya sendiri atau memang itu benar2 privasi.\r\n\r\njadi saran dari saya, kalo ada apa2 cerita kali aja bisa meringkankan beban antum..', '2017-10-30 20:35:23', 'ya'),
(149, 'anggota1', 'fkmi', 4, 'Ghifary :\r\nMantap kang, untuk ngedidik itu memang butuh penegasan.', '2017-10-30 20:36:28', 'ya'),
(150, 'anggota1', 'fkmi', 4, 'untuk dicki: lebih tegas lagi, jangan membedakan untuk memberikan amanah ke anggota yang lain, coba untuk di tanyakan dan di bantu jika ada orang yang dapat masalah sehingga jarang keliatan', '2017-10-30 20:36:56', 'ya'),
(151, 'anggota1', 'fkmi', 4, 'Untuk Ahmad:\r\njangan kebanyakan main mobile legend keep istiqomah', '2017-10-30 20:37:11', 'ya'),
(152, 'anggota1', 'fkmi', 4, 'Untuk Hermawan :\r\nsering-sering ngumpul di sekret jalin ukhuwahnya jangan bertapa di kosan mulu', '2017-10-30 20:38:13', 'ya'),
(153, 'anggota1', 'fkmi', 4, 'untuk rizal: semoga istiqomah', '2017-10-30 20:38:22', 'ya'),
(154, 'anggota1', 'fkmi', 4, 'untuk kang dikci : Jangan malu buat negur anggota kalo lalai, harus tegas. jangan sering nyuapin temen2 tapi diberi mikir dulu dan terus ngawal\r\n', '2017-10-30 20:39:12', 'ya'),
(155, 'anggota1', 'fkmi', 4, 'untuk gifari : jgn meracuni teman2 dengan menyebarkan virus merah jambu, dan saat bercanda jgn berlebihan', '2017-10-30 20:39:13', 'ya'),
(156, 'anggota1', 'fkmi', 4, 'Ari Rinaldi:\r\nBagi2 ilmunya kang\r\nanggota lain masih butuh pemahaman buat persiapan kedepannya.\r\nbuat menjawab pertanyaan2 dari anggota di bawahnya.', '2017-10-30 20:41:04', 'ya'),
(157, 'anggota1', 'fkmi', 4, 'Untuk Reza :\r\nngasih amanah sesuai dengan kemampuan orang tersebut,dan harus jelas, kalo dapet amanah kerjakan sesuai dengan amanah tersebut...ini mah amanahnya apa diserahin ke orang dianya mah malah mainan mobile legend', '2017-10-30 20:41:51', 'ya'),
(158, 'anggota1', 'fkmi', 4, 'Firman :\r\nJangan terlalu fokus dengan hal lain\r\nfokus dulu dakwah', '2017-10-30 20:42:45', 'ya'),
(159, 'anggota1', 'fkmi', 4, 'untuk kang tri : \r\n1. komunikasi terus dijalankanjangan malu - malu ,  kalo banyak kerjaan yang gak bisa dikerjakan minta bantuan ke yang lain.\r\n2. kalo ngomong jangan ngegas mulu. harus terbuka kalo ada masalah', '2017-10-30 20:43:53', 'ya'),
(160, 'anggota1', 'fkmi', 4, 'Untuk rifqi :\r\n1) kalau ada masalah jangan dipendem sendiri\r\nbanyak temen yang bisa bantu\r\n\r\n2) kalau ada kekecewaan sama yang lain silahkan diungkapkan.\r\njangan dipendem sekalipun itu senior\r\n\r\n3) lebih aktif lagi dakwahnya.. semoga bisa menjadi contoh di angkatan 16', '2017-10-30 20:44:21', 'ya'),
(161, 'anggota1', 'fkmi', 4, 'Untuk Nugraha :\r\nkalo ada yang kesusahan tolong dibantu janagn nunggu disuruh dulu baru nolongin.jangan kaku banget ', '2017-10-30 20:46:25', 'ya'),
(162, 'anggota1', 'fkmi', 4, 'untuk ari : jgn kebanyakan bercanda, dan ketawa2, karena tertawa berlebihan mematikan hati.. bercanda nya pun jgn berlebihan, jadilah sosok yg bijaksana..', '2017-10-30 20:47:18', 'ya'),
(163, 'anggota1', 'fkmi', 4, 'Untuk Rizal :\r\ncobalah lebih sering nongkrong ke sekret dan jangan jadikan alasan tugas untuk tidak ngumpul bareng', '2017-10-30 20:47:51', 'ya'),
(164, 'anggota1', 'fkmi', 4, 'Untuk Asep :\r\n\r\nana gatau niatan antum masuk FKMI apa? diliat dari kesibukannya seperti menganggap ismafarsi lebih penting dari fkmi | giliran ismafarsi bela-belain sampe ke jakarta, ke luar kota | giliran hari libur ke fkmi susah | alasannya ada agenda ortu, giliran ke lampung gak takut sama ortu \r\n...................................\r\nkalau emang gak niat, bilang aja - jangan sampai jadi penghambat angkatan 15 | karena banyak yang ngeluh tentang antum | coba fokuskan niatnya lagi yang bener yang lurus buat dakwah \r\n...........................\r\njangan sampe cuman pencitraan dan ketenaran | upload foto di ig di sini di sana, biar keliatan keren - tapi geraknya tidak ada - semoga bisa memahami', '2017-10-30 20:48:02', 'ya'),
(165, 'anggota1', 'fkmi', 4, 'untuk firman : lebih baik lagi man manajemen waktunya, kapan jualan, kuliah atau dakwah..\r\ndan jgn dibenturkan antar ketiganya.. dan dakwah harus tetap jadi prioritas', '2017-10-30 20:48:52', 'ya'),
(166, 'anggota1', 'fkmi', 4, 'Untuk Dandi :\r\nTsakofahnya bagus semangatnya mantap tapi jangan lupa semangatnya dikontrol jangan terlaulu meluap luap udah kaya orang gila kadang-kadang ane ngeliatnya', '2017-10-30 20:49:25', 'ya'),
(167, 'anggota1', 'fkmi', 4, 'Iqbal lukman :\r\nAna kurang tw apa yg ada pada diri antum\r\njadi tunjukan lah apapun itu. yang penting positif', '2017-10-30 20:49:27', 'ya'),
(168, 'anggota1', 'fkmi', 4, 'untuk ghiffary :\r\n1. Jangan mancing2 temen2yang junior (khususnya terkait akhwat).\r\n2 kalo hadir agenda jangan keseringan telat.\r\n3. terus bimbing tapi jangan terlalu disuapin adeknya biar pada mikir dan bisa terus membimbing gerak temen2 dan mecutin arti pengorbanan.\r\n', '2017-10-30 20:50:13', 'ya'),
(169, 'anggota1', 'fkmi', 4, 'Untuk Ilham :\r\njanagn lupa walaupun di fkmi tetapi tetap jaga sopan santunya sama senior', '2017-10-30 20:50:38', 'ya'),
(170, 'anggota1', 'fkmi', 4, 'Iqbal Ibrahim :\r\nAntum cukup amanah orangnya \r\npatut di contoh\r\nsopan \r\nMantap !!', '2017-10-30 20:50:40', 'ya'),
(171, 'anggota1', 'fkmi', 4, 'ashabal :\r\nHarus siap menghadapi segala sesuatu\r\njangan males2an \r\nOK !!!', '2017-10-30 20:51:32', 'ya'),
(172, 'anggota1', 'fkmi', 4, 'Untuk Asep :\r\njadi orang harus amanah..jangan lalai jangan songong jangan kebanyakan tidur', '2017-10-30 20:53:01', 'ya'),
(173, 'anggota1', 'fkmi', 4, 'Hermawan :\r\nAntum memang orang yg paling me manaje waktu\r\ntapi sedikit2 nongkrong lah, \r\njangan dikit2 balik\r\nOK KANG!!', '2017-10-30 20:54:03', 'ya'),
(174, 'anggota1', 'fkmi', 4, 'buat kang firman : \r\n1. harus lebih dimanage lagi aktivitasnya, kapan waktu jualan, kapan waktu rapat, kapan waktu kajian dan kapan waktu kuliah.\r\n2. kalo komunikasi jangan gampang emosian.\r\n3. terus kalo anggota ada yang bercanda jangan terlalu dianggap serius.\r\n4. firman bagus punya kelebin dalam peduli ke pada sesama', '2017-10-30 20:54:17', 'ya'),
(175, 'anggota1', 'fkmi', 4, 'Untuk Rifqi :\r\nkalo ngomong yang kenceng jangan bisik-bisik.semangat jangan kaya orang nagntuk', '2017-10-30 20:54:23', 'ya'),
(176, 'anggota1', 'fkmi', 4, 'Untuk Ilham :\r\n\r\n1. jangan jadikan berbakti sama orangtua sebagai alasan untuk tidak berdakwah ---------\r\n2. kuliah dan kerja boleh, tapi dakwahnya harus bisa dilakukan secara profesional\r\nkerjain tugasnya | pengorbanan waktunya harus lebih ditonjolkan - khususnya ketika dapat amanah\r\n--------------------\r\n3. harus inisiatif dalam desain dan harus eksplore | desain itu bukan asal ada dan jadi, tapi harus serius dan totalitas | mengerahkan pikiran buat bikin desain yang baik\r\n---------------\r\n4. jangan banyak diem di grup -------------- \r\n5. jangan banyak ngeles kalau di kasih tau ---------', '2017-10-30 20:54:51', 'ya'),
(177, 'anggota1', 'fkmi', 4, 'untuk iqbal lukman : jadilah pribadi yg mandiri atau belajar sedikit2 mandiri', '2017-10-30 20:55:47', 'ya'),
(178, 'anggota1', 'fkmi', 4, 'kang Iqbal Lukman : \r\n1. antum masih malu2 padahal antum punya potensi bagus dan antum udah dewasa.\r\n2. cari teman yang enak buat diajak curhat\r\n3. gaya antum jangan teralu pleya - pleye harus tegas\r\n4. terus istiqomah bal.\r\n', '2017-10-30 20:57:29', 'ya'),
(179, 'anggota1', 'fkmi', 4, 'buat Dandi : \r\n1) kalau lagi ada halangan buat dakwah tolong kasih info - jangan hilang kontak \r\n2) tingkat kritis udah bagus tapi belum dilihat besar pengorbanannya - ketika di hari libur dan ada bentrok jadwal / kegiatan\r\n3) tingkat kritis udah bagus dan berani udah bagus - cuman masih individualis | kurang berbaur sama temen-temennya\r\n4) harus lebih berfikir poitis dan jangan keras kepala', '2017-10-30 20:58:07', 'ya'),
(180, 'anggota1', 'fkmi', 4, 'Reza :\r\nsebelum nya afwan kalo\r\nkami kurang menghargai antum, mungkin karena sering bercanda jadi kurang bisa membedakan mana lagi serius sama bercanda. itu juga evaluasi buat kami.', '2017-10-30 20:58:08', 'ya'),
(181, 'anggota1', 'fkmi', 4, 'untuk iqbal ibrahim : jgn buru2 pulang terus bal, entah mungkin antum ada kegiatan lain, tapi setidaknya bilang ke grup agar teman2 tidak berpikiran negatif..', '2017-10-30 21:00:12', 'ya'),
(182, 'anggota1', 'fkmi', 4, 'utk Rizal : \r\n1) ana masih belum tau tujuan rizal ke fkmi apa\r\n2) rizal jarang nongol di grup - entah karena malu atau gimana\r\n3) harus lebih berkomunikasi lagi sama temene2 sekitar | karena rizal doang yang jarang aktif\r\n4) kalau butuh rangkulan bilang aja. boleh secara personal ke orang yang dipercaya atau bilang ke forum\r\n5) semangat menyebarkan islam di DIPLOMA', '2017-10-30 21:00:55', 'ya'),
(183, 'anggota1', 'fkmi', 4, 'kang Iqbal Ibrahim : \r\n1. harus berani keluar dari zona nyaman.\r\n2. kalo ada masalah jangan terlalu dipendam tapi cerita kan ke orang yang menurut antum srek.\r\n3. harus rela berkorban waktu dan tenaga. \r\n4. harus bisa komunikasi degan orang tua.\r\n5 terus Istiqomah bal perjalan masih panjang', '2017-10-30 21:02:25', 'ya'),
(184, 'anggota1', 'fkmi', 4, 'Nugraha :\r\n1. kalau dikasih tugas jangan nyepelein dan nunda-nunda |\r\n2. kalau dikasih tugas jangan banyak ngeles |\r\n3. pengorbanannya sudah terlihat, tapi dalam melaksanakan tugas suka di entar-entar | menghambat waktu yang lain jadi gak optimal', '2017-10-30 21:02:44', 'ya'),
(185, 'anggota1', 'fkmi', 4, '1. Diki :Untuk kepemimpinan kang diki emang lebih tegas dan lebih terarah dalam konsep fkmi kedepannya, tapi masih banyak anggota yang belum sadar akan pentingnya dakwah islam, nah disitulah perlunya kita sebagai team, saling mengingatkan dan saling merangkul satu sama lain, tapi disini harus mengerti kemamppuan dan proposisi anggotanya masing masing, mana yang pemikir dan mana yang eksekutor , dan sambil mengerjakan amanah, sambil belajar jadi multi talens. dan saya khwatir akan fkmi kedepannyua jika angkatan 14 sudah tidak ada lagi,', '2017-10-30 21:02:52', 'ya'),
(186, 'anggota1', 'fkmi', 4, 'untuk aris : lebih ditingkatkan kembali semangat nya, karena sampai sekarang pengorbanan antum belum terlihat', '2017-10-30 21:03:44', 'ya'),
(187, 'anggota1', 'fkmi', 4, 'Kang Reza :\r\n\r\n1) banyak ngeluh seperti tdk punya jati diri sebagai lelaki\r\n2) banyak menunda pekerjaan\r\n3) banyak mikir hal negatif\r\n4) banyak takutnya\r\n5) kebanyakan nyengir gak jelas\r\n6) kebanyakan main game dan gak bisa memimpin tim', '2017-10-30 21:05:16', 'ya'),
(188, 'anggota1', 'fkmi', 4, '2. kang TRI. Jangan menghambat klerjanya tim, jangan mentang mentang di sekre ga punya proker maupun kegiatan, emang kerjaan sekre trus diem aja. dan ente harus udah sadar, jangan jadi anak mami, antum udahsemester 7\r\nharus paham lagi akan ilmu, perbaca baca dan kurangi chat chatr akhwat dan games juga ilangin,', '2017-10-30 21:06:15', 'ya'),
(189, 'anggota1', 'fkmi', 4, 'Nugraha :\r\nSelow ', '2017-10-30 21:06:27', 'ya'),
(190, 'anggota1', 'fkmi', 4, 'untuk kang ashabal : \r\n1. Jangan terlalu gampang emosi.kalo ngomong.\r\n2. harus inisiatif jangan nunggu instruksi\r\n3.perbanyak lagi kumpul dan literasi, antum punya potensi besar kang aris', '2017-10-30 21:06:43', 'ya'),
(191, 'anggota1', 'fkmi', 4, 'untuk ahmad : jgn sare wae dikosan sama maen hp..\r\ndan antum itu keliatan klo lg bingung, udh bingung tp jarang nanya, dan isinan wae..', '2017-10-30 21:07:51', 'ya'),
(192, 'anggota1', 'fkmi', 4, 'Rizal :\r\nLebih di perbaiki manajemen waktunya\r\ndahulu kan yg lebih penting dibanding yg hanya sekedar penting\r\nKeep istqomah OK !!', '2017-10-30 21:08:07', 'ya'),
(193, 'anggota1', 'fkmi', 4, 'Dandi :\r\njangan kebanyakan galau dan', '2017-10-30 21:09:55', 'ya'),
(194, 'anggota1', 'fkmi', 4, 'dicki :\r\n\r\n1. hilangkan rasa baqo nya - keliatannya apa yang ada di pikiran antum pengen direalisasiin terus - padahal yang lain gak paham dan gak bisa\r\n2. lebih ngebaur lagi sama temen-temen \r\n3. jangan cuman nanyain tugas dan laporan aja - tapi tanya juga kabar dan kesusahan yang lain\r\n4. antum kebanyakan fokus jadi kaya gak total jalanin fkmi - banyak sibuknya diluar\r\n5. jangan terlalu tinggi kalau bicara - turunin emosinya \r\n6 kalau ngasih tugas harus jelas dan detail - jangan setengah setengah\r\n7. lebih peduli sama anggota - jangan cuman ada rapat baru ngumpul - tapi butuh memperhatikan juga\r\n8. jangan terlalu serius jadi orang - takutnya pusing, jadi beban makanya banyak emosinya - bercanda weh sekali kali mah', '2017-10-30 21:09:58', 'ya'),
(195, 'anggota1', 'fkmi', 4, '3. Kang Ghiffary\r\n\r\nmohon STOP pembicaraan tentang akhwat maupun cinta.\r\nsisanya keren si bisa membimbing bawahan dengan cara yang berbeda dari kang diki.\r\n\r\n', '2017-10-30 21:10:05', 'ya'),
(196, 'anggota1', 'fkmi', 4, 'Untuk Ahmad Khudzaefi :\r\n1. Jangan terlalu menggampang kan persoalan segera kerjakan.\r\n2. banyakin literasi sesuai dengan fashion antum.\r\n3. harus sering ngobrol dengan anggota lainnya.\r\n4. janga main mobile legend terus\r\n5. antum punya potensi besar dengan fashion yang antum miliki.\r\n6. terus istiqomah dijalan dakwah ini\r\n7. dan kalo ada masalah janag dipendam', '2017-10-30 21:10:45', 'ya'),
(197, 'anggota1', 'fkmi', 4, 'untuk hermawan : sering2lah main ke sekret, ana melihat nya antum jarang main ke sekret diluar terus dan terlalu sibuk dengan kuliahnya..\r\nharus bisa dibagi2 antara kuliah dan dakwah', '2017-10-30 21:12:02', 'ya'),
(198, 'anggota1', 'fkmi', 4, 'Tri Rahmat :\r\n1. hilangin sikap ke kanak-kanakan\r\n2. kalau ada tugas jangan ditunda-tunda\r\n3. pengorbanan diri nya kurang\r\n4. jangan pelit kalau sama orang - karena suatu saat kita butuh yang lain\r\n5. intinya jadi sekertaris harus profesional kerjanya', '2017-10-30 21:12:20', 'ya'),
(199, 'anggota1', 'fkmi', 4, 'Ilham :\r\nSemangat ham dakwahnya sama jualannya\r\nMantap!!', '2017-10-30 21:12:37', 'ya'),
(200, 'anggota1', 'fkmi', 4, '4. Kang  Ari Rinaldi\r\n\r\nAri kebanyakan ngomong ga jelas tidak pada intinya.\r\ntapi dalam pemahaman agama wajar dia serba tahu karena dia di pesantren 6 tahun.\r\ntapi alangkah baiknya ilmu 6 tahunnya di bagikan secara benar ke anggota lainnya\r\n\r\nsemangat calon ketua', '2017-10-30 21:13:01', 'ya'),
(201, 'anggota1', 'fkmi', 4, '5 Kang Firman\r\n\r\nbisa di wajarkan karena kondisi yang di hadapi firman\r\n\r\ntapi saya salut dengan kerja keras dan semangat kang firman, yaitu berani tanpa malu malu', '2017-10-30 21:14:36', 'ya'),
(202, 'anggota1', 'fkmi', 4, 'ari rinaldi :\r\n1. kurangin pecicilannya karena anda calon ketum\r\n2. kurang merangkul temenya\r\n3. kurang tegas\r\n4. kurang ngajak temennya kalau kajian\r\n5. harus sering berbagi ilmu', '2017-10-30 21:14:50', 'ya'),
(203, 'anggota1', 'fkmi', 4, 'Asep :\r\nSemangat kang Kuliah sama dakwah nya\r\nTetep istiqomah ok!!', '2017-10-30 21:15:15', 'ya'),
(204, 'anggota1', 'fkmi', 4, 'untuk reza : antum suka tiba2 emosi, emosi nya juga gatau apa, entah kesel sm diri sendiri atau dengan timnya, kalo ada kesulitan sok omongin aja jgn dipendem sendiri, jgn dikerjain sendiri, antum bukan superman', '2017-10-30 21:16:03', 'ya'),
(205, 'anggota1', 'fkmi', 4, 'buat firman :\r\n1. kalau dikasih tau orang harus nurut gaboleh ngeyel\r\n2. jangan ngelakuin hal yang jorok mulu (makan upil, kulut kaki, daki, dll) jorok. bisa jadi malu-maluin fkmi\r\nnanti kata orang "ih anak fkmi ada yang makan daki sama upil" Malu\r\n3. jangan fokus jualan tapi fokusnya kuliah dan dakwah\r\n4. jualannya kurangin biar bisa ngerjain tugasnya cepet\r\n5. harus tegas jadi bendahara', '2017-10-30 21:16:37', 'ya'),
(206, 'anggota1', 'fkmi', 4, 'untuk kang hermawan :\r\n1. saya gak tau tujuan maksud akang masuk FKMI . entah akang cuma ingin eksis atau ingin numpang nama atau hal lain.\r\n2. harus sering berkumpul sama temen2 yang lain.\r\n3. harus terbuka jangan tertutup sering curhatlah\r\n4. janga terus mencoba untuk membenturkan agenda dakwah dengan agenda yag lainya. \r\n5. perlu praktek bukan hanya ngomong aja\r\n6. akang punya potensi besar.\r\n7. Allah Maha tahu apa yang ada pada diri antum baik maupun buruknya', '2017-10-30 21:17:00', 'ya'),
(207, 'anggota1', 'fkmi', 4, 'iqbal lukman :\r\n1. harus berani ngomong sama ortu kalau ada kajian\r\n2. terlalu manja dan ke kanak-kanakan\r\n3. ngerjain tugasnya lambat \r\n4. ga berani ngomong depan umum - gak kritis\r\n5. harus banyak mikir dan banyak baca\r\n6. laki-laki harus tegas\r\n7. jangan kebanyakan tidur - harus aktif', '2017-10-30 21:19:24', 'ya'),
(208, 'anggota1', 'fkmi', 4, 'untuk nugraha : boleh bercanda tapi ada waktunya, jgn disaat diajak ngobrol serius tapi masih dibawa becanda terus..\r\nuntuk dakwah mantap geraknya', '2017-10-30 21:20:24', 'ya'),
(209, 'anggota1', 'fkmi', 4, '5. kang Iqbal lukman\r\n\r\nsangat di wajarkan karena dia sering ngeluh lambat pemikiran.\r\n\r\nlebai, suka ga nurut sama amanahnya, kerjanya gajelas , harusnya bisa di maximalkan tingkat berfikirnyya dan Ayo berkorban demi Islam . karena dengan islam bisa menyelamatkan semua orang yang kita sayangi', '2017-10-30 21:20:42', 'ya'),
(210, 'anggota1', 'fkmi', 4, 'Rifqi :\r\nTetap semangat di jalan dakwah\r\njangan sampe mundur ok!!\r\nOrang jampang mah kudu kuat \r\nSelow aya urang kabehan', '2017-10-30 21:21:08', 'ya'),
(211, 'anggota1', 'fkmi', 4, '5. kang Iqbal lukman\r\n\r\nsangat di wajarkan karena dia sering ngeluh lambat pemikiran.\r\n\r\nlebai, suka ga nurut sama amanahnya, kerjanya gajelas , harusnya bisa di maximalkan tingkat berfikirnyya dan Ayo berkorban demi Islam . karena dengan islam bisa menyelamatkan semua orang yang kita sayangi', '2017-10-30 21:22:01', 'ya'),
(212, 'anggota1', 'fkmi', 4, 'kang reza :\r\n1. Jangan banyak ngeluh coba cari jalan keluar sendiri jangan nungguin instruksi dari senior.\r\n2. jangan mandang rendah orang dan gengsian.\r\n3. curhat kalo ada masalah jangan hanya dipendam  sendiri.\r\n4. jangan lihat siapa yang bicara tapi liat apa isi pembicaraaaanya.\r\n5, terus jadi seorang yang belajar jagan gampang puas.\r\n6. jangan gampang baperan juga.\r\n', '2017-10-30 21:22:13', 'ya'),
(213, 'anggota1', 'fkmi', 4, 'Iqbal Ibrahim :\r\n\r\n1. harus bangun komunikasi sama ortu nya lebih baik lagi, bilang kalau antum ikut ngaji, dll\r\n2. harus bisa berkorban di waktu liburannya\r\n3. harus inisiatif \r\n4. kalau di kasih tugas jangan ngebantah dan bilang "Ih jangan gua, yang lain atuh" nah itu namanya menghilangkan pahala \r\n5. kalau ada amanah harus diambil sesuai dgn kesanggupannya | \r\n6. jangan males sama amanah dan tugas\r\n7. harus berani ngomong depan umum\r\n8. harus banyak baca lagi\r\n9. jangan sampe masuk fkmi karena penokohan dan gak enak sama kang ghifary, kang diki, kang fuad\r\n10. harus bisa mengorbankan temennya demi dakwah', '2017-10-30 21:22:54', 'ya'),
(214, 'anggota1', 'fkmi', 4, 'untuk rizal : lebih sering main ke fkmi biar makin terasah pemahamannya, serta pengorbanan antum kurang, jadi lebih dimaksimalkan lagi di fkmi nya', '2017-10-30 21:23:00', 'ya'),
(215, 'anggota1', 'fkmi', 4, '6. kang iqbal ibrahim\r\n\r\ntidak bisa mencontohkan pengorbanan kepada bawahannya yang selalu pulang lebih larut dari biasanya, dan menggampangkan amanah.\r\n\r\nkedepannya lebih memprioritaskan dengan islam, lanjutkan tilisan tulisan mu Ayo berkorban demi Islam . karena dengan islam bisa menyelamatkan semua orang yang kita sayangi.  implementasikan dakwah sosmed mu', '2017-10-30 21:24:20', 'ya'),
(216, 'anggota1', 'fkmi', 4, 'untuk dandi : antum pemahamnnya sudah lumayan, tapi seperti orang individualis, entah memang pendiam atau apa, tapi lebih sering komunikasinya, karena kita forum komunikasi', '2017-10-30 21:24:21', 'ya'),
(217, 'anggota1', 'fkmi', 4, 'ashabal risky :\r\n1. kurang aktif di forum - kayanya kurang baca dan kurang menganalisis\r\n2. harus lebih aktif lagi dan berani ngomong\r\n3. tidak boleh melalaikan tugas\r\n4. tidak boleh ngeluh dan banyak ngeles\r\n5. jangan banyak diem di kosan- karena kebawa sama si awan\r\n6. jangan banyak tidur dan males', '2017-10-30 21:25:02', 'ya'),
(218, 'anggota1', 'fkmi', 4, '6. kang iqbal ibrahim\r\n\r\ntidak bisa mencontohkan pengorbanan kepada bawahannya yang selalu pulang lebih larut dari biasanya, dan menggampangkan amanah.\r\n\r\nkedepannya lebih memprioritaskan dengan islam, lanjutkan tilisan tulisan mu Ayo berkorban demi Islam . karena dengan islam bisa menyelamatkan semua orang yang kita sayangi.  implementasikan dakwah sosmed mu', '2017-10-30 21:26:19', 'ya'),
(219, 'anggota1', 'fkmi', 4, 'untuk kang NUgraha :\r\n1. Jangan keseringan bercanda , bercanda ada waktunya.\r\n2. harus berani jangan malu-malu.\r\n3. seirng lagi komunikasinya dengan yang anggota yang lainnya.\r\n4. harus banyak curhat.\r\n5. tetap semangat bro jangan nyerah', '2017-10-30 21:26:30', 'ya'),
(220, 'anggota1', 'fkmi', 4, 'untuk ilham : lebih baik lagi dalam manajemen waktunya, kan antum jurusan manajemen :D', '2017-10-30 21:26:38', 'ya'),
(221, 'anggota1', 'fkmi', 4, 'Ahmad Kudzaefi :\r\n1. jangan kebanyakan main game\r\n2. jangan kebanyakan diem di kosan dan tidur\r\n3. harus berani ngomong di depan forum\r\n4. jangan kebanyakan isin, era, males, dan sangeuk\r\n5. harus lebih aktif dan membawa temen\r\n6. harus bisa jadi contoh bagi temen yang lain\r\n7. intinya mah niatnya harus lebih fokus lagi buat dakwah dan mengorbankan waktu nya', '2017-10-30 21:28:10', 'ya'),
(222, 'anggota1', 'fkmi', 4, 'untuk asep : luruskan niat sep masuk fkmi, antum terlihat tidak sepenuh hati, alias seperti ada maksud lain masuk fkmi', '2017-10-30 21:29:47', 'ya'),
(223, 'anggota1', 'fkmi', 4, 'Untuk Rizal : \r\n1. ane gak tau tujuan antum  masuk FKMI apakah cuma pingin jaket atau apaan.\r\n2. perbanyak bergaul dengan teman yang lain jagan tetutup.\r\n3. amanah terus dijalnnkan jangan dilalaikan. \r\n4. kalo gak bisa apat atau kumpul segera beri keterangan', '2017-10-30 21:30:30', 'ya'),
(224, 'anggota1', 'fkmi', 4, 'kang Nugraha \r\njangan lebai dan ngomong ga jelas mulu, antum udah semester 5 coy, coba tunjukin seriius untuk fkmi. jangan chat akhwat lagi lah, \r\nangktan 15 tuhh akan mimoin fkmi tahun depan, kalo antum ga ada visi dan tujuannya ngapain di fkmi, penghambat doang, tolong jhargai orang orang lain, jangan memikirkan diri senidir terus, orang lain juga punya masalah masing masing.\r\n\r\nmasalah ente mah tinggal akrabin aja sama orang tua ente, kelar, makanyua komunikasiin, jangan meratapio masalah\r\n\r\nkarena dengan islam bisa menyelamatkan semua orang yang kita sayangi.  implementasikan dakwah sosmed mu', '2017-10-30 21:30:41', 'ya'),
(225, 'anggota1', 'fkmi', 4, 'Kang Asep\r\n\r\nJangan mentang mentang banyak tugas di pharmasi banyak, tapi di organ ektra lainnya antum sanggup datang kang, sebaiknya antum perbaiki niat kang, \r\n\r\nkarena dengan islam bisa menyelamatkan semua orang yang kita sayangi.  implementasikan dakwah sosmed mu', '2017-10-30 21:32:06', 'ya'),
(226, 'anggota1', 'fkmi', 4, 'untuk rifqi : lebih sering main ke sekret dan lebih sering dikomunikasikan..', '2017-10-30 21:32:19', 'ya'),
(227, 'anggota1', 'fkmi', 4, 'Kang Hermawan\r\n\r\nPemikiran kang hermawan itu kebat, penuh analisis\r\n\r\ntapi dalam pengorbanan masih kurang\r\nkarena dengan islam bisa menyelamatkan semua orang yang kita sayangi.  implementasikan dakwah sosmed mu', '2017-10-30 21:32:55', 'ya'),
(228, 'anggota1', 'fkmi', 4, 'kang Ilham\r\nkarena dengan islam bisa menyelamatkan semua orang yang kita sayangi.  implementasikan dakwah sosmed mu\r\n\r\nao atur waktu dan serius di fkmi,', '2017-10-30 21:33:30', 'ya'),
(229, 'anggota1', 'fkmi', 4, 'Rizal\r\nDia cuma butuh arahan dari yang lain.', '2017-10-30 21:34:05', 'ya'),
(230, 'anggota1', 'fkmi', 4, 'Untuk Dandi : \r\n1. Kalo bercanda harus tau porsinya.\r\n2. kalo ada masalh  jgan dipendam harus di konsultasikan\r\n3. janga banyakin malu terus jadi pemberani.\r\n4. antum punyya potensi besar dan terus budayakan literasi seseuai fashion antum\r\n5. jangan gampang emosi juga.\r\n6. Istiqomah bro', '2017-10-30 21:34:08', 'ya'),
(231, 'anggota1', 'fkmi', 4, 'untuk Hermawan :\r\nana gatau tujuan antum masuk fkmi buat apa, karena ana liat antum yang gak niat.\r\ngak pernah hadir di forum, rapat jarang, kajian juga\r\n\r\njujur... ana suka males liat antum kalau kebanyakan leha-leha\r\ngak ada di forum, gak ada di kajian tapi tanpa alesan\r\nudah gitu dikit-dikit pulang ke kosan, dikit-dikit pulang ke kosan\r\nkaya ada sesuatu di kosan. gak tau ada apa disana\r\n....\r\ntapi keliatan. kehadiran antum di fkmi kurang \r\njadi bikin orang gak terlalu respect sama antum\r\n\r\n1. kalau gak bisa hadir kajian kasih kabar, jangan sampe gak ada kabar\r\n2. kalau lagi butuh bantuan bilang sama temen\r\n3. jangan sampe menghambat tim.\r\n4. kerjaan nya lama dan kadang susah dihubungiin\r\n\r\nintinya mah harus lebih mengazamkan diri buat masuk fkmi', '2017-10-30 21:34:17', 'ya');
INSERT INTO `chat` (`id`, `username`, `instansi`, `kode_user`, `isi`, `tanggal`, `tampil`) VALUES
(232, 'anggota1', 'fkmi', 4, 'Jangan Pada baperan gera, jangan pada mikirin masing masing, coba pikirin orang lain dan coba bayangin antum ada di posisi orang yang banyak masalah,\r\n\r\nSEMANGAT FKMI, JANGAN BANYAK ALASAN AFWAN\r\n\r\nsungguh ane rindu fkmi dulu yang kualitas bagus dengan kuantoitaas dikit.\r\ndengan keberanian kang fizar nyegah oarng berduaan di masjid. sekarang kita punya pilihan masing masing, teruslah istiqimah di jamaah fkmi dengan meyakini syarioah dan khilafah akan tegah sesuai hadist nabi.\r\n\r\nsaya berjuang bukan karena ketua dan fkmi, tapi karen islam, dengan isla saya bisa memnbawa teman dan muslim lainnya ke syurga sama sama', '2017-10-30 21:36:39', 'ya'),
(233, 'anggota1', 'fkmi', 4, 'Buat semuanya :\r\n\r\nyuk sama-sama mengazamkan diri di dalam jamaah ini semata-mata untuk dakwah Islam\r\nuntuk Allah SWT\r\n\r\njangan sampai masuk ke fkmi cuma ingin :\r\nDapet temen, Dapte Jaket, Pertanyaannya di jawab apalagi buat Tenar biar nama dan foto nya ada dimana-mana\r\n\r\nkita semua harus lebih bisa memanage, berkorban waktu, bebrkorban harta, tenaga dan pikiran juga\r\nkarena itu yang akan di pertanggungjawabkan oleh Allah\r\n\r\nyaitu amal ibadah kita selama di dunia\r\nterkhusus waktu, masa muda, harta dan kesehatan kita', '2017-10-30 21:36:41', 'ya'),
(234, 'anggota1', 'fkmi', 4, 'untuk kang ilham :\r\n1. ane tau kesibukan antum banyak tapi ini bukan jadi alesan untuk meniggalkan kewajiban yang lainnya.\r\n2. Dakwah terus diprioritaskan dan jangan dbenturkan dengan hal lain.\r\n3. amanah jngan dilalaikan dankao  mentok segera dikomunikasikan jagan dipendam sendiri.\r\n4. kalo dikasih tahu jangan ngekes\r\n5  antum punya potensi besar maksimalkan itu\r\n6 terus istiqomah bro ', '2017-10-30 21:37:21', 'ya'),
(235, 'anggota1', 'fkmi', 4, 'kang asep :\r\n1. antum terlalu ngejar eksistensi kalo dilihat sama ane.\r\n2. amanah itu harus balance janga sampe dibenturkan, kalo ada amanah dakwah banyak afwan gilian ismafarsi gesit pisan, sebenarnya apa tujuan antum ??\r\n3. kalo ada permasalahan segera dikomunikasikan jangan dipendam.\r\n4. antum punya potensi besar. kembangkan itu\r\n5. dam terus istiqomah dijalan ini\r\n', '2017-10-30 21:41:09', 'ya'),
(236, 'anggota1', 'fkmi', 4, 'Games itu hiburan di waktu pusing wak, dari pada di alihkan sama yang lain, emnding Game aja', '2017-10-30 21:42:32', 'ya'),
(237, 'anggota1', 'fkmi', 4, 'Kang Rifqi :\r\n1. harus sering komunikasi lagi.\r\n2. harus sering curhat dan kumpul bareng\r\n 3. antum punya potensi besar buat syiar islam khususnya dipakuan\r\n4. terus istiqomah\r\n', '2017-10-30 21:43:05', 'ya'),
(238, 'anggota1', 'fkmi', 4, 'Kang hermawan :\r\n1. antum jangan cuma pintar ngomong doang tanpa ada action nya kang.\r\n2. Allah maha tahu apa yang selalu antum lakukan kang baik pagi siang, sore, malam', '2017-10-30 21:44:54', 'ya'),
(239, 'anggota1', 'fkmi', 4, 'kang Iqbal muharam :\r\n1. kalo dikasih tau jangan ngeules mulu tapi harus menerima \r\n', '2017-10-30 21:45:55', 'ya'),
(240, 'anggota1', 'fkmi', 4, 'untuk semua anggota!!!!!!    fkmi  kita masuk dalam oganisasi ini dengan pilihan yang kita pilih  apapun itu alasannya akhirnya kita pahami bahwa jalan kita ini adalah jalan yang penuh perjuangan bukan karena oraganaisasi lagi yang kita perjuangakan tapi kini sama -sama kita pahami bahwa yang kita perjuangkan adalah perintah dari ALLAH .jayanya organisasi bukanlah tujuan karena yang jadi prioritas adalah tersebarnya dan terlaksananya perintah ALLAH, kini semua sudah sama-sama pahami kini perjuangan ini bukanlah soal memilih karena kini kita sadari bahwa ini memang yang patut kita perjuangkan.\r\npesan untuk kawan2 janganlah berkoar tanpa ilmu jangan sok paham tanpa dasar yang kuat jangan jadikan agamamu mainan jangan hanya karena ingin di anggap bisa kita sok bisa sekiranya tak tau jangan sok mamapu jangan hanya mengandalkan semangat tanpa berilmu terlebih dahulu, ukur dirimu jangan kou berkoar berlari sana sini sibuk untuk memperhatikan orang lain untuk berubah sedangkan kou lupa bahwa dirimu belum menjadi orang yang lebih baik, jangan sampai lupa kawan kita adalah pengemban dakwah perkataanmu harus sesuai dengan perbuatanmu, ketika kou ingin perbaiki oranglain maka jangan kou lupa juga untuk kou pantaskan dirimu juga,jangan kou terlalu bangga dengan setatusmu saat ini sebagai pendakwah tapi kou harus paham betul apa peran dirimu seharusnya mari tambah terus ilmu kita dan terus berjuang untuk menjalankan ilmu yang kita miliki dan mari kita perjuangkan agama ALLAH ini kata 2 ini untuk memotivasi kita agar jangan lupa untuk mengupgrade, intinya luruskan niat ikhlaskan semuanya karena memang untuk mendapat ridhonya ALLAh', '2017-10-30 21:53:11', 'ya'),
(241, 'admin', 'balittanah', 3, 'Hai', '2017-12-08 11:02:46', 'ya'),
(242, 'dicki', 'Andrea Liberation', 2, 'mas', '2017-12-15 07:43:49', 'ya'),
(243, 'admin', 'balittanah', 1, 'assalamualaikum', '0000-00-00 00:00:00', 'ya'),
(244, 'admin', 'balittanah', 1, 'Assalamualaykum', '2017-12-16 09:01:42', 'ya'),
(245, 'admin', 'balittanah', 1, 'Apa kabar gif?', '2017-12-16 09:02:02', 'ya'),
(246, 'admin', 'balittanah', 1, 'dimana?', '2017-12-16 09:11:06', 'ya'),
(247, 'admin', 'balittanah', 3, 'brodimana?', '2017-12-16 09:24:09', 'ya');

-- --------------------------------------------------------

--
-- Table structure for table `chatadmin`
--

CREATE TABLE `chatadmin` (
  `id` int(3) NOT NULL,
  `pengirim` int(3) NOT NULL,
  `penerima` int(3) NOT NULL,
  `isi` text NOT NULL,
  `tanggal` datetime NOT NULL,
  `tampil` varchar(6) NOT NULL,
  `keterangan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chatadmin`
--

INSERT INTO `chatadmin` (`id`, `pengirim`, `penerima`, `isi`, `tanggal`, `tampil`, `keterangan`) VALUES
(109, 0, 3, 'peljas', '2017-12-21 10:18:50', 'ya', 'administrator'),
(110, 0, 3, 'Kenapa?', '2017-12-21 10:25:42', 'ya', 'administrator'),
(111, 3, 0, 'Apa?', '2017-12-21 10:25:56', 'ya', 'peljas');

-- --------------------------------------------------------

--
-- Table structure for table `download`
--

CREATE TABLE `download` (
  `id` int(11) NOT NULL,
  `kode_user` int(5) NOT NULL,
  `tanggal_upload` date NOT NULL,
  `nama_file` varchar(100) NOT NULL,
  `tipe_file` varchar(10) NOT NULL,
  `ukuran_file` varchar(20) NOT NULL,
  `file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `download`
--

INSERT INTO `download` (`id`, `kode_user`, `tanggal_upload`, `nama_file`, `tipe_file`, `ukuran_file`, `file`) VALUES
(1, 1, '2017-09-20', 'StrukBNI', 'image/jpeg', '70485', 'ilus-struk-belanja.jpg'),
(2, 1, '2017-10-02', 'STRUK BRI', 'image/jpeg', '37100', 'IMG-20170501-WA0006.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `hak_akses`
--

CREATE TABLE `hak_akses` (
  `kode_akses` varchar(10) NOT NULL,
  `jenis_akses` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hak_akses`
--

INSERT INTO `hak_akses` (`kode_akses`, `jenis_akses`) VALUES
('a', 's'),
('LB', 'Laboratorium Biologi'),
('LF', 'Laboratorium Fisika'),
('LK', 'Laboratorium Kimia'),
('LM', 'Laboratorium Mineralogi'),
('PL', 'Pelayanan Jasa'),
('SAO', 'Super Administrator');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_analisis`
--

CREATE TABLE `jenis_analisis` (
  `kode_analisis` varchar(10) NOT NULL,
  `kode_sp` varchar(10) NOT NULL,
  `nama_analisis` varchar(100) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_analisis`
--

INSERT INTO `jenis_analisis` (`kode_analisis`, `kode_sp`, `nama_analisis`, `keterangan`) VALUES
('BT', 'B', 'Biologi Tanah', 'Biologi Tanah'),
('FT', 'F', 'Fisika Tanah', 'Fisika tanah'),
('KPa', 'K', 'Pupuk Anorganik', 'Analisis Kimia Tanah'),
('KPo', 'K', 'Pupuk Organik', 'Analisis Kimia Tanah'),
('KTdA', 'K', 'Tanaman dan Air', 'Analisis Kimia Tanah'),
('KThK', 'K', 'Tanah Khusus', 'Analisis Kimia Tanah'),
('KThR', 'K', 'Tanah Rutin', 'Analisis Kimia Tanah'),
('MT', 'M', 'Mineralogi Tanah', 'Mineralogi Tanah');

-- --------------------------------------------------------

--
-- Table structure for table `kaji_ulang`
--

CREATE TABLE `kaji_ulang` (
  `kode_order` varchar(10) NOT NULL,
  `alat` varchar(5) NOT NULL,
  `sdm` varchar(5) NOT NULL,
  `bahan` varchar(5) NOT NULL,
  `volume` varchar(15) NOT NULL,
  `waktu` varchar(5) NOT NULL,
  `metode` varchar(5) NOT NULL,
  `standar_mutu` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kaji_ulang`
--

INSERT INTO `kaji_ulang` (`kode_order`, `alat`, `sdm`, `bahan`, `volume`, `waktu`, `metode`, `standar_mutu`) VALUES
('17.12.1', 'Ya', 'Ya', 'Ya', 'Sesuai', '30', 'Ya', 'Ya');

-- --------------------------------------------------------

--
-- Table structure for table `penomoran`
--

CREATE TABLE `penomoran` (
  `kode_order` varchar(10) NOT NULL,
  `kode_analisis` varchar(10) NOT NULL,
  `kode_user` int(4) NOT NULL,
  `contoh_tanah` int(4) NOT NULL,
  `contoh_tanaman` int(4) NOT NULL,
  `contoh_pupuk` int(4) NOT NULL,
  `contoh_air` int(4) NOT NULL,
  `contoh_ring` int(4) NOT NULL,
  `contoh_bulk` int(4) NOT NULL,
  `no_contoh` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penomoran`
--

INSERT INTO `penomoran` (`kode_order`, `kode_analisis`, `kode_user`, `contoh_tanah`, `contoh_tanaman`, `contoh_pupuk`, `contoh_air`, `contoh_ring`, `contoh_bulk`, `no_contoh`) VALUES
('17.09.15', 'KPa', 3, 0, 0, 10, 0, 0, 0, 'K.Pa.1, K.Pa.2, K.Pa.3, K.Pa.4, K.Pa.5, K.Pa.6, K.Pa.7, K.Pa.8, K.Pa.9, K.Pa.10'),
('17.09.16', 'KPa', 3, 0, 0, 10, 0, 0, 0, 'K.Pa.11, K.Pa.12, K.Pa.13, K.Pa.14, K.Pa.15, K.Pa.16, K.Pa.17, K.Pa.18, K.Pa.19, K.Pa.20'),
('17.09.17', 'KPo', 3, 0, 0, 10, 0, 0, 0, 'K.Po.1, K.Po.2, K.Po.3, K.Po.4, K.Po.5, K.Po.6, K.Po.7, K.Po.8, K.Po.9, K.Po.10'),
('17.09.18', 'KPo', 3, 0, 0, 10, 0, 0, 0, 'K.Po.11, K.Po.12, K.Po.13, K.Po.14, K.Po.15, K.Po.16, K.Po.17, K.Po.18, K.Po.19, K.Po.20'),
('17.09.21', 'KThK', 3, 10, 0, 0, 0, 0, 0, 'K.ThK.1, K.ThK.2, K.ThK.3, K.ThK.4, K.ThK.5, K.ThK.6, K.ThK.7, K.ThK.8, K.ThK.9, K.ThK.10'),
('17.09.22', 'KThK', 3, 10, 0, 0, 0, 0, 0, 'K.ThK.11, K.ThK.12, K.ThK.13, K.ThK.14, K.ThK.15, K.ThK.16, K.ThK.17, K.ThK.18, K.ThK.19, K.ThK.20'),
('17.09.19', 'KThR', 3, 10, 0, 0, 0, 0, 0, 'K.ThR.1, K.ThR.2, K.ThR.3, K.ThR.4, K.ThR.5, K.ThR.6, K.ThR.7, K.ThR.8, K.ThR.9, K.ThR.10'),
('17.09.20', 'KThR', 3, 10, 0, 0, 0, 0, 0, 'K.ThR.11, K.ThR.12, K.ThR.13, K.ThR.14, K.ThR.15, K.ThR.16, K.ThR.17, K.ThR.18, K.ThR.19, K.ThR.20');

-- --------------------------------------------------------

--
-- Table structure for table `pertanyaan`
--

CREATE TABLE `pertanyaan` (
  `kode_pertanyaan` varchar(10) NOT NULL,
  `kode_analisis` varchar(10) NOT NULL,
  `isi_pertanyaan` text NOT NULL,
  `tarif` double NOT NULL,
  `kelompok` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pertanyaan`
--

INSERT INTO `pertanyaan` (`kode_pertanyaan`, `kode_analisis`, `isi_pertanyaan`, `tarif`, `kelompok`) VALUES
('BT-1-0', 'BT', 'Jumlah Cacing Tanah', 75000, 'BT-1'),
('BT-10-0', 'BT', 'Total Coliform', 125000, 'BT-10'),
('BT-11-0', 'BT', 'Jumlah E.Colli', 150000, 'BT-11'),
('BT-12-0', 'BT', 'Jumlah Salmonella sp', 150000, 'BT-12'),
('BT-13-0', 'BT', 'Jumlah Bakteri Penambat Nitrogen', 125000, 'BT-13'),
('BT-14-0', 'BT', 'Jumlah Bakteri Pelarut Fosfat', 125000, 'BT-14'),
('BT-15-0', 'BT', 'Jumlah Bakteri Selulolitik', 125000, 'BT-15'),
('BT-16-0', 'BT', 'Jumlah Bakteri Kitinolitik', 125000, 'BT-16'),
('BT-17-0', 'BT', 'Jumlah Bakteri Lipolitik', 125000, 'BT-17'),
('BT-18-0', 'BT', 'Jumlah Bakteri Proteolitik', 125000, 'BT-18'),
('BT-19-0', 'BT', 'Jumlah Bakteri Cytophaga', 125000, 'BT-19'),
('BT-2-0', 'BT', 'Total perhitungan cawan total (plate count) mikroba (aerob) (Total Bakteri)', 150000, 'BT-2'),
('BT-20-0', 'BT', 'Jumlah Bakteri Micrococcus', 125000, 'BT-20'),
('BT-21-0', 'BT', 'Total Fungi', 125000, 'BT-21'),
('BT-22-0', 'BT', 'Jumlah Mikoriza', 125000, 'BT-22'),
('BT-23-0', 'BT', 'Jumlah Trichoderma sp', 125000, 'BT-23'),
('BT-24-0', 'BT', 'Jumlah Aspergillus sp', 125000, 'BT-24'),
('BT-25-0', 'BT', 'Jumlah Saccharomyces sp', 125000, 'BT-25'),
('BT-26-0', 'BT', 'Jumlah Fungsi Pelarut Fosfat', 125000, 'BT-26'),
('BT-27-0', 'BT', 'Jumlah Fungsi Selulotik', 125000, 'BT-27'),
('BT-28-0', 'BT', 'Total Fungsi Lipolitik', 125000, 'BT-28'),
('BT-29-0', 'BT', 'Jumlah Fungi Proteolitik', 125000, 'BT-29'),
('BT-3-0', 'BT', 'Total perhitungan cawan total (plate count) mikroba (anaerob)', 25000, 'BT-3'),
('BT-30-0', 'BT', 'Jumlah Fungi Lignolitik', 125000, 'BT-30'),
('BT-31-0', 'BT', 'Jumlah Actionomycetes', 125000, 'BT-31'),
('BT-32-0', 'BT', 'Jumlah Streptomyces sp', 125000, 'BT-32'),
('BT-33-0', 'BT', 'Uji Patogenesitas pada tanaman', 150000, 'BT-33'),
('BT-34-0', 'BT', 'Aktivitas Reduksi Asetilen (ARA)', 200000, 'BT-34'),
('BT-35-0', 'BT', 'Aktivitas Dehirogenase', 150000, 'BT-35'),
('BT-36-0', 'BT', 'Aktivitas B-Glukosidase', 150000, 'BT-36'),
('BT-37-0', 'BT', 'Aktivitas Amilase', 150000, 'BT-37'),
('BT-38-0', 'BT', 'Aktivitas Selulase', 150000, 'BT-38'),
('BT-39-0', 'BT', 'Aktivitas Fosfatase', 150000, 'BT-39'),
('BT-4-0', 'BT', 'Jumlah Rhizobium/Bradirhyzobium', 150000, 'BT-4'),
('BT-40-0', 'BT', 'Aktivitas Kitinase', 150000, 'BT-40'),
('BT-41-0', 'BT', 'Aktivitas Lipase', 150000, 'BT-41'),
('BT-42-0', 'BT', 'Aktivitas Pelarut Fosfat', 150000, 'BT-42'),
('BT-43-0', 'BT', 'Kandungan Asam Indole Asetat (IAA)', 150000, 'BT-43'),
('BT-44-0', 'BT', 'Respirasi Tanah', 50000, 'BT-44'),
('BT-45-0', 'BT', 'Respirasi Gibbevelin', 150000, 'BT-45'),
('BT-46-0', 'BT', 'Respirasi Sitokinin - Zeatin', 150000, 'BT-46'),
('BT-47-0', 'BT', 'Respirasi Sitokinin - Kinetin', 150000, 'BT-47'),
('BT-48-0', 'BT', 'Aktivitas Penambatan N', 50000, 'BT-48'),
('BT-49-0', 'BT', 'Aktivitas Pelarutan P', 50000, 'BT-49'),
('BT-5-0', 'BT', 'Jumlah Azospirillum sp', 150000, 'BT-5'),
('BT-50-0', 'BT', 'Aktivitas Perombak Bahan Organik', 50000, 'BT-50'),
('BT-51-0', 'BT', 'Ph', 15000, 'BT-51'),
('BT-52-0', 'BT', 'Kadar Air', 15000, 'BT-52'),
('BT-6-0', 'BT', 'Jumlah Azotobacter sp', 125000, 'BT-6'),
('BT-7-0', 'BT', 'Jumlah Pseudomonas sp', 125000, 'BT-7'),
('BT-8-0', 'BT', 'Jumlah Bacillus sp', 125000, 'BT-8'),
('BT-9-0', 'BT', 'Jumlah Lactobacillus sp', 125000, 'BT-9'),
('FT-1-0', 'FT', 'Persiapan Contoh', 18000, 'FT-1'),
('FT-10-0', 'FT', 'Penetapan tekstur 3 fraksi', 30000, 'FT-10'),
('FT-11-0', 'FT', 'Penetapan tekstur 4 fraksi', 31500, 'FT-11'),
('FT-12-0', 'FT', 'Penetapan tekstur 10 fraksi', 55000, 'FT-12'),
('FT-13-0', 'FT', 'Penetapan C-Organik menggunakan metode LOI (pengabuan kering)', 15000, 'FT-13'),
('FT-14-0', 'FT', 'Penetapan luas permukaan', 90000, 'FT-14'),
('FT-15-0', 'FT', 'Penetapan jumlah pori mikro', 90000, 'FT-15'),
('FT-16-0', 'FT', 'Persiapan contoh (memisahkan contoh dari kemasannya)', 15000, 'FT-16'),
('FT-17-0', 'FT', 'Penetapan berat volume', 12500, 'FT-17'),
('FT-18-0', 'FT', 'Penetapan bahan organik dengan metode LOI (pengabuan)', 17500, 'FT-18'),
('FT-19-0', 'FT', 'Penetapan kadar serat', 12500, 'FT-19'),
('FT-2-0', 'FT', 'Penetapan Particle Destiny (PD) + Bulk Destiny (BD) + Perhitungan Ruang Pori Total (RPT) dari contoh dalam tabung standar', 52500, 'FT-2'),
('FT-2-1', 'FT', 'Bulk Destiny (BD) parafin', 50000, 'FT-2'),
('FT-3-0', 'FT', 'Penetapan kadar air pada pF1, pF2, pF2.54, dan pF4.2 dan perhitungan pori drainase cepat dan lambat, serta air tersedia', 80000, 'FT-3'),
('FT-4-0', 'FT', 'Penetapan permeabilitas, contoh tanah di dalam ring/tabung standar Balittanah', 22500, 'FT-4'),
('FT-4-1', 'FT', 'Contoh tanah di dalam ring/tabung tidak standar Balittanah', 40000, 'FT-4'),
('FT-5-0', 'FT', 'Penetapan permeabilitas, contoh tanah di dalam ring/tabung tidak standar Balittanah', 25000, 'FT-5'),
('FT-6-0', 'FT', 'Penetapan Indeks Kemantapan Agregat (IKA)', 18000, 'FT-6'),
('FT-6-1', 'FT', 'Water Agregat Stability', 21000, 'FT-6'),
('FT-7-0', 'FT', 'Penetapan Laju Perkolasi', 25000, 'FT-7'),
('FT-8-0', 'FT', 'Penetapan Coeficient of Linear Extensibility (COLE) tanah', 27500, 'FT-8'),
('FT-9-0', 'FT', 'Penetapan Kandungan air optimum untuk pengolahan', 13500, 'FT-9'),
('KPa-1-0', 'KPa', 'Persiapan contoh dan kadar air', 30000, 'KPa-1'),
('KPa-10-0', 'KPa', 'Kadar Serat', 24000, 'KPa-10'),
('KPa-2-0', 'KPa', 'Kehalusan sieve mesh no.25 dan no.80', 20000, 'KPa-2'),
('KPa-3-0', 'KPa', 'Kadar Abu dan Silikat Kasar (Silikat)', 24000, 'KPa-3'),
('KPa-3-1', 'KPa', 'Kadar Abu dan Silikat Kasar (Abu)', 24000, 'KPa-3'),
('KPa-3-2', 'KPa', 'Kadar Abu dan Silikat Kasar (Ekstraksi)', 24000, 'KPa-3'),
('KPa-4-0', 'KPa', 'Ekstrak Total unsur makro dan mikro (Pengukuran logam berat Hg)', 70000, 'KPa-4'),
('KPa-4-1', 'KPa', 'Ekstrak Total unsur makro dan mikro (Pengukuran logam berat As)', 70000, 'KPa-4'),
('KPa-4-10', 'KPa', 'Ekstrak Total unsur makro dan mikro (Pengukuran logam berat Pb)', 35000, 'KPa-4'),
('KPa-4-11', 'KPa', 'Ekstrak Total unsur makro dan mikro (Pengukuran B)', 35000, 'KPa-4'),
('KPa-4-12', 'KPa', 'Ekstrak Total unsur makro dan mikro (Pengukuran Al)', 35000, 'KPa-4'),
('KPa-4-13', 'KPa', 'Ekstrak Total unsur makro dan mikro (Pengukuran S)', 30000, 'KPa-4'),
('KPa-4-14', 'KPa', 'Ekstrak Total unsur makro dan mikro (Pengukuran Mg)', 30000, 'KPa-4'),
('KPa-4-15', 'KPa', 'Ekstrak Total unsur makro dan mikro (Pengukuran Ca)', 30000, 'KPa-4'),
('KPa-4-16', 'KPa', 'Ekstrak Total unsur makro dan mikro (Pengukuran P)', 30000, 'KPa-4'),
('KPa-4-17', 'KPa', 'Ekstrak Total unsur makro dan mikro (Pengukuran Zn)', 24000, 'KPa-4'),
('KPa-4-18', 'KPa', 'Ekstrak Total unsur makro dan mikro (Pengukuran Cu)', 24000, 'KPa-4'),
('KPa-4-19', 'KPa', 'Ekstrak Total unsur makro dan mikro (Pengukuran Mn)', 24000, 'KPa-4'),
('KPa-4-2', 'KPa', 'Ekstrak Total unsur makro dan mikro (Pengukuran logam berat Sn)', 35000, 'KPa-4'),
('KPa-4-20', 'KPa', 'Ekstrak Total unsur makro dan mikro (Pengukuran Fe)', 24000, 'KPa-4'),
('KPa-4-21', 'KPa', 'Ekstrak Total unsur makro dan mikro (Pengukuran Na)', 24000, 'KPa-4'),
('KPa-4-22', 'KPa', 'Ekstrak Total unsur makro dan mikro (Pengukuran K)', 24000, 'KPa-4'),
('KPa-4-23', 'KPa', 'Ekstrak Total unsur makro dan mikro (Ekstraksi)', 72000, 'KPa-4'),
('KPa-4-3', 'KPa', 'Ekstrak Total unsur makro dan mikro (Pengukuran logam berat Se)', 35000, 'KPa-4'),
('KPa-4-4', 'KPa', 'Ekstrak Total unsur makro dan mikro (Pengukuran logam berat Ag)', 35000, 'KPa-4'),
('KPa-4-5', 'KPa', 'Ekstrak Total unsur makro dan mikro (Pengukuran logam berat Mo)', 35000, 'KPa-4'),
('KPa-4-6', 'KPa', 'Ekstrak Total unsur makro dan mikro (Pengukuran logam berat Ni)', 35000, 'KPa-4'),
('KPa-4-7', 'KPa', 'Ekstrak Total unsur makro dan mikro (Pengukuran logam berat Cr)', 35000, 'KPa-4'),
('KPa-4-8', 'KPa', 'Ekstrak Total unsur makro dan mikro (Pengukuran logam berat Co)', 35000, 'KPa-4'),
('KPa-4-9', 'KPa', 'Ekstrak Total unsur makro dan mikro (Pengukuran logam berat Cd)', 35000, 'KPa-4'),
('KPa-5-0', 'KPa', 'Ekstrak Tersedia (asam sitrat 2%) Pengukuran logam berat As', 70000, 'KPa-5'),
('KPa-5-1', 'KPa', 'Ekstrak Tersedia (asam sitrat 2%) Pengukuran logam berat Sn', 35000, 'KPa-5'),
('KPa-5-10', 'KPa', 'Ekstrak Tersedia (asam sitrat 2%) Pengukuran B', 35000, 'KPa-5'),
('KPa-5-11', 'KPa', 'Ekstrak Tersedia (asam sitrat 2%) Pengukuran Al', 35000, 'KPa-5'),
('KPa-5-12', 'KPa', 'Ekstrak Tersedia (asam sitrat 2%) Pengukuran S', 30000, 'KPa-5'),
('KPa-5-13', 'KPa', 'Ekstrak Tersedia (asam sitrat 2%) Pengukuran Mg', 30000, 'KPa-5'),
('KPa-5-14', 'KPa', 'Ekstrak Tersedia (asam sitrat 2%) Pengukuran Ca', 30000, 'KPa-5'),
('KPa-5-15', 'KPa', 'Ekstrak Tersedia (asam sitrat 2%) Pengukuran P', 30000, 'KPa-5'),
('KPa-5-16', 'KPa', 'Ekstrak Tersedia (asam sitrat 2%) Pengukuran Zn', 24000, 'KPa-5'),
('KPa-5-17', 'KPa', 'Ekstrak Tersedia (asam sitrat 2%) Pengukuran Cu', 24000, 'KPa-5'),
('KPa-5-18', 'KPa', 'Ekstrak Tersedia (asam sitrat 2%) Pengukuran Mn', 24000, 'KPa-5'),
('KPa-5-19', 'KPa', 'Ekstrak Tersedia (asam sitrat 2%) Pengukuran Fe', 24000, 'KPa-5'),
('KPa-5-2', 'KPa', 'Ekstrak Tersedia (asam sitrat 2%) Pengukuran logam berat Se', 35000, 'KPa-5'),
('KPa-5-20', 'KPa', 'Ekstrak Tersedia (asam sitrat 2%) Pengukuran Na', 24000, 'KPa-5'),
('KPa-5-21', 'KPa', 'Ekstrak Tersedia (asam sitrat 2%) Pengukuran K', 24000, 'KPa-5'),
('KPa-5-22', 'KPa', 'Ekstrak Tersedia (asam sitrat 2%) Ekstraksi', 30000, 'KPa-5'),
('KPa-5-23', 'KPa', 'Ekstrak Tersedia (asam sitrat 2%) Pengukuran logam berat Hg', 70000, 'KPa-5'),
('KPa-5-3', 'KPa', 'Ekstrak Tersedia (asam sitrat 2%) Pengukuran logam berat Ag', 35000, 'KPa-5'),
('KPa-5-4', 'KPa', 'Ekstrak Tersedia (asam sitrat 2%) Pengukuran logam berat Mo', 35000, 'KPa-5'),
('KPa-5-5', 'KPa', 'Ekstrak Tersedia (asam sitrat 2%) Pengukuran logam berat Ni', 35000, 'KPa-5'),
('KPa-5-6', 'KPa', 'Ekstrak Tersedia (asam sitrat 2%) Pengukuran logam berat Cr', 35000, 'KPa-5'),
('KPa-5-7', 'KPa', 'Ekstrak Tersedia (asam sitrat 2%) Pengukuran logam berat Co', 35000, 'KPa-5'),
('KPa-5-8', 'KPa', 'Ekstrak Tersedia (asam sitrat 2%) Pengukuran logam berat Cd', 35000, 'KPa-5'),
('KPa-5-9', 'KPa', 'Ekstrak Tersedia (asam sitrat 2%) Pengukuran logam berat Pb', 35000, 'KPa-5'),
('KPa-6-0', 'KPa', 'Ekstrak Air (Pengukuran logam berat Hg)', 70000, 'KPa-6'),
('KPa-6-1', 'KPa', 'Ekstrak Air (Pengukuran logam berat As)', 70000, 'KPa-6'),
('KPa-6-10', 'KPa', 'Ekstrak Air (Pengukuran logam berat Pb)', 35000, 'KPa-6'),
('KPa-6-11', 'KPa', 'Ekstrak Air (Pengukuran B)', 35000, 'KPa-6'),
('KPa-6-12', 'KPa', 'Ekstrak Air (Pengukuran Al)', 35000, 'KPa-6'),
('KPa-6-13', 'KPa', 'Ekstrak Air (Pengukuran S)', 30000, 'KPa-6'),
('KPa-6-14', 'KPa', 'Ekstrak Air (Pengukuran Mg)', 30000, 'KPa-6'),
('KPa-6-15', 'KPa', 'Ekstrak Air (Pengukuran Ca)', 30000, 'KPa-6'),
('KPa-6-16', 'KPa', 'Ekstrak Air (Pengukuran P)', 30000, 'KPa-6'),
('KPa-6-17', 'KPa', 'Ekstrak Air (Pengukuran Zn)', 24000, 'KPa-6'),
('KPa-6-18', 'KPa', 'Ekstrak Air (Pengukuran Cu)', 24000, 'KPa-6'),
('KPa-6-19', 'KPa', 'Ekstrak Air (Pengukuran Mn)', 24000, 'KPa-6'),
('KPa-6-2', 'KPa', 'Ekstrak Air (Pengukuran logam berat Sn)', 35000, 'KPa-6'),
('KPa-6-20', 'KPa', 'Ekstrak Air (Pengukuran Fe)', 24000, 'KPa-6'),
('KPa-6-21', 'KPa', 'Ekstrak Air (Pengukuran Na)', 24000, 'KPa-6'),
('KPa-6-22', 'KPa', 'Ekstrak Air (Pengukuran K)', 24000, 'KPa-6'),
('KPa-6-23', 'KPa', 'Ekstrak Air (Ekstraksi)', 24000, 'KPa-6'),
('KPa-6-3', 'KPa', 'Ekstrak Air (Pengukuran logam berat Se)', 35000, 'KPa-6'),
('KPa-6-4', 'KPa', 'Ekstrak Air (Pengukuran logam berat Ag)', 35000, 'KPa-6'),
('KPa-6-5', 'KPa', 'Ekstrak Air (Pengukuran logam berat Mo)', 35000, 'KPa-6'),
('KPa-6-6', 'KPa', 'Ekstrak Air (Pengukuran logam berat Ni)', 35000, 'KPa-6'),
('KPa-6-7', 'KPa', 'Ekstrak Air (Pengukuran logam berat Cr)', 35000, 'KPa-6'),
('KPa-6-8', 'KPa', 'Ekstrak Air (Pengukuran logam berat Co)', 35000, 'KPa-6'),
('KPa-6-9', 'KPa', 'Ekstrak Air (Pengukuran logam berat Cd)', 35000, 'KPa-6'),
('KPa-7-0', 'KPa', 'Setara CaCO3', 30000, 'KPa-7'),
('KPa-8-0', 'KPa', 'Asam bebas', 30000, 'KPa-8'),
('KPa-9-0', 'KPa', 'Nitrogen Total (N-NH4, N-NO3, dan N-Kjeldahl)', 105000, 'KPa-9'),
('KPo-1-0', 'KPo', 'Persiapan Contoh ', 15000, 'KPo-1'),
('KPo-1-1', 'KPo', 'Persiapan Kadar Air', 15000, 'KPo-1'),
('KPo-2-0', 'KPo', 'Kehalusan sieve mesh No.25 dan No.80', 20000, 'KPo-2'),
('KPo-3-0', 'KPo', 'Ekstraksi Kadar Abu atau Silikat Kasar', 24000, 'KPo-3'),
('KPo-3-1', 'KPo', 'Pengujian Kadar Abu', 24000, 'KPo-3'),
('KPo-3-2', 'KPo', 'Pengujian Kadar Silikat Kasar', 24000, 'KPo-3'),
('KPo-4-0', 'KPo', 'Ekstraksi Total Unsur Makro dan Mikro', 72000, 'KPo-4'),
('KPo-4-1', 'KPo', 'Pengukuran K', 24000, 'KPo-4'),
('KPo-4-10', 'KPo', 'Pengukuran S', 30000, 'KPo-4'),
('KPo-4-11', 'KPo', 'Pengukuran Al', 35000, 'KPo-4'),
('KPo-4-12', 'KPo', 'Pengukuran B', 35000, 'KPo-4'),
('KPo-4-13', 'KPo', 'Pengukuran Pb', 35000, 'KPo-4'),
('KPo-4-14', 'KPo', 'Pengukuran Cd', 35000, 'KPo-4'),
('KPo-4-15', 'KPo', 'Pengukuran Co', 35000, 'KPo-4'),
('KPo-4-16', 'KPo', 'Pengukuran Cr', 35000, 'KPo-4'),
('KPo-4-17', 'KPo', 'Pengukuran Ni', 35000, 'KPo-4'),
('KPo-4-18', 'KPo', 'Pengukuran Mo', 35000, 'KPo-4'),
('KPo-4-19', 'KPo', 'Pengukuran Ag', 35000, 'KPo-4'),
('KPo-4-2', 'KPo', 'Pengukuran Na', 24000, 'KPo-4'),
('KPo-4-20', 'KPo', 'Pengukuran Se', 35000, 'KPo-4'),
('KPo-4-21', 'KPo', 'Pengukuran Sn', 35000, 'KPo-4'),
('KPo-4-22', 'KPo', 'Pengukuran As', 70000, 'KPo-4'),
('KPo-4-23', 'KPo', 'Pengukuran Hg', 70000, 'KPo-4'),
('KPo-4-3', 'KPo', 'Pengukuran Fe', 24000, 'KPo-4'),
('KPo-4-4', 'KPo', 'Pengukuran Mn', 24000, 'KPo-4'),
('KPo-4-5', 'KPo', 'Pengukuran Cu', 24000, 'KPo-4'),
('KPo-4-6', 'KPo', 'Pengukuran Zn', 24000, 'KPo-4'),
('KPo-4-7', 'KPo', 'Pengukuran P', 30000, 'KPo-4'),
('KPo-4-8', 'KPo', 'Pengukuran Ca', 30000, 'KPo-4'),
('KPo-4-9', 'KPo', 'Pengukuran Mg', 30000, 'KPo-4'),
('KPo-5-0', 'KPo', 'Ekstrak Tersedia (asam sitrat 2%) - Ekstraksi', 30000, 'KPo-5'),
('KPo-5-1', 'KPo', 'Pengukuran K', 24000, 'KPo-5'),
('KPo-5-10', 'KPo', 'Pengukuran S', 30000, 'KPo-5'),
('KPo-5-11', 'KPo', 'Pengukuran Al', 35000, 'KPo-5'),
('KPo-5-12', 'KPo', 'Pengukuran B', 35000, 'KPo-5'),
('KPo-5-13', 'KPo', 'Pengukuran Logam Berat Pb', 35000, 'KPo-5'),
('KPo-5-14', 'KPo', 'Pengukuran Logam Berat Cd', 35000, 'KPo-5'),
('KPo-5-15', 'KPo', 'Pengukuran Logam Berat Co', 35000, 'KPo-5'),
('KPo-5-16', 'KPo', 'Pengukuran Logam Berat Cr', 35000, 'KPo-5'),
('KPo-5-17', 'KPo', 'Pengukuran Logam Berat Ni', 35000, 'KPo-5'),
('KPo-5-18', 'KPo', 'Pengukuran Logam Berat Mo', 35000, 'KPo-5'),
('KPo-5-19', 'KPo', 'Pengukuran Logam Berat Ag', 35000, 'KPo-5'),
('KPo-5-2', 'KPo', 'Pengukuran Na', 24000, 'KPo-5'),
('KPo-5-20', 'KPo', 'Pengukuran Logam Berat Se', 35000, 'KPo-5'),
('KPo-5-21', 'KPo', 'Pengukuran Logam Berat Sn', 35000, 'KPo-5'),
('KPo-5-22', 'KPo', 'Pengukuran As', 70000, 'KPo-5'),
('KPo-5-23', 'KPo', 'Pengukuran Hg', 70000, 'KPo-5'),
('KPo-5-3', 'KPo', 'Pengukuran Fe', 24000, 'KPo-5'),
('KPo-5-4', 'KPo', 'Pengukuran Mn', 24000, 'KPo-5'),
('KPo-5-5', 'KPo', 'Pengukuran Cu', 24000, 'KPo-5'),
('KPo-5-6', 'KPo', 'Pengukuran Zn', 24000, 'KPo-5'),
('KPo-5-7', 'KPo', 'Pengukuran P', 30000, 'KPo-5'),
('KPo-5-8', 'KPo', 'Pengukuran Ca', 30000, 'KPo-5'),
('KPo-5-9', 'KPo', 'Pengukuran Mg', 30000, 'KPo-5'),
('KPo-6-0', 'KPo', 'Ekstrak Air - Ekstraksi', 24000, 'KPo-6'),
('KPo-6-1', 'KPo', 'Pengukuran K', 24000, 'KPo-6'),
('KPo-6-10', 'KPo', 'Pengukuran S', 30000, 'KPo-6'),
('KPo-6-11', 'KPo', 'Pengukuran Al', 35000, 'KPo-6'),
('KPo-6-12', 'KPo', 'Pengukuran B', 35000, 'KPo-6'),
('KPo-6-13', 'KPo', 'Pengukuran Logam Berat Pb', 35000, 'KPo-6'),
('KPo-6-14', 'KPo', 'Pengukuran Logam Berat Cd', 35000, 'KPo-6'),
('KPo-6-15', 'KPo', 'Pengukuran Logam Berat Co', 35000, 'KPo-6'),
('KPo-6-16', 'KPo', 'Pengukuran Logam Berat Cr', 35000, 'KPo-6'),
('KPo-6-17', 'KPo', 'Pengukuran Logam Berat Ni', 35000, 'KPo-6'),
('KPo-6-18', 'KPo', 'Pengukuran Logam Berat Mo', 35000, 'KPo-6'),
('KPo-6-19', 'KPo', 'Pengukuran Logam Berat Ag', 35000, 'KPo-6'),
('KPo-6-2', 'KPo', 'Pengukuran Na', 24000, 'KPo-6'),
('KPo-6-20', 'KPo', 'Pengukuran Logam Berat Se', 35000, 'KPo-6'),
('KPo-6-21', 'KPo', 'Pengukuran Logam Berat Sn', 35000, 'KPo-6'),
('KPo-6-22', 'KPo', 'Pengukuran As', 70000, 'KPo-6'),
('KPo-6-23', 'KPo', 'Pengukuran Hg', 70000, 'KPo-6'),
('KPo-6-3', 'KPo', 'Pengukuran Fe', 24000, 'KPo-6'),
('KPo-6-4', 'KPo', 'Pengukuran Mn', 24000, 'KPo-6'),
('KPo-6-5', 'KPo', 'Pengukuran Cu', 24000, 'KPo-6'),
('KPo-6-6', 'KPo', 'Pengukuran Zn', 24000, 'KPo-6'),
('KPo-6-7', 'KPo', 'Pengukuran P', 30000, 'KPo-6'),
('KPo-6-8', 'KPo', 'Pengukuran Ca', 30000, 'KPo-6'),
('KPo-6-9', 'KPo', 'Pengukuran Mg', 30000, 'KPo-6'),
('KPo-7-0', 'KPo', 'C Organik', 24000, 'KPo-7'),
('KPo-8-0', 'KPo', 'Nitrogen Total (N-NH4, N-NO3 dan N-Kajeldahl)', 105000, 'KPo-8'),
('KTdA-1-0', 'KTdA', 'Persiapan Contoh', 18000, 'KTdA-1'),
('KTdA-10-0', 'KTdA', 'Salinitas / EC (DHL)', 14000, 'KTdA-10'),
('KTdA-11-0', 'KTdA', 'Kation : Al (AAS)', 24000, 'KTdA-11'),
('KTdA-11-1', 'KTdA', 'Kation : B', 24000, 'KTdA-11'),
('KTdA-11-10', 'KTdA', 'Kation : K', 19000, 'KTdA-11'),
('KTdA-11-2', 'KTdA', 'Kation : Mg', 15000, 'KTdA-11'),
('KTdA-11-3', 'KTdA', 'Kation : Ca', 15000, 'KTdA-11'),
('KTdA-11-4', 'KTdA', 'Kation : NH4', 15000, 'KTdA-11'),
('KTdA-11-5', 'KTdA', 'Kation : Zn', 19000, 'KTdA-11'),
('KTdA-11-6', 'KTdA', 'Kation : Cu', 19000, 'KTdA-11'),
('KTdA-11-7', 'KTdA', 'Kation : Mn', 19000, 'KTdA-11'),
('KTdA-11-8', 'KTdA', 'Kation : Fe', 19000, 'KTdA-11'),
('KTdA-11-9', 'KTdA', 'Kation : Na', 19000, 'KTdA-11'),
('KTdA-12-0', 'KTdA', 'Anion : BO3', 24000, 'KTdA-12'),
('KTdA-12-1', 'KTdA', 'Anion : NO3', 24000, 'KTdA-12'),
('KTdA-12-2', 'KTdA', 'Anion : HCO3', 18000, 'KTdA-12'),
('KTdA-12-3', 'KTdA', 'Anion : CO3', 18000, 'KTdA-12'),
('KTdA-12-4', 'KTdA', 'Anion : Cl', 18000, 'KTdA-12'),
('KTdA-12-5', 'KTdA', 'Anion : SO4', 18000, 'KTdA-12'),
('KTdA-12-6', 'KTdA', 'Anion : PO4', 18000, 'KTdA-12'),
('KTdA-13-0', 'KTdA', 'Pengukuran logam berat (ppm) : As', 24000, 'KTdA-13'),
('KTdA-13-1', 'KTdA', 'Pengukuran logam berat (ppm) : Sn', 24000, 'KTdA-13'),
('KTdA-13-2', 'KTdA', 'Pengukuran logam berat (ppm) : Se', 24000, 'KTdA-13'),
('KTdA-13-3', 'KTdA', 'Pengukuran logam berat (ppm) : Ag', 24000, 'KTdA-13'),
('KTdA-13-4', 'KTdA', 'Pengukuran logam berat (ppm) : Mo', 24000, 'KTdA-13'),
('KTdA-13-5', 'KTdA', 'Pengukuran logam berat (ppm) : Ni', 24000, 'KTdA-13'),
('KTdA-13-6', 'KTdA', 'Pengukuran logam berat (ppm) : Cr', 24000, 'KTdA-13'),
('KTdA-13-7', 'KTdA', 'Pengukuran logam berat (ppm) : Co', 24000, 'KTdA-13'),
('KTdA-13-8', 'KTdA', 'Pengukuran logam berat (ppm) : Cd', 24000, 'KTdA-13'),
('KTdA-13-9', 'KTdA', 'Pengukuran logam berat (ppm) : Pb', 24000, 'KTdA-13'),
('KTdA-14-0', 'KTdA', 'Pengukuran logam berat (ppb) : Hg', 70000, 'KTdA-14'),
('KTdA-14-1', 'KTdA', 'Pengukuran logam berat (ppb) : As', 70000, 'KTdA-14'),
('KTdA-14-10', 'KTdA', 'Pengukuran logam berat (ppb) : Pb', 70000, 'KTdA-14'),
('KTdA-14-2', 'KTdA', 'Pengukuran logam berat (ppb) : Sn', 70000, 'KTdA-14'),
('KTdA-14-3', 'KTdA', 'Pengukuran logam berat (ppb) : Se', 70000, 'KTdA-14'),
('KTdA-14-4', 'KTdA', 'Pengukuran logam berat (ppb) : Ag', 70000, 'KTdA-14'),
('KTdA-14-5', 'KTdA', 'Pengukuran logam berat (ppb) : Mo', 70000, 'KTdA-14'),
('KTdA-14-6', 'KTdA', 'Pengukuran logam berat (ppb) : Ni', 70000, 'KTdA-14'),
('KTdA-14-7', 'KTdA', 'Pengukuran logam berat (ppb) : Cr', 70000, 'KTdA-14'),
('KTdA-14-8', 'KTdA', 'Pengukuran logam berat (ppb) : Co', 70000, 'KTdA-14'),
('KTdA-14-9', 'KTdA', 'Pengukuran logam berat (ppb) : Cd', 70000, 'KTdA-14'),
('KTdA-2-0', 'KTdA', 'C-Organik', 24000, 'KTdA-2'),
('KTdA-3-0', 'KTdA', 'N-Kjeldahl', 30000, 'KTdA-3'),
('KTdA-4-0', 'KTdA', 'Ekstrak Total unsur makro dan mikro (Pengukuran B)', 24000, 'KTdA-4'),
('KTdA-4-1', 'KTdA', 'Ekstrak Total unsur makro dan mikro (Pengukuran Al)', 24000, 'KTdA-4'),
('KTdA-4-10', 'KTdA', 'Ekstrak Total unsur makro dan mikro (Pengukuran K)', 12000, 'KTdA-4'),
('KTdA-4-11', 'KTdA', 'Ekstrak Total unsur makro dan mikro (Pengukuran P)', 12000, 'KTdA-4'),
('KTdA-4-12', 'KTdA', 'Ekstrak Total unsur makro dan mikro (Ekstraksi)', 30000, 'KTdA-4'),
('KTdA-4-2', 'KTdA', 'Ekstrak Total unsur makro dan mikro (Pengukuran S)', 18000, 'KTdA-4'),
('KTdA-4-3', 'KTdA', 'Ekstrak Total unsur makro dan mikro (Pengukuran Mg)', 18000, 'KTdA-4'),
('KTdA-4-4', 'KTdA', 'Ekstrak Total unsur makro dan mikro (Pengukuran Ca)', 18000, 'KTdA-4'),
('KTdA-4-5', 'KTdA', 'Ekstrak Total unsur makro dan mikro (Pengukuran Zn)', 12000, 'KTdA-4'),
('KTdA-4-6', 'KTdA', 'Ekstrak Total unsur makro dan mikro (Pengukuran Cu)', 12000, 'KTdA-4'),
('KTdA-4-7', 'KTdA', 'Ekstrak Total unsur makro dan mikro (Pengukuran Mn)', 12000, 'KTdA-4'),
('KTdA-4-8', 'KTdA', 'Ekstrak Total unsur makro dan mikro (Pengukuran Fe)', 12000, 'KTdA-4'),
('KTdA-4-9', 'KTdA', 'Ekstrak Total unsur makro dan mikro (Pengukuran Na)', 12000, 'KTdA-4'),
('KTdA-5-0', 'KTdA', 'Ekstrak Total logam berat (ppm) : Pengukuran As', 24000, 'KTdA-5'),
('KTdA-5-1', 'KTdA', 'Ekstrak Total logam berat (ppm) : Pengukuran Se', 24000, 'KTdA-5'),
('KTdA-5-10', 'KTdA', 'Ekstrak Total logam berat (ppm) : Ekstraksi', 35000, 'KTdA-5'),
('KTdA-5-2', 'KTdA', 'Ekstrak Total logam berat (ppm) : Pengukuran Sn', 24000, 'KTdA-5'),
('KTdA-5-3', 'KTdA', 'Ekstrak Total logam berat (ppm) : Pengukuran Ag', 24000, 'KTdA-5'),
('KTdA-5-4', 'KTdA', 'Ekstrak Total logam berat (ppm) : Pengukuran Mo', 24000, 'KTdA-5'),
('KTdA-5-5', 'KTdA', 'Ekstrak Total logam berat (ppm) : Pengukuran Ni', 24000, 'KTdA-5'),
('KTdA-5-6', 'KTdA', 'Ekstrak Total logam berat (ppm) : Pengukuran Cr', 24000, 'KTdA-5'),
('KTdA-5-7', 'KTdA', 'Ekstrak Total logam berat (ppm) : Pengukuran Co', 24000, 'KTdA-5'),
('KTdA-5-8', 'KTdA', 'Ekstrak Total logam berat (ppm) : Pengukuran Cd', 24000, 'KTdA-5'),
('KTdA-5-9', 'KTdA', 'Ekstrak Total logam berat (ppm) : Pengukuran Pb', 24000, 'KTdA-5'),
('KTdA-6-0', 'KTdA', 'Ekstrak Total logam berat (ppb) : Pengukuran Hg', 70000, 'KTdA-6'),
('KTdA-6-1', 'KTdA', 'Ekstrak Total logam berat (ppb) : Pengukuran As', 70000, 'KTdA-6'),
('KTdA-6-10', 'KTdA', 'Ekstrak Total logam berat (ppb) : Pengukuran Pb', 70000, 'KTdA-6'),
('KTdA-6-11', 'KTdA', 'Ekstrak Total logam berat (ppb) : Ekstraksi', 35000, 'KTdA-6'),
('KTdA-6-2', 'KTdA', 'Ekstrak Total logam berat (ppb) : Pengukuran Se', 70000, 'KTdA-6'),
('KTdA-6-3', 'KTdA', 'Ekstrak Total logam berat (ppb) : Pengukuran Sn', 70000, 'KTdA-6'),
('KTdA-6-4', 'KTdA', 'Ekstrak Total logam berat (ppb) : Pengukuran Ag', 70000, 'KTdA-6'),
('KTdA-6-5', 'KTdA', 'Ekstrak Total logam berat (ppb) : Pengukuran Mo', 70000, 'KTdA-6'),
('KTdA-6-6', 'KTdA', 'Ekstrak Total logam berat (ppb) : Pengukuran Ni', 70000, 'KTdA-6'),
('KTdA-6-7', 'KTdA', 'Ekstrak Total logam berat (ppb) : Pengukuran Cr', 70000, 'KTdA-6'),
('KTdA-6-8', 'KTdA', 'Ekstrak Total logam berat (ppb) : Pengukuran Co', 70000, 'KTdA-6'),
('KTdA-6-9', 'KTdA', 'Ekstrak Total logam berat (ppb) : Pengukuran Cd', 70000, 'KTdA-6'),
('KTdA-7-0', 'KTdA', 'Kadar Abu dan Silikat Kasar (Silikat)', 18000, 'KTdA-7'),
('KTdA-7-1', 'KTdA', 'Kadar Abu dan Silikat Kasar (Abu)', 18000, 'KTdA-7'),
('KTdA-7-2', 'KTdA', 'Kadar Abu dan Silikat Kasar (Ekstraksi)', 12000, 'KTdA-7'),
('KTdA-8-0', 'KTdA', 'Kadar Lumpur', 18000, 'KTdA-8'),
('KTdA-9-0', 'KTdA', 'pH', 14000, 'KTdA-9'),
('KThK-1-0', 'KThK', 'pH-NaF', 18000, 'KThK-1'),
('KThK-10-0', 'KThK', 'Fraksionasi P (Al-P)', 30000, 'KThK-10'),
('KThK-10-1', 'KThK', 'Fraksionasi P (Fe)', 24000, 'KThK-10'),
('KThK-10-2', 'KThK', 'Fraksionasi P (Mn)', 24000, 'KThK-10'),
('KThK-10-3', 'KThK', 'Fraksionasi P (Ca)', 24000, 'KThK-10'),
('KThK-10-4', 'KThK', 'Fraksionasi P (Mg-P)', 24000, 'KThK-10'),
('KThK-10-5', 'KThK', 'Fraksionasi P (Rs-P)', 36000, 'KThK-10'),
('KThK-11-0', 'KThK', 'Ekstrak Ditionit Sitrat (Ekstraksi)', 18000, 'KThK-11'),
('KThK-11-1', 'KThK', 'Ekstrak Ditionit Sitrat (Pengukuran Al)', 24000, 'KThK-11'),
('KThK-11-2', 'KThK', 'Ekstrak Ditionit Sitrat (Fe)', 12000, 'KThK-11'),
('KThK-11-3', 'KThK', 'Ekstrak Ditionit Sitrat (Mn)', 12000, 'KThK-11'),
('KThK-12-0', 'KThK', 'Ekstraksi Oksalat (Ekstraksi)', 18000, 'KThK-12'),
('KThK-12-1', 'KThK', 'Ekstraksi Oksalat (Pengukuran Fe)', 12000, 'KThK-12'),
('KThK-12-2', 'KThK', 'Ekstraksi Oksalat (Pengukuran Al)', 24000, 'KThK-12'),
('KThK-12-3', 'KThK', 'Ekstraksi Oksalat (Pengukuran Si)', 24000, 'KThK-12'),
('KThK-13-0', 'KThK', 'Ekstrak Pirofosfat (Ekstraksi)', 18000, 'KThK-13'),
('KThK-13-1', 'KThK', 'Ekstrak Pirofosfat (Pengukuran Fe)', 12000, 'KThK-13'),
('KThK-13-2', 'KThK', 'Ekstrak Pirofosfat (Pengukuran Al)', 24000, 'KThK-13'),
('KThK-13-3', 'KThK', 'Ekstrak Pirofosfat (Pengukuran Si)', 24000, 'KThK-13'),
('KThK-13-4', 'KThK', 'Ekstrak Pirofosfat (Pengukuran C Organik)', 24000, 'KThK-13'),
('KThK-14-0', 'KThK', 'Ekstraksi Total Unsur Makro dan Mikro (Ekstraksi)', 30000, 'KThK-14'),
('KThK-14-1', 'KThK', 'Ekstraksi Total Unsur Makro dan Mikro (Pengukuran P)', 12000, 'KThK-14'),
('KThK-14-10', 'KThK', 'Ekstraksi Total Unsur Makro dan Mikro (Pengukuran Al)', 24000, 'KThK-14'),
('KThK-14-11', 'KThK', 'Ekstraksi Total Unsur Makro dan Mikro (Pengukuran B)', 24000, 'KThK-14'),
('KThK-14-2', 'KThK', 'Ekstraksi Total Unsur Makro dan Mikro (Pengukuran K)', 12000, 'KThK-14'),
('KThK-14-3', 'KThK', 'Ekstraksi Total Unsur Makro dan Mikro (Pengukuran Na)', 12000, 'KThK-14'),
('KThK-14-4', 'KThK', 'Ekstraksi Total Unsur Makro dan Mikro (Pengukuran Ca)', 12000, 'KThK-14'),
('KThK-14-5', 'KThK', 'Ekstraksi Total Unsur Makro dan Mikro (Pengukuran Mg)', 12000, 'KThK-14'),
('KThK-14-6', 'KThK', 'Ekstraksi Total Unsur Makro dan Mikro (Pengukuran S Fe)', 12000, 'KThK-14'),
('KThK-14-7', 'KThK', 'Ekstraksi Total Unsur Makro dan Mikro (Pengukuran Mn)', 12000, 'KThK-14'),
('KThK-14-8', 'KThK', 'Ekstraksi Total Unsur Makro dan Mikro (Pengukuran Cu)', 12000, 'KThK-14'),
('KThK-14-9', 'KThK', 'Ekstraksi Total Unsur Makro dan Mikro (Pengukuran Zn)', 12000, 'KThK-14'),
('KThK-15-0', 'KThK', 'Analisis Pirit (Total Fe dan S)', 48000, 'KThK-15'),
('KThK-16-0', 'KThK', 'Ekstrak Total Logam Berat (ppm) ekstrasi', 40000, 'KThK-16'),
('KThK-16-1', 'KThK', 'Ekstrak Total Logam Berat (ppm)  Pengukuran Pb', 24000, 'KThK-16'),
('KThK-16-10', 'KThK', 'Ekstrak Total Logam Berat (ppm) Pengukuran As', 24000, 'KThK-16'),
('KThK-16-2', 'KThK', 'Ekstrak Total Logam Berat (ppm) Pengukuran Cd)', 24000, 'KThK-16'),
('KThK-16-3', 'KThK', 'Ekstrak Total Logam Berat (ppm) Pengukuran Co)', 24000, 'KThK-16'),
('KThK-16-4', 'KThK', 'Ekstrak Total Logam Berat (ppm) Pengukuran Cr)', 24000, 'KThK-16'),
('KThK-16-5', 'KThK', 'Ekstrak Total Logam Berat (ppm)( Pengukuran Ni)', 24000, 'KThK-16'),
('KThK-16-6', 'KThK', 'Ekstrak Total Logam Berat (ppm) Pengukuran Mo', 24000, 'KThK-16'),
('KThK-16-7', 'KThK', 'Ekstrak Total Logam Berat (ppm) Pengukuran Ag', 24000, 'KThK-16'),
('KThK-16-8', 'KThK', 'Ekstrak Total Logam Berat (ppm) Pengukuran Sn', 24000, 'KThK-16'),
('KThK-16-9', 'KThK', 'Ekstrak Total Logam Berat (ppm) Pengukuran Se', 24000, 'KThK-16'),
('KThK-17-0', 'KThK', 'Ekstrak Total logam berat (ppb) (Ekstraksi)', 36000, 'KThK-17'),
('KThK-17-1', 'KThK', 'Ekstrak Total logam berat (ppb) Pengukuran Pb', 72000, 'KThK-17'),
('KThK-17-10', 'KThK', 'Ekstrak Total logam berat (ppb) Pengukuran As', 72000, 'KThK-17'),
('KThK-17-11', 'KThK', 'Ekstrak Total logam berat (ppb) Pengukuran Hg', 72000, 'KThK-17'),
('KThK-17-2', 'KThK', 'Ekstrak Total logam berat (ppb) Pengukuran Cd', 72000, 'KThK-17'),
('KThK-17-3', 'KThK', 'Ekstrak Total logam berat (ppb) Pengukuran Co', 72000, 'KThK-17'),
('KThK-17-4', 'KThK', 'Ekstrak Total logam berat (ppb) Pengukuran Cr', 72000, 'KThK-17'),
('KThK-17-5', 'KThK', 'Ekstrak Total logam berat (ppb) Pengukuran Ni', 72000, 'KThK-17'),
('KThK-17-6', 'KThK', 'Ekstrak Total logam berat (ppb) Pengukuran Mo', 72000, 'KThK-17'),
('KThK-17-7', 'KThK', 'Ekstrak Total logam berat (ppb) Pengukuran Ag', 72000, 'KThK-17'),
('KThK-17-8', 'KThK', 'Ekstrak Total logam berat (ppb) Pengukuran Sn', 72000, 'KThK-17'),
('KThK-17-9', 'KThK', 'Ekstrak Total logam berat (ppb) Pengukuran Se', 72000, 'KThK-17'),
('KThK-18-0', 'KThK', 'Tekstur 4 Fraksi (3 Fraksi + Liat halus)', 31500, 'KThK-18'),
('KThK-19-0', 'KThK', 'Tekstur 10 Fraksi', 55000, 'KThK-19'),
('KThK-2-0', 'KThK', 'CaCO3', 18000, 'KThK-2'),
('KThK-20-0', 'KThK', 'Ekstraksi Pengukuran Ca dan Mg', 48000, 'KThK-20'),
('KThK-21-0', 'KThK', 'Tekstur 7 Fraksi (Pipet)', 42000, 'KThK-21'),
('KThK-22-0', 'KThK', 'Keasaman aktual total', 18000, 'KThK-22'),
('KThK-23-0', 'KThK', 'Kemasaman potensial total', 18000, 'KThK-23'),
('KThK-24-0', 'KThK', 'Kadar Abu dan SIlikat Kasar (Ekstraksi)', 12000, 'KThK-24'),
('KThK-24-1', 'KThK', 'Kadar Abu dan SIlikat Kasar (Abu)', 18000, 'KThK-24'),
('KThK-24-2', 'KThK', 'Kadar Abu dan SIlikat Kasar (Silikat)', 18000, 'KThK-24'),
('KThK-25-0', 'KThK', 'Kadar Serat', 12000, 'KThK-25'),
('KThK-26-0', 'KThK', 'Kadar C- asam humat (Ekstraksi dan Pengukuran)', 72000, 'KThK-26'),
('KThK-27-0', 'KThK', 'Kebutuhan kapur cara titrasi', 60000, 'KThK-27'),
('KThK-28-0', 'KThK', 'Tekstur 3 Fraksi cara hidrometer', 24000, 'KThK-28'),
('KThK-29-0', 'KThK', 'Ekstraksi NH4- asetat (ekstraksi)', 18000, 'KThK-29'),
('KThK-29-1', 'KThK', 'Ekstraksi NH4- asetat (Pengukuran K)', 12000, 'KThK-29'),
('KThK-29-2', 'KThK', 'Ekstraksi NH4- asetat (Pengukuran Na)', 12000, 'KThK-29'),
('KThK-29-3', 'KThK', 'Ekstraksi NH4- asetat (Pengukuran Ca)', 18000, 'KThK-29'),
('KThK-29-4', 'KThK', 'Ekstraksi NH4- asetat (Pengukuran Mg)', 18000, 'KThK-29'),
('KThK-3-0', 'KThK', 'CaCO4 (Gips)', 18000, 'KThK-3'),
('KThK-30-0', 'KThK', 'Ekstrak DTPA (Ekstraksi)', 18000, 'KThK-30'),
('KThK-30-1', 'KThK', 'Ekstak DTPA (Pengukuran Fe)', 12000, 'KThK-30'),
('KThK-30-2', 'KThK', 'Ekstak DTPA (Pengukuran Mn)', 12000, 'KThK-30'),
('KThK-30-3', 'KThK', 'Ekstak DTPA (Pengukuran Cu)', 12000, 'KThK-30'),
('KThK-30-4', 'KThK', 'Ekstak DTPA (Pengukuran Zn)', 12000, 'KThK-30'),
('KThK-31-0', 'KThK', 'Suldat terekstrak dalam Ca (H2PO4)2', 30000, 'KThK-31'),
('KThK-32-0', 'KThK', 'Ekstrak unsur makro dan mikro tersedia (Morgan) (Ekstraksi)', 24000, 'KThK-32'),
('KThK-32-1', 'KThK', 'Ekstrak unsur makro dan mikro tersedia (Morgan) (Pengukuran P)', 12000, 'KThK-32'),
('KThK-32-10', 'KThK', 'Ekstrak unsur makro dan mikro tersedia (Morgan) (Pengukuran Cl)', 18000, 'KThK-32'),
('KThK-32-11', 'KThK', 'Ekstrak unsur makro dan mikro tersedia (Morgan) (Pengukuran  Ca)', 18000, 'KThK-32'),
('KThK-32-12', 'KThK', 'Ekstrak unsur makro dan mikro tersedia (Morgan) (Pengukuran Mg)', 18000, 'KThK-32'),
('KThK-32-13', 'KThK', 'Ekstrak unsur makro dan mikro tersedia (Morgan) (Pengukuran SO4)', 18000, 'KThK-32'),
('KThK-32-2', 'KThK', 'Ekstrak unsur makro dan mikro tersedia (Morgan) (Pengukuran K)', 12000, 'KThK-32'),
('KThK-32-3', 'KThK', 'Ekstrak unsur makro dan mikro tersedia (Morgan) (Pengukuran Fe)', 12000, 'KThK-32'),
('KThK-32-4', 'KThK', 'Ekstrak unsur makro dan mikro tersedia (Morgan) (Pengukuran Mn)', 12000, 'KThK-32'),
('KThK-32-5', 'KThK', 'Ekstrak unsur makro dan mikro tersedia (Morgan) (Pengukuran Cu)', 12000, 'KThK-32'),
('KThK-32-6', 'KThK', 'Ekstrak unsur makro dan mikro tersedia (Morgan) (Pengukuran Zn)', 12000, 'KThK-32'),
('KThK-32-7', 'KThK', 'Ekstrak unsur makro dan mikro tersedia (Morgan) (Pengukuran NH4)', 18000, 'KThK-32'),
('KThK-32-8', 'KThK', 'Ekstrak unsur makro dan mikro tersedia (Morgan) (Pengukuran NHO3)', 18000, 'KThK-32'),
('KThK-32-9', 'KThK', 'Ekstrak unsur makro dan mikro tersedia (Morgan) (Pengukuran PO4)', 18000, 'KThK-32'),
('KThK-33-0', 'KThK', 'Ekstrak Air 1:5 unsur makro dan mikro (Ekstraksi)', 24000, 'KThK-33'),
('KThK-33-1', 'KThK', 'Ekstrak Air 1:5 unsur makro dan mikro (Pengukuran P)', 12000, 'KThK-33'),
('KThK-33-10', 'KThK', 'Ekstrak Air 1:5 unsur makro dan mikro (Pengukuran Cl)', 18000, 'KThK-33'),
('KThK-33-11', 'KThK', 'Ekstrak Air 1:5 unsur makro dan mikro (Pengukuran Ca)', 18000, 'KThK-33'),
('KThK-33-12', 'KThK', 'Ekstrak Air 1:5 unsur makro dan mikro (Pengukuran Mg)', 18000, 'KThK-33'),
('KThK-33-13', 'KThK', 'Ekstrak Air 1:5 unsur makro dan mikro (Pengukuran SO4)', 18000, 'KThK-33'),
('KThK-33-2', 'KThK', 'Ekstrak Air 1:5 unsur makro dan mikro (Pengukuran K)', 12000, 'KThK-33'),
('KThK-33-3', 'KThK', 'Ekstrak Air 1:5 unsur makro dan mikro (Pengukuran Fe)', 12000, 'KThK-33'),
('KThK-33-4', 'KThK', 'Ekstrak Air 1:5 unsur makro dan mikro (Pengukuran Mn)', 12000, 'KThK-33'),
('KThK-33-5', 'KThK', 'Ekstrak Air 1:5 unsur makro dan mikro (Pengukuran Cu)', 12000, 'KThK-33'),
('KThK-33-6', 'KThK', 'Ekstrak Air 1:5 unsur makro dan mikro (Pengukuran Zn)', 12000, 'KThK-33'),
('KThK-33-7', 'KThK', 'Ekstrak Air 1:5 unsur makro dan mikro (Pengukuran NH4)', 18000, 'KThK-33'),
('KThK-33-8', 'KThK', 'Ekstrak Air 1:5 unsur makro dan mikro (Pengukuran  NO3)', 18000, 'KThK-33'),
('KThK-33-9', 'KThK', 'Ekstrak Air 1:5 unsur makro dan mikro (Pengukuran  PO4)', 18000, 'KThK-33'),
('KThK-34-0', 'KThK', 'Pengukuran logam berat dalam ekstrak (ppm) (Pd)', 24000, 'KThK-34'),
('KThK-34-1', 'KThK', 'Pengukuran logam berat dalam ekstrak (ppm) (Cd)', 24000, 'KThK-34'),
('KThK-34-2', 'KThK', 'Pengukuran logam berat dalam ekstrak (ppm) (Co)', 24000, 'KThK-34'),
('KThK-34-3', 'KThK', 'Pengukuran logam berat dalam ekstrak (ppm) (Cr)', 24000, 'KThK-34'),
('KThK-34-4', 'KThK', 'Pengukuran logam berat dalam ekstrak (ppm) (Ni)', 24000, 'KThK-34'),
('KThK-34-5', 'KThK', 'Pengukuran logam berat dalam ekstrak (ppm) (Ag)', 24000, 'KThK-34'),
('KThK-34-6', 'KThK', 'Pengukuran logam berat dalam ekstrak (ppm) (AS)', 24000, 'KThK-34'),
('KThK-34-7', 'KThK', 'Pengukuran logam berat dalam ekstrak (ppm) (Mo)', 24000, 'KThK-34'),
('KThK-34-8', 'KThK', 'Pengukuran logam berat dalam ekstrak (ppm) (Se)', 24000, 'KThK-34'),
('KThK-34-9', 'KThK', 'Pengukuran logam berat dalam ekstrak (ppm) (Sn)', 24000, 'KThK-34'),
('KThK-35-0', 'KThK', 'Pengukuran logam berat dalam ekstrak (ppb) (Pb)', 72000, 'KThK-35'),
('KThK-35-1', 'KThK', 'Pengukuran logam berat dalam ekstrak (ppb) (Cd)', 72000, 'KThK-35'),
('KThK-35-2', 'KThK', 'Pengukuran logam berat dalam ekstrak (ppb) (Co)', 72000, 'KThK-35'),
('KThK-35-3', 'KThK', 'Pengukuran logam berat dalam ekstrak (ppb) (Cr)', 72000, 'KThK-35'),
('KThK-35-4', 'KThK', 'Pengukuran logam berat dalam ekstrak (ppb) (Ni)', 72000, 'KThK-35'),
('KThK-35-5', 'KThK', 'Pengukuran logam berat dalam ekstrak (ppb) (Ag)', 72000, 'KThK-35'),
('KThK-35-6', 'KThK', 'Pengukuran logam berat dalam ekstrak (ppb) (Mo)', 72000, 'KThK-35'),
('KThK-35-7', 'KThK', 'Pengukuran logam berat dalam ekstrak (ppb) (Se)', 72000, 'KThK-35'),
('KThK-35-8', 'KThK', 'Pengukuran logam berat dalam ekstrak (ppb) (Sn)', 72000, 'KThK-35'),
('KThK-35-9', 'KThK', 'Pengukuran logam berat dalam ekstrak (ppb) (Hg)', 72000, 'KThK-35'),
('KThK-4-0', 'KThK', 'Salinitas / EC (DHL)', 12000, 'KThK-4'),
('KThK-5-0', 'KThK', 'Redoks', 18000, 'KThK-5'),
('KThK-6-0', 'KThK', 'Keasaman terekstrak (BaCL2-TEA)', 24000, 'KThK-6'),
('KThK-7-0', 'KThK', 'P-Retensi (Ekstraksi)', 12000, 'KThK-7'),
('KThK-7-1', 'KThK', 'P-Retensi (Pengukuran P)', 18000, 'KThK-7'),
('KThK-8-0', 'KThK', 'P-Sorption', 108000, 'KThK-8'),
('KThK-9-0', 'KThK', 'P-CaCL2 0,01 M', 24000, 'KThK-9'),
('KThR-1-0', 'KThR', 'Persiapan Contoh', 18000, 'KThR-1'),
('KThR-10-0', 'KThR', 'Kation dapat tukar (K, Na, Ca, Mg-dd) Ukur K', 12000, 'KThR-10'),
('KThR-10-1', 'KThR', 'Kation dapat tukar (K, Na, Ca, Mg-dd) Ekstraksi', 18000, 'KThR-10'),
('KThR-10-2', 'KThR', 'Kation dapat tukar (K, Na, Ca, Mg-dd) Ukur Na', 12000, 'KThR-10'),
('KThR-10-3', 'KThR', 'Kation dapat tukar (K, Na, Ca, Mg-dd) Ukur Ca', 18000, 'KThR-10'),
('KThR-10-4', 'KThR', 'Kation dapat tukar (K, Na, Ca, Mg-dd) Ukur Mg', 18000, 'KThR-10'),
('KThR-11-0', 'KThR', 'Kemasaman dapat tukar (Al dan H-dd) Ukur H-dd', 24000, 'KThR-11'),
('KThR-11-1', 'KThR', 'Kemasaman dapat tukar (Al dan H-dd) Ukur Al', 24000, 'KThR-11'),
('KThR-11-2', 'KThR', 'Kemasaman dapat tukar (Al dan H-dd) Ekstraksi', 12000, 'KThR-11'),
('KThR-2-0', 'KThR', 'Tekstur 3 Fraksi (pasir, debu, dan liat)', 30000, 'KThR-2'),
('KThR-3-0', 'KThR', 'pH - H2O dan KCl 1 M', 24000, 'KThR-3'),
('KThR-4-0', 'KThR', 'C-Organik', 24000, 'KThR-4'),
('KThR-5-0', 'KThR', 'N-Kjeldahl', 30000, 'KThR-5'),
('KThR-6-0', 'KThR', 'P-tersedia (Olsen atau Bray) Ukur', 12000, 'KThR-6'),
('KThR-6-1', 'KThR', 'P-tersedia (Olsen atau Bray) Ekstraksi', 18000, 'KThR-6'),
('KThR-7-0', 'KThR', 'K-tersedia (Morgan) Ukur', 12000, 'KThR-7'),
('KThR-7-1', 'KThR', 'K-tersedia (Morgan) Ekstraksi', 18000, 'KThR-7'),
('KThR-8-0', 'KThR', 'P dan K-potensial (Hcl 25%) P masing-masing', 18000, 'KThR-8'),
('KThR-8-1', 'KThR', 'P dan K-potensial (Hcl 25%) Ukur', 12000, 'KThR-8'),
('KThR-8-2', 'KThR', 'P dan K-potensial (Hcl 25%) Ekstraksi', 18000, 'KThR-8'),
('KThR-9-0', 'KThR', 'Kapasitas Tukar Kation (KTK) Ukur', 18000, 'KThR-9'),
('KThR-9-1', 'KThR', 'Kapasitas Tukar Kation (KTK) Ekstraksi', 24000, 'KThR-9'),
('MT-1-0', 'MT', 'Fraksi Total', 100000, 'MT-1'),
('MT-2-0', 'MT', 'Mineral Liat', 400000, 'MT-2');

-- --------------------------------------------------------

--
-- Table structure for table `sericontoh`
--

CREATE TABLE `sericontoh` (
  `id` int(11) NOT NULL,
  `kode_order` text NOT NULL,
  `sericontoh` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sericontoh`
--

INSERT INTO `sericontoh` (`id`, `kode_order`, `sericontoh`) VALUES
(1, '2017.10.4', 'FT-1-0&,FT-10-0&,FT-11-0&,FT-12-0&,FT-4-0&,FT-4-1&on,FT-5-0&,FT-6-0&,FT-6-1&'),
(2, '17.12.4', ''),
(3, '17.12.5', ''),
(4, '17.12.1', 'FT-1-0&on,FT-10-0&on,FT-11-0&on,FT-12-0&on,FT-4-0&on,FT-4-1&on,FT-5-0&on,FT-6-0&on,FT-6-1&on'),
(5, '17.12.2', ''),
(6, '17.12.3', ''),
(7, '17.12.4', ''),
(8, '17.12.5', '');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `no` int(4) NOT NULL,
  `id_order` int(5) NOT NULL,
  `kode_order` varchar(15) NOT NULL,
  `nomer_contoh` varchar(15) NOT NULL,
  `contoh` varchar(20) NOT NULL,
  `bayar` varchar(20) NOT NULL,
  `selesai` varchar(20) NOT NULL,
  `pengambilan` text NOT NULL,
  `kaji_ulang` varchar(15) NOT NULL,
  `progres` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`no`, `id_order`, `kode_order`, `nomer_contoh`, `contoh`, `bayar`, `selesai`, `pengambilan`, `kaji_ulang`, `progres`) VALUES
(1, 1, '', '', '', '', '', '', '', ''),
(3, 3, '', '', '', '', '', '', '', ''),
(4, 4, '17.12.3', 'K.ThR.1-262', '2017-12-11', '2017-12-11', '', '', '', ''),
(5, 2, '17.12.1', 'F.T.1-0', '2017-12-11', '2017-12-11', '2018-01-22', '2017-12-19&Satu juta sembilan ratus lima puluh tiga ribu lima ratus&Dicki Andrea', '2017-12-11', '100'),
(6, 5, '', '', '', '', '', '', '', ''),
(7, 6, '', '', '', '', '', '', '', ''),
(8, 7, '', '', '', '', '', '', '', ''),
(9, 8, '17.12.4', 'K.TdA.1-0', '2017-12-21', '2017-12-21', '', '', '', ''),
(10, 9, '', '', '', '', '', '', '', ''),
(11, 10, '17.12.5', 'K.Pa.1-0', '2017-12-21', '2017-12-21', '', '', '', ''),
(12, 11, '', '', '', '', '', '', '', ''),
(13, 12, '', '', '', '', '', '', '', ''),
(14, 13, '17.12.2', 'F.T.1-0', '2017-12-11', '2017-12-11', '', '', '', ''),
(15, 14, '', '', '', '', '', '', '', ''),
(16, 15, '', '', '', '', '', '', '', ''),
(17, 16, '', '', '', '', '', '', '', ''),
(18, 17, '', '', '', '', '', '', '', ''),
(19, 18, '', '', '', '', '', '', '', ''),
(20, 19, '', '', '', '', '', '', '', ''),
(21, 20, '', '', '', '', '', '', '', ''),
(22, 21, '', '', '', '', '', '', '', ''),
(23, 22, '', '', '', '', '', '', '', ''),
(24, 23, '', '', '', '', '', '', '', ''),
(25, 24, '', '', '', '', '', '', '', ''),
(26, 25, '', '', '', '', '', '', '', ''),
(27, 26, '', '', '', '', '', '', '', ''),
(28, 27, '', '', '', '', '', '', '', ''),
(29, 28, '', '', '', '', '', '', '', ''),
(30, 29, '', '', '', '', '', '', '', ''),
(31, 30, '', '', '', '', '', '', '', ''),
(32, 31, '', '', '', '', '', '', '', ''),
(33, 32, '', '', '', '', '', '', '', ''),
(34, 33, '', '', '', '', '', '', '', ''),
(35, 34, '', '', '', '', '', '', '', ''),
(36, 35, '', '', '', '', '', '', '', ''),
(37, 36, '', '', '', '', '', '', '', ''),
(38, 37, '', '', '', '', '', '', '', ''),
(39, 38, '', '', '', '', '', '', '', ''),
(40, 39, '', '', '', '', '', '', '', ''),
(41, 40, '', '', '', '', '', '', '', ''),
(42, 41, '', '', '', '', '', '', '', ''),
(43, 42, '', '', '', '', '', '', '', ''),
(44, 43, '', '', '', '', '', '', '', ''),
(45, 44, '', '', '', '', '', '', '', ''),
(46, 45, '', '', '', '', '', '', '', ''),
(47, 46, '', '', '', '', '', '', '', ''),
(48, 47, '', '', '', '', '', '', '', ''),
(49, 48, '', '', '', '', '', '', '', ''),
(50, 49, '', '', '', '', '', '', '', ''),
(51, 50, '', '', '', '', '', '', '', ''),
(52, 51, '', '', '', '', '', '', '', ''),
(53, 52, '', '', '', '', '', '', '', ''),
(54, 53, '', '', '', '', '', '', '', ''),
(55, 54, '', '', '', '', '', '', '', ''),
(56, 55, '', '', '', '', '', '', '', ''),
(57, 56, '', '', '', '', '', '', '', ''),
(58, 57, '', '', '', '', '', '', '', ''),
(59, 58, '', '', '', '', '', '', '', ''),
(60, 59, '', '', '', '', '', '', '', ''),
(61, 60, '', '', '', '', '', '', '', ''),
(62, 61, '', '', '', '', '', '', '', ''),
(63, 62, '', '', '', '', '', '', '', ''),
(64, 63, '', '', '', '', '', '', '', ''),
(65, 64, '', '', '', '', '', '', '', ''),
(66, 65, '', '', '', '', '', '', '', ''),
(67, 66, '', '', '', '', '', '', '', ''),
(68, 67, '', '', '', '', '', '', '', ''),
(69, 68, '', '', '', '', '', '', '', ''),
(70, 69, '', '', '', '', '', '', '', ''),
(71, 70, '', '', '', '', '', '', '', ''),
(72, 71, '', '', '', '', '', '', '', ''),
(73, 72, '', '', '', '', '', '', '', ''),
(74, 73, '', '', '', '', '', '', '', ''),
(75, 74, '', '', '', '', '', '', '', ''),
(76, 75, '', '', '', '', '', '', '', ''),
(77, 76, '', '', '', '', '', '', '', ''),
(78, 77, '', '', '', '', '', '', '', ''),
(79, 78, '', '', '', '', '', '', '', ''),
(80, 79, '', '', '', '', '', '', '', ''),
(81, 80, '', '', '', '', '', '', '', ''),
(82, 81, '', '', '', '', '', '', '', ''),
(83, 82, '', '', '', '', '', '', '', ''),
(84, 83, '', '', '', '', '', '', '', ''),
(85, 84, '', '', '', '', '', '', '', ''),
(86, 85, '', '', '', '', '', '', '', ''),
(87, 86, '', '', '', '', '', '', '', ''),
(88, 87, '', '', '', '', '', '', '', ''),
(89, 88, '', '', '', '', '', '', '', ''),
(90, 89, '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `surat_permohonan`
--

CREATE TABLE `surat_permohonan` (
  `kode_sp` varchar(10) NOT NULL,
  `nama_sp` text NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat_permohonan`
--

INSERT INTO `surat_permohonan` (`kode_sp`, `nama_sp`, `keterangan`) VALUES
('B', 'Biologi', 'a'),
('F', 'Fisika', 'a'),
('K', 'Kimia', 'a'),
('M', 'Mineralogi', 'as');

-- --------------------------------------------------------

--
-- Table structure for table `tborder`
--

CREATE TABLE `tborder` (
  `id` int(5) NOT NULL,
  `kode_order` varchar(20) DEFAULT NULL,
  `tanggal_terima` date NOT NULL,
  `kode_analisis` varchar(50) NOT NULL,
  `kode_user` int(4) NOT NULL,
  `contoh_tanah` int(4) DEFAULT NULL,
  `contoh_tanaman` int(4) DEFAULT NULL,
  `contoh_pupuk` int(4) DEFAULT NULL,
  `contoh_pupuk_anorganik` int(4) NOT NULL,
  `contoh_air` int(4) DEFAULT NULL,
  `contoh_ring` int(4) DEFAULT NULL,
  `contoh_bulk` int(4) DEFAULT NULL,
  `desa` varchar(50) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `kabupaten` varchar(50) NOT NULL,
  `provinsi` varchar(50) NOT NULL,
  `koordinat` varchar(50) NOT NULL,
  `pertanyaan` text NOT NULL,
  `total_biaya` varchar(30) NOT NULL,
  `metode_bayar` varchar(20) NOT NULL,
  `status_bayar` varchar(50) NOT NULL,
  `metode_kirim` varchar(20) NOT NULL,
  `status_kirim` varchar(50) NOT NULL,
  `keterangan` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tborder`
--

INSERT INTO `tborder` (`id`, `kode_order`, `tanggal_terima`, `kode_analisis`, `kode_user`, `contoh_tanah`, `contoh_tanaman`, `contoh_pupuk`, `contoh_pupuk_anorganik`, `contoh_air`, `contoh_ring`, `contoh_bulk`, `desa`, `kecamatan`, `kabupaten`, `provinsi`, `koordinat`, `pertanyaan`, `total_biaya`, `metode_bayar`, `status_bayar`, `metode_kirim`, `status_kirim`, `keterangan`) VALUES
(1, '17.10.1', '2017-10-22', 'MT', 1, 10, 0, 0, 0, 0, 0, 0, 'Ciheleut', 'Bogor Timur', 'Kota Bogor', 'Jawa Barat', 'x(19,23) y(23,90)', 'MT-1-0&10&1-10, MT-2-0&10&1-10, ', '5000000', 'Langsung', 'Belum Dibayar', 'Langsung', 'Belum Dikirim', 'Cepat Ya! '),
(2, '17.12.1', '2017-10-22', 'FT', 1, 0, 0, 0, 0, 0, 15, 10, 'Ciheleut', 'Bogor Timur', 'Kota Bogor', 'Jawa Barat', 'x(19,23) y(23,90)', 'FT-1-0&&selesai10&1-10, FT-10-0&5&6-10, FT-11-0&15&1-15, FT-12-0&5&1-5, FT-4-0&10&1-10, FT-4-1&10&1-10, FT-5-0&2&1-2, FT-6-0&3&1-4-8, FT-6-1&7&1-3-5-7-9-11-13, ', '1953500', 'Langsung', 'Belum Dibayar', 'Langsung', 'Belum Dikirim', ' Harap segera dilakukan'),
(3, 'Belum Ada Kode Order', '2017-10-22', 'BT', 1, 60, 0, 0, 0, 0, 0, 0, 'Cimanggu', 'Cibungbulang', 'Kota Bogor', 'Jawa Barat', 'x(19,23) y(23,90)', 'BT-1-0&50&1-50, BT-10-0&60&1-60, BT-11-0&17&1-17, BT-12-0&5&56-60, BT-13-0&10&1-10, BT-14-0&20&31-50, BT-15-0&40&21-60, BT-16-0&10&1-10, ', '24550000', 'Transfer', 'Belum Dibayar', 'Paket', 'Belum Dikirim', ' '),
(4, '17.12.3', '2017-10-22', 'KThR', 1, 100, 0, 0, 0, 0, 0, 0, 'Ciheleut', 'Bogor Timur', 'Kota Bogor', 'Jawa Barat', 'x(19,23) y(23,90)', 'KThR-1-0&100&1-100, KThR-10-0&50&1-50, KThR-10-1&50&1-10, KThR-10-2&10&11-20, KThR-10-3&10&31-40, KThR-10-4&5&1-2-3-9-11, KThR-11-0&8&1-8, KThR-11-1&7&11-17, KThR-11-2&16&21-36, KThR-2-0&80&1-80, KThR-3-0&90&1-90, KThR-4-0&100&1-100, ', '11202000', 'Langsung', 'Belum Dibayar', 'Langsung', 'Belum Dikirim', ' Ditunggu besok'),
(5, 'Belum Ada Kode Order', '2017-11-20', 'BT', 8, 1, 0, 0, 0, 0, 0, 0, '-', '-', '-', '-', '-', 'BT-11-0&1&-, BT-12-0&1&-, ', '300000', 'Langsung', 'Belum Dibayar', 'Langsung', 'Belum Dikirim', ' Mantap'),
(6, 'Belum Ada Kode Order', '2017-11-20', 'BT', 9, 1, 0, 0, 0, 0, 0, 0, '-', '-', '-', '-', '-', 'BT-11-0&1&-, BT-12-0&1&-, ', '300000', 'Langsung', 'Belum Dibayar', 'Langsung', 'Belum Dikirim', ' '),
(7, 'Belum Ada Kode Order', '2017-11-20', 'BT', 10, 24, 0, 0, 0, 0, 0, 0, '-', '-', '-', '-', '-', 'BT-2-0&24&-, ', '3600000', 'Langsung', 'Belum Dibayar', 'Langsung', 'Belum Dikirim', ' -'),
(8, '17.12.4', '2017-11-21', 'KTdA', 12, 0, 10, 0, 0, 0, 0, 0, 'Pangkoh', '-', 'Kotawaringin', 'Kalteng', '-', 'KTdA-1-0&10&1-10, KTdA-3-0&10&1-10, KTdA-4-0&10&-, KTdA-4-10&10&-, KTdA-4-11&10&-, KTdA-4-12&10&-, KTdA-4-2&10&-, KTdA-4-3&10&-, KTdA-4-4&10&-, KTdA-4-5&10&-, KTdA-4-6&10&-, KTdA-4-8&10&-, ', '2160000', 'Langsung', 'Belum Dibayar', 'Langsung', 'Belum Dikirim', ' CEPAT BOS'),
(9, 'Belum Ada Kode Order', '2017-11-21', 'BT', 11, 2, 0, 0, 0, 0, 0, 0, '-', '-', '-', '-', '-', 'BT-5-0&2&-, BT-8-0&2&-, ', '550000', 'Langsung', 'Belum Dibayar', 'Langsung', 'Belum Dikirim', ' -'),
(10, '17.12.5', '2017-11-21', 'KPa', 12, 0, 0, 0, 2, 0, 0, 0, 'Kalimantan', 'Kalimantan', 'Pulangpisan', 'Kalteng', '8.8', 'KPa-1-0&1&-, KPa-4-23&1&-, ', '102000', 'Langsung', 'Belum Dibayar', 'Langsung', 'Belum Dikirim', ' cepat'),
(11, 'Belum Ada Kode Order', '2017-11-21', 'BT', 11, 1, 0, 0, 0, 0, 0, 0, '-', '-', '-', '-', '-', 'BT-11-0&1&-, BT-5-0&1&-, BT-6-0&1&-, BT-8-0&1&-, BT-9-0&1&-, ', '675000', 'Langsung', 'Belum Dibayar', 'Langsung', 'Belum Dikirim', ' NO'),
(12, 'Belum Ada Kode Order', '2017-11-21', 'KPo', 14, 0, 0, 1, 0, 0, 0, 0, '-', '-', '-', '-', '-', 'KPo-1-0&1&-, KPo-1-1&1&-, KPo-4-0&1&-, KPo-4-13&1&-, KPo-4-14&1&-, KPo-4-22&1&-, KPo-4-23&1&-, ', '312000', 'Langsung', 'Belum Dibayar', 'Langsung', 'Belum Dikirim', ' -'),
(13, '17.12.2', '2017-11-21', 'FT', 11, 0, 0, 0, 0, 0, 5, 10, '-', '-', '-', '-', '-', 'FT-1-0&5& , FT-11-0&5&-, FT-12-0&5&-, FT-13-0&10& , FT-19-0&10&-, FT-7-0&5&-, ', '922500', 'Langsung', 'Belum Dibayar', 'Langsung', 'Belum Dikirim', ' '),
(14, 'Belum Ada Kode Order', '2017-11-21', 'BT', 14, 1, 0, 0, 0, 0, 0, 0, '-', '-', '-', '-', '-', 'BT-11-0&1&-, BT-12-0&1&-, BT-2-0&1&-, BT-21-0&1&-, BT-23-0&1&-, BT-25-0&1&-, BT-31-0&1&-, BT-32-0&1&-, BT-33-0&1&-, BT-48-0&1&-, BT-49-0&1&-, BT-5-0&1&-, BT-50-0&1&-, BT-51-0&1&-, BT-52-0&1&-, BT-8-0&1&-, ', '1680000', 'Langsung', 'Belum Dibayar', 'Langsung', 'Belum Dikirim', ' -'),
(15, 'Belum Ada Kode Order', '2017-11-21', 'KPo', 9, 0, 0, 1, 0, 0, 0, 0, '-', '-', '-', '-', '-', 'KPo-1-0&1&-, KPo-1-1&1&-, ', '30000', 'Langsung', 'Belum Dibayar', 'Langsung', 'Belum Dikirim', ' -'),
(16, 'Belum Ada Kode Order', '2017-11-21', 'KPo', 16, 0, 0, 1, 0, 0, 0, 0, 'Teluk Pinang', 'Ciawi', 'Bogor', 'Jawa Barat', '-', 'KPo-1-0&1&-, KPo-1-1&1&-, ', '30000', 'Langsung', 'Belum Dibayar', 'Langsung', 'Belum Dikirim', ' -'),
(17, 'Belum Ada Kode Order', '2017-11-21', 'BT', 16, 1, 0, 0, 0, 0, 0, 0, 'Teluk Pinang', 'Ciawi', 'Bogor', 'Jawa Barat', '-', 'BT-11-0&1&-, BT-12-0&1&-, BT-2-0&1&-, BT-24-0&1&-, BT-33-0&1&-, BT-50-0&1&-, BT-51-0&1&-, BT-52-0&1&-, BT-8-0&1&-, ', '930000', 'Langsung', 'Belum Dibayar', 'Langsung', 'Belum Dikirim', ' -'),
(18, 'Belum Ada Kode Order', '2017-11-21', 'KThR', 17, 1, 0, 0, 0, 0, 0, 0, '-', '-', '-', '-', '-', 'KThR-1-0&1&-, KThR-10-0&1&-, KThR-10-1&1&-, KThR-10-2&1&-, KThR-10-3&1&-, KThR-10-4&1&-, KThR-11-0&1&-, KThR-11-1&1&-, KThR-11-2&1&-, KThR-2-0&1&-, KThR-3-0&1&-, KThR-4-0&1&-, KThR-5-0&1&-, KThR-6-0&1&-, KThR-6-1&1&-, KThR-7-0&1&-, KThR-7-1&1&-, KThR-8-0&1&-, KThR-8-1&1&-, KThR-8-2&1&-, KThR-9-0&1&-, KThR-9-1&1&-, ', '414000', 'Langsung', 'Belum Dibayar', 'Langsung', 'Belum Dikirim', ' -'),
(19, 'Belum Ada Kode Order', '2017-11-21', 'KTdA', 17, 0, 1, 0, 0, 0, 0, 0, '-', '-', '-', '-', '-', 'KTdA-1-0&1&-, KTdA-2-0&1&-, KTdA-3-0&1&-, KTdA-4-11&1&-, KTdA-4-12&1&-, KTdA-4-2&1&-, KTdA-4-3&1&-, KTdA-4-4&1&-, KTdA-4-5&1&-, KTdA-4-6&1&-, KTdA-4-7&1&-, KTdA-4-8&1&-, KTdA-4-9&1&-, ', '228000', 'Langsung', 'Belum Dibayar', 'Langsung', 'Belum Dikirim', ' -'),
(20, 'Belum Ada Kode Order', '2017-11-21', 'BT', 18, 1, 0, 0, 0, 0, 0, 0, 'Randegan', '-', 'Sidoarjo', '-', '-', 'BT-11-0&1&-, BT-12-0&1&-, ', '300000', 'Langsung', 'Belum Dibayar', 'Langsung', 'Belum Dikirim', ' -'),
(21, 'Belum Ada Kode Order', '2017-11-21', 'BT', 19, 1, 0, 0, 0, 0, 0, 0, '-', '-', '-', '-', '-', 'BT-11-0&1&-, BT-12-0&1&-, ', '300000', 'Langsung', 'Belum Dibayar', 'Langsung', 'Belum Dikirim', ' -'),
(22, 'Belum Ada Kode Order', '2017-11-21', 'KThR', 20, 12, 0, 0, 0, 0, 0, 0, 'Bogor', 'Bogor', 'Bogor', 'Jawa Barat', '8.8', 'KThR-1-0&4&-, KThR-4-0&4&-, KThR-5-0&4&-, ', '288000', 'Langsung', 'Belum Dibayar', 'Langsung', 'Belum Dikirim', ' cepat'),
(23, 'Belum Ada Kode Order', '2017-11-21', 'KPo', 19, 0, 0, 1, 0, 0, 0, 0, '-', '-', '-', '-', '-', 'KPo-1-0&1&-, KPo-1-1&1&-, KPo-2-0&1&-, KPo-3-0&1&-, KPo-3-1&1&-, KPo-3-2&1&-, KPo-4-0&1&-, KPo-4-1&1&-, KPo-4-10&1&-, KPo-4-11&1&-, KPo-4-12&1&-, KPo-4-13&1&-, KPo-4-14&1&-, KPo-4-15&1&-, KPo-4-16&1&-, KPo-4-17&1&-, KPo-4-18&1&-, KPo-4-19&1&-, KPo-4-2&1&-, KPo-4-20&1&-, KPo-4-21&1&-, KPo-4-22&1&-, KPo-4-23&1&-, KPo-4-3&1&-, KPo-4-4&1&-, KPo-4-5&1&-, KPo-4-6&1&-, KPo-4-7&1&-, KPo-4-8&1&-, KPo-4-9&1&-, KPo-5-0&1&-, KPo-5-1&1&-, KPo-5-10&1&-, KPo-5-11&1&-, KPo-5-12&1&-, KPo-5-13&1&-, KPo-5-14&1&-, KPo-5-15&1&-, KPo-5-16&1&-, KPo-5-17&1&-, KPo-5-18&1&-, KPo-5-19&1&-, KPo-5-2&1&-, KPo-5-20&1&-, KPo-5-21&1&-, KPo-5-22&1&-, KPo-5-23&1&-, KPo-5-3&1&-, KPo-5-4&1&-, KPo-5-5&1&-, KPo-5-6&1&-, KPo-5-7&1&-, KPo-5-8&1&-, KPo-5-9&1&-, KPo-6-0&1&-, KPo-6-1&1&-, KPo-6-10&1&-, KPo-6-11&1&-, KPo-6-12&1&-, KPo-6-13&1&-, KPo-6-14&1&-, KPo-6-15&1&-, KPo-6-16&1&-, KPo-6-17&1&-, KPo-6-18&1&-, KPo-6-19&1&-, KPo-6-2&1&-, KPo-6-20&1&-, KPo-6-21&1&-, KPo-6-22&1&-, KPo-6-23&1&-, KPo-6-3&1&-, KPo-6-4&1&-, KPo-6-5&1&-, KPo-6-6&1&-, KPo-6-7&1&-, KPo-6-8&1&-, KPo-6-9&1&-, KPo-7-0&1&-, KPo-8-0&1&-, ', '2744000', 'Langsung', 'Belum Dibayar', 'Langsung', 'Belum Dikirim', ' -'),
(24, 'Belum Ada Kode Order', '2017-11-21', 'FT', 21, 0, 0, 0, 0, 0, 6, 0, 'KALONG LIEUD', '-', 'BOGOR', '-', '-', 'FT-1-0&6&-, FT-10-0&6&-, ', '288000', 'Transfer', 'Belum Dibayar', 'Langsung', 'Belum Dikirim', 'YES '),
(25, 'Belum Ada Kode Order', '2017-11-21', 'BT', 22, 1, 0, 0, 0, 0, 0, 0, '-', '-', '-', '-', '-', 'BT-11-0&1&-, BT-12-0&1&-, ', '300000', 'Langsung', 'Belum Dibayar', 'Langsung', 'Belum Dikirim', ' -'),
(26, 'Belum Ada Kode Order', '2017-11-21', 'KThR', 23, 1, 0, 0, 0, 0, 0, 0, '-', '-', '-', '-', '-', 'KThR-1-0&1&-, KThR-10-0&1&-, KThR-10-1&1&-, KThR-10-2&1&-, KThR-10-3&1&-, KThR-10-4&1&-, KThR-11-0&1&-, KThR-11-1&1&-, KThR-11-2&1&-, KThR-2-0&1&-, KThR-3-0&1&-, KThR-4-0&1&-, KThR-5-0&1&-, KThR-6-0&1&-, KThR-6-1&1&-, KThR-7-0&1&-, KThR-7-1&1&-, KThR-8-0&1&-, KThR-8-1&1&-, KThR-8-2&1&-, KThR-9-0&1&-, KThR-9-1&1&-, ', '414000', 'Langsung', 'Belum Dibayar', 'Langsung', 'Belum Dikirim', ' '),
(27, 'Belum Ada Kode Order', '2017-11-21', 'KThR', 23, 1, 0, 0, 0, 0, 0, 0, '-', '-', '-', '-', '-', 'KThR-1-0&1&-, KThR-10-0&1&-, KThR-10-1&1&-, KThR-10-2&1&-, KThR-10-3&1&-, KThR-10-4&1&-, KThR-11-0&1&-, KThR-11-1&1&-, KThR-11-2&1&-, KThR-2-0&1&-, KThR-3-0&1&-, KThR-4-0&1&-, KThR-5-0&1&-, KThR-6-0&1&-, KThR-6-1&1&-, KThR-7-0&1&-, KThR-7-1&1&-, KThR-8-0&1&-, KThR-8-1&1&-, KThR-8-2&1&-, KThR-9-0&1&-, KThR-9-1&1&-, ', '414000', 'Langsung', 'Belum Dibayar', 'Langsung', 'Belum Dikirim', 'Lokasi : Puncak Haur '),
(28, 'Belum Ada Kode Order', '2017-11-21', 'KPa', 24, 0, 0, 0, 1, 0, 0, 0, '-', '-', '-', '-', '-', 'KPa-1-0&1&-, KPa-10-0&1&-, KPa-4-0&1&-, KPa-4-10&1&-, KPa-4-23&1&-, KPa-4-4&1&-, KPa-4-8&1&-, ', '301000', 'Langsung', 'Belum Dibayar', 'Langsung', 'Belum Dikirim', ' -'),
(29, 'Belum Ada Kode Order', '2017-11-21', 'KThR', 25, 10, 0, 0, 0, 0, 0, 0, 'Citeko', 'Cisarua', 'Bogor', 'Jawa Barat', '8.8', 'KThR-1-0&1&-, KThR-2-0&1&-, KThR-3-0&1&-, KThR-4-0&1&-, KThR-5-0&1&-, KThR-6-0&1&-, KThR-8-0&1&-, KThR-9-1&1&-, ', '180000', 'Langsung', 'Belum Dibayar', 'Langsung', 'Belum Dikirim', ' cepat'),
(30, 'Belum Ada Kode Order', '2017-11-21', 'KPo', 26, 0, 0, 1, 0, 0, 0, 0, '-', '-', '-', '-', '-', 'KPo-1-0&1&-, KPo-5-12&1&-, KPo-5-13&1&-, KPo-5-14&1&-, KPo-6-3&1&-, KPo-7-0&1&-, ', '168000', 'Langsung', 'Belum Dibayar', 'Langsung', 'Belum Dikirim', ' '),
(31, 'Belum Ada Kode Order', '2017-11-21', 'KPo', 27, 0, 0, 4, 0, 0, 0, 0, 'Jakarta', 'Jakarta', 'Jakarta', 'Jakarta', '8.8', 'KPo-1-0&1&-, KPo-4-0&1&-, KPo-6-0&1&-, ', '111000', 'Langsung', 'Belum Dibayar', 'Langsung', 'Belum Dikirim', ' cepat'),
(32, 'Belum Ada Kode Order', '2017-11-21', 'KPo', 29, 0, 0, 1, 0, 0, 0, 0, '-', '-', '-', '-', '-', 'KPo-1-0&1&-, KPo-1-1&1&-, KPo-4-2&1&-, KPo-4-3&1&-, KPo-4-7&1&-, KPo-4-8&1&-, KPo-4-9&1&-, KPo-5-1&1&-, KPo-8-0&1&-, ', '297000', 'Langsung', 'Belum Dibayar', 'Langsung', 'Belum Dikirim', ' '),
(33, 'Belum Ada Kode Order', '2017-11-21', 'KThR', 30, 3, 0, 0, 0, 0, 0, 0, 'Jakarta', 'Jakarta', 'Jakarta', 'Jakarta', '8.8', 'KThR-1-0&3&-, KThR-3-0&3&-, KThR-4-0&3&-, KThR-5-0&3&-, KThR-6-0&3&-, KThR-8-0&3&-, KThR-9-0&3&-, KThR-9-1&3&-, ', '504000', 'Langsung', 'Belum Dibayar', 'Langsung', 'Belum Dikirim', ' cepat'),
(34, 'Belum Ada Kode Order', '2017-11-21', 'KPo', 31, 0, 0, 1, 0, 0, 0, 0, '-', '-', '-', '-', '-', 'KPo-1-0&1&-, KPo-1-1&1&-, KPo-4-1&1&-, KPo-4-10&1&-, KPo-4-11&1&-, KPo-4-12&1&-, KPo-4-13&1&-, KPo-4-18&1&-, KPo-4-21&1&-, KPo-4-22&1&-, KPo-5-0&1&-, KPo-5-1&1&-, KPo-6-0&1&-, KPo-6-1&1&-, KPo-6-10&1&-, KPo-6-3&1&-, KPo-6-4&1&-, KPo-6-6&1&-, KPo-7-0&1&-, KPo-8-0&1&-, ', '662000', 'Langsung', 'Belum Dibayar', 'Langsung', 'Belum Dikirim', ' '),
(35, 'Belum Ada Kode Order', '2017-11-21', 'KPo', 32, 0, 0, 1, 0, 0, 0, 0, 'Jakarta', 'Jakarta', 'Jakarta', 'Jakarta', '8.8', 'KPo-8-0&1&-, ', '105000', 'Langsung', 'Belum Dibayar', 'Langsung', 'Belum Dikirim', ' cepat'),
(36, 'Belum Ada Kode Order', '2017-11-21', 'KThR', 33, 1, 0, 0, 0, 0, 0, 0, '-', '-', 'Cipinang', '-', '-', 'KThR-1-0&1&-, KThR-10-0&1&-, KThR-10-1&1&-, KThR-10-2&1&-, KThR-10-3&1&-, KThR-10-4&1&-, KThR-11-0&1&-, KThR-11-1&1&-, KThR-11-2&1&-, KThR-2-0&1&-, KThR-3-0&1&-, KThR-4-0&1&-, KThR-5-0&1&-, KThR-6-0&1&-, KThR-6-1&1&-, KThR-7-0&1&-, KThR-7-1&1&-, KThR-8-0&1&-, KThR-8-1&1&-, KThR-8-2&1&-, KThR-9-0&1&-, KThR-9-1&1&-, ', '414000', 'Langsung', 'Belum Dibayar', 'Langsung', 'Belum Dikirim', 'Kejenuhan Bebas '),
(37, 'Belum Ada Kode Order', '2017-11-21', 'KPo', 28, 0, 0, 1, 0, 0, 0, 0, '-', '-', '-', '-', '-', 'KPo-1-0&1&-, KPo-1-1&1&-, KPo-2-0&1&-, KPo-3-0&1&-, KPo-3-1&1&-, KPo-3-2&1&-, KPo-4-0&1&-, KPo-4-1&1&-, KPo-4-10&1&-, KPo-4-11&1&-, KPo-4-12&1&-, KPo-4-13&1&-, KPo-4-14&1&-, KPo-4-15&1&-, KPo-4-16&1&-, KPo-4-17&1&-, KPo-4-18&1&-, KPo-4-19&1&-, KPo-4-2&1&-, KPo-4-20&1&-, KPo-4-21&1&-, KPo-4-22&1&-, KPo-4-23&1&-, KPo-4-3&1&-, KPo-4-4&1&-, KPo-4-5&1&-, KPo-4-6&1&-, KPo-4-7&1&-, KPo-4-8&1&-, KPo-4-9&1&-, KPo-5-0&1&-, KPo-5-1&1&-, KPo-5-10&1&-, KPo-5-11&1&-, KPo-5-12&1&-, KPo-5-13&1&-, KPo-5-14&1&-, KPo-5-15&1&-, KPo-5-16&1&-, KPo-5-17&1&-, KPo-5-18&1&-, KPo-5-19&1&-, KPo-5-2&1&-, KPo-5-20&1&-, KPo-5-21&1&-, KPo-5-22&1&-, KPo-5-23&1&-, KPo-5-3&1&-, KPo-5-4&1&-, KPo-5-5&1&-, KPo-5-6&1&-, KPo-5-7&1&-, KPo-5-8&1&-, KPo-5-9&1&-, KPo-6-0&1&-, KPo-6-1&1&-, KPo-6-10&1&-, KPo-6-11&1&-, KPo-6-12&1&-, KPo-6-13&1&-, KPo-6-14&1&-, KPo-6-15&1&-, KPo-6-16&1&-, KPo-6-17&1&-, KPo-6-18&1&-, KPo-6-19&1&-, KPo-6-2&1&-, KPo-6-20&1&-, KPo-6-21&1&-, KPo-6-22&1&-, KPo-6-23&1&-, KPo-6-3&1&-, KPo-6-4&1&-, KPo-6-5&1&-, KPo-6-6&1&-, KPo-6-7&1&-, KPo-6-8&1&-, KPo-6-9&1&-, KPo-7-0&1&-, KPo-8-0&1&-, ', '2744000', 'Langsung', 'Belum Dibayar', 'Langsung', 'Belum Dikirim', ' -'),
(38, 'Belum Ada Kode Order', '2017-11-21', 'KPo', 34, 0, 0, 1, 0, 0, 0, 0, 'Delimas', 'Ceper', 'Klaten', 'Jawa Tengah', '8.8', 'KPo-8-0&1&-, ', '105000', 'Langsung', 'Belum Dibayar', 'Langsung', 'Belum Dikirim', ' cepat'),
(39, 'Belum Ada Kode Order', '2017-11-21', 'BT', 28, 2, 0, 0, 0, 0, 0, 0, '-', '-', '-', '-', '-', 'BT-11-0&1&-, BT-12-0&1&-, ', '300000', 'Langsung', 'Belum Dibayar', 'Langsung', 'Belum Dikirim', ' -'),
(40, 'Belum Ada Kode Order', '2017-11-21', 'KThR', 35, 27, 0, 0, 0, 0, 0, 0, '-', '-', '-', '-', '-', 'KThR-1-0&27&-, KThR-10-0&27&-, KThR-10-1&27&-, KThR-10-2&27&-, KThR-10-3&27&-, KThR-10-4&27&-, KThR-11-0&27&-, KThR-11-1&27&-, KThR-11-2&27&-, KThR-2-0&27&-, KThR-3-0&27&-, KThR-4-0&27&-, KThR-5-0&27&-, KThR-6-0&27&-, KThR-6-1&27&-, KThR-7-0&27&-, KThR-7-1&27&-, KThR-8-0&27&-, KThR-8-1&27&-, KThR-8-2&27&-, KThR-9-0&27&-, KThR-9-1&27&-, ', '11178000', 'Langsung', 'Belum Dibayar', 'Langsung', 'Belum Dikirim', ' '),
(41, 'Belum Ada Kode Order', '2017-11-21', 'KPo', 36, 0, 0, 1, 0, 0, 0, 0, 'Jatim', 'Jatim', 'Jatim', 'Jatim', '8.8', 'KPo-8-0&1&-, ', '105000', 'Langsung', 'Belum Dibayar', 'Langsung', 'Belum Dikirim', ' cepat'),
(42, 'Belum Ada Kode Order', '2017-11-21', 'BT', 9, 1, 0, 0, 0, 0, 0, 0, '-', '-', '-', '-', '-', 'BT-11-0&1&-, BT-12-0&5&-, ', '900000', 'Langsung', 'Belum Dibayar', 'Langsung', 'Belum Dikirim', ' -'),
(43, 'Belum Ada Kode Order', '2017-11-21', 'BT', 37, 1, 0, 0, 0, 0, 0, 0, '-', '-', '-', '-', '-', 'BT-11-0&1&-, BT-12-0&1&-, ', '300000', 'Langsung', 'Belum Dibayar', 'Langsung', 'Belum Dikirim', ' '),
(44, 'Belum Ada Kode Order', '2017-11-21', 'FT', 38, 0, 0, 0, 0, 0, 2, 2, 'Parung', 'Walantaka', 'Serang', 'Banten', '8.8', 'FT-1-0&1&-, FT-3-0&1&-, ', '98000', 'Langsung', 'Belum Dibayar', 'Langsung', 'Belum Dikirim', ' cepat'),
(45, 'Belum Ada Kode Order', '2017-11-21', 'BT', 26, 1, 0, 0, 0, 0, 0, 0, '-', '-', '-', '-', '-', 'BT-11-0&1&-, BT-12-0&1&-, ', '300000', 'Langsung', 'Belum Dibayar', 'Langsung', 'Belum Dikirim', ' '),
(46, 'Belum Ada Kode Order', '2017-11-21', 'KThR', 38, 1, 0, 0, 0, 0, 0, 0, 'Parung', 'Walantaka', 'Serang', 'Banten', '8.8', 'KThR-1-0&1&-, KThR-3-0&1&-, KThR-5-0&1&-, KThR-7-0&1&-, ', '84000', 'Langsung', 'Belum Dibayar', 'Langsung', 'Belum Dikirim', ' cepat'),
(47, 'Belum Ada Kode Order', '2017-11-21', 'KThR', 40, 1, 0, 0, 0, 0, 0, 0, '-', '-', '-', '-', '-', 'KThR-1-0&1&-, KThR-10-0&1&-, KThR-10-1&1&-, KThR-10-2&1&-, KThR-10-3&1&-, KThR-10-4&1&-, KThR-11-0&1&-, KThR-11-1&1&-, KThR-11-2&1&-, KThR-3-0&1&-, KThR-4-0&1&-, KThR-5-0&1&-, KThR-6-0&1&-, KThR-6-1&1&-, KThR-7-0&1&-, KThR-7-1&1&-, KThR-8-0&1&-, KThR-8-1&1&-, KThR-8-2&1&-, KThR-9-0&1&-, KThR-9-1&1&-, ', '384000', 'Langsung', 'Belum Dibayar', 'Langsung', 'Belum Dikirim', ' -'),
(48, 'Belum Ada Kode Order', '2017-11-21', 'KThR', 39, 25, 0, 0, 0, 0, 0, 0, 'Bogor', 'Bogor', 'Bogor', 'Jawa Barat', '8.8', 'KThR-1-0&25&-, KThR-10-1&25&-, KThR-11-0&25&-, KThR-3-0&25&-, KThR-4-0&25&-, KThR-5-0&25&-, KThR-8-0&25&-, KThR-9-1&25&-, ', '4500000', 'Langsung', 'Belum Dibayar', 'Langsung', 'Belum Dikirim', ' cepat'),
(49, 'Belum Ada Kode Order', '2017-11-21', 'KPo', 41, 0, 0, 2, 0, 0, 0, 0, '-', '-', '-', '-', '-', 'KPo-1-0&2&-, KPo-1-1&2&-, KPo-2-0&2&-, KPo-3-0&2&-, KPo-3-1&2&-, KPo-3-2&2&-, KPo-4-0&2&-, KPo-4-1&2&-, KPo-4-10&2&-, KPo-4-11&2&-, KPo-4-12&2&-, KPo-4-13&2&-, KPo-4-14&2&-, KPo-4-15&2&-, KPo-4-16&2&-, KPo-4-17&&-, ', '916000', 'Langsung', 'Belum Dibayar', 'Langsung', 'Belum Dikirim', ' '),
(50, 'Belum Ada Kode Order', '2017-11-21', 'KPa', 42, 0, 0, 0, 1, 0, 0, 0, '-', '-', '-', '-', '-', 'KPa-1-0&&-, KPa-4-13&1&-, KPa-4-23&1&-, KPa-9-0&1&-, ', '207000', 'Langsung', 'Belum Dibayar', 'Langsung', 'Belum Dikirim', ' -'),
(51, 'Belum Ada Kode Order', '2017-11-21', 'KThR', 10, 24, 0, 0, 0, 0, 0, 0, 'Cianjur', 'Cianjur', 'Cianjur', 'Jawa Barat', '8.8', 'KThR-1-0&24&-, KThR-2-0&24&-, KThR-3-0&24&-, KThR-4-0&24&-, ', '2304000', 'Langsung', 'Belum Dibayar', 'Langsung', 'Belum Dikirim', ' cepat'),
(52, 'Belum Ada Kode Order', '2017-11-21', 'KThR', 44, 2, 0, 0, 0, 0, 0, 0, 'Pagerbatu', 'Majasari', 'Pandeglang', 'Banten', '-', 'KThR-1-0&2&-, KThR-2-0&2&-, KThR-3-0&2&-, KThR-4-0&2&-, KThR-9-0&2&-, KThR-9-1&2&-, ', '276000', 'Langsung', 'Belum Dibayar', 'Langsung', 'Belum Dikirim', ' '),
(53, 'Belum Ada Kode Order', '2017-11-21', 'KThK', 10, 24, 0, 0, 0, 0, 0, 0, 'Cianjur', 'Cianjur', 'Cianjur', 'Jawa Barat', '8.8', 'KThK-4-0&24&-, KThK-5-0&24&-, ', '720000', 'Langsung', 'Belum Dibayar', 'Langsung', 'Belum Dikirim', ' cepat'),
(54, 'Belum Ada Kode Order', '2017-11-21', 'KPa', 42, 0, 0, 0, 1, 0, 0, 0, '-', '-', '-', '-', '-', 'KPa-1-0&1&-, KPa-4-16&1&-, KPa-4-23&1&-, KPa-6-16&1&-, KPa-6-23&1&-, KPa-9-0&1&-, ', '291000', 'Langsung', 'Belum Dibayar', 'Langsung', 'Belum Dikirim', ' -'),
(55, 'Belum Ada Kode Order', '2017-11-21', 'KThR', 45, 2, 0, 0, 0, 0, 0, 0, 'Linggar Mulgi', 'Kelapa Nunggal', 'Bogor', 'Jawa Barat', '-', 'KThR-1-0&2&-, KThR-10-0&2&-, KThR-10-1&2&-, KThR-10-2&2&-, KThR-10-3&2&-, KThR-10-4&2&-, KThR-11-0&2&-, KThR-11-1&2&-, KThR-11-2&2&-, KThR-2-0&2&-, KThR-3-0&2&-, KThR-4-0&2&-, KThR-5-0&2&-, KThR-6-0&2&-, KThR-6-1&2&-, KThR-7-0&2&-, KThR-7-1&2&-, KThR-8-0&2&-, KThR-8-1&2&-, KThR-8-2&2&-, KThR-9-0&2&-, KThR-9-1&2&-, ', '828000', 'Langsung', 'Belum Dibayar', 'Langsung', 'Belum Dikirim', ' -'),
(56, 'Belum Ada Kode Order', '2017-11-21', 'KTdA', 46, 0, 99, 0, 0, 0, 0, 0, 'Kalteng', 'Kalteng', 'Waringin Barat', 'Kalteng', '8.8', 'KTdA-1-0&99&-, KTdA-3-0&99&-, KTdA-4-2&99&-, ', '6534000', 'Langsung', 'Belum Dibayar', 'Langsung', 'Belum Dikirim', ' cepat'),
(57, 'Belum Ada Kode Order', '2017-11-21', 'KPa', 47, 0, 0, 0, 1, 0, 0, 0, '-', '-', '-', '-', '-', 'KPa-1-0&1&-, KPa-2-0&1&-, KPa-4-14&1&-, KPa-4-15&1&-, KPa-4-16&1&-, KPa-4-17&1&-, KPa-4-18&1&-, KPa-4-19&1&-, KPa-4-2&1&-, KPa-5-0&1&-, KPa-5-1&1&-, KPa-5-15&1&-, ', '382000', 'Langsung', 'Belum Dibayar', 'Langsung', 'Belum Dikirim', ' '),
(58, 'Belum Ada Kode Order', '2017-11-21', 'KTdA', 46, 0, 135, 0, 0, 0, 0, 0, 'Amin Jaya', 'Pangkalan Banteng', 'Waringin Barat', 'Kalteng', '8.8', 'KTdA-1-0&135&-, KTdA-3-0&135&-, KTdA-4-0&135&-, ', '9720000', 'Langsung', 'Belum Dibayar', 'Langsung', 'Belum Dikirim', ' cepat'),
(59, 'Belum Ada Kode Order', '2017-11-21', 'KTdA', 46, 0, 2, 0, 0, 0, 0, 0, 'Kalteng', 'Kalteng', 'Waringin Barat', 'Kalteng', '8.8', 'KTdA-1-0&2&-, KTdA-4-0&2&-, ', '84000', 'Langsung', 'Belum Dibayar', 'Langsung', 'Belum Dikirim', ' cepat'),
(60, 'Belum Ada Kode Order', '2017-11-21', 'FT', 10, 0, 0, 0, 0, 0, 24, 24, '-', '-', '-', '-', '-', 'FT-1-0&24&-, FT-2-0&24&-, FT-2-1&24&-, FT-3-0&24&-, FT-4-0&24&-, FT-4-1&24&-, ', '6312000', 'Langsung', 'Belum Dibayar', 'Langsung', 'Belum Dikirim', ' d'),
(61, 'Belum Ada Kode Order', '2017-11-21', 'BT', 48, 2, 0, 0, 0, 0, 0, 0, '-', '-', '-', '-', '-', 'BT-11-0&1&-, BT-12-0&1&-, ', '300000', 'Langsung', 'Belum Dibayar', 'Langsung', 'Belum Dikirim', ' '),
(62, 'Belum Ada Kode Order', '2017-11-21', 'KThR', 46, 18, 0, 0, 0, 0, 0, 0, '-', '-', '-', '-', '-', 'KThR-1-0&18&-, KThR-10-0&18&-, KThR-10-1&18&-, KThR-10-2&18&-, KThR-10-3&18&-, KThR-10-4&18&-, KThR-9-0&18&-, KThR-9-1&18&-, ', '2484000', 'Langsung', 'Belum Dibayar', 'Langsung', 'Belum Dikirim', ' -'),
(63, 'Belum Ada Kode Order', '2017-11-21', 'KPo', 51, 0, 0, 1, 0, 0, 0, 0, 'Jakarta', 'Jakarta', 'Jakarta', 'Jakarta', '8.8', 'KPo-1-0&1&-, KPo-7-0&1&-, ', '39000', 'Langsung', 'Belum Dibayar', 'Langsung', 'Belum Dikirim', ' cepat'),
(64, 'Belum Ada Kode Order', '2017-11-21', 'FT', 50, 0, 0, 0, 0, 0, 3, 6, '-', '-', 'Barito', 'Kalimantan Selatan', '-', 'FT-1-0&6&-, FT-13-0&3&-, FT-16-0&3&-, FT-17-0&3&-, FT-2-0&6&-, FT-3-0&6&-, FT-4-0&6&-, ', '1165500', 'Langsung', 'Belum Dibayar', 'Langsung', 'Belum Dikirim', ' '),
(65, 'Belum Ada Kode Order', '2017-11-21', 'KThR', 52, 4, 0, 0, 0, 0, 0, 0, '-', '-', '-', '-', '-', 'KThR-1-0&4&-, ', '72000', 'Langsung', 'Belum Dibayar', 'Langsung', 'Belum Dikirim', ' '),
(66, 'Belum Ada Kode Order', '2017-11-21', 'FT', 53, 0, 0, 0, 0, 0, 16, 16, 'Mukapayung', '-', '-', '-', '-', 'FT-1-0&16&-, FT-11-0&16&, FT-13-0&16&-, FT-2-0&16&-, FT-3-0&16&-, FT-4-0&16&-, ', '3512000', 'Langsung', 'Belum Dibayar', 'Langsung', 'Belum Dikirim', ' '),
(67, 'Belum Ada Kode Order', '2017-11-21', 'KPo', 54, 0, 0, 1, 0, 0, 0, 0, 'Jakarta', 'Jakarta', 'Jakarta', 'Jakarta', '8.8', 'KPo-7-0&1&-, KPo-8-0&1&-, ', '129000', 'Langsung', 'Belum Dibayar', 'Langsung', 'Belum Dikirim', ' cepat'),
(68, 'Belum Ada Kode Order', '2017-11-21', 'KPa', 55, 0, 0, 0, 1, 0, 0, 0, '-', '-', '-', '-', '-', 'KPa-1-0&1&-, KPa-10-0&1&-, KPa-2-0&1&-, KPa-3-0&1&-, KPa-3-1&1&-, KPa-3-2&1&-, KPa-4-0&1&-, KPa-4-1&1&-, KPa-7-0&1&-, KPa-8-0&1&-, KPa-9-0&1&-, ', '451000', 'Langsung', 'Belum Dibayar', 'Langsung', 'Belum Dikirim', ' '),
(69, 'Belum Ada Kode Order', '2017-11-21', 'KThK', 57, 4, 0, 0, 0, 0, 0, 0, 'Bandung', 'Bandung', 'Bandung', 'Jawa Barat', '8.8', 'KThK-11-0&4&-, KThK-14-0&4&-, ', '192000', 'Langsung', 'Belum Dibayar', 'Langsung', 'Belum Dikirim', ' cepat'),
(70, 'Belum Ada Kode Order', '2017-11-21', 'KPo', 56, 0, 0, 1, 0, 0, 0, 0, '-', '-', '-', '-', '-', 'KPo-1-0&2&-, KPo-4-13&1&-, KPo-4-14&1&-, KPo-4-15&1&-, KPo-4-16&1&-, KPo-4-17&1&-, KPo-4-22&1&-, KPo-4-23&1&-, KPo-4-3&1&-, KPo-4-4&1&-, KPo-4-5&1&-, KPo-6-13&1&-, KPo-6-14&1&-, KPo-6-15&1&-, KPo-6-16&1&-, KPo-6-17&1&-, KPo-6-18&&-, ', '592000', 'Langsung', 'Belum Dibayar', 'Langsung', 'Belum Dikirim', '\r\n '),
(71, 'Belum Ada Kode Order', '2017-11-21', 'KPo', 58, 0, 0, 1, 0, 0, 0, 0, 'Babel', 'Pangkalan Baru', 'Bangka Tengah', 'Babel', '8.8', 'KPo-2-0&1&-, KPo-4-0&1&-, KPo-8-0&1&-, ', '197000', 'Langsung', 'Belum Dibayar', 'Langsung', 'Belum Dikirim', ' cepat'),
(72, 'Belum Ada Kode Order', '2017-11-21', 'KPo', 59, 0, 0, 1, 0, 0, 0, 0, '-', '-', '-', '-', '-', 'KPo-1-0&1&-, KPo-1-1&1&-, KPo-2-0&1&-, KPo-3-0&1&-, KPo-3-1&1&-, KPo-3-2&1&-, KPo-4-0&1&-, KPo-4-1&1&-, KPo-7-0&1&-, KPo-8-0&1&-, ', '347000', 'Langsung', 'Belum Dibayar', 'Langsung', 'Belum Dikirim', ' '),
(73, 'Belum Ada Kode Order', '2017-11-21', 'BT', 32, 1, 0, 0, 0, 0, 0, 0, '-', '-', '-', '-', '-', 'BT-11-0&1&-, BT-12-0&1&-, ', '300000', 'Transfer', 'Belum Dibayar', 'Paket', 'Belum Dikirim', ' '),
(74, 'Belum Ada Kode Order', '2017-11-21', 'BT', 60, 1, 0, 0, 0, 0, 0, 0, 'Bogor', 'Bogor', 'Bogor', 'Jawa Barat', '8.8', 'BT-25-0&1&-, ', '125000', 'Langsung', 'Belum Dibayar', 'Langsung', 'Belum Dikirim', ' cepat'),
(75, 'Belum Ada Kode Order', '2017-11-21', 'BT', 8, 1, 0, 0, 0, 0, 0, 0, '-', '-', '-', '-', '-', 'BT-11-0&1&-, BT-12-0&1&-, ', '300000', 'Langsung', 'Belum Dibayar', 'Langsung', 'Belum Dikirim', ' '),
(76, 'Belum Ada Kode Order', '2017-11-21', 'KThR', 60, 15, 0, 0, 0, 0, 0, 0, 'Bogor', 'Bogor', 'Bogor', 'Jawa Barat', '8.8', 'KThR-1-0&15&-, ', '270000', 'Langsung', 'Belum Dibayar', 'Langsung', 'Belum Dikirim', ' cepat'),
(77, 'Belum Ada Kode Order', '2017-11-21', 'BT', 59, 1, 0, 0, 0, 0, 0, 0, '-', '-', '-', '-', '-', 'BT-11-0&1&-, BT-12-0&1&-, ', '300000', 'Langsung', 'Belum Dibayar', 'Langsung', 'Belum Dikirim', ' '),
(78, 'Belum Ada Kode Order', '2017-11-21', 'KPo', 62, 0, 0, 1, 0, 0, 0, 0, 'Medan', 'Medan', 'Medan', 'Sumatera Utara', '8.8', 'KPo-5-0&1&-, ', '30000', 'Langsung', 'Belum Dibayar', 'Langsung', 'Belum Dikirim', ' cepat'),
(79, 'Belum Ada Kode Order', '2017-11-21', 'KPo', 64, 0, 0, 1, 0, 0, 0, 0, 'Gondang', 'Gondang', 'Gondang', 'Jawa Timur', '8.8', 'KPo-6-0&1&-, ', '24000', 'Langsung', 'Belum Dibayar', 'Langsung', 'Belum Dikirim', ' cepat'),
(80, 'Belum Ada Kode Order', '2017-11-21', 'KThR', 63, 5, 0, 0, 0, 0, 0, 0, '-', 'Wamena', 'Jaya Wijaya', 'Papua', '-', 'KThR-1-0&5&-, KThR-10-0&5&-, KThR-10-1&5&-, KThR-10-2&5&-, KThR-10-3&5&-, KThR-10-4&5&-, KThR-11-0&5&-, KThR-11-1&5&-, KThR-11-2&5&-, KThR-2-0&5&-, KThR-3-0&5&-, KThR-4-0&5&-, KThR-5-0&5&-, KThR-6-0&5&-, KThR-6-1&5&-, KThR-7-0&5&-, KThR-7-1&5&-, KThR-8-0&5&-, KThR-8-1&5&-, KThR-8-2&5&-, KThR-9-0&5&-, KThR-9-1&5&-, ', '2070000', 'Langsung', 'Belum Dibayar', 'Langsung', 'Belum Dikirim', ' '),
(81, 'Belum Ada Kode Order', '2017-11-21', 'BT', 28, 1, 0, 0, 0, 0, 0, 0, '-', '-', '-', '-', '-', 'BT-11-0&1&-, BT-12-0&1&-, ', '300000', 'Langsung', 'Belum Dibayar', 'Langsung', 'Belum Dikirim', ' '),
(82, 'Belum Ada Kode Order', '2017-11-21', 'BT', 67, 1, 0, 0, 0, 0, 0, 0, 'Mentawa Baru Hulu', 'Baamang', 'Kotawaringin Timur', 'Kalimantan Tengah', '-', 'BT-13-0&1&-, BT-2-0&1&-, BT-3-0&1&-, BT-8-0&1&-, ', '425000', 'Langsung', 'Belum Dibayar', 'Langsung', 'Belum Dikirim', ' '),
(83, 'Belum Ada Kode Order', '2017-11-21', 'KPo', 68, 0, 0, 1, 0, 0, 0, 0, '-', '-', '-', '-', '-', 'KPo-1-0&1&-, KPo-1-1&1&-, KPo-7-0&1&-, KPo-8-0&1&-, ', '159000', 'Langsung', 'Belum Dibayar', 'Langsung', 'Belum Dikirim', ' '),
(84, 'Belum Ada Kode Order', '2017-11-21', 'KThR', 69, 8, 0, 0, 0, 0, 0, 0, 'Cibutu', 'Cibutu', 'Bekasi', 'Jawa Barat', '8.8', 'KThR-1-0&8&-, KThR-4-0&8&-, KThR-5-0&8&-, KThR-8-0&8&-, KThR-9-0&8&-, ', '864000', 'Langsung', 'Belum Dibayar', 'Langsung', 'Belum Dikirim', ' cepat'),
(85, 'Belum Ada Kode Order', '2017-11-21', 'KTdA', 71, 0, 2, 0, 0, 0, 0, 0, 'Gorontalo', 'Gorontalo', 'Gorontalo', 'Gorontalo', '8.8', 'KTdA-2-0&2&-, KTdA-3-0&2&-, ', '108000', 'Langsung', 'Belum Dibayar', 'Langsung', 'Belum Dikirim', ' cepat'),
(86, 'Belum Ada Kode Order', '2017-11-21', 'BT', 70, 1, 0, 0, 0, 0, 0, 0, '-', '-', '-', '-', '-', 'BT-11-0&1&-, BT-12-0&1&-, BT-13-0&1&-, BT-14-0&1&-, ', '550000', 'Langsung', 'Belum Dibayar', 'Langsung', 'Belum Dikirim', ' '),
(87, 'Belum Ada Kode Order', '2017-11-21', 'KTdA', 72, 0, 36, 0, 0, 0, 0, 0, 'Malang', 'Malang', 'Malang', 'Jawa Timur', '8.8', 'KTdA-4-0&36&-, ', '864000', 'Langsung', 'Belum Dibayar', 'Langsung', 'Belum Dikirim', ' cepat'),
(88, 'Belum Ada Kode Order', '2017-11-21', 'KThK', 46, 2, 0, 0, 0, 0, 0, 0, '-', '-', 'Kotawaringin Barat', '-', '-', 'KThK-32-0&2&-, KThK-32-3&2&-, KThK-32-5&2&-, KThK-32-6&2&-, ', '120000', 'Langsung', 'Belum Dibayar', 'Langsung', 'Belum Dikirim', ' -'),
(89, 'Belum Ada Kode Order', '2017-11-21', 'KThR', 73, 1, 0, 0, 0, 0, 0, 0, '-', '-', '-', '-', '-', 'KThR-1-0&1&-, KThR-10-0&1&-, KThR-10-1&1&-, KThR-10-2&1&-, KThR-10-3&1&-, KThR-10-4&1&-, KThR-11-0&1&-, KThR-11-1&1&-, KThR-11-2&1&-, KThR-2-0&1&-, KThR-3-0&1&-, KThR-4-0&1&-, KThR-5-0&1&-, KThR-6-0&1&-, KThR-6-1&1&-, KThR-7-0&1&-, KThR-7-1&1&-, KThR-8-0&1&-, KThR-8-1&1&-, KThR-8-2&1&-, KThR-9-0&1&-, KThR-9-1&1&-, ', '414000', 'Langsung', 'Belum Dibayar', 'Langsung', 'Belum Dikirim', 'Ds. Nambulau - JATENG ');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `kode_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `instansi` varchar(50) NOT NULL,
  `alamat_instansi` text NOT NULL,
  `telp` text NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`kode_user`, `username`, `password`, `nama`, `instansi`, `alamat_instansi`, `telp`, `email`) VALUES
(1, 'gia', '$2y$10$bfZUTfRD4O.AkEFLETbX2eVbKonRbq7GI5Dd/OwEwmqzpObMcLdoG', 'Ghifary Ilham A', 'Bews Code INC', 'Dramaga Bogor', '085779908779', 'ghiffary.ilham@gmail.com'),
(2, 'dicki', '$2y$10$umv9b7lC/JnmR.VOqLeade1INYgknJo5/CbnRtQBlIgOa1RSc7zMy', 'Dicki Andrea', 'Andrea Liberation', 'Ciheleut Pakuan Bogor', '08676127611', 'dicki@gmail.com'),
(3, 'anggota', '$2y$10$UDE3/ti8tPjf80evJ7iGiOamz1wM/HRmYtG67G/uYUaLCDQz2YPxi', 'anggota', 'fkmi', '-', '9023', 'dicki123andrea@gmail.com'),
(4, 'anggota1', '$2y$10$MUzMASZ4/egkFMdtbnobu.CoxCrxQvDuMBDAnj/TnDI.Sjq9v4Q5W', 'anggota1', 'fkmi', 'aajfshdakf', '18294', 'dicki123andrea@gmail.com'),
(5, 'anggota2', '$2y$10$h9AlU6CzqFvyd508Kwmaze8vDnuPZ2rw0M7pjJpXIAN9E/pHysT0W', 'anggota2', 'fkmi', 'asdf', '87923', 'dicki123andrea@gmail.com'),
(6, 'anggota3', '$2y$10$oAp2CbXBmh7Dxm/PRWDb/esdaBxX/dp5.Pphs1EbanxYdMwrWHkHu', 'anggota3', 'fkmi', 'asfkljf', '8172938', 'dicki123andrea@gmail.com'),
(7, 'anggota4', '$2y$10$o3Pt5m12QCCLq8.hOu57eOfdl22JJbV6cvtHDORtQvEd0fwMIips.', 'anggota4', 'fkmi', 'asfjaksdf', '8012932', 'dicki123andrea@gmail.com'),
(8, 'kurniawan', '$2y$10$E3BCnDX2yT7t/YgJepgEKunYtuNxsF1.fVI.lZ82I8usR9.F6o4Yy', 'Kurniawan', 'CV. Scorlets / Inspektorat Jenderal Kementerian Pe', 'Jl. Harsono RM', '00', 'dicki123andrea@gmail.com'),
(9, 'jojon', '$2y$10$GuZUh947u8zP7nQ8K0WMTefMt5eehwx4qJjBOxuGsksOwplwIf/XC', 'Jojon Suryono, SP', 'PT. Angputra Global Organik', 'Jawa Timur', '00', 'dicki123andrea@gmail.com'),
(10, 'tatang', '$2y$10$LAalR/6TGn7vNHga2kjoeexLP8372rMqb7XFWy01SAwcP3Uryorf6', 'Tatang Kurniawan', 'DLH Kab. Cianjur', 'Jl. Raya Cianjur - Bandung Km.2 Cianjur', '081584065302', 'tkurniawan264@gmail.com'),
(11, 'elizabeth', '$2y$10$7LTvvKTzCumurcPRa5PFfOesY88U41DYRlWWvtdlEjxDO2r13b4FG', 'Elizabeth Kaya', 'Universitas Pattimura', 'Jl. Dr Latumena', '-', 'dicki123andrea@gmail.com'),
(12, 'ekobudi', '$2y$10$B/D71.R51wlt4JTonlMNleCNJiixc6hDIobYwQIBnZcOrIoyLoKxO', 'Eko Budhy Prasetya', 'Pt SURYAMAS CIPTA PERKASA', 'Jl. Jend gatot Subroto, Kav 43. Jaksel', '0852111155485', 'ekobudi@gmail.com'),
(13, 'elizabeth', '$2y$10$wkO3e2qGKQASruVTPJTSqu3YHR/I2p8hKVz9IyQiif5us3dNO4wq6', 'Elizabeth Kaya', 'Universitas Pattimura', 'Jl. Dr. Latumena', '088899444777', 'elizabeth@gmail.com'),
(14, 'tri', '$2y$10$aAqkWPlzO/j1GU5VY86etejE6eESg5OgnVQkuJlK9St6RDJoP9GXi', 'Tri Martono Arief', 'Balai Alian Nusantara', 'Kaling Rt. 001/ Rw. 001, Tasik Madu Karang Tangan Jawa Tengah', '081311377200', 'dickiandrea@gmail.com'),
(15, 'jojon', '$2y$10$mQD6mBYfKg5y6hMJ4hxl7.xLYT5ofBNvMX1qVX3ewCXfaBNXepelu', 'Jojon Suryono, SP', 'CV. Pahala Utama', 'Jl. Raya Demak - Kudus Km. 04 Ps. Jebon, Demak, Jawa Tengah', '9012', 'dickiandrea@gmail.com'),
(16, 'giantya', '$2y$10$vRcmAKVYdl7Kq8mZVQPvwupZe1AL1goopxMSoGNoE.031bD6vtVui', 'Giantya Isra Mariana', 'PT. Grean Life Biolcience', 'Jl. Veteran 2 DS. Teluk Pinang', '085716196900', 'dicki123andrea@gmail.com'),
(17, 'puji', '$2y$10$yt3MHLLm77AHlUZq8S7HVuVzefJZW0RWTQzpnQAQGFuroUBKx7s1G', 'Puji Lestari', 'BB-Biogen', 'Jl. Tentara Pelajar 3A Bogor 16111', '081296432444', 'dicki123andrea@gmail.com'),
(18, 'ridwan', '$2y$10$iP5HK2HWt0aB9MYIA4baauNyp66DGASqFy.SeQieJCGAHme9i/gfu', 'Ridwan', 'PT. Petrokopindo', 'Desa Randega Kec. Tanggul Arjun Kab. Sidoarjo', '081333575503', 'dicki123andrea@gmail.com'),
(19, 'sugeng', '$2y$10$da4FI.IpaQOUAxmGRfdvb.8w3p3p77nJH0HlAFVfH0NRU9jjz0zMO', 'Sugeng Rianto', 'CV. Bumi Sari Wangi', 'Jl. Caruban Ngawi', '00', 'dicki123andrea@gmail.com'),
(20, 'heri', '$2y$10$bnfwfH.8BmnnxnuCE3/Zn.aYOtIkW4MijhCcE5o74d0Uh3XcEPFBq', 'Heri Hersusatio', 'BB Biogen', 'Jl. Tentara Pelajar No. 3A Cimanggu Bogor ', '081389894886', 'heri@gmail.com'),
(21, 'peter', '$2y$10$41EGnDU1djitqLdqCI7.1.bfcMjmGcOTtjoysJbMNmfw1aPs.gpRy', 'Peter Reinhart Samuel Wamea', 'IPB', 'Jl. Perwira no.19 Dramaga', '081280445396', 'peterwamea@gmail.com'),
(22, 'sugengrianto', '$2y$10$kPmAb9h.ZH/3hK4W5ki2qeHP.k2ShoG5gjAHKoDBojrco2kqdoBJe', 'Sugeng Rianto', 'CV. Alam Karina', 'Jl. Carubon - Ngawi', '00', 'dicki123andrea@gmail.com'),
(23, 'nukman', '$2y$10$9U/epe.o.0JgKJR7w3nSpu1E3m9R9WxyEc1c36ie6mdVt.qmFYHjW', 'T Nukman Bustamah', 'PT RAFINA SEJAHTERA PRIMA', 'Jl Darmajaya No.34 Pejaten - Jakarta Selatan', '081288110089', 'nukman@gmail.com'),
(24, 'hanif', '$2y$10$/iOxnUZfsBpjSD49/03dRuIqMK1pYpfqIHwjHxdYfAnJ9WL9NKMla', 'Hanif A. Widjanarko', 'PT. Tri Megah ', 'Sudirman Park', '00', 'dicki123andrea@gmail.com'),
(25, 'nurjaya', '$2y$10$CkpDlHgLm0l0MEfLEbqP4eRkmdLpKE9OlMZ3r6a3k.217fX2U69Qu', 'Ir. Nurjaya MS', 'Perorangan', 'Jl. Tentara Pelajar no.12A', '08889944477', 'nurjaya@gmail.com'),
(26, 'febriani', '$2y$10$RyjUWZiw2gxVX0N6oNZ2UuzbRKkupfS9zMci0UAncVm.d3iBwJGoG', 'Febriani', 'PT Green Planet Indonesia', 'Jakarta', '08562346996', 'febriani@gmail.com'),
(27, 'ira', '$2y$10$X1Dfh/aP3dXr8yTmtoatDeY/AwRWPna4D4J7inqJA2rEGeIDLoH4u', 'Ira Salmirany Lubis', 'PT. Bakrie Sumatera Plantations', 'Bakrie Tower lt.18 Jakarta Selatan', '081366262621', 'ira.lubis@bakriesumatera.com'),
(28, 'jojons', '$2y$10$6X5xhHJfoDkZ0wkZz3QrLeS.A9a.L0jhkP8kyTU2raSvxNN/ngTnm', 'Jojon Suryono', 'PT. Sumberdaya Kendiasindo', 'Malang', '00', 'dicki123andrea@gmail.com'),
(29, 'luluk', '$2y$10$8XRHoeTmQHB3.OC/cc1g3uq/uf0OAEwgMlzEH2SErI5wu/NVH2A6m', 'Luluk Syatir Banu, SP., MP', 'Universitas Respati Indonesia', 'Jl Bambu Apus Raya No.3 Cipayung Jakarta', '087882713266', 'luluksyarhrbanu@gmail.com'),
(30, 'patruli', '$2y$10$qk4irATkmlqVLDips5gire4gRh3ZzHSUVKgpVsV4ykljGDjBI7/OG', 'Patruli Kusworo Setiawan', 'Indogunta Group', 'Komp. Duta Merlin Blok B617', '0216335421', 'patruli@gmail.com'),
(31, 'agrotama', '$2y$10$3pit1x/cItijGRdxX0bMr.pIGsH04IUmkRbQxtZWAhVH295X1o2M6', 'PT Agrotama Tunas Sarana', 'PT Agrotama Tunas Sarana', 'Jl. Dr Sutomo No.145 Medan', '081281268699', 'agrotama@gmail.com'),
(32, 'parulian', '$2y$10$pEhpwPVMq0Q1HkQpkKE4qOSux10MMeY0jP5u7HGRWNTB/QY.5ZjWi', 'Parulian Samsua', 'PT. Budi Stark and Sweetener TBK', 'Jl. H.R. Rasuna Said', '0218213883', 'parulian@gmail.com'),
(33, 'anis', '$2y$10$7O9h9VZGFmV0bjUJPrvjwOFXcFnNCxidOfgMKIgmLd5SZWKgRnW.W', 'Anis Khaerunnisah', 'PUSLITBANG HOLTIKULTURA', '-', '08582898860', 'aniskhaerunnisah88@gmail.com'),
(34, 'tia', '$2y$10$4uLOX2tTXDKdGD.HtRPjaO1BkCOEIqLc1qTEceu7PY7G7xUXvkk06', 'Tia Rostaman', 'PT. Langgung Asri Makmur', 'Jl. Karangmurni', '0888333777', 'tia@gmail.com'),
(35, 'sujinah', '$2y$10$zRTbBVScKH9sGqB06QoHPexsBGD68CRx8.XEunZygzUdu7DQEbZ1y', 'Sujinah', 'BB PADI', 'Jl Raya IX Sukamandi, Subang', '-', 'sujinah@gmail.com'),
(36, 'david', '$2y$10$PorFxQKYTAlp8zaSyofTEOA6szYBhF3qkzGCc9EvR2XVwZ1Z2MzzW', 'David', 'PT. Batara Elok Semesta Terpadu', 'Jl. Gama Q2 Kawasan Industri Maspion', '03199007990', 'david@gmail.com'),
(37, 'muhajir', '$2y$10$1H46EsmAobDt.vPhrkEG3eN0UWd3MV4pLtZLyRJWNWumFfp4nE14S', 'Muhajir', 'PT Subur Wangi Sentosa', 'Ds. Temenggungan RT 01/ RW 03, Koros, Magetan', '-', 'muhajir@gmail.com'),
(38, 'aan', '$2y$10$qpnXyajBKrtVoyBKWv9HdOxFvzhP0fUwOC.v4Euw1qdVrW3T0SHB2', 'Aan Hasanah', 'Universitas Sultan Ageng Tirtayasa', 'Jl. Raya Jakarta km4 Pakupatan', '083808490639', 'aan@gmail.com'),
(39, 'neneng', '$2y$10$3k48YnZhf5SVvnAD5pj/MenFTfzzLK/4Vq2Zgi.hT8EsZkZO5I6I6', 'Dr. Neneng L. Nurida', 'Balai Penelitian Tanah', 'Jl. Tentara Pelajar no12', '088333444', 'neneng@gmail.com'),
(40, 'jonhendri', '$2y$10$hS8GlxINqwn2usgOdvdtXeqtZskUz2xkcatoklXa2dqwuSR.cm4JW', 'Jonhendri K', 'BPTP Jambi', 'Jl. Samarinda', '08127490635', 'dicki123andrea@gmail.com'),
(41, 'andy', '$2y$10$NNLznTlYtlZUmzj.WCx05OL6gqciSW2mYq.bVz6Gozh8cY66Lbetu', 'Andy Wantoro', 'PT Nito Nur Utama', 'Kludoan Tg.Angin Sidoarjo Jatim', '082257006363', 'andy@gmail.com'),
(42, 'gemilang', '$2y$10$PKzvh2kMgEc91WIP..ySb.WwL0bFWBYyjeiXVhr40UlhtB6HvG9dC', 'PT. Gemilang Andalan Pratama', 'PT. Gemilang Andalan Pratama', 'Indonesia', '00', 'dicki123andrea@gmail.com'),
(43, 'tatang', '$2y$10$9VymdO9Kq3WpjYeydvrWw.rHiUMCTBPKYTYHZ2CF.f09kr7CPPS3W', 'Tatang Kurniawan', 'Dinas Lingkungan Hidup Kab. Cianjur', 'Jl. Raya Cianjur-Bandung km1', '081584065302', 'tatang@gmail.com'),
(44, 'aji', '$2y$10$rSwWNO6uww4YoHwax76u3.DOH.L3nEh.BGc3yp9Ydy0uGZaJnSS1G', 'Muhammad Aji Ramdani', 'UHAMKA', 'Pandeglang Banten', '089667898919', 'aji@gmail.com'),
(45, 'thomas', '$2y$10$Pev6aRNasuuQJScBTR2/begDWSbekuccBM/anPCIPYHmZobQ4X6ry', 'Thomas Tirtajaya', 'PT. Vini Tabadiri Investa', 'Jl. Agus Salim 62', '08129252738', 'dicki123andrea@gmail.com'),
(46, 'eko', '$2y$10$tAIRLUlmdA3q.cRMq4EE8OU.T0yqqot5pFCF65R9.gVmpXjG8gsiK', 'Eko Budhy Prasetya', 'PT. Bangun Jaya Alam Permai', 'Jl. Jendral Gatot Soebroto kav43', '08521055485', 'eko@gmail.com'),
(47, 'mila', '$2y$10$2tYuT.TIOhLH2k0Ub2auV.IdtJBfxogFR5q6tkKjfz4k9k/kncg2W', 'Mila Kartikasari', 'CV Neo Sinar Medan', 'Jl Pembangunan IV Medan 20238', '061-91268999', 'neo.sinar.medan@gmail.com'),
(48, 'sumberjaya', '$2y$10$.oG3uAC15huGiCjLOJQ0NuVlLMIRAxzgCrJxZnqmR4jJFbJviOZli', 'PT SUMBERJAYA KENDIMASINDO', 'PT SUMBERJAYA KENDIMASINDO', 'MALANG', '-', 'sumberjaya@gmail.com'),
(49, 'eko', '$2y$10$kSOGMslMryYYseAUyvmqIOhd48cQldhaUWxbuT/qm2FTFahCM5I/W', 'Eko Budhy Prasetya', 'PT Wana Sawit Subur Lestari', 'Jl. Jeno Gatot Soebroto Kav. 43 Jaksel', '085211155485', 'dicki123andrea@gmail.com'),
(50, 'budhi', '$2y$10$jfUIcX3iGj3BeKe8gMlzWeiYILG3SOT7goUrMriWWxIJuENain1EK', 'Prof. Dr. Budhi Indra Setiawan M,Agr', 'PT Palmina Utama', '-', '08569032034', 'budhi@gmail.com'),
(51, 'adjie', '$2y$10$zxPgZJBLCU/iQjdfNk4N8uw359UxtX.pNAdOA788S/6mVb.lXeslO', 'Adjie', 'Swasta', 'Jl. Kerja Bakti no.14', '082113145106', 'adjie@gmail.com'),
(52, 'adha', '$2y$10$3nfPAIKEGz.mbvIMlxHzaeWMy8RJyHHwAORt6FMN0ajkqH2fBj9WS', 'Adha Fatmah Siregar', 'Balai Penelitian Tanah', 'Bogor', '-', 'adha@gmaiil.com'),
(53, 'meti', '$2y$10$gi8mcinKcnUE9Nw03IPpTOGSwoOTnKlIhjZdTVdHaMj6nmzKSHjIW', 'Meti Yulianti', 'Pusat Penelitian Limnologi - LIPI', 'Cibinong', '085719268811', 'meti@kimnologi.lipi.go.id'),
(54, 'susilo', '$2y$10$jXI2fxIAXLTBFIxa4a1mUuD2X2.4/2RwGQq7r2bWjCwVZRlR31vyO', 'Susilo Raharjo', 'BBP2TP Jakarta', 'Jl. Raya Setu no.70', '081387777147', 'susilo@gmail.com'),
(55, 'dewi', '$2y$10$xq.1x74AxyZ6dyHR5lHtcOe6FNlRGnBLUolRk.VoL1PuIxdylaqQ6', 'CV Dewi Sri Rahma', 'CV Dewi Sri Rahma', 'Pasaruan - Jawa Timur', '-', 'dewisrirahma@gmail.com'),
(56, 'bayu', '$2y$10$pUIrtTosHIYx4nyl7SPTV.ZSNNbiMipzHNQMmbDnSTSWr6idnBLJC', 'BAYU APRIYANTO', 'PT HUMAT AGRO LESTARI', 'Jl Pulo Lentut No 3 Pulogadung Jakarta Timur', '08126242599', 'bayuaprianto@gmail.com'),
(57, 'salawati', '$2y$10$f1zIsyPn62wCBSwv1qr7TOgggENs85om0xg6neunu2UAy8NCrR4ri', 'Salawati', 'Universitas Padjajaran', 'Bandung', '08883377744', 'salawati@gmail.com'),
(58, 'poldababel', '$2y$10$nvyZXFSvF2fjJ1tuTYX2uOQ4X6OArXDHLwrBh2qdl7PEcJI8XbgAG', 'Subdit 1 Reskrimsus Polda Kep. Babel', 'PT. Globus Artha Internusa', 'Jl. Sungai Selam km.4', '08885577733', 'poldababel@gmail.com'),
(59, 'muhajir2', '$2y$10$b3uizGwKccVnQ/RkL/P7hO850oSKuwWgnVkrAlBWdOhSGzzMyebzK', 'Muhajir', 'PT Bumi Sumur Sentosa', 'Jl Ngawi - Madiun KM 08. Ngawi', '-', 'muhajir2@gmail.com'),
(60, 'azwar', '$2y$10$q1C05YSpeu4PgPR0KClzfOGOe.nIwh1J5w.gVZuXJpFzMA.iHY6M6', 'Azwar', 'ICBB', 'Jl. Cilubang Nagrak no.62', '02518423003', 'azwar@gmail.com'),
(61, 'kurniawan', '$2y$10$xntJb6dVuHQCybUFXlB/mObNMKWo9H4FyE8CauYOxig.9zzNvOhzW', 'Kurniawan', 'CV SCORLETS / Inspektorat Jenderal Kementerian Per', 'Jl Harsono RM', '-', 'kurniawan@gmail.com'),
(62, 'detri', '$2y$10$1n8txsU/FllGD.vldZC36e3DyPLsPNwbsN3ZvVCwClU96opU58Bpe', 'Detri', 'CV. Detri', 'Medan', '088227733', 'detri@gmail.com'),
(63, 'radi', '$2y$10$Gzbr43iI8TomNpJQxK5uk.BFmon3lOz7xDCOeIxTWV4..0OSbgSWK', 'Radi Hidayat Agung', 'PUSLITBANG BIOLOGI - LIPI', 'Komplek GSC Jl. Raya Jakarta - Bogor KM 46 Cibinong', '085691659750', 'radiagung@gmail.com'),
(64, 'hardi', '$2y$10$p4IsF53xITpJ8FTAenqJj.cb7/keI3hrn5CldLTgRQ.5J0dOkYytG', 'Hardi Subani', 'CV. Hutomo Putra', 'Kec. Gondang', '0887733444', 'hardi@gmail.com'),
(65, 'jojons', '$2y$10$/.VyaC0qukLCMxpq3wJBCuB34h/tZgkaMzB2XxyvV9ARcnINacl/W', 'Jojon S', 'CV Pattala Utama', '-', '-', 'jojons@gmail.com'),
(66, 'mustik', '$2y$10$MLuOiruUkrkm3NzU0/A0MuGYGXsd8ZG/pAvlBQy4vWRq.HAQjfe.u', 'PT Mustika Sembuluh', 'SWASTA', 'Jl Jend. Sudirman KM 2,3 Sampit 74322 Kalimantan tengah', '0531-34802', 'mustikasembuluh@gmail.com'),
(67, 'mustika', '$2y$10$7H3bi5g.l.DybUr2iWTRbuMeJk2v2.aITuQw22P.DgCSaMbfIyjIy', 'PT Mustika Sembuluh', 'SWASTA', 'Jln Jend Sudirman KM 2.3 Sampit 74322 Kalimantan Tengah', '0531-34802', 'mustikasembuluh@gmail.com'),
(68, 'yuwaidi', '$2y$10$A2hUy8svtWC03hgM6jcyO.eJcG2Q9dCI8mMV29496UW49k48osPHq', 'A. Yuwaidi', 'CV Agro Tani Makmur', 'Bandung', '0818749000', 'salwasalsabilla@yahoo.co.id'),
(69, 'made', '$2y$10$YysfKNjK92rQLWcHP.meNuveYo0oEN0dssxzqLpSPEA3xc30ErHsW', 'Made Suarnawan', 'Politeknik Kelapa Sawit Citra Widya Edukasi', 'Cibitung', '082348097066', 'made@gmail.com'),
(70, 'yakin', '$2y$10$M0v/b8ey69.UuQJj8dYtBO2QE3hXy98R3SrDCYj8NciC0BL2Ax7LO', 'PT Yakin Raih Sukses', 'PT Yakin Raih Sukses', 'Ruko Klampus Square Blok C-20 Surabaya', '082232299992', 'ysr.direktur@yahoo.com'),
(71, 'annas', '$2y$10$FJSp93KjI06y3iXwkdmRZOB3TFTvlsAM2ob2hLxvxphgBqaIlra3i', 'Ir. Annas Zubair, M.Si', 'BPTP Gorontalo', 'Gorontalo', '0887733444', 'annas@gmail.com'),
(72, 'sriumi', '$2y$10$VkV6qACiw24U7xZmmPy3huXPN33WMuENxu6Pnj4RIktbQZ2lYjpOK', 'Dr. Ir. Sri Umi', 'Universitas Tribhuwana', 'Jl. Telaga Warna', '081334811898', 'sri@gmail.com'),
(73, 'yuniati', '$2y$10$w.Q8b67LoJR3chsVqcQY7eTiRuGMaGk1Pb2aRKtxGgZE5PbOafchG', 'yuniati', 'BALITBANGTAN - BOGOR', 'JL. Cimanggu Kecil No 5A Bogor', '081288891341', 'yuniati@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`kode_admin`),
  ADD UNIQUE KEY `kode_akses` (`kode_akses`);

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`kode_admin`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kode_user` (`kode_user`);

--
-- Indexes for table `chatadmin`
--
ALTER TABLE `chatadmin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `download`
--
ALTER TABLE `download`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hak_akses`
--
ALTER TABLE `hak_akses`
  ADD PRIMARY KEY (`kode_akses`);

--
-- Indexes for table `jenis_analisis`
--
ALTER TABLE `jenis_analisis`
  ADD PRIMARY KEY (`kode_analisis`),
  ADD KEY `kode_sp` (`kode_sp`);

--
-- Indexes for table `kaji_ulang`
--
ALTER TABLE `kaji_ulang`
  ADD PRIMARY KEY (`kode_order`),
  ADD KEY `kode_order` (`kode_order`);

--
-- Indexes for table `pertanyaan`
--
ALTER TABLE `pertanyaan`
  ADD PRIMARY KEY (`kode_pertanyaan`),
  ADD KEY `kode_analisis` (`kode_analisis`);

--
-- Indexes for table `sericontoh`
--
ALTER TABLE `sericontoh`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`no`),
  ADD KEY `kode_order` (`id_order`);

--
-- Indexes for table `surat_permohonan`
--
ALTER TABLE `surat_permohonan`
  ADD PRIMARY KEY (`kode_sp`);

--
-- Indexes for table `tborder`
--
ALTER TABLE `tborder`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`kode_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `kode_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `administrator`
--
ALTER TABLE `administrator`
  MODIFY `kode_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=248;
--
-- AUTO_INCREMENT for table `chatadmin`
--
ALTER TABLE `chatadmin`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;
--
-- AUTO_INCREMENT for table `download`
--
ALTER TABLE `download`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `sericontoh`
--
ALTER TABLE `sericontoh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `no` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `kode_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`kode_akses`) REFERENCES `hak_akses` (`kode_akses`);

--
-- Constraints for table `jenis_analisis`
--
ALTER TABLE `jenis_analisis`
  ADD CONSTRAINT `jenis_analisis_ibfk_1` FOREIGN KEY (`kode_sp`) REFERENCES `surat_permohonan` (`kode_sp`);

--
-- Constraints for table `pertanyaan`
--
ALTER TABLE `pertanyaan`
  ADD CONSTRAINT `pertanyaan_ibfk_1` FOREIGN KEY (`kode_analisis`) REFERENCES `jenis_analisis` (`kode_analisis`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
