//sets the Store Name on top of the page
var store = document.getElementById("name");
var mobile = document.getElementById("nameMobile");
store.innerHTML = "Sleep 4 Less";
mobile.innerHTML = store.innerHTML;

//sets the address at the top of the page
var add = document.getElementById("address");
add.innerHTML = "874 W Henderson Ave. | Porterville, CA 93257 | (559) 783-9999";

//sets the copyright at bottom of page
var copyright = document.getElementById("copyright");
copyright.innerHTML = "Copyright &copy; Sleep 4 Less 2016";

var contact = document.getElementById("contact");
//sets the title
document.title  = "Sleep 4 Less";


//sets Facebook link
document.getElementById("fb").href = "https://www.facebook.com/Sleep4less1/";
document.getElementById("fb").innerHTML = '<i class="fa fa-facebook-square fa-2x"></i>';
//sets IG link
document.getElementById("ig").href = "#";
document.getElementById("ig").innerHTML = '';

var promos = "#"
document.getElementById("top-bar").innerHTML = '<p><a href="' + promos + '">View our <strong> current promotions</strong></a></p>';

document.getElementById("google").innerHTML = '';