document.addEventListener('DOMContentLoaded', function() {
    const boxes = document.querySelectorAll('.history-box');

    const observerOptions = {
        root: null,
        rootMargin: '0px',
        threshold: 0 // Detects both entry and exit
    };

    const observerCallback = (entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                // Show when in view
                entry.target.classList.add('appear');
            } else {
                // Hide again when leaving
                entry.target.classList.remove('appear');
            }
        });
    };

    const observer = new IntersectionObserver(observerCallback, observerOptions);
    boxes.forEach(box => observer.observe(box));
});
