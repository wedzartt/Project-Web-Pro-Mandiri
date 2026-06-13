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

<!-- MAIN CONTENT -->

<section class="destination-detail">

    <div class="container">

        <div class="row">

            <!-- LEFT -->

            <div class="col-lg-8">

                <!-- DESCRIPTION -->

                <div class="detail-section">

                    <h2>
                        About Destination
                    </h2>

                    <p>
                        Raja Ampat is known for its
                        crystal-clear waters,
                        diverse marine life,
                        and breathtaking islands.
                    </p>

                </div>

                <!-- GALLERY -->

                <div class="detail-section">

                    <h2>
                        Gallery
                    </h2>

                    <div class="gallery-grid">

                        <img src="https://picsum.photos/500/300?1">

                        <img src="https://picsum.photos/500/300?2">

                        <img src="https://picsum.photos/500/300?3">

                        <img src="https://picsum.photos/500/300?4">

                    </div>

                </div>

                <!-- FACILITIES -->

                <div class="detail-section">

                    <h2>
                        Facilities
                    </h2>

                    <div class="facility-list">

                        <div>✓ Tour Guide</div>

                        <div>✓ Hotel</div>

                        <div>✓ Transportation</div>

                        <div>✓ Snorkeling</div>

                        <div>✓ Documentation</div>

                        <div>✓ Meals</div>

                    </div>

                </div>

            </div>

            <!-- RIGHT -->

            <div class="col-lg-4">

                <div class="booking-card">

                    <h3>
                        Rp 1.500.000
                    </h3>

                    <span>
                        per person
                    </span>

                    <form>

                        <label>
                            Departure Date
                        </label>

                        <input
                            type="date"
                            class="form-control">

                        <label>
                            Travelers
                        </label>

                        <input
                            type="number"
                            class="form-control"
                            min="1">

                        <label>
                            Notes
                        </label>

                        <textarea
                            class="form-control"
                            rows="4">
                        </textarea>

                        <button
                            type="submit"
                            class="btn-book">

                            Book Journey

                        </button>

                    </form>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- AWAL UNTUK BOOKING FORM -->
<section class="booking-section">

    <div class="container">

        <div class="booking-wrapper">

            <div class="booking-header">

                <span>
                    Start Your Adventure
                </span>

                <h2>
                    Book Your Journey
                </h2>

                <p>
                    Complete the form below to reserve your trip.
                </p>

            </div>

            <form action="#" method="POST">

                <div class="row g-4">

                    <!-- Destination -->

                    <div class="col-md-6">

                        <label class="booking-label">

                            Destination

                        </label>

                        <input
                            type="text"
                            class="booking-input"
                            value="Raja Ampat"
                            readonly>

                    </div>

                    <!-- Price -->

                    <div class="col-md-6">

                        <label class="booking-label">

                            Price Per Person

                        </label>

                        <input
                            type="text"
                            class="booking-input"
                            value="Rp 1.500.000"
                            readonly>

                    </div>

                    <!-- Date -->

                    <div class="col-md-6">

                        <label class="booking-label">

                            Travel Date

                        </label>

                        <input
                            type="date"
                            class="booking-input"
                            name="travel_date">

                    </div>

                    <!-- Travelers -->

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

                    <!-- Full Name -->

                    <div class="col-md-6">

                        <label class="booking-label">

                            Full Name

                        </label>

                        <input
                            type="text"
                            class="booking-input"
                            name="fullname">

                    </div>

                    <!-- Email -->

                    <div class="col-md-6">

                        <label class="booking-label">

                            Email

                        </label>

                        <input
                            type="email"
                            class="booking-input"
                            name="email">

                    </div>

                    <!-- Phone -->

                    <div class="col-md-6">

                        <label class="booking-label">

                            Phone Number

                        </label>

                        <input
                            type="text"
                            class="booking-input"
                            name="phone">

                    </div>

                    <!-- Total -->

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

                    <!-- Notes -->

                    <div class="col-12">

                        <label class="booking-label">

                            Special Notes

                        </label>

                        <textarea
                            rows="5"
                            class="booking-textarea"
                            name="notes"
                            placeholder="Tell us anything we should know..."></textarea>

                    </div>

                    <!-- Submit -->

                    <div class="col-12">

                        <button
                            type="submit"
                            class="btn-booking">

                            Book Journey

                        </button>

                    </div>

                </div>

            </form>

        </div>

    </div>

</section>

<?= $this->endSection() ?>