<!DOCTYPE html>
<html lang="en">
<!-- [Head] start -->

<head>
    <title>Star Valas</title>

    <!-- [Meta] -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- [Favicon] icon -->
    <link rel="icon" href="{{ asset('assets/images/favicon.svg') }}" type="image/x-icon">

    <!-- [Google Font] Family -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700&display=swap" id="main-font-link">
    <!-- [Tabler Icons] https://tablericons.com -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/tabler-icons.min.css') }}">
    <!-- [Feather Icons] https://feathericons.com -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/feather.css') }}">
    <!-- [Font Awesome Icons] https://fontawesome.com/icons -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/fontawesome.css') }}">
    <!-- [Material Icons] https://fonts.google.com/icons -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/material.css') }}">
    <!-- [Template CSS Files] -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" id="main-style-link">
    <link rel="stylesheet" href="{{ asset('assets/css/style-preset.css') }}">

    <!-- [DataTables CSS] -->
    <link rel="stylesheet" href="https://cdn.datatables.net/2.2.2/css/dataTables.bootstrap5.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/3.0.4/css/responsive.bootstrap5.css">

    <!-- [Custom CSS] -->
    @stack('styles')

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

    @if (Auth::check())
        <!-- [ Sidebar Menu ] start -->
        <nav class="pc-sidebar">
            <div class="navbar-wrapper">
                <div class="m-header">
                    <a href="{{ route('dashboard') }}" class="b-brand text-primary">
                        <!-- ========   Change your logo from here   ============ -->
                        <img src="{{ asset('assets/images/logo-icon.png') }}" class="img-fluid logo-lg" alt="logo">
                    </a>
                </div>
                <div class="navbar-content">
                    <ul class="pc-navbar">
                        <li class="pc-item">
                            <a href="{{ route('dashboard') }}" class="pc-link">
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
                                <li class="pc-item"><a class="pc-link" href="{{ route('currency.index') }}">Currency</a>
                                </li>
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
                        <li class="pc-item"><a class="pc-link" href="{{ route('buying.index') }}">Buying</a></li>
                        <li class="pc-item"><a class="pc-link" href="{{ route('selling.index') }}">Selling</a></li>
                        <li class="pc-item"><a class="pc-link" href="{{ route('transfer.index') }}">Transfer Stok</a></li>
                        <li class="pc-item"><a class="pc-link" href="{{ route('delete.index') }}">View Hapus Transaksi</a></li>
                        <li class="pc-item"><a class="pc-link" href="{{ route('reportbuying.index') }}">Laporan Buying</a></li>
                        <li class="pc-item"><a class="pc-link" href="{{ route('recapbuying.index') }}">Rekap Buying</a></li>
                        <li class="pc-item"><a class="pc-link" href="{{ route('reportselling.index') }}">Laporan Selling</a></li>
                        <li class="pc-item"><a class="pc-link" href="{{ route('recapselling.index') }}">Rekap Selling</a></li>
                        <li class="pc-item"><a class="pc-link" href="{{ route('reportsale.index') }}">Laporan Penjualan Gabungan</a></li>
                        <li class="pc-item"><a class="pc-link" href="{{ route('recaptransfer.index') }}">Rekap Transfer Stock</a></li>
                        <li class="pc-item"><a class="pc-link" href="{{ route('reportstockfirst.index') }}">Laporan Stok Awal</a></li>
                        <li class="pc-item"><a class="pc-link" href="{{ route('reportstocklast.index') }}">Laporan Stok Akhir</a></li>
                        <li class="pc-item"><a class="pc-link" href="{{ route('cardstock.index') }}">Kartu Stok</a></li>
                        <li class="pc-item"><a class="pc-link" href="{{ route('mutationstock.index') }}">Mutasi Stok</a></li>
                        <li class="pc-item"><a class="pc-link" href="{{ route('reportlabaloss.index') }}">Laporan Laba / Rugi</a></li>
                        <li class="pc-item"><a class="pc-link" href="{{ route('reportrecaplabaloss.index') }}">Laporan Rekap Laba / Rugi</a></li>
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
                    </ul>
                </div>
                <!-- [Mobile Media Block end] -->
                <div class="ms-auto">
                    <ul class="list-unstyled">
                        <li class="dropdown pc-h-item">
                            <a class="pc-head-link dropdown-toggle arrow-none me-0" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="fa fa-sign-out-alt"></i>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
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
    <script src="{{ asset('assets/js/plugins/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/fonts/custom-font.js') }}"></script>
    <script src="{{ asset('assets/js/pcoded.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/feather.min.js') }}"></script>

    <!-- [ Sweet Alert ] -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- [ Custom Js ] -->
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/2.2.2/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.2.2/js/dataTables.bootstrap5.js"></script>
    <script src="https://cdn.datatables.net/responsive/3.0.4/js/dataTables.responsive.js"></script>
    <script src="https://cdn.datatables.net/responsive/3.0.4/js/responsive.bootstrap5.js"></script>

    <script>
        dark_layout = 'false';
        layout_change_default();
        layout_change('light');

        if ($('#refresh').length) {
            $('#refresh').on('click', function() {
                if ($.fn.DataTable.isDataTable('#datatable')) {
                    $('#datatable').DataTable().ajax.reload();
                }
            });
        }

        $(document).ready(function() {
            $('label[for]').each(function() {
                var input = $('#' + $(this).attr('for'));
                if (input.prop('required')) {
                    $(this).append(' <span class="text-danger fw-bold">*</span>');
                }
            });
        });

        $(document).on('click', '.item-delete', function(e) {
            e.preventDefault();
            const form = $(this).closest('form');
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: $(this).attr('href'),
                        type: 'DELETE',
                        data: {
                            _token: '{{ csrf_token() }}'
                        },
                        success: function(response) {
                            Swal.fire(
                                'Deleted!',
                                'Your item has been deleted.',
                                'success'
                            );
                            if ($.fn.DataTable.isDataTable('#datatable')) {
                                $('#datatable').DataTable().ajax.reload();
                            }
                        },
                        error: function(xhr) {
                            Swal.fire(
                                'Error!',
                                'Something went wrong.',
                                'error'
                            );
                        }
                    });
                }
            });
        });
    </script>

    @stack('scripts')
</body>
<!-- [Body] end -->

</html>
