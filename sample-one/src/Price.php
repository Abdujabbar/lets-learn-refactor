<?php
/**
 * Created by PhpStorm.
 * User: abdujabbor
 * Date: 7/23/18
 * Time: 1:03 AM
 */

abstract class Price
{
    abstract public function getCharge(int $daysOfRented);
}