<aside class="sidebar-left">
    <section class="sidebar">
        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            
            <!--Dashboard-->
            <li class="treeview {{ ($active=='dashboard'?'active':'') }}"><a href="{{ route('admin.dashboard.index') }}"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>


            <!--States-->
            <li class="treeview {{ ($active=='states'?'active':'') }}"><a href="{{ route('states.index') }}"><i class="fa fa-home"></i> <span>States</span></a></li>

            <!--categories-->
            <li class="treeview {{ ($active=='categories'?'active':'') }}"><a href="{{ route('categories.index') }}"><i class="fa fa-home"></i> <span>Categories</span></a></li>

            <!--states data-->
            <li class="treeview {{ ($active=='datas'?'active':'') }}"><a href="{{ route('datas.index') }}"><i class="fa fa-home"></i> <span>States Data</span></a></li>


            
            @if(auth()->user()->roles_id=='1')
			
			
			@endif
			
 
        </ul>
        <!-- /. sidebar-menu -->
    </section>
</aside>