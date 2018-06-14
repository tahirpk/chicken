@extends(Config::get('config.template').'.layouts.frontend.app')
@section('content')
@if(!empty($page))
<section id="breadcrumbRow" class="row">
       
        <div class="row pageTitle m0">
            <div class="container">
                <h4 class="fleft">{{$page->title}}</h4>
                <ul class="breadcrumb fright">
                    <li><a href="{{URL::to('/')}}">home</a></li>
                    <li class="active">{{$page->title}}</li>
                </ul>
            </div>
        </div>
    </section>

{!!$page->description!!}
@endif

@endsection