@props(['category'])

<tr>
    <x-table-layout-td>
        <div class="text-sm text-gray-900">{{ $category->id }}</div>
    </x-table-layout-td>
    <x-table-layout-td>
        <div class="text-sm text-gray-900">{{ empty($category->parent->name) ? '' : $category->parent->name }}</div>
    </x-table-layout-td>
    <x-table-layout-td>
        {{ $category->name }}
    </x-table-layout-td>
    <x-table-layout-td class="text-left text-sm font-medium flex">
        <x-edit-btn>
            <a href="/categories/{{ $category->id }}" style="color: white">Edit</a>
        </x-edit-btn>
        <x-category-delete-btn :category="$category">Delete</x-category-delete-btn>
    </x-table-layout-td>
</tr>
