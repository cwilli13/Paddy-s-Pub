<nav>
     <ul>
<?php
if(basename($_SERVER['PHP_SELF'])=="home.php"){
    print '<li class="activePage">Home</li>';
} else {
    print '<li><a href="home.php">Home</a></li>';
} 

if(basename($_SERVER['PHP_SELF'])=="aboutUs.php"){
    print '<li class="activePage">About Us</li>';
} else {
    print '<li><a href="aboutUs.php">About Us</a></li>';
} 

if(basename($_SERVER['PHP_SELF'])=="reputation.php"){
    print '<li class="activePage">Reputation</li>';
} else {
    print '<li><a href="reputation.php">Reputation</a></li>';
}

if(basename($_SERVER['PHP_SELF'])=="productHistory.php"){
    print '<li class="activePage">Product History</li>';
} else {
    print '<li><a href="productHistory.php">Product History</a></li>';
} 

if(basename($_SERVER['PHP_SELF'])=="validityAndReliability.php"){
    print '<li class="activePage">Validity & Reliability</li>';
} else {
    print '<li><a href="validityAndReliability.php">Validity & Reliability</a></li>';
} 

if(basename($_SERVER['PHP_SELF'])=="publishedResearch.php"){
    print '<li class="activePage">Published Research</li>';
} else {
    print '<li><a href="publishedResearch.php">Published Research</a></li>';
}

if(basename($_SERVER['PHP_SELF'])=="contactUs.php"){
    print '<li class="activePage">Contact Us</li>';
} else {
    print '<li><a href="contactUs.php">Contact Us</a></li>';
}

?>
     </ul>
</nav>
