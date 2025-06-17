<?php
namespace Core;

class View
{
    public static function render($viewPath, $data = [])
    {
        extract($data);
        $viewPath = BASE_PATH . '/app/Views/' . $viewPath . '.php';
        ob_start();
        require $viewPath;
        $content = ob_get_clean(); // lấy nội dung của view
        require BASE_PATH . '/app/Layouts/admin.php';
    }

public static function renderWithLayout($viewPath, $data = [], $layout = 'index')
{
    extract($data);

    $viewFile = BASE_PATH . '/app/Views/' . $viewPath . '.php';

    ob_start();
    require $viewFile;
    $content = ob_get_clean();

    // Kiểm tra layout hợp lệ (là string)
    if (!is_string($layout)) {
        echo "<h1>Lỗi: layout không hợp lệ</h1>";
        echo "<p>Giá trị nhận được: <code>" . print_r($layout, true) . "</code></p>";
        return;
    }

    $layoutFile = BASE_PATH . '/app/Layouts/' . $layout . '.php';

    if (file_exists($layoutFile)) {
        require $layoutFile;
    } else {
        echo "<h1>Layout không tồn tại</h1>";
        echo "<p>File: <code>$layoutFile</code></p>";
    }
}

}
