<?php
class UserCache
{
    public $name;
    public $age;

    public function __construct($name, $age)
    {
        $this->name=$name;
        $this->age=$age;
    }
}

$user=new UserCache("Faisal", 50);

// file_put_contents('cache.txt', serialize($user));

$cachedUser=unserialize(file_get_contents('cache.txt'));

// echo $cachedUser->name;
var_dump($cachedUser);

