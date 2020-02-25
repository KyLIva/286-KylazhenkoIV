<?php

Class Zmeuka
{

    public $name, $state;

    function __construct($name)
    {
        $this->name = $name;
        $this->state = '>-------------------';
    }

    function chek()
    {
        echo "<p>$this->state = position of $this->name after chek</p>";
    }

    function move($step)
    {
        for ($i = 0; $i < $step; $i++) {
            $n = substr($this->state, -1);
            if ($n != '-') {
                $c = strlen($this->state) - 1;
                echo "<p>The place is over, ", $step - $c, " steps were not completed</p>";
                break;
            } else {
                $this->state = substr($this->state, 0, -1);
                $this->state = substr_replace($this->state, '*', 0, 0);
                echo "<p>$this->state = position of $this->name after move</p>";
            }
        }
    }
}

$Zmeica = new Zmeuka('First snake');
$Zmeica->chek();
$Zmeica->move(20);


?>