@extends('layouts.app')

@section('styles')

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
								<h1 class="page-title">{{ isset($user) ? 'Edit ' : 'Create '}}Users</h1>
								{{-- <ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Tables</a></li>
									<li class="breadcrumb-item active" aria-current="page">Table</li>
								</ol> --}}
							</div>
							<div class="ms-auto pageheader-btn">
								<a href="{{route('admin.users.index')}}" class="btn btn-primary btn-icon text-white me-2">
									<span>
										{{-- <i class="fe fe-minus"></i> --}}
									</span> Back To Userlist
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
	<div class="row">
		{{-- Left Side --}}
		<div class="col-lg-9 col-xl-9 col-md-12 col-sm-12">
			<div class="card">
				<div class="card-header">
					<h3 class="card-title">Create Blog Post</h3>
				</div>
				<div class="card-body">
					<div class="form-group">
						<label for="exampleInputname">Category Name</label>
						<input type="text" class="form-control" id="exampleInputname" placeholder="Category Name">
					</div>
					<div class="form-group">
						<label for="exampleInputname">Slug</label>
						<input type="text" class="form-control" id="exampleInputname" placeholder="Slug....">
					</div>

					<div class="form-group">
						<label for="exampleInputContent">Category Description</label>
						<div class="ql-wrapper ql-wrapper-demo bg-light">
							<div id="quillEditor">

							</div>
						</div>
					</div>

					<div class="form-group">
						<label class="form-label">Category Image</label>
						<input id="demo" type="file" name="image" accept=".jpg, .png, image/jpeg, image/png" multiple="" class="ff_fileupload_hidden">
					</div>

				</div>
				<div class="card-footer text-end">
					<a href="#" class="btn btn-success mt-1">Save</a>
					<a href="#" class="btn btn-danger mt-1">Cancel</a>
				</div>
			</div>
		</div>

		{{-- Right Side --}}
		<div class="col-lg-3 col-xl-3 col-md-12 col-sm-12" style="float: left">

			<div class="card shadow-none border">
				<div class="card-header">
					<h5 class="card-title">Parent Category</h5>
				</div>
				<div class="card-body" style="padding:2px;">
					<div class="transfer">
						<div class="transfer-double" id="transfer_double_languageInput">
							<div class="transfer-double-header"></div>
							<div class="transfer-double-content clearfix">

								<div class="transfer-double-list transfer-double-list-1636878492751 tab-content-first-1636878492751 tab-content-active">
									<div class="transfer-double-list-header">
										<div class="transfer-double-list-search"><input class="transfer-double-list-search-input" type="text" id="groupListSearch_1636878492751" placeholder="Search" value="" /></div>
									</div>
									<div class="transfer-double-list-content">
										<div class="transfer-double-list-main">
											<ul class="transfer-double-group-list-ul transfer-double-group-list-ul-1636878492751">

                                            @foreach($categories as $category)
												<li class="transfer-double-group-list-li transfer-double-group-list-li-1636878492751">
													<div class="checkbox-group">
														<input type="checkbox" class="checkbox-normal group-select-all-1636878492751" id="group_0_1636878492751" /><label for="group_0_1636878492751" class="group-name-1636878492751">{{$category->name}}</label>
													</div>
                                                    @if($category->childrenRecursive->count()>0)


													  @include('backend.admin.blog.category.child_categories', ['sub_category' => $category])
                                                    

                                                    @endif


												</li>
                                                @endforeach
												<!-- <li class="transfer-double-group-list-li transfer-double-group-list-li-1636878492751">
													<div class="checkbox-group">
														<input type="checkbox" class="checkbox-normal group-select-all-1636878492751" id="group_1_1636878492751" /><label for="group_1_1636878492751" class="group-name-1636878492751">Popular</label>
													</div>
													<ul class="transfer-double-group-list-li-ul transfer-double-group-list-li-ul-1636878492751">
														<li class="transfer-double-group-list-li-ul-li transfer-double-group-list-li-ul-li-1636878492751">
															<div class="checkbox-group">
																<input type="checkbox" value="132" class="checkbox-normal group-checkbox-item-1636878492751 belongs-group-1-1636878492751" id="group_1_checkbox_0_1636878492751" />
																<label for="group_1_checkbox_0_1636878492751" class="group-checkbox-name-1636878492751">JavaScript</label>
															</div>
														</li>
														<li class="transfer-double-group-list-li-ul-li transfer-double-group-list-li-ul-li-1636878492751">
															<div class="checkbox-group">
																<input type="checkbox" value="112" class="checkbox-normal group-checkbox-item-1636878492751 belongs-group-1-1636878492751" id="group_1_checkbox_1_1636878492751" />
																<label for="group_1_checkbox_1_1636878492751" class="group-checkbox-name-1636878492751">Java</label>
															</div>
														</li>
														<li class="transfer-double-group-list-li-ul-li transfer-double-group-list-li-ul-li-1636878492751">
															<div class="checkbox-group">
																<input type="checkbox" value="124" class="checkbox-normal group-checkbox-item-1636878492751 belongs-group-1-1636878492751" id="group_1_checkbox_2_1636878492751" />
																<label for="group_1_checkbox_2_1636878492751" class="group-checkbox-name-1636878492751">Python</label>
															</div>
														</li>
														<li class="transfer-double-group-list-li-ul-li transfer-double-group-list-li-ul-li-1636878492751">
															<div class="checkbox-group">
																<input type="checkbox" value="121" class="checkbox-normal group-checkbox-item-1636878492751 belongs-group-1-1636878492751" id="group_1_checkbox_3_1636878492751" />
																<label for="group_1_checkbox_3_1636878492751" class="group-checkbox-name-1636878492751">TypeScript</label>
															</div>
														</li>
														<li class="transfer-double-group-list-li-ul-li transfer-double-group-list-li-ul-li-1636878492751">
															<div class="checkbox-group">
																<input type="checkbox" value="432" class="checkbox-normal group-checkbox-item-1636878492751 belongs-group-1-1636878492751" id="group_1_checkbox_4_1636878492751" />
																<label for="group_1_checkbox_4_1636878492751" class="group-checkbox-name-1636878492751">PHP</label>
															</div>
														</li>
														<li class="transfer-double-group-list-li-ul-li transfer-double-group-list-li-ul-li-1636878492751">
															<div class="checkbox-group">
																<input type="checkbox" value="421" class="checkbox-normal group-checkbox-item-1636878492751 belongs-group-1-1636878492751" id="group_1_checkbox_5_1636878492751" />
																<label for="group_1_checkbox_5_1636878492751" class="group-checkbox-name-1636878492751">Ruby on Rails</label>
															</div>
														</li>
													</ul>
												</li> -->
											</ul>
										</div>
									</div>

								</div>

							</div>
							<div class="transfer-double-footer"></div>
						</div>
					</div>
				</div>

			</div>

			<div class="card">
				<div class="card-header">
					<h3 class="card-title">Create Page</h3>
				</div>
				<div class="card-body">
					<div class="form-group">
						<div class="form-label">Status</div>
						<label class="custom-switch">
							<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input">
							<span class="custom-switch-indicator"></span>
						</label>
					</div>
					<div class="form-group">
						<label class="form-label">Left Sidebar</label>
						<select name="country" class="form-control form-select select2" data-bs-placeholder="Select Country">
							<option label="Select Country">Select Left Sidebar</option>
							<option value="br">Brazil</option>
							<option value="cz">Czech Republic</option>
						</select>
					</div>

					<div class="form-group">
						<label class="form-label">Right Sidebar</label>
						<select name="country" class="form-control form-select select2" data-bs-placeholder="Select Country">
							<option label="Select Country">Select Right Sidebar</option>
							<option value="br">Brazil</option>
							<option value="cz">Czech Republic</option>
						</select>
					</div>

					<div class="form-group">
						<div class="form-label">Titlebar</div>
						<label class="custom-switch">
							<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input">
							<span class="custom-switch-indicator"></span>
						</label>
					</div>

				</div>

			</div>
		</div>

	</div>
	<!-- ROW-1 CLOSED -->
@endsection('content')

@section('scripts')



        <script>
            $('#select-all').click(function(event){
                if(this.checked)
                {
                    $(':checkbox').each(function(){
                        this.checked = true;
                    });
                }
                else
                {
                    $(':checkbox').each(function(){
                        this.checked = false;
                    });
                }
            });
         </script>


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
