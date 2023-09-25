@extends('layouts.admin_backend.app')


@section('content')

    <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

        <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid container-div">
            @include('alerts.alert')
            <div class="row insert-form-row">

                <div class="col-lg-12">
                    <div class="kt-portlet form-portlet"
                        style="background-size: contain;background-color: #fffffff2;background-blend-mode: soft-light;">
                        <div class="kt-portlet__head">
                            <div class="kt-portlet__head-label">
                                <h3 class="kt-portlet__head-title">
                                    Withdraw Edit Form
                                </h3>
                            </div>
                        </div>

                        <form class="kt-form kt-form--label-right" id="form" action="{{route('admin.withdraw.approved',$withDraw->id)}}" method="POST">
                            @csrf                    
                            @method('PUT')
                            <div class="kt-portlet__body">
                                <div class="kt-section" style="margin: 0 0 0rem 0;">
                                    <div class="kt-section__content">

                                        <div class="form-group row">
                                            <div class="col-lg-12">
                                                <label class="form-control-label"> User Name</label>
                                                <input type="text" id="send_amount"
                                                class="form-control kt_touchspin_postfix" value="{{ $user->username }}" readonly>                                               
                                            </div>
                                        </div>

                                        <div class="form-group row mt-5">
                                            <div class="col-lg-12">
                                                <label class="form-control-lael">User T-PIN</label>
                                                <input type="text" class="form-control" value="{{ $user->t_pin }}" readonly>
                                            </div>
                                        </div>

                                        <div class="form-group row mt-5">
                                            <div class="col-lg-12">
                                                <label class="form-control-lael">Sending Number</label>
                                                <input type="text" class="form-control" value="{{ $withDraw->bank }}" readonly>
                                            </div>
                                        </div>

                                        <div class="form-group row mt-5">
                                            <div class="col-lg-12">
                                                <label class="form-control-lael">Request Ammount</label>
                                                <input type="text" class="form-control" value="{{ $withDraw->amount }}" readonly>
                                            </div>
                                        </div>

                                        <div class="form-group row mt-5">
                                            <div class="col-lg-12">
                                                <label class="form-control-lael">Transection PIN</label>
                                                <input type="text" class="form-control" name="transection_pin" placeholder="Nagad/Bkash Transection PIN">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="kt-portlet__foot">
                                <div class="kt-form__actions">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <button type="submit" class="btn btn-brand"> Success </button>
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
    </div>
@endsection
