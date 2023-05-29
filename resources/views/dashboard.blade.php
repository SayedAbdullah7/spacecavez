<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

{{--    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet"/>--}}
{{--    <link href="{{asset('datatables/DataTables-1.13.4/css/dataTables.bootstrap5.min.css')}}" rel="stylesheet"/>--}}
{{--    <link href="{{asset('datatables/datatables.min.css')}}" rel="stylesheet"/>--}}

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <a href="{{route('post.create')}}" class="rounded-none px-4 py-1 text-sm text-white bg-blue-400 rounded px-4 py-2 my-5">Create New</a>

                    <div class="container flex justify-center mx-auto my-5">
                        <div class="flex flex-col" style="width: 100%;">
                            <div class="w-full">
                                <div class="border-b border-gray-200 shadow">
                                    <table class="w-full">
                                        <thead class="bg-gray-50">
                                        <tr>
                                            <th class="px-6 py-2 text-xs text-gray-500">
                                                ID
                                            </th>
                                            <th class="px-6 py-2 text-xs text-gray-500">
                                                title
                                            </th>
                                            <th class="px-6 py-2 text-xs text-gray-500">
                                                category
                                            </th>
                                            <th class="px-6 py-2 text-xs text-gray-500">
                                                Created_at
                                            </th>
                                            <th class="px-6 py-2 text-xs text-gray-500">
                                                Show
                                            </th>
                                            <th class="px-6 py-2 text-xs text-gray-500">
                                                Edit
                                            </th>
                                            <th class="px-6 py-2 text-xs text-gray-500">
                                                Delete
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody class="bg-white">
                                        @foreach($posts as $post)
                                            <tr class="whitespace-nowrap">
                                                <td class="px-6 py-4 text-sm text-gray-500">
                                                    {{$post->id}}
                                                </td>
                                                <td class="px-6 py-4">
                                                    <div class="text-sm text-gray-900">
                                                        {{ Illuminate\Support\Str::limit($post->title,30) }}

                                                    </div>
                                                </td>
                                                <td class="px-6 py-4">
                                                    <div class="text-sm text-gray-500">
                                                        {{$post->category}}
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4 text-sm text-gray-500">
                                                    {{$post->created_at}}
                                                </td>
                                                <td class="px-6 py-4">
                                                    <a href="{{route('post.show',$post->id)}}" class="px-4 py-1 text-sm text-white bg-green-400 rounded">Show</a>
                                                </td>
                                                <td class="px-6 py-4">
                                                    <a href="{{route('post.edit',$post->id)}}" class="px-4 py-1 text-sm text-white bg-blue-400 rounded">Edit</a>
                                                </td>
                                                <td class="px-6 py-4">
                                                    <form method="post" action="{{route('post.destroy',$post->id)}}">
                                                        @csrf
                                                        @method('delete')
                                                        <button onclick="confirmDelete(event)" class="px-4 py-1 text-sm text-white bg-red-400 rounded">Delete</input>
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

            </div>
        </div>
    </div>

    @push('scripts')
        <script src="{{asset('datatables/datatables.min.js')}}"></script>
            <script>
                function confirmDelete(event) {
                    event.preventDefault(); // Prevents the form from submitting automatically

                    // Display a confirmation dialog
                    if (confirm("Are you sure you want to delete this item?")) {
                        // If confirmed, submit the form
                        event.target.closest("form").submit();
                    }
                }
            </script>
    @endpush
</x-app-layout>
