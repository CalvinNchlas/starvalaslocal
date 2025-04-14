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
                                <h3 class="m-b-10">Currency</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ breadcrumb ] end -->

            <!-- [ Main Content ] start -->
            <div class="row">
                <div class="col mb-4">
                    <div class="card h-100">
                        <div class="card-header">
                            <h4 class="d-inline">List of Currencies</h4>
                            <a href="{{ route('currency.create') }}" class="btn btn-primary btn-sm float-end"><i class="fa fa-plus"></i></a>
                            <button id="refresh" class="btn btn-secondary btn-sm float-end me-2"><i class="fa fa-sync-alt"></i></button>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <table class="table display responsive" id="datatable">
                                    <thead>
                                        <tr>
                                            <th>Flag</th>
                                            <th>Currency</th>
                                            <th>Name</th>
                                            <th>Denomination</th>
                                            <th>Buy Rate</th>
                                            <th>Sell Rate</th>
                                            <th>Mid Rate</th>
                                            <th>Max Addition</th>
                                            <th>Max Reduction</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ Main Content ] end -->

        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(function() {
            $('#datatable').DataTable({
                processing: true,
                serverSide: true,
                responsive: true,
                ajax: '{{ route('currency.datatable') }}',
                columns: [
                    { data: 'flag', name: 'flag', orderable: false, searchable: false },
                    { data: 'currency', name: 'currency' },
                    { data: 'name', name: 'name' },
                    { data: 'denomination', name: 'denomination' },
                    { data: 'buy_rate', name: 'buy_rate' },
                    { data: 'sell_rate', name: 'sell_rate' },
                    { data: 'mid_rate', name: 'mid_rate' },
                    { data: 'max_addition', name: 'max_addition' },
                    { data: 'max_reduction', name: 'max_reduction' },
                    { data: 'actions', name: 'actions', orderable: false, searchable: false }
                ],
                order: [[2, 'asc']]
            });
        });
    </script>
@endpush
