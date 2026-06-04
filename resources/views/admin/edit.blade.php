@extends('layouts.app')
@section('content')
<div class="form-container">
    <h2>Edit Car</h2>
    <form action="/admin/update/{{ $car->id }}" method="POST">
        @csrf @method('PUT')
        <div class="form-group"><label>Title</label><input type="text" name="title" value="{{ old('title',$car->title) }}" required></div>
        <div class="form-group"><label>Price ($)</label><input type="number" step="0.01" name="price" value="{{ old('price',$car->price) }}" required></div>
        <div class="form-group"><label>Year</label><input type="number" name="year" value="{{ old('year',$car->year) }}" required></div>
        <div class="form-group"><label>Make</label><input type="text" name="make" value="{{ old('make',$car->make) }}" required></div>
        <div class="form-group"><label>Model</label><input type="text" name="model" value="{{ old('model',$car->model) }}" required></div>
        <div class="form-group">
            <label>Category</label>
            <select name="category_id" class="form-control">
                <option value="">-- None --</option>
                @foreach($categories as $cat)
                    <option value="{{ $cat->id }}" {{ (old('category_id>
                        {{ $cat->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="form-group"><label>Image URL</label><input type="text" name="image_url" value="{{ old('image_url',$car->image_url) }}" required></div>
        <button type="submit" class="form-btn">Update Car</button>
        <a href="/admin" style="margin-left:1rem;">Cancel</a>
    </form>
</div>
@endsection
