@extends('layouts.admin_backend.app')


@section('content')
    <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
        <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid container-div" id="kt_container">

            <div class="kt-portlet kt-portlet--mobile">
                <div class="kt-portlet__head kt-portlet__head--lg">
                    <div class="kt-portlet__head-label">
                        <h4 class="kt-portlet__head-title page_data-portlet_head_title">
                            Varified Users
                        </h4>
                    </div>                                                                                                                                                                           </div>-->
                </div>

                <div class="kt-portlet__body kt-portlet__body--fit">
                    @include('alerts.alert')
                    <x-u-i.data-table>

                        <thead>
                            <th>#</th>
                            <th>Image</th>
                            <th>user</th>
                            <th>Reference</th>
                            <th>Phone</th>
                            <th>nid_status</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </thead>

                        <tbody>
                            @foreach ($data as $key => $item)
                                @php
                                    $reference = App\Models\User::where('username', $item->sponsor)->first();
                                @endphp
                                <tr>
                                    <td>{{ ++$key }}</td>
                                    <td><img src="{{ $item->image ?? '' }}" height="50px" width="50px"></td>
                                    <td>{{ $item->username }}</td>
                                    <td>
                                        @if ($reference)
                                            <span class="badge bg-info rounded-lg">{{ $reference->username }}</span>
                                        @else
                                            <span class=" badge bg-danger rounded-lg">No reference</span>
                                        @endif
                                    </td>
                                    <td>{{ $item->phone_no }}</td>
                                    <td>
                                        @if ($item->nid_verified == 1)
                                            <span class="badge bg-info rounded-lg">Verified</span>
                                        @else
                                            <span class=" badge bg-danger rounded-lg">Unverified</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($item->is_approved == 1)
                                            <span class="badge bg-info rounded-lg">Active</span>
                                        @else
                                            <span class=" badge bg-danger rounded-lg">inactive</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.edit', ['id'=>$item->id]) }}" class="btn btn-sm btn-primary">Edit</a>
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
