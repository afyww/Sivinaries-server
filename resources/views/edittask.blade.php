<!DOCTYPE html>
<html lang="en">

<head>
    <title>Edit Task</title>
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
                    <h1 class="font-extrabold text-3xl">Edit task</h1>
                </div>
                <div class="p-6">
                    <form class="space-y-3" method="post" action="{{ route('updatetask', ['id' => $task->id]) }}"
                        enctype="multipart/form-data">
                        @csrf
                        @method('put')

                        <div class="grid grid-cols-1">
                            <div class="space-y-2">
                                <label class="font-semibold text-black">Task:</label>
                                <input type="text"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 p-2 rounded-lg w-full"
                                    id="task" name="task" value="{{ $task->task }}" required>
                            </div>
                        </div>

                        <div class="grid grid-cols-2 gap-4">
                            <div class="space-y-2">
                                <label class="font-semibold text-black">User:</label>
                                <select name="user_id" id="user_id"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 p-2 rounded-lg w-full"
                                    required>
                                    @foreach ($user as $item)
                                        <option value="{{ $item->id }}"
                                            {{ $item->id == $task->user_id ? 'selected' : '' }}>
                                            {{ $item->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="space-y-2">
                                <label class="font-semibold text-black">Project:</label>
                                <select name="project_id" id="project_id"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 p-2 rounded-lg w-full"
                                    required>
                                    @foreach ($project as $item)
                                        <option value="{{ $item->id }}"
                                            {{ $item->id == $task->project_id ? 'selected' : '' }}>
                                            {{ $item->project }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="grid grid-cols-2 gap-4">
                            <div class="space-y-2">
                                <label class="font-semibold text-black">Start Date:</label>
                                <input type="date"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 p-2 rounded-lg w-full"
                                    id="start_date" name="start_date" value="{{ $task->start_date }}" required>
                            </div>

                            <div class="space-y-2">
                                <label class="font-semibold text-black">End Date:</label>
                                <input type="date"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 p-2 rounded-lg w-full"
                                    id="end_date" name="end_date" value="{{ $task->end_date }}" required>
                            </div>
                        </div>

                        <div class="space-y-2">
                            <label class="font-semibold text-black">Status:</label>
                            <select class="bg-gray-50 border border-gray-300 text-gray-900 p-2 rounded-lg w-full"
                                id="status" name="status" required>
                                <option value="on progress" {{ $task->status == 'on progress' ? 'selected' : '' }}>On
                                    Progress</option>
                                <option value="done" {{ $task->status == 'done' ? 'selected' : '' }}>Done</option>
                            </select>
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
