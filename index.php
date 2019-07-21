<!DOCTYPE html>
<html lang="en">

<head>
    <title>Community of Information Technology</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
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
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="stylesheet.css">

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
                            <img src="images/icons/logo.png" alt="Logo" data-logofixed="images/icons/logo2.png">
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
                                    <a href="#Structure">Organization</a>
                                </li>

                                <li>
                                    <a href="#Training">Training</a>
                                </li>

                                <li>
                                    <a href="#Gallery">Gallery</a>
                                </li>

                                <li>
                                    <a href="#Business Partner">Business Partner</a>
                                </li>

                                <li>
                                    <a href="#Contact">Contact</a>
                                </li>
                            </ul>
                        </nav>
                    </div>

                    <!-- Social -->
                    <div class="social flex-w flex-l-m p-r-20">
                        <button class="btn-show-sidebar m-l-33 trans-0-4"></button>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Sidebar -->
    <aside class="sidebar trans-1-0 " id="asideModal">
        <!-- Button Hide sidebar -->
        <button class="btn-hide-sidebar ti-close color0-hov trans-0-4"></button>

        <!-- - -->
        <ul class="menu-sidebar p-t-95 p-b-70">

            <li class="t-center">
                <a href="#home" class="btnsidebar flex-c-m sizebtnsidebar txt11 trans-0-4 m-l-r-auto">
                    Home
                </a>
            </li>

            <li class="t-center p-t-10">
                <a href="#Structure" class="btnsidebar flex-c-m sizebtnsidebar txt11 trans-0-4 m-l-r-auto">
                    Organization
                </a>
            </li>

            <li class="t-center p-t-10">
                <a href="#Training" class="btnsidebar flex-c-m sizebtnsidebar txt11 trans-0-4 m-l-r-auto">
                    Training
                </a>
            </li>

            <li class="t-center p-t-10">
                <a href="#Gallery" class="btnsidebar flex-c-m sizebtnsidebar txt11 trans-0-4 m-l-r-auto">
                    Gallery
                </a>
            </li>

            <li class="t-center p-t-10">
                <a href="#Business Partner" class="btnsidebar flex-c-m sizebtnsidebar txt11 trans-0-4 m-l-r-auto">
                    Business Partner
                </a>
            </li>

            <li class="t-center p-t-10">
                <a href="#Contact" class="btnsidebar flex-c-m sizebtnsidebar txt11 trans-0-4 m-l-r-auto">
                    Contact
                </a>
            </li>

            <li class="t-center p-t-30">
                <!-- Button3 -->
                <a id="myBtnRegis" href="#" onclick="MyFunction();"
                    class="btnregist flex-c-m sizebtnregist txtbtnregist trans-0-4 m-l-r-auto">
                    Registrasi
                </a>
            </li>
            <br></br>
            <li class="t-center m-b-13">
                <img src="images/Robocom-Sidebar.png">
            </li>
        </ul>

        <!-- - -->
        <!-- <div class="gallery-sidebar t-center p-l-60 p-r-60 p-b-40"> -->
        <!-- - -->
        <!-- <h4 class="txt20 m-b-33">
                Gallery
            </h4> -->

        <!-- Gallery -->
        <!-- <div class="wrap-gallery-sidebar flex-w">
                <a class="item-gallery-sidebar wrap-pic-w" href="images/photo-gallery-01.jpg" data-lightbox="gallery-footer">
                    <img src="images/photo-gallery-thumb-01.jpg" alt="GALLERY">
                </a>

                <a class="item-gallery-sidebar wrap-pic-w" href="images/photo-gallery-02.jpg" data-lightbox="gallery-footer">
                    <img src="images/photo-gallery-thumb-02.jpg" alt="GALLERY">
                </a>

                <a class="item-gallery-sidebar wrap-pic-w" href="images/photo-gallery-03.jpg" data-lightbox="gallery-footer">
                    <img src="images/photo-gallery-thumb-03.jpg" alt="GALLERY">
                </a>

                <a class="item-gallery-sidebar wrap-pic-w" href="images/photo-gallery-05.jpg" data-lightbox="gallery-footer">
                    <img src="images/photo-gallery-thumb-05.jpg" alt="GALLERY">
                </a>

                <a class="item-gallery-sidebar wrap-pic-w" href="images/photo-gallery-06.jpg" data-lightbox="gallery-footer">
                    <img src="images/photo-gallery-thumb-06.jpg" alt="GALLERY">
                </a>

                <a class="item-gallery-sidebar wrap-pic-w" href="images/photo-gallery-07.jpg" data-lightbox="gallery-footer">
                    <img src="images/photo-gallery-thumb-07.jpg" alt="GALLERY">
                </a>

                <a class="item-gallery-sidebar wrap-pic-w" href="images/photo-gallery-09.jpg" data-lightbox="gallery-footer">
                    <img src="images/photo-gallery-thumb-09.jpg" alt="GALLERY">
                </a>

                <a class="item-gallery-sidebar wrap-pic-w" href="images/photo-gallery-10.jpg" data-lightbox="gallery-footer">
                    <img src="images/photo-gallery-thumb-10.jpg" alt="GALLERY">
                </a>

                <a class="item-gallery-sidebar wrap-pic-w" href="images/photo-gallery-11.jpg" data-lightbox="gallery-footer">
                    <img src="images/photo-gallery-thumb-11.jpg" alt="GALLERY">
                </a>
            </div> -->
        <!-- </div> -->
    </aside>

    <!-- Jumbotron -->
    <section class="section-slide" id="home">
        <div class="item-slick1 item1-slick1 d-none d-md-block d-lg-block"
            style="background-image: url(images/Home-1.jpg);">
        </div>
        <div class="item-slick1 item1-slick1 d-sm-block d-md-none" style="background-image: url(images/Home-2.jpg);">
        </div>
    </section>

    <!-------------------------------------------------------------------------------------------------------------------------------------------------->
    <!-------------------------------------------------------------------------------------------------------------------------------------------------->

    <!-- Struktur Organisasi -->
    <section id="Structre">
        <div class="col-md-12">
            <div class="p-t-75 p-b-50">
                <div class="wrap-pic-welcome bo-rad-10 hov-img-zoom m-l-r-auto d-none d-md-block d-lg-block">
                    <img src="images/Struktur-Organisasi-1.jpg">
                </div>

                <div class="wrap-pic-welcome bo-rad-10 hov-img-zoom m-l-r-auto d-sm-block d-md-none">
                    <img src="images/Struktur-Organisasi-2.jpg">
                </div>
            </div>
        </div>
    </section>

    <!-------------------------------------------------------------------------------------------------------------------------------------------------->
    <!-------------------------------------------------------------------------------------------------------------------------------------------------->

    <!-- Visi & Misi -->
    <section class="section-intro" id="Visi">
        <div class="container">
            <div class="title-section-visi t-center m-b-0">
                <span class="tit3 p-l-15 p-r-15">VISI</span>
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
                <span class="tit3 p-l-15 p-r-15">MISI</span>
            </div>

            <div class="row">
                <div class="col-md-12 p-t-5 p-b-0">
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

    <!-- COMIT APPS -->
    <div class="container">
        <div class="row">
            <div class="col-md-6 p-b-50">
                <div class="wrap-pic-welcome size2 bo-rad-10 hov-img-zoom m-l-r-auto">
                    <img src="images/Android.jpg" alt="Android">
                </div>
            </div>
            <div class="col-md-6 p-t-125 p-b-50 d-none d-md-block d-lg-block">
                <div class="wrap-text-welcome t-center">
                    <span class="tit2 t-center">Get Us</span>
                    <h3 class="tit3 t-center m-b-35 m-t-5">
                        On Android
                    </h3>
                    <button class="btn3 size13 txt11 trans-0-4">
                        Download Now
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-------------------------------------------------------------------------------------------------------------------------------------------------->
    <!-------------------------------------------------------------------------------------------------------------------------------------------------->

    <div class="content-intro bg-white p-t-20 p-b-50" id="Training">
        <div class="container">

            <div class="title-section-ourmenu t-center m-b-22">
                <span class="tit2 t-center">
                    Let's Join
                </span>

                <h3 class="tit5 t-center m-t-2">
                    Our Training
                </h3>
            </div>
            <div class="row">

                <!-- Computing & Network -->
                <div class="col-md-4 p-t-15">
                    <div class="blo1">
                        <div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom">
                            <img src="images/Computing.jpg" alt="Computing">
                        </div>
                        <div class="p-t-15">
                            <h4 class="txt5 m-b-15">
                                Computing & Network
                            </h4>
                            <button type="button" class="btn btn-outline-primary">
                                Join
                                <i class="fa fa-long-arrow-right m-l-10" aria-hidden="true"></i></button>
                        </div>
                    </div>
                </div>

                <!-- Programming -->
                <div class="col-md-4 p-t-15">
                    <div class="blo1">
                        <div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom">
                            <img src="images/Programming.jpg" alt="Programming">
                        </div>
                        <div class="p-t-15">
                            <h4 class="txt5 m-b-15">
                                Programming
                            </h4>
                            <button type="button" class="btn btn-outline-primary">
                                Join
                                <i class="fa fa-long-arrow-right m-l-10" aria-hidden="true"></i></button>
                        </div>
                    </div>
                </div>

                <!-- Graphic Design -->
                <div class="col-md-4 p-t-15">
                    <div class="blo1">
                        <div class="bo-rad-10 pos-relative hov-img-zoom">
                            <img src="images/Graphic-Design.jpg" alt="Graphic Design">
                        </div>
                        <div class="p-t-15">
                            <h4 class="txt5 m-b-15">
                                Graphic Design
                            </h4>
                            <button type="button" class="btn btn-outline-primary">
                                Join
                                <i class="fa fa-long-arrow-right m-l-10" aria-hidden="true"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-------------------------------------------------------------------------------------------------------------------------------------------------->
    <!-------------------------------------------------------------------------------------------------------------------------------------------------->

    <!-- Mentor -->
    <section class="bgwhite p-t-75 p-b-50">
        <div class="container t-center">
            <span class="tit2 t-center">
                Meet Our
            </span>

            <h3 class="tit5 t-center m-b-50 m-t-5">
                Mentor
            </h3>

            <h3 class="tit10 t-center m-b-25 m-t-5">
                Computing & Network
            </h3>

            <div class="row">
                <div class="col-md-8 col-lg-4 m-l-r-auto p-b-30">
                    <!-- -Block5 -->
                    <div class="pos-relative p-t-60">
                        <div class="size14 bo4 wrap-cir-pic hov-img-zoom ab-c-t">
                            <img src="images/Mentor-Febri.jpg" alt="img-mentor"></a>
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

                <div class="col-md-8 col-lg-4 m-l-r-auto p-b-30">
                    <!-- -Block5 -->
                    <div class="blo5 pos-relative p-t-60">
                        <div class="pic-blo5 size14 bo4 wrap-cir-pic hov-img-zoom ab-c-t">
                            <img src="images/Mentor-Fadil.jpg" alt="img-mentor"></a>
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

                <div class="col-md-8 col-lg-4 m-l-r-auto p-b-30">
                    <!-- -Block5 -->
                    <div class="blo5 pos-relative p-t-60">
                        <div class="pic-blo5 size14 bo4 wrap-cir-pic hov-img-zoom ab-c-t">
                            <img src="images/Mentor-Nahrudin.jpg" alt="img-mentor"></a>
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
            <h3 class="tit10 t-center m-b-25 m-t-50">
                Programming
            </h3>

            <div class="row">
                <div class="col-md-8 col-lg-4 m-l-r-auto p-b-30">
                    <!-- -Block5 -->
                    <div class="blo5 pos-relative p-t-60">
                        <div class="pic-blo5 size14 bo5 wrap-cir-pic hov-img-zoom ab-c-t">
                            <img src="images/Mentor-Eko.jpg" alt="img-mentor"></a>
                        </div>

                        <div class="text-blo5 size34 t-center bo-rad-10 bo7 p-t-200 p-l-10 p-r-10 p-b-0">
                            <span class="txt34 dis-block p-b-6">
                                Eko Aulian
                            </span>

                            <span class="dis-block t-center txt35 p-b-5">
                                IT Support
                            </span>
                        </div>
                    </div>
                </div>

                <div class="col-md-8 col-lg-4 m-l-r-auto p-b-30">
                    <!-- -Block5 -->
                    <div class="blo5 pos-relative p-t-60">
                        <div class="pic-blo5 size14 bo5 wrap-cir-pic hov-img-zoom ab-c-t">
                            <img src="images/Mentor-Idham.jpg" alt="img-mentor"></a>
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
                    <!-- -Block5 -->
                    <div class="blo5 pos-relative p-t-60">
                        <div class="pic-blo5 size14 bo5 wrap-cir-pic hov-img-zoom ab-c-t">
                            <img src="images/Mentor-Rintis.jpg" alt="img-mentor"></a>
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
            <h3 class="tit10 t-center m-b-25 m-t-50">
                Graphic Design
            </h3>

            <div class="row">
                <div class="col-md-8 col-lg-4 m-l-r-auto p-b-30">
                    <!-- -Block5 -->
                    <div class="blo5 pos-relative p-t-60">
                        <div class="pic-blo5 size14 bo6 wrap-cir-pic hov-img-zoom ab-c-t">
                            <img src="images/Mentor-Akus.jpg" alt="img-mentor"></a>
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
                    <!-- -Block5 -->
                    <div class="blo5 pos-relative p-t-60">
                        <div class="pic-blo5 size14 bo6 wrap-cir-pic hov-img-zoom ab-c-t">
                            <img src="images/Mentor-Ariyan.jpg" alt="img-mentor"></a>
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
                    <!-- -Block5 -->
                    <div class="blo5 pos-relative p-t-60">
                        <div class="pic-blo5 size14 bo6 wrap-cir-pic hov-img-zoom ab-c-t">
                            <img src="images/Mentor-Hidayat.jpg" alt="img-mentor"></a>
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
    <section class="section-ourmenu bg2-pattern p-t-30 p-b-50" id="Gallery">
        <div class="container">
            <div class="title-section-ourmenu t-center m-b-22">
                <span class="tit2 t-center">
                    Discover
                </span>

                <h3 class="tit5 t-center m-t-2">
                    Our Gallery
                </h3>
            </div>

            <div class="row">
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-12">
                            <!-- Item -->
                            <div class="item-ourmenu bo-rad-10 hov-img-zoom pos-relative m-t-30">
                                <img src="images/LDKO.jpg" alt="LDKO">

                                <!-- Button -->
                                <a href="#" class="btn2 flex-c-m txt8 ab-b-r size1" onclick="return false;">
                                    LDKO
                                </a>
                            </div>
                        </div>

                        <div class="col-12">
                            <!-- Item -->
                            <div class="item-ourmenu bo-rad-10 hov-img-zoom pos-relative m-t-30">
                                <img src="images/Staff.jpg" alt="Staff">

                                <!-- Button -->
                                <a href="#" class="btn2 flex-c-m txt8 ab-b-r size1" onclick="return false;">
                                    Staff
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="row">
                        <div class="col-12">
                            <!-- Item -->
                            <div class="item-ourmenu bo-rad-10 hov-img-zoom pos-relative m-t-30">
                                <img src="images/Network-Gallery.jpg" alt="Network Training">

                                <!-- Button -->
                                <a href="#" class="btn2 text-center flex-c-m txt8 ab-b-r size1" onclick="return false;">
                                    Network Training
                                </a>
                            </div>
                        </div>

                        <div class="col-12">
                            <!-- Item -->
                            <div class="item-ourmenu bo-rad-10 hov-img-zoom pos-relative m-t-30">
                                <img src="images/Graphic-Gallery.jpg" alt="Graphic Training">

                                <!-- Button -->
                                <a href="#" class="btn2 flex-c-m txt8 ab-b-r size1" onclick="return false;">
                                    Design Training
                                </a>
                            </div>
                        </div>

                        <div class="col-12">
                            <!-- Item -->
                            <div class="item-ourmenu bo-rad-10 hov-img-zoom pos-relative m-t-30">
                                <img src="images/Program-Gallery.jpg" alt="Programming Training">

                                <!-- Button -->
                                <a href="#" class="btn2 text-center flex-c-m txt8 ab-b-r size1" onclick="return false;">
                                    Program Training
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <!-- Item -->
                    <div class="item-ourmenu bo-rad-10 hov-img-zoom pos-relative m-t-30">
                        <img src="images/Donor-Gallery.jpg" alt="Blood Donation">

                        <!-- Button -->
                        <a href="#" class="btn2 flex-c-m txt8 ab-b-r size1" onclick="return false;">
                            Blood Donation
                        </a>
                    </div>
                </div>
                <div class="col-sm-6">
                    <!-- Item -->
                    <div class="item-ourmenu bo-rad-10 hov-img-zoom pos-relative m-t-30">
                        <img src="images/Seminar-Gallery.jpg" alt="Seminar Nasional">

                        <!-- Button -->
                        <a href="#" class="btn2 text-center flex-c-m txt8 ab-b-r size1" onclick="return false;">
                            Seminar Nasional
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-------------------------------------------------------------------------------------------------------------------------------------------------->
    <!-------------------------------------------------------------------------------------------------------------------------------------------------->

    <!-- Business Partner -->

    <div class="bg-white p-t-30 p-b-50" id="Business Partner">
        <div class="container">

            <div class="title-section-ourmenu t-center m-b-22">
                <span class="tit2 t-center">
                    Visit
                </span>

                <h3 class="tit5 t-center m-t-2">
                    Our Business Partner
                </h3>
            </div>
            <div class="row">

                <!-- Tech Insider -->
                <div class="col-md-4 p-t-30">
                    <div class="blo1">
                        <div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom">
                            <img src="images/BP-Tech-Insider.jpg" alt="Tech Insider">
                        </div>
                        <div class="p-t-15">
                            <h4 class="txt5 m-b-15">
                                Tech Insider
                            </h4>
                            <button type="button" class="btn btn-outline-primary"
                                onclick="window.open('Tech-Insider.html')">
                                Visit
                                <i class="fa fa-long-arrow-right m-l-10" aria-hidden="true"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Graphicom -->
                <div class="col-md-4 p-t-30">
                    <div class="blo1">
                        <div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom">
                            <img src="images/BP-Graphicom.jpg" alt="Graphicom">
                        </div>
                        <div class="p-t-15">
                            <h4 class="txt5 m-b-15">
                                Graphicom
                            </h4>
                            <button type="button" class="btn btn-outline-primary"
                                onclick="window.open('Graphicom.html')">
                                Visit
                                <i class="fa fa-long-arrow-right m-l-10" aria-hidden="true"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- WayOut Development -->
                <div class="col-md-4 p-t-30">
                    <div class="blo1">
                        <div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom">
                            <img src="images/BP-WayOut-Development.jpg" alt="WayOut Development">
                        </div>
                        <div class="p-t-15">
                            <h4 class="txt5 m-b-15">
                                Wayout Development
                            </h4>
                            <button type="button" class="btn btn-outline-primary"
                                onclick="window.open('http://wayout-dev.com')">
                                Visit
                                <i class="fa fa-long-arrow-right m-l-10" aria-hidden="true"></i>
                            </button>
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
    <footer class="bg1" id="Contact">
        <div class="container p-t-10 p-b-10">
            <div class="row">
                <div class="col-sm-6 col-md-6 p-t-30">
                    <!-- - -->
                    <h4 class="txt13 m-b-33">
                        Contact Us
                    </h4>

                    <ul class="m-b-50">
                        <li class="txt14 m-b-14">
                            <i class="fa fa-map-marker fs-16 dis-inline-block size19" aria-hidden="true"></i> Jl.
                            Raya Serang Km. 10 Pos Bitung, Kadu Jaya, Curug, Kadu Jaya, Kec. Curug, Tangerang,
                            Banten 15810
                        </li>

                        <li class="txt14 m-b-14">
                            <i class="fa fa-phone fs-16 dis-inline-block size19" aria-hidden="true"></i> (021)
                            59492836
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
                <div class="flex-sb-m flex-w p-t-22 ">
                    <div class="p-t-5 p-b-5">
                        <a href="#" onclick="return false;" class="fs-15 c-white"><i class="fa fa-instagram"
                                aria-hidden="true"></i></a>
                        <a href="#" onclick="return false;" class="fs-15 c-white"><i class="fa fa-facebook m-l-18"
                                aria-hidden="true"></i></a>
                        <a href="#" onclick="return false;" class="fs-15 c-white"><i class="fa fa-twitter m-l-18"
                                aria-hidden="true"></i></a>
                    </div>

                    <div class="txt17 p-r-15 p-t-5 p-b-5">
                        Copyright &copy; 2020 All rights reserved | Community of Information Technology <img
                            src="images/icons/Footer-Marquee.png" class="p-l-15">
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <!-- Back to top -->
    <div class="btn-back-to-top bg0-hov" id="myBtn">
        <span class="symbol-btn-back-to-top">
            <i class="fa fa-angle-double-up" aria-hidden="true"></i>
        </span>
    </div>

    <!-- Container Selection1 -->
    <div id="dropDownSelect1"></div>

    <!-- Modal Video 01-->
    <div class="modal fade" id="modal-video-01" tabindex="-1" role="dialog" aria-hidden="true">

        <div class="modal-dialog" role="document" data-dismiss="modal">
            <div class="close-mo-video-01 trans-0-4" data-dismiss="modal" aria-label="Close">&times;</div>

            <div class="wrap-video-mo-01">
                <div class="w-full wrap-pic-w op-0-0"><img src="images/icons/video-16-9.jpg" alt="IMG"></div>
                <div class="video-mo-01">
                    <iframe src="https://www.youtube.com/embed/5k1hSu2gdKE?rel=0&amp;showinfo=0"
                        allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>

    <div class="modal" id="myModal" style="z-index:1000000000">
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
                                <img src="images/Robocom.png" alt="Robocom" />
                                <h5>Community of Information Technology</h5>
                                <p>Salam Teknologi !</p>
                            </div>
                            <div class="col-md-9 register-right">
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="home" role="tabpanel"
                                        aria-labelledby="home-tab">
                                        <h3 class="register-heading">Registrasi Anggota COMIT</h3>
                                        <div class="row register-form">
                                            <div class="col-md-6">
                                                <form action="proses.php" method="POST">
                                                    <div class="form-group">
                                                        <input type="text" name="nama_lengkap" class="form-control"
                                                            placeholder="Nama Lengkap" value="" />
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control"
                                                            placeholder="Tempat Lahir" value="" />
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="" class="form-control" placeholder="Tanggal Lahir"
                                                            value="" />
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" placeholder="NPM "
                                                            value="" />
                                                    </div>
                                                    <div class="form-group">
                                                        <select class="form-control">
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
                                                        <select name="semester" class="form-control">
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
                                                                <input type="radio" name="gender" value="male">
                                                                <span> Laki-laki </span>
                                                            </label>
                                                            <label class="radio inline">
                                                                <input type="radio" name="gender" value="female">
                                                                <span> Perempuan</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="email" class="form-control" placeholder="Email"
                                                        value="" />
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" minlength="10" maxlength="13" name="txtEmpPhone"
                                                        class="form-control" placeholder="No HP (WA Aktif)" value="" />
                                                </div>
                                                <div class="form-group">
                                                    <select class="form-control">
                                                        <option class="hidden" selected disabled>Ukuran Seragam
                                                        </option>
                                                        <option>S</option>
                                                        <option>M</option>
                                                        <option>L</option>
                                                        <option>XL</option>
                                                        <option>XXL</option>
                                                    </select>
                                                    <!-- <div class="form-group">
                                                    <select class="form-control">
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
                                                </div> -->
                                                    <input type="submit" class="btnRegister" value="Register" />
                                                    <button type="reset" class="btnRegister">Reset</button>
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

        <script>
        $(document).ready(function() {
            $("#myBtnRegis").click(function MyFunction() {
                var element = document.getElementById("asideModal");
                element.classList.remove("show-sidebar");

                $("#myModal").modal();
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
        <script type="text/javascript" src="vendor/parallax100/parallax100.js"></script>
        <script type="text/javascript">
        $('.parallax100').parallax100();
        </script>
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