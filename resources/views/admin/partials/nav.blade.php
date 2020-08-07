<ul class="sidebar-menu" data-widget="tree">
    <li class="header">Navigation</li>
    <!-- Optionally, you can add icons to the links -->
    <li class="active"><a href="#"><i class="fa fa-home"></i><span>Home</span></a></li>
    <li class="treeview">
      <a href="#"><i class="fa fa-building"></i><span>Project</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
      </a>
      <ul class="treeview-menu">
      <li><a href="{{ route('admin.projects.index') }}"><i class="fa fa-eye"></i>See project</a></li>
        <li><a href="#"><i class="fa fa-pencil"></i>Create Project</a></li>
      </ul>
    </li>
</ul>