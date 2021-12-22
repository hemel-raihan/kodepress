<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
    @include('frontend_theme.corporate.front_layout.vertical.styles')

	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- Document Title
	============================================= -->
	<title>Home - </title>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">


        <!-- Header
		============================================= -->
        <header id="header" class="full-header" data-sticky-logo-height="74" data-menu-padding="32">

            @php
            $menus = \App\Models\Frontmenu\Frontmenu::where([['type','=','main-menu'],['status','=',true]])->get();
            foreach($menus as $menu)
            {
                $menuitems = $menu->menuItems()->get();
            }
            @endphp
            @isset($menuitems)
            @include('frontend_theme.corporate.front_layout.vertical.header',['menuitems'=>$menuitems])
            @else
            @include('frontend_theme.corporate.front_layout.vertical.header')
            @endisset

			<div class="header-wrap-clone"></div>

		</header>

        {{-- ........header end........ --}}

        <!-- Slider start
		============================================= -->

        @include('frontend_theme.corporate.front_layout.vertical.slider')

        <!-- Slider end
		============================================= -->



		<!-- Content
		============================================= -->
		<section id="content">
			<div class="content-wrap">

                @yield('content')

			</div>
		</section><!-- #content end -->

		<!-- Footer
		============================================= -->

        @include('frontend_theme.corporate.front_layout.vertical.footer')

		<!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

    @include('frontend_theme.corporate.front_layout.vertical.scripts')


</body>
</html>
