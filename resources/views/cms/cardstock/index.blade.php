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
                                <h3 class="m-b-10">Kartu Stok</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           <!-- [ breadcrumb ] end -->
       <div class="buying-form p-3 rounded-full card h-100" >
         <div class="form-section">
            <div>
                   <div class="mb-3">
                        <label class="form-label">Nama Currency</label>
                        <select class="form-select">
                            <option>Pilih Nama Currency</option>
                        </select>
                    </div>

                     <!-- Currency -->
                     <div class="row">
                      <div class="col-md-6 mb-3">
                        <div class="col-md-12 mb-1" style="display:flex;">
                          <div class="form-label" class="form-label">Currency</div>
                       </div>
                       <select class="form-select">
                         <option>Pilih Currency</option>
                        </select>
                     </div>
                     <div class="col-md-6">
                       <div class="col-md-12 mb-1" style="display:flex;">
                          <div class="form-label" class="form-label">s/d</div>
                       </div>
                       <select class="form-select">
                         <option>Pilih Currency</option>
                        </select>
                    </div>

                 
                    <div class="mb-3">
                        <div class="col-md-12 mb-1" style="display:flex;">
                          <div class="form-label" style="margin: 5px 70%  0px 0px;" class="form-label">Cabang</div>
                       </div>
                       <select class="form-select">
                         <option>Semua Cabang</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <div class="col-md-12 mb-1" style="display:flex;">
                          <div class="form-label" style="margin: 5px 70%  0px 0px;" class="form-label">Gudang</div>
                           <!-- Slider -->
                           <div class="col text-end">
                           <label class="switch">
                             <input type="checkbox" id="cabang">
                             <span class="slider round"></span>
                           </label>
                          </div>
                       </div>
                       <select class="form-select">
                         <option>Pilih Gudang</option>
                        </select>
                    </div>

                    <!-- DATE -->
                    <div class="row">
                     <div class="col-md-6 mb-3">
                     <div class="col-md-12 mb-1" style="display:flex;">
                          <div class="form-label" style="margin: 5px 70%  0px 0px;" class="form-label">Tanggal Dari</div>
                       </div>
                       <input type="date" class="form-control" value="{{ date('d-m-Y') }}">
                     </div>

                     <div class="col-md-4">
                     <div class="mb-3">
                        <div class="form-label" class="form-label">Tampilkan Harga</div>
                        <input type="checkbox" class="form-check-input" id="payment" checked>
                        <label class="form-check-label" for="payment">Ya</label>
                     </div>
                     </div>

                     <!-- PENJUALAN -->
                     <div class="row">
                     <div class="col-md-6 mb-3">
                     <div class="col-md-12 mb-1" style="display:flex;">
                          <div class="form-label" style="margin: 5px 70%  0px 0px;" class="form-label">Tanggal Penjualan</div>
                       </div>
                       <input type="date" class="form-control" value="{{ date('d-m-Y') }}">
                     </div>

                     <div class="col-md-6">
                     <div class="col-md-12 mb-1" style="display:flex;">
                          <div class="form-label" style="margin: 5px 70%  0px 0px;" class="form-label">S/D</div>
                       </div>
                       <input type="date" class="form-control" value="{{ date('d-m-Y') }}">
                     </div>

                   <!-- REKAP -->
                    <div class="row">
                      <div class="col-md-6 mb-3">
                        <div class="col-md-12 mb-1" style="display:flex;">
                          <div class="form-label" style="margin: 5px 70%  0px 0px;" class="form-label">Rekapitulasi</div>
                       </div>
                       <select class="form-select">
                         <option>Currency</option>
                        </select>
                     </div>
                     <div class="col-md-6">
                       <div class="col-md-12 mb-1" style="display:flex;">
                          <div class="form-label" style="margin: 25px 70%  0px 0px;" class="form-label"></div>
                       </div>
                       <select class="form-select">
                         <option>Nama Currency</option>
                        </select>
                    </div>

                <div class="row">
                     <div class="col-md-12 mb-3" style="display:flex;">
                        <div style="margin: 5px 20px 0px 0px;" class="form-label">* Tampil di judul laporan</div>
                        <!-- Slider -->
                        <label class="switch">
                             <input type="checkbox" id="judul" checked>
                             <span class="slider round"></span>
                        </label>
                    </div>

                    <!-- Button -->
                    <div class="text-end">
                        <button class="btn btn-primary">Search</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection