<x-sinom-layout>


    <x-slot name="header">
        <h2 class="font-semibold text-xl text-dark leading-tight">
            {{ __('Consument Analyst') }}
        </h2>
    </x-slot>
    <main>
        <!-- ======= Portfolio Details Section ======= -->
        <div class="container px-1">
            <label class="font-bold">Cari produk</label>
            <input placeholder="ketik nama produk" class="w-full rounded-lg border border-slate-700 form-control mb-5" id='search' type="text" />

            <!-- collapse  -->
            <div class="accordion" id="accordionExample">
                <div class="accordion-item bg-white text-dark border border-gray-200">
                    <h2 class="accordion-header mb-0" id="headingOne">
                        <button class="
                        accordion-button
                        relative
                        flex
                        items-center
                        w-full
                        py-4
                        px-5
                        text-base text-dark text-left
                     bg-white text-dark
                        border-0
                        rounded-none
                        transition
                        focus:outline-none
                        " type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Produk Terlaris
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body py-4 px-5">
                            <label class="font-bold mb-2">Nama produk</label>
                            <div class="flex flex-wrap w-full gap-1 mb-3">
                                <button class="px-3 rounded-full bg-light border border-secondary">Shachet</button>
                                <button class="px-3 rounded-full bg-light border border-secondary">Pack</button>
                                <button class="px-3 rounded-full bg-light border border-secondary">Karton</button>
                            </div>
                            <label class="font-bold mb-2">Diagram</label>
                            <div class="flex flex-wrap w-full gap-1 mb-4">
                                <button class="px-3 rounded-full bg-light border border-secondary">Batang</button>
                                <button class="px-3 rounded-full bg-light border border-secondary">Garis</button>
                                <button class="px-3 rounded-full bg-light border border-secondary">Lingkaran</button>
                            </div>

                            <canvas id="chartProduk" width="400" height="400"></canvas>
                        </div>
                    </div>
                </div>
                <div class="accordion-item bg-white text-dark border border-gray-200">
                    <h2 class="accordion-header mb-0" id="headingTwo">
                        <button class="
                        accordion-button
                        collapsed
                        relative
                        flex
                        items-center
                        w-full
                        py-4
                        px-5
                        text-base text-dark text-left
                     bg-white text-dark
                        border-0
                        rounded-none
                        transition
                        focus:outline-none
                        " type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Rentang umur
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body py-4 px-5">
                            <label class="font-bold mb-2">Umur</label>
                            <div class="flex flex-wrap w-full gap-1 mb-3">
                                <button class="px-3 rounded-full bg-light border border-secondary">Mingguan</button>
                                <button class="px-3 rounded-full bg-light border border-secondary">Bulanan</button>
                                <button class="px-3 rounded-full bg-light border border-secondary">Tahunan</button>
                            </div>
                            <label class="font-bold mb-2">Diagram</label>
                            <div class="flex flex-wrap w-full gap-1 mb-4">
                                <button class="px-3 rounded-full bg-light border border-secondary">Batang</button>
                                <button class="px-3 rounded-full bg-light border border-secondary">Garis</button>
                                <button class="px-3 rounded-full bg-light border border-secondary">Lingkaran</button>
                            </div>

                            <canvas id="chartUmur" width="400" height="400"></canvas>
                        </div>
                    </div>
                </div>
                <div class="accordion-item bg-white text-dark border border-gray-200">
                    <h2 class="accordion-header mb-0" id="headingThree">
                        <button class="
                    accordion-button
                    collapsed
                    relative
                    flex
                    items-center
                    w-full
                    py-4
                    px-5
                    text-base text-dark text-left
                 bg-white text-dark
                    border-0
                    rounded-none
                    transition
                    focus:outline-none
                    " type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Rating
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body py-4 px-5">
                            <label class="font-bold mb-2">Diagram</label>
                            <div class="flex flex-wrap w-full gap-1 mb-4">
                                <button class="px-3 rounded-full bg-light border border-secondary">Batang</button>
                                <button class="px-3 rounded-full bg-light border border-secondary">Garis</button>
                                <button class="px-3 rounded-full bg-light border border-secondary">Lingkaran</button>
                            </div>
                            <canvas id="chartRating" width="400" height="400"></canvas>
                        </div>
                    </div>
                </div>
                <div class="accordion-item bg-white text-dark border border-gray-200">
                    <h2 class="accordion-header mb-0" id="headingThree">
                        <button class="
                    accordion-button
                    collapsed
                    relative
                    flex
                    items-center
                    w-full
                    py-4
                    px-5
                    text-base text-dark text-left
                 bg-white text-dark
                    border-0
                    rounded-none
                    transition
                    focus:outline-none
                    " type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                            Pemakaian
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body py-4 px-5">
                            <label class="font-bold mb-2">Diagram</label>
                            <div class="flex flex-wrap w-full gap-1 mb-4">
                                <button class="px-3 rounded-full bg-light border border-secondary">Batang</button>
                                <button class="px-3 rounded-full bg-light border border-secondary">Garis</button>
                                <button class="px-3 rounded-full bg-light border border-secondary">Lingkaran</button>
                            </div>
                            <canvas id="chartPemakaian" width="400" height="400"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main><!-- End #main -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.bundle.js" charset="utf-8"></script>
    <script>
        const ctxProduk = document.getElementById('chartProduk').getContext('2d');
        const ctxUmur = document.getElementById('chartUmur').getContext('2d');
        const ctxPemakaian = document.getElementById('chartPemakaian').getContext('2d');
        const ctxRating = document.getElementById('chartRating').getContext('2d');

        const chartProduk = new Chart(ctxProduk, {
            type: 'bar',
            data: {
                labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                datasets: [{
                    label: '# of Votes',
                    data: [12, 19, 3, 5, 2, 3],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
        const chartUmur = new Chart(ctxUmur, {
            type: 'bar',
            data: {
                labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                datasets: [{
                    label: '# of Votes',
                    data: [12, 19, 3, 5, 2, 3],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
        const chartPemakaian = new Chart(ctxPemakaian, {
            type: 'bar',
            data: {
                labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                datasets: [{
                    label: '# of Votes',
                    data: [12, 19, 3, 5, 2, 3],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
        const chartRating = new Chart(ctxRating, {
            type: 'bar',
            data: {
                labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                datasets: [{
                    label: '# of Votes',
                    data: [12, 19, 3, 5, 2, 3],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{url('assets/vendor/purecounter/purecounter.js')}}"></script>
    <script src="{{url('assets/vendor/aos/aos.js')}}"></script>
    <script src="{{url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{url('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
    <script src="{{url('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
    <script src="{{url('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
    <script src="{{url('assets/vendor/typed.js/typed.min.js')}}"></script>
    <script src="{{url('assets/vendor/waypoints/noframework.waypoints.js')}}"></script>
    <script src="{{url('assets/vendor/php-email-form/validate.js')}}"></script>

    <!-- Template Main JS File -->
    <script src="{{url('assets/js/main.js')}}"></script>

    </x-app-layout>