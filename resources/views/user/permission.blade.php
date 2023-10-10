
@extends('layouts.app')

@section('header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1 class="m-0">User</h1>
            </div>
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item active">User</li>
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
                <div class="w-max">
                    <!-- Permissions -->
                    <div class="mt-4">
                        <label for="Permission">Permission</label>
                    </div>
                    <div class="pl-lg-4">
                        <div class="row">
                            <div class="col-md-12">
                                <form method="POST" action="{{ route('user.save') }}">
                                    @csrf
                                    <input type="hidden" name="user_id" value="{{ $id }}">
                                    <div class="table-responsive">
                                        <table id="user-group-table" class="table">
                                        <tbody>
                                            {{-- User --}}
                                            <tr>
                                                <td>User Management</td>
                                                <td class="text-right">
                                                    <button type="button" class="btn btn-sm btn-dark" onClick="selectAll('user')">Select All</button>
                                                </td>
                                                <td>
                                                    <div class="form-check"> 
                                                        <input class="form-check-input user" type="checkbox" id="view-user"
                                                        name="permission[]" value="View User" @isset($permissions) {{ $permissions['View User'] }} @endisset>
                                                        <label class="form-check-label" for="view-user">
                                                        View User
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input user" type="checkbox" id="add-user"
                                                        name="permission[]" value="Add User" @isset($permissions) {{ $permissions['Add User'] }} @endisset>
                                                        <label class="form-check-label" for="add-user">
                                                        Add User
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input user" type="checkbox" id="edit-user"
                                                        name="permission[]" value="Edit User" @isset($permissions) {{ $permissions['Edit User'] }} @endisset>
                                                        <label class="form-check-label" for="edit-user">
                                                        Edit User
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>

                                        </tbody>
                                        </table>
                                    </div>
                                    <div class="flex items-center justify-end mt-4">
                                        <button type="submit" class="btn btn-primary">Save</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
<script>
function selectAll(permissionsgroup) {
    $("."+permissionsgroup).prop('checked',true);
}
</script>
@endpush