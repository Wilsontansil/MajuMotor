@extends('layouts.app')

@section('header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1 class="m-0">Event</h1>
            </div>
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item active">Event</li>
            </ol>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="content-dt">
                <div class="pt-3 pl-4">
                </div>
                <div class="w-max">
                    <form action="{{ route('event.detail.member.post') }}" method="POST">
                        @csrf
                        <input type="hidden" name="event_id" id="event_id" value="{{ $event_id }}" >
                        <input type="hidden" name="member_id" id="member_id" value="{{ $member_id }}" >
                        <div class="modal-body" id="attachment-body-content">
                            <div class="mt-4">
                                <label for="statusedit">Status</label>
        
                                <select name="statusedit" id="statusedit" class="form-control">
                                    <option value="done" @if($eventHasMember['status'] == 'done') selected @endif>Done</option>
                                    <option value="waiting" @if($eventHasMember['status'] == 'waiting') selected @endif>Waiting</option>
                                </select>
                            </div>
        
                            <div>
                                <label for="payment_date" class="block">Payment Date</label>
        
                                <input type="date" name="payment_date" id="payment_date" class="form-control" placeholder="Payment Date" value="{{ $eventHasMember['payment_date'] }}">
                            </div>

                            <div class="mt-4">
                                <label for="nominal_pay" class="block">Nominal</label>
        
                                <input type="text" name="nominal_pay" id="nominal_pay" class="form-control" placeholder="Nominal" value="{{ $eventHasMember['nominal'] }}">
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
    </div>

@endsection

@push('styles')
    <style>

        .dataTables_length {
            margin-top: 10px;
        }
        .dataTables_length select{
            width: 100px;
        }
        .content-dt {
            /* overflow: scroll; */
            overflow-x: hidden;
        }

        .content-dt .toolbar {
            position: absolute;
            z-index: 1;
        }

        @media only screen and (max-width: 600px) {
            .content-dt .toolbar {
                position: relative;
                z-index: 1;
            }
        }

        .content-dt .dt-table {
            width: 100% !important;
        }

        .dt-table tr, .dt-table tr th, .dt-table tr td {
            border: 1px solid #888;
        }

        .banned {
            background-color:#FECACA !important;
        }

        .conflict {
            background-color:#fecaf5 !important;
        }

        .inner-div {
        border: 1px solid blue;
        width: 28px;
        height: 28px;
        display: flex;
        justify-content: center;
        align-items: center;
        }
    </style>
@endpush