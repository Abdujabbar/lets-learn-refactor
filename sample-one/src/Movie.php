<?php
/**
 * Created by PhpStorm.
 * User: abdujabbor
 * Date: 7/22/18
 * Time: 1:21 AM
 */

class Movie
{
    const NEW_RELEASE = 0;
    const REGULAR = 1;
    const CHILDRENS = 2;

    private $title;
    private $priceCode;
    private $price;

    /**
     * Movie constructor.
     * @param string $title
     * @param int $priceCode
     * @throws Exception
     */
    public  function __construct(string $title, int $priceCode)
    {
        $this->setTitle($title);
        $this->setPriceCode($priceCode);
    }

    /**
     * @param $priceCode
     * @throws Exception
     */
    public function setPriceCode($priceCode):void {
        $this->priceCode = $priceCode;
        switch ($this->getPriceCode()) {
            case self::REGULAR:
                $this->price = new RegularPrice();
                break;
            case self::NEW_RELEASE:
                $this->price = new NewReleasePrice();
                break;
            case self::CHILDRENS:
                $this->price = new ChildrenPrice();
                break;
            default:
                throw new Exception("Invalid price code");
                break;
        }
    }

    public function getPriceCode() : int {
        return $this->priceCode;
    }


    public function getTitle() : string {
        return $this->title;
    }

    public function setTitle($title) {
        $this->title = $title;
    }


    public function getCharge(int $daysRented) {
        return $this->getCharge($daysRented);
    }

    public function getFrequentRenterPoints(int $daysRented) {
        // бонус за аренду новинки на два дня
        if (($this->getPriceCode() == Movie::NEW_RELEASE) &&
            $daysRented > 1) {
            return 2;
        }
        return 1;
    }
}