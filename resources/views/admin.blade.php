@extends('layouts.app')
@section('content')
<div class="admin-container">
    <a href="/admin/create" class="admin-add"><i class="fas fa-plus"></i> Add New Car</a>
    <table class="admin-table">
        <thead>
            <tr>
                <th>ID</th><th>Title</th><th>Price</th><th>Year/Make/Model</th><th>Image URL</th><th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cars as $car)
            <tr>
                <td>{{ $car->id }}</td>
                <td>{{ $car->title }}</td>
                <td>${{ number_format($car->price,2) }}</td>
                <td>{{ $car->year }} {{ $car->make }} {{ $car->model }}</td>
                <td>{{ $car->image_url }}</td>
                <td>
                    <a href="/admin/edit/{{ $car->id }}" class="admin-btn admin-edit">Edit</a>
                    <form action="/admin/delete/{{ $car->id }}" method="POST" style="display:inline">
                        @csrf @method('DELETE')
                        <button type="submit" class="admin-btn admin-delete" onclick="return confirm('Delete this car?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
