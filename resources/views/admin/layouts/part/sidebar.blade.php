<section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src='{{asset("AdminLTE-2.4/dist/img/user2-160x160.jpg")}}' class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href='{{asset("AdminLTE-2.4/index.html")}}'><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
            <li><a href='{{asset("AdminLTE-2.4/index2.html")}}'><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
          </ul>
        </li>
        <li>
          <a href='{{url("/user")}}'>
            <i class="fa fa-list"></i> <span>User</span>
          </a>
        </li>
        <li>
          <a href='{{url("/category")}}'>
            <i class="fa fa-list"></i> <span>Category</span>
          </a>
        </li>
        <li>
          <a href='{{url("/article")}}'>
            <i class="fa fa-bookmark"></i> <span>Article</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-red">New</small>
            </span>
          </a>
        </li>
      </ul>
    </section>