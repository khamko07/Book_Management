
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Management</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body class="bg-gray-100">
    <nav class="bg-white shadow-lg">
        <div class="container mx-auto px-6 py-4">
            <div class="flex items-center justify-between">
                <div class="text-xl font-semibold text-gray-800">
                    <a href="{{ route('books.index') }}">Book Management</a>
                </div>
                <!-- Add navigation items here if needed -->
            </div>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>
    <div class="footer">
        @yield('footer')
    </div>
</body>
</html>
