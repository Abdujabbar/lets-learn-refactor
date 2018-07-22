<?php
/**
 * Created by PhpStorm.
 * User: abdujabbor
 * Date: 7/23/18
 * Time: 1:04 AM
 */

class ChildrenPrice extends Price
{

    public function getCharge(int $daysOfRented)
    {
        $charge = 15;
        if ($daysOfRented > 3) {
            $charge += ($daysOfRented - 3) * 15;
        }
        return $charge;
    }
}