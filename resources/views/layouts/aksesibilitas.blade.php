{{-- =========================================================
     FLOATING ACCESSIBILITY WIDGET & BADGE PROMOTION
     ========================================================= --}}
<div class="fixed bottom-6 right-6 z-[9999] flex flex-col items-end gap-3 pointer-events-auto">

    {{-- MENU POPUP CONTAINER --}}
    <div 
        id="accessibility-panel" 
        class="w-[270px] bg-white rounded-2xl p-4 shadow-2xl border border-slate-200 transition-all duration-200 opacity-0 pointer-events-none scale-95 origin-bottom-right"
        role="dialog"
        aria-label="Panel Aksesibilitas Web"
        style="display: none;"
    >
        {{-- Header Judul --}}
        <div class="flex items-center justify-between pb-3 mb-2 border-b border-slate-100">
            <div class="flex items-center gap-2">
                <h3 class="text-slate-700 font-bold text-xs tracking-wider uppercase">Aksesibilitas Situs</h3>
            </div>
            <button type="button" id="close-acc-panel" class="text-slate-400 hover:text-slate-600 text-xs font-semibold p-1">✕</button>
        </div>

        {{-- List Filter Menu --}}
        <div class="space-y-1">
            {{-- 1. Konversi Abu-abu --}}
            <button type="button" data-accessibility-action="grayscale" aria-pressed="false" class="w-full flex items-center justify-between p-2.5 rounded-xl text-left hover:bg-slate-50 transition group">
                <div class="flex items-center gap-3">
                    <span class="w-8 h-8 rounded-lg bg-indigo-50 text-indigo-600 flex items-center justify-center shrink-0 group-aria-pressed:bg-indigo-600 group-aria-pressed:text-white transition">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2a10 10 0 1 0 10 10A10 10 0 0 0 12 2zm0 18V4a8 8 0 0 1 0 16z"/></svg>
                    </span>
                    <span class="text-slate-700 font-semibold text-xs group-aria-pressed:text-indigo-600">Mode Skala Abu</span>
                </div>
            </button>

            {{-- 2. Warna / Klise (Invert) --}}
            <button type="button" data-accessibility-action="invert-colors" aria-pressed="false" class="w-full flex items-center justify-between p-2.5 rounded-xl text-left hover:bg-slate-50 transition group">
                <div class="flex items-center gap-3">
                    <span class="w-8 h-8 rounded-lg bg-indigo-50 text-indigo-600 flex items-center justify-center shrink-0 group-aria-pressed:bg-indigo-600 group-aria-pressed:text-white transition">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 3a9 9 0 1 0 9 9 9 9 0 0 0-9-9zm0 16a7 7 0 1 1 7-7 7 7 0 0 1-7 7z"/></svg>
                    </span>
                    <span class="text-slate-700 font-semibold text-xs group-aria-pressed:text-indigo-600">Kontras Tinggi</span>
                </div>
            </button>

            {{-- 3. Penerangan --}}
            <button type="button" data-accessibility-action="brightness" aria-pressed="false" class="w-full flex items-center justify-between p-2.5 rounded-xl text-left hover:bg-slate-50 transition group">
                <div class="flex items-center gap-3">
                    <span class="w-8 h-8 rounded-lg bg-indigo-50 text-indigo-600 flex items-center justify-center shrink-0 group-aria-pressed:bg-indigo-600 group-aria-pressed:text-white transition">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 7a5 5 0 1 0 5 5 5 5 0 0 0-5-5zm0-5a1 1 0 0 0 1-1V1a1 1 0 0 0-2 0v1a1 1 0 0 0 1 1zm0 19a1 1 0 0 0-1 1v1a1 1 0 0 0 2 0v-1a1 1 0 0 0-1-1zm10-10h-1a1 1 0 0 0 0 2h1a1 1 0 0 0 0-2zM3 12H2a1 1 0 0 0 0 2h1a1 1 0 0 0 0-2zm15.071-7.071a1 1 0 0 0-1.414 0l-.707.707a1 1 0 0 0 1.414 1.414l.707-.707a1 1 0 0 0 0-1.414zM7.05 16.95a1 1 0 0 0-1.414 0l-.707.707a1 1 0 0 0 1.414 1.414l.707-.707a1 1 0 0 0 0-1.414zm11.314 11.314a1 1 0 0 0 0-1.414l-.707-.707a1 1 0 0 0-1.414 1.414l.707.707a1 1 0 0 0 1.414 0zM7.05 7.05a1 1 0 0 0 0-1.414l-.707-.707a1 1 0 0 0-1.414 1.414l.707.707a1 1 0 0 0 1.414 0z"/></svg>
                    </span>
                    <span class="text-slate-700 font-semibold text-xs group-aria-pressed:text-indigo-600">Terangkan Layar</span>
                </div>
            </button>

            {{-- 4. Ukuran Teks --}}
            <div class="flex items-center justify-between p-2.5 rounded-xl bg-slate-50 my-1">
                <span class="text-slate-700 font-semibold text-xs pl-1">Ukuran Teks</span>
                <div class="flex items-center gap-1">
                    <button type="button" data-accessibility-action="decrease-text" title="Perkecil Teks" class="w-8 h-8 rounded-lg bg-white border border-slate-200 text-slate-700 hover:bg-indigo-50 hover:text-indigo-600 font-bold text-xs flex items-center justify-center shadow-sm">A-</button>
                    <button type="button" data-accessibility-action="increase-text" title="Perbesar Teks" class="w-8 h-8 rounded-lg bg-white border border-slate-200 text-slate-700 hover:bg-indigo-50 hover:text-indigo-600 font-bold text-sm flex items-center justify-center shadow-sm">A+</button>
                </div>
            </div>

            {{-- 5. Pertegas Teks --}}
            <button type="button" data-accessibility-action="bold-text" aria-pressed="false" class="w-full flex items-center justify-between p-2.5 rounded-xl text-left hover:bg-slate-50 transition group">
                <div class="flex items-center gap-3">
                    <span class="w-8 h-8 rounded-lg bg-indigo-50 text-indigo-600 font-black text-xs flex items-center justify-center shrink-0 group-aria-pressed:bg-indigo-600 group-aria-pressed:text-white transition">B</span>
                    <span class="text-slate-700 font-semibold text-xs group-aria-pressed:text-indigo-600">Pertegas Tulisan</span>
                </div>
            </button>

            {{-- 6. Cursor Hitam Besar --}}
            <button type="button" data-accessibility-action="black-cursor" aria-pressed="false" class="w-full flex items-center justify-between p-2.5 rounded-xl text-left hover:bg-slate-50 transition group">
                <div class="flex items-center gap-3">
                    <span class="w-8 h-8 rounded-lg bg-indigo-50 text-indigo-600 flex items-center justify-center shrink-0 group-aria-pressed:bg-indigo-600 group-aria-pressed:text-white transition">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M13.64 21.97a1 1 0 0 1-.92-.61l-2.43-5.83-3.43 3.43A1 1 0 0 1 5.2 18V3a1 1 0 0 1 1.6-.8l12 9a1 1 0 0 1-.41 1.77l-4.71 1.25 2.45 5.82a1 1 0 0 1-.5 1.33l-1.5.6a1 1 0 0 1-.49.1z"/></svg>
                    </span>
                    <span class="text-slate-700 font-semibold text-xs group-aria-pressed:text-indigo-600">Kursor Besar</span>
                </div>
            </button>

            {{-- 7. Highlight Links --}}
            <button type="button" data-accessibility-action="highlight-links" aria-pressed="false" class="w-full flex items-center justify-between p-2.5 rounded-xl text-left hover:bg-slate-50 transition group">
                <div class="flex items-center gap-3">
                    <span class="w-8 h-8 rounded-lg bg-indigo-50 text-indigo-600 flex items-center justify-center shrink-0 group-aria-pressed:bg-indigo-600 group-aria-pressed:text-white transition">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"/></svg>
                    </span>
                    <span class="text-slate-700 font-semibold text-xs group-aria-pressed:text-indigo-600">Tandai Tautan</span>
                </div>
            </button>
        </div>

        {{-- Reset Button --}}
        <div class="pt-2 mt-2 border-t border-slate-100 text-center">
            <button type="button" id="reset-accessibility" class="text-[11px] font-semibold text-slate-400 hover:text-indigo-600 transition">
                Kembalikan Pengaturan
            </button>
        </div>
    </div>

    {{-- BOTTOM BAR CONTAINER: BADGE & FLOATING BUTTON --}}
    <div class="flex items-center gap-3">
        {{-- PROMOTIONAL TOOLTIP LABEL --}}
        <div id="accessibility-promo-badge" class="hidden sm:block bg-slate-900/90 text-white px-3.5 py-2 rounded-xl shadow-xl pointer-events-none">
            <span class="font-bold block text-xs sm:text-sm">Aksesibilitas</span>
            <span class="text-[11px] text-slate-300 block">Sesuaikan tampilan & audio</span>
        </div>

        {{-- FLOATING BUTTON --}}
        <button id="accessibility-button" type="button" class="relative flex h-16 w-16 items-center justify-center rounded-full bg-blue-700 text-white shadow-lg shadow-blue-700/40 border-2 border-white hover:bg-blue-800 hover:scale-105 active:scale-95 transition-all duration-200 cursor-pointer" aria-expanded="false" aria-controls="accessibility-panel" aria-label="Menu Aksesibilitas Disabilitas" title="Pengaturan Aksesibilitas">
            <span id="active-indicator" class="absolute -top-0.5 -right-0.5 h-4 w-4 rounded-full bg-emerald-500 border-2 border-white hidden"></span>
            
            <svg class="h-9 w-9 text-white" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path d="M12 2a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-1.5 6a1.5 1.5 0 0 0-1.5 1.5V14a1 1 0 0 0 1 1h3.5l1.2 3.6a1 1 0 0 0 1.9-.6l-1.5-4.5A1 1 0 0 0 13.6 13H11V9.5a1.5 1.5 0 0 0-.5-1.5zM7 13a5 5 0 1 0 5 5 1 1 0 1 0-2 0 3 3 0 1 1-3-3 1 1 0 0 0 0-2z"/>
            </svg>
        </button>
    </div>
