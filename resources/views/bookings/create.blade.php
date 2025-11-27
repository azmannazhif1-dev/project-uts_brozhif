<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Booking</title>

    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="bg-gray-100 antialiased">

    <div class="flex items-center justify-center min-h-screen">
        <div class="w-full max-w-2xl bg-white p-8 rounded-xl shadow-2xl">

            <h2 class="text-3xl font-bold text-gray-800 mb-6 border-b pb-2">
                Tambah Booking Baru
            </h2>

            <form action="{{ route('bookings.store') }}" method="POST" class="space-y-6">
                @csrf

                <div>
                    <label for="customer_name" class="block text-sm font-medium text-gray-700">Nama Pelanggan:</label>
                    <input type="text" name="customer_name" id="customer_name" required
                        class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 transition duration-150">
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="phone" class="block text-sm font-medium text-gray-700">Telepon:</label>
                        <input type="text" name="phone" id="phone" required
                            class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 transition duration-150">
                    </div>
                    <div>
                        <label for="service" class="block text-sm font-medium text-gray-700">Layanan:</label>
                        <input type="text" name="service" id="service" required
                            class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 transition duration-150">
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="date" class="block text-sm font-medium text-gray-700">Tanggal:</label>
                        <input type="date" name="date" id="date" required
                            class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 transition duration-150">
                    </div>
                    <div>
                        <label for="time" class="block text-sm font-medium text-gray-700">Jam:</label>
                        <input type="time" name="time" id="time" required
                            class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 transition duration-150">
                    </div>
                </div>

                <div>
                    <label for="status" class="block text-sm font-medium text-gray-700">Status:</label>
                    <select name="status" id="status"
                        class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 transition duration-150">
                        <option value="pending">Pending</option>
                        <option value="confirmed">Confirmed</option>
                        <option value="cancelled">Cancelled</option>
                    </select>
                </div>

                <div>
                    <label for="note" class="block text-sm font-medium text-gray-700">Catatan:</label>
                    <textarea name="note" id="note" rows="3"
                        class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 transition duration-150"></textarea>
                </div>

                <div class="flex justify-between items-center pt-4">
                    <button type="submit"
                        class="py-2 px-6 border border-transparent rounded-lg shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition duration-150">
                        Simpan Booking
                    </button>
                    <a href="{{ route('bookings.index') }}"
                        class="text-sm font-medium text-gray-600 hover:text-gray-900 transition duration-150">
                        Kembali ke Daftar
                    </a>
                </div>

            </form>
        </div>
    </div>

</body>

</html>