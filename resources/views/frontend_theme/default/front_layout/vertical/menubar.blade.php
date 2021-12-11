<div class="sixteen columns" id="jmenu">
    <div class="sixteen columns">
        <a href="javascript:;" class="show-menu menu-head"> মেনু নির্বাচন করুন</a>
        <div role="navigation" id="dawgdrops">
            <ul class="meganizr mzr-slide mzr-responsive">
                <!-- Build The Menu -->
                <li class="col0"><a title="Home" href="{{route('home')}}" class="home-icon" style="margin-top: 5px;"></a></li>
                @foreach ($menuitems as $menuitem)
                @if($menuitem->childs->isEmpty())
                <li class="col1 mzr-drop">
                    <a href="{{route('page',$menuitem->slug)}}" style="font-family: Sans-serif;" class="submenu">{{$menuitem->title}}</a>
                </li>


                @else

                {{-- {{foreach($menuitem->childs as $item){($item->childs->isEmpty()) ? 'one' : 'four')} }} --}}

                {{-- <li class="col1 mzr-drop">
                    <a href="#" class="submenu">{{$menuitem->title}}</a>
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
                </li> --}}



                <li class="col1 mzr-drop">
                    <a href="#" style="font-family: Sans-serif;" class="submenu">{{$menuitem->title}}</a>
                    @foreach ($menuitem->childs as $itemm)

                    @endforeach
                    @if ($itemm->childs->isEmpty())
                    <div class="mzr-content drop-one-columns">
                         @foreach ($menuitem->childs as $item)
                         @if ($item->childs->isEmpty())
                         <div class="one-col">
                            <a href="{{route('page',$item->slug)}}" style="font-family: Sans-serif;"> {{$item->title}}</a>
                        </div>
                         @endif
                        @endforeach
                    </div>
                    @else
                    <div class="mzr-content drop-{{($menuitem->childs->count()>=6) ? 'six' : 'four' }}-columns">
                        @foreach ($menuitem->childs as $item)
                        <div class="one-col">
                            <h6 style="font-family: Sans-serif;">{{$item->title}}</h6>
                            @if($item->childs->count()>0)
                            @include('frontend_theme.default.front_layout.vertical.child', ['sub_category' => $item])
                            @endif
                        </div>
                        @endforeach
                    </div>
                    @endif

                </li>



                @endif
                @endforeach
            </ul>
        </div>
    </div>
</div>
