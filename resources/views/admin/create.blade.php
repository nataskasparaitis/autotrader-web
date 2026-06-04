@extends('layouts.app')
@section('content')
<div class="form-container">
    <h2>Add New Car</h2>
    <form action="/admin/store" method="POST">
        @csrf
        <div class="form-group"><label>Title</label><input type="text" name="title" value="{{ old('title') }}" required></div>
        <div class="form-group"><label>Price ($)</label><input type="number" step="0.01" name="price" required></div>
        <div class="form-group"><label>Year</label><input type="number" name="year" required></div>
        <div class="form-group"><label>Make</label><input type="text" name="make" required></div>
        <div class="form-group">
            <label>Category</label>
            <select name="category_id" class="form-control">
                <option value="">-- None --</option>
                @foreach($categories as $cat)
                    <option value="{{ $cat->id }}" {{ (old('category_id',$car->category_id??'') == $cat->id) ? 'selected' : '' }}>
                        {{ $cat->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="form-group"><label>Model</label><input type="text" name="model" required></div>
        <div class="form-group"><label>Image URL</label><input type="text" name="image_url" placeholder="/images/cars/..." required></div>
        <button type="submit" class="form-btn">Add Car</button>
        <a href="/admin" style="margin-left:1rem;">Cancel</a>
    </form>
</div>
@endsection
