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
								<h1 class="page-title">{{ isset($pagebuilder) ? 'Edit ('.$pagebuilder->title.') ' : 'Create '}}Section </h1>
								{{-- <ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Tables</a></li>
									<li class="breadcrumb-item active" aria-current="page">Table</li>
								</ol> --}}
							</div>
							<div class="ms-auto pageheader-btn">
								<a href="{{route('admin.custompage.builder',$page->id)}}" class="btn btn-primary btn-icon text-white me-2">
									<span>
										{{-- <i class="fe fe-minus"></i> --}}
									</span> Back To List
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
    <form method="POST" action="{{isset($pagebuilder) ? route('admin.pagebuilder.update',['id'=>$page->id,'pageId'=>$pagebuilder->id]) : route('admin.pagebuilder.store',$page->id)}}" enctype="multipart/form-data">
    @csrf
    @isset($pagebuilder)
    @method('PUT')
    @endisset
	<div class="row">
		{{-- Left Side --}}
		<div class="col-lg-9 col-xl-9 col-md-12 col-sm-12">
			<div class="card">
				<div class="card-header">
					<h3 class="card-title">Manage Page Section</h3>
				</div>

                <div class="card-body">
				<div class="form-group">
                    @isset($pagebuilder)
                    <label class="form-label" for="type">Select Layout Type</label>
					<select class="form-control form-select select2" data-bs-placeholder="Select Type" name="layout" id="type" >
                        <option value="">Select Layout</option>
						<option value="One Column" {{($pagebuilder->layout == 'One Column') ? 'selected' : ''}} >One Column</option>
						<option value="Two Column" {{($pagebuilder->layout == 'Two Column') ? 'selected' : ''}}>Two Column</option>
                        <option value="Three Column" {{($pagebuilder->layout == 'Three Column') ? 'selected' : ''}} >Three Column</option>
                        <option value="Four Column" {{($pagebuilder->layout == 'Four Column') ? 'selected' : ''}} >Four Column</option>
					</select>
                    @else
                    <label class="form-label" for="type">Select Layout Type</label>
					<select class="form-control form-select select2" data-bs-placeholder="Select Type" name="layout" id="type" >
                        <option value="">Select Layout</option>
						<option value="One Column">One Column</option>
						<option value="Two Column">Two Column</option>
                        <option value="Three Column">Three Column</option>
                        <option value="Four Column">Four Column</option>
					</select>
                    @endisset
				</div>

                <div class="form-group">
                    <label for="exampleInputname">Section Title</label>
                    <input type="text" class="form-control " value="{{$pagebuilder->title ?? old('title')}}" name="title" id="" placeholder="Section Title">
                </div>


                <div class="form-group">
                    <label for="exampleInputname">Padding</label>
                    <input type="text" class="form-control " value="{{$pagebuilder->padding ?? old('padding')}}" name="padding" id="" placeholder="section padding. ex: 10px,20px,30px">
                </div>

                <div class="form-group">
                    <label for="exampleInputname">Margin</label>
                    <input type="text" class="form-control " value="{{$pagebuilder->margin ?? old('margin')}}" name="margin" id="" placeholder="section margin. ex: 10px,20px,30px">
                </div>

                <div class="form-group">
                    <label for="exampleInputname">Border</label>
                    <input type="text" class="form-control " value="{{$pagebuilder->border ?? old('border')}}" name="border" id="" placeholder="section padding. ex: 1,2,3">
                </div>

                <div class="form-group">
                    <label for="exampleInputname">Border Color</label>
                    <input type="text" class="form-control " value="{{$pagebuilder->bordercolor ?? old('bordercolor')}}" name="bordercolor" id="" placeholder="ex: #fffff">
                </div>

                <input type="radio" name="link" id="test2">
                <label for="css">Background Image</label>
                <input type="radio" name="link" id="test1">
                <label for="html">Background Color</label>


                <div class="form-group background_img" style="display:none">
                    <label class="form-label">Background Image</label>
                    <!-- <input id="demo" type="file" name="image" accept=".jpg, .png, image/jpeg, image/png" multiple="" class="ff_fileupload_hidden"> -->
                    <input type="file" data-height="100" class="dropify form-control" data-default-file="{{ isset($pagebuilder) ? asset('uploads/sectionpagephoto/'.$pagebuilder->background_img) : '' }}" name="background_img">
                </div>

                <div class="form-group background_color" style="display:none">
                    <label for="exampleInputname">Background Color</label>
                    <input type="text" class="form-control " value="{{$pagebuilder->background_color ?? old('background_color')}}" name="background_color" id="" placeholder="ex: #fffff">
                </div>


                </div>


				<div class="card-footer text-end">
					<button type="submit" class="btn btn-success mt-1">
                        @isset($pagebuilder)
                        <i class="fas fa-arrow-circle-up"></i>
                        Update
                        @else
                        <i class="fe fe-plus"></i>
                        Create
                        @endisset
                    </button>
					<a href="{{route('admin.custompage.builder',$page->id)}}" class="btn btn-danger mt-1">Cancel</a>
				</div>
			</div>
		</div>

        <div class="col-lg-3 col-xl-3 col-md-12 col-sm-12" style="float: left">

			<div class="card">
				<div class="card-header">
					<h3 class="card-title">Create Page</h3>
				</div>
				<div class="card-body">

					@isset($pagebuilder)
					<div class="form-group">
						<div class="form-label">Status</div>
						<label class="custom-switch">
							<input type="checkbox" name="status" {{$pagebuilder->status == true ? 'checked' : ''}} class="custom-switch-input ">
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


				</div>

			</div>
		</div>


	</div>
    </form>
	<!-- ROW-1 CLOSED -->
