<header>
    <div class="border-b border-indigo-darkest bg-white py-4 px-2">
        <div class="container mx-auto">
            <nav class="flex items-center justify-between flex-wrap">
                <a href="{{ url('/') }}" class="flex items-center flex-no-shrink text-white mr-6">
                    <img class="h-16 w-16" src="{{ asset('img/logo.png') }}" alt="">
                    <span class="text-red-600 text-4xl uppercase font-semibold">Rentacar</span>
                </a>
                <div class="block sm:hidden">
                    <button class="navbar-burger flex items-center px-3 py-2 border rounded text-red-500 border-red-500 hover:text-red-300 hover:border-red-300">
                        <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <title>Menu</title>
                            <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/>
                        </svg>
                    </button>
                </div>
                <div id="main-nav" class="w-full flex-grow sm:flex items-center sm:w-auto hidden">
                    <div class="text-sm sm:flex-grow">
                        <a href="#" class="no-underline font-bold block mt-4 sm:inline-block sm:mt-0 text-grey-900 hover:text-blue-600 mr-4">
                            Arabalar
                        </a>
                        <a href="#" class="no-underline font-bold block mt-4 sm:inline-block sm:mt-0 text-grey-900 hover:text-blue-600 mr-4">
                            Şubelerimiz
                        </a>
                    </div>
                    <div class="no-underline block mt-4 sm:inline-block sm:mt-0 text-grey-100 font-light mr-4">
                        +9 000 00 00
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>
