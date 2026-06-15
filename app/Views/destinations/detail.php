<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<!-- HERO -->

<section class="destination-detail-hero">

    <img
        src="https://images.unsplash.com/photo-1544551763-46a013bb70d5"
        alt="Raja Ampat">

    <div class="hero-overlay">

        <div class="container">

            <span class="location">
                Papua Barat
            </span>

            <h1>
                Raja Ampat
            </h1>

            <p>
                Discover one of the world's
                most beautiful marine destinations.
            </p>

        </div>

    </div>

</section>
<!-- ACUAN YG DIATAS TIDAK DIUBAH -->

<section class="destination-detail">

    <div class="container">

        <div class="row g-4">

            <!-- LEFT CONTENT -->
            <div class="row justify-content-center">

                <!-- DESCRIPTION -->
                <div class="detail-section">

                    <h2>About Destination</h2>

                    <p>
                        Raja Ampat is one of Indonesia's most remarkable marine
                        destinations, located in Southwest Papua. Renowned for its
                        crystal-clear waters, vibrant coral reefs, and extraordinary
                        biodiversity, the archipelago is home to more than 1,500
                        small islands and some of the richest marine ecosystems on Earth.
                    </p>

                    <p>
                        Visitors can enjoy world-class snorkeling and diving experiences,
                        explore hidden lagoons, trek to panoramic viewpoints, and immerse
                        themselves in the unique culture of local communities. Raja Ampat
                        offers an unforgettable experience for nature lovers, photographers,
                        and adventure seekers alike.
                    </p>

                </div>

                <!-- BARU INFORMATION CARD -->
                <div class="detail-section">

                    <h2>Destination Information</h2>

                    <div class="info-grid">

                        <div class="info-card">
                            <h4>📍 Location</h4>
                            <p>West Papua, Indonesia</p>
                        </div>

                        <div class="info-card">
                            <h4>⏳ Duration</h4>
                            <p>3 Days 2 Nights</p>
                        </div>

                        <div class="info-card">
                            <h4>🌤 Best Season</h4>
                            <p>October - April</p>
                        </div>

                        <div class="info-card">
                            <h4>👥 Capacity</h4>
                            <p>Up to 20 Travelers</p>
                        </div>

                        <div class="info-card">
                            <h4>🚤 Activities</h4>
                            <p>Snorkeling, Island Hopping, Diving</p>
                        </div>

                        <div class="info-card">
                            <h4>⭐ Rating</h4>
                            <p>4.9 / 5.0</p>
                        </div>

                    </div>

                </div>
                <!-- BARU INFORMATION CARD -->

                <!-- GALLERY -->
                <div class="detail-section">

                    <h2>Gallery</h2>

                    <div class="gallery-grid">

                        <img src="https://picsum.photos/500/300?1">
                        <img src="https://picsum.photos/500/300?2">
                        <img src="https://picsum.photos/500/300?3">
                        <img src="https://picsum.photos/500/300?4">

                    </div>

                </div>

                <!-- HIGHLIGHTS -->
                <div class="detail-section">

                    <h2>Highlights</h2>

                    <ul class="highlight-list">

                        <li>✓ Explore pristine islands and hidden lagoons</li>
                        <li>✓ Experience world-class snorkeling spots</li>
                        <li>✓ Enjoy breathtaking sunrise and sunset views</li>
                        <li>✓ Capture unforgettable moments with stunning landscapes</li>
                        <li>✓ Discover local culture and traditions</li>

                    </ul>

                </div>
                <!-- HIGHLIGHTS -->

                <!-- FACILITIES -->
                <div class="detail-section">

                    <h2>Facilities</h2>

                    <div class="facility-list">

                        <div class="facility-item">✓ Tour Guide</div>
                        <div class="facility-item">✓ Hotel</div>
                        <div class="facility-item">✓ Transportation</div>
                        <div class="facility-item">✓ Snorkeling</div>
                        <div class="facility-item">✓ Documentation</div>
                        <div class="facility-item">✓ Meals</div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- AKHIR YANG AKAN DIUBAH -->


