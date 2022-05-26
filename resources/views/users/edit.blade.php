@extends('layouts.master')
@section('content')

					<!--begin::Wrapper-->
					<div class="w-lg-600px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">
						<!--begin::Form-->
						{{-- <form action="{{ route('update',$user->id) }}" method="POST" class="form w-100" novalidate="novalidate" id="kt_sign_up_form">
							@csrf							
							<!--begin::Heading-->
							<div class="mb-10 text-center">
								<!--begin::Title-->
								<h1 class="text-dark mb-3">Edit Your Account</h1>
								<!--end::Title-->
							</div>
							<!--end::Heading-->
							<!--begin::Input group-->
							<div class="row fv-row mb-7">
								<!--begin::Col-->
								<div class="col-xl-6">
									<label class="form-label fw-bolder text-dark fs-6">First Name</label>
									<input class="form-control form-control-lg form-control-solid" type="text" value={{ $user->first_name }}  name="first_name" />
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-xl-6">
									<label class="form-label fw-bolder text-dark fs-6">Last Name</label>
									<input class="form-control form-control-lg form-control-solid" type="text" value="{{ $user->last_name }}" name="last_name"  />
								</div>
								<!--end::Col-->
							</div>
							<!--end::Input group-->
							<!--begin::Input group-->
							<div class="fv-row mb-7">
								<label class="form-label fw-bolder text-dark fs-6">Email</label>
								<input class="form-control form-control-lg form-control-solid" type="email" value="{{ $user->email }}" name="email"  />
							</div>
							<!--end::Input group-->
							<!--begin::Input group-->
							<div class="fv-row mb-7">
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center mb-7">
                                        <!--begin::Avatar-->
										<div class="card card-flush py-4">
											<!--begin::Card header-->
												<!--begin::Card title-->
												<div class="card-title">
													<h2>Thumbnail</h2>
												</div>
												<!--end::Card title-->
											<!--end::Card header-->
											<!--begin::Card body-->
											<div class="">
												<!--begin::Image input-->
												<div class="image-input image-input-empty image-input-outline mb-3" data-kt-image-input="true" style="background-image: url({{ asset($user->img) }})">
													<!--begin::Preview existing avatar-->
													<div class="image-input-wrapper w-150px h-150px"></div>
													<!--end::Preview existing avatar-->
													<!--begin::Label-->
													<label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="" data-bs-original-title="Change avatar">
														<!--begin::Icon-->
														<i class="bi bi-pencil-fill fs-7"></i>
														<!--end::Icon-->
														<!--begin::Inputs-->
														<input type="file" name="avatar" accept=".png, .jpg, .jpeg">
														<input type="hidden" name="avatar_remove">
														<!--end::Inputs-->
													</label>
													<!--end::Label-->
													<!--begin::Cancel-->
													<span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="" data-bs-original-title="Cancel avatar">
														<i class="bi bi-x fs-2"></i>
													</span>
													<!--end::Cancel-->
													<!--begin::Remove-->
													<span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="" data-bs-original-title="Remove avatar">
														<i class="bi bi-x fs-2"></i>
													</span>
													<!--end::Remove-->
												</div>
												<!--end::Image input-->
												<!--begin::Description-->
												<div class="text-muted fs-7">Set the category thumbnail image. Only *.png, *.jpg and *.jpeg image files are accepted</div>
												<!--end::Description-->
											</div>
											<!--end::Card body-->
										</div>
                                        <!--end::Text-->
                                        <div class="d-flex justify-content-end">
                                            <!--begin::Switch-->
                                            <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
            
                                                <!--begin::Input-->
                                                <input class="form-check-input" name="github" type="checkbox" value="1" id="kt_modal_connected_accounts_github" checked="checked">
                                                <!--end::Input-->
                                                <!--begin::Label-->
                                                <span class="form-check-label fw-bold text-muted" for="kt_modal_connected_accounts_github">Status</span>
                                                <!--end::Label-->
                                            </label>
                                            <!--end::Switch-->
                                        </div>
        
                                    </div>
                                    <!--end::Item-->
                                </div>

							<!--end::Input group-->
							<!--begin::Actions-->
							<div class="text-center">								
								<button type="submit" id="kt_sign_up_submit" class="btn btn-lg btn-primary">
									<span class="indicator-label">Submit</span>
									<span class="indicator-progress">Please wait...
									<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
								</button>
							</div>
							<!--end::Actions-->
						</form> --}}


						<form action="{{route('update',$user->id)  }}" method="POST" enctype="multipart/form-data" class="form w-100" novalidate="novalidate" id="kt_sign_up_form">
							@csrf							
							<!--begin::Heading-->
							<div class="mb-10 text-center">
								<!--begin::Title-->
								<h1 class="text-dark mb-3">Edit your Account</h1>
								<!--end::Title-->
							</div>
							<!--end::Heading-->
							<!--begin::Input group-->
							<div class="row fv-row mb-7">
								<!--begin::Col-->
								<div class="col-xl-6">
									<label class="form-label fw-bolder text-dark fs-6">First Name</label>
									<input class="form-control form-control-lg form-control-solid" type="text" value="{{ $user->first_name }}"  name="first_name" />
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-xl-6">
									<label class="form-label fw-bolder text-dark fs-6">Last Name</label>
									<input class="form-control form-control-lg form-control-solid" type="text" value="{{ $user->last_name }}" name="last_name"  />
								</div>
								<!--end::Col-->
							</div>
							<!--end::Input group-->
							<!--begin::Input group-->
							<div class="fv-row mb-7">
								<label class="form-label fw-bolder text-dark fs-6">Email</label>
								<input class="form-control form-control-lg form-control-solid" disabled value="{{ $user->email }}"  />
							</div>
							<!--end::Input group-->
							<!--begin::Input group-->
							<div class="fv-row mb-10">
                                <div class="fv-row mb-8">
                                </div>
                                <div class="fv-row mb-2">
                                </div>
                            </div>
                            							<!--begin::Input group-->
							<div class="fv-row mb-7">
                                <!--begin::Item-->
                                <div class="d-flex align-items-center mb-7">
                                    <!--begin::Avatar-->
                                    <div class="card card-flush py-4">
                                        <!--begin::Card header-->
                                            <!--begin::Card title-->
                                            <div class="card-title">
                                                <h2>Thumbnail</h2>
                                            </div>
                                            <!--end::Card title-->
                                        <!--end::Card header-->
                                        <!--begin::Card body-->
                                        <div class="">
                                            <!--begin::Image input-->
                                            <div class="image-input image-input-empty image-input-outline mb-3" data-kt-image-input="true" style="background-image:url({{ $user->img ? asset($user->img) : asset('user_images/user-img.png') }})">
                                                <!--begin::Preview existing avatar-->
                                                <div class="image-input-wrapper w-150px h-150px"></div>
                                                <!--end::Preview existing avatar-->
                                                <!--begin::Label-->
                                                <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="" data-bs-original-title="Change avatar">
                                                    <!--begin::Icon-->
                                                    <i class="bi bi-pencil-fill fs-7"></i>
                                                    <!--end::Icon-->
                                                    <!--begin::Inputs-->
                                                    <input type="file" name="avatar" value="{{ $user->img }}" accept=".png, .jpg, .jpeg">
                                                    <input type="hidden" name="avatar_remove">
                                                    <!--end::Inputs-->
                                                </label>
                                                <!--end::Label-->
                                                <!--begin::Cancel-->
                                                <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="" data-bs-original-title="Cancel avatar">
                                                    <i class="bi bi-x fs-2"></i>
                                                </span>
                                                <!--end::Cancel-->
                                                <!--begin::Remove-->
                                                <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="" data-bs-original-title="Remove avatar">
                                                    <i class="bi bi-x fs-2"></i>
                                                </span>
                                                <!--end::Remove-->
                                            </div>
                                            <!--end::Image input-->
                                            <!--begin::Description-->
                                            <div class="text-muted fs-7">Set the category thumbnail image. Only *.png, *.jpg and *.jpeg image files are accepted</div>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Card body-->
                                    </div>
                                    <!--end::Text-->
                                    <div class="d-flex justify-content-end">
                                        <!--begin::Switch-->
                                        <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
        
                                            <!--begin::Input-->
                                            <input class="form-check-input" name="status" type="checkbox" @if($user->status == 1) value="1" checked="checked" @else value="0" @endif id="kt_modal_connected_accounts_github" >
                                            <!--end::Input-->
                                            <!--begin::Label-->
                                            <span class="form-check-label fw-bold text-muted" for="kt_modal_connected_accounts_github">Status</span>
                                            <!--end::Label-->
                                        </label>
                                        <!--end::Switch-->
                                    </div>
    
                                </div>
                                <!--end::Item-->
                            </div>

                         <!--end::Input group-->

							<!--end::Input group-->
							<!--begin::Actions-->
							<div class="text-center">								
								<button type="submit" id="kt_sign_up_submit" class="btn btn-lg btn-primary">
									<span class="indicator-label">Submit</span>
									<span class="indicator-progress">Please wait...
									<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
								</button>
							</div>
							<!--end::Actions-->
						</form>

						<!--end::Form-->
					</div>
					<!--end::Wrapper-->
