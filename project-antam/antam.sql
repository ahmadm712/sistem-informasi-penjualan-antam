-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Feb 2021 pada 12.12
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `antam`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(255) NOT NULL,
  `tanggal` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `tanggal`, `judul`, `isi`, `gambar`) VALUES
(1, 'Saturday, 23-Jan-2021', 'UBPP LM ANTAM Raih Penghargaan The Most Promising Company in Entrepreneural SOEs', 'JAKARTA - PT Aneka Tambang Tbk (ANTM) melalui Unit Bisnis Pengolahan dan Pemurnian Logam Mulia (UBPP LM), meraih penghargaan The Most Promising Company in Entrepreneural SOE’s dalam ajang BUMN Marketeers Award 2019 untuk kategori Anak Perusahaan. Dalam penghargaan ini, ANTAM LM mendapat predikat Gold Winner sebagai penghargaan tertinggi di kategori tersebut. Penghargaan itu diserahkan pada 24 April 2019 di Jakarta. Penghargaan yang diraih oleh ANTAM LM ini terkait dengan program edukasi emas batangan dengan tajuk Gold Reinvented sebagai salah satu bentuk inovasi produk andalan ANTAM LM.\r\n\r\n“Penghargaan ini merupakan bentuk kerja keras semua jajaran dan stakeholder di ANTAM, terutama ANTAM LM. Semoga dengan penghargaan dikuartal pertama ini, kami akan terus tumbuh untuk berinovasi dan memberikan produk terbaik bagi masyarakat.” terang Direktur Niaga ANTAM, Apriliandi H. Setia.\r\n\r\nApriliandi juga menyampaikan bahwa saat ini, Antam LM sebagai salah satu unit bisnis perusahaan memiliki potensi untuk terus tumbuh, baik dalam bisnis ritel maupun business to business. Karena itu, penghargaan The Most Promising Company in Entrepreneural SOE’s menjadi salah satu motivasi bagi ANTAM LM untuk lebih menghasilkan produk berkualitas dengan memaksimalkan nilai tambah melalui praktik-praktik industri terbaik.\r\n\r\nSementara itu, General Manager UBPP Logam Mulia, Muhammad Abi Anwar menyampaikan bahwa saat ini, Antam LM selaku unit bisnis terus berinovasi dengan mengeluarkan produk-produk baru, terutama sebagai pilihan masyarakat dalam berinvestasi di instrumen emas batangan. Beberapa diantaranya adalah dengan merilis produk gift series yang menyasar kalangan milenial dan platform e-commerce logammulia.com.\r\n\r\n“Dengan adanya beberapa inovasi produk yang terus dikembangkan, kami yakin mampu terus tumbuh dan menghadapi persaingan di era industri 4.0 saat ini.” Kata Abi.\r\n\r\nBUMN Marketeers Award 2019 merupakan acara penghargaan yang digelar ke-7 kalinya. Acara ini memberikan apresiasi bagi para pemasar atau marketeers di kalangan BUMN maupun Anak perusahaan BUMN, baik secara korporasi maupun individual.  Adapun kriteria penilaian BUMN Marketeers Award 2019 untuk kategori The Most Promising Company in Entrepreneural SOE’s adalah kinerja dalam efektivitas dan ketepatan penerapan kreativitas, inovasi, entrepreneurship dan leadership yang dilakukan oleh perusahaan terhadap konsumen di pasar nasional maupun internasional. Proses pemilihan dilakukan oleh Panel Juri yang terdiri dari tim kerjasama antara MarkPlus Inc, Forum Humas BUMN serta tokoh pemasaran yang tergabung dalam Indonesia Marketing Association dan The Jakarta CMO Club.\r\n\r\nSementara itu, ANTAM LM adalah salah satu unit bisnis dari PT ANTAM Tbk yang bergerak di bidang jasa pengolahan dan pemurnian logam mulia seperti emas, perak palladium dan platina. ANTAM LM berkembang menjadi satu-satunya refinery di Indonesia yang masuk dalam Good Delivery List LBMA (London Bullion Market Association) dengan produk emas batangan sebagai top brand di Indonesia yang memberikan jaminan keaslian dan kemurnian emas 99,99%. Produk lainnya meliputi dinar, dirham, customized product, platinum labware dan lainnya.', 'artikel2.png'),
(2, 'Saturday, 23-Jan-2021', 'Berkenalan dengan Empat Motif dalam Emas Batik Complete Edition II', 'Batik sebagai salah satu warisan budaya Indonesia telah mendapatkan pengakuan dunia melalui penetapan dari Badan PBB untuk Pendidikan, Keilmuan, dan Kebudayaan atau UNESCO. Dalam pengakuan yang disampaikan oleh UNESCO pada 2 Oktober 2009, batik dijadikan sebagai salah satu warisan Kemanusiaan untuk Budaya Lisan dan Nonbendawi (Masterpieces of the Oral and the Intangible Heritage of Humanity). Sebagai salah satu bentuk pelestarian batik, PT Antam Tbk., melalui UBPP Logam Mulia pada tahun 2018 ini mengenalkan kembali produk Emas Seri Batik Indonesia. \r\n\r\nEmas Seri Batik Indonesia yang diproduksi oleh UBPP Logam Mulia sendiri merupakan seri kedua menyusul seri batik sebelumnya yang mendapat respon positif dari publik di Indonesia. Dalam emas seri batik Indonesia kali ini, UBPP Logam Mulia mengenalkan produk Emas Batik Seri II dalam tajuk Complete Edition yang terdiri dari empat motif:\r\n1. Batik Truntum\r\nDiciptakan oleh Permaisuri Sunan Paku Buwana III yang bernama Kanjeng Ratu Kencana, batik truntum memiliki makna mendalam tentang kesetiaan, cinta yang tulus dan abadi. Kata ‘truntum’ yang dijadikan nama motif batik ini berasal dari istilah “tumaruntum” yang bermakna semakin lama semakin terasa subur berkembang. \r\n\r\nMenurut tradisi klasik Jawa, kain batik bermotif truntum biasa dipakai oleh orang tua pengantin pada saat hari pernikahan. Batik ini dikenakan sebagai harapan agar cinta kasih yang tumaruntum akan menghinggapi kedua mempelai yang sedang menikah. Selain itu, batik truntum juga dimaknai sebagai kewajiban untuk ‘menuntun’ bagi orang tua kepada pasangan yang sedang memasuki pernikahan sebagai tahapan hidup yang baru. \r\n\r\n2. Batik Wahyu Tumurun\r\nBerasal dari Daerah Istimewa Yogyakarta, motif batik Wahyu Tumurun pada awalnya dikenakan sebagai busana peribadatan sejak era Panembahan Senopati di Kotagede. Motif batik ini kemudian dikembangkan kembali oleh Sultan Agung. Dengan motif yag identik pada pola mahkota terbang sebagai motif utama, motif batik Wahyu Tumurun dimaknai sebagai simbol kemuliaan. \r\n\r\nMotif batik Wahyu Tumurun memiliki filosofi sebagai gambaran harapan agar pemakainya mendapat petunjuk, berkah, rahmat, dan anugerah yang berlimpah dari Tuhan Yang Maha Kuasa. Selain itu, motif batik ini juga memiliki filosofi seagai harapan untuk mencapai keberhasilan dalam meraih cita-cita, kedudukan maupun pangkat. \r\n\r\n3. Batik Sekar Jagad\r\nPada awalnya, motif batik Sekar Jagad merupakan motif yang populer di daerah Yogyakarta dan Solo (Surakarta). Motif batik ini merupakan simbol kecantikan dan keindahan, sehingga siapa saja yang melihat akan terpesona. Secara harfiah, motif batik Sekar Jagad berasal dari bahasa Jawa klasik yaitu “kar jagad” yang merupakan gabungan dari dua kata, “kar” berarti peta, dan “jagad” berarti dunia, sehingga motif ini menggambarkan keberagaman di seluruh dunia.  Dalam versi lain, sekar jagad berasal dari kata sekar yang berarti bunga dan jagad yang berarti dunia. Motif ini menggambarkan bahwa batik sekar jagad memiliki filosofis tentang keindahan dan keanekaragaman. \r\n\r\n4. Batik Purbo Negoro\r\nSecara harfiah, Purbo bermakna memelihara, sementara Nogoro bermakna negara. Pada jaman kerajaan, motif batik purbo negoro banyak digunakan oleh raja dan pemimpin. Secara filosofis, motif batik purbonegoro bermakna bahwa seorang pemimpin wajib memelihara negara sebaik-baiknya untuk kemakmuran dan kesejahteraan rakyat, termasuk juga memelihara kelestarian lingkungan.', 'artikel3.png'),
(3, 'Friday, 05-Feb-2021', 'Cara Mengetahui Mana Emas Asli dan Palsu Sebelum Investasi Emas', 'Mungkin saja Anda juga beranggapan sama dengan orang lain di luar sana, bahwa sampai saat ini emas masih menjadi salah satu aset yang paling berharga, dan kadang kalanya menjadi patokan untuk menilai. Sebab sifatnya yang berharga tersebut, sehingga tidak sedikit orang pula yang menggunakan emas sebagai hadiah, termasuk menjadi mahar untuk sebuah pernikahan.\r\n\r\nSementara itu, untuk urusan investasi emas dalam nilai yang cukup besar sekali, masih ada rasa khawatir di benak masyarakat terhadap keaslian emas yang digunakan. Apalagi bagi yang masih pemula, tentu akan ada keraguan jika emas yang mereka beli tersebut adalah emas palsu sehingga kurang percaya diri untuk memulai berinvestasi. Namun tenang saja, sebab jika Anda memang menginginkan mendapatkan emas asli dan lebih terjamin kemurniannya, maka Anda bisa melakukan pembelian melalui situs logammulia.com.\r\n\r\nSebetulnya, susah–susah gampang untuk bisa membedakan antara emas yang asli dengan palsu. Apalagi jika Anda memang masih belum pernah memiliki atau bahkan membeli emas sebelumnya. Bisa–bisa semua yang berwana kuning keemasan dan mengkilap dianggap sebagai emas asli. Namun jika Anda membelinya melalui situs logammulia.com, maka Anda tidak perlu khawatirkan masalah keaslian emas yang hendak Anda beli. Sebab, logammulia.com menjamin keaslian dan kemurnian dari semua produk emas yang mereka tawarkan.\r\n\r\nTetapi demikian, untuk lebih meyakinkan Anda melalui artikel ini akan kami bagikan cara mengetahui maa emas asli dan palsu sebelum akhirnya Anda memutuskan untuk berinvestasi emas. Mari simak ulasan selengkapnya di bawah ini.\r\n\r\nCara Mengetahui Mana Emas Asli dan Palsu Sebelum Investasi Emas\r\nPerhatikan dengan baik bagian fisik dari emas tersebut\r\nPerbedaan antara emas asli dan emas palsu bisa dilihat dari fisiknya. Anda bisa lihat tanda–tanda khusus yang biasanya ada di emas murni atau emas batangan. Misalnya saja ada cap yang menandakan kadar emas tersebut. Umumnya menggunakan satuan fineness, tetapi lazimnya dikenal dengan menggunakan satuan karat dalam angka mulai dari 10K, 18K, dan 24K.\r\n\r\nJika digosok apa warnanya berubah?\r\nSilakan Anda coba pegang dengan baik emas yang Anda beli tersebut, kemudian coba gosok permukaan emasnya menggunakan telapak tangan atau telunjuk Anda. Jika setelah digosok warnanya jadi pudar dan tidak seragam, bisa dipastikan itu adalah emas palsu, begitu pun sebaliknya.\r\n\r\nUji keaslian emas yang dibeli dengan digigit\r\nEmas adalah logam mulia lunak, sehingga mudah sekali dibentuk. Jika si penjual tawarkan emas dengan kadar tinggi, maka Anda bisa cek lunak atau tidaknya emas tersebut dengan mudah. Karena semakin tingginya kadar karatnya, maka emas akan jadi semakin lunak.\r\n\r\nCara mengetahui asli dan palsunya emas tersebut paling mudah adalah dengan menggigit bagian permukaan emas. Jika setelah digigit ada bekas gigitan yang tertinggal, itu artinya emas asli. Walaupun demikian, sangat disarankan sekali agar Anda tidak buru–buru membelinya. Karena bisa jadi material yang menyusun emas palsu itu adalah timah, karena logam timah juga termasuk golongan logam lunak.\r\n\r\nMencoba mendekatkan dengan magnet\r\nEmas pada dasarnya termasuk logam yang sifatnya non magnetis. Itu berarti jika didekatkan dengan magnet, emas tidak akan tertarik atau pun menempel. Harus diingat juga, bahwa pengujian satu ini tak berarti emas yang Anda miliki terjamin keasliannya, sebab masih ada banyak sekali logam lainnya yang memiliki sifat non magnetis.\r\n\r\nMenggoreskan di keramik atau kertas\r\nCara lain mengetahui mana emas asli dan palsu adalah dengan menggunakan keramik atau keras. Jika emas digoreskan ke keramik atau kertas tidak menyisahkan bekas, itu artinya emas tersebut adalah asli. Tak ada goresan yang tertinggal bisa jadi petunjuk bahwasannya emas tersebut asli. Tetapi harus Anda perhatikan pula cara yang digunakan ini beresiko merusak emas.\r\n\r\nMeneteskan asam\r\nTips mengetahui emas asli dan palsu yang berikut ini biasanya digunakan oleh para pedagang emas dan toko perhiasan. Jika Anda ingin melakukannya sendiri, maka diperlukan kehati – hatian, sebab cairan asam nitrat adalah cairan yang cukup berbahaya sekali bagi tubuh dan pernafasan. Cara yang digunakan cukup mudah sekali, yakni dengan meneteskan asam nitrat ke emas lalu amati reaksinya.\r\n\r\nJika berubah jadi warna hijau, itu artinya logam ini adalah besi yang diberi lapisan emas, tetapi jika berubah jadi warna kuning, berarti ini merupakan kuningan yang beri lapisan emas. Sementara itu jika berubah jadi warna susu, maka logam tersebut adalah perak yang diberi lapisan emas. Tetapi jika tidak berubah warna, logam tersebut merupakan emas asli.\r\n\r\nMengecek ke Butik LM Terdekat\r\nUntuk yang terakhir ini cocok banget untuk Anda yang tidak mau ribet dengan cara–cara di atas. Silakan bawa emas yang sudah Anda beli ke butik Antam LM terdekat. Petugas di butik Antam LM terdekat nanti akan menentukan keaslian dan kadar emas yang terkandung di dalamnya. Petugas butik Antam LM terdekat biasanya sudah terbiasa kenali emas asli dan palsu, jadi apa yang ia bilang biasanya selalu tepat.\r\n\r\nGunakan Aplikasi CertiEye\r\nSelain beberapa metode yang sudah disampaikan, sebenarnya ada satu metode lagi untuk emas batangan Antam dengan kemasan terbaru. Anda bisa menggunakan aplikasi CertiEye di smartphone untuk mengetahui apakah emas batangan yang dimiliki merupakan emas asli atau palsu. Untuk mengetahui lebih lengkap tentang CertiEye, silakan cek artikel berikut ini.\r\n\r\nDemikian informasi yang bisa kami bagikan tentang cara mengetahui mana emas asli dan palsu sebelum investasi emas. Semoga bermanfaat dan menginspirasi.', 'artikel4.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bahan_baku`
--

CREATE TABLE `bahan_baku` (
  `id_bahan` varchar(255) NOT NULL,
  `nama_bahan` varchar(255) NOT NULL,
  `stock` int(255) NOT NULL,
  `satuan` varchar(255) NOT NULL,
  `id_vendor` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `bahan_baku`
--

INSERT INTO `bahan_baku` (`id_bahan`, `nama_bahan`, `stock`, `satuan`, `id_vendor`) VALUES
('BHN0001', 'NaCN', 8000, 'Lt', 'VEN0001'),
('BHN0002', 'KCN', 0, 'Lt', 'VEN0003'),
('BHN0003', 'Emas', 800000, 'Kg', 'VEN0005'),
('BHN0004', 'Perak', 450000, 'Kg', 'VEN0005'),
('BHN0005', 'Ca(CN)2', 6000, 'Lt', 'VEN0001');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bahan_produksi`
--

CREATE TABLE `bahan_produksi` (
  `id` int(255) NOT NULL,
  `kode_produksi` varchar(255) NOT NULL,
  `id_bahan` varchar(255) NOT NULL,
  `jumlah` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tlpn` varchar(255) NOT NULL,
  `pesan` text NOT NULL,
  `count` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `contact_us`
--

INSERT INTO `contact_us` (`id`, `nama`, `email`, `tlpn`, `pesan`, `count`) VALUES
(1, '1', 'con@gmail.co', '2', '3', 1),
(2, 'Nada', 'nadaikasari@gmail.com', '082127728308', 'Hello, Saya memiliki pertanyaan mengenai produk emas, jika saya beli apakah bisa dijual lagi?', 0),
(4, 'Aidan', 'aidang@gmail.com', '08361672213', 'Saya ingin membeli emas tapi tidak tahu yang mana', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `faktur`
--

CREATE TABLE `faktur` (
  `no_faktur` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `nomor_payment` varchar(255) NOT NULL,
  `nomor_reference` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `faktur`
--

INSERT INTO `faktur` (`no_faktur`, `tanggal`, `nomor_payment`, `nomor_reference`, `status`) VALUES
('FTR0001', '2021-02-02', 'BMD0003', '020221REF0001', 'Selesai'),
('FTR0002', '2021-02-04', 'BMD0004', '030221REF0002', ''),
('FTR0003', '2021-02-05', 'BMD0005', '050221REF0003', 'Selesai');

-- --------------------------------------------------------

--
-- Struktur dari tabel `karyawan`
--

CREATE TABLE `karyawan` (
  `id_karyawan` varchar(255) NOT NULL,
  `nama_karyawan` varchar(255) NOT NULL,
  `no_tlpn` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `karyawan`
--

INSERT INTO `karyawan` (`id_karyawan`, `nama_karyawan`, `no_tlpn`, `username`, `password`, `jabatan`) VALUES
('KWN0001', 'Nada Ika Sari', '082127728308', 'nada', 'a77b4f006a4994d245a12247b8e4082c', 'Manager'),
('KWN0002', 'Rere', '082986354736', 'rere', 'bd134207f74532a8b094676c4a2ca9ed', 'Gudang'),
('KWN0003', 'Budiman', '083245675432', 'budi', '00dfc53ee86af02e742515cdcf075ed3', 'Admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `konsumen`
--

CREATE TABLE `konsumen` (
  `id_konsumen` varchar(255) NOT NULL,
  `nama_konsumen` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `no_ktp` varchar(255) NOT NULL,
  `no_npwp` varchar(255) NOT NULL,
  `no_tlpn` varchar(255) NOT NULL,
  `provinsi` varchar(255) NOT NULL,
  `kab/kota` varchar(255) NOT NULL,
  `kecamatan` varchar(255) NOT NULL,
  `desa/nama_jl` varchar(255) NOT NULL,
  `rincian` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `konsumen`
--

INSERT INTO `konsumen` (`id_konsumen`, `nama_konsumen`, `username`, `password`, `no_ktp`, `no_npwp`, `no_tlpn`, `provinsi`, `kab/kota`, `kecamatan`, `desa/nama_jl`, `rincian`) VALUES
('CS0001', 'Nada Ika Sari', 'Nada', '47aa0781e6dd48f4a0fe39e5bf4ba8f3', '32043353000003', '1728334652736454', '082127728308', 'Jawa Barat', 'Bandung', 'Majalaya', 'Padaulun', 'Kampung Babakan cihaneut RT.02 Rw.07'),
('CS0002', 'Artiyana Angeliza', 'a', '0cc175b9c0f1b6a831c399e269772661', '3204337362537', '', '083576542345', 'Jawa Barat', 'Bandung', 'Majalengka', 'Majapahit', 'Kampung Anggrek no 32 '),
('CS0003', 'Aidan Gallagher', 'aidan', '3f75f31f946bc04d8f781fb155d2b17e', '3203265273652736', '2736534826472834', '083627384621', 'Jawa Barat', 'Bandung', 'Margaasih', 'Melati', 'Jl. Mekarsari No.2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `no_payment` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `no_reference` varchar(255) NOT NULL,
  `ongkir` int(255) NOT NULL,
  `bayar` int(255) NOT NULL,
  `bukti_pembayaran` varchar(255) NOT NULL,
  `konfirmasi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pembayaran`
--

INSERT INTO `pembayaran` (`no_payment`, `tanggal`, `no_reference`, `ongkir`, `bayar`, `bukti_pembayaran`, `konfirmasi`) VALUES
('BMD0001', '2021-02-02', '010221REF0001', 50000, 53015670, '850b720b-4e33-408d-9db2-84f49905a055.jpg', 'NO'),
('BMD0002', '2021-02-02', '010221REF0001', 50000, 3771192, 'OOP Flowchart Antam - Page 1.png', 'YES'),
('BMD0003', '2021-02-02', '020221REF0001', 50000, 900683400, 'antam 6.jpg', 'YES'),
('BMD0004', '2021-02-03', '030221REF0002', 50000, 5817692, 'f799a51e-5bba-446d-bf87-67a4ae88aab2.jpg', 'YES'),
('BMD0005', '2021-02-05', '050221REF0003', 50000, 68361136, 'f799a51e-5bba-446d-bf87-67a4ae88aab2.jpg', 'YES');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id` int(255) NOT NULL,
  `reference_no` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `id_pembeli` varchar(255) NOT NULL,
  `id_produk` varchar(255) NOT NULL,
  `jumlah` int(255) NOT NULL,
  `ppn` int(255) NOT NULL,
  `harga_jual_pertama` int(255) NOT NULL,
  `stat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pemesanan`
--

INSERT INTO `pemesanan` (`id`, `reference_no`, `tanggal`, `id_pembeli`, `id_produk`, `jumlah`, `ppn`, `harga_jual_pertama`, `stat`) VALUES
(21, '010221REF0001', '2021-02-01', 'CS0001', 'BRG0004', 1, 12335, 2741000, 'Menunggu Persetujuan'),
(23, '010221REF0001', '2021-02-01', 'CS0001', 'BRG0003', 1, 8298, 1844000, 'Diproses'),
(24, '020221REF0001', '2021-02-01', 'CS0001', 'BRG0003', 1, 8298, 1844000, 'Selesai'),
(25, '020221REF0001', '2021-02-01', 'CS0001', 'BRG0012', 1, 4016700, 892600000, 'Selesai'),
(26, '030221REF0002', '2021-02-03', 'CS0002', 'BRG0003', 1, 16596, 1844000, 'Diproses'),
(27, '030221REF0002', '2021-02-03', 'CS0002', 'BRG0013', 1, 7750, 3875000, 'Diproses'),
(28, '050221REF0003', '2021-02-05', 'CS0003', 'BRG0006', 2, 40568, 9015000, 'Selesai'),
(29, '050221REF0003', '2021-02-05', 'CS0003', 'BRG0015', 1, 100000, 50000000, 'Selesai');

--
-- Trigger `pemesanan`
--
DELIMITER $$
CREATE TRIGGER `penambahan` AFTER DELETE ON `pemesanan` FOR EACH ROW BEGIN
UPDATE produk set stock = stock + old.jumlah WHERE id_produk = old.id_produk;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `penambahan 2` AFTER UPDATE ON `pemesanan` FOR EACH ROW BEGIN
UPDATE produk set stock = stock + old.jumlah WHERE id_produk = old.id_produk;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `pengurangan` AFTER INSERT ON `pemesanan` FOR EACH ROW BEGIN
UPDATE produk set stock = stock - new.jumlah WHERE id_produk = new.id_produk;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `pengurangan 2` AFTER UPDATE ON `pemesanan` FOR EACH ROW BEGIN
UPDATE produk set stock = stock - new.jumlah WHERE id_produk = new.id_produk;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengeluaran`
--

CREATE TABLE `pengeluaran` (
  `id` int(255) NOT NULL,
  `tanggal` date NOT NULL,
  `pembelian` varchar(255) NOT NULL,
  `jumlah` varchar(255) NOT NULL,
  `harga_total` int(255) NOT NULL,
  `id_vendor` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengeluaran`
--

INSERT INTO `pengeluaran` (`id`, `tanggal`, `pembelian`, `jumlah`, `harga_total`, `id_vendor`, `keterangan`) VALUES
(1, '2020-12-09', 'Bahan Kimia 	Ca(CN)2', '6000 Lt', 5000000, 'VEN0001', '    '),
(4, '2021-01-14', 'bahan kimia NaCN', '8000 Lt', 3000000, 'VEN0001', ''),
(5, '2021-02-03', 'Pembayaran listrik', '1', 2500000, 'VEN0006', 'pembayaran listrik bulan februari 2021');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_produk` varchar(255) NOT NULL,
  `kode_produksi` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `stock` int(255) NOT NULL,
  `berat_kg` varchar(255) NOT NULL,
  `harga_awal` int(255) NOT NULL,
  `harga_jual` int(255) NOT NULL,
  `kategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `kode_produksi`, `gambar`, `nama_produk`, `stock`, `berat_kg`, `harga_awal`, `harga_jual`, `kategori`) VALUES
('BRG0001', 'PRD0001', 'emas0,5.png', 'Emas Batangan - 0.5 gr', 504, '0,0005', 300000, 526000, 'Emas'),
('BRG0002', 'PRD0001', 'emas1.png', 'Emas Batangan - 1 gr', 300, '0,001', 600000, 952000, 'Emas'),
('BRG0003', 'PRD0001', 'emas2.png', 'Emas Batangan - 2 gr', 94, '0,002', 1200000, 1844000, 'Emas'),
('BRG0004', 'PRD0001', 'emas3.png', 'Emas Batangan - 3 gr', 101, '0,003', 1800000, 2741000, 'Emas'),
('BRG0005', 'PRD0001', 'emas5.png', 'Emas Batangan - 5 gr', 400, '0,005', 3000000, 4535000, 'Emas'),
('BRG0006', 'PRD0001', 'emas10.png', 'Emas Batangan - 10 gr', 118, '0,01', 6000000, 9015000, 'Emas'),
('BRG0007', 'PRD0001', 'emas25.png', 'Emas Batangan - 25 gr', 500, '0,025', 15000000, 22412000, 'Emas'),
('BRG0008', 'PRD0001', 'emas50.png', 'Emas Batangan - 50 gr', 400, '0,05', 30000000, 44745000, 'Emas'),
('BRG0009', 'PRD0001', 'emas100.png', 'Emas Batangan - 100 gr', 600, '0,1', 60000000, 89412000, 'Emas'),
('BRG0010', 'PRD0001', 'emas250.png', 'Emas Batangan - 250 gr', 80, '0,25', 150000000, 223265000, 'Emas'),
('BRG0011', 'PRD0001', 'emas500.png', 'Emas Batangan - 500 gr', 500, '0,5', 300000000, 446320000, 'Emas'),
('BRG0012', 'PRD0001', 'emas1000.png', 'Emas Batangan - 1000 gr', 99, '1', 600000000, 892600000, 'Emas'),
('BRG0013', 'PRD0002', 'perak1.png', 'Perak Batangan Murni 99.95% 250gr', 249, '0,25', 2000000, 3875000, 'Perak'),
('BRG0014', 'PRD0002', 'perak2.png', 'Perak Butiran Murni 99.95% - 1kg', 30, '1', 6700000, 10000000, 'Perak'),
('BRG0015', 'PRD0002', 'perak2.png', 'Perak Butiran Murni 99.95% - 5kg', 19, '5', 33500000, 50000000, 'Perak'),
('BRG0016', 'PRD0002', 'perak2.png', 'Perak Butiran Murni 99.95% - 10kg', 48, '10', 67000000, 100000000, 'Perak'),
('BRG0017', 'PRD0002', 'perak3.png', 'Perak Batangan Murni 99.95% 500gr', 40, '0.5', 4000000, 7750000, 'Perak'),
('BRG0018', 'PRD0002', '', 'Perak Murni 99.95%', 0, '0', 0, 13800, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produksi`
--

CREATE TABLE `produksi` (
  `kode_produksi` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `nama_produksi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `produksi`
--

INSERT INTO `produksi` (`kode_produksi`, `tanggal`, `nama_produksi`) VALUES
('PRD0001', '2021-01-21', 'Produksi emas'),
('PRD0002', '2021-01-06', 'Produksi Perak');

-- --------------------------------------------------------

--
-- Struktur dari tabel `vendor`
--

CREATE TABLE `vendor` (
  `id_vendor` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `kontak` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `vendor`
--

INSERT INTO `vendor` (`id_vendor`, `nama`, `kontak`, `alamat`) VALUES
('VEN0001', 'PT Tjiwi Kimia', '(+62) 321 388046', ' Jakarta, Indonesia '),
('VEN0002', 'PT. Mada Putra Perkasa', '(021) 4800947', 'Jl. Raya Penggilingan, Komplek Taman Pulo Indah Blok M No 19 Cakung, RT.19/RW.7, Penggilingan, Kec. Cakung, Daerah Khusus Ibukota Jakarta 13940'),
('VEN0003', 'PT Sumber Berlian Kimia', '(021) 3514490', 'Jl. Pecenongan No.82A, RT.2/RW.4, Kb. Klp., Kecamatan Gambir, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10120'),
('VEN0004', 'PT. Graha Jaya Pratama kinerja', '(021) 54350108', 'Mutiara Taman Palem Blok B3 No. 38, Jl. Kamal Raya Outer Ring Road No.38, RT.13/RW.14, East Cengkareng, Cengkareng, West Jakarta City, Jakarta 11730'),
('VEN0005', 'Milik Perusahan', 'PT Aneka Tambang', '-'),
('VEN0006', 'PLN Persero', '(022) 5950354', 'Jl. Pamagersari No.26, Tangulun, Kec. Majalaya, Bandung, Jawa Barat 40382');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indeks untuk tabel `bahan_baku`
--
ALTER TABLE `bahan_baku`
  ADD PRIMARY KEY (`id_bahan`),
  ADD KEY `haha` (`id_vendor`),
  ADD KEY `haha_2` (`id_vendor`);

--
-- Indeks untuk tabel `bahan_produksi`
--
ALTER TABLE `bahan_produksi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kode_produksi` (`kode_produksi`),
  ADD KEY `id_bahan` (`id_bahan`);

--
-- Indeks untuk tabel `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `faktur`
--
ALTER TABLE `faktur`
  ADD PRIMARY KEY (`no_faktur`),
  ADD KEY `nomor_reference` (`nomor_payment`),
  ADD KEY `nomor_payment` (`nomor_reference`);

--
-- Indeks untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id_karyawan`);

--
-- Indeks untuk tabel `konsumen`
--
ALTER TABLE `konsumen`
  ADD PRIMARY KEY (`id_konsumen`);

--
-- Indeks untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`no_payment`),
  ADD KEY `no_reference` (`no_reference`);

--
-- Indeks untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reference_no` (`reference_no`),
  ADD KEY `id_pembeli` (`id_pembeli`),
  ADD KEY `id_produk` (`id_produk`);

--
-- Indeks untuk tabel `pengeluaran`
--
ALTER TABLE `pengeluaran`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_vendor` (`id_vendor`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`),
  ADD KEY `kode_produksi` (`kode_produksi`);

--
-- Indeks untuk tabel `produksi`
--
ALTER TABLE `produksi`
  ADD PRIMARY KEY (`kode_produksi`);

--
-- Indeks untuk tabel `vendor`
--
ALTER TABLE `vendor`
  ADD PRIMARY KEY (`id_vendor`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `bahan_produksi`
--
ALTER TABLE `bahan_produksi`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `pengeluaran`
--
ALTER TABLE `pengeluaran`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `bahan_baku`
--
ALTER TABLE `bahan_baku`
  ADD CONSTRAINT `bahan_baku_ibfk_1` FOREIGN KEY (`id_vendor`) REFERENCES `vendor` (`id_vendor`);

--
-- Ketidakleluasaan untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD CONSTRAINT `pemesanan_ibfk_2` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`);

--
-- Ketidakleluasaan untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `produk_ibfk_1` FOREIGN KEY (`kode_produksi`) REFERENCES `produksi` (`kode_produksi`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
