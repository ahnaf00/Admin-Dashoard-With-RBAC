@extends('backend.layouts.master')

@section('content')
    <div class="row">
        <div class="col-12 col-lg-8">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Privileges Management</h6>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Privilege Name</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Slug</th>
                                    <th class="text-secondary opacity-7"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($privileges as $privilege)
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">{{ $privilege->name }}</h6>
                                                    <p class="text-xs text-secondary mb-0">{{ $privilege->description }}</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="badge badge-sm bg-gradient-info">{{ $privilege->slug }}</span>
                                        </td>
                                        <td class="align-middle text-end pe-4">
                                            <a href="{{ route('privileges.edit', $privilege->id) }}"
                                                class="text-secondary font-weight-bold text-xs me-3" data-toggle="tooltip"
                                                data-original-title="Edit privilege">
                                                Edit
                                            </a>
                                            <form action="{{ route('privileges.destroy', $privilege->id) }}" method="POST"
                                                class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="btn btn-link text-danger text-xs p-0 m-0 font-weight-bold"
                                                    onclick="return confirm('Are you sure?')">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-4">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Add New Privilege</h6>
                </div>
                <div class="card-body">
                    <form action="{{ route('privileges.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name" class="form-control-label">Name</label>
                            <input class="form-control" type="text" name="name" id="name" placeholder="e.g. Create Posts"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="slug" class="form-control-label">Slug</label>
                            <input class="form-control" type="text" name="slug" id="slug" placeholder="e.g. posts.create"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="description" class="form-control-label">Description</label>
                            <textarea class="form-control" name="description" id="description" rows="2"></textarea>
                        </div>
                        <div class="mt-3">
                            <button type="submit" class="btn btn-primary btn-sm w-100">Save Privilege</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection