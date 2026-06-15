<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
        content="width=device-width, initial-scale=1.0">

    <title><?= $title ?? 'ExploreID' ?></title>

    <!-- Link Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css"
        rel="stylesheet">

    <!-- Link CSS GLOBAL -->
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">

    <!-- Link CSS untuk home -->
    <!-- 1.HERO -->
    <link rel="stylesheet" href="<?= base_url('assets/css/home/hero.css') ?>">

    <!-- 2.SEARCH DESTINATION -->
    <link rel="stylesheet" href="<?= base_url('assets/css/home/search_destination.css') ?>">

    <!-- 3. STATISTICS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/home/statistics.css') ?>">

    <!-- 4.EXPLORE REGION -->
    <link rel="stylesheet" href="<?= base_url('assets/css/home/explore_region.css') ?>">

    <!-- 5.POPULAR DESTINATION -->
    <link rel="stylesheet" href="<?= base_url('assets/css/home/popular_destination.css') ?>">

    <!-- 6.UPCOMING EVENTS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/home/upcoming_events.css') ?>">
    <!-- Link CSS untuk home-->

    <!-- Link CSS untuk layouts -->
    <!-- NAVBAR -->
    <link rel="stylesheet" href="<?= base_url('assets/css/layouts/navbar.css') ?>">

    <!-- FOOTER -->
    <link rel="stylesheet" href="<?= base_url('assets/css/layouts/footer.css') ?>">
    <!-- Link CSS untuk layouts -->

    <!-- Link CSS untuk destinations -->
    <!-- DESTINATION -->
    <link rel="stylesheet" href="<?= base_url('assets/css/destinations/destination.css') ?>">

    <!-- DETAIL DESTINATION -->
    <link rel="stylesheet" href="<?= base_url('assets/css/destinations/detail.css') ?>">

    <!-- BOOKING SUMMARY -->
    <link rel="stylesheet" href="<?= base_url('assets/css/destinations/booking.css') ?>">
    <!-- Link CSS untuk destinations -->

    <!-- Link CSS untuk payment -->
    <!-- PAYMENT -->
    <link rel="stylesheet" href="<?= base_url('assets/css/payment/payment.css') ?>">
    <!-- Link CSS untuk payment -->

    <link rel="stylesheet" href="<?= base_url('assets/css/succes/succes.css') ?>">


    <!-- Link CSS untuk destinations -->

    <link rel="stylesheet" href="<?= base_url('assets/css/journey/journey.css') ?>">



</head>

<body>

    <?= $this->include('layouts/navbar') ?>

    <?= $this->renderSection('content') ?>

    <?= $this->include('layouts/footer') ?>

    <!-- Link Pemanggilan Boostrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Link Pemanggilan Java Script -->
    <script src="<?= base_url('assets/js/script.js') ?>"></script>

</body>

</html>