@extends('layouts.login_signup_app')
@section('content-login-signup')
		<!--begin::Root-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Authentication - Signup Welcome Message -->
			<div class="d-flex flex-column flex-column-fluid">
				<!--begin::Content-->
				<div class="d-flex flex-column flex-column-fluid text-center p-10 py-lg-15">
					<!--begin::Logo-->
					<a href="javascript:;" class="mb-10 pt-lg-10">
						<img alt="Logo" src="{{ asset('media/logos/logo-1.svg') }}" class="h-40px mb-5" />
					</a>
					<!--end::Logo-->
					<!--begin::Wrapper-->
					<div class="pt-lg-10 mb-10">
						<!--begin::Logo-->
						<h1 class="fw-bolder fs-2qx text-gray-800 mb-7">Welcome to Metronic</h1>
						<!--end::Logo-->
						<!--begin::Message-->
						<div class="fw-bold fs-3 text-muted mb-15">Plan your blog post by choosing a topic creating
						<br />an outline and checking facts.</div>
						<!--end::Message-->
						<!--begin::Action-->
						<div class="text-center">
							<a href="{{ route('login') }}" class="btn btn-lg btn-primary fw-bolder">SignIn</a>
						</div>
						<!--end::Action-->
					</div>
					<!--end::Wrapper-->
					<!--begin::Illustration-->
					<div class="d-flex flex-row-auto bgi-no-repeat bgi-position-x-center bgi-size-contain bgi-position-y-bottom min-h-100px min-h-lg-350px" style="background-image: url({{ asset('/media/illustrations/sketchy-1/17.png') }}"></div>
					<!--end::Illustration-->
				</div>
				<!--end::Content-->
				<!--begin::Footer-->
				<div class="d-flex flex-center flex-column-auto p-10">
					<!--begin::Links-->
					<div class="d-flex align-items-center fw-bold fs-6">
						<a href="https://keenthemes.com" class="text-muted text-hover-primary px-2">About</a>
						<a href="mailto:support@keenthemes.com" class="text-muted text-hover-primary px-2">Contact</a>
						<a href="https://1.envato.market/EA4JP" class="text-muted text-hover-primary px-2">Contact Us</a>
					</div>
					<!--end::Links-->
				</div>
				<!--end::Footer-->
			</div>
			<!--end::Authentication - Signup Welcome Message-->
		</div>
		<!--end::Root-->

@endsection