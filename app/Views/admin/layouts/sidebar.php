<aside class="sidebar">

    <div class="sidebar-logo">

        <h1>
            ExploreID
        </h1>

        <span>
            ADMIN PANEL
        </span>

    </div>

    <ul class="sidebar-menu">

        <li>

            <a
                href="<?= base_url('admin/dashboard') ?>"
                class="active">

                Dashboard

            </a>

        </li>

        <li>

            <a
                href="<?= base_url('admin/booking') ?>">

                Booking

            </a>

        </li>

        <li>

            <a
                href="<?= base_url('admin/transaction') ?>">

                Transaction

            </a>

        </li>

        <li>

            <a
                href="<?= base_url('admin/wisata') ?>">

                Wisata

            </a>

        </li>

    </ul>

    <div class="sidebar-profile">

        <div class="avatar">

            <?= strtoupper(
                substr(
                    session()->get('name'),
                    0,
                    1
                )
            ) ?>

        </div>

        <div>

            <h6>
                <?= session()->get('name') ?>
            </h6>

            <span>
                Administrator
            </span>

        </div>

    </div>

</aside>