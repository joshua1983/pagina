<?php

require_once("phpfastcache.php");

$cache = phpFastCache();

$products = $cache->get("texto1");

if ($products == null){
	$products = "datos2";
	$cache->set("texto1", $products, 600);
}

echo $products;

?>
