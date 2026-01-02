@extends('backend.layouts.master')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Assign Roles to User: {{ $user->name }}</h6>
                </div>
                <div class="card-body">
                    <div class="d-flex align-items-center mb-4">
                        <div class="avatar avatar-xl bg-gradient-primary me-3 text-white">
                            {{ strtoupper(substr($user->name, 0, 1)) }}
                        </div>
                        <div>
                            <h4 class="mb-0">{{ $user->name }}</h4>
                            <p class="text-sm text-secondary mb-0">{{ $user->email }}</p>
                        </div>
                    </div>

                    <form action="{{ route('users.update', $user->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mt-4">
                            <h6>Select Roles</h6>
                            <div class="row mt-3">
                                @php
                                    $userRoles = $user->roles->pluck('id')->toArray();
                                @endphp
                                @foreach($roles as $role)
                                    <div class="col-md-3 mb-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="roles[]"
                                                value="{{ $role->id }}" id="role-{{ $role->id }}" {{ in_array($role->id, $userRoles) ? 'checked' : '' }}>
                                            <label class="form-check-label" for="role-{{ $role->id }}">
                                                {{ $role->name }}
                                                <small class="d-block text-muted">{{ $role->slug }}</small>
                                            </label>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="mt-4 border-top pt-3">
                            <button type="submit" class="btn btn-primary btn-sm">Update User Roles</button>
                            <a href="{{ route('users.index') }}" class="btn btn-secondary btn-sm ms-2">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection