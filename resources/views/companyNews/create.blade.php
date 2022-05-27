<x-sinom-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah Data Perusahaan ') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:p-6 lg:p-8 bg-white rounded-md">

            <form method="POST" action="{{ route('new.store') }}">
                @csrf

                <div class="mb-4">
                    <x-jet-label for="title" value="{{ __('Judul') }}" />
                    <x-jet-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title')" required autofocus />
                    <x-jet-input-error for="title" class="mt-2" />
                </div>

                <div class="mb-4">
                    <x-jet-label for="news" value="{{ __('Berita') }}" />
                    <x-jet-input id="news" class="block mt-1 w-full" type="text" name="news" :value="old('news')" required autofocus />
                    <x-jet-input-error for="news" class="mt-2" />
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
