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
    <div class="flex justify-center min-h-screen  bg-gradient ">
        <form method="POST" action="{{ route('languages.switch',['lang']) }}">
            @csrf

            <div class="absolute top-[34rem] left-[3rem] gap-11 flex flex-col">
                <button type='submit' name="locale" value="en" class="h-[4rem] w-[4rem] border border-white rounded-full {{ App::getLocale() === 'en' ?  'bg-white' : '' }}">En</button>
                <button type='submit' name="locale" value="ka" class="h-[4rem] w-[4rem] border border-white rounded-full {{ App::getLocale() === 'ka' ? 'bg-white' : '' }}">Ka</button>
            </div>

        </form>

        {{ $slot }}

    </div>
</body>

</html>
