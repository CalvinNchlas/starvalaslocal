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
                                <h3 class="m-b-10">Selling</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ breadcrumb ] end -->
    <div class="buying-form p-3 rounded-full card h-100" >
        <div class="row mb-3">
            <div class="col">
                <ul class="nav nav-tabs mb-3">
                            <li class="nav-item">
                                <a class="nav-link active">Client</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link">Mata Uang</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link">Catatan</a>
                            </li>
                </ul>
            </div>
            <div class="col text-end">
                <div class="input-group" style="max-width: 300px; float: right;">
                    <input type="text" class="form-control" placeholder="Cari ...">
                    <!-- <button class="btn btn-purple" type="button">List</button> -->
                </div>
            </div>
        </div>

        <div class="form-section">
            <div class="row">
                <div class="col-md-6">
                    <!-- Factur and Cabang -->
                 <div class="row">
                  <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">No. Faktur*</label>
                        <input type="text" class="form-control" value="SI-202504-000019"  style="cursor: not-allowed;"  readonly>
                    </div>
                    </div>
                  <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">Cabang</label>
                        <input type="text" class="form-control" value="PT. START VALAS INDONESIA"  style="cursor: not-allowed;"  readonly>
                    </div>
                  </div>
                </div>

                <!-- Date and Time -->
                 <div class="row">
                  <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">Tanggal*</label>
                        <input type="date" class="form-control" value="{{ date('d-m-Y') }}">
                    </div>
                    </div>
                  <div class="col-md-4">
                    <div class="mb-3">
                        <label class="form-label">Jam*</label>
                        <input type="time" class="form-control" value="{{ date('d-m-Y') }}">
                    </div>
                    </div>
                  <div class="col-md-2">
                    <div class="mb-3" style="margin-top:29px">
                        <input type="checkbox"  id="coding" name="interest" value="coding" checked/>
                    </div>
                    </div>
                 </div>

                    <div class="mb-3">
                        <label class="form-label">Client*</label>
                        <select class="form-select">
                            <option>Pilih</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Admin*</label>
                        <select class="form-select">
                            <option>Pilih</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tujuan*</label>
                        <select class="form-select">
                            <option>Pilih</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Sumber Dana*</label>
                        <select class="form-select">
                            <option>Pilih</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Profile</label>
                        <div>
                            <span class="badge bg-success px-3 py-2">LOW RISK</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Nilai</label>
                                <input type="text" class="form-control"  style="cursor: not-allowed;" readonly>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Jumlah</label>
                                <input type="text" class="form-control"  style="cursor: not-allowed;" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="text-end">
                        <button class="btn btn-primary">Lanjut</button>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="currency-rates">
                        <ul class="nav nav-tabs mb-3">
                            <li class="nav-item">
                                <a class="nav-link active">Semua</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link">Asia</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link">Amerika</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link">Eropa</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link">Australia</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link">Afrika</a>
                            </li>
                        </ul>

                        <div class="row g-2">
                            <div class="col-md-4">
                                <div class="currency-card border rounded p-2">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <!-- use dynamic images -->
                                            <img src="{{ url('assets/images/usd.png') }}" width="20">
                                            <span class="ms-1">USD0</span>
                                        </div>
                                        <small>100 ( M / P OLD )</small>
                                    </div>
                                    <div class="text-end mt-1">
                                        <strong>16,950.00</strong>
                                    </div>
                                </div>
                            </div>
                            <!-- Add more currency cards here -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title">Status</h6>
                            <p>Sales Order</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title">Keterangan</h6>
                            <p>Static</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection

@push('styles')
<style>
.btn-purple {
    background-color: #6f42c1;
    color: white;
}
.currency-card {
    background: white;
    transition: all 0.2s;
}
.currency-card:hover {
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
}
.nav-tabs .nav-link {
    cursor: pointer;
}
.form-label:after {
    content: "*";
    color: red;
    margin-left: 2px;
}
</style>
@endpush
