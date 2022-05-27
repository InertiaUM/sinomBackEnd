<x-sinom-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="rounded-lg bg-white py-4 w-screen relative">
        <h3 class="absolute ml-3  text-xl font-bold">Selamat datang di SINOM</h3>
        <img src="{{url('/images/welcome.svg')}}" alt="Card image cap" class="col-4 mx-auto mt-5 ml-4">
    </div>
    <div class="container mt-5 mb-3">
        <h2>Layanan Fitur</h2>
    </div>
    <div class="container overflow-scroll flex flex-row gap-3">
        <a href="/consument-analyst" class="card col-6">
            <img src="{{url('/icons/consumer.png')}}" alt="Card image cap" class="w-20 mx-auto mt-3">
            <div class="card-body">
                <h5 class="card-title text-dark text-center">Analisa Konsumen</h5>
            </div>
        </a>
        <div class="card col-6">
            <img src="{{url('/icons/analysing.png')}}" alt="Card image cap" class="w-20 mx-auto mt-3">
            <div class="card-body">
                <h5 class="card-title text-dark text-center">Bandingkan</h5>
            </div>
        </div>
        <a href="/product-analyst" class="card col-6">
            <img src="{{url('/icons/products.png')}}" alt="Card image cap" class="w-20 mx-auto mt-3">
            <div class="card-body">
                <h5 class="card-title text-dark text-center">Analisa Produk</h5>
            </div>
        </a>
        <a href="/profit-analyst" class="card col-6">
            <img src="{{url('/icons/profit.png')}}" alt="Card image cap" class="w-20 mx-auto mt-3">
            <div class="card-body">
                <h5 class="card-title text-dark text-center">Analisa Profit</h5>
            </div>
        </a>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script>
        $('.carouselExampleIndicators').carousel()
    </script>

</x-sinom-layout>