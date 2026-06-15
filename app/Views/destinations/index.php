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

            <?php for ($i = 1; $i <= 9; $i++) : ?>

                <div class="col-lg-4 col-md-6">

                    <div class="destination-card">

                        <img
                            src="https://picsum.photos/600/400?random=<?= $i ?>"
                            alt="Destination">

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

                                <a href="<?= base_url('destinations/' . $i) ?>"
                                    class="btn btn-primary mt-2">
                                    View Detail
                                </a>

                            </div>

                        </div>

                    </div>

                </div>

            <?php endfor ?>

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