<?php
class Person
{
    public string $firstname;
    public string $lastname;

    public function __construct(string $string1, string $string2)
    {
        //$this['firstname']  
        $this->firstname = $string1;
        $this->lastname = $string2;
    }

    public function hello()
    {
        echo "Ciao mi chiamo {$this->firstname} {$this->lastname} \n";
    }
}

class Teacher extends Person
{
    public int $work_hour;
    public function __construct(string $string1, string $string2, int $integer,)
    {
        parent::__construct($string1, $string2);
        $this->work_hour = $integer;
    }

    public function sumExtraHours(int $int)
    {
        $this->work_hour +=  $int;
    }
    public function hello()
    {
        echo "Ciao mi chiamo {$this->firstname} {$this->lastname}, sono un docente e lavoro {$this->work_hour} ore.\n";
    }
}
class Student extends Person
{
    public float $avg;

    public function __construct(string $string1, string $string2, float $floating)
    {
        parent::__construct($string1, $string2);
        $this->avg = $floating;
    }

    public function hello()
    {
        echo "Ciao mi chiamo {$this->firstname} {$this->lastname}, sono uno studente e ho la media voti di {$this->avg}.\n";
    }
}

//Mario Rossi
$person1 = new Student('Mario', 'Rossi', 7.5); //Studente con media dei voti
$person2 = new Teacher('Carlo', 'Bianchi', 160); // Docente con ore di lavoro

$person2->sumExtraHours(20);
$person2->sumExtraHours(10);
$person2->sumExtraHours(10);

$person1->sumExtraHours(10);

$person1->hello();
$person2->hello();

//Ciao mi chiamo Carlo Bianchi, sono un docente e lavoro 160 + (ore extra) ore.