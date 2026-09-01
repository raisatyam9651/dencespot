<?php
/**
 * Local Router for PHP Built-in Web Server (php -S)
 * Handles extensionless URLs like /gallery, /about-us, /contact
 */

$uri = rawurldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
$file = __DIR__ . $uri;

// 1. Static file exists? Return false to let PHP server serve it.
if ($uri !== '/' && file_exists($file) && !is_dir($file)) {
    return false;
}

// 2. Extensionless PHP file exists? Require it.
$phpFile = __DIR__ . $uri . '.php';
if (file_exists($phpFile)) {
    require $phpFile;
    exit;
}

// 3. Fallback to index.php
require __DIR__ . '/index.php';
