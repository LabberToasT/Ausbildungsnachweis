<?php
include 'assets/config/config.php';

use db\DbAdmin;
use Klein\Request;
use Klein\Response;
use Klein\ServiceProvider;
use template\Template;

require_once __DIR__ . '/vendor/autoload.php';
require_once 'autoloader.php';

$klein = new \Klein\Klein();
$klein->respond(
    function (Request $request, Response $response, ServiceProvider $service) use ($CONFIG) {

        // configure database connection for all requests
        $dbConfig = $CONFIG[ENV];
        $conn = new DbAdmin($dbConfig['dbName'], $dbConfig['user'], $dbConfig['password']);

        // save databse connection object in ServiceProvider
        $service->db = $conn;
    }
);

//#######################
//######## Views ########
//#######################

// callback that is invoked when the main landing page is requested
$indexCallback = function (Request $request, Response $response, ServiceProvider $service) {

    // load default page
    $defaultPage = new Template('views/index.html');

    // append the page to the response
    $response->append($defaultPage->render());
};
$klein->respond(
    'GET',
    '/',
    $indexCallback
);

$klein->dispatch();
