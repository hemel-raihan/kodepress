@extends('layouts.app')

@section('styles')

        <!-- INTERNAL SELECT2 CSS -->
        <link href="{{ asset('assets/plugins/select2/select2.min.css') }}" rel="stylesheet"/>

@endsection

@section('content')

						<!-- PAGE-HEADER -->
						<div class="page-header">
							<div>
								<h1 class="page-title">Edit Profile</h1>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Pages</a></li>
									<li class="breadcrumb-item active" aria-current="page">Edit Profile</li>
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
							<div class="col-lg-4 col-xl-4 col-md-12 col-sm-12">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Edit Password</div>
									</div>
									<div class="card-body">
										<div class="d-flex mb-3">
											<img alt="User Avatar" class="rounded-circle avatar-lg me-2" src="{{ asset('assets/images/users/8.jpg')}}">
											<div class="ms-auto mt-xl-2 mt-lg-0 me-lg-2">
												<a href="{{ url('editprofile')}}" class="btn btn-primary btn-sm mt-1 mb-1"><i class="fe fe-camera me-1"></i>Edit profile</a>
												<a href="#" class="btn btn-danger btn-sm mt-1 mb-1"><i class="fe fe-camera-off me-1"></i>Delete profile</a>
											</div>
										</div>
										<div class="form-group">
											<label class="form-label">Change Password</label>
											<input type="password" class="form-control" value="password">
										</div>
										<div class="form-group">
											<label class="form-label">New Password</label>
											<input type="password" class="form-control" value="password">
										</div>
										<div class="form-group">
											<label class="form-label">Confirm Password</label>
											<input type="password" class="form-control" value="password">
										</div>
									</div>
									<div class="card-footer text-end">
										<a href="#" class="btn btn-primary">Updated</a>
										<a href="#" class="btn btn-danger">Cancel</a>
									</div>
								</div>
								<div class="card panel-theme">
									<div class="card-header">
										<div class="float-start">
											<h3 class="card-title">Contact</h3>
										</div>
										<div class="clearfix"></div>
									</div>
									<div class="card-body no-padding">
										<ul class="list-group no-margin">
											<li class="list-group-item"><i class="fa fa-envelope list-contact-icons border text-center br-100"></i> <span class="contact-icons">support@demo.com</span></li>
											<li class="list-group-item"><i class="fa fa-globe list-contact-icons border text-center br-100"></i><span class="contact-icons"> www.abcd.com</span></li>
											<li class="list-group-item"><i class="fa fa-phone list-contact-icons border text-center br-100"></i> <span class="contact-icons">+125 5826 3658 </span></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-lg-8 col-xl-8 col-md-12 col-sm-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Edit Profile</h3>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-lg-6 col-md-12">
												<div class="form-group">
													<label for="exampleInputname">First Name</label>
													<input type="text" class="form-control" id="exampleInputname" placeholder="First Name">
												</div>
											</div>
											<div class="col-lg-6 col-md-12">
												<div class="form-group">
													<label for="exampleInputname1">Last Name</label>
													<input type="text" class="form-control" id="exampleInputname1" placeholder="Enter Last Name">
												</div>
											</div>
										</div>
										<div class="form-group">
											<label for="exampleInputEmail1">Email address</label>
											<input type="email" class="form-control" id="exampleInputEmail1" placeholder="email address">
										</div>
										<div class="form-group">
											<label for="exampleInputnumber">Conatct Number</label>
											<input type="number" class="form-control" id="exampleInputnumber" placeholder="ph number">
										</div>
										<div class="form-group">
											<label class="form-label">About Me</label>
											<textarea class="form-control" rows="6">My bio.........</textarea>
										</div>
										<div class="form-group">
											<label class="form-label">Website</label>
											<input class="form-control" placeholder="http://splink.com">
										</div>
										<div class="form-group">
											<label class="form-label">Date Of Birth</label>
											<div class="row">
												<div class="col-md-4">
													<select class="form-control select2 form-select">
														<option value="0">Date</option>
														<option value="1">01</option>
														<option value="2">02</option>
														<option value="3">03</option>
														<option value="4">04</option>
														<option value="5">05</option>
														<option value="6">06</option>
														<option value="7">07</option>
														<option value="8">08</option>
														<option value="9">09</option>
														<option value="10">10</option>
														<option value="11">11</option>
														<option value="12">12</option>
														<option value="13">13</option>
														<option value="14">14</option>
														<option value="15">15</option>
														<option value="16">16</option>
														<option value="17">17</option>
														<option value="18">18</option>
														<option value="19">19</option>
														<option value="20">20</option>
														<option value="21">21</option>
														<option value="22">22</option>
														<option value="23">23</option>
														<option value="24">24</option>
														<option value="25">25</option>
														<option value="26">26</option>
														<option value="27">27</option>
														<option value="28">28</option>
														<option value="29">29</option>
														<option value="30">30</option>
														<option value="31">31</option>
													</select>
												</div>
												<div class="col-md-4">
													<select class="form-control select2 form-select">
														<option value="0">Mon</option>
														<option value="1">Jan</option>
														<option value="2">Feb</option>
														<option value="3">Mar</option>
														<option value="4">Apr</option>
														<option value="5">May</option>
														<option value="6">June</option>
														<option value="7">July</option>
														<option value="8">Aug</option>
														<option value="9">Sep</option>
														<option value="10">Oct</option>
														<option value="11">Nov</option>
														<option value="12">Dec</option>
													</select>
												</div>
												<div class="col-md-4">
													<select class="form-control select2 form-select">
														<option value="0">Year</option>
														<option value="1">2018</option>
														<option value="2">2017</option>
														<option value="3">2016</option>
														<option value="4">2015</option>
														<option value="5">2014</option>
														<option value="6">2013</option>
														<option value="7">2102</option>
														<option value="8">2012</option>
														<option value="9">2011</option>
														<option value="10">2010</option>
														<option value="11">2009</option>
														<option value="12">2008</option>
														<option value="13">2007</option>
														<option value="14">2006</option>
														<option value="15">2005</option>
														<option value="16">2004</option>
														<option value="17">2003</option>
														<option value="18">2002</option>
														<option value="19">2001</option>
														<option value="20">1999</option>
														<option value="21">1998</option>
														<option value="22">1997</option>
														<option value="23">1996</option>
														<option value="24">1995</option>
														<option value="25">1994</option>
														<option value="26">1993</option>
														<option value="27">1992</option>
														<option value="28">1991</option>
														<option value="29">1990</option>
														<option value="30">1989</option>
														<option value="31">1988</option>
													</select>
												</div>
											</div>
										</div>
									</div>
									<div class="card-footer text-end">
										<a href="#" class="btn btn-success mt-1">Save</a>
										<a href="#" class="btn btn-danger mt-1">Cancel</a>
									</div>
								</div>
							</div>
						</div>
						<!-- ROW-1 CLOSED -->

						<!-- ROW-2 OPEN -->
						<div class="row">
							<div class="col-12">
								<div class="card">
									<div class="card-header ">
										<h3 class="card-title ">Projects</h3>
										<div class="card-options">
											<button id="add__new__list" type="button" class="btn btn-md btn-primary " data-bs-toggle="modal" data-target=".bd-example-modal-lg"><i class="fa fa-plus"></i> Add a new Project</button>
										</div>
									</div>
									<div class="table-responsive">
										<table class="table table-hover card-table table-striped table-vcenter table-outline text-nowrap">
											<thead>
												<tr>
													<th scope="col">ID</th>
													<th scope="col">Project Name</th>
													<th scope="col">Backend</th>
													<th scope="col">Deadline</th>
													<th scope="col">Team Members</th>
													<th scope="col">Edit Project Details </th>
													<th scope="col">list info</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>1</td>
													<td>At vero eos et accusamus et iusto odio</td>
													<td>PHP</td>
													<td>15/11/2018</td>
													<td>15 Members</td>
													<td>
														<a class="btn btn-sm btn-primary" href="#"><i class="fa fa-edit"></i> Edit</a>
														<a class="btn btn-sm btn-danger" href="#"><i class="fa fa-trash"></i> Delete</a>
													</td>
													<td><a class="btn btn-sm btn-secondary" href="#"><i class="fa fa-info-circle"></i> Details</a> </td>
												</tr>
												<tr>
													<td>2</td>
													<td>voluptatum deleniti atque corrupti quos</td>
													<td>Angular js</td>
													<td>25/11/2018</td>
													<td>12 Members</td>
													<td>
														<a class="btn btn-sm btn-primary" href="#"><i class="fa fa-edit"></i> Edit</a>
														<a class="btn btn-sm btn-danger" href="#"><i class="fa fa-trash"></i> Delete</a>
													</td>
													<td><a class="btn btn-sm btn-secondary" href="#"><i class="fa fa-info-circle"></i> Details</a> </td>
												</tr>
												<tr>
													<td>3</td>
													<td>dignissimos ducimus qui blanditiis praesentium </td>
													<td>Java</td>
													<td>5/12/2018</td>
													<td>20 Members</td>
													<td>
														<a class="btn btn-sm btn-primary" href="#"><i class="fa fa-edit"></i> Edit</a>
														<a class="btn btn-sm btn-danger" href="#"><i class="fa fa-trash"></i> Delete</a>
													</td>
													<td><a class="btn btn-sm btn-secondary" href="#"><i class="fa fa-info-circle"></i> Details</a> </td>
												</tr>
												<tr>
													<td>4</td>
													<td>deleniti atque corrupti quos dolores  </td>
													<td>Phython</td>
													<td>14/12/2018</td>
													<td>10 Members</td>
													<td>
														<a class="btn btn-sm btn-primary" href="#"><i class="fa fa-edit"></i> Edit</a>
														<a class="btn btn-sm btn-danger" href="#"><i class="fa fa-trash"></i> Delete</a>
													</td>
													<td><a class="btn btn-sm btn-secondary" href="#"><i class="fa fa-info-circle"></i> Details</a> </td>
												</tr>
												<tr>
													<td>5</td>
													<td>et quas molestias excepturi sint occaecati</td>
													<td>Phython</td>
													<td>4/12/2018</td>
													<td>17 Members</td>
													<td>
														<a class="btn btn-sm btn-primary" href="#"><i class="fa fa-edit"></i> Edit</a>
														<a class="btn btn-sm btn-danger" href="#"><i class="fa fa-trash"></i> Delete</a>
													</td>
													<td><a class="btn btn-sm btn-secondary" href="#"><i class="fa fa-info-circle"></i> Details</a> </td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<!-- ROW-2 CLOSED -->

@endsection('content')

@section('scripts')

		<!-- CHARTJS JS -->
		<script src="{{ asset('assets/plugins/chart/Chart.bundle.js')}}"></script>
		<script src="{{ asset('assets/plugins/chart/utils.js')}}"></script>

        <!-- INTERNAL SELECT2 JS -->
        <script src="{{ asset('assets/plugins/select2/select2.full.min.js') }}"></script>
		<script src="{{ asset('assets/js/select2.js') }}"></script>

@endsection
