<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <!-- 1. Addchat css -->
        <link href="{{ asset('assets/addchat/css/addchat.min.css') }}" rel="stylesheet">
        @trixassets
        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
            <!-- 2. AddChat widget -->
            <div id="addchat_app" data-baseurl="<?php echo url('') ?>" data-csrfname="<?php echo 'X-CSRF-Token' ?>"
            data-csrftoken="<?php echo csrf_token() ?>" ></div>

        <div class="bg-gray-100">
            @livewire('navigation')

            <!-- Page Heading -->
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                  <h1 class="text-3xl font-bold leading-tight text-gray-900">
                    {{ $header }}
                  </h1>
                </div>
              </header>
              <main>
                <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
                    {{ $slot }}
                </div>
              </main>
        </div>

        @stack('modals')

        @livewireScripts
        <!-- 3. AddChat JS -->
        <!-- Modern browsers -->
        <script type="module" src="{{ asset('assets/addchat/js/addchat.min.js') }}"></script>
        <!-- Fallback support for Older browsers -->
        <script nomodule src="{{ asset('assets/addchat/js/addchat-legacy.min.js') }}"></script>
    </body>
</html>
