@foreach($children as $submenu)
    <ul class="list-links">
        @if(count($submenu->children))
            <li style="color: #c1e2b3; font-family: 'Arial-Black'">{{$submenu->Title}}</li>
            <ul class="list-links">
                @include('home.MenuTree',['children' => $submenu->children])
            </ul>
            <hr>
        @else
            <li><a href="{{route('menucontent',['id'=>$submenu->id, 'slug'=>$submenu->Title])}}">{{$submenu->Title}}</a></li>
        @endif
    </ul>
@endforeach
