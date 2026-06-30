<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<!-- HERO -->

<section class="destination-hero">

    <div class="container">

        <div class="hero-wrapper">

            <span class="destination-badge">
                Explore Indonesia
            </span>

            <h1>
                Discover Amazing Destinations
            </h1>

            <p>
                Explore Indonesia's most beautiful destinations,
                from tropical beaches and majestic mountains
                to cultural heritage sites.
            </p>

        </div>

    </div>

</section>

<!-- FILTER -->

<section class="destination-filter">

    <div class="container">

        <div class="filter-box">

            <div class="row g-3">

                <div class="col-lg-4">

                    <input
                        type="text"
                        placeholder="Search destination...">

                </div>

                <div class="col-lg-3">

                    <select>

                        <option>
                            All Regions
                        </option>

                        <option>
                            Java
                        </option>

                        <option>
                            Sumatra
                        </option>

                        <option>
                            Bali
                        </option>

                        <option>
                            Papua
                        </option>

                    </select>

                </div>

                <div class="col-lg-3">

                    <select>

                        <option>
                            All Categories
                        </option>

                        <option>
                            Beach
                        </option>

                        <option>
                            Mountain
                        </option>

                        <option>
                            Culture
                        </option>

                    </select>

                </div>

                <div class="col-lg-2">

                    <button>
                        Search
                    </button>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- DESTINATIONS -->

<section class="destination-list">

    <div class="container">

        <div class="section-heading">

            <h2>
                Popular Destinations
            </h2>

            <p>
                Handpicked destinations for your next adventure.
            </p>

        </div>

        <div class="row g-4">


            <!-- 1 -->
            <div class="col-lg-4 col-md-6">

                <div class="destination-card">

                    <img
                        src="<?= base_url('pict/raja_ampat_pict.jpg') ?>"
                        alt="Raja Ampat">

                    <div class="destination-content">

                        <span class="location">
                            📍 Papua Barat
                        </span>

                        <h3>
                            Raja Ampat
                        </h3>

                        <p>
                            One of Indonesia's most beautiful
                            marine tourism destinations.
                        </p>

                        <div class="card-bottom">

                            <div>

                                <small>
                                    Starting From
                                </small>

                                <h5>
                                    Rp 1.500.000
                                </h5>

                            </div>

                            <a href="<?= base_url('destinations/1') ?>"
                                class="btn btn-primary mt-2">
                                View Detail
                            </a>

                        </div>

                    </div>

                </div>

            </div>

            <!-- 2 -->
            <div class="col-lg-4 col-md-6">

                <div class="destination-card">

                    <img src="<?= base_url('pict/mount_bromo_pict.jpg') ?>"
                        alt="Mount Bromo">

                    <div class="destination-content">

                        <span class="location">
                            📍 East Java
                        </span>

                        <h3>
                            Mount Bromo
                        </h3>

                        <p>
                            Experience Indonesia's most iconic sunrise.
                        </p>

                        <div class="card-bottom">

                            <div>

                                <small>
                                    Starting From
                                </small>

                                <h5>
                                    Rp 750.000
                                </h5>

                            </div>

                            <a href="<?= base_url('destinations/2') ?>"
                                class="btn btn-primary mt-2">
                                View Detail
                            </a>

                        </div>

                    </div>

                </div>

            </div>
            <!-- 2 -->


            <!-- 3 -->
            <div class="col-lg-4 col-md-6">

                <div class="destination-card">

                    <img
                        src="<?= base_url('pict/labuan_bajo_pict.jpg') ?>"
                        alt="Labuan Bajo">

                    <div class="destination-content">

                        <span class="location">
                            📍 Nusa Tenggara Timur
                        </span>

                        <h3>
                            Labuan Bajo
                        </h3>

                        <p>
                            Gateway to Komodo National Park.
                        </p>

                        <div class="card-bottom">

                            <div>

                                <small>
                                    Starting From
                                </small>

                                <h5>
                                    Rp 1.200.000
                                </h5>

                            </div>

                            <a href="<?= base_url('destinations/3') ?>"
                                class="btn btn-primary mt-2">
                                View Detail
                            </a>

                        </div>

                    </div>

                </div>

            </div>
            <!-- 3 -->



        </div>

    </div>

</section>

<!-- LOAD MORE -->

<section class="load-more-section">

    <div class="container text-center">

        <button class="load-more-btn">

            Load More Destinations

        </button>

    </div>

</section>

<?= $this->endSection() ?>