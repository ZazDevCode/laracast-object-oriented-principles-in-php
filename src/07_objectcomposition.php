<?php

// Object composition is when one class, has a pointer to another class
class Subscription
{
    protected Gateway $gateway;

    public function __construct(Gateway $gateway) {
        $this->$gateway = $gateway;
    }

    public function create(){
    
    }

    public function cancel(){
        // api request
        // find stripe customer
        $customer = $this->gateway->findCustomer();
        // find stripe subscription by customer
    }

    public function invoice(){
    
    }

    public function swap($newPlan){
    
    }
}

interface Gateway{
    public function findCustomer();
    public function findSubscriptionByCustomer();
}


class StripeGateway implements Gateway
{
    public function findCustomer(){
    
    }

    public function findSubscriptionByCustomer(){
    
    }
}

class BraintreeGateway implements Gateway
{
    public function findCustomer(){
    
    }

    public function findSubscriptionByCustomer(){
    
    }
}

new Subscription(new StripeGateway());