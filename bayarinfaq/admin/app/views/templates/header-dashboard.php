<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="robots" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Fillow : Fillow Saas Admin  Bootstrap 5 Template">
    <meta property="og:title" content="Fillow : Fillow Saas Admin  Bootstrap 5 Template">
    <meta property="og:description" content="Fillow : Fillow Saas Admin  Bootstrap 5 Template">
    <meta property="og:image" content="https:/fillow.dexignlab.com/xhtml/social-image.png">
    <meta name="format-detection" content="telephone=no">

    <!-- PAGE TITLE HERE -->
    <title><?= $data['judul']; ?></title>

    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/png" href="<?= BASEURL; ?>/template/images/favicon.png">
    <link href="<?= BASEURL; ?>/template/vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">
    <link href="<?= BASEURL; ?>/template/vendor/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= BASEURL; ?>/template/vendor/nouislider/nouislider.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <!-- Style css -->
    <link href="<?= BASEURL; ?>/template/css/style.css" rel="stylesheet">
    <link href="<?= BASEURL; ?>/css/style1.css" rel="stylesheet">
    <!-- Datatable -->
    <link href="<?= BASEURL; ?>/template/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
</head>

<body>
    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="lds-ripple">
            <div></div>
            <div></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="<?= BASEURL; ?>/dashboard/" class="brand-logo">
                <i class='fas fa-3x fa-mosque'></i>
                <div class="brand-title">
                    <h2 class="">Mesjid</h2>
                    <span class="brand-sub-title">Miftahul Khoer</span>
                </div>
            </a>
            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header border-bottom">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="dashboard_bar">
                                <?= $data['judul']; ?>
                            </div>
                        </div>
                        <ul class="navbar-nav header-right">
                            <li class="nav-item dropdown  header-profile">
                                <a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
                                    <img src="<?= BASEURL; ?>/template/images/logout.png" width="56" alt="">
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="<?= BASEURL; ?>/login/logout" class="dropdown-item ai-icon">
                                        <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                            <polyline points="16 17 21 12 16 7"></polyline>
                                            <line x1="21" y1="12" x2="9" y2="12"></line>
                                        </svg>
                                        <span class="ms-2">Logout </span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="dlabnav">
            <div class="dlabnav-scroll">
                <ul class="metismenu" id="menu">
                    <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                            <i class="fas fa-home"></i>
                            <span class="nav-text">Dashboard</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="<?= BASEURL; ?>/dashboard/">Dashboard </a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                            <i class="bi bi-clipboard-data"></i>
                            <span class="nav-text">Data Zakat Fitrah</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="<?= BASEURL; ?>/muzakki/index/">Muzakki</a></li>
                            <li><a href=" <?= BASEURL; ?>/mustahik/index">Mustahik</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                            <i class="bi bi-wallet2"></i>
                            <span class="nav-text">Bayar Zakat</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="<?= BASEURL; ?>/bayar_zakat/index/">Bayar Zakat</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                            <i class="bi bi-person-bounding-box"></i>
                            <span class="nav-text">Pembagian Zakat</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="<?= BASEURL; ?>/mustahik_warga/index/">Mustahik Warga</a></li>
                            <li><a href="<?= BASEURL; ?>/mustahik_lainnya/index/">Mustahik Lainnya</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                            <!-- <i class="bi bi-person-bounding-box"></i> -->
                            <i class="bi bi-archive"></i>
                            <span class="nav-text">Infaq</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="<?= BASEURL; ?>/bayar_infaq/index/">Pemasukan</a></li>
                            <li><a href="<?= BASEURL; ?>/pengeluaran_infaq/index/">Pengeluaran</a></li>
                        </ul>
                    </li>
                    </li>
                </ul>
                <div class="side-bar-profile">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <div class="side-bar-profile-img">
                            <img src="<?= BASEURL; ?>/template/images/user.jpg" alt="">
                        </div>
                        <div class="profile-info1">
                            <h4 class="fs-18 font-w500">Soeng Souy</h4>
                            <span>example@mail.com</span>
                        </div>
                        <div class="profile-button">
                            <i class="fas fa-caret-down scale5 text-light"></i>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between mb-2 progress-info">
                        <span class="fs-12"><i class="fas fa-star text-orange me-2"></i>Task Progress</span>
                        <span class="fs-12">20/45</span>
                    </div>
                    <div class="progress default-progress">
                        <div class="progress-bar bg-gradientf progress-animated" style="width: 45%; height:10px;" role="progressbar">
                            <span class="sr-only">45% Complete</span>
                        </div>
                    </div>
                </div>


            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->