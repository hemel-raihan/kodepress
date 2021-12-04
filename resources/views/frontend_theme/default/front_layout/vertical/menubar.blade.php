<div class="sixteen columns" id="jmenu">
    <div class="sixteen columns">
        <a href="javascript:;" class="show-menu menu-head"> মেনু নির্বাচন করুন</a>
        <div role="navigation" id="dawgdrops">
            <ul class="meganizr mzr-slide mzr-responsive">
                <!-- Build The Menu -->
                <li class="col0"><a title="Home" href="/" class="home-icon" style="margin-top: 5px;"></a></li>
                @foreach ($menuitems as $menuitem)
                @if($menuitem->childs->isEmpty())
                <li class="col1 mzr-drop">
                    <a href="{{route('page',$menuitem->slug)}}" class="submenu">{{$menuitem->title}}</a>
                </li>

                {{-- @elseif($menuitem->childs->count()==4)
                <li class="col1 mzr-drop">
                    <a href="{{$menuitem->slug}}" class="submenu">{{$menuitem->title}}</a>
                        <div class="one-col">
                            <ul class="mzr-links">
                                @foreach ($menuitem->childs as $item)
                                <li><a href="{{route('page',$item->slug)}}">{{$item->title}}</a></li>
                                @endforeach
                            </ul>
                         </div>
                </li> --}}

                @else


                <li class="col1 mzr-drop">
                    <a href="{{route('page',$menuitem->slug)}}" class="submenu">{{$menuitem->title}}</a>
                    <div class="mzr-content drop-{{($menuitem->childs->count()==2) ? 'two' : (($menuitem->childs->count()==3) ? 'three' : 'four') }}-columns">
                        @foreach ($menuitem->childs as $item)
                        <div class="one-col">
                            <a href="{{route('page',$item->slug)}}"> <h6>{{$item->title}}</h6></a>
                            @if($item->childs->count()>0)
                            @include('frontend_theme.default.front_layout.vertical.child', ['sub_category' => $item])
                            @endif
                        </div>
                        @endforeach
                    </div>
                </li>

                @endif
                @endforeach
            </ul>
        </div>
    </div>
</div>