</div>

{{-- BACKDROP OVERLAY --}}
<div id="accessibility-backdrop" class="fixed inset-0 z-[9998] bg-black/10 transition-opacity opacity-0 pointer-events-none" style="display: none;" aria-hidden="true"></div>

{{-- CUSTOM CSS FOR FILTER FEATURES --}}
<style>
    .acc-grayscale { filter: grayscale(100%) !important; }
    .acc-invert { filter: invert(100%) hue-rotate(180deg) !important; }
    .acc-brightness { filter: brightness(125%) contrast(110%) !important; }
    .acc-bold-text * { font-weight: 700 !important; }
    .acc-black-cursor, .acc-black-cursor * { cursor: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24'%3E%3Cpath fill='%23000' stroke='%23fff' stroke-width='1' d='M13.64 21.97a1 1 0 0 1-.92-.61l-2.43-5.83-3.43 3.43A1 1 0 0 1 5.2 18V3a1 1 0 0 1 1.6-.8l12 9a1 1 0 0 1-.41 1.77l-4.71 1.25 2.45 5.82a1 1 0 0 1-.5 1.33l-1.5.6a1 1 0 0 1-.49.1z'/%3E%3C/svg%3E"), auto !important; }
    .acc-highlight-links a { background-color: #fef08a !important; color: #000 !important; text-decoration: underline !important; padding: 2px 4px !important; border-radius: 4px !important; }
</style>

{{-- JAVASCRIPT LOGIC --}}
<script>
(function() {
    function initAccessibility() {
        const accessibilityButton = document.getElementById('accessibility-button');
        const accessibilityPanel = document.getElementById('accessibility-panel');
        const accessibilityBackdrop = document.getElementById('accessibility-backdrop');
        const closeAccPanel = document.getElementById('close-acc-panel');
        const resetAccBtn = document.getElementById('reset-accessibility');
        const activeIndicator = document.getElementById('active-indicator');

        if (!accessibilityButton || !accessibilityPanel) return;

        let isOpen = false;

        let settings = {
            textSize: Number(localStorage.getItem('acc_text_size')) || 100,
            grayscale: localStorage.getItem('acc_grayscale') === 'true',
            invert: localStorage.getItem('acc_invert') === 'true',
            brightness: localStorage.getItem('acc_brightness') === 'true',
            boldText: localStorage.getItem('acc_bold_text') === 'true',
            blackCursor: localStorage.getItem('acc_black_cursor') === 'true',
            highlightLinks: localStorage.getItem('acc_highlight_links') === 'true'
        };

        function openMenu() {
            isOpen = true;
            accessibilityPanel.style.display = 'block';
            accessibilityBackdrop.style.display = 'block';
            
            setTimeout(() => {
                accessibilityPanel.classList.remove('opacity-0', 'pointer-events-none', 'scale-95');
                accessibilityPanel.classList.add('opacity-100', 'pointer-events-auto', 'scale-100');
                
                accessibilityBackdrop.classList.remove('opacity-0', 'pointer-events-none');
                accessibilityBackdrop.classList.add('opacity-100', 'pointer-events-auto');
            }, 10);

            accessibilityButton.setAttribute('aria-expanded', 'true');
        }

        function closeMenu() {
            isOpen = false;
            accessibilityPanel.classList.remove('opacity-100', 'pointer-events-auto', 'scale-100');
            accessibilityPanel.classList.add('opacity-0', 'pointer-events-none', 'scale-95');

            accessibilityBackdrop.classList.remove('opacity-100', 'pointer-events-auto');
            accessibilityBackdrop.classList.add('opacity-0', 'pointer-events-none');

            setTimeout(() => {
                if (!isOpen) {
                    accessibilityPanel.style.display = 'none';
                    accessibilityBackdrop.style.display = 'none';
                }
            }, 200);

            accessibilityButton.setAttribute('aria-expanded', 'false');
        }

        function togglePanel(e) {
            if (e) {
                e.preventDefault();
                e.stopPropagation();
            }
            if (isOpen) {
                closeMenu();
            } else {
                openMenu();
            }
        }

        accessibilityButton.addEventListener('click', togglePanel);
        accessibilityBackdrop.addEventListener('click', closeMenu);
        closeAccPanel?.addEventListener('click', closeMenu);

        function applyAccessibility() {
            document.documentElement.style.fontSize = settings.textSize + '%';
            document.documentElement.classList.toggle('acc-grayscale', settings.grayscale);
            document.documentElement.classList.toggle('acc-invert', settings.invert);
            document.documentElement.classList.toggle('acc-brightness', settings.brightness);
            if (document.body) {
                document.body.classList.toggle('acc-bold-text', settings.boldText);
                document.body.classList.toggle('acc-black-cursor', settings.blackCursor);
                document.body.classList.toggle('acc-highlight-links', settings.highlightLinks);
            }

            const isAnyActive = settings.textSize !== 100 || settings.grayscale || settings.invert || settings.brightness || settings.boldText || settings.blackCursor || settings.highlightLinks;
            
            if (activeIndicator) {
                activeIndicator.classList.toggle('hidden', !isAnyActive);
            }

            updateUIControls();
        }

        function saveSettings() {
            localStorage.setItem('acc_text_size', settings.textSize);
            localStorage.setItem('acc_grayscale', settings.grayscale);
            localStorage.setItem('acc_invert', settings.invert);
            localStorage.setItem('acc_brightness', settings.brightness);
            localStorage.setItem('acc_bold_text', settings.boldText);
            localStorage.setItem('acc_black_cursor', settings.blackCursor);
            localStorage.setItem('acc_highlight_links', settings.highlightLinks);
        }

        function updateUIControls() {
            document.querySelectorAll('[data-accessibility-action]').forEach(btn => {
                const act = btn.dataset.accessibilityAction;
                if (act === 'grayscale') btn.setAttribute('aria-pressed', settings.grayscale);
                if (act === 'invert-colors') btn.setAttribute('aria-pressed', settings.invert);
                if (act === 'brightness') btn.setAttribute('aria-pressed', settings.brightness);
                if (act === 'bold-text') btn.setAttribute('aria-pressed', settings.boldText);
                if (act === 'black-cursor') btn.setAttribute('aria-pressed', settings.blackCursor);
                if (act === 'highlight-links') btn.setAttribute('aria-pressed', settings.highlightLinks);
            });
        }

        document.querySelectorAll('[data-accessibility-action]').forEach(btn => {
            btn.addEventListener('click', function (e) {
                e.stopPropagation();
                const act = btn.dataset.accessibilityAction;

                if (act === 'increase-text') settings.textSize = Math.min(settings.textSize + 10, 130);
                if (act === 'decrease-text') settings.textSize = Math.max(settings.textSize - 10, 80);

                if (act === 'grayscale') settings.grayscale = !settings.grayscale;
                if (act === 'invert-colors') settings.invert = !settings.invert;
                if (act === 'brightness') settings.brightness = !settings.brightness;
                if (act === 'bold-text') settings.boldText = !settings.boldText;
                if (act === 'black-cursor') settings.blackCursor = !settings.blackCursor;
                if (act === 'highlight-links') settings.highlightLinks = !settings.highlightLinks;

                saveSettings();
                applyAccessibility();
            });
        });

        resetAccBtn?.addEventListener('click', function (e) {
            e.stopPropagation();
            settings = {
                textSize: 100,
                grayscale: false,
                invert: false,
                brightness: false,
                boldText: false,
                blackCursor: false,
                highlightLinks: false
            };
            saveSettings();
            applyAccessibility();
        });

        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape' && isOpen) { 
                closeMenu();
            }
        });

        applyAccessibility();
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initAccessibility);
    } else {
        initAccessibility();
    }
})();
</script>