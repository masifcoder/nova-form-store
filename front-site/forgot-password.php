<?php
$pageTitle = "Reset Password | NOVA FORM";
$bodyClass = "bg-light";
require_once __DIR__ . '/partials/header.php';
require_once __DIR__ . '/partials/navbar.php';
?>

<main class="py-5">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6 col-lg-5">
          <div class="bg-white p-4 p-md-5 border rounded-1 shadow-sm text-center">
            <i class="bi bi-key display-5 text-muted mb-3 d-inline-block"></i>
            <h2 class="h3 fw-bold font-editorial mb-2">Password Recovery</h2>
            <p class="text-muted small mb-4">Enter your registered email address to receive password reset instructions.</p>

            <form class="demo-notify-form text-start">
              <div class="demo-alert alert alert-success d-none small">
                Demo recovery link sent! Check your inbox for the simulation reset email.
              </div>

              <div class="mb-3">
                <label class="form-label-nova">Email Address</label>
                <input type="email" class="form-control form-control-nova" placeholder="name@domain.com" required>
              </div>

              <button type="submit" class="btn btn-nova-dark w-100 py-2 mb-3">Send Reset Link</button>

              <div class="text-center small text-muted">
                Remembered your password? <a href="login.php" class="text-dark fw-bold">Back to Sign In</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </main>

<?php require_once __DIR__ . '/partials/footer.php'; ?>
