-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2022 at 12:04 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webwisata`
--

-- --------------------------------------------------------

--
-- Table structure for table `destinasi`
--

CREATE TABLE `destinasi` (
  `id_destinasi` int(10) NOT NULL,
  `nama_destinasi` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `gmaps` text DEFAULT NULL,
  `foto` varchar(255) NOT NULL,
  `id_kabkot` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `destinasi`
--

INSERT INTO `destinasi` (`id_destinasi`, `nama_destinasi`, `deskripsi`, `alamat`, `gmaps`, `foto`, `id_kabkot`) VALUES
(2, 'Pulau Diyonumo', 'Pulau Diyonumo merupakan satu pulau kecil tak berpenghuni yang masih jarang dikunjungi. Namun meskipun demikian pulau ini menyimpan keindahan yang tak kalah cantik dengan wisata lain di Gorontalo. Pulau Diyonumo menyajikan berbagai keindahan alam di pantai, daratan, dan bawah air. Salah satu yang paling mudah dinikmati adalah keindahan alam puncak bukit ilalang dan pantai putih yang begitu menawan. Pengunjung bisa menikmati suasana pantai yang air lautnya sangat jernih, serta bisa menjelajah daratan di pulau itu. Termasuk tentu saja mendaki di puncak ilalang Diyonumo.', ' JL. SUTOYO, BIAWAO, KOTA SEL., KOTA GORONTALO, GORONTALO, INDONESIA', 'https://goo.gl/maps/tDHJtfdseC4bbrDNA', '1670511615diyonumo.jpg', 14),
(3, 'Pulau Saronde', 'Pulau saronde adalah sebuah pulau yang terletak di utara Teluk Kwandang, Kecamatan Kwandang Kabupaten Gorontalo Utara, dengan jarak tempuh 65 Km dari pusat Kota Gorontalo atau 1,5 jam perjalanan darat. Untuk sampai ke pulau ini anda membutuhkan sarana transportasi perahu yang tentunya sudah disediakan bagi para pengunjung.', ' SARONDE PONELO KEPULAUAN, MOLUO, KWANDANG, KABUPATEN GORONTALO UTARA, GORONTALO 96133, INDONESIA', 'https://goo.gl/maps/hjXZ89XTi8GE55x1A', '1670104390saronde.jpg', 14),
(4, 'Air Terjun Lombongo', 'Sebagai salah satu destinasi wisata yang masih sangat baru, Air Terjun Lombongo ini memiliki pemandangan yang tidak kalah bagusnya dengan objek wisata lainnya. Tidak heran jika banyak orang penasaran untuk berkunjung ke sana. Mengingat tempatnya asri karena tidak terjamah banyak orang.\r\n<br>\r\nSalah satu destinasi terbaru yang ada di Gorontalo ini masih cukup asri, mengingat objek tersebut tidak banyak terjamah oleh orang. Dengan luas sekitar 282.008,757 hektar, destinasi ini juga mempunyai biodiversity tinggi serta habitat paling penting khas dari Sulawesi. Bahkan memiliki habitat flora endemik.\r\n<br>\r\nFlora endemik tersebut antara lain seperti palem matayangan, cempaka, dan juga nantu. Menurut informasi, Tim Calender Of Event pernah mengunjungi Air Terjun ini. Mereka mengambil waktu saat meliput acara festival. Tujuannya adalah untuk melakukan ekspedisi kecil ke air terjun ini.', 'Jl. Natsir Mooduto Desa, Tapadaa, Suwawa, Kabupaten Bone Bolango, Gorontalo 96113, Indonesia', 'https://goo.gl/maps/8ZUX6REkGKTSQ4JC6', '1670512317lombongo.jpg', 13),
(5, 'Center Point', 'Monumen Center Point terletak di Desa Moutong, Kecamatan Tilongkabila Kabupaten Bone Bolango. Monumen ini didirikan tahun 2016 dengan konsep miniatur dari Arc De Triomphe atau gerbang kemenangan di Paris.\r\n<br>\r\nMonumen ini selalu ramai dikunjungi saat pagi, sore dan malam hari. Bentuk monumennya yang menarik dan dilengkapi dengan pemandangan area persawahan menjadikan tempat ini sangat cocok untuk berswafoto bersama keluarga dan sahabat.\r\n<br>\r\nPada malam hari, lampu-lampu yang menghiasi monumen itu,  sangat memikat pengunjung yang tentunya akan mengabadikan momen tersebut sambil menghabiskan waktu sambil menikmati jajanan yang ada disekitar lokasi.\r\n<br>\r\nMenara yang memiliki tinggi 12 meter itu juga dilengkapi dengan beberapa fasilitas seperti tempat duduk untuk para pengunjung, penjual makanan dan fasilitas pendukung lainnya.', ' Jl. Kasmat Lahay, Iloheluma, Tilongkabila, Kabupaten Bone Bolango, Gorontalo 96119, Indonesia', 'https://goo.gl/maps/EF3FJT7RT6LX1Fvx6', '1671006858cp.jpg', 13),
(6, 'Desa Terapung Torosiaje', 'Secara geografis Desa Terapung Torosiaje berada di atas Teluk Tomini. Sementara jika dilihat secara administratif, desa yang satu ini masuk ke dalam wilayah Kecamatan Popayato, Kabupaten Pohuwato, Gorontalo.\r\n\r\nSangat jauh dari Kota Gorontalo, sekitar 240 km dengan waktu tempuh kira-kira 5 hingga 6 jam perjalanan darat, ditambah beberapa menit perjalanan laut dengan menggunakan perahu selama 10 hingga 15 menit.\r\n\r\nWalau pun lokasinya di atas laut, namun Desa Torosiaje sama sekali bukan perkampungan yang tertinggal dan tak tersentuh peradaban, dan di sana bahkan sudah ada aliran listrik dari PLN.\r\n\r\nApabila dilihat dari atas, Desa Torosiaje membentuk pola huruf ‘U’ dengan luas wilayah sekitar 200 hektar. Hampir semua hunian warga Desa Torosiaje terbuat dari kayu, dengan pondasi dari batang pohon yang cukup besar dengan ketinggian sekitar tiga hingga lima meter dari atas permukaan laut.\r\n\r\nPenduduk Desa Torosiaje yang didominasi oleh suku Bajo pun memiliki kehidupan normal. Beberapa warga ada yang membuka warung kecil-kecilan untuk memenuhi kebutuhan masyarakat Desa Torosiaje.\r\n\r\nDi sana juga telah ada sekolah yang bisa digunakan oleh anak-anak Desa Torosiaje untuk menuntut ilmu.\r\n\r\nSelain bisa mengetahui berbagai aktivitas masyarakat Desa Torosiaje, anda juga bisa melakukan beberapa hal menarik lainnya ketika berwisata di sana.\r\n\r\nAnda pun bisa memancing di dermaga desa atau berkeliling Desa Torosiaje dengan menggunakan sampan, sembari menikmati keindahan Teluk Tomini dengan warna airnya yang biru bersih.\r\n\r\nWalaupun di atasnya terdapat puluhan KK yang mendiami Desa Torosiaje, namun air laut di sana masih sangat bersih, sebagai bukti bahwa masyarakat sekitar desa sangat menjaga laut dan memperlakukan mereka layaknya halaman depan bukan sebagai halaman belakang.\r\n\r\nSelain itu, anda juga bisa berfoto ria di Desa Torosiaje. Banyak spot-spot cantik instagramable yang bisa anda jumpai di desa tersebut.\r\n\r\nAnda pun bisa memanfaatkan beberapa bangku yang ada di sekitar jalan-jalan penghubung antar rumah untuk sekedar duduk bersantai, sambil menikmati birunya lautan luas. Anda juga bisa berenang di sekitar Desa Torosiaje', 'Torosiaje, Popayato, Kabupaten Pohuwato, Gorontalo, Indonesia', 'https://goo.gl/maps/UCyFtvoNM6RQZPiSA', '1671006972torosiaje.jpg', 12),
(7, 'Pantai Pohon Cinta', 'Pantai Pohon Cinta adalah salah satu lokasi wisata yang terkenal akan keindahannya. Memiliki pemandangan yang memukau, hamparan laut yang tenang dan hampir tidak berombak menjadi salah satu hal yang menarik bagi anda yang ingin menghilangkan kepenatan dan mencari ketenangan.\r\n\r\nJika anda melancong ke Pohuwato,lokasi ini adalah salah satu destinasi yang harus anda kunjungi. Daya tarik dari Pantai Pohon Cinta adalah keindahan matahari terbenamnya.\r\n\r\nUntuk itu, tidak heran jika pantai yang berada di pusat Kota Pohuwato ini hampir selalu ramai dikunjungi mereka yang ingin melihat matahari terbenam.\r\n\r\nKetika anda mengunjungi pantai ini saat kondisi langit sedang tidak berawan, maka matahari terbenam dengan sangat jelas. Warna jingga yang semburat dari matahari terbenam akan menjadi panorama indah yang bisa anda nikmati.\r\n\r\nSelain keindahan sunset, anda juga disuguhkan dengan pemandangan area mangrove yang memang dibuka untuk pengunjung. Bagi anda yang ingin menyusuri hutan mangrove, tersedia jalur yang memang disediakan.\r\n\r\nTentunya tidak lengkap jika anda tidak mengabadikan momen di lokasi ini. Adanya landmark yang bertuliskan Pantai Pohon Cinta menjadi salah satu spot foto menarik yang tidak boleh anda lewatkan.\r\n\r\nDi sekitar pantai, anda juga bisa menemukan banyak wisata kuliner yang tersedia salah satunya adalah menu khas Ikan Bakar yang memiliki cita rasa enak dan segar.\r\n\r\nJika Anda berangkat dari Bandara Djalaluddin Gorontalo, anda bisa menempuh jalur darat yang nantinya akan melewati Jalan Trans Sulawesi dan akan tiba dilokasi tersebut. Butuh waktu sekita 3-4 jam untuk anda tiba di Pantai Pohon Cinta.', 'Marisa, Kabupaten Pohuwato, Gorontalo 96265, Indonesia', 'https://goo.gl/maps/spHcwsVzSjRHqmnW7', '1671007071pohoncinta.jpg', 12),
(8, 'Pulo Cinta', 'Pulau Cinta memiliki bentuk yang unik dan pantai yang ada di sekelilingnya juga terbilang benar-benar indah. Ada beberapa pihak yang menyebut bahwa pulau cantik ini merupakan Maldives Island Indonesia.\r\n\r\nTempat ini merupakan rekomendasi untuk mereka yang ingin datang bersama pasangan dan mendapatkan suasana romantis dengan kondisi alam yang masih terjaga.\r\n\r\nPulau Cinta atau Pulo Cinta memiliki bentuk yang mirip dengan jantung hati. Di sekitarnya telah dibangun sebuah resort yang juga berbentuk jantung hati.\r\n\r\nPulau ini memang memiliki daya tarik tersendiri mengingat keindahan yang ada di sekitarnya patut untuk dieksplor lebih luas lagi.\r\n\r\nDestinasi wisata yang tidak kalah indah dan romantis dengan objek wisata yang ada di luar negeri. Di lokasi ini mempunyai pemandangan darat dan laut yang menakjubkan. Anda akan disuguhi pemandangan hamparan laut yang bersih dan jernih dengan hembusan angin yang sejuk.\r\n\r\nPasir di pulau ini berwarna putih dan lembut di kulit. Selain itu, pemandangan bawah laut tidak boleh anda lewatkan saat berkunjung kesini.\r\n\r\nPulau ini berada di Teluk Tomini. Agar bisa sampai di lokasi tersebut pengunjung bisa menggunakan kapal dari Pantai Bolihutuo selama kurang lebih 15 menit agar bisa sampai di pulau tersebut.\r\n\r\nTidak hanya bentuknya yang unik, tetapi ada kisah dibalik pulau ini. Dulu ketika ada di masa penjajahan kolonial Belanda, pulau ini memang menjadi tempat pelarian antara pangeran Gorontalo dengan putri salah seorang pedagang yang berasal dari Belanda.\r\n\r\nSaat itu terjadi peperangan dan penolakan dari masyrakat setempat. Cinta dua orang ini tidak direstui dan mereka memilih untuk melarikan diri serta mengasingkan diri di pulau ini.\r\n\r\nPulau cinta saat ini menjadi destinasi unggulan Gorontalo. salah satu fasilitas yang tidak boleh dilewatkan adalah Eco Resort. Tempat ini menjadi resort pertama dan satu-satunya di Pulau Cinta.', 'Patoameme, Botumoito, Kabupaten Boalemo, Gorontalo', 'https://goo.gl/maps/k2FMk9TaQ6VwU3cM6', '1671007154pulo_cinta.jpg', 11),
(9, 'Benteng Otanaha', 'Benteng Otanaha merupakan sebuah benteng yang terletak di atas bukit di Kelurahan Dembe 1, Kecamatan Kota Barat, Kota Gorontalo. Benteng ini dibangun sekitar tahun 1522. Benteng Otanaha terletak di atas sebuah bukit, dan memiliki 4 buah tempat persinggahan dan 348 buah anak tangga ke puncak sampai ke lokasi benteng.', 'Jl. Usman Isa No.kelurahan, Dembe I, Kec. Kota Bar., Kota Gorontalo, Gorontalo 96181', 'https://goo.gl/maps/wx1PXuDABfdaEnM66', '1671007311otanaha.jpg', 10),
(10, 'Menara Keagungan (Pakaya Tower Limboto) ', 'Menara keagungan sebuah menara dengan kontruksi dari baja yang terletak kota Limboto, Kabupaten Gorontalo, Indonesia. Menara dengan ketinggian 65 yang meter yang menyerupai Menara Eiffel ini menjadi salah satu simbol kota Limboto dan menjadi salah satu tujuan wisata populer di Gorontalo.', 'Jl. Baso Bobihoe No.308, Kayubulan, Kec. Limboto, Kabupaten Gorontalo, Gorontalo 96181', 'https://goo.gl/maps/ZCRscNUPNEZeGqKN9', '1671007774Menara_Keagungan.jpg', 9);

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `id_hotel` int(11) NOT NULL,
  `nama_hotel` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `alamat` text NOT NULL,
  `gmaps` text DEFAULT NULL,
  `foto` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`id_hotel`, `nama_hotel`, `deskripsi`, `alamat`, `gmaps`, `foto`) VALUES
(1, 'Maqna Hotel', 'Terletak di kompleks pusat perbelanjaan, hotel informal ini berjarak 9 km dari Benteng Otanaha, benteng bukit abad ke-16 yang hancur, dan 2 km dari Taman Lahilote, sebuah taman kota yang\r\npopuler. Jaraknya 31 km dari Bandara Jalaluddin.\r\n\r\nKamar dan suite yang luas dilengkapi dengan TV layar datar, minibar, fasilitas pembuat teh dan kopi, serta Wi-Fi. Suite di kelas yang lebih tinggi memiliki dapur kecil dan ruang makan.\r\n\r\nSarapan prasmanan tersedia. Fasilitas lainnya termasuk restoran, spa, dan kolam renang outdoor dengan kursi berjemur, serta gym dan ruang acara.', 'Botuhite No.88, Jalan Sultan Botutihe, Heledulaa Selatan, Kota Timur, Heledulaa Selatan, Kota Timur, Bone Bolango Regency, Gorontalo 96115', 'https://goo.gl/maps/BbWSA6kbCPhHS8Gr7', '1670251342maqna.jpg'),
(2, 'Grand Q Hotel', 'Hotel kasual yang terletak di bangunan modern ini berjarak 8 km dari Benteng Otanaha abad ke-16 dan 10 menit berjalan kaki dari Masjid Agung Baiturrahim, masjid tertua di provinsi Gorontalo.\r\n\r\n\r\nKamar simpel bernuansa hangat memiliki meja, Wi-Fi gratis, TV layar datar, alat pembuat teh dan kopi, serta panorama kota atau gunung. Suite memiliki ruang keluarga dan meja makan.\r\n\r\nFasilitas meliputi restoran dan tempat makan outdoor di teras, serta pub yang ramai dan bar/lounge simpel dan penuh warna. Keduanya menampilkan musik live rutin. Ruang karaoke tersedia.', 'Jl. Nani Wartabone No.25, Ipilo, Kec. Kota Tim., Kota Gorontalo, Gorontalo 96133', 'https://goo.gl/maps/t3PjkrCaccTefyDm6', '1670169634grandq.jpg'),
(4, 'Aston Hotel', 'Hotel mewah yang terletak di jalan perumahan ini berjarak 11 km dari Pantai Dulanga di Teluk Tomini dan 2 km dari pusat perbelanjaan di Citimall Gorontalo. Bandara Djalaludin, Gorontalo\r\nberjarak 30 km.\r\n\r\nKamar santai dilengkapi Wi-Fi, TV layar datar, dan area duduk.\r\n\r\nFasilitas meliputi restoran kasual, kafe, gym, dan lapangan tenis, serta taman yang mengelilingi kolam renang outdoor. Sarapan dan tempat parkir tersedia, begitu juga dengan ruang pertemuan dan acara.', 'Jl. Manggis No.88, Libuo, Kec. Dungingi, Kota Gorontalo, Gorontalo 96136', 'https://goo.gl/maps/jWSmLdXb8xjgYqSD9', '1670169723aston.jpg'),
(5, 'Damhil Hotel', 'Berlokasi di kompleks Universitas Negeri Gorontalo, TC Damhil UNG menawarkan penginapan bintang 3 di kota Gorontalo. Hotel ini menyediakan kamar yang luas dan juga restoran di dalamnya. WiFi gratis bisa diakses di seluruh area hotel.\r\n\r\nKamar di TC Damhil UNG yang berdesain modern dilengkapi dengan AC dan kedap suara. Setiap kamar dilengkapi dengan fasilitas, seperti TV layar datar bersaluran kabel, meja kerja, pembuat kopi/teh, serta air mineral gratis. Shower, serta fasilitas lain seperti handuk dan peralatan mandi gratis juga tersedia di kamar mandi dalamnya.\r\n\r\nSetiap pagi, kamu bisa menikmati sarapan kontinental khas Asia. Hotel ini juga menyediakan layanan kamar jika kamu ingin menyantap hidangan di dalam kamar dengan nyaman. <br> Pilihan kuliner lain yang bisa dicoba, antara lain Warunk Upnormal, RMTerapung Ainun, dan Angelato.\r\n\r\nFasilitas dan layanan lainnya, seperti pusat bisnis, resepsionis 24 jam, layanan concierge, layanan kebersihan harian, dan laundry juga tersedia di hotel. Layanan concierge akan membantumu melayani penitipan bagasi, serta merencanakan tur dan perjalanan wisata untukmu. Parkir tersedia gratis di hotel, sedangkan layanan antar-jemput bandara bisa dipesan dengan biaya tambahan.\r\n\r\nTC Damhil UNG berlokasi sejauh 7 menit berkendara dari Citimall Gorontalo. Benteng Otanaha berjarak 23 menit berkendara dari hotel. Sedangkan Bandara Djalaludin yang merupakan bandara terdekat dari hotel berjarak 33 km.', 'Jl. Ir. H. Joesoef Dalie Komplek Universitas Negeri, Dulalowo Tim., Kec. Kota Tengah, Kota Gorontalo, Gorontalo 96128', 'https://goo.gl/maps/heVzjw3EsCz9h8Ud6', '1670170978damhil.jpg'),
(6, 'Amaris Hotel', 'Amaris Hotel Gorontalo terletak tepat di depan Pusat Perbelanjaan Mal Gorontalo, serta menawarkan akomodasi modern, akses Wi-Fi gratis, dan parkir pribadi gratis di dalam kompleks hotel bagi Anda yang berkendara.Setiap kamar di hotel ini ber-AC dan dilengkapi dengan TV kabel. Kamar mandi pribadi mencakup shower, sandal, dan peralatan mandi gratis. Fasilitas tambahannya meliputi meja, brankas, dan seprai.', 'Jl. Sultan Botutihe No.37, Ipilo, Kec. Kota Tim., Kota Gorontalo, Gorontalo 96114', 'https://goo.gl/maps/FmFjcu8fezfFe8CC8', '1670244158amaris.jpg'),
(7, 'Milinov Hotel', 'Millinov Boutique Hotel berlokasi strategis di pusat Kota Gorontalo dan hanya berjarak 750 meter dari Taman Kota Gorontalo. Hotel ini menawarkan akomodasi modern dengan restoran, lounge dan fasilitas parkir gratis yang aman. Akses WiFi gratis juga tersedia di semua kamar dan area publik.\r\n\r\nKamar-kamar AC di hotel ini dilengkapi TV layar datar dan meja kerja. Kamu juga bisa memanfaatkan fasilitas lain seperti kulkas mini, ketel listrik dan air mineral gratis di setiap kamar. Kamar mandi pribadinya dilengkapi handuk dan peralatan mandi gratis. Pengiring rambut disediakan sesuai permintaan.\r\n\r\nMillinov Boutique Hotel menyediakan sarapan harian di restoran dan pilihan minuman segar di lounge. Tip Top Cafe yang berselang 3 menit berjalan kaki dari hotel menawarkan menu makan malam ditemani pertunjukan musik live. Alternatif lain, kamu bisa makan di restoran apung RM Terapung Ainun dengan suguhan makanan laut atau restoran Domestique dengan hidangan Indonesia dan barat yang berjarak 600 meter dari hotel.\r\n\r\nUntuk kenyamanan selama menginap, hotel ini menyediakan layanan kebersihan harian. Kamu bisa menghubungi staf resepsionis 24 jam untuk layanan laundry dan antar-jemput bandara dengan biaya tambahan. Kamu juga bisa memanfaatkan teras outdoor hotel untuk menikmati udara segar dan fasilitas pertemuan untuk mengadakan acara bisnis.\r\n\r\nLapangan Taruna dan Benteng Otanaha masing-masing berjarak 3,4 km dan 7 km dari hotel. Pusat perbelanjaan terdekat, Citimall Gorontalo, hanya berselang 10 menit berkendara. Kamu bisa menikmati pemandangan kota dari puncak bukit Wisata Gunung Layang yang berjarak kurang dari 4 km. Millinov Boutique Hotel berjarak 31 km dari Bandara Jalaluddin Gorontalo.', 'Jl. Jendral Sudirman 65, Gorontalo, 95116', 'https://goo.gl/maps/PRr16NQzzNxTkwGv9', '1670249630millinov.jpg'),
(8, 'Sunrise Hotel', 'Hotel Sunrise adalah tempat yang sempurna untuk menginap yang menyediakan fasilitas yang layak serta layanan yang luar biasa. Dari acara bisnis hingga pertemuan perusahaan, Hotel Sunrise menyediakan layanan dan fasilitas lengkap yang Anda dan kolega Anda butuhkan. Bersenang-senanglah dengan berbagai fasilitas menghibur untuk Anda dan seluruh keluarga di Hotel Sunrise, akomodasi indah untuk liburan keluarga Anda. Jika Anda berencana untuk tinggal jangka panjang, menginap di Hotel Sunrise adalah pilihan yang tepat untuk Anda. Menyediakan berbagai fasilitas dan kualitas layanan yang baik, akomodasi ini tentu membuat Anda merasa seperti di rumah. <br> <br> Meskipun bepergian dengan teman bisa sangat menyenangkan, bepergian sendiri memiliki fasilitasnya sendiri. Adapun akomodasi, Hotel Sunrise cocok untuk Anda yang menghargai privasi selama Anda tinggal. Meja depan 24 jam tersedia untuk melayani Anda, mulai dari check-in hingga check-out, atau bantuan apa pun yang Anda butuhkan. Jika Anda menginginkan lebih, jangan ragu untuk bertanya di meja depan, kami selalu siap untuk mengakomodasi Anda. Nikmati hidangan favorit Anda dengan masakan khusus dari Hotel Sunrise khusus untuk Anda. WiFi tersedia di area publik properti untuk membantu Anda tetap terhubung dengan keluarga dan teman. Hotel Sunrise adalah akomodasi dengan fasilitas baik dan kualitas pelayanan memuaskan menurut sebagian besar tamu. Hotel Sunrise adalah pilihan ideal bagi Anda yang mencari akomodasi yang nyaman namun terjangkau.', ' Jl. Kasuari I No.50, Heledulaa Sel., Kota Tim., Kota Gorontalo, Gorontalo 96134, Indonesia', 'https://goo.gl/maps/WUEYqaEppeSaP9Up6', '1670249715sunrise.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `kabkot`
--

CREATE TABLE `kabkot` (
  `id_kabkot` int(11) NOT NULL,
  `nama_kabkot` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kabkot`
