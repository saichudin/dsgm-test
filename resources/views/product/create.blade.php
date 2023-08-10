<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah Produk') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex flex-col overflow-x-auto">
                <div class="sm:-mx-6 lg:-mx-8">
                    <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                        <div class="overflow-x-auto">

                            <form method="POST" action="{{ route('product.store') }}">
                                @csrf
                                <div class="mb-6">
                                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Nama</label>
                                    <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Nama Produk" required>
                                </div>
                                <div class="mb-6">
                                    <label for="sku" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">SKU</label>
                                    <input type="text" name="sku" id="sku" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="SKU Product" required>
                                </div>
                                <div class="mb-6">
                                    <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Harga</label>
                                    <input type="number" min="0" name="price" id="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Harga Product" required>
                                </div>
                                <div class="mb-6">
                                    <label for="stock" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Stok</label>
                                    <input type="number" min="0" name="stock" id="stock" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Stok Product" required>
                                </div>

                                <button type="submit" class="rounded-full bg-gray-500 text-white focus:ring-red-600 px-4 py-2 text-sm">Simpan</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</x-app-layout>
