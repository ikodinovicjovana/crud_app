@props(['item'])

{{--<tr>--}}
{{--    <td>{{ $item->name }}</td>--}}
{{--    <td>{{ $item->category->name}}</td>--}}
{{--    <td>--}}
{{--        <button class="btn btn-primary">--}}
{{--            <a href="/items/{{ $item->name }}" style="color: white">Edit</a>--}}
{{--        </button>--}}
{{--        <button class="btn btn-danger">Delete</button>--}}
{{--    </td>--}}
{{--</tr>--}}

<tr>
    <x-table-layout-td>
        {{ $item->name }}
    </x-table-layout-td>
    <x-table-layout-td>
        <div class="text-sm text-gray-900">{{ $item->category->name}}</div>
    </x-table-layout-td>
    <x-table-layout-td class="text-left text-sm font-medium flex">
        <x-edit-btn>
            <a href="/items/{{ $item->name }}" style="color: white">Edit</a>
        </x-edit-btn>
        <x-item-delete-btn :item="$item">Delete</x-item-delete-btn>
    </x-table-layout-td>
</tr>
