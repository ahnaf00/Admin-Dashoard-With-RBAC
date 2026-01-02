@extends('backend.layouts.master')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Edit Role: {{ $role->name }}</h6>
                </div>
                <div class="card-body">
                    <form action="{{ route('roles.update', $role->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="name" class="form-control-label">Role Name</label>
                            <input class="form-control" type="text" name="name" id="name" value="{{ $role->name }}"
                                required>
                        </div>

                        <div class="mt-4">
                            <h6>Update Privileges</h6>
                            <div class="row mt-3">
                                @php
                                    $attachedPrivileges = $role->privileges->pluck('id')->toArray();
                                @endphp
                                @foreach($privileges as $privilege)
                                    <div class="col-md-3 mb-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="privileges[]"
                                                value="{{ $privilege->id }}" id="privilege-{{ $privilege->id }}" {{ in_array($privilege->id, $attachedPrivileges) ? 'checked' : '' }}>
                                            <label class="form-check-label" for="privilege-{{ $privilege->id }}">
                                                {{ $privilege->name }}
                                                <small class="d-block text-muted">{{ $privilege->slug }}</small>
                                            </label>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="mt-4">
                            <button type="submit" class="btn btn-primary btn-sm">Update Role</button>
                            <a href="{{ route('roles.index') }}" class="btn btn-secondary btn-sm ms-2">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection