<aside class="sidebar-left">
    <section class="sidebar">
        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            
            <!--Dashboard-->
            <li class="treeview {{ ($active=='dashboard'?'active':'') }}"><a href="{{ route('admin.dashboard.index') }}"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>

            <!--programs-->
            <li class="treeview {{ ($active=='news'?'active':'') }}"><a href="{{ route('news.index') }}"><i class="fa fa-id-card-o"></i> <span>News</span></a></li>
            
           
        </ul>
        <!-- /. sidebar-menu -->
    </section>
</aside>
