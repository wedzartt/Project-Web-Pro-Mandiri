<nav class="navbar navbar-expand-lg custom-navbar">
    <div class="container">

        <a class="navbar-brand logo" href="#">
            ExploreID
        </a>

        <button class="navbar-toggler"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse"
            id="navbarNav">

            <ul class="navbar-nav mx-auto">

                <li class="nav-item">
                    <a class="nav-link"
                        href="<?= base_url('/') ?>#home">
                        Home
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link"
                        href="<?= base_url('/destinations') ?>">
                        Destinations
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link"
                        href="<?= base_url('/') ?>#events">
                        Events
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link"
                        href="<?= base_url('/') ?>#about">
                        About
                    </a>
                </li>

            </ul>

            <a href="<?= base_url('/login') ?>" class="btn-login">
                Login
            </a>

        </div>
    </div>
</nav>