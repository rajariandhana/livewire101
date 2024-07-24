<div class="mt-10 p-5 mx-auto sm:w-full sm:max-w-sm shadow border-teal-500 border-t-2">
    <div class="flex">
        <h2 class="text-center font-semibold text-2x text-gray-800 mb-5">Create New Account</h2>
    </div>
    @if (session('success'))
        <span class="text-green-500">{{ session('success') }}</span>
    @endif
    <form wire:submit="create" action="">
        <label class="mt-3 block text-sm font-medium leading-6 text-gray-900" for="">Name</label>
        <input wire:model='name' type="text" id="name" placeholder="name.."
            class="ring-1 ring-inset ring-gray-300 bg-gray-100 text-gray-900 text-sm rounded block w-full px-3 py-1 mb-1">
        @error('name')
            <span class="text-red-500">{{ $message }}</span>
        @enderror

        <label class="mt-3 block text-sm font-medium leading-6 text-gray-900" for="">Email</label>
        <input wire:model='email' type="email" id="email" placeholder="email.."
            class="ring-1 ring-inset ring-gray-300 bg-gray-100 text-gray-900 text-sm rounded block w-full px-3 py-1 mb-1">
        @error('email')
            <span class="text-red-500">{{ $message }}</span>
        @enderror

        <label class="mt-3 block text-sm font-medium leading-6 text-gray-900" for="">password</label>
        <input wire:model='password' type="password" id="password" placeholder="password.."
            class="ring-1 ring-inset ring-gray-300 bg-gray-100 text-gray-900 text-sm rounded block w-full px-3 py-1 mb-1">
        @error('password')
            <span class="text-red-500">{{ $message }}</span>
        @enderror

        <label class="mt-3 block text-sm font-medium leading-6 text-gray-900" for="">Profile Picture</label>
        <input wire:model='image' accept="image/png, image/jpeg" type="file" id="image"
            class="ring-1 ring-inset ring-gray-300 bg-gray-100 text-gray-900 text-sm rounded block w-full px-3 py-1 mb-1">
        @error('image')
            <span class="text-red-500">{{ $message }}</span>
        @enderror
        @if ($image)
            <img class="rounded w-10 h-10 mt-5 block" src="{{asset('storage/'.$user->image)}}" alt="">
        @endif
        <div wire:loading wire:target="image">
            <span class="text=green-500">Uploading...</span>
        </div>
        <button type="submit" class="block mt-3 px-4 py-2 bg-teal-500 text-white font-semibold rounded hover:bg-teal-600">
            Create +
        </button>
    </form>
</div>
