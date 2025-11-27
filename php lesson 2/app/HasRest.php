<?php

namespace App;



trait HasRest
{
    public function rest()
    {
       print_r(value:$this->getName() . 'has rest');
    }
}