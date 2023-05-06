**********ARRAY**********
It's simple to create:

<?php
$ingredients = [
'FARINHA',
'FERMENTO',
'OVO',
'MANTEIGA',
'CHOCOLATE'
];

to access each value:

echo $ingredients[`index`]


When you try to access an invalid item, for example, if it doesn't exist on the array you gonna get the ``note error``;
it's mean that you got a warning

---------- TO LINE BREAK ----------
you just need to concat to your echo a "</br/>" tag like on HTML

echo $ingredients=[0]."</br>";
-----------------------------------

;


*************************

``**********EXERCISE**********``
1-  Declare an array named "fruits" containing the following elements: "apple", "banana", "orange", "kiwi", "mango". 🆗

2-  Print the third element of the array "fruits". 🆗

3-  Add a new element "grape" to the end of the array "fruits". 🆗

4-  Remove the first element of the array "fruits". 🆗

5-  Use a loop to print out all the elements of the array "fruits". 🆗
``****************************``

**********SOLVING**********
<?php

// 1-
$fruits = [
    'apple',
    'banana',
    'orange',
    'kiwi',
    'mango'
];

// 2-
echo $fruits[2];

// 3-
$newElement = "Guava";
array_push($fruits, newElement);

// 4-
$copy = $fruits;
$firstElement = array_shift($copy);

// 5-

foreach($fruits as $fruit) {
    echo $fruit . "<br>"
}
;
***************************


**********ARRAY_SPREAD_OPERATOR**********
``NOTE: YOU CAN, ONLY, USE IT IF YOU PHP VERSION IS 7.4``

<?php
$fruits = [
    'apple',
    'banana',
    'orange',
    'kiwi',
    'mango'
];

% SPREAD_OPERATOR

SPREAD OPERATOR IS A FORM OF CLONE YOU ARRAY TO A NEW ONE, IT'S BETTER AND SIMPLY COPY ALL THE ITEMS AND PAST ON THE NEW ONE.

NOTE: YOU CAN ADD ITEM AFTER AND BEFORE AFTER THE SPREAD OPERATOR.


$newFruits=[
    ...$fruits,
    'Guava',
    'lime',
    'blueberry'
];

EXTRAR: print_r($array)
// use it to show a readble version of yor array;


foreach($newFruits as $fruit) {
    echo $fruits . "<br>";
}

;

*****************************************
        exercise of  variable 

<?php 
$list = [
    'nome' => "Gabriel",
    'idade' => 20,
    'attributts' => [
        'forca' => 60,
        'agilidade' => 80,
        'destreza' => 50
    ],
    $vida = 1000,
    $mana = 928,
];

echo 'NAME: '.$list['nome']. '<br>';
echo 'IDADE: '.$list['idade']. '<br>';
echo 'ATRIBUTOS: '.$list['attributts'] ['destreza'];
;


*****************************************