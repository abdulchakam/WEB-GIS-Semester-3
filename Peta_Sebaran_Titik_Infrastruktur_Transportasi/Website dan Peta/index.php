<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap4/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap4/css/aos.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/hover.css">
    <link rel="stylesheet" href="css/hover-min.css">
    <link href="bootstrap4/css/font-awesome.min.css" rel="stylesheet">
    <link href="bootstrap4/css/font-awesome.css" rel="stylesheet">
        <script src="bootstrap4/jquery/jquery.min.js"></script>
        <script src="bootstrap4/js/popper.min.js" type="text/javascript"></script>
        <script src="bootstrap4/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="bootstrap4/js/aos.js" type="text/javascript"></script>

        <script>
        $(document).ready(function(){
              // Add smooth scrolling to all links
              $("a").on('click', function(event) {
            
                // Make sure this.hash has a value before overriding default behavior
                if (this.hash !== "") {
                  // Prevent default anchor click behavior
                  event.preventDefault();
            
                  // Store hash
                  var hash = this.hash;
            
                  // Using jQuery's animate() method to add smooth page scroll
                  // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                  $('html, body').animate({
                    scrollTop: $(hash).offset().top
                  }, 800, function(){
               
                    // Add hash (#) to URL when done scrolling (default click behavior)
                    window.location.hash = hash;
                  });
                } // End if
              });
            });

            $(window).scroll(function(){
                $('nav').toggleClass('scrolled', $(this).scrollTop() > 50);
            });

        </script>
    <title>Pemerintah Kota Surakarta</title>
</head>
<body>
<div class="home" id="home">
<div class="container-fluid col-11">
            <nav class="navbar navbar-expand-lg navbar-light nav-custom fixed-top navbar-default">
                <a class="navbar-brand" href="#"> <div class="title"><img src="images/logo.png" width="100px" class="title-image">KOTA SURAKARTA</div></a>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav ml-auto">
                        <a class="nav-item nav-link" href="#home">Beranda</a>
                        <a class="nav-item nav-link" href="#layanan">Layanan</a>
                        <a class="nav-item nav-link" href="#profil">Sejarah</a>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Informasi
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#visimisi">Visi Misi</a>
                                <a class="dropdown-item" href="#struktur">Struktur Organisasi</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Peta
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="Peta_TitikTransportasi" target="_blank">Infrastruktur Transportasi</a>
                                <a class="dropdown-item" href="Peta_TitikSpbu" target="_blank">Titik SPBU</a>
                            </div>
                        </li>
                    </div>
                </div>
            </nav>
</div>
<div class="jumbotron jumbotron-fluid mb-5">
    <div class="container">
    <h1 class="display-4">SELAMAT DATANG</h1><br>
    <h2>DI WEBSITE PEMERINTAHAN</h2>
    <h1 class="jumbotron-h1">KOTA SURAKARTA</h1>
    </div>
</div>

<div id="layanan">
<div class="container col-8 mt-5">
    <div class="row justify-content-around">
        <div class="panel col-5 mb-5" data-aos="fade-down-right">
            <img src="images/open-data.png" width="100px" class="img">
            <a href="http://data.surakarta.go.id/" target="_blank">
            <div class="panel-title">
                OPEN DATA
                <br>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
            </a>
        </div>
        <div class="panel col-5 mb-5" data-aos="fade-down-left">
            <img src="images/smart-city.png" width="100px" class="img">
            <a href="https://adbang.surakarta.go.id/" target="_blank">
            <div class="panel-title">
                PEMBANGUNAN
                <br>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
            </a>
        </div>
    </div>
    <div class="row justify-content-around">
        <div class="panel col-5 mt-5" data-aos="fade-up-right">
            <img src="images/school.png" width="100px" class="img">
            <a href="http://dinaspendidikan.surakarta.go.id/" target="_blank">
            <div class="panel-title">
                PENDIDIKAN
                <br>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
            </a>
        </div>
        <div class="panel col-5 mt-5" data-aos="fade-up-left">
            <img src="images/hospital.png" width="100px" class="img">
            <a href="http://spgdt.surakarta.go.id/" target="_blank">
            <div class="panel-title">
                KESEHATAN
                <br>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
            </a>
        </div>
    </div>
</div>
</div>
</div>
<!-- END HOME -->

