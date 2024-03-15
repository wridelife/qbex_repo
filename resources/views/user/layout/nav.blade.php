<div id="navigation" class="duration-300 ease-in-out bg-transparent absolute py-6 w-full" style="z-index: 25;">
    <nav class="flex justify-between items-center px-4 xl:px-10">
        <a class="text-lg font-semibold" href="#"><img class="h-7" src="{{ asset('img/assets/logo/logo-zeus-white.svg') }}" alt="" width="auto"></a>
        <div class="lg:hidden">
            <button class="navbar-burger flex items-center p-3 hover:bg-blue-300 rounded">
                <svg class="text-white block h-4 w-4" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" fill="currentColor">
                    <title>Mobile menu</title>
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                </svg>
            </button>
        </div>
        <ul class="hidden lg:ml-auto lg:mr-12 lg:flex lg:items-center lg:space-x-12">
            <li><a class="text-white hover:text-blue-100 text-sm font-semibold" href="{{ route('blog') }}">Blog</a></li>
            <li><a class="text-white hover:text-blue-100 text-sm font-semibold" href="{{ route('viewBlog', 1) }}">View Blog</a></li>
            {{-- <li><a class="text-white hover:text-blue-100 text-sm font-semibold" href="{{ route('') }}"></a></li>
            <li><a class="text-white hover:text-blue-100 text-sm font-semibold" href="{{ route('') }}"></a></li> --}}
        </ul>
        <div class="hidden lg:block">
            @guest
                <a class="inline-block py-3 px-8 text-sm leading-normal font-medium rounded bg-blue-500 bg-opacity-25 hover:bg-opacity-50 text-blue-500 transition duration-200" href="{{ route('user.registrationForm') }}">
                    {{ __('crud.general.register') }}
                </a>
            @endguest
            @auth('web')
                <a class="inline-block py-3 px-8 text-sm leading-normal font-medium rounded bg-blue-500 bg-opacity-25 hover:bg-opacity-50 text-blue-500 transition duration-200" href="{{ route('user.logout') }}">
                    {{ __('crud.general.logout') }}
                </a>
            @else
                <a class="inline-block py-3 px-8 text-sm leading-normal font-medium rounded bg-blue-500 bg-opacity-25 hover:bg-opacity-50 text-blue-500 transition duration-200" href="{{ route('user.login') }}">
                    {{ __('crud.general.login') }}
                </a>
            @endauth
        </div>
    </nav>

    <div class="hidden navbar-menu relative z-50">
        <div class="navbar-backdrop fixed inset-0 bg-gray-800 opacity-25"></div>
        <nav class="fixed top-0 left-0 bottom-0 flex flex-col w-5/6 max-w-sm py-6 px-6 bg-white border-r overflow-y-auto">
            <div class="flex items-center mb-8">
                <a class="mr-auto text-lg font-semibold leading-none" href="#"><img class="h-7" src="{{ asset('img/assets/logo/logo-zeus-red.svg') }}" alt="" width="auto"></a>
                <button class="navbar-close">
                    <svg class="h-6 w-6 text-gray-500 cursor-pointer hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
            <div>
                <ul>
                    <li class="mb-1"><a class="block p-4 text-sm font-medium text-gray-900 hover:bg-gray-50 rounded" href="#">About</a></li>
                    <li class="mb-1"><a class="block p-4 text-sm font-medium text-gray-900 hover:bg-gray-50 rounded" href="#">Company</a></li>
                    <li class="mb-1"><a class="block p-4 text-sm font-medium text-gray-900 hover:bg-gray-50 rounded" href="#">Services</a></li>
                    <li class="mb-1"><a class="block p-4 text-sm font-medium text-gray-900 hover:bg-gray-50 rounded" href="#">Testimonials</a></li>
                </ul>
            </div>
            <div class="mt-auto">
                <div class="pt-6">
                    <a class="block py-3 text-center text-sm leading-normal rounded bg-red-50 hover:bg-red-200 text-red-500 font-semibold transition duration-200" href="#">
                        Contact Us
                    </a>
                </div>
                <p class="mt-6 mb-4 text-sm text-center text-gray-500">
                    <span>&copy; 2021 All rights reserved.</span>
                </p>
            </div>
        </nav>
    </div>
</div>