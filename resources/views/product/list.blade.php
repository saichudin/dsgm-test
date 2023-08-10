<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('List Produk') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex flex-col overflow-x-auto">
                <div class="sm:-mx-6 lg:-mx-8">
                    <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                        <div class="overflow-x-auto">
                            <div>
                                <a href="{{ route('product.create') }}" class="rounded-full bg-gray-500 text-white focus:ring-red-600 px-4 py-2 text-sm">Tambah Produk</a>
                            </div><br>
                            <table class="min-w-full text-left text-sm font-light">
                                <thead class="border-b font-medium dark:border-neutral-500">
                                <tr>
                                    <th scope="col" class="px-6 py-2 text-center">ID</th>
                                    <th scope="col" class="px-6 py-2 text-center">Nama</th>
                                    <th scope="col" class="px-6 py-2 text-center">SKU</th>
                                    <th scope="col" class="px-6 py-2 text-center">Harga</th>
                                    <th scope="col" class="px-6 py-2 text-center">Stok</th>
                                    <th scope="col" class="px-6 py-2 text-center">Tanggal Update</th>
                                    <th scope="col" class="px-6 py-2 text-center" colspan="2">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($products as $product)
                                    <tr class="border-b dark:border-neutral-500">
                                        <td class="whitespace-nowrap px-6 py-4 font-medium">{{$product->id}}</td>
                                        <td class="whitespace-nowrap px-6 py-4">{{$product->name}}</td>
                                        <td class="whitespace-nowrap px-6 py-4">{{$product->sku}}</td>
                                        <td class="whitespace-nowrap px-6 py-4">{{$product->price}}</td>
                                        <td class="whitespace-nowrap px-6 py-4">{{$product->stock}}</td>
                                        <td class="whitespace-nowrap px-6 py-4">{{$product->updated_at->toDateTimeString()}}</td>
                                        <td class="px-1 py-1">
                                            <a href="{{ route('product.edit', $product->id) }}" class="bg-gray-500 text-white focus:ring-red-600 px-4 py-2 text-sm">Edit</a>
                                        </td>
                                        <td class="px-1 py-1">
                                            <form method="POST" action="{{ route('product.destroy', $product->id) }}">
                                                @csrf
                                                @method('DELETE')
                                                <button class="bg-gray-500 text-white focus:ring-red-600 px-4 py-2 text-sm" onclick="return confirm('{{ __('Apakah anda yakin untuk menghapus ?' }}) }}')">
                                                    {{ __('Hapus') }}
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</x-app-layout>
