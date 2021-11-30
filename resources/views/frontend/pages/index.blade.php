<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7]>
<html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8]>
<html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en" xmlns="http://www.w3.org/1999/html">
    <!--<![endif]-->
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <!-- Online Polling -->
        <script src="{{ asset('frontend/js/npop.script.js')}}" defer></script>
        <!-- Comment Management Tools -->
        <script src="{{ asset('frontend/js/npc.script.js')}}" defer></script>
        <!-- userway accessibility start -->
        <!-- <script type="text/javascript">
      var _userway_config = {
      account: "xyS2BuGIbM"
      };
  </script>
  <script type="text/javascript" src="https://cdn.userway.org/widget.js"></script> -->
        <!-- userway accessibility end -->

        <title>মাধ্যমিক ও উচ্চশিক্ষা অধিদপ্তর</title>
        <!-- Mobile Specific Metas
    ================================================== -->
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta http-equiv="X-Frame-Options" content="deny" />
        <meta name="description" content="" />

        <!-- =============== tt canonical End =============================== -->

        <link type="text/css" rel="stylesheet" media="all" href="{{ asset('frontend/css/base.css') }}" />
        <link type="text/css" rel="stylesheet" media="all" href="{{ asset('frontend/css/skeleton.css') }}" />
        <link type="text/css" rel="stylesheet" media="all" href="{{ asset('frontend/css/style.css') }}" />
        <link type="text/css" rel="stylesheet" media="all" href="{{ asset('frontend/css/meganizr.css') }}" />
        <link type="text/css" rel="stylesheet" media="all" href="{{ asset('frontend/css/flaticon.css') }}" />
        <link type="text/css" rel="stylesheet" media="all" href="{{ asset('frontend/css/ministry/style.css') }}" />
        <!--<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.6.0/jquery.min.js"></script>-->
        <script type="text/javascript" src="{{ asset('frontend/js/jquery-1.11.1.min.js') }}"></script>

        <!-- include the jquery-accessibleMegaMenu plugin script -->
        <script src="{{ asset('frontend/js/jquery-accessibleMegaMenu.js') }}"></script>

        <script>
            //jq160 = jQuery.noConflict( true );
        </script>

        <link rel="stylesheet" href="{{ asset('frontend/js/responsiveslides.css')}}" />

        <link rel="stylesheet" href="{{ asset('frontend/css/ministry/responsive.css')}}" />
        <link rel="stylesheet" href="{{ asset('frontend/css/ministry/accessibility.css')}}" />
        <script src="{{ asset('frontend/js/responsiveslides.min.js') }}"></script>
        <script src="{{ asset('frontend/js/jquery.vticker.js') }}" type="text/javascript"></script>

        <script src="{{ asset('frontend/js/domain_selector.js') }}" type="text/javascript"></script>
        <script src="{{ asset('frontend/js/utils.js') }}" type="text/javascript"></script>
        <script type="text/javascript" src="{{ asset('frontend/js/yoxview-init.js') }}"></script>

        <!-- custom accessibility start -->
        <link rel="stylesheet" href="{{ asset('frontend/css/asb.css') }}" />
        <script src="{{ asset('frontend/js/asb.js') }}" type="text/javascript"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/js/all.min.js"></script>
        <!-- custom accessibility end -->
    </head>

    <body class="dshe-portal-gov-bd">
        <!-- ====== start jump to selections ======   -->
        <a class="skip-link" href="/accessibility.html" target="_blank">Accessibility Help</a>
        <a class="skip-link" href="#jmenu">Jump  Menu</a>
        <a class="skip-link" href="#contents">Jump to Content</a>
        <a class="skip-link" href="#search">Jump to Search</a>
        <a class="skip-link" href="#btnLang">Jump to Language</a>
        <!-- ====== End jump to selections ======   -->

        <div class="container">
            <script src="//bangladesh.gov.bd/nav/js/obd.main.js?v=1.0.1"></script>
            <script src="{{ asset('frontend/js/select2.js') }}"></script>
            <link rel="stylesheet" media="all" type="text/css" href="{{ asset('frontend/css/obd.main.css') }}" />

            <div class="sixteen columns" style="background-color: #683091; box-shadow: 0 1px 5px #999999; height: 40px; ">
                <div style="display: inline-block; float: left; width: 960px; border-bottom: 4px solid #8bc643;">
                    <div class="slide-panel-btns" style="width: 165px; float: left;">
                        <div class="slide-panel-button" style="display: block;">
                            <!-- <i class="flaticon-menu10" style="float: left"></i> -->
                            <a style="color: white; height: 100%; font-size:11px; margin-top: 7px;" href="http://www.bangladesh.gov.bd/" target="_blank">বাংলাদেশ জাতীয় তথ্য বাতায়ন</a>
                        </div>
                    </div>
                    <div id="div-lang" style="float: left; width: 795px; height: 32px;">
                        <div id="newNavigation"></div>
                        <div id="div-lang-sel" style="float: right;">
                            <div id="search_any" style="float: left;">
                                <form action="/site/search" style="margin-top: 5px; padding: 0; float: left;">
                                    <input style="width: 90px; border-radius: 4px; height: 18px;" id="search" name="key" value="" />
                                    <button class="search-btn" type="submit" style="margin: 0; padding: 1px 10px;">Search</button>
                                </form>
                            </div>

                            <div style="float: left; margin-left: 5px;">
                                <form id="lang_form" action="/" method="post">
                                    <input type="hidden" name="lang" id="lang" value="en" />
                                    <button type="submit" style="padding: 2px; margin-top: 5px;">English</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="sixteen columns">
                <div class="callbacks_container" style="box-shadow: 0 1px 5px #999999;">
                    <ul class="rslides" id="front-image-slider">
                        <li>
                            <img src="//www.dshe.gov.bd/sites/default/files/files/dshe.portal.gov.bd/top_banner/f62b55fa_42de_4349_8733_20ad9f3e51d4/pm_pic_banner (1).jpg" alt="" width="960" height="220" />
                        </li>
                        <li>
                            <img src="//www.dshe.gov.bd/sites/default/files/files/dshe.portal.gov.bd/top_banner/5cc51d8a_8567_4ef5_a4b7_3e2ed817dd7b/banner_dshe.jpg" alt="" width="960" height="220" />
                        </li>
                        <li>
                            <img src="//www.dshe.gov.bd/sites/default/files/files/dshe.portal.gov.bd/top_banner/96357215_8cd5_4a7f_850a_11af0c115f7d/banner-02a.jpg" alt="" width="960" height="220" />
                        </li>
                    </ul>
                    <style>
                        .rslides img {
                            height: 220px;
                        }
                        .cabinet-portal-gov-bd .meganizr > li > a {
                            font-size: 18px !important;
                        }
                    </style>
                    <script></script>
                </div>

                <div class="header-site-info" id="header-site-info">
                    <div>
                        <div id="logo">
                            <a title="Home" href="/">
                                <img alt="Home" src="/themes/responsive_npf/img/logo/logo.png" />
                            </a>
                        </div>

                        <div class="clearfix" id="site-name-wrapper">
                            <span id="site-name">
                                <a title="Home" href="/"> মাধ্যমিক ও উচ্চশিক্ষা অধিদপ্তর </a>
                            </span>
                            <span id="slogan"> </span>
                        </div>
                        <!-- /site-name-wrapper -->
                    </div>
                    <!-- /header-site-info-inner -->
                </div>
            </div>
            <script>
                /* Responsive Design*/
                $(document).ready(function () {
                    var wi = $(window).width();
                    if (wi < 980) {
                        $("#jmenu .show-menu").click(function () {
                            //$('.mzr-responsive').show();
                            $(".mzr-responsive").slideToggle(400, "linear", function () {});
                        });

                        $("#jmenu a.submenu").click(function () {
                            $("#jmenu a.submenu").siblings().addClass("sibling-toggle");
                            $(this)
                                .parent()
                                .find(".mzr-content")
                                .removeClass("sibling-toggle")
                                .addClass("slide-visible")
                                .slideToggle(400, "linear", function () {
                                    return false;
                                });
                            // return false;
                        });
                    }
                });
            </script>

            <div class="sixteen columns" id="jmenu">
                <div class="sixteen columns">
                    <a href="javascript:;" class="show-menu menu-head"> মেনু নির্বাচন করুন</a>
                    <div role="navigation" id="dawgdrops">
                        <ul class="meganizr mzr-slide mzr-responsive">
                            <!-- Build The Menu -->
                            <li class="col0"><a title="Home" href="/" style="background-image: url(/themes/responsive_npf/img/home_dark.png); margin-top: 5px;"></a></li>
                            <li class="col1 mzr-drop">
                                <a href="#" class="submenu">আমাদের সম্পর্কিত</a>
                                <div class="mzr-content drop-two-columns">
                                    <div class="one-col">
                                        <h6>মাধ্যমিক ও উচ্চ শিক্ষা অধিদপ্তর</h6>
                                        <ul class="mzr-links">
                                            <li><a href="/site/page/a2ccd7fe-05cd-49ef-9de5-7ef091cabf03/মাউশির-অবস্থান">মাউশির অবস্থান</a></li>
                                            <li><a href="/site/page/d0cf6f8c-a098-496b-8176-7562adbeda94/লক্ষ্য-ও-উদ্দেশ্য">লক্ষ্য ও উদ্দেশ্য</a></li>
                                            <li><a href="/site/page/b248fb28-7b6d-48b2-8695-fcc837e12125/ইতিহাস">ইতিহাস</a></li>
                                            <li><a href="/site/office_citizen_charter/3276fd6b-f5be-447e-abe0-1bb485ed6675/সিটিজেন-চার্টার">সিটিজেন চার্টার</a></li>
                                            <li><a href="/site/organogram/fb3953c2-0d00-49a1-ae82-9b1b20720f8d/অর্গানোগ্রাম">অর্গানোগ্রাম</a></li>
                                            <li><a href="http://dshe.gov.bd/site/view/officer_list_category/কর্মকর্তাদের-তালিকা">কর্মকর্তাদের তালিকা</a></li>
                                        </ul>
                                    </div>
                                    <div class="one-col">
                                        <h6>অধীনস্ত অফিসসমূহ</h6>
                                        <ul class="mzr-links">
                                            <li><a href="http://dshe.portal.gov.bd/site/page/11f93084-684b-48b6-a12e-f8621b47a042/আঞ্চলিক-অফিস">আঞ্চলিক অফিস</a></li>
                                            <li><a href="http://dshe.portal.gov.bd/site/page/da63af3c-b637-436b-a6a8-0dd29e237350/জেলা-শিক্ষা-অফিস">জেলা শিক্ষা অফিস</a></li>
                                            <li><a href="/site/page/851ec0b6-b075-4684-a600-637172416351/উপজেলা-মাধ্যমিক-শিক্ষা-অফিস">উপজেলা মাধ্যমিক শিক্ষা অফিস</a></li>
                                            <li><a href="/site/page/19a2d0c5-6eac-4fa5-b95b-48e6eadebbc8/সরকারি-টিচার-ট্রেনিং-কলেজ">সরকারি টিচার ট্রেনিং কলেজ</a></li>
                                            <li><a href="/site/page/48526cfc-6bd4-44d9-b44d-c98163c67188/উচ্চ-মাধ্যমিক-শিক্ষক-প্রশিক্ষণ-ইন্সটিটিউট">উচ্চ মাধ্যমিক শিক্ষক প্রশিক্ষণ ইন্সটিটিউট</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="col2 mzr-drop">
                                <a href="#" class="submenu">উইং সমূহ</a>
                                <div class="mzr-content drop-four-columns">
                                    <div class="one-col">
                                        <h6>কলেজ ও প্রশাসন</h6>
                                        <ul class="mzr-links">
                                            <li><a href="/site/page/a1ca9e67-2f99-4e76-9c85-d087194e995f/সাধারন-প্রশাসন">সাধারন প্রশাসন</a></li>
                                            <li><a href="http://dshe.portal.gov.bd/site/page/756b919e-141e-4680-bcf2-c871c2065dfa/-সরকারী-কলেজ"> সরকারী কলেজ</a></li>
                                            <li><a href="http://dshe.portal.gov.bd/site/page/25f19c3a-6e7e-4f93-9e82-42b223c9cdcd/বেসরকারী-কলেজ">বেসরকারী কলেজ</a></li>
                                            <li><a href="http://dshe.portal.gov.bd/site/page/ef3502ce-7893-4fc1-959c-96a365a870d1/ইএমআইএস-সেল">ইএমআইএস সেল</a></li>
                                            <li><a href="nolink/এইচ-আর-এম-">এইচ আর এম </a></li>
                                        </ul>
                                    </div>
                                    <div class="one-col">
                                        <h6>মাধ্যমিক</h6>
                                        <ul class="mzr-links">
                                            <li><a href="http://dshe.portal.gov.bd/site/page/d051ec5b-f088-4e13-a293-bed0393480f3/মাধ্যমিক-(সরকারী-বিদ্যালয়)">মাধ্যমিক (সরকারী বিদ্যালয়)</a></li>
                                            <li><a href="http://dshe.portal.gov.bd/site/page/1a196a63-ff8a-4c43-8729-b0120bb0d0e7/মাধ্যমিক-(বেসরকারী-বিদ্যালয়)">মাধ্যমিক (বেসরকারী বিদ্যালয়)</a></li>
                                            <li><a href="nolink/বিশেষ-শিক্ষা">বিশেষ শিক্ষা</a></li>
                                            <li><a href="http://dshe.portal.gov.bd/site/page/681e46f0-1578-4e70-b675-18d2406cfc80/শারীরিক-শিক্ষা">শারীরিক শিক্ষা</a></li>
                                        </ul>
                                    </div>
                                    <div class="one-col">
                                        <h6>পরিকল্পনা ও উন্নয়ন</h6>
                                        <ul class="mzr-links">
                                            <li><a href="http://dshe.portal.gov.bd/site/page/97464b09-686e-4425-9a33-902db7fcbdc4/পরিকল্পনা-ও-উন্নয়ন">পরিকল্পনা ও উন্নয়ন</a></li>
                                            <li><a href="nolink/পি-পি-পি-সেল">পি পি পি সেল</a></li>
                                            <li><a href="nolink/এ-কিউ-এ-উ">এ কিউ এ উ</a></li>
                                        </ul>
                                    </div>
                                    <div class="one-col">
                                        <h6>প্রশিক্ষণ</h6>
                                        <ul class="mzr-links">
                                            <li><a href="http://dshe.portal.gov.bd/site/page/c7198698-37ec-408d-bca9-fdefadc01f6f/প্রশিক্ষণ-">প্রশিক্ষণ </a></li>
                                        </ul>
                                    </div>
                                    <div class="one-col">
                                        <h6>মনিটরিং এন্ড ইভালুয়েশান</h6>
                                        <ul class="mzr-links">
                                            <li><a href="http://dshe.portal.gov.bd/site/page/9eeb408d-a1e1-4f5a-8bac-bc2bfbcdeb0c/মনিটরিং-এন্ড-ইভালুয়েশান">মনিটরিং এন্ড ইভালুয়েশান</a></li>
                                        </ul>
                                    </div>
                                    <div class="one-col">
                                        <h6>ফিনান্স এন্ড প্রকিউরমেন্ট</h6>
                                        <ul class="mzr-links">
                                            <li><a href="http://dshe.portal.gov.bd/site/page/27d6e004-49ff-4142-bbb7-dfa1c9208764/ফিনান্স-এন্ড-প্রকিউরমেন্ট">ফিনান্স এন্ড প্রকিউরমেন্ট</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="col3 mzr-drop">
                                <a href="#" class="submenu">প্রকল্প সমূহ</a>
                                <div class="mzr-content drop-one-columns">
                                    <div class="one-col">
                                        <h6>প্রকল্পের নাম</h6>
                                        <ul class="mzr-links">
                                            <li><a href="http://sesip.gov.bd">সেসিপ</a></li>
                                            <li><a href="/site/page/1416a264-aa00-4ae3-8044-208ed8b667da/সরকারি-কলেজসমূহে-বিজ্ঞান-শিক্ষার-সুযোগ-সম্প্রসারণ-প্রকল্প">সরকারি কলেজসমূহে বিজ্ঞান শিক্ষার সুযোগ সম্প্রসারণ প্রকল্প</a></li>
                                            <li><a href="http://www.dshe.gov.bd/Help_line.pdf"> জেনারেশন ব্রেকথ্রু (দশ উনিশের মোড়)</a></li>
                                            <li>
                                                <a href="nolink/আইসিটি'র-মাধ্যমে-মাধ্যমিক-ও-উচ্চ-মাধ্যমিক-স্তরে-শিক্ষার-প্রচলন-(২য়-পর্যায়)-প্রকল্প।">আইসিটি'র মাধ্যমে মাধ্যমিক ও উচ্চ মাধ্যমিক স্তরে শিক্ষার প্রচলন (২য় পর্যায়) প্রকল্প।</a>
                                            </li>
                                            <li><a href="nolink/ফরেন-ল্যাংগুয়েজ-ট্রেনিং-সেন্টার">ফরেন ল্যাংগুয়েজ ট্রেনিং সেন্টার</a></li>
                                            <li><a href="nolink/অন্যান্য-প্রকল্প">অন্যান্য প্রকল্প</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="col4 mzr-drop">
                                <a href="#" class="submenu">ফরম সমূহ</a>
                                <div class="mzr-content drop-two-columns">
                                    <div class="one-col">
                                        <h6>ফরেমর নাম</h6>
                                        <ul class="mzr-links">
                                            <li><a href="http://old.dshe.gov.bd/fp_file/93f9da6fca7a038d9582102f56b4337e.pdf">রাজস্ব বাজেট সম্পৃক্ত ফরম</a></li>
                                            <li><a href="https://dshe.portal.gov.bd/sites/default/files/files/dshe.portal.gov.bd/files/ede2beda_6ab2_4f2e_9b12_a9af48e3f964/prl.pdf">অবসর উত্তর ছুটি (পি-আর-এল) মঞ্জুরির তথ্য ছক</a></li>
                                            <li><a href="/site/forms/adde81f4-f8be-492f-9f80-8f266ee2ba62/বিশেষ-ভারপ্রাপ্ত-কর্মকর্তাদের-বেতন,ই-এফ-টি-,ছুটির-ফর্ম-">বিশেষ ভারপ্রাপ্ত কর্মকর্তাদের বেতন,ই-এফ-টি ,ছুটির ফর্ম </a></li>
                                            <li><a href="/site/forms/b1fa66aa-cc5c-44f1-ad53-bdf8f2f9f3ba/পিডিএস(শিক্ষা-ক্যাডারের-জন্য)">পিডিএস(শিক্ষা ক্যাডারের জন্য)</a></li>
                                            <li><a href="/site/forms/31895adc-c3a9-494b-a511-694dbb6a1ca7/বাজেট">বাজেট</a></li>
                                            <li>
                                                <a href="http://dshe.portal.gov.bd/site/forms/41f86d79-ec9d-4bb3-81f2-736fc512d05b/শিক্ষা-ক্যাডার-কর্মকর্তাদের-সিলেকশন-গ্রেড-প্রদানের-তথ্য-ছক-(প্রভাষক)">
                                                    শিক্ষা ক্যাডার কর্মকর্তাদের সিলেকশন গ্রেড প্রদানের তথ্য ছক (প্রভাষক)
                                                </a>
                                            </li>
                                            <li>
                                                <a href="http://dshe.portal.gov.bd/site/forms/105f3f5b-3d92-4c75-92dc-c26e6e1f6efc/শিক্ষা-ক্যাডার-কর্মকর্তাদের-সিলেকশন-গ্রেড-প্রদানের-তথ্য-ছক-(সহকারী-অধ্যাপক)">
                                                    শিক্ষা ক্যাডার কর্মকর্তাদের সিলেকশন গ্রেড প্রদানের তথ্য ছক (সহকারী অধ্যাপক)
                                                </a>
                                            </li>
                                            <li><a href="http://dshe.portal.gov.bd/site/forms/0027c421-ab4b-4bb8-b626-0a5551da6087/অগ্রিম-ইনক্রিমেন্ট-ফরম">অগ্রিম ইনক্রিমেন্ট ফরম</a></li>
                                            <li><a href="http://dshe.portal.gov.bd/site/forms/0bb5bbb9-a618-4778-8fbe-0c2e5391c276/দক্ষতা-সীমা-অতিক্রমের-তথ্য-ছক">দক্ষতা সীমা অতিক্রমের তথ্য ছক</a></li>
                                            <li><a href="http://dshe.portal.gov.bd/site/forms/61f14d2f-c652-47c9-b705-cf25539bdd1f/বদলীর-আবেদন-(মাউশি)">বদলীর আবেদন (মাউশি)</a></li>
                                            <li><a href="http://dshe.portal.gov.bd/site/forms/c775f823-d4fd-4465-9de9-b5663128c44a/এমপিওভুক্তির-জন্য-আবেদন-(বেসরকারি-স্কুল)">এমপিওভুক্তির জন্য আবেদন (বেসরকারি স্কুল)</a></li>
                                            <li><a href="http://dshe.portal.gov.bd/site/forms/df53dd0e-2f87-49dd-b4c9-cd255138fe17/এমপিওভুক্তির-জন্য-আবেদন-(বেসরকারি-মাদ্রাসা)">এমপিওভুক্তির জন্য আবেদন (বেসরকারি মাদ্রাসা)</a></li>
                                            <li><a href="http://dshe.portal.gov.bd/site/forms/db9d8210-827e-424b-b191-8f1cd4142a0b/এমপিওভুক্তির-জন্য-আবেদন-(বেসরকারি-কলেজ)">এমপিওভুক্তির জন্য আবেদন (বেসরকারি কলেজ)</a></li>
                                            <li><a href="http://dshe.portal.gov.bd/site/forms/5d13c793-80ef-4f2d-8144-8fbf08dfcd1e/পাসপোর্ট-ফরম">পাসপোর্ট ফরম</a></li>
                                            <li><a href="http://dshe.portal.gov.bd/site/forms/90378bc5-7745-4fb0-89d8-efb8de16d8c2/বুনিয়াদী-ট্রেনিং">বুনিয়াদী ট্রেনিং</a></li>
                                            <li>
                                                <a href="http://dshe.portal.gov.bd/site/forms/f63342b6-4297-4368-a8db-a2febf113736/বেসরকারি-শিক্ষকগণের-প্রভাষক-হতে-সহকারী-অধ্যাপক-পদের-স্কেল-প্রাপ্তির-আবেদন(কলেজ)">
                                                    বেসরকারি শিক্ষকগণের প্রভাষক হতে সহকারী অধ্যাপক পদের স্কেল প্রাপ্তির আবেদন(কলেজ)
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="one-col">
                                        <h6></h6>
                                        <ul class="mzr-links">
                                            <li>
                                                <a href="http://dshe.portal.gov.bd/site/forms/594e7545-3bda-429c-a42d-51a452beea50/ব্যক্তিগত-বিদেশ-ভ্রমনের-অনুমতির-আবেদন-–-মন্ত্রী-ও-সচিব">
                                                    ব্যক্তিগত বিদেশ ভ্রমনের অনুমতির আবেদন – মন্ত্রী ও সচিব
                                                </a>
                                            </li>
                                            <li><a href="http://dshe.portal.gov.bd/site/forms/76c706c9-461f-43de-b868-fbd808b955de/বিদেশ-ভ্রমনের-ছাড়পত্রের-জন্য-আবেদন-(মাউশি)">বিদেশ ভ্রমনের ছাড়পত্রের জন্য আবেদন (মাউশি)</a></li>
                                            <li><a href="http://dshe.portal.gov.bd/site/forms/df534330-d68e-4a5a-a364-03441a8903b6/কর্মকর্তার-বিগত-৫-বছরের-বিদেশ-ভ্রমনের-তথ্য-ছক">কর্মকর্তার বিগত ৫ বছরের বিদেশ ভ্রমনের তথ্য ছক</a></li>
                                            <li><a href="http://dshe.portal.gov.bd/site/forms/f0caaf6d-2622-4a19-b3b2-377fd1ad2af9/বিভাগীয়-পরীক্ষায়-অংশগ্রহণের-জন্য-অনুমতিপত্র">বিভাগীয় পরীক্ষায় অংশগ্রহণের জন্য অনুমতিপত্র</a></li>
                                            <li>
                                                <a href="http://dshe.portal.gov.bd/site/forms/18fe1430-ccdb-4784-b223-0175d2416e1b/শিক্ষা-ক্যাডারের-কর্মকর্তাদের-(প্রভাষক)-চাকুরি-স্থায়ীকরণের-তথ্য-ছক">
                                                    শিক্ষা ক্যাডারের কর্মকর্তাদের (প্রভাষক) চাকুরি স্থায়ীকরণের তথ্য ছক
                                                </a>
                                            </li>
                                            <li><a href="http://dshe.portal.gov.bd/site/forms/46301831-f6ed-411d-ab93-415346c97408/জৈষ্ঠতা-নির্ধারণের-তুলনামূলক-তথ্য-ছক">জৈষ্ঠতা নির্ধারণের তুলনামূলক তথ্য ছক</a></li>
                                            <li>
                                                <a href="http://dshe.portal.gov.bd/site/forms/770a2487-bcae-4edf-a33b-bd23870e4a6c/বেসরকারি-কলেজ-শিক্ষক/কর্মচারীদের-সিলেকশন-গ্রেড/-টাইম-স্কেল/স্কেল-সংশোধনীর-আবেদন">
                                                    বেসরকারি কলেজ শিক্ষক/কর্মচারীদের সিলেকশন গ্রেড/ টাইম স্কেল/স্কেল সংশোধনীর আবেদন
                                                </a>
                                            </li>
                                            <li><a href="http://dshe.portal.gov.bd/site/forms/0075f1d4-495f-47da-8762-f2a7066ebb83/অন্যান্য-ছুটি">অন্যান্য ছুটি</a></li>
                                            <li><a href="http://dshe.portal.gov.bd/site/forms/6043622a-90c8-45af-9c3f-bd42017a8eb1/অন্যান্য-ফরম-(-কলেজ)">অন্যান্য ফরম ( কলেজ)</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="col5 mzr-drop">
                                <a href="#" class="submenu">প্রকাশনা</a>
                                <div class="mzr-content drop-one-columns">
                                    <div class="one-col">
                                        <h6></h6>
                                        <ul class="mzr-links">
                                            <li><a href="/site/page/507477ec-6236-43f6-97e9-15880bea6703/প্রকাশনা">প্রকাশনা</a></li>
                                            <li><a href="/site/page/d176d9ff-5872-49e7-a105-521b3ecfdf63/রিপোর্ট">রিপোর্ট</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="col6 mzr-drop">
                                <a href="#" class="submenu">গ্যালারি</a>
                                <div class="mzr-content drop-two-columns">
                                    <div class="one-col">
                                        <h6>ফটোগ্যালারি</h6>
                                        <ul class="mzr-links">
                                            <li><a href="/site/view/photogallery/সকল-ছবি-সমূহ">সকল ছবি সমূহ</a></li>
                                        </ul>
                                    </div>
                                    <div class="one-col">
                                        <h6>ভিডিও ক্লিপ</h6>
                                        <ul class="mzr-links">
                                            <li><a href="/site/page/0e582e0e-daf2-4060-bdcd-6545983b8a27/সেসিপ">সেসিপ</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="col7 mzr-drop">
                                <a href="#" class="submenu">ই-লার্নিং রিসোর্স</a>
                                <div class="mzr-content drop-one-columns">
                                    <div class="one-col">
                                        <h6></h6>
                                        <ul class="mzr-links">
                                            <li><a href="http://203.112.195.166:6081/">RELM Content</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <style>
                .right-side-bar .block ul li a {
                    font-size: 14px;
                }

                #notice-board ul a {
                    font-size: 14px;
                }

                @media screen and (min-width: 1400px) {
                    .mainwrapper .box {
                        margin-right: 13px;
                    }
                }
            </style>

            <div id="contents" class="sixteen columns">
                <div class="twelve columns" id="left-content">
                    <div class="row mainwrapper">
                        <div class="pm">
                            <!-- <iframe frameborder="0" height="380" src="https://www.youtube.com/embed/bxWRglJFQNc" width="100%"></iframe> -->
                            {{-- <a href="https://www.youtube.com/watch?v=bxWRglJFQNc" target="_blank">
		<img src="/National-Portal-Card-PM.jpeg">
	</a>  --}}
                            <a href="https://www.youtube.com/watch?v=v1R-CB3e-pw" target="_blank">
                                <img src="{{ asset('frontend/images/National-Portal-Card-PM.jpeg') }}" />
                            </a>
                        </div>
                        <div class="scroll">
                            <h3>
                                <marquee direction="left" scrollamount="4" onmouseover="this.stop()" onmouseout="this.start()">
                                    নো মাস্ক নো সার্ভিস। করোনাভাইরাসের বিস্তার রোধে এখনই ডাউনলোড করুন Corona Tracer BD অ্যাপ। ডাউনলোড করতে ক্লিক করুন
                                    <a href="https://bit.ly/coronatracerbd" target="_blank" style="color: blue;">https://bit.ly/coronatracerbd</a>। নিজে সুরক্ষিত থাকুন অন্যকেও নিরাপদ রাখুন। দেশের প্রথম ক্রাউডফান্ডিং প্ল্যাটফর্ম 'একদেশ'- এর
                                    মাধ্যমে আর্থিক অনুদান পৌঁছে দিন নির্বাচিত সরকারি-বেসরকারি প্রতিষ্ঠানসমূহে। ভিজিট করুন <a href="//ekdesh.ekpay.gov.bd" target="_blank" style="color: blue;">ekdesh.ekpay.gov.bd</a> অথবা
                                    <a href="//play.google.com/store/apps/details?id=com.synesis.donationapp" target="_blank" style="color: blue;">“Ek Desh”</a> অ্যাপ ডাউনলোড করুন। করোনার লক্ষণ দেখা দিলে গোপন না করে ডাক্তারের পরামর্শের জন্য
                                    ফ্রি কল করুন ৩৩৩ ও ১৬২৬৩ নম্বরে। করোনাভাইরাস প্রতিরোধে নিয়ম মেনে মাস্ক ব্যবহার করুন। আতঙ্কিত না হয়ে বরং সচেতন থাকুন। ভিজিট করুন
                                    <a href="//corona.gov.bd" target="_blank" style="color: blue;">corona.gov.bd</a>
                                </marquee>
                            </h3>
                        </div>
                        <style>
                            .pm > a > img {
                                width: 100%;
                                height: 380px;
                            }
                            .scroll {
                                background: #e6e7e8;
                                padding: 5px 0px 0px 0px;
                            }

                            .scroll > h3 {
                                font-weight: bold;
                                font-size: 22px;
                                line-height: 22px;
                            }

                            marquee {
                                padding: 5px;
                            }

                            @media (max-width: 480px) {
                                iframe {
                                    height: 215px !important;
                                }
                                .scroll {
                                    margin: 0px 0px 40px 0px;
                                }
                                .pm > a > img {
                                    width: 100%;
                                    height: 215px;
                                }
                            }
                        </style>
                        <script></script>
                        <div class="row" id="notice-board">
                            <div class="notice-board-bg">
                                <h2>নোটিশ বোর্ড</h2>
                                <div id="notice-board-ticker">
                                    <ul>
                                        <li>
                                            <a href="/site/notices/3fc51534-4a20-48db-b707-7c381454e25f/NAAND-প্রকল্পের-অটিজম-ও-এনডিডি-বিষয়ক-মাস্টার-ট্রেইনার-প্রশিক্ষক-কোর্সে-অংশগ্রহণকারী-ব">
                                                NAAND প্রকল্পের অটিজম ও এনডিডি বিষয়ক মাস্টার ট্রেইনার প্রশিক্ষক কোর্সে অংশগ্রহণকারী ব...
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/site/notices/6e1483f6-2ea7-4e6b-a9ae-baaa98456ecd/বাংলাদেশ-সরকারি-কর্মকমিশন-কর্তৃক-অনুষ্ঠেয়-৪১-তম-বিসিএস-পরীক্ষা-২০১৯-এর-মাধ্যমে-বিভিন্">
                                                বাংলাদেশ সরকারি কর্মকমিশন কর্তৃক অনুষ্ঠেয় ৪১ তম বিসিএস পরীক্ষা-২০১৯ এর মাধ্যমে বিভিন্...
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/site/notices/bc78cee9-b271-4cd7-ba8d-e5c4f9b953b3/সিনিয়র-শিক্ষক-পদ-হতে-উপজেলা-মাধ্যমিক-শিক্ষা-অফিসার-পদে-বদলী-ভিত্তিক-পদায়ন-সংক্রান্ত।">
                                                সিনিয়র শিক্ষক পদ হতে উপজেলা মাধ্যমিক শিক্ষা অফিসার পদে বদলী ভিত্তিক পদায়ন সংক্রান্ত।
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/site/notices/77eac496-da5f-4c7b-b898-b55dff983667/সরকারি-মাধ্যমিক-বিদ্যালয়ে-শিক্ষার্থী-ভর্তির-নীতিমালা-সংশোধিত--২০২০-এর-অনুচ্ছেদ-১৭-স">
                                                সরকারি মাধ্যমিক বিদ্যালয়ে শিক্ষার্থী ভর্তির নীতিমালা (সংশোধিত- ২০২০) এর অনুচ্ছেদ-১৭ স...
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/site/notices/c9143678-ea20-4de8-84e1-d8dd05e2703c/এসডিজি-সূচকের-জন্য-মন্ত্রণালয়-ও-অধীনস্ত-কার্যালয়সমূহে-কর্মরত-সকল-কর্মকর্তা-কর্মচারীর-">
                                                এসডিজি সূচকের জন্য মন্ত্রণালয় ও অধীনস্ত কার্যালয়সমূহে কর্মরত সকল কর্মকর্তা-কর্মচারীর ...
                                            </a>
                                        </li>
                                    </ul>
                                    <a class="btn right" href="/site/view/notices">সকল</a>
                                </div>
                            </div>
                        </div>
                        <style>
                            #notice-board-ticker ul li {
                                list-style: none;
                            }
                        </style>
                        <script></script>
                        <div style="background-color: #efefef; border: 1px solid #cccccc; margin-bottom: 20px; padding: 10px;" class="row" id="news">
                            <h5 style="float: left; margin: -3px 5px 0 0; font-weight: bold; font-size: 0.9em;">খবর:</h5>
                            <div id="news-ticker" style="overflow: hidden; position: relative; height: 0px;">
                                <ul style="font-size: 0.9em; position: absolute; margin: 0px; padding: 0px; width: 95%;">
                                    <li class="lineheight">
                                        <a href="/site/news/e350e6c8-d4b0-41f9-9e9e-10150787a619/অভিযোগ-প্রতিকার-ব্যবস্থার-লিঙ্কa-hrefhttp--wwwgrsgovbd--লিঙ্ক-a">অভিযোগ প্রতিকার ব্যবস্থার লিঙ্ক<a href="http://www.grs.gov.bd/"> লিঙ্ক</a></a>
                                        <i>(&#x09E8;&#x09E6;&#x09E8;&#x09E7;-&#x09E7;&#x09E6;-&#x09E9;&#x09E7;)</i>
                                    </li>
                                    <li class="lineheight">
                                        <a href="/site/news/7d0651c2-fc66-4a00-b65f-d95213923969/a-hrefhttps--youtube-HbYVxljUjrQশিক্ষা-প্রতিষ্ঠান-খোলার-পর-স্বাস্থ্যবিধি-অনুসরণে-বিশেষ-বার্তা--a">
                                            <a href="https://youtu.be/HbYVxljUjrQ">শিক্ষা প্রতিষ্ঠান খোলার পর স্বাস্থ্যবিধি অনুসরণে বিশেষ বার্তা </a>
                                        </a>
                                        <i>(&#x09E8;&#x09E6;&#x09E8;&#x09E7;-&#x09E6;&#x09EF;-&#x09E7;&#x09E6;)</i>
                                    </li>
                                    <li class="lineheight">
                                        <a href="/site/news/ec5e8dc2-7105-4931-be6b-60e03fd867ac/a-hrefhttps--tinyurlcom-dshe-school-reopenশিক্ষা-প্রতিষ্ঠান-প্রধানগণের-দৈনিক-ভিত্তিতে-গুগল-ডকস্-এর-মাধ্যমে-তথ্য-প্রেরণ-a">
                                            <a href="https://tinyurl.com/dshe-school-reopen">শিক্ষা প্রতিষ্ঠান প্রধানগণের দৈনিক ভিত্তিতে গুগল ডকস্ এর মাধ্যমে তথ্য প্রেরণ</a>
                                        </a>
                                        <i>(&#x09E8;&#x09E6;&#x09E8;&#x09E7;-&#x09E6;&#x09EF;-&#x09E6;&#x09EF;)</i>
                                    </li>
                                </ul>
                                <div style="float: right;">
                                    <a class="btn" href="/site/view/news">সকল</a>
                                </div>
                            </div>
                        </div>
                        <style>
                            .lineheight {
                                line-height: 22px;
                            }
                        </style>
                        <script></script>
                        <div class="column block">
                            <h5 class="bk-org title">
                                জরুরি হটলাইনসমূহ / সিটিজেন চার্টার / লিঙ্কস
                            </h5>

                            <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>

                            <p>
                                &nbsp;
                                <span style="font-size: 20px;">
                                    <a href="https://dshe.portal.gov.bd/sites/default/files/files/dshe.portal.gov.bd/office_citizen_charter/ae417ade_656a_4a86_87e2_3bec17da8b97/DSHE%20Citizen's%20Charter-27.09.2021.pdf">
                                        <span style="color: rgb(128, 0, 128);"><span style="background-color: #afeeee;">&nbsp; &nbsp;</span></span>
                                        <span style="background-color: rgb(175, 238, 238);"><span style="color: #800080;">সিটিজেন চার্টার&nbsp;</span></span>
                                    </a>
                                    <span style="color: #800080;"><span style="background-color: #ffffe0;">&nbsp;&nbsp;&nbsp; &nbsp;</span></span>
                                    <a href="http://emis.gov.bd">
                                        <span style="color: #b22222;"> <span style="background-color: #e6e6fa;">বদলির আবেদন</span></span>
                                    </a>
                                    &nbsp;<span style="color: #800080;"><span style="background-color: #ffffe0;">&nbsp; &nbsp; &nbsp;&nbsp;</span></span>
                                    <span style="color: #b22222;"><span style="background-color: #afeeee;">&nbsp; </span></span>
                                    <a href="https://dshe.portal.gov.bd/site/page/8c09e774-ac65-47df-862e-27a78b0c112d">
                                        <span style="color: #b22222;"><span style="background-color: #afeeee;">এমপিও শীট/ ভাউচার</span></span>
                                    </a>
                                    <span style="color: #b22222;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                    <strong>
                                        <a href="https://dshe.portal.gov.bd/site/page/99553b76-0268-467c-824f-28d1c16c55e1">
                                            <span style="color: #b22222;"><span style="background-color: #ffd700;"> নিয়োগ সংক্রান্ত</span></span>
                                        </a>
                                    </strong>
                                </span>
                            </p>

                            <p>&nbsp; &nbsp; &nbsp;&nbsp;</p>

                            <p>
                                &nbsp;
                                <a href="https://dshe.portal.gov.bd/site/page/5ac79d4b-c552-47e6-ae01-824b12021eb9">
                                    <span style="font-size: 20px;"><span style="background-color: #faebd7;">EMIS সফটওয়্যার সংক্রান্ত</span></span>
                                </a>
                            </p>

                            <p>&nbsp;</p>
                            <p></p>
                        </div>
                        <style>
                            #right-content .block {
                                display: block !important;
                            }
                        </style>
                        <script></script>
                        <div class="column block">
                            <h5 class="bk-org title">
                                আদেশ/প্রজ্ঞাপন/নীতিমালা/পরিপত্র/আইন/বিধিমালা
                            </h5>

                            <table border="" cellpadding="0" cellspacing="0">
                                <tbody>
                                    <tr>
                                        <td colspan="3" style="width: 351px;">
                                            <p>
                                                <span style="color: #008080;">
                                                    <span style="font-size: 14px;"><strong>আদেশ</strong><strong>/</strong><strong>প্রজ্ঞাপন</strong></span>
                                                </span>
                                            </p>
                                        </td>
                                        <td rowspan="4" style="width: 15px;">&nbsp;</td>
                                        <td colspan="3" style="width: 344px;">
                                            <p>
                                                <span style="color: #008080;">
                                                    <span style="font-size: 14px;"><strong>নীতিমালা</strong><strong>/</strong><strong>পরিপত্র/আইন/বিধি</strong></span>
                                                </span>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width: 134px;">
                                            <p>
                                                <span style="font-size: 14px;">
                                                    ►&nbsp;<a href="http://www.dshe.gov.bd/site/view/office_order/%E0%A6%85%E0%A6%AB%E0%A6%BF%E0%A6%B8-%E0%A6%86%E0%A6%A6%E0%A7%87%E0%A6%B6">সাধারণ প্রশাসন</a>
                                                </span>
                                            </p>
                                        </td>
                                        <td style="width: 106px;">
                                            <p>
                                                <span style="font-size: 14px;">►&nbsp;<a href="https://dshe.portal.gov.bd/site/view/moedu_office_order/মাধ্যমিক">মাধ্যমিক</a></span>
                                            </p>
                                        </td>
                                        <td style="width: 114px;">
                                            <p>
                                                <span style="font-size: 14px;">►&nbsp;<a href="https://dshe.portal.gov.bd/site/view/moedu_office_order/কলেজ">কলেজ</a></span>
                                            </p>
                                        </td>
                                        <td style="width: 140px;">
                                            <p>
                                                <span style="font-size: 14px;">►&nbsp;<a href="http://shed.portal.gov.bd/site/view/moedu_policy/%E0%A6%AE%E0%A6%BE%E0%A6%A7%E0%A7%8D%E0%A6%AF%E0%A6%AE%E0%A6%BF%E0%A6%95">মাধ্যমিক</a></span>
                                            </p>
                                        </td>
                                        <td style="width: 96px;">
                                            <p>
                                                <span style="font-size: 14px;">►&nbsp;<a href="http://shed.portal.gov.bd/site/view/moedu_policy/%E0%A6%95%E0%A6%B2%E0%A7%87%E0%A6%9C">কলেজ</a></span>
                                            </p>
                                        </td>
                                        <td style="width: 108px;">
                                            <p>
                                                <span style="font-size: 14px;">► <a href="http://shed.portal.gov.bd/site/view/moedu_policy/%E0%A6%85%E0%A6%A8%E0%A7%8D%E0%A6%AF%E0%A6%BE%E0%A6%A8%E0%A7%8D%E0%A6%AF">বিবিধ</a></span>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width: 134px;">
                                            <p>
                                                <span style="font-size: 14px;">► <a href="http://www.dshe.gov.bd/site/view/training">প্রশিক্ষণ</a></span>
                                            </p>
                                        </td>
                                        <td style="width: 106px;">
                                            <p>
                                                <span style="font-size: 14px;">► <a href="/site/view/moedu_office_order/পরিবীক্ষণ ও মূল্যায়ন">মনিটরিং এন্ড ইভালুয়েশান</a></span>
                                            </p>
                                        </td>
                                        <td style="width: 114px;">
                                            <p>
                                                <span style="font-size: 14px;">►&nbsp;<a href="http://www.dshe.gov.bd/">পরিকল্পনা ও উন্নয়ন</a>&nbsp;</span>
                                            </p>
                                        </td>
                                        <td style="width: 140px;">
                                            <p>
                                                <span style="font-size: 14px;">► <a href="https://dshe.portal.gov.bd/site/view/policies">চাকুরী সংক্রান্ত</a></span>
                                            </p>
                                        </td>
                                        <td style="width: 96px;">
                                            <p>&nbsp;</p>
                                        </td>
                                        <td style="width: 108px;">
                                            <p>&nbsp;</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width: 134px;">
                                            <span style="background-color: rgb(255, 255, 255); color: rgb(51, 51, 51); font-family: sans-serif, arial, verdana, trebuchet ms; font-size: 14px;">
                                                ► <a href="/site/view/moedu_office_order/অর্থ ও ক্রয়">অর্থ ও ক্রয়</a>
                                            </span>
                                        </td>
                                        <td style="width: 106px;">
                                            <p>
                                                <span style="font-size: 14px;">►&nbsp;<a href="http://www.dshe.gov.bd/site/view/notification_circular">সাধারণ বিজ্ঞপ্তি</a></span>
                                            </p>
                                        </td>
                                        <td style="width: 114px;">
                                            <div>
                                                <span style="font-family: sans-serif, arial, verdana, trebuchet ms; font-size: 14px;">►</span>
                                                <a href="https://dshe.gov.bd/site/page/465bd161-1aaa-4959-a04d-7ccceb6ac0bc" style="font-family: sans-serif, arial, verdana, 'trebuchet ms'; font-size: 14px;">
                                                    <strong><span style="color: rgb(204, 51, 153);">বৃত্তি সংক্রান্ত</span></strong>
                                                </a>
                                            </div>
                                        </td>
                                        <td style="width: 140px;">
                                            <p>&nbsp;</p>
                                        </td>
                                        <td style="width: 96px;">&nbsp;</td>
                                        <td style="width: 108px;">&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td style="width: 134px;">
                                            <span style="font-family: sans-serif, arial, verdana, trebuchet ms; font-size: 14px;">
                                                ► <a href="https://dshe.portal.gov.bd/site/page/8c09e774-ac65-47df-862e-27a78b0c112d" target="_blank">এমপিও</a>
                                            </span>
                                        </td>
                                        <td style="width: 106px;">&nbsp;</td>
                                        <td style="width: 114px;">&nbsp;</td>
                                        <td style="width: 15px;">&nbsp;</td>
                                        <td style="width: 140px;">&nbsp;</td>
                                        <td style="width: 96px;">&nbsp;</td>
                                        <td style="width: 108px;">&nbsp;</td>
                                    </tr>
                                </tbody>
                            </table>

                            <p>&nbsp;</p>

                            <p>&nbsp;</p>

                            <p>&nbsp;</p>
                            <p></p>
                        </div>
                        <style>
                            #right-content .block {
                                display: block !important;
                            }
                        </style>
                        <script></script>
                        <div class="row">
                            <div id="box-1" class="six columns service-box box">
                                <h4>সাধারণ প্রশাসন শাখা</h4>
                                <img src="//www.dshe.gov.bd/sites/default/files/files/dshe.portal.gov.bd/front_service_box/cbfb99d6_1000_4054_9363_e0f3d2d88975/OpenPlanRedBalloon1.jpg" alt="" width="110" height="" />
                                <ul class="caption fade-caption" style="margin: 0;">
                                    <li><a href="/site/view/office_order/অফিস-আদেশ">অফিস আদেশ</a></li>
                                    <li><a href="/site/view/office_order/বিজ্ঞপ্তি">বিজ্ঞপ্তি</a></li>
                                    <li><a href="/site/view/office_order/অন্যান্য">অন্যান্য</a></li>
                                    <li><a href="http://www.dshe.gov.bd/">বদলির আবেদন</a></li>
                                </ul>
                            </div>
                            <div id="box-2" class="six columns service-box box">
                                <h4>অর্থ ও ক্রয়</h4>
                                <img src="//www.dshe.gov.bd/sites/default/files/files/dshe.portal.gov.bd/front_service_box/f8deef29_16bf_4346_a5c4_2306e2222329/budget.png" alt="" width="110" height="" />
                                <ul class="caption fade-caption" style="margin: 0;">
                                    <li><a href="/site/view/moedu_office_order/অর্থ ও ক্রয়/আদেশ">আদেশ</a></li>
                                    <li><a href="/site/view/tenders/টেন্ডার-ও-কোটেশান">টেন্ডার ও কোটেশান</a></li>
                                    <li><a href="/site/page/a7e48543-65b5-4235-9ddb-f5a0156700cc/বাজেট">বাজেট</a></li>
                                    <li><a href="/site/page/3e1fe7c3-b7d1-40a8-ab21-640479498b5c/বার্ষিক-ক্রয়-পরিকল্পনা">বার্ষিক ক্রয় পরিকল্পনা</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="row">
                            <div id="box-3" class="six columns service-box box">
                                <h4>এমপিও</h4>
                                <img src="//www.dshe.gov.bd/sites/default/files/files/dshe.portal.gov.bd/front_service_box/b826d833_b526_4f93_9816_35169192a45a/MPO.jpg" alt="" width="110" height="" />
                                <ul class="caption fade-caption" style="margin: 0;">
                                    <li><a href="/site/notices/676c1111-88db-447a-a398-504d36ada6dc/এমপিও-নোটিশ">এমপিও নোটিশ</a></li>
                                    <li><a href="/site/page/1a45a3d6-5323-465a-9cf7-4f30ad0f14b8/এমপিও-নীতিমালা">এমপিও নীতিমালা</a></li>
                                    <li><a href="https://dshe.portal.gov.bd/site/page/8c09e774-ac65-47df-862e-27a78b0c112d">এমপিও শীট / ভাউচার</a></li>
                                    <li><a href="http://emis.gov.bd">এমপিও নোটিশ</a></li>
                                </ul>
                            </div>
                            <div id="box-5" class="six columns service-box box">
                                <h4>মাধ্যমিক</h4>
                                <img src="//www.dshe.gov.bd/sites/default/files/files/dshe.portal.gov.bd/front_service_box/26bc7445_6d72_423d_a212_e351060b978a/secondary.jpg" alt="" width="110" height="" />
                                <ul class="caption fade-caption" style="margin: 0;">
                                    <li><a href="https://dshe.portal.gov.bd/site/view/moedu_office_order/মাধ্যমিক">অফিস আদেশ</a></li>
                                    <li><a href="/site/view/moedu_office_order/মাধ্যমিক/বিজ্ঞপ্তি">বিজ্ঞপ্তি</a></li>
                                    <li><a href="/site/view/moedu_office_order/মাধ্যমিক/বিবিধ">বিবিধ</a></li>
                                    <li><a href="">উপবৃত্তি</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="row">
                            <div id="box-6" class="six columns service-box box">
                                <h4>সরকারি কলেজ শাখা</h4>
                                <img src="//www.dshe.gov.bd/sites/default/files/files/dshe.portal.gov.bd/front_service_box/d3fb43bb_2ecc_4ebd_85bb_7b7c3edcc2b9/images 444.jpg" alt="" width="110" height="" />
                                <ul class="caption fade-caption" style="margin: 0;">
                                    <li><a href="https://dshe.portal.gov.bd/site/view/moedu_office_order/কলেজ">অফিস আদেশ</a></li>
                                    <li><a href="/site/view/moedu_office_order/কলেজ/বিজ্ঞপ্তি">বিজ্ঞপ্তি</a></li>
                                    <li><a href="http://www.dshe.gov.bd">পদোন্নতি/ সিলেকশন গ্রেড</a></li>
                                    <li><a href="http://www.dshe.gov.bd">অন্যান্য</a></li>
                                </ul>
                            </div>
                            <div id="box-6" class="six columns service-box box">
                                <h4>বেসরকারি কলেজ শাখা</h4>
                                <img src="//www.dshe.gov.bd/sites/default/files/files/dshe.portal.gov.bd/front_service_box/1f9848c5_3cee_457c_b03b_5d145e51f91f/ICT-lab-3.jpg" alt="" width="110" height="" />
                                <ul class="caption fade-caption" style="margin: 0;">
                                    <li><a href="http://www.dshe.gov.bd/secondary/153b51e1e8a680abb83bdd4d8d6c09cc.pdf">জনবল কাঠামো</a></li>
                                    <li><a href="https://dshe.portal.gov.bd/site/view/moedu_office_order/কলেজ">নোটিশ/ অফিস আদেশ</a></li>
                                    <li><a href="/site/view/moedu_office_order/কলেজ/তালিকাভুক্ত-শিক্ষক">তালিকাভুক্ত শিক্ষক</a></li>
                                    <li><a href="">বিবিধ</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="row">
                            <div id="box-7" class="six columns service-box box">
                                <h4>পরিকল্পনা ও উন্নয়ন</h4>
                                <img src="//www.dshe.gov.bd/sites/default/files/files/dshe.portal.gov.bd/front_service_box/7c2a5285_a5f0_409b_a5a8_d4c9bcb10221/meeting.png" alt="" width="110" height="" />
                                <ul class="caption fade-caption" style="margin: 0;">
                                    <li><a href="/site/view/moedu_office_order/%E0%A6%AA%E0%A6%B0%E0%A6%BF%E0%A6%95%E0%A6%B2%E0%A7%8D%E0%A6%AA%E0%A6%A8%E0%A6%BE/অফিস-আদেশ">অফিস আদেশ</a></li>
                                    <li><a href="/site/view/notices/বিজ্ঞপ্তি">বিজ্ঞপ্তি</a></li>
                                    <li><a href="/site/files/dae7dad1-ebcb-4db3-87db-60650919f985/-জেনারেশন-ব্রেকথ্রু"> জেনারেশন ব্রেকথ্রু</a></li>
                                    <li><a href="">অন্যান্য</a></li>
                                </ul>
                            </div>
                            <div id="box-7" class="six columns service-box box">
                                <h4>প্রশিক্ষণ</h4>
                                <img src="//www.dshe.gov.bd/sites/default/files/files/dshe.portal.gov.bd/front_service_box/3e27c58a_b4fd_42ee_9d73_81e6d20b343b/service-box-2.jpg" alt="" width="110" height="" />
                                <ul class="caption fade-caption" style="margin: 0;">
                                    <li><a href="http://www.dshe.gov.bd/site/view/training">আদেশ</a></li>
                                    <li><a href="http://www.dshe.gov.bd/site/view/training">বিজ্ঞপ্তি</a></li>
                                    <li><a href="http://www.dshe.gov.bd/site/view/training">অন্যান্য</a></li>
                                    <li><a href="http://www.dshe.gov.bd/site/view/training">চলমান প্রশিক্ষণ</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="row">
                            <div id="box-8" class="six columns service-box box">
                                <h4>টেন্ডার ও কোটেশান</h4>
                                <img src="//www.dshe.gov.bd/sites/default/files/files/dshe.portal.gov.bd/front_service_box/a7f02797_ea5a_416f_bbdb_90b9de4beb0f/BID.jpg" alt="" width="110" height="" />
                                <ul class="caption fade-caption" style="margin: 0;">
                                    <li><a href="/site/view/tenders/টেন্ডার">টেন্ডার</a></li>
                                    <li><a href="/site/view/tenders/-কোটেশান"> কোটেশান</a></li>
                                    <li><a href="/site/view/tenders/ই-টেন্ডারিং">ই টেন্ডারিং</a></li>
                                    <li><a href="http://www.dshe.gov.bd">টেন্ডার সম্পর্কিত নীতিমালা</a></li>
                                </ul>
                            </div>
                            <div id="box-9" class="six columns service-box box">
                                <h4>মনিটরিং এন্ড ইভালুয়েশান</h4>
                                <img src="//www.dshe.gov.bd/sites/default/files/files/dshe.portal.gov.bd/front_service_box/e8db2a14_aafe_4749_be08_14c086c40d3d/Physical edu..jpg" alt="" width="110" height="" />
                                <ul class="caption fade-caption" style="margin: 0;">
                                    <li><a href="http://www.dshe.gov.bd/site/view/moedu_office_order/পরিবীক্ষণ ও মূল্যায়ন">অফিস আদেশ</a></li>
                                    <li><a href="http://www.dshe.gov.bd/">বিজ্ঞপ্তি</a></li>
                                    <li><a href="https://tinyurl.com/dshe-school-reopen">কোভিড-১৯ সংক্রান্ত মনিটরিং চেকলিস্ট তথ্য প্রেরণের লিংক</a></li>
                                    <li><a href=""></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="row">
                            <div id="box-10" class="six columns service-box box">
                                <h4>সাধারন বিজ্ঞপ্তি</h4>
                                <img src="//www.dshe.gov.bd/sites/default/files/files/dshe.portal.gov.bd/front_service_box/e8ad2b6b_c394_4e66_9906_4609cd20777a/04.png" alt="" width="110" height="" />
                                <ul class="caption fade-caption" style="margin: 0;">
                                    <li><a href="http://www.dshe.gov.bd/site/view/notification_circular">আদেশ</a></li>
                                    <li><a href="http://www.dshe.gov.bd/site/view/notification_circular">বিজ্ঞপ্তি</a></li>
                                    <li><a href="http://www.dshe.gov.bd/site/view/notification_circular">অন্যান্য</a></li>
                                    <li><a href="http://www.dshe.gov.bd/site/view/notification_circular">নিয়োগ/ফলাফল</a></li>
                                </ul>
                            </div>
                            <div id="box-11" class="six columns service-box box">
                                <h4>জাতীয় শুদ্ধাচার কৌশল</h4>
                                <img src="//www.dshe.gov.bd/sites/default/files/files/dshe.portal.gov.bd/front_service_box/51551a87_84e3_45aa_aebe_9dd8393d4128/nis_logo3.png" alt="" width="110" height="" />
                                <ul class="caption fade-caption" style="margin: 0;">
                                    <li><a href="/site/page/65a0e9ec-6f4c-4efb-ba18-ff5891473168/শুদ্ধাচার-কৌশল-কর্ম-পরিকল্পনা--আদেশ---বিজ্ঞপ্তি">শুদ্ধাচার কৌশল কর্ম পরিকল্পনা/ আদেশ / বিজ্ঞপ্তি</a></li>
                                    <li><a href="/site/page/670a6408-c10b-4ed5-9600-5993b92705e6/শুদ্ধাচার-কৌশল-সংক্রান্ত-প্রতিবেদন---কার্যবিবরণী">শুদ্ধাচার কৌশল সংক্রান্ত প্রতিবেদন / কার্যবিবরণী</a></li>
                                    <li><a href="/site/page/acebfd6a-944d-4361-b3f7-ac6b3c553d4d/শুদ্ধাচার-কৌশল-সংক্রান্ত-ফোকাল-কর্মকর্তা-">শুদ্ধাচার কৌশল সংক্রান্ত ফোকাল কর্মকর্তা </a></li>
                                    <li><a href="/site/notices/5417158d-45a4-4eea-9cad-17b7f75971f3/শুদ্ধাচার-পুরস্কার-২০২০-২১">শুদ্ধাচার পুরস্কার ২০২০-২১</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="row">
                            <div id="box-12" class="six columns service-box box">
                                <h4>উদ্ভাবনী কার্যক্রম</h4>
                                <img src="//www.dshe.gov.bd/sites/default/files/files/dshe.portal.gov.bd/front_service_box/3482d1df_239b_4892_a281_3820f35859cd/INNOVATION (1).png" alt="" width="110" height="" />
                                <ul class="caption fade-caption" style="margin: 0;">
                                    <li><a href="/site/page/036fda09-c716-44dd-9657-ab941e8921d0/বার্ষিক-উদ্ভাবন-কর্মপরিকল্পনা--কার্যবিবরণী---অফিস-আদেশ---প্রজ্ঞাপন">বার্ষিক উদ্ভাবন কর্মপরিকল্পনা/ কার্যবিবরণী / অফিস আদেশ / প্রজ্ঞাপন</a></li>
                                    <li><a href="/site/page/136eb083-d3f9-43f6-af3a-64394f04163a/ইনোভেশন-টিম">ইনোভেশন টিম</a></li>
                                    <li><a href="/site/files/182394ce-d102-4e01-9428-4eaf3cb87c75/ইনোভেশন-আইডিয়া">ইনোভেশন আইডিয়া</a></li>
                                    <li><a href="/site/view/sps_data/সেবা-সহজিকরণ---উদ্ভাবন">সেবা সহজিকরণ / উদ্ভাবন</a></li>
                                </ul>
                            </div>
                            <div id="box-13" class="six columns service-box box">
                                <h4>সেবা প্রদান প্রতিশ্রুতি (সিটিজেন্‌স চার্টার)</h4>
                                <img src="//www.dshe.gov.bd/sites/default/files/files/dshe.portal.gov.bd/front_service_box/014423dd_5158_4957_8c33_715b42219f5c/Service.png" alt="" width="110" height="" />
                                <ul class="caption fade-caption" style="margin: 0;">
                                    <li><a href="/site/office_citizen_charter/3276fd6b-f5be-447e-abe0-1bb485ed6675/সিটিজেন-চার্টার-">সিটিজেন চার্টার </a></li>
                                    <li><a href="/site/page/b2ff501a-6fc2-4e8b-afba-79f5e9dc243e/বিভিন্ন-কমিটি--দায়িত্বপ্রাপ্ত-কর্মকর্তা/বিভিন্ন-কমিটি--দায়িত্বপ্রাপ্ত-কর্মকর্তা">বিভিন্ন কমিটি/ দায়িত্বপ্রাপ্ত কর্মকর্তা</a></li>
                                    <li><a href="/site/view/annual_reports/বার্ষিক-প্রতিবেদন">বার্ষিক প্রতিবেদন</a></li>
                                    <li><a href="/site/files/f75357ed-178c-457b-b60b-ed2f5c98f60d/সিটিজেন্‌স-চার্টার-প্রণয়ন-সংক্রান্ত-নির্দেশিকা,-২০১৭">সিটিজেন্‌স চার্টার প্রণয়ন সংক্রান্ত নির্দেশিকা, ২০১৭</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="row">
                            <div id="box-14" class="six columns service-box box">
                                <h4>তথ্য অধিকার</h4>
                                <img src="//www.dshe.gov.bd/sites/default/files/files/dshe.portal.gov.bd/front_service_box/5b556262_ec0e_4c1c_b0ef_1d16539d58d2/04.png" alt="" width="110" height="" />
                                <ul class="caption fade-caption" style="margin: 0;">
                                    <li><a href="http://dshe.portal.gov.bd/site/page/21365154-0eda-4277-be90-34998bd4f9c7">তথ্য প্রদানকারী কর্মকর্তাবৃন্দ</a></li>
                                    <li><a href="http://dshe.portal.gov.bd/site/page/b68fc292-322f-4e81-aee0-f8ff77a30666">আবেদন ও আপিল ফরম</a></li>
                                    <li><a href="http://dshe.portal.gov.bd/site/page/4e299f61-f97c-4a50-bcf7-8813be3a13bf">আইন ও বিধি</a></li>
                                    <li><a href="/site/view/annual_reports/বার্ষিক-প্রতিবেদন">বার্ষিক প্রতিবেদন</a></li>
                                </ul>
                            </div>
                            <div id="box-15" class="six columns service-box box">
                                <h4>বার্ষিক কর্মসম্পাদন চুক্তি</h4>
                                <img src="//www.dshe.gov.bd/sites/default/files/files/dshe.portal.gov.bd/front_service_box/21b7f150_e39a_4285_80ce_e46a9f504fde/apa_cab.png" alt="" width="110" height="" />
                                <ul class="caption fade-caption" style="margin: 0;">
                                    <li><a href="/site/page/2b49f7f0-b527-4f55-b100-45e8eb59ebb6/নোটিশ--অফিস-আদেশ">নোটিশ/ অফিস আদেশ</a></li>
                                    <li><a href="/site/page/043d81a3-a9d9-4a72-97d2-e3af5ff14c48/প্রজ্ঞাপন--নীতিমালা--পরিপত্র--কাঠামো">প্রজ্ঞাপন/ নীতিমালা/ পরিপত্র/ কাঠামো</a></li>
                                    <li><a href="https://dshe.portal.gov.bd/site/page/1551d551-7b9f-4672-8622-cd6909df3ad9">অধিদপ্তরের চুক্তিসমূহ/ অগ্রগতি/ কমিটি/ এপিএএমএস লিংক</a></li>
                                    <li><a href="https://dshe.portal.gov.bd/site/page/cd86a230-8dea-472f-998b-6e5109b1c9c8">আঞ্চলিক কার্যালয়ের চুক্তিসমূহ</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="row">
                            <div id="box-17" class="six columns service-box box">
                                <h4>অভিযোগ প্রতিকার ব্যবস্থাপনা</h4>
                                <img src="//www.dshe.gov.bd/sites/default/files/files/dshe.portal.gov.bd/front_service_box/c423de27_25f4_41ee_920f_fa307f3da571/complain (1).png" alt="" width="110" height="" />
                                <ul class="caption fade-caption" style="margin: 0;">
                                    <li><a href="/site/page/a55eaed5-7bf1-4e8f-9537-d8b71bf3c014/অনিক-ও-আপিল-কর্মকর্তাগণ">অনিক ও আপিল কর্মকর্তাগণ</a></li>
                                    <li><a href="http://www.grs.gov.bd/">অভিযোগ দাখিল (অনলাইনে আবেদন)</a></li>
                                    <li><a href="/site/page/31140543-8de5-49d2-910f-1549260540eb/মাসিক-ত্রৈমাসিক-বার্ষিক-পরিবীক্ষণ-মূল্যায়ন-প্রতিবেদন">মাসিক/ত্রৈমাসিক/বার্ষিক পরিবীক্ষণ/মূল্যায়ন প্রতিবেদন</a></li>
                                    <li><a href="/site/page/be3d9612-e4a8-48b9-a3c1-b557883d86ee/আইন-বিধি-নীতিমালা-পরিপত্র-">আইন/বিধি/নীতিমালা/পরিপত্র/</a></li>
                                </ul>
                            </div>
                            <div id="box-19" class="six columns service-box box">
                                <h4>ই-লার্নিং রিসোর্স এবং বিভিন্ন প্ল্যাটফর্ম</h4>
                                <img src="//www.dshe.gov.bd/sites/default/files/files/dshe.portal.gov.bd/front_service_box/292b3f25_e602_4035_84b8_e8b829c1fcf0/eLearning1 (1).png" alt="" width="110" height="" />
                                <ul class="caption fade-caption" style="margin: 0;">
                                    <li><a href="http://203.112.195.166:6081/">আরইএলএম</a></li>
                                    <li><a href="/site/page/367da444-aed3-4714-a4e2-008527782d47/ই-লার্নিং-রিসোর্সের-বিভিন্ন-প্ল্যাটফর্ম">ই-লার্নিং রিসোর্সের বিভিন্ন প্ল্যাটফর্ম</a></li>
                                    <li><a href=""></a></li>
                                    <li><a href=""></a></li>
                                </ul>
                            </div>
                        </div>
                        <style></style>
                        <script></script>
                        <div class="column block">
                            <h5 class="bk-org title">
                                ভিডিও
                            </h5>

                            <p>&nbsp;<iframe frameborder="1" height="350" src="https://www.youtube.com/embed/HbYVxljUjrQ" width="700"></iframe></p>

                            <p>&nbsp;<iframe frameborder="1" height="350" src="https://www.youtube.com/embed/ZjXeFhv_CxE" width="700"></iframe></p>

                            <p>&nbsp;<iframe frameborder="1" height="350" src="https://www.youtube.com/embed/B4J5n-lNk3g" width="700"></iframe></p>

                            <p>&nbsp;<iframe frameborder="1" height="350" src="https://www.youtube.com/embed/sUpz4zFEx6o" width="700"></iframe></p>
                            <p></p>
                        </div>
                        <style>
                            #right-content .block {
                                display: block !important;
                            }
                        </style>
                        <script></script>
                        <div class="column block">
                            <h5 class="bk-org title">
                                মানচিত্রে মাধ্যমিক ও উচ্চশিক্ষা অধিদপ্তর
                            </h5>

                            <p>
                                <iframe
                                    frameborder="0"
                                    height="250"
                                    scrolling="no"
                                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2171.7991510558095!2d90.40504193397172!3d23.72896345313343!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8f0690ab8ab%3A0x5de52dec34292abe!2sDirectorate+of+Secondary+And+Higher+Education!5e0!3m2!1sen!2sbd!4v1516099615505"
                                    style="border: 0;"
                                    width="800"
                                ></iframe>
                            </p>
                            <p></p>
                        </div>
                        <style>
                            #right-content .block {
                                display: block !important;
                            }
                        </style>
                        <script></script>
                        <div class="column block">
                            <h5 class="bk-org title">
                                আশ্রয়ণের অধিকার শেখ হাসিনার উপহার
                            </h5>

                            <table border="0" cellpadding="1" cellspacing="1" style="width: 100%;">
                                <tbody>
                                    <tr>
                                        <td style="width: 33%;"><iframe frameborder="0" src="https://www.youtube.com/embed/l7G3TPz6P24" width="100%"></iframe></td>
                                        <td style="width: 33%;"><iframe frameborder="0" src="https://www.youtube.com/embed/z6llDxY5JFs" width="100%"></iframe></td>
                                        <td style="width: 33%;"><iframe frameborder="0" src="https://www.youtube.com/embed/MvTLqrU9ZbQ" width="100%"></iframe></td>
                                    </tr>
                                </tbody>
                            </table>
                            <p></p>
                        </div>
                        <style>
                            #right-content .block {
                                display: block !important;
                            }
                        </style>
                        <script></script>
                        <div class="column block">
                            <h5 class="bk-org title">
                                অন্যান্য ভিডিও
                            </h5>

                            <table border="1" cellpadding="1" cellspacing="1" style="height: 220px; width: 100%;">
                                <tbody>
                                    <tr>
                                        <td style="text-align: center;">
                                            <p><iframe frameborder="0" height="200" src="https://www.youtube.com/embed/zBAKSZqTkRg" width="340"></iframe></p>

                                            <p><strong>ফল আর্মিওয়ার্ম পর্যবেক্ষণ ও সনাক্তকরণ</strong></p>
                                        </td>
                                        <td style="text-align: center;">
                                            <p><iframe frameborder="0" height="200" src="https://www.youtube.com/embed/GT9ShGE_qjg" width="340"></iframe></p>

                                            <p><strong>বন্যার সময় কি করণীয়</strong></p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <p></p>
                        </div>
                        <style>
                            #right-content .block {
                                display: block !important;
                            }
                        </style>
                        <script></script>
                    </div>
                </div>
                <div class="four columns right-side-bar" id="right-content">
                    <div class="column block">
                        <h5 class="bk-org title">
                            জাতীয় সংগীত
                        </h5>
                        <audio controls="" style="width: 100%;">
                            <source src="/sites/default/files/files/admin.portal.gov.bd/npfblock/bd_national_anthem.mp3" type="audio/mp3" />
                        </audio>
                    </div>
                    <style></style>
                    <script></script>
                    <div class="column block">
                        <h5 class="bk-org title">
                            মহাপরিচালক
                        </h5>

                        <p><img alt="" src="https://dshe.portal.gov.bd/uploader/server/../../sites/default/files/files/dshe.portal.gov.bd/npfblock//NewDGSir.jpg" style="height: 214px; width: 220px;" /></p>

                        <p>
                            <span style="font-size: 14px;"><strong>প্রফেসর ড. সৈয়দ মো. গোলাম ফারুক</strong></span>
                        </p>

                        <h4>
                            <a href="http://dshe.portal.gov.bd/site/page/cecb3807-55c3-4a1b-b73e-2c247aec0c03">
                                <u><span style="color: #008000;">বিস্তারিত</span></u>
                            </a>
                        </h4>
                        <p></p>
                    </div>
                    <style>
                        #right-content .block {
                            display: block !important;
                        }
                    </style>
                    <script></script>
                    <div class="column block">
                        <h5 class="bk-org title">
                            অনলাইনে এম.পি.ও. ভুক্তির আবেদন - ২০২১
                        </h5>

                        <ul>
                            <li>
                                <a
                                    href="http://dshe.portal.gov.bd/uploader/server/../../sites/default/files/files/dshe.portal.gov.bd/npfblock//nirdesika.pdf"
                                    style="
                                        padding: 0px;
                                        margin: 0px;
                                        font-family: kalpurushregular;
                                        border: 0px;
                                        font-variant-numeric: inherit;
                                        font-variant-east-asian: inherit;
                                        font-stretch: inherit;
                                        font-size: 12px;
                                        line-height: inherit;
                                        vertical-align: baseline;
                                        color: rgb(0, 0, 0);
                                        text-decoration-line: none;
                                        outline: 0px;
                                    "
                                    title="১.&nbsp;অনলাইন আবেদন ফরম পূরণ নির্দেশিকা"
                                >
                                    অনলাইন আবেদন ফরম পূরণ নির্দেশিকা
                                </a>
                            </li>
                            <li>
                                <a
                                    href="http://202.72.235.210/mpo-shed/mpo_login"
                                    style="
                                        padding: 0px;
                                        margin: 0px;
                                        font-family: kalpurushregular;
                                        border: 0px;
                                        font-variant-numeric: inherit;
                                        font-variant-east-asian: inherit;
                                        font-stretch: inherit;
                                        font-size: 12px;
                                        line-height: inherit;
                                        vertical-align: baseline;
                                        color: rgb(102, 102, 102);
                                        text-decoration-line: none;
                                        outline: 0px;
                                    "
                                    title="২.অনলাইন এম.পি.ও আবেদন"
                                >
                                    অনলাইন এম.পি.ও আবেদন
                                </a>
                                <a href="http://202.72.235.210/mpo-shed"><span style="color: rgb(68, 68, 68); font-family: kalpurushregular; font-size: 12px;">&nbsp;ফরম</span></a>
                            </li>
                            <li>
                                <span style="color: rgb(68, 68, 68); font-family: kalpurushregular; font-size: 12px;">&nbsp;</span>
                                <a
                                    href="http://dshe.portal.gov.bd/uploader/server/../../sites/default/files/files/dshe.portal.gov.bd/npfblock//declaration.pdf"
                                    style="
                                        padding: 0px;
                                        margin: 0px;
                                        font-family: kalpurushregular;
                                        border: 0px;
                                        font-variant-numeric: inherit;
                                        font-variant-east-asian: inherit;
                                        font-stretch: inherit;
                                        font-size: 12px;
                                        line-height: inherit;
                                        vertical-align: baseline;
                                        color: rgb(102, 102, 102);
                                        text-decoration-line: none;
                                        outline: 0px;
                                    "
                                    title="প্রতিষ্ঠান প্রধানের ঘোষণাপত্র"
                                >
                                    প্রতিষ্ঠান প্রধানের ঘোষণাপত্র
                                </a>
                            </li>
                            <li>
                                <a
                                    href="http://dshe.portal.gov.bd/uploader/server/../../sites/default/files/files/dshe.portal.gov.bd/npfblock//299.pdf"
                                    style="
                                        padding: 0px;
                                        margin: 0px;
                                        font-family: kalpurushregular;
                                        border: 0px;
                                        font-variant-numeric: inherit;
                                        font-variant-east-asian: inherit;
                                        font-stretch: inherit;
                                        font-size: 12px;
                                        line-height: inherit;
                                        vertical-align: baseline;
                                        color: rgb(0, 0, 0);
                                        text-decoration-line: none;
                                        outline: 0px;
                                    "
                                    title="গণবিজ্ঞপ্তি-২০২১"
                                >
                                    গণবিজ্ঞপ্তি-২০২১
                                </a>
                            </li>
                            <li>
                                <a
                                    href="http://dshe.portal.gov.bd/uploader/server/../../sites/default/files/files/dshe.portal.gov.bd/npfblock//MPO-Policy2021.pdf"
                                    style="
                                        padding: 0px;
                                        margin: 0px;
                                        font-family: kalpurushregular;
                                        border: 0px;
                                        font-variant-numeric: inherit;
                                        font-variant-east-asian: inherit;
                                        font-stretch: inherit;
                                        font-size: 12px;
                                        line-height: inherit;
                                        vertical-align: baseline;
                                        color: rgb(102, 102, 102);
                                        text-decoration-line: none;
                                        outline: 0px;
                                    "
                                    title=".&nbsp;এম.পি.ও নীতিমালা-২০২১"
                                >
                                    এম.পি.ও নীতিমালা-২০২১
                                </a>
                            </li>
                        </ul>
                        <p></p>
                    </div>
                    <style>
                        #right-content .block {
                            display: block !important;
                        }
                    </style>
                    <script></script>
                    <a href="//bangladesh.gov.bd/site/view/all_eservices_in_bangladesh/">
                        <div class="column block central-eservices">
                            <h5 class="bk-org title eservice-title">কেন্দ্রীয় ই-সেবা</h5>
                        </div>
                    </a>

                    <!-- <div class="column block central-eservices">
  <h5 class="bk-org title eservice-title">কেন্দ্রীয় ই-সেবা
  </h5>
        <ul>


        <li class="item_"></li>


        <li class="item_"></li>


        <li class="item_"></li>


        <li class="item_"></li>


        <li class="item_"></li>


        <li class="item_"></li>


        <li class="item_"></li>


        <li class="item_"></li>


        <li class="item_"></li>


        <li class="item_"></li>


        <li class="item_"></li>


        <li class="item_"></li>


        <li class="item_"></li>
                </ul>
          <a href="" class="btn" style="display:block;text-align:center;">সকল</a>
      </div>
 -->
                    <style>
                        .eservice-title {
                            background-color: #609513 !important;
                            color: #fff;
                            font-size: 12px;
                            padding: 5px;
                        }
                        .block ul li {
                            background: rgba(0, 0, 0, 0) url("/themes/responsive_npf/images/bg_block_list.png") no-repeat scroll center bottom;
                            font-size: 120%;
                            height: auto;
                            list-style-type: none;
                            margin-bottom: 5px;
                            padding-bottom: 8px;
                            padding-left: 32px;
                            padding-top: 0;
                        }

                        body.bpsc-portal-gov-bd .wsis_prize {
                            display: none;
                        }
                    </style>
                    <script></script>
                    <div class="column block">
                        <h5 class="bk-org title">গুরুত্বপূর্ণ লিংক</h5>
                        <ul>
                            <li><a href="http://www.pmo.gov.bd">প্রধানমন্ত্রীর কার্যালয়</a></li>

                            <li><a href="http://www.moedu.gov.bd/">শিক্ষা মন্ত্রণালয়</a></li>

                            <li><a href="http://pmis.mopa.gov.bd/">All cadre PMIS </a></li>

                            <li><a href="http://mmc.e-service.gov.bd/">MMC Dashboard Website</a></li>

                            <li><a href="http://sss.bkkb.gov.bd/">কর্মচারী কল্যাণ বোর্ডের কল্যাণ, যৌথবীমা ও দাফন-অন্ত্যেষ্টিক্রিয়ার অনুদান</a></li>
                        </ul>
                        <a href="/site/view/important_links" class="btn" style="display: block; text-align: center;">সকল লিংক</a>
                    </div>
                    <style></style>
                    <script></script>
                    <div class="column block">
                        <h5 class="bk-org title internal-eservice">
                            <a target="_blank" href="https://www.mygov.bd/serviceByOffice/?agent=np&domain=dshe.gov.bd">অভ্যন্তরীণ ই-সেবাসমূহ</a>
                        </h5>
                        <ul>
                            <li><a href="http://emis.gov.bd/emis">emis.gov.bd</a></li>

                            <li><a href="http://118.67.223.30/emis">Alternate link of EMIS Server</a></li>

                            <li><a href="http://emis.gov.bd">বদলির আবেদন (অধ্যক্ষ /উপাধ্যক্ষ, সরকারি কলেজ)</a></li>

                            <li><a href="http://emis.gov.bd">Institution Management System (IMS) </a></li>

                            <li><a href="http://103.234.26.37/dashboard">ILC Dashboard</a></li>

                            <li><a href="http://203.112.195.166:6081">RELM</a></li>
                        </ul>

                        <a href="/site/view/internal_eservices" class="btn" style="display: block; text-align: center;">সকল</a>
                    </div>
                    <style>
                        .block h5.internal-eservice {
                            background-image: url("/sites/default/files/files/pmo.portal.gov.bd/page/761f04a2_c625_480e_96cc_b9a0c006d5c3/internal_eservice2.png");
                            background-repeat: round;
                            background-color: white !important;

                            font-size: 1.2em;

                            height: 50px;
                            line-height: 56px;
                            padding: 0 0 0 10px !important;
                        }

                        .block h5.internal-eservice a {
                            color: white !important;
                            display: block;
                            text-decoration: none;
                        }

                        @media only screen and (max-width: 979px) and (min-width: 320px) {
                            .block h5.internal-eservice a {
                                margin-top: 15px;
                                font-size: 17px;
                            }
                        }
                    </style>
                    <script></script>
                    <div class="column block">
                        <h5 class="bk-org title">
                            ভিডিও
                        </h5>

                        <p><iframe frameborder="0" height="150" src="https://www.youtube.com/embed/RiN8L5gJ-BU" width="250"></iframe></p>
                        <p><iframe frameborder="0" height="150" src="https://www.youtube.com/embed/B4J5n-lNk3g" width="250"></iframe></p>
                        <p></p>
                    </div>
                    <style>
                        #right-content .block {
                            display: block !important;
                        }
                    </style>
                    <script></script>
                    <div class="column block">
                        <h5 class="bk-org title">
                            মাউশি ফেসবুক পেজ
                        </h5>

                        <p>
                            <a href="https://www.facebook.com/dshe.moebd">
                                <img alt="Social Media" src="http://dshe.portal.gov.bd/uploader/server/../../sites/default/files/files/dshe.portal.gov.bd/npfblock//facebook-logo.png" style="height: 74px; width: 200px;" />
                            </a>
                        </p>
                        <p></p>
                    </div>
                    <style>
                        #right-content .block {
                            display: block !important;
                        }
                    </style>
                    <script></script>
                    <div class="column block">
                        <h5 class="bk-org title">
                            জরুরি হটলাইন
                        </h5>
                        <p><img alt="" src="/sites/default/files/files/admin.portal.gov.bd/npfblock//National-Helpline%20%281%29.jpg" style="height: 100%; width: 220px;" /></p>
                        <p></p>
                    </div>
                    <style>
                        #right-content .block {
                            display: block !important;
                        }
                    </style>
                    <script></script>
                    <div class="column block">
                        <h5 class="bk-org title">
                            করোনা ভাইরাস প্রতিরোধে যোগাযোগ
                        </h5>

                        <p>
                            <a href="https://corona.gov.bd/" target="_blank">
                                <img alt="করোনা হটলাইন নম্বর" src="/sites/default/files/files/admin.portal.gov.bd/npfblock//corona_new.jpg" style="border-style: solid; border-width: 1px; width: 100%;" />
                            </a>
                        </p>

                        <p>&nbsp;</p>

                        <p><iframe frameborder="0" src="https://www.youtube.com/embed/GVPJHDp29tg" width="100%"></iframe></p>
                        <p></p>
                    </div>
                    <style>
                        #right-content .block {
                            display: block !important;
                        }
                    </style>
                    <script></script>
                    <div class="column block">
                        <h5 class="bk-org title">
                            করোনা ট্রেসার বিডি
                        </h5>

                        <p>
                            <a href="https://bit.ly/coronatracerbd" target="_blank">
                                <img alt="" src="/sites/default/files/files/admin.portal.gov.bd/npfblock/5d18830f_9fe8_42e1_965d_f94a61510be9/2020-06-16-00-21-94946eae5bcbd226dff95be9d2e49445.jpg" style="width: 100%;" />
                            </a>
                        </p>
                        <p></p>
                    </div>
                    <style>
                        #right-content .block {
                            display: block !important;
                        }
                    </style>
                    <script></script>
                    <div class="column block">
                        <h5 class="bk-org title">
                            একদেশ
                        </h5>

                        <p style="text-align: center;">
                            <a href="//ekdesh.ekpay.gov.bd/" target="_blank">
                                <img alt="" src="/sites/default/files/files/admin.portal.gov.bd/npfblock/6489f67c_f1ab_4c6f_879c_62b91a2bf45c/2020-05-18-15-22-d1cb9a8e17dbdaed8c9badd286910939.jpg" style="width: 100%;" />
                            </a>
                        </p>
                        <p></p>
                    </div>
                    <style>
                        #right-content .block {
                            display: block !important;
                        }
                    </style>
                    <script></script>
                    <div class="column block">
                        <h5 class="bk-org title">
                            ডিজিটাল বাংলাদেশ এর এগিয়ে যাওয়ার ১২ বছর
                        </h5>

                        <p><iframe frameborder="0" src="https://www.youtube.com/embed/B0FgrYBE4uY?rel=0" width="100%"></iframe></p>
                        <p></p>
                    </div>
                    <style>
                        #right-content .block {
                            display: block !important;
                        }
                    </style>
                    <script></script>
                    <div class="column block">
                        <h5 class="bk-org title">
                            ডেঙ্গু প্রতিরোধে করণীয়
                        </h5>
                        <p>
                            <a href="https://bangladesh.gov.bd/site/page/91530698-c795-4542-88f2-5da1870bd50c" target="_blank"><img alt="" src="/sites/default/files/files/admin.portal.gov.bd/npfblock/dengu.jpg" /></a>
                        </p>
                        <p></p>
                    </div>
                    <style>
                        #right-content .block {
                            display: block !important;
                        }
                    </style>
                    <script></script>
                    <div class="column block">
                        <h5 class="bk-org title">ইনোভেশন কর্নার</h5>
                    </div>
                    <style></style>
                    <script></script>
                    <div class="column block">
                        <h5 class="bk-org title">সামাজিক যোগাযোগ</h5>
                    </div>

                    <div class="clearfix"></div>
                    <style>
                        .share-buttons img {
                            width: 30px;
                            padding: 2px;
                            border: 0;
                            box-shadow: 0;
                            display: inline;
                        }
                    </style>
                    <script></script>
                    <script>
                        $(document).ready(function () {
                            el = $('h5:contains("সেবা সহজিকরণ")');
                            text = el.html();
                            el.html("").html('<a style="color:#fff" href="/site/view/sps_data">' + text + "<a>");
                        });
                    </script>
                    <style></style>
                    <script></script>
                    <!-- <div style="" class="column block">

                        <h5 style="background-color: #eee;">
                                                                                                            দর্শক সংখ্যাঃ
                                                <span style="padding:5px; background-color: #609513; color: #fff; font-weight:bold;">
                                                    <span>
                        </h5>
                    </div> -->
                </div>
            </div>
        </div>
        <!-- container -->

        <div class="footer-artwork" id="footer-artwork">&nbsp;</div>
        <div class="footer-wrapper full-width" id="footer-wrapper">
            <div id="footer-menu">
                <ul>
                    <li><a href="/site/view/sitemap//সাইট-ম্যাপ">সাইট ম্যাপ</a></li>
                    <li><a href="/site/page/a2ccd7fe-05cd-49ef-9de5-7ef091cabf03/যোগাযোগ">যোগাযোগ</a></li>
                    <li><a href="https://www.facebook.com/dshe.moebd/">ফেসবুক</a></li>
                </ul>
                <div style="float: left; font-size: 0.9em;">
                    সাইটটি শেষ হাল-নাগাদ করা হয়েছে: <span style="font-style: italic;">&#x09E8;&#x09E6;&#x09E8;&#x09E7;-&#x09E7;&#x09E7;-&#x09E8;&#x09EF; &#x09E6;&#x09EF;:&#x09E6;&#x09E8;:&#x09E7;&#x09EB;</span>
                    <!--<span><a href="http://support.portal.gov.bd/" style="color: green" target="_blank"> | <u>হেল্পডেস্ক</u></a></span>-->
                </div>
            </div>

            <div class="footer-credit" id="footer">
                <!--  -->

                <p>
                    পরিকল্পনা ও বাস্তবায়নে:&nbsp;
                    <a href="http://www.cabinet.gov.bd/">মন্ত্রিপরিষদ বিভাগ</a>,&nbsp; <a href="https://a2i.gov.bd">এটুআই</a>,&nbsp; <a href="http://www.bcc.net.bd/">বিসিসি</a>,&nbsp;
                    <a href="http://doict.gov.bd/">ডিওআইসিটি</a>&nbsp;ও&nbsp; <a href="http://www.basis.org.bd/">বেসিস</a>।
                </p>

                <!-- <p>
                কারিগরি সহায়তায়:<a href="https://a2i.gov.bd"><img
                    style=""
                    src="/themes/responsive_npf/img/a2i.png"
                    alt=""></a>
            </p> -->

                <p>
                    কারিগরি সহায়তায়:
                    <img style="vertical-align: baseline;" src="/themes/responsive_npf/img/np-logo-set.png" alt="" />
                </p>
            </div>
            <!-- /footer -->
        </div>

        <script>
            function setLanguageCookie(cookieValue) {
                var today = new Date();
                var expire = new Date();
                var cookieName = "lang";
                //var cookieValue = "bn";
                var nDays = 5;
                expire.setTime(today.getTime() + 3600000 * 24 * nDays);
                document.cookie = cookieName + "=" + escape(cookieValue) + ";expires=" + expire.toGMTString();
            }

            function setLanguage() {
                $("#lang_form").submit();
                return false;
            }

            $(function () {
                // Slideshow 4
                $("#front-image-slider").responsiveSlides({
                    auto: true,
                    pager: false,
                    nav: true,
                    speed: 2000,
                    maxwidth: 960,
                    namespace: "callbacks",
                });
                $("#right-content a").click(function () {
                    var url = $(this).attr("href");
                    if (isExternal(url) && url != "javascript:;") {
                        openInNewTab(url);
                        return false;
                    }
                });
            });
            function openInNewTab(url) {
                var win = window.open(url, "_blank");
                win.focus();
            }
            function isExternal(url) {
                var match = url.match(/^([^:\/?#]+:)?(?:\/\/([^\/?#]*))?([^?#]+)?(\?[^#]*)?(#.*)?/);
                if (typeof match[1] === "string" && match[1].length > 0 && match[1].toLowerCase() !== location.protocol) return true;
                if (
                    typeof match[2] === "string" &&
                    match[2].length > 0 &&
                    match[2].replace(
                        new RegExp(
                            ":(" +
                                {
                                    "http:": 80,
                                    "https:": 443,
                                }[location.protocol] +
                                ")?$"
                        ),
                        ""
                    ) !== location.host
                )
                    return true;
                return false;
            }
        </script>

        <script>
            $(function () {
                function initNewsTicker(id, options) {
                    var $scroller = $(id);
                    $scroller.vTicker("init", options);

                    $("#news-ticker .next").click(function (event) {
                        event.preventDefault();
                        var checked = true;
                        $("#news-ticker").vTicker("next", { animate: checked });
                    });
                    $("#news-ticker .prev,#news-ticker .next").hover(
                        function () {
                            $("#news-ticker").vTicker("next", { animate: checked });
                            $scroller.vTicker("pause", true);
                        },
                        function () {
                            $("#news-ticker").vTicker("next", { animate: checked });
                            $scroller.vTicker("pause", false);
                        }
                    );
                    $("#news-ticker .prev").click(function (event) {
                        event.preventDefault();
                        var checked = true;
                        $("#news-ticker").vTicker("prev", { animate: checked });
                    });
                }

                function initNoticeBoardTicker(id, options) {
                    var $scroller = $(id);
                    $scroller.vTicker("init", options);

                    $("#notice-board-ticker .next").click(function (event) {
                        event.preventDefault();
                        var checked = true;
                        $("#notice-board-ticker").vTicker("next", { animate: false });
                    });
                    $("#notice-board-ticker .prev,#notice-board-ticker .next").hover(
                        function () {
                            $scroller.vTicker("pause", true);
                        },
                        function () {
                            $scroller.vTicker("pause", false);
                        }
                    );
                    $("#notice-board-ticker .prev").click(function (event) {
                        event.preventDefault();
                        var checked = true;
                        $("#notice-board-ticker").vTicker("prev", { animate: checked });
                    });
                }

                initNewsTicker("#news-ticker", {});
                //initNoticeBoardTicker('#notice-board-ticker', {showItems:10, margin: 0, padding: 0,animate:false});
            });

            /* Responsive Menu*/
        </script>

        <!-- Matomo -->
        <script type="text/javascript">
            var _paq = _paq || [];
            /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
            _paq.push(["trackPageView"]);
            _paq.push(["enableLinkTracking"]);
            (function () {
                var u = "https://analytics.portal.gov.bd/piwik/";
                _paq.push(["setTrackerUrl", u + "piwik.php"]);
                _paq.push(["setSiteId", 152]);
                var d = document,
                    g = d.createElement("script"),
                    s = d.getElementsByTagName("script")[0];
                g.type = "text/javascript";
                g.async = true;
                g.defer = true;
                g.src = u + "piwik.js";
                s.parentNode.insertBefore(g, s);
            })();
        </script>
        <!-- End Matomo Code -->

        <script>
            $(".meganizr .mzr-drop").keyup(function () {
                $(".mzr-content").attr("aria-hidden", "true");
                $(this).find(".mzr-content").attr("aria-hidden", "false");
            });
            // ============ start tile for <a> and alt for img ========
            $("a").each(function () {
                $(this).attr("title", $(this).text());
            });

            var lan = "bn";
            if (lan == "en") {
                $(".mzr-drop a:first-child").each(function () {
                    $(this).attr("title", "Enter to get more menu");
                });
            } else {
                $(".mzr-drop a:first-child").each(function () {
                    $(this).attr("title", "সাবমেনুর জন্য ক্লিক করুন");
                });
            }
            $("img").each(function () {
                var str = $(this).attr("src");
                var arr = str.split("/");
                var strFine = arr[arr.length - 1];

                var str2 = strFine;
                var arr2 = str2.split(".");
                var strFine2 = arr2[arr2.length - 2];
                $(this).attr("alt", strFine2);
            });
            $("a2iLogo").attr("alt", "Access to information");
            $(".service-box img").each(function () {
                var strTitle = $(this).parent().find("h4").text();
                $(this).attr("alt", strTitle);
            });
            $(".block img").each(function () {
                var strTitleRight = $(this).closest(".block").find(".title").text();
                $(this).attr("alt", strTitleRight);
            });
            $("#notice-board-ticker .btn").attr("title", "সকল নোটিশ");
            $("#news-ticker .btn").attr("title", "সকল খবর");
            $("#search").each(function () {
                $(this).attr("alt", "Search");
            });
            $(".search-btn").each(function () {
                $(this).attr("alt", "Enter to search");
            });
            $(".mzr-content").mouseout(function () {
                $(this).hide();
            });
            $(".submenu").mouseover(function () {
                $(this).siblings(".mzr-content").show();
            });
            $(".mzr-content").mouseover(function () {
                $(this).show();
            });
            // ============ end tile for <a> and alt for img ========
        </script>

        <script>
            $(document).ready(function () {
                $(".slide-panel-button").click(function () {
                    $("#domain-selector-panel").toggle(); //animate({height: "toggle"}, 200);
                    if ($("#domain-selector-panel").is(":visible")) {
                        $("#div-lang").css("z-index", "200");
                    } else {
                        $("#div-lang").css("z-index", "1001");
                    }
                    $(".slide-panel-button").toggle();
                });
            });
        </script>

        <!-- ============ start accessibility megamenu ============ -->

        <script>
            $(document).ready(function ($) {
                $("#dawgdrops").accessibleMegaMenu({
                    /* prefix for generated unique id attributes, which are required
                 to indicate aria-owns, aria-controls and aria-labelledby */
                    uuidPrefix: "accessible-megamenu",

                    /* css class used to define the megamenu styling */
                    menuClass: "meganizr",

                    /* css class for a top-level navigation item in the megamenu */
                    topNavItemClass: "mzr-drop",

                    /* css class for a megamenu panel */
                    panelClass: "mzr-content",

                    /* css class for a group of items within a megamenu panel */
                    panelGroupClass: "mzr-links",

                    /* css class for the hover state */
                    hoverClass: "hover",

                    /* css class for the focus state */
                    focusClass: "focus-content",

                    /* css class for the open state */
                    openClass: "open hover-content",
                });
            });
        </script>

        <script>
            $(document).ready(function () {
                var wi = $(window).width();
                if (wi < 769) {
                    $("#printable_area td").removeAttr("style");
                    $("#printable_area td p").css("width", "100%");
                }
            });
            $(".meganizr .mzr-drop").keyup(function () {
                $(".mzr-content").attr("aria-hidden", "true");
                $(this).find(".mzr-content").attr("aria-hidden", "false");
            });
            // ============ start tile for <a> and alt for img ========
            $("a").each(function () {
                $(this).attr("title", $(this).text());
            });

            var lan = "bn";
            if (lan == "en") {
                $(".mzr-drop a:first-child").each(function () {
                    $(this).attr("title", "Enter to get more menu");
                });
            } else {
                $(".mzr-drop a:first-child").each(function () {
                    $(this).attr("title", "সাবমেনুর জন্য ক্লিক করুন");
                });
            }
            $("img").each(function () {
                var str = $(this).attr("src");
                var arr = str.split("/");
                var strFine = arr[arr.length - 1];

                var str2 = strFine;
                var arr2 = str2.split(".");
                var strFine2 = arr2[arr2.length - 2];
                $(this).attr("alt", strFine2);
            });
            $("a2iLogo").attr("alt", "Access to information");
            $(".service-box img").each(function () {
                var strTitle = $(this).parent().find("h4").text();
                $(this).attr("alt", strTitle);
            });
            $(".block img").each(function () {
                var strTitleRight = $(this).closest(".block").find(".title").text();
                $(this).attr("alt", strTitleRight);
            });
            $("#notice-board-ticker .btn").attr("title", "সকল নোটিশ");
            $("#news-ticker .btn").attr("title", "সকল খবর");
            $("#search").each(function () {
                $(this).attr("alt", "Search");
            });
            $(".search-btn").each(function () {
                $(this).attr("alt", "Enter to search");
            });
            // ============ end tile for <a> and alt for img ========

            // =============== start dropdown design =======
            $(".mzr-content").mouseout(function () {
                // $(this).hide();
            });
            $(".submenu").mouseover(function () {
                //$('.mzr-content').show();
            });
            $(".mzr-content").mouseover(function () {
                //$(this).show();
            });
            // =============== End dropdown design =======
        </script>
    </body>
</html>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-XL3REV1DHW"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag() {
        dataLayer.push(arguments);
    }
    gtag("js", new Date());

    gtag("config", "G-XL3REV1DHW");
    gtag("event", "www.dshe.gov.bd (Frontend)", {
        event_category: "Frontend",
    });
</script>
