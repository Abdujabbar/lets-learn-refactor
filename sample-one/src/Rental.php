<?php
/**
 * Created by PhpStorm.
 * User: abdujabbor
 * Date: 7/22/18
 * Time: 1:21 AM
 */

class Rental
{
    private $movie;
    private $daysRented;


    public function __construct(Movie $movie, int $daysRanted)
    {
        $this->movie = $movie;
        $this->daysRented = $daysRanted;
    }


    public function getMovie() {
        return $this->movie;
    }

    public function getDaysRented() {
        return $this->daysRented;
    }


}