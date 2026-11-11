<?php
$pageTitle = "Sign In | NOVA FORM Customer Portal";
$bodyClass = "bg-light";
require_once __DIR__ . '/partials/header.php';
require_once __DIR__ . '/partials/navbar.php';
?>

<main class="py-5">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6 col-lg-5">
          <div class="bg-white p-4 p-md-5 border rounded-1 shadow-sm">
            <div class="text-center mb-4">
              <span class="badge bg-light text-dark border px-3 py-1 mb-2 text-uppercase small">Client Portal</span>
              <h2 class="h3 fw-bold font-editorial">Sign In To NOVA FORM</h2>
              <p class="text-muted small">Access your saved footwear sizes, orders, and wishlist.</p>
            </div>

            <form class="demo-notify-form">
              <div class="demo-alert alert alert-success d-none small">Demo sign in verified! Welcome back, Hamza.</div>

              <div class="mb-3">
                <label class="form-label-nova">Email Address</label>
                <input type="email" class="form-control form-control-nova" value="hamza.tariq@gmail.com" required>
              </div>

              <div class="mb-3">
                <div class="d-flex justify-content-between">
                  <label class="form-label-nova">Password</label>
                  <a href="forgot-password.php" class="small text-muted text-decoration-underline">Forgot?</a>
                </div>
                <input type="password" class="form-control form-control-nova" value="secret123" required>
              </div>

              <div class="form-check mb-4">
                <input class="form-check-input" type="checkbox" id="rememberMe" checked>
                <label class="form-check-label small text-muted" for="rememberMe">Remember my device</label>
              </div>

              <button type="submit" class="btn btn-nova-dark w-100 py-2 mb-3">Sign In</button>
              
              <div class="text-center small text-muted mb-3">
                Don't have an account yet? <a href="register.php" class="text-dark fw-bold">Create Account</a>
              </div>

              <div class="border-top pt-3 text-center">
                <a href="account.php" class="btn btn-sm btn-outline-secondary w-100">
                  <i class="bi bi-person-circle me-1"></i> Quick Demo: Open My Account Page
                </a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </main>

<?php require_once __DIR__ . '/partials/footer.php'; ?>
