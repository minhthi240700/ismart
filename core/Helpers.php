<?php
function load_helpers($list = []) {
    foreach ($list as $file) {
        $path = BASE_PATH . "/app/Helpers/$file.php";
        if (file_exists($path)) {
            require_once $path;
        }
    }
}
function home_url($path = '') {
    $scheme = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
    $host = $_SERVER['HTTP_HOST'];
    $base = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/\\');

    // Gộp URL gốc (không có dấu / cuối)
    $url = rtrim($scheme . '://' . $host . $base, '/');

    // Nếu có thêm $path, thì nối vào
    return $path ? $url . '/' . ltrim($path, '/') : $url;
}

function get_partials($name, $data = []) {
    $file = BASE_PATH . '/app/Layouts/' . $name . '.php';

    if (file_exists($file)) {
        extract($data);
        include $file;
    }
}

function get_header() {
    get_partials('partials/header');
}

function get_footer() {
    get_partials('partials/footer');
}

function get_header_admin() {
    get_partials('Admin/partials/header');
}

function get_footer_admin() {
    get_partials('Admin/partials/footer');
}

function config($key) {
    static $config = null;
    if (!$config) {
        $config = require BASE_PATH . '/config/app.php';
    }
    return $config[$key] ?? null;
}

function admin_url($path = '') {
    return '/admin/' . ltrim($path, '/');
}
function menu_active($paths, $strict = false)
{
    $uri = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
    $paths = (array) $paths;

    foreach ($paths as $path) {
        $full = trim(admin_url($path), '/');

        if ($strict) {
            if ($uri === $full) return 'active';
        } else {
            if (strpos($uri, $full) === 0) return 'active';
        }
    }

    return '';
}
