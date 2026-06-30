<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>


<!-- SECTION 1 — HERO -->
<section class="hero" id="home">
    <div class="container">

        <div class="row align-items-center">

            <div class="col-lg-6">

                <div class="hero-content">

                    <span class="badge-custom">
                        ✈ Discover Indonesia
                    </span>

                    <h1>
                        Travel Beyond
                        <br>
                        Expectations
                    </h1>

                    <p>
                        Explore hidden paradises, unforgettable adventures,
                        and breathtaking destinations across Indonesia.
                    </p>

                    <div class="hero-buttons">

                        <a href="#" class="btn-explore">
                            Explore Now
                        </a>

                        <a href="#" class="btn-watch">
                            Watch Video
                        </a>

                    </div>

                </div>

            </div>

            <div class="col-lg-6">

                <div class="hero-card">

                    <img src="<?= base_url('pict/raja_ampat_pict.jpg') ?>"
                         alt="Raja Ampat">

                    <div class="hero-card-content">

                        <span>Featured Destination</span>

                        <h3>Raja Ampat</h3>

                        <p>Papua Barat</p>

                        <div class="rating">
                            ⭐ 4.9 Rating
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>
</section>
<!-- SECTION 1 — HERO -->

<!-- SECTION 2 — SEARCH DESTINATION -->
<section class="search-section">

    <div class="container">

        <div class="search-box">

            <div class="row align-items-center">

                <div class="col-md-4">
                    <input type="text"
                           placeholder="Where do you want to go?">
                </div>

                <div class="col-md-3">
                    <input type="date">
                </div>

                <div class="col-md-3">
                    <input type="number"
                           placeholder="Travelers">
                </div>

                <div class="col-md-2">
                    <button>
                        Search
                    </button>
                </div>

            </div>

        </div>

    </div>

</section>
<!-- SECTION 2 — SEARCH DESTINATION -->

<!-- SECTION 3 — STATISTICS -->
<section class="stats">

    <div class="container">

        <div class="row g-4">

            <div class="col-md-3">
                <div class="stat-card">
                    <h2>50+</h2>
                    <p>Destinations</p>
                </div>
            </div>

            <div class="col-md-3">
                <div class="stat-card">
                    <h2>15+</h2>
                    <p>Regions</p>
                </div>
            </div>

            <div class="col-md-3">
                <div class="stat-card">
                    <h2>4.9</h2>
                    <p>Ratings</p>
                </div>
            </div>

            <div class="col-md-3">
                <div class="stat-card">
                    <h2>20K+</h2>
                    <p>Travelers</p>
                </div>
            </div>

        </div>

    </div>
</section>
<!-- SECTION 3 — STATISTICS -->

<!-- SECTION 4 — EXPLORE REGION -->
<section class="regions">

    <div class="container">

        <div class="section-title">

            <h2>Explore Indonesia</h2>

            <p>
                Choose your favorite region
            </p>

        </div>

        <div class="row g-4">

            <div class="col-md-4">
                <div class="region-card">Java</div>
            </div>

            <div class="col-md-4">
                <div class="region-card">Sumatra</div>
            </div>

            <div class="col-md-4">
                <div class="region-card">Papua</div>
            </div>

            <div class="col-md-4">
                <div class="region-card">Bali</div>
            </div>

            <div class="col-md-4">
                <div class="region-card">Sulawesi</div>
            </div>

            <div class="col-md-4">
                <div class="region-card">Kalimantan</div>
            </div>

        </div>

    </div>

</section>
<!-- SECTION 4 — EXPLORE REGION -->

