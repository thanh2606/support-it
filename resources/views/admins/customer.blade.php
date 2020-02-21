@extends('admins.layouts.master')

@section('title')
    Customer
@endsection

@section('content')
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <a href="{{ route('info-users.index') }}"><h3>Customer</h3></a>
                    <div class="x_content">
                        <button type="button" class="btn btn-success btn-xs createResource" data-toggle="modal"
                                data-target=".bs-example-modal-lg"><i class="fa fa-plus-square"></i> New account
                        </button>
                        {{--                        form create--}}
                        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"><span
                                                aria-hidden="true">×</span>
                                        </button>
                                        <h4 class="modal-title" id="myModalLabel">Add customer</h4>
                                    </div>
                                    <div class="modal-body">
                                        <form id="createResourceForm">
                                            @csrf
                                            <div class="form-group row">
                                                <label for="name"
                                                       class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                                <div class="col-md-6">
                                                    <input id="name" type="text"
                                                           class="form-control @error('name') is-invalid @enderror"
                                                           name="name" value="{{ old('name') }}" required
                                                           autocomplete="name" autofocus>

                                                    @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="email"
                                                       class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                                <div class="col-md-6">
                                                    <input id="email" type="email"
                                                           class="form-control @error('email') is-invalid @enderror"
                                                           name="email" value="{{ old('email') }}" required
                                                           autocomplete="email">

                                                    @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="password"
                                                       class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                                <div class="col-md-6">
                                                    <input id="password" type="password"
                                                           class="form-control @error('password') is-invalid @enderror"
                                                           name="password" required autocomplete="new-password">

                                                    @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="password-confirm"
                                                       class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                                <div class="col-md-6">
                                                    <input id="password-confirm" type="password" class="form-control"
                                                           name="password_confirmation" required
                                                           autocomplete="new-password">
                                                </div>
                                            </div>

                                            <div class="form-group row mb-0">
                                                <div class="col-md-6 offset-md-4" style="float: right">
                                                    <button type="submit" class="btn btn-primary" id="postResource">
                                                        {{ __('Register') }}
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="x_panel">
                        <div>
                            <h2>Customers</h2>
                        </div>
                        <div class="x_content">
                            <!-- start project list -->
                            <div id="session-table">
                                @include('admins.tables.customer')
                            </div>
                            <div class="modal fade bs-example-modal-lg1" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span
                                                    aria-hidden="true">×</span>
                                            </button>
                                            <h4 class="modal-title" id="myModalLabel">Edit customer</h4>
                                        </div>
                                        <div class="modal-body">
                                            {{--                                            form edit--}}
                                            <form class="form-horizontal form-label-left" id="editResourceForm">
                                                @csrf
                                                <div class="form-group">
                                                    <label
                                                        class="control-label col-md-3 col-sm-3 col-xs-12">Name</label>
                                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                                        <input type="text" class="form-control"
                                                               placeholder="Name of customer" name="name"
                                                               id="input-name-edit-form">
                                                        <p class="error" style="color: red"
                                                           id="error-name-edit-form"></p>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label
                                                        class="control-label col-md-3 col-sm-3 col-xs-12">Telephone
                                                        number</label>
                                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                                        <input type="text" class="form-control"
                                                               placeholder="Telephone number of customer"
                                                               name="telephone_number"
                                                               id="input-telephone_number-edit-form"/>
                                                        <p class="error" style="color: red"
                                                           id="error-telephone_number-edit-form"></p>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label
                                                        class="control-label col-md-3 col-sm-3 col-xs-12">Address</label>
                                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                                        <input type="text" class="form-control"
                                                               placeholder="Address of customer" name="address"
                                                               id="input-address-edit-form">
                                                        <p class="error" style="color: red"
                                                           id="error-address-edit-form"></p>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label
                                                        class="control-label col-md-3 col-sm-3 col-xs-12">Note</label>
                                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                                    <textarea class="form-control" rows="3"
                                                              placeholder="Note of customer"
                                                              name="note" id="input-note-edit-form"></textarea>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                                                        <button type="button" class="btn btn-primary"
                                                                data-dismiss="modal">Cancel
                                                        </button>
                                                        <button type="reset" class="btn btn-primary">Reset</button>
                                                        <button type="submit" class="btn btn-success"
                                                                id="postEditCategory" data_id="">Submit
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end project list -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ asset('admin/build/js/customer.js') }}"></script>
@endsection
