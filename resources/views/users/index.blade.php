<x-layout>
    <body>
    <div class="container">
        <div style="display: flex; align-items: center; margin: 3rem 0 1rem 0;">
            <h1 style="display: inline-block; flex: 1">Users Page</h1>
            <a class="bg-green-600 py-2 px-4 text-white hover:bg-green-500 rounded" href="/new-user"
               id="createNewCategory">Add New User</a>
        </div>
        <x-table-layout-container>
            <x-table-layout>
                <thead class="bg-gray-50">
                <tr>
                    <x-table-layout-th>
                        Name
                    </x-table-layout-th>
                    <x-table-layout-th>
                        Email
                    </x-table-layout-th>
                    <x-table-layout-th>
                        Action
                    </x-table-layout-th>
                </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                @foreach($users as $user)
                    <x-user-table :user="$user"></x-user-table>
                @endforeach
                </tbody>
            </x-table-layout>
        </x-table-layout-container>
    </div>
    </body>
</x-layout>
