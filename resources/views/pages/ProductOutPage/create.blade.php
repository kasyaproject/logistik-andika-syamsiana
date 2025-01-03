<x-app-layout>
    <main class="">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            {{-- Banner --}}
            <div
                class="flex items-center justify-between p-6 overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="text-gray-900 dark:text-gray-100">
                    <p class="text-3xl font-bold">
                        {{ __('Outgoing Product') }}
                    </p>
                </div>
            </div>

            {{-- Form --}}
            <div class="relative p-6 mt-6 overflow-x-auto bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <p class="mb-6 font-semibold dark:text-white">This form is used to record new outgoing goods from the
                    system.
                    Please provide complete and accurate details to ensure the goods are properly tracked and managed
                    when they leave the system. Below is an explanation for each field that needs to be filled out.</p>

                <form action="{{ route('productOut.store') }}" method="POST" class="max-w-7xl sm:mx-10">
                    @csrf
                    <div class="mb-5">
                        <label for="product_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Product Name
                        </label>
                        <select id="product_id" name="product_id"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                            @foreach ($product as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="grid grid-cols-2 gap-4">
                        <div class="mb-5">
                            <label for="destination"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                Destination of Items
                            </label>
                            <select id="destination" name="destination"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                                <option value="Retailer A">Retailer A</option>
                                <option value="Retailer B">Retailer B</option>
                                <option value="Retailer C">Retailer C</option>
                                <option value="Retailer D">Retailer D</option>
                            </select>
                        </div>

                        <div class="mb-5">
                            <label for="qty" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                Quantity Items
                            </label>
                            <input type="number" id="qty" name="qty"
                                class="bg-gray-50 border [&::-webkit-inner-spin-button]:appearance-none border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="250" required />
                        </div>
                    </div>

                    <button type="submit"
                        class="text-white w-full bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                </form>

            </div>
        </div>
    </main>
</x-app-layout>
