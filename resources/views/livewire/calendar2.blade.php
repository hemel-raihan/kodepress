@extends('layouts.app')
@section('styles')

<!-- FULL CALENDAR CSS -->
<link href='{{ asset('assets/plugins/fullcalendar/fullcalendar.css') }}' rel='stylesheet'/>

@endsection

@section('content')

						<!-- PAGE-HEADER -->
						<div class="page-header">
							<div>
								<h1 class="page-title">Full Calendar</h1>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Components</a></li>
									<li class="breadcrumb-item active" aria-current="page">Full Calender</li>
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
						<div class="row">
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Calender With different Color Events</h3>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-md-12 col-xl-3">
												<div id="external-events">
													<h4>Draggable Events</h4>
													<div class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event bg-primary">
														<div class="fc-event-main">My Event 1</div>
													</div>
													<div class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event bg-teal" data-class="bg-teal">
														<div class="fc-event-main">My Event 2</div>
													</div>
													<div class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event bg-warning" data-class="bg-warning">
														<div class="fc-event-main">My Event 3</div>
													</div>
													<div class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event bg-info" data-class=" bg-info">
														<div class="fc-event-main">My Event 4</div>
													</div>
													<div class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event bg-danger" data-class="bg-danger">
														<div class="fc-event-main">My Event 5</div>
													</div>
												</div>
											</div>
											<div class="col-md-12 col-xl-9">
												<div id='calendar2'></div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">List Calendar</h3>
									</div>
									<div class="card-body">
										<div id='calendar'></div>
									</div>
								</div>
							</div>
						</div>
						<!-- ROW CLOSED -->

@endsection('content')

@section('scripts')

		<!-- FULL CALENDAR JS -->
		<script src='{{ asset('assets/plugins/fullcalendar/moment.min.js') }}'></script>
		<script src='{{ asset('assets/plugins/fullcalendar/fullcalendar.min.js') }}'></script>
		<script src="{{ asset('assets/js/fullcalendar.js') }}"></script>

@endsection
