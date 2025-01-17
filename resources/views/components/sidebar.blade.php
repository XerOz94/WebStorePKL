<div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary">
    <div class="offcanvas-md offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu"
        aria-labelledby="sidebarMenuLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="sidebarMenuLabel">Company name</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu"
                aria-label="Close"></button>
        </div>
        <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
            <ul class="nav flex-column">
                <li class="nav-item nav-tabs">
                    <x-navlink href="/dashboard" :active="request()->is('dashboard')">
                        <svg class="bi">
                            <use xlink:href="#house-fill" />
                        </svg>
                        Dashboard
                    </x-navlink>
                </li>
                <li class="nav-item nav-tabs">
                    <x-navlink href="/dashboard/products" :active="request()->is('dashboard/products')">
                        <svg class="bi">
                            <use xlink:href="#cart" />
                        </svg>
                        Products
                    </x-navlink>
                </li>
            </ul>
            </ul>
        </div>
    </div>
</div>
