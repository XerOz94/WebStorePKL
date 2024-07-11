<nav class="navbar bg-primary navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
    <div class="container">
        <a class="navbar-brand" href="/">Bajuditoko</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <x-navlink href="/" :active="request()->is('/')">Home</x-navlink>
                </li>
                <li class="nav-item">
                    <x-navlink href="/stores" :active="request()->is('stores')">Store</x-navlink>
                </li>
                <li class="nav-item">
                    <x-navlink href="/categories" :active="request()->is('categories')">Categories</x-navlink>
                </li>
                <li class="nav-item">
                    <x-navlink href="/contact" :active="request()->is('contact')">Contact</x-navlink>
                </li>
            </ul>
            @auth
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <button class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            Hello, {{ auth()->user()->name }}
                        </button>
                        <ul class="dropdown-menu dropdown-menu-dark">
                            <li><a class="dropdown-item" href="/dashboard">My Dashboard</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <form action="/logout" method="post">
                                    @csrf
                                    <button type="submit" class="dropdown-item">
                                        Logout
                                    </button>
                            </li>
                            </form>
                        </ul>
                    </li>
                </ul>
            @else
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <x-navlink href="/login" :active="request()->is('login')">Login</x-navlink>
                    </li>
                </ul>
            @endauth

        </div>
    </div>
</nav>
