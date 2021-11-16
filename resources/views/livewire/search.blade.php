@extends('layouts.app')

@section('styles')

        <!-- INTERNAL SELECT2 CSS -->
        <link href="{{ asset('assets/plugins/select2/select2.min.css') }}" rel="stylesheet"/>

@endsection

@section('content')

						<!-- PAGE-HEADER -->
						<div class="page-header">
							<div>
								<h1 class="page-title">Search</h1>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Advanced Elements</a></li>
									<li class="breadcrumb-item active" aria-current="page">Search</li>
								</ol>
							</div>
							<div class="ms-auto pageheader-btn">
								<a href="#" class="btn btn-primary btn-icon text-white me-2">
									<span>
										<i class="fe fe-plus"></i>
									</span> Add Account
								</a>
								<a href="#" class="btn btn-success btn-icon text-white">
									<span>
										<i class="fe fe-log-in"></i>
									</span> Export
								</a>
							</div>
						</div>
						<!-- PAGE-HEADER END -->

						<!-- ROW OPEN -->
						<div class="row row-cards">
							<div class="col-lg-12 col-xl-3">
								<div class="row">
									<div class="col-md-12 col-lg-6 col-xl-12">
										<div class="card">
											<div class="card-header">
												<div class="card-title"> Categories</div>
											</div>
											<div class="card-body">
												<div class="form-group">
													<label class="form-label mt-0">Mens</label>
													<select name="beast" id="select-beast" class="form-control form-select select2">
														<option value="0">--Select--</option>
														<option value="1">Foot wear</option>
														<option value="2">Top wear</option>
														<option value="3">Bootom wear</option>
														<option value="4">Men's Groming</option>
														<option value="5">Accessories</option>
													</select>
												</div>
												<div class="form-group">
													<label class="form-label">Women</label>
													<select name="beast" id="select-beast1" class="form-control form-select select2">
														<option value="0">--Select--</option>
														<option value="1">Western wear</option>
														<option value="2">Foot wear</option>
														<option value="3">Top wear</option>
														<option value="4">Bootom wear</option>
														<option value="5">Beuty Groming</option>
														<option value="6">Accessories</option>
														<option value="7">jewellery</option>
													</select>
												</div>
												<div class="form-group">
													<label class="form-label">Baby & Kids</label>
													<select name="beast" id="select-beast2" class="form-control form-select select2">
														<option value="0">--Select--</option>
														<option value="1">Boys clothing</option>
														<option value="2">girls Clothing</option>
														<option value="3">Toys</option>
														<option value="4">Baby Care</option>
														<option value="5">Kids footwear</option>
													</select>
												</div>
												<div class="form-group">
													<label class="form-label">Electronics</label>
													<select name="beast" id="select-beast3" class="form-control form-select select2">
														<option value="0">--Select--</option>
														<option value="1">Mobiles</option>
														<option value="2">Laptops</option>
														<option value="3">Gaming & Accessories</option>
														<option value="4">Health care Appliances</option>
													</select>
												</div>
												<div class="form-group">
													<label class="form-label">Sport,Books & More </label>
													<select name="beast" id="select-beast4" class="form-control form-select select2">
														<option value="0">--Select--</option>
														<option value="1">Stationery</option>
														<option value="2">Books</option>
														<option value="3">Gaming</option>
														<option value="4">Music</option>
														<option value="5">Exercise & fitness</option>
													</select>
												</div>
												<a href="javascript:void(0)" class="btn btn-primary d-grid mt-5">Submit</a>
											</div>
										</div>
									</div>
									<div class="col-md-12 col-lg-6 col-xl-12">
										<div class="card">
											<div class="card-body h-100">
												<div class="mb-4 text-center">
													<img src="{{ asset('assets/images/pngs/5.png')}}" alt="img" class="img-fluid">
												</div>
												<h4 class="card-title text-center">Womens Shopping Zone</h4>
												<div class="card-subtitle text-center">Upto 50%  Discount slaes Every shopping items</div>
												<div class="text-center">
													<div class="mt-3 ">
														<a href="javascript:void(0)" class="btn btn-primary d-grid"> View More</a>
													</div>
													<div class="mt-3 d-grid">
														<a href="{{ url('cart')}}" class="btn btn-secondary"><i class="fe fe-plus"></i> Add to cart</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-12 col-xl-9">
								<div class="input-group">
									<input type="text" class="form-control" placeholder="">
									<div class="input-group-text btn btn-primary">
										<i class="fa fa-search" aria-hidden="true"></i>
									</div>
								</div>
								<div class="card mt-5 users store">
									<div class="table-responsive">
										<table class="table card-table table-vcenter text-nowrap">
											<tr>
												<td><span class="avatar avatar-md brround mt-1" style="background-image: url({{ asset('assets/images/users/14.jpg')}})"></span></td>
												<td>Mens Jackets</td>
												<td>
													<div class="star-ratings start-ratings-main clearfix  mt-5 mb-5">
														<div class="stars stars-example-fontawesome">
															<select id="fontawesome" name="rating" autocomplete="off">
																<option value="1">1</option>
																<option value="2">2</option>
																<option value="3">3</option>
																<option value="4">4</option>
																<option value="5">5</option>
															</select>
														</div>
													</div>
												</td>
												<td class="text-end text-primary d-none d-md-table-cell text-nowrap">50% off</td>
												<td class="text-end">
													<strong>$1,987</strong>
												</td>
												<td class="text-end"><a class="btn btn-primary btn-sm text-white me-2">view</a></td>
											</tr>
											<tr>
												<td><span class="avatar avatar-md brround mt-1" style="background-image: url({{ asset('assets/images/users/2.jpg')}})"></span></td>
												<td> Occational Special Edition</td>
												<td>
													<div class="star-ratings start-ratings-main clearfix  mt-5 mb-5">
														<div class="stars stars-example-fontawesome">
															<select id="fontawesome1" name="rating" autocomplete="off">
																<option value="1">1</option>
																<option value="2">2</option>
																<option value="3">3</option>
																<option value="4">4</option>
																<option value="5">5</option>
															</select>
														</div>
													</div>
												</td>
												<td class="text-end text-green d-none d-md-table-cell text-nowrap ">60% off</td>
												<td class="text-end">
													<strong>$2,679</strong>
												</td>
												<td class="text-end"><a class="btn btn-primary btn-sm text-white me-2">view</a></td>
											</tr>
											<tr>
												<td><span class="avatar avatar-md brround mt-1" style="background-image: url({{ asset('assets/images/users/5.jpg')}})"></span></td>
												<td>Saree
													<div class="badge bg-primary badge-md">New</div>
												</td>
												<td>
													<div class="star-ratings start-ratings-main clearfix  mt-5 mb-5">
														<div class="stars stars-example-fontawesome">
															<select id="fontawesome2" name="rating" autocomplete="off">
																<option value="1">1</option>
																<option value="2">2</option>
																<option value="3">3</option>
																<option value="4">4</option>
																<option value="5">5</option>
															</select>
														</div>
													</div>
												</td>
												<td class="text-end text-warning d-none d-md-table-cell text-nowrap">25% off</td>
												<td class="text-end">
													<strong>$999</strong>
												</td>
												<td class="text-end"><a class="btn btn-primary btn-sm text-white me-2">view</a></td>
											</tr>
											<tr>
												<td><span class="avatar avatar-md brround mt-1" style="background-image: url({{ asset('assets/images/users/4.jpg')}})"></span></td>
												<td>Western Wear</td>
												<td>
													<div class="star-ratings start-ratings-main clearfix  mt-5 mb-5">
														<div class="stars stars-example-fontawesome">
															<select id="fontawesome3" name="rating" autocomplete="off">
																<option value="1">1</option>
																<option value="2">2</option>
																<option value="3">3</option>
																<option value="4">4</option>
																<option value="5">5</option>
															</select>
														</div>
													</div>
												</td>
												<td class="text-end text-info d-none d-md-table-cell text-nowrap">30% off</td>
												<td class="text-end">
													<strong>$699</strong>
												</td>
												<td class="text-end"><a class="btn btn-primary btn-sm text-white me-2">view</a></td>
											</tr>
											<tr>
												<td><span class="avatar avatar-md brround mt-1" style="background-image: url({{ asset('assets/images/users/14.jpg')}})"></span></td>
												<td>Kids Dress
													<div class="badge bg-default badge-md">New</div>
												</td>
												<td>
													<div class="star-ratings start-ratings-main clearfix  mt-5 mb-5">
														<div class="stars stars-example-fontawesome">
															<select id="fontawesome4" name="rating" autocomplete="off">
																<option value="1">1</option>
																<option value="2">2</option>
																<option value="3">3</option>
																<option value="4">4</option>
																<option value="5">5</option>
															</select>
														</div>
													</div>
												</td>
												<td class="text-end text-primary d-none d-md-table-cell text-nowrap">47% off</td>
												<td class="text-end">
													<strong>$399</strong>
												</td>
												<td class="text-end"><a class="btn btn-primary btn-sm text-white me-2">view</a></td>
											</tr>
											<tr>
												<td><span class="avatar avatar-md brround mt-1" style="background-image: url({{ asset('assets/images/users/11.jpg')}})"></span></td>
												<td>Kids Toys</td>
												<td>
													<div class="star-ratings start-ratings-main clearfix  mt-5 mb-5">
														<div class="stars stars-example-fontawesome">
															<select id="fontawesome5" name="rating" autocomplete="off">
																<option value="1">1</option>
																<option value="2">2</option>
																<option value="3">3</option>
																<option value="4">4</option>
																<option value="5">5</option>
															</select>
														</div>
													</div>
												</td>
												<td class="text-end text-success d-none d-md-table-cell text-nowrap">26% off</td>
												<td class="text-end">
													<strong>$299</strong>
												</td>
												<td class="text-end"><a class="btn btn-primary btn-sm text-white me-2">view</a></td>
											</tr>
											<tr>
												<td><span class="avatar avatar-md brround mt-1" style="background-image: url({{ asset('assets/images/users/2.jpg')}})"></span></td>
												<td>Sony KD-49XE7005
													<div class="badge bg-primary badge-md">New</div>
												</td>
												<td>
													<div class="star-ratings start-ratings-main clearfix  mt-5 mb-5">
														<div class="stars stars-example-fontawesome">
															<select id="fontawesome6" name="rating" autocomplete="off">
																<option value="1">1</option>
																<option value="2">2</option>
																<option value="3">3</option>
																<option value="4">4</option>
																<option value="5">5</option>
															</select>
														</div>
													</div>
												</td>
												<td class="text-end text-warning d-none d-md-table-cell text-nowrap">43% off</td>
												<td class="text-end">
													<strong>$22,269</strong>
												</td>
												<td class="text-end"><a class="btn btn-primary btn-sm text-white me-2">view</a></td>
											</tr>
											<tr>
												<td><span class="avatar avatar-md brround mt-1" style="background-image: url({{ asset('assets/images/users/13.jpg')}})"></span></td>
												<td>Huawei Mate Pro Dual SIM </td>
												<td>
													<div class="star-ratings start-ratings-main clearfix  mt-5 mb-5">
														<div class="stars stars-example-fontawesome">
															<select id="fontawesome7" name="rating" autocomplete="off">
																<option value="1">1</option>
																<option value="2">2</option>
																<option value="3">3</option>
																<option value="4">4</option>
																<option value="5">5</option>
															</select>
														</div>
													</div>
												</td>
												<td class="text-end text-info d-none d-md-table-cell text-nowrap">20% off</td>
												<td class="text-end">
													<strong>$9,999</strong>
												</td>
												<td class="text-end"><a class="btn btn-primary btn-sm text-white me-2">view</a></td>
											</tr>
											<tr>
												<td><span class="avatar avatar-md brround mt-1" style="background-image: url({{ asset('assets/images/users/12.jpg')}})"></span></td>
												<td>Novel Books
													<div class="badge bg-default badge-md">New</div>
												</td>
												<td>
													<div class="star-ratings start-ratings-main clearfix  mt-5 mb-5">
														<div class="stars stars-example-fontawesome">
															<select id="fontawesome8" name="rating" autocomplete="off">
																<option value="1">1</option>
																<option value="2">2</option>
																<option value="3">3</option>
																<option value="4">4</option>
																<option value="5">5</option>
															</select>
														</div>
													</div>
												</td>
												<td class="text-end text-primary d-none d-md-table-cell text-nowrap">14% off</td>
												<td class="text-end">
													<strong>$899</strong>
												</td>
												<td class="text-end"><a class="btn btn-primary btn-sm text-white me-2">view</a></td>
											</tr>
											<tr>
												<td><span class="avatar avatar-md brround mt-1" style="background-image: url({{ asset('assets/images/users/1.jpg')}})"></span></td>
												<td>Welcare Fitness</td>
												<td>
													<div class="star-ratings start-ratings-main clearfix  mt-5 mb-5">
														<div class="stars stars-example-fontawesome">
															<select id="fontawesome9" name="rating" autocomplete="off">
																<option value="1">1</option>
																<option value="2">2</option>
																<option value="3">3</option>
																<option value="4">4</option>
																<option value="5">5</option>
															</select>
														</div>
													</div>
												</td>
												<td class="text-end text-success d-none d-md-table-cell text-nowrap">40% off</td>
												<td class="text-end">
													<strong>$3,987</strong>
												</td>
												<td class="text-end"><a class="btn btn-primary btn-sm text-white me-2">view</a></td>
											</tr>
										</table>
									</div>
								</div>
								<div >
									<ul class="pagination mb-5 float-end">
										<li class="page-item page-prev disabled">
											<a class="page-link" href="#" tabindex="-1">Prev</a>
										</li>
										<li class="page-item active"><a class="page-link" href="#">1</a></li>
										<li class="page-item"><a class="page-link" href="#">2</a></li>
										<li class="page-item"><a class="page-link" href="#">3</a></li>
										<li class="page-item"><a class="page-link" href="#">4</a></li>
										<li class="page-item"><a class="page-link" href="#">5</a></li>
										<li class="page-item page-next">
											<a class="page-link" href="#">Next</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<!-- ROW CLOSE -->

@endsection('content')

@section('scripts')

		<!-- INTERNAL Rating js-->
		<script src="{{ asset('assets/plugins/rating/jquery.barrating.js')}}"></script>
		<script src="{{ asset('assets/plugins/rating/js/examples.js')}}"></script>

        <!-- INTERNAL Rating js-->
		<script src="{{ asset('assets/plugins/rating/jquery.barrating.js') }}"></script>
		<script src="{{ asset('assets/plugins/rating/js/examples.js') }}"></script>

@endsection
