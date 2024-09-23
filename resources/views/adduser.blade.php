<!DOCTYPE html>
<html lang="en">

<head>
    <title>Add User</title>
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
                    <h1 class="font-extrabold text-3xl">Add user</h1>
                </div>
                <div class="p-6">
                    <form class="space-y-3" method="post" action="{{ route('createuser') }}"
                        enctype="multipart/form-data">
                        @csrf
                        @method('post')
                        <div class="grid xl:grid-cols-2 gap-4 grid-cols-1">
                            <div class="space-y-2">
                                <label class="font-semibold text-black">Nama:</label>
                                <input type="text"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 p-2 rounded-lg w-full"
                                    id="name" name="name" placeholder="Nama" required>
                            </div>
                            <div class="space-y-2">
                                <label class="font-semibold text-black">Email:</label>
                                <input type="email"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 p-2 rounded-lg w-full"
                                    id="email" name="email" placeholder="Email" required>
                            </div>
                        </div>
                <div class="grid xl:grid-cols-2 gap-4 grid-cols-1">
                    <div class="space-y-2">
                        <label class="font-semibold text-black">Password:</label>
                        <input type="password"
                            class="bg-gray-50 border border-gray-300 text-gray-900 p-2 rounded-lg w-full" id="password"
                            name="password" placeholder="Password" required>
                    </div>
                    <div class="space-y-2">
                        <label class="font-semibold text-black">Password Confirmation:</label>
                        <input type="password"
                            class="bg-gray-50 border border-gray-300 text-gray-900 p-2 rounded-lg w-full" id="password"
                            name="password_confirmation" placeholder="Password Confirmation" required>
                    </div>
                </div>
                <div class="space-y-2">
                    <label class="font-semibold text-black">Level:</label>
                    <select class="bg-gray-50 border border-gray-300 text-gray-900 p-2 rounded-lg w-full" id="level"
                        name="level" required>
                        <option value="admin">Admin</option>
                        <option value="writer">Writer</option>
                    </select>
                </div>
                <button type="submit"
                    class="bg-blue-500  text-white p-2 w-fit hover:text-black rounded-lg">Submit</button>
                </form>
            </div>
        </div>
        </div>
    </main>
</body>
@include('layout.script')

</html>