--

INSERT INTO `kabkot` (`id_kabkot`, `nama_kabkot`, `deskripsi`, `foto`) VALUES
(9, 'Kabupaten Gorontalo', 'Sejak ditetapkan sebagai Kabupaten pada tahun 1959 hingga sekarang, Kabupaten Gorontalo sudah mengalami tiga kali pemekaran. Pemekaran pertama pada tahun 1999 yang melahirkan Kabupaten Boalemo, pemekaran ke dua pada tahun 2003 yang melahirkan Kabupaten Bone Bolango, dan terakhir pada tahun 2007 yang melahirkan Kabupaten Gorontalo Utara.', '16704877631670104390saronde.jpg'),
(10, 'Kota Gorontalo', 'Kota Gorontalo (Bahasa Gorontalo: Hulontalo, transliterasi: Kota Hulontalo) merupakan Ibu kota Provinsi Gorontalo, Indonesia. Kota Gorontalo merupakan kota terbesar dan terpadat penduduknya di wilayah Teluk Tomini (Teluk Gorontalo), sehingga menjadikan Kota Gorontalo sebagai pusat ekonomi, jasa dan perdagangan, pendidikan, hingga pusat penyebaran agama Islam di Kawasan Indonesia Timur.', '1669907647kota.jpg'),
(11, 'Kabupaten Boalemo', 'Kabupaten Boalemo dengan ibu kota Tilamuta merupakan kabupaten hasil pemekaran Kabupaten Gorontalo pada tahun 1999. Kabupaten Boalemo dibentuk pada tanggal 12 Oktober 1999 berdasarkan Undang-Undang Nomor 50 Tahun 1999 yang telah diubah dengan Undang-Undang Nomor 10 Tahun 2000 tentang Pembentukan Kabupaten Boalemo. Jumlah penduduk kabupaten Boalemo pada tahun 2019 sebanyak 147.682 jiwa.', '1669907682boalemo.jpg'),
(12, 'Kabupaten Pohuwato', 'Kabupaten Pohuwato atau Kabupaten Pahuwato adalah kabupaten yang terbentuk dari hasil pemekaran Kabupaten Boalemo. Kabupaten ini dibentuk berdasarkan Undang-Undang Nomor 6 Tahun 2003 tanggal 25 Februari 2003 yang ditandatangani oleh Presiden Megawati Soekarnoputri. Daerah ini unik karena dimekarkan dari daerah induk yaitu Kabupaten Boalemo yang saat itu baru berusia 3,5 tahun.', '1669907710pohuwato.jpg'),
(13, 'Kabupaten Bone Bolango', 'Kabupaten Bone Bolango adalah sebuah kabupaten di Provinsi Gorontalo, Indonesia. Kabupaten ini merupakan hasil pemekaran Kabupaten Gorontalo tahun 2003. Pada waktu dimekarkan Kabupaten Bone Bolango hanya terdiri atas empat wilayah kecamatan, yaitu: Bone Pantai, Kabila, Suwawa, dan Tapa. Sampai bulan September 2011, Kabupaten Bone Bolango mengalami banyak proses pemekaran kecamatan dan desa/kelurahan, sehingga jumlah kecamatan dan desa/ kelurahan menjadi banyak, yaitu 17 kecamatan dan 1 kecamatan persiapan (wilayah Pinogu), 152 desa, dan 4 kelurahan.', '1669907763bonbol.jpg'),
(14, 'Kabupaten Gorontalo Utara', 'Kabupaten Gorontalo Utara adalah sebuah kabupaten di Provinsi Gorontalo, Indonesia. Ibu kotanya adalah Kwandang. Kabupaten ini dibentuk berdasarkan Undang-Undang Nomor 11 Tahun 2007 pada tanggal 2 Januari 2007. Kabupaten ini merupakan hasil pemekaran ketiga (2007) Kabupaten Gorontalo. Kabupaten Gorontalo Utara terdiri atas 11 kecamatan, dan 123 desa dengan jumlah penduduk 125.768 jiwa (2019) serta luas 1.777,02 km², sehingga tingkat kepadatan penduduknya adalah 70,77 jiwa/km².', '1669907809gorut.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kuliner`
--

CREATE TABLE `kuliner` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kuliner`
--

INSERT INTO `kuliner` (`id`, `nama`, `deskripsi`, `foto`) VALUES
(2, 'Ilabulo', 'Salah satu kuliner tradisional yang wajib dicicipi oleh para pelancong ketika berkunjung ke Gorontalo adalah Ilabulo. Makanan satu ini jika dilihat secara sekilas, pasti akan dikira sejenis pepes. Ilabulo memang sekilas terlihat mirip pepes, namun makanan satu ini sangat berbeda dengan pepes. Kuliner tradisional satu ini terbuat dari sagu yang dicampur dengan hati ayam.\r\n<br>\r\nMasyarakat Gorontalo biasanya membuat Ilabulo yang akan dimasak dengan menggunakan santan dan dijadikan sebagai santapan makan siang. Perpaduan tersebut menciptakan cita rasa yang menakjubkan di mulut. Makanan satu ini cukup mudah untuk ditemukan pada beberapa daerah di Gorontalo, jadi Anda tidak perlu khawatir tidak bisa mencicipi kuliner unik namun lezat ini.', '1670936039ilabulo.jpg'),
(3, 'Binde Biluhuta', 'Makanan satu ini merupakan salah satu panganan khas Gorontalo yang paling populer di kalangan masyarakat. Dimana Binti Biluhuta ini menggunakan jagung Gorontalo sebagai bahan dasar. Provinsi satu ini memang terkenal sebagai penghasil jagung yang subur, hingga masyarakatnya pun memanfaatkannya menjadi kuliner yang menggugah selera. Binti Biluhuta sendiri berarti makanan jagung yang disiram.\r\n<br>\r\nPanganan ini terdiri dari jagung ketan putih yang kemudian dicampur dengan parutan kelapa, udang dan suwiran ikan cakalang. Campuran tersebut kemudian akan disiram dengan kuah yang sudah diberi bumbu rempah rempah khas. Banyak yang menilai makanan satu ini paling enak bila disantap ketika masih panas. Jika memiliki kesempatan berkunjung ke Gorontalo, maka sangat direkomendasikan untuk mencoba makanan satu ini.', '1670936087Binte-Biluhuta.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id` int(11) NOT NULL,
  `nama` varchar(256) DEFAULT NULL,
  `username` varchar(256) DEFAULT NULL,
  `password` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id`, `nama`, `username`, `password`) VALUES
(12, 'uta', 'uta', '12345678'),
(13, 'Agung Saputra', 'agung', '1234'),
(14, 'Putra', 'putra', 'qwerty'),
(15, 'Lionel Messi', 'messi', 'duasatu'),
(17, 'Neji Hyuga', 'neji', 'byakugan'),
(19, 'Shiozaki Furuta', 'furuta', 'ninja');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `destinasi`
--
ALTER TABLE `destinasi`
  ADD PRIMARY KEY (`id_destinasi`),
  ADD KEY `id_kabkot` (`id_kabkot`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`id_hotel`);

--
-- Indexes for table `kabkot`
--
ALTER TABLE `kabkot`
  ADD PRIMARY KEY (`id_kabkot`);

--
-- Indexes for table `kuliner`
--
ALTER TABLE `kuliner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `destinasi`
--
ALTER TABLE `destinasi`
  MODIFY `id_destinasi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `id_hotel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `kabkot`
--
ALTER TABLE `kabkot`
  MODIFY `id_kabkot` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `kuliner`
--
ALTER TABLE `kuliner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
