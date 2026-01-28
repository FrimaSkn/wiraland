<div x-data="{ openMenu: false }" class="w-full py-4 lg:pt-4 lg:pb-10 shadow bg-white sticky z-[99] top-0">
    <div class="container flex justify-between items-center relative">
        <div class="flex items-center gap-1">
            <!-- Mobile Menu Toggle -->
            <button class="btn_toggle lg:hidden" @click="openMenu = !openMenu" :aria-expanded="openMenu" aria-controls="mobile-navigation" aria-label="Navigation Menu">
                <svg class="vbp-header-menu-button__svg">
                    <line x1="0" y1="50%" x2="100%" y2="50%" class="top" shape-rendering="crispEdges" />
                    <line x1="0" y1="50%" x2="100%" y2="50%" class="middle" shape-rendering="crispEdges" />
                    <line x1="0" y1="50%" x2="100%" y2="50%" class="bottom" shape-rendering="crispEdges" />
                </svg>
            </button>
            <a href="{{ route('home') }}" class="flex items-center justify-center max-md:absolute max-md:left-1/2 max-md:-translate-x-1/2">
                <img src="{{ asset('assets/brand/logo-wiraland.png') }}" alt="{{ config('app.name', 'Laravel') }}" class="h-12 md:h-18">
            </a>
        </div>
        <div class="max-md:hidden">
            <h3 class="text-xs md:text-xl">LANDSCAPE SPECIALIST</h3>
            <h4 class="text-[9px] md:text-xs font-bold flex items-center space-x-1">
                <span>DESIGN</span>
                <span class="size-1 rounded-full bg-black"></span>
                <span>BUILD</span>
                <span class="size-1 rounded-full bg-black"></span>
                <span>MAINTENANCE</span>
            </h4>
        </div>
    </div>
    <div class="fixed max-lg:backdrop-blur-sm max-lg:inset-0 lg:absolute lg:-bottom-8 lg:left-0 w-full z-50 transition-all duration-400 max-lg:invisible" :class="openMenu ? 'max-lg:visible' : 'max-lg:invisible'">
        <div class="lg:container">
            <div @mousedown.outside="openMenu = false" :class="openMenu ? 'max-lg:-translate-x-0' : 'max-lg:-translate-x-full'" class="transition-all duration-400 bg-secondary shadow max-lg:absolute max-lg:top-0 max-lg:left-0 max-lg:bottom-0 max-lg:w-10/12 max-lg:py-4 max-lg:px-2 max-lg:drop-shadow-2xl z-10 transition-all">
                <ul class="nav-menu">
                    <li>
                        <a href="{{ route('home') }}" class="nav-link {{ activeMenu('home') }}">
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('about') }}" class="nav-link {{ activeMenu('about') }}">
                            About
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('service') }}" class="nav-link {{ activeMenu('service') }}">
                            Services
                        </a>
                    </li>
                    {{-- <li>
                        <a href="{{ route('service') }}" class="nav-link {{ activeMenu('home') }}">
                            Product
                        </a>
                    </li> --}}
                    <li>
                        <a href="{{ route('client') }}" class="nav-link {{ activeMenu('client') }}">
                            CLIENTS
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('portfolio') }}" class="nav-link {{ activeMenu('portfolio') }}">
                            PORTFOLIOS
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('article.index') }}" class="nav-link {{ activeMenu('article') }}">
                            ARTICLES
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('success-stories') }}" class="nav-link {{ activeMenu('success-stories') }} lg:text-nowrap">
                            SUCCESS STORIES
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('contact.index') }}" class="nav-link {{ activeMenu('contact.index') }}">
                            CONTACT
                        </a>
                    </li>
                </ul>
                <!-- Close Button -->
                <button x-cloak x-show="openMenu" class="absolute top-0 right-0 bottom-0" @click="openMenu = !openMenu" :aria-expanded="openMenu" aria-controls="mobile-navigation" aria-label="Close Navigation Menu">
                    <svg xmlns="http://www.w3.org/2000/svg" class="size-8 absolute top-2 left-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
</div>
