@extends('layouts.user_backend.app')

@section('content')
    <div class="page-content footer-clear" style="margin-top:70px">
        @include('alerts.alert')
        <div class="card overflow-visible card-style">
            <div class="content mb-0">

                <h4> Password Update</h4>

                <form class="demo-animation m-0" action="{{ route('users.user_change_password') }}" method="POST">

                    @csrf
                    <div class="form-custom form-label form-icon mb-3">
                        <i class="bi font-14"></i>
                        <input type="password" class="form-control rounded-xs" name="password" id="password"
                            placeholder="Current Password" required />

                        <label for="pssword" class="color-theme"> Current Password </label>
                    </div>
                    @error('password')
                        <span class=" text-danger">
                            {{ $message }}</span>
                    @enderror
                    <div class="form-custom form-label form-icon mb-3">
                        <i class="bi font-14"></i>
                        <input type="password" class="form-control rounded-xs" name="new_password" id="new_password"
                            placeholder="New Password" required />

                        <label for="new_password" class="color-theme"> New Password </label>
                    </div>
                    @error('new_password')
                        <span class="form-text text-muted kt_hide password msg_text text-danger">{{ $message }}
                        </span>
                    @enderror

                    <div class="form-custom form-label form-icon mb-3">
                        <i class="bi font-14"></i>
                        <input type="password" class="form-control rounded-xs" name="confirm_new_password"
                            id="confirm_new_password" placeholder="Comfirm New Password" required />

                        <label for="confirm_new_password" class="color-theme"> Comfirm New Password </label>
                    </div>
                    @error('confirm_new_password')
                        <span class="form-text text-muted kt_hide password msg_text text-danger">{{ $message }}
                        </span>
                    @enderror

                    <button class="btn btn-full bg-blue-dark rounded-xs text-uppercase font-700 w-100 btn-s mt-4"
                        style="margin-bottom:15px">Update</button>

                </form>

            </div>
        </div>



        <div class="card overflow-visible card-style">
            <div class="content mb-0">

                <h4> TPIN Update</h4>

                <form class="demo-animation m-0" action="{{ route('users.user_change_tpin') }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-custom form-label form-icon mb-3">
                        <i class="bi font-14"></i>
                        <input type="number" class="form-control rounded-xs" name="tpin" id="TPIN"
                            placeholder="Current TPIN" required />

                        <label for="pssword" class="color-theme"> Current TPIN </label>
                    </div>
                    @error('tpin')
                        <span class="form-text text-muted kt_hide password msg_text text-danger">
                            {{ $message }}</span>
                    @enderror

                    <div class="form-custom form-label form-icon mb-3">
                        <i class="bi font-14"></i>
                        <input type="number" class="form-control rounded-xs" name="new_tpin" placeholder="New TPIN"
                            required />

                        <label for="new_tpin" class="color-theme"> New TPIN </label>
                    </div>
                    @error('new_tpin')
                        <span class="form-text text-muted kt_hide password msg_text text-danger">{{ $message }}
                        </span>
                    @enderror

                    <div class="form-custom form-label form-icon mb-3">
                        <i class="bi font-14"></i>
                        <input type="number" class="form-control rounded-xs" name="confirm_tpin" id="confirm_tpin"
                            placeholder="Comfirm New TPIN" required />

                        <label for="confirm_tpin" class="colAor-theme"> Comfirm New TPIN </label>
                    </div>
                    @error('confirm_tpin')
                        <span class="form-text text-muted kt_hide password msg_text text-danger">{{ $message }}
                        </span>
                    @enderror

                    <button class="btn btn-full bg-blue-dark rounded-xs text-uppercase font-700 w-100 btn-s mt-4"
                        style="margin-bottom:15px">Update</button>

                </form>

            </div>
        </div>
    </div>
@endsection
