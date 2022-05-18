@extends('dashboard/layout.app')
@section('content')
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item">
                        <a href="currencies">Currencies</a>
                    </li>
                    <li class="breadcrumb-item active">
                        Rates
                    </li>
                </ol>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-datatable">
                            <table id="rates" class="dt-complex-header table table-bordered table-responsive">
                                <thead>
                                    <tr>
                                        <th>Currencies Rates</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>123/USA</td>
                                    </tr>
                                    <tr>
                                        <td>123/PAK</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('css')
    <link href="{{ asset('css/vertical-menu.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@endpush
