<header>
    <h1><a href="home.php">Paddy's Pub</a></h1>
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
    $minTilClose = $minSinceMidnight + 180;
    return $minTilClose;

    
    
}

if (isOpen()){
    echo "<p>Paddy's is <span class='status'>open</span> for " . timeTilClose() . " more minutes.</p>";
}
else{
    echo "<p>Paddy's is <span class='status'>closed</span>. We reopen at noon.</p>";
}

?>
</header>
