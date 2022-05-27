<x-sinom-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Organitational Efficiency') }}
        </h2>
    </x-slot>

    <div class="container mt-5 mb-3">
        <h2>Layanan Fitur</h2>
    </div>
    <div class="container overflow-scroll flex flex-row gap-3">
        <div class="card col-6">
            <img class="card-img-top" src="https://images.unsplash.com/photo-1536599018102-9f803c140fc1?auto=format&fit=crop&w=440&h=220&q=60" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title text-dark">Analisa Konsumen</h5>
            </div>
        </div>
        <div class="card col-6">
            <img class="card-img-top" src="https://images.unsplash.com/photo-1536599018102-9f803c140fc1?auto=format&fit=crop&w=440&h=220&q=60" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title text-dark">Bandingkan</h5>
            </div>
        </div>
        <div class="card col-6">
            <img class="card-img-top" src="https://images.unsplash.com/photo-1536599018102-9f803c140fc1?auto=format&fit=crop&w=440&h=220&q=60" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title text-dark">Analisa Produk</h5>
            </div>
        </div>
        <div class="card col-6">
            <img class="card-img-top" src="https://images.unsplash.com/photo-1536599018102-9f803c140fc1?auto=format&fit=crop&w=440&h=220&q=60" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title text-dark">Analisa Profit</h5>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script>
        $('.carouselExampleIndicators').carousel()
    </script>

    </x-app-layout>