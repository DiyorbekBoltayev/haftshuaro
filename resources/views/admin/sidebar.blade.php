<div class="sidebar sidebar-style-2">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <ul class="nav nav-primary">
                <li class="nav-item {{  request()->routeIs('admin.users.index') ? 'active' : '' }}">
                    <a href="{{route('admin.users.index')}}">
                        <i class="fas fa-user"></i>
                        <p>Foydalanuvchilar</p>
                    </a>
                </li>

                <li class="nav-item {{  request()->routeIs('admin.photos.index') ? 'active' : '' }}">
                    <a href="{{route('admin.photos.index')}}">
                        <i class="fas fa-image"></i>
                        <p>Fotogaleriya</p>
                    </a>
                </li>

                <li class="nav-item {{  request()->routeIs('admin.shoir.index') ? 'active' : '' }}">
                    <a href="{{route('admin.shoir.index')}}">
                        <i class="fas fa-pen"></i>
                        <p>Shoirlar</p>
                    </a>
                </li>

                <li class="nav-item {{  request()->routeIs('admin.sher.index') ? 'active' : '' }}">
                    <a href="{{route('admin.sher.index')}}">
                        <i class="fas fa-bars"></i>
                        <p>Sherlar</p>
                    </a>
                </li>
                <li class="nav-item {{  request()->routeIs('admin.kitob.index') ? 'active' : '' }}">
                    <a href="{{route('admin.kitob.index')}}">
                        <i class="fas fa-book-open"></i>
                        <p>Kitoblar</p>
                    </a>
                </li><li class="nav-item {{  request()->routeIs('admin.massage.index') ? 'active' : '' }}">
                    <a href="{{route('admin.massage.index')}}">
                        <i class="fas fa-book-open"></i>
                        <p>Xabarlar</p>
                    </a>
                </li>

            </ul>
        </div>
    </div>
</div>



