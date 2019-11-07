<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MoviesController extends Controller
{
    public static function add_movie($title, $releaseYear) {
    	$results = \DB::select("SELECT * from movies where LOWER(title)= LOWER('$title')");
    	if(sizeof($results) == 0) {
    		\DB::insert("insert into movies (title, releaseYear) values ('$title', $releaseYear)");
    	} else {
    		return 'This movie was already added';
    	}
    }

    public static function remove_movie($title) {
    	$results = \DB::select("SELECT * from movies where LOWER(title)= LOWER('$title')");
    	if(sizeof($results) == 0) {
    		return 'This movie does not exist in the database';
    	} else {
    		\DB::delete("DELETE from movies where LOWER(title)= LOWER('$title')");
    	}
    }
}
