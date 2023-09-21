@extends('layouts.admin_backend.app')


@section('content')
	@push('customCss')
	<style>
		.btn{
			padding:8px 20px;
			background:skyblue;
		}
	</style>
		
	@endpush
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

                    <!--<div class="kt-portlet__head-toolbar">
                             <div class="kt-portlet__head-wrapper">
                                                <a type="button" class="btn btn-primary mr-1" href="https://www.oceanezzy.life/admin/user_datatable?is_paid=1">active</a>
                                                <a type="button" class="btn btn-primary" href="https://www.oceanezzy.life/admin/user_datatable?is_paid=0">inactive</a>
                             </div>
                            </div>-->
                </div>
                <div class="kt-portlet__body">

                </div>

                <div class="kt-portlet__body kt-portlet__body--fit">

                    {{-- <div class="kt-datatable" id="ajax_data"></div> --}}

                    <x-u-i.data-table>

                        <tr>
                            <th>marquee Notice</th>
                            <td>{{ $settings->marquee_notice }}</td>
							<td><a href="{{route('admin.update.setting')}}" class="btn btn-sm form-group">update</a></td>
                        </tr>
                        <tr>
                            <th>minimum_transaction</th>
                            <td>{{ $settings->minimum_transaction }}</td>
							<td><a href="{{route('admin.update.setting')}}" class="btn btn-sm form-group">update</a></td>
                        </tr>
                        <tr>
                            <th>minimum_deposit</th>
                            <td>{{ $settings->minimum_deposit }}</td>
							<td><a href="{{route('admin.update.setting')}}" class="btn btn-sm form-group">update</a></td>
                        </tr>

                        <tr>
                            <th> withdraw_time_open</th>
                            <td> {{ $settings->withdraw_time_open }}</td>
							<td><a href="{{route('admin.update.setting')}}" class="btn btn-sm form-group">update</a></td>
                        </tr>
                        <tr>
                            <th>withdraw_time_close</th>
                            <td>{{ $settings->withdraw_time_close }}</td>
							<td><a href="{{route('admin.update.setting')}}" class="btn btn-sm form-group">update</a></td>
                        </tr>

                        <tr>
                            <th>trc20</th>
                            <td>{{ $settings->trc20 }}</td>
							<td><a href="{{route('admin.update.setting')}}" class="btn btn-sm form-group">update</a></td>
                        </tr>

                        <tr>
                            <th>n_a</th>
                            <td>{{ $settings->n_a }}</td>
							<td><a href="{{route('admin.update.setting')}}" class="btn btn-sm form-group">update</a></td>
                        </tr>



                        <tr>
                            <th>transaction_charge</th>
                            <td>{{ $settings->transaction_charge }}</td>
							<td><a href="{{route('admin.update.setting')}}" class="btn btn-sm form-group">update</a></td>

                        </tr>

                        <tr>
                            <th>decimal</th>
                            <td>{{ $settings->decimal }}</td>
							<td><a href="{{route('admin.update.setting')}}" class="btn btn-sm form-group">update</a></td>
                        </tr>

                        <tr>
                            <th>withdraw_charge</th>
                            <td>{{ $settings->withdraw_charge }}</td>
							<td><a href="{{route('admin.update.setting')}}" class="btn btn-sm form-group">update</a></td>
                        </tr>

                        <tr>
                            <th>maximum_withdraw</th>
                            <td>{{ $settings->maximum_withdraw }}</td>
							<td><a href="{{route('admin.update.setting')}}" class="btn btn-sm form-group">update</a></td>
                        </tr>

                        <tr>
                            <th>minimum_withdraw</th>
                            <td>{{ $settings->minimum_withdraw }}</td>
							<td><a href="{{route('admin.update.setting')}}" class="btn btn-sm form-group">update</a></td>
                        </tr>

                        <tr>
                            <th>minimum_exchange</th>
                            <td>{{ $settings->minimum_exchange }}</td>
							<td><a href="{{route('admin.update.setting')}}" class="btn btn-sm form-group">update</a></td>
                        </tr>

                        
                        <tr>
                            <th>registration fee</th>
                            <td>{{ $settings->registration }}</td>
							<td><a href="{{route('admin.update.setting')}}" class="btn btn-sm form-group">update</a></td>
                        </tr>

                        <tr>
                            <th>Nogod Phone Number</th>
                            <td>{{ $settings->nogodPhoneNumber }}</td>
							<td><a href="{{route('admin.update.setting')}}" class="btn btn-sm form-group">update</a></td>
                        </tr>
                        
                    </x-u-i.data-table>
                </div>
            </div>
        </div>
    </div>
@endsection
