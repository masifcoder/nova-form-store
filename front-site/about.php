<?php
$pageTitle = "About NOVA FORM | Heritage Men's Shoemaking";
require_once __DIR__ . '/partials/header.php';
require_once __DIR__ . '/partials/navbar.php';
?>

<main>
  <!-- About Hero -->
  <div class="py-5 bg-dark text-white text-center position-relative" style="background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('https://images.unsplash.com/photo-1533867617858-e7b97e060509?q=80&w=1600&auto=format&fit=crop') center/cover;">
    <div class="container py-5">
      <span class="badge bg-warning text-dark text-uppercase fw-bold px-3 py-1 mb-2">Artisan Philosophy</span>
      <h1 class="display-4 fw-bold font-editorial text-white mb-3">The Anatomy of Distinction</h1>
      <p class="lead text-white-50 mx-auto" style="max-width: 680px;">
        NOVA FORM was established to redefine luxury men's footwear in Pakistan. We merge traditional European shoemaking methods with our nation's historic leather tanning mastery.
      </p>
    </div>
  </div>

  <!-- The Workshop Story -->
  <section class="section-padding bg-white">
    <div class="container">
      <div class="row align-items-center g-5">
        <div class="col-lg-6">
          <span class="section-subtitle">Heritage & Origin</span>
          <h2 class="display-6 fw-bold font-editorial mb-3">Rooted in Craft, Built For Tomorrow</h2>
          <p class="text-muted" style="line-height: 1.8;">
            Every gentleman's journey begins from the ground up. In a world saturated with ephemeral fast-fashion footwear and glued synthetic soles, NOVA FORM stands as a sanctuary of slow, deliberate craftsmanship.
          </p>
          <p class="text-muted" style="line-height: 1.8;">
            Our shoes are crafted using only top 2% grade full-grain crust calfskin from tanneries in Sialkot, Kasur, and northern Italy. Each pair undergoes over 180 discrete artisanal hand processes: from rigorous hand-clicking and closing to hand-insetting cork fillers that mold to the arch of your foot over time.
          </p>
        </div>
        <div class="col-lg-6">
          <img src="https://images.unsplash.com/photo-1614252235316-8c857d38b5f4?q=80&w=900&auto=format&fit=crop" class="img-fluid rounded-1 shadow-sm" alt="Shoemaking Workshop">
        </div>
      </div>
    </div>
  </section>

  <!-- 3 Pillars of NOVA FORM -->
  <section class="section-padding" style="background-color: var(--bg-surface);">
    <div class="container">
      <div class="section-header text-center mx-auto" style="max-width: 600px;">
        <span class="section-subtitle">Our Commitments</span>
        <h2 class="section-title">The Three Pillars</h2>
      </div>

      <div class="row g-4">
        <div class="col-lg-4">
          <div class="bg-white p-4 border rounded-1 h-100">
            <i class="bi bi-gem text-warning fs-1 mb-3 d-inline-block"></i>
            <h4 class="font-editorial mb-2">Goodyear Welt Integrity</h4>
            <p class="text-muted small mb-0">
              Unlike glued footwear that ends up in landfills after a single season, our welted shoes can be resoled indefinitely, ensuring a pair that lasts decades.
            </p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="bg-white p-4 border rounded-1 h-100">
            <i class="bi bi-fingerprint text-warning fs-1 mb-3 d-inline-block"></i>
            <h4 class="font-editorial mb-2">Pakistani Cultural Heritage</h4>
            <p class="text-muted small mb-0">
              Through our Heritage line, we preserve centuries of Frontier artisanship in Peshawari and Balochi footwear with modern orthotic comfort layers.
            </p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="bg-white p-4 border rounded-1 h-100">
            <i class="bi bi-shield-check text-warning fs-1 mb-3 d-inline-block"></i>
            <h4 class="font-editorial mb-2">Unfiltered Transparency</h4>
            <p class="text-muted small mb-0">
              Transparent Pakistani pricing in PKR without intermediary markups. What you invest in is pure leather, master labor, and enduring quality.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/partials/footer.php'; ?>