<!DOCTYPE html>
<html lang="en">
<!-- [Head] start -->

<head>
    <title>Star Valas</title>

    <!-- [Meta] -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description"
        content="Mantis is made using Bootstrap 5 design framework. Download the free admin template & use it for your project.">
    <meta name="keywords"
        content="Mantis, Dashboard UI Kit, Bootstrap 5, Admin Template, Admin Dashboard, CRM, CMS, Bootstrap Admin Template">
    <meta name="author" content="CodedThemes">

    <!-- [Favicon] icon -->
    <link rel="icon" href="../assets/images/favicon.svg" type="image/x-icon">

    <!-- [Google Font] Family -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700&display=swap"
        id="main-font-link">
    <!-- [Tabler Icons] https://tablericons.com -->
    <link rel="stylesheet" href="../assets/fonts/tabler-icons.min.css">
    <!-- [Feather Icons] https://feathericons.com -->
    <link rel="stylesheet" href="../assets/fonts/feather.css">
    <!-- [Font Awesome Icons] https://fontawesome.com/icons -->
    <link rel="stylesheet" href="../assets/fonts/fontawesome.css">
    <!-- [Material Icons] https://fonts.google.com/icons -->
    <link rel="stylesheet" href="../assets/fonts/material.css">
    <!-- [Template CSS Files] -->
    <link rel="stylesheet" href="../assets/css/style.css" id="main-style-link">
    <link rel="stylesheet" href="../assets/css/style-preset.css">

</head>
<!-- [Head] end -->
<!-- [Body] Start -->

