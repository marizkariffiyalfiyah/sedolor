
import Alpine from 'alpinejs';

// Wajib didaftarkan ke window agar Alpine dapat dibaca oleh Laravel Blade
window.Alpine = Alpine;
Alpine.start();

document.addEventListener('DOMContentLoaded', () => {

    const toggle = document.getElementById('accessibilityToggle');
    const panel = document.getElementById('accessibilityPanel');
    const close = document.getElementById('accessibilityClose');

    const increaseText = document.getElementById('increaseText');
    const decreaseText = document.getElementById('decreaseText');
    const highContrast = document.getElementById('highContrast');
    const underlineLinks = document.getElementById('underlineLinks');
    const resetAccessibility = document.getElementById('resetAccessibility');

    let textScale = 100;

    // Buka panel
    if (toggle) {
        toggle.addEventListener('click', () => {

            panel.classList.toggle('hidden');

            const expanded = !panel.classList.contains('hidden');

            toggle.setAttribute('aria-expanded', expanded);
        });
    }

    // Tutup panel
    if (close) {
        close.addEventListener('click', () => {

            panel.classList.add('hidden');

            toggle.setAttribute('aria-expanded', 'false');
        });
    }

    // Perbesar teks
    if (increaseText) {
        increaseText.addEventListener('click', () => {

            if (textScale < 140) {
                textScale += 10;
                document.documentElement.style.fontSize =
                    `${textScale}%`;
            }

        });
    }

    // Perkecil teks
    if (decreaseText) {
        decreaseText.addEventListener('click', () => {

            if (textScale > 80) {
                textScale -= 10;
                document.documentElement.style.fontSize =
                    `${textScale}%`;
            }

        });
    }

    // Kontras tinggi
    if (highContrast) {
        highContrast.addEventListener('click', () => {

            document.body.classList.toggle(
                'accessibility-high-contrast'
            );

        });
    }

    // Garis bawah link
    if (underlineLinks) {
        underlineLinks.addEventListener('click', () => {

            document.body.classList.toggle(
                'accessibility-underline'
            );

        });
    }

    // Reset
    if (resetAccessibility) {
        resetAccessibility.addEventListener('click', () => {

            textScale = 100;

            document.documentElement.style.fontSize = '';

            document.body.classList.remove(
                'accessibility-high-contrast',
                'accessibility-underline'
            );

        });
    }

});