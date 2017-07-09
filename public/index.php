<?php
include "../app/recipes/Recipes.php";
include "../app/search/City.php";
include "../app/DB.php";
include "includes/header.php";
?>

<header>


    <div class="header-opacity"></div>

    <nav id="siteNav" class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">
                    <span class="glyphicon glyphicon-plane"></span>
                    Holiday Trip Advisor
                </a>
            </div>

        </div>
    </nav>


    <div class="header-content">
        <div class="header-content-inner">
            <h2> SEARCH FOR A CITY </h2>
            </br>
            </br>
            <form action="city.php" method="get">
                <input style="width:75%" type="text" name="cityfind" value=""  class="btn btn-primary btn-lg" placeholder="SEARCH FOR A CITY">
            </form>

        </div>
    </div>
</header>


<section class="intro">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">

                <h2 class="section-heading"> COUNTRIES </h2>
                <p class="text-light">
            </div>
        </div>
</section>

<!-- header -->
<div id="works"  class=" clearfix grid">

   <?php
   include "../app/view/Country.php"; ?>
</div>



<!-- jquery -->
<script src="assets/jquery.js"></script>

<!-- wow script -->
<script src="assets/wow/wow.min.js"></script>


<!-- boostrap -->
<script src="assets/bootstrap/js/bootstrap.js" type="text/javascript" ></script>

<!-- jquery mobile -->
<script src="assets/mobile/touchSwipe.min.js"></script>
<script src="assets/respond/respond.js"></script>

<!-- gallery -->
<script src="assets/gallery/jquery.blueimp-gallery.min.js"></script>

<!-- custom script -->
<script src="assets/script.js"></script>

<script src="assets/js/custom.js"></script>
<script src="assets/js/jquery.easing.min.js"></script>
<script src="assets/js/ie10-viewport-bug-workaround.js"></script>

</body>
</html>
