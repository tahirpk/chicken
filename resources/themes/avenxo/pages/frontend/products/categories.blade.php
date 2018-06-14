@extends(Config::get('config.template').'.layouts.frontend.app')
@section('content')
<section id="breadcrumbRow" class="row">
       
        <div class="row pageTitle m0">
            <div class="container">
                <h4 class="fleft">Product Categories</h4>
                <ul class="breadcrumb fright">
                    <li><a href="{{URL::to('/')}}">home</a></li>
                    <li class="active">Product Categories</li>
                </ul>
            </div>
        </div>
    </section>
<section class="row contentRowPad">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    @if(count($categories)>0)
                    <div class="row">
                        <?php
                        $i=0;
                        ?>
                        @foreach($categories as $category)
                <div class="col-sm-4 product2">
                    <div class="row m0 thumbnail">
                        <a href="{{URL::to('products?id='.$category->id)}}">
                            <img src="{{asset('uploads/products/categories/'.$category->image)}}" alt="{!!$category->name!!}">
                        </a>
                        <div class="row m0 productIntro">
                            <h5 class="heading"><a href="{{URL::to('products?id='.$category->id)}}">{!!$category->name!!}</a> </h5>
                        </div>
                    </div>
                </div> <!--Product 2-->
               @endforeach
            </div>
                   @endif
              
            </div>
        </div>
    </section>


@endsection