<hr style="width:70%; height: 1px; background-color:#f0f0f0; opacity:0.5;">
<div class="container col-9">
    <div class="profil" id="profil">
        <h1>Sejarah Singkat Kota Surakarta</h1>
        <br>
        <div class="content">
            <img src="images/LogoKota.png" width="150px" class="logo rounded mx-auto d-block mt-4" data-aos="zoom-in-up" >
            <div class="paragraf1" data-aos="fade-up" data-aos-duration="2000">
            &emsp; &emsp; &emsp; Berbicara tentang kota Solo saat ini tidak bisa dilepaskan dengan sejarah berdirinya kota Solo  pada masa lalu. 
            <b class="textline"> Solo adalah sebuah kota di Jawa Tengah yang penduduknya lumayan padat</b>. Sebelum bernama Solo, awal mulanya nama kota ini adalah Surakarta. 
                Meski sampai sekarang pun nama Surakarta masih sering dipakai namun agak sedikit kalah populer dengan penyebutan nama Solo oleh masyarakat.
            </div>
            
            <div class="paragraf2" data-aos="fade-up" data-aos-duration="2000">
            &emsp; &emsp; &emsp; Sebelah utara kota Solo berbatasan dengan Kabupaten Karanganyar dan Boyolali, sementara di sebelah timur dan barat berbatasan dengan Kabupaten Karanganyar dan Sukoharjo, dan di sebelah selatan juga berbatasan dengan Sukoharjo.
                Adapun <b class="textline"> asal usul  berdirinya kota Solo berawal sejak Keraton Kartasura yang mengalami kerusakan parah akibat peperangan antara PB II dan Sunan Kuning pada tahu 1742 yang lebih dikenal dengan geger pecinan. 
                Sejak rusak parah PB II menunjuk para narapraja mencari tempat untuk dijadikan pusat pemerintahan kerajaan yang baru.</b>
            </div>
            
            <div class="paragraf3"  data-aos="fade-up" data-aos-duration="2000">
            &emsp; &emsp; &emsp; Para narapraja melakukan pengembaraan dan menemukan tiga desa yang menjadi kandidat yaitu Desa Kadipala, Desa Sala, dan Desa Sana Sewu, kemudian disepakati pemindahan kerajaan adalah ke Desa Sala. Desa Sala mulai padat dan menjadi sebuah kota sekitar tahun 1745, <b class="textline">sejak pusat pemerintahan berpindah dari Kartasura ke Sala yang kini disebut sebagai Keraton Surakarta Hadiningrat.</b>
                Desa Sala bermula sejak di desa itu hidup seorang Kyai bernama Sala dan juga di desa berawa ini ditumbuhi pohon sala atau pohon nila. Adapun mengapa sekarang disebut sebagai Solo dan bukan Sala adalah karena kesalahan orang-orang Eropa dalam penyebutan nama kota ini. Lidah mereka susah untuk mengucapkan kata Sala, jadi mereka menyebutnya dengan Solo. Nah, karena kebiasaan itu masyarakat di Indonesia pun mengikuti kebiasaan itu dan menyebut Sala dengan Solo. 
                Meski nama resmi kota ini adalah Surakarta, tetapi orang memang lebih suka menyebutnya dengan Solo.
            </div>
            
            <div class="paragraf4"  data-aos="fade-up" data-aos-duration="2000">
            &emsp; &emsp; &emsp; Dan nama Solo disebut-sebut lebih menjual dilihat sisi marketing.  
            <b class="textline">Nama Surakarta di deklarasikan oleh PB II hal ini terlihat pada bukti prasasti yang hingga kini masih ada.</b>
                Solo merupakan kota besar di masa lampau dikarenakan merupakan Ibukota Kasunanan Jawa, sebelum Kerajaan ini pecah menjadi 4 dikarenakan tipu daya VOC. Di solo dengan mudah bisa ditemukan bangunan megah yang bercorak kolonial, taman besar, tradisi adat Jawa yang masih terjaga hingga saat ini. 
                Pergerakan pemuda di jaman sebelum kemerdekaan pun di mulai dari Solo, seperti Sarekat Islam, Budi Utomo yang nyata kontribusinya bagi Indonesia.
            </div>
        </div>
    </div>    
</div>

