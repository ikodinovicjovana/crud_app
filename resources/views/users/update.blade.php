<x-layout>
    <body>
    <x-form-container >
        <h1 style="display: inline-block; flex: 1">Edit User</h1>
        <form method="POST" action="/users/{{ $user->name }}" class="form-horizontal">
            @csrf
            @method('PATCH')
            <div class="mb-6 mt-4">
                <input class="border border-gray-400 p-2 w-full" type="text" name="name" id="name"
                       placeholder="Name" value="{{ $user->name }}">
                @error('name')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
                <input class="border border-gray-400 p-2 w-full mt-2" type="text" name="email" id="email"
                       value="{{ $user->email }}" placeholder="Email" required>
                @error('email')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
                <input class="border border-gray-400 p-2 w-full mt-2" type="password" name="password" id="password"
                       value="{{ $user->password }}" placeholder="Password" required>
                @error('password')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-6">
                <x-update-btn>Update User</x-update-btn>
            </div>
        </form>
        <x-back></x-back>
    </x-form-container>
    </body>
</x-layout>
