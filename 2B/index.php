

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Universitas Surabaya</title>
    <style>
        *{
            font-family: 'Roboto', sans-serif;
        }

        body{
            /* max-width: 100%; */
            background-size: cover;
            height: 100vh;
            max-width: 1920px;
        }

        .navbar{
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 20px;
            margin: 0;
            width: 100%;
        }

        .navbar .image a img{
            width: 270px;
            padding-left: 300px;
        }

        .navbar .language{
            display: flex;
            padding-right: 450px;
            gap: 30px;
        }
        .navbar .language img{
            width: 30px;
            cursor: pointer;
        }

        .navbar .language img:hover{
            filter: brightness(70%);
        }

        .navbar .menu{
            font-size: 16px;
            display: flex;
            gap: 30px;
        }

        .navbar .menu a{
            text-decoration: none;
            color: black;
        }

        .navbar .menu a:hover{
            color: grey;
        }

        .sambutan{
            display: flex;
            padding: 20px 50px;
        }
        .sambutan .kalimat{
            padding: 50px 40px;
            align-items: center;
        }

        .sambutan .kalimat h2{
            font-size: 28px;
            padding-bottom: 20px;
        }
        .sambutan .kalimat p{
            font-size: 17px;
            color: grey;
        }
    </style>
</head>
<body>

    <!-- NAVIGATION BAR -->
    <div class="navbar">
        <div class="image">
            <a href="index.php">
                <img src="logo.png" class="logo">
            </a>
        </div>
        <div class="menu">
            <a href="" id="menu-daftar">Pendaftaran</a>
            <a href="" id="menu-program">Program Studi</a>
            <a href="" id="menu-international">International Programs</a>
            <a href="" id="menu-west">Ubaya West Campus</a>
            <a href="" id="menu-fasilitas">Fasilitas</a>
        </div>
        <div class="language">
            <img src="en.svg" id="btn-en" title="English">
            <img src="id.svg" id="btn-id" title="Indonesia">
        </div>
    </div>

    <!-- SLIDE BAR -->
    <div style="text-align: center;">
        <img src="news.png" width="60%">
    </div>

    <br><br><br><br>

    <!-- VIDEO UBAYA -->
    <div style="text-align: center;">
        <iframe width="95%" height="850" src="https://www.youtube.com/embed/wZ1c9ZGIcH4?si=0QHGQy3uMNlah0pJ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </div>
    
    <!-- PENGHARGAAN -->
    <div class="penghargaan" style="text-align: center;">
        <h1 style="text-align: center;""><strong id="award">Penghargaan</strong></h1>
        <img src="penghargaan.jpg" width="70%">
    </div>

    <br><br>

    <!-- COURSE -->
    <div class="course" style="text-align: center;">
        <h1 style="text-align: center;""><strong><i>Education</i> Partner</strong></h1>
        <img src="coursera.jpg" width="30%">
    </div>

    <!-- IMG "I AM UBAYA" -->
    <br><br><br><br><br>
    <img src="banner.jpg" width="100%" >


    <!-- <div style="text-align: center;"><img src="proud.png"></div> -->
    <!-- TESTIMONI ALUMNI -->
    <!-- <div class="testimoni" style="display:grid; grid-template-columns: 50% 40%;">
            <h1>Proud <br> Stories</h1>
            <img src="">
    </div> -->

    <!-- BERITA & ARTIKEL -->
    <br><br><br><br><br>
    <div class="artikel" style="text-align: center;">
        <h1 style="text-align: center;""><strong id="news">Berita dan Artikel</strong></h1>
        <br>
        <img src="artikel.png" width="60%">
    </div>

    <br><br><br><br><br><

    <!-- SAMBUTAN REKTOR -->
    <div class="sambutan"> 
        <div class="kalimat">
            <h2 id="title-sambutan"><strong>Sambutan Rektor</strong></h2>
            <p id="isi-sambutan">Universitas Surabaya (UBAYA) yang berdiri sejak 11 Maret 1968, telah mencapai fase lima puluh tahun (usia emas) pada tahun 2018. Sejak awal berdirinya sampai saat ini dan di masa yang akan datang, UBAYA tetap memiliki komitmen utuh untuk mengutamakan kualitas.</p>
            <button style="background-color: #242424; color:white; padding: 15px; font-size:14px"><strong>Baca Selengkapnya</strong></button>
        </div>
        <div style="text-align: right;" class="image-rektor">
            <img src="rektor.jpg">
        </div>
    </div>

    <br><br><br>
    <div style="grid-template-columns: 15% 30% 5% 10% 5% 25%; display:grid; align-items:start">
            <div style="background-color: white;"></div>
            <div style="font-size: 20px;">
                <p align="left"><img src="ubaya1.png"></p>
                <p align="justify">Universitas Surabaya (UBAYA) adalah sebuah universitas swasta di Surabaya, Jawa Timur, Indonesia. UBAYA memiliki empat buah kampus, yakni Kampus Ubaya Ngagel, Kampus Ubaya Tenggilis, Ubaya West Campus, dan Outdoor Campus di Trawas.</p>
                <span><strong style="color: red;">Contact Us</strong><br> Jl.Ngagel Jaya Selatan No. 169. <br> Surabaya 60284</span>
            </div>
            <div></div>
            <div align="left" style="font-size: 20px;">
                <p><strong style="color:brown;">About Us</strong></p>
                <p>Tentang UBAYA</p>
                <p>Pimpinan Universitas</p>
                <p>Lokasi Kampus</p>
                <br>
                <p><Strong style="color: brown;">Careers & Recruitment</Strong></p>
                <p>Fasilitas & Layanan</p>
                <p>Ubaya Medical Center (UMC)</p>
                <p>Rumah Sakit UBAYA</p>
                <p>UBAYA Training Center (UTC)</p>
                <p>Hubungan Internasional</p>
                <p>Layanan Konseling</p>
                <p>Perpustakaan</p>
                <p>UBAYA Language Center (ULC)</p>
                <p>UBAYA Guest House</p>
                <p>UBAYA Global Academy</p>
                <p>Verifikasi Alumni & Legalisir</p>
                <br>
            </div>
            <div style="background-color: white;"></div>
            <div align="left" style="font-size: 20px;">
                <p><strong style="color: brown;">Calon Mahasiswa</strong></p>
                <p>UBAYA FUTUREMAKERS</p>
                <p>Pendaftaran</p>
                <p>Pendaftaran Pascasarjana</p>
                <p>Beasiswa</p>
                <p>E-Brosur</p>
                <p>Informasi Indeks</p>
                <p>MOB</p>
                <p>International Students</p>
            </div>

    </div>
<script src="script.js"></script>
</body>
</html>