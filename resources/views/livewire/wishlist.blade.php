@extends('layouts.app')

@section('styles')

@endsection

@section('content')

						<!-- PAGE-HEADER -->
						<div class="page-header">
							<div>
								<h1 class="page-title">Wish List</h1>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">E-Commerce</a></li>
									<li class="breadcrumb-item active" aria-current="page">Wish List</li>
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

						<!-- ROW-1 OPEN -->
						<div class="row">
							<div class="col-xl-12 col-md-12">
								<div class="card cart">
									<div class="card-header">
										<h3 class="card-title">My Wish List</h3>
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table class="table table-bordered table-vcenter text-nowrap">
												<thead>
													<tr class="border-top">
														<th class="w-15">Product</th>
														<th class="w-5">Title</th>
														<th class="w-15">Price</th>
														<th class="w-10">Status</th>
														<th class="w-10">Action</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>
															<img src="{{ asset('assets/images/pngs/1.png')}}" alt="" class="cart-img">
														</td>
														<td>laborum et dolorum fuga</td>
														<td class="fw-bold">$568</td>
														<td >
															<span class="badge bg-success">Stock</span>
														</td>
														<td>
															<a href="{{ url('shop-description')}}" class="btn btn-primary-light btn-square  br-50 m-1" data-bs-toggle="tooltip" title="" data-bs-original-title=" Quick View"><i class="fe fe-eye fs-13""></i></a>
															<a href="{{ url('cart')}}" class="btn btn-info-light btn-square  br-50 m-1" data-bs-toggle="tooltip" title="" data-bs-original-title="add to cart" ><i class="fe fe-shopping-cart fs-13""></i> </a>
															<a href="{{ url('cart')}}" class="btn btn-danger-light btn-square  br-50 m-1" data-bs-toggle="tooltip" title="" data-bs-original-title="add to cart" ><i class="fe fe-trash fs-13""></i> </a>
														</td>
													</tr>
													<tr>
														<td>
															<img src="{{ asset('assets/images/pngs/4.png')}}" alt="" class="cart-img">
														</td>
														<td>laborum et dolorum fuga</td>
														<td class="fw-bold">$1,027</td>
														<td >
															<span class="badge bg-danger">InStock</span>
														</td>
														<td>
															<a href="{{ url('shop-description')}}" class="btn btn-primary-light btn-square  br-50 m-1" data-bs-toggle="tooltip" title="" data-bs-original-title=" Quick View"><i class="fe fe-eye fs-13""></i></a>
															<a href="{{ url('cart')}}" class="btn btn-info-light btn-square  br-50 m-1" data-bs-toggle="tooltip" title="" data-bs-original-title="add to cart" ><i class="fe fe-shopping-cart fs-13""></i> </a>
															<a href="{{ url('cart')}}" class="btn btn-danger-light btn-square  br-50 m-1" data-bs-toggle="tooltip" title="" data-bs-original-title="add to cart" ><i class="fe fe-trash fs-13""></i> </a>
														</td>
													</tr>
													<tr>
														<td>
															<img src="{{ asset('assets/images/pngs/8.png')}}" alt="" class="cart-img">
														</td>
														<td>laborum et dolorum fuga</td>
														<td class="fw-bold">$1,589</td>
														<td >
															<span class="badge bg-success">Stock</span>
														</td>
														<td>
															<a href="{{ url('shop-description')}}" class="btn btn-primary-light btn-square  br-50 m-1" data-bs-toggle="tooltip" title="" data-bs-original-title=" Quick View"><i class="fe fe-eye fs-13""></i></a>
															<a href="{{ url('cart')}}" class="btn btn-info-light btn-square  br-50 m-1" data-bs-toggle="tooltip" title="" data-bs-original-title="add to cart" ><i class="fe fe-shopping-cart fs-13""></i> </a>
															<a href="{{ url('cart')}}" class="btn btn-danger-light btn-square  br-50 m-1" data-bs-toggle="tooltip" title="" data-bs-original-title="add to cart" ><i class="fe fe-trash fs-13""></i> </a>
														</td>
													</tr>
													<tr>
														<td>
															<img src="{{ asset('assets/images/pngs/2.png')}}" alt="" class="cart-img">
														</td>
														<td>laborum et dolorum fuga</td>
														<td class="fw-bold">$356</td>
														<td >
															<span class="badge bg-success">Stock</span>
														</td>
														<td>
															<a href="{{ url('shop-description')}}" class="btn btn-primary-light btn-square  br-50 m-1" data-bs-toggle="tooltip" title="" data-bs-original-title=" Quick View"><i class="fe fe-eye fs-13""></i></a>
															<a href="{{ url('cart')}}" class="btn btn-info-light btn-square  br-50 m-1" data-bs-toggle="tooltip" title="" data-bs-original-title="add to cart" ><i class="fe fe-shopping-cart fs-13""></i> </a>
															<a href="{{ url('cart')}}" class="btn btn-danger-light btn-square  br-50 m-1" data-bs-toggle="tooltip" title="" data-bs-original-title="add to cart" ><i class="fe fe-trash fs-13""></i> </a>
														</td>
													</tr>
													<tr>
														<td>
															<img src="{{ asset('assets/images/pngs/3.png')}}" alt="" class="cart-img">
														</td>
														<td>laborum et dolorum fuga</td>
														<td class="fw-bold">$1,245</td>
														<td >
															<span class="badge bg-danger">Instock</span>
														</td>
														<td>
															<a href="{{ url('shop-description')}}" class="btn btn-primary-light btn-square  br-50 m-1" data-bs-toggle="tooltip" title="" data-bs-original-title=" Quick View"><i class="fe fe-eye fs-13""></i></a>
															<a href="{{ url('cart')}}" class="btn btn-info-light btn-square  br-50 m-1" data-bs-toggle="tooltip" title="" data-bs-original-title="add to cart" ><i class="fe fe-shopping-cart fs-13""></i> </a>
															<a href="{{ url('cart')}}" class="btn btn-danger-light btn-square  br-50 m-1" data-bs-toggle="tooltip" title="" data-bs-original-title="add to cart" ><i class="fe fe-trash fs-13""></i> </a>
														</td>
													</tr>
													<tr>
														<td>
															<img src="{{ asset('assets/images/pngs/6.png')}}" alt="" class="cart-img">
														</td>
														<td>laborum et dolorum fuga</td>
														<td class="fw-bold">$783</td>
														<td >
															<span class="badge bg-success">Stock</span>
														</td>
														<td>
															<a href="{{ url('shop-description')}}" class="btn btn-primary-light btn-square  br-50 m-1" data-bs-toggle="tooltip" title="" data-bs-original-title=" Quick View"><i class="fe fe-eye fs-13""></i></a>
															<a href="{{ url('cart')}}" class="btn btn-info-light btn-square  br-50 m-1" data-bs-toggle="tooltip" title="" data-bs-original-title="add to cart" ><i class="fe fe-shopping-cart fs-13""></i> </a>
															<a href="{{ url('cart')}}" class="btn btn-danger-light btn-square  br-50 m-1" data-bs-toggle="tooltip" title="" data-bs-original-title="add to cart" ><i class="fe fe-trash fs-13""></i> </a>
														</td>
													</tr>
													<tr>
														<td>
															<img src="{{ asset('assets/images/pngs/7.png')}}" alt="" class="cart-img">
														</td>
														<td>laborum et dolorum fuga</td>
														<td class="fw-bold">$4,876</td>
														<td >
															<span class="badge bg-success">Stock</span>
														</td>
														<td>
															<a href="{{ url('shop-description')}}" class="btn btn-primary-light btn-square  br-50 m-1" data-bs-toggle="tooltip" title="" data-bs-original-title=" Quick View"><i class="fe fe-eye fs-13""></i></a>
															<a href="{{ url('cart')}}" class="btn btn-info-light btn-square  br-50 m-1" data-bs-toggle="tooltip" title="" data-bs-original-title="add to cart" ><i class="fe fe-shopping-cart fs-13""></i> </a>
															<a href="{{ url('cart')}}" class="btn btn-danger-light btn-square  br-50 m-1" data-bs-toggle="tooltip" title="" data-bs-original-title="add to cart" ><i class="fe fe-trash fs-13""></i> </a>
														</td>
													</tr>
													<tr>
														<td>
															<img src="{{ asset('assets/images/pngs/9.png')}}" alt="" class="cart-img">
														</td>
														<td>laborum et dolorum fuga</td>
														<td class="fw-bold">$13,876</td>
														<td >
															<span class="badge bg-success">Stock</span>
														</td>
														<td>
															<a href="{{ url('shop-description')}}" class="btn btn-primary-light btn-square  br-50 m-1" data-bs-toggle="tooltip" title="" data-bs-original-title=" Quick View"><i class="fe fe-eye fs-13""></i></a>
															<a href="{{ url('cart')}}" class="btn btn-info-light btn-square  br-50 m-1" data-bs-toggle="tooltip" title="" data-bs-original-title="add to cart" ><i class="fe fe-shopping-cart fs-13""></i> </a>
															<a href="{{ url('cart')}}" class="btn btn-danger-light btn-square  br-50 m-1" data-bs-toggle="tooltip" title="" data-bs-original-title="add to cart" ><i class="fe fe-trash fs-13""></i> </a>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
										<div class="float-end">
											<ul class="pagination ">
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
							</div>
						</div>
						<!-- ROW-1 CLOSED -->

@endsection('content')

@section('scripts')

		<!-- CHARTJS JS -->
		<script src="{{ asset('assets/plugins/chart/Chart.bundle.js')}}"></script>
		<script src="{{ asset('assets/plugins/chart/utils.js')}}"></script>

@endsection
