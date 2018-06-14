@extends(Config::get('config.template').'.layouts.frontend.app')
@section('content')
<section id="breadcrumbRow" class="row">
       
        <div class="row pageTitle m0">
            <div class="container">
                <h4 class="fleft">{{$blog->title}}</h4>
                <ul class="breadcrumb fright">
                    <li><a href="{{URL::to('/')}}">home</a></li>
                    
                    <li><a href="{{URL::to('news')}}">News</a></li>
                    <li class="active">{{$blog->title}}</li>
                    
                </ul>
            </div>
        </div>
    </section>
<section class="row contentRowPad">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    @if(count($blog)>0)
                       
                            <div class="blog row m0">
                                <div class="row m0 featureImg">
                                    <img title="{{$blog->title}}" src="@if(!empty($blog->picture)){{asset('uploads/news/'.$blog->picture)}}@else{{asset('assets/image.png')}}@endif"  />
                                </div>
                                <div class="row m0 titleRow">
                                    <div class="fleft date">{{date('d',strtotime($blog->created_at))}}<span>{{date('M',strtotime($blog->created_at))}}</span> {{date('y',strtotime($blog->created_at))}}</div>
                                    <div class="fleft titlePart">
                                        <a href="{{URL::to('news/'.$blog->slug)}}"><h4 class="blogTitle heading">{!!$blog->title!!}</h4></a>
                                       
                                        <p class="m0">By <a href="#">{{$blog->users->username}}</a><!--<span>|</span><a href="#">5 Comments</a>--></p>
                                    </div>
                                </div>
                                <div class="row m0 excerpt">
                                    {!!$blog->description!!}
                                </div>
                            </div> <!--Blog Row End-->
                        
                        
                    @endif
                    
                </div>
                <div class="col-sm-4">
                    <div class="row m0 sidebar">
                         <form method="get" action="{{URL::to('news')}}" class="searchForm row m0">
                            <div class="input-group">
                                <input class="form-control" id="search" name="search" placeholder="Search" type="search">
                                <span class="input-group-addon p0">
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                </span>
                            </div>
                        </form> <!--Shortcode Element-->
                        @if(count($categories)>0)
                        <div class="row m0 categories">
                            <h4 class="heading">categories</h4>
                            <ul class="list-unstyled">
                                @foreach($categories as $bcategory)
                                <li class="active"><a href="{{URL::to('news?id='.$bcategory->id)}}"> {!!$bcategory->name!!}</a></li>
                                @endforeach
                                
                            </ul>
                        </div>  <!--Shortcode Element-->
                        @endif
                        <!--
                        <div class="row m0 latestPosts">
                            <h4 class="heading">Latest post</h4>
                            <div class="media latestPost">
                                <div class="media-left">
                                    <a href="#">
                                        <img src="images/blog/lt1.png" alt="">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h5 class="heading">you can contribute</h5>
                                    <p>Dec 14, 2014</p>
                                </div>
                            </div>
                            <div class="media latestPost">
                                <div class="media-left">
                                    <a href="#">
                                        <img src="images/blog/lt2.png" alt="">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h5 class="heading">best site for sofas</h5>
                                    <p>Dec 14, 2014</p>
                                </div>
                            </div>
                            <div class="media latestPost">
                                <div class="media-left">
                                    <a href="#">
                                        <img src="images/blog/lt3.png" alt="">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h5 class="heading">entertainment weeks</h5>
                                    <p>Dec 14, 2014</p>
                                </div>
                            </div>
                            <div class="media latestPost">
                                <div class="media-left">
                                    <a href="#">
                                        <img src="images/blog/lt4.png" alt="">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h5 class="heading">people you may know</h5>
                                    <p>Dec 14, 2014</p>
                                </div>
                            </div>
                            <div class="media latestPost">
                                <div class="media-left">
                                    <a href="#">
                                        <img src="images/blog/lt5.png" alt="">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h5 class="heading">manufacture tips -1</h5>
                                    <p>Dec 14, 2014</p>
                                </div>
                            </div>
                        </div> 
                        
                        
                        <div class="row m0 tags">
                            <h4 class="heading">tags</h4>
                            <ul class="nav tagsNav">
                                <li><a href="#">Art</a></li>
                                <li><a href="#">Beauty</a></li>
                                <li><a href="#">Business</a></li>
                                <li><a href="#">Gallery</a></li>
                                <li><a href="#">Games</a></li>
                                <li><a href="#">Images</a></li>
                                <li><a href="#">People</a></li>
                                <li><a href="#">Travelling</a></li>
                            </ul>
                        </div>
                        -->
                        
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection