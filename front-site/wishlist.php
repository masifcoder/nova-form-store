<?php
$pageTitle = "Saved Wishlist | NOVA FORM";
require_once __DIR__ . '/partials/header.php';
require_once __DIR__ . '/partials/navbar.php';
?>

<main class="py-5">
    <div class="container">
      <div class="border-bottom pb-3 mb-4">
        <h1 class="h3 fw-bold font-editorial mb-1">Your Saved Footwear Wishlist</h1>
        <p class="text-muted small mb-0">Shoes and loafers curated for your personal shoe collection.</p>
      </div>

      <div class="row g-3 g-md-4">
        
          <div class="col-lg-4 col-md-6">
            <div class="product-card">
              <div class="product-img-wrap">
                <a href="product-details.php">
                  <img src="https://images.unsplash.com/photo-1533867617858-e7b97e060509?q=80&w=800&auto=format&fit=crop" alt="Sienna Burnished Penny Loafer">
                </a>
              </div>
              <div class="product-info">
                <div class="product-category">Loafers</div>
                <h3 class="product-name"><a href="product-details.php">Sienna Burnished Penny Loafer</a></h3>
                <div class="product-price-box mb-3">
                  <span class="current-price">PKR 12,499</span>
                </div>
                <div class="d-flex gap-2">
                  <button class="btn btn-nova-dark btn-sm flex-grow-1 btn-quick-add" data-product-title="Sienna Burnished Penny Loafer">
                    <i class="bi bi-bag-plus me-1"></i> Add To Bag
                  </button>
                  <button class="btn btn-outline-danger btn-sm" onclick="this.closest('.col-lg-4').remove(); alert('Removed from wishlist');">
                    <i class="bi bi-trash"></i>
                  </button>
                </div>
              </div>
            </div>
          </div>
        
          <div class="col-lg-4 col-md-6">
            <div class="product-card">
              <div class="product-img-wrap">
                <a href="product-details.php">
                  <img src="https://images.unsplash.com/photo-1560769629-975ec94e6a86?q=80&w=800&auto=format&fit=crop" alt="Kensington Braided Tassel Loafer">
                </a>
              </div>
              <div class="product-info">
                <div class="product-category">Loafers</div>
                <h3 class="product-name"><a href="product-details.php">Kensington Braided Tassel Loafer</a></h3>
                <div class="product-price-box mb-3">
                  <span class="current-price">PKR 13,200</span>
                </div>
                <div class="d-flex gap-2">
                  <button class="btn btn-nova-dark btn-sm flex-grow-1 btn-quick-add" data-product-title="Kensington Braided Tassel Loafer">
                    <i class="bi bi-bag-plus me-1"></i> Add To Bag
                  </button>
                  <button class="btn btn-outline-danger btn-sm" onclick="this.closest('.col-lg-4').remove(); alert('Removed from wishlist');">
                    <i class="bi bi-trash"></i>
                  </button>
                </div>
              </div>
            </div>
          </div>
        
          <div class="col-lg-4 col-md-6">
            <div class="product-card">
              <div class="product-img-wrap">
                <a href="product-details.php">
                  <img src="https://images.unsplash.com/photo-1543163521-1bf539c55dd2?q=80&w=800&auto=format&fit=crop" alt="Mayfair Double Monk Strap">
                </a>
              </div>
              <div class="product-info">
                <div class="product-category">Formal Shoes</div>
                <h3 class="product-name"><a href="product-details.php">Mayfair Double Monk Strap</a></h3>
                <div class="product-price-box mb-3">
                  <span class="current-price">PKR 15,499</span>
                </div>
                <div class="d-flex gap-2">
                  <button class="btn btn-nova-dark btn-sm flex-grow-1 btn-quick-add" data-product-title="Mayfair Double Monk Strap">
                    <i class="bi bi-bag-plus me-1"></i> Add To Bag
                  </button>
                  <button class="btn btn-outline-danger btn-sm" onclick="this.closest('.col-lg-4').remove(); alert('Removed from wishlist');">
                    <i class="bi bi-trash"></i>
                  </button>
                </div>
              </div>
            </div>
          </div>
        
      </div>
    </div>
  </main>

<?php require_once __DIR__ . '/partials/footer.php'; ?>
