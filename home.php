<?php
$title='Home';
include 'top.php';
?>

<body>
    <?php 
    include 'header.php';
    include 'nav.php';
    ?>
<section id="home">
	<h1>Welcome to Paddy's Pub</h1>
        <p>
            "The Most Freedom Loving Bar in America"
        </p>
        <div class ='homeImage'>
            <img src="images/paddysPubDoor.jpg" alt="Pub Door" width='480' height='320'>
        </div>
        <p>
            Paddy's Pub is a traditional Irish pub located at the 
            <a href="https://www.google.com/maps/place/Dickinson+St+and+S.+3rd+Ave,+South+Philadelphia,+PA" 
               class="location">intersection of Dickinson St and 3rd Ave, Philadelphia, PA</a>.
        </p>
        <p>
            First opened in 1776, Paddy's Pub is one of the oldest pubs in America. We have some of the cleanest bathrooms in the land and our basement is 100% rat-free.
            Here at Paddy's we are very concerned about our impact on the environment, so we minimize our waste and electricity consumption by heating the pub by burning trash in the furnace.
            This also gives our bar its characteristic smokey smell. 
        </p>

</section>

<?
include ("footer.php");
?>

</body>
</html>
