@extends('dashboard/layout.app')
@section('content')
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-start mb-0">DataTables</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Datatable</a>
                                    </li>
                                    <li class="breadcrumb-item active">Basic
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Row grouping -->
                <section id="row-grouping-datatable">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header border-bottom">
                                    <h4 class="card-title">Row Grouping</h4>
                                </div>
                                <div class="card-datatable">
                                    <table class="dt-row-grouping table">
                                        <thead>
                                            <tr>

                                                <th>Currency Code</th>
                                                <th>Rates</th>
                                                <th>Status</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($currencies as $data)
                                                <tr>
                                                    <td>
                                                        {{ $data['code'] }}
                                                    </td>
                                                    <td>
                                                        {{ $data['rate']}}
                                                    </td>
                                                    <td>
                                                        {{ $data['status'] }}
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--/ Row grouping -->
            </div>
        </div>
    </div>
@endsection


@push('css')
    <link href="{{ asset('css/dataTables.bootstrap5.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/responsive.bootstrap5.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/buttons.bootstrap5.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/rowGroup.bootstrap5.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/flatpickr.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/colors.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bordered-layout.css') }}" rel="stylesheet">
    <link href="{{ asset('css/vertical-menu.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
@endpush



@push('js')
    <script src="{{ URL::asset('/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('/js/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ URL::asset('/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ URL::asset('/js/responsive.bootstrap5.min.js') }}"></script>
    <script src="{{ URL::asset('/js/datatables.checkboxes.min.js') }}"></script>
    <script src="{{ URL::asset('/js/datatables.buttons.min.js') }}"></script>
    <script src="{{ URL::asset('/js/jszip.min.js') }}"></script>
    <script src="{{ URL::asset('/js/pdfmake.min.js') }}"></script>
    <script src="{{ URL::asset('/js/vfs_fonts.js') }}"></script>
    <script src="{{ URL::asset('/js/buttons.html5.min.js') }}"></script>
    <script src="{{ URL::asset('/js/buttons.print.min.js') }}"></script>
    <script src="{{ URL::asset('/js/dataTables.rowGroup.min.js') }}"></script>
    <script src="{{ URL::asset('/js/flatpickr.min.js') }}"></script>
    <script src="{{ URL::asset('/js/table-datatables-basic.js') }}"></script>
    <script>
        $(window).on('load', function() {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        });
    </script>
    <script>
        $('.dt-row-grouping').DataTable();
    </script>
@endpush
