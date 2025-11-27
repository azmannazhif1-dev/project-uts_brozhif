<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - BarberShop</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 flex items-center justify-center min-h-screen">

    <div class="bg-white p-8 rounded-xl shadow-xl w-full max-w-sm">

        <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">
            Login BarberShop
        </h2>

        @if ($errors->any())
            <div class="bg-red-100 text-red-700 p-3 rounded-md mb-4 text-sm">
                {{ $errors->first() }}
            </div>
        @endif

        <form action="{{ route('login.process') }}" method="POST">
            @csrf

            <label class="block text-gray-700 text-sm font-medium mb-1">Email</label>
            <input type="email" name="email" required
                class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-blue-300 mb-4 outline-none">

            <label class="block text-gray-700 text-sm font-medium mb-1">Password</label>
            <input type="password" name="password" required
                class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-blue-300 mb-6 outline-none">

            <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition">
                Login
            </button>
        </form>
    </div>

</body>

</html>