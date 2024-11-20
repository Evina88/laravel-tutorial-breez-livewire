<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased font-sans">
    <div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
        <img id="background" class="absolute -left-20 top-0 max-w-[877px]" src="https://laravel.com/assets/img/welcome/background.svg" />
        <div class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">

            <header class="mx-auto">
                <div class="text-black font-bold" style="font-size: 28px">
                    Laravel Bootcamp
                </div>
                <br>
                <p class="text-black" style="font-size: 24px">
                    Following these instructions:<a> https://bootcamp.laravel.com/livewire/installation</a><br><br>

                    This is a microblogging platform called Chirper.<br>

                    So register and come inside.
                </p>
                <br>
                <div class="d-flex flex-column align-items-center" style="font-size: 28px; display:flex; flex-direction: column;align-items: center !important">
                    @if (Route::has('login'))
                    <livewire:welcome.navigation />
                    @endif
                </div>

            </header>
            <br>

            <footer class="py-16 text-center text-sm text-black dark:text-white/70">
                Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
            </footer>

        </div>
    </div>
</body>

</html>