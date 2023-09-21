@extends('layouts.admin_backend.app')


@section('content')

<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">	
	<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid container-div"  id="kt_container">
		@include('alerts.alert')
		<div class="kt-portlet kt-portlet--mobile">
			<div class="kt-portlet__head kt-portlet__head--lg">
				<div class="kt-portlet__head-label">					
					<h3 class="kt-portlet__head-title page_data-portlet_head_title">
						Deposit Records
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
							<th>User Name</th>
							<th>User Number</th>
							<th>Ammount</th>
							<th>TXNID</th>
							<th>Type</th>
							<th>Status</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($data as $key=>$item)
						<tr>
							<td>{{++$key}}</td>
							<td>{{$item->users->username}}</td>
							<td>{{$item->user_number}}</td>
							<td>{{$item->send_amount}}</td>
							<td>{{$item->tranx_id}}</td>
							<td>{{$item->type}}</td>
							<td>
								@if ($item->status == 2)
									<span class="badge bg-danger rounded-lg">Rejected</span>
								@elseif ($item->status == 1)
									<span class="badge bg-success rounded-lg">Completed</span>
								@else
									<span class=" badge bg-info rounded-lg">Pending</span>
								@endif
							</td>
							<td>
								@if ($item->status == 0)
								<a class="btn btn-sm bg-info rounded-5" href="{{route('admin.approved',$item->id)}}">Accpect</a>

								<a class="btn btn-sm bg-danger rounded-5" href="{{route('admin.reject',$item->id)}}">Reject</a>
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
