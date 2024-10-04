<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contador</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    @vite('resources/css/app.css')
</head>
<body class="font-sans antialiased bg-gray-100 dark:bg-gray-900 text-gray-900 dark:text-gray-100">
    <main class="container mx-auto px-4 py-8">
        <h1 class="text-4xl font-bold mb-8 text-center">Contador</h1>
        <div class="flex flex-col items-center space-y-6">
            <span class="text-6xl font-bold mb-4 transition-all duration-300 ease-in-out transform hover:scale-110">{{ $numero }}</span>
            <div class="flex space-x-4">
                <x-button onclick="location.href='{{ route('contador.decrementar', ['numero' => $numero]) }}'"
                    class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded-full transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-110">
                    -
                </x-button>
                <x-button onclick="location.href='{{ route('contador.incrementar', ['numero' => $numero]) }}'"
                    class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded-full transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-110">
                    +
                </x-button>
            </div>
            <div class="flex space-x-4">
                <x-button onclick="location.href='{{ route('contador.reiniciar') }}'"
                    class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-105">
                    Reiniciar
                </x-button>
                <x-button onclick="location.href='{{ route('contador.duplicar', ['numero' => $numero]) }}'"
                    class="bg-purple-500 hover:bg-purple-600 text-white font-bold py-2 px-4 rounded transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-105">
                    Duplicar
                </x-button>
            </div>
            <form action="{{ route('contador.restablecer') }}" method="POST" class="flex items-center space-x-2">
                @csrf
                <input type="number" name="valor" min="0" max="10" class="border-2 border-gray-300 bg-white h-10 px-5 rounded-lg text-sm focus:outline-none" required>
                <x-button type="submit" class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-2 px-4 rounded transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-105">
                    Restablecer
                </x-button>
            </form>
            @if(!empty($mensaje))
                <p class="text-red-500 mt-4">{{ $mensaje }}</p>
            @endif

        </div>
    </main>
</body>
</html>
