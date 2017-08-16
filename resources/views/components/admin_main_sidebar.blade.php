<!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel">
        <div class="pull-left image">
            <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
            <p>Admin EBaoHiem</p>
            <!-- Status -->
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
    </div>

    <!-- search form (Optional) -->
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

    <!-- Sidebar Menu -->
    <ul class="sidebar-menu" data-widget="tree">
    @if (isset($backend_menus) && !empty($backend_menus))
        @php
            $currentRouteName = request()->route()->getName();
        @endphp
        @foreach($backend_menus as $menu)
            @if (isset($menu['sub']) && !empty($menu['sub']))
                <?php
                    $subHtml = '';
                    $active = false;
                    foreach ($menu['sub'] as $submenu) {
                        $class = '';
                        if ($currentRouteName == $submenu['route']) {
                            $class = 'active';
                            $active = true;
                        }
                        $subHtml .= '<li class="' . $class . '"><a href="' . route($submenu['route']) . '">' . trans($submenu['text']) . '</a></li>';
                    }
                ?>
                <li class="{{ $active ? 'active ' : '' }}{{ $menu['class'] }} treeview">
                    <a href="{{ isset($menu['route']) ? route($menu['route']) : '#' }}"><i class="{{ isset($menu['icon']) ? $menu['icon'] : '' }}"></i> <span>{{ isset($menu['text']) ? trans($menu['text']) : '' }}</span></a>
                    <ul class="treeview-menu">
                        {!! $subHtml !!}
                    </ul>
                </li>
            @else
                <li class="@if(request()->route()->getName() == $submenu['route'])active @endif{{ isset($menu['class']) ? $menu['class'] : '' }}">
                    <a href="{{ isset($menu['route']) ? route($menu['route']) : '#' }}"><i class="{{ isset($menu['icon']) ? $menu['icon'] : '' }}"></i> <span>{{ isset($menu['text']) ? trans($menu['text']) : '' }}</span></a>
                </li>
            @endif
        @endforeach
    @endif
        <li class="treeview">
            <a href="#">
                <i class="fa fa-pie-chart"></i>
                <span>Bài viết</span>
                <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu" style="display: none;">
                <li><a href="{{route('news.news_post.index')}}"><i class="fa fa-circle-o"></i> Tất cả bài viết</a></li>
                <li><a href="{{route('news.news_post.create')}}"><i class="fa fa-circle-o"></i> Thêm bài viết</a></li>
                <li><a href="{{route('news.news_category.index')}}"><i class="fa fa-circle-o"></i> Danh mục</a></li>
                <li><a href="pages/charts/inline.html"><i class="fa fa-circle-o"></i> Tags</a></li>
            </ul>
        </li>
    </ul>
    <!-- /.sidebar-menu -->
</section>
<!-- /.sidebar -->