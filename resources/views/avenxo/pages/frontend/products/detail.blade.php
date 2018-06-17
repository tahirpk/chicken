@extends(Config::get('config.template').'.layouts.frontend.app')
@section('content')
<section id="breadcrumbRow" class="row">
       
        <div class="row pageTitle m0">
            <div class="container">
                <h4 class="fleft">{{$blog->name}}</h4>
                <ul class="breadcrumb fright">
                    <li><a href="{{URL::to('/')}}">home</a></li>
                    <li><a href="{{URL::to('products')}}">Products</a></li>
                    <li class="active">{{$blog->name}}</li>
                    
                </ul>
            </div>
        </div>
    </section>
<section class="row contentRowPad">
        <div class="container">
           <div class="row singleProduct">
               @if(count($blog->images)>0) 
               
               <div class="col-sm-7">
                    <div class="row m0 flexslider" id="productImageSlider">
                        <div class="flex-viewport" style="overflow: hidden; position: relative;"><ul class="slides" style="width: 1200%; transition-duration: 0s; transform: translate3d(-1959px, 0px, 0px);">
                                @foreach($blog->images as $pimage)
                                <li style="width: 653px; float: left; display: block;" class="@if($pimage->ismain==1){{'flex-active-slide'}}@endif"><img src="{{asset('uploads/products/'.$pimage->image)}}" alt="" draggable="false"></li>
                                @endforeach
                                
                            </ul>
                        </div>
                    </div>
                    <div class="row m0 flexslider" id="productImageSliderNav">
                        
                    <div class="flex-viewport" style="overflow: hidden; position: relative;"><ul class="slides" style="width: 1200%; transition-duration: 0s; transform: translate3d(0px, 0px, 0px);">
                            @foreach($blog->images as $pimage)
                                <li style="width: 653px; float: left; display: block;" class="@if($pimage->ismain==1){{'flex-active-slide'}}@endif"><img src="{{asset('uploads/products/'.$pimage->image)}}" alt="" draggable="false"></li>
                                @endforeach
                            
                        </ul></div><ul class="flex-direction-nav"><li class="flex-nav-prev"><a class="flex-prev flex-disabled" href="#" tabindex="-1"><i class="fa fa-angle-left"></i></a></li><li class="flex-nav-next"><a class="flex-next" href="#" tabindex="-1"><i class="fa fa-angle-right"></i></a></li></ul></div>
                </div>
               @endif
                <div class="col-sm-5">
                    <div class="row m0">
                        <h4 class="heading">{!!$blog->name!!}</h4>
                        <h3 class="heading price"><del>${{$blog->actualprice}}</del>${{$blog->price}}</h3>
                        <div class="row m0 starsRow">
                            
                            
                        </div>
                        
                        <div class="row m0 shortDesc">
                            <p class="m0">{!!$blog->short_description!!}</p>
                        </div>
                        
                        <div class="row m0 qtyAtc">
                            <div class="fleft quantity">
                                <div class="fleft">Available Qty <span>=</span>{{$blog->quantity}}</div>
                               
                            </div>
                            
                        </div>
                    </div>
                    
                </div>
               
            </div>
            <div class="row m0 tabRow">
                <ul class="nav nav-tabs" role="tablist" id="shortcodeTab">
                    <li role="presentation" class="active"><a href="#description" aria-controls="description" role="tab" data-toggle="tab" aria-expanded="true">
                        <i class="fa fa-align-left"></i> description
                    </a></li>
                    <!--<li role="presentation" class=""><a href="#review" aria-controls="review" role="tab" data-toggle="tab" aria-expanded="false">
                        <i class="fa fa-thumbs-up"></i> review (1)
                    </a></li>
                    <li role="presentation" class=""><a href="#additionInfo" aria-controls="additionInfo" role="tab" data-toggle="tab" aria-expanded="false">
                        <i class="fa fa-file-text"></i> Additional Information
                    </a></li>-->
                </ul>
                <div class="tab-content shortcodeTabContent">
                    <div role="tabpanel" class="tab-pane row m0 active" id="description">
                        <div class="fleft img"><img src="images/product/tab-desc.png" alt=""></div>
                        <div class="fleft desc">
                            <h5 class="heading">Product Details</h5>
                            {!!$blog->description!!}
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>


@endsection