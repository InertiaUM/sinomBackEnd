<!-- Because you are alive, everything is possible. - Thich Nhat Hanh -->
<nav class="bg-amber-600 dark:bg-slate-900 border-b-4 border-yellow-400 fixed w-full top-0 shadow-lg text-white z-20 rounded-br-[2rem]">
    <!-- Primary Navigation Menu -->
    <div class="flex justify-between h-20">
        <!-- Logo -->
        <div class="bg-amber-800 dark:bg-slate-800 box-border md:w-80 py-2 px-4 flex justify-between items-center shadow-md">
            <a href="{{ route('dashboard') }}" class="flex space-x-3 items-center">
                SINOM
            </a>
            <i @click="open = !open" class="mdi mdi-sort-variant mdi-24px hidden md:block cursor-pointer"></i>
        </div>

        <div class="flex items-center py-2 px-6 justify-end w-full gap-x-4 md:gap-x-6">
            <button class="rounded-md focus:outline-none" @click="
                dark = !dark
                window.localStorage.setItem('dark', dark)
                if (dark) htmlClasses.add('dark');
                else htmlClasses.remove('dark');
                " aria-label="Toggle color mode">
                <template x-if="dark">
                    <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                    </svg>
                </template>
                <template x-if="!dark">
                    <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" clip-rule="evenodd"></path>
                    </svg>
                </template>
            </button>

            <!-- Settings Dropdown -->
            <div class="ml-3 relative">
                <x-jet-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                        <button class="flex items-center gap-2 text-sm border-2 border-transparent rounded-full focus:outline-none transition">
                            <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                            <span class="font-bold hidden md:block">{{ Auth::user()->name }}</span>
                            <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </button>
                        @else
                        <span class="inline-flex rounded-md">
                            <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition">
                                {{ Auth::user()->name }}

                                <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </button>
                        </span>
                        @endif
                    </x-slot>

                    <x-slot name="content">
                        <!-- Account Management -->

                        <x-jet-dropdown-link href="{{ route('profile.show') }}">
                            {{ __('Profile') }}
                        </x-jet-dropdown-link>

                        @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                        <x-jet-dropdown-link href="{{ route('api-tokens.index') }}">
                            {{ __('API Tokens') }}
                        </x-jet-dropdown-link>
                        @endif

                        <div class="border-t border-gray-100"></div>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}" x-data>
                            @csrf

                            <x-jet-dropdown-link href="{{ route('logout') }}" @click.prevent="$root.submit();">
                                {{ __('Log Out') }}
                            </x-jet-dropdown-link>
                        </form>
                    </x-slot>
                </x-jet-dropdown>
            </div>

            {{-- Responsive Nav --}}
            <!-- <div class="md:hidden">
                <button @click="open = !open"
                class="inline-flex items-center justify-center p-2 rounded-md text-white focus:outline-none transition">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div> -->
        </div>

    </div>
</nav>
<!-- Backdrop -->
<div x-show="open" x-transition:enter="transition ease-in-out duration-150" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in-out duration-150" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="fixed inset-0 z-10 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center"></div>
{{-- SINOM Aside Responsive --}}
<aside x-show="open" x-transition:enter="transition-all ease-in-out duration-1000" x-transition:enter-start="transform -translate-x-full" x-transition:enter-end="transform transform-x-0" x-transition:leave="transition-all ease-in-out duration-1000" x-transition:leave-start="transform transform-x-0" x-transition:leave-end="transform -translate-x-full" @click.away="open = false" @keydown.escape="open = false" class="bg-amber-800 dark:bg-gray-700 fixed top-20 bottom-0 w-64 overflow-y-auto z-20">
    <!-- Responsive Settings Options -->
    <div class="pt-4 pb-1 space-y-1">
        <x-sinom-dropdown icon="home-outline" title="Dashboard" :href="route('dashboard')" />

        @can('superAdministrate', Auth::user())
        <x-sinom-dropdown icon="archive" title="Administrator" :subs="[
            (object) ['link' => route('verification.index'), 'icon' => 'account-multiple', 'title' => 'Verifikasi Calon Perusahaan'],
        ]" />
        @endcan
    </div>
</aside>