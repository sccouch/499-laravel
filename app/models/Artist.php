<?php
/**
 * Created by PhpStorm.
 * User: sccouch
 * Date: 2/18/14
 * Time: 5:46 PM
 */

class Artist extends Eloquent {
    public function songs()
    {
        return $this->hasMany('song');
    }
}