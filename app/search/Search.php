<?php


class Search {

    /*
     * Search the cities of a country
     * $country can be the country_id or the country_name
     */
    public static function CitiesByCountry($country)
    {

        if (DB::query('SELECT * FROM `countries` WHERE name=:country OR id=:country', array(':country' => $country))) {
            $countryid = DB::query('SELECT id FROM `countries` WHERE name=:country OR id=:country', array(':country' => $country))[0]['id'];
            return DB::query('SELECT * FROM `cities` WHERE country_id=:country', array(':country' => $countryid));

        } else {
            throw new Error('Error');
        }

    }

    /*
     * Search cities by city id or city_name
     */
    public static function Cities($city)
    {

        if (DB::query('SELECT * FROM `cities` WHERE (city=:city OR id=:city)', array(':city' => $city))) {

            return DB::query('SELECT * FROM id WHERE city=:city OR id=:city', array(':city' => $city))[0]['id'];

        } else {
            throw new Error('Error');
        }

    }

    public static function getCityById($city)
    {
            return DB::query('SELECT id FROM `cities` WHERE LOWER(city)=LOWER(:city)', array(':city' => $city))[0]['id'];
    }

}