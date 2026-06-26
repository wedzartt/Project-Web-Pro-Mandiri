<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>


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

<section class="summary-page">

    <div class="container">

        <div class="row g-4">

            <div class="col-lg-8">

                <div class="summary-card">

                    <h2>

                        Journey Information

                    </h2>

                    <div class="summary-grid">

                        <div>

                            <label>
                                Destination
                            </label>

                            <p>
                                Raja Ampat
                            </p>

                        </div>

                        <div>

                            <label>
                                Travel Date
                            </label>

                            <p>
                                Raja Ampat
                            </p>

                        </div>

                        <div>

                            <label>
                                Travelers
                            </label>

                            <p>
                                <?= esc($travelers) ?>
                                Person
                            </p>

                        </div>

                        <div>

                            <label>
                                Full Name
                            </label>

                            <p>
                                <?= esc($fullname) ?>
                            </p>

                        </div>

                        <div>

                            <label>
                                Email
                            </label>

                            <p>
                                <?= esc($email) ?>
                            </p>

                        </div>

                        <div>

                            <label>
                                Phone
                            </label>

                            <p>
                                <?= esc($phone) ?>
                            </p>

                        </div>

                    </div>

                </div>

                <div class="summary-card">

                    <h2>

                        Special Notes

                    </h2>

                    <p class="notes">

                        <?= esc($special_notes) ?>

                    </p>

                </div>

            </div>

            <div class="col-lg-4">

                <div class="price-card">


                    <h3>

                        Order Summary

                    </h3>

                    <div class="price-row">

                        <span>
                            Price
                        </span>

                        <span>
                            Rp
                            <?= number_format($total_price, 0, ',', '.') ?>
                        </span>

                    </div>

                    <div class="price-row">

                        <span>
                            Travelers
                        </span>

                        <span>
                            <?= $travelers ?>
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
    
                        <span>
                            Total
                        </span>

                        <h2>

                            Rp
                            <?= number_format(
                                $total_price,
                                0,
                                ',',
                                '.'
                            ) ?>

                        </h2>

                    </div>

                    <form
                        action="<?= base_url('payment') ?>"
                        method="POST">

                        <?= csrf_field() ?>

                        <button
                            class="btn-payment">

                            Continue Payment

                        </button>

                    </form>

                </div>

            </div>

        </div>

    </div>

</section>

<?= $this->endSection() ?>