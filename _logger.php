<?php
/**
 * Created by PhpStorm.
 * User: seanm
 * Date: 12/13/2017
 * Time: 11:54
 */

namespace cryptoScraper;


class _logger
{
    const _logLocation = "/logs/";
    const _logfile = "cryptoLog.txt";

    public static function writeLog($log_array)
    {
        file_put_contents(_logger::_logLocation . _logger::_logfile,
                               $log_array['Date']. " " .
                               $log_array['Time']. " " .
                               $log_array['Crypto']. " " .
                               $log_array['PriceUSD']. " " .
                               $log_array['PriceBTC']. " " .
                               $log_array['Rank']. " " .
                               $log_array['Percent_Change_1h']. " " .
                               $log_array['Percent_Change_24h']. " " .
                               $log_array['Percent_Change_7d'].PHP_EOL,FILE_APPEND);
    }
}