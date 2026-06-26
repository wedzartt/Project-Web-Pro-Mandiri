<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"   
          content="width=device-width, initial-scale=1.0">

    <title>Register | ExploreID</title>

    <link rel="stylesheet"
          href="<?= base_url('assets/css/auth/auth.css') ?>">

    <link rel="stylesheet"
          href="<?= base_url('assets/css/auth/register.css') ?>">

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
                    Create your account and start exploring Indonesia.
                </p>

            </div>

        </div>

        <!-- RIGHT -->

        <div class="auth-form-wrapper">

            <form action="<?= base_url('register') ?>"
                  method="post"
                  class="auth-form">

                <h2>Create Account</h2>

                <p class="subtitle">
                    Start your next adventure today.
                </p>

                <div class="form-group">

                    <label>Full Name</label>

                    <input
                        type="text"
                        name="name"
                        placeholder="Enter your full name"
                        required>

                </div>

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
                        placeholder="Create password"
                        required>

                </div>

                <div class="form-group">

                    <label>Confirm Password</label>

                    <input
                        type="password"
                        name="confirm_password"
                        placeholder="Confirm password"
                        required>

                </div>

                <button type="submit"
                        class="auth-btn">

                    Create Account

                </button>

                <p class="auth-link">

                    Already have an account?

                    <a href="<?= base_url('/login') ?>">
                        Login
                    </a>

                </p>

            </form>

        </div>

    </div>

</section>

</body>
</html>