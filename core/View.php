<?php
namespace Core;

class View {
    public static function render($viewPath, $data = []) {
        extract($data);
        require BASE_PATH . '/app/Views/' . $viewPath . '.php';
    }

    public static function renderWithLayout($viewPath, $data = [], $layout = 'default') {
        extract($data);

        // Bắt output nội dung view
        ob_start();
        require BASE_PATH . '/app/Views/' . $viewPath . '.php';
        $content = ob_get_clean();

        // Gọi layout và inject $content vào layout
        $layoutFile = BASE_PATH . '/app/Layouts/' . $layout . '.php';
        if (file_exists($layoutFile)) {
            require $layoutFile;
        } else {
            // Nếu layout không tồn tại → fallback
            echo "<h1>Layout không tồn tại</h1>";
            echo "<p>File: <code>$layoutFile</code></p>";
        }
    }
}
