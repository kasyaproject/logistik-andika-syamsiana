<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Product In') }}
        </h2>
    </x-slot>

    <main class="">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            {{-- Banner --}}
            <div
                class="flex items-center justify-between p-6 overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="text-gray-900 dark:text-gray-100">
                    <p class="text-3xl font-bold">
                        {{ __('Product In') }}
                    </p>
                </div>


                <a href="{{ route('productIn.create') }}">
                    <button type="button"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5  dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Tambah</button>
                </a>
            </div>

            {{-- Table --}}
            <div class="relative mt-6 overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500 table-auto rtl:text-right dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                No
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Invoice Number
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Product Name
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Qty
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Origin
                            </th>
                            <th scope="col" class="w-40 px-6 py-3">
                                Date
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($productIn as $item)
                            <tr
                                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $loop->iteration }}
                                </th>
                                <td class="px-6 py-4">
                                    {{ $item->id }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $item->product->name }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $item->quantity }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $item->origin }}
                                </td>
                                <td class="px-6 py-4 ">
                                    {{ \Carbon\Carbon::parse($item->created_at)->format('d M Y H:i') }}

                                </td>
                                <td class="px-6 py-4 space-x-2 space-y-2 text-center">
                                    <a href={{ route('productIn.edit', $item->id) }}
                                        class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                    <button data-modal-target="popup-modal-{{ $item->id }}"
                                        data-modal-toggle="popup-modal-{{ $item->id }}"
                                        class="font-medium text-red-600 dark:text-red-500 hover:underline"
                                        type="button">
                                        Delete
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                {{-- Pagination --}}
                <div class="px-6 py-2">
                    {{ $productIn->links() }}
                </div>
            </div>
        </div>

        {{-- Modal untuk delete --}}
        @foreach ($productIn as $item)
            <div id="popup-modal-{{ $item->id }}" tabindex="-1"
                class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative w-full max-w-md max-h-full p-4">
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                        <button type="button"
                            class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                            data-modal-hide="popup-modal-{{ $item->id }}">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                        <div class="p-4 text-center md:p-5">
                            <form action={{ route('productIn.destroy', $item->id) }} method="POST">
                                @csrf
                                @method('DELETE')
                                <svg class="w-12 h-12 mx-auto mb-4 text-gray-400 dark:text-gray-200" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg>

                                <h3 class="mb-2 text-lg font-normal text-gray-500 dark:text-gray-400">Are you sure you
                                    want to delete this product?</h3>
                                <h1 class="mb-4 text-xl font-semibold dark:text-white">{{ $item->id }}</h1>
                                <p class="mb-4 text-sm text-gray-500 dark:text-gray-400">This action cannot be undone.
                                    This
                                    will permanently delete the product from the system.</p>


                                <button type="submit"
                                    class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                                    Yes, I'm sure
                                </button>
                                <button data-modal-hide="popup-modal-{{ $item->id }}" type="button"
                                    class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">No,
                                    cancel</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </main>
</x-app-layout>
