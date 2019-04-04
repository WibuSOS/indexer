<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Indexer') }}</title>

    @include('layouts.headscript')
</head>
<body>
    <div id="app">
        @include('includes.navbar')
        {{-- <main class="py-4"> --}}
        @include('includes.messages')
        @yield('content')
        {{-- </main> --}}
    </div>
    
    @include('layouts.footscript')
</body>
</html>
