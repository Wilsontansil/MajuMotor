<div class="modal fade" id="addstock-modal" tabindex="-1" role="dialog" aria-labelledby="modal-label" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="edit-modal-label">Supplier</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('stockorder.create') }}" method="POST">
                @csrf
                <div class="modal-body" id="attachment-body-content">
                    <div class="mt-4">
                        <label for="stockordername">Stock Name</label>

                        <input type="text" name="stockordername" id="stockordername" class="form-control" placeholder="Stock Order Name" required>
                    </div>

                    <div class="mt-4">
                        <label for="stockordersupplier">Supplier</label>

                        <select name="stockordersupplier" id="stockordersupplier" class="form-control">
                            <option value="none">none</option>
                            @foreach ($suppliers as $supplier)
                                <option value="{{ $supplier->code }}">{{ $supplier->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mt-4">
                        <label for="stockorderdate">Note</label>

                        <textarea name="stockorderdate" id="stockorderdate" class="form-control" placeholder="Note" required></textarea>
                    </div>

                </div>
                <div class="modal-footer">
                    <div class="flex items-center justify-end mt-4">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        function addstock() {
            $('#addstock-modal').modal('show');
        }
    </script>
@endpush