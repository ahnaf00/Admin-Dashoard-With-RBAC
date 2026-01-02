@extends('backend.layouts.master')

@section('content')
    <div class="row">
        <div class="col-12 col-lg-8">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Edit Privilege: {{ $privilege->name }}</h6>
                </div>
                <div class="card-body">
                    <form action="{{ route('privileges.update', $privilege->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="name" class="form-control-label">Name</label>
                            <input class="form-control @error('name') is-invalid @enderror" type="text" name="name"
                                id="name" value="{{ old('name', $privilege->name) }}" required>
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="slug" class="form-control-label">Slug</label>
                            <input class="form-control @error('slug') is-invalid @enderror" type="text" name="slug"
                                id="slug" value="{{ old('slug', $privilege->slug) }}" required>
                            @error('slug')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="description" class="form-control-label">Description</label>
                            <textarea class="form-control @error('description') is-invalid @enderror" name="description"
                                id="description" rows="3">{{ old('description', $privilege->description) }}</textarea>
                            @error('description')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mt-4">
                            <button type="submit" class="btn btn-primary btn-sm">Update Privilege</button>
                            <a href="{{ route('privileges.index') }}" class="btn btn-secondary btn-sm ms-2">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection