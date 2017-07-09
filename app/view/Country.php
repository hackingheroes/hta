<?php
$countries = DB::query('SELECT * FROM `countries`', array(''));
foreach($countries as $country) {?>

    <figure class="effect-oscar  wowload fadeIn">
        <img src="<?= $country['country_image']?>" alt="country-<?= $country['name'] ?>"/>
        <figcaption>
            <h2><?= $country['name'] ?></h2>
                <a href="country.php?name=<?= $country['name'] ?>" >Ver mais</a></p>
        </figcaption>
    </figure>

<?php
}