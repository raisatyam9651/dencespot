<?php
/**
 * Local Router for PHP Built-in Web Server (php -S)
 * Handles extensionless URLs like /gallery, /about-us, /contact, /blog/
 */

$uri = rawurldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
$file = __DIR__ . $uri;

// 1. Static file exists? Return false to let PHP server serve it.
if ($uri !== '/' && file_exists($file) && !is_dir($file)) {
    return false;
}

// 1b. /sitemap.xml is served by sitemap.php.
//     Apache does this in production (.htaccess:45). Without it, the sitemap URL
//     that robots.txt advertises 404s locally, so a broken sitemap would not
//     surface until after deploy.
if ($uri === '/sitemap.xml') {
    require __DIR__ . '/sitemap.php';
    exit;
}

// 2. Directory with index.php exists? (e.g. /blog/)
if (is_dir($file)) {
    $dirIndex = rtrim($file, '/') . '/index.php';
    if (file_exists($dirIndex)) {
        require $dirIndex;
        exit;
    }
}

// 3. Extensionless PHP file exists? Require it.
$phpFile = __DIR__ . $uri . '.php';
if (file_exists($phpFile)) {
    require $phpFile;
    exit;
}

// 4. Nothing matched. Serve the real 404 with the real status code.
//    This used to `require index.php`, so every typo, every dead link and every
//    stale URL returned the homepage under HTTP 200 — a soft 404. Locally that
//    made broken links invisible to testing; the production .htaccess already
//    points ErrorDocument at 404.php.
http_response_code(404);
require __DIR__ . '/404.php';
