
<x-layout>
    <body>
    <x-form-container >
        <h1 style="display: inline-block; flex: 1">Edit Category</h1>
        <form method="POST" action="/categories/{{ $category->id }}" class="form-horizontal">
            @csrf
            @method('PATCH')
            <div class="mb-6 mt-4">
                <input class="border border-gray-400 p-2 w-full" type="text" name="name" id="name"
                       placeholder="Name" value="{{ $category->name }}">
                @error('name')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
                <select name="parent_id" id="parent_id" class="border mt-2 py-2 bg-white rounded-xl z-50 overflow-auto max-h-52">
                    <option value="{{ $category->parent_id }}" style="color: grey;">{{ empty($category->parent->name) ? '' : $category->parent->name }}</option>
                    <option value="{{ count(\App\Models\Category::all()) }}"></option>

                    @foreach(\App\Models\Category::all()->skip($category->parent_id) as $category)
                        <option value="{{ $category->id }}" style="color: grey;">{{ ucwords($category->name) }}</option>
                    @endforeach
                </select>
                @error('category_id')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-6">
                <x-update-btn>Update Category</x-update-btn>
            </div>
        </form>
        <x-back></x-back>
    </x-form-container>
    </body>
</x-layout>

