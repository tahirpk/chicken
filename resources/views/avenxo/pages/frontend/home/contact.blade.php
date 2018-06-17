@extends(Config::get('config.template').'.layouts.frontend.app')
@section('content')
@if(!empty($page))
<section id="breadcrumbRow" class="row">
        <h2>{{$page->title}}</h2>
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


@endif

<section id="googleMapRow" class="row">
        <div class="row m0" id="mapBox"></div>
    </section>
    
    <section id="contactRow" class="row contentRowPad">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="row m0">
                        <h4 class="contactHeading heading">Contact Us</h4>
                    </div>
                    @if (Session::has('message'))
                    <div class="alert alert-info">
                        <h3>Email alert!</h3>
                        <p>{{ Session::get('message') }}</p>
                    </div>
                    @endif
                    <div class="row m0 contactForm">
                        <form class="row m0" id="contactForm" method="post" name="contact" action="{{URL::to('contact-us')}}">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="name">Name *</label>
                                    <input type="text" class="form-control" name="name" id="name" required="">
                                </div>
                                <div class="col-sm-6">
                                    <label for="email">Email *</label>
                                    <input type="email" class="form-control" name="email" id="email" required="">
                                </div>
                            </div>
                            <div class="row m0">
                                <label for="subject">subject *</label>
                                <input type="text" class="form-control" name="subject" id="subject" required="">
                            </div>
                            <div class="row m0">
                                <label for="message">your message</label>
                                <textarea name="message" id="message" class="form-control" required=""></textarea>
                            </div>
                            
                            <button class="btn btn-primary btn-lg filled" type="submit">send message</button>                            
                        </form>
                        <div id="success">
                                <span class="green textcenter">
                                    Your message was sent successfully! I will be in touch as soon as I can.
                                </span>
                        </div>
                        <div id="error">
                            <span>
                                Something went wrong, try refreshing and submitting the form again.
                            </span>
                        </div>
                    </div>
                </div>
                {!!$page->description!!}
            </div>
        </div>
    </section>

@endsection