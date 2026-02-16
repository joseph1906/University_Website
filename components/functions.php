<?php
// Common utility functions

function sanitize_input($data) {
    return htmlspecialchars(strip_tags(trim($data)));
}

function check_login() {
    if (!isset($_SESSION['user_id'])) {
        header("Location: /modules/auth/login.php");
        exit();
    }
}

function check_role($required_role) {
    if ($_SESSION['role'] !== $required_role) {
        header("Location: /index.php");
        exit();
    }
}

function upload_file($file, $destination) {
    // File upload logic
}

function format_date($date) {
    return date('d M Y', strtotime($date));
}
?>