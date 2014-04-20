<?php
include 'propel_include.php';
$stuffs = FactSnsdataQuery::create()
  ->findPK(1);
print_r($stuffs);
?>
