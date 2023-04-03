<!DOCTYPE html>
<html>

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">


</head>

<body>
    <div class="flex justify-center h-screen w-screen bg-gradient ">
        <div class="absolute top-[34rem] left-[3rem] gap-11 flex flex-col">
            <button class="h-[4rem] w-[4rem] border border-white rounded-full"></button>
            <button class="h-[4rem] w-[4rem] border border-white rounded-full"></button>
        </div>

        {{ $slot }}

    </div>
</body>

</html>
