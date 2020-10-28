<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>$BASED community - @yield('title')</title>
    <meta name="description" content="Everything you need to know about $BASED">
    <meta name="keywords" content="">
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Lato');

        html {
            font-family: 'Lato', sans-serif;
        }
    </style>
    @trixassets
</head>

<body class="bg-pink-200 tracking-wider tracking-normal">
    <nav id="header" class="fixed w-full z-10 top-0 bg-blue-200 border-b-8 border-blue-800">
        <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 py-4">
            <div class="pl-4 flex items-center">
                <a class="text-blue-800 text-base no-underline hover:no-underline font-extrabold text-xl" href="#">
                    $BASED community
                </a>
            </div>
            <div class="block lg:hidden pr-4">
                <button id="nav-toggle"
                    class="flex items-center px-3 py-2 border rounded text-gray-500 border-gray-600 hover:text-gray-900 hover:border-blue-500 appearance-none focus:outline-none">
                    <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <title>Menu</title>
                        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                    </svg>
                </button>
            </div>
            <div class="w-full flex-grow lg:flex  lg:content-center lg:items-center lg:w-auto hidden lg:block mt-2 lg:mt-0 z-20"
                id="nav-content">
                <div class="flex-1 w-full mx-auto max-w-sm content-center py-4 lg:py-0">
                    {{-- <div class="relative pull-right pl-4 pr-4 md:pr-0">
                        <input type="search" placeholder="Search"
                            class="w-full bg-gray-100 text-sm text-gray-800 transition border focus:outline-none focus:border-blue-500 rounded py-1 px-2 pl-10 appearance-none leading-normal">
                        <div class="absolute search-icon" style="top: 0.375rem;left: 1.75rem;">
                            <svg class="fill-current pointer-events-none text-gray-800 w-4 h-4"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path
                                    d="M12.9 14.32a8 8 0 1 1 1.41-1.41l5.35 5.33-1.42 1.42-5.33-5.34zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z">
                                </path>
                            </svg>
                        </div>
                    </div> --}}
                </div>
                <ul class="list-reset lg:flex justify-end items-center">
                    {{-- <li class="mr-3 py-2 lg:py-0">
                        <a class="inline-block py-2 px-4 text-gray-900 font-bold no-underline" href="#">Active</a>
                    </li>
                    <li class="mr-3 py-2 lg:py-0">
                        <a class="inline-block text-gray-600 no-underline hover:text-gray-900 hover:underline py-2 px-4"
                            href="#">link</a>
                    </li> --}}
                    @role('editor')
                    <li class="mr-3 py-2 lg:py-0">
                        <a href="{{ route('article.create') }}"
                            class="bg-pink-500 text-white p-1 rounded-md font-bold text-sm">Add article</a>
                    </li>
                    @endrole
                    <li class="py-2 lg:py-0">
                        <a class="inline-block text-gray-600 no-underline hover:text-gray-900 hover:underline py-2 px-4"
                            href="https://based.money" target="_blank">Go to official website ></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--Container-->
    <div class="container w-full flex flex-wrap mx-auto px-2 pt-8 lg:pt-16 mt-16">
        <div class="w-full lg:w-1/5 lg:px-6 text-xl text-gray-800 leading-normal">
            <p class="text-base font-bold py-2 lg:pb-6 text-gray-700 lg:hidden">Menu</p>
            <div class="block lg:hidden sticky inset-0">
                <button id="menu-toggle"
                    class="flex w-full justify-end px-3 py-3 bg-white lg:bg-transparent border rounded border-gray-600 hover:border-blue-500 appearance-none focus:outline-none">
                    <svg class="fill-current h-3 float-right" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                    </svg>
                </button>
            </div>
            <div class="w-full sticky inset-0 hidden h-64 lg:h-auto overflow-x-hidden overflow-y-auto lg:overflow-y-hidden lg:block mt-0 border border-gray-400 lg:border-transparent bg-white shadow lg:shadow-none lg:bg-transparent z-20"
                style="top:5em;" id="menu-content">
                @include('partials.menu')
            </div>
        </div>

        <div
            class="w-full lg:w-4/5 p-8 mt-6 lg:mt-0 text-gray-900 leading-normal bg-yellow-100 border-8 border-blue-800 border-rounded pb-6 shadow-lg">

            @yield('content')
        </div>
        <!--Back link -->
        <div class="w-full lg:w-4/5 lg:ml-auto text-base md:text-sm text-gray-500 px-4 py-6">
            {{-- <span class="text-base text-blue-500 font-bold">&lt;</span> <a href="#"
                class="text-base md:text-sm text-blue-500 font-bold no-underline hover:underline">Back to Help</a> --}}
        </div>
    </div>
    <!--/container-->
    <footer class="bg-green-200 border-t border-gray-400 shadow">
        <div class="container mx-auto flex py-8">
            <div class="w-full mx-auto flex flex-wrap">
                <div class="flex w-full lg:w-1/2 ">
                    <div class="px-8">
                        <h3 class="font-bold text-gray-900">About</h3>
                        <p class="py-4 text-gray-600 text-sm">
                            The information on this website is not financial advice.
                        </p>
                    </div>
                </div>
                {{-- <div class="flex w-full lg:w-1/2 lg:justify-end lg:text-right">
                    <div class="px-8">
                        <h3 class="font-bold text-gray-900">Social</h3>
                        <ul class="list-reset items-center text-sm pt-3">
                            <li>
                                <a class="inline-block text-gray-600 no-underline hover:text-gray-900 hover:underline py-1"
                                    href="#">Add social links</a>
                            </li>
                        </ul>
                    </div>
                </div> --}}
            </div>
        </div>
    </footer>
    <script>
        /*Toggle dropdown list*/
         /*https://gist.github.com/slavapas/593e8e50cf4cc16ac972afcbad4f70c8*/

         var navMenuDiv = document.getElementById("nav-content");
         var navMenu = document.getElementById("nav-toggle");

         var helpMenuDiv = document.getElementById("menu-content");
         var helpMenu = document.getElementById("menu-toggle");

         document.onclick = check;

         function check(e){
           var target = (e && e.target) || (event && event.srcElement);


           //Nav Menu
           if (!checkParent(target, navMenuDiv)) {
         	// click NOT on the menu
         	if (checkParent(target, navMenu)) {
         	  // click on the link
         	  if (navMenuDiv.classList.contains("hidden")) {
         		navMenuDiv.classList.remove("hidden");
         	  } else {navMenuDiv.classList.add("hidden");}
         	} else {
         	  // click both outside link and outside menu, hide menu
         	  navMenuDiv.classList.add("hidden");
         	}
           }

           //Help Menu
           if (!checkParent(target, helpMenuDiv)) {
         	// click NOT on the menu
         	if (checkParent(target, helpMenu)) {
         	  // click on the link
         	  if (helpMenuDiv.classList.contains("hidden")) {
         		helpMenuDiv.classList.remove("hidden");
         	  } else {helpMenuDiv.classList.add("hidden");}
         	} else {
         	  // click both outside link and outside menu, hide menu
         	  helpMenuDiv.classList.add("hidden");
         	}
           }

         }

         function checkParent(t, elm) {
           while(t.parentNode) {
         	if( t == elm ) {return true;}
         	t = t.parentNode;
           }
           return false;
         }


    </script>
</body>

</html>
