@extends('layouts.app')

@section('styles')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css" integrity="sha512-EZSUkJWTjzDlspOoPSpUFR0o0Xy7jdzW//6qhUkoZ9c4StFkVsp9fbbd0O06p9ELS3H486m4wmrCELjza4JEog==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!-- FILE UPLODE CSS -->
        <link href="{{ asset('assets/plugins/fileuploads/css/fileupload.css') }}" rel="stylesheet" type="text/css"/>
		<!-- INTERNAL Fancy File Upload css -->
		<link href="{{ asset('assets/plugins/fancyuploder/fancy_fileupload.css') }}" rel="stylesheet" />
        <!-- WYSIWYG EDITOR CSS -->
        <link href="{{ asset('assets/plugins/wysiwyag/richtext.css') }}" rel="stylesheet"/>

        <!-- SUMMERNOTE CSS -->
        <link rel="stylesheet" href="{{ asset('assets/plugins/summernote/summernote-bs4.css') }}">

        <!-- INTERNAL Quill css -->
        <link href="{{ asset('assets/plugins/quill/quill.snow.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/plugins/quill/quill.bubble.css') }}" rel="stylesheet">
        <!-- INTERNAL SELECT2 CSS -->
        <link href="{{ asset('assets/plugins/select2/select2.min.css') }}" rel="stylesheet"/>

		<!-- INTERNAL Jquerytransfer css-->
		<link rel="stylesheet" href="{{ asset('assets/plugins/jQuerytransfer/jquery.transfer.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/plugins/jQuerytransfer/icon_font/icon_font.css') }}">


		<!-- MULTI SELECT CSS -->
		<link rel="stylesheet" href="{{ asset('assets/plugins/multipleselect/multiple-select.css') }}">

		<!--INTERNAL IntlTelInput css-->
		<link rel="stylesheet" href="{{ asset('assets/plugins/intl-tel-input-master/intlTelInput.css') }}">

		<!-- INTERNAL multi css-->
		<link rel="stylesheet" href="{{ asset('assets/plugins/multi/multi.min.css') }}">






		        <!-- FILE UPLODE CSS -->
				<link href="{{ asset('assets/plugins/fileuploads/css/fileupload.css') }}" rel="stylesheet" type="text/css"/>

				<!-- SELECT2 CSS -->
				<link href="{{ asset('assets/plugins/select2/select2.min.css') }}" rel="stylesheet"/>

				<!-- INTERNAL Fancy File Upload css -->
				<link href="{{ asset('assets/plugins/fancyuploder/fancy_fileupload.css') }}" rel="stylesheet" />

				<!--BOOTSTRAP-DATERANGEPICKER CSS-->
				<link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap-daterangepicker/daterangepicker.css') }}">

				<!-- TIME PICKER CSS -->
				<link href="{{ asset('assets/plugins/time-picker/jquery.timepicker.css') }}" rel="stylesheet"/>

				<!-- INTERNAL Date Picker css -->
				<link href="{{ asset('assets/plugins/date-picker/date-picker.css') }}" rel="stylesheet" />

				<!-- INTERNAL Sumoselect css-->
				<link rel="stylesheet" href="{{ asset('assets/plugins/sumoselect/sumoselect.css') }}">

				<!-- INTERNAL Jquerytransfer css-->
				<link rel="stylesheet" href="{{ asset('assets/plugins/jQuerytransfer/jquery.transfer.css') }}">
				<link rel="stylesheet" href="{{ asset('assets/plugins/jQuerytransfer/icon_font/icon_font.css') }}">

				<!-- INTERNAL Bootstrap DatePicker css-->
				<link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap-datepicker/bootstrap-datepicker.css') }}">

				<!-- MULTI SELECT CSS -->
				<link rel="stylesheet" href="{{ asset('assets/plugins/multipleselect/multiple-select.css') }}">

				<!--INTERNAL IntlTelInput css-->
				<link rel="stylesheet" href="{{ asset('assets/plugins/intl-tel-input-master/intlTelInput.css') }}">

				<!-- INTERNAL multi css-->
				<link rel="stylesheet" href="{{ asset('assets/plugins/multi/multi.min.css') }}">

@endsection

