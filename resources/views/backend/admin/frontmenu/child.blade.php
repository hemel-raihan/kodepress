<ol class="dd-list">
    @foreach($itemm->childs as $childItem)
<li class="dd-item" data-id="{{$childItem->id}}">

    <div class="pull-right item_actions">
        @if($auth->hasPermission('app.front.menuitems.edit'))
   <a href="{{route('admin.menuitem.edit',['id'=>$menu->id, 'menuId'=>$childItem->id])}}" class="btn btn-success">
    <i class="fa fa-edit"></i>
    </a>
    @endif

   {{-- @if($auth->hasPermission('app.front.menuitems.destroy')) --}}
   <a class="btn btn-danger waves effect" href="{{route('admin.menuitem.destroy',['id'=>$menu->id, 'menuId'=>$childItem->id])}}" >
       <i class="fa fa-trash"></i>
</a>
       {{-- <form id="deleteform-{{$childItem->id}}" action="{{route('admin.menuitem.destroy',['id'=>$menu->id, 'menuId'=>$childItem->id])}}" method="POST" style="display: none;">
       @csrf
       @method('DELETE')
       </form> --}}

       {{-- @endif --}}
    </div>

    <div class="dd-handle">
        @if($childItem->type == 'divider')
        <strong> Divider: {{$childItem->divider_title }}</strong>
        @else
        <span> {{$childItem->title }}</span>
        <small class="url">{{$childItem->url}}</small>
        @endif
    </div>

    @if($itemm->childs->count()>0)
    @include('backend.admin.frontmenu.child', ['itemm' => $childItem])
    @endif

</li>
@endforeach
</ol>
