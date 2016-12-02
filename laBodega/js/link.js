//sets the Store Name on top of the page
var store = document.getElementById("name");
var mobile = document.getElementById("nameMobile");
store.innerHTML = "La Bodega Bay Furniture";
mobile.innerHTML = store.innerHTML;

//sets the address at the top of the page
var add = document.getElementById("address");
add.innerHTML = "2225 E Pacheco Blvd. | Los Banos, CA 93635 | (209) 827-4076";

//sets the copyright at bottom of page
var copyright = document.getElementById("copyright");
copyright.innerHTML = "Copyright &copy; La Bodega Bay 2016";

var contact = document.getElementById("contact");
//sets the title
document.title  = "La Bodega Bay Furniture";


//sets Facebook link
document.getElementById("fb").href = "https://www.facebook.com/La-Bodega-Bay-Furniture-Inc-344646482216489/";
document.getElementById("fb").innerHTML = '<i class="fa fa-facebook-square fa-2x"></i>';
//sets IG link
document.getElementById("ig").href = "#";
document.getElementById("ig").innerHTML = '';

var promos = "promos.html"
document.getElementById("top-bar").innerHTML = '<p><a href="' + promos + '">View our <strong> current promotions</strong></a></p>';

document.getElementById("google").innerHTML = '';