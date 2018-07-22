<?php
/**
 * Created by PhpStorm.
 * User: abdujabbor
 * Date: 7/23/18
 * Time: 1:04 AM
 */

class RegularPrice extends Price
{

    public function getCharge(int $daysOfRented)
    {
        $charge = 2;
        if ($daysOfRented > 2) {
            $charge += ($daysOfRented - 2) * 15;
        }
        return $charge;
    }
}