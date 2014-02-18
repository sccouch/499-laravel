<?php
/**
 * Created by PhpStorm.
 * User: sccouch
 * Date: 2/18/14
 * Time: 11:12 AM
 */


class DvdController extends BaseController {

    public function search()
    {
        return View::make('dvds/search');
    }

    public function listDvds()
    {
        $title = Input::get('title');
        $genre = Input::get('genre');
        $rating = Input::get('rating');



        $dvds = Dvd::search($title, $genre, $rating);

        //dd($songs);
        return View::make('dvds/dvds-list', [
            'dvds' => $dvds
        ]);
    }

}