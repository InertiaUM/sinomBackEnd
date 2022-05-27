<x-sinom-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah Data Rating').$product->name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:p-6 lg:p-8 bg-white rounded-md">

            <form method="POST" action="{{ route('product.rating.store', $product) }}">
                @csrf

                <div class="mb-4">
                    <x-jet-label for="age" value="{{ __('Umur') }}" />
                    <x-jet-input id="age" class="block mt-1 w-full" type="date" name="age" :value="old('age')" required autofocus />
                    <x-jet-input-error for="age" class="mt-2" />
                </div>

                <div class="mb-4">
                    <x-jet-label for="rating" value="{{ __('Rating') }}" />
                    <x-jet-input id="rating" class="block mt-1 w-full" type="date" name="rating" :value="old('rating')" required autofocus />
                    <x-jet-input-error for="rating" class="mt-2" />
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
