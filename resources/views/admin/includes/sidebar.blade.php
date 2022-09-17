<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar client panel (optional) -->
        <div class="user-panel">
            <div class="image">
                <i class="nav-icon fa fa-solid fa-user-tie"></i>
            </div>
            <div class="info">
                <p>{{ auth()->user()->name }}</p>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <li class="nav-item">
                    <a href="{{ route('admin.main.index') }}" class="nav-link">
                        <i class="nav-icon fa fa-solid fa-house-chimney"></i>
                        <p>Main</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.category.index') }}" class="nav-link">
                        <i class="nav-icon fa fa-layer-group"></i>
                        <p>Category</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.color.index') }}" class="nav-link">
                        <i class="nav-icon fa fa-solid fa-palette"></i>
                        <p>Color</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.brand.index') }}" class="nav-link">
                        <i class="nav-icon fa fa-solid fa-tag"></i>
                        <p>Brand</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.size.index') }}" class="nav-link">
                        <i class="nav-icon fa fa-solid fa-font"></i>
                        <p>Size</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.clothing.index') }}" class="nav-link">
                        <i class="nav-icon fa fa-solid fa-vest-patches"></i>
                        <p>Clothing</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.image.index') }}" class="nav-link">
                        <i class="nav-icon far fa-image"></i>
                        <p>Images</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.users.index') }}" class="nav-link">
                        <i class="nav-icon fa fa-solid fa-users"></i>
                        <p>Users</p>
                    </a>
                </li>

            </ul>
        </nav>

    </div>

</aside>
