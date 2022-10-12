<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="style.css">
    <livewire:styles />
    <title>{{ $title }}</title>
</head>
<body>

    <x-navbar></x-navbar>
    <div id="overlay" class="hidden z-10 fixed top-0 right-0 left-0 bottom-0 bg-[rgba(20,20,20,0.5)]"></div>
{{ $content }}


<livewire:scripts />
<script src="script.js"></script>
</body>
</html>