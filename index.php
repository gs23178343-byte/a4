<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-0LY0HY7L01"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-0LY0HY7L01');
    </script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Premium Outerwear - Alpine expedition 800-fill down parkas, Gore-Tex Pro technical waterproof shells, and luxury trench coats.">
    <title>Premium Outerwear | Alpine Technical Shells & Parkas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- Top Announcement Bar -->
    <div class="top-bar">
        Complimentary Expedited Shipping & Waterproof Warranty | <span>Code: ALPINE2026</span>
    </div>

    <!-- Header Navigation (Sleek Compact Logo: 1.35rem) -->
    <header>
        <nav class="navbar">
            <a href="index.php" class="logo">Premium<span>Outerwear</span></a>
            <ul class="nav-links">
                <li><a href="index.php" class="active">Home</a></li>
                <li><a href="collections.html">Collections</a></li>
                <li><a href="blog/index.html">Gazette</a></li>
                <li><a href="privacy-policy.html">Privacy Policy</a></li>
                <li><a href="terms.html">Terms & Conditions</a></li>
            </ul>
            <button class="menu-btn" aria-label="Toggle Navigation">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-container">
            <div class="hero-content">
                <span class="hero-tag">Alpine Expedition &bull; 2026 Vault</span>
                <h1>Mastery of <span>All-Weather Protection</span> & Style</h1>
                <p>Engineered with 3-layer Gore-Tex Pro membranes, 800-fill power responsible goose down, and YKK AquaGuard storm closures for extreme weather environments.</p>
                <div class="hero-btns">
                    <a href="collections.html" class="btn btn-primary">Explore Outerwear Vault</a>
                    <a href="#weather" class="btn btn-secondary">Waterproof Gauge</a>
                </div>
            </div>
            <div class="hero-image-wrapper">
                <img src="img/hero_jacket.jpg" alt="Alpine Technical Waterproof Shell Jacket" loading="lazy">
                <div class="badge-overlay">
                    <h4>Storm-Shield Standard</h4>
                    <p>28,000mm Hydrostatic Head &bull; Lifetime Warranty</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Storm-Shield Waterproofing Interactive Section -->
    <section class="weather-section" id="weather">
        <div class="weather-card">
            <div class="weather-text">
                <h2>Hydrostatic Head & Insulation Workbench</h2>
                <p>Explore membrane water-column resistance (Hydrostatic Head rating) and down thermal insulation fill power for your next sub-zero expedition.</p>
                <div class="weather-controls">
                    <div class="input-group">
                        <label for="membrane-select">Selected Technical Membrane</label>
                        <select id="membrane-select">
                            <option value="goretex">Gore-Tex Pro 3-Layer Shell (28,000mm HH)</option>
                            <option value="pertex">Pertex Shield Air Ultralight (20,000mm HH)</option>
                            <option value="down800">800-Fill Power European Goose Down</option>
                        </select>
                    </div>
                    <div class="input-group">
                        <label for="rating-slider">Hydrostatic Water Column Rating (<span id="rating-val">28,000 mm</span>)</label>
                        <input type="range" id="rating-slider" min="10000" max="30000" step="2000" value="28000">
                    </div>
                </div>
            </div>
            <div class="weather-preview-box">
                <p style="font-size: 0.8rem; text-transform: uppercase; letter-spacing: 0.1em; color: var(--cyan-glow);">Waterproof Rating</p>
                <div class="weather-gauge" id="weather-gauge">28,000 mm HH</div>
                <p style="font-size: 0.85rem; color: #94A3B8;">Tested in Arctic Blizzard Conditions</p>
            </div>
        </div>
    </section>

    <!-- Catalog Section -->
    <section class="catalog">
        <div class="section-header">
            <span class="section-tag">Flagship Outerwear</span>
            <h2>The Technical Collection</h2>
            <p>High-performance shells, alpine parkas, and urban trench coats crafted to withstand extreme weather.</p>
        </div>
        <div class="product-grid">
            <div class="product-card">
                <div class="product-img">
                    <img src="img/jacket1.jpg" alt="Alpine Summit 800-Fill Goose Down Parka" loading="lazy">
                    <span class="product-tag">Alpine Parka</span>
                </div>
                <div class="product-info">
                    <h3>Alpine Summit 800-Fill Down Parka</h3>
                    <p>Sub-zero expedition parka with storm hood, baffle box down construction, and fleece lining.</p>
                    <div class="product-bottom">
                        <span class="price">$1,280</span>
                        <a href="collections.html" class="read-more">View Jacket &rarr;</a>
                    </div>
                </div>
            </div>

            <div class="product-card">
                <div class="product-img">
                    <img src="img/jacket2.jpg" alt="Gore-Tex Pro Waterproof Shell Jacket" loading="lazy">
                    <span class="product-tag">Tech Shell</span>
                </div>
                <div class="product-info">
                    <h3>Gore-Tex Pro Waterproof Shell Jacket</h3>
                    <p>3-layer breathable hardshell with taped seams, pit zippers, and helmet-compatible hood.</p>
                    <div class="product-bottom">
                        <span class="price">$890</span>
                        <a href="collections.html" class="read-more">View Jacket &rarr;</a>
                    </div>
                </div>
            </div>

            <div class="product-card">
                <div class="product-img">
                    <img src="img/jacket3.jpg" alt="Heritage Double-Breasted Cashmere Trench" loading="lazy">
                    <span class="product-tag">Trench Coat</span>
                </div>
                <div class="product-info">
                    <h3>Heritage Cashmere Trench Coat</h3>
                    <p>Double-breasted Italian wool-cashmere blend with rain shield flap and buffalo horn buttons.</p>
                    <div class="product-bottom">
                        <span class="price">$1,450</span>
                        <a href="collections.html" class="read-more">View Jacket &rarr;</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Benchmarks Section -->
    <section class="benchmarks">
        <div class="benchmarks-container">
            <div class="benchmark-card">
                <div class="benchmark-icon">&starf;</div>
                <h4>28,000mm Waterproof Rating</h4>
                <p>Guaranteed to keep you dry under torrential downpours and blowing arctic snowstorms.</p>
            </div>
            <div class="benchmark-card">
                <div class="benchmark-icon">&check;</div>
                <h4>YKK AquaGuard Zippers</h4>
                <p>Polyurethane-laminated water-repellent zippers that seal pocket contents from moisture.</p>
            </div>
            <div class="benchmark-card">
                <div class="benchmark-icon">&infin;</div>
                <h4>Lifetime Technical Warranty</h4>
                <p>Complimentary seam re-taping and DWR re-waterproofing restoration service for registered jackets.</p>
            </div>
        </div>
    </section>

    <!-- Gazette / Blog Highlights -->
    <section class="blog-section">
        <div class="section-header">
            <span class="section-tag">Outerwear Gazette</span>
            <h2>Technical Apparel Journal</h2>
            <p>Expert articles on DWR coatings, down fill power, trench history, and outerwear care.</p>
        </div>
        <div class="blog-grid">
            <div class="blog-card">
                <img src="img/craft.jpg" alt="Hydrostatic head waterproof ratings" loading="lazy">
                <div class="blog-card-content">
                    <div class="blog-meta">Textile Science &bull; July 2026</div>
                    <h3>Understanding Hydrostatic Head Waterproof Ratings</h3>
                    <p>How water column pressure tests measure technical membrane storm protection.</p>
                    <a href="blog/understanding-hydrostatic-head-waterproof-ratings-for-jackets.html" class="read-more">Read Gazette Article &rarr;</a>
                </div>
            </div>
            <div class="blog-card">
                <img src="img/journal1.jpg" alt="800 fill power down" loading="lazy">
                <div class="blog-card-content">
                    <div class="blog-meta">Insulation &bull; July 2026</div>
                    <h3>800-Fill Power Goose Down vs. Synthetic Insulation</h3>
                    <p>Evaluating warmth-to-weight ratios and compressibility for alpine parkas.</p>
                    <a href="blog/800-fill-power-goose-down-vs-synthetic-insulation-explained.html" class="read-more">Read Gazette Article &rarr;</a>
                </div>
            </div>
            <div class="blog-card">
                <img src="img/journal2.jpg" alt="Restoring DWR coating" loading="lazy">
                <div class="blog-card-content">
                    <div class="blog-meta">Maintenance &bull; July 2026</div>
                    <h3>How to Re-Wash and Restore DWR Waterproof Coatings</h3>
                    <p>Step-by-step technical wash instructions to reactivate water-beading performance.</p>
                    <a href="blog/how-to-re-wash-and-restore-dwr-waterproof-coatings.html" class="read-more">Read Gazette Article &rarr;</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer (Sleek Compact Logo: 1.35rem) -->
    <footer>
        <div class="footer-container">
            <div class="footer-col" style="flex: 1.5;">
                <a href="index.php" class="logo" style="margin-bottom: 2rem; display: inline-block;">Premium<span>Outerwear</span></a>
                <p>Premium Outerwear is an alpine expedition and technical clothing atelier crafting 3-layer waterproof shells, 800-fill down parkas, and luxury trench coats engineered for extreme weather.</p>
            </div>
            <div class="footer-col">
                <h4>Vault Links</h4>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="collections.html">Collections</a></li>
                    <li><a href="blog/index.html">Gazette / Journal</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Compliance & Legal</h4>
                <ul>
                    <li><a href="privacy-policy.html">Privacy Policy</a></li>
                    <li><a href="terms.html">Terms & Conditions</a></li>
                    <li><a href="disclaimer.html">Disclaimer</a></li>
                    <li><a href="cookies.html">Cookies Policy</a></li>
                </ul>
            </div>
            <div class="footer-col" style="flex: 1.2;">
                <h4>Atelier Headquarters</h4>
                <p><strong>Address:</strong><br>181 Mercer Street, New York, NY 10012, United States</p>
                <p><strong>Phone:</strong><br>+1-888-777-5845</p>
                <p><strong>Email:</strong><br>concierge@premiumouterwear.com</p>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2026 Premium Outerwear. All rights reserved.</p>
            <div class="footer-bottom-links">
                <a href="privacy-policy.html">Privacy Policy</a>
                <a href="terms.html">Terms</a>
                <a href="cookies.html">Cookies</a>
            </div>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>
