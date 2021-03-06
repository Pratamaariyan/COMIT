<?php
require 'functions.php';

// check submit button
if (isset($_POST["submit"])) {
    //check data success or failed
    if (add($_POST) > 0) {
        echo "<script>
                alert('Registrasi member berhasil');
                document.location.href = 'index.php';
            </script>";
    } else {
        echo "<script>
                alert('Registrasi member gagal');
                document.location.href = 'index.php';
            </script>";
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>COMIT</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.png" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/themify/themify-icons.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/lightbox2/css/lightbox.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


    <style>
    html {
        scroll-behavior: smooth;
    }
    </style>
    <style>
    /* The overlay effect - lays on top of the container and over the image */

    .overlay {
        position: absolute;
        bottom: 0;
        background: rgb(0, 0, 0);
        background: rgba(0, 0, 0, 0.5);
        /* Black see-through */
        color: #f1f1f1;
        width: 100%;
        transition: .5s ease;
        opacity: 0;
        color: white;
        font-size: 20px;
        padding: 20px;
        text-align: center;
    }

    /* When you mouse over the container, fade in the overlay title */

    .container:hover .overlay {
        opacity: 1;
    }
    </style>

    <!-- Title Bar -->
    <script language='JavaScript'>
    var txt = "Community of Information Technology - ";
    var speed = 300;
    var refresh = null;

    function action() {
        document.title = txt;
        txt = txt.substring(1, txt.length) + txt.charAt(0);
        refresh = setTimeout("action()", speed);
    }
    action();
    </script>
</head>

<body class="animsition">
    <!-- Header -->
    <header>
        <!-- Header desktop -->
        <div class="wrap-menu-header gradient1 trans-0-4">
            <div class="container h-full">
                <div class="wrap_header trans-0-3">
                    <!-- Logo -->
                    <div class="logo">
                        <a href="#">
                            <img src="images/icons/Logo-1.svg" alt="Logo" data-logofixed="images/icons/Logo-2.svg">
                        </a>
                    </div>

                    <!-- Navbar -->
                    <div class="wrap_menu p-l-45 p-l-0-xl">
                        <nav class="menu">
                            <ul class="main_menu">
                                <li>
                                    <a href="#home">Home</a>
                                </li>

                                <li>
                                    <a href="#structure">Organization</a>
                                </li>

                                <li>
                                    <a href="#training">Training</a>
                                </li>

                                <li>
                                    <a href="#gallery">Gallery</a>
                                </li>

                                <li>
                                    <a href="#business">Business Partner</a>
                                </li>

                                <li>
                                    <a href="#contact">Contact</a>
                                </li>
                            </ul>
                        </nav>
                    </div>

                    <!-- Sidebar Button -->
                    <div class="p-r-20 d-sm-block d-md-none">
                        <button class="btn-show-sidebar m-l-33 trans-0-4"></button>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-------------------------------------------------------------------------------------------------------------------------------------------------->

    <!-- Sidebar -->
    <aside class="sidebar trans-0-4" id="asideModal">
        <!-- Button Hide sidebar -->
        <button class="btn-hide-sidebar ti-close color0-hov trans-0-4"><i class="fa fa-close color2"></i></button>

        <!-- - -->
        <ul class="menu-sidebar p-t-75 p-b-30">

            <li class="t-center">
                <a href="#home" class="btnsidebar flex-c-m sizebtnsidebar txt11 trans-0-4 m-l-r-auto">
                    Home
                </a>
            </li>

            <li class="t-center p-t-10">
                <a href="#structure" class="btnsidebar flex-c-m sizebtnsidebar txt11 trans-0-4 m-l-r-auto">
                    Organization
                </a>
            </li>

            <li class="t-center p-t-10">
                <a href="#training" class="btnsidebar flex-c-m sizebtnsidebar txt11 trans-0-4 m-l-r-auto">
                    Training
                </a>
            </li>

            <li class="t-center p-t-10">
                <a href="#Mentor" class="btnsidebar flex-c-m sizebtnsidebar txt11 trans-0-4 m-l-r-auto">
                    Our Mentor
                </a>
            </li>

            <li class="t-center p-t-10">
                <a href="#gallery" class="btnsidebar flex-c-m sizebtnsidebar txt11 trans-0-4 m-l-r-auto">
                    Gallery
                </a>
            </li>

            <li class="t-center p-t-10">
                <a href="#business" class="btnsidebar flex-c-m sizebtnsidebar txt11 trans-0-4 m-l-r-auto">
                    Business Partner
                </a>
            </li>

            <li class="t-center p-t-10">
                <a href="#contact" class="btnsidebar flex-c-m sizebtnsidebar txt11 trans-0-4 m-l-r-auto">
                    Contact
                </a>
            </li>

            <li class="t-center m-b-13">
                <img src="images/icons/Robocom-Sidebar.svg">
            </li>
        </ul>
    </aside>

    <!-- Jumbotron -->
    <section class="section-slide" id="home">
        <div class="item-slick1 item1-slick1 d-none d-md-block d-lg-block"
            style="background-image: url(images/photos/Home-1.jpg);">
        </div>
        <div class="item-slick1 item1-slick1 d-sm-block d-md-none"
            style="background-image: url(images/photos/Home-2.jpg);">
        </div>
    </section>

    <!-------------------------------------------------------------------------------------------------------------------------------------------------->
    <!-------------------------------------------------------------------------------------------------------------------------------------------------->

    <!-- About Us -->
    <div class="container">
        <div class="row p-t-50 p-b-30">
            <div class="col-md-6 p-t-30">
                <div class="row">
                    <div class="col-12">
                        <div class="wrap-pic-welcome size2 bo-rad-10 hov-img-zoom m-l-r-auto">
                            <img src="images/photos/About-Us.svg" alt="About Us">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 p-t-10 p-b-10 text-center">
                <div class="row">
                    <div class="col-12 p-t-150 d-none d-md-block d-lg-block"></div>
                    <div class="col-12">
                        <div class="wrap-text-welcome t-center">
                            <span class="tit2 t-center">Discover</span>
                            <h3 class="tit3 txtmobile1 t-center m-b-10 m-t-5">
                                About Us
                            </h3>
                            <!-- Button to Open the Modal -->
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Modalabout">
                                Learn More<i class="fa fa-long-arrow-right m-l-10" aria-hidden="true"></i>
                            </button>

                            <!-- The Modal -->
                            <div class="modal fade" id="Modalabout">
                                <div class="modal-dialog">
                                    <div class="modal-content">

                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                            <h4 class="modal-title">Community of Information Technology</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>

                                        <!-- Modal body -->
                                        <div class="modal-body">
                                            <p style="text-align:justify"><b>COMIT</b> (Community of Information
                                                Technology) adalah organisasi yang bergerak di bidang Teknologi
                                                Informasi di STIE – STMIK Insan Pembangunan. COMIT didirikan di kampus
                                                STIE – STMIK Insan Pembangunan pada
                                                tanggal 14 Februari 2010.
                                            </p>
                                            <h4 style="text-align:center">Tugas – Tugas Pokok COMIT :</h4>
                                            <table class="table table-striped" style="width:100%">
                                                <tbody>
                                                    <tr>
                                                        <td width="10%"
                                                            style="text-align:center vertical-align: middle">
                                                            1.</td>
                                                        <td width="90%" style="text-align:Left">Berbagi keterampilan
                                                            dengan sesama mahasiswa khususnya di bidang teknologi
                                                            informasi.
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td width="10%"
                                                            style="text-align:center vertical-align: middle">
                                                            2.</td>
                                                        <td width="90%" style="text-align:Left">Menampung dan
                                                            menyalurkan aspirasi-aspirasi dari seluruh mahasiswa/i
                                                            tentang teknologi informasi.</td>
                                                    </tr>
                                                    <tr>
                                                        <td width="10%"
                                                            style="text-align:center vertical-align: middle">
                                                            3.</td>
                                                        <td width="90%" style="text-align:Left">Sebagai wadah untuk
                                                            menyalurkan bakat mahasiswa/i dalam bidang teknologi
                                                            informasi.
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td width="10%"
                                                            style="text-align:center vertical-align: middle">
                                                            4.</td>
                                                        <td width="90%" style="text-align:Left">Menjalankan peran dan
                                                            fungsinya sebagai organisasi dalam bidang Teknologi
                                                            Informasi, baik yang bersifat Internal Perguruan Tinggi
                                                            maupun diluar Perguruan Tinggi.</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <!-- Modal footer -->
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger"
                                                data-dismiss="modal">Close</button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-------------------------------------------------------------------------------------------------------------------------------------------------->
    <!-------------------------------------------------------------------------------------------------------------------------------------------------->

    <!-- Struktur Organisasi -->
    <section id="structure">
        <div class="col-md-12">
            <div>
                <div class="wrap-pic-welcome bo-rad-10 hov-img-zoom m-l-r-auto d-none d-md-block d-lg-block">
                    <img src="images/photos/Struktur-Organisasi-1.png">
                </div>

                <div class="wrap-pic-welcome bo-rad-10 hov-img-zoom m-l-r-auto d-sm-block d-md-none">
                    <img src="images/photos/Struktur-Organisasi-2.png">
                </div>
            </div>
        </div>
    </section>

    <!-------------------------------------------------------------------------------------------------------------------------------------------------->
    <!-------------------------------------------------------------------------------------------------------------------------------------------------->

    <!-- Visi & Misi -->
    <section class="section-intro" id="Visi">
        <div class="container">
            <div class="title-section-visi t-center">
                <span class="tit3 txtmobile1">VISI</span>
            </div>
            <div class="row">
                <div class="col-md-12 p-t-5 p-b-0">
                    <div class="alert text-center  alert-primary" role="alert">
                        Melaksanakan berbagai kegiatan yang bermanfaat dan yang bernilai positif.
                    </div>
                    <div class="alert text-center  alert-primary" role="alert">
                        Menjalin kerjasama dengan berbagai pihak dalam bidang Teknologi Informasi.
                    </div>
                </div>
            </div>
            <div class="title-section-misi t-center m-b-0">
                <span class="tit3 txtmobile1">MISI</span>
            </div>
            <div class="row">
                <div class="col-md-12 p-t-5 p-b-50">
                    <div class="alert text-center alert-primary" role="alert">
                        Menghasilkan anggota COMIT yang handal dalam dunia Informasi.
                    </div>
                    <div class="alert text-center  alert-primary" role="alert">
                        Memajukan dan mengembangkan almamater.
                    </div>
                    <div class="alert text-center  alert-primary" role="alert">
                        Menjadikan organisasi COMIT, sebagai organisasi yang unggul baik secara akademis maupun non
                        akademis.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-------------------------------------------------------------------------------------------------------------------------------------------------->
    <!-------------------------------------------------------------------------------------------------------------------------------------------------->

    <!-- REGISTER MEMBER -->
    <div class="container">
        <div class="row">
            <div class="col-md-6 p-b-20">
                <div class="row">
                    <div class="col-12">
                        <div class="wrap-pic-welcome size2 bo-rad-10 hov-img-zoom m-l-r-auto">
                            <img src="images/photos/registration.svg" alt="registrasi anggota comit">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 p-t-10 p-b-50 text-center">
                <div class="row">
                    <div class="col-12 p-t-125 d-none d-md-block d-lg-block"></div>
                    <div class="col-12">
                        <div class="wrap-text-welcome t-center">
                            <span class="tit2 t-center">Join</span>
                            <h3 class="tit3 txtmobile1 t-center m-b-10 m-t-5">
                                Our Training
                            </h3>
                            <a id="myBtnRegis"
                                class="btnregist flex-c-m sizebtnregist txtbtnregist trans-0-4 m-l-r-auto">
                                Register Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- COMIT APPS -->
    <div class="container">
        <div class="row">
            <div class="col-md-6 p-b-20">
                <div class="row">
                    <div class="col-12">
                        <div class="wrap-pic-welcome size2 bo-rad-10 hov-img-zoom m-l-r-auto">
                            <img src="images/photos/Android.svg" alt="Android">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 p-t-10 p-b-50 text-center">
                <div class="row">
                    <div class="col-12 p-t-125 d-none d-md-block d-lg-block"></div>
                    <div class="col-12">
                        <div class="wrap-text-welcome t-center">
                            <span class="tit2 t-center">Get Us</span>
                            <h3 class="tit3 txtmobile1 t-center m-b-10 m-t-5">
                                On Android
                            </h3>
                            <button class="btn-primary btn3 size13 txt11 trans-0-4"
                                onclick="window.open('https://drive.google.com/open?id=1-feThChOa3rzMwXVE3dX1KfBZ_AADfTb')">
                                Download Now <i class="fa fa-long-arrow-right m-l-10" aria-hidden="true"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-------------------------------------------------------------------------------------------------------------------------------------------------->
    <!-------------------------------------------------------------------------------------------------------------------------------------------------->

    <div class="content-intro bg-white p-t-30 p-b-30" id="training">
        <div class="container">

            <div class="title-section-ourmenu t-center">
                <span class="tit2 t-center">
                    Let's Join
                </span>

                <h3 class="tit3 txtmobile1 t-center m-t-2">
                    Our Training
                </h3>
            </div>
            <div class="row">

                <!-- Computing & Network -->
                <div class="col-md-4 p-t-35">
                    <div class="blo1">
                        <div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom">
                            <img src="images/photos/Training-Network.jpg" alt="Networking">
                        </div>
                        <div class="p-t-15">
                            <h4 class="txt5 m-b-15">
                                Computing & Network
                            </h4>
                            <!-- <button type="button" href="#myModal" class="btn txt5a btn-outline-primary">
                                Join
                                <i class="fa fa-long-arrow-right m-l-10" aria-hidden="true"></i></button> -->
                        </div>
                    </div>
                </div>

                <!-- Programming -->
                <div class="col-md-4 p-t-35">
                    <div class="blo1">
                        <div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom">
                            <img src="images/photos/Training-Program.jpg" alt="Programming">
                        </div>
                        <div class="p-t-15">
                            <h4 class="txt5 m-b-15">
                                Programming
                            </h4>
                            <!-- <button type="button" class="btn txt5a btn-outline-primary" id="myBtnRegis">
                                Join
                                <i class="fa fa-long-arrow-right m-l-10" aria-hidden="true"></i></button> -->
                        </div>
                    </div>
                </div>

                <!-- Graphic Design -->
                <div class="col-md-4 p-t-35">
                    <div class="blo1">
                        <div class="bo-rad-10 pos-relative hov-img-zoom">
                            <img src="images/photos/Training-Design.jpg" alt="Graphic Design">
                        </div>
                        <div class="p-t-15">
                            <h4 class="txt5 m-b-15">
                                Graphic Design
                            </h4>
                            <!-- <button type="button" class="btn txt5a btn-outline-primary" id="myBtnRegis" onclick="MyFunction();">
                                Join
                                <i class="fa fa-long-arrow-right m-l-10" aria-hidden="true"></i></button> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-------------------------------------------------------------------------------------------------------------------------------------------------->
    <!-------------------------------------------------------------------------------------------------------------------------------------------------->

    <!-- Mentor -->
    <section class="bgwhite p-t-30 p-b-50" id="Mentor">
        <div class="container t-center">
            <span class="tit2 t-center">
                Meet Our
            </span>
            <h3 class="tit3 txtmobile1 t-center">
                Mentor
            </h3>

            <h3 class="txt5 t-center p-t-25 p-b-25">
                Computing & Network
            </h3>
            <div class="row">
                <div class="col-lg-4 p-b-30">
                    <!-- -Block1 -->
                    <div class="pos-relative p-t-60">
                        <div class="size14 bo4 wrap-cir-pic hov-img-zoom ab-c-t">
                            <img src="images/photos/Mentor-Febri.jpg" alt="img-mentor"></a>
                        </div>
                        <div class="size34 t-center bo-rad-10 bo7 p-t-200 p-l-10 p-r-10 p-b-0">
                            <span class="txt34 dis-block p-b-6">
                                Febri Suryana
                            </span>
                            <span class="dis-block t-center txt35 p-b-5">
                                IT Support
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 m-l-r-auto p-b-30">
                    <!-- -Block1 -->
                    <div class="blo5 pos-relative p-t-60">
                        <div class="pic-blo5 size14 bo4 wrap-cir-pic hov-img-zoom ab-c-t">
                            <img src="images/photos/Mentor-Fadil.jpg" alt="img-mentor"></a>
                        </div>
                        <div class="text-blo5 size34 t-center bo-rad-10 bo7 p-t-200 p-l-10 p-r-10 p-b-0">
                            <span class="txt34 dis-block p-b-6">
                                Ahmad Fadillah
                            </span>
                            <span class="dis-block t-center txt35 p-b-5">
                                CEO Vasta-Net
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 m-l-r-auto p-b-30">
                    <!-- -Block1 -->
                    <div class="blo5 pos-relative p-t-60">
                        <div class="pic-blo5 size14 bo4 wrap-cir-pic hov-img-zoom ab-c-t">
                            <img src="images/photos/Mentor-Nahrudin.jpg" alt="img-mentor"></a>
                        </div>
                        <div class="text-blo5 size34 t-center bo-rad-10 bo7 p-t-200 p-l-10 p-r-10 p-b-0">
                            <span class="txt34 dis-block p-b-6">
                                Nahrudin
                            </span>
                            <span class="dis-block t-center txt35 p-b-5">
                                CEO Meteor-Net
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container t-center">
            <h3 class="txt5 t-center m-t-25 m-b-25">
                Programming
            </h3>
            <div class="row">
                <div class="col-md-8 col-lg-4 m-l-r-auto p-b-30">
                    <!-- -Block2 -->
                    <div class="blo5 pos-relative p-t-60">
                        <div class="pic-blo5 size14 bo5 wrap-cir-pic hov-img-zoom ab-c-t">
                            <img src="images/photos/Mentor-Eko.jpg" alt="img-mentor"></a>
                        </div>
                        <div class="text-blo5 size34 t-center bo-rad-10 bo7 p-t-200 p-l-10 p-r-10 p-b-0">
                            <span class="txt34 dis-block p-b-6">
                                Eko Aulian
                            </span>
                            <span class="dis-block t-center txt35 p-b-5">
                                Web Developer IP
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-lg-4 m-l-r-auto p-b-30">
                    <!-- -Block2 -->
                    <div class="blo5 pos-relative p-t-60">
                        <div class="pic-blo5 size14 bo5 wrap-cir-pic hov-img-zoom ab-c-t">
                            <img src="images/photos/Mentor-Idham.jpg" alt="img-mentor"></a>
                        </div>
                        <div class="text-blo5 size34 t-center bo-rad-10 bo7 p-t-200 p-l-10 p-r-10 p-b-0">
                            <span class="txt34 dis-block p-b-6">
                                Idham Mubarok
                            </span>
                            <span class="dis-block t-center txt35 p-b-5">
                                Developer Daqu-Travel
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-lg-4 m-l-r-auto p-b-30">
                    <!-- -Block2 -->
                    <div class="blo5 pos-relative p-t-60">
                        <div class="pic-blo5 size14 bo5 wrap-cir-pic hov-img-zoom ab-c-t">
                            <img src="images/photos/Mentor-Rintis.jpg" alt="img-mentor"></a>
                        </div>
                        <div class="text-blo5 size34 t-center bo-rad-10 bo7 p-t-200 p-l-10 p-r-10 p-b-0">
                            <span class="txt34 dis-block p-b-6">
                                Rintis Mardika
                            </span>
                            <span class="dis-block t-center txt35 p-b-5">
                                CEO WayOut-Development
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container t-center">
            <h3 class="txt5 t-center m-t-25 m-b-25">
                Graphic Design
            </h3>
            <div class="row">
                <div class="col-md-8 col-lg-4 m-l-r-auto p-b-30">
                    <!-- -Block3 -->
                    <div class="blo5 pos-relative p-t-60">
                        <div class="pic-blo5 size14 bo6 wrap-cir-pic hov-img-zoom ab-c-t">
                            <img src="images/photos/Mentor-Akus.jpg" alt="img-mentor"></a>
                        </div>
                        <div class="text-blo5 size34 t-center bo-rad-10 bo7 p-t-200 p-l-10 p-r-10 p-b-0">
                            <span class="txt34 dis-block p-b-6">
                                Ahmad Khusaery
                            </span>
                            <span class="dis-block t-center txt35 p-b-5">
                                Freelance Designer
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-lg-4 m-l-r-auto p-b-30">
                    <!-- -Block3 -->
                    <div class="blo5 pos-relative p-t-60">
                        <div class="pic-blo5 size14 bo6 wrap-cir-pic hov-img-zoom ab-c-t">
                            <img src="images/photos/Mentor-Ariyan.jpg" alt="img-mentor"></a>
                        </div>
                        <div class="text-blo5 size34 t-center bo-rad-10 bo7 p-t-200 p-l-10 p-r-10 p-b-0">
                            <span class="txt34 dis-block p-b-6">
                                Ariyan Lukita
                            </span>
                            <span class="dis-block t-center txt35 p-b-5">
                                Graphic Designer
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-lg-4 m-l-r-auto p-b-30">
                    <!-- -Block3 -->
                    <div class="blo5 pos-relative p-t-60">
                        <div class="pic-blo5 size14 bo6 wrap-cir-pic hov-img-zoom ab-c-t">
                            <img src="images/photos/Mentor-Hidayat.jpg" alt="img-mentor"></a>
                        </div>
                        <div class="text-blo5 size34 t-center bo-rad-10 bo7 p-t-200 p-l-10 p-r-10 p-b-0">
                            <span class="txt34 dis-block p-b-6">
                                Hidayatulloh
                            </span>
                            <span class="dis-block t-center txt35 p-b-5">
                                Freelance Designer
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-------------------------------------------------------------------------------------------------------------------------------------------------->
    <!-------------------------------------------------------------------------------------------------------------------------------------------------->

    <!-- Gallery -->
    <section class="section-ourmenu bg2-pattern p-t-50 p-b-50" id="gallery">
        <div class="container">
            <div class="t-center">
                <span class="tit2 t-center">
                    Discover
                </span>

                <h3 class="tit3 txtmobile1 t-center">
                    Our Gallery
                </h3>
            </div>

            <div class="row">
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-12">
                            <div class="item-ourmenu bo-rad-10 hov-img-zoom pos-relative m-t-30">
                                <img src="images/photos/Gallery-LDKO.jpg" alt="LDKO">
                                <div class="btngallery flex-c-m txtbtngallery ab-b-r sizebtngallery">
                                    LDKO
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="row">
                        <div class="col-12">
                            <div class="item-ourmenu bo-rad-10 hov-img-zoom pos-relative m-t-30">
                                <img src="images/photos/Gallery-Network.jpg" alt="Network Training">
                                <div class="btngallery flex-c-m txtbtngallery ab-b-r sizebtngallery">
                                    Network Training
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="item-ourmenu bo-rad-10 hov-img-zoom pos-relative m-t-30">
                                <img src="images/photos/Gallery-Program.jpg" alt="Programming Training">
                                <div class="btngallery flex-c-m txtbtngallery ab-b-r sizebtngallery">
                                    Program Training
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="item-ourmenu bo-rad-10 hov-img-zoom pos-relative m-t-30">
                                <img src="images/photos/Gallery-Staff.jpg" alt="Staff">
                                <div class="btngallery flex-c-m txtbtngallery ab-b-r sizebtngallery">
                                    Staff
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="item-ourmenu bo-rad-10 hov-img-zoom pos-relative m-t-30">
                                <img src="images/photos/Gallery-Family-Gathering.jpg" alt="Family Gathering">
                                <div class="btngallery flex-c-m txtbtngallery ab-b-r sizebtngallery">
                                    Family Gathering
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="item-ourmenu bo-rad-10 hov-img-zoom pos-relative m-t-30">
                                <img src="images/photos/Gallery-Graphic.jpg" alt="Graphic Training">
                                <div class="btngallery flex-c-m txtbtngallery ab-b-r sizebtngallery">
                                    Design Training
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="item-ourmenu bo-rad-10 hov-img-zoom pos-relative m-t-30">
                        <img src="images/photos/Gallery-Donor.jpg" alt="Blood Donation">
                        <div class="btngallery flex-c-m txtbtngallery ab-b-r sizebtngallery">
                            Blood Donation
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="item-ourmenu bo-rad-10 hov-img-zoom pos-relative m-t-30">
                        <img src="images/photos/Gallery-Seminar.jpg" alt="Seminar Nasional">
                        <div class="btngallery flex-c-m txtbtngallery ab-b-r sizebtngallery">
                            National Seminar
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-------------------------------------------------------------------------------------------------------------------------------------------------->
    <!-------------------------------------------------------------------------------------------------------------------------------------------------->

    <!-- Business Partner -->

    <div class="bg-white p-t-50 p-b-50" id="business">
        <div class="container">

            <div class="title-section-ourmenu t-center m-b-22">
                <span class="tit2 t-center">
                    Visit
                </span>

                <h3 class="tit3 txtmobile1 t-center">
                    Our Business Partner
                </h3>
            </div>
            <div class="row">

                <!-- Tech Insider -->
                <div class="col-md-4 p-t-20">
                    <div class="blo1">
                        <div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom">
                            <img src="images/photos/BP-Tech-Insider.jpg" alt="Tech Insider">
                        </div>
                        <div class="p-t-15">
                            <h4 class="txt5 m-b-15">
                                Tech Insider
                            </h4>
                            <!-- <button type="button" class="btn txt5a btn-outline-primary"
                                onclick="window.open('https://www.techinsider.online')">
                                Visit
                                <i class="fa fa-long-arrow-right m-l-10" aria-hidden="true"></i>
                            </button> -->
                        </div>
                    </div>
                </div>

                <!-- Graphicom -->
                <div class="col-md-4 p-t-20">
                    <div class="blo1">
                        <div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom">
                            <img src="images/photos/BP-Graphicom.jpg" alt="Graphicom">
                        </div>
                        <div class="p-t-15">
                            <h4 class="txt5 m-b-15">
                                Graphicom
                            </h4>
                            <!-- <button type="button" class="btn txt5a btn-outline-primary" onclick="window.open('Graphicom/Graphicom.html')">
                                Visit
                                <i class="fa fa-long-arrow-right m-l-10" aria-hidden="true"></i>
                            </button> -->
                        </div>
                    </div>
                </div>

                <!-- WayOut Development -->
                <div class="col-md-4 p-t-20">
                    <div class="blo1">
                        <div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom">
                            <img src="images/photos/BP-WayOut-Development.jpg" alt="WayOut Development">
                        </div>
                        <div class="p-t-15">
                            <h4 class="txt5 m-b-15">
                                Wayout Development
                            </h4>
                            <!-- <button type="button" class="btn txt5a btn-outline-primary" onclick="window.open('http://wayout-dev.com')">
                                Visit
                                <i class="fa fa-long-arrow-right m-l-10" aria-hidden="true"></i>
                            </button> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>

    <!-------------------------------------------------------------------------------------------------------------------------------------------------->
    <!-------------------------------------------------------------------------------------------------------------------------------------------------->

    <!-- Footer -->
    <footer class="bg1" id="contact">
        <div class="container p-t-10 p-b-10">
            <div class="row">
                <div class="col-sm-6 col-md-6 p-t-30">
                    <!-- - -->
                    <h4 class="txt13 m-b-33">
                        Contact Us
                    </h4>

                    <ul class="m-b-50">
                        <li class="txt14 m-b-14">
                            <i class="fa fa-map-marker fs-16 dis-inline-block size19" aria-hidden="true"></i> Jl. Raya
                            Serang Km. 10 Pos Bitung, Kadu Jaya, Curug, Kadu Jaya, Kec. Curug, Tangerang, Banten 15810
                        </li>

                        <li class="txt14 m-b-14">
                            <i class="fa fa-phone fs-16 dis-inline-block size19" aria-hidden="true"></i> 0813-1456-6393
                        </li>

                        <li class="txt14 m-b-14">
                            <i class="fa fa-envelope fs-13 dis-inline-block size19" aria-hidden="true"></i>
                            comitinsan@gmail.com
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="end-footer bgfooter">
            <div class="container">
                <div class="flex-sb-m flex-w p-t-15">
                    <div class="p-t-5 p-b-5">
                        <a href="https://www.instagram.com/comit.ipem/?hl=id" target="_blank" class="fs-15 c-white"><i
                                class="fa fa-instagram" aria-hidden="true"></i></a>
                        <a href="#" onclick="return false;" class="fs-15 c-white"><i class="fa fa-facebook m-l-18"
                                aria-hidden="true"></i></a>
                        <a href="#" onclick="return false;" class="fs-15 c-white"><i class="fa fa-twitter m-l-18"
                                aria-hidden="true"></i></a>
                    </div>

                    <div class="txt17 p-t-0 p-b-5">
                        Copyright &copy;
                        <script>
                        document.write(new Date().getFullYear());
                        </script>
                        All rights reserved | Community of Information Technology <img
                            src="images/icons/Robocom-Footer.svg">
                    </div>
                </div>
            </div>
        </div>
    </footer>




    <div class="modal fade" id="myModal">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Registration</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <div class="container register">
                        <div class="row">
                            <div class="col-md-3 register-left">
                                <img src="images/icons/Robocom.svg" alt="Robocom" />
                                <h5>Community of Information Technology</h5>
                                <p>Salam Teknologi !</p>
                            </div>
                            <div class="col-md-9 register-right">
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="home" role="tabpanel"
                                        aria-labelledby="home-tab">
                                        <h3 class="register-heading title-register">Registrasi Anggota COMIT</h3>
                                        <div class="row register-form">
                                            <div class="col-md-6">
                                                <form action="" method="post" enctype="multipart/form-data">
                                                    <div class="form-group">
                                                        <input type="text" name="name" class="form-control"
                                                            placeholder="Nama Lengkap" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="number" name="npm" class="form-control"
                                                            placeholder="NPM" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" name="place_of_birth" class="form-control"
                                                            placeholder="Tempat Lahir" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="date" name="date_of_birth" class="form-control"
                                                            placeholder="Tanggal Lahir" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <select name="major" class="form-control" required>
                                                            <option class="hidden" selected disabled>Jurusan
                                                            </option>
                                                            <option>Sistem Informasi</option>
                                                            <option>Teknik Informatika</option>
                                                            <option>Manajemen</option>
                                                            <option>Akuntansi</option>
                                                            <option>Sistem Informasi Akuntansi</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <select name="semester" class="form-control" required>
                                                            <option class="hidden" selected disabled>Semester
                                                            </option>
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                            <option>6</option>
                                                            <option>7</option>
                                                            <option>8</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="maxl">
                                                            <label class="radio inline">
                                                                <input type="radio" name="gender" value="L">
                                                                <span> Laki-laki </span>
                                                            </label>
                                                            <label class="radio inline">
                                                                <input type="radio" name="gender" value="P">
                                                                <span> Perempuan</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="email" name="email" class="form-control"
                                                        placeholder="Email" required>
                                                </div>
                                                <div class="form-group">
                                                    <input type="number" name="whatsapp" minlength="10" maxlength="13"
                                                        class="form-control" placeholder="No HP (WA Aktif)" required>
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" name="address" class="form-control"
                                                        placeholder="Alamat" required>
                                                </div>
                                                <div class="form-group">
                                                    <select name="uniform_size" class="form-control" required>
                                                        <option class="hidden" selected disabled>Ukuran Seragam
                                                        </option>
                                                        <option>S</option>
                                                        <option>M</option>
                                                        <option>L</option>
                                                        <option>XL</option>
                                                        <option>XXL</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <select name="skill" class="form-control" required>
                                                        <option class="hidden" selected disabled>Skill yang dikuasai
                                                        </option>
                                                        <option>Networking</option>
                                                        <option>Programming</option>
                                                        <option>Graphic Design</option>
                                                        <option>Vidio Editing</option>
                                                        <option>Animation</option>
                                                        <option>Hardware</option>
                                                        <option>Belum Ada</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <input type="file" name="image" class="form-control"
                                                        placeholder="Upload gambar">
                                                </div>

                                                <button type="submit" name="submit"
                                                    class="btn btn-primary">Register</button>

                                            </div>
                                            </form>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>

    <!-- Back to top button -->
    <div class="btn-back-to-top bg0-hov" id="myBtn">
        <span class="symbol-btn-back-to-top">
            <i class="fa fa-angle-double-up" aria-hidden="true"></i>
        </span>
    </div>

    <script>
    $(document).ready(function() {
        $("#myBtnRegis").click(function MyFunction() {
            var element = document.getElementById("asideModal");
            element.classList.remove("show-sidebar");

            $("#myModal").modal('show');
        });
    });
    </script>

    <!--===============================================================================================-->
    <script type="text/javascript" src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="vendor/bootstrap/js/popper.js"></script>
    <script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="vendor/daterangepicker/moment.min.js"></script>
    <script type="text/javascript" src="vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="vendor/slick/slick.min.js"></script>
    <script type="text/javascript" src="js/slick-custom.js"></script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="vendor/lightbox2/js/lightbox.min.js"></script>
    <!--===============================================================================================-->
    <script src="js/main.js"></script>
    <script>
    $(function() {
        $("#datepicker").datepicker();
    });
    </script>

</body>

</html>