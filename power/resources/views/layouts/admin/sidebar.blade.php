<aside class="sidebar-left">
    <section class="sidebar">
        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            
            <!--Dashboard-->
            <li class="treeview {{ ($active=='dashboard'?'active':'') }}"><a href="{{ route('admin.dashboard.index') }}"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>

            <!--programs-->
            <li class="treeview {{ ($active=='programs'?'active':'') }}"><a href="{{ route('programs.index') }}"><i class="fa fa-id-card-o"></i> <span>Programs</span></a></li>
            
           
        </ul>
        <!-- /. sidebar-menu -->
    </section>
</aside>