<div id="visimisi">
<div class="waves">
<img src="images/001.svg" width="1349px">
</div>
    <div class="visi-misi">
        <div class="container col-10">
            <div class="row">
                <div class="container col-8 justify">
                <div data-aos="zoom-out" class="visi">
                <h1>VISI</h1>
                    “TERWUJUDNYA SURAKARTA SEBAGAI KOTA BUDAYA, MANDIRI, MAJU, DAN SEJAHTERA”
                </div>
                <div class="misi">
                    <h1 data-aos="zoom-out">MISI</h1>

                    <div class="misi1" data-aos="fade-up" data-aos-duration="1000">
                        <b class="textline">Waras:</b> Mewujudkan masyarakat yang sehat jasmani, dan rohani, dan sosial dalam lingkungan hidup yang sehat menuju masyarakat produktif, kreatif dan sejahtera serta membudayakan perilaku hidup bersih dan sehat
                    </div>
                    <div class="misi2" data-aos="fade-up" data-aos-duration="1000">
                        <b class="textline">Wasis:</b> Mewujudkan masyarakat yang cerdas, terampil, berbudi pekerti luhur, berkarakter dan berkontribusi kemajuan daya saing kota
                    </div>
                    <div class="misi3" data-aos="fade-up" data-aos-duration="1000">
                        <b class="textline">Wareg:</b> Mewujudkan masyarakat kota yang produktif mampu memenuhi kebutuhan dasar jasmani dan rohani menuju masyarakat mandiri dan partisipatif membangun kesejahteraan kota Mapan: Mewujudkan masyarakat yang tertib, aman, damai, berkeadilan, berkarakter dan berdaya saing melalui pembangunan daerah yang akuntabel (sektoral, kewilayahan, dan kependudukan) dan tata kelola pemerintahan yang efektif, bersih, responsif dan melayani
                    </div>
                    <div class="misi4" data-aos="fade-up" data-aos-duration="1000">
                        <b class="textline">Papan:</b> Mewujudkan keseimbangan kebutuhan papan serta daya dukung dan daya tampung lingkungan dengan dinamika kebutuhan pertumbuhan penduduk menuju kota berwawasan pembangunan berkelanjutan
                    </div>
                </div>
                    </div>
                <div class="container col-3">
                    <img src="images/smarcity.png" width="400px" class="img-smartcity aos-init aos-animate" data-aos="zoom-in-up">
                </div>
                
            </div>
        </div>
    </div>
</div>

<div class="struktur-organisasi" id="struktur">
    <br>
    <h1 data-aos="fade-down">BAGAN STRUKTUR ORGANISASI <br>
    BAGIAN ORGANISASI SEKRETARIAT DAERAH KOTA SURAKARTA</h1>

    <img src="images/struktur.jpg" class="rounded mx-auto d-block" data-aos="zoom-in-up">
</div>


<div class="walikota">
    <div class="container">
        <div class="row">
            <div class="col" data-aos="fade-right"
                            data-aos-offset="300"
                            data-aos-easing="ease-in-sine">
                <img src="images/walikota.png" width="150px">
            </div>
            <div class="col-8 pt-5">
            <div class="content1">
                <h3 data-aos="fade-up"
                    data-aos-duration="1000">Solo Berseri Tanpa Korupsi</h3> 
            <p data-aos="zoom-out-down">Solo Berseri Tanpa Korupsi untuk Mewujudkan Masyarakat 3 WMP (Waras, Wasis, Wareg, Mapan dan Papan) dengan membangun 5 Budhaya 
            (Budhaya Hidup Gotong Royong, Budhaya Memiliki, Budhaya Merawat, Budhaya Menjaga, Budhaya Mengamankan Kota Solo dan isinya).</p>
            </div>
            </div>
            <div class="col" data-aos="fade-left"
                            data-aos-offset="300"
                            data-aos-easing="ease-in-sine">
                <img src="images/wa-walikota.png" width="150px">
            </div>
        </div>
    </div>
</div>


<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col">
                <img src="images/LogoKota.png" width="120px" data-aos="fade-right">
            </div>
            <div class="col-6 text-center p-3">
                <h4>Pemerintah Kota Surakarta</h4>
                Dinas Komunikasi Informatika Statistik dan Persandian 
                <br>
                Jl. Jenderal Sudirman No.2 Surakarta
                <br>
                    (0271) 6792383
                <br>
                <a href="https://www.facebook.com/kotasolo/" target="_blank" class="hvr-float-shadow"><img src="images/fb.png" width="40px" class="m-2"></a> 
                <a href="https://twitter.com/pemkot_solo" target="_blank" class="hvr-float-shadow"><img src="images/twitter.png" width="40px" class="m-2"></a>
                <a href="#" class="hvr-float-shadow"><img src="images/ig.png" width="40px" class="m-2"></a> 
            </div>
            <div class="col col-image">
                <img src="images/smartcity2.png" width="300px" data-aos="fade-left">
            </div>

        </div>
    </div>
    <div class="footer-copyright">
        Copyright © 2019 Muhammad Abdul Chakam.All Rights Reserved
    </div>
    
</div>

</div>
</body>
</html>
<script>
    AOS.init({
        duration : 1200,
    })

</script>