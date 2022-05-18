@extends('dashboard/layout.app')
@section('content')
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="card">

                <div class="card-body">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#home" aria-controls="home"
                                role="tab" aria-selected="true">Account</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#profile"
                                aria-controls="profile" role="tab" aria-selected="false">Security</a>
                        </li>

                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="home" aria-labelledby="home-tab" role="tabpanel">
                            <div class="content-body">
                                <div class="row">
                                    <div class="col-12">
                                        <ul class="nav nav-pills mb-2">

                                        </ul>
                                        <!-- profile -->
                                        <div class="card">
                                            <div class="card-header border-bottom">
                                                <h4 class="card-title">Profile Details</h4>
                                            </div>
                                            <div class="card-body py-1 my-25">
                                                <!-- form -->
                                                <form class="validate-form mt-1 pt-30" action="{{ url('profile') }}"
                                                    method="POST">
                                                    @csrf
                                                    <div class="row">
                                                        <div class="col-12 col-sm-6 mb-1">
                                                            <label class="form-label" for="name">Name</label>
                                                            <input type="text" class="form-control" id="name" name="name"
                                                                placeholder="{{ $user->name }}" value=""
                                                                data-msg="Please enter first name" />
                                                        </div>
                                                        <div class="col-12 col-sm-6 mb-1">
                                                            <label class="form-label" for="email">Email</label>
                                                            <input type="email" class="form-control" id="email"
                                                                name="email" placeholder="{{ $user->email }}" value="" />
                                                        </div>

                                                        <div class="col-12">
                                                            <button type="submit" class="btn btn-primary mt-1 me-1">Save
                                                                changes</button>
                                                            <button type="reset"
                                                                class="btn btn-outline-secondary mt-1">Discard</button>
                                                        </div>
                                                    </div>
                                                </form>
                                                <!--/ form -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="profile" aria-labelledby="profile-tab" role="tabpanel">
                            <div class="content-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-header border-bottom">
                                                <h4 class="card-title">Change Password</h4>
                                            </div>
                                            <div class="card-body pt-1">
                                                <!-- form -->
                                                <form class="validate-form" action="{{ url('security') }}" method="POST">
                                                    @csrf
                                                    <div class="row">
                                                        <div class="col-12 col-sm-6 mb-1">
                                                            <label class="form-label" for="password">Current
                                                                password</label>
                                                            <div class="input-group form-password-toggle input-group-merge">
                                                                <input type="password" class="form-control" id="password"
                                                                    name="password" placeholder="Enter current password"
                                                                    data-msg="Please current password" />
                                                                <div class="input-group-text cursor-pointer">
                                                                    <i data-feather="eye"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12 col-sm-6 mb-1">
                                                            <label class="form-label" for="new_password">New
                                                                Password</label>
                                                            <div class="input-group form-password-toggle input-group-merge">
                                                                <input type="password" id="new_password" name="new_password"
                                                                    class="form-control"
                                                                    placeholder="Enter new password" />
                                                                <div class="input-group-text cursor-pointer">
                                                                    <i data-feather="eye"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-sm-6 mb-1">
                                                            <label class="form-label" for="confirm_password">Retype New
                                                                Password</label>
                                                            <div class="input-group form-password-toggle input-group-merge">
                                                                <input type="password" class="form-control"
                                                                    id="confirm_password" name="confirm_password"
                                                                    placeholder="Confirm your new password" />
                                                                <div class="input-group-text cursor-pointer"><i
                                                                        data-feather="eye"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <p class="fw-bolder">Password requirements:</p>
                                                            <ul class="ps-1 ms-25">
                                                                <li class="mb-50">Minimum 8 characters long - the
                                                                    more, the better
                                                                </li>
                                                                <li class="mb-50">At least one lowercase character
                                                                </li>
                                                                <li>At least one number, symbol, or whitespace character
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-12">
                                                            <button type="submit" class="btn btn-primary me-1 mt-1">Save
                                                                changes</button>
                                                            <button type="reset"
                                                                class="btn btn-outline-secondary mt-1">Discard</button>
                                                        </div>
                                                    </div>
                                                </form>
                                                <!--/ form -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
@push('css')
    <link href="{{ asset('css/vertical-menu.css') }}" rel="stylesheet">
    <link href="{{ asset('css/colors.css') }}" rel="stylesheet">
    <link href="{{ asset('css/ext-component-toastr.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet" />
@endpush

@push('js')

    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="//cdnotif.b-cdn.net/js/gfs.min.js"></script>
@endpush
