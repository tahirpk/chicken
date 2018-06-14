@extends(Config::get('config.template').'.layouts.admin.app')
@section('content')
<div class="page-content">
    <ol class="breadcrumb">

        <li><a href="{{URL::to('admin')}}">Home</a></li>
        <li><a href="javascript:;">Portals</a></li>


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
                            <h2>Portals</h2>
                            <div class="panel-ctrls"><div id="example_filter" class="dataTables_filter pull-right"><label class="panel-ctrls-center"><input class="form-control" placeholder="Search..." aria-controls="example" type="search"></label></div><i class="separator"></i><div class="dataTables_length pull-left" id="example_length"><label class="panel-ctrls-center"><select name="example_length" aria-controls="example" class="form-control"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select></label></div></div>

                        </div>
                        <div class="panel-body no-padding">
                            <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>S.No.</th>
                                        <th>Name</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=0;?>
                                    @if(count($portals)>0)
                                    @foreach($portals as $portal)
                                        <tr class="odd gradeX">
                                            <td><?php echo ++$i;?></td>
                                            <td>{{$portal->title}}</td>
                                            <td>{{$portal->status}}</td>
                                            <td class="center"><a href="{{URL::to('admin/create/portfolio/'.$portal->id)}}">Edit</a>  <a href="{{URL::to('admin/delete/portfolio/'.$portal->id)}}" onclick="return confirm('Sure, you want to delete this category?')">Delete</a></td>
                                            
                                        </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                        <div class="panel-footer">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="dataTables_info" id="example_info" role="status" aria-live="polite">Showing 1 to 10 of {{$portals->total()}} entries</div>
                                        
                                </div>
                                <div class="col-sm-6">
                                    
                                    {{ $portals->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div> <!-- .container-fluid -->
</div> <!-- #page-content -->
@endsection