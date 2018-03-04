<?php
/**
 * Created by PhpStorm.
 * User: seanm
 * Date: 12/13/2017
 * Time: 11:54
 */

namespace cryptoScraper;


class _scraper
{
    public static function scrapeValues($coin)
    {
        date_default_timezone_set("America/New_York");
        $api_array = array();

            $datestamp = date('Y-m-d');
            $timestamp = date('h:i:s');
            $api_array = json_decode(file_get_contents("https://api.coinmarketcap.com/v1/ticker/$coin/?convert=USD"),true);
            $log_array = array
                        (
                             "Crypto" => $api_array[0]['name'],
                             "Rank" => $api_array[0]['rank'],
                             "PriceUSD" => $api_array[0]['price_usd'],
                             "PriceBTC" => $api_array[0]['price_btc'],
                             "Percent_Change_1h" => $api_array[0]['percent_change_1h'],
                             "Percent_Change_24h" => $api_array[0]['percent_change_24h'],
                             "Percent_Change_7d" => $api_array[0]['percent_change_7d'],
                             "Date" => $datestamp,
                             "Time" => $timestamp,
                        );

        return $log_array;
    }
}