@endsection
@section('script')
		<!--begin::Page Custom Javascript(used by this page)-->
		<script src="{{ asset('/js/custom/authentication/sign-up/general.js') }}"></script>


		<script>

			// Class definition
var KTSignupGeneral = function () {
    // Elements
    var form;
    var submitButton;
    var validator;
    var passwordMeter;

    // Handle form
    var handleForm = function (e) {
        // Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
        validator = FormValidation.formValidation(
            form,
            {
                fields: {
                    'first_name': {
                        validators: {
                            notEmpty: {
                                message: 'First Name is required'
                            }
                        }
                    },
                    'last_name': {
                        validators: {
                            notEmpty: {
                                message: 'Last Name is required'
                            }
                        }
                    },
                },
                plugins: {
                    trigger: new FormValidation.plugins.Trigger({
                        event: {
                            password: false
                        }
                    }),
                    bootstrap: new FormValidation.plugins.Bootstrap5({
                        rowSelector: '.fv-row',
                        eleInvalidClass: '',
                        eleValidClass: ''
                    })
                }
            }
        );

        // Handle form submit
        submitButton.addEventListener('click', function (e) {
            e.preventDefault();

            validator.validate().then(function (status) {
                if (status == 'Valid') {
                    // Show loading indication
                    submitButton.setAttribute('data-kt-indicator', 'on');

                    // Disable button to avoid multiple click 
                    submitButton.disabled = true;

                    // Simulate ajax request

                    var formData = new FormData(form);
                    $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        url: form.action,
                        type: form.method,
                        dataType: 'json',
                        data: formData,
                        cache: false,
                        contentType: false,
                        processData: false,
                        success: function (response, status) {
                            console.log(response);
                            if (response.status == 'success') {
                                ntoastr.success(response.message);
                                setTimeout(function () {
                                    $("form").find(":submit").prop('disabled', false);
                                }, 2000);
                                window.location.href = response['data']['redirect'];
                            } else {
                                ntoastr.error(response.message);
                                setTimeout(function () {
                                    pageLoginForm.find(":submit").prop('disabled', false);
                                }, 2000);
                            }
                        },
                        error: function (response, status) {
                            // console.log(response.responseJSON);
                            if (response.responseJSON.message !== undefined) {
                                toastr.error(response.responseJSON.message);
                            }
                        }
                    });
                    // end ajax request

                    // set timeout starts
                    setTimeout(function () {
                        // Hide loading indication
                        submitButton.removeAttribute('data-kt-indicator');

                        // Enable button
                        submitButton.disabled = false;

                        // Show message popup. For more info check the plugin's official documentation: https://sweetalert2.github.io/
                        Swal.fire({
                            text: "successfully",
                            icon: "success",
                            buttonsStyling: false,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn btn-primary"
                            }
                        }).then(function (result) {
                            if (result.isConfirmed) {
                                // form.reset();  // reset form                    
                                // passwordMeter.reset();  // reset password meter
                                form.submit();
                            }
                        });
                    }, 1500);
                } else {
                    // Show error popup. For more info check the plugin's official documentation: https://sweetalert2.github.io/
                    Swal.fire({
                        text: "Sorry, looks like there are some errors detected, please try again.",
                        icon: "error",
                        buttonsStyling: false,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn btn-primary"
                        }
                    });
                }
            });
        });

        // Handle password input
        form.querySelector('input[name="password"]').addEventListener('input', function () {
            if (this.value.length > 0) {
                validator.updateFieldStatus('password', 'NotValidated');
            }
        });
    }

    // Password input validation
    var validatePassword = function () {
        return (passwordMeter.getScore() === 100);
    }

    // Public functions
    return {
        // Initialization
        init: function () {
            // Elements
            form = document.querySelector('#kt_sign_up_form');
            submitButton = document.querySelector('#kt_sign_up_submit');
            passwordMeter = KTPasswordMeter.getInstance(form.querySelector('[data-kt-password-meter="true"]'));

            handleForm();
        }
    };
}();

// On document ready
KTUtil.onDOMContentLoaded(function () {
    KTSignupGeneral.init();
});

		</script>
@endsection