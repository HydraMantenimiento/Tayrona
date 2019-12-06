<?php

namespace App;

class Cartproduct
{
    public $items = null;
    public $totalQty = 0;
    public $totalPrice = 0;

    public function __construct($oldCart)
    {
        if ($oldCart){
            $this->items = $oldCart->items;
            $this->totalQty = $oldCart->totalQty;
            $this->totalPrice = $oldCart->totalPrice;
        }
    }

    public function add($item, $id , $cant){
        $storedItem = ['qty'=>0, 'precio'=>$item->precio, 'item'=>$item];
        if ($this->items){
            if (array_key_exists($id, $this->items)){
                $storedItem = $this->items[$id];
            }
        }
        if ($cant > 1 ) {
            $storedItem['qty'] = $cant;
        }else{
            $storedItem['qty']++;
        }
        $storedItem['precio'] = $item->precio * $storedItem['qty'];
        $this->items[$id] = $storedItem;
        $this->totalQty++;
        $this->totalPrice += $item->precio;

    }

    public function reduceByOne($id){
        $this->items[$id]['qty']--;
        $this->items[$id]['precio'] -= $this->items[$id]['item']['precio'];
        $this->totalQty--;
        $this->totalPrice -= $this->items[$id]['item']['precio'];

        if ($this->items[$id]['qty']<= 0){
            $this->totalQty -= $this->items[$id]['qty'];
            $this->totalPrice -= $this->items[$id]['precio'];
            unset($this->items[$id]);
        }
    }



}

