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

    /**
     * Movie constructor.
     * @param string $title
     * @param int $priceCode
     */
    public  function __construct(string $title, int $priceCode)
    {
        $this->setTitle($title);
        $this->setPriceCode($priceCode);
    }


    public function setPriceCode($priceCode):void {
        $this->priceCode = $priceCode;
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
}