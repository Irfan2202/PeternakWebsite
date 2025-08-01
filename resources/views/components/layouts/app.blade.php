<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Page Title' }}</title>

    <link rel="stylesheet" href="{{ asset('build/assets/app-DvB2Xm2x.css') }}">

    @livewireStyles

</head>

<body>
    <livewire:navbar />
    {{ $slot }}
    <livewire:footer />
    @livewireScripts
    <script src="{{ asset('build/assets/app-DURVwG0O.js') }}" defer></script>
</body>

</html>
