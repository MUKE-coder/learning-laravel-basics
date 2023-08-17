<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    @vite('resources/css/app.scss')
</head>
<body >
<main class="flex h-screen">
    {{-- sidebar --}}
    <div class="bg-gray-800 w-1/4 flex flex-col gap-4 py-8 px-12 ">
        <div class="flex flex-col gap-4 justify-center items-center">
            <img src="https://bootstrapmade.com/demo/templates/iPortfolio/assets/img/profile-img.jpg" alt="" class="rounded-full w-48 h-48 border-4 border-gray-500 ">
            <h2 class="text-white text-4xl">Alex Smith</h2>
            <div class="flex gap-4">
                <a href="#" class="text-white bg-gray-500 rounded-full hover:bg-blue-500 no-underline inline-flex w-8 h-8 items-center justify-center ">
                    <i class='bx bxl-twitter'></i>
                </a>
                <a href="#" class="text-white bg-gray-500 rounded-full hover:bg-blue-500 no-underline inline-flex w-8 h-8 items-center justify-center ">
                    <i class='bx bxl-facebook'></i>
                </a>
                <a href="#" class="text-white bg-gray-500 rounded-full hover:bg-blue-500 no-underline inline-flex w-8 h-8 items-center justify-center ">
                    <i class='bx bxl-instagram'></i>
                </a>
                <a href="#" class="text-white bg-gray-500 rounded-full hover:bg-blue-500 no-underline inline-flex w-8 h-8 items-center justify-center ">
                    <i class='bx bxl-linkedin'></i>
                </a>
            </div>
        </div>
        <hr>
        <div class="flex flex-col g-8">
            <a href="/" class="text-gray-400 hover:text-white text-xl flex gap-2 items-center "> <i class='bx bxl-facebook text-2xl'></i>Home</a>
            <a href="/about" class="text-gray-400 hover:text-white text-xl flex gap-2 items-center "> <i class='bx bxl-facebook'></i>About</a>
            <a href="#" class="text-gray-400 hover:text-white text-xl flex gap-2 items-center "> <i class='bx bxl-facebook'></i>Dashboard</a>
            <a href="#" class="text-gray-400 hover:text-white text-xl flex gap-2 items-center "> <i class='bx bxl-facebook'></i>Services</a>
        </div>
    </div>
    {{-- Main content --}}
    <div class="w-3/4 flex items-center justify-center">
        @yield('content')
    </div>
</main>
</body>
</html>
