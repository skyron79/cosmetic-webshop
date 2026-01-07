
console.log('app.js loaded');

document.addEventListener('DOMContentLoaded', () => {
    const submitButton = document.querySelector('.submit-button');

    if (!submitButton) return;

    const reviewInput = document.querySelector('#review');
    
    console.log('Submit button found');
    submitButton.addEventListener('click', async (e) => {
        e.preventDefault();

        const productId = submitButton.dataset.productid;
        const comment = reviewInput.value.trim();

        if (!comment) {
            alert('Review cannot be empty');
            return;
        }

        const formData = new FormData();
        formData.append('product_id', productId);
        formData.append('review', comment);

        try {
            const response = await fetch('ajax/post_review.php', {
                method: 'POST',
                body: formData
            });

            const result = await response.json();

            if (!response.ok) {
                alert(result.error);
                return;
            }

            reviewInput.value = '';
            loadReviews(productId);

        } catch (err) {
            alert('Network error');
        }
    });
    loadReviews(submitButton.dataset.productid);
});

document.addEventListener('DOMContentLoaded', () => {
    const addButton= document.querySelector('.add-btn');

    if (!addButton) return;
    addButton.addEventListener('click', async (e) => {
        e.preventDefault();
    console.log('Add to cart button clicked');
});

    
});



async function loadReviews(productId) {
    const reviewsDiv = document.querySelector('#reviews');
    if (!reviewsDiv) return;

    try {
        const response = await fetch(`ajax/get_review.php?product_id=${productId}`);
        const reviews = await response.json();
       
        
        reviewsDiv.innerHTML = '';

        reviews.forEach(r => {
            const reviewEl = document.createElement('div');
            reviewEl.className = 'single-review';

            const user = document.createElement('h2');
            user.className = 'username';
            user.textContent = r.name;

            const comment = document.createElement('p');
            comment.textContent = r.comment;

            const date = document.createElement('span');
            date.className = 'date';
            date.textContent = r.created_at;

            reviewEl.append(user, comment, date);
            reviewsDiv.appendChild(reviewEl);
        });

    } catch {
        reviewsDiv.innerHTML = '<p>Error loading reviews.</p>';
    }
};
