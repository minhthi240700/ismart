<?php
namespace Core;
use Core\View;
class Controller {
    public function loadView($viewPath, $layout = 'index', $data = []) {
        $viewFile = BASE_PATH . '/app/Views/' . $viewPath . '.php';

        if (!file_exists($viewFile)) {
            $errorFile = BASE_PATH . '/app/Views/pages/404.php';
            if (file_exists($errorFile)) {
                http_response_code(404);
                require $errorFile;
            } else {
                http_response_code(404);
                echo "<h1>404 - View not found</h1>";
                echo "<p>File không tồn tại: <code>$viewFile</code></p>";
            }
            return;
        }

        // Nếu view tồn tại, render qua layout
        View::renderWithLayout($viewPath, $data, $layout);
    }
}
