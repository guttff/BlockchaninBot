<?php
namespace Model;


// require_once "Model/JsonBase.php";

class OrderBase extends JsonBase
{
    public $quantity;
    public $rate;
    
    /**
     * @return $quantity
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param $quantity
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    /**
     * @return $rate
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * @param $rate
     */
    public function setRate($rate)
    {
        $this->rate = $rate;
    }
}
?>
