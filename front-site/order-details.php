<?php
$pageTitle = "Order Details #NF-88291 | NOVA FORM";
require_once __DIR__ . '/partials/header.php';
require_once __DIR__ . '/partials/navbar.php';
?>

<main class="py-5">
    <div class="container">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-nova">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item"><a href="account.php">Account</a></li>
          <li class="breadcrumb-item"><a href="orders.php">Orders</a></li>
          <li class="breadcrumb-item active" aria-current="page">NF-88291</li>
        </ol>
      </nav>

      <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center border-bottom pb-3 mb-4">
        <div>
          <span class="badge bg-warning text-dark mb-1 text-uppercase">Processing</span>
          <h1 class="h3 fw-bold font-editorial mb-0">Order Reference #NF-88291</h1>
          <div class="text-muted small">Placed on 28 Oct 2026 &bull; Payment: Cash on Delivery</div>
        </div>
        <div class="mt-3 mt-md-0">
          <button class="btn btn-sm btn-outline-dark" onclick="window.print();"><i class="bi bi-printer me-1"></i> Print Invoice</button>
        </div>
      </div>

      <!-- Status Timeline -->
      <div class="bg-white p-4 border rounded-1 shadow-sm mb-4">
        <h5 class="fs-6 fw-bold text-uppercase mb-4">Dispatch Progress Timeline</h5>
        <div class="row text-center g-3">
          <div class="col-md-3">
            <div class="text-success fs-3"><i class="bi bi-check-circle-fill"></i></div>
            <h6 class="fw-bold mb-0 small">Order Placed</h6>
            <span class="text-muted small" style="font-size: 0.75rem;">28 Oct, 10:15 AM</span>
          </div>
          <div class="col-md-3">
            <div class="text-success fs-3"><i class="bi bi-check-circle-fill"></i></div>
            <h6 class="fw-bold mb-0 small">Confirmed at Workshop</h6>
            <span class="text-muted small" style="font-size: 0.75rem;">28 Oct, 11:30 AM</span>
          </div>
          <div class="col-md-3">
            <div class="text-warning fs-3"><i class="bi bi-box-seam"></i></div>
            <h6 class="fw-bold mb-0 small">Handcrafted Packaging</h6>
            <span class="text-muted small" style="font-size: 0.75rem;">In Progress</span>
          </div>
          <div class="col-md-3">
            <div class="text-muted fs-3"><i class="bi bi-truck"></i></div>
            <h6 class="text-muted fw-bold mb-0 small">Dispatched via TCS</h6>
            <span class="text-muted small" style="font-size: 0.75rem;">Expected Tomorrow</span>
          </div>
        </div>
      </div>

      <div class="row g-4">
        <!-- Order Items -->
        <div class="col-lg-8">
          <div class="bg-white p-4 border rounded-1 shadow-sm mb-4">
            <h5 class="fs-6 fw-bold text-uppercase mb-3">Purchased Footwear</h5>
            <div class="d-flex align-items-center gap-3 py-2 border-bottom">
              <img src="https://images.unsplash.com/photo-1614252235316-8c857d38b5f4?q=80&w=800&auto=format&fit=crop" alt="Regal Wholecut Oxford" class="rounded-1" style="width: 72px; height: 72px; object-fit: cover;">
              <div class="flex-grow-1">
                <h6 class="fw-bold mb-1"><a href="product-details.php" class="text-dark">Regal Wholecut Oxford</a></h6>
                <div class="text-muted small">Size: EU 42 &bull; Color: Nero Black &bull; SKU: NF-OXF-01</div>
              </div>
              <div class="text-end">
                <div class="fw-bold">PKR 14,999</div>
                <div class="text-muted small">Qty: 1</div>
              </div>
            </div>
          </div>
        </div>

        <!-- Address and Breakdown -->
        <div class="col-lg-4">
          <div class="bg-white p-4 border rounded-1 shadow-sm mb-4">
            <h5 class="fs-6 fw-bold text-uppercase mb-3">Delivery Information</h5>
            <p class="small text-muted mb-0">
              <strong>Hamza Tariq</strong><br>
              Lahore, DHA Phase 5<br>
              Phone: +92 300 8472911<br>
              Email: hamza.tariq@gmail.com
            </p>
          </div>

          <div class="order-summary-box">
            <h5 class="fs-6 fw-bold text-uppercase mb-3">Cost Breakdown</h5>
            <div class="d-flex justify-content-between mb-2 small">
              <span class="text-muted">Item Subtotal</span>
              <span>PKR 14,999</span>
            </div>
            <div class="d-flex justify-content-between mb-2 small">
              <span class="text-muted">Courier Shipping</span>
              <span class="text-success fw-bold">FREE</span>
            </div>
            <hr class="my-2">
            <div class="d-flex justify-content-between fw-bold">
              <span>Total Payable</span>
              <span>PKR 14,999</span>
            </div>
          </div>
        </div>
      </div>

    </div>
  </main>

<?php require_once __DIR__ . '/partials/footer.php'; ?>
