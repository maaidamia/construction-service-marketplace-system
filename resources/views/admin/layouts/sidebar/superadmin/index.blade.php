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
