<?php
/**
 * Created by PhpStorm.
 * User: sccouch
 * Date: 2/25/14
 * Time: 2:20 PM
 */

class Format extends Eloquent {

    public function dvds() {
        return $this->hasMany("Dvd");
    }
}