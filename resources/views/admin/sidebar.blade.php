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
                        <i class="fas fa-cog"></i>
                        <p>Fotogaleriya</p>
                    </a>
                </li>
                <li class="nav-item {{  request()->routeIs('admin.sher.index') ? 'active' : '' }}">
                    <a href="{{route('admin.sher.index')}}">
                        <i class="fas fa-bars"></i>
                        <p>Ijodkorlar</p>
                    </a>
                </li>


            </ul>
        </div>
    </div>
</div>



