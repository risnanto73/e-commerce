<div class="modal fade" id="basicModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{ route('admin.product.gallery.store', $product->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('POST')

                <div class="modal-header">
                    <h5 class="modal-title">{{ $product->name }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="col-12">
                        <label for="inputNanme4" class="form-label">Product Gallery Image</label>
                        <input type="file" class="form-control" id="inputNanme4" name="files[]" multiple>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>

            </form>

        </div>
    </div>
</div>
