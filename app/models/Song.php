<?php
/**
 * Created by PhpStorm.
 * User: sccouch
 * Date: 2/11/14
 * Time: 5:58 PM
 */

class Song extends Eloquent{

    public function artist()
    {
        return $this->belongsTo('Artist');
    }

    public function genre()
    {
        return $this->belongsTo('Genre');
    }

//    public static function search($song_title, $artist)
//    {
//     /*
//     * SELECT * FROM songs
//     * INNER JOIN artists
//     * ON songs.artist_id = artists.id
//     * INNER JOIN genres
//     * ON songs.genre_id = genres.id
//     */
//        $query = DB::table('songs')
//            ->select('title', 'artist_name', 'genre', DB::raw("DATE_FORMAT(added, '%b %d %Y %h:%i %p') AS added"))
//            ->join('artists', 'artists.id', '=', 'songs.artist_id')
//            ->join('genres', 'songs.genre_id', '=', 'genres.id');
//
//        if($song_title) {
//            $query->where('title', 'LIKE', "%$song_title%");
//        }
//
//        if($artist) {
//            $query->where('artist_name', 'LIKE', "%$artist%");
//        }
//
//        $songs = $query->get();
//
//
//
//        return $songs;
//    }
}