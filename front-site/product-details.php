<?php
$pageTitle = "Regal Wholecut Oxford | NOVA FORM Luxury Footwear";
$pageDescription = "Cut from a single flawless piece of premium calfskin, offering an unbroken silhouette for the discerning gentleman. Hand-burnished Italian calfskin dress shoe with Goodyear welted sole.";
require_once __DIR__ . '/partials/header.php';
require_once __DIR__ . '/partials/navbar.php';
?>

<main class="py-4">
    <div class="container">
      
      <!-- Breadcrumb -->
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-nova">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item"><a href="shop.php">Shop</a></li>
          <li class="breadcrumb-item"><a href="category.php">Formal Shoes</a></li>
          <li class="breadcrumb-item active" aria-current="page">Regal Wholecut Oxford</li>
        </ol>
      </nav>

      <div class="row g-4 g-lg-5">
        
        <!-- Gallery Col -->
        <div class="col-lg-7 product-gallery-container">
          <div class="product-gallery-main position-relative">
            <span class="badge bg-dark position-absolute top-0 start-0 m-3 text-uppercase px-2 py-1">NOVA FORM Black Label</span>
            <img id="mainProductImage" src="https://images.unsplash.com/photo-1614252235316-8c857d38b5f4?q=80&w=800&auto=format&fit=crop" alt="Regal Wholecut Oxford">
          </div>

          <!-- Thumbnails -->
          <div class="row g-2">
            
              <div class="col-3">
                <div class="product-thumb-item active" data-img-src="https://images.unsplash.com/photo-1614252235316-8c857d38b5f4?q=80&w=800&auto=format&fit=crop">
                  <img src="https://images.unsplash.com/photo-1614252235316-8c857d38b5f4?q=80&w=800&auto=format&fit=crop" alt="Thumbnail 1">
                </div>
              </div>
            
              <div class="col-3">
                <div class="product-thumb-item " data-img-src="https://images.unsplash.com/photo-1543163521-1bf539c55dd2?q=80&w=800&auto=format&fit=crop">
                  <img src="https://images.unsplash.com/photo-1543163521-1bf539c55dd2?q=80&w=800&auto=format&fit=crop" alt="Thumbnail 2">
                </div>
              </div>
            
              <div class="col-3">
                <div class="product-thumb-item " data-img-src="https://images.unsplash.com/photo-1533867617858-e7b97e060509?q=80&w=800&auto=format&fit=crop">
                  <img src="https://images.unsplash.com/photo-1533867617858-e7b97e060509?q=80&w=800&auto=format&fit=crop" alt="Thumbnail 3">
                </div>
              </div>
            
          </div>
        </div>

        <!-- Product Purchasing Information Col -->
        <div class="col-lg-5">
          <div class="product-purchase-box">
            
            <div class="d-flex align-items-center justify-content-between mb-2">
              <span class="text-uppercase text-muted small fw-bold tracking-wider">Formal Shoes &bull; SKU: NF-OXF-01</span>
              <span class="badge bg-success bg-opacity-10 text-success fw-semibold"><i class="bi bi-check-circle-fill me-1"></i> In Stock</span>
            </div>

            <h1 class="h2 fw-bold font-editorial mb-2">Regal Wholecut Oxford</h1>

            <div class="d-flex align-items-center gap-2 mb-3">
              <div class="product-rating mb-0">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <span class="count ms-1">(38 Verified Gentlemen Reviews)</span>
              </div>
            </div>

            <div class="d-flex align-items-baseline gap-3 mb-4 pb-3 border-bottom">
              <span class="fs-2 fw-bold text-dark">PKR 14,999</span>
              <span class="fs-5 text-muted text-decoration-line-through">PKR 17,500</span>
              <span class="badge bg-danger">Save 15%</span>
            </div>

            <p class="text-muted small mb-4" style="line-height: 1.7;">
              Cut from a single flawless piece of premium calfskin, offering an unbroken silhouette for the discerning gentleman. Each shoe is shaped over our signature almond-toe last, providing supreme arch posture and sleek black-tie styling.
            </p>

            <!-- Color Options -->
            <div class="mb-4">
              <label class="form-label-nova d-flex justify-content-between">
                <span>Selected Color: <strong id="selectedColorLabel" class="text-dark">Nero Black</strong></span>
              </label>
              <div class="d-flex gap-2">
                
                  <span class="color-option active" style="background-color: #141414;" data-color="Nero Black" title="Nero Black"></span>
                
                  <span class="color-option " style="background-color: #4a2c11;" data-color="Espresso Tan" title="Espresso Tan"></span>
                
              </div>
            </div>

            <!-- Size Selector -->
            <div class="mb-4 size-selector-wrap">
              <div class="d-flex justify-content-between align-items-center mb-2">
                <label class="form-label-nova mb-0">Select EU Size: <strong id="selectedSizeLabel" class="text-dark">EU 42</strong></label>
                <a href="size-guide.php" class="small text-warning text-decoration-underline"><i class="bi bi-rulers me-1"></i> Size Guide (cm)</a>
              </div>
              <div class="d-flex flex-wrap gap-2">
                
                  <button type="button" class="size-pill " data-size="EU 39">39</button>
                
                  <button type="button" class="size-pill " data-size="EU 40">40</button>
                
                  <button type="button" class="size-pill " data-size="EU 41">41</button>
                
                  <button type="button" class="size-pill active" data-size="EU 42">42</button>
                
                  <button type="button" class="size-pill " data-size="EU 43">43</button>
                
                  <button type="button" class="size-pill " data-size="EU 44">44</button>
                
                  <button type="button" class="size-pill " data-size="EU 45">45</button>
                
                  <button type="button" class="size-pill " data-size="EU 46">46</button>
                
              </div>
              <small class="text-muted d-block mt-2">True to size. If between sizes, choose your closest larger size.</small>
            </div>

            <!-- Quantity & Actions -->
            <div class="mb-4 d-flex align-items-center gap-3">
              <div class="quantity-control">
                <button type="button" class="quantity-btn quantity-btn-dec"><i class="bi bi-dash"></i></button>
                <input type="text" class="quantity-input" value="1" readonly>
                <button type="button" class="quantity-btn quantity-btn-inc"><i class="bi bi-plus"></i></button>
              </div>

              <button type="button" class="btn btn-nova-dark flex-grow-1" id="btnAddToCart">
                <i class="bi bi-bag-plus me-1"></i> Add To Bag
              </button>

              <button type="button" class="btn btn-outline-secondary px-3 py-2 btn-wishlist-action" title="Save to wishlist">
                <i class="bi bi-heart"></i>
              </button>
            </div>

            <!-- Instant Buy Now -->
            <div class="mb-4">
              <a href="checkout.php" class="btn btn-nova-tan w-100 py-3 text-center d-block">
                <i class="bi bi-lightning-charge me-1"></i> Buy Now &bull; Express Checkout
              </a>
            </div>

            <!-- Assurance Box -->
            <div class="bg-light p-3 rounded-1 border small">
              <div class="d-flex align-items-center gap-2 mb-2 text-dark">
                <i class="bi bi-shield-check text-success fs-5"></i>
                <span><strong>Complimentary Delivery</strong> on this order anywhere in Pakistan.</span>
              </div>
              <div class="d-flex align-items-center gap-2 mb-2 text-dark">
                <i class="bi bi-arrow-repeat text-primary fs-5"></i>
                <span><strong>15-Day Exchange Policy</strong> with doorstep exchange support.</span>
              </div>
              <div class="d-flex align-items-center gap-2 text-dark">
                <i class="bi bi-cash-stack text-warning fs-5"></i>
                <span><strong>Cash on Delivery (COD)</strong> accepted nationwide.</span>
              </div>
            </div>

          </div>
        </div>

      </div>

      <!-- Product Specifications Tabs -->
      <div class="mt-5 pt-4 border-top">
        <ul class="nav nav-tabs nav-tabs-nova mb-4" id="productDetailTabs" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="desc-tab" data-bs-toggle="tab" data-bs-target="#desc-pane" type="button" role="tab">Description & Fit</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="specs-tab" data-bs-toggle="tab" data-bs-target="#specs-pane" type="button" role="tab">Specifications</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="shipping-tab" data-bs-toggle="tab" data-bs-target="#shipping-pane" type="button" role="tab">Shipping & Returns</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="reviews-tab" data-bs-toggle="tab" data-bs-target="#reviews-pane" type="button" role="tab">Reviews (38)</button>
          </li>
        </ul>

        <div class="tab-content bg-white p-4 border rounded-1 shadow-sm" id="productDetailTabContent">
          <!-- Tab 1 -->
          <div class="tab-pane fade show active" id="desc-pane" role="tabpanel">
            <div class="row">
              <div class="col-lg-8">
                <h4 class="font-editorial mb-3">The Pure Wholecut Oxford</h4>
                <p class="text-muted" style="line-height: 1.8;">
                  Mastering the Wholecut is considered the zenith of footwear craftsmanship. Requiring a completely unblemished, continuous hide of full-grain calfskin, it offers no room for error. The shoe wraps around the foot like a bespoke glove, adapting to your foot’s unique contours over time.
                </p>
                <h5 class="fs-6 fw-bold text-uppercase mt-4 mb-2">Key Features:</h5>
                <ul class="text-muted small">
                  <li>Single piece unbroken upper construction without quarters or seams.</li>
                  <li>Goodyear welted closed-channel sole allowing indefinite resoling.</li>
                  <li>Hand-beveled waist and stacked leather heel with non-slip dovetail rubber insert.</li>
                  <li>Treated with natural beeswax and organic oils for supreme water repellency.</li>
                </ul>
              </div>
              <div class="col-lg-4 border-start ps-lg-4">
                <h6 class="text-uppercase fw-bold text-muted small mb-3">Fitting Advice</h6>
                <p class="small text-muted mb-2">Standard 'F' fitting (Regular width). Excellent instep curvature suited for South Asian feet.</p>
                <p class="small text-muted">Recommend wearing with fine dress socks.</p>
              </div>
            </div>
          </div>

          <!-- Tab 2 -->
          <div class="tab-pane fade" id="specs-pane" role="tabpanel">
            <table class="table table-bordered small">
              <tbody>
                <tr><th class="w-25 bg-light">Upper Material</th><td>Hand-burnished Full Grain Italian Calfskin</td></tr>
                <tr><th class="bg-light">Lining</th><td>Full Grain Odor-Resistant Calfskin Lining</td></tr>
                <tr><th class="bg-light">Sole Construction</th><td>Hand-stitched Goodyear Welted Leather Sole</td></tr>
                <tr><th class="bg-light">Last</th><td>Chiseled Almond Last #802</td></tr>
                <tr><th class="bg-light">Occasion</th><td>Black Tie, Weddings & Executive Formal</td></tr>
                <tr><th class="bg-light">Shoe Care</th><td>Apply cream polish monthly with horsehair brush. Store with cedar shoe trees.</td></tr>
              </tbody>
            </table>
          </div>

          <!-- Tab 3 -->
          <div class="tab-pane fade" id="shipping-pane" role="tabpanel">
            <div class="row g-4">
              <div class="col-md-6">
                <h5 class="fs-6 fw-bold text-uppercase">Nationwide Pakistani Shipping</h5>
                <p class="text-muted small">
                  Orders are dispatched within 24 business hours from our Lahore and Karachi distribution centres. Delivered via TCS, Leopard, and CallCourier.
                </p>
                <ul class="text-muted small">
                  <li>Major Cities (Lahore, Karachi, Islamabad, Rawalpindi): 2-3 business days.</li>
                  <li>Rest of Pakistan: 3-5 business days.</li>
                  <li>Cash on Delivery available on orders up to PKR 50,000.</li>
                </ul>
              </div>
              <div class="col-md-6 border-start ps-md-4">
                <h5 class="fs-6 fw-bold text-uppercase">15-Day Exchange Guarantee</h5>
                <p class="text-muted small">
                  If your pair doesn't fit flawlessly, our courier will pick it up and deliver your revised size in one smooth handover. Shoes must be unworn and in original condition.
                </p>
              </div>
            </div>
          </div>

          <!-- Tab 4 -->
          <div class="tab-pane fade" id="reviews-pane" role="tabpanel">
            <div class="d-flex justify-content-between align-items-center mb-4">
              <div>
                <h5 class="mb-1 fw-bold">Customer Reviews</h5>
                <div class="text-warning small"><i class="bi bi-star-fill"></i> 4.9 Average Rating out of 38 reviews</div>
              </div>
              <button class="btn btn-sm btn-nova-dark" onclick="alert('Review submission demo opened!');">Write a Review</button>
            </div>
            
            <div class="d-flex flex-column gap-3">
              
                <div class="border-bottom pb-3">
                  <div class="d-flex justify-content-between align-items-center mb-1">
                    <strong class="small">Dr. Tariq Masood</strong>
                    <span class="text-muted small">24 Oct 2026</span>
                  </div>
                  <div class="text-warning small mb-1">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                  </div>
                  <p class="text-muted small mb-0">"The leather quality rivals top European shoemakers. Stood comfortably through an 8-hour international medical convention. Superb craftsmanship."</p>
                </div>
              
                <div class="border-bottom pb-3">
                  <div class="d-flex justify-content-between align-items-center mb-1">
                    <strong class="small">Khurram Shahzad</strong>
                    <span class="text-muted small">22 Oct 2026</span>
                  </div>
                  <div class="text-warning small mb-1">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                  </div>
                  <p class="text-muted small mb-0">"The hand patina in Sienna Tan looks stunning in natural daylight. Perfect fit right out of the box with zero blisters."</p>
                </div>
              
                <div class="border-bottom pb-3">
                  <div class="d-flex justify-content-between align-items-center mb-1">
                    <strong class="small">Zainab Malik</strong>
                    <span class="text-muted small">20 Oct 2026</span>
                  </div>
                  <div class="text-warning small mb-1">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                  </div>
                  <p class="text-muted small mb-0">"Purchased this for my husband on Eid. He was amazed by how light yet sturdy the tyre sole is. Exceptional Pakistani artisanship."</p>
                </div>
              
            </div>
          </div>
        </div>
      </div>

      <!-- Related Products -->
      <section class="mt-5 pt-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
          <h2 class="h4 font-editorial mb-0">You May Also Admire</h2>
          <a href="shop.php" class="small text-dark fw-bold text-decoration-none">View Complete Archive &rarr;</a>
        </div>
        <div class="row g-3 g-md-4">
          
            <div class="col-lg-3 col-md-6 col-6 col-product-grid">
              
  <div class="product-card">
    <div class="product-img-wrap">
      <div class="product-badges">
        
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
      <div class="product-category">Loafers</div>
      <h3 class="product-name">
        <a href="product-details.php">Sienna Burnished Penny Loafer</a>
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
        <span class="current-price">PKR 12,499</span>
        <span class="original-price">PKR 14,000</span>
      </div>
      <div class="product-colors">
        <span class="color-dot" style="background-color: #633d1c;" title="Available Color"></span><span class="color-dot" style="background-color: #141414;" title="Available Color"></span><span class="color-dot" style="background-color: #8c5324;" title="Available Color"></span>
      </div>
    </div>
  </div>
  
            </div>
          
            <div class="col-lg-3 col-md-6 col-6 col-product-grid">
              
  <div class="product-card">
    <div class="product-img-wrap">
      <div class="product-badges">
        <span class="badge-sale">Sale</span>
        
      </div>
      <button class="product-wishlist-btn" title="Add to Wishlist" data-product-id="NF-1003">
        <i class="bi bi-heart"></i>
      </button>
      <a href="product-details.php">
        <img src="https://images.unsplash.com/photo-1560769629-975ec94e6a86?q=80&w=800&auto=format&fit=crop" alt="Kensington Braided Tassel Loafer" loading="lazy">
      </a>
      <div class="product-quick-actions">
        <button class="quick-view-btn btn-quick-add" data-product-title="Kensington Braided Tassel Loafer">
          <i class="bi bi-bag-plus me-1"></i> Quick Add
        </button>
      </div>
    </div>
    <div class="product-info">
      <div class="product-category">Loafers</div>
      <h3 class="product-name">
        <a href="product-details.php">Kensington Braided Tassel Loafer</a>
      </h3>
      <div class="product-rating">
        <i class="bi bi-star-fill"></i>
        <i class="bi bi-star-fill"></i>
        <i class="bi bi-star-fill"></i>
        <i class="bi bi-star-fill"></i>
        <i class="bi bi-star-fill"></i>
        <span class="count">(29)</span>
      </div>
      <div class="product-price-box">
        <span class="current-price">PKR 13,200</span>
        <span class="original-price">PKR 15,500</span>
      </div>
      <div class="product-colors">
        <span class="color-dot" style="background-color: #422817;" title="Available Color"></span><span class="color-dot" style="background-color: #141414;" title="Available Color"></span>
      </div>
    </div>
  </div>
  
            </div>
          
            <div class="col-lg-3 col-md-6 col-6 col-product-grid">
              
  <div class="product-card">
    <div class="product-img-wrap">
      <div class="product-badges">
        <span class="badge-sale">Sale</span>
        
      </div>
      <button class="product-wishlist-btn" title="Add to Wishlist" data-product-id="NF-1004">
        <i class="bi bi-heart"></i>
      </button>
      <a href="product-details.php">
        <img src="https://images.unsplash.com/photo-1543163521-1bf539c55dd2?q=80&w=800&auto=format&fit=crop" alt="Mayfair Double Monk Strap" loading="lazy">
      </a>
      <div class="product-quick-actions">
        <button class="quick-view-btn btn-quick-add" data-product-title="Mayfair Double Monk Strap">
          <i class="bi bi-bag-plus me-1"></i> Quick Add
        </button>
      </div>
    </div>
    <div class="product-info">
      <div class="product-category">Formal Shoes</div>
      <h3 class="product-name">
        <a href="product-details.php">Mayfair Double Monk Strap</a>
      </h3>
      <div class="product-rating">
        <i class="bi bi-star-fill"></i>
        <i class="bi bi-star-fill"></i>
        <i class="bi bi-star-fill"></i>
        <i class="bi bi-star-fill"></i>
        <i class="bi bi-star-fill"></i>
        <span class="count">(22)</span>
      </div>
      <div class="product-price-box">
        <span class="current-price">PKR 15,499</span>
        <span class="original-price">PKR 18,000</span>
      </div>
      <div class="product-colors">
        <span class="color-dot" style="background-color: #141414;" title="Available Color"></span><span class="color-dot" style="background-color: #543015;" title="Available Color"></span>
      </div>
    </div>
  </div>
  
            </div>
          
            <div class="col-lg-3 col-md-6 col-6 col-product-grid">
              
  <div class="product-card">
    <div class="product-img-wrap">
      <div class="product-badges">
        
        <span class="badge-new">New</span>
      </div>
      <button class="product-wishlist-btn" title="Add to Wishlist" data-product-id="NF-1005">
        <i class="bi bi-heart"></i>
      </button>
      <a href="product-details.php">
        <img src="https://images.unsplash.com/photo-1608256246200-53e635b5b65f?q=80&w=800&auto=format&fit=crop" alt="Khyber Heritage Peshawari Chappal" loading="lazy">
      </a>
      <div class="product-quick-actions">
        <button class="quick-view-btn btn-quick-add" data-product-title="Khyber Heritage Peshawari Chappal">
          <i class="bi bi-bag-plus me-1"></i> Quick Add
        </button>
      </div>
    </div>
    <div class="product-info">
      <div class="product-category">Traditional Footwear</div>
      <h3 class="product-name">
        <a href="product-details.php">Khyber Heritage Peshawari Chappal</a>
      </h3>
      <div class="product-rating">
        <i class="bi bi-star-fill"></i>
        <i class="bi bi-star-fill"></i>
        <i class="bi bi-star-fill"></i>
        <i class="bi bi-star-fill"></i>
        <i class="bi bi-star-fill"></i>
        <span class="count">(84)</span>
      </div>
      <div class="product-price-box">
        <span class="current-price">PKR 6,899</span>
        <span class="original-price">PKR 8,000</span>
      </div>
      <div class="product-colors">
        <span class="color-dot" style="background-color: #3b2219;" title="Available Color"></span><span class="color-dot" style="background-color: #111111;" title="Available Color"></span><span class="color-dot" style="background-color: #a26e38;" title="Available Color"></span>
      </div>
    </div>
  </div>
  
            </div>
          
        </div>
      </section>

    </div>
  </main>

<?php require_once __DIR__ . '/partials/footer.php'; ?>
