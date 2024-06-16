{{-- Service Register Business Detail --}}
@if (Auth::user()->isActive == 0 && Auth::user()->userType == 'services')

<li class=" navigation-header"><span data-i18n="Apps &amp; Pages">Register Form <span class="badge badge-light-success rounded-pill ms-auto me-1">Register Now</span></span><i data-feather="more-horizontal"></i>
</li>

<li class=" nav-item {{ Request::is('business-details/*') ? 'open' : '' }}">
    <a class="d-flex align-items-center {{ Request::is('business-details/*') ? 'active' : '' }}" href="#"><i data-feather="file-text"></i><span class="menu-title text-truncate" data-i18n="Invoice">Business Details</span></a>
    <ul class="menu-content">

        <li>
            <a class="d-flex align-items-center {{ Request::is('business-details') ? 'active' : '' }}" href="{{route('bd')}}">
                <i data-feather="circle"></i>
                <span class="menu-item text-truncate" data-i18n="List">View Form</span>
            </a>
        </li>
        
        @if (empty(Auth::user()->bdCorporate()->first()))
        <li>
            <a class="d-flex align-items-center {{ Request::is('business-details/corporate') ? 'active' : '' }}" href="{{route('bd.corporate')}}">
                <i data-feather="circle"></i>
                <span class="menu-item text-truncate" data-i18n="List">Corporate Details</span>
            </a>
        </li>
        @endif

        @if (empty(Auth::user()->bdContact()->first()))
        <li>
            <a class="d-flex align-items-center {{ Request::is('business-details/contact') ? 'active' : '' }}" href="{{route('bd.contact')}}">
                <i data-feather="circle"></i>
                <span class="menu-item text-truncate" data-i18n="List">Contact Details</span>
            </a>
        </li>
        @endif

        @if (empty(Auth::user()->bdDocument()->first()))
        <li>
            <a class="d-flex align-items-center {{ Request::is('business-details/document') ? 'active' : '' }}" href="{{route('bd.document')}}">
                <i data-feather="circle"></i>
                <span class="menu-item text-truncate" data-i18n="List">Document Details</span>
            </a>
        </li>
        @endif
    </ul>
</li>

@endif
{{-- Service Register Business Detail --}}

{{-- Service Part --}}
<li class=" navigation-header"><span data-i18n="User Interface">Service</span><i data-feather="more-horizontal"></i>
</li>
<li class=" nav-item {{ Request::is('panel/service-provider') ? 'open' : '' }}"><a class="d-flex align-items-center" href="#"><i data-feather="monitor"></i><span class="menu-title text-truncate" data-i18n="Card">My Services</span></a>
    <ul class="menu-content">
        <li><a class="d-flex align-items-center {{ Request::is('panel/service-provider') ? 'active' : '' }}" href="{{route('sp.index')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Basic">View</span></a>
        </li>
    </ul>
</li>
<li class=" nav-item {{ Request::is('panel/purchase/service-provider/*') ? 'open' : '' }}"><a class="d-flex align-items-center" href="#"><i data-feather="monitor"></i><span class="menu-title text-truncate" data-i18n="Card">My Client</span></a>
    <ul class="menu-content">
        <li><a class="d-flex align-items-center {{ Request::is('panel/purchase/service-provider/pending') ? 'active' : '' }}" href="{{route('po.sp.pending')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Basic">Pending</span></a>
        </li>
        <li><a class="d-flex align-items-center {{ Request::is('panel/purchase/service-provider/processing') ? 'active' : '' }}" href="{{route('po.sp.processing')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Basic">Processing</span></a>
        </li>
        <li><a class="d-flex align-items-center {{ Request::is('panel/purchase/service-provider/finish') ? 'active' : '' }}" href="{{route('po.sp.finish')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Basic">Finish</span></a>
        </li>
    </ul>
</li>
{{-- Service Part --}}

{{-- My Account --}}
<li class=" navigation-header"><span data-i18n="User Interface">Tickets</span><i data-feather="more-horizontal"></i>
</li>
<li class=" nav-item {{ Request::is('tickets.index/*') ? 'active' : '' }}"><a class="d-flex align-items-center" href="{{route('tickets.index')}}"><i data-feather="file"></i><span class="menu-title text-truncate" data-i18n="Feather">View</span></a>
</li>
{{-- My Account --}}

{{-- My Account --}}
<li class=" navigation-header"><span data-i18n="User Interface">My Account</span><i data-feather="more-horizontal"></i>
</li>
<li class=" nav-item {{ Request::is('business-details/my-form/*') ? 'active' : '' }}"><a class="d-flex align-items-center" href="{{route('bd.sp.show', Auth::id())}}"><i data-feather="file"></i><span class="menu-title text-truncate" data-i18n="Feather">My Company</span></a>
</li>
{{-- My Account --}}


