<?php

include "../app/search/City.php";
include "../app/search/Search.php";
include "../app/DB.php";
?>

<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Baloo" rel="stylesheet">

</head>
<body>
<?php
if(isset($_GET['search'])) {
        if(Search::getCityById($_GET['search'])) {
            $id = Search::getCityById($_GET['search']);
            $city_one = new City($id);
            echo
            "
        <div class=\"attra\">
        <section class=\"attraction\">";
            echo "<div class =\"city\">";
            echo "<h1>". $city_one->getName() . "</h1>";
            echo "<h1>" . $city_one->getCountry() . "</h1>";
            echo " <img src=\"foto/1.jpg\">";
            echo "<p>" . $city_one->getDescription() . "</p>";
            echo "</div>";
            echo "</section>";

        }
}
            ?>
</body>