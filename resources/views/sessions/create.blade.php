<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto">
            <h1 class="text-center font-bold text-xl">Log In!</h1>
            <form action="/sessions" method="POST" class="mt-10">
                @csrf
                <div class="mb-6">
                    <input class="border border-gray-400 p-2 w-full" type="text" name="email" id="email" value="{{ old('email') }}" placeholder="Email">
                    @error('email')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                    <input class="border border-gray-400 p-2 w-full mt-2" type="password" name="password" id="password" value="{{ old('password') }}" placeholder="Password" required>
                    @error('password')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">Log In</button>
                </div>

                @if($errors->any())
                    <ul>
                        @foreach($errors->all() as $error)
                            <li class="text-red-500 text-xs mt-1">{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif
            </form>
        </main>
    </section>
</x-layout>
