<x-sinom-layout>


    <x-slot name="header">
        <h2 class="font-semibold text-xl text-dark leading-tight">
            {{ __('Profit Analyst') }}
        </h2>
    </x-slot>
    <main>
        <!-- ======= Portfolio Details Section ======= -->
        <div class="container px-1">
            <label class="font-bold">Pilih produk</label>
            <div class="flex flex-row gap-3">
                <input type="radio" name="type" value="all" /><label>Keseluruhan Produk</label>
            </div>
            <div class="flex flex-row gap-3">
                <input type="radio" name="type" value="one" /><label>Pilih Produk</label>
            </div>

            <label class="font-bold block mt-3">Pilih tanggal</label>
            <input type="date" name="date-range" class="mb-3 block w-full" />

            <!-- collapse  -->
            <label class="font-bold mb-2">Diagram</label>
            <div class="flex flex-wrap w-full gap-1 mb-4">
                <button class="px-3 rounded-full bg-light border border-secondary">Batang</button>
                <button class="px-3 rounded-full bg-light border border-secondary">Garis</button>
                <button class="px-3 rounded-full bg-light border border-secondary">Lingkaran</button>
            </div>
            <canvas id="chartProfit" width="400" height="400"></canvas>

            <p class="px-3 py-2 bg-white text-dark">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consectetur quibusdam quaerat deserunt qui vel, id dolorem animi illum ullam quo obcaecati, voluptatem ipsum quis voluptatibus perferendis sit in, nobis sapiente.</p>

        </div>

    </main><!-- End #main -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.bundle.js" charset="utf-8"></script>
    <script>
        const ctxProfit = document.getElementById('chartProfit').getContext('2d');

        const chartProfit = new Chart(ctxProfit, {
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