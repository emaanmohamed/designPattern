<?php


namespace Structural\Composite;


class GiftBox implements ProductInterface, GiftInterface
{
    private $giftPrice;

    public function __construct(string $price, string $giftPrice)
    {
        $this->price = $price;
        $this->giftPrice = $giftPrice;
    }

    public function getPrice()
    {
        return $this->giftPackagePrice() + $this->price;
    }

    public function giftPackagePrice()
    {
       return $this->giftPrice;
    }

}