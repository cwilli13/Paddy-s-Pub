<?php
$title='About Us';
include 'top.php';
?>

<body>
    <?php 
    include 'header.php';
    include 'nav.php';
    ?>
<section id="main">
    <h1>About Us</h1>
    <div id="hours">
        <h2>Our Hours:</h2>
            <ul>  
                <li>We are open every day from Noon to 3am</li>
            </ul>

    </div>  <!-- END div #hours -->

    <div id="aboutUsContact">
        <h2>Contact Us</h2>
        <div class='contact'>
            
            <p class='address'>
                Paddy's Pub,<br>
                Dickinson St. and 3rd Ave,<br>
                Philadelphia, PA 19147, <br>
                <a href="https://www.google.com/maps/place/Dickinson+St+and+S.+3rd+Ave,+South+Philadelphia,+PA" >Get directions</a><br>
               Phone: (215) 555-0199
            </p>
        </div><!-- END div .contact -->

    </div>  <!-- END div #aboutUsContact -->

            <br />
            <hr />
            <br />

    <h1>Our Staff</h1>

     <div class="employee">

         <h2>Dennis Reynolds</h2>

        <div class="employeeImage">
            <img src="images/dennis1.jpg" alt="Dennis" />
        </div>

        <p class="employeeBlurb">Dennis is a co-owner and occasional bartender of Paddy's Pub.  </p>

    </div>

    <div class="employee">

        <h2>Ronald "Mac" McDonald</h2>

        <div class="employeeImage">
            <img src="images/mac1.jpg" alt="Mac" />
        </div>

        <p class="employeeBlurb">Mac is a co-owner of Paddy's Pub and is responsible for security as the "sheriff of Paddy's".</p>

    </div>

     <div class="employee">

        <h2>Deandra "Sweet Dee" Reynolds</h2>

        <div class="employeeImage">
            <img src="images/dee1.jpg" alt="Dee" />
        </div>
   

        <p class="employeeBlurb">Dee is the main bartender at Paddy's Pub.</p>

    </div>

    <div class="employee">

         <h2>Frank Reynolds</h2>

        <div class="employeeImage">
            <img src="images/frank.png" alt="Frank" />
        </div>
 

        <p class="employeeBlurb">Frank is Dennis and Dee's father and the Landlord of Paddy's Pub.  He uses his fatherly instinct and experience
            to help manage the pub.</p>

    </div>

     <div class="employee">

         <h2>Charlie Kelly</h2>

        <div class="employeeImage">
            <img src="images/Charlie.jpg" alt="Charlie" />
        </div>


        <p class="employeeBlurb">Charlie was a co-owner at Paddy's pub, but traded all his stocks for "goods and services", 
            half a sandwich, and other unnamed reasons.  Now Charlie is responsible for "Charlie Work". </p>
        
    </div>

</section>

<?
include ("footer.php");
?>

</body>
</html>
