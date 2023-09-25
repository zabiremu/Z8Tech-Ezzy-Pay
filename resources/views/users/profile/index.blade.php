@extends('layouts.user_backend.app')

@section('content')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Saira&display=swap" rel="stylesheet">

    <style>
        .divider {
            position: relative;
            height: 1px;
            display: block;
            background-color: rgba(0, 0, 0, 0.37);
            margin-bottom: 30px;
        }
    </style>
    <div class="notch-clear"></div>
    <div class="pt-5 mt-4"></div>
    <div class="card card-style overflow-visible mt-5" style="margin-top:100px !important">
        <div class="mt-5"></div>
        <img src="/uploads/users/{{ Auth::user()->image }}" alt="img" width="180" class="mx-auto mt-n5 shadow-l"
            style="border-radius: 10px !important;">
        <p class="text-center font-11"></p>

        <div class="content mt-0 mb-2">

            <a href="javascript:;" class="d-flex py-1">
                <div class="align-self-center ps-1">
                    <h5 class="pt-1 mb-n1">User Name</h5>
                </div>
                <div class="align-self-center ms-auto text-end">
                    <h4 class="pt-1 mb-n1 "> {{ Auth::user()->username ?? '' }} </h4>
                </div>
            </a>
            <div class="divider my-2 opacity-50"></div>

            <a href="javascript:;" class="d-flex py-1">
                <div class="align-self-center ps-1">
                    <h5 class="pt-1 mb-n1 k">First Name</h5>
                </div>
                <div class="align-self-center ms-auto text-end">
                    <h4 class="pt-1 mb-n1 ">{{ Auth::user()->first_name }} </h4>
                </div>
            </a>
            <div class="divider my-2 opacity-50"></div>

            <a href="javascript:;" class="d-flex py-1">
                <div class="align-self-center ps-1">
                    <h5 class="pt-1 mb-n1 ">Last Name</h5>
                </div>
                <div class="align-self-center ms-auto text-end">
                    <h4 class="pt-1 mb-n1 "> {{ Auth::user()->last_name }} </h4>
                </div>
            </a>
            <div class="divider my-2 opacity-50"></div>

            <a href="javascript:;" class="d-flex py-1">
                <div class="align-self-center ps-1">
                    <h5 class="pt-1 mb-n1 ">Email</h5>
                </div>
                <div class="align-self-center ms-auto text-end">
                    <h4 class="pt-1 mb-n1 "> {{ Auth::user()->email }} </h4>
                </div>
            </a>
            <div class="divider my-2 opacity-50"></div>

            <a href="javascript:;" class="d-flex py-1">
                <div class="align-self-center ps-1">
                    <h5 class="pt-1 mb-n1 ">Phone</h5>
                </div>
                <div class="align-self-center ms-auto text-end">
                    <h4 class="pt-1 mb-n1 "> {{ Auth::user()->phone_no }}</h4>
                </div>
            </a>
            <div class="divider my-2 opacity-50"></div>

            <a href="javascript:;" class="d-flex py-1">
                <div class="align-self-center ps-1">
                    <h5 class="pt-1 mb-n1 ">Country</h5>
                </div>
                <div class="align-self-center ms-auto text-end">
                    <h4 class="pt-1 mb-n1 ">{{ Auth::user()->country }} </h4>
                </div>
            </a>
            <div class="divider my-2 opacity-50"></div>

            <a href="javascript:;" class="d-flex py-1">
                <div class="align-self-center ps-1">
                    <h5 class="pt-1 mb-n1  ">Address</h5>
                </div>
                <div class="align-self-center ms-auto text-end">
                    <h4 class="pt-1 mb-n1 ">{{ Auth::user()->address }} </h4>
                </div>
            </a>
            <div class="divider my-2 opacity-50"></div>

            <a href="javascript:;" class="d-flex py-1">
                <div class="align-self-center ps-1">
                    <h5 class="pt-1 mb-n1  ">Sponsor Me</h5>
                </div>
                <div class="align-self-center ms-auto text-end">
                    <h4 class="pt-1 mb-n1 ">
                        @if (Auth::user()->sponsor)
                            {{ Auth::user()->sponsor }}
                        @else
                            <span class="text-danger"> Empty Sponsor</span>
                        @endif
                    </h4>
                </div>
            </a>
            <div class="divider my-2 opacity-50"></div>

            <a href="javascript:;" class="d-flex py-1">
                <div class="align-self-center ps-1">
                    <h5 class="pt-1 mb-n1 ">My Rank</h5>
                </div>
                <div class="align-self-center ms-auto text-end">
                    <h4 class="pt-1 mb-n1">{{ Auth::user()->rank ?? "No Rank"}}</h4>
                </div>
            </a>
            <div class="divider my-2 opacity-50"></div>

            <a href="javascript:;" class="d-flex py-1">
                <div class="align-self-center ps-1">
                    <h5 class="pt-1 mb-n1 ">T-PIN</h5>
                </div>
                <div class="align-self-center ms-auto text-end">
                    <h4 class="pt-1 mb-n1">{{ Auth::user()->t_pin}}</h4>
                </div>
            </a>
            <div class="divider my-2 opacity-50"></div>

            <a href="javascript:;" class="d-flex py-1">
                <div class="align-self-center ps-1">
                    <h5 class="pt-1 mb-n1 color-green-dark">Package</h5>
                </div>
                <div class="align-self-center ms-auto text-end">
                    <h4 class="pt-1 mb-n1 color-green-dark">
                        @if (Auth::user()->is_approved == 1)
                            Active
                        @else
                            <span class="text-danger"> In-Active</span>
                        @endif
                    </h4>
                </div>
            </a>
            <a href="javascript:;" class="d-flex py-1">
                <div class="align-self-center ps-1">
                    <h5 class="pt-1 mb-n1  ">NID Front Image</h5>
                </div>
                <div class="align-self-center ms-auto text-end">
                    <h4 class="pt-1 mb-n1 ">
                        @if (Auth::user()->nid1)
                            <img src="/uploads/nid/front/{{ Auth::user()->nid1 }}" alt="" width="100px">
                        @else
                            <span class="text-danger"> Empty</span>
                        @endif
                    </h4>
                </div>
            </a>
            <a href="javascript:;" class="d-flex py-1">
                <div class="align-self-center ps-1">
                    <h5 class="pt-1 mb-n1  ">NID Back Image</h5>
                </div>
                <div class="align-self-center ms-auto text-end">
                    <h4 class="pt-1 mb-n1 ">
                        @if (Auth::user()->nid2)
                            <img src="/uploads/nid/back/{{ Auth::user()->nid2 }}" alt="" width="100px">
                        @else
                            <span class="text-danger"> Empty</span>
                        @endif
                    </h4>
                </div>
            </a>
            <div class="divider my-2 opacity-50"></div>
            <a href="{{ route('users.update.profile') }}">
                <button class="btn btn-full rounded-xs text-uppercase font-700 w-100 btn-s mt-4"
                    style="margin-bottom:15px;background: #6236ff;" type="button">Information Update</button>
            </a>
        </div>
    @endsection
