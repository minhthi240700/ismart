<?php

namespace Core;

class Route
{
    protected static $routes = [];
    protected static $prefix = '';

    public static function get($uri, $action)
    {
        self::$routes['GET'][] = [
            'uri' => '/' . trim(self::$prefix . '/' . trim($uri, '/'), '/'),
            'action' => $action
        ];
    }

    public static function post($uri, $action)
    {
        self::$routes['POST'][] = [
            'uri' => '/' . trim(self::$prefix . '/' . trim($uri, '/'), '/'),
            'action' => $action
        ];
    }

    public static function group($prefix, $callback)
    {
        $current = self::$prefix;
        self::$prefix .= '/' . trim($prefix, '/');
        $callback();
        self::$prefix = $current;
    }

    public static function dispatch()
    {
        $method = $_SERVER['REQUEST_METHOD'];

        // Lấy path URL không bao gồm query string
        $url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

        // Nếu app nằm trong thư mục con, loại bỏ phần đó
        $baseFolder = '/ismart.com/public'; // chỉnh theo thư mục thực tế của bạn
        if (strpos($url, $baseFolder) === 0) {
            $url = substr($url, strlen($baseFolder));
        }

        $url = '/' . trim($url, '/');

        foreach (self::$routes[$method] ?? [] as $route) {
            $pattern = preg_replace('#\{[a-zA-Z0-9_]+\}#', '([a-zA-Z0-9_-]+)', $route['uri']);
            if (preg_match('#^' . $pattern . '$#', $url, $matches)) {
                array_shift($matches);
                return self::call($route['action'], $matches);
            }
        }

        http_response_code(404);
        echo "404 Not Found: $url";
    }


    protected static function call($action, $params)
    {
        [$namespacePath, $method] = explode('@', $action);

        $controllerFile = BASE_PATH . "/app/Controllers/$namespacePath.php";
        if (!file_exists($controllerFile)) {
            die("Controller not found: $controllerFile");
        }

        require_once $controllerFile;

        // Chuyển path thành tên class có namespace
        $className = 'App\\Controllers\\' . str_replace('/', '\\', $namespacePath);

        if (!class_exists($className)) {
            die("Class $className not found.");
        }

        $controller = new $className;
        call_user_func_array([$controller, $method], $params);
    }
}
