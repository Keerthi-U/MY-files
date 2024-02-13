<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<STYLE>

body {
  font-family: Arial, Helvetica, sans-serif;
}

.navbar {
  overflow: hidden;
  background-color: #333;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}
ul.nav.navbar-nav {
    display: inline-flex;
}
#header {
}
#content {
    padding-top: 100px;
}
.blue {
    color: red;
}
li.active {
    background-color: rebeccapurple;
}
.yourClass {
    color: red;
}
.foo {  background-color: rebeccapurple; }
.bar {  background-color: rebeccapurple; }
@media
 (min-width: 768px){
.navbar-nav {
    float: left;
    margin: 0;
}}
    </STYLE>
</head>
<body>
                  <!-- <nav class="navbar yamm">
										<div class="navbar-header hidden-md hidden-lg hidden-sm">
											<button type="button" data-toggle="collapse" data-target="#navbar-collapse-1" class="navbar-toggle"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
										</div>
										<div id="navbar-collapse-1" class="navbar-collapse collapse">
											<ul class="nav navbar-nav">
												<li class="active"><a href="index.php">Home</a></li>
												<li><a href="about.php">ABOUT US</a></li>
												<li class="dropdown"><a href="services.php">Services</a>
 
													<ul role="menu" class=" dropbtn dropdown-menu"  class="fa fa-caret-down">
														<li> <a href="door_to_door_delivery.php">Door to Door Delivery</a> </li>
														<li> <a href="air_cargo_services.php">Air Cargo Services</a> </li>
														<li> <a href="train_cargo_services.php">Train Cargo Services</a> </li>
														<li> <a href="express_cargo_services.php">Express Cargo Services</a> </li>
														<li> <a href="port_pickup&amp;delivery_services.php">Port Pickup &amp; Delivery Services</a> </li>
														<li> <a href="surface_cargo_services.php">Surface Cargo Services</a> </li>
													</ul>
												</li>
												
												<li class="dropdown"><a href="services.php">Contact us</a>
													<ul role="menu" class="dropdown-menu" style="display: none;">
													<li><a href="contact.php">Contact Details</a></li>
													<li><a href="request-a-quote.php">request a quote</a></li>
												<li><a href="request-for-pickup.php">Request Pickup</a></li>
												
												</ul>
												</li>
												<li class="dropdown"><a href="services.php">Tools</a>
													<ul role="menu" class="dropdown-menu" style="display: none;">
													<li><a href="rate_calculator.php">Rate Calculator</a></li>
													<li><a href="estimated_delivery.php">Expected Delivery</a></li>
														
													</ul>
												</li>
												
											</ul>
										</div>
									</nav>  -->

				

                  <div class="navbar">


    <!-- <div class="dropdown-content">
      <a href="#">Link 1</a>
      <a href="#">Link 2</a>
      <a href="#">Link 3</a>
    </div> -->
    <ul class="nav navbar-nav">
    <li><a href="home.php">ABOUT US</a></li>
  <li class="dropdown" class="fa fa-caret-down">
    <a href="services.php">Dropdown</a>
 
 <ul role="menu" class=" dropdown-content dropdown-menu"  id="content" class="fa fa-caret-down">
   <li> <a href="ajax.php">Door to Door Delivery</a> </li>
   <li> <a href="ajaxx.php">Air Cargo Services</a> </li>
   <li> <a href="door_to_door_delivery.php">Train Cargo Services</a> </li>
   <li> <a href="express_cargo_services.php">Express Cargo Services</a> </li>
   <li> <a href="port_pickup&amp;delivery_services.php">Port Pickup &amp; Delivery Services</a> </li>
   <li> <a href="surface_cargo_services.php">Surface Cargo Services</a> </li>
 </ul>
</li>


<li class="dropdown" class="fa fa-caret-down">
    <a href="services.php">Ba</a>
 
 <ul role="menu" class=" dropdown-content dropdown-mehknu"   class="fa fa-caret-down">
   <li> <a href="drop2.php">Door </a> </li>
   <li> <a href="about.php">Air </a> </li>

 </ul>
</li>


<li class="dropdown" class="fa fa-caret-down">
    <a href="services.php">Bavv</a>
 
 <ul role="menu" class=" dropdown-content dropdown-mehknu"  id="" class="fa fa-caret-down">
   <li> <a href="thrid.php">Door </a> </li>
   <li> <a href="four.php">Air </a> </li>

 </ul>
</li>

</ul>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
$(document).ready(function () {
    // $(function($) {
var path = window.location.href;
// because the 'href' property of the DOM element is the absolute path
$('ul li a').each(function() {
if (this.href === path) {

$(this).parent().addClass('active');
}else{
    $(this).parent().removeClass("active"); 
}
// });



// $("ul li a").on("click", function() {

// if (!$(this).hasClass("activee")) {
//     $(".dropdown-content li").parent().removeClass("activee");
//     $(this).parent().addClass("activee");
// }
// });
// var elem = $('.dropdown-content  ').find('li');
//     if (elem.hasClass('activee')) {
//         elem.closest('#content').parent().addClass('in');
//     }else{
//       elem.closest('#content').parent().removeClass('in');
//     }

// if($(".dropdown-content  li ").hasClass("active")) 
//     {
      
//       $(this).closest('ul').parent().addClass('active');
//       // alert("yes");
//     }else{
//       $(this).closest('ul').parent().removeClass('active');
//     }
// $('#content li').on('click', function() {

//   $(this).closest('#content li').parent('li').addClass('active') // 
//          .siblings('#content li').removeClass('active');
// });
// $("ul.secondLevel a").click(function () {
//     $("#FirstLevel>li").removeClass("blue");
//     $(this).parents("ul.secondLevel").parent().addClass("blue");
// });
});
// var elem = $('.dropdown-content  ').find('li');
//     if (elem.hasClass('activee')) {
//         elem.closest('#content').parent().addClass('in');
//     }else{
//       elem.closest('#content').parent().removeClass('in');
//     }

//  working code active for dropdown nav 
$("li.active").parent().closest("li").find(">a").parent().addClass("active");

// $("li:has(> ul > li.active)").find(">a").addClass("bar");

});


</script>
