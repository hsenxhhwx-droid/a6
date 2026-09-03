<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AuraDialVale — Haute Horlogerie & Celestial Dial Atelier</title>
  <meta name="description" content="Discover handcrafted Haute Horlogerie, tourbillon complications, hand-turned guilloché dials, grand feu enamel, and chronometric precision at AuraDialVale.">
  <link rel="canonical" href="https://auradialvale.com/">
  
  <!-- Open Graph -->
  <meta property="og:title" content="AuraDialVale — Haute Horlogerie & Celestial Watchmaking">
  <meta property="og:description" content="Handcrafted celestial dials, tourbillon escapements, and grand complications.">
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://auradialvale.com/">
  <meta property="og:image" content="https://auradialvale.com/images/hero-celestial-watch.jpg">

  <!-- Stylesheet -->
  <link rel="stylesheet" href="style.css">

  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-0LY0HY7L01"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-0LY0HY7L01');
  </script>
</head>
<body>

  <div class="reading-progress-bar" aria-hidden="true"></div>

  <!-- Announcement Bar -->
  <aside class="top-bar">
    <div class="container top-bar-inner">
      <span>⏱️ AuraDialVale Atelier — Independent Haute Horlogerie, celestial guilloché dials & chronometric complications.</span>
      <div class="top-contact">
        <span>📍 181 Mercer Street, New York, NY 10012</span>
        <a href="tel:+18887775845">📞 +1-888-777-5845</a>
      </div>
    </div>
  </aside>

  <!-- Fixed Luxury Header -->
  <header class="site-header">
    <div class="container">
      <div class="nav-wrapper">
        <a href="index.php" class="brand-logo" aria-label="AuraDialVale Home">
          <div class="logo-badge">⏱️</div>
          <div class="brand-title-group">
            <span class="brand-name">AuraDialVale</span>
            <span class="brand-sub">Haute Horlogerie Atelier</span>
          </div>
        </a>

        <nav class="nav-menu" aria-label="Primary Navigation">
          <a href="index.php" class="nav-link active">Atelier</a>
          <a href="about.html" class="nav-link">Horology</a>
          <a href="blog.html" class="nav-link">Study Journal</a>
          <a href="#horology-simulator" class="nav-link">Escapement Engine</a>
          <a href="contact.html" class="nav-link">Concierge</a>
        </nav>

        <div class="nav-actions">
          <button class="theme-toggle-btn" aria-label="Toggle Lighting Theme" title="Toggle Theme">⏱️</button>
          <a href="contact.html" class="btn btn-gold" style="padding: 0.55rem 1.15rem; font-size: 0.82rem;">Acquire Timepiece</a>
          <button class="mobile-toggle" aria-label="Open Mobile Menu">☰</button>
        </div>
      </div>
    </div>
  </header>

  <main id="main-content">

    <!-- Hero Section -->
    <section class="hero-section">
      <div class="container">
        <div class="hero-grid">
          <div>
            <span class="hero-eyebrow">⏱️ The Art of Celestial Mechanical Time</span>
            <h1 class="hero-title">Mastering the Poetry of Gravity, Escapements & Radiant Dials</h1>
            <p class="hero-lead">
              AuraDialVale engineers bespoke Haute Horlogerie timepieces, flying tourbillons, and hand-turned rose engine guilloché dials. In our independent watchmaking sanctuary, we blend centuries of Vallée de Joux artisanal finishings with modern silicon antimagnetic escapement physics.
            </p>
            <div class="hero-btn-group">
              <a href="#horology-simulator" class="btn btn-gold">Simulate Escapement Rate</a>
              <a href="blog.html" class="btn btn-outline">Explore Horology Journal</a>
            </div>
            <div class="hero-stats-row">
              <div class="stat-item">
                <h4>28,800</h4>
                <p>Vibrations Per Hour (4Hz)</p>
              </div>
              <div class="stat-item">
                <h4>100%</h4>
                <p>Hand-Finished Anglage</p>
              </div>
              <div class="stat-item">
                <h4>-2 / +2</h4>
                <p>COSC Daily Chronometer Sec/Day</p>
              </div>
            </div>
          </div>

          <div>
            <div class="hero-card-media">
              <img src="images/hero-celestial-watch.jpg" alt="Macro detail of an intricate luxury mechanical chronograph watch with polished hands and sunburst dial" width="1200" height="800">
              <div class="hero-card-badge">
                <p>"A mechanical watch does not merely measure time—it captures the eternal celestial heartbeat of human curiosity and artistic dedication."</p>
                <span>— AuraDialVale Master Horologist</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Interactive Horology Beat Error & Amplitude Tool -->
    <section id="horology-simulator" class="tool-section">
      <div class="container">
        <div class="section-header">
          <span class="section-eyebrow">Chronometric Diagnostic Engine</span>
          <h2 class="section-title">Celestial Escapement & Power Reserve Simulator</h2>
          <p class="section-subtitle">Simulate balance wheel oscillation frequencies, mainspring barrel torque curves, and chronometric amplitude stability across 5 regulation positions.</p>
        </div>

        <div class="dial-tool-card">
          <div class="dial-slider-group">
            <div class="slider-control">
              <label for="horo-freq-slider">
                <span>Balance Wheel Beat Frequency</span>
                <span id="horo-freq-val" style="color: var(--accent-gold); font-family: var(--font-mono);">28,800 vph (4.0 Hz — Modern Hi-Beat Standard)</span>
              </label>
              <input type="range" id="horo-freq-slider" min="18000" max="36000" step="3600" value="28800" aria-label="Frequency">
            </div>

            <div class="slider-control">
              <label for="horo-torque-slider">
                <span>Mainspring Torque State</span>
                <span id="horo-torque-val" style="color: var(--accent-gold); font-family: var(--font-mono);">85% Mainspring Torque Tension</span>
              </label>
              <input type="range" id="horo-torque-slider" min="20" max="100" step="5" value="85" aria-label="Torque">
            </div>
          </div>

          <div class="dial-result-grid">
            <div class="result-box">
              <h4>Balance Wheel Amplitude</h4>
              <p id="calc-hz">292° Balance Amplitude Angle</p>
            </div>

            <div class="result-box">
              <h4>Autonomous Power Reserve</h4>
              <p id="calc-amplitude">61 Hours Autonomous Power</p>
            </div>

            <div class="result-box">
              <h4>Daily Chronometer Rate</h4>
              <p id="calc-cosc">-0.6 s/d (COSC Chronometer Grade)</p>
            </div>
          </div>

          <div style="margin-top: 1.5rem; padding: 1.25rem; background: var(--bg-primary); border: 1px solid var(--border-subtle); border-radius: var(--radius-sm); font-size: 0.92rem; color: var(--text-muted);">
            <strong>Isochronism Standard:</strong> Every AuraDialVale calibre is equipped with a free-sprung Breguet overcoil hairspring and variable-inertia micro-weights, eliminating poise errors and maintaining exact beat symmetry across thermal swings from -10°C to +60°C.
          </div>
        </div>
      </div>
    </section>

    <!-- Three Pillars Section -->
    <section class="pillars-section">
      <div class="container">
        <div class="section-header">
          <span class="section-eyebrow">Atelier Philosophy</span>
          <h2 class="section-title">The Three Pillars of AuraDialVale Watchmaking</h2>
          <p class="section-subtitle">Bridging classical astronomical complications, hand-turned guilloché dials, and Geneva Seal finishing.</p>
        </div>

        <div class="pillars-grid">
          <div class="pillar-card">
            <div class="pillar-icon-wrapper">🌌</div>
            <h3>1. Celestial Dial Metiers d'Art</h3>
            <p>Solid silver dials decorated with traditional hand-turned rose engine guilloché, 800°C Grand Feu vitreous enamel, and genuine cut aventurine starlight glass.</p>
            <a href="about.html" class="pillar-link">Discover Dials &rarr;</a>
          </div>

          <div class="pillar-card">
            <div class="pillar-icon-wrapper">⚙️</div>
            <h3>2. Gravity-Defying Complications</h3>
            <p>Single-axis and multi-axis flying tourbillons operating in ultra-light titanium cages that neutralize gravitational errors across vertical wrist positions.</p>
            <a href="about.html" class="pillar-link">Explore Tourbillons &rarr;</a>
          </div>

          <div class="pillar-card">
            <div class="pillar-icon-wrapper">✨</div>
            <h3>3. Poinçon de Genève Hand-Finishing</h3>
            <p>Every bridge, lever, and screw head is hand-beveled with gentian wood sticks, diamond paste mirror polish (polissage noir), and traditional Côtes de Genève stripes.</p>
            <a href="about.html" class="pillar-link">Learn Finishing &rarr;</a>
          </div>
        </div>
      </div>
    </section>

    <!-- Visual Horology Showcase Gallery -->
    <section class="tool-section" style="background: var(--bg-surface-alt); padding: 5rem 0;">
      <div class="container">
        <div class="section-header">
          <span class="section-eyebrow">Horological Gallery</span>
          <h2 class="section-title">The AuraDialVale Timepiece Collection</h2>
          <p class="section-subtitle">Iconic dress chronometers, skeletonized tourbillons, and celestial astronomical complications.</p>
        </div>

        <div class="pillars-grid">
          <div style="background: var(--bg-surface); border: 1px solid var(--border-subtle); border-radius: var(--radius-md); overflow: hidden; box-shadow: var(--shadow-sm);">
            <div style="height: 250px; overflow: hidden;">
              <img src="images/feature-tourbillon-movement.jpg" alt="Skeletonized Haute Horlogerie mechanical movement showing balance wheel and gear train" style="width: 100%; height: 100%; object-fit: cover;">
            </div>
            <div style="padding: 1.5rem;">
              <h3 style="font-size: 1.2rem; margin-bottom: 0.5rem; color: var(--text-main);">The Vale Flying Tourbillon Calibre</h3>
              <p style="font-size: 0.9rem; color: var(--text-muted); line-height: 1.6; margin-bottom: 0;">A 60-second flying tourbillon cage weighing just 0.28 grams, floating above an open-worked anthracite bridge architecture.</p>
            </div>
          </div>

          <div style="background: var(--bg-surface); border: 1px solid var(--border-subtle); border-radius: var(--radius-md); overflow: hidden; box-shadow: var(--shadow-sm);">
            <div style="height: 250px; overflow: hidden;">
              <img src="images/feature-guilloche-dial.jpg" alt="Watchmaker inspecting hand-turned guilloche dial with precision loupe" style="width: 100%; height: 100%; object-fit: cover;">
            </div>
            <div style="padding: 1.5rem;">
              <h3 style="font-size: 1.2rem; margin-bottom: 0.5rem; color: var(--text-main);">The Clous de Paris Celestial Dial</h3>
              <p style="font-size: 0.9rem; color: var(--text-muted); line-height: 1.6; margin-bottom: 0;">Hand-turned barleycorn and Clous de Paris guilloché engraved on solid 925 sterling silver with flame-blued Breguet hands.</p>
            </div>
          </div>

          <div style="background: var(--bg-surface); border: 1px solid var(--border-subtle); border-radius: var(--radius-md); overflow: hidden; box-shadow: var(--shadow-sm);">
            <div style="height: 250px; overflow: hidden;">
              <img src="images/feature-grand-complication.jpg" alt="Classic luxury 18k rose gold dress watch with moonphase subdial" style="width: 100%; height: 100%; object-fit: cover;">
            </div>
            <div style="padding: 1.5rem;">
              <h3 style="font-size: 1.2rem; margin-bottom: 0.5rem; color: var(--text-main);">The Astronomical Perpetual Calendar</h3>
              <p style="font-size: 0.9rem; color: var(--text-muted); line-height: 1.6; margin-bottom: 0;">Accurately tracks leap years, secular 400-year anomalies, and precision moonphase requiring correction only once every 122 years.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- 4-Stage Haute Horlogerie Creation Lifecycle -->
    <section class="tool-section" style="background: var(--bg-surface);">
      <div class="container">
        <div class="section-header">
          <span class="section-eyebrow">Artisanal Process</span>
          <h2 class="section-title">The Four Stages of Handcrafted Watchmaking</h2>
          <p class="section-subtitle">From initial blueprint kinematics to final 5-position chronometric timing certification.</p>
        </div>

        <div class="pillars-grid" style="grid-template-columns: repeat(4, 1fr); gap: 1.5rem;">
          <div class="pillar-card">
            <div class="pillar-icon-wrapper">1️⃣</div>
            <h3 style="font-size: 1.15rem;">Ébauche Milling</h3>
            <p style="font-size: 0.88rem;">Precision micro-milling of German silver (maillechort) baseplates and bridges with tolerances under 2 microns.</p>
          </div>

          <div class="pillar-card">
            <div class="pillar-icon-wrapper">2️⃣</div>
            <h3 style="font-size: 1.15rem;">Rose Engine Guilloché</h3>
            <p style="font-size: 0.88rem;">Hand-turning antique 19th-century rose engine lathes to carve light-refracting geometric wave patterns into solid silver blanks.</p>
          </div>

          <div class="pillar-card">
            <div class="pillar-icon-wrapper">3️⃣</div>
            <h3 style="font-size: 1.15rem;">Black Polish (Polissage Noir)</h3>
            <p style="font-size: 0.88rem;">Lapping steel balance bridges on zinc plates with diamond compound until they reflect either specular white or absolute black.</p>
          </div>

          <div class="pillar-card">
            <div class="pillar-icon-wrapper">4️⃣</div>
            <h3 style="font-size: 1.15rem;">Chronometer Regulation</h3>
            <p style="font-size: 0.88rem;">Over 360 hours of continuous multi-temperature timing audits across 5 physical positions to achieve certified COSC accuracy.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Calibre Specification & Finish Matrix -->
    <section class="tool-section" style="background: var(--bg-surface-alt);">
      <div class="container">
        <div class="section-header">
          <span class="section-eyebrow">Horological Technical Matrix</span>
          <h2 class="section-title">AuraDialVale In-House Calibres</h2>
          <p class="section-subtitle">Compare beat frequencies, escapement architectures, and power reserve metrics across our manufacture movements.</p>
        </div>

        <div style="background: var(--bg-surface); border: 1px solid var(--border-subtle); border-radius: var(--radius-md); overflow-x: auto; box-shadow: var(--shadow-sm); padding: 1.5rem;">
          <table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 0.92rem;">
            <thead>
              <tr style="border-bottom: 2px solid var(--border-subtle); color: var(--accent-gold);">
                <th style="padding: 1rem; font-family: var(--font-mono); font-size: 0.82rem; text-transform: uppercase;">Calibre Reference</th>
                <th style="padding: 1rem; font-family: var(--font-mono); font-size: 0.82rem; text-transform: uppercase;">Complication Suite</th>
                <th style="padding: 1rem; font-family: var(--font-mono); font-size: 0.82rem; text-transform: uppercase;">Escapement Architecture</th>
                <th style="padding: 1rem; font-family: var(--font-mono); font-size: 0.82rem; text-transform: uppercase;">Frequency & Reserve</th>
                <th style="padding: 1rem; font-family: var(--font-mono); font-size: 0.82rem; text-transform: uppercase;">Finish Standard</th>
              </tr>
            </thead>
            <tbody>
              <tr style="border-bottom: 1px solid var(--border-subtle);">
                <td style="padding: 1rem; font-weight: 700;">Calibre ADV-101 Celestial</td>
                <td style="padding: 1rem; color: var(--text-muted);">Hours, Minutes, Small Seconds, Moonphase</td>
                <td style="padding: 1rem; color: var(--text-muted);">Free-sprung Gyromax, Silicon Hairspring</td>
                <td style="padding: 1rem; color: var(--text-muted);">28,800 vph (4Hz) / 72 Hours</td>
                <td style="padding: 1rem; color: var(--accent-gold); font-weight: 700;">Côtes de Genève & Hand Anglage</td>
              </tr>
              <tr style="border-bottom: 1px solid var(--border-subtle);">
                <td style="padding: 1rem; font-weight: 700;">Calibre ADV-204 Tourbillon</td>
                <td style="padding: 1rem; color: var(--text-muted);">60-Second Flying Tourbillon, Power Reserve</td>
                <td style="padding: 1rem; color: var(--text-muted);">Titanium Cage, Breguet Overcoil</td>
                <td style="padding: 1rem; color: var(--text-muted);">21,600 vph (3Hz) / 96 Hours</td>
                <td style="padding: 1rem; color: var(--accent-gold); font-weight: 700;">Black Polish (Polissage Noir)</td>
              </tr>
              <tr style="border-bottom: 1px solid var(--border-subtle);">
                <td style="padding: 1rem; font-weight: 700;">Calibre ADV-308 Perpetual</td>
                <td style="padding: 1rem; color: var(--text-muted);">Astronomical Perpetual Calendar & Moon</td>
                <td style="padding: 1rem; color: var(--text-muted);">Twin-barrel, Micro-Rotor 22k Gold</td>
                <td style="padding: 1rem; color: var(--text-muted);">28,800 vph (4Hz) / 65 Hours</td>
                <td style="padding: 1rem; color: var(--accent-gold); font-weight: 700;">Geneva Seal (Poinçon de Genève)</td>
              </tr>
              <tr>
                <td style="padding: 1rem; font-weight: 700;">Calibre ADV-412 Chrono</td>
                <td style="padding: 1rem; color: var(--text-muted);">Column-Wheel Monopusher Chronograph</td>
                <td style="padding: 1rem; color: var(--text-muted);">Horizontal Clutch, Beveled Levers</td>
                <td style="padding: 1rem; color: var(--text-muted);">36,000 vph (5Hz) / 50 Hours</td>
                <td style="padding: 1rem; color: var(--accent-gold); font-weight: 700;">Circular Graining (Perlage)</td>
              </tr>
            </tbody>
          </table>
        </div>

        <div style="text-align: center; margin-top: 3rem;">
          <a href="about.html" class="btn btn-gold">Discover Our Swiss Heritage</a>
          <a href="blog.html" class="btn btn-outline" style="margin-left: 0.75rem;">Explore Full Horology Journal</a>
        </div>
      </div>
    </section>

    <!-- FAQ Section -->
    <section class="pillars-section" style="background: var(--bg-surface);">
      <div class="container">
        <div class="section-header">
          <span class="section-eyebrow">Horological Advisory</span>
          <h2 class="section-title">Mechanical Timepiece Care & Service FAQ</h2>
          <p class="section-subtitle">Expert guidance on winding rituals, antimagnetic protection, and factory overhaul intervals.</p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 1.5rem; max-width: 1040px; margin: 0 auto;">
          <div style="background: var(--bg-surface-alt); border: 1px solid var(--border-subtle); border-radius: var(--radius-sm); padding: 1.75rem;">
            <h4 style="font-size: 1.05rem; color: var(--accent-gold); margin-bottom: 0.5rem;">How often does a Haute Horlogerie mechanical watch require service?</h4>
            <p style="font-size: 0.92rem; color: var(--text-muted); line-height: 1.6; margin-bottom: 0;">We recommend a complete factory overhaul every 4 to 5 years. This includes complete disassembly, ultrasonic cleaning of all movement components, re-lubrication with microscopic synthetic horological oils, and multi-position regulation.</p>
          </div>

          <div style="background: var(--bg-surface-alt); border: 1px solid var(--border-subtle); border-radius: var(--radius-sm); padding: 1.75rem;">
            <h4 style="font-size: 1.05rem; color: var(--accent-gold); margin-bottom: 0.5rem;">What makes hand-turned rose engine guilloché unique?</h4>
            <p style="font-size: 0.92rem; color: var(--text-muted); line-height: 1.6; margin-bottom: 0;">Unlike stamped or laser-etched dials, authentic guilloché is carved manually using a hand-cranked geometric lathe. The cutting tool shears the silver with microscopic diamond-bright crispness that catches and reflects light from every angle.</p>
          </div>

          <div style="background: var(--bg-surface-alt); border: 1px solid var(--border-subtle); border-radius: var(--radius-sm); padding: 1.75rem;">
            <h4 style="font-size: 1.05rem; color: var(--accent-gold); margin-bottom: 0.5rem;">How does silicon technology protect movements from magnetism?</h4>
            <p style="font-size: 0.92rem; color: var(--text-muted); line-height: 1.6; margin-bottom: 0;">Silicon (Silinvar) hairsprings and escape wheels are completely non-ferrous and non-magnetic. They remain unaffected by laptops, phone cases, and magnetic fields exceeding 15,000 Gauss, eliminating the leading cause of timing rate inaccuracies.</p>
          </div>

          <div style="background: var(--bg-surface-alt); border: 1px solid var(--border-subtle); border-radius: var(--radius-sm); padding: 1.75rem;">
            <h4 style="font-size: 1.05rem; color: var(--accent-gold); margin-bottom: 0.5rem;">Can bespoke commissions be tailored with custom complications?</h4>
            <p style="font-size: 0.92rem; color: var(--text-muted); line-height: 1.6; margin-bottom: 0;">Yes! Our bespoke atelier program accepts a strictly limited number of private client commissions annually, creating unique hand-enameled dials, custom bridge engravings, and bespoke celestial star chart complications.</p>
          </div>
        </div>
      </div>
    </section>

  </main>

  <!-- Site Footer -->
  <footer class="site-footer">
    <div class="container">
      <div class="footer-grid">
        <div class="footer-brand">
          <div class="brand-logo" style="color: var(--accent-gold); margin-bottom: 0.5rem;">
            <div class="logo-badge">⏱️</div>
            <div class="brand-title-group">
              <span class="brand-name">AuraDialVale</span>
              <span class="brand-sub">Haute Horlogerie Atelier</span>
            </div>
          </div>
          <p>
            An independent Haute Horlogerie atelier dedicated to celestial guilloché dials, tourbillon complications, and Geneva Seal chronometric craftsmanship.
          </p>
        </div>

        <div>
          <h4 class="footer-heading">Timepiece Links</h4>
          <ul class="footer-links">
            <li><a href="index.php">Atelier Home</a></li>
            <li><a href="about.html">Horology Heritage</a></li>
            <li><a href="blog.html">Study Journal</a></li>
            <li><a href="#horology-simulator">Escapement Engine</a></li>
            <li><a href="contact.html">Private Concierge</a></li>
          </ul>
        </div>

        <div>
          <h4 class="footer-heading">Trust & Governance</h4>
          <ul class="footer-links">
            <li><a href="privacy.html">Privacy Policy</a></li>
            <li><a href="terms.html">Terms of Service</a></li>
            <li><a href="disclaimer.html">Horological Timing Disclaimer</a></li>
            <li><a href="cookies.html">Cookie Policy</a></li>
          </ul>
        </div>

        <div>
          <h4 class="footer-heading">Atelier Headquarters</h4>
          <p class="footer-contact-text">
            <strong>Atelier Desk:</strong><br>
            181 Mercer Street,<br>
            New York, NY 10012,<br>
            United States
          </p>
          <p class="footer-contact-text" style="margin-top: 0.75rem;">
            <strong>Inquiries:</strong><br>
            <a href="tel:+18887775845">+1-888-777-5845</a>
          </p>
        </div>
      </div>

      <div class="footer-bottom">
        <div>
          &copy; <?php echo date('Y'); ?> AuraDialVale Atelier. All rights reserved. The poetry of mechanical time.
        </div>
        <div class="footer-bottom-links">
          <a href="privacy.html">Privacy</a>
          <a href="terms.html">Terms</a>
          <a href="disclaimer.html">Disclaimer</a>
          <a href="cookies.html">Cookies</a>
        </div>
      </div>
    </div>
  </footer>

  <script src="script.js"></script>
</body>
</html>
