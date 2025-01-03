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


                <a href="#add-product">
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
                                    <a href={{ $item->id }}
                                        class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                    <a href={{ $item->id }}
                                        class="font-medium text-red-600 dark:text-red-500 hover:underline">delete</a>
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
    </main>
</x-app-layout>
