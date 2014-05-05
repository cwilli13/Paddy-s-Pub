<header>
    <h1><a href="home.php"><img src="images/paddysLogo.jpg" alt="Paddy's Logo" width='408' height='187'></a></h1>
    <h2>"The Most Freedom Loving Bar in America"</h2>
    
    
<?php
function isOpen(){
    $hourOpen = '12'; //noon
    $hourClose ='3'; //3am, 
    $hourCurrent = date('G');
    if (($hourCurrent >= $hourClose) && ($hourCurrent < $hourOpen)){ 
        return FALSE;
    }
    else{
        return TRUE;
    }
}

function timeTilClose(){
    $minSinceMidnight = intval(date('i')) + date('G') * 60;
    if ($minSinceMidnight < 180){
        $minTilClose = 180 - $minSinceMidnight;
    }
    else{
        $minTilClose = 1440 - $minSinceMidnight + 180;
    }
    return $minTilClose;

    
    
}

if (isOpen()){
    echo "<p>Paddy's is <span class='open'>open</span> for " . timeTilClose() . " more minutes.</p>";
}
else{
    echo "<p>Paddy's is <span class='closed'>closed</span> until noon.</p>";
}

?>
</header>
