<?php

// set the mapping
$mapping = array(
    0 => 'name',
    1 => 'usd',
    2 => 'eur',
    3 => 'gbp',
    4 => 'cad',
    5 => 'slug',
    6 => 'accessory',
);

// get the products and accessories into memory
if (($handle = fopen("inc/bathmateproducts.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        foreach ($data as $key => $value) {
            $mapped[$mapping[$key]] = $value;
        }

        unset($data);

        if (true === (bool) $mapped['accessory']) {
            $accessories[$mapped['slug']] = $mapped;
        } else {
            $products[$mapped['slug']] = $mapped;
        }

    }
    fclose($handle);
}

$page = 'default';
// establish routes
$routes = array(
    '/checkout' => array('page' => 'checkout', 'cartStyle' => 'table'),
    '/shipping' => array('page' => 'shipping', 'cartStyle' => 'div'),
    '/payment' => array('page' => 'payment', 'cartStyle' => 'table'),
    '/confirmation' => array('page' => 'confirmation', 'cartStyle' => 'table'),
);

// will need pregmatch at some point. but works for now
if (true === in_array($_SERVER['REQUEST_URI'], array_keys($routes))) {
    $page = $routes[$_SERVER['REQUEST_URI']]['page'];
    $cartStyle = $routes[$_SERVER['REQUEST_URI']]['cartStyle'];
}

require_once 'inc/header.php';
include 'inc/' . $page . '.php';
require_once 'inc/footer.php';