<li class="nav-item">
    <a class="nav-link {{ Route::is('backoffice.permission*') ? 'active' : '' }}"
        href="{{ route('backoffice.permission.index') }}">
        <span class="nav-link-icon d-md-none d-lg-inline-block mr-1">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-search" width="24"
                height="24" viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor" fill="none"
                stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <circle cx="12" cy="7" r="4"></circle>
                <path d="M6 21v-2a4 4 0 0 1 4 -4h1"></path>
                <circle cx="16.5" cy="17.5" r="2.5"></circle>
                <path d="M18.5 19.5l2.5 2.5"></path>
            </svg>
        </span>
        <span class="nav-link-title">
            Permission
        </span>
    </a>
</li>

<li class="nav-item">
    <a class="nav-link {{ Route::is('backoffice.role*') ? 'active' : '' }}" href="{{ route('backoffice.role.index') }}">
        <span class="nav-link-icon d-md-none d-lg-inline-block mr-1">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-check" width="24"
                height="24" viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor" fill="none"
                stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <circle cx="9" cy="7" r="4"></circle>
                <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                <path d="M16 11l2 2l4 -4"></path>
            </svg>
        </span>
        <span class="nav-link-title">
            Role
        </span>
    </a>
</li>

<li class="nav-item">
    <a class="nav-link {{ Route::is('backoffice.user*') ? 'active' : '' }}" href="{{ route('backoffice.user.index') }}">
        <span class="nav-link-icon d-md-none d-lg-inline-block mr-1">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-circle" width="24"
                height="24" viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor" fill="none"
                stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <circle cx="12" cy="12" r="9"></circle>
                <circle cx="12" cy="10" r="3"></circle>
                <path d="M6.168 18.849a4 4 0 0 1 3.832 -2.849h4a4 4 0 0 1 3.834 2.855"></path>
            </svg>
        </span>
        <span class="nav-link-title">
            User
        </span>
    </a>
</li>

<li class="nav-item">
    <a class="nav-link {{ Route::is('backoffice.category*') ? 'active' : '' }}"
        href="{{ route('backoffice.category.index') }}">
        <span class="nav-link-icon d-md-none d-lg-inline-block mr-1">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-category-2" width="24"
                height="24" viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor" fill="none"
                stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path d="M14 4h6v6h-6z"></path>
                <path d="M4 14h6v6h-6z"></path>
                <circle cx="17" cy="17" r="3"></circle>
                <circle cx="7" cy="7" r="3"></circle>
            </svg>
        </span>
        <span class="nav-link-title">
            Kategori
        </span>
    </a>
</li>

<li class="nav-item">
    <a class="nav-link {{ Route::is('backoffice.supplier*') ? 'active' : '' }}"
        href="{{ route('backoffice.supplier.index') }}">
        <span class="nav-link-icon d-md-none d-lg-inline-block mr-1">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-truck-delivery" width="24"
                height="24" viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor" fill="none"
                stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <circle cx="7" cy="17" r="2"></circle>
                <circle cx="17" cy="17" r="2"></circle>
                <path d="M5 17h-2v-4m-1 -8h11v12m-4 0h6m4 0h2v-6h-8m0 -5h5l3 5"></path>
                <line x1="3" y1="9" x2="7" y2="9"></line>
            </svg>
        </span>
        <span class="nav-link-title">
            Supplier
        </span>
    </a>
</li>