
<section id="featureProducts" class="row contentRowPad">
    <div class="bs-example bs-example-tabs container" role="tabpanel" data-example-id="togglable-tabs">
        <ul id="myTab" class="nav nav-tabs nav-tabs-responsive" role="tablist">
            @if(count($products)>0)
            <li role="presentation" class="active">
                <a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">
                    <span class="text">Products</span>
                </a>
            </li>
            @endif
            @if(count($news)>0)
            <li role="presentation" class="next">
                <a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">
                    <span class="text">News</span>
                </a>
            </li>
            @endif
            
        </ul>
        <div id="myTabContent" class="tab-content">
            <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">

               <div class="row top10">
                     @if(count($products)>0)
                    @foreach($products as $product)
                    <?php $pimage =Itemimage::where('product_id',$product->id)->where('ismain',1)->first();?>
                    <div class="col-sm-3 product">
                        <div class="productInner row m0">
                            <div class="row m0 imgHov">
                                @if(isset($pimage->image))<img src="{{asset('uploads/products/'.$pimage->image)}}" alt="">@endif
                                <div class="row m0 hovArea">
                                    
                                    <div class="row m0 proType"><a href="#">{!!date('d M, Y',strtotime($product->created_at))!!}</a></div>
                                    
                                    <div class="row m0 proPrice"><i class="fa fa-usd"></i>{{$product->price}}</div>
                                </div>
                            </div>
                            <div class="row m0 proName"><a href="single-product.html">{!!$product->name!!}</a></div>
                            
                        </div>
                    </div>
                    @endforeach
                    @endif
                </div>

            </div>
            <div role="tabpanel" class="tab-pane fade" id="profile" aria-labelledby="profile-tab">
                <div class="row top10">
                    @if(count($news)>0)
                    @foreach($news as $new)
                    <div class="col-sm-3 product">
                        <div class="productInner row m0">
                            <div class="row m0 imgHov">
                                <img src="{{asset('uploads/news/'.$new->picture)}}" alt="">
                                <div class="row m0 hovArea">
                                   
                                    <div class="row m0 proType"><a href="#">{!!date('d M, Y',strtotime($new->created_at))!!}</a></div>
                                    
                                    
                                </div>
                            </div>
                            <div class="row m0 proName"><a href="single-product.html">{!!$new->title!!}</a></div>
                            
                        </div>
                    </div>
                    @endforeach
                    @endif
                    
                </div>

            </div>
           
        </div>
    </div>

</section> <!--Feature Products 4 Collumn-->