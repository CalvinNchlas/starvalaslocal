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
                                <h3 class="m-b-10">Laporan Buying</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           <!-- [ breadcrumb ] end -->
       <div class="buying-form p-3 rounded-full card h-100 bg-red-500" >
         <div class="form-section">
            <div>
                <div class="col-md-12">
                    <div class="row">
                     <div class="col-md-3 mt-2">
                      <div class="mb-3">
                        <label class="form-label">Client</label>
                        <select class="form-select">
                            <option>All</option>
                        </select>
                     </div>
                     </div>
                     <div class="col-md-9">
                     <div class="mb-3">
                        <div class="col-md-12 mb-1" style="display:flex;">
                        <div class="form-label" style="margin: 5px 70%  0px 0px;" class="form-label">Option client</div>
                        <!-- Slider -->
                        <div class="col text-end">
                        <label class="switch">
                             <input type="checkbox" id="judul" checked>
                             <span class="slider round"></span>
                        </label>
                        </div>
                       </div>
                        <select class="form-select">
                            <option>Pilih client</option>
                        </select>
                    </div>
                     </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Group Client</label>
                        <select class="form-select">
                            <option>Semua</option>
                        </select>
                    </div>
                    <!-- NEW -->
                    <div class="mb-3">
                        <div class="col-md-12 mb-1" style="display:flex;">
                          <div class="form-label" style="margin: 5px 70%  0px 0px;" class="form-label">Cabang</div>
                           <!-- Slider -->
                           <div class="col text-end">
                           <label class="switch">
                             <input type="checkbox" id="judul" checked>
                             <span class="slider round"></span>
                           </label>
                          </div>
                       </div>
                        <select class="form-select">
                            <option>Semua Cabang</option>
                        </select>
                    </div>
                    <!-- END NEW -->

                    <!-- DATE -->
                    <div class="row">
                     <div class="col-md-6">
                     <div class="col-md-12 mb-1" style="display:flex;">
                          <div class="form-label" style="margin: 5px 70%  0px 0px;" class="form-label">Tanggal Dari</div>
                           <!-- Slider -->
                           <div class="col text-end">
                           <label class="switch">
                             <input type="checkbox" id="judul" checked>
                             <span class="slider round"></span>
                           </label>
                          </div>
                       </div>
                       <input type="date" class="form-control" value="{{ date('d-m-Y') }}">
                     </div>
                     
                     <div class="col-md-6">
                     <div class="mb-3">
                        <label class="form-label">Tanggal Sampai Dengan</label>
                        <input type="date" class="form-control" value="{{ date('d-m-Y') }}">
                     </div>
                     </div>
                     
                    <div class="mb-3">
                        <div class="col-md-12 mb-1" style="display:flex;">
                          <div class="form-label" style="margin: 5px 70%  0px 0px;" class="form-label">Currency</div>
                           <!-- Slider -->
                           <div class="col text-end">
                           <label class="switch">
                             <input type="checkbox" id="judul" checked>
                             <span class="slider round"></span>
                           </label>
                          </div>
                       </div>
                        <select class="form-select">
                            <option>Pilih Currency</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <div class="col-md-12 mb-1" style="display:flex;">
                          <div class="form-label" style="margin: 5px 70%  0px 0px;" class="form-label">Gudang</div>
                           <!-- Slider -->
                           <div class="col text-end">
                           <label class="switch">
                             <input type="checkbox" id="judul" checked>
                             <span class="slider round"></span>
                           </label>
                          </div>
                       </div>
                        <select class="form-select">
                         <option>Pilih Gudang</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <div class="col-md-12 mb-1" style="display:flex;">
                          <div class="form-label" style="margin: 5px 70%  0px 0px;" class="form-label">BI</div>
                           <!-- Slider -->
                           <div class="col text-end">
                           <label class="switch">
                             <input type="checkbox" id="judul" checked>
                             <span class="slider round"></span>
                           </label>
                          </div>
                       </div>
                        <select class="form-select">
                         <option>Semua</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <div class="col-md-12 mb-1" style="display:flex;">
                          <div class="form-label" style="margin: 5px 70%  0px 0px;" class="form-label">Teridentikasi DTOT</div>
                           <!-- Slider -->
                           <div class="col text-end">
                           <label class="switch">
                             <input type="checkbox" id="judul" checked>
                             <span class="slider round"></span>
                           </label>
                          </div>
                       </div>
                        <select class="form-select">
                         <option>Semua</option>
                        </select>
                    </div>
                  
                    <div class="mb-3">
                        <div class="col-md-12 mb-1" style="display:flex;">
                          <div class="form-label" style="margin: 5px 70%  0px 0px;" class="form-label">Transaksi</div>
                           <!-- Slider -->
                           <div class="col text-end">
                           <label class="switch">
                             <input type="checkbox" id="judul" checked>
                             <span class="slider round"></span>
                           </label>
                          </div>
                       </div>
                        <select class="form-select">
                         <option>Transaksi</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <div class="col-md-12 mb-1" style="display:flex;">
                          <div class="form-label" style="margin: 5px 70%  0px 0px;" class="form-label">Otorisasi Minimal Harga</div>
                           <!-- Slider -->
                           <div class="col text-end">
                           <label class="switch">
                             <input type="checkbox" id="judul" checked>
                             <span class="slider round"></span>
                           </label>
                          </div>
                       </div>
                        <select class="form-select">
                        <option>Semua</option>
                        </select>
                    </div>
                    </div>

                    <div class="row m-10">
                     <div class="col-md-4">
                      <div class="mb-3">
                      <input type="checkbox" class="form-check-input" id="po" checked>
                      <label class="form-check-label" for="po">PO</label>
                     </div>
                     </div>
                     <div class="col-md-4">
                     <div class="mb-3">
                        <input type="checkbox" class="form-check-input" id="payment" checked>
                        <label class="form-check-label" for="payment">Payment</label>
                     </div>
                     </div>
                     <div class="col-md-4">
                     <div class="mb-3">
                        <input type="checkbox" class="form-check-input" id="finish" checked>
                        <label class="form-check-label" for="finish">Finish</label>
                     </div>
                     </div>
                     <div class="col-md-12 mb-3" style="display:flex;">
                        <div style="margin: 5px 20px 0px 0px;" class="form-label">* Tampil di judul laporan</div>
                        <!-- Slider -->
                        <label class="switch">
                             <input type="checkbox" id="judul" checked>
                             <span class="slider round"></span>
                        </label>
                    </div>
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