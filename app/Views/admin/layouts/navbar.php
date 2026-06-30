<nav class="top-navbar">

    <div>

        <small>
            ADMIN PANEL
        </small>

        <h2>

            <?= ucfirst(
                $page ?? 'dashboard'
            ) ?>

        </h2>

    </div>

    <div class="admin-profile">

        <span>

            Hi,
            <?= session()->get('name') ?>

        </span>

        <div class="avatar">

            <?= strtoupper(
                substr(
                    session()->get('name'),
                    0,
                    1
                )
            ) ?>

        </div>

        <a
            href="<?= base_url('logout') ?>"
            class="logout-btn">

            Logout

        </a>

    </div>

</nav>