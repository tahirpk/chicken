<?php
 $currentPath= Route::getFacadeRoot()->current()->uri();
 $exparray=explode('/',$currentPath);
 $urljoint="";
 if(count($exparray)>2){
     $urljoint=$exparray[0].$exparray[1].$exparray[2];
 }
 function checkmenuselection($pathvar,$selectionpoint){
     
     foreach($selectionpoint as $selected){
         
         if((string)$pathvar==(string)$selected){
             
          return 'yes';
          break;
         }
     }
     
 }
?>
@foreach ($menues as $menu)

@if($menu->parent_id==0)
<li id="{{$menu->id}}"><a href="@if(empty($menu->url)){{'javascript:;'}}@else{{URL::to($menu->url)}}@endif">@if(!empty($menu->font_awsom))<i class="{{$menu->font_awsom}}"></i> @endif<span>{{$menu->title}}</span></a>
    @if(count($menu->children)>0)
    
    <ul class="acc-menu @if(checkmenuselection($urljoint,explode(',',$menu->selection))=='yes') open @endif" id="sortable{{$menu->id}}">
            @foreach($menu->children as $children)
            <li id="{{$children->id}}"><a href="@if(empty($children->url)){{'javascript:;'}}@else{{URL::to($children->url)}}@endif">@if(!empty($children->font_awsom))<i class="{{$children->font_awsom}}"></i>@endif <span>{{$children->title}}</span></a>
                @if(count($children->children)>0)
                
                <ul class="acc-menu @if(checkmenuselection($urljoint,explode(',',$children->selection))){{'open'}}@endif" id="sortable{{$children->id}}">
                    @foreach($children->children as $child)
                    <li id="{{$child->id}}"  @if(checkmenuselection($urljoint,explode(',',$child->selection))){{'class="active"'}}@endif><a href="@if(empty($child->url)){{'javascript:;'}}@else{{URL::to($child->url)}}@endif">@if(!empty($child->font_awsom))<i class="{{$child->font_awsom}}"></i>@endif <span>{{$child->title}}</span></a></li>
                    @endforeach
                </ul>
                    
                
                @endif
                </li>
            @endforeach
        </ul>
    @endif
    
    
</li>
@endif
@endforeach