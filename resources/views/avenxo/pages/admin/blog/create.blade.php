@extends(Config::get('config.template').'.layouts.admin.app')
@section('content')
<div class="page-content">
                            <ol class="breadcrumb">
                                
<li><a href="{{URL::to('admin')}}">Home</a></li>
<li><a href="{{URL::to('admin/create/category')}}">Blog</a></li>
<li class="active"><a href="javascript:;">Create</a></li>

                            </ol>
                            <div class="container-fluid">
                                
<div data-widget-group="group1">
	<div class="row">
		<div class="col-sm-12">
                    @if (Session::has('message'))
			<div class="alert alert-inverse">
				Use the <strong>same</strong> code as you would in <a class="alert-link" href="http://getbootstrap.com/">Twitter's Bootstrap</a>!
				<button type="button" class="close" data-dismiss="alert">&times;</button>
			</div>
                    @endif
			<div class="panel panel-midnightblue" data-widget='{"draggable": "false"}'>
				<div class="panel-heading">
					<h2>Blog</h2>
					<!-- <div class="panel-ctrls" data-actions-container="" data-action-collapse='{"target": ".panel-body, .panel-footer"}'></div> -->
					<!-- <div class="options">
						<ul class="nav nav-tabs">
			              <li><a href="#vertical-form" data-toggle="tab">Vertical Form</a></li>
			              <li class="active"><a href="#horizontal-form" data-toggle="tab">Horizontal Form</a></li>
			              <li><a href="#bordered-row" data-toggle="tab">Bordered Row</a></li>
			              <li><a href="#tabular-form" data-toggle="tab">Tabular Form</a></li>
			            </ul>
					</div>-->
				</div>
				<div class="panel-body">
					<div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">
                                                    <form id="create_categpry" class="form-horizontal"  enctype="multipart/form-data" method="post" action="{{URL::to('admin/create/blog')}}">
                                                        {{ csrf_field() }}
                                                        @if(isset($category))<input type="hidden" id="id" name="id" value="{{$category->id}}" />@endif
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Name</label>
									<div class="col-sm-8">
                                                                            <input type="text" class="form-control" value="@if(isset($category)){{$category->title}}@endif" id="name" name="name" placeholder="Name">
									</div>
									<div class="col-sm-2">
										<!--<p class="help-block">Your help text!</p>-->
									</div>
								</div>
                                                        <div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Matatag</label>
									<div class="col-sm-8">
                                                                            <input type="text" class="form-control" value="@if(isset($category)){{$category->matatag}}@endif" id="matatag" name="matatag" placeholder="Matatag">
									</div>
									<div class="col-sm-2">
										<!--<p class="help-block">Your help text!</p>-->
									</div>
								</div>
								@if(count($categories)>0)
								<div class="form-group">
									<label class="col-sm-2 control-label">Category</label>
									<div class="col-sm-8">
                                                                            <select id="parent_id" name="parent_id" class="form-control">
                                                                                    @foreach($categories as $pcategory)
                                                                                    <option value="{{$pcategory->id}}" @if(isset($category) && $category->id==$pcategory->parent_id){{'selected'}}@endif>{{$pcategory->name}}</option>
                                                                                        @endforeach
											
										</select>
									</div>
								</div>
                                                                @endif
                                                                <div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Picture</label>
									<div class="col-sm-8">
                                                                            
                                                                            <input type="file"  id="image" name="image" placeholder="Picture" />
									</div>
									<div class="col-sm-2">
                                                                            @if(isset($category) && !empty($category->picture))<img  height="50" src="{{URL::to('uploads/blog/'.$category->picture)}}" />@endif
									</div>
								</div>
								<div class="form-group">
									<label for="txtarea1" class="col-sm-2 control-label">Description</label>
									<div class="col-sm-8"><textarea name="description" id="description" cols="50" rows="4" class="form-control">@if(isset($category)){{$category->description}}@endif</textarea></div>
								</div>
								
							</form>
						</div>
						
					</div>
				</div>
				<div class="panel-footer">
					<div class="row">
						<div class="col-sm-8 col-sm-offset-2">
                                                    <button id="createcategoryform" class="btn-primary btn">Submit</button>
							<button class="btn-default btn">Cancel</button>
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