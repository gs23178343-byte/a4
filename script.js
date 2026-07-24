document.addEventListener('DOMContentLoaded', () => {
    // Mobile navigation toggle
    const menuBtn = document.querySelector('.menu-btn');
    const navLinks = document.querySelector('.nav-links');

    if (menuBtn && navLinks) {
        menuBtn.addEventListener('click', () => {
            navLinks.classList.toggle('active');
            menuBtn.classList.toggle('open');
        });
    }

    // Storm-Shield Waterproofing Interactive Section
    const membraneSelect = document.getElementById('membrane-select');
    const ratingSlider = document.getElementById('rating-slider');
    const ratingVal = document.getElementById('rating-val');
    const weatherGauge = document.getElementById('weather-gauge');

    if (membraneSelect && weatherGauge) {
        membraneSelect.addEventListener('change', (e) => {
            const val = e.target.value;
            saveStateSafely('po_membrane', val);
        });
    }

    if (ratingSlider && ratingVal && weatherGauge) {
        ratingSlider.addEventListener('input', (e) => {
            const mm = parseInt(e.target.value).toLocaleString();
            ratingVal.textContent = mm + ' mm';
            weatherGauge.textContent = mm + ' mm HH';
            saveStateSafely('po_waterproof_rating', mm);
        });
    }

    // Helper for localStorage safety
    function saveStateSafely(key, value) {
        try {
            if (typeof localStorage !== 'undefined') {
                localStorage.setItem(key, value);
            }
        } catch (err) {
            console.warn('localStorage not accessible:', err);
        }
    }
});
