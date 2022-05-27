<x-admin-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <table class="w-full mt-4 border border-angin">
                <thead class="bg-angin text-white">
                    <tr>
                        <th class="p-2">No</th>
                        <th class="p-2">Nama Perusahaan</th>
                        <th class="p-2">Alamat</th>
                        <th class="p-2">Berkas</th>
                        <th class="p-2">Tindakan</th>
                    </tr>
                </thead>
                <tbody class="border border-angin">
                    @forelse ($companies as $key => $company)
                        <tr class="border border-angin">
                            <td class="p-2">{{ 1 + $key }}</td>
                            <td class="p-2">{{ $company->name }}</td>
                            <td class="p-2">{{ $company->address }}</td>
                            <td class="p-2">
                                <iframe class="w-48 md:w-96" src="{{ route('verification.file', $company) }}" frameborder="0"></iframe>
                            </td>
                            <td class="flex items-center gap-x-4 p-2">
                                <form method="POST" action="{{ route('verification.update', $company) }}">
                                    @method('PUT')
                                    @csrf
                                    <x-jet-button>
                                        {{ __('Verifikasi') }}
                                    </x-jet-button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr class="border-angin">
                            <td class="p-2 text-center" colspan="4">Data tidak ditemukan</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</x-admin-layout>