<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Login | ExploreID</title>

    <link rel="stylesheet"
          href="<?= base_url('assets/css/auth/auth.css') ?>">

    <link rel="stylesheet"
          href="<?= base_url('assets/css/auth/login.css') ?>">

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap"
          rel="stylesheet">

</head>

<body>

<section class="auth-page">

    <div class="auth-container">

        <!-- LEFT -->

        <div class="auth-banner">

            <div class="overlay"></div>

            <div class="banner-content">

                <h1>ExploreID</h1>

                <p>
                    Discover Indonesia's Most Beautiful Destinations
                </p>

            </div>

        </div>

        <!-- RIGHT -->

        <div class="auth-form-wrapper">

            <form action="<?= base_url('/') ?>"
                  method="post"
                  class="auth-form">

                <h2>Welcome Back</h2>

                <p class="subtitle">
                    Sign in to continue your journey.
                </p>

                <div class="form-group">

                    <label>Email Address</label>

                    <input
                        type="email"
                        name="email"
                        placeholder="Enter your email"
                        required>

                </div>

                <div class="form-group">

                    <label>Password</label>

                    <input
                        type="password"
                        name="password"
                        placeholder="Enter your password"
                        required>

                </div>

                <button type="submit"
                        class="auth-btn"
                        ">
                    Login

                </button>

                <p class="auth-link">

                    Don't have an account?

                    <a href="<?= base_url('/register') ?>"
                    >
                        Create Account
                    </a>

                </p>

            </form>

        </div>

    </div>

</section>

</body>
</html>