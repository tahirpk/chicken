@extends(Config::get('config.template').'.layouts.frontend.app')
@section('content')
{{ Widget::run('Frontend.Topslider') }}
{{ Widget::run('Frontend.Homepagelist') }}
@endsection