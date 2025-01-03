<div
    class="flex items-center lg:h-40 lg:p-6 p-3 text-gray-100 shadow-md justify-evenly bg-gradient-to-br from-{{ $colorFrom }} to-{{ $colorTo }} rounded-lg">
    <div class="z-10 p-3 bg-white bg-opacity-50 rounded-full shadow-lg md:p-4">
        <svg class="text-gray-800 md:w-14 md:h-14" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
            height="24" fill="none" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M10 3v4a1 1 0 0 1-1 1H5m8-2h3m-3 3h3m-4 3v6m4-3H8M19 4v16a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V7.914a1 1 0 0 1 .293-.707l3.914-3.914A1 1 0 0 1 9.914 3H18a1 1 0 0 1 1 1ZM8 12v6h8v-6H8Z" />
        </svg>
    </div>

    <div class="z-10 p-4">
        <p class="font-bold md:text-xl whitespace-nowrap">{{ $total }}</p>
        <p class="text-sm font-semibold md:text-lg whitespace-nowrap">{{ $title }}</p>
    </div>
</div>
