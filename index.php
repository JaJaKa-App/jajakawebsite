<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="dicoding:email" content="satriyowitjaksono2205@gmail.com">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- FONTS -->
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

    <!-- CSS SAYA -->
    <link rel="stylesheet" href="style.css">

    <title>Bogoriwisata</title>
    <link rel="icon" href="img/my.jpg" type="image/x-icon" sizes="32x32">

</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light ">
        <div class="container">
            <a class="navbar-brand" href="index.php">Bogoriwisata</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    <a class="nav-link" href="index.php">Home</a>
                    <a class="nav-link" href="wisata.html">Wisata</a>
                    <a class="nav-link" href="about.html">About</a>
                    <a class="nav-link btn btn-success" href="https://bowista.herokuapp.com/" role="button">BOTiwisata</a>

                </div>
            </div>
        </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- Jumbotron -->
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4"> <span> Bogor Kota Pariwisata </span></h1>
            <!-- <a href="" class="btn btn-primary tombol"></a> -->
        </div>
    </div>
    <!-- Akhir Jumbotron -->


    <!-- Container -->
    <div class="container">

        <!-- Info Panel-->
        <div class="row justify-content-center">
            <div class="col-10 info-panel">
                <div class="row">
                    <div class="col-lg">
                        <img src="img/indh.png" alt="" class="float-left">
                        <h4>Indah</h4>
                        <p>Keindahan Kota Bogor merupakan anugerah.</p>
                    </div>
                    <div class="col-lg">
                        <img src="img/sejk.png" alt="" class="float-left">
                        <h4>Sejuk</h4>
                        <p>Udaranya yang sejuk, menjadi kelebihan.</p>
                    </div>
                    <div class="col-lg">
                        <img src="img/nyaman.jpg" alt="" class="float-left">
                        <h4>Nyaman</h4>
                        <p>Kenyamanannya akan selalu dirindukan.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Info Panel -->

        <!-- Isi -->
        <div class="row workingspace">
            <div class="col-lg-2">
                <a href="https://kotabogor.go.id/index.php/page/detail/8/lambang-kota-bogor"><img src="img/logokotabogor.gif" alt="" class="img-fluid"></a>
            </div>
            <div class="col-lg-8">
                <h3 style="margin-top: 30px;">Kenapa Bogor ?</h3>
                <p>Karena Bogor adalah salah satu destinasi wisata yang terjangkau baik
                    dari dalam maupun luar
                    Jabodetabek, lokasinya yang tak jauh dari Ibu Kota, dan merupakan salah satu kota penyangga Ibu
                    Kota, merupakan kelebihan Bogor sebagai kota wisata.
                    <br><br>
                    Bogor, selain disebut dengan kota hujan dan kota angkot, ada juga sebutan lain, yaitu “Kota Seribu
                    Curug”.
                    <br><br>
                    Iya, selain banyak tempat wisata yang menarik di Bogor, curug tidak kalah menarik loh.
                    <br><br>
                    Apa itu Curug ? <a href="curug.html">Baca Selengkapnya...</a></p>
                <!-- <a href="">Tombol Tambahan</a> -->
            </div>
        </div>
        <!-- Akhir Isi -->


        <!-- Info Panel-->
        <div class="row justify-content-center">
            <div class="col-8 info-panel" style="margin-top: 50px;">
                <h3>PANTAU KASUS COVID-19 DI INDONESIA</h3>
                <p>Sebelum kalian memutuskan untuk pergi berwisata ke tempat yang kami rekomendasikan, alangkah baiknya kalian menyiapkan apa saja yang harus dibawa, dan apa saja yang harus dikenakan saat berada diluar rumah. <br><br>
                    Mengingat kondisi pandemi yang masih menghantui kita, maka dari itu tetap patuhi protokol kesehatan, dan tetap menggunakan masker saat berpergian, jika tempat yang kalian tuju adalah tempat wisata yang ramai, usahakan jangan berenang dan tetaplah berjaga jarak, dan jika destinasi wisata yang kalian kunjungi tidak ramai, maka jagalah kebersihan lingkungannya maupun kebersihan diri. <br><br>
                    Dan berikut ini kami sertakan update perkembangan kasus Covid Nasional,
                    <!-- dan Provinsi yang berdekatan dengan lokasi wisata yang kami rekomendasikan,  -->
                    agar menjadi pengingat.</p>


                <?php
                //api kawalcorona
                $url = file_get_contents('https://api.kawalcorona.com/indonesia/');
                $data = json_decode($url, true);



                // $urlp = file_get_contents('https://indonesia-covid-19.mathdro.id/api/provinsi/');
                // $urlp = utf8_encode($urlp);
                // $dataprov = json_decode($urlp, true);
                ?>

                <div class="row">
                    <div class="card text-white bg-warning col-lg">
                        <div class="card-header">Positif</div>
                        <div class="card-body">
                            <h5 class="card-title"><?= $data[0]['positif'] . " Orang"; ?></h5>
                        </div>
                    </div>
                    <div class="card text-white bg-success col-lg">
                        <div class="card-header">Sembuh</div>
                        <div class="card-body">
                            <h5 class="card-title"><?= $data[0]['sembuh'] . " Orang"; ?></h5>
                        </div>
                    </div>
                    <div class="card text-white bg-danger col-lg">
                        <div class="card-header">Meninggal</div>
                        <div class="card-body">
                            <h5 class="card-title"><?= $data[0]['meninggal'] . " Orang"; ?></h5>
                        </div>
                    </div>
                </div>
                <h4>Emergency Call Kota Bogor : 112</h4>
                <p><strong>Nomor Tunggal Panggilan Darurat Bogor Siaga 112</strong> dapat diakses dari telepon genggam, BEBAS PULSA 24 Jam dalam 7 Hari dan hanya dapat digunakan di area Kota Bogor saja.</p>
                <p>Kedaruratan : Darurat Medis, Kebakaran, Kecelakaan Lalu Lintas, Tawuran, Gangguan Keamanan, dan keadaan darurat lainnya.</p>
                <h4>Laporkan Pengaduan</h4>
                <p>Jika anda ingin menyampaikan Aspirasi, Kritik, dan ingin melaporkan penemuan adanya pungutan liar (PUNGLI), dan lain sebagainya, pada tempat wisata yang anda kunjungi, harap laporkan ke website <a href="https://www.lapor.go.id/instansi/pemerintah-kota-bogor">LAPOR! Kota Bogor</a></p><br>
                <h4>UNTUK FITUR LAINNYA, ANDA DAPAT MENGAKSES <a href="fitur.html">HALAMAN INI</a></h4>
            </div>
        </div>



    </div>
    <!-- End Info Panel -->

    <!-- Footer-->
    <div class="container">

        <section class="footer">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h5>"Keberanian untuk berubah ada dalam diri kita. Berani berubah menjadi lebih baik adalah
                        tantangan yang harus ditaklukan."</h5>
                    <center>
                        <p>Bima Arya || Walikota Bogor</p>
                        <blockquote class="twitter-tweet">
                            <p lang="in" dir="ltr">Keberanian untuk berubah ada dalam diri kita. Berani berubah menjadi
                                lebih baik adalah tantangan yang harus ditaklukan. Selamat malam.</p>&mdash; bima arya
                            (@BimaAryaS) <a href="https://twitter.com/BimaAryaS/status/722073073642381314?ref_src=twsrc%5Etfw">April
                                18, 2016</a>
                        </blockquote>
                        <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                    </center>
                </div>
            </div>
        </section>

        <!-- <div class="row justify-content-center footer">
            <div class="col-6 justify-content-center d-flex">
                <figure class="figure">
                    <img src="img/img2.png" class="figure-img img-fluid rounded-circle" alt="">
                    <figcaption class="figure-caption">
                        <h5>Satriyo Witjaksono</h5>
                        <span>Web Developer</span>
                    </figcaption>
                </figure>
            </div>
        </div> -->

        <div class="row footerc">
            <div class="col text-center">
                <p>2020 All Right Reserved by <a href="https://satriyowitjaksono.php.id/">Satriyo Witjaksono</a></p>
            </div>
        </div>
        <!-- Akhir Footer-->


    </div>
    <!-- Akhir Container -->



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
</body>

</html>