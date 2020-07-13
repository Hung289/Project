<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
    <img src="public/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">AdminLTE 3</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        @if(Auth::check())
        <img src="public/uploads/images/user/{{Auth::User()->avatar}}" class="img-circle elevation-2" alt="User Image" style="width:40px;height:40px">

        <a href="">{{Auth::User()->name}}</a>
        @endif
      </div>
      <div class="info">
        @if(!Auth::check())
        Chưa đăng nhập
        @endif
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <?php
        $user = Auth::user();
        $menus = config('menu');
        ?>
        <li class="nav-item has-treeview menu-open">
          <a href="{{route('admin.index')}}" class="nav-link active">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Trang chủ
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="pages/widgets.html" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Widgets
              <span class="right badge badge-danger">New</span>
            </p>
          </a>
        </li>
        @foreach($menus as $m)
        @if($user->can($m['route']))
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-copy"></i>
            <p>
              {{$m['label']}}
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          @if(isset($m['items']))
          <ul class="nav nav-treeview">
            @foreach($m['items'] as $mi)
            @if($user->can($mi['route']))
            <li class="nav-item">
              <a href="{{route($mi['route'])}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>{{$mi['label']}}</p>
              </a>
            </li>
            @endif
            @endforeach
          </ul>
          @endif
        </li>
        @endif
        @endforeach
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-copy"></i>
            <p>
              Người dùng
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{route('admin.user.index')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Danh sách người dùng</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('admin.user.create')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Thêm mới người dùng</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-chart-pie"></i>
            <p>
              Danh Mục phòng
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{route('admin.categoryRoom.index')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Danh Sách danh mục phòng</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('admin.categoryRoom.create')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Thêm mới danh mục phòng</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-chart-pie"></i>
            <p>
              Danh Mục dịch vụ
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{route('admin.categoryService.index')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Danh Sách danh mục dịch vụ</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('admin.categoryService.create')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Thêm mới danh mục dịch vụ</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-chart-pie"></i>
            <p>
              Danh Mục Blog
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{route('admin.categoryBlog.index')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Danh Sách danh mục blog</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('admin.categoryBlog.create')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Thêm mới danh mục blog</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-tree"></i>
            <p>
              Phòng
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{route('admin.room.indexAdmin')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Danh sách phòng Admin khách</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('admin.room.index')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Danh sách phòng</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('admin.room.create')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Thêm mới phòng</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-tree"></i>
            <p>
              Dịch vụ
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{route('admin.service.index')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Danh sách dịch vụ</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('admin.service.create')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Thêm mới dịch vụ</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-edit"></i>
            <p>
              Blogs
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{route('admin.blog.create')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Thêm mới blogs</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('admin.blog.index')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Danh sách blogs</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-edit"></i>
            <p>
              Brands
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{route('admin.brand.create')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Thêm mới brands</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('admin.brand.index')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Danh sách brands</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-table"></i>
            <p>
              Banner
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{route('admin.banner.index')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Danh sách banner</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('admin.banner.create')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Thêm mới banner</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-table"></i>
            <p>
              Role
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{route('admin.role.index')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Danh sách Role</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('admin.role.create')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Thêm mới Role</p>
              </a>
            </li>
          </ul>
        </li>

      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>