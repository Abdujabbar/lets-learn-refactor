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


    public function addRental(Rental $rental) {
        array_push($this->rentals, $rental);
    }

    public function getFullName() {
        return $this->fullName;
    }


    public function statement() {
//        $totalAmount = 0;
//        $frequentRenterPoints = 0;
//
//        $result = "Учет аренды для" + $this->getFullName() . "\n";
//        $rentals = new ArrayIterator($this->rentals);
//        while ($rentals->current()) {
//            double thisAmount = 0;
//   Rental each = (Rental) rentals.nextElement();
//   //определить сумму для каждой строки
//   switch (each.getMovie().getPriceCode()) {
//       case Movie.REGULAR:
//           thisAmount += 2;
//           if (each.getDaysRented() > 2){
//               thisAmount += (each.getDaysRented() - 2) * 15;
//           }
//           break;
//       case Movie.NEW_RELEASE:
//           thisAmount += each.getDaysRented() * 3;
//           break;
//       case Movie.CHILDRENS:
//           thisAmount += 15;
//           if (each.getDaysRented() > 3){
//               thisAmount += (each.getDaysRented() - 3) * 15;
//           }
//           break; }
//   // добавить очки для активного арендатора
//   frequentRenterPoints ++;
//   // бонус за аренду новинки на два дня
//   if ((each.getMovie().getPriceCode() == Movie.NEW_RELEASE) &&
//       each.getDaysRented() > 1) {
//       frequentRenterPoints ++;
//   }
//     result += “\t” + each.getMovie().getTitle()+ “\t” +
//         String.valueOf(thisAmount) + “\n”;
//   totalAmount += thisAmount;
// }
// //добавить нижний колонтитул
// result += “Сумма задолженности составляет” +
//        String.valueOf(totalAmount) + “\n”;
// result += “Вы заработали ” + String.valueOf(frequentRenterPoints) +
//        “очков за активность”;
// return result,
    }
}