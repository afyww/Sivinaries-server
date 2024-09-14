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
                                        <table id="Tableproject" class="bg-gray-50 border-2">
                                            <thead class="w-full">
                                                <th>No</th>
                                                <th>Date</th>
                                                <th>Nama Project</th>
                                                <th>Img 1</th>
                                                <th>Img 2</th>
                                                <th>Img 3</th>
                                                <th>Video</th>
                                                <th>Action</th>
                                            </thead>
                                            <tbody>
                                                @php
                                                    $no = 1;
                                                @endphp
                                                @foreach ($projectResults as $project)
                                                    <tr class="border-2">
                                                        <td>{{ $no++ }}</td>
                                                        <td>{{ $project->created_at }}</td>
                                                        <td>{{ $project->project }}</td>
                                                        <td>
                                                            <img class="h-fit mx-auto w-32"
                                                                src="{{ asset('storage/img/' . basename($project->img1)) }}">
                                                        </td>
                                                        <td>
                                                            <img class="h-fit mx-auto w-32"
                                                                src="{{ asset('storage/img/' . basename($project->img2)) }}">
                                                        </td>
                                                        <td>
                                                            <img class="h-fit mx-auto w-32"
                                                                src="{{ asset('storage/img/' . basename($project->img3)) }}">
                                                        </td>
                                                        <td>
                                                            <video class="h-fit mx-auto" width="320" controls>
                                                                <source
                                                                    src="{{ asset('storage/videos/' . basename($project->video)) }}"
                                                                    type="video/mp4">
                                                                Your browser does not support the video tag.
                                                            </video>
                                                        </td>
                                                        <td class="flex gap-2 my-16">
                                                            <a
                                                                href="{{ route('editproject', ['id' => $project->id]) }}">
                                                                <h1
                                                                    class="p-2 px-10 w-fit text-white hover:text-black bg-blue-500 rounded-xl text-center">
                                                                    Edit</h1>
                                                            </a>
                                                            @if (auth()->user()->level == 'admin')
                                                                <form
                                                                    class="p-1 px-10 w-fit text-white hover:text-black bg-red-500 rounded-xl text-center"
                                                                    method="post"
                                                                    action="{{ route('destroyproject', ['id' => $project->id]) }}">
                                                                    @csrf
                                                                    @method('delete')
                                                                    <button type="submit">Delete</button>
                                                                </form>
                                                            @endif
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
                                <h1 class="font-extrabold text-3xl">Post</h1>
                            </div>
                            <div>
                                <div class="p-2">
                                    <div class="overflow-auto">
                                        <table id="Tablepost" class="bg-gray-50 border-2">
                                            <thead class="w-full">
                                                <th>No</th>
                                                <th>Date</th>
                                                <th>Judul</th>
                                                <th>Gambar</th>
                                                <th>Author</th>
                                                <th>Category</th>
                                                <th>Action</th>
                                            </thead>
                                            <tbody>
                                                @php
                                                    $no = 1;
                                                @endphp
                                                @foreach ($postResults as $post)
                                                    <tr class="border-2">
                                                        <td>{{ $no++ }}</td>
                                                        <td>{{ $post->published_at }}</td>
                                                        <td>{{ $post->judul }}</td>
                                                        <td>
                                                            <img class="h-fit mx-auto w-32"
                                                                src="{{ asset('storage/img/' . basename($post->img)) }}">
                                                        </td>
                                                        <td>{{ $post->user->name }}</td>
                                                        <td>{{ $post->categories->category }}</td>
                                                        <td class="flex gap-2 my-16">
                                                            <a href="{{ route('editpost', ['id' => $post->id]) }}">
                                                                <h1
                                                                    class="p-2 px-10 w-fit text-white hover:text-black bg-blue-500 rounded-xl text-center">
                                                                    Edit</h1>
                                                            </a>
                                                            @if (auth()->user()->level == 'admin')
                                                                <form
                                                                    class="p-1 px-10 w-fit text-white hover:text-black bg-red-500 rounded-xl text-center"
                                                                    method="post"
                                                                    action="{{ route('destroypost', ['id' => $post->id]) }}">
                                                                    @csrf
                                                                    @method('delete')
                                                                    <button type="submit">Delete</button>
                                                                </form>
                                                            @endif
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @if (auth()->user()->level == 'admin')
                        <div class="space-y-2">
                            <div>
                                <h1 class="font-extrabold text-3xl">User</h1>
                            </div>
                            <div>
                                <div class="p-2">
                                    <div class="overflow-auto">
                                        <table id="Tableuser" class="bg-gray-50 border-2">
                                            <thead class="w-full">
                                                <th>No</th>
                                                <th>Date</th>
                                                <th>Nama</th>
                                                <th>Level</th>
                                                <th>Email</th>
                                                <th>Action</th>
                                            </thead>
                                            <tbody>
                                                @php
                                                    $no = 1;
                                                @endphp
                                                @foreach ($userResults as $user)
                                                    <tr class="border-2">
                                                        <td>{{ $no++ }}</td>
                                                        <td>{{ $user->created_at }}</td>
                                                        <td>{{ $user->name }}</td>
                                                        <td>{{ $user->level }}</td>
                                                        <td>{{ $user->email }}</td>
                                                        <td class="">
                                                            <form
                                                                class="p-1 w-full text-white hover:text-black bg-red-500 rounded-xl text-center"
                                                                method="post"
                                                                action="{{ route('destroyuser', ['id' => $user->id]) }}">
                                                                @csrf
                                                                @method('delete')
                                                                <button type="submit">Delete</button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
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
            let table = new DataTable('#Tablepost', {
                columnDefs: [{
                    targets: 1, // Index of the 'Date' column
                    render: function(data, type, row) {
                        // Assuming the date is in 'YYYY-MM-DD HH:MM:SS' format
                        var date = new Date(data);
                        return date.toLocaleDateString(); // Format the date as needed
                    },
                }, ],
            });
        });
        $(document).ready(function() {
            let table = new DataTable('#Tableproject', {
                columnDefs: [{
                    targets: 1, // Index of the 'Date' column
                    render: function(data, type, row) {
                        // Assuming the date is in 'YYYY-MM-DD HH:MM:SS' format
                        var date = new Date(data);
                        return date.toLocaleDateString(); // Format the date as needed
                    },
                }, ],
            });
        });
        $(document).ready(function() {
            let table = new DataTable('#Tableuser', {
                columnDefs: [{
                    targets: 1, // Index of the 'Date' column
                    render: function(data, type, row) {
                        // Assuming the date is in 'YYYY-MM-DD HH:MM:SS' format
                        var date = new Date(data);
                        return date.toLocaleDateString(); // Format the date as needed
                    },
                }, ],
            });
        });
    </script>

</body>
@include('layout.script')

</html>
