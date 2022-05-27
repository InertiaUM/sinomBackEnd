<x-sinom-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah Data Perusahaan ') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:p-6 lg:p-8 bg-white rounded-md">

            <form method="POST" action="{{ route('info.store') }}">
                @csrf

                <div class="mb-4">
                    <x-jet-label for="efficiency" value="{{ __('Efisiensi') }}" />
                    <x-jet-input id="efficiency" class="block mt-1 w-full" type="text" name="efficiency" :value="old('efficiency')" required autofocus />
                    <x-jet-input-error for="efficiency" class="mt-2" />
                </div>

                <div class="mb-4">
                    <x-jet-label for="organization" value="{{ __('Info Organisasi') }}" />
                    <x-jet-input id="organization" class="block mt-1 w-full" type="text" name="organization" :value="old('organization')" required autofocus />
                    <x-jet-input-error for="organization" class="mt-2" />
                </div>

                <div class="mb-4">
                    <x-jet-label for="commisioner_report" value="{{ __('Laporan Dewan Komisaris') }}" />
                    <x-jet-input id="commisioner_report" class="block mt-1 w-full" type="text" name="commisioner_report" :value="old('commisioner_report')" required autofocus />
                    <x-jet-input-error for="commisioner_report" class="mt-2" />
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