<body>
    <!-- [ Pre-loader ] start -->
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>
    <!-- [ Pre-loader ] End -->

    @if (!Route::is('login'))
        <!-- [ Sidebar Menu ] start -->
        <nav class="pc-sidebar">
            <div class="navbar-wrapper">
                <div class="m-header">
                    <a href="../dashboard/index.html" class="b-brand text-primary">
                        <!-- ========   Change your logo from here   ============ -->
                        <img src="../assets/images/logo-icon.png" class="img-fluid logo-lg" alt="logo">
                    </a>
                </div>
                <div class="navbar-content">
                    <ul class="pc-navbar">
                        <li class="pc-item">
                            <a href="/dashboard" class="pc-link">
                                <span class="pc-micon"><i class="fa fa-home"></i></span>
                                <span class="pc-mtext">Dashboard</span>
                            </a>
                        </li>

                        <li class="pc-item pc-hasmenu">
                            <a href="#!" class="pc-link">
                                <span class="pc-micon"><i class="fa fa-cube"></i></span>
                                <span class="pc-mtext">Setup</span>
                                <span class="pc-arrow"><i data-feather="chevron-right"></i></span>
                            </a>
                            <ul class="pc-submenu">
                                <li class="pc-item"><a class="pc-link" href="#!">Currency</a></li>
                                <li class="pc-item"><a class="pc-link" href="#!">Setup Rate</a></li>
                                <li class="pc-item"><a class="pc-link" href="#!">Display Rate Ke Layar</a></li>
                                <li class="pc-item"><a class="pc-link" href="#!">Tujuan Transaksi</a></li>
                                <li class="pc-item"><a class="pc-link" href="#!">Sumber Dana</a></li>
                                <li class="pc-item"><a class="pc-link" href="#!">Gudang</a></li>
                                <li class="pc-item"><a class="pc-link" href="#!">Admin / Kasir</a></li>
                                <li class="pc-item"><a class="pc-link" href="#!">Group Client</a></li>
                                <li class="pc-item"><a class="pc-link" href="#!">Client</a></li>
                                <li class="pc-item"><a class="pc-link" href="#!">Laporan Client</a></li>
                            </ul>
                        </li>

                        <!-- MODULE MC -->
                        <li class="pc-item pc-hasmenu">
                            <a href="#!" class="pc-link">
                                <span class="pc-micon"><i class="fa fa-money-bill"></i></span>
                                <span class="pc-mtext">MC</span>
                                <span class="pc-arrow"><i data-feather="chevron-right"></i></span>
                            </a>
                            <ul class="pc-submenu">
                        </li>
                                <li class="pc-item"><a class="pc-link" href="/cms/buying">Buying</a></li>
                                <li class="pc-item"><a class="pc-link" href="/cms/selling">Selling</a></li>
                                <li class="pc-item"><a class="pc-link" href="">Transfer Stok</a></li>
                                <li class="pc-item"><a class="pc-link" href="#!">View Hapus Transaksi</a></li>
                                <li class="pc-item"><a class="pc-link" href="#!">Laporan Buying</a></li>
                                <li class="pc-item"><a class="pc-link" href="#!">Rekap Buying</a></li>
                                <li class="pc-item"><a class="pc-link" href="#!">Laporan Selling</a></li>
                                <li class="pc-item"><a class="pc-link" href="#!">Rekap Selling</a></li>
                                <li class="pc-item"><a class="pc-link" href="#!">Laporan Penjualan Gabungan</a>
                                </li>
                                <li class="pc-item"><a class="pc-link" href="#!">Rekap Transfer Stock</a></li>
                                <li class="pc-item"><a class="pc-link" href="#!">Laporan Stok Awal</a></li>
                                <li class="pc-item"><a class="pc-link" href="#!">Laporan Stok Akhir</a></li>
                                <li class="pc-item"><a class="pc-link" href="#!">Kartu Stok</a></li>
                                <li class="pc-item"><a class="pc-link" href="#!">Mutasi Stok</a></li>
                                <li class="pc-item"><a class="pc-link" href="#!">Laporan Laba / Rugi</a></li>
                                <li class="pc-item"><a class="pc-link" href="#!">Laporan Rekap Laba / Rugi</a>
                                </li>
                            </ul>
                        </li>
                        
                        <!-- MODULE KEUANGAN -->
                        <li class="pc-item pc-hasmenu">
                            <a href="#!" class="pc-link">
                                <span class="pc-micon"><i class="fa fa-university"></i></span>
                                <span class="pc-mtext">Keuangan</span>
                                <span class="pc-arrow"><i data-feather="chevron-right"></i></span>
                            </a>
                            <ul class="pc-submenu">
                                <li class="pc-item"><a class="pc-link" href="#!">Tipe Bayar</a></li>
                                <li class="pc-item"><a class="pc-link" href="#!">Pembayaran Buying</a></li>
                                <li class="pc-item"><a class="pc-link" href="#!">Pembayaran Selling</a></li>
                                <li class="pc-item"><a class="pc-link" href="#!">Laporan Kas Harian</a></li>
                                <li class="pc-item"><a class="pc-link" href="#!">Laporan Hutang</a></li>
                                <li class="pc-item"><a class="pc-link" href="#!">Rekapitulasi Hutang</a></li>
                                <li class="pc-item"><a class="pc-link" href="#!">Laporan Pembayaran</a></li>
                                <li class="pc-item"><a class="pc-link" href="#!">Laporan Piutang</a></li>
                                <li class="pc-item"><a class="pc-link" href="#!">Rekapitulasi Piutang</a></li>
                                <li class="pc-item"><a class="pc-link" href="#!">Laporan Penerimaan</a></li>
                                <li class="pc-item"><a class="pc-link" href="#!">Rekapitulasi Pembayaran Buy
                                        Sell</a></li>
                            </ul>
                        </li>

                        <!-- MODULE AKUNTING -->
                        <li class="pc-item pc-hasmenu">
                            <a href="#!" class="pc-link">
                                <span class="pc-micon"><i class="fa fa-book"></i></span>
                                <span class="pc-mtext">Akunting</span>
                                <span class="pc-arrow"><i data-feather="chevron-right"></i></span>
                            </a>
                            <ul class="pc-submenu">
                                <li class="pc-item"><a class="pc-link" href="#!">Kode Perkiraan</a></li>
                                <li class="pc-item"><a class="pc-link" href="#!">Penerimaan Kas / Bank</a></li>
                                <li class="pc-item"><a class="pc-link" href="#!">Pembayaran Kas / Bank</a></li>
                                <li class="pc-item"><a class="pc-link" href="#!">Jurnal Umum</a></li>
                                <li class="pc-item"><a class="pc-link" href="#!">Adjustment</a></li>
                                <li class="pc-item"><a class="pc-link" href="#!">Jurnal Trading</a></li>
                                <li class="pc-item"><a class="pc-link" href="#!">Aktiva Tetap</a></li>
                                <li class="pc-item"><a class="pc-link" href="#!">Laporan Jurnal</a></li>
                                <li class="pc-item"><a class="pc-link" href="#!">Laporan Buku Besar</a></li>
                                <li class="pc-item"><a class="pc-link" href="#!">Laporan Neraca Percobaan</a>
                                </li>
                                <li class="pc-item"><a class="pc-link" href="#!">Laporan Laba Rugi Bersih</a>
                                </li>
                                <li class="pc-item"><a class="pc-link" href="#!">Laporan Neraca</a></li>
                                <li class="pc-item"><a class="pc-link" href="#!">Laporan Aktiva Tetap</a></li>
                                <li class="pc-item"><a class="pc-link" href="#!">Jurnal Posting</a></li>
                            </ul>
                        </li>

                        <!-- MODULE BI - PPATK -->
                        <li class="pc-item pc-hasmenu">
                            <a href="#!" class="pc-link">
                                <span class="pc-micon"><i class="fa fa-file"></i></span>
                                <span class="pc-mtext">BI - PPATK</span>
                                <span class="pc-arrow"><i data-feather="chevron-right"></i></span>
                            </a>
                            <ul class="pc-submenu">
                                <li class="pc-item"><a class="pc-link" href="#!">DTTOT List</a></li>
                                <li class="pc-item"><a class="pc-link" href="#!">Risk Assesment / Profile
                                        Client</a></li>
                                <li class="pc-item"><a class="pc-link" href="#!">PPATK Register</a></li>
                                <li class="pc-item"><a class="pc-link" href="#!">Laporan Sipesat</a></li>
                                <li class="pc-item"><a class="pc-link" href="#!">Laporan BI</a></li>
                                <li class="pc-item"><a class="pc-link" href="#!">Laporan Underlying Bank</a>
                                </li>
                                <li class="pc-item"><a class="pc-link" href="#!">Rekapitulasi Kegiatan Usaha
                                        BI</a></li>
                                <li class="pc-item"><a class="pc-link" href="#!">Rekapitulasi List Faktur
                                        LTKT</a></li>
                                <li class="pc-item"><a class="pc-link" href="#!">Rekapitulasi List Faktur
                                        LTKM</a></li>
                            </ul>
                        </li>

                        <!-- MODULE UTILITI -->
                        <li class="pc-item pc-hasmenu">
                            <a href="#!" class="pc-link">
                                <span class="pc-micon"><i class="fa fa-database"></i></span>
                                <span class="pc-mtext">Utiliti</span>
                                <span class="pc-arrow"><i data-feather="chevron-right"></i></span>
                            </a>
                            <ul class="pc-submenu">
                                <li class="pc-item"><a class="pc-link" href="#!">Setting Cabang</a></li>
                                <li class="pc-item"><a class="pc-link" href="#!">Setting Default</a></li>
                                <li class="pc-item"><a class="pc-link" href="#!">Setting Password</a></li>
                                <li class="pc-item"><a class="pc-link" href="#!">Setting Menu User</a></li>
                                <li class="pc-item"><a class="pc-link" href="#!">Maintenance Data</a></li>
                                <li class="pc-item"><a class="pc-link" href="#!">Ganti Periode</a></li>
                                <li class="pc-item"><a class="pc-link" href="#!">Tutup Periode</a></li>
                                <li class="pc-item"><a class="pc-link" href="#!">Buka Kunci Data</a></li>
                                <li class="pc-item"><a class="pc-link" href="#!">Validasi Data</a></li>
                            </ul>
                        </li>

                        <!-- MODULE SALDO AWAL -->
                        <li class="pc-item pc-hasmenu">
                            <a href="#!" class="pc-link">
                                <span class="pc-micon"><i class="fa fa-money-bill"></i></span>
                                <span class="pc-mtext">Saldo Awal</span>
                                <span class="pc-arrow"><i data-feather="chevron-right"></i></span>
                            </a>
                            <ul class="pc-submenu">
                                <li class="pc-item"><a class="pc-link" href="#!">Persediaan Barang</a></li>
                                <li class="pc-item"><a class="pc-link" href="#!">Hutang Dagang</a></li>
                                <li class="pc-item"><a class="pc-link" href="#!">Piutang Dagang</a></li>
                                <li class="pc-item"><a class="pc-link" href="#!">Neraca Awal</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- [ Sidebar Menu ] end -->

        <!-- [ Header Topbar ] start -->
        <header class="pc-header">
            <div class="header-wrapper">
                <!-- [Mobile Media Block] start -->
                <div class="me-auto pc-mob-drp">
                    <ul class="list-unstyled">
                        <!-- ======= Menu collapse Icon ===== -->
                        <li class="pc-h-item pc-sidebar-collapse">
                            <a href="#" class="pc-head-link ms-0" id="sidebar-hide">
                                <i class="ti ti-menu-2"></i>
                            </a>
                        </li>
                        <li class="pc-h-item pc-sidebar-popup">
                            <a href="#" class="pc-head-link ms-0" id="mobile-collapse">
                                <i class="ti ti-menu-2"></i>
                            </a>
                        </li>
                        <li class="dropdown pc-h-item d-inline-flex d-md-none">
                            <a class="pc-head-link dropdown-toggle arrow-none m-0" data-bs-toggle="dropdown"
                                href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="ti ti-search"></i>
                            </a>
                            <div class="dropdown-menu pc-h-dropdown drp-search">
                                <form class="px-3">
                                    <div class="form-group mb-0 d-flex align-items-center">
                                        <i data-feather="search"></i>
                                        <input type="search" class="form-control border-0 shadow-none"
                                            placeholder="Search here. . .">
                                    </div>
                                </form>
                            </div>
                        </li>
                        <li class="pc-h-item d-none d-md-inline-flex">
                            <form class="header-search">
                                <i data-feather="search" class="icon-search"></i>
                                <input type="search" class="form-control" placeholder="Search here. . .">
                            </form>
                        </li>
                    </ul>
                </div>
                <!-- [Mobile Media Block end] -->
                <div class="ms-auto">
                    <ul class="list-unstyled">
                        <li class="dropdown pc-h-item">
                            <a class="pc-head-link dropdown-toggle arrow-none me-0" data-bs-toggle="dropdown"
                                href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="ti ti-mail"></i>
                            </a>
                            <div class="dropdown-menu dropdown-notification dropdown-menu-end pc-h-dropdown">
                                <div class="dropdown-header d-flex align-items-center justify-content-between">
                                    <h5 class="m-0">Message</h5>
                                    <a href="#!" class="pc-head-link bg-transparent"><i
                                            class="ti ti-x text-danger"></i></a>
                                </div>
                                <div class="dropdown-divider"></div>
                                <div class="dropdown-header px-0 text-wrap header-notification-scroll position-relative"
                                    style="max-height: calc(100vh - 215px)">
                                    <div class="list-group list-group-flush w-100">
                                        <a class="list-group-item list-group-item-action">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0">
                                                    <img src="../assets/images/user/avatar-2.jpg" alt="user-image"
                                                        class="user-avtar">
                                                </div>
                                                <div class="flex-grow-1 ms-1">
                                                    <span class="float-end text-muted">3:00 AM</span>
                                                    <p class="text-body mb-1">It's <b>Cristina danny's</b> birthday
                                                        today.
                                                    </p>
                                                    <span class="text-muted">2 min ago</span>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="list-group-item list-group-item-action">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0">
                                                    <img src="../assets/images/user/avatar-1.jpg" alt="user-image"
                                                        class="user-avtar">
                                                </div>
                                                <div class="flex-grow-1 ms-1">
                                                    <span class="float-end text-muted">6:00 PM</span>
                                                    <p class="text-body mb-1"><b>Aida Burg</b> commented your post.</p>
                                                    <span class="text-muted">5 August</span>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="list-group-item list-group-item-action">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0">
                                                    <img src="../assets/images/user/avatar-3.jpg" alt="user-image"
                                                        class="user-avtar">
                                                </div>
                                                <div class="flex-grow-1 ms-1">
                                                    <span class="float-end text-muted">2:45 PM</span>
                                                    <p class="text-body mb-1"><b>There was a failure to your setup.</b>
                                                    </p>
                                                    <span class="text-muted">7 hours ago</span>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="list-group-item list-group-item-action">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0">
                                                    <img src="../assets/images/user/avatar-4.jpg" alt="user-image"
                                                        class="user-avtar">
                                                </div>
                                                <div class="flex-grow-1 ms-1">
                                                    <span class="float-end text-muted">9:10 PM</span>
                                                    <p class="text-body mb-1"><b>Cristina Danny </b> invited to join
                                                        <b>
                                                            Meeting.</b></p>
                                                    <span class="text-muted">Daily scrum meeting time</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="dropdown-divider"></div>
                                <div class="text-center py-2">
                                    <a href="#!" class="link-primary">View all</a>
                                </div>
                            </div>
                        </li>
                        <li class="dropdown pc-h-item header-user-profile">
                            <a class="pc-head-link dropdown-toggle arrow-none me-0" data-bs-toggle="dropdown"
                                href="#" role="button" aria-haspopup="false" data-bs-auto-close="outside"
                                aria-expanded="false">
                                <img src="../assets/images/user/avatar-2.jpg" alt="user-image" class="user-avtar">
                                <span>Stebin Ben</span>
                            </a>
                            <div class="dropdown-menu dropdown-user-profile dropdown-menu-end pc-h-dropdown">
                                <div class="dropdown-header">
                                    <div class="d-flex mb-1">
                                        <div class="flex-shrink-0">
                                            <img src="../assets/images/user/avatar-2.jpg" alt="user-image"
                                                class="user-avtar wid-35">
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h6 class="mb-1">Stebin Ben</h6>
                                            <span>UI/UX Designer</span>
                                        </div>
                                        <a href="#!" class="pc-head-link bg-transparent"><i
                                                class="ti ti-power text-danger"></i></a>
                                    </div>
                                </div>
                                <ul class="nav drp-tabs nav-fill nav-tabs" id="mydrpTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="drp-t1" data-bs-toggle="tab"
                                            data-bs-target="#drp-tab-1" type="button" role="tab"
                                            aria-controls="drp-tab-1" aria-selected="true"><i class="ti ti-user"></i>
                                            Profile</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="drp-t2" data-bs-toggle="tab"
                                            data-bs-target="#drp-tab-2" type="button" role="tab"
                                            aria-controls="drp-tab-2" aria-selected="false"><i
                                                class="ti ti-settings"></i> Setting</button>
                                    </li>
                                </ul>
                                <div class="tab-content" id="mysrpTabContent">
                                    <div class="tab-pane fade show active" id="drp-tab-1" role="tabpanel"
                                        aria-labelledby="drp-t1" tabindex="0">
                                        <a href="#!" class="dropdown-item">
                                            <i class="ti ti-edit-circle"></i>
                                            <span>Edit Profile</span>
                                        </a>
                                        <a href="#!" class="dropdown-item">
                                            <i class="ti ti-user"></i>
                                            <span>View Profile</span>
                                        </a>
                                        <a href="#!" class="dropdown-item">
                                            <i class="ti ti-clipboard-list"></i>
                                            <span>Social Profile</span>
                                        </a>
                                        <a href="#!" class="dropdown-item">
                                            <i class="ti ti-wallet"></i>
                                            <span>Billing</span>
                                        </a>
                                        <a href="#!" class="dropdown-item">
                                            <i class="ti ti-power"></i>
                                            <span>Logout</span>
                                        </a>
                                    </div>
                                    <div class="tab-pane fade" id="drp-tab-2" role="tabpanel"
                                        aria-labelledby="drp-t2" tabindex="0">
                                        <a href="#!" class="dropdown-item">
                                            <i class="ti ti-help"></i>
                                            <span>Support</span>
                                        </a>
                                        <a href="#!" class="dropdown-item">
                                            <i class="ti ti-user"></i>
                                            <span>Account Settings</span>
                                        </a>
                                        <a href="#!" class="dropdown-item">
                                            <i class="ti ti-lock"></i>
                                            <span>Privacy Center</span>
                                        </a>
                                        <a href="#!" class="dropdown-item">
                                            <i class="ti ti-messages"></i>
                                            <span>Feedback</span>
                                        </a>
                                        <a href="#!" class="dropdown-item">
                                            <i class="ti ti-list"></i>
                                            <span>History</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

            </div>
        </header>
        <!-- [ Header ] end -->
    @endif

    @yield('content')

    <!-- [ Main Content ] end -->

    <!-- Required Js -->
    <script src="../assets/js/plugins/popper.min.js"></script>
    <script src="../assets/js/plugins/simplebar.min.js"></script>
    <script src="../assets/js/plugins/bootstrap.min.js"></script>
    <script src="../assets/js/fonts/custom-font.js"></script>
    <script src="../assets/js/pcoded.js"></script>
    <script src="../assets/js/plugins/feather.min.js"></script>

    <script>
        if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
            dark_layout = 'true';
        } else {
            dark_layout = 'false';
        }
        layout_change_default();
        if (dark_layout == 'true') {
            layout_change('dark');
        } else {
            layout_change('light');
        }
    </script>

</body>
<!-- [Body] end -->

</html>
