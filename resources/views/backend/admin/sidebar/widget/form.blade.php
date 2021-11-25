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

                <div class="card-body">
				<div class="form-group">
					<label class="form-label" for="type">Select Widget Type</label>
					<select class="form-control form-select select2" data-bs-placeholder="Select Type" name="type" id="type" onChange="setWidget()">
						<option value="Blog Category">Blog Category</option>
						<option value="Recent Post">Recent Post</option>
                        <option value="Popular Post">Popular Post</option>
                        <option value="Menu Widget">Menu Widget</option>
                        <option value="Text Widget">Text Widget</option>
                        <option value="Gallary Widget">Gallary Widget</option>
					</select>
				</div>
                </div>

				<div id="blog_category">
					<div class="card-body">
						<div class="form-group">
							<label for="exampleInputname">Widget Title</label>
							<input type="text" class="form-control " value="{{$widget->title ?? old('title')}}" name="title" id="" placeholder="Widget Title">
						</div>

						<div class="form-group row" id="category">
                            <label class="col-md-3 col-from-label">Select Category<span class="text-danger">*</span></label>
                            <div>
                                <select class="form-control sismoo-selectpicker" name="category_id" id="category_id" data-live-search="true" required>
                                    @foreach ($categories as $key => $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @if($category->childrenRecursive->count()>0)
                                    @include('backend.admin.sidebar.widget.child_category', ['sub_category' => $category])
                                    @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
{{-- 
                        @foreach($categories as $key => $category)

                        <li class="transfer-double-group-list-li transfer-double-group-list-li-1636878492751">
                            <div class="checkbox-group">
                                <input type="checkbox" name="parent_id" value="{{$category->id}}" class="checkbox-normal group-select-all-1636878492751" id="group_{{$key}}_1636878492751" /><label for="group_{{$key}}_1636878492751" class="group-name-1636878492751">{{$category->name}}</label>
                            </div>
                            @if($category->childrenRecursive->count()>0)


                              @include('backend.admin.sidebar.widget.child_category', ['sub_category' => $category])


                            @endif


                        </li>
                    @endforeach --}}

                        <div class="form-group">
							<label for="exampleInputname">No of Posts</label>
							<input type="number" class="form-control " value="{{$widget->no_of_post ?? old('no_of_post')}}" name="title" id="" placeholder="How many post you want to show">
						</div>
					</div>
				</div>

                <div id="recent_post">
					<div class="card-body">
						<div class="form-group">
							<label for="exampleInputname">Widget Title</label>
							<input type="text" class="form-control " value="{{$widget->title ?? old('title')}}" name="title" id="" placeholder="Widget Title">
						</div>

                        <div class="form-group">
							<label for="exampleInputname">No of Recent Posts</label>
							<input type="number" class="form-control " value="{{$widget->no_of_post ?? old('no_of_post')}}" name="title" id="" placeholder="How many post you want to show">
						</div>
					</div>
				</div>

				<div id="popular_post">
					<div class="card-body">
						<div class="form-group">
							<label for="exampleInputname">Widget Title</label>
							<input type="text" class="form-control " value="{{$widget->title ?? old('title')}}" name="title" id="" placeholder="Widget Title">
						</div>

                        <div class="form-group">
							<label for="exampleInputname">No of Popular Posts</label>
							<input type="number" class="form-control " value="{{$widget->no_of_post ?? old('no_of_post')}}" name="title" id="" placeholder="How many post you want to show">
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
					<a href="{{route('admin.sidebars.index')}}" class="btn btn-danger mt-1">Cancel</a>
				</div>
			</div>
		</div>

		{{-- Right Side --}}
		{{-- <div class="col-lg-3 col-xl-3 col-md-12 col-sm-12" style="float: left">

			<div class="card">
				<div class="card-header">
					<h3 class="card-title">Create Page</h3>
				</div>

                    <div id="category" class="card-body">

                        <div  class="transfer-double-list-content">
                            <div class="transfer-double-list-main">

                                <ul class="transfer-double-group-list-ul transfer-double-group-list-ul-1636878492751">

                                @foreach($categories as $key => $category)

                                    <li class="transfer-double-group-list-li transfer-double-group-list-li-1636878492751">
                                        <div class="checkbox-group">
                                            <input type="checkbox" name="parent_id" value="{{$category->id}}" class="checkbox-normal group-select-all-1636878492751" id="group_{{$key}}_1636878492751" /><label for="group_{{$key}}_1636878492751" class="group-name-1636878492751">{{$category->name}}</label>
                                        </div>
                                        @if($category->childrenRecursive->count()>0)


                                          @include('backend.admin.sidebar.widget.child_category', ['sub_category' => $category])


                                        @endif


                                    </li>
                                @endforeach

                                </ul>
                            </div>
                        </div>


                    </div>


			</div>
		</div> --}}

	</div>
    </form>
	<!-- ROW-1 CLOSED -->
@endsection('content')

@section('scripts')


<script>
	function setWidget()
	{
		if($('select[name="type"]').val() === 'Blog Category')
		{
			$('#blog_category').removeClass('d-none');
            $('#category').removeClass('d-none');
            $('#recent_post').addClass('d-none');
			$('#popular_post').addClass('d-none');
		}
		else if($('select[name="type"]').val() === 'Recent Post')
		{
			$('#recent_post').removeClass('d-none');
			$('#blog_category').addClass('d-none');
            $('#category').addClass('d-none');
			$('#popular_post').addClass('d-none');
		}
		else if($('select[name="type"]').val() === 'Popular Post')
		{
			$('#recent_post').addClass('d-none');
			$('#blog_category').addClass('d-none');
            $('#category').addClass('d-none');
			$('#popular_post').removeClass('d-none');
		}
	}
	setWidget();
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
