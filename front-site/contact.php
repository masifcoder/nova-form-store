<?php
$pageTitle = "Contact & Ateliers | NOVA FORM Pakistan";
require_once __DIR__ . '/partials/header.php';
require_once __DIR__ . '/partials/navbar.php';
?>

<main class="py-5">
    <div class="container">
      
      <div class="border-bottom pb-3 mb-4">
        <h1 class="h2 fw-bold font-editorial mb-1">Client Concierge & Ateliers</h1>
        <p class="text-muted small mb-0">Reach our bespoke shoe fitting advisors or visit an atelier in Lahore, Karachi, or Islamabad.</p>
      </div>

      <div class="row g-5">
        <!-- Contact Form -->
        <div class="col-lg-6">
          <div class="bg-white p-4 p-md-5 border rounded-1 shadow-sm">
            <h3 class="fs-5 fw-bold font-editorial mb-3">Send a Message</h3>
            <p class="text-muted small mb-4">Have an inquiry regarding custom sizing, wedding orders, or bulk corporate gifting?</p>

            <form id="demoContactForm">
              <div class="mb-3">
                <label class="form-label-nova">Your Full Name *</label>
                <input type="text" class="form-control form-control-nova" placeholder="e.g. Asad Mehmood" required>
              </div>

              <div class="row g-3 mb-3">
                <div class="col-md-6">
                  <label class="form-label-nova">Email Address *</label>
                  <input type="email" class="form-control form-control-nova" placeholder="name@domain.com" required>
                </div>
                <div class="col-md-6">
                  <label class="form-label-nova">Phone Number</label>
                  <input type="tel" class="form-control form-control-nova" placeholder="+92 300 0000000">
                </div>
              </div>

              <div class="mb-3">
                <label class="form-label-nova">Subject</label>
                <select class="form-select form-select-nova">
                  <option selected>Shoe Size & Fitting Consultation</option>
                  <option>Exchange / Return Request</option>
                  <option>Groomsmen Wedding Collection Inquiry</option>
                  <option>Corporate Orders & Gifting</option>
                  <option>Other Question</option>
                </select>
              </div>

              <div class="mb-4">
                <label class="form-label-nova">Message *</label>
                <textarea class="form-control form-control-nova" rows="4" placeholder="How can our shoemakers assist you?" required></textarea>
              </div>

              <button type="submit" class="btn btn-nova-dark w-100 py-3">Transmit Message</button>
            </form>
          </div>
        </div>

        <!-- Ateliers Details -->
        <div class="col-lg-6">
          <div class="d-flex flex-column gap-4">
            
            <div class="p-4 bg-white border rounded-1 shadow-sm">
              <div class="d-flex align-items-center gap-2 mb-2 text-warning fs-5">
                <i class="bi bi-geo-alt"></i>
                <h5 class="text-dark fw-bold mb-0 fs-6">Lahore Flagship Atelier</h5>
              </div>
              <p class="text-muted small mb-2">92-B/II, MM Alam Road, Gulberg III, Lahore, Pakistan</p>
              <p class="text-muted small mb-0"><i class="bi bi-telephone me-1"></i> +92 (042) 3578-9921 &bull; Hours: 11:00 AM - 10:00 PM</p>
            </div>

            <div class="p-4 bg-white border rounded-1 shadow-sm">
              <div class="d-flex align-items-center gap-2 mb-2 text-warning fs-5">
                <i class="bi bi-geo-alt"></i>
                <h5 class="text-dark fw-bold mb-0 fs-6">Karachi Bukhari Atelier</h5>
              </div>
              <p class="text-muted small mb-2">Lane 4, Bukhari Commercial, DHA Phase VI, Karachi, Pakistan</p>
              <p class="text-muted small mb-0"><i class="bi bi-telephone me-1"></i> +92 (021) 3584-1102 &bull; Hours: 12:00 PM - 11:00 PM</p>
            </div>

            <div class="p-4 bg-white border rounded-1 shadow-sm">
              <div class="d-flex align-items-center gap-2 mb-2 text-warning fs-5">
                <i class="bi bi-geo-alt"></i>
                <h5 class="text-dark fw-bold mb-0 fs-6">Islamabad Blue Area Atelier</h5>
              </div>
              <p class="text-muted small mb-2">Shop 14, Beverly Centre, Jinnah Avenue, Blue Area, Islamabad</p>
              <p class="text-muted small mb-0"><i class="bi bi-telephone me-1"></i> +92 (051) 2871-449 &bull; Hours: 11:00 AM - 09:30 PM</p>
            </div>

            <div class="p-4 bg-light border rounded-1">
              <h6 class="fw-bold text-uppercase small mb-2"><i class="bi bi-headset me-2 text-warning"></i> National Customer Concierge</h6>
              <p class="text-muted small mb-1">WhatsApp Helpline: <strong>+92 300 8472911</strong></p>
              <p class="text-muted small mb-0">Email: <strong>concierge@novaformshoes.pk</strong></p>
            </div>

          </div>
        </div>

      </div>

    </div>
  </main>

<?php require_once __DIR__ . '/partials/footer.php'; ?>
