<x-sinom-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Berita Perusahaan ').$company->name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:p-6 lg:p-8 bg-white rounded-md">

            <a href="{{ route('new.create') }}">
                <x-jet-button>Tambah Data</x-jet-button>
            </a>

            <table class="w-full mt-4 border border-angin">
                <thead class="bg-angin text-white">
                    <tr>
                        <th class="p-2">No</th>
                        <th class="p-2">Tanggal Pembaruan</th>
                        <th class="p-2">Judul</th>
                        <th class="p-2">Berita</th>
                        <th class="p-2">Tindakan</th>
                    </tr>
                </thead>
                <tbody class="border border-angin">
                    @forelse ($company->news as $key => $new)
                        <tr class="border border-angin">
                            <td class="p-2">{{ 1 + $key }}</td>
                            <td class="p-2">{{ $new->created_at->translatedFormat('j F Y H:m') }}</td>
                            <td class="p-2">{{ $new->title }}</td>
                            <td class="p-2">{{ $new->news }}</td>
                            <td class="flex items-center gap-x-4 p-2">

                                {{-- <a href="{{ route('info.edit', $info) }}">
                                    <x-jet-button>Edit</x-jet-button>
                                </a> --}}

                                <form method="POST" action="{{ route('new.destroy', $new) }}">
                                    @method('DELETE')
                                    @csrf
                                    <x-jet-danger-button type="submit">
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
