<?php

class Animal

{

    public $name, $age, $smoke, $Alkogol, $ha, $ga, $text;


    public function texst()
    {
        echo "$this->name say: ";
        return $this->text;
        echo '<br>';
        echo '<br>';
    }

    public function Imi()
    {
        echo "$this->name is";
    }

    public function goda()
    {
        global $nachalo_year;
        global $Dni;

        $nachalo_year = ($this->age / 4);
        $Dni = $nachalo_year * (365 * 3 + 366);

        echo " $Dni day old: ";
        echo '<br>';
    }

    public function kuril()
    {
        if ("$name smoke a n cigarette in day ") {
            global $kurevo;

            $kurevo = ($this->smoke * 4);


            echo $kurevo;
            echo " loses days of his life in a year due to sigerat. ";
            echo '<br>';
        }
    }

    public function alcogoli()
    {
        global $kolichestvo_alkogol;
        global $Dni;
        global $alkogol;

        echo " Daily intake of alcohol-1 bottle takes 6.6 hours of life. ";
        echo '<br>';

        $kolichestvo_alkogol = ($this->Alkogol);
        $alkogol = 102.3 * $kolichestvo_alkogol;

        echo $alkogol;
        echo " alcohol takes away days of life every year.";
        echo '<br>';
    }


    public function smerti()
    {
        global $alkogol;
        global $Dni;
        global $kurevo;
        global $ostalos_dney;

        $ostalos_dney = $Dni - $kurevo - $alkogol;

        echo $ostalos_dney;
        echo " Day left to live $name. ";
        echo '<br>';
    }


    public function smert()
    {
        global $ostalos_let;
        global $ostalos_dney;
        global $let;

        $ostalos_let = $ostalos_dney / ((365 * 3 + 366) * 4);
        $let = sprintf('%0.2f', $ostalos_let);


        echo $let;
        echo " Years left to live.";
        echo '<br>';
    }
}


$Animal = new Animal();
$Animal->name = "Holum";
$Animal->age = 14410;
$Animal->smoke = 12350;
$Animal->text = "ahu";
$Animal->Alkogol = 2;


echo "$Animal->name is $Animal->age year, ";
echo '<br>';

echo $Animal->Imi();
echo $Animal->goda();
echo $Animal->texst();
echo '<br>';
echo $Animal->kuril();
echo $Animal->alcogoli();
echo $Animal->smerti();
echo $Animal->smert();


?>