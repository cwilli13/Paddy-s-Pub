<nav>
     <ul>
<?php 
if(basename($_SERVER['PHP_SELF'])=="usabilityMain.php"){
    print '<li class="activePage">Home</li>';
} else {
    print '<li><a href="usabilityMain.php">Home</a></li>';
} 
?>

<?php 
if(basename($_SERVER['PHP_SELF'])=="usabilityVideos.php"){
    print '<li class="activePage">Videos</li>';
} else {
    print '<li><a href="usabilityVideos.php">Videos</a></li>';
} 
?>

<?php 
if(basename($_SERVER['PHP_SELF'])=="usabilityRecommendations.php"){
    print '<li class="activePage">Recommendations</li>';
} else {
    print '<li><a href="usabilityRecommendations.php">Recommendations</a></li>';
} 
?>    
     </ul>
</nav>
