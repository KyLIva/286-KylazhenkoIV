<?php

//1

$f = 5;
$d = gmp_fact($f);
echo $d;

echo '<br>', '<br>';


//2


$someArray = [
    'id' => 1,
    'name' => 'item1',
    'items' => [
        [
            'id' => 2,
            'name' => 'item2',
            'items' => [],
        ],
        [
            'id' => 3,
            'name' => 'item3',
            'items' => [],
        ],
        [
            'id' => 4,
            'name' => 'item4',
            'items' => [
                [
                    'id' => 5,
                    'name' => 'item5',
                    'items' => [],
                ],
                [
                    'id' => 6,
                    'name' => 'item6',
                    'items' => [],
                ],
            ],
        ],
    ]
];

function hoho($n)
{
    if (is_array($n)) {
        foreach ($n as $str) {
            hoho($str);
        }

    } else {

        echo "<li>$n</li>";
    }
}

hoho($someArray);


?>