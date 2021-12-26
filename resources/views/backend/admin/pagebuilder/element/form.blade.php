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
								<h1 class="page-title">{{ isset($widget) ? 'Edit ' : 'Create '}}Element ({{$page->title}})</h1>
								{{-- <ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Tables</a></li>
									<li class="breadcrumb-item active" aria-current="page">Table</li>
								</ol> --}}
							</div>
							<div class="ms-auto pageheader-btn">
								<a href="{{route('admin.element.index',$page->id)}}" class="btn btn-primary btn-icon text-white me-2">
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
    <form method="POST" action="{{isset($widget) ? route('admin.pagebuilder.update',['id'=>$page->id,'pagetId'=>$widget->id]) : route('admin.element.store',$page->id)}}" enctype="multipart/form-data">
    @csrf
    @isset($widget)
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
                    @isset($widget)
                    <label class="form-label" for="type">Select Widget Type</label>
					<select class="form-control form-select select2" data-bs-placeholder="Select Type" name="type" id="type"  >
						<option value="Blog Category" {{($widget->type == 'Blog Category') ? 'selected' : ''}} >Blog Category</option>
						<option value="Recent Post" {{($widget->type == 'Recent Post') ? 'selected' : ''}}>Recent Post</option>
                        <option value="Popular Post" {{($widget->type == 'Popular Post') ? 'selected' : ''}} >Popular Post</option>
                        <option value="Menu Widget" {{($widget->type == 'Menu Widget') ? 'selected' : ''}} >Menu Widget</option>
                        <option value="Text Widget" {{($widget->type == 'Text Widget') ? 'selected' : ''}} >Text Widget</option>
                        <option value="Gallary Widget" {{($widget->type == 'Gallary Widget') ? 'selected' : ''}} >Gallary Widget</option>
                        <option value="Image Widget" {{($widget->type == 'Image Widget') ? 'selected' : ''}} >Image Widget</option>
					</select>
                    @else
                    <label class="form-label" for="type">Select Module Type</label>
					<select class="form-control form-select select2" data-bs-placeholder="Select Type" name="module_type" id="type" >
                        <option value="">Select Module</option>
						<option value="Blog Category">Blog Category</option>
						<option value="Blog Post">Blog Post</option>
                        <option value="General Category">General Category</option>
                        <option value="General Post">General Post</option>
                        <option value="Service Category">Service Category</option>
                        <option value="Service Post">Service Post</option>
                        <option value="Portfolio Category">Portfolio Category</option>
                        <option value="Portfolio Post">Portfolio Post</option>
                        <option value="Price-Table Category">Price-Table Category</option>
                        <option value="Price-Table Post">Price-Table Post</option>
					</select>
                    @endisset
				</div>

                <div class="form-group">
                    <label for="exampleInputname">Element Title</label>
                    <input type="text" class="form-control " value="{{$widget->title ?? old('title')}}" name="title" id="" placeholder="Element Title">
                </div>

                <div class="form-group">
                    <label for="exampleInputname">How Many Post want to Show</label>
                    <input type="number" class="form-control " value="{{$widget->no_of_post ?? old('no_of_post')}}" name="post_qty" id="" placeholder="enter post quantity">
                </div>

                <div class="card-header">
					<h3 class="card-title">For Custom Elements: </h3>
				</div>
            </br>

                <div class="form-group">
                    <label class="form-label">Feature Image</label>
                    <!-- <input id="demo" type="file" name="image" accept=".jpg, .png, image/jpeg, image/png" multiple="" class="ff_fileupload_hidden"> -->
                    <input type="file" data-height="100" class="dropify form-control" data-default-file="{{ isset($custompage) ? asset('uploads/elementphoto/'.$custompage->image) : '' }}" name="image">
                </div>

                <div class="form-group">
                    <label for="exampleInputname">Image Width</label>
                    <input type="number" class="form-control " value="{{$widget->no_of_post ?? old('no_of_post')}}" name="img_width" id="" placeholder="ex: 100,200">
                </div>

                <div class="form-group">
                    <label for="exampleInputname">Image Height</label>
                    <input type="number" class="form-control " value="{{$widget->no_of_post ?? old('no_of_post')}}" name="img_height" id="" placeholder="ex: 100,200">
                </div>


                @isset($widget)
                <label class="form-label" for="type">Select Widget Type</label>
                <select class="form-control form-select select2" data-bs-placeholder="Select Type" name="type" id="type" onChange="setMargin()">
                    <option value="Blog Category" {{($widget->type == 'Blog Category') ? 'selected' : ''}} >Blog Category</option>
                    <option value="Recent Post" {{($widget->type == 'Recent Post') ? 'selected' : ''}}>Recent Post</option>
                    <option value="Popular Post" {{($widget->type == 'Popular Post') ? 'selected' : ''}} >Popular Post</option>
                    <option value="Menu Widget" {{($widget->type == 'Menu Widget') ? 'selected' : ''}} >Menu Widget</option>
                    <option value="Text Widget" {{($widget->type == 'Text Widget') ? 'selected' : ''}} >Text Widget</option>
                    <option value="Gallary Widget" {{($widget->type == 'Gallary Widget') ? 'selected' : ''}} >Gallary Widget</option>
                    <option value="Image Widget" {{($widget->type == 'Image Widget') ? 'selected' : ''}} >Image Widget</option>
                </select>
                @else
                <label class="form-label" for="type">Select Image Margin Type</label>
                <select class="form-control form-select select2" data-bs-placeholder="Select Type" name="img_margin" id="type" onChange="setMargin()">
                    <option value="">Select Left or Right Margin</option>
                    <option value="Left Margin">Left Margin</option>
                    <option value="Right Margin">Right Margin</option>
                </select>
                @endisset

                <div id="img_margin" style="display: none;">
					<div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputname">Margin Amount</label>
                            <input type="number" class="form-control " value="{{$widget->no_of_post ?? old('no_of_post')}}" name="margin_amt" id="" placeholder="ex: 10,20">
                        </div>
					</div>
				</div>


                @isset($widget)
                <label class="form-label" for="type">Select Widget Type</label>
                <select class="form-control form-select select2" data-bs-placeholder="Select Type" name="type" id="type"  onChange="setTopMargin()">
                    <option value="Blog Category" {{($widget->type == 'Blog Category') ? 'selected' : ''}} >Blog Category</option>
                    <option value="Recent Post" {{($widget->type == 'Recent Post') ? 'selected' : ''}}>Recent Post</option>
                    <option value="Popular Post" {{($widget->type == 'Popular Post') ? 'selected' : ''}} >Popular Post</option>
                    <option value="Menu Widget" {{($widget->type == 'Menu Widget') ? 'selected' : ''}} >Menu Widget</option>
                    <option value="Text Widget" {{($widget->type == 'Text Widget') ? 'selected' : ''}} >Text Widget</option>
                    <option value="Gallary Widget" {{($widget->type == 'Gallary Widget') ? 'selected' : ''}} >Gallary Widget</option>
                    <option value="Image Widget" {{($widget->type == 'Image Widget') ? 'selected' : ''}} >Image Widget</option>
                </select>
                @else
                <label class="form-label" for="type">Select Image Margin Type</label>
                <select class="form-control form-select select2" data-bs-placeholder="Select Type" name="img_topmargin" id="type" onChange="setTopMargin()">
                    <option value="">Select Top or Bottom Margin</option>
                    <option value="Top Margin">Top Margin</option>
                    <option value="Bottom Margin">Bottom Margin</option>
                </select>
                @endisset

                <div id="img_topmargin" style="display: none;">
					<div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputname">Top-Margin Amount</label>
                            <input type="number" class="form-control " value="{{$widget->no_of_post ?? old('no_of_post')}}" name="topmargin_amt" id="" placeholder="ex: 10,20">
                        </div>
					</div>
				</div>



                <div class="form-group">
                    <label for="exampleInputContent">Description</label>
                    <div class="ql-wrapper ql-wrapper-demo bg-light">
                        <textarea name="body" class="my-editor form-control" id="ckeditor" style="height: 200px;" cols="30" rows="10">{!!$contentpost->body ?? old('body')!!}</textarea>
                    </div>
                </div>


                </div>


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

					@isset($custompage)
					<div class="form-group">
						<div class="form-label">Status</div>
						<label class="custom-switch">
							<input type="checkbox" name="status" {{$custompage->status == true ? 'checked' : ''}} class="custom-switch-input ">
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

<script src="//cdn.ckeditor.com/4.17.1/full/ckeditor.js"></script>

<script>
	window.onload = function () {
		CKEDITOR.replace('ckeditor', {
	        filebrowserBrowseUrl: filemanager.ckBrowseUrl,
	    });
	}
</script>

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
	function setMargin()
	{
		if($('select[name="img_margin"]').val() === 'Left Margin')
		{
			$('#img_margin').show();
		}
		else if($('select[name="img_margin"]').val() === 'Right Margin')
		{
			$('#img_margin').show();
		}
	}
	setWidget();

    function setTopMargin()
	{
		if($('select[name="img_topmargin"]').val() === 'Top Margin')
		{
			$('#img_topmargin').show();
		}
		else if($('select[name="img_topmargin"]').val() === 'Bottom Margin')
		{
			$('#img_topmargin').show();
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
