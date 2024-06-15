<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdn.tailwindcss.com"></script>
        <title>{{ __("UEFA Euro 2024") }}</title>
        @livewireStyles
    </head>
    <body>
        {{-- {{ $slot }} --}}
        @livewire('games')
        @livewireScripts
    </body>
</html>
