<?php

class Recipes
{

    public static function getRecipes($countryid) {

        if(DB::query('SELECT * FROM `countries` WHERE id=:countryid', array(':countryid' => $countryid))) {
            return DB::query('SELECT * FROM `recepies` WHERE country_id=:countryid', array(':countryid' => $countryid));

            /*  foreach($recipes as $recipe) {?>
                <div class="recipe">
                    <img src="<?= $recipe['recipe_image']?>" width="250px">
                    <span class="difficulty"><?= $recipe['difficulty'] ?></span>
                    <span class="title"><?= $recipe['name']?></span>
                </div>
<?php
            } */
        }

    }
}