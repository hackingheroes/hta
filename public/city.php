<?php
include "../app/recipes/Recipes.php";
include "../app/search/City.php";
include "../app/search/Search.php";
include "../app/DB.php";
include "includes/header.php";

if(!isset($_GET['cityFind'])) {
    // Redirect
}
if(!DB::query('SELECT * FROM `cities` WHERE LOWER(city)=LOWER(:name)', array(':name' => $_GET['cityfind']))) {
    echo "<h1>SORRY, WE DON'T HAVE THIS CITY ON OUR DATABASE</h1>";
    echo "<a style=\"text-decoration: none; color: #000;\" href='index.php'><h2>Return</h2></a>";
    return;
}
$city = DB::query('SELECT * FROM `cities` WHERE LOWER(city)=LOWER(:name)', array(':name' => $_GET['cityfind'])); ?>


<?php $city_image = DB::query('SELECT city_image FROM `cities` WHERE LOWER(city)=LOWER(:name)', array(':name' => $_GET['cityfind']))[0]['city_image']; ?>
<nav id="siteNav" class="navbar navbar-default navbar-fixed-top" role="navigation" style="background-color: #fff;">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php" style="color: #000;">
                <span class="glyphicon glyphicon-plane" style="color: #000;"></span>
                Holiday Trip Advisor
            </a>
        </div>

    </div>
</nav>
<div class="title" style="background-image: url('<?= $city_image ?>')">
    <div class="text">
        <h1><?= $city[0]['city']?></h1>
    </div>
</div>

<div class="content">
<section class="description">


    <h1>Description</h1>

        <?php
        $description = DB::query('SELECT description FROM `cities` WHERE LOWER(city)=LOWER(:city)', array(':city' => $_GET['cityfind']))[0]['description'];
        echo "<p>" . $description. "</p>";
        ?>

</section>

<section class="googlemaps">

    <h1>Google Maps</h1>
    <?php
    $maps = DB::query('SELECT google_maps FROM `cities` WHERE LOWER(city)=LOWER(:city)', array(':city' => $_GET['cityfind']))[0]['google_maps'];
    ?>
    <iframe src="<?= $maps ?>" style="width: 100%;" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</section>
</div>