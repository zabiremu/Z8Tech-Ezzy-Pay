@extends('layouts.admin_backend.app')


@section('content')
<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
	
	<div class="kt-subheader  kt-grid__item" id="kt_subheader">
		<div class="kt-container  kt-container--fluid ">
			<div class="kt-subheader__main">
				<h3 class="kt-subheader__title"> Admin </h3>
				<span class="kt-subheader__separator kt-subheader__separator--v"></span>
				<span class="kt-subheader__desc"> User </span>
			</div>
		</div>
	</div>
	
	<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid container-div"  id="kt_container">
		@include('alerts.alert')
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

				</x-u-i.data-table>
			</div>
		</div>
	</div>
</div>
@endsection
