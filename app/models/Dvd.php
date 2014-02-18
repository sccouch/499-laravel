<?php
/**
 * Created by PhpStorm.
 * User: sccouch
 * Date: 2/18/14
 * Time: 11:12 AM
 */

class Dvd {

    public static function search($title, $genre, $rating)
    {
        /*
        * SELECT * FROM songs
        * INNER JOIN genres
        * ON dvds.genre_id = genres.id
        * INNER JOIN ratings
        * ON dvds.rating_id = ratings.id
        */
        $query = DB::table('dvds')
            ->select('title', 'genre_name', 'rating_name', 'label_name', 'sound_name', 'format_name', DB::raw("DATE_FORMAT(release_date, '%b %d %Y %h:%i %p') AS added"))
            ->join('genres', 'dvds.genre_id', '=', 'genres.id')
            ->join('ratings', 'dvds.rating_id', '=', 'ratings.id')
            ->join('labels', 'dvds.label_id', '=', 'labels.id')
            ->join('sounds', 'dvds.sound_id', '=', 'sounds.id')
            ->join('formats', 'dvds.format_id', '=', 'formats.id');




        if($title) {
            $query->where('title', 'LIKE', "%$title%");
        }

        if($genre != "all") {
            $query->where('genre_name', 'LIKE', "%$genre%");
        }

        if($rating != "all") {
            $query->where('rating_name', 'LIKE', "%$rating%");
        }

        $dvds = $query->get();

        //dd($dvds);


        return $dvds;
    }
}