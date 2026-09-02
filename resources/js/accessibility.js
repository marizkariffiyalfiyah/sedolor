document.addEventListener('DOMContentLoaded', function () {
    const html = document.documentElement;
    const body = document.body;
    const panelBtn = document.getElementById('btn-accessibility');
    const menu = document.getElementById('accessibility-menu');
    const csrfToken = document.querySelector('meta[name="csrf-token"]').content;

    const state = JSON.parse(localStorage.getItem('a11y') || '{}');
    let fontSize = state.font_size || 100;
    applyFontSize(fontSize);
    if (state.high_contrast) { body.classList.add('high-contrast'); document.getElementById('toggle-contrast').checked = true; }
    if (state.keyboard_nav) { document.getElementById('toggle-keyboard-nav').checked = true; }

    panelBtn.addEventListener('click', () => {
        menu.style.display = menu.style.display === 'none' ? 'block' : 'none';
    });

    document.querySelectorAll('[data-font]').forEach(btn => {
        btn.addEventListener('click', () => {
            const action = btn.dataset.font;
            if (action === '+') fontSize = Math.min(fontSize + 10, 200);
            else if (action === '-') fontSize = Math.max(fontSize - 10, 80);
            else fontSize = 100;
            applyFontSize(fontSize);
            saveState();
        });
    });

    function applyFontSize(size) {
        html.style.fontSize = size + '%';
    }

    document.getElementById('toggle-contrast').addEventListener('change', function () {
        body.classList.toggle('high-contrast', this.checked);
        saveState();
    });

    document.getElementById('toggle-keyboard-nav').addEventListener('change', function () {
        saveState();
    });

    // Text to Speech: baca teks yang di-select pengguna
    let ttsActive = false;
    document.getElementById('toggle-tts').addEventListener('change', function () {
        ttsActive = this.checked;
    });
    document.addEventListener('mouseup', () => {
        if (!ttsActive) return;
        const text = window.getSelection().toString();
        if (text) {
            const utter = new SpeechSynthesisUtterance(text);
            utter.lang = 'id-ID';
            window.speechSynthesis.cancel();
            window.speechSynthesis.speak(utter);
        }
    });

    // Navigasi Keyboard: pastikan elemen interaktif mudah dijangkau Tab
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Tab') body.classList.add('kbd-nav-active');
    });

    // Input Suara (Web Speech API) -> isi input/textarea yang sedang fokus
    const voiceBtn = document.getElementById('btn-voice-input');
    const SpeechRecognition = window.SpeechRecognition || window.webkitSpeechRecognition;
    if (SpeechRecognition) {
        const recognition = new SpeechRecognition();
        recognition.lang = 'id-ID';
        recognition.interimResults = false;

        voiceBtn.addEventListener('click', () => {
            recognition.start();
            voiceBtn.textContent = '🎙️ Mendengarkan...';
        });

        recognition.onresult = (event) => {
            const transcript = event.results[0][0].transcript;
            const active = document.activeElement;
            if (active && (active.tagName === 'INPUT' || active.tagName === 'TEXTAREA')) {
                active.value = transcript;
            } else {
                alert('Hasil suara: ' + transcript + ' (klik dulu ke kolom input yang dituju)');
            }
            voiceBtn.textContent = '🎤 Input Suara';
        };

        recognition.onerror = () => { voiceBtn.textContent = '🎤 Input Suara'; };
    } else {
        voiceBtn.disabled = true;
        voiceBtn.title = 'Browser tidak mendukung input suara';
    }

    function saveState() {
        const data = {
            font_size: fontSize,
            high_contrast: document.getElementById('toggle-contrast').checked,
            screen_reader: document.getElementById('toggle-tts').checked,
            keyboard_nav: document.getElementById('toggle-keyboard-nav').checked,
            voice_input: true,
        };
        localStorage.setItem('a11y', JSON.stringify(data));

        fetch('/aksesibilitas', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json', 'X-CSRF-TOKEN': csrfToken },
            body: JSON.stringify(data),
        });
    }
});
