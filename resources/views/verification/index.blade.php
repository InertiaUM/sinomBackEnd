@foreach ($companies as $company)
    <form method="POST" action="{{ route('verification.update', $company) }}">
        @method('PUT')
        @csrf
        <x-jet-button>Verifikasi</x-jet-button>
    </form>
@endforeach