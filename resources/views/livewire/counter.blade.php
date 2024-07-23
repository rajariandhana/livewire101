<div class="relative flex items-center max-w-[8rem]">
    <button wire:click="decrement"
        class="bg-gray-100 hover:bg-gray-200 border border-gray-300 rounded-s-lg p-3 h-11">
        <svg class="w-3 h-3 text-gray-900 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
            viewBox="0 0 18 2">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M1 1h16" />
        </svg>
    </button>
    <input type="number"
        class="bg-gray-50 border-x-0 border-gray-300 h-11 text-center text-gray-900 text-sm block w-12 py-2.5"
        value="{{ $count }}" required />
    <button  wire:click="increment"
        class="bg-gray-100 hover:bg-gray-200 border border-gray-300 rounded-e-lg p-3 h-11">
        <svg class="w-3 h-3 text-gray-900 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
            viewBox="0 0 18 18">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M9 1v16M1 9h16" />
        </svg>
    </button>
</div>