<!-- YANG AKAN DIUBAH MAIN CONTENT -->

<section class="booking-page">

    <div class="container">

        <div class="row g-4">

            <!-- LEFT SIDE -->
            <div class="col-lg-8">

                <div class="booking-form-card">

                    <div class="section-title">
                        <h2>Traveler Information</h2>
                        <p>Please fill in your details to complete the booking.</p>
                    </div>

                    <form action="<?= base_url('booking/summary') ?>" method="POST">

                        <?= csrf_field() ?>

                        <input
                            type="hidden"
                            name="destination_id"
                            value="<?= $id ?>">

                        <input
                            type="hidden"
                            name="destination_name"
                            value="Raja Ampat">

                        <input
                            type="hidden"
                            name="price"
                            value="1500000">

                        <div class="row g-4">

                            <div class="col-md-6">
                                <label class="booking-label">
                                    Full Name
                                </label>

                                <input
                                    type="text"
                                    class="booking-input"
                                    name="fullname"
                                    placeholder="Enter your full name">
                            </div>

                            <div class="col-md-6">
                                <label class="booking-label">
                                    Email Address
                                </label>

                                <input
                                    type="email"
                                    class="booking-input"
                                    name="email"
                                    placeholder="Enter your email">
                            </div>

                            <div class="col-md-6">
                                <label class="booking-label">
                                    Phone Number
                                </label>

                                <input
                                    type="text"
                                    class="booking-input"
                                    name="phone"
                                    placeholder="Enter phone number">
                            </div>

                            <div class="col-md-6">
                                <label class="booking-label">
                                    Travelers
                                </label>

                                <input
                                    type="number"
                                    class="booking-input"
                                    name="travelers"
                                    min="1"
                                    value="1">
                            </div>

                            <div class="col-md-6">
                                <label class="booking-label">
                                    Travel Date
                                </label>

                                <input
                                    type="date"
                                    class="booking-input"
                                    name="travel_date">
                            </div>

                            <div class="col-md-6">
                                <label class="booking-label">
                                    Estimated Total
                                </label>

                                <input
                                    type="text"
                                    class="booking-input"
                                    value="Rp 1.500.000"
                                    readonly>
                            </div>

                            <div class="col-12">
                                <label class="booking-label">
                                    Special Notes
                                </label>

                                <textarea
                                    class="booking-textarea"
                                    rows="5"
                                    placeholder="Tell us anything we should know..."
                                    name="special_notes">
                                
                                </textarea>
                            </div>

                            <div class="col-12">

                                <div class="booking-agreement">

                                    <input type="checkbox">

                                    <span>
                                        I agree to Terms & Conditions
                                    </span>

                                </div>

                            </div>

                            <div class="col-12">

                                <button
                                    class="btn-confirm-booking">

                                    Confirm Booking

                                </button>

                            </div>

                        </div>

                    </form>

                </div>

            </div>

            <!-- RIGHT SIDE -->
            <div class="col-lg-4">

                <div class="booking-summary sticky-top">

                    <img
                        src="https://images.unsplash.com/photo-1544551763-46a013bb70d5"
                        class="summary-image">

                    <h3>
                        Rp 1.500.000
                    </h3>

                    <span class="price-subtitle">
                        per person
                    </span>

                    <hr>

                    <h5>
                        Booking Summary
                    </h5>

                    <div class="summary-item">
                        <span>Destination</span>
                        <strong>Raja Ampat</strong>
                    </div>

                    <div class="summary-item">
                        <span>Travel Date</span>
                        <strong>Not Selected</strong>
                    </div>

                    <div class="summary-item">
                        <span>Travelers</span>
                        <strong>1 Traveler</strong>
                    </div>

                    <hr>

                    <div class="summary-total">

                        <span>Total</span>

                        <h4>
                            Rp 1.500.000
                        </h4>

                    </div>

                    <button class="btn-book">
                        Confirm Booking
                    </button>

                </div>

            </div>

        </div>

    </div>

</section>
<?= $this->endSection() ?>