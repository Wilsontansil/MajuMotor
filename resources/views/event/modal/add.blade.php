<div class="modal fade" id="eventadd-modal" tabindex="-1" role="dialog" aria-labelledby="createpool-modal-label" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="edit-modal-label">Take</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('event.create') }}" method="POST">
                @csrf
                <div class="modal-body" id="attachment-body-content">
                    <div class="mt-4">
                        <label for="event_name">Event Name</label>

                        <input type="text" name="event_name" id="event_name" class="form-control" placeholder="Event Name" required>
                    </div>

                    <div class="mt-4">
                        <label for="event_location" class="block">Event Location</label>

                        <input type="text" name="event_location" id="event_location" class="form-control" placeholder="Event Location" required>
                    </div>

                    <div class="mt-4">
                        <label for="event_date" class="block">Event Date</label>

                        <input type="date" name="event_date" id="event_date" class="form-control" placeholder="Event Date" required>
                    </div>

                    <div class="mt-4">
                        <label for="event_time_start" class="block">Event Time Start</label>

                        <input type="time" name="event_time_start" id="event_time_start" class="form-control" placeholder="Event Time Start" required>
                    </div>

                    <div class="mt-4">
                        <label for="event_time_end" class="block">Event Time End</label>

                        <input type="time" name="event_time_end" id="event_time_end" class="form-control" placeholder="Event Time End" required>
                    </div>

                    <div class="mt-4">
                        <label for="event_description" class="block">Event Description</label>

                        <textarea name="event_description" id="event_description" class="form-control" placeholder="Event Description" required></textarea>
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
        function addEvent() {
            $('#eventadd-modal').modal('show');
        }
    </script>
@endpush