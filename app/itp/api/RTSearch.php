<?php
/**
 * Created by PhpStorm.
 * User: sccouch
 * Date: 3/4/14
 * Time: 3:54 PM
 */

namespace itp\api;

class RTSearch {
    public function getResults($title) {
        $apikey = '7uaun2wrbaaz93f4fa3zvnpz';
        $q = urlencode($title);

        $endpoint = 'http://api.rottentomatoes.com/api/public/v1.0/movies.json?apikey=' . $apikey . '&q=' . $q;

        $json = file_get_contents($endpoint);

        return json_decode($json);
    }
}