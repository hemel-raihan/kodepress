@extends('frontend_theme.default.front_layout.index')

@section('styles')
<link rel="stylesheet" href="{{ asset('frontend/css/jquery.dataTables.min.css')}}" />
@endsection

@section('frontscripts')

{{-- <script src="https://code.jquery.com/jquery-3.3.1.js"></script> --}}
<script src="{{ asset('frontend/js/jquery.dataTables.min.js') }}"></script>
{{-- print --}}
<script type="text/javascript">
    function print_content() {
        var html_content = $("#printable_area").html();

        newwindow = window.open();
        newdocument = newwindow.document;
        newdocument.write(html_content);
        newdocument.close();

        newwindow.print();

        return false;
    }
</script>

@endsection

@section('bodycontent')
<div class="accessibilityDesign" id="accessibilityDesign" title="লিখার রঙ ও সাইজ পরিবর্তন করুন">
    <div class="textSize">
        <span>Text size</span>
        <span title="Small font" class="font-small" onclick="fontSize(12)">A</span>
        <span title="Medium font" class="font-medium" onclick="fontSize(20)">A</span>
        <span title="Large font" class="font-large" onclick="fontSize(25)">A</span>
    </div>
    <div class="textBg">
        <span>Color</span>
        <span title="Bancground white text black" class="color-1" onclick="fontBgColor('fff','000')">C</span>
        <span title="Bancground blue text black" class="color-2" onclick="fontBgColor('cfe5fc','21205f')">C</span>
        <span title="Bancground black text yellow" class="color-3" onclick="fontBgColor('2f2f2f','ffff00')">C</span>
        <span title="Bancground grey text blue" class="color-4" onclick="fontBgColor('f7f3d6','000066')">C</span>
    </div>
</div>

<script>
    function fontSize(size) {
        var Size = size;
        $("#left-content").css({ "font-size": Size + "px" });
        $("#left-content div").css({ "font-size": Size + "px" });
        $("#left-content p").css({ "font-size": Size + "px" });
        $("#left-content a").css({ "font-size": Size + "px" });
        $("#left-content h1").css({ "font-size": Size + "px" });
        $("#left-content h2").css({ "font-size": Size + "px" });
        $("#left-content h3").css({ "font-size": Size + "px" });
        $("#left-content h4").css({ "font-size": Size + "px" });
        $("#left-content h5").css({ "font-size": Size + "px" });
        $("#left-content h6").css({ "font-size": Size + "px" });
        $("#left-content span").css({ "font-size": Size + "px" });
    }
    function fontBgColor(bgColor, fontColor) {
        var FontColor = fontColor;
        var BgColor = bgColor;
        $("#left-content").css({ "background-color": "#" + BgColor, color: "#" + FontColor });
        $("#left-content div").css({ "background-color": "#" + BgColor, color: "#" + FontColor });
        $("#left-content a").css({ "background-color": "#" + BgColor, color: "#" + FontColor });
        $("#left-content p").css({ "background-color": "#" + BgColor, color: "#" + FontColor });
        $("#left-content span").css({ "background-color": "#" + BgColor, color: "#" + FontColor });
        $("#left-content h1").css({ "background-color": "#" + BgColor, color: "#" + FontColor });
        $("#left-content h2").css({ "background-color": "#" + BgColor, color: "#" + FontColor });
        $("#left-content h3").css({ "background-color": "#" + BgColor, color: "#" + FontColor });
        $("#left-content h4").css({ "background-color": "#" + BgColor, color: "#" + FontColor });
        $("#left-content h5").css({ "background-color": "#" + BgColor, color: "#" + FontColor });
        $("#left-content h6").css({ "background-color": "#" + BgColor, color: "#" + FontColor });
    }
</script>
<div class="twelve columns" id="left-content">
    <div id="div-view-pagination-moedu_office_order">
        <div style="float: right;" id="print_btn_div"><img src="{{ asset('frontend/images/print_btn.png') }}" style="cursor: pointer;" onclick="print_content();" width="24" title="প্রিন্ট" /></div>
        <div id="printable_area">

            <h3>কলেজ</h3>
            <hr />
            <table class="bordered" id="example">
                <thead>
                    <tr>
                        <th width="5%">ইস্যু নং</th>
                        <th width="15%">শাখার নাম</th>
                        <th width="50%">বিষয়</th>
                        <th width="20%">প্রকাশের তারিখ</th>
                        <th width="10%">ডকুমেন্ট</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>৬৯৬</td>
                        <td>সরকারি কলেজ-৪</td>
                        <td>
                            <a href="/site/moedu_office_order/9b1097df-97a3-46af-bf5b-fa02ea07e59d">মাতৃত্বকালীন ছুটি প্রসঙ্গে (৬৯৬)</a>
                        </td>
                        <td>2021-12-02</td>

                        <td>
                            ডাউনলোড:
                            <div>
                                <a href="//dshe.portal.gov.bd/sites/default/files/files/dshe.portal.gov.bd/moedu_office_order/41316186_8172_4450_84b9_e61a71bceb54/Maternity Leave 696.pdf" title="Maternity Leave 696.pdf">
                                    <img src="{{ asset('frontend/images/pdf2.png') }}" alt="Maternity Leave 696.pdf" class="file-icon" />
                                </a>
                            </div>
                        </td>
                    </tr>

                    


                </tbody>
            </table>
            <br />
            <p>
                আ্কাইভ <a class="archive" href="/site/view/moedu_office_order-archive/কলেজ"><u>ক্লিক করুন</u> </a>
            </p>
            <style>
                #example_length {
                    display: none;
                }
                #example_filter {
                    margin-bottom: 15px;
                }
            </style>
            <script>
                $(document).ready(function () {
                    $("#example").dataTable({
                        ordering: false,
                    });
                });
            </script>
        </div>
    </div>

    <div id="share-buttons" style="clear: both;">
        <br />
        <p>
            <b>Share with :</b>
        </p>

        <!-- Facebook -->
        <a
            href="http://www.facebook.com/sharer.php?u=http%3A%2F%2Fdshe.portal.gov.bd%2Fsite%2Fview%2Fmoedu_office_order%2F%25E0%25A6%2595%25E0%25A6%25B2%25E0%25A7%2587%25E0%25A6%259C&quote=কলেজ - মাধ্যমিক ও উচ্চশিক্ষা অধিদপ্তর-"
            target="_blank"
        >
            <img src="/themes/responsive_npf/img/facebook.png " alt="Facebook " />
        </a>
        <a
            href="https://twitter.com/intent/tweet?url=http%3A%2F%2Fdshe.portal.gov.bd%2Fsite%2Fview%2Fmoedu_office_order%2F%25E0%25A6%2595%25E0%25A6%25B2%25E0%25A7%2587%25E0%25A6%259C&text=কলেজ - মাধ্যমিক ও উচ্চশিক্ষা অধিদপ্তর-"
            target="_blank"
        >
            <img src="/themes/responsive_npf/img/twitter.png" alt="Facebook" />
        </a>
    </div>
</div>
@endsection