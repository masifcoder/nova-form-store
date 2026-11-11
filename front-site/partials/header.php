<?php
if (file_exists(__DIR__ . '/../config/session_start.php')) {
  require_once __DIR__ . '/../config/session_start.php';
}
$pageTitle = $pageTitle ?? "NOVA FORM | Luxury Men's Footwear & Handcrafted Leather Shoes Pakistan";
$pageDescription = $pageDescription ?? "Discover NOVA FORM luxury men's footwear. Goodyear-welted Oxfords, burnished Penny Loafers, handcrafted Peshawari Chappals, and sleek leather sneakers. Cash on Delivery across Pakistan.";
$bodyClass = $bodyClass ?? '';
$activePage = $activePage ?? basename($_SERVER['SCRIPT_NAME'] ?? '');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= htmlspecialchars($pageTitle) ?></title>
  <meta name="description" content="<?= htmlspecialchars($pageDescription) ?>">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body<?= !empty($bodyClass) ? ' class="' . htmlspecialchars($bodyClass) . '"' : '' ?>>