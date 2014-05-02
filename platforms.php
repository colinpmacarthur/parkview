<?php
/* ParkDB - Platforms Dashboard
   Colin Macarthur - April 30, 2014
*/

require_once 'ParkViewPlatformPage.php';
$page = new ParkViewPlatformPage;
$page->setYearQuarter(htmlspecialchars($_GET["year"]),htmlspecialchars($_GET["quarter"]));
$page->setPageName('Popular Platforms');
$page->renderPage();
