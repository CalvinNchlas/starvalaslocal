@extends('layouts.app')

@section('content')
<div class="pc-container">
    <div class="pc-content">
            <!-- [ breadcrumb ] start -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h3 class="m-b-10">Laporan Rekap Laba / Rugi</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ breadcrumb ] end -->
    <div class="buying-form p-3 rounded-full card h-100" >
        <div class="form-section">
            <div>
                <div class="col-md-12">
                <!-- Date and Time -->
                    <div class="row">
                     <div class="col-md-6">
                      <div class="mb-3">
                        <label class="form-label">Tanggal Hapus Dari</label>
                        <input type="date" class="form-control" value="{{ date('d-m-Y') }}">
                     </div>
                     </div>
                     <div class="col-md-6">
                     <div class="mb-3">
                        <label class="form-label">Tanggal Hapus Sampai Dengan</label>
                        <input type="date" class="form-control" value="{{ date('d-m-Y') }}">
                     </div>
                     </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Jenis Transaksi</label>
                        <select class="form-select">
                            <option>Semua</option>
                        </select>
                    </div>
                    <div class="text-end">
                        <button class="btn btn-primary">View</button>
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
