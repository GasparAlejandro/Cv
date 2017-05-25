function main() {
  var rating_stars = "<i class=";
  var ratings = $('.rating-container .rating');
  var stars_container = "<div class='stars'></div>"
  var full_star = "<i class='fa fa-star'></i>";
  var half_star = "<i class='fa fa-star-half-o'></i>";
  var empty_star = "<i class='fa fa-star-o'></i>";
  
  for(var i=0, j=ratings.length; i<j; i++) {
    var rating_el = ratings.eq(i);
    var rating = parseFloat(rating_el.attr('rating'));
    $(stars_container).appendTo(rating_el);
    var stars = rating_el.children().first();
    
    for(var m=0; m<5; m++) {
      if((rating - m) >= 1) {
        // Add a star
        $(full_star).appendTo(stars);
      } else if((rating - m) > 0) {
        // Add a half star if 0 < remainder < 1
        $(half_star).appendTo(stars);
      } else {
        // Add an empty Star
        $(empty_star).appendTo(stars);
      }
    }
  }
}

$(document).ready(main);