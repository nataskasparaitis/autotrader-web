@extends('layouts.app')
@section('content')
<div class="admin-container">
    <a href="/admin/categories/create" class="admin-add">Add New Category</a>
    <table class="admin-table">
        <thead>
            <tr><th>ID</th><th>Name</th><th>Description</th><th>Actions</th></tr>
        </thead>
        <tbody>
            @foreach($categories as $category)
            <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->name }}</td>
                <td>{{ $category->description }}</td>
                <td>
                    <a href="/admin/categories/edit/{{ $category->id }}" class="admin-btn admin-edit">Edit</a>
                    <form action="/admin/categories/delete/{{ $category->id }}" method="POST" style="display:inline">
                        @csrf @method('DELETE')
                        <button type="submit" class="admin-btn admin-delete" onclick="return confirm('Delete this category?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
