<?php
$pageTitle = "My Account | NOVA FORM";
require_once __DIR__ . '/partials/header.php';
require_once __DIR__ . '/partials/navbar.php';
?>

<main class="py-5">
    <div class="container">
      
      <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center border-bottom pb-4 mb-4">
        <div>
          <span class="text-muted text-uppercase small fw-bold">Patron Portal</span>
          <h1 class="h2 fw-bold font-editorial mb-0">Welcome, Hamza Tariq</h1>
        </div>
        <div class="mt-3 mt-md-0">
          <a href="login.php" class="btn btn-sm btn-outline-danger"><i class="bi bi-box-arrow-right me-1"></i> Sign Out</a>
        </div>
      </div>

      <div class="row g-4">
        <!-- Sidebar Navigation -->
        <div class="col-lg-3">
          <div class="list-group list-group-flush border rounded-1 shadow-sm">
            <a href="account.php" class="list-group-item list-group-item-action active bg-dark text-white border-0 fw-semibold"><i class="bi bi-person me-2"></i> Account Overview</a>
            <a href="orders.php" class="list-group-item list-group-item-action"><i class="bi bi-bag-check me-2"></i> My Orders (4)</a>
            <a href="wishlist.php" class="list-group-item list-group-item-action"><i class="bi bi-heart me-2"></i> Saved Wishlist (3)</a>
            <a href="size-guide.php" class="list-group-item list-group-item-action"><i class="bi bi-rulers me-2"></i> Shoe Size Profile (EU 42)</a>
            <a href="contact.php" class="list-group-item list-group-item-action"><i class="bi bi-chat-dots me-2"></i> Customer Concierge</a>
          </div>
        </div>

        <!-- Account Main Details -->
        <div class="col-lg-9">
          
          <div class="row g-4 mb-4">
            <div class="col-md-4">
              <div class="bg-light p-3 border rounded-1">
                <div class="text-muted small text-uppercase">Total Footwear Orders</div>
                <div class="h3 fw-bold mb-0">4 Orders</div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="bg-light p-3 border rounded-1">
                <div class="text-muted small text-uppercase">Lifetime Spend</div>
                <div class="h3 fw-bold mb-0">PKR 58,996</div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="bg-light p-3 border rounded-1">
                <div class="text-muted small text-uppercase">Membership Tier</div>
                <div class="h3 fw-bold mb-0 text-warning">Gold Patron</div>
              </div>
            </div>
          </div>

          <!-- Personal Information Card -->
          <div class="bg-white p-4 border rounded-1 shadow-sm mb-4">
            <div class="d-flex justify-content-between align-items-center mb-3">
              <h5 class="fs-6 fw-bold text-uppercase mb-0">Personal Profile</h5>
              <button class="btn btn-sm btn-link text-dark" onclick="alert('Demo profile edit dialog');">Edit Profile</button>
            </div>
            <div class="row g-3 small">
              <div class="col-md-6">
                <span class="text-muted d-block">Full Name:</span>
                <strong>Hamza Tariq</strong>
              </div>
              <div class="col-md-6">
                <span class="text-muted d-block">Email Address:</span>
                <strong>hamza.tariq@gmail.com</strong>
              </div>
              <div class="col-md-6">
                <span class="text-muted d-block">Phone:</span>
                <strong>+92 300 8472911</strong>
              </div>
              <div class="col-md-6">
                <span class="text-muted d-block">Preferred Footwear Size:</span>
                <strong>EU 42 (Standard F Width)</strong>
              </div>
            </div>
          </div>

          <!-- Saved Address Card -->
          <div class="bg-white p-4 border rounded-1 shadow-sm mb-4">
            <div class="d-flex justify-content-between align-items-center mb-3">
              <h5 class="fs-6 fw-bold text-uppercase mb-0">Default Delivery Address</h5>
              <span class="badge bg-dark">Default</span>
            </div>
            <p class="small text-muted mb-0">
              House 42, Street 8, Sector J, Phase 5, DHA<br>
              Lahore, Punjab, 54000, Pakistan<br>
              Mobile: +92 300 8472911
            </p>
          </div>

          <!-- Recent Order Snippet -->
          <div class="bg-white p-4 border rounded-1 shadow-sm">
            <div class="d-flex justify-content-between align-items-center mb-3">
              <h5 class="fs-6 fw-bold text-uppercase mb-0">Most Recent Order</h5>
              <a href="orders.php" class="small text-dark fw-bold">View All &rarr;</a>
            </div>
            <div class="table-responsive">
              <table class="table table-sm align-middle mb-0 small">
                <thead>
                  <tr class="text-muted text-uppercase">
                    <th>Order #</th>
                    <th>Date</th>
                    <th>Product</th>
                    <th>Total</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><strong>#NF-88291</strong></td>
                    <td>28 Oct 2026</td>
                    <td>Regal Wholecut Oxford (EU 42)</td>
                    <td>PKR 14,999</td>
                    <td><span class="badge bg-warning text-dark">Processing</span></td>
                    <td><a href="order-details.php" class="btn btn-sm btn-outline-dark py-0">Details</a></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>

        </div>
      </div>

    </div>
  </main>

<?php require_once __DIR__ . '/partials/footer.php'; ?>
