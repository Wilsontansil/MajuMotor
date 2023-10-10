<div class="modal fade" id="eventeditmember-modal" tabindex="-1" role="dialog" aria-labelledby="createpool-modal-label" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="edit-modal-label">Take</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('event.detail.member.post') }}" method="POST">
                @csrf
                <input type="hidden" name="event_id" id="event_id" value="" >
                <input type="hidden" name="member_id" id="member_id" value="" >
                <div class="modal-body" id="attachment-body-content">
                    <div class="mt-4">
                        <label for="statusedit">Status</label>

                        <select name="statusedit" id="statusedit" class="form-control">
                            <option value="done">Done</option>
                            <option value="waiting">Waiting</option>
                        </select>
                    </div>

                    <div>
                        <label for="payment_date" class="block">Payment Date</label>

                        <input type="date" name="payment_date" id="payment_date" class="form-control" placeholder="Payment Date">
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
        function editmember(memberid, eventid) {
            var memberid = memberid;
            var eventid = eventid;
            $.ajax({
                url: "{{ route('event.detail.member', ['member_id' => 'REPLACE_MEMBER_ID', 'event_id' => 'REPLACE_EVENT_ID']) }}".replace('REPLACE_MEMBER_ID', memberid).replace('REPLACE_EVENT_ID', eventid), // 'http://localhost:8000/event/1/member/1
                type: "GET",
                success: function(data) {
                    // select option
                    $('#status').val(data.data.status);
                    $('#payment_date').val(data.data.paymentdate);
                }
            });
            $('#eventeditmember-modal').modal('show');
        }
    </script>
@endpush