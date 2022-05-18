@extends('dashboard/layout.app')
@section('content')
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <!-- apex charts section start -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div
                            class="
                                        card-header
                                        d-flex
                                        flex-sm-row flex-column
                                        justify-content-md-between
                                        align-items-start
                                        justify-content-start
                                    ">
                            <div>
                                <h4 class="card-title">Line Chart</h4>
                                <span class="card-subtitle text-muted">Commercial networks</span>
                            </div>
                            <div class="d-flex align-items-center">
                                <i class="font-medium-2" data-feather="calendar"></i>
                                <input type="text" class="form-control flat-picker bg-transparent border-0 shadow-none"
                                    placeholder="YYYY-MM-DD" />
                            </div>
                        </div>
                        <div class="card-body">
                            <div id="line-area-chart"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('css')
    <link href="//cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{ asset('css/apexcharts.css') }}" rel="stylesheet">
    <link href="{{ asset('css/flatpickr.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/color.css') }}" rel="stylesheet">
    <link href="{{ asset('css/vertical-menu.css') }}" rel="stylesheet">
    <link href="{{ asset('css/form-flat-pickr.css') }}" rel="stylesheet">
    <link href="{{ asset('css/chart-apex.css') }}" rel="stylesheet">
@endpush

@push('js')
    <script src="//cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script src="{{ URL::asset('/js/apexcharts.min.js') }}"></script>
    <script src="{{ URL::asset('/js/flatpickr.min.js') }}"></script>
    <script src="{{ URL::asset('/js/chart-apex.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#currencies').DataTable();
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#rates').DataTable();
        });
    </script>
@endpush
