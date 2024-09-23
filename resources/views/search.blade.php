<!DOCTYPE html>
<html lang="en">

<head>
    <title>Search Result</title>
    @include('layout.head')
    <link href="//cdn.datatables.net/2.0.2/css/dataTables.dataTables.min.css" rel="stylesheet" />
</head>

<body class="m-0 font-poppins antialiased font-normal text-base leading-default bg-gray-50 text-slate-500">
    <!-- sidenav  -->
    @include('layout.left-side')
    <!-- end sidenav -->
    <main class="ease-soft-in-out xl:ml-68.5 relative h-full max-h-screen rounded-xl transition-all duration-200">
        <!-- Navbar -->
        @include('layout.navbar')
        <!-- end Navbar -->
        <div class="p-6">
            <div class='w-full bg-white rounded-xl h-fit mx-auto'>
                <div class="p-3 text-center">
                    <h1 class="font-extrabold text-3xl">Search Result</h1>
                </div>
                <div class="p-6">
                    <div class="space-y-8">
                        <div class="space-y-2">
                            <div>
                                <h1 class="font-extrabold text-3xl">Project</h1>
                            </div>
                            <div>
                                <div class="p-2">
                                    <div class="overflow-auto">
                                        <table id="ProjectTable" class="bg-gray-50 border-2">
                                            <thead class="w-full">
                                                <th>No</th>
                                                <th>Project</th>
                                                <th>Name</th>
                                                <th>Start Date</th>
                                                <th>End Date</th>
                                                <th>Price</th>
                                                <th>Payment</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </thead>
                                            <tbody>
                                                @php
                                                    $no = 1;
                                                @endphp
                                                @foreach ($projectResults as $item)
                                                    <tr class="border-2">
                                                        <td>{{ $no++ }}</td>
                                                        <td>{{ $item->project }}</td>
                                                        <td>{{ $item->name }}</td>
                                                        <td>{{ $item->start_date }}</td>
                                                        <td>{{ $item->end_date }}</td>
                                                        <td>Rp. {{ number_format($item->total_prices, 0, ',', '.') }}
                                                        </td>
                                                        <td>Rp. {{ number_format($item->total_payments, 0, ',', '.') }}
                                                        </td>
                                                        <td>{{ $item->status }}</td>
                                                        <td class="flex gap-2">
                                                            <div class="w-full">
                                                                <a
                                                                    href="{{ route('editproject', ['id' => $item->id]) }}">
                                                                    <h1
                                                                        class="p-2 text-white hover:text-black bg-blue-500 rounded-xl text-center">
                                                                        Edit</h1>
                                                                </a>
                                                            </div>
                                                            <div class="w-full">
                                                                <form
                                                                    class="p-2 text-white hover:text-black bg-red-500 rounded-xl text-center"
                                                                    method="post"
                                                                    action="{{ route('destroyproject', ['id' => $item->id]) }}">
                                                                    @csrf
                                                                    @method('delete')
                                                                    <button type="submit">Delete</button>
                                                                </form>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="space-y-2">
                            <div>
                                <h1 class="font-extrabold text-3xl">Price</h1>
                            </div>
                            <div>
                                <div class="p-2">
                                    <div class="overflow-auto">
                                        <table id="PriceTable" class="bg-gray-50 border-2">
                                            <thead class="w-full">
                                                <th>No</th>
                                                <th>Service</th>
                                                <th>User</th>
                                                <th>Project</th>
                                                <th>Price</th>
                                                <th>Action</th>
                                            </thead>
                                            <tbody>
                                                @php
                                                    $no = 1;
                                                @endphp
                                                @foreach ($priceResults as $item)
                                                    <tr class="border-2">
                                                        <td>{{ $no++ }}</td>
                                                        <td>{{ $item->service }}</td>
                                                        <td>{{ $item->user->name }}</td>
                                                        <td>{{ $item->project->project }}</td>
                                                        <td>Rp. {{ number_format($item->price, 0, ',', '.') }}</td>
                                                        <td class="flex gap-2">
                                                            <div class="w-full">
                                                                <a
                                                                    href="{{ route('editprice', ['id' => $item->id]) }}">
                                                                    <h1
                                                                        class="p-2 text-white hover:text-black bg-blue-500 rounded-xl text-center">
                                                                        Edit</h1>
                                                                </a>
                                                            </div>
                                                            <div class="w-full">
                                                                <form
                                                                    class="p-2 text-white hover:text-black bg-red-500 rounded-xl text-center"
                                                                    method="post"
                                                                    action="{{ route('destroyprice', ['id' => $item->id]) }}">
                                                                    @csrf
                                                                    @method('delete')
                                                                    <button type="submit">Delete</button>
                                                                </form>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="space-y-2">
                            <div>
                                <h1 class="font-extrabold text-3xl">Task</h1>
                            </div>
                            <div>
                                <div class="p-2">
                                    <div class="overflow-auto">
                                        <table id="TaskTable" class="bg-gray-50 border-2">
                                            <thead class="w-full">
                                                <th>No</th>
                                                <th>Task</th>
                                                <th>User</th>
                                                <th>Project</th>
                                                <th>Start Date</th>
                                                <th>End Date</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </thead>
                                            <tbody>
                                                @php
                                                    $no = 1;
                                                @endphp
                                                @foreach ($taskResults as $item)
                                                    <tr class="border-2">
                                                        <td>{{ $no++ }}</td>
                                                        <td>{{ $item->task }}</td>
                                                        <td>{{ $item->user->name }}</td>
                                                        <td>{{ $item->project->project }}</td>
                                                        <td>{{ $item->start_date }}</td>
                                                        <td>{{ $item->end_date }}</td>
                                                        <td>{{ $item->status }}</td>
                                                        <td class="flex gap-2">
                                                            <div class="w-full">
                                                                <a href="{{ route('edittask', ['id' => $item->id]) }}">
                                                                    <h1
                                                                        class="p-2 text-white hover:text-black bg-blue-500 rounded-xl text-center">
                                                                        Edit</h1>
                                                                </a>
                                                            </div>
                                                            <div class="w-full">
                                                                <form
                                                                    class="p-2 text-white hover:text-black bg-red-500 rounded-xl text-center"
                                                                    method="post"
                                                                    action="{{ route('destroytask', ['id' => $item->id]) }}">
                                                                    @csrf
                                                                    @method('delete')
                                                                    <button type="submit">Delete</button>
                                                                </form>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="space-y-2">
                            <div>
                                <h1 class="font-extrabold text-3xl">Payment</h1>
                            </div>
                            <div>
                                <div class="p-2">
                                    <div class="overflow-auto">
                                        <table id="PaymentTable" class="bg-gray-50 border-2">
                                            <thead class="w-full">
                                                <th>No</th>
                                                <th>Name</th>
                                                <th>Project</th>
                                                <th>Price</th>
                                                <th>Prove</th>
                                                <th>Action</th>
                                            </thead>
                                            <tbody>
                                                @php
                                                    $no = 1;
                                                @endphp
                                                @foreach ($paymentResults as $item)
                                                    <tr class="border-2">
                                                        <td>{{ $no++ }}</td>
                                                        <td>{{ $item->payment }}</td>
                                                        <td>{{ $item->project->project }}</td>
                                                        <td>Rp. {{ number_format($item->price, 0, ',', '.') }}</td>
                                                        <td>
                                                            <img src="{{ asset('storage/prove/' . basename($item->prove)) }}"
                                                                alt="Prove Image"
                                                                class='mx-auto my-auto w-44 h-28 rounded-xl relative' />
                                                        </td>
                                                        </td>
                                                        <td class="flex gap-2">
                                                            <div class="w-full">
                                                                <a
                                                                    href="{{ route('editpayment', ['id' => $item->id]) }}">
                                                                    <h1
                                                                        class="p-2 text-white hover:text-black bg-blue-500 rounded-xl text-center">
                                                                        Edit</h1>
                                                                </a>
                                                            </div>
                                                            <div class="w-full">
                                                                <form
                                                                    class="p-2 text-white hover:text-black bg-red-500 rounded-xl text-center"
                                                                    method="post"
                                                                    action="{{ route('destroypayment', ['id' => $item->id]) }}">
                                                                    @csrf
                                                                    @method('delete')
                                                                    <button type="submit">Delete</button>
                                                                </form>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/2.0.2/js/dataTables.min.js"></script>
    <script>
         $(document).ready(function() {
            let table = new DataTable('#ProjectTable', {});
        });
         $(document).ready(function() {
            let table = new DataTable('#PriceTable', {});
        });
         $(document).ready(function() {
            let table = new DataTable('#TaskTable', {});
        });
         $(document).ready(function() {
            let table = new DataTable('#PaymentTable', {});
        });
    </script>

</body>
@include('layout.script')

</html>
