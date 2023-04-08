<?php

use App\Kernel;

require_once dirname(__DIR__).'/vendor/autoload_runtime.php';

return function (array $context) {
    return new Kernel($context['APP_ENV'], (bool) $context['APP_DEBUG']);
};
// ...
$kernel = new Kernel($environment, $debug);
$request = Request::createFromGlobals();
$response = $kernel->handle($request);

// Add this line
$response = (new App\Controller\DefaultController())->index();

$response->send();
$kernel->terminate($request, $response);
