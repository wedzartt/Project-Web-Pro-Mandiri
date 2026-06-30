<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<section class="payment-page">

    <form
        action="<?= base_url('payment/process') ?>"
        method="POST">

        <?= csrf_field() ?>

        <input
            type="hidden"
            name="booking_id"
            value="<?= $booking['id'] ?>">

        <div class="container">

            <!-- HEADER -->

            <div class="payment-header">

                <span class="payment-badge">
                    Secure Payment
                </span>

                <h1>
                    Choose Payment Method
                </h1>

                <p>
                    Select your preferred payment method
                    to complete your booking.
                </p>

            </div>

            <div class="row g-4">

                <!-- LEFT -->

                <div class="col-lg-8">

                    <!-- BANK TRANSFER -->

                    <div class="payment-card">

                        <h3>Bank Transfer</h3>

                        <div class="payment-grid">

                            <label class="payment-option">

                                <input
                                    type="radio"
                                    name="payment_method"
                                    value="BCA"
                                    required>

                                <div class="option-content">

                                    <img src="https://upload.wikimedia.org/wikipedia/commons/5/5c/Bank_Central_Asia.svg">

                                    <span>BCA</span>

                                </div>

                            </label>

                            <label class="payment-option">

                                <input
                                    type="radio"
                                    name="payment_method"
                                    value="Mandiri">

                                <div class="option-content">

                                    <img src="https://upload.wikimedia.org/wikipedia/commons/a/ad/Bank_Mandiri_logo_2016.svg">

                                    <span>Mandiri</span>

                                </div>

                            </label>

                        </div>

                    </div>

                    <!-- E WALLET -->

                    <div class="payment-card">

                        <h3>E-Wallet</h3>

                        <div class="payment-grid">

                            <label class="payment-option">

                                <input
                                    type="radio"
                                    name="payment_method"
                                    value="DANA">

                                <div class="option-content">

                                    <img src="https://upload.wikimedia.org/wikipedia/commons/7/72/Logo_dana_blue.svg">

                                    <span>DANA</span>

                                </div>

                            </label>

                            <label class="payment-option">

                                <input
                                    type="radio"
                                    name="payment_method"
                                    value="GoPay">

                                <div class="option-content">

                                    <img src="https://upload.wikimedia.org/wikipedia/commons/0/00/Logo_Gopay.svg">

                                    <span>GoPay</span>

                                </div>

                            </label>

                            <label class="payment-option">

                                <input
                                    type="radio"
                                    name="payment_method"
                                    value="OVO">

                                <div class="option-content">

                                    <img src="https://upload.wikimedia.org/wikipedia/commons/e/eb/Logo_ovo_purple.svg">

                                    <span>OVO</span>

                                </div>

                            </label>

                            <label class="payment-option">

                                <input
                                    type="radio"
                                    name="payment_method"
                                    value="Shoppe Pay">

                                <div class="option-content">

                                    <img src="https://upload.wikimedia.org/wikipedia/commons/f/fe/Shopee.svg">

                                    <span>Shoppe Pay</span>

                                </div>

                            </label>

                        </div>

                    </div>

                </div>

                <!-- RIGHT -->

                <div class="col-lg-4">

                    <div class="order-card">

                        <div class="booking-code">
                            <?= $booking['id'] ?>
                        </div>

                        <h3>
                            Order Summary
                        </h3>

                        <div class="summary-row">

                            <span>Name</span>

                            <span>
                                <?= $booking['fullname'] ?>
                            </span>

                        </div>

                        <div class="summary-row">

                            <span>Travelers</span>

                            <span>
                                <?= $booking['travelers'] ?>
                            </span>

                        </div>

                        <div class="summary-row">

                            <span>Total</span>

                            <span class="total">

                                Rp
                                <?= number_format(
                                    $booking['total_price'],
                                    0,
                                    ',',
                                    '.'
                                ) ?>

                            </span>

                        </div>

                        <button
                            type="submit"
                            class="btn-payment">

                            Pay Now

                        </button>

                    </div>

                </div>

            </div>

        </div>

    </form>

</section>

<?= $this->endSection() ?>