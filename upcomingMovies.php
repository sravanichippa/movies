<?php
    $upcomingurl = 'https://api.themoviedb.org/3/movie/upcoming?api_key=38a56dfb1c8983018ba0d77e75c3a7e6&language=en-US&page=1';
    $encodedUrl = urlencode($upcomingurl);
    $responce = file_get_contents($upcomingurl);
    $upcomingMovies = json_decode($responce, true);
?>

