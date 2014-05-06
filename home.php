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
            Paddy's Pub is a traditional Irish pub located at the intersection of Dickinson St and 3rd Ave, Philadelphia, PA.
        </p>
        <a href="https://www.google.com/maps/place/Dickinson+St+and+S.+3rd+Ave,+South+Philadelphia,+PA" 
        class="location"></a>
</section>

<?
include ("footer.php");
?>

</body>
</html>
