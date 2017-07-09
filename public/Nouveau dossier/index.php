<?php include 'head.php'; ?>
        <div class="indexfinder">
    <h1>CHOOSE A CITY</h1>
    <form action="test.php" method="get">
        <input type="text" name="search" value="" class="mainsearch" placeholder="SEARCH FOR A CITY">
        </div>

    </form>
    <?php
    Recipes::getRecipes(1);
    include "../app/view/Country.php";
 include 'foot.php'; ?>
