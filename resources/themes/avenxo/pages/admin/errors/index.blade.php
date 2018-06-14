@extends(Config::get('config.template').'.layouts.admin.app')
@section('content')
<div class="page-content">
    <ol class="breadcrumb">

        <li><a href="{{URL::to('admin')}}">Home</a></li>
        <li><a href="{{URL::to('admin/create/category')}}">Category</a></li>
        <li class="active"><a href="javascript:;">Create</a></li>

    </ol>
    <div class="container-fluid">

        <div data-widget-group="group1">
            <div class="row">
                <div class="col-sm-12">
                    
                    <div class="alert alert-inverse">
                        <strong>Sorry, </strong> page is not accessible!
                        
                    </div>
                   
                    <div class="panel panel-midnightblue" data-widget='{"draggable": "false"}'>
                        <div class="panel-heading">
                            <!--<h2>Category</h2>
                             <div class="panel-ctrls" data-actions-container="" data-action-collapse='{"target": ".panel-body, .panel-footer"}'></div> -->
                            <!-- <div class="options">
                                    <ul class="nav nav-tabs">
                          <li><a href="#vertical-form" data-toggle="tab">Vertical Form</a></li>
                          <li class="active"><a href="#horizontal-form" data-toggle="tab">Horizontal Form</a></li>
                          <li><a href="#bordered-row" data-toggle="tab">Bordered Row</a></li>
                          <li><a href="#tabular-form" data-toggle="tab">Tabular Form</a></li>
                        </ul>
                            </div>-->
                        </div>
                        
                       
                    </div>
                </div>
            </div>


        </div>

    </div> <!-- .container-fluid -->
</div> <!-- #page-content -->
@endsection