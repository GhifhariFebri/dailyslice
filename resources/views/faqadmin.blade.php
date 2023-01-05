@include('layouts/navbaradmin')
<div class="overflow-x-auto relative shadow-md sm:rounded-lg">
    <h1 class="text-center p-5">Category Table</h1>
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead>
            <tr class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <th scope="row" class="py-4 px-6 font-xl whitespace-nowrap dark:text-white">
                </th>
                <td class="py-4 px-6">
                    No
                </td>
                <td class="py-4 px-6">
                    Nama Category
                </td>
                <td class="py-4 px-6">
                    Image Category
                </td>
                <td class="py-4 px-6">
                    Desc Category
                </td>
                <td class="py-4 px-6">
                    Action
                </td>
            </tr>
        </thead>
        <tbody>
            @foreach($faq as $question)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                </th>

                <td class="py-4 px-6">
                    {{$loop->iteration}}
                </td>
                <td class="py-4 px-6">
                    {{$question['question']}}
                </td>
                <td class="py-4 px-6">
                    {{$question['answer']}}
                </td>
                <td>
                    <form action="{{route('faq.destroy', $question->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                        </a>
                </td>
                <!-- Main modal -->
    <div id="staticModal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
        <div class="relative w-full h-full max-w-2xl md:h-auto">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        Static modal
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="staticModal">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-5">
                    <form action="{{route('faq.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div>
                            <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Question</label>
                            <input type="text" name="question" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                        </div>
                        <div class="mb-6">
                            <label for="large-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Answer</label>
                            <input type="text" name="answer" class="block p-10 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                        </div>
                        <!-- Modal footer -->
                        <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                            <div class="mt-3 flex justify-end space-x-3">
                                <button type="submit" class="px-3 py-1 bg-red-800 text-gray-200 hover:bg-red-600 rounded">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>