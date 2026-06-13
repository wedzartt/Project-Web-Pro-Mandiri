<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<section class="summary-page">

    <div class="container">

        <!-- PAGE HEADER -->

        <div class="summary-header">

            <span class="summary-badge">
                Journey Summary
            </span>

            <h1>
                Review Your Booking
            </h1>

            <p>
                Please review your travel information before proceeding to payment.
            </p>

        </div>

        <div class="row g-4">

            <!-- LEFT CONTENT -->

            <div class="col-lg-8">

                <!-- DESTINATION -->

                <div class="summary-card">

                    <h3>
                        Destination Information
                    </h3>

                    <div class="summary-info">

                        <div>

                            <label>Destination</label>

                            <p>Raja Ampat</p>

                        </div>

                        <div>

                            <label>Location</label>

                            <p>Papua Barat</p>

                        </div>

                        <div>

                            <label>Travel Date</label>

                            <p>20 June 2026</p>

                        </div>

                        <div>

                            <label>Travelers</label>

                            <p>2 Person</p>

                        </div>

                    </div>

                </div>

                <!-- TRAVELER -->

                <div class="summary-card">

                    <h3>
                        Traveler Information
                    </h3>

                    <div class="summary-info">

                        <div>

                            <label>Full Name</label>

                            <p>Ariq Zafran</p>

                        </div>

                        <div>

                            <label>Email</label>

                            <p>ariq@email.com</p>

                        </div>

                        <div>

                            <label>Phone Number</label>

                            <p>08123456789</p>

                        </div>

                    </div>

                </div>

                <!-- NOTES -->

                <div class="summary-card">

                    <h3>
                        Special Notes
                    </h3>

                    <p class="notes">

                        Vegetarian meals preferred.

                    </p>

                </div>

            </div>

            <!-- RIGHT CONTENT -->

            <div class="col-lg-4">

                <div class="price-card">

                    <div class="booking-code">

                        BOOK-20260613-001

                    </div>

                    <h3>
                        Order Summary
                    </h3>

                    <hr>

                    <div class="price-row">

                        <span>
                            Price / Person
                        </span>

                        <span>
                            Rp 1.500.000
                        </span>

                    </div>

                    <div class="price-row">

                        <span>
                            Travelers
                        </span>

                        <span>
                            2
                        </span>

                    </div>

                    <div class="price-row">

                        <span>
                            Service Fee
                        </span>

                        <span>
                            Rp 50.000
                        </span>

                    </div>

                    <hr>

                    <div class="total-price">

                        <span>Total</span>

                        <h2>
                            Rp 3.050.000
                        </h2>

                    </div>

                    <a href="<?= base_url('/payment') ?>"
                       class="btn-payment">

                        Continue Payment

                    </a>

                    <a href="javascript:history.back()"
                       class="btn-edit">

                        Edit Booking

                    </a>

                </div>

            </div>

        </div>

    </div>

</section>

<?= $this->endSection() ?>