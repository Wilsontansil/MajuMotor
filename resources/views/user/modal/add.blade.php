<div class="modal fade" id="useradd-modal" tabindex="-1" role="dialog" aria-labelledby="createpool-modal-label" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="edit-modal-label">Take</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('user.create') }}" method="POST">
                @csrf
                <div class="modal-body" id="attachment-body-content">
                    <div class="mt-4">
                        <label for="kode">Kode</label>

                        <input type="text" name="kode" id="kode" class="form-control" placeholder="Kode" required>
                    </div>

                    <div class="mt-4">
                        <label for="username">UserName</label>

                        <input type="text" name="username" id="username" class="form-control" placeholder="Username" required>
                    </div>

                    <div class="mt-4">
                        <label for="name">Name</label>

                        <input type="text" name="name" id="name" class="form-control" placeholder="Name" required>
                    </div>

                    <div>   
                        <label for="password" class="block">Password</label>

                        <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
                    </div>

                    <div>   
                        <label for="password_confirmation" class="block">Password Confirmation</label>

                        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Password Confirmation" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="flex items-center justify-end mt-4">
                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        function addUser() {
            $('#useradd-modal').modal('show');
        }
    </script>
@endpush