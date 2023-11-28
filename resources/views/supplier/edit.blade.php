@extends('layouts.app')

@section('header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1 class="m-0">Supplier Edit</h1>
            </div>
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item active">Supplier Edit</li>
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
                    </div>
                </div>
                <div class="w-max">
                    <form action="{{ route('supplier.save') }}" method="POST">
                        @csrf
                        <div class="modal-body" id="attachment-body-content">
                            <input type="hidden" name="supplierid" id="supplierid" value="{{ $supplier->id }}">
                            <div class="mt-4">
                                <label for="suppliercode">Supplie Code</label>
        
                                <input type="text" name="suppliercode" id="suppliercode" class="form-control" placeholder="Supplie Code" value="{{ $supplier->code }}" required>
        
                            <div class="mt-4">
                                <label for="suppliername">Supplie Name</label>
        
                                <input type="text" name="suppliername" id="suppliername" class="form-control" placeholder="Supplie Name" value="{{ $supplier->name }}" required>
                            </div>
        
                            <div class="mt-4">
                                <label for="supplieraddress">Supplie Address</label>
        
                                <input type="text" name="supplieraddress" id="supplieraddress" class="form-control" placeholder="Supplie Address" value="{{ $supplier->address }}">
                            </div>
        
                            <div class="mt-4">
                                <label for="supplierphone">Supplie Phone</label>
        
                                <input type="text" name="supplierphone" id="supplierphone" class="form-control" placeholder="Supplie Phone" value="{{ $supplier->phone }}">
                            </div>
        
                            <div class="mt-4">
                                <label for="supplieremail">Supplie Email</label>
        
                                <input type="text" name="supplieremail" id="supplieremail" class="form-control" placeholder="Supplie Email" value="{{ $supplier->email }}">
                            </div>
        
                            <div class="mt-4">
                                <label for="supplierbank" class="form-label">Supplie Bank</label>
        
                                <select name="supplierbank" id="supplierbank" class="form-control">
                                    <option value="BCA" {{ $supplier->bank == 'BCA' ? 'selected' : '' }}>BCA</option>
                                    <option value="BNI" {{ $supplier->bank == 'BNI' ? 'selected' : '' }}>BNI</option>
                                    <option value="BRI" {{ $supplier->bank == 'BRI' ? 'selected' : '' }}>BRI</option>
                                    <option value="Mandiri" {{ $supplier->bank == 'Mandiri' ? 'selected' : '' }}>Mandiri</option>
                                </select>
                            </div>
        
                            <div class="mt-4">
                                <label for="supplieraccountname">Supplie Account Name</label>
        
                                <input type="text" name="supplieraccountname" id="supplieraccountname" class="form-control" placeholder="Supplie Account Name" value="{{ $supplier->bank_name }}">
                            </div>
        
                            <div class="mt-4">
                                <label for="supplieraccount">Supplie Account</label>
        
                                <input type="text" name="supplieraccount" id="supplieraccount" class="form-control" placeholder="Supplie Account" value="{{ $supplier->bank_account }}">
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
    </div>
@endsection


@push('scripts')

    {{-- <script>
        function editsupplier() {
            $('#addsupplier-modal').modal('show');
        }
    </script> --}}
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