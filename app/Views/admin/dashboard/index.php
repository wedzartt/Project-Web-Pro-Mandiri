<?= $this->extend('admin/layouts/template') ?>

<?= $this->section('content') ?>

<div class="dashboard-wrapper">

    <!-- STATISTICS -->

    <div class="row g-4">

        <div class="col-lg-3">

            <div class="card-stat">

                <div class="stat-icon">
                    🧳
                </div>

                <div>

                    <h6>
                        Total Booking
                    </h6>

                    <h2>
                        <?= $total_booking ?? 0 ?>
                    </h2>

                </div>

            </div>

        </div>

        <div class="col-lg-3">

            <div class="card-stat revenue">

                <div class="stat-icon">
                    💰
                </div>

                <div>

                    <h6>
                        Total Revenue
                    </h6>

                    <h2>
                        Rp
                        <?= number_format(
                            $total_revenue ?? 0,
                            0,
                            ',',
                            '.'
                        ) ?>
                    </h2>

                </div>

            </div>

        </div>

        <div class="col-lg-3">

            <div class="card-stat user">

                <div class="stat-icon">
                    👤
                </div>

                <div>

                    <h6>
                        Total Users
                    </h6>

                    <h2>
                        <?= $total_user ?? 0 ?>
                    </h2>

                </div>

            </div>

        </div>

        <div class="col-lg-3">

            <div class="card-stat pending">

                <div class="stat-icon">
                    ⏳
                </div>

                <div>

                    <h6>
                        Pending
                    </h6>

                    <h2>
                        <?= $pending ?? 0 ?>
                    </h2>

                </div>

            </div>

        </div>

    </div>

    <!-- TABLE -->

    <div class="table-wrapper mt-5">

        <div class="table-title">

            Recent Transactions

        </div>

        <table class="table admin-table">

            <thead>

                <tr>

                    <th>
                        Booking Code
                    </th>

                    <th>
                        Customer
                    </th>

                    <th>
                        Destination
                    </th>

                    <th>
                        Payment
                    </th>

                    <th>
                        Status
                    </th>

                </tr>

            </thead>

            <tbody>

                <?php if(!empty($transactions)): ?>

                    <?php foreach($transactions as $row): ?>

                    <tr>

                        <td>

                            EXP-<?= str_pad(
                                $row['booking_id'],
                                5,
                                '0',
                                STR_PAD_LEFT
                            ) ?>

                        </td>

                        <td>

                            <?= $row['fullname'] ?>

                        </td>

                        <td>

                            <?= $row['destination_name'] ?>

                        </td>

                        <td>

                            <?= $row['payment_method'] ?>

                        </td>

                        <td>

                            <span class="status
                            <?= strtolower(
                                $row['payment_status']
                            ) ?>">

                                <?= $row['payment_status'] ?>

                            </span>

                        </td>

                    </tr>

                    <?php endforeach; ?>

                <?php endif; ?>

            </tbody>

        </table>

    </div>

</div>

<?= $this->endSection() ?>