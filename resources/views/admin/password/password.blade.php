@extends('layouts.admin_backend.app')


@section('content')
    <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

        <div class="kt-subheader  kt-grid__item" id="kt_subheader">
            <div class="kt-container  kt-container--fluid ">
                <div class="kt-subheader__main">
                    <span class="kt-subheader__desc page_data-subheader_title">password update </span>
                </div>
            </div>
        </div>

        <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid container-div">
            @include('alerts.alert')
            <div class="row insert-form-row">
                <div class="col-lg-12">
                    <div class="kt-portlet form-portlet">
                        <div class="kt-portlet__head">
                            <div class="kt-portlet__head-label">
                                <h3 class="kt-portlet__head-title"> Password Update</h3>
                            </div>
                        </div>

                        <form class="kt-form kt-form--label-right" method="POST"
                            action="{{ route('admin.userPassword.store') }}">

                            @csrf

                            <div class="kt-portlet__body">
                                <div class="kt-section" style="margin: 0 0 0rem 0;">
                                    <div class="form-group row">
                                        <div class="col-lg-12">
                                            <label class="form-control-labe"> Current password</label>
                                            <input type="text" name="password" class="form-control"
                                                placeholder="" required>
                                            @error('password')
                                                <span class="form-text kt_hide password msg_text text-danger">
                                                    {{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-lg-12">
                                            <label class="form-control-labe">New password</label>
                                            <input type="password" id="new_password" name="new_password"
                                                class="form-control" placeholder="" value="" required>
                                            @error('new_password')
                                                <span
                                                    class="form-text kt_hide password msg_text text-danger">{{ $message }}
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-lg-12">
                                            <label class="form-control-labe">Confirm new password</label>
                                            <input type="password" id="c" name="confirm_new_password"
                                                class="form-control" placeholder="" value="" required>
                                            @error('confirm_new_password')
                                                <span
                                                    class="form-text kt_hide password msg_text text-danger">{{ $message }}
                                                </span>
                                            @enderror
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="kt-portlet__foot">
                                <div class="kt-form__actions">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <button type="submit" class="btn btn-brand"> Update </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
