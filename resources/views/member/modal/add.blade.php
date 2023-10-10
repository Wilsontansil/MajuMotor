<div class="modal fade" id="memberadd-modal" tabindex="-1" role="dialog" aria-labelledby="createpool-modal-label" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="edit-modal-label">Take</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('member.create') }}" method="POST">
                @csrf
                <div class="modal-body" id="attachment-body-content">
                    <div class="mt-4">
                        <label for="username">UserName</label>

                        <input type="text" name="username" id="username" class="form-control" placeholder="Username" required>
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
        function addMember() {
            $('#memberadd-modal').modal('show');
        }
    </script>
@endpush