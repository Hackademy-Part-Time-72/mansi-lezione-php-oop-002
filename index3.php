<?php


class Animal
{
    use Life;
}

class Person
{
    use Life;
}


trait Life
{
    public $name;

    public function eat()
    {
        echo "Mi chiamo {$this->name} e sto mangiando.\n";
    }
}
