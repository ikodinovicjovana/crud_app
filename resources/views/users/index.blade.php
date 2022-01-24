{{--<x-layout>--}}
{{--    <body>--}}
{{--        <div class="container">--}}
{{--            <div style="display: flex; align-items: center; margin: 3rem 0 1rem 0;">--}}
{{--                <h1 style="display: inline-block; flex: 1">Users Page</h1>--}}
{{--                <a class="btn btn-success" href="/new-user" id="createNewUser">Add New User</a>--}}
{{--            </div>--}}
{{--            <table class="table table-bordered" id="categoryTable">--}}
{{--                <thead>--}}
{{--                <tr>--}}
{{--                    <th>Name</th>--}}
{{--                    <th>Email</th>--}}
{{--                    <th>Action</th>--}}
{{--                </tr>--}}
{{--                </thead>--}}
{{--                <tbody>--}}
{{--                @foreach($users as $user)--}}
{{--                    <x-user-table :user="$user"></x-user-table>--}}
{{--                @endforeach--}}
{{--                </tbody>--}}
{{--            </table>--}}
{{--            <x-back></x-back>--}}
{{--        </div>--}}
{{--        <div class="modal fade" id="ajaxModal" aria-hidden="true">--}}
{{--            <div class="modal-dialog">--}}
{{--                <div class="modal-content">--}}
{{--                    <div class="modal-header">--}}
{{--                        <h4 class="modal-title" id="modalHeading"></h4>--}}
{{--                    </div>--}}
{{--                    <div class="modal-body">--}}
{{--                        <form id="categoryForm" name="categoryForm" class="form-horizontal">--}}
{{--                            @csrf--}}
{{--                            <input hidden type="text" name="categoty_id" id="category_id">--}}
{{--                            <div class="form-group">--}}
{{--                                <input type="text" class="form-control" id="parent_id" name="perent_id"--}}
{{--                                       placeholder="Parent Category" value="">--}}
{{--                            </div>--}}
{{--                            <div class="form-group">--}}
{{--                                <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="">--}}
{{--                            </div>--}}
{{--                            <button type="submit" class="btn btn-primary" id="saveBtn" value="create">Save Category</button>--}}
{{--                        </form>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </body>--}}
{{--</x-layout>--}}

<x-layout>
    <body>
    <div class="container">
        <div style="display: flex; align-items: center; margin: 3rem 0 1rem 0;">
            <h1 style="display: inline-block; flex: 1">Users Page</h1>
            <a class="bg-green-600 py-2 px-4 text-white hover:bg-green-500 rounded" href="/new-user" id="createNewCategory">Add New User</a>
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
