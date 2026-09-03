/* ==========================================================================
   AURADIALVALE — JAVASCRIPT CONTROLLERS
   Celestial Horology Simulator, Theme Switcher, Search & Typography
   ========================================================================== */

document.addEventListener('DOMContentLoaded', () => {

  // 1. Reading Progress Bar
  const progressBar = document.querySelector('.reading-progress-bar');
  if (progressBar) {
    window.addEventListener('scroll', () => {
      const winScroll = document.documentElement.scrollTop || document.body.scrollTop;
      const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
      const scrolled = height > 0 ? (winScroll / height) * 100 : 0;
      progressBar.style.width = scrolled + '%';
    });
  }

  // 2. 3-Mode Theme Switcher (Astral Obsidian -> Grand Feu Porcelain -> Aventurine Midnight)
  const themeBtn = document.querySelector('.theme-toggle-btn');
  const themes = ['theme-obsidian', 'theme-porcelain', 'theme-aventurine'];
  const themeIcons = ['⏱️', '✨', '🌌'];
  
  let currentThemeIndex = 0;
  const savedTheme = localStorage.getItem('auradialvale_watch_theme');
  if (savedTheme) {
    const idx = themes.indexOf(savedTheme);
    if (idx !== -1) {
      currentThemeIndex = idx;
      if (savedTheme !== 'theme-obsidian') {
        document.body.classList.add(savedTheme);
      }
    }
  }

  if (themeBtn) {
    themeBtn.textContent = themeIcons[currentThemeIndex];
    themeBtn.addEventListener('click', () => {
      document.body.classList.remove('theme-porcelain', 'theme-aventurine');
      currentThemeIndex = (currentThemeIndex + 1) % themes.length;
      const newTheme = themes[currentThemeIndex];
      
      if (newTheme !== 'theme-obsidian') {
        document.body.classList.add(newTheme);
      }
      themeBtn.textContent = themeIcons[currentThemeIndex];
      localStorage.setItem('auradialvale_watch_theme', newTheme);
    });
  }

  // 3. Mobile Navigation Menu Toggle
  const mobileToggle = document.querySelector('.mobile-toggle');
  const navMenu = document.querySelector('.nav-menu');
  if (mobileToggle && navMenu) {
    mobileToggle.addEventListener('click', () => {
      const isOpen = navMenu.style.display === 'flex';
      navMenu.style.display = isOpen ? 'none' : 'flex';
      if (!isOpen) {
        navMenu.style.flexDirection = 'column';
        navMenu.style.position = 'absolute';
        navMenu.style.top = '100%';
        navMenu.style.left = '0';
        navMenu.style.right = '0';
        navMenu.style.backgroundColor = 'var(--bg-surface)';
        navMenu.style.padding = '1.5rem';
        navMenu.style.boxShadow = 'var(--shadow-md)';
        navMenu.style.borderBottom = '1px solid var(--border-subtle)';
      }
    });
  }

  // 4. Interactive Celestial Horology Beat Error & Power Reserve Simulator
  const freqSlider = document.getElementById('horo-freq-slider');
  const torqueSlider = document.getElementById('horo-torque-slider');
  const freqVal = document.getElementById('horo-freq-val');
  const torqueVal = document.getElementById('horo-torque-val');

  const hzDisplay = document.getElementById('calc-hz');
  const amplitudeDisplay = document.getElementById('calc-amplitude');
  const coscDisplay = document.getElementById('calc-cosc');

  function calculateHorologyMetrics() {
    if (!freqSlider || !torqueSlider) return;

    const vph = parseInt(freqSlider.value, 10);
    const torque = parseInt(torqueSlider.value, 10);

    const hz = (vph / 7200).toFixed(1);

    let calName = "Modern Hi-Beat Standard";
    if (vph >= 36000) calName = "El Primero Ultra-High Frequency";
    else if (vph <= 18000) calName = "Historic Pocket Watch Low Inertia";
    else if (vph <= 21600) calName = "Traditional Swiss 3Hz Calibre";

    if (freqVal) freqVal.textContent = `${vph.toLocaleString()} vph (${hz} Hz — ${calName})`;
    if (torqueVal) torqueVal.textContent = `${torque}% Mainspring Torque Tension`;

    // Amplitude calculation (typical range 220° to 310°)
    const amplitude = Math.round(220 + (torque / 100) * 85);
    // Calculated Power Reserve Hours (inverse with frequency)
    const reserveHours = Math.round((72 * (torque / 100)) * (28800 / vph));
    // COSC Rate Variance (+/- sec/day)
    const cosc = ((100 - torque) * 0.04 - 1.2).toFixed(1);
    const sign = cosc > 0 ? `+${cosc}` : `${cosc}`;

    if (hzDisplay) hzDisplay.textContent = `${amplitude}° Balance Amplitude Angle`;
    if (amplitudeDisplay) amplitudeDisplay.textContent = `${reserveHours} Hours Autonomous Power`;
    if (coscDisplay) coscDisplay.textContent = `${sign} s/d (COSC Chronometer Grade)`;
  }

  if (freqSlider && torqueSlider) {
    freqSlider.addEventListener('input', calculateHorologyMetrics);
    torqueSlider.addEventListener('input', calculateHorologyMetrics);
    calculateHorologyMetrics();
  }

  // 5. In-Article Typography Scaler
  const fontDec = document.querySelector('.font-dec');
  const fontReset = document.querySelector('.font-reset');
  const fontInc = document.querySelector('.font-inc');
  const articleBody = document.querySelector('.article-body');

  let currentFontSize = 1.125;

  if (articleBody) {
    if (fontDec) {
      fontDec.addEventListener('click', () => {
        if (currentFontSize > 0.95) {
          currentFontSize -= 0.075;
          articleBody.style.fontSize = currentFontSize + 'rem';
        }
      });
    }
    if (fontReset) {
      fontReset.addEventListener('click', () => {
        currentFontSize = 1.125;
        articleBody.style.fontSize = '1.125rem';
      });
    }
    if (fontInc) {
      fontInc.addEventListener('click', () => {
        if (currentFontSize < 1.45) {
          currentFontSize += 0.075;
          articleBody.style.fontSize = currentFontSize + 'rem';
        }
      });
    }
  }

  // 6. Blog Archive Search & Live Filter Chips
  const searchInput = document.getElementById('horo-search-input');
  const filterChips = document.querySelectorAll('.filter-chip');
  const blogCards = document.querySelectorAll('.blog-card');

  function filterPosts() {
    const query = searchInput ? searchInput.value.toLowerCase().trim() : '';
    const activeChip = document.querySelector('.filter-chip.active');
    const selectedCategory = activeChip ? activeChip.getAttribute('data-category') : 'all';

    blogCards.forEach(card => {
      const cardCategory = card.getAttribute('data-category') || '';
      const text = card.textContent.toLowerCase();
      
      const matchesCategory = (selectedCategory === 'all' || cardCategory === selectedCategory);
      const matchesQuery = query === '' || text.includes(query);

      if (matchesCategory && matchesQuery) {
        card.style.display = 'flex';
      } else {
        card.style.display = 'none';
      }
    });
  }

  if (searchInput) {
    searchInput.addEventListener('input', filterPosts);
  }

  if (filterChips.length > 0) {
    filterChips.forEach(chip => {
      chip.addEventListener('click', () => {
        filterChips.forEach(c => c.classList.remove('active'));
        chip.classList.add('active');
        filterPosts();
      });
    });
  }

});
