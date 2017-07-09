<?php
include "../app/recipes/Recipes.php";
include "../app/search/City.php";
include "../app/DB.php";
include "includes/header.php";

if(!isset($_GET['id'])) {
    // Redirect...
}
$recipe = DB::query('SELECT * FROM `recepies` WHERE id=:id', array(':id' => $_GET['id']));

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
<div class="content">
<div class="left">

    <img class="recipe-image" src="<?= $recipe[0]['recipe_image'] ?>">
    <h1><?= $recipe[0]['name'] ?></h1>
    <h2>Difficulty: <?= $recipe[0]['difficulty']?></h2>

</div>
<hr>
<div class="right">

    <h1>Ingredients</h1>
    <div class="ingredients">
    <pre>
    <?= $recipe[0]['ingredients'] ?>
    </pre>
    </div>

    <h1>Make</h1>

    <div class="make">

    <?= nl2br($recipe[0]['make']) ?>
    </div>
</div>

</div>