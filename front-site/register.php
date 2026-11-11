<?php
$pageTitle = "Create An Account | NOVA FORM";
$bodyClass = "bg-light";
require_once __DIR__ . '/partials/header.php';
require_once __DIR__ . '/partials/navbar.php';
?>

<main class="py-5">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-7 col-lg-6">
          <div class="bg-white p-4 p-md-5 border rounded-1 shadow-sm">
            <div class="text-center mb-4">
              <span class="badge bg-light text-dark border px-3 py-1 mb-2 text-uppercase small">New Client</span>
              <h2 class="h3 fw-bold font-editorial">Register For An Account</h2>
              <p class="text-muted small">Enjoy personalized shoe fitting consultations, order tracking, and private sale access.</p>
            </div>

            <form class="demo-notify-form">
              <div class="demo-alert alert alert-success d-none small">Account registered! You can now browse your dashboard.</div>

              <div class="row g-3 mb-3">
                <div class="col-md-6">
                  <label class="form-label-nova">First Name *</label>
                  <input type="text" class="form-control form-control-nova" placeholder="e.g. Daniyal" required>
                </div>
                <div class="col-md-6">
                  <label class="form-label-nova">Last Name *</label>
                  <input type="text" class="form-control form-control-nova" placeholder="e.g. Sheikh" required>
                </div>
              </div>

              <div class="mb-3">
                <label class="form-label-nova">Email Address *</label>
                <input type="email" class="form-control form-control-nova" placeholder="daniyal.sheikh@example.com" required>
              </div>

              <div class="mb-3">
                <label class="form-label-nova">Mobile Phone *</label>
                <input type="tel" class="form-control form-control-nova" placeholder="+92 300 0000000" required>
              </div>

              <div class="mb-3">
                <label class="form-label-nova">Create Password *</label>
                <input type="password" class="form-control form-control-nova" required>
              </div>

              <div class="form-check mb-4">
                <input class="form-check-input" type="checkbox" id="termsCheck" required checked>
                <label class="form-check-label small text-muted" for="termsCheck">
                  I agree to the <a href="about.php" class="text-dark">Terms of Service</a> & <a href="about.php" class="text-dark">Privacy Policy</a>
                </label>
              </div>

              <button type="submit" class="btn btn-nova-dark w-100 py-2 mb-3">Register Account</button>

              <div class="text-center small text-muted">
                Already registered? <a href="login.php" class="text-dark fw-bold">Sign In here</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </main>

<?php require_once __DIR__ . '/partials/footer.php'; ?>
