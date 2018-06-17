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
                            <h2>Assign Rights</h2>
                            <div class="panel-ctrls"><div id="example_filter" class="dataTables_filter pull-right"><label class="panel-ctrls-center"><input class="form-control" placeholder="Search..." aria-controls="example" type="search"></label></div><i class="separator"></i><div class="dataTables_length pull-left" id="example_length"><label class="panel-ctrls-center"><select name="example_length" aria-controls="example" class="form-control"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select></label></div></div>

                        </div>
                        <form id="create_categpry" class="form-horizontal" method="post" action="{{URL::to('admin/permission/assign')}}">
                            {{ csrf_field() }}
                            <div class="form-group">
									<label for="selector1" class="col-sm-2 control-label">Role</label>
									<div class="col-sm-8">
                                                                            <select name="roles" id="roles" class="form-control">
										<option>Select Role</option>
                                                                                @if(count($roles)>0)
                                                                                  @foreach($roles as $role)
                                                                                  <option value="{{$role->id}}">{{$role->name}}</option>
                                                                                    @endforeach
                                                                                @endif
										
                                                                            </select>
                                                                        </div>
								</div>
                            
                        <div class="panel-body no-padding">
                            <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>Module</th>
                                        @if(count($permissions))
                                            @foreach($permissions as $permission)<th>{{$permission->display_name}}</th>@endforeach
                                            <th>All</th>
                                        @endif
                                    </tr>
                                </thead>
                                <tbody>
                                   
                                    @if(count($links)>0)
                                    @foreach($links as $link)
                                        <tr class="odd gradeX">
                                            
                                            <td>{{$link->display_name}}</td>
                                            @foreach($permissions as $permission)
                                                <td>
                                                    <input name="{{$link->name}}[]" id="{{$link->name}}{{$permission->id}}" value="{{$permission->id}}" type="checkbox" />
                                                </td>
                                            @endforeach
                                            <td >
                                                <input name="all{{$link->name}}[{{$link->id}}]" id="{{$link->name}}{{$link->id}}" type="checkbox" />
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