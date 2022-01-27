<div class="modal fade" id="ajaxModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modalHeading"></h4>
            </div>
            <div class="modal-body">
                <form id="categoryForm" name="categoryForm" class="form-horizontal"
                      onsubmit="setTimeout(function(){window.location.reload();},10);">
                    @csrf
                    <input hidden type="text" name="categoty_id" id="category_id">
                    <div class="form-group">
                        <select name="parent_id" id="parent_id" class="border mt-2 py-2 bg-white rounded-xl z-50 overflow-auto max-h-52">
                            <option value="0"></option>

                            @foreach(\App\Models\Category::all() as $category)
                                <option value="{{ $category->id }}" style="color: grey;">{{ ucwords($category->name) }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="">
                    </div>
                    <button type="submit" class="btn btn-primary" id="saveBtn" value="create">Save Category</button>
                </form>
            </div>
        </div>
    </div>
</div>
