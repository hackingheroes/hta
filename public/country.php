<?php
include "../app/recipes/Recipes.php";
include "../app/search/City.php";
include "../app/search/Search.php";
include "../app/DB.php";
include "includes/header.php";

if(!isset($_GET['name'])) {
    // Redirect
}

?>

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
<?php $country_image = DB::query('SELECT country_image FROM `countries` WHERE name=:name', array(':name' => $_GET['name']))[0]['country_image']; ?>
<div class="title" style="background-image: url('<?= $country_image ?>')">
    <div class="text">
    <h1><?= $_GET['name']?></h1>
    </div>
</div>

<section class="cities">


    <h1>Cities</h1>

    <div id="works"  class=" clearfix grid">
        <?php
        $cities = Search::CitiesByCountry($_GET['name']);
        foreach ($cities as $city) { ?>
            <figure class="effect-oscar wowload fadeIn">
                <img src="<?= $city['city_image'] ?>"  style="width: 450px;"  alt="country-<?= $city['city'] ?>"/>
                <figcaption>
                    <h2><?= $city['city'] ?></h2>
                    <a href="city.php?cityfind=<?= $city['city'] ?>">Ver mais</a></p>
                </figcaption>
            </figure>
            <?php
        }


        ?>
    </div>

</section>

<section class="recipes">


    <h1>Recipes</h1>

    <div id="works"  class="clearfix grid">
        <?php
        $country_id = DB::query('SELECT id FROM `countries` WHERE name=:name', array(':name' => $_GET['name']))[0]['id'];
        $recipes = Recipes::getRecipes($country_id);
        if(is_array($recipes)) {
            foreach ($recipes as $recipe) { ?>
                <a href="recipes.php?id=<?= $recipe['id']?>" class="recipe" style="background-image: url('<?= $recipe['recipe_image'] ?>')">
                    <div class="recipe-content">
                    <span class="title">
                        <h1><?= $recipe['name'] ?></h1>
                    </span>
                    <span class="difficulty">
                        <p><?= $recipe['difficulty'] ?></p>
                    </span>
                    </div>
                </a>
                <?php
            }
        }
        ?>
    </div>

</section>