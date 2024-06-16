<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item me-auto">
                <a class="navbar-brand" href="{{asset('back/')}}html/ltr/vertical-menu-template/index.html">
                    <span class="brand-logo">
                        <img src="https://toppng.com/uploads/preview/more-examples-logo-png-vodafone-logo-11563157773d9w4iqzxlm.png" alt="HTML tutorial" style="height:48px;">
                    </span>
                    <h2 class="brand-text">CSMS</h2>
                </a>
            </li>
            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pe-0" data-bs-toggle="collapse"><i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc" data-ticon="disc"></i></a></li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class=" nav-item">
                <a class="d-flex align-items-center" href="index.html">
                    <i data-feather="home"></i>
                    <span class="menu-title text-truncate" data-i18n="Dashboards">Dashboards</span>
                    <span class="badge badge-light-warning rounded-pill ms-auto me-1">2</span>
                </a>
                <ul class="menu-content">
                    <li class="active"><a class="d-flex align-items-center" href="dashboard-ecommerce.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="eCommerce">My Dashboard</span></a>
                    </li>
                </ul>
            </li>

            @if (Auth::check())
            
            
            {{-- Services Side Bar --}}
            @if (Auth::user()->hasRole('services'))
            @include('admin.layouts.sidebar.services.index')
            @endif

            {{-- Superadministrator Side Bar --}}
            @if (Auth::user()->hasRole('superadministrator'))
            @include('admin.layouts.sidebar.superadmin.index')
            @endif

            {{-- Admin Side Bar --}}
            @if (Auth::user()->hasRole('administrator'))
            @include('admin.layouts.sidebar.admin.index')
            @endif
            
            {{-- Users Side Bar --}}
            @if (Auth::user()->hasRole('user'))
            @include('admin.layouts.sidebar.users.index')
            @endif
            
            @endif
            
        </ul>
    </div>
</div>