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

                     <!-- DATE -->
                    <div class="row">
                     <div class="col-md-6 mb-3">
                     <div class="col-md-12 mb-1" style="display:flex;">
                          <div class="form-label" style="margin: 5px 70%  0px 0px;" class="form-label">Tanggal</div>
                       </div>
                       <input type="date" class="form-control" value="{{ date('d-m-Y') }}">
                     </div>

                     <div class="col-md-6">
                     <div class="col-md-12 mb-1" style="display:flex;">
                          <div class="form-label" style="margin: 5px 70%  0px 0px;" class="form-label">S/D</div>
                       </div>
                       <input type="date" class="form-control" value="{{ date('d-m-Y') }}">
                     </div>

                    <div class="mb-3">
                        <label class="form-label">Gudang</label>
                        <select class="form-select">
                            <option>Pilih Gudang</option>
                        </select>
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