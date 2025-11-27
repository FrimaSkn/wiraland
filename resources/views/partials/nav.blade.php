<div class="w-full pt-4 pb-10 shadow bg-white sticky z-[99] top-0">
    <div class="container flex justify-between items-center">
        <a href="{{ route('home') }}" class="flex items-center justify-center">
            <img src="{{ asset('assets/brand/logo.png') }}" alt="{{ config('app.name', 'Laravel') }}" class="size-16">
            <span class="text-base font-medium text-left leading-none">
                WIRA <br>
                LAND <br>
                SKETSA
            </span>
        </a>
        <div>
            <h3 class="text-xl">LANDSCAPE SPECIALIST</h3>
            <h4 class="text-xs font-bold flex items-center space-x-1">
                <span>DESIGN</span>
                <span class="size-1 rounded-full bg-black"></span>
                <span>BUILD</span>
                <span class="size-1 rounded-full bg-black"></span>
                <span>MAINTENANCE</span>
            </h4>
        </div>
    </div>
    <div class="absolute -bottom-8 left-0 w-full z-50">
        <div class="container">
            <div class="bg-secondary shadow">
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
                        <a href="{{ route('contact') }}" class="nav-link {{ activeMenu('contact') }}">
                            CONTACT
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
