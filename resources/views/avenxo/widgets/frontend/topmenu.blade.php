<div class="collapse navbar-collapse" id="mainNav">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="{{URL::to('/')}}">Home</a></li>
                        @foreach ($menues as $menu)
                        @if($menu->parent_id==0)
                        @if(count($menu->children)>0)
                        <?php 
                        $i=0;
                        foreach($menu->children as $children){
                            if($children->showfront==1)
                                ++$i;
                        }
                        ?>
                        @if($i>0)
                        <li class="dropdown">
                            <a href="@if(empty($menu->front_link)){{'javascript:;'}}@else{{URL::to($menu->front_link)}}@endif" >{{$menu->title}}</a>
                            <ul class="dropdown-menu" role="menu">
                                @foreach($menu->children as $children)
                                @if($children->showfront==1)
                                <li><a href="@if(empty($children->front_link)){{'javascript:;'}}@else{{URL::to($children->front_link)}}@endif">{{$children->title}}</a></li>
                                @endif
                                @endforeach
                               
                            </ul>
                        </li>
                        @else 
                        <li><a href="@if(empty($menu->front_link)){{'javascript:;'}}@else{{URL::to($menu->front_link)}}@endif" @if(empty($menu->front_link)) class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" @endif>{{$menu->title}}</a></li>
                        @endif
                        @endif
                        
                        @endif 
                        @endforeach 
                        
                    </ul>              
                </div><!-- /.navbar-collapse -->