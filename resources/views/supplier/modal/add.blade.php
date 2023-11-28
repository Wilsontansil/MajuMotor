<div class="modal fade" id="addsupplier-modal" tabindex="-1" role="dialog" aria-labelledby="createpool-modal-label" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="edit-modal-label">Supplier</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('supplier.create') }}" method="POST">
                @csrf
                <div class="modal-body" id="attachment-body-content">
                    <div class="mt-4">
                        <label for="suppliercode">Supplie Code</label>

                        <input type="text" name="suppliercode" id="suppliercode" class="form-control" placeholder="Supplie Code" required>
                    </div>

                    <div class="mt-4">
                        <label for="suppliername">Supplie Name</label>

                        <input type="text" name="suppliername" id="suppliername" class="form-control" placeholder="Supplie Name" required>
                    </div>

                    <div class="mt-4">
                        <label for="supplieraddress">Supplie Address</label>

                        <input type="text" name="supplieraddress" id="supplieraddress" class="form-control" placeholder="Supplie Address">
                    </div>

                    <div class="mt-4">
                        <label for="supplierphone">Supplie Phone</label>

                        <input type="text" name="supplierphone" id="supplierphone" class="form-control" placeholder="Supplie Phone">
                    </div>

                    <div class="mt-4">
                        <label for="supplieremail">Supplie Email</label>

                        <input type="text" name="supplieremail" id="supplieremail" class="form-control" placeholder="Supplie Email">
                    </div>

                    <div class="mt-4">
                        <label for="supplierbank" class="form-label">Supplie Bank</label>

                        <select name="supplierbank" id="supplierbank" class="form-control">
                            <option value="BCA">BCA</option>
                            <option value="BNI">BNI</option>
                            <option value="BRI">BRI</option>
                            <option value="Mandiri">Mandiri</option>
                        </select>
                    </div>

                    <div class="mt-4">
                        <label for="supplieraccountname">Supplie Account Name</label>

                        <input type="text" name="supplieraccountname" id="supplieraccountname" class="form-control" placeholder="Supplie Account Name">
                    </div>

                    <div class="mt-4">
                        <label for="supplieraccount">Supplie Account</label>

                        <input type="text" name="supplieraccount" id="supplieraccount" class="form-control" placeholder="Supplie Account">
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
        function addsupplier() {
            $('#addsupplier-modal').modal('show');
        }
    </script>
@endpush