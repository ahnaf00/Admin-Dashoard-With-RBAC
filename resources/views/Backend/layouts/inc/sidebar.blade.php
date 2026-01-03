<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 "
    id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href="{{ url('/') }}">
            <img src="https://demos.creative-tim.com/argon-dashboard-pro/assets/img/logo-ct-dark.png"
                class="navbar-brand-img h-100" alt="{{ config('app.name') }}_logo">
            <span class="ms-1 font-weight-bold">{{ config('app.name') }}</span>
        </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto h-auto" id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link active" href="{{ url('/dashboard') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Dashboard</span>
                </a>
            </li>

            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Management</h6>
            </li>

            @if(auth()->user()?->hasRole(config('tyro_custom.super_admin_role', 'super-admin')))
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#rolesExamples" class="nav-link" aria-controls="rolesExamples"
                        role="button" aria-expanded="false">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-single-02 text-warning text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Roles & Auth</span>
                    </a>
                    <div class="collapse" id="rolesExamples">
                        <ul class="nav ms-4">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('roles.index') }}">
                                    <span class="sidenav-mini-icon"> R </span>
                                    <span class="sidenav-normal"> All Roles </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('privileges.index') }}">
                                    <span class="sidenav-mini-icon"> P </span>
                                    <span class="sidenav-normal"> Privileges </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            @endif

            @if(auth()->user()?->hasRole(config('tyro_custom.super_admin_role', 'super-admin')))
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#rbacManagement" class="nav-link" aria-controls="rbacManagement"
                        role="button" aria-expanded="false">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-settings text-info text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">RBAC System</span>
                    </a>
                    <div class="collapse" id="rbacManagement">
                        <ul class="nav ms-4">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('users.index') }}">
                                    <span class="sidenav-mini-icon"> U </span>
                                    <span class="sidenav-normal"> User Roles </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            @endif

            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Account Pages</h6>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="#">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Profile</span>
                </a>
            </li>
        </ul>
    </div>
</aside>