@section('content')

						<!-- PAGE-HEADER -->
						<div class="page-header">
							<div>
								<h1 class="page-title">{{ isset($widget) ? 'Edit ' : 'Create '}}Widget ({{$sidebar->title}})</h1>
								{{-- <ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Tables</a></li>
									<li class="breadcrumb-item active" aria-current="page">Table</li>
								</ol> --}}
							</div>
							<div class="ms-auto pageheader-btn">
								<a href="{{route('admin.widget.builder',$sidebar->id)}}" class="btn btn-primary btn-icon text-white me-2">
									<span>
										{{-- <i class="fe fe-minus"></i> --}}
									</span> Back To WidgetList
								</a>
								{{-- <a href="#" class="btn btn-success btn-icon text-white">
									<span>
										<i class="fe fe-log-in"></i>
									</span> Export
								</a> --}}
							</div>
						</div>
						<!-- PAGE-HEADER END -->

                   <!-- ROW-1 OPEN -->
    <form method="POST" action="{{isset($widget) ? route('admin.widget.update',$widget->id) : route('admin.widget.store',$sidebar->id)}}" enctype="multipart/form-data">
    @csrf
    @isset($widget)
    @method('PUT')
    @endisset
	<div class="row">
		{{-- Left Side --}}
		<div class="col-lg-9 col-xl-9 col-md-12 col-sm-12">
			<div class="card">
				<div class="card-header">
					<h3 class="card-title">Manage Widget Item</h3>
				</div>

				<div class="form-group">
					<label for="type">Type</label>
					<select class="custom-select" name="type" id="type" onchange="setWidget()">
						<option value="item">Widget Item</option>
						<option value="child">Child Item</option>
					</select>
				</div>

				<div id="child_fields">
					<div class="card-body">
						<div class="form-group">
							<label for="exampleInputname">Child Title</label>
							<input type="text" class="form-control @error('child_title') is-invalid @enderror" value="{{$widget->child_title ?? old('child_title')}}" name="child_title" id="posttitle" placeholder="D=Child Title">
							@error('child_title')
							<span class="invalid-feedback" role="alert">
								<strong>{{$message}}</strong>
							</span>
							@enderror
						</div>
					</div>
				</div>

				<div id="widget_fields">
					<div class="card-body">
						<div class="form-group">
							<label for="exampleInputname">Title</label>
							<input type="text" class="form-control @error('title') is-invalid @enderror" value="{{$widget->title ?? old('title')}}" name="title" id="posttitle" placeholder="Widget Title">
							@error('title')
							<span class="invalid-feedback" role="alert">
								<strong>{{$message}}</strong>
							</span>
							@enderror
						</div>
					</div>
				</div>

				{{-- <div class="card-body">
					<div class="form-group">
						<label for="exampleInputname">Post Title</label>
						<input type="text" class="form-control @error('title') is-invalid @enderror" value="{{$widget->title ?? old('title')}}" name="title" id="posttitle" onkeyup="myFunction()" placeholder="Post Name">
                        @error('title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                        @enderror
					</div>

				</div> --}}
				
				<div class="card-footer text-end">
					<button type="submit" class="btn btn-success mt-1">
                        @isset($widget)
                        <i class="fas fa-arrow-circle-up"></i>
                        Update
                        @else
                        <i class="fe fe-plus"></i>
                        Create
                        @endisset
                    </button>
					<a href="{{route('admin.sidebars.index')}}" class="btn btn-danger mt-1">Cancel</a>
				</div>
			</div>
		</div>

		{{-- Right Side --}}
		<div class="col-lg-3 col-xl-3 col-md-12 col-sm-12" style="float: left">

			<div class="card">
				<div class="card-header">
					<h3 class="card-title">Create Page</h3>
				</div>
				<div class="card-body">

					@isset($sidebar)
					<div class="form-group">
						<div class="form-label">Status</div>
						<label class="custom-switch">
							<input type="checkbox" name="status" {{$sidebar->status == true ? 'checked' : ''}} class="custom-switch-input ">
							<span class="custom-switch-indicator"></span>
						</label>
					</div>

                    @else

                    <div class="form-group">
						<div class="form-label">Status</div>
						<label class="custom-switch">
							<input type="checkbox" name="status" class="custom-switch-input ">
							<span class="custom-switch-indicator"></span>
						</label>
					</div>

                    @endisset

                    @isset($sidebar)
                    <div class="form-group">
						<label class="form-label">Sidebar Type</label>
						<select name="type" class="form-control form-select select2" data-bs-placeholder="Select Country">
							<option label="Select Country">Select Sidebar Type</option>
							<option value="Left Side Bar" {{($sidebar->type == 'Left Side Bar') ? 'selected' : ''}}  >Left Side Bar</option>
							<option value="Right Side Bar" {{($sidebar->type == 'Right Side Bar') ? 'selected' : ''}}>Right Side Bar</option>
						</select>
					</div>

                    @else

					<div class="form-group">
						<label class="form-label">Sidebar Type</label>
						<select name="type" class="form-control form-select select2" data-bs-placeholder="Select Country">
							<option label="Select Country">Select Sidebar Type</option>
							<option value="Left Side Bar">Left Side Bar</option>
							<option value="Right Side Bar">Right Side Bar</option>
						</select>
					</div>

                    @endisset


				</div>

			</div>
		</div>

	</div>
    </form>
	<!-- ROW-1 CLOSED -->
@endsection('content')

@section('scripts')


<script>
	function setwidget()
	{
		if($('select[name="type"]').val() === 'child')
		{
			$('#child_fields').removeClass('d-none');
			$('#widget_fields').addClass('d-none');
		}
		else
		{
			$('#child_fields').addClass('d-none');
			$('#widget_fields').removeClass('d-none');
		}
	}
	setwidget();
</script>



        <script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js" integrity="sha512-8QFTrG0oeOiyWo/VM9Y8kgxdlCryqhIxVeRpWSezdRRAvarxVtwLnGroJgnVW9/XBRduxO/z1GblzPrMQoeuew==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


        <!-- CHARTJS JS -->
        <script src="{{ asset('assets/plugins/chart/Chart.bundle.js')}}"></script>
		<script src="{{ asset('assets/plugins/chart/utils.js')}}"></script>

        <!-- INTERNAL SELECT2 JS -->
        <script src="{{ asset('assets/plugins/select2/select2.full.min.js') }}"></script>
		<script src="{{ asset('assets/js/select2.js') }}"></script>
		<!-- FILE UPLOADES JS -->
		<script src="{{ asset('assets/plugins/fileuploads/js/fileupload.js') }}"></script>
		<script src="{{ asset('assets/plugins/fileuploads/js/file-upload.js') }}"></script>

		<!-- INTERNAL File-Uploads Js-->
		<script src="{{ asset('assets/plugins/fancyuploder/jquery.ui.widget.js') }}"></script>
        <script src="{{ asset('assets/plugins/fancyuploder/jquery.fileupload.js') }}"></script>
        <script src="{{ asset('assets/plugins/fancyuploder/jquery.iframe-transport.js') }}"></script>
        <script src="{{ asset('assets/plugins/fancyuploder/jquery.fancy-fileupload.js') }}"></script>
        <script src="{{ asset('assets/plugins/fancyuploder/fancy-uploader.js') }}"></script>

		<!-- WYSIWYG Editor JS -->
		<script src="{{ asset('assets/plugins/wysiwyag/jquery.richtext.js') }}"></script>
		<script src="{{ asset('assets/plugins/wysiwyag/wysiwyag.js') }}"></script>

		<!-- INTERNAL multi js-->
		<script src="{{ asset('assets/plugins/multi/multi.min.js') }}"></script>

				<!-- MULTI SELECT JS-->
				<script src="{{ asset('assets/plugins/multipleselect/multiple-select.js') }}"></script>
				<script src="{{ asset('assets/plugins/multipleselect/multi-select.js') }}"></script>

						<!-- FORMELEMENTS JS -->
		<script src="{{ asset('assets/js/formelementadvnced.js') }}"></script>
		<script src="{{ asset('assets/js/form-elements.js') }}"></script>


		<!-- INTERNAL jquery transfer js-->
		<script src="{{ asset('assets/plugins/jQuerytransfer/jquery.transfer.js') }}"></script>

		<!-- SUMMERNOTE JS -->
		<script src="{{ asset('assets/plugins/summernote/summernote-bs4.js') }}"></script>

		<!-- FORMEDITOR JS -->
		<script src="{{ asset('assets/plugins/quill/quill.min.js') }}"></script>
		<script src="{{ asset('assets/js/form-editor2.js') }}"></script>

@endsection
