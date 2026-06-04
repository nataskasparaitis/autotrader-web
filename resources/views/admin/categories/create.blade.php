@extends('layouts.app')
@section('content')
<div class="form-container">
    <h2>Add New Category</h2>
    <form action="/admin/categories/store" method="POST">
        @csrf
        <div class="form-group"><label>Name</label><input type="text" name="name" required></div>
        <div class="form-group"><label>Description</label><textarea name="description" class="form-control"></textarea></div>
        <button type="submit" class="form-btn">Save</button>
    </form>
</div>
@endsection
