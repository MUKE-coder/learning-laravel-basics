<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.scss')
</head>
<body class="relative">
    <header class="fixed top-0 left-0 right-0 bg-gradient-to-r from-purple-600 to-pink-600 text-white py-16 px-24">
    <a href="#" class="text-white text-3xl">Home Page</a>
    </header>
   <section class="bg-blue-200 min-h-screen ">
    <h2 class="text-red-500 text-6xl">Welcome to Desishub</h2>
   <a href="/about">About</a>
   <div class="flex gap-4">
    <div class="w-[100px] h-[100px] bg-red-400 rounded-full hover:bg-green-600 transition-all  "></div>
    <div class="w-[100px] h-[100px] bg-blue-400 "></div>
   </div>

   </section>
</body>
</html>
