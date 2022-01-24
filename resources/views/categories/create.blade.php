<x-layout>
    <x-form-container>
        <h1 class="text-center font-bold text-xl">Create New Category</h1>
        <form action="/categories" method="POST" class="mt-10">
            @csrf
            <div class="mb-6">
                <input class="border border-gray-400 p-2 w-full" type="text" name="name" id="name"
                       value="{{ old('name') }}"
                       placeholder="Name">
                @error('name')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
                <select name="category_id" id="category_id" class="border mt-2 py-2 bg-white rounded-xl z-50 overflow-auto max-h-52">
                    <option value="" style="color: grey;">Select Category</option>

                    @foreach(\App\Models\Category::all() as $category)
                        <option value="{{ $category->id }}" style="color: grey;">{{ ucwords($category->name) }}</option>
                    @endforeach
                </select>
                @error('category_id')
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
