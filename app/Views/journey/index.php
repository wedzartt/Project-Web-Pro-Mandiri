<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<section class="journey-page">

    <div class="container">

        <div class="journey-header">

            <span class="journey-badge">

                ExploreID

            </span>

            <h1>

                My Journey

            </h1>

            <p>

                Manage and track all your
                travel experiences.

            </p>

        </div>

        <!-- FILTER -->

        <div class="journey-filter">

            <button class="active">

                Upcoming

            </button>

            <button>

                Completed

            </button>

            <button>

                Cancelled

            </button>

        </div>

        <!-- JOURNEY CARD -->

        <div class="journey-card">

            <div class="journey-image">

                <img
                    src="https://images.unsplash.com/photo-1544551763-46a013bb70d5?auto=format&fit=crop&w=1200&q=90"
                    alt="Raja Ampat">

            </div>

            <div class="journey-content">

                <span class="location">

                    📍 Papua Barat

                </span>

                <h2>

                    Raja Ampat

                </h2>

                <div class="journey-info">

                    <div>

                        <label>

                            Travel Date

                        </label>

                        <p>

                            <?= $booking['travel_date']  ?>

                        </p>

                    </div>

                    <div>

                        <label>

                            Travelers

                        </label>

                        <p>

                            <?= $booking['travelers']  ?>

                        </p>

                    </div>

                    <div>

                        <label>

                            Total Price

                        </label>

                        <p>

                            <?= number_format($booking['total_price'],
                            0,
                            ',',
                            '.'
                            )?>

                        </p>

                    </div>

                    <div>

                        <label>

                            Booking Code

                        </label>

                        <p>

                            <?= $transaction['booking_id']  ?>

                        </p>

                    </div>

                </div>

                <div class="status paid">

                    <?= $transaction['payment_status']  ?>


                </div>

                <div class="journey-actions">

                    <a href="#"
                       class="btn-primary">

                        View Detail

                    </a>

                    <a href="#"
                       class="btn-secondary">

                        Download Ticket

                    </a>

                </div>

            </div>

        </div>

    </div>

</section>

<?= $this->endSection() ?>