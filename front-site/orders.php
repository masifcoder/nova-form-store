<?php
$pageTitle = "My Orders | NOVA FORM";
require_once __DIR__ . '/partials/header.php';
require_once __DIR__ . '/partials/navbar.php';
?>

<main class="py-5">
    <div class="container">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-nova">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item"><a href="account.php">Account</a></li>
          <li class="breadcrumb-item active" aria-current="page">My Orders</li>
        </ol>
      </nav>

      <div class="border-bottom pb-3 mb-4">
        <h1 class="h3 fw-bold font-editorial mb-1">Order History</h1>
        <p class="text-muted small mb-0">Review past and ongoing footwear dispatches with delivery statuses.</p>
      </div>

      <div class="bg-white border rounded-1 shadow-sm overflow-hidden">
        <div class="table-responsive">
          <table class="table cart-table mb-0">
            <thead>
              <tr>
                <th>Order Number</th>
                <th>Placement Date</th>
                <th>Items Ordered</th>
                <th>Payment Method</th>
                <th>Total Paid</th>
                <th>Dispatch Status</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td data-label="Order"><strong class="text-dark">#NF-88291</strong></td>
                <td data-label="Date" class="text-muted small">28 Oct 2026</td>
                <td data-label="Items">Regal Wholecut Oxford &bull; Nero Black (EU 42)</td>
                <td data-label="Payment"><span class="badge bg-light text-dark border">Cash on Delivery</span></td>
                <td data-label="Total" class="fw-bold">PKR 14,999</td>
                <td data-label="Status"><span class="badge bg-warning text-dark"><i class="bi bi-hourglass-split me-1"></i> Processing</span></td>
                <td data-label="Action"><a href="order-details.php" class="btn btn-sm btn-nova-dark">View Details</a></td>
              </tr>
              <tr>
                <td data-label="Order"><strong class="text-dark">#NF-88102</strong></td>
                <td data-label="Date" class="text-muted small">14 Jul 2026</td>
                <td data-label="Items">Sienna Burnished Penny Loafer (EU 42)</td>
                <td data-label="Payment"><span class="badge bg-light text-dark border">Bank Transfer</span></td>
                <td data-label="Total" class="fw-bold">PKR 12,499</td>
                <td data-label="Status"><span class="badge bg-success"><i class="bi bi-check-circle me-1"></i> Delivered</span></td>
                <td data-label="Action"><a href="order-details.php" class="btn btn-sm btn-nova-dark">View Details</a></td>
              </tr>
              <tr>
                <td data-label="Order"><strong class="text-dark">#NF-87944</strong></td>
                <td data-label="Date" class="text-muted small">02 Apr 2026</td>
                <td data-label="Items">Khyber Heritage Peshawari Chappal (EU 42)</td>
                <td data-label="Payment"><span class="badge bg-light text-dark border">Cash on Delivery</span></td>
                <td data-label="Total" class="fw-bold">PKR 6,899</td>
                <td data-label="Status"><span class="badge bg-success"><i class="bi bi-check-circle me-1"></i> Delivered</span></td>
                <td data-label="Action"><a href="order-details.php" class="btn btn-sm btn-nova-dark">View Details</a></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </main>

<?php require_once __DIR__ . '/partials/footer.php'; ?>
