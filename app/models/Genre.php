<?php
/**
 * Created by PhpStorm.
 * User: sccouch
 * Date: 2/18/14
 * Time: 5:52 PM
 */

class Genre extends Eloquent {

    public function dvds() {
        return $this->hasMany("Dvd");
    }
}