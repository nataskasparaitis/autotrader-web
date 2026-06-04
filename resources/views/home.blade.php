@extends('layouts.app')
@section('content')
<div class="search-container">
    <input type="text" class="search-bar" placeholder="Search cars by name...">
</div>

<div class="filter-bar">
    <input type="number" id="min-price" placeholder="Min price" step="1000">
    <input type="number" id="max-price" placeholder="Max price" step="1000">
    <input type="number" id="min-year" placeholder="Min year" step="1">
    <input type="number" id="max-year" placeholder="Max year" step="1">
    <button id="apply-filter">Apply</button>
    <button id="reset-filter">Reset</button>
</div>

<div class="cars-grid" id="cars-grid">
    @foreach($cars as $car)
    <div class="car-card" data-id="{{ $car->id }}" data-price="{{ $car->price }}" data-year="{{ $car->year }}">
        <i class="fa-regular fa-heart"></i>
        <img class="car-image" src="/{{ $car->image_url }}" alt="{{ $car->title }}" onerror="this.src='https://placehold.co/300x180?text=No+Image'">
        <div class="car-info">
            <div class="car-title">{{ $car->title }}</div>
            <div class="car-price">${{ number_format($car->price, 2) }}</div>
            <div class="car-details">
                {{ $car->year }} {{ $car->make }} {{ $car->model }}
                @if($car->category)
                    <br><strong>Category:</strong> {{ $car->category->name }}
                @endif
            </div>
        </div>
    </div>
    @endforeach
</div>

@endsection

@push('scripts')
<script>
    const searchInput = document.querySelector('.search-bar');
    const cards = document.querySelectorAll('.car-card');
    const minPrice = document.getElementById('min-price');
    const maxPrice = document.getElementById('max-price');
    const minYear = document.getElementById('min-year');
    const maxYear = document.getElementById('max-year');
    const applyBtn = document.getElementById('apply-filter');
    const resetBtn = document.getElementById('reset-filter');

    function filterCards() {
        const query = searchInput.value.toLowerCase();
        const minP = parseFloat(minPrice.value) || 0;
        const maxP = parseFloat(maxPrice.value) || Infinity;
        const minY = parseInt(minYear.value) || 0;
        const maxY = parseInt(maxYear.value) || Infinity;
        cards.forEach(card => {
            const title = card.querySelector('.car-title').innerText.toLowerCase();
            const price = parseFloat(card.dataset.price);
            const year = parseInt(card.dataset.year);
            const matchesSearch = title.includes(query);
            const matchesPrice = price >= minP && price <= maxP;
            const matchesYear = year >= minY && year <= maxY;
            card.style.display = (matchesSearch && matchesPrice && matchesYear) ? 'block' : 'none';
        });
    }

    searchInput.addEventListener('input', filterCards);
    applyBtn.addEventListener('click', filterCards);
    resetBtn.addEventListener('click', () => {
        minPrice.value = '';
        maxPrice.value = '';
        minYear.value = '';
        maxYear.value = '';
        filterCards();
    });
</script>
@endpush