@endsection('content')

@section('scripts')

<script>
    $(document).ready(function() {
        $("input[id$='test1']").click(function() {
            var link = $(this).val();

            $("div.background_color").show();
            $("div.background_img").hide();
        });

        $("input[id$='test2']").click(function() {
            var link = $(this).val();

            $("div.background_color").hide();
            $("div.background_img").show();
        });
    });
</script>


<script>
	function setWidget()
	{
		if($('select[name="type"]').val() === 'Blog Category')
		{
			$('#blog_category').removeClass('d-none');
            $('#category').removeClass('d-none');
            $('#recent_post').addClass('d-none');
			$('#popular_post').addClass('d-none');
            $('#text_widget').addClass('d-none');
            $('#image_widget').addClass('d-none');
		}
		else if($('select[name="type"]').val() === 'Recent Post')
		{
			$('#no_of_post').removeClass('d-none');
			$('#blog_category').addClass('d-none');
            $('#category').addClass('d-none');
			$('#popular_post').addClass('d-none');
            $('#text_widget').addClass('d-none');
            $('#image_widget').addClass('d-none');
		}
		else if($('select[name="type"]').val() === 'Popular Post')
		{
			$('#recent_post').addClass('d-none');
			$('#blog_category').addClass('d-none');
            $('#category').addClass('d-none');
			$('#popular_post').removeClass('d-none');
			$('#no_of_post').removeClass('d-none');
            $('#text_widget').addClass('d-none');
            $('#image_widget').addClass('d-none');
		}
        else if($('select[name="type"]').val() === 'Text Widget')
		{
			$('#recent_post').addClass('d-none');
			$('#no_of_post').addClass('d-none');
			$('#blog_category').addClass('d-none');
            $('#category').addClass('d-none');
			$('#popular_post').addClass('d-none');
            $('#text_widget').removeClass('d-none');
            $('#image_widget').addClass('d-none');
		}
        else if($('select[name="type"]').val() === 'Image Widget')
		{
			$('#recent_post').addClass('d-none');
			$('#blog_category').addClass('d-none');
            $('#category').addClass('d-none');
			$('#popular_post').addClass('d-none');
            $('#text_widget').removeClass('d-none');
            $('#no_of_post').addClass('d-none');
            $('#image_widget').removeClass('d-none');
		}
	}
	setWidget();
</script>

<script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
<script>
	window.onload = function () {
		CKEDITOR.replace('ckeditor', {
	        filebrowserBrowseUrl: filemanager.ckBrowseUrl,
	    });
	}
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
