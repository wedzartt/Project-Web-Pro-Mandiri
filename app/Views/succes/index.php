<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<section class="success-page">

    <div class="container">

        <div class="success-wrapper">

            <!-- ICON -->

            <div class="success-icon">

                ✓

            </div>

            <!-- HEADER -->

            <span class="success-badge">

                Payment Successful

            </span>

            <h1>

                Your Journey is Confirmed

            </h1>

            <p>

                Thank you for choosing ExploreID.
                Your booking has been successfully
                processed and is ready for your adventure.

            </p>

            <!-- BOOKING CARD -->

            <div class="booking-card">

                <div class="booking-row">

                    <span>
                        Booking Code
                    </span>

                    <strong>

                        adwad

                    </strong>

                </div>

                <div class="booking-row">

                    <span>
                        Destination
                    </span>

                    <strong>
                        dawdaa

                    </strong>

                </div>

                <div class="booking-row">

                    <span>
                        Travel Date
                    </span>

                    <strong>

                        sdaawd

                    </strong>

                </div>

                <div class="booking-row">

                    <span>
                        Travelers
                    </span>

                    <strong>

                        sdadwa

                        Person

                    </strong>

                </div>

                <div class="booking-row">

                    <span>
                        Payment Method
                    </span>

                    <strong>

                        adwda

                    </strong>

                </div>

                <div class="booking-row total">

                    <span>
                        Total Paid
                    </span>

                    <strong>

                        adwad

                    </strong>

                </div>

                <div class="success-actions">

                <a href="<?= base_url('my-journey') ?>"
                    class="btn-primary">

                    View My Journey

                </a>

                <a href="<?= base_url('/') ?>"
                    class="btn-secondary">

                    Back to Home

                </a>

            </div>

            </div>

        </div>

    </div>

</section>

<?= $this->endSection() ?>