<div class="main-sidebar sidebar-style-2" tabindex="1" style="overflow: hidden; outline: none;">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{route('dashboard')}}">A.School</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <a href="{{route('dashboard')}}" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
            <li class="menu-header">Starter</li>
            <li class="dropdown">
                <a href="" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Student</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{route('student.create')}}">Add Student</a></li>
                    <li><a class="nav-link" href="">Students List</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>User</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{route('user.index')}}">User List</a></li>
                </ul>
            </li>

        </ul>
    </aside>
</div>
