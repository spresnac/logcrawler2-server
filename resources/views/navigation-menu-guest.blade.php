<nav x-data="{ open: false }" class="bg-sky-900 border-b border-gray-100">
    <div class="max-w-full mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-20">
            <div class="flex">
                <div class="flex-shrink-0 flex items-center">
                    <a href="{{ route('page.index') }}">
                        <img src="{{ asset('storage/logo.png') }}" class="w-30 max-w-60 h-20 max-h-48" />
                    </a>
                </div>
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-jet-nav-link href="{{ route('page.index') }}" :active="request()->routeIs('page.index')" class="text-gray-200">
                        {{ __('Home') }}
                    </x-jet-nav-link>
                </div>
                @if (Route::has('login') && config('logcrawler_server.enable_visible_login'))
                    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="text-sm text-gray-200 underline">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="text-sm text-gray-200 underline">Log in</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-200 underline">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
            </div>
        </div>
    </div>
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-jet-responsive-nav-link href="{{ route('page.index') }}" :active="request()->routeIs('page.index')">
                {{ __('Home') }}
            </x-jet-responsive-nav-link>
        </div>
    </div>
</nav>
