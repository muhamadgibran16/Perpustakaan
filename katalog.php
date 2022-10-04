<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="assets/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
    <title>Katalog Buku</title>
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark shadow p-3 fixed-top" style="background-color: #283593;">
        <div class="container">
            <a class="navbar-brand" href="index.php?home"><img src="img/logo5_25_174537.png" alt="..." width="30"
                    height="25" class="d-inline-block align-text-top me-2">Perpustakaan Abhitah</a>
            <button class="navbar-toggler visible" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php?home"><i
                                class="fa-solid fa-house-chimney me-2"></i>Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-list-ul me-1"></i>
                            Kategori
                        </a>
                        <ul class="dropdown-menu border-primary border-2" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="katalog.php">Semua Kategori</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="anak.php?koleksianak">Anak-anak</a></li>
                            <li><a class="dropdown-item" href="agama.php?koleksiagama">Agama</a></li>
                            <li><a class="dropdown-item" href="bahasa.php?koleksibahasa&kamus">Bahasa dan Kamus</a>
                            </li>
                            <li><a class="dropdown-item" href="biografi.php?koleksibiografi">Biografi</a></li>
                            <li><a class="dropdown-item" href="novel.php?koleksinovel">Novel</a></li>
                            <li><a class="dropdown-item" href="teknologi.php?koleksisains&teknologi">Sains dan
                                    Teknologi</a></li>
                            <li><a class="dropdown-item" href="sejarah.php?koleksisejarah&budaya">Sejarah dan
                                    Budaya</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-book me-2"></i>Buku
                        </a>
                        <ul class="dropdown-menu border-primary border-2" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="index.php#populer">Buku Populer</a></li>
                            <li><a class="dropdown-item" href="index.php#rekomendasi">Buku Rekomendasi</a></li>
                            <li><a class="dropdown-item" href="katalog.php">Koleksi Buku</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php#berita"><i
                                class="fa-solid fa-newspaper me-2"></i>Berita</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php#anggota"><i
                                class="fa-solid fa-user-group  me-2"></i>Anggota</a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link active" href="index.php#about"><i
                                class="fa-solid fa-circle-question me-2"></i>About</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-outline-light btn-md" href="login.php?loginperpustakaan">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Katalog -->
    <div class="contaier-fluid katalog">
        <div class="container shadow p-3">
            <div class="row pt-5">
                <h2 class="text-center">Katalog Buku</h2>
            </div>
            <!-- Anak-anak  -->
            <div class="row">
                <h4 class="judul mb-4">Anak-anak </h4>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                    <div class="card">
                        <img src="img/19.jpg" class="card-img-top img-fluid" alt="...">
                        <div class="card-body">
                            <h5 class="card-title ">Belajar Gitar Elektrik Yang Baik & Benar Untuk Anak Anak</h5>
                            <p class="card-text">Bisron Wahyutomo</p>
                            <a href="#" class="btn btn-primary btn-sm">Read &raquo;</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                    <div class="card">
                        <img src="img/20.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Kisah Anak-Anak Peraih Surga</h5>
                            <p class="card-text">Nia Apriliyah</p>
                            <a href="#" class="btn btn-primary btn-sm">Read &raquo;</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                    <div class="card">
                        <img src="img/21.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Kisah Alkitab Untuk Waktu Teduh Bagi Anak-Anak</h5>
                            <p class="card-text">Zonderkidz</p>
                            <a href="#" class="btn btn-primary btn-sm">Read &raquo;</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                    <div class="card">
                        <img src="img/22.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Anak Hebat, Anak Optimis</h5>
                            <p class="card-text">WATIEK IDEO, NINDIA MAYA, DKK</p>
                            <a href="#" class="btn btn-primary btn-sm">Read &raquo;</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                    <div class="card">
                        <img src="img/23.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Mewarnai Robot Untuk Anak-Anak</h5>
                            <p class="card-text">Kak bambang, Kak Amel</p>
                            <a href="#" class="btn btn-primary btn-sm">Read &raquo;</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                    <div class="card">
                        <img src="img/24.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Kumpulan Cerita Inspiratif Anak-Anak Hebat</h5>
                            <p class="card-text">Erna Fitrini</p>
                            <a href="#" class="btn btn-primary btn-sm">Read &raquo;</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                    <div class="card">
                        <img src="img/25.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Koleksi Humor Teka Teki Terlucu Untuk Anak-anak 3</h5>
                            <p class="card-text">Zefanya Tiffanny</p>
                            <a href="#" class="btn btn-primary btn-sm">Read &raquo;</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                    <div class="card">
                        <img src="img/26.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Anak Hebat, Anak Optimis</h5>
                            <p class="card-text">Watiek Ideo, Nindia Maya, dkk</p>
                            <a href="#" class="btn btn-primary btn-sm">Read &raquo;</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                    <div class="card">
                        <img src="img/27.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Ensiklopedia Sains Untuk Anak-Anak 3 : Manusia dan Sains</h5>
                            <p class="card-text">Tim Pelangi</p>
                            <a href="#" class="btn btn-primary btn-sm">Read &raquo;</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                    <div class="card">
                        <img src="img/28.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Aktivitas Aurora: Cerdas Perkalian dan Pembagian</h5>
                            <p class="card-text">Disney</p>
                            <a href="#" class="btn btn-primary btn-sm">Read &raquo;</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Agama -->
            <div class="row">
                <h4 class="judul mb-4">Agama</h4>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                    <div class="card">
                        <img src="img/37.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title ">Muslim Papua ; Membangun Harmoni Berdasarkan Sejarah Agama Di Bumi
                                Cendrawasih</h5>
                            <p class="card-text">DHURORUDIN MASHAD</p>
                            <a href="#" class="btn btn-primary btn-sm">Read &raquo;</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                    <div class="card">
                        <img src="img/38.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title ">Dalil-Dalil Agama Gus Dur</h5>
                            <p class="card-text">Nur Khalik Ridwan</p>
                            <a href="#" class="btn btn-primary btn-sm">Read &raquo;</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                    <div class="card">
                        <img src="img/39.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title ">Agama Untuk Peradaban: Membumikan Etos Agama Dalam Kehidupan</h5>
                            <p class="card-text">Komaruddin Hidayat</p>
                            <a href="#" class="btn btn-primary btn-sm">Read &raquo;</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                    <div class="card">
                        <img src="img/40.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title ">Logika Agama: Kedudukan Wahyu & Batas-Batas Akal dalam Islam</h5>
                            <p class="card-text">M. Quraish Shihab</p>
                            <a href="#" class="btn btn-primary btn-sm">Read &raquo;</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                    <div class="card">
                        <img src="img/41.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title ">Hukum Perkawinan Beda Agama Dalam Teori & Praktiknya Di Indonesia
                            </h5>
                            <p class="card-text">Sirman Dahwal</p>
                            <a href="#" class="btn btn-primary btn-sm">Read &raquo;</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                    <div class="card">
                        <img src="img/42.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title ">Gerakan Moderasi Agama Menghadapi Gelombang Radikalisme</h5>
                            <p class="card-text">Prof. Dr. H.M. Ridwan Lubis</p>
                            <a href="#" class="btn btn-primary btn-sm">Read &raquo;</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bahasa dan kamus -->
            <div class="row">
                <h4 class="judul mb-4">Bahasa dan Kamus </h4>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                    <div class="card">
                        <img src="img/29.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title ">Kamus Bahasa Indonesia - Arab & Arab - Indonesia</h5>
                            <p class="card-text">Muhammad Yunus</p>
                            <a href="#" class="btn btn-primary btn-sm">Read &raquo;</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                    <div class="card">
                        <img src="img/30.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title ">EYD Pedoman Umum Ejaan Bahasa Indonesia</h5>
                            <p class="card-text">Tim Litbang</p>
                            <a href="#" class="btn btn-primary btn-sm">Read &raquo;</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                    <div class="card">
                        <img src="img/31.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title ">Nihongo-Kirakira Bahasa Jepang Untuk SMA/MA Kelas XI</h5>
                            <p class="card-text">Evi Lusiana, Igarashi Yuka, Mitsumoto Tomoya</p>
                            <a href="#" class="btn btn-primary btn-sm">Read &raquo;</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                    <div class="card">
                        <img src="img/32.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title ">Metode Penelitian Bahasa Edisi Ketiga</h5>
                            <p class="card-text">Mahsun</p>
                            <a href="#" class="btn btn-primary btn-sm">Read &raquo;</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                    <div class="card">
                        <img src="img/33.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title ">English Grammar Complete Edition Tata Bahasa Inggris Edisi Lengkap
                            </h5>
                            <p class="card-text">Drs. Rudy H., Harry W. Smith, DRS.AHMAD SUBAKIR &TRI HASTUTININGSIH S.S
                            </p>
                            <a href="#" class="btn btn-primary btn-sm">Read &raquo;</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                    <div class="card">
                        <img src="img/34.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title ">Bahasa Jerman Untuk Pemula</h5>
                            <p class="card-text">Sally Pattinasarany</p>
                            <a href="#" class="btn btn-primary btn-sm">Read &raquo;</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                    <div class="card">
                        <img src="img/35.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title ">Percakapan Lengkap Bahasa Inggris Sehari-Hari</h5>
                            <p class="card-text">Fahmi Sofyan</p>
                            <a href="#" class="btn btn-primary btn-sm">Read &raquo;</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                    <div class="card">
                        <img src="img/36.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title ">Kosakata Percakapan Sehari Hari Bahasa Jepang</h5>
                            <p class="card-text">Parastuti</p>
                            <a href="#" class="btn btn-primary btn-sm">Read &raquo;</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Biografi -->
            <div class="row">
                <h4 class="judul mb-4">Biografi</h4>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                    <div class="card">
                        <img src="img/43.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title ">Biografi Utsman Bin Affan</h5>
                            <p class="card-text">Prof. Dr. Ali Muhammad Ash-Shallabi</p>
                            <a href="#" class="btn btn-primary btn-sm">Read &raquo;</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                    <div class="card">
                        <img src="img/44.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title ">Soekarno: Sebuah Biografi</h5>
                            <p class="card-text">Adji Nugroho S.ip</p>
                            <a href="#" class="btn btn-primary btn-sm">Read &raquo;</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                    <div class="card">
                        <img src="img/45.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title ">Soe Hok Gie : Biografi Singkat 1942-1969</h5>
                            <p class="card-text">Muhammad Rifai</p>
                            <a href="#" class="btn btn-primary btn-sm">Read &raquo;</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                    <div class="card">
                        <img src="img/46.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title ">Sir Alex Ferguson: Sebuah Biografi</h5>
                            <p class="card-text">Prilo Sekundiari</p>
                            <a href="#" class="btn btn-primary btn-sm">Read &raquo;</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                    <div class="card">
                        <img src="img/47.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title ">Aristoteles, Socrates, Plato: Sebuah Biografi</h5>
                            <p class="card-text">Aloysius G. Dinora</p>
                            <a href="#" class="btn btn-primary btn-sm">Read &raquo;</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                    <div class="card">
                        <img src="img/48.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title ">Jalaluddin Rumi: Sebuah Biografi</h5>
                            <p class="card-text">Chindi Andriyani</p>
                            <a href="#" class="btn btn-primary btn-sm">Read &raquo;</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Novel -->
            <div class="row">
                <h4 class="judul mb-4">Novel</h4>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                    <div class="card">
                        <img src="img/49.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title ">Garis Waktu : Sebuah Perjalanan Menghapus Luka</h5>
                            <p class="card-text">Fiersa Besari</p>
                            <a href="#" class="btn btn-primary btn-sm">Read &raquo;</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                    <div class="card">
                        <img src="img/50.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title ">Konspirasi Alam Semesta</h5>
                            <p class="card-text">Fiersa Besari</p>
                            <a href="#" class="btn btn-primary btn-sm">Read &raquo;</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                    <div class="card">
                        <img src="img/51.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title ">Tapak Jejak</h5>
                            <p class="card-text">Fiersa Besari</p>
                            <a href="#" class="btn btn-primary btn-sm">Read &raquo;</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                    <div class="card">
                        <img src="img/52.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title ">Arah langkah</h5>
                            <p class="card-text">Fiersa Besari</p>
                            <a href="#" class="btn btn-primary btn-sm">Read &raquo;</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                    <div class="card">
                        <img src="img/53.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title ">Catatan Juang</h5>
                            <p class="card-text">Fiersa Besari</p>
                            <a href="#" class="btn btn-primary btn-sm">Read &raquo;</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                    <div class="card">
                        <img src="img/54.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title ">11:11</h5>
                            <p class="card-text">Fiersa Besari</p>
                            <a href="#" class="btn btn-primary btn-sm">Read &raquo;</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                    <div class="card">
                        <img src="img/55.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title ">Daun Yang Jatuh Tak Pernah Membenci Angin</h5>
                            <p class="card-text">Tere Liye</p>
                            <a href="#" class="btn btn-primary btn-sm">Read &raquo;</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                    <div class="card">
                        <img src="img/56.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title ">Ada Nama Yang Abadi Di Hati Tapi Tak Bisa Dinikahi</h5>
                            <p class="card-text">Kang Maman</p>
                            <a href="#" class="btn btn-primary btn-sm">Read &raquo;</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                    <div class="card">
                        <img src="img/57.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title ">Bedebah Di Ujung Tanduk</h5>
                            <p class="card-text">Tere Liye</p>
                            <a href="#" class="btn btn-primary btn-sm">Read &raquo;</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                    <div class="card">
                        <img src="img/58.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title ">Lain Waktu: Sebuah Novel Absurd</h5>
                            <p class="card-text">Hilmi Abedillah</p>
                            <a href="#" class="btn btn-primary btn-sm">Read &raquo;</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                    <div class="card">
                        <img src="img/59.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title ">Dunia Anna (Sebuah Novel Filsafat Semesta)</h5>
                            <p class="card-text">Jostein Gaarder</p>
                            <a href="#" class="btn btn-primary btn-sm">Read &raquo;</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                    <div class="card">
                        <img src="img/60.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title ">Cinta Itu Alasan Sekaligus Tujuan</h5>
                            <p class="card-text">Kang Maman</p>
                            <a href="#" class="btn btn-primary btn-sm">Read &raquo;</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sains dan Teknologi -->
            <div class="row">
                <h4 class="judul mb-4">Sains dan Teknologi</h4>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                    <div class="card">
                        <img src="img/1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title ">Otodidak Desain dan Pemrograman Website</h5>
                            <p class="card-text">Jubilee Enterprise</p>
                            <a href="#" class="btn btn-primary btn-sm">Read &raquo;</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                    <div class="card">
                        <img src="img/2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Mikrotik Kung Fu Kitab 3 Edisi (2016)</h5>
                            <p class="card-text">Rendra Towidjojo</p>
                            <a href="#" class="btn btn-primary btn-sm">Read &raquo;</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                    <div class="card">
                        <img src="img/3.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Implementasi Algoritma Dalam Bahasa Python</h5>
                            <p class="card-text">Wendi Zarman & Mochamad Fajar Wicaksono</p>
                            <a href="#" class="btn btn-primary btn-sm">Read &raquo;</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                    <div class="card">
                        <img src="img/4.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Pemrograman Android & Database</h5>
                            <p class="card-text">Abdul Kadir</p>
                            <a href="#" class="btn btn-primary btn-sm">Read &raquo;</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                    <div class="card">
                        <img src="img/5.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Menjadi Hacker & Melawan Cracker Untuk Semua Orang + Cd</h5>
                            <p class="card-text">Ir. Yuniar Supardi</p>
                            <a href="#" class="btn btn-primary btn-sm">Read &raquo;</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                    <div class="card">
                        <img src="img/6.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Administrasi Jaringan Menggunakan Linux Ubuntu 7</h5>
                            <p class="card-text">Wahana Komputer</p>
                            <a href="#" class="btn btn-primary btn-sm">Read &raquo;</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                    <div class="card">
                        <img src="img/7.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Network Hacking Dengan Linux BackTrack</h5>
                            <p class="card-text">Wahana Komputer</p>
                            <a href="#" class="btn btn-primary btn-sm">Read &raquo;</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                    <div class="card">
                        <img src="img/8.jpeg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Komputer Forensik, Melacak Kejahatan Digital</h5>
                            <p class="card-text">Feri Sulianta</p>
                            <a href="#" class="btn btn-primary btn-sm">Read &raquo;</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                    <div class="card">
                        <img src="img/9.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Membangun Aplikasi Dengan Android Flutter +Dvd</h5>
                            <p class="card-text">Nazruddin Safaat H., M.T.</p>
                            <a href="#" class="btn btn-primary btn-sm">Read &raquo;</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                    <div class="card">
                        <img src="img/10.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Firewall Melindungi Jaringan Dari DDoS Menggunakan Linux + Mikrotik
                            </h5>
                            <p class="card-text">Harijanto Pribadi</p>
                            <a href="#" class="btn btn-primary btn-sm">Read &raquo;</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                    <div class="card">
                        <img src="img/11.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Jaringan Komputer Berbasis Mikrotik +Cd</h5>
                            <p class="card-text">Iwan Sofana</p>
                            <a href="#" class="btn btn-primary btn-sm">Read &raquo;</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                    <div class="card">
                        <img src="img/68.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Dasar Pemrograman Python 3 + Cd</h5>
                            <p class="card-text">Abdul Kadir</p>
                            <a href="#" class="btn btn-primary btn-sm">Read &raquo;</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                    <div class="card">
                        <img src="img/13.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Jquery & Ajax Untuk Web Designer +Cd</h5>
                            <p class="card-text">R.h. Sianipar</p>
                            <a href="#" class="btn btn-primary btn-sm">Read &raquo;</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                    <div class="card">
                        <img src="img/14.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Panduan Aplikatif dan Solusi: Creative Retro & Vintage Web Design
                                with Adobe Photoshop</h5>
                            <p class="card-text">Wahana Komputer</p>
                            <a href="#" class="btn btn-primary btn-sm">Read &raquo;</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                    <div class="card">
                        <img src="img/67.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Buku Mahir Web Programming</h5>
                            <p class="card-text">Ir. Yuniar Supardi, Defri Faizal Maulana S.</p>
                            <a href="#" class="btn btn-primary btn-sm">Read &raquo;</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                    <div class="card">
                        <img src="img/16.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Analisa Dan Perancangan Sistem Informasi</h5>
                            <p class="card-text">Eva Argarini Pratama,
                                Corie Mei Hellyana &
                                Sutrisno</p>
                            <a href="#" class="btn btn-primary btn-sm">Read &raquo;</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                    <div class="card">
                        <img src="img/17.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Sistem Operasi Hubungan Sistem Operasi dengan Sistem Informasi</h5>
                            <p class="card-text">Corie Mei Hellyana, S.T., M.Kom., Eva Argarini Pratama, S.Kom., M.Kom.,
                                Hidayat Muhammad Nur, M.Kom.</p>
                            <a href="#" class="btn btn-primary btn-sm">Read &raquo;</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                    <div class="card">
                        <img src="img/18.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Mobile Programming</h5>
                            <p class="card-text">Eva Argarini Pratama & Ina Maryani</p>
                            <a href="#" class="btn btn-primary btn-sm">Read &raquo;</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sejarah dan Budaya -->
            <div class="row">
                <h4 class="judul mb-4">Sejarah dan Budaya</h4>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                    <div class="card">
                        <img src="img/61.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title ">History Of Madura: Sejarah, Budaya Dan Ajaran Luhur</h5>
                            <p class="card-text">Drs.H.Muhammad Syamsuddin</p>
                            <a href="#" class="btn btn-primary btn-sm">Read &raquo;</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                    <div class="card">
                        <img src="img/62.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title ">Celt: Sejarah dan Warisan Salah Satu Budaya Tertua di Eropa</h5>
                            <p class="card-text">Martin J. Dougherty</p>
                            <a href="#" class="btn btn-primary btn-sm">Read &raquo;</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                    <div class="card">
                        <img src="img/63.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title ">Sejarah Kesultanan & Budaya Banjar</h5>
                            <p class="card-text">Sahriansyah</p>
                            <a href="#" class="btn btn-primary btn-sm">Read &raquo;</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                    <div class="card">
                        <img src="img/64.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title ">Siliwangi, Sejarah, dan Budaya Sunda Kuna</h5>
                            <p class="card-text">Agus Aris Munandar</p>
                            <a href="#" class="btn btn-primary btn-sm">Read &raquo;</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                    <div class="card">
                        <img src="img/65.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title ">Manusia Jawa Modern : Sebuah Kajian Filsafat, Budaya, Dan
                                Psikososial</h5>
                            <p class="card-text">Hadi Supeno</p>
                            <a href="#" class="btn btn-primary btn-sm">Read &raquo;</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                    <div class="card">
                        <img src="img/66.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title ">Komunikasi Antarbudaya Di Era Budaya Siber</h5>
                            <p class="card-text">Rulli Nasrullah</p>
                            <a href="#" class="btn btn-primary btn-sm">Read &raquo;</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <footer>
        <p> Perpustakaan Abhitah &copy; 2022</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>

</html>