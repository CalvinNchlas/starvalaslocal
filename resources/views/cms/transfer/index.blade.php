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
                                <h3 class="m-b-10">Transfer</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ breadcrumb ] end -->
    <div class="buying-form p-3 rounded-full card h-100" >
       <!-- Content Here -->
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
