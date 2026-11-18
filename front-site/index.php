<?php
$pageTitle = "NOVA FORM | Luxury Men's Footwear & Handcrafted Leather Shoes Pakistan";
$pageDescription = "Discover NOVA FORM luxury men's footwear. Goodyear-welted Oxfords, burnished Penny Loafers, handcrafted Peshawari Chappals, and sleek leather sneakers. Cash on Delivery across Pakistan.";
require_once __DIR__ . '/partials/header.php';
require_once __DIR__ . '/partials/navbar.php';
require_once __DIR__ . "/config/db.php";


// load categories
// check category is already added or not (verify duplication)
$q = "SELECT * FROM categories";
$result = mysqli_query($conn, $q);
$categories = mysqli_fetch_all($result, MYSQLI_ASSOC);


// best seller products
$q2 = "SELECT products.name, products.original_price_pkr, products.image_url, products.price_pkr,  categories.name as category_name FROM products
  INNER JOIN categories on products.category_id = categories.id
 WHERE products.status = 'Active' LIMIT 8";
$result2 = mysqli_query($conn, $q2);
$best_sellers = mysqli_fetch_all($result2, MYSQLI_ASSOC);


// new arrival products
$q3 = "SELECT products.*, categories.name as category_name FROM products 
     INNER JOIN categories on products.category_id = categories.id
     WHERE products.status = 'Active' AND products.is_new = 1 LIMIT 4";

$result3 = mysqli_query($conn, $q3);
$new_arrivals = mysqli_fetch_all($result3, MYSQLI_ASSOC);


// new arrival products
$q4 = "SELECT * FROM `website_content`";

$result4 = mysqli_query($conn, $q4);
$cms_data = mysqli_fetch_assoc($result4);


// echo "<pre>";
// print_r($cms_data);
// echo "</pre>";
// exit;



?>

