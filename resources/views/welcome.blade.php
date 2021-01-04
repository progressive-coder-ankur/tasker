<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Tasker') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>
        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <style>
            body {
                font-family: 'Nunito';
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="bg-gray-900">
            <div class="px-4 py-5 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8">
              <div class="relative flex grid items-center grid-cols-2 lg:grid-cols-3">
                <ul class="flex items-center hidden space-x-8 lg:flex">
                  <li><a href="/" aria-label="Our product" title="Our product" class="font-medium tracking-wide text-gray-300 transition-colors duration-200 hover:text-deep-purple-accent-400">Home</a></li>
                  <li><a href="/" aria-label="Our product" title="Our product" class="font-medium tracking-wide text-gray-300 transition-colors duration-200 hover:text-deep-purple-accent-400">Features</a></li>
                  <li><a href="/" aria-label="Product pricing" title="Product pricing" class="font-medium tracking-wide text-gray-300 transition-colors duration-200 hover:text-deep-purple-accent-400">Pricing</a></li>
                </ul>
                <a href="{{ route('dashboard') }}" aria-label="Company" title="Company" class="inline-flex items-center lg:mx-auto">
                        <x-jet-application-mark class="block h-9 w-auto" />
                  <span class="ml-2 text-xl font-bold tracking-wide text-gray-400 uppercase">{{ config('app.name', 'Tasker') }}</span>
                </a>
                @if (Route::has('login'))

                    <ul class="flex items-center hidden ml-auto space-x-8 lg:flex">
                        @auth
                            <li><a href="{{ url('/dashboard') }}" aria-label="Dashboard" title="Dashboard" class="font-medium tracking-wide text-gray-300 transition-colors duration-200 hover:text-deep-purple-accent-400">Dashboard</a></li>
                        @else
                        <li><a href="{{ route('login') }}" aria-label="Sign in" title="Sign in" class="font-medium tracking-wide text-gray-300 transition-colors duration-200 hover:text-deep-purple-accent-400">Sign in</a></li>

                            @if (Route::has('register'))
                            <li>
                                <a
                                    href="{{ route('register') }}"
                                    class="inline-flex items-center justify-center h-12 px-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md bg-deep-purple-accent-400 hover:bg-deep-purple-accent-700 focus:shadow-outline focus:outline-none"
                                    aria-label="Sign up"
                                    title="Sign up">Sign up</a>
                                </li>
                            @endif
                        @endauth
                    </ul>
                @endif
                  
                <!-- Mobile menu -->
                <div class="ml-auto lg:hidden">
                  <button aria-label="Open Menu" title="Open Menu" class="p-2 -mr-1 transition duration-200 rounded focus:outline-none focus:shadow-outline">
                    <svg class="w-5 text-gray-600" viewBox="0 0 24 24">
                      <path fill="currentColor" d="M23,13H1c-0.6,0-1-0.4-1-1s0.4-1,1-1h22c0.6,0,1,0.4,1,1S23.6,13,23,13z"></path>
                      <path fill="currentColor" d="M23,6H1C0.4,6,0,5.6,0,5s0.4-1,1-1h22c0.6,0,1,0.4,1,1S23.6,6,23,6z"></path>
                      <path fill="currentColor" d="M23,20H1c-0.6,0-1-0.4-1-1s0.4-1,1-1h22c0.6,0,1,0.4,1,1S23.6,20,23,20z"></path>
                    </svg>
                  </button>
                  <!-- Mobile menu dropdown 
                  <div class="absolute top-0 left-0 w-full">
                    <div class="p-5 bg-white border rounded shadow-sm">
                      <div class="flex items-center justify-between mb-4">
                        <div>
                          <a href="/" aria-label="Company" title="Company" class="inline-flex items-center">
                            <svg class="w-8 text-deep-purple-accent-400" viewBox="0 0 24 24" stroke-linejoin="round" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" stroke="currentColor" fill="none">
                              <rect x="3" y="1" width="7" height="12"></rect>
                              <rect x="3" y="17" width="7" height="6"></rect>
                              <rect x="14" y="1" width="7" height="6"></rect>
                              <rect x="14" y="11" width="7" height="12"></rect>
                            </svg>
                            <span class="ml-2 text-xl font-bold tracking-wide text-gray-800 uppercase">Company</span>
                          </a>
                        </div>
                        <div>
                          <button aria-label="Close Menu" title="Close Menu" class="p-2 -mt-2 -mr-2 transition duration-200 rounded hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                            <svg class="w-5 text-gray-600" viewBox="0 0 24 24">
                              <path
                                fill="currentColor"
                                d="M19.7,4.3c-0.4-0.4-1-0.4-1.4,0L12,10.6L5.7,4.3c-0.4-0.4-1-0.4-1.4,0s-0.4,1,0,1.4l6.3,6.3l-6.3,6.3 c-0.4,0.4-0.4,1,0,1.4C4.5,19.9,4.7,20,5,20s0.5-0.1,0.7-0.3l6.3-6.3l6.3,6.3c0.2,0.2,0.5,0.3,0.7,0.3s0.5-0.1,0.7-0.3 c0.4-0.4,0.4-1,0-1.4L13.4,12l6.3-6.3C20.1,5.3,20.1,4.7,19.7,4.3z"
                              ></path>
                            </svg>
                          </button>
                        </div>
                      </div>
                      <nav>
                        <ul class="space-y-4">
                          <li><a href="/" aria-label="Our product" title="Our product" class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-deep-purple-accent-400">Product</a></li>
                          <li><a href="/" aria-label="Our product" title="Our product" class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-deep-purple-accent-400">Features</a></li>
                          <li><a href="/" aria-label="Product pricing" title="Product pricing" class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-deep-purple-accent-400">Pricing</a></li>
                          <li><a href="/" aria-label="Sign in" title="Sign in" class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-deep-purple-accent-400">Sign in</a></li>
                          <li>
                            <a
                              href="/"
                              class="inline-flex items-center justify-center w-full h-12 px-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md bg-deep-purple-accent-400 hover:bg-deep-purple-accent-700 focus:shadow-outline focus:outline-none"
                              aria-label="Sign up"
                              title="Sign up"
                            >
                              Sign up
                            </a>
                          </li>
                        </ul>
                      </nav>
                    </div>
                  </div>
                  -->
                </div>
              </div>
            </div>
          </div>

          <!-- Content-->
          <div class="max-w-8xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
                <div class="grid gap-5 row-gap-8 lg:grid-cols-2">
                <div class="flex flex-col justify-center">
                    <div class="max-w-xl mb-6">
                    <div>
                        <p class="inline-block px-3 py-px mb-4 text-xs font-semibold tracking-wider text-indigo-900 uppercase rounded-full bg-indigo-accent-400">
                        Brand new
                        </p>
                    </div>
                    <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl sm:leading-none">
                        Innovative analytics<br class="hidden md:block" />
                        that you
                        <span class="inline-block text-deep-purple-accent-400">will love</span>
                    </h2>
                    <p class="text-base text-gray-700 md:text-lg">
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae. explicabo.
                    </p>
                    </div>
                    <a href="/" aria-label="" class="inline-flex items-center font-semibold transition-colors duration-200 text-deep-purple-accent-400 hover:text-deep-purple-800">
                    Learn more
                    <svg class="inline-block w-3 ml-2" fill="currentColor" viewBox="0 0 12 12">
                        <path d="M9.707,5.293l-5-5A1,1,0,0,0,3.293,1.707L7.586,6,3.293,10.293a1,1,0,1,0,1.414,1.414l5-5A1,1,0,0,0,9.707,5.293Z"></path>
                    </svg>
                    </a>
                </div>
                <div class="relative">
                    <svg class="absolute w-full text-indigo-accent-400" fill="currentColor" viewBox="0 0 600 392">
                    <rect x="0" y="211" width="75" height="181" rx="8"></rect>
                    <rect x="525" y="260" width="75" height="132" rx="8"></rect>
                    <rect x="105" y="83" width="75" height="309" rx="8"></rect>
                    <rect x="210" y="155" width="75" height="237" rx="8"></rect>
                    <rect x="420" y="129" width="75" height="263" rx="8"></rect>
                    <rect x="315" y="0" width="75" height="392" rx="8"></rect>
                    </svg>
                    <svg class="relative w-full text-deep-purple-accent-400" fill="currentColor" viewBox="0 0 600 392">
                    <rect x="0" y="311" width="75" height="81" rx="8"></rect>
                    <rect x="525" y="351" width="75" height="41" rx="8"></rect>
                    <rect x="105" y="176" width="75" height="216" rx="8"></rect>
                    <rect x="210" y="237" width="75" height="155" rx="8"></rect>
                    <rect x="420" y="205" width="75" height="187" rx="8"></rect>
                    <rect x="315" y="83" width="75" height="309" rx="8"></rect>
                    </svg>
                </div>
                </div>
            </div>

            <div class="relative bg-gray-900">
                <div class="absolute inset-x-0 bottom-0">
                <svg viewBox="0 0 224 12" fill="currentColor" class="w-full -mb-1 text-white" preserveAspectRatio="none">
                    <path d="M0,0 C48.8902582,6.27314026 86.2235915,9.40971039 112,9.40971039 C137.776408,9.40971039 175.109742,6.27314026 224,0 L224,12.0441132 L0,12.0441132 L0,0 Z"></path>
                </svg>
                </div>
                <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
                <div class="relative max-w-2xl sm:mx-auto sm:max-w-xl md:max-w-2xl sm:text-center">
                    <h2 class="mb-6 font-sans text-3xl font-bold tracking-tight text-white sm:text-4xl sm:leading-none">
                    The quick, brown fox<br class="hidden md:block" />
                    jumps over a
                    <span class="relative inline-block">
                        lazy dog
                        <div class="w-full h-3 -mt-3 bg-deep-purple-accent-400"></div>
                    </span>
                    </h2>
                    <p class="mb-6 text-base font-thin tracking-wide text-gray-300 md:text-lg">
                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae. explicabo. Sed ut perspiciatis unde omnis.
                    </p>
                    <form class="flex flex-col items-center w-full mb-4 md:flex-row md:px-16">
                    <input
                        placeholder="Email"
                        required=""
                        type="text"
                        class="flex-grow w-full h-12 px-4 mb-3 text-white transition duration-200 bg-transparent border-2 border-gray-400 rounded appearance-none md:mr-2 md:mb-0 focus:border-deep-purple-accent-200 focus:outline-none focus:shadow-outline"
                    />
                    <button
                        type="submit"
                        class="inline-flex items-center justify-center w-full h-12 px-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md md:w-auto bg-deep-purple-accent-400 hover:bg-deep-purple-accent-700 focus:shadow-outline focus:outline-none"
                    >
                        Subscribe
                    </button>
                    </form>
                    <p class="max-w-md mb-10 text-xs font-thin tracking-wide text-gray-500 sm:text-sm sm:mx-auto md:mb-16">
                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.
                    </p>
                    <a
                    href="/"
                    aria-label="Scroll down"
                    class="flex items-center justify-center w-10 h-10 mx-auto text-white duration-300 transform border border-gray-400 rounded-full hover:text-indigo-accent-400 hover:border-indigo-accent-400 hover:shadow hover:scale-110"
                    >
                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="currentColor">
                        <path d="M10.293,3.293,6,7.586,1.707,3.293A1,1,0,0,0,.293,4.707l5,5a1,1,0,0,0,1.414,0l5-5a1,1,0,1,0-1.414-1.414Z"></path>
                    </svg>
                    </a>
                </div>
                </div>
            </div>

            <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
                <div class="grid gap-5 row-gap-10 lg:grid-cols-2">
                <div class="flex flex-col justify-center">
                    <div class="max-w-xl mb-6">
                    <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl sm:leading-none">
                        The quick, brown fox<br class="hidden md:block" />
                        jumps over
                        <span class="relative px-1">
                        <div class="absolute inset-x-0 bottom-0 h-3 transform -skew-x-12 bg-indigo-accent-400"></div>
                        <span class="relative inline-block text-deep-purple-accent-400">a lazy dog</span>
                        </span>
                    </h2>
                    <p class="text-base text-gray-700 md:text-lg">
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae. explicabo.
                    </p>
                    </div>
                    <p class="mb-4 text-sm font-bold tracking-widest uppercase">Features</p>
                    <div class="grid space-y-3 sm:gap-2 sm:grid-cols-2 sm:space-y-0">
                    <ul class="space-y-3">
                        <li class="flex">
                        <span class="mr-1">
                            <svg class="w-5 h-5 mt-px text-deep-purple-accent-400" stroke="currentColor" viewBox="0 0 52 52">
                            <polygon stroke-width="4" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
                            </svg>
                        </span>
                        A slice of heaven
                        </li>
                        <li class="flex">
                        <span class="mr-1">
                            <svg class="w-5 h-5 mt-px text-deep-purple-accent-400" stroke="currentColor" viewBox="0 0 52 52">
                            <polygon stroke-width="4" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
                            </svg>
                        </span>
                        Disrupt inspire
                        </li>
                        <li class="flex">
                        <span class="mr-1">
                            <svg class="w-5 h-5 mt-px text-deep-purple-accent-400" stroke="currentColor" viewBox="0 0 52 52">
                            <polygon stroke-width="4" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
                            </svg>
                        </span>
                        Preliminary thinking
                        </li>
                    </ul>
                    <ul class="space-y-3">
                        <li class="flex">
                        <span class="mr-1">
                            <svg class="w-5 h-5 mt-px text-deep-purple-accent-400" stroke="currentColor" viewBox="0 0 52 52">
                            <polygon stroke-width="4" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
                            </svg>
                        </span>
                        Flipboard curmudgeon
                        </li>
                        <li class="flex">
                        <span class="mr-1">
                            <svg class="w-5 h-5 mt-px text-deep-purple-accent-400" stroke="currentColor" viewBox="0 0 52 52">
                            <polygon stroke-width="4" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
                            </svg>
                        </span>
                        Storage shed
                        </li>
                        <li class="flex">
                        <span class="mr-1">
                            <svg class="w-5 h-5 mt-px text-deep-purple-accent-400" stroke="currentColor" viewBox="0 0 52 52">
                            <polygon stroke-width="4" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
                            </svg>
                        </span>
                        Satoshi Nakamoto
                        </li>
                    </ul>
                    </div>
                </div>
                <div>
                    <img class="object-cover w-full h-56 rounded shadow-lg sm:h-96" src="https://images.pexels.com/photos/927022/pexels-photo-927022.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=3&amp;h=750&amp;w=1260" alt="" />
                </div>
                </div>
            </div>

            <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
                <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
                <div>
                    <p class="inline-block px-3 py-px mb-4 text-xs font-semibold tracking-wider text-indigo-900 uppercase rounded-full bg-indigo-accent-400">
                    Brand new
                    </p>
                </div>
                <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold leading-none tracking-tight text-gray-900 sm:text-4xl md:mx-auto">
                    <span class="relative inline-block">
                    <svg viewBox="0 0 52 24" fill="currentColor" class="absolute top-0 left-0 z-0 hidden w-32 -mt-8 -ml-20 text-blue-gray-100 lg:w-32 lg:-ml-28 lg:-mt-10 sm:block">
                        <defs>
                        <pattern id="18302e52-9e2a-4c8e-9550-0cbb21b38e55" x="0" y="0" width=".135" height=".30">
                            <circle cx="1" cy="1" r=".7"></circle>
                        </pattern>
                        </defs>
                        <rect fill="url(#18302e52-9e2a-4c8e-9550-0cbb21b38e55)" width="52" height="24"></rect>
                    </svg>
                    <span class="relative">The</span>
                    </span>
                    quick, brown fox jumps over a lazy dog
                </h2>
                <p class="text-base text-gray-700 md:text-lg">
                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque rem aperiam, eaque ipsa quae.
                </p>
                </div>
                <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8">
                    <div class="grid gap-8 row-gap-5 lg:grid-cols-3">
                    <div class="relative p-px overflow-hidden transition duration-300 transform border rounded shadow-sm hover:scale-105 group hover:shadow-xl">
                        <div class="absolute bottom-0 left-0 w-full h-1 duration-300 origin-left transform scale-x-0 bg-deep-purple-accent-400 group-hover:scale-x-100"></div>
                        <div class="absolute bottom-0 left-0 w-1 h-full duration-300 origin-bottom transform scale-y-0 bg-deep-purple-accent-400 group-hover:scale-y-100"></div>
                        <div class="absolute top-0 left-0 w-full h-1 duration-300 origin-right transform scale-x-0 bg-deep-purple-accent-400 group-hover:scale-x-100"></div>
                        <div class="absolute bottom-0 right-0 w-1 h-full duration-300 origin-top transform scale-y-0 bg-deep-purple-accent-400 group-hover:scale-y-100"></div>
                        <div class="relative p-5 bg-white rounded-sm">
                        <div class="flex flex-col mb-2 lg:items-center lg:flex-row">
                            <div class="flex items-center justify-center w-10 h-10 mb-4 mr-2 rounded-full bg-indigo-50 lg:mb-0">
                            <svg class="w-8 h-8 text-deep-purple-accent-400" stroke="currentColor" viewBox="0 0 52 52">
                                <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
                            </svg>
                            </div>
                            <h6 class="font-semibold leading-5">The quick, brown fox</h6>
                        </div>
                        <p class="mb-2 text-sm text-gray-900">
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque rem aperiam.
                        </p>
                        <a href="/" aria-label="" class="inline-flex items-center text-sm font-semibold transition-colors duration-200 text-deep-purple-accent-400 hover:text-deep-purple-800">Learn more</a>
                        </div>
                    </div>
                    <div class="relative p-px overflow-hidden transition duration-300 transform border rounded shadow-sm hover:scale-105 group hover:shadow-xl">
                        <div class="absolute bottom-0 left-0 w-full h-1 duration-300 origin-left transform scale-x-0 bg-deep-purple-accent-400 group-hover:scale-x-100"></div>
                        <div class="absolute bottom-0 left-0 w-1 h-full duration-300 origin-bottom transform scale-y-0 bg-deep-purple-accent-400 group-hover:scale-y-100"></div>
                        <div class="absolute top-0 left-0 w-full h-1 duration-300 origin-right transform scale-x-0 bg-deep-purple-accent-400 group-hover:scale-x-100"></div>
                        <div class="absolute bottom-0 right-0 w-1 h-full duration-300 origin-top transform scale-y-0 bg-deep-purple-accent-400 group-hover:scale-y-100"></div>
                        <div class="relative p-5 bg-white rounded-sm">
                        <div class="flex flex-col mb-2 lg:items-center lg:flex-row">
                            <div class="flex items-center justify-center w-10 h-10 mb-4 mr-2 rounded-full bg-indigo-50 lg:mb-0">
                            <svg class="w-8 h-8 text-deep-purple-accent-400" stroke="currentColor" viewBox="0 0 52 52">
                                <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
                            </svg>
                            </div>
                            <h6 class="font-semibold leading-5">Smooth as an android</h6>
                        </div>
                        <p class="mb-2 text-sm text-gray-900">
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque rem aperiam.
                        </p>
                        <a href="/" aria-label="" class="inline-flex items-center text-sm font-semibold transition-colors duration-200 text-deep-purple-accent-400 hover:text-deep-purple-800">Learn more</a>
                        </div>
                    </div>
                    <div class="relative p-px overflow-hidden transition duration-300 transform border rounded shadow-sm hover:scale-105 group hover:shadow-xl">
                        <div class="absolute bottom-0 left-0 w-full h-1 duration-300 origin-left transform scale-x-0 bg-deep-purple-accent-400 group-hover:scale-x-100"></div>
                        <div class="absolute bottom-0 left-0 w-1 h-full duration-300 origin-bottom transform scale-y-0 bg-deep-purple-accent-400 group-hover:scale-y-100"></div>
                        <div class="absolute top-0 left-0 w-full h-1 duration-300 origin-right transform scale-x-0 bg-deep-purple-accent-400 group-hover:scale-x-100"></div>
                        <div class="absolute bottom-0 right-0 w-1 h-full duration-300 origin-top transform scale-y-0 bg-deep-purple-accent-400 group-hover:scale-y-100"></div>
                        <div class="relative p-5 bg-white rounded-sm">
                        <div class="flex flex-col mb-2 lg:items-center lg:flex-row">
                            <div class="flex items-center justify-center w-10 h-10 mb-4 mr-2 rounded-full bg-indigo-50 lg:mb-0">
                            <svg class="w-8 h-8 text-deep-purple-accent-400" stroke="currentColor" viewBox="0 0 52 52">
                                <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
                            </svg>
                            </div>
                            <h6 class="font-semibold leading-5">This is about justice</h6>
                        </div>
                        <p class="mb-2 text-sm text-gray-900">
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque rem aperiam.
                        </p>
                        <a href="/" aria-label="" class="inline-flex items-center text-sm font-semibold transition-colors duration-200 text-deep-purple-accent-400 hover:text-deep-purple-800">Learn more</a>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            
            <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
                <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
                <div>
                    <p class="inline-block px-3 py-px mb-4 text-xs font-semibold tracking-wider text-indigo-900 uppercase rounded-full bg-indigo-accent-400">
                    Just do it
                    </p>
                </div>
                <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold leading-none tracking-tight text-gray-900 sm:text-4xl md:mx-auto">
                    <span class="relative inline-block">
                    <svg viewBox="0 0 52 24" fill="currentColor" class="absolute top-0 left-0 z-0 hidden w-32 -mt-8 -ml-20 text-blue-gray-100 lg:w-32 lg:-ml-28 lg:-mt-10 sm:block">
                        <defs>
                        <pattern id="a0b40128-6963-4319-aeeb-471e92fa2d74" x="0" y="0" width=".135" height=".30">
                            <circle cx="1" cy="1" r=".7"></circle>
                        </pattern>
                        </defs>
                        <rect fill="url(#a0b40128-6963-4319-aeeb-471e92fa2d74)" width="52" height="24"></rect>
                    </svg>
                    <span class="relative">You</span>
                    </span>
                    miss 100% of the shots you don't take
                </h2>
                <p class="text-base text-gray-700 md:text-lg">
                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque rem aperiam, eaque ipsa quae.
                </p>
                </div>
                <div class="max-w-lg space-y-3 sm:mx-auto lg:max-w-xl">
                <div class="flex items-center p-2 duration-300 transform border rounded shadow hover:scale-105 sm:hover:scale-110">
                    <div class="mr-2">
                    <svg class="w-6 h-6 text-deep-purple-accent-400 sm:w-8 sm:h-8" stroke="currentColor" viewBox="0 0 52 52">
                        <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
                    </svg>
                    </div>
                    <span class="text-gray-800">Change the world by being yourself.</span>
                </div>
                <div class="flex items-center p-2 duration-300 transform border rounded shadow hover:scale-105 sm:hover:scale-110">
                    <div class="mr-2">
                    <svg class="w-6 h-6 text-deep-purple-accent-400 sm:w-8 sm:h-8" stroke="currentColor" viewBox="0 0 52 52">
                        <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
                    </svg>
                    </div>
                    <span class="text-gray-800">Die with memories, not dreams.</span>
                </div>
                <div class="flex items-center p-2 duration-300 transform border rounded shadow hover:scale-105 sm:hover:scale-110">
                    <div class="mr-2">
                    <svg class="w-6 h-6 text-deep-purple-accent-400 sm:w-8 sm:h-8" stroke="currentColor" viewBox="0 0 52 52">
                        <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
                    </svg>
                    </div>
                    <span class="text-gray-800">What we think, we become.</span>
                </div>
                <div class="flex items-center p-2 duration-300 transform border rounded shadow hover:scale-105 sm:hover:scale-110">
                    <div class="mr-2">
                    <svg class="w-6 h-6 text-deep-purple-accent-400 sm:w-8 sm:h-8" stroke="currentColor" viewBox="0 0 52 52">
                        <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
                    </svg>
                    </div>
                    <span class="text-gray-800">Be so good they can’t ignore you.</span>
                </div>
                <div class="flex items-center p-2 duration-300 transform border rounded shadow hover:scale-105 sm:hover:scale-110">
                    <div class="mr-2">
                    <svg class="w-6 h-6 text-deep-purple-accent-400 sm:w-8 sm:h-8" stroke="currentColor" viewBox="0 0 52 52">
                        <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
                    </svg>
                    </div>
                    <span class="text-gray-800">Simplicity is the ultimate sophistication.</span>
                </div>
                <div class="flex items-center p-2 duration-300 transform border rounded shadow hover:scale-105 sm:hover:scale-110">
                    <div class="mr-2">
                    <svg class="w-6 h-6 text-deep-purple-accent-400 sm:w-8 sm:h-8" stroke="currentColor" viewBox="0 0 52 52">
                        <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
                    </svg>
                    </div>
                    <span class="text-gray-800">Yesterday you said tomorrow. Just do it today.</span>
                </div>
                </div>
            </div>

            <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
                <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
                <div>
                    <p class="inline-block px-3 py-px mb-4 text-xs font-semibold tracking-wider text-indigo-900 uppercase rounded-full bg-indigo-accent-400">
                    Make history
                    </p>
                </div>
                <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold leading-none tracking-tight text-gray-900 sm:text-4xl md:mx-auto">
                    <span class="relative inline-block">
                    <svg viewBox="0 0 52 24" fill="currentColor" class="absolute top-0 left-0 z-0 hidden w-32 -mt-8 -ml-20 text-blue-gray-100 lg:w-32 lg:-ml-28 lg:-mt-10 sm:block">
                        <defs>
                        <pattern id="84d09fa9-a544-44bd-88b2-08fdf4cddd38" x="0" y="0" width=".135" height=".30">
                            <circle cx="1" cy="1" r=".7"></circle>
                        </pattern>
                        </defs>
                        <rect fill="url(#84d09fa9-a544-44bd-88b2-08fdf4cddd38)" width="52" height="24"></rect>
                    </svg>
                    <span class="relative">Let's</span>
                    </span>
                    launch a rocket into outer space
                </h2>
                <p class="text-base text-gray-700 md:text-lg">
                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque rem aperiam, eaque ipsa quae.
                </p>
                </div>
                <div class="grid gap-8 row-gap-5 md:row-gap-8 lg:grid-cols-3">
                <div class="p-5 duration-300 transform bg-white border-2 border-dashed rounded shadow-sm border-deep-purple-accent-100 hover:-translate-y-2">
                    <div class="flex items-center mb-2">
                    <p class="flex items-center justify-center w-10 h-10 mr-2 text-lg font-bold text-white rounded-full bg-deep-purple-accent-400">
                        1
                    </p>
                    <p class="text-lg font-bold leading-5">Fill her up</p>
                    </div>
                    <p class="text-sm text-gray-900">
                    Bro ipsum dolor sit amet gaper backside single track, manny Bike epic clipless.
                    </p>
                </div>
                <div class="p-5 duration-300 transform bg-white border-2 border-dashed rounded shadow-sm border-deep-purple-accent-200 hover:-translate-y-2">
                    <div class="flex items-center mb-2">
                    <p class="flex items-center justify-center w-10 h-10 mr-2 text-lg font-bold text-white rounded-full bg-deep-purple-accent-400">
                        2
                    </p>
                    <p class="text-lg font-bold leading-5">Light it</p>
                    </div>
                    <p class="text-sm text-gray-900">
                    Skate ipsum dolor sit amet, alley oop vert mute-air Colby Carter flail 180 berm.
                    </p>
                </div>
                <div class="relative p-5 duration-300 transform bg-white border-2 rounded shadow-sm border-deep-purple-accent-700 hover:-translate-y-2">
                    <div class="flex items-center mb-2">
                    <p class="flex items-center justify-center w-10 h-10 mr-2 text-lg font-bold text-white rounded-full bg-deep-purple-accent-400">
                        3
                    </p>
                    <p class="text-lg font-bold leading-5">Shoot for the stars</p>
                    </div>
                    <p class="text-sm text-gray-900">
                    A flower in my garden, a mystery in my panties. Heart attack never stopped.
                    </p>
                    <p class="absolute top-0 right-0 flex items-center justify-center w-8 h-8 -mt-4 -mr-4 font-bold rounded-full bg-deep-purple-accent-400 sm:-mt-5 sm:-mr-5 sm:w-10 sm:h-10">
                    <svg class="text-white w-7" stroke="currentColor" viewBox="0 0 24 24">
                        <polyline fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="6,12 10,16 18,8"></polyline>
                    </svg>
                    </p>
                </div>
                </div>
            </div>

            <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
                <div class="mx-auto mb-10 lg:max-w-xl sm:text-center">
                <p class="inline-block px-3 py-px mb-4 text-xs font-semibold tracking-wider text-indigo-900 uppercase rounded-full bg-indigo-accent-400">
                    Know Our Team
                </p>
                <p class="text-base text-gray-700 md:text-lg">
                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.
                </p>
                </div>
                <div class="grid gap-10 mx-auto lg:grid-cols-2 lg:max-w-screen-lg">
                <div class="grid sm:grid-cols-3">
                    <div class="relative w-full h-48 max-h-full rounded shadow sm:h-auto">
                    <img class="absolute object-cover w-full h-full rounded" src="https://images.pexels.com/photos/220453/pexels-photo-220453.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=3&amp;h=750&amp;w=1260" alt="Person" />
                    </div>
                    <div class="flex flex-col justify-center mt-5 sm:mt-0 sm:p-5 sm:col-span-2">
                    <p class="text-lg font-bold">Oliver Aguilerra</p>
                    <p class="mb-4 text-xs text-gray-800">Product Manager</p>
                    <p class="mb-4 text-sm tracking-wide text-gray-800">
                        Vincent Van Gogh’s most popular painting, The Starry Night.
                    </p>
                    <div class="flex items-center space-x-3">
                        <a href="/" class="text-gray-600 transition-colors duration-300 hover:text-deep-purple-accent-400">
                        <svg viewBox="0 0 24 24" fill="currentColor" class="h-5">
                            <path
                            d="M24,4.6c-0.9,0.4-1.8,0.7-2.8,0.8c1-0.6,1.8-1.6,2.2-2.7c-1,0.6-2,1-3.1,1.2c-0.9-1-2.2-1.6-3.6-1.6 c-2.7,0-4.9,2.2-4.9,4.9c0,0.4,0,0.8,0.1,1.1C7.7,8.1,4.1,6.1,1.7,3.1C1.2,3.9,1,4.7,1,5.6c0,1.7,0.9,3.2,2.2,4.1 C2.4,9.7,1.6,9.5,1,9.1c0,0,0,0,0,0.1c0,2.4,1.7,4.4,3.9,4.8c-0.4,0.1-0.8,0.2-1.3,0.2c-0.3,0-0.6,0-0.9-0.1c0.6,2,2.4,3.4,4.6,3.4 c-1.7,1.3-3.8,2.1-6.1,2.1c-0.4,0-0.8,0-1.2-0.1c2.2,1.4,4.8,2.2,7.5,2.2c9.1,0,14-7.5,14-14c0-0.2,0-0.4,0-0.6 C22.5,6.4,23.3,5.5,24,4.6z"
                            ></path>
                        </svg>
                        </a>
                        <a href="/" class="text-gray-600 transition-colors duration-300 hover:text-deep-purple-accent-400">
                        <svg viewBox="0 0 24 24" fill="currentColor" class="h-5">
                            <path
                            d="M22,0H2C0.895,0,0,0.895,0,2v20c0,1.105,0.895,2,2,2h11v-9h-3v-4h3V8.413c0-3.1,1.893-4.788,4.659-4.788 c1.325,0,2.463,0.099,2.795,0.143v3.24l-1.918,0.001c-1.504,0-1.795,0.715-1.795,1.763V11h4.44l-1,4h-3.44v9H22c1.105,0,2-0.895,2-2 V2C24,0.895,23.105,0,22,0z"
                            ></path>
                        </svg>
                        </a>
                    </div>
                    </div>
                </div>
                <div class="grid sm:grid-cols-3">
                    <div class="relative w-full h-48 max-h-full rounded shadow sm:h-auto">
                    <img class="absolute object-cover w-full h-full rounded" src="https://images.pexels.com/photos/2381069/pexels-photo-2381069.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;h=750&amp;w=1260" alt="Person" />
                    </div>
                    <div class="flex flex-col justify-center mt-5 sm:mt-0 sm:p-5 sm:col-span-2">
                    <p class="text-lg font-bold">Marta Clermont</p>
                    <p class="mb-4 text-xs text-gray-800">Design Team Lead</p>
                    <p class="mb-4 text-sm tracking-wide text-gray-800">
                        Amet I love liquorice jujubes pudding croissant I love pudding.
                    </p>
                    <div class="flex items-center space-x-3">
                        <a href="/" class="text-gray-600 transition-colors duration-300 hover:text-deep-purple-accent-400">
                        <svg viewBox="0 0 24 24" fill="currentColor" class="h-5">
                            <path
                            d="M24,4.6c-0.9,0.4-1.8,0.7-2.8,0.8c1-0.6,1.8-1.6,2.2-2.7c-1,0.6-2,1-3.1,1.2c-0.9-1-2.2-1.6-3.6-1.6 c-2.7,0-4.9,2.2-4.9,4.9c0,0.4,0,0.8,0.1,1.1C7.7,8.1,4.1,6.1,1.7,3.1C1.2,3.9,1,4.7,1,5.6c0,1.7,0.9,3.2,2.2,4.1 C2.4,9.7,1.6,9.5,1,9.1c0,0,0,0,0,0.1c0,2.4,1.7,4.4,3.9,4.8c-0.4,0.1-0.8,0.2-1.3,0.2c-0.3,0-0.6,0-0.9-0.1c0.6,2,2.4,3.4,4.6,3.4 c-1.7,1.3-3.8,2.1-6.1,2.1c-0.4,0-0.8,0-1.2-0.1c2.2,1.4,4.8,2.2,7.5,2.2c9.1,0,14-7.5,14-14c0-0.2,0-0.4,0-0.6 C22.5,6.4,23.3,5.5,24,4.6z"
                            ></path>
                        </svg>
                        </a>
                        <a href="/" class="text-gray-600 transition-colors duration-300 hover:text-deep-purple-accent-400">
                        <svg viewBox="0 0 24 24" fill="currentColor" class="h-5">
                            <path
                            d="M22,0H2C0.895,0,0,0.895,0,2v20c0,1.105,0.895,2,2,2h11v-9h-3v-4h3V8.413c0-3.1,1.893-4.788,4.659-4.788 c1.325,0,2.463,0.099,2.795,0.143v3.24l-1.918,0.001c-1.504,0-1.795,0.715-1.795,1.763V11h4.44l-1,4h-3.44v9H22c1.105,0,2-0.895,2-2 V2C24,0.895,23.105,0,22,0z"
                            ></path>
                        </svg>
                        </a>
                    </div>
                    </div>
                </div>
                <div class="grid sm:grid-cols-3">
                    <div class="relative w-full h-48 max-h-full rounded shadow sm:h-auto">
                    <img class="absolute object-cover w-full h-full rounded" src="https://images.pexels.com/photos/3747435/pexels-photo-3747435.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;h=750&amp;w=1260" alt="Person" />
                    </div>
                    <div class="flex flex-col justify-center mt-5 sm:mt-0 sm:p-5 sm:col-span-2">
                    <p class="text-lg font-bold">Alice Melbourne</p>
                    <p class="mb-4 text-xs text-gray-800">Human Resources</p>
                    <p class="mb-4 text-sm tracking-wide text-gray-800">
                        Lorizzle ipsum bling bling sit amizzle, consectetuer adipiscing elit.
                    </p>
                    <div class="flex items-center space-x-3">
                        <a href="/" class="text-gray-600 transition-colors duration-300 hover:text-deep-purple-accent-400">
                        <svg viewBox="0 0 24 24" fill="currentColor" class="h-5">
                            <path
                            d="M24,4.6c-0.9,0.4-1.8,0.7-2.8,0.8c1-0.6,1.8-1.6,2.2-2.7c-1,0.6-2,1-3.1,1.2c-0.9-1-2.2-1.6-3.6-1.6 c-2.7,0-4.9,2.2-4.9,4.9c0,0.4,0,0.8,0.1,1.1C7.7,8.1,4.1,6.1,1.7,3.1C1.2,3.9,1,4.7,1,5.6c0,1.7,0.9,3.2,2.2,4.1 C2.4,9.7,1.6,9.5,1,9.1c0,0,0,0,0,0.1c0,2.4,1.7,4.4,3.9,4.8c-0.4,0.1-0.8,0.2-1.3,0.2c-0.3,0-0.6,0-0.9-0.1c0.6,2,2.4,3.4,4.6,3.4 c-1.7,1.3-3.8,2.1-6.1,2.1c-0.4,0-0.8,0-1.2-0.1c2.2,1.4,4.8,2.2,7.5,2.2c9.1,0,14-7.5,14-14c0-0.2,0-0.4,0-0.6 C22.5,6.4,23.3,5.5,24,4.6z"
                            ></path>
                        </svg>
                        </a>
                        <a href="/" class="text-gray-600 transition-colors duration-300 hover:text-deep-purple-accent-400">
                        <svg viewBox="0 0 24 24" fill="currentColor" class="h-5">
                            <path
                            d="M22,0H2C0.895,0,0,0.895,0,2v20c0,1.105,0.895,2,2,2h11v-9h-3v-4h3V8.413c0-3.1,1.893-4.788,4.659-4.788 c1.325,0,2.463,0.099,2.795,0.143v3.24l-1.918,0.001c-1.504,0-1.795,0.715-1.795,1.763V11h4.44l-1,4h-3.44v9H22c1.105,0,2-0.895,2-2 V2C24,0.895,23.105,0,22,0z"
                            ></path>
                        </svg>
                        </a>
                    </div>
                    </div>
                </div>
                <div class="grid sm:grid-cols-3">
                    <div class="relative w-full h-48 max-h-full rounded shadow sm:h-auto">
                    <img class="absolute object-cover w-full h-full rounded" src="https://images.pexels.com/photos/3931603/pexels-photo-3931603.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;h=750&amp;w=1260" alt="Person" />
                    </div>
                    <div class="flex flex-col justify-center mt-5 sm:mt-0 sm:p-5 sm:col-span-2">
                    <p class="text-lg font-bold">John Doe</p>
                    <p class="mb-4 text-xs text-gray-800">Good guy</p>
                    <p class="mb-4 text-sm tracking-wide text-gray-800">
                        Bacon ipsum dolor sit amet salami jowl corned beef, andouille flank.
                    </p>
                    <div class="flex items-center space-x-3">
                        <a href="/" class="text-gray-600 transition-colors duration-300 hover:text-deep-purple-accent-400">
                        <svg viewBox="0 0 24 24" fill="currentColor" class="h-5">
                            <path
                            d="M24,4.6c-0.9,0.4-1.8,0.7-2.8,0.8c1-0.6,1.8-1.6,2.2-2.7c-1,0.6-2,1-3.1,1.2c-0.9-1-2.2-1.6-3.6-1.6 c-2.7,0-4.9,2.2-4.9,4.9c0,0.4,0,0.8,0.1,1.1C7.7,8.1,4.1,6.1,1.7,3.1C1.2,3.9,1,4.7,1,5.6c0,1.7,0.9,3.2,2.2,4.1 C2.4,9.7,1.6,9.5,1,9.1c0,0,0,0,0,0.1c0,2.4,1.7,4.4,3.9,4.8c-0.4,0.1-0.8,0.2-1.3,0.2c-0.3,0-0.6,0-0.9-0.1c0.6,2,2.4,3.4,4.6,3.4 c-1.7,1.3-3.8,2.1-6.1,2.1c-0.4,0-0.8,0-1.2-0.1c2.2,1.4,4.8,2.2,7.5,2.2c9.1,0,14-7.5,14-14c0-0.2,0-0.4,0-0.6 C22.5,6.4,23.3,5.5,24,4.6z"
                            ></path>
                        </svg>
                        </a>
                        <a href="/" class="text-gray-600 transition-colors duration-300 hover:text-deep-purple-accent-400">
                        <svg viewBox="0 0 24 24" fill="currentColor" class="h-5">
                            <path
                            d="M22,0H2C0.895,0,0,0.895,0,2v20c0,1.105,0.895,2,2,2h11v-9h-3v-4h3V8.413c0-3.1,1.893-4.788,4.659-4.788 c1.325,0,2.463,0.099,2.795,0.143v3.24l-1.918,0.001c-1.504,0-1.795,0.715-1.795,1.763V11h4.44l-1,4h-3.44v9H22c1.105,0,2-0.895,2-2 V2C24,0.895,23.105,0,22,0z"
                            ></path>
                        </svg>
                        </a>
                    </div>
                    </div>
                </div>
                </div>
            </div>

            <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
                <div class="grid gap-24 row-gap-8 lg:grid-cols-5">
                <div class="grid gap-8 lg:col-span-2">
                    <div>
                    <p class="mb-2 text-lg font-bold">Old man</p>
                    <p class="text-gray-700">
                        An old man lived in the village. He was one of the most unfortunate people in the world. The whole village was tired of him, he was always gloomy, he constantly complained.
                    </p>
                    </div>
                    <div>
                    <p class="mb-2 text-lg font-bold">The Wise Man</p>
                    <p class="text-gray-700">
                        People have been coming to the wise man, complaining about the same problems every time. One day he told them a joke and everyone roared in laughter.
                    </p>
                    </div>
                </div>
                <div class="grid border divide-y rounded lg:col-span-3 sm:grid-cols-2 sm:divide-y-0 sm:divide-x">
                    <div class="flex flex-col justify-between p-10">
                    <div>
                        <p class="text-lg font-semibold text-gray-800 sm:text-base">
                        Funds Raised
                        </p>
                        <p class="text-2xl font-bold text-deep-purple-accent-400 sm:text-xl">
                        $84 000 000
                        </p>
                    </div>
                    <div>
                        <p class="text-lg font-semibold text-gray-800 sm:text-base">
                        Products
                        </p>
                        <p class="text-2xl font-bold text-deep-purple-accent-400 sm:text-xl">
                        52
                        </p>
                    </div>
                    <div>
                        <p class="text-lg font-semibold text-gray-800 sm:text-base">
                        Downloads
                        </p>
                        <p class="text-2xl font-bold text-deep-purple-accent-400 sm:text-xl">
                        186M
                        </p>
                    </div>
                    </div>
                    <div class="flex flex-col justify-between p-10">
                    <div>
                        <p class="text-lg font-semibold text-gray-800 sm:text-base">Users</p>
                        <p class="text-2xl font-bold text-deep-purple-accent-400 sm:text-xl">
                        86K
                        </p>
                    </div>
                    <div>
                        <p class="text-lg font-semibold text-gray-800 sm:text-base">
                        Installations
                        </p>
                        <p class="text-2xl font-bold text-deep-purple-accent-400 sm:text-xl">
                        917 000
                        </p>
                    </div>
                    <div>
                        <p class="text-lg font-semibold text-gray-800 sm:text-base">
                        Subscribers
                        </p>
                        <p class="text-2xl font-bold text-deep-purple-accent-400 sm:text-xl">
                        213K
                        </p>
                    </div>
                    </div>
                </div>
                </div>
            </div>

        </div>
        <div class="bg-gray-900 w-full">
            <div class="max-w-8xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="px-4 pt-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8">
                    <div class="grid row-gap-10 mb-8 lg:grid-cols-6">
                        <div class="grid grid-cols-2 gap-5 row-gap-8 lg:col-span-4 md:grid-cols-4">
                        <div>
                            <p class="font-medium tracking-wide text-gray-300">Category</p>
                            <ul class="mt-2 space-y-2">
                            <li>
                                <a href="/" class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-200">News</a>
                            </li>
                            <li>
                                <a href="/" class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-200">World</a>
                            </li>
                            <li>
                                <a href="/" class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-200">Games</a>
                            </li>
                            <li>
                                <a href="/" class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-200">References</a>
                            </li>
                            </ul>
                        </div>
                        <div>
                            <p class="font-medium tracking-wide text-gray-300">Apples</p>
                            <ul class="mt-2 space-y-2">
                            <li>
                                <a href="/" class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-200">Web</a>
                            </li>
                            <li>
                                <a href="/" class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-200">eCommerce</a>
                            </li>
                            <li>
                                <a href="/" class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-200">Business</a>
                            </li>
                            <li>
                                <a href="/" class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-200">Entertainment</a>
                            </li>
                            <li>
                                <a href="/" class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-200">Portfolio</a>
                            </li>
                            </ul>
                        </div>
                        <div>
                            <p class="font-medium tracking-wide text-gray-300">Cherry</p>
                            <ul class="mt-2 space-y-2">
                            <li>
                                <a href="/" class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-200">Media</a>
                            </li>
                            <li>
                                <a href="/" class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-200">Brochure</a>
                            </li>
                            <li>
                                <a href="/" class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-200">Nonprofit</a>
                            </li>
                            <li>
                                <a href="/" class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-200">Educational</a>
                            </li>
                            <li>
                                <a href="/" class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-200">Projects</a>
                            </li>
                            </ul>
                        </div>
                        <div>
                            <p class="font-medium tracking-wide text-gray-300">Business</p>
                            <ul class="mt-2 space-y-2">
                            <li>
                                <a href="/" class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-200">Infopreneur</a>
                            </li>
                            <li>
                                <a href="/" class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-200">Personal</a>
                            </li>
                            <li>
                                <a href="/" class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-200">Wiki</a>
                            </li>
                            <li>
                                <a href="/" class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-200">Forum</a>
                            </li>
                            </ul>
                        </div>
                        </div>
                        <div class="md:max-w-md lg:col-span-2">
                        <span class="text-base font-medium tracking-wide text-gray-300">Subscribe for updates</span>
                        <form class="flex flex-col mt-4 md:flex-row">
                            <input
                            placeholder="Email"
                            required=""
                            type="text"
                            class="flex-grow w-full h-12 px-4 mb-3 transition duration-200 bg-white border border-gray-300 rounded shadow-sm appearance-none md:mr-2 md:mb-0 focus:border-deep-purple-accent-400 focus:outline-none focus:shadow-outline"
                            />
                            <button
                            type="submit"
                            class="inline-flex items-center justify-center h-12 px-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md bg-deep-purple-accent-400 hover:bg-deep-purple-accent-700 focus:shadow-outline focus:outline-none"
                            >
                            Subscribe
                            </button>
                        </form>
                        <p class="mt-4 text-sm text-gray-500">
                            Bacon ipsum dolor amet short ribs pig sausage prosciuto chicken spare ribs salami.
                        </p>
                        </div>
                    </div>
                    <div class="flex flex-col justify-between pt-5 pb-10 border-t border-gray-800 sm:flex-row">
                        <p class="text-sm text-gray-500">
                        © Copyright 2020 Lorem Inc. All rights reserved.
                        </p>
                        <div class="flex items-center mt-4 space-x-4 sm:mt-0">
                            <a href="/" class="text-gray-500 transition-colors duration-300 hover:text-indigo-accent-400">
                                <svg viewBox="0 0 24 24" fill="currentColor" class="h-5">
                                <path
                                    d="M24,4.6c-0.9,0.4-1.8,0.7-2.8,0.8c1-0.6,1.8-1.6,2.2-2.7c-1,0.6-2,1-3.1,1.2c-0.9-1-2.2-1.6-3.6-1.6 c-2.7,0-4.9,2.2-4.9,4.9c0,0.4,0,0.8,0.1,1.1C7.7,8.1,4.1,6.1,1.7,3.1C1.2,3.9,1,4.7,1,5.6c0,1.7,0.9,3.2,2.2,4.1 C2.4,9.7,1.6,9.5,1,9.1c0,0,0,0,0,0.1c0,2.4,1.7,4.4,3.9,4.8c-0.4,0.1-0.8,0.2-1.3,0.2c-0.3,0-0.6,0-0.9-0.1c0.6,2,2.4,3.4,4.6,3.4 c-1.7,1.3-3.8,2.1-6.1,2.1c-0.4,0-0.8,0-1.2-0.1c2.2,1.4,4.8,2.2,7.5,2.2c9.1,0,14-7.5,14-14c0-0.2,0-0.4,0-0.6 C22.5,6.4,23.3,5.5,24,4.6z"
                                ></path>
                                </svg>
                            </a>
                            <a href="/" class="text-gray-500 transition-colors duration-300 hover:text-indigo-accent-400">
                                <svg viewBox="0 0 30 30" fill="currentColor" class="h-6">
                                <circle cx="15" cy="15" r="4"></circle>
                                <path
                                    d="M19.999,3h-10C6.14,3,3,6.141,3,10.001v10C3,23.86,6.141,27,10.001,27h10C23.86,27,27,23.859,27,19.999v-10   C27,6.14,23.859,3,19.999,3z M15,21c-3.309,0-6-2.691-6-6s2.691-6,6-6s6,2.691,6,6S18.309,21,15,21z M22,9c-0.552,0-1-0.448-1-1   c0-0.552,0.448-1,1-1s1,0.448,1,1C23,8.552,22.552,9,22,9z"
                                ></path>
                                </svg>
                            </a>
                            <a href="/" class="text-gray-500 transition-colors duration-300 hover:text-indigo-accent-400">
                                <svg viewBox="0 0 24 24" fill="currentColor" class="h-5">
                                <path
                                    d="M22,0H2C0.895,0,0,0.895,0,2v20c0,1.105,0.895,2,2,2h11v-9h-3v-4h3V8.413c0-3.1,1.893-4.788,4.659-4.788 c1.325,0,2.463,0.099,2.795,0.143v3.24l-1.918,0.001c-1.504,0-1.795,0.715-1.795,1.763V11h4.44l-1,4h-3.44v9H22c1.105,0,2-0.895,2-2 V2C24,0.895,23.105,0,22,0z"
                                ></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>
