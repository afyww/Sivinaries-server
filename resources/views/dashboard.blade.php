<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dashboard</title>
    @include('layout.head')
</head>

<body class="m-0 font-poppins antialiased font-normal text-base leading-default bg-gray-50 text-slate-500">
    <!-- sidenav  -->
    @include('layout.left-side')
    <!-- end sidenav -->
    <main class="ease-soft-in-out xl:ml-68.5 relative h-full max-h-screen rounded-xl transition-all duration-200">
        <!-- Navbar -->
        @include('layout.navbar')
        <!-- end Navbar -->
        <div class="p-6 space-y-2">
            <div class='w-full h-fit mx-auto'>
                <div class="grid grid-cols-1 md:grid-cols-1 xl:grid-cols-4 lg:grid-cols-4 gap-4 p-2">
                    <!-- card2 -->
                    <a href="">
                        <div class="bg-red-500 p-8 rounded-lg shadow-xl">
                            <h1 class="text-2xl text-white font-bold">{{ $total_project }}</h1>
                            <h1 class="text-xl font-extrabold text-white text-right">Projects</h1>
                        </div>
                    </a>
                    <!-- card1 -->
                    <a href="">
                        <div class="bg-blue-500 p-8 rounded-lg shadow-xl">
                            <h1 class="text-2xl text-white font-bold">{{ $total_task }}</h1>
                            <h1 class="text-xl font-extrabold text-white text-right">Tasks</h1>
                        </div>
                    </a>
                    <!-- card2 -->
                    <a href="">
                        <div class="bg-green-500 p-8 rounded-lg shadow-xl">
                            <h1 class="text-2xl text-white font-bold">Rp. {{ number_format($total_price, 0, ',', '.') }}
                            </h1>
                            <h1 class="text-xl font-extrabold text-white text-right">Price</h1>
                        </div>
                    </a>
                    <!-- card2 -->
                    <a href="">
                        <div class="bg-yellow-500 p-8 rounded-lg shadow-xl">
                            <h1 class="text-2xl text-white font-bold">Rp.
                                {{ number_format($total_payment, 0, ',', '.') }}</h1>
                            <h1 class="text-xl font-extrabold text-white text-right">Payment</h1>
                        </div>
                    </a>
                </div>
            </div>
            <!-- chart -->
            <div class="grid grid-cols-1 gap-4 md:grid-cols-2 xl:grid-cols-2 lg:grid-cols-2 ">
                <!-- chart 1-->
                <div class="p-6 bg-white rounded-xl shadow-xl">
                    <div>
                        <h1 class="font-light">Jumlah Pendapatan</h1>
                        <i class="fa fa-arrow-up text-lime-500"></i>
                    </div>
                    <canvas id="grafikPendapatan" width="100" height="50"></canvas>
                </div>
                <!-- chart 2-->
                <div class="p-6 bg-white rounded-xl shadow-xl">
                    <div>
                        <h1 class="font-light">Jumlah Project</h1>
                        <i class="fa fa-arrow-up text-lime-500"></i>
                    </div>
                    <canvas id="grafikProject" width="100" height="50"></canvas>
                </div>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script type="text/javascript">
        var ctx1 = document.getElementById('grafikProject').getContext('2d');
        var grafikProject = new Chart(ctx1, {
            type: 'bar',
            data: {
                labels: {!! json_encode($labels1) !!},
                datasets: [{
                    label: 'Jumlah Project',
                    data: {!! json_encode($data1) !!},
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                        max: 30 // Set your desired maximum value here

                    }
                }
            }
        });

        var ctx2 = document.getElementById('grafikPendapatan').getContext('2d');
        var grafikPendapatan = new Chart(ctx2, {
            type: 'line',
            data: {
                labels: {!! json_encode($labels2) !!},
                datasets: [{
                    label: 'Jumlah Pendapatan',
                    data: {!! json_encode($data2) !!},
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                        max: 10000000 // Set your desired maximum value here

                    }
                }
            }
        });
    </script>

</body>
@include('sweetalert::alert')
@include('layout.script')

</html>
