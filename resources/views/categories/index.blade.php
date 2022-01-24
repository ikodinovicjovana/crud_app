<x-layout>
    <body>
        <div class="container">
            <div style="display: flex; align-items: center; margin: 3rem 0 1rem 0;">
                <h1 style="display: inline-block; flex: 1">Categories Page</h1>
                <a class="bg-green-600 py-2 px-4 text-white hover:bg-green-500 rounded" href="javascript:void(0)" id="createNewCategory">Add New Category</a>
            </div>
            <x-table-layout-container>
                <x-table-layout>
                    <thead class="bg-gray-50">
                    <tr>
                        <x-table-layout-th></x-table-layout-th>
                        <x-table-layout-th>Parent Category</x-table-layout-th>
                        <x-table-layout-th>Category</x-table-layout-th>
                        <x-table-layout-th>Action</x-table-layout-th>
                    </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach($categories as $category)
                            <x-category-table :category="$category"></x-category-table>
                        @endforeach
                    </tbody>
                </x-table-layout>
            </x-table-layout-container>
        </div>
        <x-modal></x-modal>

        @if($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        <script type="text/javascript">
            $(function () {
                $("#createNewCategory").click(function () {
                    $('#category_id').val('');
                    // $('#categoryForm').trigger('reset');
                    $('#modalHeading').html('Add New Category');
                    $('#ajaxModal').modal('show');
                });

                $("#categoryForm").submit(function (e) {
                    e.preventDefault();

                    let parent_id = $('#parent_id').val();console.log(parent_id);
                    let name = $('#name').val();
                    let _token = $("input[name=_token]").val();

                    $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        url: "{{ route('categories.store') }}",
                        type: "POST",
                        data: {
                            parent_id: parent_id,
                            name: name,
                            _token: _token,
                        },
                        success: function (response) {
                            if (response) {
                                // $("#categoryForm")[0].reset();
                                // $('#ajaxModal').modal('hide');
                            }
                        }
                    })
                })
            });

        </script>
    </body>
</x-layout>
