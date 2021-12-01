<div class="sixteen columns" id="jmenu">
    <div class="sixteen columns">
        <a href="javascript:;" class="show-menu menu-head"> মেনু নির্বাচন করুন</a>
        <div role="navigation" id="dawgdrops">
            <ul class="meganizr mzr-slide mzr-responsive">
                <!-- Build The Menu -->
                <li class="col0"><a class="home-icon" title="Home" href="/" style=" margin-top: 5px;"></a></li>
                @foreach ($menuitems as $menuitem)

                    @if($menuitem->childs->isEmpty())
                    <li class="col1 mzr-drop">
                        <a href="{{$menuitem->slug}}" class="submenu">{{$menuitem->title}}</a>
                    </li>
                    @else
                    <li class="col1 mzr-drop">
                        <a href="{{$menuitem->slug}}" class="submenu">{{$menuitem->title}}</a>
                            {{-- <div class="one-col"> --}}
                                <ul class="mzr-links">
                                    @foreach ($menuitem->childs as $item)
                                    <li><a href="{{$item->slug}}">{{$item->title}}</a></li>
                                    @endforeach
                                </ul>
                            {{-- </div> --}}
                    </li>
                    @endif

                @endforeach
            </ul>
        </div>
    </div>
</div>
