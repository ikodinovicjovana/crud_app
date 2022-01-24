<x-layout>
    <body>
    <div class="container">
        <div style="display: flex; align-items: center; margin: 3rem 0 1rem 0;">
            <h1 style="display: inline-block; flex: 1">Items Page</h1>
            <a class="btn btn-success" href="/new-item">Add New Item</a>
        </div>
    <x-table-layout-container>
    <x-table-layout>
        <thead class="bg-gray-50">
        <tr>
            <x-table-layout-th>
                Name
            </x-table-layout-th>
            <x-table-layout-th>
                Category
            </x-table-layout-th>
            <x-table-layout-th>
                Action
            </x-table-layout-th>
        </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
        @foreach($items as $item)
            <x-item-table :item="$item"></x-item-table>
        @endforeach
        </tbody>
    </x-table-layout>
    </x-table-layout-container>
    </div>
    </body>
</x-layout>
