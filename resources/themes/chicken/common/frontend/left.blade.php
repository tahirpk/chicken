
<div class="widget">
        <div class="widget-body">
            <div class="userinfo">
                <div class="avatar">
                    <img src="http://placehold.it/300&text=Placeholder" class="img-responsive img-circle"> 
                </div>
                <div class="info">
                    <span class="username">{{{ isset(Auth::user()->name) ? Auth::user()->name : 'Guest' }}}</span>
                   @if (Auth::check())<span class="useremail">{{{ isset(Auth::user()->name) ? Auth::user()->name : 'admin@admin.com' }}}</span>@endif
                </div>
            </div>
        </div>
    </div>
@if (Auth::check())
<div class="widget stay-on-collapse" id="widget-sidebar">
        <nav role="navigation" class="widget-body">
            <input type="hidden" id="changemenuurl" value="{{URL::to('admin/update/menu')}}"/>
            <ul class="acc-menu" id="sortable" >
		
		<li><a href="{{URL::to('admin')}}"><i class="ti ti-home"></i><span>Dashboard</span><!--<span class="badge badge-teal">2</span>--></a></li>
		
		@widget('Leftmenu')
                <!--
                <li><a href="javascript:;"><i class="fa fa-tags"></i><span>Roles & Permissions</span></a>
			<ul class="acc-menu">
                            <li><a href="javascript:;">Roles</a>
					<ul class="acc-menu">
                                            <li><a href="{{URL::to('admin/create/role')}}">Create</a></li>
                                            <li><a href="{{URL::to('admin/role/list')}}">List</a></li>
                                        </ul>
                            </li>
                                <li><a href="javascript:;">Permissions</a>
                                    <ul class="acc-menu">
                                            <li><a href="{{URL::to('admin/create/permission')}}">Create</a></li>
                                            <li><a href="{{URL::to('admin/permission/list')}}">List</a></li>
                                            
                                    </ul>
                                </li>
			</ul>
		</li>
                
                
		<li><a href="javascript:;"><i class="ti ti-file"></i><span>Pages</span></a>
			<ul class="acc-menu">
				<li><a href="{{URL::to('admin/create/page')}}">Create</a></li>
				<li><a href="{{URL::to('admin/page/list')}}">List</a></li>
				
			</ul>
		</li>
                <li><a href="javascript:;"><i class="fa fa-newspaper-o"></i><span>News</span></a>
                        <ul class="acc-menu">
                                <li><a href="{{URL::to('admin/create/news')}}">Create</a></li>
				<li><a href="{{URL::to('admin/news/list')}}">List</a></li>
                                <li><a href="javascript:;">News Categories</a>
					<ul class="acc-menu">
						<li><a href="{{URL::to('admin/create/newscategory')}}">Create</a></li>
						<li><a href="{{URL::to('admin/newscategory/list')}}">List</a></li>
						
					</ul>
				</li>

                        </ul>
                </li>
                <li><a href="javascript:;"><i class="fa fa-newspaper-o"></i><span>News Letter</span></a>
                        <ul class="acc-menu">
                                <li><a href="{{URL::to('admin/create/newsletter')}}">Create</a></li>
				<li><a href="{{URL::to('admin/newsletter/list')}}">List</a></li>

                        </ul>
                </li>
                <li><a href="javascript:;"><i class="ti ti-control-shuffle"></i><span>Portfolio</span></a>
                        <ul class="acc-menu">
                                <li><a href="{{URL::to('admin/create/portal/1')}}">General Info</a></li>
				
                                <li><a href="javascript:;">Portfolio Categories</a>
					<ul class="acc-menu">
						<li><a href="{{URL::to('admin/create/portalcategory')}}">Create</a></li>
						<li><a href="{{URL::to('admin/portalcategory/list')}}">List</a></li>
						
					</ul>
				</li>
                                <li><a href="javascript:;">Projects</a>
					<ul class="acc-menu">
						<li><a href="{{URL::to('admin/create/project')}}">Create</a></li>
						<li><a href="{{URL::to('admin/project/list')}}">List</a></li>
						
					</ul>
				</li>

                        </ul>
                </li>
                <li><a href="javascript:;"><i class="ti ti-control-shuffle"></i><span>Blog</span></a>
                        <ul class="acc-menu">
                            <li><a href="javascript:;">Blog Categories</a>
					<ul class="acc-menu">
						<li><a href="{{URL::to('admin/create/blogcategory')}}">Create</a></li>
						<li><a href="{{URL::to('admin/blogcategory/list')}}">List</a></li>
						
					</ul>
				</li>
                                <li><a href="javascript:;">Blog Posts</a>
					<ul class="acc-menu">
						<li><a href="{{URL::to('admin/create/blog')}}">Create</a></li>
						<li><a href="{{URL::to('admin/blog/list')}}">List</a></li>
						
					</ul>
				</li>
                                

                        </ul>
                </li>
                <li><a href="javascript:;"><i class="ti ti-control-shuffle"></i><span>Products</span></a>
                <ul class="acc-menu">    
                <li><a href="javascript:;"><i class="fa fa-tags"></i><span>Category</span></a>    
                    <ul class="acc-menu">
                                    <li><a href="{{URL::to('admin/create/category')}}">Create</a></li>
                                    <li><a href="{{URL::to('admin/category/list')}}">List</a></li>

                            </ul>
                    </li>
                        <li><a href="javascript:;"><i class="fa fa-tags"></i><span>Product</span></a>
                            <ul class="acc-menu">
                               <li><a href="{{URL::to('admin/create/product')}}">Create</a></li>
				<li><a href="{{URL::to('admin/product/list')}}">List</a></li>

                        </ul>
                            
                        </li>
                </ul>
                </li>
                -->
		
	</ul>
</nav>
    </div>
@endif