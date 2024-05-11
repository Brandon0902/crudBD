<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LEONMEE</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-...tu-integridad-aquí..." crossorigin="anonymous">
    <link rel="icon" href="{{ asset('images/lion.png') }}">
</head>
<body>
    <div>
        <header class="mb-16">
            <nav class="text-white bg-gradient-to-r from-blue-500 to-purple-500 flex justify-between items-center hover:bg-gradient-to-r hover:from-purple-500 hover:to-blue-500 transition duration-300 ease-in-out rounded-none shadow-lg p-4 md:p-6">
                <div class="flex flex-col sm:flex-row">
                    <h1 class="text-2xl font-bold text-gray-800 hidden md:block">Jugadores</h1>
                    <a class="mt-3 hover:underline sm:mx-3 sm:mt-0" href="{{route ('jugadores.create') }}">Jugadores</a>
                </div>
            </nav>
        </header>
        
        <main class="my-8">
            @yield('content')
        </main>

        <footer class="bg-gradient-to-r from-blue-500 to-purple-500 text-white py-4">
            <div class="container mx-auto flex justify-center items-center">
                <a href="#" class="mr-4 text-xl"><i class="fab fa-facebook"></i></a>
                <a href="#" class="mr-4 text-xl"><i class="fab fa-twitter"></i></a>
                <a href="#" class="mr-4 text-xl"><i class="fab fa-instagram"></i></a>
                <a href="#" class="mr-4 text-xl"><i class="fab fa-whatsapp"></i></a>
            </div>
            <div class="text-center mt-2">Derechos Reservados a LEONMEE</div>
        </footer>
    </div>
</body>
</html>
