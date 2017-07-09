<?php


class City
{

    private $id;
    private $name;
    private $description;
    private $google_maps;
    private $country;

    /**
    * City constructor.
    * @param $id
    */
    public function __construct($id)
    {
        if(DB::query('SELECT * FROM `cities` WHERE id=:id', array(':id' => $id))) {
            $this->id = $id;
            $this->name = DB::query('SELECT city FROM `cities` WHERE id= :id', array(':id' => $id))[0]['city'];
            $this->description = DB::query('SELECT description FROM `cities` WHERE id=:id', array(':id' => $id))[0]['description'];
            $this->google_maps = DB::query('SELECT google_maps FROM `cities` WHERE id=:id', array(':id' => $id))[0]['google_maps'];
            $this->country = DB::query('SELECT country FROM `cities` WHERE id=:id', array(':id' => $id))[0]['country'];
        } else {
            throw new Exception('That city is not in our database');
        }
    }



    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return mixed
     */
    public function getGoogleMaps()
    {
        return $this->google_maps;
    }

    /**
     * @return mixed
     */
    public function getCountry()
    {
        return $this->country;
    }






}