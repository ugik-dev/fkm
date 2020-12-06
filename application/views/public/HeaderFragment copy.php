<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Fakultas Ilmu Kesehatan Masyarakat - Universitas Sriwijaya | <?= $title ?></title>

    <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url('assets/icon/') ?>apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url('assets/icon/') ?>favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('assets/icon/') ?>favicon-16x16.png">
    <link rel="manifest" href="<?= base_url('assets/icon/') ?>site.webmanifest?v=0.0.1">
    <link rel="mask-icon" href="<?= base_url('assets/icon/') ?>safari-pinned-tab.svg" color="#5bbad5">
    <meta name="apple-mobile-web-app-title" content="Fakultas Ilmu Kesehatan Masyarakat - Universitas Sriwijaya">
    <meta name="application-name" content="Fakultas Ilmu Kesehatan Masyarakat - Universitas Sriwijaya">
    <meta name="msapplication-TileColor" content="#00aba9">
    <meta name="theme-color" content="#ffffff">

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url('assets/') ?>css/bootstrap.min.css" rel="stylesheet">

    <!-- Animation CSS -->
    <link href="<?= base_url('assets/') ?>css/animate.css" rel="stylesheet">
    <link href="<?= base_url('assets/') ?>font-awesome/css/fontawesome5.7-all.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?= base_url('assets/') ?>css/plugins/dataTables/datatables.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/') ?>css/style.css?v=0.0.1" rel="stylesheet">
    <link href="<?= base_url('assets/') ?>css/custom.css?v=0.0.1" rel="stylesheet">
    <!-- <link href="<?= base_url('assets/') ?>css/ugikdev.css?v=0.0.1" rel="stylesheet"> -->

    <!-- Mainly scripts -->
    <script src="<?= base_url('assets/') ?>js/jquery-3.1.1.min.js"></script>
    <script src="<?= base_url('assets/') ?>js/plugins/dataTables/datatables.min.js"></script>
    <script src="<?= base_url('assets/') ?>js/plugins/popper/popper.min.js"></script>
    <script src="<?= base_url('assets/') ?>js/bootstrap.js"></script>
    <script src="<?= base_url('assets/') ?>js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="<?= base_url('assets/') ?>js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="<?= base_url('assets/') ?>js/plugins/sweetalert/sweetalert2.all.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="<?= base_url('assets/') ?>js/inspinia.js"></script>
    <script src="<?= base_url('assets/') ?>js/plugins/pace/pace.min.js"></script>
    <script src="<?= base_url('assets/') ?>js/plugins/wow/wow.min.js"></script>
    <script src="<?= base_url('assets/') ?>js/custom.js?v=0.0.2"></script>
    <!-- <style type="text/css">
        .fkmembed {
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
            font-size: 14px;
            line-height: 1.42857143;
            color: #333;
            font-family: Roboto, sans-serif;
            box-sizing: border-box;
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            border: 0;
            height: auto;
            width: auto;
            min-width: 100%;
            min-height: 100%;
        }

        .embed-home {
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
            font-size: 14px;
            line-height: 1.42857143;
            color: #333;
            font-family: Roboto, sans-serif;
            box-sizing: border-box;
            position: relative;
            display: block;
            height: -100;
            padding-top: -90;
            overflow: hidden;
            padding-bottom: 56.25%;
            height: 500px;
            background-size: cover;
            width: 100%;
        }

        .scren1 {

            -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
            font-size: 14px;
            line-height: 1.42857143;
            color: #333;
            font-family: Roboto, sans-serif;
            box-sizing: border-box;
            display: block;
            overflow: hidden;
            top: -120px;
            position: relative;
            margin-bottom: -120px;
            height: 638px;
            width: 100%;
        }


        .navbar {
            padding-top: 90;
            padding-bottom: 5px;
            border-bottom: 1px solid #e7eaec;
            border-radius: 0;
        }

        .menu-primary-container {
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
            font-size: 14px;
            line-height: 1.42857143;
            color: #333;
            font-family: Roboto, sans-serif;
            box-sizing: border-box;
        }

        .menu-primary-container ul {
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
            font-size: 14px;
            line-height: 1.42857143;
            color: #333;
            font-family: Roboto, sans-serif;
            box-sizing: border-box;
            padding-left: 0;
            list-style: none;
            margin: 0;
            float: right !important;
            margin-right: -15px;
            position: static;

        }


        .menu-primary-container ul li {
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
            font-size: 14px;
            line-height: 1.42857143;
            color: #333;
            font-family: Roboto, sans-serif;
            list-style: none;
            box-sizing: border-box;
            display: none !important;
            float: left;
            position: static;
            padding: 15px 0;

        }

        .menu-about .menu-item {
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
            font-size: 14px;
            line-height: 1.42857143;
            color: #333;
            font-family: Roboto, sans-serif;
            list-style: none;
            box-sizing: border-box;
            display: block;
            float: left;
            position: static;
            padding: 15px 0;
        }
    </style> -->
