@extends('layouts.admin_backend.app')

@section('content')
    <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor">

        <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid container-div">

            <div class="row insert-form-row">

                <div class="col-lg-12">
                    <div class="kt-portlet form-portlet">
                        <div class="kt-portlet__head">
                            <div class="kt-portlet__head-label">
                                <h3 class="kt-portlet__head-title page_data-portlet_head_title">User update</h3>
                            </div>
                        </div>

                        <form class="kt-form kt-form--label-right" id="form" method="POST" action="{{ route('users.edit', ['id'=>$user->id]) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="kt-portlet__body">
                                <div class="kt-section" style="margin: 0 0 0rem 0;">

                                    <div class="form-group row">
                                        <div class="col-lg-12">
                                            <label class="form-control-labe ">First Name</label>
                                            <input type="text" name="first_name" class="form-control "
                                                placeholder="" value="{{ $user->first_name }}">
                                            <span class="form-text text-muted text-danger">@error('first_name')
                                                {{ $message }}
                                            @enderror</span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-12">
                                            <label class="form-control-label "> Last Name</label>
                                            <input type="text" id="last_name" name="last_name" class="form-control "
                                                placeholder="" value="{{ $user->last_name }}">
                                            <span class="form-text text-muted text-danger">@error('last_name')
                                                {{ $message }}
                                            @enderror</span>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-lg-12">
                                            <label class="form-control-label "> Username</label>
                                            <input type="text" id="username" name="username" class="form-control "
                                                placeholder="" value="{{ $user->username }}">
                                            <span class="form-text text-muted text-danger">@error('username')
                                                {{ $message }}
                                            @enderror</span>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-lg-12">
                                            <label class="form-control-label "> Email</label>
                                            <input type="text" id="email" name="email" class="form-control "
                                                placeholder="" value="{{ $user->email }}">
                                            <span class="form-text text-muted text-danger">@error('email')
                                                {{ $message }}
                                            @enderror</span>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-lg-12">
                                            <label class="form-control-label ">Phone</label>
                                            <input type="text" id="phone" name="phone_no" class="form-control "
                                                placeholder="" value="{{ $user->phone_no }}">
                                            <span class="form-text text-muted text-danger">@error('phone_no')
                                                {{ $message }}
                                            @enderror</span>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-lg-12">
                                            <label class="form-control-label ">Country</label>
                                            <input type="text" id="country" name="country" class="form-control "
                                                placeholder="" value="{{ $user->country }}">
                                            <span class="form-text text-muted text-danger">@error('country')
                                                {{ $message }}
                                            @enderror</span>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-lg-12">
                                            <label class="form-control-label ">Address</label>
                                            <input type="text" id="address" name="address" class="form-control "
                                                placeholder="" value="{{ $user->address }}">
                                            <span class="form-text text-muted text-danger">@error('address')
                                                {{ $message }}
                                            @enderror</span>
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <div class="col-lg-12">
                                            <label class="form-control-label ">TPIN</label>
                                            <input type="text" id="tpin" name="t_pin" class="form-control"
                                                placeholder="" value="{{ $user->t_pin }}">
                                            <span class="form-text text-muted text-danger">@error('t_pin')
                                                {{ $message }}
                                            @enderror</span>
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <div class="col-lg-12">
                                            <label class="form-control-label ">Sponsor</label>
                                            <input type="text" id="sponsor" name="sponsor" class="form-control"
                                                placeholder="" value="{{ $user->sponsor }}">
                                            <span class="form-text text-muted kt_hide sponsor text-danger">@error('sponsor')
                                                {{ $message }}
                                            @enderror</span>
                                        </div>
                                    </div>
                                    

                                    <div class="form-group row">
                                        <div class="col-lg-12">
                                            <label class="form-control-label ">RANK</label>
                                            <input type="text" id="rank" name="rank" class="form-control"
                                                placeholder="" value="{{ $user->rank }}">
                                            <span class="form-text text-muted kt_hide rank text-danger">@error('rank')
                                                {{ $message }}
                                            @enderror</span>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <div class="col-lg-12">
                                            <label class="form-control-label ">Bank</label>
                                            <input type="text" id="bank" name="bank" class="form-control"
                                                placeholder="" value="{{ $user->bank }}">
                                            <span class="form-text text-muted kt_hide bank text-danger">@error('bank')
                                                {{ $message }}
                                            @enderror</span>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-lg-12">
                                            <label class="form-control-label ">NID Card Images</label>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <img src="{{ $user->nid1 }}" alt="Front-image" style="height: 200px; weidth: 500px;">                  
                                                </div>
                                                <div class="col-md-6">
                                                    <img src="{{ $user->nid1 }}" alt="back-image" style="height: 200px; weidth: 500px;">                  
                                                </div>
                                            </div>                
                                            <span class="form-text text-muted kt_hide rank text-danger">@error('rank')
                                                {{ $message }}
                                            @enderror</span>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-lg-12">
                                            <label class="form-control-label ">Nid Status</label>
                                            <select class="form-select form-control" name="nid_verified" aria-label="Default select example">
                                                <option selected value="">Change Status</option>
                                                <option value="1" @if($user->nid_verified==1) selected @endif>Approve</option>
                                                <option value="0" @if($user->nid_verified==0) selected @endif>Cancel</option>
                                              </select>
                                        </div>
                                        <span class="form-text text-muted kt_hide rank text-danger">@error('nid_verified')
                                            {{ $message }}
                                        @enderror</span>
                                    </div>

                                    {{-- <div class="form-group row">
                                        <div class="col-lg-12">
                                            <label class="form-control-label ">Express member 1/2/3 or 0</label>
                                            <input type="text" id="em_id" name="em_id" class="form-control"
                                                placeholder="" value="0">
                                            <span class="form-text text-muted kt_hide em_id"> </span>
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
                                    </div> --}}

                                </div>
                            </div>                            
                            <div class="row">
                                <div class="col-lg-12">
                                    <button type="submit" class="btn btn-brand"> Update </button>
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