<main>
  <!-- Section 1: Hero Banner -->
  <section class="hero-section">
    <img src="https://images.unsplash.com/photo-1614252235316-8c857d38b5f4?q=80&w=1600&auto=format&fit=crop" class="hero-bg-img" alt="Luxury Handcrafted Men's Footwear">
    <div class="container position-relative z-2">
      <div class="row align-items-center">
        <div class="col-lg-7">
          <div class="hero-content text-start">
            <span class="hero-subtitle"><?php echo $cms_data['hero_subtitle'] ?></span>
            <h1 class="hero-title font-editorial"><?php echo $cms_data['hero_headline'] ?></h1>
            <p class="lead text-white-50 mb-4" style="max-width: 540px;">
              <?php echo $cms_data['hero_lead'] ?>
            </p>
            <div class="d-flex flex-wrap gap-3 hero-buttons">
              <a href="shop.php" class="btn btn-nova-dark" style="background: #ffffff; color: #111; border-color: #fff;">
                Shop Collection <i class="bi bi-arrow-right"></i>
              </a>
              <a href="shop.php" class="btn btn-nova-outline" style="color: #fff; border-color: rgba(255,255,255,0.4);">
                Explore Best Sellers
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 2: Shop by Category -->
  <section class="section-padding bg-white">
    <div class="container">
      <div class="section-header text-center mx-auto" style="max-width: 600px;">
        <span class="section-subtitle">Curated Silhouettes</span>
        <h2 class="section-title">Shop by Category</h2>
        <p class="section-desc mx-auto">Explore distinctive footwear styles crafted for formal boardrooms, festive galas, and relaxed urban living.</p>
      </div>

      <div class="row g-4">

        <?php foreach ($categories as $category) { ?>
          <div class="col-lg-4 col-md-6">
            <a href="category.php" class="category-card">
              <div class="category-img-wrap">
                <img src="<?php echo $category['image_url'] ?>" alt="Formal Shoes">
                <div class="category-overlay">
                  <span class="category-count">5 Masterpieces</span>
                  <h3 class="category-name font-editorial" style="color:white"><?php echo $category['name'] ?></h3>
                  <span class="category-link-text">Explore Category <i class="bi bi-arrow-right"></i></span>
                </div>
              </div>
            </a>
          </div>
        <?php } ?>


      </div>
    </div>
  </section>

  <!-- Section 3: Best Sellers -->
  <section class="section-padding" style="background-color: var(--bg-secondary);">
    <div class="container">
      <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-end mb-4">
        <div>
          <span class="section-subtitle">Acclaimed Footwear</span>
          <h2 class="section-title mb-0">Our Best Sellers</h2>
        </div>
        <div class="mt-3 mt-md-0">
          <a href="shop.php" class="btn btn-sm btn-nova-outline">View All Models <i class="bi bi-arrow-right ms-1"></i></a>
        </div>
      </div>

      <div class="row g-3 g-md-4">

        <?php foreach ($best_sellers as $product) { ?>
          <div class="col-lg-3 col-md-6 col-6 col-product-grid">

            <div class="product-card">
              <div class="product-img-wrap">
                <div class="product-badges">
                  <span class="badge-sale">Sale</span>

                </div>
                <button class="product-wishlist-btn" title="Add to Wishlist" data-product-id="NF-1001">
                  <i class="bi bi-heart"></i>
                </button>
                <a href="product-details.php">
                  <img src="http://localhost:8081/<?php echo $product['image_url'] ?>" alt="Regal Wholecut Oxford" loading="lazy">
                </a>
                <div class="product-quick-actions">
                  <button class="quick-view-btn btn-quick-add" data-product-title="Regal Wholecut Oxford">
                    <i class="bi bi-bag-plus me-1"></i> Quick Add
                  </button>
                </div>
              </div>
              <div class="product-info">
                <div class="product-category"><?php echo $product['category_name'] ?></div>
                <h3 class="product-name">
                  <a href="product-details.php"><?php echo $product['name'] ?></a>
                </h3>
                <div class="product-rating">
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <span class="count">(38)</span>
                </div>
                <div class="product-price-box">
                  <span class="current-price">PKR <?php echo $product['price_pkr'] ?></span>
                  <span class="original-price">PKR <?php echo $product['original_price_pkr'] ?></span>
                </div>
                <div class="product-colors">
                  <span class="color-dot" style="background-color: #141414;" title="Available Color"></span><span class="color-dot" style="background-color: #4a2c11;" title="Available Color"></span>
                </div>
              </div>
            </div>

          </div>
        <?php } ?>

      </div>
    </div>
  </section>

  <!-- Section 4: Promotional Banner -->
  <section class="container my-5">
    <div class="promo-banner">
      <div class="row g-0 align-items-center">
        <div class="col-lg-6">
          <div class="promo-content">
            <span class="badge bg-warning text-dark text-uppercase fw-bold px-3 py-1 mb-3">Seasonal Privilege</span>
            <h2 class="display-6 fw-bold mb-3 font-editorial text-white"><?php echo $cms_data['promo_headline'] ?></h2>
            <p class="text-white-50 mb-4" style="line-height: 1.8;">
              Constructed with 200+ meticulous hand steps using durable closed-channel soles. Enjoy complimentary cedar shoe trees with every Black Label pair this season.
            </p>
            <div class="d-flex flex-wrap gap-3">
              <a href="product-details.php" class="btn btn-warning fw-bold text-dark text-uppercase px-4 py-2">
                Discover The Oxford
              </a>
              <a href="shop.php" class="btn btn-outline-light text-uppercase px-4 py-2">
                Browse Sale
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <img src="https://images.unsplash.com/photo-1543163521-1bf539c55dd2?q=80&w=1000&auto=format&fit=crop" class="promo-banner-img" alt="Goodyear Welted Shoes">
        </div>
      </div>
    </div>
  </section>

  <!-- Section 5: New Arrivals -->
  <section class="section-padding bg-white">
    <div class="container">
      <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-end mb-4">
        <div>
          <span class="section-subtitle">Fresh From The Workshop</span>
          <h2 class="section-title mb-0">New Arrivals</h2>
        </div>
        <div class="mt-3 mt-md-0">
          <a href="shop.php" class="btn btn-sm btn-nova-outline">Explore Catalog <i class="bi bi-arrow-right ms-1"></i></a>
        </div>
      </div>

      <div class="row g-3 g-md-4">
        <?php foreach ($new_arrivals as $new) { ?>
          <div class="col-lg-3 col-md-6 col-6 col-product-grid">

            <div class="product-card">
              <div class="product-img-wrap">
                <div class="product-badges">
                  <?php if ($new['is_sale'] == 1) { ?>
                    <span class="badge-sale">Sale</span>
                  <?php } ?>
                  <span class="badge-new">New</span>
                </div>
                <button class="product-wishlist-btn" title="Add to Wishlist" data-product-id="NF-1002">
                  <i class="bi bi-heart"></i>
                </button>
                <a href="product-details.php">
                  <img src="https://images.unsplash.com/photo-1533867617858-e7b97e060509?q=80&w=800&auto=format&fit=crop" alt="Sienna Burnished Penny Loafer" loading="lazy">
                </a>
                <div class="product-quick-actions">
                  <button class="quick-view-btn btn-quick-add" data-product-title="Sienna Burnished Penny Loafer">
                    <i class="bi bi-bag-plus me-1"></i> Quick Add
                  </button>
                </div>
              </div>
              <div class="product-info">
                <div class="product-category"><?php echo $new['category_name'] ?></div>
                <h3 class="product-name">
                  <a href="product-details.php"><?php echo $new['name'] ?></a>
                </h3>
                <div class="product-rating">
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <span class="count">(52)</span>
                </div>
                <div class="product-price-box">

                  <?php if ($new['is_sale'] == 1) { ?>
                    <span class="current-price">PKR <?php echo $new['price_pkr'] ?></span>
                    <span class="original-price">PKR <?php echo $new['original_price_pkr'] ?></span>
                  <?php } else { ?>
                    <span class="current-price">PKR <?php echo $new['original_price_pkr'] ?></span>
                  <?php } ?>


                </div>
                <div class="product-colors">
                  <span class="color-dot" style="background-color: #633d1c;" title="Available Color"></span><span class="color-dot" style="background-color: #141414;" title="Available Color"></span><span class="color-dot" style="background-color: #8c5324;" title="Available Color"></span>
                </div>
              </div>
            </div>

          </div>
        <?php } ?>
      </div>
    </div>
  </section>

  <!-- Section 6: Brand Benefits -->
  <section class="border-top border-bottom py-4 bg-white">
    <div class="container">
      <div class="row g-0">
        <div class="col-lg-2 col-md-4 col-6 benefit-item">
          <i class="bi bi-gem benefit-icon"></i>
          <h4 class="benefit-title">Artisanal Craft</h4>
          <p class="benefit-desc">Hand-burnished full grain leather</p>
        </div>
        <div class="col-lg-2 col-md-4 col-6 benefit-item">
          <i class="bi bi-feather benefit-icon"></i>
          <h4 class="benefit-title">Orthotic Comfort</h4>
          <p class="benefit-desc">Memory foam ergonomic footbeds</p>
        </div>
        <div class="col-lg-2 col-md-4 col-6 benefit-item">
          <i class="bi bi-truck benefit-icon"></i>
          <h4 class="benefit-title">Fast Delivery</h4>
          <p class="benefit-desc">Tracked shipping across Pakistan</p>
        </div>
        <div class="col-lg-2 col-md-4 col-6 benefit-item">
          <i class="bi bi-cash-coin benefit-icon"></i>
          <h4 class="benefit-title">Cash on Delivery</h4>
          <p class="benefit-desc">Pay at your doorstep with confidence</p>
        </div>
        <div class="col-lg-2 col-md-4 col-6 benefit-item">
          <i class="bi bi-arrow-left-right benefit-icon"></i>
          <h4 class="benefit-title">Easy Exchange</h4>
          <p class="benefit-desc">15 days hassle-free size changes</p>
        </div>
        <div class="col-lg-2 col-md-4 col-6 benefit-item">
          <i class="bi bi-shield-check benefit-icon"></i>
          <h4 class="benefit-title">Authentic Heritage</h4>
          <p class="benefit-desc">Original designs made for gentlemen</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 7: Featured Editorial Collection -->
  <section class="section-padding" style="background-color: var(--bg-surface);">
    <div class="container">
      <div class="row align-items-center g-5">
        <div class="col-lg-6">
          <div class="position-relative">
            <img src="https://images.unsplash.com/photo-1533867617858-e7b97e060509?q=80&w=900&auto=format&fit=crop" class="img-fluid rounded-1 shadow-sm" alt="Artisan Shoemaking Process">
            <div class="position-absolute bottom-0 start-0 bg-white p-3 m-3 border rounded-1 shadow-sm d-none d-sm-block">
              <div class="small fw-bold text-uppercase text-muted">Heritage Workshop</div>
              <div class="fw-semibold">Over 40 Hours of Hand Detailing</div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <span class="section-subtitle">Editorial Feature</span>
          <h2 class="display-6 fw-bold mb-3 font-editorial">The Art of Hand-Antiqued Patina</h2>
          <p class="text-muted mb-4" style="line-height: 1.8;">
            Each pair in the NOVA FORM collection begins with crust calf leather hand-selected from premier tanneries. Our master craftsmen hand-apply natural vegetable dyes, creams, and waxes with sea sponges and horsehair brushes to create a deep, layered patina that matures uniquely with every step you take.
          </p>
          <div class="d-flex flex-column gap-3 mb-4">
            <div class="d-flex align-items-start gap-3">
              <i class="bi bi-check2-circle text-warning fs-5"></i>
              <div>
                <h6 class="mb-1 fw-bold">Slow-Cured Leather Lining</h6>
                <p class="text-muted small mb-0">Breathable calfskin linings naturally regulate moisture and odor.</p>
              </div>
            </div>
            <div class="d-flex align-items-start gap-3">
              <i class="bi bi-check2-circle text-warning fs-5"></i>
              <div>
                <h6 class="mb-1 fw-bold">Custom Brass Hardware</h6>
                <p class="text-muted small mb-0">Heavy solid brass buckles that never rust or lose their distinguished lustre.</p>
              </div>
            </div>
          </div>
          <a href="about.php" class="btn btn-nova-dark">Read Our Philosophy <i class="bi bi-arrow-right ms-2"></i></a>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 8: Customer Reviews -->
  <section class="section-padding bg-white">
    <div class="container">
      <div class="section-header text-center mx-auto" style="max-width: 620px;">
        <span class="section-subtitle">Client Testimonials</span>
        <h2 class="section-title">Endorsed by Gentlemen</h2>
        <p class="section-desc mx-auto">Read authentic feedback from discerning patrons across Karachi, Lahore, and Islamabad.</p>
      </div>

      <div class="row g-4">

        <div class="col-lg-4 col-md-6">
          <div class="review-card">
            <div class="review-stars">
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
            </div>
            <p class="review-text">"The leather quality rivals top European shoemakers. Stood comfortably through an 8-hour international medical convention. Superb craftsmanship."</p>
            <div class="review-author mt-auto">
              <div class="bg-dark text-white rounded-circle d-flex align-items-center justify-content-center fw-bold" style="width: 44px; height: 44px;">
                D
              </div>
              <div>
                <h5 class="review-name">Dr. Tariq Masood</h5>
                <div class="review-city"><i class="bi bi-geo-alt me-1"></i> Lahore, Pakistan &bull; <span class="text-muted">Regal Wholecut Oxford</span></div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="review-card">
            <div class="review-stars">
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
            </div>
            <p class="review-text">"The hand patina in Sienna Tan looks stunning in natural daylight. Perfect fit right out of the box with zero blisters."</p>
            <div class="review-author mt-auto">
              <div class="bg-dark text-white rounded-circle d-flex align-items-center justify-content-center fw-bold" style="width: 44px; height: 44px;">
                K
              </div>
              <div>
                <h5 class="review-name">Khurram Shahzad</h5>
                <div class="review-city"><i class="bi bi-geo-alt me-1"></i> Karachi, Pakistan &bull; <span class="text-muted">Sienna Burnished Penny Loafer</span></div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="review-card">
            <div class="review-stars">
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
            </div>
            <p class="review-text">"Purchased this for my husband on Eid. He was amazed by how light yet sturdy the tyre sole is. Exceptional Pakistani artisanship."</p>
            <div class="review-author mt-auto">
              <div class="bg-dark text-white rounded-circle d-flex align-items-center justify-content-center fw-bold" style="width: 44px; height: 44px;">
                Z
              </div>
              <div>
                <h5 class="review-name">Zainab Malik</h5>
                <div class="review-city"><i class="bi bi-geo-alt me-1"></i> Islamabad, Pakistan &bull; <span class="text-muted">Khyber Heritage Peshawari Chappal</span></div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- Section 9: Newsletter -->
  <section class="newsletter-section text-center">
    <div class="container">
      <div class="mx-auto" style="max-width: 580px;">
        <span class="section-subtitle">Exclusive Society</span>
        <h2 class="section-title mb-2">Join The NOVA FORM Club</h2>
        <p class="text-muted mb-4 small">
          Receive private trunk show invitations, seasonal shoe care manuals, and PKR 1,500 off your premier purchase.
        </p>
        <form class="demo-newsletter-form d-flex gap-2 justify-content-center">
          <input type="email" class="form-control newsletter-input" placeholder="Your executive email address" required style="max-width: 380px;">
          <button class="btn btn-nova-dark" type="submit">Subscribe</button>
        </form>
        <div class="text-muted small mt-2" style="font-size: 0.72rem;">We respect your discretion. Unsubscribe with one click anytime.</div>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/partials/footer.php'; ?>