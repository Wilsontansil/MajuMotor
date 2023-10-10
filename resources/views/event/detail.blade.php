@extends('layouts.app')

@section('header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1 class="m-0">Detail</h1>
            </div>
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('event') }}">Event</a></li>
                <li class="breadcrumb-item active">Detail</li>
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
                    <div class="row">
                        <button class="btn btn-primary" onclick="addEvent()">Add Event</button>
                    </div>
                </div>
                <div class="w-max">
                    {{$dataTable->table(['class'=>'table-auto dt-table'])}}
                </div>
            </div>
        </div>
    </div>

    <div>
        <div class="flex justify-end">
            <div class="mr-2">
                @include('event.modal.add')
            </div>
        </div>
    <div>
@endsection


@push('scripts')
    {{$dataTable->scripts()}}
@endpush

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