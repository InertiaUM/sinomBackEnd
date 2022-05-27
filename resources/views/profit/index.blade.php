<x-sinom-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Keuntungan Produk ').$product->name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:p-6 lg:p-8 bg-white rounded-md">

            <a href="{{ route('product.profit.create', $product) }}">
                <x-jet-button>Tambah Data</x-jet-button>
            </a>

            <table class="w-full mt-4 border border-angin">
                <thead class="bg-angin text-white">
                    <tr>
                        <th class="p-2">No</th>
                        <th class="p-2">Rentang Waktu</th>
                        <th class="p-2">Kuantitas</th>
                        <th class="p-2">Profit</th>
                        <th class="p-2">Tindakan</th>
                    </tr>
                </thead>
                <tbody class="border border-angin">
                    @forelse ($product->profits as $key => $profit)
                        <tr class="border border-angin">
                            <td class="p-2">{{ 1 + $key }}</td>
                            <td class="p-2">{{ $profit->range }}</td>
                            <td class="p-2">{{ $profit->qtyUnits }}</td>
                            <td class="p-2">{{ $profit->readProfit }}</td>
                            <td class="flex items-center gap-x-4 p-2">

                                <a href="{{ route('product.profit.edit', [$product, $profit]) }}">
                                    <x-jet-button>Edit</x-jet-button>
                                </a>

                                <form method="POST" action="{{ route('verification.destroy', [$product, $profit]) }}">
                                    @method('DELETE')
                                    @csrf
                                    <x-jet-danger-button>
                                        {{ __('Hapus') }}
                                    </x-jet-danger-button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr class="border-angin">
                            <td class="p-2 text-center" colspan="99">Data tidak ditemukan</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</x-sinom-layout>