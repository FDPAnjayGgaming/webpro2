<x-app-layout>

<div class="py-12">
    <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 text-white overflow-hidden shadow-sm sm:rounded-lg p-6">

            <h2 class="text-xl font-bold mb-4">Data Detail Produk</h2>

            <div class="mb-4">
                <strong>Nama Produk</strong>
                <p>{{ $produk->nama }}</p>
            </div>

            <div class="mb-4">
                <strong>Kategori Produk</strong>
                <p>{{ $produk->kategori->nama ?? '-' }}</p>
            </div>

            <div class="mb-4">
                <strong>Qty Awal</strong>
                <p>{{ $produk->qty }}</p>
            </div>

            <div class="mb-4">
                <strong>Harga Jual</strong>
                <p>{{ $produk->harga_jual }}</p>
            </div>

            <div class="mb-4">
                <strong>Harga Beli</strong>
                <p>{{ $produk->harga_beli }}</p>
            </div>

            <a href="{{ route('produk.index') }}"
               class="bg-yellow-500 text-white px-4 py-2 rounded">
                Data Produk
            </a>

        </div>
    </div>
</div>

</x-app-layout>