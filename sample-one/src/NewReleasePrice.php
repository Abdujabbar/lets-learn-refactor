<?php
/**
 * Created by PhpStorm.
 * User: abdujabbor
 * Date: 7/23/18
 * Time: 1:03 AM
 */

class NewReleasePrice extends Price
{

    public function getCharge(int $daysOfRented)
    {
        return  $daysOfRented * 3;
    }
}