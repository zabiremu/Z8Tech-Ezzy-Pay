@extends('layouts.user_backend.app')

@section('content')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Saira&display=swap" rel="stylesheet">
    <style>
        .title_style {
            position: absolute !important;
            left: 15px;
            color: #202020;
            opacity: 1 !important;
            top: -37px !important;
            font-size: 12px !important;
        }

        .mt_25 {
            margin-top: 25px;
        }

        .form-label.form-icon label {
            margin-left: -32px !important;
            display: none;
        }
    </style>
    <div class="card overflow-visible card-style">
        <div class="content mb-0">

            <h4 style="text-align: center;margin-bottom: 40px;">Update Profile</h4>

            <form class="demo-animation m-0"
                action="{{ route('users.update.information') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-custom form-label form-icon mb-3 mt_25">
                    <span class="title_style">First Name</span>
                    <i class="fa-solid fa-user"></i>
                    <input type="text" class="form-control rounded-xs" name="first_name" placeholder="First Name"
                        value="{{ Auth::user()->first_name }}"  required/>
                    @error('first_name')
                        <span style="color: rgba(173, 2, 2, 0.836)"></span>
                    @enderror
                    <label for="first_name" class="color-theme"> First Name </label>
                </div>

                <div class="form-custom form-label form-icon mb-3 mt_25">
                    <span class="title_style">Last Name </span>
                    <i class="fa-solid fa-user"></i>
                    <input type="text" class="form-control rounded-xs" name="last_name" placeholder="Last Name"
                        value="{{ Auth::user()->last_name }}" required/>
                    @error('last_name')
                        <span style="color: rgba(173, 2, 2, 0.836)"></span>
                    @enderror
                    <label for="last_name" class="color-theme"> Last Name </label>
                </div>


                <div class="form-custom form-label form-icon mb-3 mt_25">
                    <span class="title_style">country</span>
                    <i class="fa-solid fa-user"></i>
                    <input type="text" class="form-control rounded-xs" name="country" placeholder="country"
                        value="{{ Auth::user()->country }}" required/>
                    @error('country')
                        <span style="color: rgba(173, 2, 2, 0.836)"></span>
                    @enderror
                    <label for="country" class="color-theme"> Country </label>
                </div>

                <div class="form-custom form-label form-icon mb-3 mt_25">
                    <span class="title_style">address</span>
                    <i class="fa-solid fa-user"></i>
                    <input type="text" class="form-control rounded-xs" name="address" placeholder="address"
                        value="{{ Auth::user()->address }}" required/>
                    @error('address')
                        <span style="color: rgba(173, 2, 2, 0.836)"></span>
                    @enderror
                    <label for="address_1" class="color-theme"> Address </label>
                </div>

                <div class="form-custom form-label form-icon mb-3 mt_25">
                    <span class="title_style">Profile Image</span>
                    <i class="fa-solid fa-user"></i>
                    <input type="file" class="form-control rounded-xs" name="image"
                        value="" />
                  
                    <label for="address_1" class="color-theme">Profile Image </label>
                </div>

                <div class="form-custom form-label form-icon mb-3 mt_25">
                    <span class="title_style">NID Front Image</span>
                    <i class="fa-solid fa-user"></i>
                    <input type="file" class="form-control rounded-xs" name="nid1"
                        value="" />
                  
                    <label for="address_1" class="color-theme"> NID Front Image </label>
                </div>

                <div class="form-custom form-label form-icon mb-3 mt_25">
                    <span class="title_style">NID Back Image</span>
                    <i class="fa-solid fa-user"></i>
                    <input type="file" class="form-control rounded-xs" name="nid2"
                        value="" />
                  
                    <label for="address_1" class="color-theme">  NID Back Image </label>
                </div>

                <button class="btn btn-full rounded-xs text-uppercase font-700 w-100 btn-s mt-4"
                    style="margin-bottom:15px;background: linear-gradient(to right, #fab03c, #f3c411);">Submit</button>

            </form>

        </div>
    </div>

@endsection
