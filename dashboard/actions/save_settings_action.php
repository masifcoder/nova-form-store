<?php
require_once __DIR__ . "/../settings/session_start.php";
require_once __DIR__ . "/../settings/auth_check.php";
require_once __DIR__ . "/../settings/db.php";

$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $brand_name               = trim($_POST['brand_name'] ?? '');
    $helpline_phone           = trim($_POST['helpline_phone'] ?? '');
    $support_email            = trim($_POST['support_email'] ?? '');
    $currency_timezone        = trim($_POST['currency_timezone'] ?? 'PKR (Pakistan Standard Time - PKT)');
    $standard_delivery_fee    = trim($_POST['standard_delivery_fee'] ?? '250');
    $free_delivery_threshold   = trim($_POST['free_delivery_threshold'] ?? '10000');
    $delivery_estimate_notice = trim($_POST['delivery_estimate_notice'] ?? '');
    $exchange_policy          = trim($_POST['exchange_policy'] ?? '');
    $primary_gateway          = trim($_POST['primary_gateway'] ?? 'Cash on Delivery (Active)');
    $ssl_status               = trim($_POST['ssl_status'] ?? 'Enabled');

    // Validations
    if (empty($brand_name)) {
        $errors[] = "Store Brand Name is required.";
    }

    if (!empty($support_email) && !filter_var($support_email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Please provide a valid support email address.";
    }

    if (!is_numeric($standard_delivery_fee) || floatval($standard_delivery_fee) < 0) {
        $errors[] = "Standard delivery fee must be a valid non-negative number.";
    }

    if (!is_numeric($free_delivery_threshold) || floatval($free_delivery_threshold) < 0) {
        $errors[] = "Free delivery threshold must be a valid non-negative number.";
    }

    // If validation fails, redirect back with errors
    if (!empty($errors)) {
        $_SESSION['errors'] = $errors;
        header("Location: ../settings.php");
        exit;
    }

    // Mapping settings into store_settings schema
    $settings_map = [
        'brand_name' => [
            'group'       => 'general',
            'value'       => $brand_name,
            'description' => 'Store brand name'
        ],
        'helpline_phone' => [
            'group'       => 'general',
            'value'       => $helpline_phone,
            'description' => 'Customer support helpline phone number'
        ],
        'support_email' => [
            'group'       => 'general',
            'value'       => $support_email,
            'description' => 'Customer support email address'
        ],
        'currency_timezone' => [
            'group'       => 'general',
            'value'       => $currency_timezone,
            'description' => 'Store currency and operating timezone'
        ],
        'standard_delivery_fee' => [
            'group'       => 'logistics',
            'value'       => strval(floatval($standard_delivery_fee)),
            'description' => 'Standard delivery fee in PKR'
        ],
        'free_delivery_threshold' => [
            'group'       => 'logistics',
            'value'       => strval(floatval($free_delivery_threshold)),
            'description' => 'Minimum order threshold in PKR for free delivery'
        ],
        'delivery_estimate_notice' => [
            'group'       => 'logistics',
            'value'       => $delivery_estimate_notice,
            'description' => 'Nationwide delivery estimation notice'
        ],
        'exchange_policy' => [
            'group'       => 'policies',
            'value'       => $exchange_policy,
            'description' => 'Complimentary doorstep exchange and return policy'
        ],
        'primary_gateway' => [
            'group'       => 'payments',
            'value'       => $primary_gateway,
            'description' => 'Primary checkout payment method'
        ],
        'ssl_status' => [
            'group'       => 'security',
            'value'       => $ssl_status,
            'description' => 'SSL certificate encryption status'
        ],
    ];

    // Upsert each setting into store_settings
    foreach ($settings_map as $key => $info) {
        $escaped_group = mysqli_real_escape_string($conn, $info['group']);
        $escaped_key   = mysqli_real_escape_string($conn, $key);
        $escaped_val   = mysqli_real_escape_string($conn, $info['value']);
        $escaped_desc  = mysqli_real_escape_string($conn, $info['description']);

        $upsert_sql = "INSERT INTO store_settings (setting_group, setting_key, setting_value, description)
                       VALUES ('{$escaped_group}', '{$escaped_key}', '{$escaped_val}', '{$escaped_desc}')
                       ON DUPLICATE KEY UPDATE 
                           setting_value = VALUES(setting_value),
                           setting_group = VALUES(setting_group),
                           description   = VALUES(description)";

        mysqli_query($conn, $upsert_sql);
    }

    $_SESSION['success'] = "Store settings have been updated successfully!";
    header("Location: ../settings.php");
    exit;

} else {
    header("Location: ../settings.php");
    exit;
}

