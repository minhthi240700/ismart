<?php
define('BASE_PATH', dirname(__DIR__));

// autoload core & config
require BASE_PATH . '/core/Route.php';
require BASE_PATH . '/core/Controller.php';
require BASE_PATH . '/core/View.php';

// autoload config + helper
require BASE_PATH . '/config/app.php';
require BASE_PATH . '/core/Helpers.php';
load_helpers([]);

// load route
require BASE_PATH . '/routes/web.php';
require BASE_PATH . '/routes/admin.php';

\Core\Route::dispatch();
