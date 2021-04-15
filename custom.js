$(document).ready(function () {
    //Show text less and more
    var minimized_elements = $('p.minimize');
    minimized_elements.each(function () {
        var t = $(this).text();
        if (t.length < 100)
            return;
        $(this).html(
            t.slice(0, 100) + '<span>... </span><a href="#" class="more">More</a>' +
                '<span style="display:none;">' + t.slice(100, t.length) + ' <a href="#" class="less">Less</a></span>'
        );
    });

    $('a.more', minimized_elements).click(function (event) {
        event.preventDefault();
        $(this).hide().prev().hide();
        $(this).next().show();
    });

    $('a.less', minimized_elements).click(function (event) {
        event.preventDefault();
        $(this).parent().hide().prev().show().prev().show();
    });
    //Search Movies
    $("#myInput").on("keyup", function () {
        var value = $(this).val().toLowerCase();
        $("#myTable div").filter(function () {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
});
//Navigation Rated Movies and upcoming movies
function getMovies(type){
    if(type == 1){
        $('.upcomingMovies').hide();   
        $('.ratedMovies').show();
        $('.upcoming_movies').removeClass('active');
        $('.rated_movies').addClass('active');
    } else {
        $('.ratedMovies').hide();
        $('.upcomingMovies').show();
        $('.rated_movies').removeClass('active');
        $('.upcoming_movies').addClass('active');
       
    }
}