<nav class="navbar">
    <div class="navbar-left">
        <button class="toggle-sidebar" id="toggleSidebar">
            <i class="icon icon-menu"></i>
        </button>
        <div class="page-title">
            <h1 id="pageTitle">Dashboard</h1>
        </div>
    </div>

    <div class="navbar-right">
        <div class="user-profile">
            <img src="{{ asset('assets/img/user.png') }}" alt="User" class="user-avatar">
            <div class="user-info">
                <span class="username">Administrator</span>
            </div>
            
            <div class="dropdown-menu">
                <a href="#" class="dropdown-item">
                    <i class="icon icon-profile"></i>
                    Profile
                </a>
                <a href="#" class="dropdown-item">
                    <i class="icon icon-logout"></i>
                    Logout
                </a>
            </div>
        </div>
    </div>
</nav>