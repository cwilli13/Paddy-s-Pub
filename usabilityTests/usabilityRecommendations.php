<?php
include 'usabilityTop.php';
?>
<body>
    <?php 
    include 'usabilityHeader.php';
    include 'usabilityNav.php';
    ?>
    <div class="wrapper">
        <h2>Recommendations</h2>
        <ol>
            <li>The hours of operation are not prominently displayed
                <p>
                We changed the minutes until Paddy's closes so it displays the closing time. We also added a link that triggers an alert window with the bar hours.
                <a href="http://www.uvm.edu/~jmlane/cs142/assignment7/Paddy-s-Pub/images/hours_before.png" target="_blank">Before</a>
                <a href="http://www.uvm.edu/~jmlane/cs142/assignment7/Paddy-s-Pub/images/hours_after.png" target="_blank">After</a>
                </p>
            </li>
            <li>The "about us" page should have more info that just the bar owners.
                <p>We added the bar hours to the "about us" page, and we also added contact information.</p>
            </li>
            <li>Menu prices are unclear with price additions, such as when adding chili to burgers.
                <p>We changed the prices to be more clear by aligning the price additions to the right.</p>
            </li>
            <li>The home page should have links to the about us page.
                <p>We added a link to the home page.</p>
            </li>
            <li>Every page had the same title, this made it somewhat unclear about where you were on the site.
                <p>We used PHP to change the titles of each page while still importing the top.</p>
                
            </li>
        </ol>
    </div>
</body>
</html>