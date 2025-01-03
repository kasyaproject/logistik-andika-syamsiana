<x-app-layout>
    <main class="">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            {{-- Banner --}}
            <div
                class="flex items-center justify-between p-6 overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="text-gray-900 dark:text-gray-100">
                    <p class="text-3xl font-bold">
                        {{ __('Detail Product') }}
                    </p>
                </div>
            </div>

            {{-- Form --}}
            <div class="relative p-6 mt-6 overflow-x-auto bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <p class="mb-6 font-semibold dark:text-white">This form is used to update the details of an existing
                    product. You can modify any of the product's information to ensure it reflects the current data
                    in
                    the system. Below is an explanation for each field that can be updated</p>

                <form action="{{ route('product.update', $product->id) }}" method="POST" class="max-w-7xl sm:mx-10">
                    @csrf
                    @method('patch')
                    <div class="mb-5">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Product Name
                        </label>
                        <input type="text" id="name" name="name" value="{{ $product->name }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Phone xjs" required />
                    </div>

                    <div class="mb-5">
                        <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Product Description
                        </label>
                        <textarea id="description" name="description" rows="4"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 min-h-20 max-h-80 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Product description...">{{ $product->description }}</textarea>
                    </div>

                    <div class="grid grid-cols-2 gap-4">
                        <div class="mb-5">
                            <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                Product Price
                            </label>
                            <input type="number" id="price" name="price" value="{{ $product->price }}"
                                class="bg-gray-50 [&::-webkit-inner-spin-button]:appearance-none border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="100000" required />
                        </div>

                        <div class="mb-5">
                            <label for="stock" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                Product Stock
                            </label>
                            <input type="number" id="stock" name="stock" value="{{ $product->stock }}"
                                class="bg-gray-50 border [&::-webkit-inner-spin-button]:appearance-none border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="250" required />
                        </div>
                    </div>

                    <button type="submit"
                        class="text-white w-full bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update</button>
                </form>
            </div>
        </div>
    </main>
</x-app-layout>
