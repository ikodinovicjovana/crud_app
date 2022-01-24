<x-layout>
    <x-form-container>
        <h1 class="text-center font-bold text-xl">Create New User</h1>
        <form action="/users" method="POST" class="mt-10">
            @csrf
            <div class="mb-6">
                <input class="border border-gray-400 p-2 w-full" type="text" name="name" id="name"
                       value="{{ old('name') }}"
                       placeholder="Name">
                @error('name')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
                <input class="border border-gray-400 p-2 w-full mt-2" type="text" name="email" id="email"
                       value="{{ old('email') }}" placeholder="Email" required>
                @error('email')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
                <input class="border border-gray-400 p-2 w-full mt-2" type="password" name="password" id="password"
                       value="{{ old('password') }}" placeholder="Password" required>
                @error('password')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-6">
                <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">Add</button>
            </div>

            @if($errors->any())
                <ul>
                    @foreach($errors->all() as $error)
                        <li class="text-red-500 text-xs mt-1">{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
        </form>
    </x-form-container>
</x-layout>
