<?php
/**
 * Created by PhpStorm.
 * User: seanm
 * Date: 12/13/2017
 * Time: 11:53
 */
namespace cryptoScraper;
require_once("_scraper.php");
require_once("_logger.php");

$CRYPTOCOINS = array("decred","groestlcoin");

foreach($CRYPTOCOINS as $coin) {
    _logger::writeLog(_scraper::scrapeValues($coin));
}
?>