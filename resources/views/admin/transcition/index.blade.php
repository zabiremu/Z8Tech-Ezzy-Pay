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
                                    Send Form
                                </h3>
                            </div>
                        </div>

                        <form class="kt-form kt-form--label-right" id="form" action="{{route('admin.send.store')}}" method="POST">
                            @csrf                    

                            <div class="kt-portlet__body">
                                <div class="kt-section" style="margin: 0 0 0rem 0;">
                                    <div class="kt-section__content">

                                        <div class="form-group row">
                                            <div class="col-lg-12">
                                                <label class="form-control-label"> Amount </label>
                                                <input type="text" id="send_amount" name="send_amount"
                                                    class="form-control kt_touchspin_postfix" value="0"
                                                    placeholder="Enter amount for send">
                                                    @error('send_amount')
                                                    <span class="form-text kt_hide msg_text send_amount">{{$message}} </span>
                                                    @enderror
                                                
                                            </div>
                                        </div>

                                        <div class="form-group row mt-5">
                                            <div class="col-lg-12">
                                                <label class="form-control-lael"> User Name </label>
                                                <input type="text" name="receiver" id="receiver" class="form-control"
                                                    placeholder="" value="">
                                                    @error('receiver')
                                                    <span class="form-text kt_hide msg_text send_amount">{{$message}} </span>
                                                    @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="kt-portlet__foot">
                                <div class="kt-form__actions">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <button type="submit" class="btn btn-brand"> Send </button>
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
