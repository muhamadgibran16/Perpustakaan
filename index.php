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
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <title>Perpustakaan Abhitah</title>
</head>

<body id="home">
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
                            <li><a class="dropdown-item" href="#populer">Buku Populer</a></li>
                            <li><a class="dropdown-item" href="#rekomendasi">Buku Rekomendasi</a></li>
                            <li><a class="dropdown-item" href="katalog.php">Koleksi Buku</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#berita"><i class="fa-solid fa-newspaper me-2"></i>Berita</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#anggota"><i
                                class="fa-solid fa-user-group  me-2"></i>Anggota</a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link active" href="#about"><i
                                class="fa-solid fa-circle-question me-2"></i>About</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-outline-light btn-md" href="login.php?loginperpustakaan">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- main content -->
    <section class="main text-center">
        <div class="container pt-5 pb-5" data-aos="zoom-out">
            <h2 class="display-6"><b>Selamat Datang di</b></h2>
            <h2 class="display-3"><b>Perpustakaan Abhitah</b></h2>
            <hr class="my-4">
            <p data-aos="zoom-in">Klik untuk Layanan dan Informasi</p>
            <a class="btn btn-primary btn-md" href="#layanan" role="button" data-aos="zoom-in">Cek Layanan</a>
        </div>
    </section>

    <!--Layanan-->
    <div class="container-fluid pt-5 pb-5" id="layanan">
        <div class="container pb-5 layanan">
            <div class="row text-center">
                <div class="col mb-5">
                    <h2 class="display-6 mt-5 mb-5">Layanan & Informasi</h2>
                </div>
            </div>
            <div class="row text-center justify-content-center">
                <div class="col-sm-3 col-6 mb-4">
                    <a href="katalog.php?php"><span class="circle">
                            <i class="fa-solid fa-book fa-2x mb-4"></i>
                        </span></a>
                    <h5 class="mt-3 text-semibold">Katalog Buku</h5>
                </div>
                <div class="col-sm-3 col-6 mb-4">
                    <a href="login.php?loginaanggota"><span class="circle">
                            <i class="fas fa-users  fa-2x mb-4"></i>
                        </span></a>
                    <h5 class="mt-3 text-semibold">Keanggotaan</h5>
                </div>
                <div class="col-sm-3 col-6 mb-4">
                    <a href="#berita"><span class="circle">
                            <i class="fa-solid fa-newspaper fa-2x mb-4"></i>
                        </span></a>
                    <h5 class="mt-3 text-semibold">Berita</h5>
                </div>
                <div class="col-sm-3 col-6 mb-4">
                    <a href="#about"><span class="circle">
                            <i class="fa-regular fa-circle-question fa-2x mb-4"></i>
                        </span></a>
                    <h5 class="mt-3 text-semibold">About</h5>
                </div>
            </div>
        </div>
    </div>

    <!-- buku -->
    <div class="container-fluid pt-5 pb-5" id="rekomendasi">
        <div class="container buku shadow p-2 px-5 py-5">
            <div class="row pt-3">
                <div class="col">
                    <h4 class="display-6 text-center mt-3">Buku Rekomendasi</h4>
                </div>
            </div>
            <hr class="featurette-divider">

            <div class="row featurette mt-5 mb-5">
                <div class="col-lg-2">
                    <img src="img/68.jpg" alt="..." class="img-fluid poster mb-3">
                </div>
                <div class="col-lg-10">
                    <h2 class="featurette-heading mb-3">Dasar Pemrograman Python 3 + Cd<p class="text-muted penulis">
                            Abdul Kadir</p>
                    </h2>
                    <p class="lead">Selain penjelasan teoritis yang superpanjang, Anda juga bisa belajar dari
                        contoh-contoh sederhana. Hal inilah yang menjadi keunggulan utama dari buku Dasar Pemrograman
                        Python 3. Dengan demikian, bahasa pemrograman Python menjadi dapat dikuasai oleh siapa saja.

                        Buku ini memuat berbagai topik, seperti pembuatan kelas dan obyek penanganan file, penanganan
                        eksepsi, instalasi interpreter Python, dan masih banyak lagi. Selain itu, produk ini juga
                        dilengkapi dengan CD sehingga proses belajar makin interaktif. <a href="#">Read More &raquo;</a>
                    </p>
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette mt-5 mb-5">
                <div class="col-lg-2 order-md-2">
                    <img src="img/18.jpg" alt="..." class="img-fluid poster mb-3">
                </div>
                <div class="col-lg-10 order-md-1">
                    <h2 class="featurette-heading mb-3">Mobile Programming (Membuat Aplikasi Android Sederhana dengan
                        Mudah)
                        <p class="text-muted penulis">Eva Argarini Pratama & Ina Maryani</p>
                    </h2>
                    <p class="lead">Buku ini secara proaktif mengakomodir kebuuhan akan pemula yang ingin mempelajari
                        tentang pembuatan aplikasi
                        berbasis android.
                        Dengan adanya buku ini diharapkan akan dapat memberikan pandangan yang berbeda dalam mempelajari
                        pembuatan aplikasi android, karena di dalam buku ini akan dibahas mengenai teori-teori dasar
                        dari android, peralatan dan perlengkapan pendukung dalam pembuatan aplikasi android, serta
                        contoh langsung dari kasus pembuatan aplikasi android secara sederhana.
                        <a href="#">Read More &raquo;</a>
                    </p>
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette mt-5 mb-5">
                <div class="col-lg-2">
                    <img src="img/67.jpg" alt="..." class="img-fluid poster mb-3">
                </div>
                <div class="col-lg-10">
                    <h2 class="featurette-heading mb-3">Buku Mahir Web Programming
                        <p class="text-muted penulis">Ir. Yuniar Supardi, Defri Faizal Maulana S.</p>
                    </h2>
                    <p class="lead">PHP adalah bahasa pemrograman dasar yang wajib dikuasai oleh tiap programmer.
                        Melalui buku Mahir Web Programming, penulis berusaha membantu pembaca untuk menguasai cara
                        pembuatan web dengan bahasa pemrograman PHP. Anda tidak perlu takut akan sakit kepala saat
                        membaca buku ini karena penjelasannya mudah untuk dicerna.

                        Selain untuk belajar otodidak, buku ini juga disarankan untuk bacaan pendamping mahasiswa IT.
                        Dengan membaca buku ini, Anda bisa mengenal aplikasi web yang dinamis dan bagaimana cara
                        membuatnya. <a href="#">Read More &raquo;</a></p>
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette mt-5 mb-5">
                <div class="col-lg-2 order-md-2">
                    <img src="img/11.jpg" alt="..." class="img-fluid poster mb-3">
                </div>
                <div class="col-lg-10 order-md-1">
                    <h2 class="featurette-heading mb-3">Jaringan Komputer Berbasis Mikrotik +Cd
                        <p class="text-muted penulis">Iwan Sofana</p>
                    </h2>
                    <p class="lead">Perangkat Mikrotik saat ini sudah menjadi primadona di kalangan praktisi janngan
                        komputer, khususnya di Indonesia. Selain handal, tidak kalah dibandingkan perangkat buatan
                        vendor lain, harganya pun cukup terjangkau Bahkan sistem operasi RouterOS yang merupakan sistem
                        operasi bagi Mikrotik router dapat di download dan digunakan secara gratis selama 24 jam. Hal
                        ini tentunya merupakan berita bagus bagi pengguna yang ingin belajar dan mengenal RouterOS.
                        <a href="#">Read More &raquo;</a>
                    </p>
                </div>
            </div>

            <hr class="featurette-divider">

        </div>
    </div>
    <div class="container-fluid pb-5" id="populer">
        <div class="container buku shadow p-2 px-5 py-5">
            <div class="row">
                <div class="col">
                    <h4 class="display-6 text-center mt-3">Buku Terpopuler</h4>
                </div>
            </div>
            <hr class="featurette-divider">

            <div class="row featurette mt-5 mb-5">
                <div class="col-lg-2">
                    <img src="img/49.jpg" alt="..." class="img-fluid poster mb-3">
                </div>
                <div class="col-lg-10">
                    <h2 class="featurette-heading mb-3">Garis Waktu "Sebuah Perjalanan Menghapus Luka"<p
                            class="text-muted penulis">Fiersa Besari</p>
                    </h2>
                    <p class="lead">Pada sebuah garis waktu yang merangkak maju, akan ada saatnya kau bertemu dengan
                        satu orang yang mengubah hidupmu untuk selamanya.
                        Pada sebuah garis waktu yang merangkak maju, akan ada saatnya kau terluka dan kehilangan
                        pegangan.
                        Pada sebuah garis waktu yang merangkak maju, akan ada saatnya kau ingin melompat mundur pada
                        titik-titik kenangan tertentu.
                        Maka, ikhlaskan saja kalau begitu. Karena sesungguhnya, yang lebih menyakitkan dari melepaskan
                        sesuatu adalah berpegangan pada sesuatu yang menyakitimu secara perlahan.. <a href="#">Read More
                            &raquo;</a>
                    </p>
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette mt-5 mb-5">
                <div class="col-lg-2 order-md-2">
                    <img src="img/33.jpg" alt="..." class="img-fluid poster mb-3">
                </div>
                <div class="col-lg-10 order-md-1">
                    <h2 class="featurette-heading mb-3">English Grammar Complete Edition Tata Bahasa Inggris Edisi
                        Lengkap
                        <p class="text-muted penulis">Drs. Rudy H., Harry W. Smith, Drs.Ahmad Subakir & Tri
                            Hastutiningsih S.S
                        </p>
                    </h2>
                    <p class="lead">Buku ini berharap memberi manfaat bagi para pembacanya yang ingin menguasai bahasa
                        inggris dengan cepat, tepat, dan benar, materi yang terkandung didalamnya berisi tentang tata
                        bahasa inggris, tensen (bentuk waktu), regular verb, irregular verb, active voic, passive voice.
                        noun, contoh soal serta penerapannya dalam kalimat memberi kemudahan dalam memahami nahasa
                        inggris dengan cepat.
                        <a href="#">Read More &raquo;</a>
                    </p>
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette mt-5 mb-5">
                <div class="col-lg-2">
                    <img src="img/67.jpg" alt="..." class="img-fluid poster mb-3">
                </div>
                <div class="col-lg-10">
                    <h2 class="featurette-heading mb-3">Buku Mahir Web Programming
                        <p class="text-muted penulis">Ir. Yuniar Supardi, Defri Faizal Maulana S.</p>
                    </h2>
                    <p class="lead">PHP adalah bahasa pemrograman dasar yang wajib dikuasai oleh tiap programmer.
                        Melalui buku Mahir Web Programming, penulis berusaha membantu pembaca untuk menguasai cara
                        pembuatan web dengan bahasa pemrograman PHP. Anda tidak perlu takut akan sakit kepala saat
                        membaca buku ini karena penjelasannya mudah untuk dicerna.

                        Selain untuk belajar otodidak, buku ini juga disarankan untuk bacaan pendamping mahasiswa IT.
                        Dengan membaca buku ini, Anda bisa mengenal aplikasi web yang dinamis dan bagaimana cara
                        membuatnya. <a href="#">Read More &raquo;</a></p>
                </div>
            </div>

            <hr class="featurette-divider">

        </div>
    </div>

    <!-- Berita -->
    <div class="container-fluid pb-5" id="berita">
        <div class="container shadow p-2 px-5 py-5" data-gsap="zoom-in">
            <div class="row">
                <div class="col">
                    <h4 class="display-6 text-center mt-3">Berita</h4>
                </div>
            </div>
            <hr class="featurette-divider">

            <div class="row mt-5 mb-5">
                <div class="col-md-4 mb-4">
                    <img src="img/berita1.png" alt=".." width="320" height="200" class="img-fluid">
                    <p class="text-muted penulis mt-2">08 June 2022</p>
                    <p class="teks"><a href="#">Perpusnas Jajaki Pertemuan Awal dengan PSB bersama ANRI dan BRIN</a>
                    </p>
                </div>
                <div class="col-md-4 mb-4">
                    <img src="img/berita3.jpeg" alt="..." width="320" height="200" class="img-fluid">
                    <p class="text-muted penulis mt-2">07 June 2022</p>
                    <p class="teks"><a href="#">UPT Perpustakaan Proklamator Bung Karno Semarakkan Bulan Bung Karno</a>
                    </p>
                </div>
                <div class="col-md-4 mb-4">
                    <img src="img/berita2.jpeg" alt="..." width="320" height="200" class="img-fluid">
                    <p class="text-muted penulis mt-2">02 June 2022</p>
                    <p class="teks"><a href="#">Kepala Perpusnas: Perpustakaan, Ruang untuk Melihat Dunia</a>
                    </p>
                </div>
                <div class="col-md-4 mb-4">
                    <img src="img/berita4.jpeg" alt="..." width="320" height="200" class="img-fluid">
                    <p class="text-muted penulis mt-2">02 June 2022</p>
                    <p class="teks"><a href="#">Bukan Lagi Sekadar Membaca, Literasi Digital Harus Jadi Pijakan untuk
                            Mencipta</a>
                    </p>
                </div>
                <div class="col-md-4 mb-4">
                    <img src="img/berita5.png" alt="..." width="320" height="200" class="img-fluid">
                    <p class="text-muted penulis mt-2">31 May 2022</p>
                    <p class="teks"><a href="#">Penyusunan Grand Design Sebagai Upaya Mewujudkan Perpustakaan yang
                            Terukur, Konsisten dan Terintegrasi</a>
                    </p>
                </div>
                <div class="col-md-4 mb-4">
                    <img src="img/berita6.jpeg" alt="..." width="320" height="200" class="img-fluid">
                    <p class="text-muted penulis mt-2">31 March 2022</p>
                    <p class="teks"><a href="#">9 Poin Rekomendasi Penting Usai Rakornas Bidang Perpustakaan 2022</a>
                    </p>
                </div>
            </div>
            <hr class="featurette-divider">
        </div>
    </div>

    <!-- anggota -->
    <div class="container-fluid pt-5 pb-5" id="anggota">
        <div class="container pt-5 pb-5 text-center">
            <h5 class="display-5">Tim Kami</h5>
            <div class="row pt-5 pb-5" data-aos="zoom-out">
                <div class="col-md-3 col-6 mb-4 text-center">
                    <img src="img/PSX_20220524_192857.jpg" alt="" class="rounded-circle mb-3 img-fluid"
                        data-aos="zoom-in">
                    <h4>Muhamad Gibran</h4>
                    <p>12210889</p>
                    <a href="https://www.facebook.com/muhamad.gibran.3192" class="social"><i
                            class="fa-brands fa-facebook-f"></i></a>
                    <a href="https://instagram.com/muhamadgibran_?igshid=YmMyMTA2M2Y=" class="social"><i
                            class="fa-brands fa-instagram"></i></a>
                    <a href="https://myaccount.google.com/u/1/?utm_source=chrome-profile-chooser&pli=1&pageId=none"
                        class="social"><i class="fa-regular fa-envelope"></i></a>
                </div>
                <div class="col-md-3 col-6 mb-4 text-center">
                    <img src="img/vani.jpg" alt="" class="rounded-circle mb-3 img-fluid" data-aos="zoom-in">
                    <h4>Vani Sidiyanto</h4>
                    <p>12210666</p>
                    <a href="https://www.facebook.com/vaniy.sidiyanto" class="social"><i
                            class="fa-brands fa-facebook-f"></i></a>
                    <a href="https://www.instagram.com/vaniiyyyy_/" class="social"><i
                            class="fa-brands fa-instagram"></i></a>
                    <a href="#" class="social"><i class="fa-regular fa-envelope"></i></a>
                </div>
                <div class="col-md-3 col-6 mb-4 text-center">
                    <img src="img/akmal.jpg" alt="" class="rounded-circle mb-3 img-fluid" data-aos="zoom-in">
                    <h4>Akmal Libachtiar</h4>
                    <p>12210771</p>
                    <a href="#" class="social"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#" class="social"><i class="fa-regular fa-envelope"></i></a>
                </div>
                <div class="col-md-3 col-6 mb-4 text-center">
                    <img src="img/fitri.jpg" alt="" class="rounded-circle mb-3 img-fluid" data-aos="zoom-in">
                    <h4>Fitriyani Rizki</h4>
                    <p>12210203</p>
                    <a href="#" class="social"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#" class="social"><i class="fa-regular fa-envelope"></i></a>
                </div>
            </div>
        </div>
    </div>

    <!--About-->
    <div class="container-fluid" id="about">
        <div class="container pt-5 pb-5">
            <div class="row">
                <div class="col-md-4">
                    <h4 class="display-6 text-semibold">Tentang Kami</h4>
                    <hr>
                    <p>Perpustakaan Abhitah menjadi wadah untuk membantu pembaca memudahkan mencari buku yang akan
                        dibaca. Kami menyediakan buku bacaan mulai dari anak-anak hingga dewasa karena membaca merupakan
                        kebutuhan dan hak untuk semua orang.
                        Kontak kami untuk kritik dan saran</p>
                </div>
                <div class="col-md-4">
                    <h4 class="display-6 text-semibold">Kontak Kami</h4>
                    <hr>
                    <p><i class="fa-solid fa-phone"></i><b> -</b></p>
                    <p><i class="fa-brands fa-facebook-f"></i><b> -</b></p>
                    <p><i class="fa-brands fa-twitter"></i><b> -</b></p>
                    <p><i class="fa-brands fa-instagram"></i><b> -</b></p>
                    <p><i class="fa-regular fa-envelope"></i><b> -</b></p>
                </div>
                <div class="col-md-4">
                    <h4 class="display-6 text-semibold">Hubungi Kami</h4>
                    <hr>
                    <div class="mb-3">
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Nama">
                    </div>
                    <div class="mb-3">
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Email">
                    </div>
                    <div class="mb-3">
                        <input type="email" class="form-control" id="exampleFormControlInput1"
                            placeholder="No. Telepon">
                    </div>
                    <div class="mb-3">
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                            placeholder="Pesan Anda"></textarea>
                    </div>
                    <button type="button" class="btn btn-primary" id="hub">Submit</button>
                </div>
            </div>
        </div>
    </div>


    <footer>
        <p> Perpustakaan Abhitah &copy; 2022 </p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <script src="https://kit.fontawesome.com/a9ab4f729a.js" crossorigin="anonymous"></script>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
    AOS.init({
        once: true,
        duration: 1000,
    });
    </script>
    <script src="js/sweetalert2.all.min.js"></script>
    <script>
    const btn = document.getElementById('hub');
    btn.addEventListener('click', function() {
        Swal.fire({
            title: 'Pendapat Anda Akan Kami Simpan?',
            showCancelButton: true,
            confirmButtonText: 'Simpan',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire('Terima Kasih telah  menghubungi kami👍', '', 'success')
            }
        })
    })
    </script>
</body>

</html>