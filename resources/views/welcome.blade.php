<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Food ESP</title>

    @vite('resources/css/app.css')

</head>

<body class="text-gray-600 font-body">

    <div class="grid md:grid-cols-3">
        <div class="md:col-span-1 md:flex md:justify-end">
            <!-- start of nav -->
            <nav class="text-right">
                <div class="flex justify-between items-center">
                    <h1 class="font-bold uppercase p-4 border-b border-gray-100">
                        <a href="/" class="hover:text-gray-700 tracking-widest">Food ESP</a>
                    </h1>
                    <div class="px-4 cursor-pointer md:hidden" id="burger">
                        <svg class="w-6 h-6" fill="none" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                            <path d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </div>
                </div>
                <ul class="text-sm mt-6 hidden md:block" id="menu">
                    <li class="text-gray-700 font-bold py-1">
                        <a href="#" class="block px-4 flex justify-end border-r-4 border-primary">
                            <span>Home</span>
                            <svg class="w-5 ml-2" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                                </path>
                            </svg>
                        </a>
                    </li>
                    <li class="py-1">
                        <a href="#" class="block px-4 flex justify-end border-r-4 border-white">
                            <span>About</span>
                            <svg class="w-5 ml-2" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z">
                                </path>
                            </svg>
                        </a>
                    </li>
                    <li class="py-1">
                        <a href="#" class="block px-4 flex justify-end border-r-4 border-white">
                            <span>Contact</span>
                            <svg class="w-5 ml-2" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                </path>
                            </svg>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- end of nav -->
        </div>
        <!-- start of main content -->
        <main class="px-16 py-6 md:col-span-2 bg-gray-100">
            <div class="flex justify-center md:justify-end">
                <a href="#"
                    class="btn text-primary border-primary md:border-2 hover:bg-primary hover:text-white transition ease-out duration-500">Log
                    in</a>
                <a href="#"
                    class="btn text-primary ml-2 border-primary md:border-2 hover:bg-primary hover:text-white transition ease-out duration-500">Sign
                    up</a>
            </div>

            <header class="mt-4">
                <h2 class="text-gray-700 text-6xl font-semibold leading-none tracking-wider">Recipes</h2>
                <h3 class="text-2xl font-semibold tracking-wider">For ESP</h3>
            </header>

            <div>
                <h4 class="font-bold pb-2 mt-12 border-b border-gray-200">Latest Recipes</h4>

                <div class="mt-8 grid lg:grid-cols-3 gap-10">
                    <!-- card1 go here -->
                    <div class="card hover:shadow-lg">
                        <img src="{{ '/images/stew.jpg' }}" alt="stew" class="h-32 sm:h-48 w-full object-cover">
                        <div class="m-4">
                            <span class="font-bold">5 Bean Chili Stew</span>
                            <span class="block text-gray-500 text-sm">Recipe by Asad</span>
                        </div>
                        <div class="badge">
                            <svg class="inline-block w-5" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                                <path d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <span>25 mins</span>
                        </div>
                    </div>
                    <!-- card1 is end here -->
                    <!-- card2 go here -->
                    <div class="card hover:shadow-lg">
                        <img src="{{ '/images/noodles.jpg' }}" alt="noodles" class="h-32 sm:h-48 w-full object-cover">
                        <div class="m-4">
                            <span class="font-bold">Veg Noodles</span>
                            <span class="block text-gray-500 text-sm">Recipe by Asad</span>
                        </div>
                        <div class="badge">
                            <svg class="inline-block w-5" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                                <path d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <span>25 mins</span>
                        </div>
                    </div>
                    <!-- card2 is end here -->
                    <!-- card3 go here -->
                    <div class="card hover:shadow-lg">
                        <img src="{{ '/images/curry.jpg' }}" alt="curry" class="h-32 sm:h-48 w-full object-cover">
                        <div class="m-4">
                            <span class="font-bold">Tofu Curry</span>
                            <span class="block text-gray-500 text-sm">Recipe by Asad</span>
                        </div>
                        <div class="badge">
                            <svg class="inline-block w-5" fill="none" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                                <path d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <span>25 mins</span>
                        </div>
                    </div>
                    <!-- card3 is end here -->
                </div>

                <h4 class="font-bold pb-2 mt-12 border-b border-gray-200">Most Popular</h4>

                <div class="mt-8 grid lg:grid-cols-3 gap-10">
                    <!-- card1 go here -->

                    <div class="card hover:shadow-lg">
                        <img src="{{ '/images/stew.jpg' }}" alt="stew" class="h-32 sm:h-48 w-full object-cover">
                        <div class="m-4">
                            <span class="font-bold truncate block">5 Bean Chili Stew with Feta Cheese</span>
                            <span class="block text-gray-500 text-sm">Recipe by Asad</span>
                        </div>
                        <div class="badge">
                            <svg class="inline-block w-5" fill="none" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                                <path d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <span>25 mins</span>
                        </div>
                    </div>
                    <!-- card1 is end here -->
                    <!-- card2 go here -->
                    <div class="card hover:shadow-lg">
                        <img src="{{ '/images/noodles.jpg' }}" alt="noodles"
                            class="h-32 sm:h-48 w-full object-cover">
                        <div class="m-4">
                            <span class="font-bold">Veg Noodles</span>
                            <span class="block text-gray-500 text-sm">Recipe by Asad</span>
                        </div>
                        <div class="badge">
                            <svg class="inline-block w-5" fill="none" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                                <path d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <span>25 mins</span>
                        </div>
                    </div>
                    <!-- card2 is end here -->
                    <!-- card3 go here -->
                    <div class="card hover:shadow-lg">
                        <img src="{{ '/images/curry.jpg' }}" alt="curry" class="h-32 sm:h-48 w-full object-cover">
                        <div class="m-4">
                            <span class="font-bold">Tofu Curry</span>
                            <span class="block text-gray-500 text-sm">Recipe by Asad</span>
                        </div>
                        <div class="badge">
                            <svg class="inline-block w-5" fill="none" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                                <path d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <span>25 mins</span>
                        </div>
                    </div>
                    <!-- card3 is end here -->
                </div>
            </div>

            <div class="mt-12 flex justify-center">
                <div
                    class="btn bg-secondary-100 text-secondary-200 inline-block hover:shadow-inner transform hover:scale-125 hover:bg-opacity-50 transition ease-out duration-300">
                    Load more
                </div>
            </div>
        </main>
        <!-- end of main content -->
    </div>

    <script>
        const burger = document.querySelector('#burger');
        const menu = document.querySelector('#menu');

        burger.addEventListener('click', (e) => {
            if (menu.classList.contains('hidden')) {
                menu.classList.remove('hidden');
            } else {
                menu.classList.add('hidden');
            }
        });
    </script>
</body>

</html>
