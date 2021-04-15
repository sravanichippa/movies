<?php
    $ratedUrl = 'https://api.themoviedb.org/3/movie/top_rated?api_key=38a56dfb1c8983018ba0d77e75c3a7e6&language=en-US&page=1';
    $encodedUrl = urlencode($ratedUrl);
    $responce = file_get_contents($ratedUrl);
    $ratedMovies = json_decode($responce, true);
?>

