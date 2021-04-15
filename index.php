<!DOCTYPE html>
<html>
    <meta charset="UTF-8">
    <title>Landing Page/Dashboard</title>
    <head>
        <!--BootStrap CDN :: CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <!--JQuery CDN :: JS-->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <!--BootStrap CDN :: JS -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!----->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="custom.js"></script> 
        
    </head>
    <body>
        <div class="container" class="mb-5">
            <!-- Navigation Bar-->
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item rated_movies active">
                            <a class="nav-link" href="#" onClick="getMovies('1'); ">Rated Movies</a>
                        </li>
                        <li class="nav-item  upcoming_movies">
                            <a class="nav-link" href="#" onClick="getMovies('2'); ">Upcoming Movies</a>
                        </li>
                    </ul>
                </div>
                <form class="d-flex">
                    <input  id="myInput" class="form-control me-2" type="search" placeholder="Search" aria-label="Search" autocomplete="off">
                </form>
            </nav>
            <!-- Navigation Bar::END -->
            <?php include 'ratedMovies.php'; 
                  include 'upcomingMovies.php'; ?>
            <br>
            <!-- Rated Movies::START-->
            <div class="row ratedMovies"  id="myTable">
                <?php foreach ($ratedMovies['results'] as $movie) { ?>
                    <div class="col-md-4 mb-5">
                        <!-- Cart Div-->
                        <div class="card" style="width:100%; height: 400px; overflow: auto" >
                            <img class="card-img-top" src="<?= 'https://image.tmdb.org/t/p/w500/' . $movie['backdrop_path'] ?>" alt="Card image" style="width:100%">
                            <div class="card-body">
                                <h4 class="card-title"><?= $movie['original_title']; ?></h4>
                                <p class="card-text minimize" ><?= $movie['overview']; ?></p>
                                <!--<p class="card-text "><?= $movie['vote_average']; ?></p>-->
                            </div>
                        </div>
                        <!-- Cart Div::END-->
                    </div>
                <?php } ?>
            </div>
            <!-- Rated Movies::END-->
            <!-- Upcoming Movies::START-->
            <div class="row upcomingMovies"  id="myTable" style="display:none">
                <?php foreach ($upcomingMovies['results'] as $movie) { ?>
                    <div class="col-md-4 mb-5">
                        <!-- Cart Div-->
                        <div class="card" style="width:100%; height: 400px; overflow: auto" >
                            <img class="card-img-top" src="<?= 'https://image.tmdb.org/t/p/w500/' . $movie['backdrop_path'] ?>" alt="Card image" style="width:100%">
                            <div class="card-body">
                                <h4 class="card-title"><?= $movie['original_title']; ?></h4>
                                <p class="card-text minimize" ><?= $movie['overview']; ?></p>
                                <p class="card-text "><?= $movie['vote_average']; ?></p>
                            </div>
                        </div>
                        <!-- Cart Div::END-->
                    </div>
                <?php } ?>
            </div>
            <!-- Upcoming Movies::END-->
    </body>
</html>