<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite("resources/css/app.scss")
</head>
<body>
   <x-page-header class="bg-gray-800 text-white" title="Welcome to Service Page"/>
   <div class="mt-[100px]">
    <x-card title="Card heading" class="border-4 border-red-700 py-16 px-8 bg-gray-900" >
       Here is some Text
    </x-card>
   </div>
</body>
</html>
