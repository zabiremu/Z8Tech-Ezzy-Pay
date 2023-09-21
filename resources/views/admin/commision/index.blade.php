@extends('layouts.admin_backend.app')


@section('content')
    <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

        <div class="kt-subheader  kt-grid__item" id="kt_subheader">
            <div class="kt-container  kt-container--fluid ">

                <div class="kt-subheader__main">
                    <h3 class="kt-subheader__title"> Admin </h3>
                    <span class="kt-subheader__separator kt-subheader__separator--v"></span>
                    <span class="kt-subheader__desc"> Rank Commission Send </span>
                </div>
            </div>
        </div>

        <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid container-div">
            @include('alerts.alert')
            <div class="row insert-form-row">

                <div class="col-lg-12">
                    <div class="kt-portlet form-portlet"
                        style="background-image: url(https://www.oceanezzy.life/assets/media/withdraw/bitcoin_01.png);background-size: contain;background-color: #fffffff2;background-blend-mode: soft-light;">
                        <div class="kt-portlet__head">
                            <div class="kt-portlet__head-label">
                                <h3 class="kt-portlet__head-title">
                                    Send Form
                                </h3>
                            </div>
                        </div>

                        <form class="kt-form kt-form--label-right" id="form"
                            action="{{ route('admin.send.commisons') }}" method="POST">
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
                                                <span class="form-text text-muted kt_hide msg_text send_amount"> </span>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-lg-12">
                                                <label class="form-control-label"> Rank </label>
                                                <select class="form-control kt-selectpicker" id="rank_id" name="rank_id">
                                                    <option value="MFS  Member" selected> MFS Member </option>
                                                    <option value="MFS  Leader"> MFS Leader </option>
                                                    <option value="MFS  Manager"> MFS Manager </option>
                                                    <option value="MFS  Executive"> MFS Executive </option>
                                                    <option value="MFS  Director"> MFS Director </option>
                                                    <option value="MFS  COE"> MFS COE </option>
                                                    <option value="MFS  CEO"> MFS CEO </option>
                                                </select>
                                                <span class="form-text text-muted kt_hide msg_text rank_id"> </span>
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
    </div>
@endsection
