//sets the Store Name on top of the page
var store = document.getElementById("name");
var mobile = document.getElementById("nameMobile");
store.innerHTML = "Royal Furniture";
mobile.innerHTML = store.innerHTML;

//sets the address at the top of the page
var add = document.getElementById("address");
add.innerHTML = "5365 N Blackstone Ave. | Fresno, CA 93710 | (559) 431-1217";

//sets the copyright at bottom of page
var copyright = document.getElementById("copyright");
copyright.innerHTML = "Copyright &copy; Royal Furniture 2016";

var contact = document.getElementById("contact");
//sets the title
document.title  = "Royal Furniture";


//sets Facebook link
document.getElementById("fb").href = "https://www.facebook.com/pages/Royal-Furniture-Fresno-Ca/348307628575645";
document.getElementById("fb").innerHTML = '<i class="fa fa-facebook-square fa-2x"></i>';
//sets IG link
document.getElementById("ig").href = "#";
document.getElementById("ig").innerHTML = '';

var promos = "#"
document.getElementById("top-bar").innerHTML = '<p><a href="' + promos + '">View our <strong> current promotions</strong></a></p>';

document.getElementById("google").innerHTML = '';