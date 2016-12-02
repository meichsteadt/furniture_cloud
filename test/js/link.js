//sets the Store Name on top of the page
var store = document.getElementById("name");
var mobile = document.getElementById("nameMobile");
store.innerHTML = "Your Store Name Here";
mobile.innerHTML = store.innerHTML;

//sets the address at the top of the page
var add = document.getElementById("address");
add.innerHTML = "1234 Main St. | Sacramento, CA 95691 | (555) 555-5555";

//sets the copyright at bottom of page
var copyright = document.getElementById("copyright");
copyright.innerHTML = "Copyright &copy; Furniture Store 2016";

var contact = document.getElementById("contact");
//sets the title
document.title  = "Furniture Store";


//sets Facebook link
document.getElementById("fb").href = "#";
document.getElementById("fb").innerHTML = '<i class="fa fa-facebook-square fa-2x"></i>';
//sets IG link
document.getElementById("ig").href = "#";
document.getElementById("ig").innerHTML = '';

var promos = "promos.html"
document.getElementById("top-bar").innerHTML = '<p><a href="' + promos + '">View our <strong> current promotions</strong></a></p>';

document.getElementById("google").innerHTML = '';