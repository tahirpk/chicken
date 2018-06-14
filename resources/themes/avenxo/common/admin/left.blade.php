
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
	<ul class="acc-menu">
		
		<li><a href="{{URL::to('admin')}}"><i class="ti ti-home"></i><span>Dashboard</span><!--<span class="badge badge-teal">2</span>--></a></li>
		
		
                <li><a href="javascript:;"><i class="fa fa-tags"></i><span>User Roles</span></a>
			<ul class="acc-menu">
				<li><a href="{{URL::to('admin/create/role')}}">Create</a></li>
				<li><a href="{{URL::to('admin/role/list')}}">List</a></li>
				
			</ul>
		</li>
                <li><a href="javascript:;"><i class="fa fa-tags"></i><span>User Permissions</span></a>
			<ul class="acc-menu">
				<li><a href="{{URL::to('admin/create/permission')}}">Create</a></li>
				<li><a href="{{URL::to('admin/permission/list')}}">List</a></li>
				<li><a href="{{URL::to('admin/permission/assign')}}">Assign Permissions</a></li>
			</ul>
		</li>
                
		<li><a href="javascript:;"><i class="ti ti-view-list-alt"></i><span>Pages</span></a>
			<ul class="acc-menu">
				<li><a href="{{URL::to('admin/create/page')}}">Create</a></li>
				<li><a href="{{URL::to('admin/page/list')}}">List</a></li>
				
			</ul>
		</li>
                <li><a href="javascript:;"><i class="ti ti-control-shuffle"></i><span>News</span></a>
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
                <li><a href="javascript:;"><i class="ti ti-control-shuffle"></i><span>News Letter</span></a>
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
		<li><a href="javascript:;"><i class="ti ti-pencil"></i><span>Forms</span></a>
			<ul class="acc-menu">
				<li><a href="ui-forms.html">Form Layout</a></li>
				<li><a href="form-components.html">Form Components</a></li>
				<li><a href="form-pickers.html">Pickers</a></li>
				<li><a href="form-wizard.html">Form Wizard</a></li>
				<li><a href="form-validation.html">Form Validation</a></li>
				<li><a href="form-masks.html">Form Masks</a></li>
				<li><a href="form-dropzone.html">Dropzone Uploader</a></li>
				<li><a href="form-summernote.html">Summernote</a></li>
				<li><a href="form-markdown.html">Markdown Editor</a></li>
				<li><a href="form-xeditable.html">Inline Editor</a></li>
				<li><a href="form-gridforms.html">Grid Forms</a></li>
			</ul>
		</li>
		<li>
			<a href="javascript:;"><i class="ti ti-settings"></i><span>Panels</span></a>
			<ul class="acc-menu">
				<li><a href="ui-panels.html">Panels</a></li>
				<li><a href="ui-advancedpanels.html">Draggable Panels</a></li>
			</ul>
		<li><a href="javascript:;"><i class="ti ti-layout-grid3"></i><span>Tables</span></a>
			<ul class="acc-menu">
				<li><a href="ui-tables.html">Basic Tables</a></li>
				<li><a href="tables-responsive.html">Responsive Tables</a></li>
				<li><a href="tables-editable.html">Editable Tables</a></li>
				<li><a href="tables-data.html">Data Tables</a></li>
				<li><a href="tables-fixedheader.html">Fixed Header Tables</a></li>
			</ul>
		</li>
		<li><a href="javascript:;"><i class="ti ti-stats-up"></i><span>Analytics</span></a>
			<ul class="acc-menu">
				<li><a href="charts-flot.html">Flot</a></li>
				<li><a href="charts-sparklines.html">Sparklines</a></li>
				<li><a href="charts-morris.html">Morris.js</a></li>
				<li><a href="charts-easypiechart.html">Easy Pie Chart</a></li>
			</ul>
		</li>
		<li><a href="javascript:;"><i class="ti ti-map-alt"></i><span>Maps</span></a>
			<ul class="acc-menu">
				<li><a href="maps-google.html">Google Maps</a></li>
				<li><a href="maps-jvectormap.html">jVectorMap</a></li>
				<li><a href="maps-mapael.html">Mapael</a></li>
			</ul>
		</li>
		<li><a href="javascript:;"><i class="ti ti-file"></i><span>Pages</span></a>
			<ul class="acc-menu">
				<li><a href="extras-profile.html">Profile</a></li>
				<li><a href="extras-invoice.html">Invoice</a></li>
				<li><a href="javascript:;">Email Templates</a>
					<ul class="acc-menu">
						<li><a href="responsive-email/basic.html">Basic</a></li>
						<li><a href="responsive-email/hero.html">Hero</a></li>
						<li><a href="responsive-email/sidebar.html">Sidebar</a></li>
						<li><a href="responsive-email/sidebar-hero.html">Sidebar Hero</a></li>
					</ul>
				</li>
				<li><a href="coming-soon.html">Coming Soon</a></li>
				<li><a href="extras-faq.html">FAQ</a></li>
				<li><a href="extras-registration.html">Registration</a></li>
				<li><a href="extras-forgotpassword.html">Password Reset</a></li>
				<li><a href="extras-login.html">Login</a></li>
				<li><a href="extras-404.html">404 Page</a></li>
				<li><a href="extras-500.html">500 Page</a></li>
			</ul>
		</li>

		<li class="nav-separator"><span>Extras</span></li>
		<li><a href="app-inbox.html"><i class="ti ti-email"></i><span>Inbox</span><span class="badge badge-danger">3</span></a></li>
		<li><a href="extras-calendar.html"><i class="ti ti-calendar	"></i><span>Calendar</span><span class="badge badge-orange">1</span></a></li>
	</ul>
</nav>
    </div>
@endif