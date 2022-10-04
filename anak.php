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
    <title>Koleksi Anak</title>
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark shadow p-3 fixed-top" style="background-color: #283593;">
        <div class="container">
            <a class="navbar-brand" href="index.php?home"><img src="img/logo5_25_174537.png" alt="..." width="30"
                    height="25" class="d-inline-block align-text-top me-2">Perpustakaan Abhitah</a>
            <button class="navbar-toggler visible" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                aria-label="Toggle navigation">
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


    <!-- Buku -->
    <div class="contaier-fluid katalog">
        <div class="container shadow p-3">
            <div class="row">
                <h4 class="text-center mb-4">Anak-anak </h4>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                    <div class="card">
                        <img src="img/19.jpg" class="card-img-top" alt="...">
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