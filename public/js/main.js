document.querySelectorAll('.car-card').forEach((card) => {
    const heart = card.querySelector('.fa-heart');
    const carId = card.dataset.id;

    if(userFavorites && userFavorites.includes(parseInt(carId))) {
        heart.classList.remove('fa-regular');
        heart.classList.add('fa-solid');
    }

    heart.addEventListener('click', (e) => {
        e.stopPropagation();
        fetch('/favorites/add', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            },
            body: JSON.stringify({ carId: carId })
        })
        .then(res => res.json())
        .then(data => {
            if(data.status === 'added') {
                heart.classList.remove('fa-regular');
                heart.classList.add('fa-solid');
            } else {
                heart.classList.remove('fa-solid');
                heart.classList.add('fa-regular');
            }
        });
    });
});
