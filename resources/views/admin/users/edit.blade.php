@extends('layouts.admin_backend.app')

@section('content')
    <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

        <div class="kt-subheader  kt-grid__item" id="kt_subheader">
            <div class="kt-container  kt-container--fluid ">
                <div class="kt-subheader__main">
                    <span class="kt-subheader__desc page_data-subheader_title">User Update </span>
                </div>
            </div>
        </div>

        <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid container-div">

            <div class="row insert-form-row">

                <div class="col-lg-12">
                    <div class="kt-portlet form-portlet">
                        <div class="kt-portlet__head">
                            <div class="kt-portlet__head-label">
                                <h3 class="kt-portlet__head-title page_data-portlet_head_title">User update</h3>
                            </div>
                        </div>

                        <form class="kt-form kt-form--label-right" id="form">

                            <input type="hidden" name="csrf_name"
                                value="d43dc0e4328fb604ce47a2a8efbef6f6c1c3e25744783857829557f19df41567686211501299ddb453293520ee6a6ee6842b4b24fbd2dff2b8ac8d65c0c36159">
                            <input type="hidden" name="id" value="48381">

                            <div class="kt-portlet__body">
                                <div class="kt-section" style="margin: 0 0 0rem 0;">

                                    <div class="form-group row">
                                        <div class="col-lg-12">
                                            <label class="form-control-labe ">First Name</label>
                                            <input type="text" id="first_name" name="first_name" class="form-control "
                                                placeholder="" value="Neoton">
                                            <span class="form-text text-muted kt_hide first_name msg_text "> </span>
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <div class="col-lg-12">
                                            <label class="form-control-label "> Last Name</label>
                                            <input type="text" id="last_name" name="last_name" class="form-control "
                                                placeholder="" value="Das">
                                            <span class="form-text text-muted kt_hide last_name msg_text "> </span>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-lg-12">
                                            <label class="form-control-label "> Email</label>
                                            <input type="text" id="email" name="email" class="form-control "
                                                placeholder="" value="motoplcux01@gmail.com">
                                            <span class="form-text text-muted kt_hide email msg_text "> </span>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-lg-12">
                                            <label class="form-control-label ">Phone</label>
                                            <input type="text" id="phone" name="phone" class="form-control "
                                                placeholder="" value="01617309070">
                                            <span class="form-text text-muted kt_hide phone msg_text "> </span>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-lg-12">
                                            <label class="form-control-label ">Country</label>
                                            <input type="text" id="country" name="country" class="form-control "
                                                placeholder="" value="">
                                            <span class="form-text text-muted kt_hide country msg_text "> </span>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-lg-12">
                                            <label class="form-control-label ">State</label>
                                            <input type="text" id="state" name="state" class="form-control "
                                                placeholder="" value="">
                                            <span class="form-text text-muted kt_hide state msg_text "> </span>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-lg-12">
                                            <label class="form-control-label ">City</label>
                                            <input type="text" id="city" name="city" class="form-control "
                                                placeholder="" value="">
                                            <span class="form-text text-muted kt_hide city msg_text"> </span>
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <div class="col-lg-12">
                                            <label class="form-control-label ">Zip</label>
                                            <input type="text" id="zip" name="zip" class="form-control"
                                                placeholder="" value="">
                                            <span class="form-text text-muted kt_hide zip msg_text"> </span>
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <div class="col-lg-12">
                                            <label class="form-control-label ">Password</label>
                                            <input type="text" id="password" name="password" class="form-control"
                                                placeholder="" value="Neoton1099128@">
                                            <span class="form-text text-muted kt_hide password msg_text"> </span>
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <div class="col-lg-12">
                                            <label class="form-control-label ">TPIN</label>
                                            <input type="text" id="tpin" name="tpin" class="form-control"
                                                placeholder="" value="1099">
                                            <span class="form-text text-muted kt_hide tpin msg_text"> </span>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-lg-12">
                                            <label class="form-control-label ">Address</label>
                                            <input type="text" id="address_1" name="address_1" class="form-control "
                                                placeholder="" value="">
                                            <span class="form-text text-muted kt_hide address_1 msg_text "> </span>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-lg-12">
                                            <label class="form-control-label ">Express member 1/2/3 or 0</label>
                                            <input type="text" id="em_id" name="em_id" class="form-control"
                                                placeholder="" value="0">
                                            <span class="form-text text-muted kt_hide em_id msg_text"> </span>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-lg-12">
                                            <label class="form-control-label ">ROI Active</label>
                                            <input type="text" id="is_roi" name="is_roi" class="form-control"
                                                placeholder="" value="1">
                                            <span class="form-text text-muted kt_hide is_roi msg_text"> </span>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-lg-12">
                                            <label class="form-control-label ">Send Active</label>
                                            <input type="text" id="is_send" name="is_send" class="form-control"
                                                placeholder="" value="1">
                                            <span class="form-text text-muted kt_hide is_send msg_text"> </span>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-lg-12">
                                            <label class="form-control-label ">Withdraw Active</label>
                                            <input type="text" id="is_withdraw" name="is_withdraw"
                                                class="form-control" placeholder="" value="1">
                                            <span class="form-text text-muted kt_hide is_withdraw msg_text"> </span>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-lg-12">
                                            <label class="form-control-label ">My Wallet to Booking Active</label>
                                            <input type="text" id="is_exchange_c2d" name="is_exchange_c2d"
                                                class="form-control" placeholder="" value="0">
                                            <span class="form-text text-muted kt_hide is_exchange_c2d msg_text"> </span>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-lg-12">
                                            <label class="form-control-label ">User Leader</label>
                                            <input type="text" id="is_tl" name="is_tl" class="form-control"
                                                placeholder="" value="0">
                                            <span class="form-text text-muted kt_hide is_tl msg_text"> </span>
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
    </div>
@endsection
