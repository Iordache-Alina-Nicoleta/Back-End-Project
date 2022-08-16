<nav class="navbar navbar-expand-md navbar-light border-bottom sticky-top">
    <div class="container">
        <!-- Logo -->
        <a class="navbar-brand" href="/">
            <x-application-logo width="36" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav me-auto">
                <li><x-nav-link  href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                    <h4><b>Home</b></h4>
                </x-nav-link></li>
              
                <li><x-nav-link href="{{ route('Category') }}" :active="request()->routeIs('Category')">
                    <h4><b>Category</b></h4>
                </x-nav-link></li>

                <li><x-nav-link href="{{ route('Author') }}" :active="request()->routeIs('Author')">
                    <h4><b>Author</b></h4>
                </x-nav-link></li>

                <li><x-nav-link href="{{ route('LocationRack') }}" :active="request()->routeIs('LocationRack')">
                    <h4><b>Location-Rack</b></h4>
                </x-nav-link></li>

                <li><x-nav-link href="{{ route('Book') }}" :active="request()->routeIs('Book')">
                    <h4><b>Book</b></h4>
                </x-nav-link></li>

                <li><x-nav-link href="{{ route('IssueBook') }}" :active="request()->routeIs('IssueBook')">
                    <h4><b>Issue-Book</b></h4>
                </x-nav-link></li>

                <li><x-nav-link href="{{ route('Client') }}" :active="request()->routeIs('Client')">
                    <h4><b>Client</b></h4>
                </x-nav-link></li>


                <li><x-nav-link href="{{ route('welcome') }}" :active="request()->routeIs('welcome')">
                    <h4><b>Logout</b></h4>
                </x-nav-link></li>

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav">

                <!-- Settings Dropdown -->
                
                @auth
                    <x-dropdown id="settingsDropdown" style="color:black; font-size:18px">
                        <x-slot name="trigger">
                            {{ Auth::user()->name }}
                        </x-slot>

                        <x-slot name="content">
                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <li>
                                    <x-dropdown-link :href="route('profile')">           
                                    {{ __("Profile") }}
                                </x-dropdown-link>
                                </li><hr/>

                                <li>
                                    <x-dropdown-link :href="route('settings')">           
                                    {{ __("Settings") }}
                                </x-dropdown-link>
                                </li><hr/>

                                <li>
                                <x-dropdown-link :href="route('logout')"
                                                 onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                                </li>
                                
                            </form>
                        </x-slot>
                    </x-dropdown>
                @endauth
            
                
            </ul>
        </div>
    </div>
</nav>