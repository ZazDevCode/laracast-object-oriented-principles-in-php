<?php

// With absctract:
// - You remove the ability to instantiate the class directly
// - It's a template
abstract class AchievementType
{
    public function name(){
        $class = (new ReflectionClass($this))->getShortName();
        return trim(preg_replace('/[A-Z]/', ' $0', $class));
    }

    public function icon(){
        return strtolower(str_replace(' ', '-', $this->name())).'.png';
    }

    // Abstract means 'there is no actual code here'
    // If you are going to extend the abstract class, 
    // you have to provide all the abstract methods in the abstract class.
    abstract public function qualifier($user);
}

// If your create a new achievement, 
// you inherit the (default base) abstract class / default functionality
class FirstThousandPoints extends AchievementType
{
    public function qualifier($user){
    
    }  
}


$achievement = new ReachTop50();
echo $achievement->qualifier('user');