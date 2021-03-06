<?php
namespace ModelContainer;

use Interfaces\Container;
use Model\JsonBase;
use Factory\MarketHistoryFactory;

// require_once "Model/JsonBase.php";
// require_once "Model/MarketHistory.php";

class MarketHistoryContainer extends JsonBase implements Container
{
    public $marketHistories;
    
    
    function __construct(){
        $this->marketHistories = array();
    }
    
    public function expose() {
        return get_object_vars($this);
    }
    
    
    public function add($marketHistory)
    {
        array_push($this->marketHistories,$marketHistory);
    }
    
    public function getIndex(String $name) {
        
        for($i=0;$i<count($this->getOrderBooks());$i++){
            $m = MarketHistoryFactory::create();
            $m->setMarketHistory($this->getItem($i));
            
            if($m->getMarket() == $name)
                return $i;
        }
        
        return null;
        
    }
    
    public function getItem(Int $index)
    {
        return $this->marketHistories()[$index];
    }
    /**
     * @return mixed
     */
    public function getMarketHistories()
    {
        return $this->marketHistories;
    }

    /**
     * @param mixed $marketHistories
     */
    public function setMarketHistories($marketHistories)
    {
        $this->marketHistories = $marketHistories;
    }

    
    
    
    
    

    
    
    
}

