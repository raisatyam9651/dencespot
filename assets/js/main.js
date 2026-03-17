// Main JS for Premium Hero Section

document.addEventListener('DOMContentLoaded', () => {
    // Add hover sound effect logic (optional, but for premium feel)
    const buttons = document.querySelectorAll('.btn');
    
    buttons.forEach(button => {
        button.addEventListener('mouseenter', () => {
            // Subtle feedback if needed
        });
    });

    // Floating animation for the before/after card
    const floatCard = document.querySelector('.floating-preview');
    if (floatCard) {
        let angle = 0;
        const speed = 0.02;
        const range = 10;

        function animate() {
            angle += speed;
            const yOffset = Math.sin(angle) * range;
            floatCard.style.transform = `translateY(${yOffset}px)`;
            requestAnimationFrame(animate);
        }
        animate();
    }

    // Smooth scroll for anchors
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth'
                });
            }
        });
    });
});
