<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Booking BarberShop</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-blue-50 antialiased p-8">

    <div class="max-w-7xl mx-auto bg-white p-6 rounded-xl shadow-2xl">

        <h2 class="text-4xl font-extrabold text-gray-900 mb-6 border-b pb-2 text-center">
            ✂️ Daftar Booking BarberShop
        </h2>

        <div class="flex justify-between items-center mb-4">

            <a href="{{ route('bookings.create') }}"
                class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition duration-150">
                + Tambah Booking Baru
            </a>

            <form action="{{ route('logout') }}" method="POST" class="inline">
                @csrf
                <button type="submit"
                    class="text-sm font-bold text-red-600 hover:text-red-800 transition duration-150 py-2 px-4 border rounded-md">
                    Logout
                </button>
            </form>
        </div>

        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                <span class="block sm:inline">{{ session('success') }}</span>
            </div>
        @endif

        <div class="overflow-x-auto shadow-xl rounded-lg border border-gray-200">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-blue-600">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">ID</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">Nama
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">Telepon
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">Layanan
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">Tanggal
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">Jam</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">Status
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">Catatan
                        </th>
                        <th class="px-6 py-3 text-center text-xs font-medium text-white uppercase tracking-wider">Aksi
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($bookings as $booking)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $booking->id }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">{{ $booking->customer_name }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">{{ $booking->phone }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">{{ $booking->service }}</td>

                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">{{ $booking->date }}</td>

                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">{{ $booking->time }}</td>

                            <td class="px-6 py-4 whitespace-nowrap">
                                @php
                                    $color = match ($booking->status) {
                                        'confirmed' => 'bg-green-100 text-green-800',
                                        'cancelled' => 'bg-red-100 text-red-800',
                                        default => 'bg-yellow-100 text-yellow-800', // Pending
                                    };
                                @endphp
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full {{ $color }}">
                                    {{ ucfirst($booking->status) }}
                                </span>
                            </td>

                            <td class="px-6 py-4 text-sm text-gray-600 max-w-xs truncate">{{ $booking->note }}</td>

                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-center">
                                <a href="{{ route('bookings.edit', $booking->id) }}"
                                    class="text-blue-600 hover:text-blue-900 mr-3 font-semibold">Edit</a>

                                <form action="{{ route('bookings.destroy', $booking->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        onclick="return confirm('Apakah Anda yakin ingin menghapus booking ini?')"
                                        class="text-red-600 hover:text-red-900 font-semibold">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>