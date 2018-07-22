<?php
/**
 * Created by PhpStorm.
 * User: abdujabbor
 * Date: 7/22/18
 * Time: 1:21 AM
 */

class Customer
{
    private $fullName;
    private $rentals = [];

    public function __construct($fullName)
    {
        $this->fullName = $fullName;
    }


    public function addRental(Rental $rental)
    {
        array_push($this->rentals, $rental);
    }

    public function getFullName()
    {
        return $this->fullName;
    }


    public function statement()
    {
        $totalAmount = 0;
        $frequentRenterPoints = 0;
        $outResult = "Учет аренды для" . $this->getFullName() . "\n";
        /**
         * @var $rentals []Rental
         */
        $rentals = new ArrayIterator($this->rentals);
        while ($rentals->valid()) {
            /**
             * @var $each Rental
             */
            $each = $rentals->current();
            $frequentRenterPoints+=$each->getMovie()->getFrequentRenterPoints($each->getDaysRented());
            $outResult .= "\t" . $each->getMovie()->getTitle() . "\t{$each->getMovie()->getCharge($each->getDaysRented())}\n";
            $totalAmount += $each->getMovie()->getCharge($each->getDaysRented());
        }
        //добавить нижний колонтитул
        $outResult .= "Сумма задолженности составляет {$totalAmount}\n";
        $outResult .= "Вы заработали {$frequentRenterPoints} очков за активность";
        return $outResult;
    }
}