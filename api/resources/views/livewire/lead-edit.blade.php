<div>
    <form wire:submit.prevent="submitForm">
        <div class="mb-4">
            <label class=" text-base font-light uppercase" for="name">name:</label>
            <input wire:model="name" class=" w-full px-4 py-3 border border-gray-300 rounded" type="text" id="name">
            @error('name')
                <div class=" text-red-500 font-extralight text-xs">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-4">
            <label class=" text-base font-light uppercase" for="name">email:</label>
            <input wire:model="email" class=" w-full px-4 py-3 border border-gray-300 rounded" type="text"
                id="email">
            @error('email')
                <div class=" text-red-500 font-extralight text-xs">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-4">
            <label class=" text-base font-light uppercase" for="name">phone:</label>
            <input wire:model="phone" class=" w-full px-4 py-3 border border-gray-300 rounded" type="text"
                id="phone">
            @error('phone')
                <div class=" text-red-500 font-extralight text-xs">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-4">
            <button class="bg-blue-600 px-2 py-3 rounded" type="submit">Submit</button>
        </div>
    </form>
</div>
