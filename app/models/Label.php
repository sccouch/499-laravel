<?php
/**
 * Created by PhpStorm.
 * User: sccouch
 * Date: 2/25/14
 * Time: 2:26 PM
 */

class Label extends Eloquent {

    public function dvds() {
        return $this->hasMany("Dvd");
    }
}