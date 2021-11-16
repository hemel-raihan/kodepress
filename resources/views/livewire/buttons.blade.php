@extends('layouts.app')

@section('styles')

@endsection

@section('content')

						<!-- PAGE-HEADER -->
						<div class="page-header">
							<div>
								<h1 class="page-title">Buttons</h1>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Elements</a></li>
									<li class="breadcrumb-item active" aria-current="page">Buttons</li>
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
						<div class="row ">
							<div class="col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Default Button</h3>
									</div>
									<div class="card-body">
										<div class="text-wrap">
											<p>Use any of the available button classes to quickly create a styled button.</p>
											<div class="example">
												<div class="btn-list">
													<a href="#" class="btn btn-default">Default</a>
													<a href="#" class="btn btn-primary">Primary</a>
													<a href="#" class="btn btn-secondary">Secondary</a>
													<a href="#" class="btn btn-success">Success</a>
													<a href="#" class="btn btn-info">Info</a>
													<a href="#" class="btn btn-warning">Warning</a>
													<a href="#" class="btn btn-danger">Danger</a>
													<a href="#" class="btn btn-link">Link</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div><!-- COL END -->
							<div class="col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">light buttons</h3>
									</div>
									<div class="card-body">
										<div class="text-wrap">
											<p>Make buttons  the light to any <code class="highlighter-rouge">.btn</code> element. <code class="highlighter-rouge">&lt;a&gt;</code>s don’t support the light attribute, so you must add the <code class="highlighter-rouge">.light</code> class to make it visually appear light.</p>
											<div class="example">
												<div class="btn-list">
													<a href="#" class="btn btn-default-light">Default</a>
													<a href="#" class="btn btn-primary-light ">Primary</a>
													<a href="#" class="btn btn-secondary-light ">Secondary</a>
													<a href="#" class="btn btn-success-light ">Success</a>
													<a href="#" class="btn btn-info-light ">Info</a>
													<a href="#" class="btn btn-warning-light ">Warning</a>
													<a href="#" class="btn btn-danger-light ">Danger</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div><!-- COL END -->
							<div class="col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Disabled buttons</h3>
									</div>
									<div class="card-body">
										<div class="text-wrap">
											<p>Make buttons  the disabled to any <code class="highlighter-rouge">.btn</code> element. <code class="highlighter-rouge">&lt;a&gt;</code>s don’t support the disabled attribute, so you must add the <code class="highlighter-rouge">.disabled</code> class to make it visually appear disabled.</p>
											<div class="example">
												<div class="btn-list">
													<a href="#" class="btn btn-primary disabled">Primary</a>
													<a href="#" class="btn btn-secondary disabled">Secondary</a>
													<a href="#" class="btn btn-success disabled">Success</a>
													<a href="#" class="btn btn-info disabled">Info</a>
													<a href="#" class="btn btn-warning disabled">Warning</a>
													<a href="#" class="btn btn-danger disabled">Danger</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div><!-- COL END -->
						</div>
						<!-- ROW-1 CLOSED -->

						<!-- ROW-2 OPEN -->
						<div class="row ">
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Color variations</h3>
									</div>
									<div class="card-body">
										<div class="text-wrap">
											<p>The classic button, in different colors.</p>
											<div class="example">
												<div class="btn-list">
													<a href="#" class="btn btn-blue">Blue</a>
													<a href="#" class="btn btn-azure">Azure</a>
													<a href="#" class="btn btn-indigo">Indigo</a>
													<a href="#" class="btn btn-purple">Purple</a>
													<a href="#" class="btn btn-pink">Pink</a>
													<a href="#" class="btn btn-red">Red</a>
													<a href="#" class="btn btn-orange">Orange</a>
													<a href="#" class="btn btn-yellow">Yellow</a>
													<a href="#" class="btn btn-lime">Lime</a>
													<a href="#" class="btn btn-green">Green</a>
													<a href="#" class="btn btn-teal">Teal</a>
													<a href="#" class="btn btn-cyan">Cyan</a>
													<a href="#" class="btn btn-gray">Gray</a>
													<a href="#" class="btn btn-gray-dark">Dark gray</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div><!-- COL END -->
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Border buttons</h3>
									</div>
									<div class="card-body">
										<div class="text-wrap">
											<p>  The default modifier classes with the <code class="highlighter-rouge">.btn-outline-*</code> </p>
											<div class="example">
												<div class="btn-list">
													<a href="#" class="btn btn-outline-default">Primary</a>
													<a href="#" class="btn btn-outline-primary">Primary</a>
													<a href="#" class="btn btn-outline-secondary">Secondary</a>
													<a href="#" class="btn btn-outline-success">Success</a>
													<a href="#" class="btn btn-outline-info">Info</a>
													<a href="#" class="btn btn-outline-warning">Warning</a>
													<a href="#" class="btn btn-outline-danger">Danger</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div><!-- COL END -->
						</div>
						<!-- ROW-2 CLOSED -->

						<!-- ROW-3 OPEN -->
						<div class="row">
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Radius buttons</h3>
									</div>
									<div class="card-body">
										<div class="text-wrap">
											<p>Add <code class="highlighter-rouge">.btn-radius</code> to button to remove border-radius.</p>
											<div class="example">
												<div class="btn-list">
													<a href="#" class="btn btn-radius btn-default">Default</a>
													<a href="#" class="btn btn-radius btn-primary">Primary</a>
													<a href="#" class="btn btn-radius btn-secondary">Secondary</a>
													<a href="#" class="btn btn-radius btn-success">Success</a>
													<a href="#" class="btn btn-radius btn-info">Info</a>
													<a href="#" class="btn btn-radius btn-warning">Warning</a>
													<a href="#" class="btn btn-radius btn-danger">Danger</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div><!-- COL END -->
							<div class="col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Radius light buttons</h3>
									</div>
									<div class="card-body">
										<div class="text-wrap">
											<p>Add <code class="highlighter-rouge">.btn-radius</code> to button to remove border-radius.</p>
											<div class="example">
												<div class="btn-list">
													<a href="#" class="btn btn-radius btn-default-light">Default</a>
													<a href="#" class="btn btn-radius btn-primary-light ">Primary</a>
													<a href="#" class="btn btn-radius btn-secondary-light ">Secondary</a>
													<a href="#" class="btn btn-radius btn-success-light ">Success</a>
													<a href="#" class="btn btn-radius btn-info-light ">Info</a>
													<a href="#" class="btn btn-radius btn-warning-light ">Warning</a>
													<a href="#" class="btn btn-radius btn-danger-light ">Danger</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div><!-- COL END -->
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Rounded buttons</h3>
									</div>
									<div class="card-body">
										<div class="text-wrap">
											<p>Add <code class="highlighter-rouge">.btn-pill</code> class to any button  more rounded.</p>
											<div class="example">
												<div class="btn-list">
													<a href="#" class="btn btn-pill btn-default">Default</a>
													<a href="#" class="btn btn-pill btn-primary">Primary</a>
													<a href="#" class="btn btn-pill btn-secondary">Secondary</a>
													<a href="#" class="btn btn-pill btn-success">Success</a>
													<a href="#" class="btn btn-pill btn-info">Info</a>
													<a href="#" class="btn btn-pill btn-warning">Warning</a>
													<a href="#" class="btn btn-pill btn-danger">Danger</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div><!-- COL END -->
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Rounded buttons</h3>
									</div>
									<div class="card-body">
										<div class="text-wrap">
											<p>Add <code class="highlighter-rouge">.btn-pill</code> class to any button  more rounded.</p>
											<div class="example">
												<div class="btn-list">
													<a href="#" class="btn btn-pill btn-default-light">Default</a>
													<a href="#" class="btn btn-pill btn-primary-light">Primary</a>
													<a href="#" class="btn btn-pill btn-secondary-light">Secondary</a>
													<a href="#" class="btn btn-pill btn-success-light">Success</a>
													<a href="#" class="btn btn-pill btn-info-light">Info</a>
													<a href="#" class="btn btn-pill btn-warning-light">Warning</a>
													<a href="#" class="btn btn-pill btn-danger-light">Danger</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div><!-- COL END -->
						</div>
						<!-- ROW-3 CLOSED -->

						<!-- ROW-4 OPEN -->
						<div class="row">
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Button with icon</h3>
									</div>
									<div class="card-body">
										<div class="text-wrap">
											<p>Basic buttons are traditional buttons with borders color opitons.</p>
											<div class="example">
												<div class="btn-list">
													<button type="button" class="btn btn-dark"><i class="fe fe-upload me-2"></i>Upload</button>
													<button type="button" class="btn btn-warning"><i class="fe fe-heart me-2"></i>I like</button>
													<button type="button" class="btn btn-success"><i class="fe fe-check me-2"></i>I agree</button>
													<button type="button" class="btn btn-primary"><i class="fe fe-plus me-2"></i>More</button>
													<button type="button" class="btn btn-danger"><i class="fe fe-link me-2"></i>Link</button>
													<button type="button" class="btn btn-info"><i class="fe fe-message-circle me-2"></i>Comment</button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div><!-- COL END -->
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Button with loading animation</h3>
									</div>
									<div class="card-body">
										<div class="text-wrap">
											<p>Basic buttons are traditional buttons with borders color opitons.</p>
											<div class="example">
												<div class="btn-list btn-animation">
													<button type="button" class="btn btn-warning btn-loaders  ms-2"><span class="loading">loading</span></button>
													<button type="button" class="btn btn-success btn-loaders  ms-2"><span class="loading">loading</span></button>
													<button type="button" class="btn btn-primary btn-loaders  ms-2"><span class="loading">loading</span></button>
													<button type="button" class="btn btn-danger btn-loaders  ms-2"><span class="loading">loading</span></button>
													<button type="button" class="btn btn-info btn-loaders  ms-2"><span class="loading">loading</span></button>
													<button type="button" class="btn btn-dark btn-loaders  ms-2"><span class="loading">loading</span></button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div><!-- COL END -->
						</div>
						<!-- ROW-4 CLOSED -->

						<!-- ROW-5 OPEN -->
						<div  class="row">
							<div class="col-md-12 ">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Button size</h3>
									</div>
									<div class="card-body">
										<div class="text-wrap">
											<p>Add <code class="highlighter-rouge">.btn-lg</code> or <code class="highlighter-rouge">.btn-sm</code> or <code class="highlighter-rouge">.d-grid</code> for additional sizes.</p>
											<div class="example">
												<div class="btn-list">
													<div class="row">
														<div class="col-md-4 mb-2">
															<button type="button" class="btn btn-warning btn-sm mb-1">Small button</button>
														</div>
														<div class="col-md-4 mb-2">
															<button type="button" class="btn btn-info mb-1">Medium button</button>
														</div>
														<div class="col-md-4 mb-2">
															<button type="button" class="btn btn-success btn-lg mb-1">Large button</button>
														</div>
													</div>
													<button type="button" class="btn btn-primary d-grid">Block level button</button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div><!-- COL END -->
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Social buttons</h3>
									</div>
									<div class="card-body">
										<div class="text-wrap">
											<div class="example">
												<div class="btn-list">
													<button type="button" class="btn btn-facebook"><i class="fa fa-facebook me-2"></i>Facebook</button>
													<button type="button" class="btn btn-twitter"><i class="fa fa-twitter me-2"></i>Twitter</button>
													<button type="button" class="btn btn-google"><i class="fa fa-google me-2"></i>Google</button>
													<button type="button" class="btn btn-youtube"><i class="fa fa-youtube me-2"></i>Youtube</button>
													<button type="button" class="btn btn-vimeo"><i class="fa fa-vimeo me-2"></i>Vimeo</button>
													<button type="button" class="btn btn-dribbble"><i class="fa fa-dribbble me-2"></i>Dribble</button>
													<button type="button" class="btn btn-github"><i class="fa fa-github me-2"></i>Github</button>
													<button type="button" class="btn btn-instagram"><i class="fa fa-instagram me-2"></i>Instagram</button>
													<button type="button" class="btn btn-pinterest"><i class="fa fa-pinterest me-2"></i>Pinterest</button>
													<button type="button" class="btn btn-vk"><i class="fa fa-vk me-2"></i>VKontakte</button>
													<button type="button" class="btn btn-rss"><i class="fa fa-rss me-2"></i>RSS</button>
													<button type="button" class="btn btn-flickr"><i class="fa fa-flickr me-2"></i>Flickr</button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div><!-- COL END -->
						</div>
						<!-- ROW-5 CLOSED -->

						<!-- ROW-6 OPEN -->
						<div  class="row">
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Social buttons</h3>
									</div>
									<div class="card-body">
										<div class="text-wrap">
											<p>You can use only icons.</p>
											<div class="example">
												<div class="btn-list">
													<button type="button" class="btn btn-icon btn-facebook"><i class="fa fa-facebook"></i></button>
													<button type="button" class="btn btn-icon btn-twitter"><i class="fa fa-twitter"></i></button>
													<button type="button" class="btn btn-icon btn-google"><i class="fa fa-google"></i></button>
													<button type="button" class="btn btn-icon btn-youtube"><i class="fa fa-youtube"></i></button>
													<button type="button" class="btn btn-icon btn-vimeo"><i class="fa fa-vimeo"></i></button>
													<button type="button" class="btn btn-icon btn-dribbble"><i class="fa fa-dribbble"></i></button>
													<button type="button" class="btn btn-icon btn-github"><i class="fa fa-github"></i></button>
													<button type="button" class="btn btn-icon btn-instagram"><i class="fa fa-instagram"></i></button>
													<button type="button" class="btn btn-icon btn-pinterest"><i class="fa fa-pinterest"></i></button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div><!-- COL END -->
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Icon buttons</h3>
									</div>
									<div class="card-body">
										<div class="text-wrap">
											<p>Icon only button. Add <code class="highlighter-rouge">.btn-icon</code> class to remove unnecessary  button.</p>
											<div class="example">
												<div class="btn-list">
													<button type="button" class="btn btn-icon  btn-primary"><i class="fe fe-activity"></i></button>
													<button type="button" class="btn btn-icon  btn-github"><i class="fe fe-github"></i></button>
													<button type="button" class="btn btn-icon  btn-success"><i class="fe fe-bell"></i></button>
													<button type="button" class="btn btn-icon  btn-warning"><i class="fe fe-star"></i></button>
													<button type="button" class="btn btn-icon  btn-danger"><i class="fe fe-trash"></i></button>
													<button type="button" class="btn btn-icon  btn-purple"><i class="fe fe-mail"></i></button>
													<button type="button" class="btn btn-icon  btn-secondary"><i class="fe fe-git-merge"></i></button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div><!-- COL END -->
						</div>
						<!-- ROW-6 CLOSED -->

						<!-- ROW-7 OPEN -->
						<div class="row ">
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Loading button</h3>
									</div>
									<div class="card-body">
										<div class="text-wrap">
											<p>Add <code class="highlighter-rouge">.btn-loading</code> to use a loading state on a button. The width of the button depends on the length of the text inside Since the loading spinner is implemented using the element.</p>
											<div class="example">
												<div class="btn-list">
													<button type="button" class="btn btn-success btn-loading btn-icon"><i class="fe fe-check"></i></button>
													<button type="button" class="btn btn-warning btn-loading btn-sm">Button text</button><br>
													<button type="button" class="btn btn-danger btn-loading btn-lg">Button text</button>
													<button type="button" class="btn btn-info btn-loading d-grid">Button text</button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div><!-- COL END -->
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Button dropdown</h3>
									</div>
									<div class="card-body">
										<div class="text-wrap">
											<p>Wrap the dropdown’s toggle using different colors and icons implemented in different dropdowns  styles (your button or link) and the dropdown menu within <code class="highlighter-rouge">.dropdown</code>, or another element that declares <code class="highlighter-rouge">position: relative;</code>. Dropdowns can be triggered from <code class="highlighter-rouge">&lt;a&gt;</code> or <code class="highlighter-rouge">&lt;button&gt;</code> elements to better fit your potential needs.</p>
											<div class="example">
												<div class="btn-list">
													<div class="dropdown btn-group">
														<button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown">
															<i class="fe fe-calendar"></i>
														</button>
														<div class="dropdown-menu">
															<a class="dropdown-item" href="javascript:void(0)">Dropdown link</a>
															<a class="dropdown-item" href="javascript:void(0)">Dropdown link</a>
														</div>
													</div>
													<div class="dropdown btn-group">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown">
															<i class="fe fe-calendar me-2"></i>Show calendar
														</button>
														<div class="dropdown-menu">
															<a class="dropdown-item" href="javascript:void(0)">Dropdown link</a>
															<a class="dropdown-item" href="javascript:void(0)">Dropdown link</a>
														</div>
													</div>
													<div class="dropdown btn-group">
														<button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown">
															Show calendar
														</button>
														<div class="dropdown-menu">
															<a class="dropdown-item" href="javascript:void(0)">Dropdown link</a>
															<a class="dropdown-item" href="javascript:void(0)">Dropdown link</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div><!-- COL END -->
						</div>
						<!-- ROW-7 CLOSED -->

						<!-- ROW-8 OPEN -->
						<div class="row">
							<div class="col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">List of buttons</h3>
									</div>
									<div class="card-body">
										<div class="text-wrap">
											<p>You can now create a list of buttons with the <code class="highlighter-rouge">.btn-list</code> container.</p>
											<div class="example">
												<div class="btn-list">
													<a href="#" class="btn btn-primary">Save changes</a>
													<a href="#" class="btn btn-secondary">Save and continue</a>
													<a href="#" class="btn btn-danger">Cancel</a>
												</div>
											</div>
										</div>
										<div class="text-wrap mt-6">
											<p>Use the <code class="highlighter-rouge">.text-center</code>  modifiers to alter the alignment.</p>
											<div class="example">
												<div class="btn-list text-center">
													<a href="#" class="btn btn-primary">Save changes</a>
													<a href="#" class="btn btn-secondary">Save and continue</a>
													<a href="#" class="btn btn-danger">Cancel</a>
												</div>
											</div>
										</div>
										<div class="text-wrap mt-6">
											<p>Use the  <code class="highlighter-rouge">.text-end</code> modifiers to alter the alignment.</p>
											<div class="example">
												<div class="btn-list text-end">
													<a href="#" class="btn btn-primary">Save changes</a>
													<a href="#" class="btn btn-secondary">Save and continue</a>
													<a href="#" class="btn btn-danger">Cancel</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div><!-- COL END -->
						</div>
						<!-- ROW-8 CLOSED -->

@endsection('content')

@section('scripts')

		<!-- C3 CHART JS -->
		<script src="{{ asset('assets/plugins/charts-c3/d3.v5.min.js')}}"></script>
		<script src="{{ asset('assets/plugins/charts-c3/c3-chart.js')}}"></script>

@endsection