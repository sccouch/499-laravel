<?php
/**
 * Created by PhpStorm.
 * User: sccouch
 * Date: 2/25/14
 * Time: 6:01 PM
 */

namespace itp\api;

class ItunesSearch {

    public function getResults()
    {
        $endpoint = "https://itunes.apple.com/search?term=jack+johnson";
        $json = file_get_contents($endpoint);
        return json_decode($json);
    }
}