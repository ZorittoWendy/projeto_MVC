<?php

require __DIR__ . '/vendor/autoload.php';

use \App\Http\Router;

define('URL', 'http://localhost/projeto_MVC');

$obRouter = new Router(URL);

include __DIR__.'/routes/pages.php';

$obRouter->run()->sendResponse();
