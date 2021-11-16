@extends('layouts.app')

@section('styles')

@endsection

@section('content')

						<!-- PAGE-HEADER -->
						<div class="page-header">
							<div>
								<h1 class="page-title">User List</h1>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Advanced Elements</a></li>
									<li class="breadcrumb-item active" aria-current="page">User List</li>
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
							<div class="col-lg-12 col-xl-12">
								<div class="input-group mb-5">
									<input type="text" class="form-control" placeholder="">
									<div class="input-group-text btn btn-primary">
										<i class="fa fa-search" aria-hidden="true"></i>
									</div>
								</div>
								<div class="card">
									<div class="card-header border-bottom-0 p-4">
										<h2 class="card-title">1 - 30 of 546 users</h2>
										<div class="page-options d-flex float-end">
											<select class="form-control form-select w-auto">
												<option value="asc">Latest</option>
												<option value="desc">Oldest</option>
											</select>
										</div>
									</div>
									<div class="e-table px-5 pb-5">
										<div class="table-responsive table-lg">
											<table class="table border-top table-bordered mb-0">
												<thead>
													<tr>
														<th  class="text-center">Select

														</th>
														<th class="text-center">Photo</th>
														<th >Name</th>
														<th>Date</th>
														<th class="text-center">Actions</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td class="align-middle text-center">
															<div class="custom-control custom-control-inline custom-checkbox custom-control-nameless m-0 align-top">
																<input class="custom-control-input" id="item-1" type="checkbox"> <label class="custom-control-label" for="item-1"></label>
															</div>
														</td>
														<td class="align-middle text-center"><img alt="image" class="avatar avatar-md br-7" src="{{ asset('assets/images/users/16.jpg')}}"></td>
														<td class="text-nowrap align-middle">Adam Cotter</td>
														<td class="text-nowrap align-middle"><span>09 Dec 2017</span></td>

														<td class="text-center align-middle">
															<div class="btn-group align-top">
																<button class="btn btn-sm btn-primary badge" data-target="#user-form-modal" data-bs-toggle="modal" type="button">Edit</button> <button class="btn btn-sm btn-primary badge" type="button"><i class="fa fa-trash"></i></button>
															</div>
														</td>
													</tr>
													<tr>
														<td class="align-middle text-center">
															<div class="custom-control custom-control-inline custom-checkbox custom-control-nameless m-0 align-top">
																<input class="custom-control-input" id="item-2" type="checkbox"> <label class="custom-control-label" for="item-2"></label>
															</div>
														</td>
														<td class="align-middle text-center"><img alt="image" class="avatar avatar-md br-7" src="{{ asset('assets/images/users/15.jpg')}}"></td>
														<td class="text-nowrap align-middle">Pauline Noble</td>
														<td class="text-nowrap align-middle"><span>26 Jan 2018</span></td>

														<td class="text-center align-middle">
															<div class="btn-group align-top">
																<button class="btn btn-sm btn-primary badge" data-target="#user-form-modal" data-bs-toggle="modal" type="button">Edit</button> <button class="btn btn-sm btn-primary badge" type="button"><i class="fa fa-trash"></i></button>
															</div>
														</td>
													</tr>
													<tr>
														<td class="align-middle text-center">
															<div class="custom-control custom-control-inline custom-checkbox custom-control-nameless m-0 align-top">
																<input class="custom-control-input" id="item-3" type="checkbox"> <label class="custom-control-label" for="item-3"></label>
															</div>
														</td>
														<td class="align-middle text-center"><img alt="image" class="avatar avatar-md br-7" src="{{ asset('assets/images/users/4.jpg')}}"></td>
														<td class="text-nowrap align-middle">Sherilyn Metzel</td>
														<td class="text-nowrap align-middle"><span>27 Jan 2018</span></td>

														<td class="text-center align-middle">
															<div class="btn-group align-top">
																<button class="btn btn-sm btn-primary badge" data-target="#user-form-modal" data-bs-toggle="modal" type="button">Edit</button> <button class="btn btn-sm btn-primary badge" type="button"><i class="fa fa-trash"></i></button>
															</div>
														</td>
													</tr>
													<tr>
														<td class="align-middle text-center">
															<div class="custom-control custom-control-inline custom-checkbox custom-control-nameless m-0 align-top">
																<input class="custom-control-input" id="item-4" type="checkbox"> <label class="custom-control-label" for="item-4"></label>
															</div>
														</td>
														<td class="align-middle text-center"><img alt="image" class="avatar avatar-md br-7" src="{{ asset('assets/images/users/18.jpg')}}"></td>
														<td class="text-nowrap align-middle">Terrie Boaler</td>
														<td class="text-nowrap align-middle"><span>20 Jan 2018</span></td>

														<td class="text-center align-middle">
															<div class="btn-group align-top">
																<button class="btn btn-sm btn-primary badge" data-target="#user-form-modal" data-bs-toggle="modal" type="button">Edit</button> <button class="btn btn-sm btn-primary badge" type="button"><i class="fa fa-trash"></i></button>
															</div>
														</td>
													</tr>
													<tr>
														<td class="align-middle text-center">
															<div class="custom-control custom-control-inline custom-checkbox custom-control-nameless m-0 align-top">
																<input class="custom-control-input" id="item-5" type="checkbox"> <label class="custom-control-label" for="item-5"></label>
															</div>
														</td>
														<td class="align-middle text-center"><img alt="image" class="avatar avatar-md br-7" src="{{ asset('assets/images/users/19.jpg')}}"></td>
														<td class="text-nowrap align-middle">Rutter Pude</td>
														<td class="text-nowrap align-middle"><span>13 Jan 2018</span></td>

														<td class="text-center align-middle">
															<div class="btn-group align-top">
																<button class="btn btn-sm btn-primary badge" data-target="#user-form-modal" data-bs-toggle="modal" type="button">Edit</button> <button class="btn btn-sm btn-primary  badge" type="button"><i class="fa fa-trash"></i></button>
															</div>
														</td>
													</tr>
													<tr>
														<td class="align-middle text-center">
															<div class="custom-control custom-control-inline custom-checkbox custom-control-nameless m-0 align-top">
																<input class="custom-control-input" id="item-6" type="checkbox"> <label class="custom-control-label" for="item-6"></label>
															</div>
														</td>
														<td class="align-middle text-center"><img alt="image" class="avatar avatar-md br-7" src="{{ asset('assets/images/users/8.jpg')}}"></td>
														<td class="text-nowrap align-middle">Clifford Benjamin</td>
														<td class="text-nowrap align-middle"><span>25 Jan 2018</span></td>

														<td class="text-center align-middle">
															<div class="btn-group align-top">
																<button class="btn btn-sm btn-primary badge" data-target="#user-form-modal" data-bs-toggle="modal" type="button">Edit</button> <button class="btn btn-sm btn-primary badge" type="button"><i class="fa fa-trash"></i></button>
															</div>
														</td>
													</tr>
													<tr>
														<td class="align-middle text-center">
															<div class="custom-control custom-control-inline custom-checkbox custom-control-nameless m-0 align-top">
																<input class="custom-control-input" id="item-7" type="checkbox"> <label class="custom-control-label" for="item-7"></label>
															</div>
														</td>
														<td class="align-middle text-center"><img alt="image" class="avatar avatar-md br-7" src="{{ asset('assets/images/users/12.jpg')}}"></td>
														<td class="text-nowrap align-middle">Thedric Romans</td>
														<td class="text-nowrap align-middle"><span>12 Jan 2018</span></td>

														<td class="text-center align-middle">
															<div class="btn-group align-top">
																<button class="btn btn-sm btn-primary badge" data-target="#user-form-modal" data-bs-toggle="modal" type="button">Edit</button> <button class="btn btn-sm btn-primary badge" type="button"><i class="fa fa-trash"></i></button>
															</div>
														</td>
													</tr>
													<tr>
														<td class="align-middle text-center">
															<div class="custom-control custom-control-inline custom-checkbox custom-control-nameless m-0 align-top">
																<input class="custom-control-input" id="item-8" type="checkbox"> <label class="custom-control-label" for="item-8"></label>
															</div>
														</td>
														<td class="align-middle text-center"><img alt="image" class="avatar avatar-md br-7" src="{{ asset('assets/images/users/1.jpg')}}"></td>
														<td class="text-nowrap align-middle">Haily Carthew</td>
														<td class="text-nowrap align-middle"><span>27 Jan 2018</span></td>

														<td class="text-center align-middle">
															<div class="btn-group align-top">
																<button class="btn btn-sm btn-primary badge" data-target="#user-form-modal" data-bs-toggle="modal" type="button">Edit</button> <button class="btn btn-sm btn-primary badge" type="button"><i class="fa fa-trash"></i></button>
															</div>
														</td>
													</tr>
													<tr>
														<td class="align-middle text-center">
															<div class="custom-control custom-control-inline custom-checkbox custom-control-nameless m-0 align-top">
																<input class="custom-control-input" id="item-9" type="checkbox"> <label class="custom-control-label" for="item-9"></label>
															</div>
														</td>
														<td class="align-middle text-center"><img alt="image" class="avatar avatar-md br-7" src="{{ asset('assets/images/users/12.jpg')}}"></td>
														<td class="text-nowrap align-middle">Dorothea Joicey</td>
														<td class="text-nowrap align-middle"><span>12 Dec 2017</span></td>

														<td class="text-center align-middle">
															<div class="btn-group align-top">
																<button class="btn btn-sm btn-primary badge" data-target="#user-form-modal" data-bs-toggle="modal" type="button">Edit</button> <button class="btn btn-sm btn-primary badge" type="button"><i class="fa fa-trash"></i></button>
															</div>
														</td>
													</tr>
													<tr>
														<td class="align-middle text-center">
															<div class="custom-control custom-control-inline custom-checkbox custom-control-nameless m-0 align-top">
																<input class="custom-control-input" id="item-10" type="checkbox"> <label class="custom-control-label" for="item-10"></label>
															</div>
														</td>
														<td class="align-middle text-center"><img alt="image" class="avatar avatar-md br-7" src="{{ asset('assets/images/users/15.jpg')}}"></td>
														<td class="text-nowrap align-middle">Mikaela Pinel</td>
														<td class="text-nowrap align-middle"><span>10 Dec 2017</span></td>

														<td class="text-center align-middle">
															<div class="btn-group align-top">
																<button class="btn btn-sm btn-primary badge" data-target="#user-form-modal" data-bs-toggle="modal" type="button">Edit</button> <button class="btn btn-sm btn-primary badge" type="button"><i class="fa fa-trash"></i></button>
															</div>
														</td>
													</tr>
													<tr>
														<td class="align-middle text-center">
															<div class="custom-control custom-control-inline custom-checkbox custom-control-nameless m-0 align-top">
																<input class="custom-control-input" id="item-11" type="checkbox"> <label class="custom-control-label" for="item-11"></label>
															</div>
														</td>
														<td class="align-middle text-center"><img alt="image" class="avatar avatar-md br-7" src="{{ asset('assets/images/users/12.jpg')}}"></td>
														<td class="text-nowrap align-middle">Donnell Farries</td>
														<td class="text-nowrap align-middle"><span>03 Dec 2017</span></td>

														<td class="text-center align-middle">
															<div class="btn-group align-top">
																<button class="btn btn-sm btn-primary badge" data-target="#user-form-modal" data-bs-toggle="modal" type="button">Edit</button> <button class="btn btn-sm btn-primary badge" type="button"><i class="fa fa-trash"></i></button>
															</div>
														</td>
													</tr>
													<tr>
														<td class="align-middle text-center">
															<div class="custom-control custom-control-inline custom-checkbox custom-control-nameless m-0 align-top">
																<input class="custom-control-input" id="item-12" type="checkbox"> <label class="custom-control-label" for="item-12"></label>
															</div>
														</td>
														<td class="align-middle text-center"><img alt="image" class="avatar avatar-md br-7" src="{{ asset('assets/images/users/4.jpg')}}"></td>
														<td class="text-nowrap align-middle">Letizia Puncher</td>
														<td class="text-nowrap align-middle"><span>09 Dec 2017</span></td>

														<td class="text-center align-middle">
															<div class="btn-group align-top">
																<button class="btn btn-sm btn-primary badge" data-target="#user-form-modal" data-bs-toggle="modal" type="button">Edit</button> <button class="btn btn-sm btn-primary badge" type="button"><i class="fa fa-trash"></i></button>
															</div>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
								<div class="mb-5">
									<ul class="pagination float-end">
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
							</div><!-- COL-END -->
						</div>
						<!-- ROW CLOSED -->

@endsection('content')

@section('scripts')

		<!-- C3 CHART JS -->
		<script src="{{ asset('assets/plugins/charts-c3/d3.v5.min.js')}}"></script>
		<script src="{{ asset('assets/plugins/charts-c3/c3-chart.js')}}"></script>

@endsection
