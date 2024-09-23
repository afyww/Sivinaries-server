<!DOCTYPE html>
<html lang="en">

<head>
    <title>Edit Payment</title>
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
        <div class="p-6">
            <div class='w-full bg-white rounded-xl h-fit mx-auto'>
                <div class="p-3 text-center">
                    <h1 class="font-extrabold text-3xl">Edit payment</h1>
                </div>
                <div class="p-6">
                    <form class="space-y-3" method="post" action="{{ route('updatepayment', ['id' => $payment->id]) }}" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="grid grid-cols-1 xl:grid-cols-2 gap-4">
                            <div class="space-y-2">
                                <label class="font-semibold text-black">Name:</label>
                                <input type="text"
                                       class="bg-gray-50 border border-gray-300 text-gray-900 p-2 rounded-lg w-full"
                                       id="payment" name="payment" value="{{ $payment->payment }}" required>
                            </div>
                    
                            <div class="space-y-2">
                                <label class="font-semibold text-black">Project:</label>
                                <select name="project_id" id="project_id"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 p-2 rounded-lg w-full" required>
                                    <option value="">Pilih Project</option>
                                    @foreach ($project as $item)
                                        <option value="{{ $item->id }}" {{ $item->id == $payment->project_id ? 'selected' : '' }}>
                                            {{ $item->project }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    
                        <div class="grid grid-cols-1 gap-4">
                            <div class="space-y-2">
                                <label class="font-semibold text-black">Price:</label>
                                <input type="number"
                                       class="bg-gray-50 border border-gray-300 text-gray-900 p-2 rounded-lg w-full"
                                       id="price" name="price" value="{{ $payment->price }}" required>
                            </div>
                    
                            <div class="space-y-2">
                                <label class="font-semibold text-black">Prove:</label>
                                <input type="file"
                                       class="bg-gray-50 border border-gray-300 text-gray-900 p-2 rounded-lg w-full"
                                       id="prove" name="prove">
                                @if($payment->prove)
                                    <div class="mt-2">
                                        <img src="{{ asset('storage/prove/' . basename($payment->prove)) }}"
                                             alt="Prove Image"
                                             class="w-full">
                                    </div>
                                @endif
                            </div>
                        </div>
                    
                        <button type="submit"
                                class="bg-blue-500 text-white p-2 w-fit hover:text-black rounded-lg">Submit</button>
                    </form>
                                    </div>
            </div>
        </div>
    </main>
</body>
@include('layout.script')

</html>
