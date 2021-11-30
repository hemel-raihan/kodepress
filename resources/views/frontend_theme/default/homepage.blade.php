@extends('frontend_theme.default.front_layout.index')

@section('styles')


@endsection

@section('bodycontent')

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

@endsection('content')

@section('scripts')

@endsection
