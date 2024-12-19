<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="{{ route("admin.home") }}">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        @if (Auth::user()->is_admin == 0)
            <li class="nav-item">
                <a class="nav-link" href="{{ route('users') }}">
                    <i class="icon-layout menu-icon"></i>
                    <span class="menu-title">User</span>
                </a>
            </li>
        @endif
        <li class="nav-item">
            <a class="nav-link" href="{{ route('add_blog') }}">
                <i class="icon-layout menu-icon"></i>
                <span class="menu-title">Blog</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('list.blog') }}">
                <i class="icon-layout menu-icon"></i>
                <span class="menu-title">My Blogs</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('add.blog_type') }}">
                <i class="icon-layout menu-icon"></i>
                <span class="menu-title">Blog Category</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <i class="icon-layout menu-icon"></i>
                <span class="menu-title">UI Elements</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">Dropdowns</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Typography</a>
                    </li>
                </ul>
            </div>
        </li>
    </ul>
</nav>