</head>
<!-- document.querySelector("#ub-header > section.navbar-main") -->

<div class="navbar-wrapper">
    <nav class="navbar navbar-default navbar-fixed-top navbar-expand-md" role="navigation">
        <div class="container">

            <a class="navbar-brand2" href="<?= base_url('') ?>#page-top">
                <img style="height: 70px;" class="navbar-brand" src="<?= base_url('assets/img/') ?>fkm_logo.png">
            </a>
            <div class="navbar-header page-scroll">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar">
                    <i class="fa fa-bars"></i>
                </button>
            </div>
            <div class="collapse navbar-collapse justify-content-end" id="navbar">
                <ul class="nav navbar-nav navbar-right" id="navbar-items">
                    <?php if (!empty($_COOKIE['lang_set']) && $_COOKIE['lang_set'] == 'en') {
                    ?>
                        <li><a class="nav-link page-scroll" href="<?= site_url('content/profile') ?>">Profile</a></li>
                        <li><a class="nav-link page-scroll" href="#news">News & Event</a></li>
                        <li><a class="nav-link page-scroll" href="#contact">Contact Us</a></li>

                        <li><a class="nav-link page-scroll" href="#in" id='lang_in'>
                                <img style="height: 15px;" src="<?= base_url('assets/img/') ?>flag-in.png">
                            </a></li>
                        <li><a class="nav-link page-scroll active" href="#en" id='lang_en'><img style="height: 15px;" src="<?= base_url('assets/img/') ?>flag-en.png">
                            </a></li>

                    <?php   } else {   ?>
                        <li><a class="nav-link page-scroll" href="#profil">Tentang Kami</a></li>
                        <li><a class="nav-link page-scroll" href="#akademik">Produk</a></li>
                        <li><a class="nav-link page-scroll" href="#administrasi">Administrasi</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class='fa fa-shopping-cart'></i> TRADING
                            </a>
                            <div class="dropdown-menu bg-primary">
                                <a class='nav-link page-scroll' style="width: 200px" href="http://mpms.kpbladababel.com/trading">PASAR BURSA LADA</a>
                                <a class='nav-link page-scroll' style="width: 200px" href="http://pss.kpbladababel.com">SHIPPING & LAPORAN</a>
                            </div>
                        </li>
                        <li><a class="nav-link page-scroll" href="#contact">Kontak</a></li>
                        <li><a class="nav-link page-scroll active" href="#in" id='lang_in'>
                                <img style="height: 15px;" src="<?= base_url('assets/img/') ?>flag-in.png">
                            </a></li>
                        <li><a class="nav-link page-scroll " href="#en" id='lang_en'><img style="height: 15px;" src="<?= base_url('assets/img/') ?>flag-en.png">
                            </a></li>

                        <?php } ?>;
                </ul>
            </div>
            <div class="col-sm-1">

            </div>
        </div>
    </nav>
</div>