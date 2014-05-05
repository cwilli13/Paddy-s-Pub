<nav>
     <ul>
<?php
if(basename($_SERVER['PHP_SELF'])=="home.php"){
    print '<li class="activePage">Home</li>';
} else {
    print '<li><a href="home.php">Home</a></li>';
} 

if(basename($_SERVER['PHP_SELF'])=="menu.php"){
    print '<li class="activePage">Menu</li>';
} else {
    print '<li><a href="menu.php">Menu</a></li>';
} 

if(basename($_SERVER['PHP_SELF'])=="events.php"){
    print '<li class="activePage">Events</li>';
} else {
    print '<li><a href="events.php">Events</a></li>';
}


if(basename($_SERVER['PHP_SELF'])=="aboutUs.php"){
    print '<li class="activePage">About Us</li>';
} else {
    print '<li><a href="aboutUs.php">About Us</a></li>';
} 

if(basename($_SERVER['PHP_SELF'])=="contactUs.php"){
    print '<li class="activePage">Contact Us</li>';
} else {
    print '<li><a href="contactUs.php">Contact Us</a></li>';
}

?>
     </ul>
</nav>
