@extends('layouts.admin_backend.app')


@section('content')
    <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
        @include('alerts.alert')
        <div class="kt-subheader  kt-grid__item" id="kt_subheader">
            <div class="kt-container  kt-container--fluid ">
                <div class="kt-subheader__main">
                    <h3 class="kt-subheader__title"> Admin </h3>
                    <span class="kt-subheader__separator kt-subheader__separator--v"></span>
                    <span class="kt-subheader__desc"> User </span>
                </div>
            </div>
        </div>

        <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid container-div" id="kt_container">

            <div class="kt-portlet kt-portlet--mobile">
                <div class="kt-portlet__head kt-portlet__head--lg">
                    <div class="kt-portlet__head-label">

                        <span class="kt-portlet__head-icon">
                            <i class="kt-font-brand flaticon2-line-chart"></i>
                        </span>

                        <h3 class="kt-portlet__head-title page_data-portlet_head_title">

                        </h3>
                    </div>
                </div>
                <div class="kt-portlet__body">

                </div>

                <div class="kt-portlet__body kt-portlet__body--fit">
                    <x-u-i.data-table>

                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Phone Number</th>
                                <th>Tpin</th>
                                <th>Amount</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($withDraw as  $key=>$item)
                                @php
                                    $user = App\Models\User::where('id', $item->user_id)->first();
                                @endphp
                                <tr>
                                    <td>{{++$key}}</td>
                                    <td>{{$user->first_name . ' ' . $user->last_name}}</td>
                                    <td>{{$item->bank }}</td>
                                    <td>{{$item->a_c }}</td>
                                    <td>{{$item->amount }}</td>
                                    <td>
                                        @if ($item->status == 0)
                                        <a class="btn btn-sm bg-info rounded-5" href="{{route('admin.edit_withdraw',$item->id)}}">Edit</a>        
                                        <a class="btn btn-sm bg-danger rounded-5" href="{{route('admin.withdraw.reject',$item->id)}}">Reject</a>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>

                    </x-u-i.data-table>
                </div>
            </div>
        </div>
    </div>
@endsection
