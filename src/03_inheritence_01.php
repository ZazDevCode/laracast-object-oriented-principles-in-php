<?php

class CoffeeMaker
{
    public function brew(){
        die(var_dump('Brewing the coffee'));
        
    }  
}

class SpecialtyCoffeeMaker extends CoffeeMaker
{
    public function brewLatte(){
        die(var_dump('Brewing a latte'));
    }
    
}

(new SpecialtyCoffeeMaker())->brewLatte();