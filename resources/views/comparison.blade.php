<x-sinom-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="container mb-3">
        <h2 class="text-xl font-bold">Bandingkan</h2>
    </div>
    <div class="relative mb-3">
        <button class="px-3 py-1 text-center rounded-full border border-secondary bg-warning">Antar produk</button>
        <button class="px-3 py-1 text-center rounded-full border border-secondary bg-white">Antar perusahaan</button>
    </div>
    <form>
        <div class="form-floating">
            <input type="password" class="form-control rounded-lg mb-3" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Produk pertama</label>
        </div>
        <div class="form-floating">
            <input type="password" class="form-control rounded-lg mb-3" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Produk kedua</label>
        </div>
    </form>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script>
        $('.carouselExampleIndicators').carousel()
    </script>

</x-sinom-layout>