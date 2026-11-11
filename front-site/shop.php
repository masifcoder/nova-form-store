<?php
$pageTitle = "Shop All Men's Footwear | NOVA FORM Pakistan";
$pageDescription = "Explore NOVA FORM's complete footwear catalogue. Oxfords, Penny Loafers, Chelsea Boots, Sneakers, and Traditional Sandals.";
require_once __DIR__ . '/partials/header.php';
require_once __DIR__ . '/partials/navbar.php';
?>

<main class="py-4">
    <div class="container">
      
      <!-- Breadcrumb -->
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-nova">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Shop All Footwear</li>
        </ol>
      </nav>

      <!-- Page Header -->
      <div class="border-bottom pb-4 mb-4">
        <div class="row align-items-end">
          <div class="col-lg-8">
            <h1 class="h2 fw-bold font-editorial mb-2">Men's Handcrafted Footwear Collection</h1>
            <p class="text-muted mb-0 small">
              Engineered with full-grain leather, welted soles, and timeless silhouettes. Hand-finished for contemporary life.
            </p>
          </div>
          <div class="col-lg-4 text-lg-end mt-3 mt-lg-0">
            <span class="badge bg-light text-dark border p-2">Showing <strong id="visibleProductsCount">24</strong> Products</span>
          </div>
        </div>
      </div>

      <div class="row g-4">
        
        <!-- Sidebar Filters -->
        <div class="col-lg-3">
          <div class="p-3 bg-white border rounded-1 shadow-sm shop-sidebar">
            <div class="d-flex justify-content-between align-items-center mb-3 pb-2 border-bottom">
              <h5 class="fs-6 fw-bold text-uppercase mb-0"><i class="bi bi-funnel me-1"></i> Refine Catalog</h5>
              <a href="shop.php" class="text-muted small text-decoration-underline">Reset</a>
            </div>

            <!-- Category Filter -->
            <div class="mb-4">
              <label class="form-label-nova">Category</label>
              <div class="d-flex flex-column gap-1">
                
                  <div class="form-check">
                    <input class="form-check-input filter-category-chk" type="checkbox" value="Formal Shoes" id="cat_FormalShoes">
                    <label class="form-check-label small text-muted d-flex justify-content-between" for="cat_FormalShoes">
                      <span>Formal Shoes</span>
                      <span class="badge bg-light text-dark">5</span>
                    </label>
                  </div>
                
                  <div class="form-check">
                    <input class="form-check-input filter-category-chk" type="checkbox" value="Loafers" id="cat_Loafers">
                    <label class="form-check-label small text-muted d-flex justify-content-between" for="cat_Loafers">
                      <span>Loafers</span>
                      <span class="badge bg-light text-dark">5</span>
                    </label>
                  </div>
                
                  <div class="form-check">
                    <input class="form-check-input filter-category-chk" type="checkbox" value="Casual Shoes" id="cat_CasualShoes">
                    <label class="form-check-label small text-muted d-flex justify-content-between" for="cat_CasualShoes">
                      <span>Casual Shoes</span>
                      <span class="badge bg-light text-dark">3</span>
                    </label>
                  </div>
                
                  <div class="form-check">
                    <input class="form-check-input filter-category-chk" type="checkbox" value="Sneakers / Sports Shoes" id="cat_Sneakers/SportsShoes">
                    <label class="form-check-label small text-muted d-flex justify-content-between" for="cat_Sneakers/SportsShoes">
                      <span>Sneakers / Sports Shoes</span>
                      <span class="badge bg-light text-dark">4</span>
                    </label>
                  </div>
                
                  <div class="form-check">
                    <input class="form-check-input filter-category-chk" type="checkbox" value="Sandals" id="cat_Sandals">
                    <label class="form-check-label small text-muted d-flex justify-content-between" for="cat_Sandals">
                      <span>Sandals</span>
                      <span class="badge bg-light text-dark">2</span>
                    </label>
                  </div>
                
                  <div class="form-check">
                    <input class="form-check-input filter-category-chk" type="checkbox" value="Traditional Footwear" id="cat_TraditionalFootwear">
                    <label class="form-check-label small text-muted d-flex justify-content-between" for="cat_TraditionalFootwear">
                      <span>Traditional Footwear</span>
                      <span class="badge bg-light text-dark">3</span>
                    </label>
                  </div>
                
                  <div class="form-check">
                    <input class="form-check-input filter-category-chk" type="checkbox" value="Slippers" id="cat_Slippers">
                    <label class="form-check-label small text-muted d-flex justify-content-between" for="cat_Slippers">
                      <span>Slippers</span>
                      <span class="badge bg-light text-dark">2</span>
                    </label>
                  </div>
                
                  <div class="form-check">
                    <input class="form-check-input filter-category-chk" type="checkbox" value="Boots" id="cat_Boots">
                    <label class="form-check-label small text-muted d-flex justify-content-between" for="cat_Boots">
                      <span>Boots</span>
                      <span class="badge bg-light text-dark">3</span>
                    </label>
                  </div>
                
              </div>
            </div>

            <!-- Brand Filter -->
            <div class="mb-4">
              <label class="form-label-nova">Atelier Brand</label>
              <div class="d-flex flex-column gap-1">
                
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="brand_NOVAFORMBlackLabel">
                    <label class="form-check-label small text-muted" for="brand_NOVAFORMBlackLabel">
                      NOVA FORM Black Label
                    </label>
                  </div>
                
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="brand_NOVAFORMArtisan">
                    <label class="form-check-label small text-muted" for="brand_NOVAFORMArtisan">
                      NOVA FORM Artisan
                    </label>
                  </div>
                
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="brand_NOVAFORMHeritage">
                    <label class="form-check-label small text-muted" for="brand_NOVAFORMHeritage">
                      NOVA FORM Heritage
                    </label>
                  </div>
                
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="brand_NOVAFORMUrban">
                    <label class="form-check-label small text-muted" for="brand_NOVAFORMUrban">
                      NOVA FORM Urban
                    </label>
                  </div>
                
              </div>
            </div>

            <!-- Shoe Size Filter -->
            <div class="mb-4">
              <div class="d-flex justify-content-between align-items-center mb-2">
                <label class="form-label-nova mb-0">Shoe Size (EU)</label>
                <a href="size-guide.php" class="small text-warning text-decoration-none">Guide</a>
              </div>
              <div class="d-flex flex-wrap gap-1">
                
                  <span class="size-pill py-1 px-2 small">39</span>
                
                  <span class="size-pill py-1 px-2 small">40</span>
                
                  <span class="size-pill py-1 px-2 small">41</span>
                
                  <span class="size-pill py-1 px-2 small">42</span>
                
                  <span class="size-pill py-1 px-2 small">43</span>
                
                  <span class="size-pill py-1 px-2 small">44</span>
                
                  <span class="size-pill py-1 px-2 small">45</span>
                
                  <span class="size-pill py-1 px-2 small">46</span>
                
              </div>
            </div>

            <!-- Color Swatches -->
            <div class="mb-4">
              <label class="form-label-nova">Color Family</label>
              <div class="d-flex flex-wrap gap-2">
                <span class="color-option" style="background: #141414;" title="Nero Black"></span>
                <span class="color-option" style="background: #543015;" title="Dark Mocha"></span>
                <span class="color-option" style="background: #8c5324;" title="Chestnut Tan"></span>
                <span class="color-option" style="background: #213247;" title="Midnight Navy"></span>
                <span class="color-option" style="background: #f5f5f5;" title="Chalk White"></span>
                <span class="color-option" style="background: #3d141b;" title="Bordeaux Oxblood"></span>
              </div>
            </div>

            <!-- Price Range -->
            <div class="mb-4">
              <label class="form-label-nova">Price Range (PKR)</label>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="priceRange" id="pr1" checked>
                <label class="form-check-label small text-muted" for="pr1">All Prices</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="priceRange" id="pr2">
                <label class="form-check-label small text-muted" for="pr2">Under PKR 7,000</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="priceRange" id="pr3">
                <label class="form-check-label small text-muted" for="pr3">PKR 7,000 - PKR 12,000</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="priceRange" id="pr4">
                <label class="form-check-label small text-muted" for="pr4">Above PKR 12,000</label>
              </div>
            </div>

            <!-- Occasion -->
            <div class="mb-3">
              <label class="form-label-nova">Occasion</label>
              <div class="d-flex flex-column gap-1">
                <div class="form-check"><input class="form-check-input" type="checkbox" id="oc1"><label class="form-check-label small text-muted" for="oc1">Black Tie & Formal</label></div>
                <div class="form-check"><input class="form-check-input" type="checkbox" id="oc2"><label class="form-check-label small text-muted" for="oc2">Smart Casual & Business</label></div>
                <div class="form-check"><input class="form-check-input" type="checkbox" id="oc3"><label class="form-check-label small text-muted" for="oc3">Traditional & Festivities</label></div>
                <div class="form-check"><input class="form-check-input" type="checkbox" id="oc4"><label class="form-check-label small text-muted" for="oc4">Casual & Weekend</label></div>
              </div>
            </div>

          </div>
        </div>

        <!-- Product Grid & Toolbar -->
        <div class="col-lg-9">
          
          <!-- Toolbar -->
          <div class="bg-white p-3 border rounded-1 mb-4 d-flex flex-column flex-md-row justify-content-between align-items-center gap-3">
            <div class="input-group" style="max-width: 320px;">
              <span class="input-group-text bg-white border-end-0"><i class="bi bi-search text-muted"></i></span>
              <input type="text" id="shopSearchInput" class="form-control border-start-0" placeholder="Filter by shoe title...">
            </div>

            <div class="d-flex align-items-center gap-3 w-100 w-md-auto justify-content-end">
              <label for="shopSortSelect" class="small text-muted text-nowrap mb-0 fw-semibold">Sort By:</label>
              <select id="shopSortSelect" class="form-select form-select-sm" style="min-width: 180px;">
                <option value="featured">Featured Collection</option>
                <option value="newest">Newest Additions</option>
                <option value="price-asc">Price: Low to High</option>
                <option value="price-desc">Price: High to Low</option>
                <option value="bestseller">Best Selling</option>
              </select>
            </div>
          </div>

          <!-- Product Grid: 24 Full items -->
          <div class="row g-3 g-md-4" id="shopProductGrid">
            
              <div class="col-lg-4 col-md-6 col-6 col-product-grid shop-product-item" data-name="Regal Wholecut Oxford" data-category="Formal Shoes" data-price="14999">
                
  <div class="product-card">
    <div class="product-img-wrap">
      <div class="product-badges">
        <span class="badge-sale">Sale</span>
        
      </div>
      <button class="product-wishlist-btn" title="Add to Wishlist" data-product-id="NF-1001">
        <i class="bi bi-heart"></i>
      </button>
      <a href="product-details.php">
        <img src="https://images.unsplash.com/photo-1614252235316-8c857d38b5f4?q=80&w=800&auto=format&fit=crop" alt="Regal Wholecut Oxford" loading="lazy">
      </a>
      <div class="product-quick-actions">
        <button class="quick-view-btn btn-quick-add" data-product-title="Regal Wholecut Oxford">
          <i class="bi bi-bag-plus me-1"></i> Quick Add
        </button>
      </div>
    </div>
    <div class="product-info">
      <div class="product-category">Formal Shoes</div>
      <h3 class="product-name">
        <a href="product-details.php">Regal Wholecut Oxford</a>
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
        <span class="current-price">PKR 14,999</span>
        <span class="original-price">PKR 17,500</span>
      </div>
      <div class="product-colors">
        <span class="color-dot" style="background-color: #141414;" title="Available Color"></span><span class="color-dot" style="background-color: #4a2c11;" title="Available Color"></span>
      </div>
    </div>
  </div>
  
              </div>
            
              <div class="col-lg-4 col-md-6 col-6 col-product-grid shop-product-item" data-name="Sienna Burnished Penny Loafer" data-category="Loafers" data-price="12499">
                
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
            
              <div class="col-lg-4 col-md-6 col-6 col-product-grid shop-product-item" data-name="Kensington Braided Tassel Loafer" data-category="Loafers" data-price="13200">
                
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
            
              <div class="col-lg-4 col-md-6 col-6 col-product-grid shop-product-item" data-name="Mayfair Double Monk Strap" data-category="Formal Shoes" data-price="15499">
                
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
            
              <div class="col-lg-4 col-md-6 col-6 col-product-grid shop-product-item" data-name="Khyber Heritage Peshawari Chappal" data-category="Traditional Footwear" data-price="6899">
                
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
            
              <div class="col-lg-4 col-md-6 col-6 col-product-grid shop-product-item" data-name="Highland Burnished Chelsea Boot" data-category="Boots" data-price="15999">
                
  <div class="product-card">
    <div class="product-img-wrap">
      <div class="product-badges">
        
        
      </div>
      <button class="product-wishlist-btn" title="Add to Wishlist" data-product-id="NF-1006">
        <i class="bi bi-heart"></i>
      </button>
      <a href="product-details.php">
        <img src="https://images.unsplash.com/photo-1638247025967-b4e38f787b76?q=80&w=800&auto=format&fit=crop" alt="Highland Burnished Chelsea Boot" loading="lazy">
      </a>
      <div class="product-quick-actions">
        <button class="quick-view-btn btn-quick-add" data-product-title="Highland Burnished Chelsea Boot">
          <i class="bi bi-bag-plus me-1"></i> Quick Add
        </button>
      </div>
    </div>
    <div class="product-info">
      <div class="product-category">Boots</div>
      <h3 class="product-name">
        <a href="product-details.php">Highland Burnished Chelsea Boot</a>
      </h3>
      <div class="product-rating">
        <i class="bi bi-star-fill"></i>
        <i class="bi bi-star-fill"></i>
        <i class="bi bi-star-fill"></i>
        <i class="bi bi-star-fill"></i>
        <i class="bi bi-star-fill"></i>
        <span class="count">(41)</span>
      </div>
      <div class="product-price-box">
        <span class="current-price">PKR 15,999</span>
        <span class="original-price">PKR 18,500</span>
      </div>
      <div class="product-colors">
        <span class="color-dot" style="background-color: #2c1a0e;" title="Available Color"></span><span class="color-dot" style="background-color: #141414;" title="Available Color"></span>
      </div>
    </div>
  </div>
  
              </div>
            
              <div class="col-lg-4 col-md-6 col-6 col-product-grid shop-product-item" data-name="Veloce Minimalist Court Sneaker" data-category="Sneakers / Sports Shoes" data-price="9499">
                
  <div class="product-card">
    <div class="product-img-wrap">
      <div class="product-badges">
        <span class="badge-sale">Sale</span>
        <span class="badge-new">New</span>
      </div>
      <button class="product-wishlist-btn" title="Add to Wishlist" data-product-id="NF-1007">
        <i class="bi bi-heart"></i>
      </button>
      <a href="product-details.php">
        <img src="https://images.unsplash.com/photo-1525966222134-fcfa99b8ae77?q=80&w=800&auto=format&fit=crop" alt="Veloce Minimalist Court Sneaker" loading="lazy">
      </a>
      <div class="product-quick-actions">
        <button class="quick-view-btn btn-quick-add" data-product-title="Veloce Minimalist Court Sneaker">
          <i class="bi bi-bag-plus me-1"></i> Quick Add
        </button>
      </div>
    </div>
    <div class="product-info">
      <div class="product-category">Sneakers / Sports Shoes</div>
      <h3 class="product-name">
        <a href="product-details.php">Veloce Minimalist Court Sneaker</a>
      </h3>
      <div class="product-rating">
        <i class="bi bi-star-fill"></i>
        <i class="bi bi-star-fill"></i>
        <i class="bi bi-star-fill"></i>
        <i class="bi bi-star-fill"></i>
        <i class="bi bi-star-fill"></i>
        <span class="count">(67)</span>
      </div>
      <div class="product-price-box">
        <span class="current-price">PKR 9,499</span>
        <span class="original-price">PKR 11,000</span>
      </div>
      <div class="product-colors">
        <span class="color-dot" style="background-color: #f5f5f5;" title="Available Color"></span><span class="color-dot" style="background-color: #141414;" title="Available Color"></span><span class="color-dot" style="background-color: #d7c4b7;" title="Available Color"></span>
      </div>
    </div>
  </div>
  
              </div>
            
              <div class="col-lg-4 col-md-6 col-6 col-product-grid shop-product-item" data-name="Riviera Cross-Strap Leather Sandal" data-category="Sandals" data-price="5499">
                
  <div class="product-card">
    <div class="product-img-wrap">
      <div class="product-badges">
        
        
      </div>
      <button class="product-wishlist-btn" title="Add to Wishlist" data-product-id="NF-1008">
        <i class="bi bi-heart"></i>
      </button>
      <a href="product-details.php">
        <img src="https://images.unsplash.com/photo-1603808033192-082d6919d3e1?q=80&w=800&auto=format&fit=crop" alt="Riviera Cross-Strap Leather Sandal" loading="lazy">
      </a>
      <div class="product-quick-actions">
        <button class="quick-view-btn btn-quick-add" data-product-title="Riviera Cross-Strap Leather Sandal">
          <i class="bi bi-bag-plus me-1"></i> Quick Add
        </button>
      </div>
    </div>
    <div class="product-info">
      <div class="product-category">Sandals</div>
      <h3 class="product-name">
        <a href="product-details.php">Riviera Cross-Strap Leather Sandal</a>
      </h3>
      <div class="product-rating">
        <i class="bi bi-star-fill"></i>
        <i class="bi bi-star-fill"></i>
        <i class="bi bi-star-fill"></i>
        <i class="bi bi-star-fill"></i>
        <i class="bi bi-star-fill"></i>
        <span class="count">(19)</span>
      </div>
      <div class="product-price-box">
        <span class="current-price">PKR 5,499</span>
        <span class="original-price">PKR 6,500</span>
      </div>
      <div class="product-colors">
        <span class="color-dot" style="background-color: #4a2e19;" title="Available Color"></span><span class="color-dot" style="background-color: #111111;" title="Available Color"></span>
      </div>
    </div>
  </div>
  
              </div>
            
              <div class="col-lg-4 col-md-6 col-6 col-product-grid shop-product-item" data-name="Westminster Wingtip Derby Brogue" data-category="Formal Shoes" data-price="13999">
                
  <div class="product-card">
    <div class="product-img-wrap">
      <div class="product-badges">
        
        
      </div>
      <button class="product-wishlist-btn" title="Add to Wishlist" data-product-id="NF-1009">
        <i class="bi bi-heart"></i>
      </button>
      <a href="product-details.php">
        <img src="https://images.unsplash.com/photo-1582898967732-7235a8e0f93a?q=80&w=800&auto=format&fit=crop" alt="Westminster Wingtip Derby Brogue" loading="lazy">
      </a>
      <div class="product-quick-actions">
        <button class="quick-view-btn btn-quick-add" data-product-title="Westminster Wingtip Derby Brogue">
          <i class="bi bi-bag-plus me-1"></i> Quick Add
        </button>
      </div>
    </div>
    <div class="product-info">
      <div class="product-category">Formal Shoes</div>
      <h3 class="product-name">
        <a href="product-details.php">Westminster Wingtip Derby Brogue</a>
      </h3>
      <div class="product-rating">
        <i class="bi bi-star-fill"></i>
        <i class="bi bi-star-fill"></i>
        <i class="bi bi-star-fill"></i>
        <i class="bi bi-star-fill"></i>
        <i class="bi bi-star-fill"></i>
        <span class="count">(31)</span>
      </div>
      <div class="product-price-box">
        <span class="current-price">PKR 13,999</span>
        <span class="original-price">PKR 16,000</span>
      </div>
      <div class="product-colors">
        <span class="color-dot" style="background-color: #522915;" title="Available Color"></span><span class="color-dot" style="background-color: #141414;" title="Available Color"></span>
      </div>
    </div>
  </div>
  
              </div>
            
              <div class="col-lg-4 col-md-6 col-6 col-product-grid shop-product-item" data-name="Amalfi Velour Suede Loafer" data-category="Loafers" data-price="11999">
                
  <div class="product-card">
    <div class="product-img-wrap">
      <div class="product-badges">
        <span class="badge-sale">Sale</span>
        <span class="badge-new">New</span>
      </div>
      <button class="product-wishlist-btn" title="Add to Wishlist" data-product-id="NF-1010">
        <i class="bi bi-heart"></i>
      </button>
      <a href="product-details.php">
        <img src="https://images.unsplash.com/photo-1595950653106-6c9ebd614d3a?q=80&w=800&auto=format&fit=crop" alt="Amalfi Velour Suede Loafer" loading="lazy">
      </a>
      <div class="product-quick-actions">
        <button class="quick-view-btn btn-quick-add" data-product-title="Amalfi Velour Suede Loafer">
          <i class="bi bi-bag-plus me-1"></i> Quick Add
        </button>
      </div>
    </div>
    <div class="product-info">
      <div class="product-category">Loafers</div>
      <h3 class="product-name">
        <a href="product-details.php">Amalfi Velour Suede Loafer</a>
      </h3>
      <div class="product-rating">
        <i class="bi bi-star-fill"></i>
        <i class="bi bi-star-fill"></i>
        <i class="bi bi-star-fill"></i>
        <i class="bi bi-star-fill"></i>
        <i class="bi bi-star-fill"></i>
        <span class="count">(26)</span>
      </div>
      <div class="product-price-box">
        <span class="current-price">PKR 11,999</span>
        <span class="original-price">PKR 13,500</span>
      </div>
      <div class="product-colors">
        <span class="color-dot" style="background-color: #3b4959;" title="Available Color"></span><span class="color-dot" style="background-color: #b39474;" title="Available Color"></span><span class="color-dot" style="background-color: #504136;" title="Available Color"></span>
      </div>
    </div>
  </div>
  
              </div>
            
              <div class="col-lg-4 col-md-6 col-6 col-product-grid shop-product-item" data-name="Sahara Sand Suede Chukka Boot" data-category="Boots" data-price="13499">
                
  <div class="product-card">
    <div class="product-img-wrap">
      <div class="product-badges">
        
        
      </div>
      <button class="product-wishlist-btn" title="Add to Wishlist" data-product-id="NF-1011">
        <i class="bi bi-heart"></i>
      </button>
      <a href="product-details.php">
        <img src="https://images.unsplash.com/photo-1520639888713-7851133b1ed0?q=80&w=800&auto=format&fit=crop" alt="Sahara Sand Suede Chukka Boot" loading="lazy">
      </a>
      <div class="product-quick-actions">
        <button class="quick-view-btn btn-quick-add" data-product-title="Sahara Sand Suede Chukka Boot">
          <i class="bi bi-bag-plus me-1"></i> Quick Add
        </button>
      </div>
    </div>
    <div class="product-info">
      <div class="product-category">Boots</div>
      <h3 class="product-name">
        <a href="product-details.php">Sahara Sand Suede Chukka Boot</a>
      </h3>
      <div class="product-rating">
        <i class="bi bi-star-fill"></i>
        <i class="bi bi-star-fill"></i>
        <i class="bi bi-star-fill"></i>
        <i class="bi bi-star-fill"></i>
        <i class="bi bi-star-fill"></i>
        <span class="count">(18)</span>
      </div>
      <div class="product-price-box">
        <span class="current-price">PKR 13,499</span>
        <span class="original-price">PKR 15,000</span>
      </div>
      <div class="product-colors">
        <span class="color-dot" style="background-color: #c5a782;" title="Available Color"></span><span class="color-dot" style="background-color: #1e1e1e;" title="Available Color"></span>
      </div>
    </div>
  </div>
  
              </div>
            
              <div class="col-lg-4 col-md-6 col-6 col-product-grid shop-product-item" data-name="Monaco Pebble-Grain Driving Shoe" data-category="Casual Shoes" data-price="8999">
                
  <div class="product-card">
    <div class="product-img-wrap">
      <div class="product-badges">
        <span class="badge-sale">Sale</span>
        
      </div>
      <button class="product-wishlist-btn" title="Add to Wishlist" data-product-id="NF-1012">
        <i class="bi bi-heart"></i>
      </button>
      <a href="product-details.php">
        <img src="https://images.unsplash.com/photo-1575537302964-96cd47c06b1b?q=80&w=800&auto=format&fit=crop" alt="Monaco Pebble-Grain Driving Shoe" loading="lazy">
      </a>
      <div class="product-quick-actions">
        <button class="quick-view-btn btn-quick-add" data-product-title="Monaco Pebble-Grain Driving Shoe">
          <i class="bi bi-bag-plus me-1"></i> Quick Add
        </button>
      </div>
    </div>
    <div class="product-info">
      <div class="product-category">Casual Shoes</div>
      <h3 class="product-name">
        <a href="product-details.php">Monaco Pebble-Grain Driving Shoe</a>
      </h3>
      <div class="product-rating">
        <i class="bi bi-star-fill"></i>
        <i class="bi bi-star-fill"></i>
        <i class="bi bi-star-fill"></i>
        <i class="bi bi-star-fill"></i>
        <i class="bi bi-star-fill"></i>
        <span class="count">(47)</span>
      </div>
      <div class="product-price-box">
        <span class="current-price">PKR 8,999</span>
        <span class="original-price">PKR 10,500</span>
      </div>
      <div class="product-colors">
        <span class="color-dot" style="background-color: #213247;" title="Available Color"></span><span class="color-dot" style="background-color: #5a341a;" title="Available Color"></span><span class="color-dot" style="background-color: #111111;" title="Available Color"></span>
      </div>
    </div>
  </div>
  
              </div>
            
              <div class="col-lg-4 col-md-6 col-6 col-product-grid shop-product-item" data-name="Waziristan Kaptaan Chappal" data-category="Traditional Footwear" data-price="7499">
                
  <div class="product-card">
    <div class="product-img-wrap">
      <div class="product-badges">
        
        
      </div>
      <button class="product-wishlist-btn" title="Add to Wishlist" data-product-id="NF-1013">
        <i class="bi bi-heart"></i>
      </button>
      <a href="product-details.php">
        <img src="https://images.unsplash.com/photo-1608256246200-53e635b5b65f?q=80&w=800&auto=format&fit=crop" alt="Waziristan Kaptaan Chappal" loading="lazy">
      </a>
      <div class="product-quick-actions">
        <button class="quick-view-btn btn-quick-add" data-product-title="Waziristan Kaptaan Chappal">
          <i class="bi bi-bag-plus me-1"></i> Quick Add
        </button>
      </div>
    </div>
    <div class="product-info">
      <div class="product-category">Traditional Footwear</div>
      <h3 class="product-name">
        <a href="product-details.php">Waziristan Kaptaan Chappal</a>
      </h3>
      <div class="product-rating">
        <i class="bi bi-star-fill"></i>
        <i class="bi bi-star-fill"></i>
        <i class="bi bi-star-fill"></i>
        <i class="bi bi-star-fill"></i>
        <i class="bi bi-star-fill"></i>
        <span class="count">(92)</span>
      </div>
      <div class="product-price-box">
        <span class="current-price">PKR 7,499</span>
        <span class="original-price">PKR 8,500</span>
      </div>
      <div class="product-colors">
        <span class="color-dot" style="background-color: #111111;" title="Available Color"></span><span class="color-dot" style="background-color: #42281a;" title="Available Color"></span>
      </div>
    </div>
  </div>
  
              </div>
            
              <div class="col-lg-4 col-md-6 col-6 col-product-grid shop-product-item" data-name="Edinburgh Plain Toe Derby" data-category="Formal Shoes" data-price="12999">
                
  <div class="product-card">
    <div class="product-img-wrap">
      <div class="product-badges">
        
        <span class="badge-new">New</span>
      </div>
      <button class="product-wishlist-btn" title="Add to Wishlist" data-product-id="NF-1014">
        <i class="bi bi-heart"></i>
      </button>
      <a href="product-details.php">
        <img src="https://images.unsplash.com/photo-1614252235316-8c857d38b5f4?q=80&w=800&auto=format&fit=crop" alt="Edinburgh Plain Toe Derby" loading="lazy">
      </a>
      <div class="product-quick-actions">
        <button class="quick-view-btn btn-quick-add" data-product-title="Edinburgh Plain Toe Derby">
          <i class="bi bi-bag-plus me-1"></i> Quick Add
        </button>
      </div>
    </div>
    <div class="product-info">
      <div class="product-category">Formal Shoes</div>
      <h3 class="product-name">
        <a href="product-details.php">Edinburgh Plain Toe Derby</a>
      </h3>
      <div class="product-rating">
        <i class="bi bi-star-fill"></i>
        <i class="bi bi-star-fill"></i>
        <i class="bi bi-star-fill"></i>
        <i class="bi bi-star-fill"></i>
        <i class="bi bi-star-fill"></i>
        <span class="count">(15)</span>
      </div>
      <div class="product-price-box">
        <span class="current-price">PKR 12,999</span>
        <span class="original-price">PKR 14,500</span>
      </div>
      <div class="product-colors">
        <span class="color-dot" style="background-color: #111111;" title="Available Color"></span><span class="color-dot" style="background-color: #4f2b14;" title="Available Color"></span>
      </div>
    </div>
  </div>
  
              </div>
            
              <div class="col-lg-4 col-md-6 col-6 col-product-grid shop-product-item" data-name="Aerolight Knit Lifestyle Trainer" data-category="Sneakers / Sports Shoes" data-price="8499">
                
  <div class="product-card">
    <div class="product-img-wrap">
      <div class="product-badges">
        <span class="badge-sale">Sale</span>
        
      </div>
      <button class="product-wishlist-btn" title="Add to Wishlist" data-product-id="NF-1015">
        <i class="bi bi-heart"></i>
      </button>
      <a href="product-details.php">
        <img src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?q=80&w=800&auto=format&fit=crop" alt="Aerolight Knit Lifestyle Trainer" loading="lazy">
      </a>
      <div class="product-quick-actions">
        <button class="quick-view-btn btn-quick-add" data-product-title="Aerolight Knit Lifestyle Trainer">
          <i class="bi bi-bag-plus me-1"></i> Quick Add
        </button>
      </div>
    </div>
    <div class="product-info">
      <div class="product-category">Sneakers / Sports Shoes</div>
      <h3 class="product-name">
        <a href="product-details.php">Aerolight Knit Lifestyle Trainer</a>
      </h3>
      <div class="product-rating">
        <i class="bi bi-star-fill"></i>
        <i class="bi bi-star-fill"></i>
        <i class="bi bi-star-fill"></i>
        <i class="bi bi-star-fill"></i>
        <i class="bi bi-star-fill"></i>
        <span class="count">(44)</span>
      </div>
      <div class="product-price-box">
        <span class="current-price">PKR 8,499</span>
        <span class="original-price">PKR 9,999</span>
      </div>
      <div class="product-colors">
        <span class="color-dot" style="background-color: #111111;" title="Available Color"></span><span class="color-dot" style="background-color: #888888;" title="Available Color"></span>
      </div>
    </div>
  </div>
  
              </div>
            
              <div class="col-lg-4 col-md-6 col-6 col-product-grid shop-product-item" data-name="Savoy Quilted Velvet Mule Slipper" data-category="Slippers" data-price="6499">
                
  <div class="product-card">
    <div class="product-img-wrap">
      <div class="product-badges">
        
        <span class="badge-new">New</span>
      </div>
      <button class="product-wishlist-btn" title="Add to Wishlist" data-product-id="NF-1016">
        <i class="bi bi-heart"></i>
      </button>
      <a href="product-details.php">
        <img src="https://images.unsplash.com/photo-1575537302964-96cd47c06b1b?q=80&w=800&auto=format&fit=crop" alt="Savoy Quilted Velvet Mule Slipper" loading="lazy">
      </a>
      <div class="product-quick-actions">
        <button class="quick-view-btn btn-quick-add" data-product-title="Savoy Quilted Velvet Mule Slipper">
          <i class="bi bi-bag-plus me-1"></i> Quick Add
        </button>
      </div>
    </div>
    <div class="product-info">
      <div class="product-category">Slippers</div>
      <h3 class="product-name">
        <a href="product-details.php">Savoy Quilted Velvet Mule Slipper</a>
      </h3>
      <div class="product-rating">
        <i class="bi bi-star-fill"></i>
        <i class="bi bi-star-fill"></i>
        <i class="bi bi-star-fill"></i>
        <i class="bi bi-star-fill"></i>
        <i class="bi bi-star-fill"></i>
        <span class="count">(20)</span>
      </div>
      <div class="product-price-box">
        <span class="current-price">PKR 6,499</span>
        <span class="original-price">PKR 7,500</span>
      </div>
      <div class="product-colors">
        <span class="color-dot" style="background-color: #1d2433;" title="Available Color"></span><span class="color-dot" style="background-color: #3d141b;" title="Available Color"></span>
      </div>
    </div>
  </div>
  
              </div>
            
              <div class="col-lg-4 col-md-6 col-6 col-product-grid shop-product-item" data-name="Balochi Traditional Embroidered Sandal" data-category="Traditional Footwear" data-price="5999">
                
  <div class="product-card">
    <div class="product-img-wrap">
      <div class="product-badges">
        <span class="badge-sale">Sale</span>
        
      </div>
      <button class="product-wishlist-btn" title="Add to Wishlist" data-product-id="NF-1017">
        <i class="bi bi-heart"></i>
      </button>
      <a href="product-details.php">
        <img src="https://images.unsplash.com/photo-1603808033192-082d6919d3e1?q=80&w=800&auto=format&fit=crop" alt="Balochi Traditional Embroidered Sandal" loading="lazy">
      </a>
      <div class="product-quick-actions">
        <button class="quick-view-btn btn-quick-add" data-product-title="Balochi Traditional Embroidered Sandal">
          <i class="bi bi-bag-plus me-1"></i> Quick Add
        </button>
      </div>
    </div>
    <div class="product-info">
      <div class="product-category">Traditional Footwear</div>
      <h3 class="product-name">
        <a href="product-details.php">Balochi Traditional Embroidered Sandal</a>
      </h3>
      <div class="product-rating">
        <i class="bi bi-star-fill"></i>
        <i class="bi bi-star-fill"></i>
        <i class="bi bi-star-fill"></i>
        <i class="bi bi-star-fill"></i>
        <i class="bi bi-star-fill"></i>
        <span class="count">(37)</span>
      </div>
      <div class="product-price-box">
        <span class="current-price">PKR 5,999</span>
        <span class="original-price">PKR 7,000</span>
      </div>
      <div class="product-colors">
        <span class="color-dot" style="background-color: #633918;" title="Available Color"></span><span class="color-dot" style="background-color: #111111;" title="Available Color"></span>
      </div>
    </div>
  </div>
  
              </div>
            
              <div class="col-lg-4 col-md-6 col-6 col-product-grid shop-product-item" data-name="Himalayan Rugged Combat Boot" data-category="Boots" data-price="16999">
                
  <div class="product-card">
    <div class="product-img-wrap">
      <div class="product-badges">
        
        
      </div>
      <button class="product-wishlist-btn" title="Add to Wishlist" data-product-id="NF-1018">
        <i class="bi bi-heart"></i>
      </button>
      <a href="product-details.php">
        <img src="https://images.unsplash.com/photo-1549298916-b41d501d3772?q=80&w=800&auto=format&fit=crop" alt="Himalayan Rugged Combat Boot" loading="lazy">
      </a>
      <div class="product-quick-actions">
        <button class="quick-view-btn btn-quick-add" data-product-title="Himalayan Rugged Combat Boot">
          <i class="bi bi-bag-plus me-1"></i> Quick Add
        </button>
      </div>
    </div>
    <div class="product-info">
      <div class="product-category">Boots</div>
      <h3 class="product-name">
        <a href="product-details.php">Himalayan Rugged Combat Boot</a>
      </h3>
      <div class="product-rating">
        <i class="bi bi-star-fill"></i>
        <i class="bi bi-star-fill"></i>
        <i class="bi bi-star-fill"></i>
        <i class="bi bi-star-fill"></i>
        <i class="bi bi-star-fill"></i>
        <span class="count">(28)</span>
      </div>
      <div class="product-price-box">
        <span class="current-price">PKR 16,999</span>
        <span class="original-price">PKR 19,500</span>
      </div>
      <div class="product-colors">
        <span class="color-dot" style="background-color: #241e1b;" title="Available Color"></span><span class="color-dot" style="background-color: #4a3525;" title="Available Color"></span>
      </div>
    </div>
  </div>
  
              </div>
            
              <div class="col-lg-4 col-md-6 col-6 col-product-grid shop-product-item" data-name="Verona Perforated Derby Sneaker" data-category="Casual Shoes" data-price="9999">
                
  <div class="product-card">
    <div class="product-img-wrap">
      <div class="product-badges">
        
        <span class="badge-new">New</span>
      </div>
      <button class="product-wishlist-btn" title="Add to Wishlist" data-product-id="NF-1019">
        <i class="bi bi-heart"></i>
      </button>
      <a href="product-details.php">
        <img src="https://images.unsplash.com/photo-1560769629-975ec94e6a86?q=80&w=800&auto=format&fit=crop" alt="Verona Perforated Derby Sneaker" loading="lazy">
      </a>
      <div class="product-quick-actions">
        <button class="quick-view-btn btn-quick-add" data-product-title="Verona Perforated Derby Sneaker">
          <i class="bi bi-bag-plus me-1"></i> Quick Add
        </button>
      </div>
    </div>
    <div class="product-info">
      <div class="product-category">Casual Shoes</div>
      <h3 class="product-name">
        <a href="product-details.php">Verona Perforated Derby Sneaker</a>
      </h3>
      <div class="product-rating">
        <i class="bi bi-star-fill"></i>
        <i class="bi bi-star-fill"></i>
        <i class="bi bi-star-fill"></i>
        <i class="bi bi-star-fill"></i>
        <i class="bi bi-star-fill"></i>
        <span class="count">(16)</span>
      </div>
      <div class="product-price-box">
        <span class="current-price">PKR 9,999</span>
        <span class="original-price">PKR 11,500</span>
      </div>
      <div class="product-colors">
        <span class="color-dot" style="background-color: #3b2a1a;" title="Available Color"></span><span class="color-dot" style="background-color: #141414;" title="Available Color"></span>
      </div>
    </div>
  </div>
  
              </div>
            
              <div class="col-lg-4 col-md-6 col-6 col-product-grid shop-product-item" data-name="Atlas Ergonomic Comfort Slide" data-category="Sandals" data-price="4999">
                
  <div class="product-card">
    <div class="product-img-wrap">
      <div class="product-badges">
        <span class="badge-sale">Sale</span>
        
      </div>
      <button class="product-wishlist-btn" title="Add to Wishlist" data-product-id="NF-1020">
        <i class="bi bi-heart"></i>
      </button>
      <a href="product-details.php">
        <img src="https://images.unsplash.com/photo-1603808033192-082d6919d3e1?q=80&w=800&auto=format&fit=crop" alt="Atlas Ergonomic Comfort Slide" loading="lazy">
      </a>
      <div class="product-quick-actions">
        <button class="quick-view-btn btn-quick-add" data-product-title="Atlas Ergonomic Comfort Slide">
          <i class="bi bi-bag-plus me-1"></i> Quick Add
        </button>
      </div>
    </div>
    <div class="product-info">
      <div class="product-category">Sandals</div>
      <h3 class="product-name">
        <a href="product-details.php">Atlas Ergonomic Comfort Slide</a>
      </h3>
      <div class="product-rating">
        <i class="bi bi-star-fill"></i>
        <i class="bi bi-star-fill"></i>
        <i class="bi bi-star-fill"></i>
        <i class="bi bi-star-fill"></i>
        <i class="bi bi-star-fill"></i>
        <span class="count">(34)</span>
      </div>
      <div class="product-price-box">
        <span class="current-price">PKR 4,999</span>
        <span class="original-price">PKR 5,999</span>
      </div>
      <div class="product-colors">
        <span class="color-dot" style="background-color: #111111;" title="Available Color"></span><span class="color-dot" style="background-color: #593822;" title="Available Color"></span>
      </div>
    </div>
  </div>
  
              </div>
            
              <div class="col-lg-4 col-md-6 col-6 col-product-grid shop-product-item" data-name="Carlton Suede Outdoor Slipper" data-category="Slippers" data-price="5499">
                
  <div class="product-card">
    <div class="product-img-wrap">
      <div class="product-badges">
        
        
      </div>
      <button class="product-wishlist-btn" title="Add to Wishlist" data-product-id="NF-1021">
        <i class="bi bi-heart"></i>
      </button>
      <a href="product-details.php">
        <img src="https://images.unsplash.com/photo-1575537302964-96cd47c06b1b?q=80&w=800&auto=format&fit=crop" alt="Carlton Suede Outdoor Slipper" loading="lazy">
      </a>
      <div class="product-quick-actions">
        <button class="quick-view-btn btn-quick-add" data-product-title="Carlton Suede Outdoor Slipper">
          <i class="bi bi-bag-plus me-1"></i> Quick Add
        </button>
      </div>
    </div>
    <div class="product-info">
      <div class="product-category">Slippers</div>
      <h3 class="product-name">
        <a href="product-details.php">Carlton Suede Outdoor Slipper</a>
      </h3>
      <div class="product-rating">
        <i class="bi bi-star-fill"></i>
        <i class="bi bi-star-fill"></i>
        <i class="bi bi-star-fill"></i>
        <i class="bi bi-star-fill"></i>
        <i class="bi bi-star-fill"></i>
        <span class="count">(23)</span>
      </div>
      <div class="product-price-box">
        <span class="current-price">PKR 5,499</span>
        <span class="original-price">PKR 6,200</span>
      </div>
      <div class="product-colors">
        <span class="color-dot" style="background-color: #483528;" title="Available Color"></span><span class="color-dot" style="background-color: #1c222b;" title="Available Color"></span>
      </div>
    </div>
  </div>
  
              </div>
            
              <div class="col-lg-4 col-md-6 col-6 col-product-grid shop-product-item" data-name="Milano Retro High-Top Sneaker" data-category="Sneakers / Sports Shoes" data-price="10499">
                
  <div class="product-card">
    <div class="product-img-wrap">
      <div class="product-badges">
        
        <span class="badge-new">New</span>
      </div>
      <button class="product-wishlist-btn" title="Add to Wishlist" data-product-id="NF-1022">
        <i class="bi bi-heart"></i>
      </button>
      <a href="product-details.php">
        <img src="https://images.unsplash.com/photo-1549298916-b41d501d3772?q=80&w=800&auto=format&fit=crop" alt="Milano Retro High-Top Sneaker" loading="lazy">
      </a>
      <div class="product-quick-actions">
        <button class="quick-view-btn btn-quick-add" data-product-title="Milano Retro High-Top Sneaker">
          <i class="bi bi-bag-plus me-1"></i> Quick Add
        </button>
      </div>
    </div>
    <div class="product-info">
      <div class="product-category">Sneakers / Sports Shoes</div>
      <h3 class="product-name">
        <a href="product-details.php">Milano Retro High-Top Sneaker</a>
      </h3>
      <div class="product-rating">
        <i class="bi bi-star-fill"></i>
        <i class="bi bi-star-fill"></i>
        <i class="bi bi-star-fill"></i>
        <i class="bi bi-star-fill"></i>
        <i class="bi bi-star-fill"></i>
        <span class="count">(39)</span>
      </div>
      <div class="product-price-box">
        <span class="current-price">PKR 10,499</span>
        <span class="original-price">PKR 12,000</span>
      </div>
      <div class="product-colors">
        <span class="color-dot" style="background-color: #f5f5f5;" title="Available Color"></span><span class="color-dot" style="background-color: #141414;" title="Available Color"></span>
      </div>
    </div>
  </div>
  
              </div>
            
              <div class="col-lg-4 col-md-6 col-6 col-product-grid shop-product-item" data-name="Portofino Woven Leather Penny Loafer" data-category="Loafers" data-price="14499">
                
  <div class="product-card">
    <div class="product-img-wrap">
      <div class="product-badges">
        
        <span class="badge-new">New</span>
      </div>
      <button class="product-wishlist-btn" title="Add to Wishlist" data-product-id="NF-1023">
        <i class="bi bi-heart"></i>
      </button>
      <a href="product-details.php">
        <img src="https://images.unsplash.com/photo-1533867617858-e7b97e060509?q=80&w=800&auto=format&fit=crop" alt="Portofino Woven Leather Penny Loafer" loading="lazy">
      </a>
      <div class="product-quick-actions">
        <button class="quick-view-btn btn-quick-add" data-product-title="Portofino Woven Leather Penny Loafer">
          <i class="bi bi-bag-plus me-1"></i> Quick Add
        </button>
      </div>
    </div>
    <div class="product-info">
      <div class="product-category">Loafers</div>
      <h3 class="product-name">
        <a href="product-details.php">Portofino Woven Leather Penny Loafer</a>
      </h3>
      <div class="product-rating">
        <i class="bi bi-star-fill"></i>
        <i class="bi bi-star-fill"></i>
        <i class="bi bi-star-fill"></i>
        <i class="bi bi-star-fill"></i>
        <i class="bi bi-star-fill"></i>
        <span class="count">(19)</span>
      </div>
      <div class="product-price-box">
        <span class="current-price">PKR 14,499</span>
        <span class="original-price">PKR 16,500</span>
      </div>
      <div class="product-colors">
        <span class="color-dot" style="background-color: #54321b;" title="Available Color"></span><span class="color-dot" style="background-color: #141414;" title="Available Color"></span>
      </div>
    </div>
  </div>
  
              </div>
            
              <div class="col-lg-4 col-md-6 col-6 col-product-grid shop-product-item" data-name="Cambridge Cap-Toe Semi-Brogue" data-category="Formal Shoes" data-price="13999">
                
  <div class="product-card">
    <div class="product-img-wrap">
      <div class="product-badges">
        <span class="badge-sale">Sale</span>
        
      </div>
      <button class="product-wishlist-btn" title="Add to Wishlist" data-product-id="NF-1024">
        <i class="bi bi-heart"></i>
      </button>
      <a href="product-details.php">
        <img src="https://images.unsplash.com/photo-1614252235316-8c857d38b5f4?q=80&w=800&auto=format&fit=crop" alt="Cambridge Cap-Toe Semi-Brogue" loading="lazy">
      </a>
      <div class="product-quick-actions">
        <button class="quick-view-btn btn-quick-add" data-product-title="Cambridge Cap-Toe Semi-Brogue">
          <i class="bi bi-bag-plus me-1"></i> Quick Add
        </button>
      </div>
    </div>
    <div class="product-info">
      <div class="product-category">Formal Shoes</div>
      <h3 class="product-name">
        <a href="product-details.php">Cambridge Cap-Toe Semi-Brogue</a>
      </h3>
      <div class="product-rating">
        <i class="bi bi-star-fill"></i>
        <i class="bi bi-star-fill"></i>
        <i class="bi bi-star-fill"></i>
        <i class="bi bi-star-fill"></i>
        <i class="bi bi-star-fill"></i>
        <span class="count">(35)</span>
      </div>
      <div class="product-price-box">
        <span class="current-price">PKR 13,999</span>
        <span class="original-price">PKR 15,999</span>
      </div>
      <div class="product-colors">
        <span class="color-dot" style="background-color: #141414;" title="Available Color"></span><span class="color-dot" style="background-color: #4a2c14;" title="Available Color"></span>
      </div>
    </div>
  </div>
  
              </div>
            
          </div>

          <!-- Pagination -->
          <nav class="mt-5 d-flex justify-content-center" aria-label="Page navigation">
            <ul class="pagination pagination-sm">
              <li class="page-item disabled"><a class="page-link" href="#"><i class="bi bi-chevron-left"></i></a></li>
              <li class="page-item active"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item"><a class="page-link" href="#"><i class="bi bi-chevron-right"></i></a></li>
            </ul>
          </nav>

        </div>

      </div>

    </div>
  </main>

<?php require_once __DIR__ . '/partials/footer.php'; ?>
