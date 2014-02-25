<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

//Route::get('songs/create', function()
//{
//    $genres = Genre::all();
//    $artists = Artist::all();
//	return View::make('songs/create', [
//        'artists' => $artists,
//        'genres' => $genres
//    ]);
//});

Route::get('/songs/search', 'SongController@search');

Route::get('/songs', 'SongController@listSongs');


//Assignment 4
Route::get('/dvds/search', 'DvdController@search');
Route::get('/dvds', 'DvdController@listDvds');
Route::get('/dvds/create', 'DvdController@createDvd');
Route::post('/dvds', 'DvdController@saveDvd');

//Route::post('songs', function()
//{
//    $song = new Song();
//    $song->title = Input::get('title');
//    $song->artist_id = Input::get('artist');
//    $song->genre_id = Input::get('genre');
//    $song->price = Input::get('price');
//    $song->save();
//
//    return Redirect::to('songs/create')->with('success', 'Yay!');
//
//
//});
//
//Route::get('songs', function()
//{
//    $songs = Song::take(5)->get();
//
//    foreach ($songs as $song) {
//        var_dump($song->artist);
//    }
//
//    //dd($songs->toArray());
//});
//
//Route::get('songs2', function()
//{
//    $songs = Song::with('artist', 'genre')->take(5)->get();
//
//
//    foreach ($songs as $song) {
//        var_dump($song->toArray());
//    }
//
//    //dd($songs->toArray());
//
//
//});
//
//Route::get('artists/{id}', function($id)
//{
//    $artist = Artist::find($id);
//    dd($artist->songs);
//});
//
//
//Event::listen('illuminate.query', function($sql)
//{
//    echo "<div style='color: red;'>$sql</div>";
//});