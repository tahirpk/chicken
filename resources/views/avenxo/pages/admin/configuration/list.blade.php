@extends(Config::get('config.template').'.layouts.admin.app')
@section('content')
<div class="page-content">
    <ol class="breadcrumb">

        <li><a href="{{URL::to('admin')}}">Home</a></li>
        <li><a href="javascript:;">User Roles</a></li>


    </ol>
    <div class="container-fluid">

        @if (Session::has('message'))
        <div class="alert alert-info">
            <h3>Category Alert</h3>
            <p>{{ Session::get('message') }}</p>
        </div>
        @endif
        <div data-widget-group="group1">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h2>Home Page</h2>
                            

                        </div>
                        <form id="create_categpry" class="form-horizontal" enctype="multipart/form-data" method="post" action="{{URL::to('admin/save/settings')}}">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="selector1" class="col-sm-2 control-label">Role</label>
                                <div class="col-sm-8">
                                    <select name="roles" id="roles" class="form-control">
                                        <option>Select Role</option>
                                        @if(count($groups)>0)
                                        @foreach($groups as $group)
                                        <option value="{{$group->id}}">{{$group->setting_type}}</option>
                                        @endforeach
                                        @endif

                                    </select>
                                </div>
                            </div>

                            <div class="panel-body no-padding">
                                <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Display Name</th>
                                            <th>All</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @if(count($configurations)>0)
                                        @foreach($configurations as $configuration)
                                        <tr class="odd gradeX">

                                            <td>{{$configuration->display_heading}}</td>
                                            
                                            <td>
                                                @if($configuration->html_control_type=='textarea')
                                                <{{$configuration->html_control_type}} name="{{$configuration->name}}" rows="4" cols="50" id="{{$configuration->name}}">{{$configuration->value}}</{{$configuration->html_control_type}}>
                                                @else
                                                <input name="{{$configuration->name}}" id="{{$configuration->name}}" value="{{$configuration->value}}" type="{{$configuration->html_control_type}}" />
                                                
                                                @endif
                                            </td>
                                            
                                            <td >
                                                @if($configuration->html_control_type=='file')
                                                    
                                                @endif
                                            </td>

                                        </tr>
                                        @endforeach
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                            <div class="panel-footer">
                                <div class="row">
                                    <div class="col-sm-8 col-sm-offset-2">
                                        <button id="assignpermissionform" class="btn-primary btn">Submit</button>
                                        <button class="btn-default btn">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>

    </div> <!-- .container-fluid -->
</div> <!-- #page-content -->
@endsection