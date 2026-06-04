@extends('layouts.app')
@section('content')
<div class="search-container">
    <input type="text" class="search-bar" id="favorites-search" placeholder="Search favorites...">
</div>

<div class="cars-grid" id="favorites-grid">
    @forelse($favorites as $favorite)
    <div class="car-card" data-id="{{ $favorite->car->id }}" data-price="{{ $favorite->car->price }}">
        <i class="fa-solid fa-heart"></i>
        <img class="car-image" src="/{{ $favorite->car->image_url }}" alt="{{ $favorite->car->title }}" onerror="this.src='https://placehold.co/300x180?text=No+Image'">
        <div class="car-info">
            <div class="car-title">{{ $favorite->car->title }}</div>
            <div class="car-price">${{ number_format($favorite->car->price, 2) }}</div>
            <div class="car-details">
                {{ $favorite->car->year }} {{ $favorite->car->make }} {{ $favorite->car->model }}
                @if($favorite->car->category)
                    <br><strong>Category:</strong> {{ $favorite->car->category->name }}
                @endif
            </div>
        </div>
    </div>
    @empty
    <p style="text-align:center; grid-column:1/-1;">No favorite cars yet. Go to Home and ❤️ some!</p>
    @endforelse
</div>
@endsection

@push('scripts')
<script>
    const favSearch = document.getElementById('favorites-search');
    const favCards = document.querySelectorAll('#favorites-grid .car-card');
    if (favSearch) {
        favSearch.addEventListener('input', function() {
            const query = this.value.toLowerCase();
            favCards.forEach(card => {
                const title = card.querySelector('.car-title').innerText.toLowerCase();
                card.style.display = title.includes(query) ? 'block' : 'none';
            });
        });
    }
</script>
@endpush
