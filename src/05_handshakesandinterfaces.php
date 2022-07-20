<?php

// Interface is a class without behavior
interface Newsletter
{
    // Only defining the contract
    public function subscribe($email);
}

class CampaignMonitor implements Newsletter
{
    public function subscribe($email){
        die('subscribing with Campaign Monitor');
    }
    
}

class Drip implements Newsletter
{
    public function subscribe($email){
        die('subscribing with Drip');
    }
    
}

class NewsletterSubscriptionController
{
    public function store(Newsletter $newsletter){
        $email = 'joe@example.com';
        $newsletter->subscribe($email);
    }
    
}

$controller = new NewsletterSubscriptionController();
$controller->store(new CampaignMonitor());