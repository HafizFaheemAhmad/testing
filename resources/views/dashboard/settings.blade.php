@extends('dashboard/layout.app')
@section('content')
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-body">
                <!-- create API key -->
                <div class="card">
                    <div class="card-header pb-0">
                        <h4 class="card-title">Currency Layer Key</h4>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item">
                                    <a href="dashboard">Home</a>
                                </li>
                                <li class="breadcrumb-item active">
                                    Settngs
                                </li>
                            </ol>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5 order-md-0 order-1">
                            <div class="card-body">
                                <!-- form -->
                                <form id="createApiForm" onsubmit="return false">
                                    <div class="mb-2">
                                        <label for="nameApiKey" class="form-label">API key here</label>
                                        <input class="form-control" type="text" name="apiKeyName"
                                            placeholder="Server Key 1" id="nameApiKey"
                                            data-msg="Please enter API key name" />
                                    </div>

                                    <button type="submit" class="btn btn-primary w-100">Save Key</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('css')
    <link href="{{ asset('css/color.css') }}" rel="stylesheet">
    <link href="{{ asset('css/vertical-menu.css') }}" rel="stylesheet">
@endpush
