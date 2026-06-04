@extends('layouts.app')
@section('content')
<div class="form-container">
    <h2>Edit Category</h2>
    <form action="/admin/categories/update/{{ $category->id }}" method="POST">
        @csrf @method('PUT')
        <div class="form-group"><label>Name</label><input type="text" name="name" value="{{ old('name', $category->name) }}" required></div>
        <div class="form-group"><label>Description</label><textarea name="description" class="form-control">{{ old('description', $category->description) }}</textarea></div>
        <button type="submit" class="form-btn">Update</button>
    </form>
</div>
@endsection
