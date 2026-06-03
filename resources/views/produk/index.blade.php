<x-app-layout>

<div class="py-12">

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">

            <a href="{{ route('produk.create') }}"
               class="bg-blue-600 text-white px-4 py-2 rounded">
               Tambah Produk
            </a>

            <div class="mt-4 overflow-x-auto">

                <table class="w-full border border-gray-300 text-white">

                    <thead class="bg-gray-700">

                        <tr>
                            <th class="border px-3 py-2">No</th>
                            <th class="border px-3 py-2">Nama</th>
                            <th class="border px-3 py-2">Kategori</th>
                            <th class="border px-3 py-2">Qty</th>
                            <th class="border px-3 py-2">Harga Beli</th>
                            <th class="border px-3 py-2">Harga Jual</th>
                            <th class="border px-3 py-2">Dibuat Pada</th>
                            <th class="border px-3 py-2">Diedit Pada</th>
                            <th class="border px-3 py-2">Aksi</th>
                        </tr>

                    </thead>

                    <tbody>

                        @foreach ($produk as $i => $p)

                        <tr class="hover:bg-gray-700">

                            <td class="border px-3 py-2 text-center">
                                {{ $i + 1 }}
                            </td>

                            <td class="border px-3 py-2">
                                {{ $p->nama }}
                            </td>

                            <td class="border px-3 py-2">
                                {{ $p->kategori->nama ?? '-' }}
                            </td>

                            <td class="border px-3 py-2 text-center">
                                {{ $p->qty }}
                            </td>

                            <td class="border px-3 py-2">
                                {{ $p->harga_beli }}
                            </td>

                            <td class="border px-3 py-2">
                                {{ $p->harga_jual }}
                            </td>

                            <td class="border px-3 py-2">
                                {{ $p->created_at }}
                            </td>

                            <td class="border px-3 py-2">
                                {{ $p->updated_at }}
                            </td>

                            <td class="border px-3 py-2">

                                <div class="flex gap-2 items-center">

                                    <a href="{{ route('produk.show', $p->id) }}"
                                    class="inline-block bg-yellow-500 text-white px-3 py-2 rounded">
                                        Detail
                                    </a>

                                    <a href="{{ route('produk.edit', $p->id) }}"
                                    class="inline-block bg-green-600 text-white px-3 py-2 rounded">
                                        Edit
                                    </a>

                                    <form method="POST" action="{{ route('produk.destroy', $p->id) }}">
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit"
                                                class="bg-red-600 text-white px-3 py-2 rounded">
                                            Hapus
                                        </button>
                                    </form>-

                                </div>

                            </td>

                        </tr>

                        @endforeach

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</div>

</x-app-layout>