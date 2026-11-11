<?php
$activePage = $activePage ?? basename($_SERVER['SCRIPT_NAME'] ?? '');
?>
  <!-- Top Announcement Bar -->
  <div class="announcement-bar">
    <div class="container d-flex justify-content-between align-items-center">
      <div class="d-none d-md-flex align-items-center gap-3">
        <span><i class="bi bi-shield-check text-warning me-1"></i> 100% Genuine Full-Grain Leather</span>
        <span class="text-white-50">|</span>
        <span><i class="bi bi-truck text-warning me-1"></i> Cash on Delivery Across Pakistan</span>
      </div>
      <div class="mx-auto mx-md-0 text-center">
        <span>Complimentary Express Delivery on orders above PKR 10,000 <span class="badge-pak ms-1">PKR</span></span>
      </div>
      <div class="d-none d-lg-flex align-items-center gap-3">
        <a href="size-guide.php" class="text-white-50 text-decoration-none hover-white"><i class="bi bi-rulers me-1"></i> Size Guide</a>
        <a href="contact.php" class="text-white-50 text-decoration-none hover-white"><i class="bi bi-telephone me-1"></i> Helpline</a>
        <a href="../dashboard/index.php" class="badge bg-secondary text-white text-decoration-none px-2 py-1"><i class="bi bi-speedometer2 me-1"></i> Admin Portal</a>
      </div>
    </div>
  </div>

  <!-- Main Navigation -->
  <header class="nova-navbar">
    <div class="container">
      <div class="d-flex align-items-center justify-content-between">
        
        <!-- Mobile Menu Toggle Button -->
        <button class="navbar-toggler d-lg-none border-0 p-0 text-dark me-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileNavOffcanvas" aria-controls="mobileNavOffcanvas">
          <i class="bi bi-list fs-2"></i>
        </button>

        <!-- Brand Identity -->
        <a href="index.php" class="brand-logo text-decoration-none me-4">
          NOVA FORM<span class="dot"></span>
        </a>

        <!-- Desktop Navigation Links -->
        <nav class="d-none d-lg-flex align-items-center gap-1">
          <a href="index.php" class="nav-link-nova <?= ($activePage === 'index.php') ? 'active' : '' ?>">Home</a>
          <a href="shop.php" class="nav-link-nova <?= ($activePage === 'shop.php') ? 'active' : '' ?>">Shop All</a>
          
          <div class="dropdown">
            <a href="category.php" class="nav-link-nova dropdown-toggle <?= ($activePage === 'category.php') ? 'active' : '' ?>" data-bs-toggle="dropdown" aria-expanded="false">
              Categories
            </a>
            <ul class="dropdown-menu dropdown-menu-nova shadow-sm">
              <li><a class="dropdown-item" href="category.php"><i class="bi bi-suit-club me-2 text-muted"></i> Formal Shoes</a></li>
              <li><a class="dropdown-item" href="category.php"><i class="bi bi-layers me-2 text-muted"></i> Luxury Loafers</a></li>
              <li><a class="dropdown-item" href="category.php"><i class="bi bi-compass me-2 text-muted"></i> Casual Shoes</a></li>
              <li><a class="dropdown-item" href="category.php"><i class="bi bi-lightning-charge me-2 text-muted"></i> Sneakers & Trainers</a></li>
              <li><a class="dropdown-item" href="category.php"><i class="bi bi-sun me-2 text-muted"></i> Leather Sandals</a></li>
              <li><a class="dropdown-item" href="category.php"><i class="bi bi-shield-check me-2 text-muted"></i> Traditional Peshawari</a></li>
              <li><a class="dropdown-item" href="category.php"><i class="bi bi-gem me-2 text-muted"></i> Chelsea & Boots</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item text-danger fw-semibold" href="shop.php"><i class="bi bi-tag me-2"></i> View Special Offers</a></li>
            </ul>
          </div>

          <a href="category.php" class="nav-link-nova">Formal</a>
          <a href="category.php" class="nav-link-nova">Loafers</a>
          <a href="category.php" class="nav-link-nova">Traditional</a>
          <a href="about.php" class="nav-link-nova <?= ($activePage === 'about.php') ? 'active' : '' ?>">About</a>
          <a href="shop.php" class="nav-link-nova sale-link">Sale</a>
        </nav>

        <!-- Action Icons -->
        <div class="d-flex align-items-center gap-1">
          <button class="nav-action-btn" data-bs-toggle="modal" data-bs-target="#searchModal" title="Search catalog">
            <i class="bi bi-search"></i>
          </button>
          
          <div class="dropdown">
            <button class="nav-action-btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" title="Account">
              <i class="bi bi-person"></i>
            </button>
            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-nova shadow-sm">
              <li><h6 class="dropdown-header text-uppercase text-muted small fw-bold">Customer Portal</h6></li>
              <li><a class="dropdown-item" href="account.php"><i class="bi bi-person-circle me-2 text-muted"></i> My Account</a></li>
              <li><a class="dropdown-item" href="orders.php"><i class="bi bi-bag-check me-2 text-muted"></i> Order History</a></li>
              <li><a class="dropdown-item" href="wishlist.php"><i class="bi bi-heart me-2 text-muted"></i> Wishlist</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="login.php"><i class="bi bi-box-arrow-in-right me-2 text-muted"></i> Sign In</a></li>
              <li><a class="dropdown-item" href="register.php"><i class="bi bi-person-plus me-2 text-muted"></i> Create Account</a></li>
            </ul>
          </div>

          <a href="wishlist.php" class="nav-action-btn" title="Saved Wishlist">
            <i class="bi bi-heart"></i>
            <span class="nav-action-badge wishlist-count-badge">3</span>
          </a>

          <a href="cart.php" class="nav-action-btn" title="Shopping Bag">
            <i class="bi bi-bag"></i>
            <span class="nav-action-badge cart-count-badge">2</span>
          </a>
        </div>

      </div>
    </div>
  </header>

  <!-- Mobile Offcanvas Menu -->
  <div class="offcanvas offcanvas-start" tabindex="-1" id="mobileNavOffcanvas" aria-labelledby="mobileNavLabel">
    <div class="offcanvas-header border-bottom">
      <h5 class="offcanvas-title brand-logo" id="mobileNavLabel">NOVA FORM<span class="dot"></span></h5>
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body p-4">
      <div class="mb-4">
        <form action="shop.php" method="GET">
          <div class="input-group">
            <input type="text" name="q" class="form-control form-control-nova" placeholder="Search shoes, loafers, boots...">
            <button class="btn btn-dark" type="submit"><i class="bi bi-search"></i></button>
          </div>
        </form>
      </div>

      <ul class="list-unstyled mb-4">
        <li class="mb-2"><a href="index.php" class="d-block py-2 text-decoration-none fw-semibold border-bottom">Home</a></li>
        <li class="mb-2"><a href="shop.php" class="d-block py-2 text-decoration-none fw-semibold border-bottom">Shop All Footwear</a></li>
        <li class="mb-2"><a href="category.php" class="d-block py-2 text-decoration-none fw-semibold border-bottom">Formal Shoes</a></li>
        <li class="mb-2"><a href="category.php" class="d-block py-2 text-decoration-none fw-semibold border-bottom">Loafers & Slip-ons</a></li>
        <li class="mb-2"><a href="category.php" class="d-block py-2 text-decoration-none fw-semibold border-bottom">Traditional Peshawari</a></li>
        <li class="mb-2"><a href="category.php" class="d-block py-2 text-decoration-none fw-semibold border-bottom">Sneakers & Trainers</a></li>
        <li class="mb-2"><a href="size-guide.php" class="d-block py-2 text-decoration-none fw-semibold border-bottom">Shoe Size Guide (EU 39-46)</a></li>
        <li class="mb-2"><a href="about.php" class="d-block py-2 text-decoration-none fw-semibold border-bottom">About NOVA FORM</a></li>
        <li class="mb-2"><a href="contact.php" class="d-block py-2 text-decoration-none fw-semibold border-bottom">Contact & Stores</a></li>
      </ul>

      <div class="border-top pt-3">
        <div class="d-flex flex-column gap-2">
          <a href="account.php" class="btn btn-outline-dark w-100 py-2"><i class="bi bi-person me-2"></i> Customer Account</a>
          <a href="../dashboard/index.php" class="btn btn-dark w-100 py-2"><i class="bi bi-shield-lock me-2"></i> Admin Dashboard</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Search Modal -->
  <div class="modal fade" id="searchModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content border-0 shadow-lg">
        <div class="modal-body p-4">
          <div class="d-flex justify-content-between align-items-center mb-3">
            <h6 class="text-uppercase fw-bold text-muted small mb-0">Search NOVA FORM Catalog</h6>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <form action="shop.php" method="GET">
            <div class="input-group input-group-lg border rounded-1 overflow-hidden">
              <span class="input-group-text bg-white border-0"><i class="bi bi-search text-muted"></i></span>
              <input type="text" name="search" class="form-control border-0 shadow-none ps-0" placeholder="Type shoe style (e.g., Oxford, Loafer, Chelsea, Chappal)..." autofocus>
              <button class="btn btn-nova-dark rounded-0 px-4" type="submit">Search</button>
            </div>
          </form>
          <div class="mt-3">
            <span class="text-muted small me-2">Trending Searches:</span>
            <a href="shop.php" class="badge bg-light text-dark text-decoration-none me-1">Oxford Shoes</a>
            <a href="shop.php" class="badge bg-light text-dark text-decoration-none me-1">Penny Loafers</a>
            <a href="shop.php" class="badge bg-light text-dark text-decoration-none me-1">Kaptaan Chappal</a>
            <a href="shop.php" class="badge bg-light text-dark text-decoration-none">Chelsea Boots</a>
          </div>
        </div>
      </div>
    </div>
  </div>

