<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    @include('layout.head')
</head>

<body class="grid grid-cols-1 h-screen bg-gray-100">
    <div class="grid xl:grid-cols-2 my-auto bg-white rounded-xl p-6 xl:p-24 mx-5 xl:mx-10">
        <div class="hidden xl:flex bg-gray-100 rounded-xl">
            <div class="mx-auto my-auto text-center space-y-10">
                <div class="flex justify-center">
                    <img src="{{ asset('assets/img/logo.png') }}" alt="">
                    <div class="my-auto font-extrabold text-3xl">
                        <h1 class=" text-black">PT.Custompedia</h1>
                        <h1 class=" text-black">Creative Group</h1>
                    </div>
                </div>
                <div>
                    <h1 class="text-3xl font-extrabold text-black text-center">Content Management System</h1>
                </div>
            </div>
        </div>
        <div class="mx-auto space-y-8">
            <div class="space-y-5">
                <div>
                    <h1 class="text-3xl font-extrabold text-black">Login To Your Account</h1>
                    <p class="text-black font-extralight">Sign in to continue</p>
                </div>
            </div>
            <form method="post" action="{{ route('masuk') }}" class="space-y-6">
                @csrf
                <div class="space-y-4">
                    <label for="email" class="text-black">Email</label>
                    <input class="w-full p-2 bg-gray-100 rounded-xl" type="email" name="email" required />
                </div>
                <div class='space-y-2'>
                    <label for="password" class='text-black'>Password</label>
                    <input class='w-full p-2 bg-gray-100 rounded-xl' type="password" name="password" required />
                </div>
                <div class='bg-gradient-to-r from-blue-400 to-blue-700 p-2 rounded-xl w-full mx-auto'>
                    <button name="submit" type="submit" class='flex mx-auto text-white text-2xl font-semibold'>
                        Sign In
                    </button>
                </div>
            </form>
        </div>

    </div>
</body>
@include('sweetalert::alert')

</html>
