<x-app-layout>

<div class="py-12">
    <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 text-gray-900 dark:text-gray-100 overflow-hidden shadow-sm sm:rounded-lg p-6">

            <h2 class="text-xl font-bold mb-4">
                Tambah Data Produk
            </h2>

            <form action="{{ route('produk.store') }}" method="POST">
                @csrf

                <div class="mb-4">
                    <label>Nama Produk</label>

                    <input type="text"
                           name="nama"
                           value="{{ old('nama') }}"
                           class="border rounded w-full p-2 bg-white text-black">

                    @error('nama')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label>Kategori Produk</label>

                    <select name="kategori"
                            class="border rounded w-full p-2 bg-white text-black">

                        <option value="">Pilih Kategori</option>

                        @foreach ($kategori as $k)
                            <option value="{{ $k->id }}" {{ old('kategori') == $k->id ? 'selected' : '' }}>
                                {{ $k->nama }}
                            </option>
                        @endforeach

                    </select>

                    @error('kategori')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label>Qty Awal</label>

                    <input type="text"
                           name="qty"
                           value="{{ old('qty') }}"
                           class="border rounded w-full p-2 bg-white text-black">

                    @error('qty')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label>Harga Jual</label>

                    <input type="text"
                           name="jual"
                           value="{{ old('jual') }}"
                           class="border rounded w-full p-2 bg-white text-black">

                    @error('jual')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label>Harga Beli</label>

                    <input type="text"
                           name="beli"
                           value="{{ old('beli') }}"
                           class="border rounded w-full p-2 bg-white text-black">

                    @error('beli')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">
                    Simpan
                </button>

            </form>

        </div>
    </div>
</div>

</x-app-layout>