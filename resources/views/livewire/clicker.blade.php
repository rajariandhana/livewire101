<div>
    <div>
        {{ $title }}
    </div>
    @if (session('success'))
        <span class="w-100 py-3 bg-green-300 rounded text-white">{{ session('success') }}</span>
    @endif

    <form wire:submit="createNewUser" action="">
        <input wire:model="name" type="text" placeholder="name"
            class="block rounded border border-gray-100 px-3 py-1 mb-1">
        @error('name')
            <span class="text-red-500 text-xs">{{ $message }}</span>
        @enderror
        <input wire:model="email" type="email" placeholder="email"
            class="block rounded border border-gray-100 px-3 py-1 mb-1">
        @error('email')
            <span class="text-red-500 text-xs">{{ $message }}</span>
        @enderror
        <input wire:model="password" type="password" placeholder="password"
            class="block rounded border border-gray-100 px-3 py-1 mb-1">
        @error('password')
            <span class="text-red-500 text-xs">{{ $message }}</span>
        @enderror
        <button class="bg-indigo-400 text-white rounded-md px-3 py-1">
            Create
        </button>
    </form>

    <hr>
    <div class="bg-red-100">
        <p>num of user: {{ count($users) }}</p>

        @foreach ($users as $user)
            <h3>{{ $user->name }}</h3>
        @endforeach
        {{ $users->links() }}
    </div>
</div>
