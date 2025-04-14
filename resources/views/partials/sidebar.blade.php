<nav class="pc-sidebar">
    <div class="navbar-wrapper">
        <div class="m-header">
            <a href="{{ route('dashboard') }}" class="b-brand text-primary">
                <!-- ========   Change your logo from here   ============ -->
                <img src="{{ asset('../assets/images/logo-icon.png') }}" class="img-fluid logo-lg" alt="logo">
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
                        @can('currencies.viewAny')
                            <li class="pc-item">
                                <a class="pc-link" href="{{ route('currency.index') }}">Currency</a>
                            </li>
                        @endcan
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
                        <li class="pc-item"><a class="pc-link" href="#!">Rekapitulasi Pembayaran Buy Sell</a></li>
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
