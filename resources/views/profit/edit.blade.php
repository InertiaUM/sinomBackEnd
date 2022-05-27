<x-sinom-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Data Keuntungan Produk ').$product->name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:p-6 lg:p-8 bg-white rounded-md">

            <form method="POST" action="{{ route('product.profit.update', [$product, $profit]) }}">
                @method('PUT')
                @csrf

                <div class="mb-4">
                    <x-jet-label for="start_date" value="{{ __('Rentang awal') }}" />
                    <x-jet-input id="start_date" class="block mt-1 w-full" type="date" name="start_date" :value="old('start_date', $profit->start_date->format('Y-m-d'))" required autofocus />
                    <x-jet-input-error for="start_date" class="mt-2" />
                </div>

                <div class="mb-4">
                    <x-jet-label for="end_date" value="{{ __('Rentang akhir') }}" />
                    <x-jet-input id="end_date" class="block mt-1 w-full" type="date" name="end_date" :value="old('end_date', $profit->end_date->format('Y-m-d'))" required autofocus />
                    <x-jet-input-error for="end_date" class="mt-2" />
                </div>

                <div class="mb-4">
                    <x-jet-label for="qty" value="{{ __('Total Penjualan') }}" />
                    <x-jet-input id="qty" class="block mt-1 w-full" type="number" name="qty" :value="old('qty', $profit->qty)" required autofocus />
                    <x-jet-input-error for="qty" class="mt-2" />
                </div>

                <div class="flex items-center justify-end mt-4">
                    <x-jet-button>
                        {{ __('Simpan') }}
                    </x-jet-button>
                </div>
            </form>
        </div>
    </div>
</x-sinom-layout>