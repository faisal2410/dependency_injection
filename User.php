<?php
class User
{
    public $name;
    public $id;

    public function __construct($name)
    {
        $this->name=$name;
        $this->id=rand(1000,9999);
    }

    public function __clone()
    {
        $this->id=rand(1000,9999);
    }


}

$user1=new User("Faisal");

$user2=clone $user1;
// $user2=$user1;


$user2->name="Talha";

echo $user1->name;
echo PHP_EOL;
echo $user2->name;
echo PHP_EOL;
echo "user1 id====>". $user1->id;
echo PHP_EOL;
echo "user2 id====>". $user2->id;