@extends(Config::get('config.template').'.layouts.frontend.app')
@section('content')
<section id="breadcrumbRow" class="row">
       
        <div class="row pageTitle m0">
            <div class="container">
                <h4 class="fleft">Products</h4>
                <ul class="breadcrumb fright">
                    <li><a href="{{URL::to('/')}}">home</a></li>
                    @if(Input::get('id'))
                    <li><a href="{{URL::to('categories')}}">Product Categories</a></li>
                    @endif
                    <li class="active">Products</li>
                </ul>
            </div>
        </div>
    </section>
<section class="row contentRowPad">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    @if(count($blogs)>0)
                    <div class="row">
                        <?php
                        $i=0;
                        ?>
                        @foreach($blogs as $blog)
                <div class="col-sm-4 product2">
                    <div class="row m0 thumbnail">
                        <div class="row m0 imgHov">
                            <?php
                            ++$i;
                            ?>
                            @if(count($blog->images)>0)
                            @foreach($blog->images as $image)
                            @if($image->ismain==1)
                           
                            <img src="{{asset('uploads/products/'.$image->image)}}" alt="{!!$blog->name!!}">
                            @endif
                            @endforeach
                            @endif
                            
                            <div class="hovArea row m0">
                                <div class="links row m0">
                                    <a href="{{URL::to('product/'.$blog->slug)}}"><i class="fa fa-link"></i></a>
                                    @if(count($blog->images)>0)
                            @foreach($blog->images as $image)
                           
                           
                            <a href="{{asset('uploads/products/'.$image->image)}}" data-lightbox="product{{$i}}" data-title="{!!$blog->name!!}"><i class="fa fa-expand"></i></a>
                            
                            @endforeach
                            @endif
                                    
                                </div>
                                <div class="row m0 getlike">
                                    <a href="{{URL::to('product/'.$blog->slug)}}" class="fleft"><i class="fa fa-shopping-cart"></i> Detail</a>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="row m0 productIntro">
                            <h5 class="heading"><a href="{{URL::to('product/'.$blog->slug)}}">{!!$blog->name!!}</a> <span><!--<del>$240</del>--> ${{$blog->price}}</span></h5>
                            <h5 class="proCat">{!!$blog->category->name!!}</h5>
                                                      
                            
                        </div>
                    </div>
                </div> <!--Product 2-->
               @endforeach
            </div>
                    <div class="row">{{ $blogs->appends(Input::all())->links() }}</div>
                    @endif
                </div>
                <div class="col-sm-4">
                    <div class="row m0 sidebar">
                        <form method="get" action="{{URL::to('products')}}" class="searchForm row m0">
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
                                <li class="active"><a href="{{URL::to('products?id='.$bcategory->id)}}"> {!!$bcategory->name!!}</a></li>
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