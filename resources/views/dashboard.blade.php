@extends('cms.layout')

@section('content')
    <div class="pc-container">
        <div class="pc-content">
            <!-- [ breadcrumb ] start -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h5 class="m-b-10">Dashboard</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ breadcrumb ] end -->

            <!-- [ Main Content ] start -->
            <div class="row">
                <div class="col-md-6 col-xl-8 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="row">
                                <h3 class="fw-bold">PT. STAR VALAS INDONESIA</h3>
                                <div>JL PROKLAMASI WARUDOYONG SELATAN , RT 45 RW 10 RENGASDENGKLOK KARAWANG</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body text-center">
                            <div class="row">
                                <div class="d-flex justify-content-center mb-3">
                                    <div class="avatar-md profile-user-img rounded-circle border" style="background-image: url({{ url('/assets/images/user/avatar-1.jpg') }}); background-size: cover; width: 100px; height: 100px;">
                                    </div>
                                </div>
                                <div>Nita</div>
                                <div>nita.infra@beyondtech.co.id</div>
                                <div>A02</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- [ Main Content ] start -->
            <div class="row">
                <div class="col-md-6 col-xl-3">
                    <div class="card bg-primary">
                        <div class="card-body">
                            <div class="row">
                                <h3 class="mb-2 fw-bold text-white">Beli / Jual</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="card bg-primary">
                        <div class="card-body">
                            <div class="row">
                                <h3 class="mb-2 fw-bold text-white">Stok</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="card bg-primary">
                        <div class="card-body">
                            <div class="row">
                                <h3 class="mb-2 fw-bold text-white">Keuangan</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="card bg-primary">
                        <div class="card-body">
                            <div class="row">
                                <h3 class="mb-2 fw-bold text-white">Akunting</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ Main Content ] end -->

            <!-- [ Main Content ] start -->
            <div class="row">
                <!-- [ sample-page ] start -->
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <h5>
                                <span id="clock"></span>
                                <script type="text/javascript">
                                    function showTime() {
                                        var date = new Date();
                                        var days = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"];
                                        var months = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober",
                                            "November", "Desember"
                                        ];
                                        var day = days[date.getDay()];
                                        var dayNum = date.getDate();
                                        var month = months[date.getMonth()];
                                        var year = date.getFullYear();
                                        var h = date.getHours().toString().padStart(2, '0');
                                        var m = date.getMinutes().toString().padStart(2, '0');
                                        var s = date.getSeconds().toString().padStart(2, '0');

                                        var formattedDate = day + " " + dayNum + " " + month + " " + year + " " + h + ":" + m + ":" + s;
                                        document.getElementById("clock").innerText = formattedDate;
                                        document.getElementById("clock").textContent = formattedDate;

                                        setTimeout(showTime, 1000);
                                    }
                                    showTime();
                                </script>
                            </h5>
                        </div>
                        <div class="card-body">
                            <table class="table table-hover table-bordered align-middle" id="Container">
                                <thead class="table-info text-uppercase">
                                    <tr>
                                        <th style="width: 175px;" class="text-start">
                                            Mata Uang
                                            <i class="fa fa-heart float-end text-danger" id="heart_favorite"
                                                onclick="favoriteModal()" style="cursor: pointer; margin-right: 5px;"></i>
                                        </th>
                                        <th style="width: 230px;" class="text-start">Denomination</th>
                                        <th style="width: 83px;" class="text-end">Kurs Beli</th>
                                        <th style="width: 86px;" class="text-end">Kurs Jual</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-start fw-bold"><img src="{{ url('assets/images/usd.png') }}"
                                                alt="USD" class="me-2" width="40" height="25">USD</td>
                                        <td class="fw-bold">100 ( M / P / Q NEW )</td>
                                        <td class="text-end fw-bold text-danger">16,840.00</td>
                                        <td class="text-end fw-bold text-primary">16,950.00</td>
                                    </tr>
                                    <tr>
                                        <td class="text-start fw-bold"><img src="{{ url('assets/images/usd.png') }}"
                                                alt="EUR" class="me-2" width="40" height="25">EUR</td>
                                        <td class="fw-bold">500 - 200 - 100 - 50</td>
                                        <td class="text-end fw-bold text-danger">18,427.00</td>
                                        <td class="text-end fw-bold text-primary">18,577.00</td>
                                    </tr>
                                    <tr>
                                        <td class="text-start fw-bold"><img src="{{ url('assets/images/usd.png') }}"
                                                alt="SGD" class="me-2" width="40" height="25">SGD</td>
                                        <td class="fw-bold">100 - 50</td>
                                        <td class="text-end fw-bold text-danger">12,435.00</td>
                                        <td class="text-end fw-bold text-primary">12,510.00</td>
                                    </tr>
                                    <tr>
                                        <td class="text-start fw-bold"><img src="{{ url('assets/images/usd.png') }}"
                                                alt="AUD" class="me-2" width="40" height="25">AUD</td>
                                        <td class="fw-bold">100 - 50</td>
                                        <td class="text-end fw-bold text-danger">10,210.00</td>
                                        <td class="text-end fw-bold text-primary">10,370.00</td>
                                    </tr>
                                    <tr>
                                        <td class="text-start fw-bold"><img src="{{ url('assets/images/usd.png') }}"
                                                alt="MYR" class="me-2" width="40" height="25">MYR</td>
                                        <td class="fw-bold">100 - 50</td>
                                        <td class="text-end fw-bold text-danger">3,751.00</td>
                                        <td class="text-end fw-bold text-primary">3,791.00</td>
                                    </tr>
                                    <tr>
                                        <td class="text-start fw-bold"><img src="{{ url('assets/images/usd.png') }}"
                                                alt="THB" class="me-2" width="40" height="25">THB</td>
                                        <td class="fw-bold">1000 - 500</td>
                                        <td class="text-end fw-bold text-danger">485.00</td>
                                        <td class="text-end fw-bold text-primary">493.00</td>
                                    </tr>
                                    <tr>
                                        <td class="text-start fw-bold"><img src="{{ url('assets/images/usd.png') }}"
                                                alt="CNY" class="me-2" width="40" height="25">CNY</td>
                                        <td class="fw-bold">100</td>
                                        <td class="text-end fw-bold text-danger">2,303.00</td>
                                        <td class="text-end fw-bold text-primary">2,323.00</td>
                                    </tr>
                                    <tr>
                                        <td class="text-start fw-bold"><img src="{{ url('assets/images/usd.png') }}"
                                                alt="SAR" class="me-2" width="40" height="25">SAR</td>
                                        <td class="fw-bold">500 - 200</td>
                                        <td class="text-end fw-bold text-danger">4,460.00</td>
                                        <td class="text-end fw-bold text-primary">4,530.00</td>
                                    </tr>
                                    <tr>
                                        <td class="text-start fw-bold"><img src="{{ url('assets/images/usd.png') }}"
                                                alt="JPY" class="me-2" width="40" height="25">JPY</td>
                                        <td class="fw-bold">10.000 - 5000</td>
                                        <td class="text-end fw-bold text-danger">113.50</td>
                                        <td class="text-end fw-bold text-primary">115.85</td>
                                    </tr>
                                    <tr>
                                        <td class="text-start fw-bold"><img src="{{ url('assets/images/usd.png') }}"
                                                alt="KRW" class="me-2" width="40" height="25">KRW</td>
                                        <td class="fw-bold">10.000 - 50.000</td>
                                        <td class="text-end fw-bold text-danger">11.00</td>
                                        <td class="text-end fw-bold text-primary">12.50</td>
                                    </tr>
                                    <tr>
                                        <td class="text-start fw-bold"><img src="{{ url('assets/images/usd.png') }}"
                                                alt="TWD" class="me-2" width="40" height="25">TWD</td>
                                        <td class="fw-bold">1000 - 500</td>
                                        <td class="text-end fw-bold text-danger">506.00</td>
                                        <td class="text-end fw-bold text-primary">515.00</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <h5>KALKULATOR KURS</h5>
                        </div>
                        <div class="card-body">
                            <div class="container text-center">
                                <div class="mt-1">
                                    <button class="btn btn-primary me-2" onclick="setting_kurs('beli')"
                                        id="button_beli_kurs">BELI</button>
                                    <button class="btn btn-outline-primary ms-2" onclick="setting_kurs('jual')"
                                        id="button_jual_kurs">JUAL</button>
                                </div>

                                <input type="hidden" name="type_kurs" id="type_kurs" value="beli">

                                <div class="card mt-4 border-0">
                                    <div class="card-body">

                                        <div class="row g-3">
                                            <div class="col-md-6">
                                                <label for="kurs_awal" class="form-label fw-bold text-start d-block">Mata
                                                    Uang</label>
                                                <select class="form-select form-select-lg fw-bold" id="kurs_awal">
                                                    <option value=""></option>
                                                    <option value="00020">AED</option>
                                                    <option value="00086">AED0</option>
                                                    <option value="00087">AED1</option>
                                                    <option value="00088">AED2</option>
                                                    <option value="00063">AUD</option>
                                                    <option value="00014">AUD0</option>
                                                    <option value="00062">AUD1</option>
                                                    <option value="00091">BHD0</option>
                                                    <option value="00092">BHD1</option>
                                                    <option value="00099">BND0</option>
                                                    <option value="00100">BND1</option>
                                                    <option value="00065">CAD</option>
                                                    <option value="00013">CAD0</option>
                                                    <option value="00064">CAD1</option>
                                                    <option value="00067">CHF</option>
                                                    <option value="00011">CHF0</option>
                                                    <option value="00066">CHF1</option>
                                                    <option value="00054">CNY0</option>
                                                    <option value="00055">CNY1</option>
                                                    <option value="00056">CNY2</option>
                                                    <option value="00009">EUR0</option>
                                                    <option value="00071">EUR1</option>
                                                    <option value="00072">EURO</option>
                                                    <option value="00077">GBP0</option>
                                                    <option value="00103">GBP0</option>
                                                    <option value="00010">GBP1</option>
                                                    <option value="00007">HKD0</option>
                                                    <option value="00070">HKD1</option>
                                                    <option value="00024">IDR</option>
                                                    <option value="00102">INR0</option>
                                                    <option value="00095">JOD0</option>
                                                    <option value="00096">JOD1</option>
                                                    <option value="00012">JPY0</option>
                                                    <option value="00079">JPY1</option>
                                                    <option value="00059">KRW0</option>
                                                    <option value="00060">KRW1</option>
                                                    <option value="00093">KWD0</option>
                                                    <option value="00094">KWD1</option>
                                                    <option value="00076">MYR</option>
                                                    <option value="00074">MYR0</option>
                                                    <option value="00075">MYR1</option>
                                                    <option value="00061">MYR2</option>
                                                    <option value="00069">NZD0</option>
                                                    <option value="00068">NZD1</option>
                                                    <option value="00089">OMR0</option>
                                                    <option value="00090">OMR1</option>
                                                    <option value="00017">PHP</option>
                                                    <option value="00101">PHP0</option>
                                                    <option value="00081">SAR0</option>
                                                    <option value="00085">SAR2</option>
                                                    <option value="00019">SAR3</option>
                                                    <option value="00051">SGD</option>
                                                    <option value="00048">SGD0</option>
                                                    <option value="00049">SGD1</option>
                                                    <option value="00050">SGD2</option>
                                                    <option value="00082">TES</option>
                                                    <option value="00005">THB0</option>
                                                    <option value="00073">THB1</option>
                                                    <option value="00097">TRY0 </option>
                                                    <option value="00015">TWD0</option>
                                                    <option value="00078">TWD1</option>
                                                    <option value="00042">USD0</option>
                                                    <option value="00043">USD1</option>
                                                    <option value="00044">USD2</option>
                                                    <option value="00045">USD3</option>
                                                    <option value="00098">USD4</option>
                                                    <option value="00046">USD5</option>
                                                    <option value="00083">USD6</option>
                                                    <option value="00047">USD7</option>
                                                    <option value="00080">VND</option>
                                                    <option value="00018">VND0</option>
                                                </select>
                                            </div>

                                            <div class="col-md-6">
                                                <label for="currency_awal"
                                                    class="form-label fw-bold text-start d-block">Currency</label>
                                                <input type="text" name="currency_awal" id="currency_awal"
                                                    class="form-control form-control-lg fw-bold"
                                                    onkeyup="count_kurs(); formatKeyup(this)" onkeypress="count_kurs()"
                                                    onkeydown="count_kurs()" autocomplete="off">
                                            </div>

                                            <div class="col-12 mt-2">
                                                <label for="jumlah_awal"
                                                    class="form-label fw-bold text-start d-block">Jumlah</label>
                                                <input type="text" name="jumlah_awal" id="jumlah_awal"
                                                    class="form-control form-control-lg fw-bold"
                                                    onkeyup="count_kurs(); formatKeyup(this)"
                                                    onkeypress="return isNumberAlphaKey(event)" onkeydown="count_kurs()"
                                                    autocomplete="off" placeholder="Masukkan Nominal">
                                            </div>
                                        </div>

                                        <div class="row g-3 mt-4">
                                            <div class="col-md-6">
                                                <label for="kurs_akhir" class="form-label fw-bold text-start d-block">Mata
                                                    Uang</label>
                                                <select class="form-control input-lg">
                                                    <option value=""></option>
                                                    <option value="00020">AED</option>
                                                    <option value="00086">AED0</option>
                                                    <option value="00087">AED1</option>
                                                    <option value="00088">AED2</option>
                                                    <option value="00063">AUD</option>
                                                    <option value="00014">AUD0</option>
                                                    <option value="00062">AUD1</option>
                                                    <option value="00091">BHD0</option>
                                                    <option value="00092">BHD1</option>
                                                    <option value="00099">BND0</option>
                                                    <option value="00100">BND1</option>
                                                    <option value="00065">CAD</option>
                                                    <option value="00013">CAD0</option>
                                                    <option value="00064">CAD1</option>
                                                    <option value="00067">CHF</option>
                                                    <option value="00011">CHF0</option>
                                                    <option value="00066">CHF1</option>
                                                    <option value="00054">CNY0</option>
                                                    <option value="00055">CNY1</option>
                                                    <option value="00056">CNY2</option>
                                                    <option value="00009">EUR0</option>
                                                    <option value="00071">EUR1</option>
                                                    <option value="00072">EURO</option>
                                                    <option value="00077">GBP0</option>
                                                    <option value="00103">GBP0</option>
                                                    <option value="00010">GBP1</option>
                                                    <option value="00007">HKD0</option>
                                                    <option value="00070">HKD1</option>
                                                    <option value="00024" selected="">IDR</option>
                                                    <option value="00102">INR0</option>
                                                    <option value="00095">JOD0</option>
                                                    <option value="00096">JOD1</option>
                                                    <option value="00012">JPY0</option>
                                                    <option value="00079">JPY1</option>
                                                    <option value="00059">KRW0</option>
                                                    <option value="00060">KRW1</option>
                                                    <option value="00093">KWD0</option>
                                                    <option value="00094">KWD1</option>
                                                    <option value="00076">MYR</option>
                                                    <option value="00074">MYR0</option>
                                                    <option value="00075">MYR1</option>
                                                    <option value="00061">MYR2</option>
                                                    <option value="00069">NZD0</option>
                                                    <option value="00068">NZD1</option>
                                                    <option value="00089">OMR0</option>
                                                    <option value="00090">OMR1</option>
                                                    <option value="00017">PHP</option>
                                                    <option value="00101">PHP0</option>
                                                    <option value="00081">SAR0</option>
                                                    <option value="00085">SAR2</option>
                                                    <option value="00019">SAR3</option>
                                                    <option value="00051">SGD</option>
                                                    <option value="00048">SGD0</option>
                                                    <option value="00049">SGD1</option>
                                                    <option value="00050">SGD2</option>
                                                    <option value="00082">TES</option>
                                                    <option value="00005">THB0</option>
                                                    <option value="00073">THB1</option>
                                                    <option value="00097">TRY0 </option>
                                                    <option value="00015">TWD0</option>
                                                    <option value="00078">TWD1</option>
                                                    <option value="00042">USD0</option>
                                                    <option value="00043">USD1</option>
                                                    <option value="00044">USD2</option>
                                                    <option value="00045">USD3</option>
                                                    <option value="00098">USD4</option>
                                                    <option value="00046">USD5</option>
                                                    <option value="00083">USD6</option>
                                                    <option value="00047" selected>USD7</option>
                                                    <option value="00080">VND</option>
                                                    <option value="00018">VND0</option>
                                                </select>
                                            </div>

                                            <div class="col-md-6">
                                                <label for="currency_akhir"
                                                    class="form-label fw-bold text-start d-block">Currency</label>
                                                <input type="text" name="currency_akhir" id="currency_akhir"
                                                    class="form-control form-control-lg fw-bold"
                                                    onkeyup="count_kurs(); formatKeyup(this)"
                                                    onkeypress="count_kurs(); return isNumberAlphaKey(event)"
                                                    onkeydown="count_kurs()" autocomplete="off">
                                            </div>

                                            <div class="col-12 text-center">
                                                <label class="form-label d-block">&nbsp;</label>
                                                <div class="form-control form-control-lg border-0 fw-bold fs-4 text-danger"
                                                    id="hasil_hitung"></div>
                                            </div>
                                        </div>

                                        <button class="btn btn-danger w-100 mt-4 fw-bold"
                                            onclick="reset_calculator()">Reset</button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- [ sample-page ] end -->
            </div>
            <!-- [ Main Content ] end -->
        </div>
    </div>
@endsection
