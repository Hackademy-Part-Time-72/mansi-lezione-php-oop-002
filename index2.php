<?php
class Person
{
    private string $password = 'wdsfsdfsd';
    private string $firstname;
    public string $lastname;
    // protected string $password; //2

    public function __construct(string $string1, string $string2)
    {

        $this->firstname = $string1;
        $this->lastname = $string2;
    }

    public function setFirstname($string)
    {
        $this->firstname = $string;
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

    public function hello()
    {
        echo "Ciao mi chiamo {$this->firstname} {$this->lastname}, sono un docente e lavoro {$this->work_hour} ore.\n";
    }


    public function getFirstname()
    {
        echo $this->firstname;
    }

    public function setFirstname($string)
    {
        // $is_admin = true;
        // if ($is_admin) {
        $this->firstname = $string;
        // } else {
        //     echo "Non sei un admin";
        // }
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


$person = new Teacher('Francesco', 'Mansi', 89);
$person->setFirstname('Jack');
$person->getFirstname();

var_dump($person);
// $person->password = 'Ciccio';
// echo $person->password;
