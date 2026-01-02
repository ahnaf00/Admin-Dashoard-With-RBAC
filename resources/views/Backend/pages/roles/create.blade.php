@extends('backend.layouts.master')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Create New Role</h6>
                </div>
                <div class="card-body">
                    <form action="{{ route('roles.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name" class="form-control-label">Role Name</label>
                            <input class="form-control" type="text" name="name" id="name"
                                placeholder="e.g. Editor, Moderator" required>
                        </div>

                        <div class="mt-4">
                            <h6>Assign Privileges</h6>
                            <div class="row mt-3">
                                @foreach($privileges as $privilege)
                                    <div class="col-md-3 mb-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="privileges[]"
                                                value="{{ $privilege->id }}" id="privilege-{{ $privilege->id }}">
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
                            <button type="submit" class="btn btn-primary btn-sm">Save Role</button>
                            <a href="{{ route('roles.index') }}" class="btn btn-secondary btn-sm ms-2">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection