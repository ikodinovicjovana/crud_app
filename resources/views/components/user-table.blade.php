@props(['user'])

<tr>
    <x-table-layout-td>
        {{ $user->name }}
    </x-table-layout-td>
    <x-table-layout-td>
        <div class="text-sm text-gray-900">{{ $user->email}}</div>
    </x-table-layout-td>

    <x-table-layout-td class="text-left text-sm font-medium flex">
        <x-edit-btn>
            <a href="/users/{{ $user->name }}" style="color: white">Edit</a>
        </x-edit-btn>
        <x-user-delete-btn :user="$user">Delete</x-user-delete-btn>
    </x-table-layout-td>
</tr>
