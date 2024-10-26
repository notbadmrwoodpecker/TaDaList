<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Ta Da List 🎉</title>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body>
        <div class="w-96 mx-auto">
            <header class="mb-6">
                <nav class="py-4 flex items-center border-b border-gray-700">
                    <div>
                        <p class="text-3xl mr-3">🎉</p>
                    </div>
                    <div>
                        <h1 class="font-bold text-xl">ta da list</h1>
                        <p class="text-sm">Turn To-Dos into Ta-Das</p>
                    </div>
                </nav>
            </header>
            <div>
                <h1 class="mb-4 text-2xl font-extrabold">@yield('title')</h1>
                <div>
                    @yield('content')
                </div>
            </div>
        </div>
    </body>
</html>
