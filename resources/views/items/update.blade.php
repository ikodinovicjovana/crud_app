<x-layout>
    <body>
    <x-form-container >
        <h1 style="display: inline-block; flex: 1">Edit Item</h1>
        <form method="POST" action="/items/{{ $item->name }}" class="form-horizontal">
            @csrf
            @method('PATCH')
            <div class="mb-6 mt-4">
                <input class="border border-gray-400 p-2 w-full" type="text" name="name" id="name"
                       placeholder="Name" value="{{ $item->name }}">
                @error('name')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
                <select name="category_id" id="category_id" class="border mt-2 py-2 bg-white rounded-xl z-50 overflow-auto max-h-52">
                    <option value="{{ $item->category->id }}" style="color: grey;">{{ $item->category->name }}</option>

                    @foreach(\App\Models\Category::all() as $category)
                        <option value="{{ $category->id }}" style="color: grey;">{{ ucwords($category->name) }}</option>
                    @endforeach
                </select>
                @error('category_id')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-6">
               <x-update-btn>Update Item</x-update-btn>
            </div>
        </form>
        <x-back></x-back>
    </x-form-container>
    </body>
</x-layout>
