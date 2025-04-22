<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css' , 'resources/js/app.js'])
    <title>Pixel Positions</title>
</head>
<body class="bg-black text-white">
    <div class="px-10">
        <nav class="flex justify-between items-center py-4 text-white border-b border-white/15">
            <div class="">
                <a href="" class="">
                    <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="">
                </a>
            </div>
            <div class="space-x-5 font-bold">
                <a href="#">Jobs</a>
                <a href="">Careers</a>
                <a href="">Salaries</a>
                <a href="">Companies</a>
            </div>
            <div class="">
                <a href="">Post a Jobs</a>
            </div>
        </nav>

        <main class="mt-6 max-w-[986px] mx-auto">
            {{ $slot }}
        </main>
    </div>
</body>
</html>