<?php
/**
 * Created by PhpStorm.
 * User: sccouch
 * Date: 2/25/14
 * Time: 2:27 PM
 */

class Rating extends Eloquent {

    public function dvds() {
        return $this->hasMany("Dvd");
    }
}