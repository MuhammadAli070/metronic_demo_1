@extends('layouts.master')
@section('content')

					<!--begin::Content-->
					<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						<!--begin::Post-->
						<div class="post d-flex flex-column-fluid" id="kt_post">
							<!--begin::Container-->
							<div id="kt_content_container" class="container-xxl">
								<!--begin::Category-->
								<div class="card card-flush">
									<!--begin::Card header-->
									<div class="card-header align-items-center py-5 gap-2 gap-md-5">
										<!--begin::Card title-->
										<div class="card-title">
											<!--begin::Search-->
											<div class="d-flex align-items-center position-relative my-1">
												<!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
												<span class="svg-icon svg-icon-1 position-absolute ms-4">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black" />
														<path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black" />
													</svg>
												</span>
												<!--end::Svg Icon-->
												<input type="text" data-kt-ecommerce-category-filter="search" class="form-control form-control-solid w-250px ps-14" placeholder="Search Category" />
											</div>
											<!--end::Search-->
										</div>
										<!--end::Card title-->
									</div>
									<!--end::Card header-->
									<!--begin::Card body-->
									<div class="card-body pt-0">
										<!--begin::Table-->
										<table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_category_table">
											<!--begin::Table head-->
											<thead>
												<!--begin::Table row-->
												<tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
													<th class="w-10px pe-2">
														<div class="form-check form-check-sm form-check-custom form-check-solid me-3">
															UserName
														</div>
													</th>
													<th class="min-w-250px">Email</th>
													<th class="min-w-150px">Status</th>
													<th class="text-end min-w-70px">Status</th>
													<th class="text-end min-w-70px">Created At</th>
													<th class="text-end min-w-70px">Actions</th>

                                                </tr>
												<!--end::Table row-->
											</thead>
											<!--end::Table head-->
											<!--begin::Table body-->
											<tbody class="fw-bold text-gray-600">
												<!--begin::Table row-->
                                                @foreach ($users as $u )
                                                                    <tr>
                                                                        <!--begin::User=-->
                                                                        <td class="d-flex align-items-center">
                                                                            <!--begin:: Avatar -->
                                                                            <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                                                                <a href="javascript:;">
                                                                                    <div class="symbol-label">
																						@if($u->img == NULL)
                                                                                        <img src="{{ asset('user_images/user-img.png') }}" alt="img" class="w-100" />																							
																						@else
                                                                                        <img src="{{ asset($u->img) }}" alt="img" class="w-100" />
																						@endif	
																					</div>
                                                                                </a>
                                                                            </div>
                                                                            <!--end::Avatar-->
                                                                            <!--begin::User details-->
                                                                            <div class="d-flex flex-column">
                                                                                <a href="javascript:;" class="text-gray-800 text-hover-primary mb-1">{{ $u->first_name.' '.$u->last_name }}</a>
                                                                                {{-- <span>e.smith@kpmg.com.au</span> --}}
                                                                            </div>
                                                                            <!--begin::User details-->
                                                                        </td>
                                                                        <!--end::User=-->
                                                                        <!--begin::Role=-->
                                                                        <td>{{ $u->email }}</td>
                                                                        <!--end::Role=-->
                                                                        <!--begin::Two step=-->
                                                                        <td>
                                                                            @if ($u->status == 0)
                                                                            <span class="badge badge-light-warning fs-8 fw-bolder my-2">In-Active</span>                                    
                                                                            @else
                                                                            <span class="badge badge-light-success fs-8 fw-bolder my-2">Active</span>
                                                                            @endif
                                                                        </td>
                                                                        <td>
                                                                            @if ($u->status == 0)
                                                                            <span class="badge badge-light-warning fs-8 fw-bolder my-2">In-Active</span>                                    
                                                                            @else
                                                                            <span class="badge badge-light-success fs-8 fw-bolder my-2">Active</span>
                                                                            @endif
                                                                        </td>
                    
                                                                        <!--end::Two step=-->
                                                                        <!--begin::Joined-->
                                                                        <td>{{ date('d-m-Y', strtotime($u->created_at)) }}</td>
                                                                        <!--begin::Joined-->
                                                                        <!--begin::Action=-->
                                                                        <td class="text-end">
                                                                            <a href="#" class="btn btn-light btn-active-light-primary btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                                                            <span class="svg-icon svg-icon-5 m-0">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                                    <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="black" />
                                                                                </svg>
                                                                            </span>
                                                                            <!--end::Svg Icon--></a>
                                                                            <!--begin::Menu-->
                                                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                                                                                <!--begin::Menu item-->
                                                                                <div class="menu-item px-3">
                                                                                    <a href="{{ route('edit',$u->id) }}" class="menu-link px-3">Edit</a>
                                                                                </div>
                                                                                <!--end::Menu item-->
                                                                                <!--begin::Menu item-->
                                                                                <div class="menu-item px-3">
                                                                                    <a href="{{ route('delete',$u->id) }}" class="menu-link px-3" data-kt-users-table-filter="delete_row">Delete</a>
                                                                                </div>
                                                                                <!--end::Menu item-->
                                                                            </div>
                                                                            <!--end::Menu-->
                                                                        </td>
                                                                        <!--end::Action=-->
                                                                    </tr>
                    
                                                                    @endforeach
                                                                    
												<!--end::Table row-->
											</tbody>
											<!--end::Table body-->
										</table>
										<!--end::Table-->
									</div>
									<!--end::Card body-->
								</div>
								<!--end::Category-->
							</div>
							<!--end::Container-->
						</div>
						<!--end::Post-->
					</div>
					<!--end::Content-->
                    
@endsection
@section('script')
		<!--begin::Page Vendors Javascript(used by this page)-->
		<script src="{{ asset('/plugins/custom/datatables/datatables.bundle.js') }}"></script>
		<!--end::Page Vendors Javascript-->

        <!--begin::Page Custom Javascript(used by this page)-->
		<script src="{{ asset('/js/custom/apps/user-management/users/list/table.js') }}"></script>
		<script src="{{ asset('/js/custom/apps/user-management/users/list/export-users.js') }}"></script>
		<script src="{{ asset('/js/custom/apps/user-management/users/list/add.js') }}"></script>
		<script src="{{ asset('/js/widgets.bundle.js') }}"></script>
		<script src="{{ asset('/js/custom/widgets.js') }}"></script>
		<script src="{{ asset('/js/custom/apps/chat/chat.js') }}"></script>
		<script src="{{ asset('/js/custom/utilities/modals/upgrade-plan.js') }}"></script>
		<script src="{{ asset('/js/custom/utilities/modals/create-app.js') }}"></script>
		<script src="{{ asset('/js/custom/utilities/modals/users-search.js') }}"></script>
		<!--end::Page Custom Javascript-->

        <script src="{{ asset('/js/custom/apps/ecommerce/catalog/categories.js') }}"></script>

@endsection