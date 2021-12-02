@extends('frontend_theme.default.front_layout.index')

@section('styles')


@endsection

@section('bodycontent')


    <div class="twelve columns" id="left-content">
        <div class="row mainwrapper">

            <div class="pm">
                <a href="https://www.youtube.com/watch?v=v1R-CB3e-pw" target="_blank">
                    <img src="{{ asset('uploads/slide_image/'.$banner_img->slideimage) }}" />
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
                @foreach ($categories as $key => $category)
                @if($category->status == true)
                    @if($category->parent_id == 0)
                    <div id = "{{ ($key%2 == 0) ? 'box-1' : 'box-2' }}" style="margin-bottom: 20px;" class="six columns service-box box">
                        <h4>{{$category->name}}</h4>
                        <img src="{{asset('uploads/categoryphoto/'.$category->image)}}" alt="" width="110" height="" />
                        <ul class="caption fade-caption" style="margin: 0;">
                            @if($category->childrenRecursive->count()>0)
                            @foreach($category->childrenRecursive as $cat)
                            <li><a href="/site/view/office_order/অফিস-আদেশ">{{$cat->name}}</a></li>
                            @endforeach
                            @endif
                        </ul>
                    </div>
                    @endif
                @endif
                @endforeach

                {{-- @foreach ($categories as $key => $category)
                @if ($key % 2 != 0)
                <div  class="six columns service-box box">
                    <h4>অর্থ ও ক্রয়</h4>
                    <img src="//www.dshe.gov.bd/sites/default/files/files/dshe.portal.gov.bd/front_service_box/f8deef29_16bf_4346_a5c4_2306e2222329/budget.png" alt="" width="110" height="" />
                    <ul class="caption fade-caption" style="margin: 0;">
                        <li><a href="/site/view/moedu_office_order/অর্থ ও ক্রয়/আদেশ">আদেশ</a></li>
                        <li><a href="/site/view/tenders/টেন্ডার-ও-কোটেশান">টেন্ডার ও কোটেশান</a></li>
                        <li><a href="/site/page/a7e48543-65b5-4235-9ddb-f5a0156700cc/বাজেট">বাজেট</a></li>
                        <li><a href="/site/page/3e1fe7c3-b7d1-40a8-ab21-640479498b5c/বার্ষিক-ক্রয়-পরিকল্পনা">বার্ষিক ক্রয় পরিকল্পনা</a></li>
                    </ul>
                </div>
                @endif
                @endforeach --}}


            </div>
            <style></style>
            <script></script>
            <div class="column block">
                <h5 class="bk-org title">
                    ভিডিও
                </h5>
                @foreach ($randomvideos as $randomvideo)
                @if($randomvideo->status == true)
                <p>&nbsp;<iframe frameborder="1" height="350" src="{{$randomvideo->url}}" width="720"></iframe></p>
                @endif
                @endforeach

                <p></p>
            </div>
            <style>
                #right-content .block {
                    display: block !important;
                }
            </style>
            <script></script>
            {{-- <div class="column block">
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
            </div> --}}
            <style>
                #right-content .block {
                    display: block !important;
                }
            </style>
            <script></script>
            {{-- <div class="column block">
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
            </div> --}}
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
                            @foreach ($othersvideos as $othersvideo)
                            @if($othersvideo->status == true)
                            <td style="text-align: center;">
                                <p><iframe frameborder="0" height="200" src="{{$othersvideo->url}}" width="340"></iframe></p>

                                <p><strong>{{$othersvideo->title}}</strong></p>
                            </td>
                            @endif
                            @endforeach
                            {{-- <td style="text-align: center;">
                                <p><iframe frameborder="0" height="200" src="https://www.youtube.com/embed/GT9ShGE_qjg" width="340"></iframe></p>

                                <p><strong>বন্যার সময় কি করণীয়</strong></p>
                            </td> --}}
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

@endsection

@section('scripts')

@endsection
