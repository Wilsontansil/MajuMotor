
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
                    <form method="POST" action="{{ route('user.save') }}">
                        @csrf

                    <div class="mt-4">
                        <label for="kode">Kode</label>

                        <input type="text" name="kode" id="kode" class="form-control" placeholder="Kode" value="{{ $user->kode }}" readonly>
                    </div>

                    <div class="mt-4">
                        <label for="username">UserName</label>

                        <input type="text" name="username" id="username" class="form-control" placeholder="Username" value="{{ $user->username }}" readonly>
                    </div>

                    <div class="mt-4">
                        <label for="name">Name</label>

                        <input type="text" name="name" id="name" class="form-control" placeholder="Name" value="{{ $user->name }}">
                    </div>

                    <div class="mt-4">
                        <label for="storeCode" class="form-label">Store</label>

                        <select name="storeCode" id="storeCode" class="form-control">
                            <option value="MM" @if($user->MM_Store_Code == 'MM') selected @endif>MM - Maju Motor</option>
                            <option value="MMOLI" @if($user->MM_Store_Code == 'MMOLI') selected @endif>MMOLI - Maju Motor Oli</option>
                        </select>
                    </div>

                    <div class="mt-4">
                        <div>   
                            <label for="password" class="block">Password</label>

                            <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
                        </div>
                    </div>

                    <!-- Permissions -->
                    <div class="mt-4">
                        <label for="Permission">Permission</label>
                    </div>
                    <div class="pl-lg-4">
                        <div class="row">
                            <div class="col-md-12">
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

                                            <tr>
                                                <td>Member Management</td>
                                                <td class="text-right">
                                                    <button type="button" class="btn btn-sm btn-dark" onClick="selectAll('member')">Select All</button>
                                                </td>
                                                <td>
                                                    <div class="form-check"> 
                                                        <input class="form-check-input member" type="checkbox" id="view-member"
                                                        name="permission[]" value="View Member" @isset($permissions) {{ $permissions['View Member'] }} @endisset>
                                                        <label class="form-check-label" for="view-member">
                                                        View Member
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input member" type="checkbox" id="add-member"
                                                        name="permission[]" value="Add Member" @isset($permissions) {{ $permissions['Add Member'] }} @endisset>
                                                        <label class="form-check-label" for="add-member">
                                                        Add Member
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input member" type="checkbox" id="edit-member"
                                                        name="permission[]" value="Edit Member" @isset($permissions) {{ $permissions['Edit Member'] }} @endisset>
                                                        <label class="form-check-label" for="edit-member">
                                                        Edit Member
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Event Management</td>
                                                <td class="text-right">
                                                    <button type="button" class="btn btn-sm btn-dark" onClick="selectAll('event')">Select All</button>
                                                </td>
                                                <td>
                                                    <div class="form-check"> 
                                                        <input class="form-check-input event" type="checkbox" id="view-event"
                                                        name="permission[]" value="View Event" @isset($permissions) {{ $permissions['View Event'] }} @endisset>
                                                        <label class="form-check-label" for="view-event">
                                                        View Event
                                                        </label>
                                                    </div>
                                                    <div class="form-check"> 
                                                        <input class="form-check-input event" type="checkbox" id="view-detail-event"
                                                        name="permission[]" value="View Detail Event" @isset($permissions) {{ $permissions['View Detail Event'] }} @endisset>
                                                        <label class="form-check-label" for="view-detail-event">
                                                        View Detail Event
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input event" type="checkbox" id="add-event"
                                                        name="permission[]" value="Add Event" @isset($permissions) {{ $permissions['Add Event'] }} @endisset>
                                                        <label class="form-check-label" for="add-event">
                                                        Add Event
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input event" type="checkbox" id="edit-event"
                                                        name="permission[]" value="Edit Event" @isset($permissions) {{ $permissions['Edit Event'] }} @endisset>
                                                        <label class="form-check-label" for="edit-event">
                                                        Edit Event
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