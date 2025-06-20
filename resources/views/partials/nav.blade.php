<header class="navbar-expand-md">
    <div class="collapse navbar-collapse" id="navbar-menu">
        <div class="navbar">
            <div class="container-xl">
                <div class="row flex-column flex-md-row flex-fill align-items-center justify-between">
                    <div class="col">
                        <ul class="navbar-nav">
                            @if (auth()->user()->role === 'admin')
                                <li class="nav-item {{ request()->routeIs('dashboard.index') ? 'active' : '' }}">
                                    <a class="nav-link" href="{{ route('dashboard.index') }}">

                                        <span class="nav-link-title"> Dashboard </span>
                                    </a>
                                </li>
                            @endif
                            <li class="nav-item {{ request()->routeIs('sensor.index') ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('sensor.index') }}">
                                    <span class="nav-link-title"> Sensor </span>
                                </a>
                            </li>
                            @if (auth()->user()->role === 'admin')
                                <li class="nav-item {{ request()->routeIs('device.index') ? 'active' : '' }}">
                                    <a class="nav-link" href="{{ route('device.index') }}">
                                        <span class="nav-link-title"> Device </span>
                                    </a>
                                </li>
                            @endif
                        </ul>
                    </div>
                    @if (auth()->check())
                        <div class="col col-md-auto">
                            <ul class="navbar-nav">
                                {{-- <li
                                    class="nav-item {{ request()->routeIs('auth.viewChangePassword') ? 'active' : '' }}">
                                    <a class="nav-link" href="/change-password">
                                        <span class="nav-link-title"> Change Password </span>
                                    </a>
                                </li> --}}
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <form action="/logout" method="post">
                                            @csrf
                                            @method('POST')
                                            <button type="submit" class="btn btn-6 btn-danger w-100"> Log out </button>
                                        </form>
                                    </li>   
                                </ul>
                            </ul>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</header>
