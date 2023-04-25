<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid px-5">
        <a class="navbar-brand pe-5" href="#">GYM Management System</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <li class="nav-item">
                    {{-- <a class="nav-link" aria-current="page" href="/dashboard">Dashboard</a> --}}
                    <x-nav-link :href="route('dashboard')" class="nav-link" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                </li>
                @role('admin')
                    <li class="nav-item">
                        <a class="nav-link" href="#">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Inventory</a>
                    </li>
                    <li class="nav-item">
                        <x-nav-link class="nav-link" :href="route('admin.user')" :active="request()->routeIs('admin.user')">
                            {{ __('Manage member') }}
                        </x-nav-link>
                    </li>
                    {{-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Manage member
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <x-nav-link :href="route('admin.user')" :active="request()->routeIs('admin.user')">
                                    {{ __('List of User') }}
                                </x-nav-link>
                            </li>
                        </ul>
                    </li> --}}
                @endrole
            </ul>



            <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <div class="btn-group dropstart">
                        <lord-icon src="https://cdn.lordicon.com/dxjqoygy.json" trigger="click" aria-expanded="false"
                            data-bs-toggle="dropdown" style="width:35px;height:35px">
                        </lord-icon>
                        <ul class="dropdown-menu">
                            @role('admin')
                                <li><a class="dropdown-item" href="#">Profile</a></li>
                                <li><a class="dropdown-item" href="#">Settings</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                            @endrole
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <a class="dropdown-item" href="route('logout')"
                                        onclick="event.preventDefault();
                                                this.closest('form').submit();">Logout</a>
                                </form>
                            </li>

                        </ul>
                    </div>

                </li>
            </ul>


        </div>
    </div>
</nav>