<!-- SECTION 5 - POPULAR DESTINATION -->
<section class="popular-destination">

    <div class="container">

        <div class="section-title text-center mb-5">

            <h2>Popular Destinations</h2>

            <p>
                Discover Indonesia's most loved destinations
            </p>

        </div>

        <div class="row g-4">

            <!-- Raja Ampat -->

            <div class="col-lg-4">

                <div class="destination-card">

                    <img src="<?= base_url('pict/raja_ampat_pict.jpg') ?>"
                         alt="Raja Ampat">

                    <div class="destination-content">

                        <div class="destination-location">

                            📍 Papua Barat

                        </div>

                        <h3>
                            Raja Ampat
                        </h3>

                        <p>
                            One of the world's best marine tourism destinations.
                        </p>

                        <div class="destination-bottom">

                            <div>

                                <span class="price-label">
                                    Starting From
                                </span>

                                <h5>
                                    Rp 1.500.000
                                </h5>

                            </div>

                            <a href="<?= base_url('destinations/1') ?>" class="btn-destination">
                                Explore
                            </a>

                        </div>

                    </div>

                </div>

            </div>

            <!-- Bromo -->

            <div class="col-lg-4">

                <div class="destination-card">

                    <img src="<?= base_url('pict/mount_bromo_pict.jpg') ?>"
                         alt="Bromo">

                    <div class="destination-content">

                        <div class="destination-location">

                            📍 East Java

                        </div>

                        <h3>
                            Mount Bromo
                        </h3>

                        <p>
                            Experience Indonesia's most iconic sunrise.
                        </p>

                        <div class="destination-bottom">

                            <div>

                                <span class="price-label">
                                    Starting From
                                </span>

                                <h5>
                                    Rp 750.000
                                </h5>

                            </div>

                            <a href="<?= base_url('destinations/2') ?>" class="btn-destination">
                                Explore
                            </a>

                        </div>

                    </div>

                </div>

            </div>

            <!-- Labuan Bajo -->

            <div class="col-lg-4">

                <div class="destination-card">

                    <img src="<?= base_url('pict/labuan_bajo_pict.jpg') ?>"
                         alt="Labuan Bajo">

                    <div class="destination-content">

                        <div class="destination-location">

                            📍 Nusa Tenggara Timur

                        </div>

                        <h3>
                            Labuan Bajo
                        </h3>

                        <p>
                            Gateway to Komodo National Park.
                        </p>

                        <div class="destination-bottom">

                            <div>

                                <span class="price-label">
                                    Starting From
                                </span>

                                <h5>
                                    Rp 1.200.000
                                </h5>

                            </div>

                            <a href="<?= base_url('destinations/3') ?>" class="btn-destination">
                                Explore
                            </a>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>
<!-- SECTION 5 - POPULAR DESTINATION -->

<!-- SECTION 6 — UPCOMING EVENTS -->
<section class="events" id="events">

    <div class="container">

        <div class="section-title text-center mb-5">

            <h2>Upcoming Events</h2>

            <p>
                Experience Indonesia's culture and festivals
            </p>

        </div>

        <div class="row g-4">

            <div class="col-lg-4">

                <div class="event-card">

                    <img src="<?= base_url('pict/bali_arts_festival_pict.jpg') ?>">

                    <div class="event-content">

                        <span class="event-date">
                            12 July 2026
                        </span>

                        <h4>
                            Bali Arts Festival
                        </h4>

                        <p>
                            Bali, Indonesia
                        </p>

                        <a href="#">
                            Learn More →
                        </a>

                    </div>

                </div>

            </div>

            <div class="col-lg-4">

                <div class="event-card">

                    <img src="<?= base_url('pict/dieng_pict.jpg') ?>"
                         alt="Festival">

                    <div class="event-content">

                        <span class="event-date">
                            20 August 2026
                        </span>

                        <h4>
                            Dieng Culture Festival
                        </h4>

                        <p>
                            Central Java
                        </p>

                        <a href="#">
                            Learn More →
                        </a>

                    </div>

                </div>

            </div>

            <div class="col-lg-4">

                <div class="event-card">

                    <img src="<?= base_url('pict/danau_toba_pict.png') ?>"
                         alt="Festival">

                    <div class="event-content">

                        <span class="event-date">
                            5 September 2026
                        </span>

                        <h4>
                            Danau Toba Festival
                        </h4>

                        <p>
                            North Sumatra
                        </p>

                        <a href="#">
                            Learn More →
                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>
<!-- SECTION 6 — UPCOMING EVENTS -->
 
<?= $this->endSection() ?>