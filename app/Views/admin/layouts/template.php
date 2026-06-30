<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
        content="width=device-width, initial-scale=1.0">

    <title>Admin Panel</title>

    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <!-- BOOTSTRAP -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css"
        rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet"
        href="<?= base_url(
                    'assets/css/admin/dashboard.css'
                ) ?>">

    <!-- navbar -->
    <link rel="stylesheet"
        href="<?= base_url(
                    'assets/css/admin/navbar.css'
                ) ?>">

    <!-- sidebar -->
    <link rel="stylesheet"
        href="<?= base_url(
                    'assets/css/admin/sidebar.css'
                ) ?>">

    <!-- footer -->
    <link rel="stylesheet"
        href="<?= base_url(
                    'assets/css/admin/footer.css'
                ) ?>">

</head>

<body>

    <div class="admin-wrapper">

        <!-- Sidebar -->
        <?= $this->include('admin/layouts/sidebar') ?>

        <div class="main-content">

            <!-- Navbar -->
            <?= $this->include('admin/layouts/navbar') ?>

            <!-- Content -->
            <div class="content-area">

                <?= $this->renderSection('content') ?>

            </div>

            <!-- Footer -->
            <?= $this->include('admin/layouts/footer') ?>

        </div>

    </div>

</body>

</html>