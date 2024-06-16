<li class=" navigation-header"><span data-i18n="Apps &amp; Pages">Human Resources</span><i data-feather="more-horizontal"></i>
</li>
<li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="users"></i><span class="menu-title text-truncate" data-i18n="Invoice">Users</span></a>
    <ul class="menu-content">
        <li><a class="d-flex align-items-center" href="{{route('panel.user')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">All</span></a>
        </li>
        <li><a class="d-flex align-items-center" href="{{route('panel.user.client')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Preview">Clients</span></a>
        </li>
        <li><a class="d-flex align-items-center" href="{{ route('panel.user.sp') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Edit">Service Provider</span></a>
        </li>
        <li><a class="d-flex align-items-center" href="{{ route('panel.user.admin') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Add">Admin</span></a>
        </li>
        <li><a class="d-flex align-items-center" href="{{ route('panel.user.superadmin') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Add">Super Admin</span></a>
        </li>
    </ul>
</li>

<li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="mail"></i><span class="menu-title text-truncate" data-i18n="Invoice">Business Detail</span></a>
    <ul class="menu-content">
        <li><a class="d-flex align-items-center" href="{{route('admin.bd')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">New Registration</span></a>
        </li>
    </ul>
</li>

{{-- Service Part --}}
<li class=" navigation-header"><span data-i18n="User Interface">Service</span><i data-feather="more-horizontal"></i>
</li>
<li class=" nav-item {{ Request::is('panel/service-category') ? 'open' : '' }}"><a class="d-flex align-items-center" href="#"><i data-feather="monitor"></i><span class="menu-title text-truncate" data-i18n="Card">Services Categories</span></a>
    <ul class="menu-content">
        <li>
            <a class="d-flex align-items-center {{ Request::is('panel/service-category') ? 'active' : '' }}" href="{{route('sp.scat.index')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Basic">View</span></a>
        </li>
        <li>
            <a class="d-flex align-items-center {{ Request::is('panel/service-category/create') ? 'active' : '' }}" href="{{route('sp.scat.create')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Basic">Create</span></a>
        </li>
    </ul>
</li>
{{-- Service Part --}}