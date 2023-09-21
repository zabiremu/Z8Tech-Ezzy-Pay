@extends('layouts.admin_backend.app')

@section('content')
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid container-div">
        @include('alerts.alert')
        <div class="row insert-form-row">

            <div class="col-lg-12">
                <div class="kt-portlet form-portlet" style="">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">
                                Update Form
                            </h3>
                        </div>
                    </div>

                    <form class="kt-form kt-form--label-right" id="form" action="{{route('admin.update.settings')}}" method="POST">
                        @csrf

                        <div class="kt-portlet__body">
                            <div class="kt-section" style="margin: 0 0 0rem 0;">
                                <!-- <h3 class="kt-section__title">
                                                    text
                                                </h3> -->
                                <div class="kt-section__content">

                                    <div class="form-group row">
                                        <div class="col-lg-12">
                                            <label class="form-control-label"> marquee Notice </label>
                                            <!--<input type="text" id="value" name="value" class="form-control" value="Well come to OCEAN TOUCH." placeholder="Enter  value">-->
                                            <textarea id="value" name="marquee_notice" class="form-control">{{$settings->marquee_notice}}</textarea>
                                            <span class="form-text text-muted kt_hide msg_text value"> </span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="kt-portlet__body">
                            <div class="kt-section" style="margin: 0 0 0rem 0;">
                                <!-- <h3 class="kt-section__title">
                                                    text
                                                </h3> -->
                                <div class="kt-section__content">

                                    <div class="form-group row">
                                        <div class="col-lg-12">
                                            <label class="form-control-label"> Withdraw time close </label>
                                            <!--<input type="text" id="value" name="value" class="form-control" value="Well come to OCEAN TOUCH." placeholder="Enter  value">-->
                                            <textarea id="value" name="withdraw_time_close" class="form-control">{{$settings->withdraw_time_close}}</textarea>
                                            <span class="form-text text-muted kt_hide msg_text value"> </span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="kt-portlet__body">
                            <div class="kt-section" style="margin: 0 0 0rem 0;">
                                <!-- <h3 class="kt-section__title">
                                                    text
                                                </h3> -->
                                <div class="kt-section__content">

                                    <div class="form-group row">
                                        <div class="col-lg-12">
                                            <label class="form-control-label"> Withdraw time open</label>
                                            <!--<input type="text" id="value" name="value" class="form-control" value="Well come to OCEAN TOUCH." placeholder="Enter  value">-->
                                            <input id="value" name="withdraw_time_open" class="form-control" value="{{$settings->withdraw_time_open}}"/>
                                            <span class="form-text text-muted kt_hide msg_text value"> </span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="kt-portlet__body">
                            <div class="kt-section" style="margin: 0 0 0rem 0;">
                                <!-- <h3 class="kt-section__title">
                                                    text
                                                </h3> -->
                                <div class="kt-section__content">

                                    <div class="form-group row">
                                        <div class="col-lg-12">
                                            <label class="form-control-label"> minimum deposit </label>
                                            <!--<input type="text" id="value" name="value" class="form-control" value="Well come to OCEAN TOUCH." placeholder="Enter  value">-->
                                            <input id="value" name="minimum_deposit" class="form-control" value="{{$settings->minimum_deposit}}">
                                            <span class="form-text text-muted kt_hide msg_text value"> </span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="kt-portlet__body">
                            <div class="kt-section" style="margin: 0 0 0rem 0;">
                                <!-- <h3 class="kt-section__title">
                                                    text
                                                </h3> -->
                                <div class="kt-section__content">

                                    <div class="form-group row">
                                        <div class="col-lg-12">
                                            <label class="form-control-label"> minimum transaction </label>
                                            <!--<input type="text" id="value" name="value" class="form-control" value="Well come to OCEAN TOUCH." placeholder="Enter  value">-->
                                            <input id="value" name="minimum_transaction" class="form-control" value="{{$settings->minimum_transaction}}">
                                            <span class="form-text text-muted kt_hide msg_text value"> </span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="kt-portlet__body">
                            <div class="kt-section" style="margin: 0 0 0rem 0;">
                                <!-- <h3 class="kt-section__title">
                                                    text
                                                </h3> -->
                                <div class="kt-section__content">

                                    <div class="form-group row">
                                        <div class="col-lg-12">
                                            <label class="form-control-label"> minimum_exchange </label>
                                            <!--<input type="text" id="value" name="value" class="form-control" value="Well come to OCEAN TOUCH." placeholder="Enter  value">-->
                                            <input id="value" name="minimum_exchange" class="form-control" value="{{$settings->minimum_exchange}}"> 
                                            <span class="form-text text-muted kt_hide msg_text value"> </span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="kt-portlet__body">
                            <div class="kt-section" style="margin: 0 0 0rem 0;">
                                <!-- <h3 class="kt-section__title">
                                                    text
                                                </h3> -->
                                <div class="kt-section__content">

                                    <div class="form-group row">
                                        <div class="col-lg-12">
                                            <label class="form-control-label"> trc20 </label>
                                            <!--<input type="text" id="value" name="value" class="form-control" value="Well come to OCEAN TOUCH." placeholder="Enter  value">-->
                                            <input id="value" name="trc20" class="form-control" value="{{$settings->trc20}}">
                                            <span class="form-text text-muted kt_hide msg_text value"> </span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="kt-portlet__body">
                            <div class="kt-section" style="margin: 0 0 0rem 0;">
                                <!-- <h3 class="kt-section__title">
                                                    text
                                                </h3> -->
                                <div class="kt-section__content">

                                    <div class="form-group row">
                                        <div class="col-lg-12">
                                            <label class="form-control-label">transaction charge </label>
                                            <!--<input type="text" id="value" name="value" class="form-control" value="Well come to OCEAN TOUCH." placeholder="Enter  value">-->
                                            <input id="value" name="transaction_charge" class="form-control" value="{{$settings->transaction_charge}}"></input>
                                            <span class="form-text text-muted kt_hide msg_text value"> </span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="kt-portlet__body">
                            <div class="kt-section" style="margin: 0 0 0rem 0;">
                                <!-- <h3 class="kt-section__title">
                                                    text
                                                </h3> -->
                                <div class="kt-section__content">

                                    <div class="form-group row">
                                        <div class="col-lg-12">
                                            <label class="form-control-label">n/a </label>
                                            <!--<input type="text" id="value" name="value" class="form-control" value="Well come to OCEAN TOUCH." placeholder="Enter  value">-->
                                            <input id="value" name="n_a" class="form-control"  value="{{$settings->n_a}}"></input>
                                            <span class="form-text text-muted kt_hide msg_text value"> </span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="kt-portlet__body">
                            <div class="kt-section" style="margin: 0 0 0rem 0;">
                                <!-- <h3 class="kt-section__title">
                                                    text
                                                </h3> -->
                                <div class="kt-section__content">

                                    <div class="form-group row">
                                        <div class="col-lg-12">
                                            <label class="form-control-label"> decimal </label>
                                            <!--<input type="text" id="value" name="value" class="form-control" value="Well come to OCEAN TOUCH." placeholder="Enter  value">-->
                                            <input id="value" name="decimal" class="form-control"  value="{{$settings->decimal}}">
                                            <span class="form-text text-muted kt_hide msg_text value"> </span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="kt-portlet__body">
                            <div class="kt-section" style="margin: 0 0 0rem 0;">
                                <!-- <h3 class="kt-section__title">
                                                    text
                                                </h3> -->
                                <div class="kt-section__content">

                                    <div class="form-group row">
                                        <div class="col-lg-12">
                                            <label class="form-control-label"> withdraw charge </label>
                                            <!--<input type="text" id="value" name="value" class="form-control" value="Well come to OCEAN TOUCH." placeholder="Enter  value">-->
                                            <input id="value" name="withdraw_charge" class="form-control"  value="{{$settings->withdraw_charge}}">
                                            <span class="form-text text-muted kt_hide msg_text value"> </span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="kt-portlet__body">
                            <div class="kt-section" style="margin: 0 0 0rem 0;">
                                <!-- <h3 class="kt-section__title">
                                                    text
                                                </h3> -->
                                <div class="kt-section__content">

                                    <div class="form-group row">
                                        <div class="col-lg-12">
                                            <label class="form-control-label">maximum withdraw</label>
                                            <!--<input type="text" id="value" name="value" class="form-control" value="Well come to OCEAN TOUCH." placeholder="Enter  value">-->
                                            <input id="value" name="maximum_withdraw" class="form-control"  value="{{$settings->maximum_withdraw}}"></input>
                                            <span class="form-text text-muted kt_hide msg_text value"> </span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="kt-portlet__body">
                            <div class="kt-section" style="margin: 0 0 0rem 0;">
                                <!-- <h3 class="kt-section__title">
                                                    text
                                                </h3> -->
                                <div class="kt-section__content">

                                    <div class="form-group row">
                                        <div class="col-lg-12">
                                            <label class="form-control-label">minimum withdraw </label>
                                            <!--<input type="text" id="value" name="value" class="form-control" value="Well come to OCEAN TOUCH." placeholder="Enter  value">-->
                                            <input id="value" name="minimum_withdraw" class="form-control"  value="{{$settings->minimum_withdraw}}">
                                            <span class="form-text text-muted kt_hide msg_text value"> </span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="kt-portlet__body">
                            <div class="kt-section" style="margin: 0 0 0rem 0;">
                                <!-- <h3 class="kt-section__title">
                                                    text
                                                </h3> -->
                                <div class="kt-section__content">

                                    <div class="form-group row">
                                        <div class="col-lg-12">
                                            <label class="form-control-label">registration </label>
                                            <!--<input type="text" id="value" name="value" class="form-control" value="Well come to OCEAN TOUCH." placeholder="Enter  value">-->
                                            <input id="value" name="registration" class="form-control"  value="{{$settings->registration}}">
                                            <span class="form-text text-muted kt_hide msg_text value"> </span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        
                        <div class="kt-portlet__body">
                            <div class="kt-section" style="margin: 0 0 0rem 0;">
                                <!-- <h3 class="kt-section__title">
                                                    text
                                                </h3> -->
                                <div class="kt-section__content">

                                    <div class="form-group row">
                                        <div class="col-lg-12">
                                            <label class="form-control-label">Nogod Phone Number </label>
                                            <!--<input type="text" id="value" name="value" class="form-control" value="Well come to OCEAN TOUCH." placeholder="Enter  value">-->
                                            <input id="value" name="nogodPhoneNumber" class="form-control"  value="{{$settings->nogodPhoneNumber}}">
                                            <span class="form-text text-muted kt_hide msg_text value"> </span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="kt-portlet__foot">
                            <div class="kt-form__actions">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <button type="submit" class="btn btn-brand"> Update </button>
                                        <!-- <button type="reset" class="btn btn-secondary"> Cancel </button> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
