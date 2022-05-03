<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Layout Laravel Test</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        clifford: '#da373d',
                    }
                }
            }
        }
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a23e6feb03.js"></script>
</head>
<body class="bg-gray-100 w-screen">
    <main class="w-screen">
        <nav class="h-16 w-screen bg-indigo-500 p-3 drop-shadow-lg">
            <a href="{{ route('products.index') }}" class="text-white text-lg font-bold">
                <i class="fas fa-store ml-2"></i>
                Tienda
            </a>
            <a href="{{ route('admin') }}" class="text-white text-lg font-bold ml-8">
                <i class="fas fa-solid fa-gear"></i>
                Admin
            </a>
        </nav>

        <div class="w-full p-10">
            @yield('content')
        </div>
    </main>
</body>
</html>
