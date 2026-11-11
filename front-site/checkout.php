<?php
$pageTitle = "Checkout | NOVA FORM Pakistan";
$pageDescription = "Secure checkout with Cash on Delivery, Bank Transfer, or Online Payment across Pakistan.";
require_once __DIR__ . '/partials/header.php';
require_once __DIR__ . '/partials/navbar.php';
?>

<main class="py-5">
    <div class="container">
      
      <div class="border-bottom pb-3 mb-4">
        <h1 class="h3 fw-bold font-editorial mb-1">Secure Checkout</h1>
        <p class="text-muted small mb-0">Complete your dispatch address and select your payment preference.</p>
      </div>

      <form id="demoCheckoutForm">
        <div class="row g-4 g-lg-5">
          
          <!-- Left: Customer & Address Information -->
          <div class="col-lg-7">
            
            <!-- Contact Info -->
            <div class="bg-white p-4 border rounded-1 shadow-sm mb-4">
              <h5 class="fw-bold text-uppercase fs-6 mb-3"><i class="bi bi-person me-2"></i> 1. Contact Information</h5>
              <div class="row g-3">
                <div class="col-md-6">
                  <label class="form-label-nova">Full Name *</label>
                  <input type="text" class="form-control form-control-nova" value="Hamza Tariq" required>
                </div>
                <div class="col-md-6">
                  <label class="form-label-nova">Mobile Phone (for delivery SMS) *</label>
                  <input type="tel" class="form-control form-control-nova" value="+92 300 8472911" required>
                </div>
                <div class="col-12">
                  <label class="form-label-nova">Email Address (for order tracking) *</label>
                  <input type="email" class="form-control form-control-nova" value="hamza.tariq@gmail.com" required>
                </div>
              </div>
            </div>

            <!-- Shipping Address -->
            <div class="bg-white p-4 border rounded-1 shadow-sm mb-4">
              <h5 class="fw-bold text-uppercase fs-6 mb-3"><i class="bi bi-geo-alt me-2"></i> 2. Delivery Address in Pakistan</h5>
              <div class="row g-3">
                <div class="col-12">
                  <label class="form-label-nova">House / Apartment / Office Number *</label>
                  <input type="text" class="form-control form-control-nova" value="House 42, Street 8" required>
                </div>
                <div class="col-12">
                  <label class="form-label-nova">Street Address / Sector / Phase *</label>
                  <input type="text" class="form-control form-control-nova" value="Sector J, Phase 5, DHA" required>
                </div>
                <div class="col-md-6">
                  <label class="form-label-nova">City *</label>
                  <select class="form-select form-select-nova" required>
                    <option selected>Lahore</option>
                    <option>Karachi</option>
                    <option>Islamabad</option>
                    <option>Rawalpindi</option>
                    <option>Faisalabad</option>
                    <option>Multan</option>
                    <option>Peshawar</option>
                    <option>Sialkot</option>
                    <option>Gujranwala</option>
                    <option>Quetta</option>
                    <option>Hyderabad</option>
                  </select>
                </div>
                <div class="col-md-6">
                  <label class="form-label-nova">Province *</label>
                  <select class="form-select form-select-nova" required>
                    <option selected>Punjab</option>
                    <option>Sindh</option>
                    <option>Khyber Pakhtunkhwa</option>
                    <option>Balochistan</option>
                    <option>Islamabad Capital Territory</option>
                  </select>
                </div>
                <div class="col-md-6">
                  <label class="form-label-nova">Postal Code</label>
                  <input type="text" class="form-control form-control-nova" value="54000">
                </div>
                <div class="col-md-6">
                  <label class="form-label-nova">Country</label>
                  <input type="text" class="form-control form-control-nova bg-light" value="Pakistan" readonly>
                </div>
                <div class="col-12">
                  <label class="form-label-nova">Delivery Instructions (Optional)</label>
                  <textarea class="form-control form-control-nova" rows="2" placeholder="e.g. Ring bell or call before arriving"></textarea>
                </div>
              </div>
            </div>

            <!-- Payment Method -->
            <div class="bg-white p-4 border rounded-1 shadow-sm mb-4">
              <h5 class="fw-bold text-uppercase fs-6 mb-3"><i class="bi bi-wallet2 me-2"></i> 3. Payment Method</h5>
              
              <div class="d-flex flex-column gap-3">
                <div class="form-check p-3 border rounded-1 bg-light">
                  <input class="form-check-input" type="radio" name="paymentMethod" id="payCod" checked>
                  <label class="form-check-label w-100 fw-bold" for="payCod">
                    <div class="d-flex justify-content-between align-items-center">
                      <span>Cash on Delivery (COD)</span>
                      <span class="badge bg-dark">Recommended</span>
                    </div>
                    <div class="small text-muted fw-normal mt-1">Pay with cash upon inspecting parcel from courier at your doorstep.</div>
                  </label>
                </div>

                <div class="form-check p-3 border rounded-1">
                  <input class="form-check-input" type="radio" name="paymentMethod" id="payBank">
                  <label class="form-check-label w-100 fw-bold" for="payBank">
                    <div class="d-flex justify-content-between align-items-center">
                      <span>Direct Bank Transfer (Meezan / HBL / Alfalah)</span>
                      <i class="bi bi-bank fs-5 text-muted"></i>
                    </div>
                    <div class="small text-muted fw-normal mt-1">Transfer directly to our corporate bank account. Share screenshot on WhatsApp.</div>
                  </label>
                </div>

                <div class="form-check p-3 border rounded-1">
                  <input class="form-check-input" type="radio" name="paymentMethod" id="payCard">
                  <label class="form-check-label w-100 fw-bold" for="payCard">
                    <div class="d-flex justify-content-between align-items-center">
                      <span>Credit / Debit Card (Visa / Mastercard) &bull; Demo UI</span>
                      <div class="d-flex gap-1 text-muted">
                        <i class="bi bi-credit-card-2-front fs-5"></i>
                      </div>
                    </div>
                    <div class="small text-muted fw-normal mt-1">Simulated card payment for demonstration. No actual charge will occur.</div>
                  </label>
                </div>
              </div>
            </div>

          </div>

          <!-- Right: Order Breakdown -->
          <div class="col-lg-5">
            <div class="order-summary-box sticky-top" style="top: 100px;">
              <h5 class="fw-bold text-uppercase fs-6 mb-3">Order Summary (2 Pairs)</h5>

              <!-- Item 1 -->
              <div class="d-flex align-items-center gap-3 mb-3 pb-3 border-bottom">
                <img src="https://images.unsplash.com/photo-1614252235316-8c857d38b5f4?q=80&w=800&auto=format&fit=crop" alt="Regal Wholecut Oxford" class="rounded-1" style="width: 60px; height: 60px; object-fit: cover;">
                <div class="flex-grow-1">
                  <h6 class="mb-0 fw-bold small">Regal Wholecut Oxford</h6>
                  <div class="text-muted" style="font-size: 0.76rem;">Size: EU 42 &bull; Nero Black &bull; Qty: 1</div>
                </div>
                <div class="fw-bold small">PKR 14,999</div>
              </div>

              <!-- Item 2 -->
              <div class="d-flex align-items-center gap-3 mb-3 pb-3 border-bottom">
                <img src="https://images.unsplash.com/photo-1533867617858-e7b97e060509?q=80&w=800&auto=format&fit=crop" alt="Sienna Burnished Penny Loafer" class="rounded-1" style="width: 60px; height: 60px; object-fit: cover;">
                <div class="flex-grow-1">
                  <h6 class="mb-0 fw-bold small">Sienna Burnished Penny Loafer</h6>
                  <div class="text-muted" style="font-size: 0.76rem;">Size: EU 43 &bull; Sienna Tan &bull; Qty: 1</div>
                </div>
                <div class="fw-bold small">PKR 12,499</div>
              </div>

              <!-- Calculation lines -->
              <div class="d-flex justify-content-between mb-2 small">
                <span class="text-muted">Subtotal</span>
                <span>PKR 27,498</span>
              </div>
              <div class="d-flex justify-content-between mb-2 small">
                <span class="text-muted">Nationwide Express Delivery</span>
                <span class="text-success fw-bold">FREE</span>
              </div>

              <hr class="my-3">

              <div class="d-flex justify-content-between align-items-baseline mb-4">
                <span class="fw-bold text-dark">Total Amount Due</span>
                <span class="fs-4 fw-bold text-dark">PKR 27,498</span>
              </div>

              <button type="submit" class="btn btn-nova-dark w-100 py-3 text-center mb-3">
                <i class="bi bi-shield-check me-2"></i> Complete Order
              </button>

              <div class="text-center small text-muted">
                By placing this order, you agree to NOVA FORM's 15-day exchange policy and authentic footwear guarantee.
              </div>
            </div>
          </div>

        </div>
      </form>

    </div>
  </main>

  <!-- Simulated Order Confirmed Modal -->
  <div class="modal fade" id="orderConfirmedModal" tabindex="-1" aria-hidden="true" data-bs-backdrop="static">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content border-0 shadow-lg text-center p-4">
        <div class="modal-body">
          <div class="rounded-circle bg-success bg-opacity-10 text-success d-inline-flex align-items-center justify-content-center mb-3" style="width: 72px; height: 72px;">
            <i class="bi bi-check-lg display-5"></i>
          </div>
          <h3 class="fw-bold font-editorial mb-2">Order Confirmed!</h3>
          <p class="text-muted small mb-3">
            Thank you, <strong>Hamza Tariq</strong>. Your demo order has been received and queued for dispatch.
          </p>
          <div class="p-3 bg-light rounded-1 border mb-4 text-start small">
            <div class="d-flex justify-content-between mb-1">
              <span class="text-muted">Order Reference:</span>
              <strong class="text-dark">#NF-88291</strong>
            </div>
            <div class="d-flex justify-content-between mb-1">
              <span class="text-muted">Payment Type:</span>
              <span>Cash on Delivery</span>
            </div>
            <div class="d-flex justify-content-between mb-1">
              <span class="text-muted">Delivery City:</span>
              <span>Lahore, DHA Phase 5</span>
            </div>
            <div class="d-flex justify-content-between">
              <span class="text-muted">Payable Amount:</span>
              <strong class="text-dark">PKR 27,498</strong>
            </div>
          </div>
          <div class="d-flex gap-2 justify-content-center">
            <a href="order-details.php" class="btn btn-nova-dark btn-sm">View Order Status</a>
            <a href="shop.php" class="btn btn-nova-outline btn-sm">Return to Shop</a>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php require_once __DIR__ . '/partials/footer.php'; ?>
