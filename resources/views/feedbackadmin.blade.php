@include('layouts/navbaradmin')
<div class="overflow-x-auto relative shadow-md sm:rounded-lg">
    <h1 class="text-center p-5">Feedback Table</h1>
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <tr class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <th scope="row" class="py-4 px-6 font-xl whitespace-nowrap dark:text-white">
            </th>

            <td class="py-4 px-6">
                No
            </td>
            <td class="py-4 px-6">
                Nama Sender
            </td>
            <td class="py-4 px-6">
                Comment
            </td>
            <td class="py-4 px-6">
                Action
            </td>
        </tr>
        <tbody>
            @foreach($feedback as $fb)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                </th>

                <td class="py-4 px-6">
                    {{$loop->iteration}}
                </td>
                <td class="py-4 px-6">
                    {{$fb['sender_name']}}
                </td>
                <td class="py-4 px-6">
                    {{$fb['comment']}}
                </td>
                <td>
                    <form action="{{route('feedbacks.destroy', $fb->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                        </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>