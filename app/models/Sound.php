<?php
/**
 * Created by PhpStorm.
 * User: sccouch
 * Date: 2/25/14
 * Time: 2:28 PM
 */

class Sound extends Eloquent {

    public function dvds() {
        return $this->hasMany("Dvd");
    }
}