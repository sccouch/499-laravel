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
        $genres = Genre::all();
        $ratings = Rating::all();

        return View::make('dvds/search', [
            "genres" => $genres,
            "ratings" => $ratings
        ]);
    }

    public function listDvds()
    {
        $title = Input::get('title');
        $genreId = Input::get('genre');
        $ratingId = Input::get('rating');



        /*
         * Assignment 3
         $dvds = Dvd::search($title, $genre, $rating);

        //dd($songs);
        return View::make('dvds/dvds-list', [
            'dvds' => $dvds
        ]);
        */

        $relation = Dvd::with(["rating", "genre", "label", "sound", "format"])
            ->where("title", "LIKE", "%$title%");

        if ($genreId != 0) {
            $relation->where("genre_id", "=", $genreId);
        }

        if ($ratingId != 0) {
            $relation->where("rating_id", "=", $ratingId);
        }

        $dvds = $relation->take(30)
                         ->get();

        if ($genreId == 0)
            $genre = "All";
        else
            $genre = Genre::find($genreId)->genre_name;


        if ($ratingId == 0)
            $rating = "All";
        else
            $rating = Rating::find($ratingId)->rating_name;

        return View::make("dvds/dvds-list", [
            "title" => $title,
            "genre" => $genre,
            "rating"=> $rating,
            "dvds" => $dvds
        ]);
    }

    public function createDvd() {
        $ratings = Rating::all();
        $genres = Genre::all();
        $labels = Label::all();
        $sounds = Sound::all();
        $formats = Format::all();

        return View::make("dvds/create", [
            "ratings" => $ratings,
            "genres" => $genres,
            "labels" => $labels,
            "sounds" => $sounds,
            "formats" => $formats,
        ]);
    }

    public function saveDvd() {

        $validation = Dvd::validate(Input::all());

        if ($validation->passes()) {

        $dvd = new Dvd();
        $dvd->title = Input::get("title");
        $dvd->rating_id = Input::get("rating");
        $dvd->genre_id = Input::get("genre");
        $dvd->label_id = Input::get("label");
        $dvd->sound_id = Input::get("sound");
        $dvd->format_id = Input::get("format");
        $dvd->save();

        return Redirect::to("dvds/create")
            ->with("success", "<strong>$dvd->title</strong> was added to the DVD database.");

        }

        return Redirect::to("dvds/create")
            ->withInput()
            ->with("errors", $validation->messages());
    }

}