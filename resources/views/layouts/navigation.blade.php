<style>
    @media only screen and (max-width: 340px) {
        .class {
            margin-right: 700px
        }

        #nav {
            background-color: #F97316;
        }

        #titulo {
            color: black;
        }

        .color {
            color: black;
            padding-top: 15%
        }

        #login {
            color: black;
        }

        #navLink {}

        .añadir {
            padding-right: 30%;
            padding-top: 5%;
            color: black
        }

        .lineaarriba {
            height: 1px;
            margin-top: 5px;
            width: 200%;
        }

        #logo {
            margin-left: 80px;
        }

        #boton {}

        #titulo2 {
            color: blue;
        }
    }

    @media only screen and (max-width: 500px) {
        .class {
            margin-right: 700px
        }

        #nav {
            background-color: #F97316;
        }

        #titulo {
            color: black;
        }

        .color {
            color: black;
            padding-top: 15%
        }

        #login {
            color: black;
        }

        #navLink {}

        .añadir {
            padding-right: 30%;
            padding-top: 5%;
            color: black
        }

        .lineaarriba {
            height: 1px;
            margin-top: 5px;
            width: 200%;
        }

        #logo {
            margin-left: 80px;
        }

        #boton {}

        #titulo2 {
            color: blue;
        }
    }

    @media only screen and (max-width: 950px) {
        .class {
            margin-right: 700px
        }

        #nav {
            background-color: #F97316;
        }

        #titulo {
            color: black;
        }

        .color {
            color: black;
            padding-top: 15%
        }

        #login {
            color: black;
        }

        #navLink {}

        .añadir {
            padding-right: 30%;
            padding-top: 5%;
            color: black
        }

        .lineaarriba {
            height: 1px;
            margin-top: 5px;
            width: 200%;
        }

        #logo {
            margin-left: 80px;
        }

        #boton {}

        #titulo2 {
            color: blue;
        }
    }
</style>


<nav class="bg-white border-gray-200 px-2 sm:px-4 py-2.5 rounded dark:bg-gray-900" id="nav">
    <!--<img class="lineaarriba"
        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAZ4AAAB6CAMAAAC4AMUdAAAAKlBMVEX///8AAADKysqysrLd3d3W1tbv7+83Nzfk5OTs7OwiIiLg4OCvr6/AwMBbeG6+AAAAb0lEQVR4nO3V2w2AIBQDUARfKO6/rhtA+LomnjNBk6ZpSgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAF+zZuJsg3b2YyHQ2a+nXtEB/+0ezCe3QpT2zPwQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADzXqTSCsuuiCM2AAAAAElFTkSuQmCC">-->
    <div class="container flex  justify-between" id="global">
        <div class="flex items-center">
            <img id="logo"
                src="data:image/png;base64,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"
                class="h-6 mr-3 sm:h-9" alt="Flowbite Logo" />

        </div>
        @auth


            <div class="flex justify-between h-16" id="nav">
                <div class="class">
                    <!-- Navigation Links -->
                    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex" id="navLink" id="nav">
                        <x-nav-link :href="route('landing.index')" :active="request()->routeIs('landing.index')" class="añadir">
                            <b>{{ __('Inicio') }}</b>
                        </x-nav-link>
                        <x-nav-link :href="route('actividades.index')" :active="request()->routeIs('actividades.index')" class="añadir">
                            <b>{{ __('Actividades') }}</b>
                        </x-nav-link>
                        <x-nav-link :href="route('instalaciones.index')" :active="request()->routeIs('instalaciones.index')" class="añadir">
                            <b>{{ __('Instalaciones') }}</b>
                        </x-nav-link>
                        <x-nav-link :href="route('matricula.index')" :active="request()->routeIs('matricula.index')" class="añadir">
                            <b>{{ __('Matricula') }}</b>
                        </x-nav-link>
                        <x-nav-link :href="route('reserva.index')" :active="request()->routeIs('reserva.index')" class="añadir">
                            <b>{{ __('Reserva') }}</b>
                        </x-nav-link>
                        @if (Auth::user()->tipo == 'admin')
                        @endif
                    </div>
                </div>
            @endauth
            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ml-6" id="nav">
                @auth
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button
                                class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150"
                                id="boton">
                                <div>{{ Auth::user()->name }}</div>
                                <div class="ml-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <x-dropdown-link :href="route('profile.edit')">
                                {{ __('Profile') }}
                            </x-dropdown-link>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline"
                        id="login">Log in</a>
                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline"
                        id="login">Register</a>
                @endauth
            </div>

            <!-- Hamburger -->
            @auth

                <div class="-mr-2 flex items-center sm:hidden" id="nav">
                    <button @click="open = ! open"
                        class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                            <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Responsive Navigation Menu -->
        <div :class="{ 'block': open, 'hidden': !open }" class="hidden sm:hidden">
            <div class="pt-2 pb-3 space-y-1">
                <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                    {{ __('Dashboard') }}
                </x-responsive-nav-link>
            </div>

            <!-- Responsive Settings Options -->
            <div class="pt-4 pb-1 border-t border-gray-200">
                <div class="px-4">
                    <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                    <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                </div>

                <div class="mt-3 space-y-1">
                    <x-responsive-nav-link :href="route('profile.edit')">
                        {{ __('Profile') }}
                    </x-responsive-nav-link>

                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-responsive-nav-link>
                    </form>
                </div>
            </div>
        @else
        @endauth
    </div>

    <!--<img class="lineaarriba"
        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAZ4AAAB6CAMAAAC4AMUdAAAAKlBMVEX///8AAADKysqysrLd3d3W1tbv7+83Nzfk5OTs7OwiIiLg4OCvr6/AwMBbeG6+AAAAb0lEQVR4nO3V2w2AIBQDUARfKO6/rhtA+LomnjNBk6ZpSgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAF+zZuJsg3b2YyHQ2a+nXtEB/+0ezCe3QpT2zPwQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADzXqTSCsuuiCM2AAAAAElFTkSuQmCC">
    <div class="container flex  justify-between">-->
</nav>
