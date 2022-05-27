<x-sinom-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Data Produk ').$product->name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:p-6 lg:p-8 bg-white rounded-md">

            <form method="POST" action="{{ route('product.edit') }}">
                @csrf
                <div class="mb-4">
                    <x-jet-label for="name" value="{{ __('Nama') }}" />
                    <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                    <x-jet-input-error for="name" class="mt-2" />
                </div>

                <div class="mb-4">
                    <x-jet-label for="price" value="{{ __('Harga') }}" />
                    <x-jet-input id="price" class="block mt-1 w-full" type="text" name="price" :value="old('price')" required autofocus />
                    <x-jet-input-error for="price" class="mt-2" />
                </div>

                <div class="mb-4">
                    <x-jet-label for="composition" value="{{ __('Komposisi') }}" />
                    <x-jet-input id="composition" class="block mt-1 w-full" type="text" name="composition" :value="old('composition')" required autofocus />
                    <x-jet-input-error for="composition" class="mt-2" />
                </div>

                <div class="mb-4">
                    <x-jet-label for="usage" value="{{ __('Kegunaan') }}" />
                    <x-jet-input id="usage" class="block mt-1 w-full" type="text" name="usage" :value="old('usage')" required autofocus />
                    <x-jet-input-error for="usage" class="mt-2" />
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
